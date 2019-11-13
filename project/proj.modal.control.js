var ipclose = document.getElementById("ipclosebtn");

function showInsert(){
    document.getElementsByClassName("insert")[0].style.display="block";
}

document.getElementById("ipclosebtn").addEventListener('click', function(e){
    document.getElementsByClassName("insert")[0].style.display="none";

}) 

var projid, projname, dept, deadline, desc,depid;

function showEmpName(projid) {
    if (projid == "") {
        document.getElementById("work-emp").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("work-emp").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","work.emp.php?q="+projid,true);
        xmlhttp.send();
    }
}

function showDepName(depid) {
    if (projid == "") {
        document.getElementById("dname").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("dname").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","depname.php?q="+projid,true);
        xmlhttp.send();
    }
}



var alldel = document.getElementsByClassName('del');

function deleteRow(id) {

        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","../delproj.php?id="+id, true);
        xmlhttp.send();
    }

var id;

for(var k=0;k<alldel.length;k++){
    alldel[k].addEventListener('click', function(event){
        id = event.target.parentNode.childNodes[0].innerHTML;
        deleteRow(id);
        location.reload();
    })
}

function showModal(){
    document.getElementsByClassName('projid')[0].innerHTML=projid;
    document.getElementsByClassName('projname')[0].innerHTML=projname;
    document.getElementsByClassName('dname')[0].innerHTML=dept;
    document.getElementsByClassName('desc')[0].innerHTML=desc;
    document.getElementsByClassName('date')[0].innerHTML=deadline;
    document.getElementsByClassName('modal')[0].style.display="block";
}

var modal = document.getElementsByClassName('modal')[0];
var proj_rows = document.getElementsByTagName('tr');

document.getElementById('closebtn').addEventListener('click',function(e){
    document.getElementsByClassName('modal')[0].style.display='none';
})

for(i=1;i<=proj_rows.length;i++){
    proj_rows[i].addEventListener('click', function(){
        j=0;    
        projid= this.childNodes[j].innerHTML;j++;
        projname= this.childNodes[j].innerHTML;j++;
        custid = this.childNodes[j].innerHTML;j++;
        deadline= this.childNodes[j].innerHTML;j++;
        desc= this.childNodes[j].innerHTML;j++;
        depid=this.childNodes[j].innerHTML;
        
        showModal();
        showDepName(depid);
        showEmpName(projid);

    })
}

