<?php

$s = $_REQUEST["s"];
$hint = "";
$output = "";

$sql = "SELECT * FROM employees";

if ($s !== "") {

    $s = strtolower($s);
    $len = strlen($s);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hr";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM employees where first_name LIKE '%$s%' OR last_name LIKE '%$s%' OR email LIKE '%$s%' OR employee_id LIKE '%$s%'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {


        $output .= "<table>
        <thead>
            <tr>
                <th>Id</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>hire_date</th>
                <th>job_id</th>
                <th>salary</th>
                <th>commission_pct</th>
                <th>manager_id</th>
                <th>department_id</th>
            </tr>
        </thead>";
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= "<tbody>
            <tr>
                <td>{$row['employee_id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone_number']}</td>
                <td>{$row['hire_date']}</td>
                <td>{$row['job_id']}</td>
                <td>{$row['salary']}</td>
                <td>{$row['commission_pct']}</td>
                <td>{$row['manager_id']}</td>
                <td>{$row['department_id']}</td>

            </tr>
            </tbody>";
        }

        $output .= "</table>";
        echo $output;

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<p>" . "Ime i prezime: " . $row["first_name"] . " " . $row["last_name"] . "</p>";
        }
    } else {
        echo "<p>Vaš upit nije pronađen u bazi podataka</p>";
    }

    $conn->close();

}

?>
	