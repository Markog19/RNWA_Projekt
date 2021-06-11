<?php
  class CountriesController {
    public function index() {
      $countries = Countries::all();
      require_once('views/countries/index.php');
    }

    public function show() {

      if (!isset($_GET['id']))
        return call('pages', 'error');

      $country = Countries::find($_GET['id']);
      require_once('views/countries/show.php');
    }
    public function deleteCountry() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $country = Countries::deleteCountry($_GET['id']);
      require_once('views/countries/delete.php');
    }
    public function verifyInsert(){
            $regions = Regions::all();

require_once('views/countries/create.php');

    }
    public function insertCountry()
    {

      $region = Regions::all();
      Countries::insertCountry($_POST['country_id'],$_POST['country_name'],$_POST['region_id']);

     return call('countries', 'index');
    }
    public function verifyUpdate(){
        $regions = Regions::all();
        $countries = Countries::find($_GET['id']);

          require_once('views/countries/update.php');
}
          



    
    public function updateCountry()
  {
    if (!isset($_POST['country_id']))
      return call('pages', 'error');
      Countries::updateCountry($_POST['country_id'],$_POST['country_name'],$_POST['region_id']);
   return call('countries', 'index');
  }
  }
?>