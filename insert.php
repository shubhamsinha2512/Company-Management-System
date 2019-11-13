<?php

    include_once 'include/db.inc.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $ins = "INSERT INTO abc VALUES($id, $name);";
    mysqli_query($conn, $ins);

    header("Location: phptest.php?enter=success");

?>