<?php
  class Countries {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $country_id, $country_name, $region_id;

    public function __construct($country_id, $country_name, $region_id) {
      $this->country_id      = $country_id;
      $this->country_name  = $country_name;
      $this->region_id = $region_id;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM countries');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $countries) {
        $list[] = new Countries($countries['country_id'], $countries['country_name'], $countries['region_id']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM countries WHERE country_id = :id');
      $req->execute(array('id' => $id));
      $countries = $req->fetch();
      
      return new Countries($countries['country_id'], $countries['country_name'], $countries['region_id']);
    }
       public static function deleteCountry($id) {
      $db = Db::getInstance();
    $sql="DELETE FROM countries WHERE country_id ='$id'";
    
  if ($db->query($sql) == TRUE){
      $rez = "Uspjesno";
 }
      else {
       $rez="NESPJESNO brisanje";
      }
      return $rez;
  }

  public static function insertCountry($country_id, $country_name, $region_id) {
      $db = Db::getInstance();
      $region_id = intval($region_id);
      $sql="INSERT INTO countries (country_id, country_name, region_id)
      VALUES ('$country_id', '$country_name', '$region_id')";
      $db->query($sql);
    }

    public static function updateCountry($country_id, $country_name, $region_id) {
      $db = Db::getInstance();
      $region_id = intval($region_id);
      $sql="UPDATE countries SET country_name = '$country_name', region_id='$region_id' WHERE country_id = '$country_id' ";
      $db->query($sql);
    }

  }
?>