<?php

include_once "../include/conn.cms.php";

$superssn = $_POST['superssn'];
$dob = $_POST['dob'];
$sex = $_POST['sex'];
$relation = $_POST['relation'];
$depname = $_POST['depname'];


$query = "INSERT INTO DEPENDENT (superssn, depd_name, depd_sex, depd_dob, depd_rel) 
        VALUES($superssn, '$depname', '$sex', '$dob', '$relation');";

//  $query = "INSERT INTO DEPENDENT (superssn, depd_name, depd_sex, depd_dob, depd_rel) 
//    VALUES(1, 'shivam', 'm', '1998-02-12', 'son');";

$result=mysqli_query($connection, $query) or die('insert falied');
header("LOCATION: dependents.php?success=1");

?>