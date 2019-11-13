<?php

include_once "../include/conn.cms.php";

$name = $_POST['name'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];
$salary = $_POST['salary'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$addres = $_POST['address'];
$projid = $_POST['projid'];
$depid = $_POST['depid'];


$query = "INSERT INTO EMPLOYEE (emp_name, dob, sex, emp_address, salary, contact, email, proj_id, dep_id) 
          VALUES('$name', '$dob', '$sex', '$addres', $salary, $contact, '$email', $projid, $depid);";


$result=mysqli_query($connection, $query) or die('insert falied');
header("LOCATION: employee.php?success=1");
?>