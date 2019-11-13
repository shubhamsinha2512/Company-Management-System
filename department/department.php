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
                position:absolute;
                top:50px;
                max-height:400px;
                overflow:auto;
            }
            
            .dep_id{
                margin-bottom:5px;
                font-size:12px;
                color:#36B5D5;
            }

            .dep-img{
                width:25%;
                position:absolute;
                top:100px;
                right:40px;
            }

            .left-band{
                background-color:#175FB4;
            }

            .dep_name{
                line-height:1; 
            }
            
            tr{
                cursor:pointer;
                background-color:#E1E1E1;
            }
            hr{
                width: 100%;
            }

            #work-emp, #work-proj{
                width:60%;
            }

            #work-emp td{
                padding:10px;
                cursor:pointer;
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
                left:900px;
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

            .foot{
                position:fixed;
                bottom:0px;
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
                <a class="navlinks" href="../services/services.php">SERVICE</a>
                <a class="navlinks" href="../dependent/dependents.php">DEPENDENT</a>
            </div>
        </div>
        </header>

                    <!--modal start-->

        <div class="modal department">
            <div class="data-contaienr">
                <div class="left-band"></div>
                <p class="dep_id">DEPARTMENT ID</p>
                <h1 class="dep_name">DEP NAME</h1>
                
                <br>
                <div class="details">
                    <p class="department">MANAGER : <span class="mgr" id="mgrname">XXXXXXXXXXXXXXXX</span></p>
                    <p class="noemp">NO. OF EMPLOYEES : <span class="noofemp">XXXXXXXXXXXXXXXX</span></p> 
                    <p class="working-emp">EMPLOYEES :</p>
                    <table id="work-emp"></table>
                    <p class="working-proj">PROJECTS :</p>
                    <table id="work-proj"></table>
                    <img src="../assets/icons/department.png" alt="employee image" class="dep-img">
                </div>
            </div>
            <span id="closebtn">&#x274c;</span>
        </div>



        <main>
            <div class="container">
                    <h2 class="heading" id="table_name">DEPARTMENTS</h2>
                    <hr/>

                    <div class="table_container">
                    <table class="table">
                    <?php

                        $ArrtibutesQuery = "SHOW COLUMNS FROM DEPARTMENT;";
                        $getData = "SELECT * FROM department;";
                        $tableAttributes = mysqli_query($connection, $ArrtibutesQuery);
                        $tableData = mysqli_query($connection, $getData);
                        $attributesExist = mysqli_num_rows($tableAttributes);
                        $dataExist = mysqli_num_rows($tableData);

                        if($attributesExist > 0){
                            echo "<tr class='theading'>";
                            while($row = mysqli_fetch_array($tableAttributes)){
                                echo "<th>".strtoupper($row["Field"])."</th>";
                            }
                            echo "</tr>";
                        }

                        if($dataExist > 0){
                            
                            while($row = mysqli_fetch_array($tableData)){
                                
                                echo "<tr>";
                                echo "<td>".$row['dep_id']."</td>";
                                echo "<td>".$row['dep_name']."</td>";
                                echo "<td>".$row['no_of_emp']."</td>";
                                echo "<td>".$row['no_of_proj']."</td>";
                                echo "<td>".$row['mgrssn']."</td>";
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

        <script src="dep.modal.control.js"></script>
    </body>
</html>