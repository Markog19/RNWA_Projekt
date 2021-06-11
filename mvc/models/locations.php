<?php
  class Locations {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $location_id, $street_address,$postal_code,$city,$state_province,$country_id;



    public function __construct($location_id, $street_address,$postal_code,$city,$state_province,$country_id) {
      $this->location_id      = $location_id;
      $this->street_address  = $street_address;
      $this->postal_code = $postal_code;
      $this->city = $city;
      $this->state_province = $state_province;
      $this->country_id = $country_id;
      

    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM locations');


      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $locations) {
        $list[] = new Locations($locations['location_id'], $locations['street_address'], $locations['postal_code'],$locations['city'],
          $locations['state_province'],$locations['country_id']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM locations WHERE location_id = :id');
      $req->execute(array('id' => $id));
      $locations = $req->fetch();

      return new Locations($locations['location_id'], $locations['street_address'], $locations['postal_code'],$locations['city'],
          $locations['state_province'],$locations['country_id']);
    }
    public static function deleteLocation($id) {
      $db = Db::getInstance();
    $sql="DELETE FROM locations WHERE location_id ='$id'";
    
  if ($db->query($sql) == TRUE){
      $rez = "Uspjesno";
 }
      else {
       $rez="NESPJESNO brisanje";
      }
      return $rez;
  }
  public static function insertLocation($street_address,$postal_code,$city,$state_province,$country_id) {
      $db = Db::getInstance();
      $max_salary = intval($country_id);
      $sql="INSERT INTO locations (street_address, postal_code, city,state_province,country_id)
      VALUES ('$street_address', '$postal_code', '$city', '$state_province', '$country_id')";
      $db->query($sql);
    }

    public static function updateLocation($location_id, $street_address,$postal_code,$city,$state_province,$country_id) {
      $db = Db::getInstance();
      $min_salary = intval($location_id);
      $max_salary = intval($country_id);
      $sql="UPDATE locations SET street_address = '$street_address', postal_code='$postal_code', city = '$city', 
      state_province = '$state_province',country_id = '$country_id' WHERE location_id = '$location_id' ";
      $db->query($sql);
    }

    
}
  
  
?>