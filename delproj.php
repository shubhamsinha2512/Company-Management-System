<?php
    include_once "include/conn.cms.php";

    $id=intval($_GET['id']);

    $query="DELETE FROM PROJECT WHERE proj_id=$id";

    $result=mysqli_query($connection, $query);

   
   //header("LOCATION: /employee/employee.php");

?>