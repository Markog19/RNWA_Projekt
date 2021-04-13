<?php

class DB
{

    private $con;
    private $host = "localhost";
    private $dbname = "hr";
    private $user = "root";
    private $password = "";

    public function __construct()
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;


        try {
            $this->con = new PDO($dsn, $this->user, $this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }

    public function viewData()
    {
        $query = "SELECT * from employees";
        $stmt = $this->con->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function searchData($name)
    {
        $query = "SELECT * FROM employees WHERE first_name LIKE :name OR last_name LIKE :name OR email LIKE :name OR employee_id LIKE :name";

        $stmt = $this->con->prepare($query);
        $stmt->execute(["name" => "%" . $name . "%"]);

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

}

?>