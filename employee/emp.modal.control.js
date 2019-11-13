
//get modal
var modal = document.getElementsByClassName("modal")[0];
var x = document.getElementById("closebtn");

//moadal contents
var ssn, name,dob,sex,address,salary,contact,email,proj_name,dep_name;

function showModal(){

    document.getElementsByClassName("ssn")[0].innerHTML=ssn;
    document.getElementsByClassName("empname")[0].innerHTML=name;
    document.getElementsByClassName("empdob")[0].innerHTML=dob;
    document.getElementsByClassName("empsex")[0].innerHTML=sex;
    document.getElementsByClassName("sal")[0].innerHTML=salary;
    document.getElementsByClassName("con")[0].innerHTML=contact;
    document.getElementsByClassName("em")[0].innerHTML=email;
    document.getElementsByClassName("addr")[0].innerHTML=address;
    document.getElementsByClassName("dname")[0].innerHTML=dep_name;
    document.getElementsByClassName("pname")[0].innerHTML=proj_name;

    modal.style.display="block";
}

x.addEventListener('click', function(e){
    modal.style.display="none";

})

window.addEventListener('click', function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }   
})

var getTR = document.getElementsByTagName("tr");

var alldel = document.getElementsByClassName('del');

function deleteRow(id, tb, attr, path) {

        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","../del.php?id="+id+"&tb="+tb+"&attr="+attr, true);
        xmlhttp.send();
    }

var id;

for(var k=0;k<alldel.length;k++){
    alldel[k].addEventListener('click', function(event){
        id = event.target.parentNode.childNodes[0].innerHTML;
        tb = document.getElementById("table_name").innerHTML;
        attr = document.getElementsByTagName('tr')[0].childNodes[0].innerHTML;
        path = window.location.href;
        deleteRow(id, tb, attr, path);
        location.reload();
    })
}

var ipclose = document.getElementById("ipclosebtn");

function showInsert(){
    document.getElementsByClassName("insert")[0].style.display="block";
}

document.getElementById("ipclosebtn").addEventListener('click', function(e){
    document.getElementsByClassName("insert")[0].style.display="none";

})

for(var i=1;i<=getTR.length;i++){
    getTR[i].addEventListener('click', function(event){
        var j=0;
        ssn=this.childNodes[j].innerHTML;j++;
        name=this.childNodes[j].innerHTML;j++;
        dob=this.childNodes[j].innerHTML;j++;
        sex=this.childNodes[j].innerHTML;j++;
        address=this.childNodes[j].innerHTML;j++;
        salary=this.childNodes[j].innerHTML;j++;
        contact=this.childNodes[j].innerHTML;j++;
        email=this.childNodes[j].innerHTML;j++;
        proj_name=this.childNodes[j].innerHTML;j++;
        dep_name=this.childNodes[j].innerHTML;j++;
        showModal();
    })
}






