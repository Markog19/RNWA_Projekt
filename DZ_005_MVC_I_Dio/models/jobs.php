<?php
  class Job  {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $job_id,$job_title, $min_salary, $max_salary;


    public function __construct($job_id,$job_title, $min_salary, $max_salary) {
      $this->job_id      = $job_id;
      $this->job_title  = $job_title;
      $this->min_salary  = $min_salary;
      $this->max_salary  = $max_salary;


    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM jobs');


      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $jobs) {
        $list[] = new Job($jobs['job_id'], $jobs['job_title'],$jobs['min_salary'], $jobs['max_salary']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $req = $db->prepare('SELECT * FROM jobs WHERE job_id = :id');
      $req->execute(array('id' => $id));
      $jobs = $req->fetch();

      return new Job($jobs['job_id'], $jobs['job_title'],$jobs['min_salary'], $jobs['max_salary']);
    }
	
	public static function deleteJob($id) {
        $db = Db::getInstance();
    $sql="DELETE FROM jobs WHERE job_id ='$id'";
    
  if ($db->query($sql) == TRUE){
      $rez = "Uspjesno";
 }
      else {
       $rez="NESPJESNO brisanje";
      }
      return $rez;
	  
}
 public static function insertJobs($job_id,$job_title, $min_salary, $max_salary) {
      $db = Db::getInstance();
      $min_salary = intval($min_salary);
      $max_salary = intval($max_salary);
      $sql="INSERT INTO jobs (job_id, job_title, min_salary, max_salary)
      VALUES ('$job_id', '$job_title', '$min_salary', '$max_salary')";
      $db->query($sql);
    }

    public static function updateJobs($job_id,$job_title, $min_salary, $max_salary) {
      $db = Db::getInstance();
      $min_salary = intval($min_salary);
      $max_salary = intval($max_salary);
      $sql="UPDATE jobs SET job_title = '$job_title', min_salary='$min_salary', max_salary = '$max_salary'
       WHERE job_id = '$job_id'";
      $db->query($sql);
    }

  }
?>