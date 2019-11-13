<?php
    include_once "../include/conn.cms.php";

    $q=intval($_GET['q']);

    $query_name="SELECT emp_name FROM EMPLOYEE E WHERE e.dep_id=$q";

    $result=mysqli_query($connection, $query_name);
    $row=mysqli_fetch_array($result);
    if(mysqli_num_rows($result)){
        echo $row['emp_name'];
    }
?>