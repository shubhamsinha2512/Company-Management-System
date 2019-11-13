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
            }
            
            .custid{
                margin-bottom:5px;
                font-size:12px;
                color:#36B5D5;
            }

            .emp-img{
                width:25%;
                position:absolute;
                top:80px;
                right:40px;
            }

            .left-band{
                background-color:#FF9518;
            }

            .empname{
                line-height:1;
                margin-bottom:5px;
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
                left:1080px;
                color: white;
                font-weight: bold;
                width: auto;
                height: auto;
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

            tr{
                background-color:#E1E1E1;
            }

            td{
                cursor:pointer;
            }

            #work-proj{
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
                <a class="navlinks" href="../department/department.php">DEPARTMENT</a>
                <a class="navlinks" href="../services/services.php">SERVICE</a>
                <a class="navlinks" href="../dependent/dependents.php">DEPENDENT</a>
            </div>
            </div>
        </header>

        <!--modal start-->

        <div class="modal employee">
            <div class="data-contaienr">
                <div class="left-band"></div>
                <p class="custid">CUST ID</p>
                <h1 class="custname">CUST NAME</h1>
                
                <br>
                <div class="details">
                    <p class="rating">RATING : <span class="rate">XXXXXXXXXXXXXXXX</span></p>
                    <p class="cityname">CITY : <span class="city">XXXXXXXXXXXXXXXX</span></p>
                    
                    <br>
                    <p class="working-proj">PROJECTS :</p>
                    <table id="work-proj"></table>
                
                    <img src="../assets/icons/customer.png" alt="employee image" class="emp-img">
                </div>
            </div>
            <span id="closebtn">&#x274c;</span>
        </div>

        <div class="insert">
            <form action="cust.ins.php" class="insform" method="POST">
                <p class="ip">CUSTOMER ID : <input class="ipfield" type="number" name="custid" placeholder="CUSTOMER ID"></p>
                <p class="ip">CUSTOMER NAME : <input class="ipfield" type="text" name="custname" placeholder="CUSTOMER NAME"></p>
                <p class="ip">RATING : <input class="ipfield" type="number" name="rating" placeholder="RATING"></p>
                <p class="ip">CITY : <input class="ipfield" type="text" name="city" placeholder="CITY"></p>
                <p class="ip">SERVICE ID : <input class="ipfield" type="number" name="servid" placeholder="SERVICE ID"></p>
                <input type="submit" class="sub ipfield">
            </form>

            <span id="ipclosebtn">&#x274c;</span>
        </div>

        <main>
            <div class="container">
                    <h2 class="heading" id="table_name">CUSTOMERS</h2>
                    <button class="ins" id="insert" onClick="showInsert();">+ Insert</button>
                    <hr/>

                    <div class="table_container">
                    <table class="table">
                    <?php

                        $ArrtibutesQuery = "SHOW COLUMNS FROM CUSTOMER;";
                        $getData = "SELECT * FROM CUSTOMER;";
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
                                echo "<td>".$row['cust_id']."</td>";
                                echo "<td>".$row['cust_name']."</td>";
                                echo "<td>".$row['rating']."</td>";
                                echo "<td>".$row['cust_city']."</td>";
                                echo "<td>".$row['serv_id']."</td>";
                                echo "<td class='del'>"."&#x274c;"."</td>";
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

        <script src="cust.modal.control.js"></script>
    </body>
</html>