var depid;
var dep_name, manager, no_of_emp, no_of_proj;


function showDepModal(depid) {
    if (depid == "") {
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
        xmlhttp.open("GET","working.emp.php?q="+depid,true);
        xmlhttp.send();
    }
}

function showProjModal(depid) {
    if (depid == "") {
        document.getElementById("work-proj").innerHTML = "";
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
                document.getElementById("work-proj").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","working.proj.php?q="+depid,true);
        xmlhttp.send();
    }
}

function showManagerName(depid) {
    if (depid == "") {
        document.getElementById("mgrname").innerHTML = "";
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
                document.getElementById("mgrname").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","mgrname.php?q="+depid,true);
        xmlhttp.send();
    }
}

function showModal(){
    document.getElementsByClassName('dep_id')[0].innerHTML=depid;
    document.getElementsByClassName('dep_name')[0].innerHTML=dep_name;
    document.getElementsByClassName('mgr')[0].innerHTML=manager;
    document.getElementsByClassName('noofemp')[0].innerHTML=no_of_emp;
    document.getElementsByClassName('modal')[0].style.display="block";
}

document.getElementById("closebtn").addEventListener('click', function(e){
    document.getElementsByClassName("modal")[0].style.display="none";
})

document.getElementById("closebtn").addEventListener('keyup', function(e){
    if(e.keyCode==27)
        document.getElementsByClassName("modal")[0].style.display="none";
})

var modal = document.getElementsByClassName('modal')[0];
var dep_rows = document.getElementsByTagName('tr');

for(i=1;i<=dep_rows.length;i++){
    dep_rows[i].addEventListener('click', function(){
        j=0;    
        depid= this.childNodes[j].innerHTML;j++;
        dep_name= this.childNodes[j].innerHTML;j++;
        no_of_emp= this.childNodes[j].innerHTML;j++;
        no_of_proj= this.childNodes[j].innerHTML;j++;
        manager= this.childNodes[j].innerHTML;
        
        showModal();
        showDepModal(depid);
        showProjModal(depid);
        showManagerName(depid);
    })
}

