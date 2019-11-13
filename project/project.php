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
                top:0px;
                left:30px;
                display:none;
                max-height:500px;
            }
            .projid{
                margin-bottom:5px;
                font-size:12px;
                color:#36B5D5;
            }

            .desc{
                max-width:500px;
            }

            .emp-img{
                width:25%;
                position:absolute;
                top:100px;
                right:40px;
            }

            .left-band{
                background-color:#F6BB00;
            }

            .projname{
                line-height:1;
                
            }

            tr{
                cursor:pointer;
                background-color:#E1E1E1;
            }

            #work-emp td{
                padding:10px;
                cursor:pointer;
            }

            #work-emp{
                max-width:60%;
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

            .foot{
                position:fixed;
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
                <a class="navlinks" href="../department/department.php">DEPARTMENT</a>
                <a class="navlinks" href="../customer/customer.php">CUSTOMER</a>
                <a class="navlinks" href="../services/service.php">SERVICE</a>
                <a class="navlinks" href="../dependent/dependents.php">DEPENDENT</a>
            </div>
            </div>
        </header>

                    <!--modal start-->

        <div class="modal employee">
            <div class="data-contaienr">
                <div class="left-band"></div>
                <p class="projid">PROJ ID</p>
                <h1 class="projname">PROJECT NAME</h1>
            
                <br>
                <div class="details">
                    <p class="department">DEPARTMENT : <span class="dname" id="dname">XXXXXXXXXXXXXXXX</span></p>
                    <p class="dedlin">DEADLINE : <span class="date">XXXXXXXXXXXXXXXX</span></p>
                    <p class="descp">DESCRIPTION : <p class="desc">XXXXXXXXXXXXXXXX</p></p>
                    
                    <br>
                    <p class="working-emp">WORKING EMPLOYEES :</p>
                    <table id="work-emp"></table>
                    <img src="../assets/icons/project.png" alt="employee image" class="emp-img">
                </div>
            </div>
            <span id="closebtn">&#x274c;</span>
        </div>

        <div class="insert">
            <form action="proj.ins.php" class="insform" method="POST">
                <p class="ip">PROJECT ID : <input class="ipfield" type="number" name="projid" placeholder="PROJECT ID"></p>
                <p class="ip">PROJECT NAME : <input class="ipfield" type="text" name="projname" placeholder="PROJECT NAME"></p>
                <p class="ip">CUSTOMER ID : <input class="ipfield" type="number" name="custid" placeholder="CUSTOMER ID"></p>
                <p class="ip">DEADLINE : <input class="ipfield" type="date" name="deadline" placeholder="DEADLINE"></p>
                <p class="ip">DESCRIPTION : <input class="ipfield" type="textbox" name="description" placeholder="DESCRIPTION"></p>
                <p class="ip">DEPARTMENT ID : <input class="ipfield" type="number" name="depid" placeholder="DEPARTMENT ID"></p>
                <input type="submit" class="sub ipfield">
            </form>

            <span id="ipclosebtn">&#x274c;</span>
        </div>

        <main>
            <div class="container">
                    <h2 class="heading" id="table_name">PROJECTS</h2>
                    <button class="ins" id="insert" onClick="showInsert();">+ Insert</button>
                    <hr/>

                    <div class="table_container">
                    <table class="table">
                    <?php

                        $ArrtibutesQuery = "SHOW COLUMNS FROM PROJECT;";
                        $getData = "SELECT * FROM PROJECT;";
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
                                echo "<td>".$row['proj_id']."</td>";
                                echo "<td>".$row['proj_name']."</td>";
                                echo "<td>".$row['cust_id']."</td>";
                                echo "<td>".$row['proj_deadline']."</td>";
                                echo "<td>".$row['proj_desc']."</td>";
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

        <script src="proj.modal.control.js"></script>
    </body>
</html>