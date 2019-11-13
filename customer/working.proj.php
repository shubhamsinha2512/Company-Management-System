<?php
    include_once "../include/conn.cms.php";

    $q=intval($_GET['q']);

    $emp_query = "SELECT proj_id, proj_name, proj_deadline FROM
                PROJECT P WHERE p.cust_id=$q;";
    
    $result = mysqli_query($connection, $emp_query);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            echo "<br>";
            echo "<tr>";
            echo "<td>".$row['proj_id']."</td>";
            echo "<td>".$row['proj_name']."</td>";
            echo "<td>".$row['proj_deadline']."</td>";
            echo "</tr>";
        }
    }

?>