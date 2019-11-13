<?php

    include_once "../include/conn.cms.php";

    $q = intval($_GET['q']);

    $query_emp = "SELECT ssn, emp_name, sex, emp_address, salary FROM
                EMPLOYEE E WHERE e.proj_id=$q;";

    $result = mysqli_query($connection, $query_emp);
    
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result)){
            echo "<br>";
            echo "<tr>";
            echo "<td>".$row['ssn']."</td>";
            echo "<td>".$row['emp_name']."</td>";
            echo "<td>".$row['sex']."</td>";
            echo "<td>".$row['emp_address']."</td>";
            echo "<td>".$row['salary']."</td>";
            echo "</tr>";
        }
    }
?>