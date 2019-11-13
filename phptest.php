<?php

    include_once 'include/db.inc.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>

        <form action="insert.php" class="dataform" method="POST">
            ID: <input type="text" name="id"><br>
            NAME: <input type="text" name="name">
            <button type="submit" name="submit">Enter</button>
        </form>

        <?php

            $sql = "SELECT * FROM abc;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo $row['name']. "<br>";
                }
            }
        ?>
    </body>
</html>
