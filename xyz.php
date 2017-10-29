

<!DOCTYPE html>
<html >
<script src="https://use.fontawesome.com/aa0385e472.js"></script>
<head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" type="text/css" href="http://192.168.1.100/cubiq-add-to-homescreen-aa54e46/style/addtohomescreen.css">
<script src="http://192.168.1.100/cubiq-add-to-homescreen-aa54e46/src/addtohomescreen.js"></script>
<script src="http://192.168.1.100/cubiq-add-to-homescreen-aa54e46/src/addtohomescreen.min.js"></script>
<script>
addToHomescreen();</script>

  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>CodePen - library management system</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>

      <style>
input::-webkit-input-placeholder {
color: white !important;
}
 
input:-moz-placeholder { 
color: white !important;  
}
 
input::-moz-placeholder {  
color: white !important;  
}
 
input:-ms-input-placeholder {  
color: white !important;  
}

   body{
   background: linear-gradient(silver, white);
	background-attachment:fixed;
	width:100%;
	height:100%;
}
h1{
  color:#026873;
	margin-left:0vw;
}
h4{
  color:#026873;
}
.box{
  position:absolute;
  left:40%;
  padding:10px;
color:#026873;
  display:inline-block;
	background-color:inherit;
	background-attachment: fixed;
    top:30%;
}
.username{
  width:80%;
  height:30px;
  margin:10px;
background-color:#026873;
  border:solid;
border-width:1px;
}
.password{
  width:80%;
border:solid;
border-width:1px;
background-color:#026873;
  height:30px;
  margin:10px;
}
.button{
  margin:10px;
  background-color:yellow;
  color:black;
}
.sidebar{
  position:fixed;
	min-width:110px;
	width:15vw;
  background-color:#026873;
  height:96%;
  left:0px;
  top:0px;
border:solid;
overflow:auto;
}
.sidebar button{
word-wrap:break-word;
 white-space: pre-wrap;
  width:100%;
	font-size:inherit;
	height:12vh;
	background-color:inherit;
 border:solid;
  border-width:1px;
  border-radius:0px;
	overflow:hide;
}
.sidebar button:hover{
background:linear-gradient(silver,white);
}
.logout{
position:fixed;
bottom:0%;
left:0%;
width:15vw;
min-width:110px;
 border:solid;
  border-width:1px;
  border-radius:0px;
word-wrap:break-word;
 white-space: pre-wrap;
	height:30px;
padding:5px;
color:yellow;
background-color:#026873;
}
.logout:hover{
	color:red;
}
table, th, td{
border:2px solid black;
word-wrap:break-word;
 white-space: pre-wrap;
color:white;
}
.tablebutton{
	width:100%;
	height:100%;
	background:linear-gradient(silver,white);
	
	padding:1px;
	margin:1px;
	font-weight:bold;
}
table{
width:60vw;
background-color:#026873;
margin-right:1%;
}
#laterbox{
margin-left:35vw;
max-height: 80vh;
overflow:auto;
display:inline-block;
border-bottom:solid;
}
#log_sub{
background-color:#026873;
color:white;
}
#passs{
min-width:100px;
display:inline-block;
word-wrap:break-word;
 white-space: pre-wrap;
	width:15vw;
 border:solid;
  border-width:1px;
  border-radius:0px;
	position:fixed;
	bottom:0%;
	height:40px;
padding:5px;
color:yellow;
background-color:#026873;
right:0px;
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

</head>

<body translate="no" >
<div id="sidebar">
</div>
  <center><br>
  <h1><b><i><u>RNSIT Library management system.</u></i></center></b></h1>
<center>
<br>
<div id="laterbox">
</div>
<div class="box">
   <center><h3><b>Login</b></h3></center>
  <center><input type="text" class="username" id="user" placeholder="usn only" required></input>
  <br>
      <input type="password" class="password" id="pass" placeholder="password" required></center>   
 <center><button class="button btn" id="log_sub" >submit</button></center>
   
<h4>Contact librarian for login issue</h4>
</div>
</center>
    <script src="//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>

    <script >
var stusel;
var book=[];
var user;
var pass;
var gid;
    $(document).ready(function(){
addToHomescreen();
	var ip=location.host; 
	var obj;
	$("h1").addClass("animated fadeIn");
	$(".box").hide();
	$('.box').show('slide', {direction: 'left'}, 500);
	$("#laterbox").css('visibility','hidden');
	var da=new Date();
	var dad=new Date();
	dad.setDate(dad.getDate()+15);
	if(da.getDate()>dad.getDate()){
		dad.setMonth(dad.getMonth()+1);
	}
	var month=(da.getMonth()<10)?"0"+(da.getMonth()+1): da.getMonth()+1;
	var date=(da.getDate()<10)?"0"+da.getDate(): da.getDate();
	var duedat=(dad.getDate()<10)?"0"+dad.getDate(): dad.getDate();
	var duemon=(dad.getMonth()<10)?"0"+(dad.getMonth()): dad.getMonth();
window.btnclk=function(id){
stusel=id;
	$("#laterbox").empty();
	isbok();
}
window.regissu=function(){
	var flag=1;
	for(var i=0;i<book.length;i++){
		var str="insert into book_lend values('"+book[i]+"','11','"+stusel+"','"+da.getFullYear()+"-"+month+"-"+date+"','"+da.getFullYear()+"-"+duemon+"-"+duedat+"');";
		$.ajax({
		method:'POST',
	data:{use:user,pas:pass,grant:str},
		url:'http://'+ip+'/insert.php/data',
		success:function(r){
		},
		error:function(r){
		flag=0;
		}
		});
	}
	if(flag){
		var lat=document.getElementById('laterbox');
		lat.innerHTML='';
		var txt=document.createElement('h3');
		var tt=document.createTextNode('book issued');
		txt.appendChild(tt);
		txt.setAttribute('style','color:#026870');
		lat.appendChild(txt);
		}
	book=[];
}
window.stusub;
window.bookreturn=function(){
	var flag=1;
	for(var i=0;i<book.length;i++){
	var str="delete from book_lend where usn='"+gid+"' and book_id='"+book[i]+"';";
	$.ajax({
		method:'POST',
	data:{use:user,pas:pass,grant:str},
		url:'http://'+ip+'/insert.php/data',
		success:function(r){
		},
		error:function(r){
		flag=0;
		}
		});
	}
	if(flag){
		var lat=document.getElementById('laterbox');
		lat.innerHTML='';
		var txt=document.createElement('h3');
		var tt=document.createTextNode('book retur recorded');
		txt.appendChild(tt);
		txt.setAttribute('style','color:#026870');
		lat.appendChild(txt);
		}
	book=[];
}
window.retsell=function(id){
	if(book.indexOf(id+"")==-1){
	book.push(id+"");
	$("#"+id).css('background','white');
}else{
	$("#"+id).css('background','linear-gradient(silver,white)');
	book.splice(book.indexOf(id+""),1);
}
}
window.bokisclk=function(id){
if(book.indexOf(id+"")==-1){
	if(book.length<3){
	book.push(id+"");
	$("#"+id).css('background','white');
}
}else{
	$("#"+id).css('background','linear-gradient(silver,white)');
	book.splice(book.indexOf(id+""),1);
}	
}
window.btnc=function(id){
	id=id.substring(0,id.length-1);
	var str="update book_lend set due_date='"+da.getFullYear()+"-"+ duemon +"-" + duedat + "' where usn='"+id+"'";
	$.ajax({
	method:'POST',
	data:{use:user,pas:pass,grant:str},
		url:'http://'+ip+'/insert.php/data',
		success:function(r){
		if(r==1)
			$("#"+id+"1").css('background-color','green');
		else 
			$("#"+id+"1").css('background-color','red');
		},
		error:function(r){
		}
});
}
window.renc=function(id){
	$("#laterbox").empty();
	gid=id.substring(0,id.length-1);
	var boo=[];
	var str="select a.book_id,a.due_date,b.book_title from book_lend a,books b where a.usn='"+ gid +"' and a.book_id=b.book_id;";
		$.ajax({
		method:'POST',
		data:{use:user,pas:pass,grant:str},
		url:'http://'+ip+'/log.php/data',
		success:function(r){
		$("h1").html(gid);
		var ob=jQuery.parseJSON(r);
		var laterbox=document.getElementById('laterbox');
		var tabl=document.createElement('table');
		var bookid=document.createElement('th');
		var booktitle=document.createElement('th');
		var duedate=document.createElement('th');
		var tr=document.createElement('tr');
		var bookidtxt=document.createTextNode('book_id');
		var booktitletxt=document.createTextNode('book_title');
		var due=document.createTextNode('due_date');
		bookid.appendChild(bookidtxt);
		booktitle.appendChild(booktitletxt);
		duedate.appendChild(due);
		tr.appendChild(bookid);
		tr.appendChild(booktitle);
		tr.appendChild(duedate);
		tabl.appendChild(tr);
		var siz=ob.length;
		for(var i=0;i<siz;i++){
			var tr1=document.createElement('tr');
			var but=document.createElement('button');
			var td1=document.createElement('td');
			var td2=document.createElement('td');
			var td3=document.createElement('td');
			var td1txt=document.createTextNode(ob[i].book_id);
			var td2txt=document.createTextNode(ob[i].book_title);
			var td3txt=document.createTextNode(ob[i].due_date);
			but.appendChild(td1txt);
			td2.appendChild(td2txt);
			td3.appendChild(td3txt);
			td1.appendChild(but);
			but.setAttribute('class','tablebutton btn');
			but.setAttribute('id',ob[i].book_id);
			but.setAttribute('onclick','retsell(this.id);');
			tr1.appendChild(but);
			tr1.appendChild(td2);
			tr1.appendChild(td3);
			tabl.appendChild(tr1);
		}
		var inn=document.createElement('input');
		inn.setAttribute('type','submit');
		inn.setAttribute('class','btn');
		inn.setAttribute('style','background-color:yellow');
		inn.setAttribute('onclick','bookreturn()');
		laterbox.appendChild(tabl);
		laterbox.appendChild(inn);
		}
});
}
function isbok(){
		var str="select * from books where not book_id=any(select book_id from book_lend where usn='"+stusel+"') and 2>(select count(usn) from book_lend where usn='"+stusel+"')";
	$.ajax({
		method:'POST',
	data:{use:user,pas:pass,grant:str},
		url:'http://'+ip+'/log.php/data',
		success:function(r){
			var ob=jQuery.parseJSON(r);
if(ob.length>0){
	 var laterbox=document.getElementById('laterbox');
        var tabl=document.createElement('table');
        var trh=document.createElement('tr');
  	 var idtxt=document.createTextNode('book_id');
	 var tittxt=document.createTextNode('book_title');
	var publi=document.createTextNode('publisher');
	var yea=document.createTextNode('book_edition');
   var tr1=document.createElement('th');
var tr2=document.createElement('th');
var tr3=document.createElement('th');
var tr4=document.createElement('th');
 tr1.appendChild(idtxt);
 tr2.appendChild(tittxt);
  tr3.appendChild(publi);
  tr4.appendChild(yea); 
trh.appendChild(tr2);
trh.appendChild(tr1);
trh.appendChild(tr3);
trh.appendChild(tr4);
tabl.appendChild(trh);
for(var i=0;i<ob.length;i++)
{
	var trd=document.createElement('tr');
	var tittlbtn=document.createElement('button');
	var bookid=document.createTextNode(ob[i].book_id);
	var tittl=document.createTextNode(ob[i].book_title);
	var publi=document.createTextNode(ob[i].pub_name);
	var edi=document.createTextNode(ob[i].book_edition);
	tittlbtn.appendChild(tittl);
	tittlbtn.setAttribute('class','tablebutton btn');
	tittlbtn.setAttribute('id',ob[i].book_id);
	tittlbtn.setAttribute('onclick','bokisclk(this.id);');
	var nod1=document.createElement('td');
	var nod2=document.createElement('td');
	var nod3=document.createElement('td');
	var nod4=document.createElement('td');
	nod1.appendChild(bookid);
	nod2.appendChild(tittlbtn);
	nod3.appendChild(publi);
	nod4.appendChild(edi);
	trd.appendChild(nod2);
	trd.appendChild(nod1);
	trd.appendChild(nod3);
	trd.appendChild(nod4);
	tabl.appendChild(trd);
}
	var sub=document.createElement('input');
	sub.setAttribute('class','btn');
	sub.setAttribute('value','submit');
	sub.setAttribute('type','submit')
	sub.setAttribute('style','background-color:yellow');
	sub.setAttribute('onclick','regissu();');
  laterbox.appendChild(tabl);
laterbox.appendChild(sub);
}
}
});
}
function newissclick(){
	book=[];
	$("#laterbox").empty();
	var str="select usn,name from student";
	$.ajax({
		method:'POST',
	data:{use:user,pas:pass,grant:str},
    url:'http://'+ip+'/log.php/data',
    success:function(r){
	var ob=jQuery.parseJSON(r);
	if(ob.length>0){
	var laterbox=document.getElementById('laterbox');
	var tabl=document.createElement('table');
	var tr1=document.createElement('tr');
	var th1=document.createElement('th');
	var th2=document.createElement('th');
	var th1h=document.createTextNode('student_id');
	var th2h=document.createTextNode('student_name');
	th1.appendChild(th1h);
	th2.appendChild(th2h);
	tr1.appendChild(th1);
	tr1.appendChild(th2);
	tabl.appendChild(tr1);
	for(var i=0;i<ob.length;i++){
		var tr=document.createElement('tr');
		var td1=document.createElement('td');
		var td2=document.createElement('td');
		var tdb1=document.createElement('button');
		tdb1.setAttribute('class','tablebutton btn')
		tdb1.setAttribute('id',ob[i].usn);
		tdb1.setAttribute('onclick','btnclk(this.id);');
		var td1t=document.createTextNode(ob[i].usn);
		var td2t=document.createTextNode(ob[i].name);
		tdb1.appendChild(td1t);
		td1.appendChild(tdb1);
		td2.appendChild(td2t);
		tr.appendChild(td1);
		tr.appendChild(td2);
		tabl.appendChild(tr);
	}
	laterbox.appendChild(tabl);
}
}
});
}
function addnewstu(){
	book=[];
	$("#laterbox").empty();
	var lat=document.getElementById('laterbox');
	var usrnam=document.createElement('input');
	var usnn=document.createElement('input');
	var phon=document.createElement('input');
	var subbtn=document.createElement('input');
	var br=document.createElement('br');
	usrnam.setAttribute('type','text');
	usrnam.style["background-color"]='#026870';
	usrnam.setAttribute('placeholder','name');
	usrnam.setAttribute('id','user');
	usnn.setAttribute('type','text');
	usnn.setAttribute('placeholder','usn');
	usnn.setAttribute('id','usn');
	usnn.style["background-color"]='#026870';
	phon.setAttribute('type','number');
	phon.setAttribute('placeholder','phone');
	phon.setAttribute('id','phone');
	phon.style["background-color"]='#026870';
	subbtn.setAttribute('type','submit');
	stusub=function(){
			var xyz=document.createElement('h3');
			var str="insert into student values('" + usnn.value+"','" + usrnam.value +"','"+phon.value+"');";
			$.ajax({
		method:'POST',
	data:{use:user,pas:pass,grant:str},
		url:'http://'+ip+'/insert.php/data',
		success:function(r){
		if(r==1){
		var stt=document.createTextNode('added successfully');
		xyz.setAttribute('style','color:#026873');
		xyz.appendChild(stt);
		lat.appendChild(xyz);
		}else{
		var stt=document.createTextNode('there was an error pls check the data');
		xyz.setAttribute('style','color:#026873');
		xyz.appendChild(stt);
		lat.appendChild(xyz);
		}	
		},
		error:function(r){
		var stt=document.createTextNode('there was an error in connection');
		xyz.setAttribute('style','color:red');
		xyz.appendChild(stt);
		lat.appendChild(xyz);
		}
		});
		}
	subbtn.addEventListener('click',stusub,true);
	lat.appendChild(usrnam);
	lat.appendChild(usnn);
	lat.appendChild(phon);
	lat.appendChild(br);
	lat.appendChild(subbtn);
	
	
}
function issuesf(){
	book=[];
	$("#laterbox").empty();
	var str="select * from book_lend order by 3 asc";
	$.ajax({
	method:'POST',
	data:{use:user,pas:pass,grant:str},
    url:'http://'+ip+'/log.php/data',
    success:function(r){
	var ob=jQuery.parseJSON(r);
if(ob.length>0){
	var laterbox=document.getElementById('laterbox');
	var tabl=document.createElement('table');
	var trh=document.createElement('tr');
	var boiddtxt=document.createTextNode('book_id');
	var bridtxt=document.createTextNode('branch_id');
	var usntxt=document.createTextNode('usn');
	var isstxt=document.createTextNode('date_of_issue');
	var duetxt=document.createTextNode('due_date');
	var tr1=document.createElement('th');
	var tr2=document.createElement('th');
	var tr3=document.createElement('th');
	var tr4=document.createElement('th');
	var tr5=document.createElement('th');
	var tr6=document.createElement('th');
	tr1.appendChild(boiddtxt);
	tr2.appendChild(bridtxt);
	tr3.appendChild(usntxt);
	tr5.appendChild(isstxt);
	tr6.appendChild(duetxt);
	trh.appendChild(tr1);
	trh.appendChild(tr2);
	trh.appendChild(tr3);
	trh.appendChild(tr5);
	trh.appendChild(tr6);
	tabl.appendChild(trh);
	for(var i=0;i<ob.length;i++)
{
	var trd=document.createElement('tr');
	var bookid=document.createTextNode(ob[i].book_id);
	var branchid=document.createTextNode(ob[i].branch_id);
	var usn=document.createTextNode(ob[i].usn);
	var issudat=document.createTextNode(ob[i].issue_date);
	var dudat=document.createTextNode(ob[i].due_date);	
	var nod1=document.createElement('td');
	var nod2=document.createElement('td');
	var nod3=document.createElement('td');
	var nod5=document.createElement('td');
	var nod6=document.createElement('td');
	nod1.appendChild(bookid);
	nod2.appendChild(branchid);
	nod3.appendChild(usn);
	nod5.appendChild(issudat);
	nod6.appendChild(dudat);
	trd.appendChild(nod1);
	trd.appendChild(nod2);
	trd.appendChild(nod3);
	trd.appendChild(nod5);
	trd.appendChild(nod6);
	tabl.appendChild(trd);
}
	laterbox.appendChild(tabl);	
}
}
});
}
function bookclick(){
	book=[];
	$("#laterbox").empty();
	var str="select * from books order by 2 asc";
	$.ajax({
	method:'POST',
	data:{use:user,pas:pass,grant:str},
    url:'http://'+ip+'/log.php/data',
    success:function(r){
	var ob=jQuery.parseJSON(r);
if(ob.length>0){
	 var laterbox=document.getElementById('laterbox');
        var tabl=document.createElement('table');
        var trh=document.createElement('tr');
   var idtxt=document.createTextNode('book_id');
	var tittxt=document.createTextNode('book_title');
	var publi=document.createTextNode('publisher');
	var yea=document.createTextNode('book_edition');
   var tr1=document.createElement('th');
var tr2=document.createElement('th');
var tr3=document.createElement('th');
var tr4=document.createElement('th');
 tr1.appendChild(idtxt);
 tr2.appendChild(tittxt);
  tr3.appendChild(publi);
  tr4.appendChild(yea); 
trh.appendChild(tr2);
trh.appendChild(tr1);
trh.appendChild(tr3);
trh.appendChild(tr4);
tabl.appendChild(trh);
for(var i=0;i<ob.length;i++)
{
	var trd=document.createElement('tr');
	var bookid=document.createTextNode(ob[i].book_id);
	var tittl=document.createTextNode(ob[i].book_title);
	var publi=document.createTextNode(ob[i].pub_name);
	var edi=document.createTextNode(ob[i].book_edition);
	var nod1=document.createElement('td');
	var nod2=document.createElement('td');
	var nod3=document.createElement('td');
	var nod4=document.createElement('td');
	nod1.appendChild(bookid);
	nod2.appendChild(tittl);
	nod3.appendChild(publi);
	nod4.appendChild(edi);
	trd.appendChild(nod2);
	trd.appendChild(nod1);
	trd.appendChild(nod3);
	trd.appendChild(nod4);
	tabl.appendChild(trd);
}
  laterbox.appendChild(tabl);
}
}
});
}
function rene(){
	book=[];
	$("#laterbox").empty();
	var str="select usn,name from student";
	$.ajax({
		method:'POST',
	data:{use:user,pas:pass,grant:str},
    url:'http://'+ip+'/log.php/data',
    success:function(r){
	var ob=jQuery.parseJSON(r);
	if(ob.length>0){
	var laterbox=document.getElementById('laterbox');
	var tabl=document.createElement('table');
	var tr1=document.createElement('tr');
	var th1=document.createElement('th');
	var th2=document.createElement('th');
	var th1h=document.createTextNode('student_id');
	var th2h=document.createTextNode('student_name');
	th1.appendChild(th1h);
	th2.appendChild(th2h);
	tr1.appendChild(th1);
	tr1.appendChild(th2);
	tabl.appendChild(tr1);
	for(var i=0;i<ob.length;i++){
		var tr=document.createElement('tr');
		var td1=document.createElement('td');
		var td2=document.createElement('td');
		var tdb1=document.createElement('button');
		tdb1.setAttribute('class','tablebutton btn')
		tdb1.setAttribute('id',ob[i].usn + '1');
		tdb1.setAttribute('onclick','btnc(this.id);');
		var td1t=document.createTextNode(ob[i].usn);
		var td2t=document.createTextNode(ob[i].name);
		tdb1.appendChild(td1t);
		td1.appendChild(tdb1);
		td2.appendChild(td2t);
		tr.appendChild(td1);
		tr.appendChild(td2);
		tabl.appendChild(tr);
	}
	laterbox.appendChild(tabl);
}
}
});
}
function ret(){
	$("#laterbox").empty();
	var str="select usn,name from student where usn=any(select usn from book_lend) group by usn";
	$.ajax({
		method:'POST',
	data:{use:user,pas:pass,grant:str},
    url:'http://'+ip+'/log.php/data',
    success:function(r){
	var ob=jQuery.parseJSON(r);
	if(ob.length>0){
	var laterbox=document.getElementById('laterbox');
	var tabl=document.createElement('table');
	var tr1=document.createElement('tr');
	var th1=document.createElement('th');
	var th2=document.createElement('th');
	var th1h=document.createTextNode('student_id');
	var th2h=document.createTextNode('student_name');
	th1.appendChild(th1h);
	th2.appendChild(th2h);
	tr1.appendChild(th1);
	tr1.appendChild(th2);
	tabl.appendChild(tr1);
	for(var i=0;i<ob.length;i++){
		var tr=document.createElement('tr');
		var td1=document.createElement('td');
		var td2=document.createElement('td');
		var tdb1=document.createElement('button');
		tdb1.setAttribute('class','tablebutton btn')
		tdb1.setAttribute('id',ob[i].usn + '1');
		tdb1.setAttribute('onclick','renc(this.id);');
		var td1t=document.createTextNode(ob[i].usn);
		var td2t=document.createTextNode(ob[i].name);
		tdb1.appendChild(td1t);
		td1.appendChild(tdb1);
		td2.appendChild(td2t);
		tr.appendChild(td1);
		tr.appendChild(td2);
		tabl.appendChild(tr);
	}
	laterbox.appendChild(tabl);
}
}
});
}
function adminlog(){
	$("#laterbox").css('visibility','visible');
	$(".box").remove();
	var here=document.getElementById('sidebar');
	var div=document.createElement('div');
	var logoutbtn=document.createElement('a');
	var book=document.createElement('button');
	var issues=document.createElement('button');
	var issue=document.createElement('button');
	var newusr=document.createElement('button');
	var renew=document.createElement('button');
	var retur=document.createElement('button');
	var remov=document.createElement('button');
	var newpub=document.createElement('button');
	var coming=document.createElement('button');
	var passchng=document.createElement('button');
	var logtext=document.createTextNode('Logout');
	var rentxt=document.createTextNode(' Renew');
	var isuetxt=document.createTextNode(' Issued detail');
	var isuingtxt=document.createTextNode(' new issue');
	var booktxt=document.createTextNode(' Books');
	var newusrtxt=document.createTextNode(' add student');
	var rettxt=document.createTextNode('Return');
	var removtxt=document.createTextNode(' Remove student');
	var comtxt=document.createTextNode(' add book');
	var passtxt=document.createTextNode(' password');
	passchng.appendChild(passtxt);
	passchng.setAttribute('id','passs');
	passchng.setAttribute('class','fa fa-gear')
	coming.setAttribute('class','btn remov fa fa-times-circle');
	coming.appendChild(comtxt);
	remov.setAttribute('class','btn remov fa fa-times-circle');
	remov.appendChild(removtxt);
	retur.setAttribute('class','btn return fa fa-retweet');
	retur.appendChild(rettxt);
	renew.setAttribute('class','btn renew fa fa-plus-circle');
	renew.appendChild(rentxt);
	logoutbtn.setAttribute('class','btn logout');
	logoutbtn.setAttribute('href','http://'+ip+'/xyz.php');
	logoutbtn.appendChild(logtext);
	book.setAttribute('class','btn book fa fa-book');
	book.appendChild(booktxt);
	issues.appendChild(isuetxt);
	issues.setAttribute('class','btn issues fa fa-navicon');
	issue.appendChild(isuingtxt);
	issue.setAttribute('class','btn issue fa fa-id-card');
	newusr.appendChild(newusrtxt);
	newusr.setAttribute('class','btn newusr fa fa-user-circle-o');
	div.setAttribute('class','sidebar');
	book.addEventListener('click',bookclick,true);
	issues.addEventListener('click',issuesf,true);
	issue.addEventListener('click',newissclick,true);
	newusr.addEventListener('click',addnewstu,true);
	renew.addEventListener('click',rene,true);
	retur.addEventListener('click',ret,true);
	div.appendChild(book);
	div.appendChild(issues);
	div.appendChild(issue);
	div.appendChild(newusr);
	div.appendChild(renew);
	div.appendChild(retur);
	div.appendChild(remov);
	div.appendChild(coming);
	here.appendChild(logoutbtn);
	here.appendChild(div);
	here.appendChild(passchng);
	$('.sidebar').hide();
	$(".sidebar button").hide();
	$("#laterbox").hide();
	$("#laterbox").fadeIn(2500);
	$('.sidebar').show('slide', {direction: 'left'}, 500);
	$(".sidebar button").fadeIn(2000);
}
function stulog(){
	$(".box").remove();
}

	$("#log_sub").on('click',function(){
	user=document.getElementById('user').value;
    pass=document.getElementById('pass').value;
	var str="show grants";
  $.ajax({
	method:'POST',
	data:{use:user,pas:pass,grant:str},
    url:'http://'+ip+'/login.php/data',
    success:function(r){
	$("h1").css('margin-left','25vw');
	$("#log_sub").css('background-color','red');
	obj=jQuery.parseJSON(r);
      if(obj["Grants for "+user+"@localhost"].search("ALL")!=-1){
	adminlog();
	bookclick();
	}
	else if(obj["Grants for "+user+"@localhost"].search("SELECT")!=-1){
	stulog();		
	}
	
    }
    ,
    error:function(r){
    $("h1").text("error");
  }
  });
});
 })
  </script>

  
  

</body>
</html>
 