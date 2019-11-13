<?php

include_once "../include/conn.cms.php";

$projid = $_POST['projid'];
$projname = $_POST['projname'];
$custid = $_POST['custid'];
$deadline = $_POST['deadline'];
$description = $_POST['description'];
$depid = $_POST['depid'];

echo $projid;
echo $projname;
echo $custid;
echo $deadline;
echo $description;
echo $depid;

$query = "INSERT INTO PROJECT (proj_id, proj_name, cust_id, proj_deadline, proj_desc, dep_id) 
        VALUES($projid, '$projname', $custid, '$deadline', '$description', $depid);";

//$query = "INSERT INTO CUSTOMER (cust_name, rating, cust_city, serv_id) VALUES('Ratan Tata',5, 'Mumbai', 1);";

$result=mysqli_query($connection, $query) or die('insert falied');
echo mysqli_error($result);
header("LOCATION: project.php?success=1");

?>