<?php

    include_once "../include/conn.cms.php";

    $q = intval($_GET['q']);
    $query = "SELECT emp_name FROM Employee e WHERE e.ssn=$q;";

    $result = mysqli_query($connection, $query);
    $row=mysqli_fetch_array($result);
    if(mysqli_num_rows($result)>0){
        echo $row['emp_name'];
    }

?>  