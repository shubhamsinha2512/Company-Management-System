<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="modal.css">
        <style>
            
            .ssn{
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
                line-height:0.3;
            }

            .sdob{
                font-size:12px;
                position:absolute;
                right:50px;
                top:260px;
            }
        </style>
    </head>
    
    <body>
        <div class="modal employee">
            <div class="data-contaienr">
                <div class="left-band"></div>
                <p class="ssn">SSN - XXXXXXXX</p>
                <h1 class="empname">EMP NAME</h1>
                <p class="desig">DESIGNATION</p>
                <br>
                <div class="details">
                    <p class="department">DEPARTMENT : <span class="dname">XXXXXXXXXXXXXXXX</span></p>
                    <p class="salary">SALARY : <span class="sal">XXXXXXXXXXXXXXXX</span></p>
                    <p class="contact">CONTACT : <span class="con">XXXXXXXXXXXXXXXX</span></p>
                    <p class="email">EMAIL : <span class="em">XXXXXXXXXXXXXXXX</span></p>
                    <p class="address">ADDRESS : <span class="addr">XXXXXXXXXXXXXXXX</span></p>
                    <br>
                    <p class="department">Working on Projects : <span class="dname">XXXXXXXXXXXXXXXX</span></p>
                
                    <img src="assets/icons/man.png" alt="employee image" class="emp-img">
                </div>
                <div class="sdob">
                        <p class="sex">SEX : <span class="empsex">MALE</span></p>
                        <p class="dob">DOB : <span class="empdob">25-DEC-1998</span></p>
                    </div>
            </div>
            <span id="closebtn">&#x274c;</span>
        </div>

        <button id="mshow" onClick="showModal();">SHOW</button>

        <script src="modal.control.js"></script>
    </body>
</html>