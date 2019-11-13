var servid, servname, desc, depid;
var modal = document.getElementsByClassName('modal')[0];
var serv_rows = document.getElementsByTagName('tr');

document.getElementById('closebtn').addEventListener('click',function(e){
    document.getElementsByClassName('modal')[0].style.display='none';
})

for(i=1;i<=serv_rows.length;i++){
    serv_rows[i].addEventListener('click', function(){
        j=0;    
        servid= this.childNodes[j].innerHTML;j++;
        servname= this.childNodes[j].innerHTML;j++;
        desc = this.childNodes[j].innerHTML;j++;
        depid= this.childNodes[j].innerHTML;
        
        showModal();
        showDepName(depid);
    })
}

function showModal(){
    document.getElementsByClassName('servid')[0].innerHTML=servid;
    document.getElementsByClassName('servname')[0].innerHTML=servname;
    document.getElementsByClassName('desc')[0].innerHTML=desc;
    document.getElementsByClassName('modal')[0].style.display="block";
}

function showDepName(depid) {
    if (depid == "") {
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
        xmlhttp.open("GET","depname.php?q="+depid,true);
        xmlhttp.send();
    }
}