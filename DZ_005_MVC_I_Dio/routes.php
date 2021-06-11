<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
	  case 'countries':
        require_once('models/countries.php');
        require_once('models/regions.php');

		$controller = new CountriesController();
      break;
	   case 'jobs':
        require_once('models/jobs.php');
		$controller = new JobController();
      break;
      case 'locations':
              require_once('models/countries.php');
                      require_once('models/regions.php');

        require_once('models/locations.php');
        $controller = new LocationsController();
      break;
    }

    $controller->{ $action }();
  }

  $controllers = array('pages' 		=> ['home', 'error'],
                       'countries' 		=> ['index', 'show','deleteCountry','insertCountry','updateCountry','verifyinsert','verifyupdate'],
					   'jobs' => ['index', 'show','deleteJob', 'insertJob','updateJob','verifyinsert','verifyupdate'],
					   'locations' 	=> ['index', 'show','deleteLocation','insertLocation','updateLocation','verifyinsert','verifyupdate']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {

    call('pages', 'error');
  }
?>