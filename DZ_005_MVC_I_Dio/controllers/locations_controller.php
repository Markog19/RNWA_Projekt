<?php
  class LocationsController {
    public function index() {

      $locations = Locations::all();
      require_once('views/locations/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $locations = Locations::find($_GET['id']);
      require_once('views/locations/show.php');
    }
	public function deleteLocation() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $locations = Locations::deleteLocation($_GET['id']);
      require_once('views/locations/delete.php');
    }
    public function verifyInsert(){
      $countries = Countries::all();

require_once('views/locations/create.php');

    }
    public function insertLocation()
    {

      Locations::insertLocation($_POST['street_address'],$_POST['postal_code'],$_POST['city'],$_POST['state_province'],
        $_POST['country_id']);
     return call('locations', 'index');
    }
    public function verifyUpdate(){
      $locations = Locations::find($_GET['id']);
      $countries = Countries::all();
    require_once('views/locations/update.php');


    }
    public function updateLocation()
  {
    if (!isset($_POST['street_address']))
      return call('pages', 'error');

      Locations::updateLocation($_POST['location_id'],$_POST['street_address'],$_POST['postal_code'],$_POST['city'],$_POST['state_province'],
        $_POST['country_id']);
   return call('locations', 'index');
  }
  }
?>