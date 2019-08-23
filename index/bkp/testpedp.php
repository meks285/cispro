<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<style type="text/css">
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:850px;
padding:14px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: normal;
font-weight: bold;
color: #000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
}
li input
{
}

/* ----------- stylized ----------- */
#stylized{
border:solid 1px #b7ddf2;
background:# FFF;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized option{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
#stylized .radio-toolbar input[type="radio"] {
font-weight:bold;
text-align:right;
float:left;
padding-right:0px;
width:20px;
}
#stylized .radio-toolbar label {
display:block;
font-weight:bold;
text-align:right;
float:left;
padding-right:0px;
position:absolute;
margin:1px 0 0px 10px;
}
#stylized .radio-toolbar input{
float:left;
padding-right:50px;
margin:1px 0 0px 10px;
position:inherit;
}


</style>

<script type="text/javascript">
function validateAge()
{
var today = new Date();
var del_date = new Date(document.getElementById('dob').value);
var del_date = del_date.getFullYear();
var td1 = today.getFullYear();
var intAge = td1 - del_date;
var str1="Age: "
var strAge= str1+(td1 - del_date)+"Yrs ";
document.getElementById('doblabel').innerHTML = str1+(td1 - del_date)+"Yrs";
if (intAge < 15){
	document.getElementById('doblabel2').innerHTML = "Pediatric Patient";
	}
	else{
		document.getElementById('doblabel2').innerHTML = "Adult Patient";
		}
}

function pedpepid(){
	var pepid = document.getElementById('pepid').value;
	if (pepid.indexOf("P")!=2){
				document.getElementById('ag').innerHTML = "PepID Error: Pediatric patient";
		}
		else if (pepid.length!=11){
						document.getElementById('ag').innerHTML = "PepID Error: Length";
			}
			else{
						document.getElementById('ag').innerHTML = "";
				}
	}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>APIN DB / New Patient</title>
</head>
<h1 align="center" style="background-color:#0F3">NEW ADULT PATIENT</h1>
<body >
<a href="./index.php" >Logout</a> <br>
<a href="./Welcome.php" >Welcome</a>

<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="insert.php">
<h1>Fill Patient Demographics</h1>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Patient Identification Numbers</legend>
<label>PEPID
<span class="small">PEPFAR ID</span>
</label>
<input type="text" name="pepid" id="pepid" required="required" placeholder="Required" onchange="pedpepid()" />

<label>Unique Number
<span class="small">STATE-FACILITY-SERIAL</span>
</label>
<input type="text" name="uniqueid" id="uniqueid" placeholder="STATE-FACILITY-SERIAL" />
<label id="pepidflag" style="color:#F00; font-style:italic;"></label>
</fieldset>
<fieldset>
<label>Surname
<span class="small">Patient Surname</span>
</label>
<input type="text" name="surname" id="surname" required="required" placeholder="Required" />

<label>Other names
<span class="small">Patient Other Name</span>
</label>
<input type="text" name="othernames" id="othernames" required="required" placeholder="Required" />

<label>DOB
<span class="small">YYYY-MM-DD</span>
</label>
<input type="date" name="dob" id="dob" required="required" placeholder="Required" onChange="validateAge()" /> 

<label>Phone Number
<span class="small">Phone Number</span>
</label>
<input type="text" name="phoneno" id="phoneno" />

<label>Visit Date
<span class="small">Visit Date</span>
</label>
<input type="date" name="visitdate" id="visitdate" required="required" placeholder="YYYY-MM-DD" />
<br />
<label id="doblabel" style="color:#F00; font-style:italic;"></label>
<label id="doblabel2" style="color:#F00; font-style:italic;"></label>
</fieldset>
</body>
</html>