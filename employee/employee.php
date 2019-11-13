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
            
            .ssn{
                margin-bottom:5px;
                font-size:12px;
                color:#36B5D5;
            }

            .emp-img{
                border:4px solid #3a3a3a;
                border-radius:100%;
                width:20%;
                position:absolute;
                top:60px;
                right:40px;
            }

            .left-band{
                background-color:#FD8469;
            }

            .empname{
                line-height:1;
                marign-bottom:5px;
            }

            .desig{
                margin-top:5px;
            }

            .sdob{
                font-size:12px;
                position:absolute;
                right:60px;
                top:260px;
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
                left:1120px;
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
                <a class="navlinks" href="../department/department.php">DEPARTMENT</a>
                <a class="navlinks" href="../project/project.php">PROJECT</a>
                <a class="navlinks" href="../customer/customer.php">CUSTOMER</a>
                <a class="navlinks" href="../services/services.php">SERVICE</a>
                <a class="navlinks" href="../dependent/dependent.php">DEPENDENT</a>
            </div>
            </div>
        </header>

                    <!--modal start-->

        <div class="modal employee">
            <div class="data-contaienr">
                <div class="left-band"></div>
                <p class="ssn">SSN - XXXXXXXX</p>
                <h1 class="empname">EMP NAME</h1>
                <br>
                <div class="details">
                    <p class="department">DEPARTMENT : <span class="dname">XXXXXXXXXXXXXXXX</span></p>
                    <p class="salary">SALARY : <span class="sal">XXXXXXXXXXXXXXXX</span></p>
                    <p class="contact">CONTACT : <span class="con">XXXXXXXXXXXXXXXX</span></p>
                    <p class="email">EMAIL : <span class="em">XXXXXXXXXXXXXXXX</span></p>
                    <p class="address">ADDRESS : <span class="addr">XXXXXXXXXXXXXXXX</span></p>
                    <br>
                    <p class="project">Working on Project : <span class="pname">XXXXXXXXXXXXXXXX</span></p>
                
                    <img src="../assets/icons/man.png" alt="employee image" class="emp-img">
                </div>
                <div class="sdob">
                        <p class="sex">SEX : <span class="empsex">MALE</span></p>
                        <p class="dob">DOB : <span class="empdob">25-DEC-1998</span></p>
                    </div>
            </div>
            <span id="closebtn">&#x274c;</span>
        </div>

        <div class="insert">
            <form action="emp.ins.php" class="insform" method="POST">
                <p class="ip">NAME : <input class="ipfield" type="text" name="name" placeholder="NAME"></p>
                <p class="ip">DOB : <input class="ipfield" type="date" name="dob" placeholder="DD/MM/YYYY"></p>
                <p class="ip">SEX : <input class="ipfield" type="text" name="sex" placeholder="SEX"></p>
                <p class="ip">SALARY : <input class="ipfield" type="number" name="salary" placeholder="SALARY"></p>
                <p class="ip">CONTACT : <input class="ipfield" type="number" name="contact" placeholder="NAME" maxlength="10"></p>
                <p class="ip">EMAIL : <input class="ipfield" type="email" name="email" placeholder="E-MAIL"></p>
                <p class="ip">ADDRESS : <input class="ipfield" type="text" name="address" placeholder="ADDRESS"></p>
                <p class="ip">PROJECT ID : <input class="ipfield" type="number" name="projid" placeholder="PROJECT ID"></p>
                <p class="ip">DEPARTMENT ID : <input class="ipfield" type="number" name="depid" placeholder="DEPARTMENT ID"></p>
                <input type="submit" class="sub ipfield">
            </form>

            <span id="ipclosebtn">&#x274c;</span>
        </div>

        <main>
            <div class="container">
                    <h2 class="heading" id="table_name">EMPLOYEE</h2>
                    <button class="ins" id="insert" onClick="showInsert();">+ Insert</button>
                    <hr/>

                    <div class="table_container">
                    <table class="table">
                    <?php

                        $ArrtibutesQuery = "SHOW COLUMNS FROM EMPLOYEE;";
                        $getData = "SELECT * FROM EMPLOYEE;";
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
                                echo "<td>".$row['ssn']."</td>";
                                echo "<td>".$row['emp_name']."</td>";
                                echo "<td>".$row['dob']."</td>";
                                echo "<td>".$row['sex']."</td>";
                                echo "<td>".$row['emp_address']."</td>";
                                echo "<td>".$row['salary']."</td>";
                                echo "<td>".$row['contact']."</td>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['proj_id']."</td>";
                                echo "<td>".$row['dep_id']."</td>";
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

        <script src="emp.modal.control.js"></script>
    </body>
</html>