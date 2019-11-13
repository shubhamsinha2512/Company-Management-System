<?php
    include_once "../include/conn.cms.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../temp.css">
        <link rel="stylesheet" href="../table.disp.style.css">
        <link rel="stylesheet" href="../modal.css">
        <link rel="stylesheet" href="../input.modal.style.css">

        <!--Modal Style-->
        <style>

            .modal{
                display:none;
                min-height:250px;
            }
            
            .servid{
                margin-bottom:5px;
                font-size:12px;
                color:#36B5D5;
            }

            .emp-img{
                
                width:25%;
                position:absolute;
                top:90px;
                right:40px;
            }

            .left-band{
                background-color:#87A7B5;
            }

            .empname{
                line-height:1;
                marign-bottom:5px;
            }

            .foot{
                position:absolute;
                bottom:0;
            }
     
        </style>
        <!-- -->

        <style>

            .container{
                width:90%;
            }
            .heading{
                display: inline-block;
                text-align: left;
                padding: 10px;
            }
            
            .ins{
                position: relative;
                left:83%;
                color: white;
                font-weight: bold;
                width: 50px;
                height: 25px;
                border: none;
                border-radius: 5px;
                padding: 10px;
                background-color: #4F93BF;
                align-self: right;
                cursor:pointer;
            }

            hr{
                width: 100%;
            }

            td{
                cursor:pointer;
            }

            .desc{
                max-width:500px;
            }
        </style>
    </head>
    <body>
        <header>
            <div class="head">
            <a href="../index.php"><img src="../assets/cms-logo.png" alt="CMS LOGO" class="logo"></a>
                <div class="navlinkcon">
                <a class="navlinks" href="../employee/employee.php">EMPLOYEE</a>
                <a class="navlinks" href="../project/project.php">PROJECT</a>
                <a class="navlinks" href="../customer/customer.php">CUSTOMER</a>
                <a class="navlinks" href="../department/department.php">DEPARTMENT</a>
                <a class="navlinks" href="../dependent/dependents.php">DEPENDENT</a>
            </div>
            </div>
        </header>

                    <!--modal start-->

        <div class="modal employee">
            <div class="data-contaienr">
                <div class="left-band"></div>
                <p class="servid">SERV ID</p>
                <h1 class="servname">SERVICE NAME</h1>
                
                <br>
                <div class="details">
                    <p class="department">DEPARTMENT : <span class="dname" id="dname">XXXXXXXXXXXXXXXX</span></p>
                    <p class="descp">DESCRIPTION : <p class="desc">XXXXXXXXXXXXXXXX</p></p>
                    
                    <br>
                    <img src="../assets/icons/services.png" alt="employee image" class="emp-img">
                </div>
            </div>
            <span id="closebtn">&#x274c;</span>
        </div>



        <main>
            <div class="container">
                    <h2 class="heading" id="table_name">SERVICES</h2>
                    <hr/>

                    <div class="table_container">
                    <table class="table">
                    <?php

                        $ArrtibutesQuery = "SHOW COLUMNS FROM SERVICE;";
                        $getData = "SELECT * FROM SERVICE;";
                        $tableAttributes = mysqli_query($connection, $ArrtibutesQuery);
                        $tableData = mysqli_query($connection, $getData);
                        $attributesExist = mysqli_num_rows($tableAttributes);
                        $dataExist = mysqli_num_rows($tableData);

                        if($attributesExist > 0){
                            echo "<tr class='theading'>";
                            while($row = mysqli_fetch_array($tableAttributes)){
                                echo "<th>" .strtoupper($row["Field"]) ."</th>";
                            }
                            echo "</tr>";
                        }

                        if($dataExist > 0){
                            
                            while($row = mysqli_fetch_array($tableData)){
                                "<br>";
                                echo"<tr>";
                                echo "<td>".$row['serv_id']."</td>";
                                echo "<td>".$row['serv_name']."</td>";
                                echo "<td>".$row['serv_desc']."</td>";
                                echo "<td>".$row['dep_id']."</td>";
                                echo "</tr>";
                            }
                        }
                            ?>
                        </table>
                </div>
            </div>
        </main>



        <!-- Modal end -->

        <footer class="foot">
            <h3 class="">DBMS MINI PROJECT 2019</h3><br>
            <p>Created by Shubham Sinha & Shivam Tiwari</p>
        </footer>

        <script src="serv.modal.control.js"></script>
    </body>
</html>