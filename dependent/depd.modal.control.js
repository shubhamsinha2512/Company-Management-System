var superssn, depdname, depdsex, depddob, depdrel;

document.getElementById('closebtn').addEventListener('click',function(e){
    document.getElementsByClassName('modal')[0].style.display='none';
})

var ipclose = document.getElementById("ipclosebtn");

function showInsert(){
    document.getElementsByClassName("insert")[0].style.display="block";
}

document.getElementById("ipclosebtn").addEventListener('click', function(e){
    document.getElementsByClassName("insert")[0].style.display="none";

})

var alldel = document.getElementsByClassName('del');

function deleteRow(id) {

        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","../deldepd.php?id="+id, true);
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


function showParName(superssn) {
    if (superssn == "") {
        document.getElementById("parent").innerHTML = "";
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
                document.getElementById("parent").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","parname.php?q="+superssn,true);
        xmlhttp.send();
    }
}


function showModal(){
    document.getElementsByClassName('superssn')[0].innerHTML=superssn;
    document.getElementsByClassName('depdname')[0].innerHTML=depdname;
    document.getElementsByClassName('relation')[0].innerHTML=depdrel;
    document.getElementsByClassName('depdsex')[0].innerHTML=depdsex;
    document.getElementsByClassName('depddob')[0].innerHTML=depddob;
    document.getElementsByClassName('modal')[0].style.display="block";

}

var modal = document.getElementsByClassName('modal')[0];
var cust_rows = document.getElementsByTagName('tr');


for(i=1;i<=cust_rows.length;i++){
    cust_rows[i].addEventListener('click', function(){
        j=0;    
        superssn= this.childNodes[j].innerHTML;j++;
        depdname = this.childNodes[j].innerHTML;j++;
        depdsex= this.childNodes[j].innerHTML;j++;
        depddob= this.childNodes[j].innerHTML;j++;
        depdrel=this.childNodes[j].innerHTML;
        
        showModal();
        showParName(superssn);

    })
}

