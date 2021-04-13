<?php
// include database connection file

include "dbConfig.php";

// fetch data from student table..

$output = "";
if (isset($_POST['query'])) {
    $search = mysqli_real_escape_string($con, $_POST['query']);
    $sql = "SELECT * FROM employees WHERE first_name LIKE '%$search%' || last_name LIKE '%$search%' || 
                email LIKE '%$search%' || employee_id LIKE '%$search%'";
    $query = mysqli_query($con, $sql);

} else {
    $sql = "SELECT * FROM employees ORDER BY employee_id DESC";
}

$query = mysqli_query($con, $sql);

if (mysqli_num_rows($query) > 0) {
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
    while ($row = mysqli_fetch_assoc($query)) {
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
} else {
    echo "<p>Vaš upit nije pronađen u bazi podataka</p>";
}


?>