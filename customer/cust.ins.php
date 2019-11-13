<?php

include_once "../include/conn.cms.php";

$custid = $_POST['custid'];
$custname = $_POST['custname'];
$rating = $_POST['rating'];
$city = $_POST['city'];
$servid = $_POST['servid'];
echo $custid."<br>";
echo $custname."<br>";
echo $rating."<br>";
echo $city."<br>";
echo $servid."<br>";

$query = "INSERT INTO CUSTOMER (cust_id, cust_name, rating, cust_city, serv_id) 

        VALUES($custid, '$custname', $rating, '$city', $servid);";

//$query = "INSERT INTO CUSTOMER (cust_name, rating, cust_city, serv_id) VALUES('Ratan Tata',5, 'Mumbai', 1);";

$result=mysqli_query($connection, $query) or die('insert falied');
echo mysqli_error($result);
header("LOCATION: customer.php?success=1");

?>