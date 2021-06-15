<?php

function get_employees($id=0)
	{
	global $connection;
	$query="SELECT * FROM employees";
	if($id != 0)
	{
		$query.=" WHERE employee_id=".$id." LIMIT 1000";
	}
	$response=array();
	$result=mysqli_query($connection, $query);
	while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
	{
		$response[]=$row;
	}
	header('Content-Type: application/json');
	echo json_encode($response);
	}

function insert_employee()
	{
		global $connection;

		$data = json_decode(file_get_contents('php://input'), true);
		$employeeId	=$data["employee_id"];
		$lastName			=$data["lastName"];
		$firstName			=$data["firstName"];
		$email				=$data["email"];
		$phoneNumber		=$data["phone_number"];
		$hire_date			=$data["hire_date"];
		$job_id				=$data["job_id"];
		$salary 			=$data["salary"];
		$manager_id			=$data["manager_id"];
		$depart_id			=$data["department_id"];
		
		echo $query="INSERT INTO employees VALUES (NULL, '".$employeeNumber."','".$lastName."','".$firstName."','".$extension."','".$email."','".$officeCode."','".$reportsTo."','".$jobTitle."',NOW())";
		if(mysqli_query($connection, $query))
		{
			$broj_redaka = mysqli_affected_rows($connection);
			$response=array(
				'status' => 1,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Employee Added Successfully.'
			);
		}
		else
		{
			$broj_redaka = mysqli_affected_rows($connection);
			$response=array(
				'status' => 0,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Employee Addition Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
function update_employee($id)
	{
		global $connection;
		$post_vars 			= json_decode(file_get_contents("php://input"),true);
		$employeeId			=$data["employee_id"];
		$lastName			=$data["lastName"];
		$firstName			=$data["firstName"];
		$email				=$data["email"];
		$phoneNumber		=$data["phone_number"];
		$hire_date			=$data["hire_date"];
		$job_id				=$data["job_id"];
		$salary 			=$data["salary"];
		$manager_id			=$data["manager_id"];
		$depart_id			=$data["department_id"];
		
		$query="UPDATE employees SET lastName='".$lastName."', firstName='".$firstName."', phone_number='".$phone_number."', email='".$email."', hire_date='".$hire_date."', job_id='".$job_id."', salary='".$salary."', manager_id='".$manager_id."', department_id='".$depart_id."' WHERE employee_id=".$id;
		
		$result=mysqli_query($connection, $query);
		$broj_redaka = mysqli_affected_rows($connection);;
		
		if($result)
		{
			$response=array(
				'status' => 1,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Employee Updated Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'query' => $query,
				'broj_redaka' => $broj_redaka,
				'status_message' =>'Employee Updation Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}

function delete_employee($id)
	{
	global $connection;
	$query="DELETE FROM employees WHERE employee_id=".$id;
	if($result = mysqli_query($connection, $query))
	{
		$response=array(
			'status' => 1,
			'status_message' =>'Employee Deleted Successfully.'
		);
	}
	else
	{
		$response=array(
			'status' => 0,
			'status_message' =>'Employee Deletion Failed.'
		);
	}
	header('Content-Type: application/json');
	echo json_encode($response);
	}


?>
