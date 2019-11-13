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
            
            .superssn{
                margin-bottom:5px;
                font-size:12px;
                color:#36B5D5;
            }

            .emp-img{
                width:25%;
                position:absolute;
                top:60px;
                right:40px;
            }

            .left-band{
                background-color:#734A3E;
            }

            .empname{
                line-height:1;
                margin-bottom:5px;
            }

            .sdob{
                font-size:12px;
                position:absolute;
                right:70px;
                top:300px;
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

            td{
                cursor:pointer;
            }

            .modal{
                display:none;
                min-height:300px;
            }

            .foot{
                position:absolute;
                bottom:0;
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
                <a class="navlinks" href="../department/department.php">DEPARTMENT</a>
            </div>
            </div>
        </header>

                    <!--modal start-->

        <div class="modal employee">
            <div class="data-contaienr">
                <div class="left-band"></div>
                <p>SUPERSSN : <span class="superssn">SUPERSSN - XXXXXXXX</span></p>
                <h1 class="depdname">DEPD NAME</h1>
            
                <br>
                <div class="details">
                    <p class="par">GUARDIAN : <span class="parent" id="parent">XXXXXXXXXXXXXXXX</span></p>
                    <p class="rel">RELATION : <span class="relation">XXXXXXXXXXXXXXXX</span></p>
                    <br>                
                    <img src="../assets/icons/dependent.png" alt="employee image" class="emp-img">
                </div>
                <div class="sdob">
                        <p class="sex">SEX : <span class="depdsex">MALE</span></p>
                        <p class="dob">DOB : <span class="depddob">25-DEC-1998</span></p>
                    </div>
            </div>
            <span id="closebtn">&#x274c;</span>
        </div>

        <div class="insert">
            <form action="depd.ins.php" class="insform" method="POST">
                <p class="ip">SUPERSSN : <input class="ipfield" type="number" name="superssn" placeholder="SUPERSSN"></p>
                <p class="ip">DEPENDENT NAME : <input class="ipfield" type="text" name="depname" placeholder="DEPENDENT NAME"></p>
                <p class="ip">SEX : <input class="ipfield" type="text" name="sex" placeholder="SEX"></p>
                <p class="ip">DOB : <input class="ipfield" type="date" name="dob" placeholder="dob"></p>
                <p class="ip">RELATION : <input class="ipfield" type="text" name="relation" placeholder="RELATION"></p>
                <input type="submit" class="sub ipfield">
            </form>
            <span id="ipclosebtn">&#x274c;</span>
        </div>

        <main>
            <div class="container">
                    <h2 class="heading" id="table_name">DEPENDENTS</h2>
                    <button class="ins" id="insert" onClick="showInsert();">+ Insert</button>
                    <hr/>

                    <div class="table_container">
                    <table class="table">
                    <?php

                        $ArrtibutesQuery = "SHOW COLUMNS FROM DEPENDENT;";
                        $getData = "SELECT * FROM DEPENDENT;";
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
                                echo "<td>".$row['superssn']."</td>";
                                echo "<td>".$row['depd_name']."</td>";
                                echo "<td>".$row['depd_sex']."</td>";
                                echo "<td>".$row['depd_dob']."</td>";
                                echo "<td>".$row['depd_rel']."</td>";
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

        <script src="depd.modal.control.js"></script>
    </body>
</html>