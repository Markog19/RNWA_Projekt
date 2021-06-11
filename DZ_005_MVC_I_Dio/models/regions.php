<?php
  class Regions {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $region_id, $region_name;



    public function __construct($region_id, $region_name) {
      $this->region_id      = $region_id;
      $this->region_name  = $region_name;
      
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM regions');


      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $regions) {
        $list[] = new Regions($regions['region_id'], $regions['region_name']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM regions WHERE region_id = :id');
      $req->execute(array('id' => $id));
      $locations = $req->fetch();

      return new Regions($regions['region_id'], $regions['region_name']);
    }
  }

    ?>