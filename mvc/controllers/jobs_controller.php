<?php
  class JobController {
    public function index() {
      // we store all the posts in a variable
      $jobs = Job::all();
      require_once('views/jobs/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $jobs = Job::find($_GET['id']);
      require_once('views/jobs/show.php');
    }
    public function deleteJob() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $job = Job::deleteJob($_GET['id']);
      require_once('views/jobs/delete.php');
    }
    public function verifyInsert(){
    require_once('views/jobs/create.php');


    }
    public function verifyUpdate(){
            $jobs = Job::find($_GET['id']);

          require_once('views/jobs/update.php');

    }
    public function insertJob()
    {
      Job::insertJobs($_POST['job_id'],$_POST['job_title'],$_POST['min_salary'],$_POST['max_salary']);
     return call('jobs', 'index');
    }
    public function updateJob()
  {
    if (!isset($_POST['job_id']))
      return call('pages', 'error');
      

  Job::updateJobs($_POST['job_id'],$_POST['job_title'],$_POST['min_salary'],$_POST['max_salary']);
   return call('jobs', 'index');
  }
  }
?>