var custid, custname, rate, city, deadline, desc,depid,servid;

document.getElementById('closebtn').addEventListener('click',function(e){
    document.getElementsByClassName('modal')[0].style.display='none';
})


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
var id;
function deleteRow(id) {

        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","../delcust.php?id="+id, true);
        xmlhttp.send();
}

for(var k=0;k<alldel.length;k++){
    alldel[k].addEventListener('click', function(event){
        id = event.target.parentNode.childNodes[0].innerHTML;
        deleteRow(id);
        
        event.target.parentNode.style.display='none';
    })
}

function showProjName(custid) {
    if (custid == "") {
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
        xmlhttp.open("GET","working.proj.php?q="+custid,true);
        xmlhttp.send();
    }
}


function showModal(){
    document.getElementsByClassName('custid')[0].innerHTML=custid;
    document.getElementsByClassName('custname')[0].innerHTML=custname;
    document.getElementsByClassName('rate')[0].innerHTML=rate;
    document.getElementsByClassName('city')[0].innerHTML=city;
    document.getElementsByClassName('modal')[0].style.display="block";

}

var modal = document.getElementsByClassName('modal')[0];
var cust_rows = document.getElementsByTagName('tr');



for(i=1;i<=cust_rows.length;i++){
    cust_rows[i].addEventListener('click', function(){
        j=0;    
        custid= this.childNodes[j].innerHTML;j++;
        custname = this.childNodes[j].innerHTML;j++;
        rate= this.childNodes[j].innerHTML;j++;
        city= this.childNodes[j].innerHTML;j++;
        servid=this.childNodes[j].innerHTML;
        
        showModal();
        showProjName(custid);

    })
}

