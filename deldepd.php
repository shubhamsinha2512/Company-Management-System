<?php
    include_once "include/conn.cms.php";

    $id=intval($_GET['id']);

    $query="DELETE FROM DEPENDENT WHERE superssn=$id";

    $result=mysqli_query($connection, $query);

   
   //header("LOCATION: /employee/employee.php");

?>