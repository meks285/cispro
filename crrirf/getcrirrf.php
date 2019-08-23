<?php
session_start();
$_SESSION=$_GET;
$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 

class MyClass{
    public function GetUserInformation(){
		$reportstart = $_GET['reportstart'];
		$reportend = $_GET['reportend'];
		$reportstart;
		$reportend;

$query = "SELECT *
FROM crrirf 
WHERE reportstart = '$reportstart' AND reportend = '$reportend'";
        $result = mysql_query($query);
        $info = mysql_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRRIRF</title>
<h1 align="center">COMBINED REPORT, REQUISITION, ISSUE AND RECEIPT FORM (CRRIRF) - Antiretroviral and OI Drugs (PMTCT)														
</h1>
</head>
<script type="text/javascript">
function endbalcalc1() {
document.form.f121.value = (parseInt(document.form.m121.value) + parseInt(document.form.m171.value)) - parseInt(document.form.f51.value);

document.form.f122.value = (parseInt(document.form.m122.value) + parseInt(document.form.m172.value)) - parseInt(document.form.f52.value);

document.form.f123.value = (parseInt(document.form.m123.value) + parseInt(document.form.m173.value)) - parseInt(document.form.f53.value);

document.form.f124.value = (parseInt(document.form.m124.value) + parseInt(document.form.m174.value)) - parseInt(document.form.f54.value);

document.form.f125.value = (parseInt(document.form.m125.value) + parseInt(document.form.m175.value)) - parseInt(document.form.f55.value);

document.form.f126.value = (parseInt(document.form.m126.value) + parseInt(document.form.m176.value)) - parseInt(document.form.f56.value);

document.form.f127.value = (parseInt(document.form.m127.value) + parseInt(document.form.m177.value)) - parseInt(document.form.f57.value);

document.form.f128.value = (parseInt(document.form.m128.value) + parseInt(document.form.m178.value)) - parseInt(document.form.f58.value);

document.form.f129.value = (parseInt(document.form.m129.value) + parseInt(document.form.m179.value)) - parseInt(document.form.f59.value);

document.form.f1210.value = (parseInt(document.form.m1210.value) + parseInt(document.form.m1710.value)) - parseInt(document.form.f510.value);

document.form.f1211.value = (parseInt(document.form.m1211.value) + parseInt(document.form.m1711.value)) - parseInt(document.form.f511.value);

document.form.f1212.value = (parseInt(document.form.m1212.value) + parseInt(document.form.m1712.value)) - parseInt(document.form.f512.value);

document.form.f1213.value = (parseInt(document.form.m1213.value) + parseInt(document.form.m1713.value)) - parseInt(document.form.f513.value);

document.form.f1214.value = (parseInt(document.form.m1214.value) + parseInt(document.form.m1714.value)) - parseInt(document.form.f514.value);

document.form.f1215.value = (parseInt(document.form.m1215.value) + parseInt(document.form.m1715.value)) - parseInt(document.form.f515.value);

document.form.f1216.value = (parseInt(document.form.m1216.value) + parseInt(document.form.m1716.value)) - parseInt(document.form.f516.value);

document.form.f1217.value = (parseInt(document.form.m1217.value) + parseInt(document.form.m1717.value)) - parseInt(document.form.f517.value);

document.form.f1218.value = (parseInt(document.form.m1218.value) + parseInt(document.form.m1718.value)) - parseInt(document.form.f518.value);

document.form.f1219.value = (parseInt(document.form.m1219.value) + parseInt(document.form.m1719.value)) - parseInt(document.form.f519.value);

document.form.f1220.value = (parseInt(document.form.m1220.value) + parseInt(document.form.m1720.value)) - parseInt(document.form.f520.value);

document.form.f1221.value = (parseInt(document.form.m1221.value) + parseInt(document.form.m1721.value)) - parseInt(document.form.f521.value);

document.form.f1222.value = (parseInt(document.form.m1222.value) + parseInt(document.form.m1722.value)) - parseInt(document.form.f522.value);

document.form.f1223.value = (parseInt(document.form.m1223.value) + parseInt(document.form.m1723.value)) - parseInt(document.form.f523.value);

}
</script>
<style type="text/css">
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
}
p, h2, form, button{border:0; margin:0; padding:0;}
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
    position: absolute;
    margin-left: -40px;
    margin-top: 5px;
}
.sidebar {
   width: 170px;
   height: 150px;
   position: fixed;
   left: 0px;
   top: 300px;
   font-family: Tahoma, Geneva, sans-serif;
   font-style: italic;
   text-decoration: none;
   border: 1px solid #cfcfcf;
   background: #f3f3f3;
   border-bottom: 1px solid #cfcfcf;
   border-radius: 3px 3px 0 0;
   background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
   background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
   background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
   background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
   -webkit-box-shadow: 0 1px whitesmoke;
   box-shadow: 0 1px whitesmoke;
}
.sidebar1{
	width: 170px;
   height: 50px;
   position: fixed;
   left: 0px;
   font-family: Tahoma, Geneva, sans-serif;
   font-style: italic;
   text-decoration: none;
   border: 1px solid #cfcfcf;
   background: #f3f3f3;
   border-bottom: 1px solid #cfcfcf;
   border-radius: 3px 3px 0 0;
   background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
   background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
   background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
   background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
   -webkit-box-shadow: 0 1px whitesmoke;
   box-shadow: 0 1px whitesmoke;
	}
h1 {
  margin: 0px;
  line-height: 40px;
  font-size: 15px;
  font-weight: bold;
  color: #555;
  text-align: center;
  text-shadow: 0 1px white;
  background: #f3f3f3;
  border-bottom: 1px solid #cfcfcf;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
  -webkit-box-shadow: 0 1px whitesmoke;
  box-shadow: 0 1px whitesmoke;
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
color:#666666;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
input{
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
table
{
	width:70%;
border-collapse:collapse;
}
 
th
{
	font: bold 12px "Trebuchet MS", Verdana, Arial, Helvetica,
	sans-serif;
	color: #6D929B;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:50px;
border:1px solid black;
}
td {
	font: italic 11px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
}
</style>
<body onload="endbalcalc1()">
<form name="form" id="formId"  method="POST" >
<div id="stylized">
<fieldset>
<legend style="font-weight:bold; font-size:11px"></legend>
<label for="cboname">Facility Name
</label>
<input type="text" name="facname" id="facname" value="<?php echo $info['facname']?>" />

<label>Facility Code
</label>
<input type="text" name="faccode" id="faccode" value="<?php echo $info['faccode']?>"  /> 


<label>Date Prepared
</label>
<input type="date" name="reportdate" id="reportdate" value="<?php echo $info['reportdate']?>"  />

</fieldset>
<fieldset>
<label>Reporting Period start
</label>
<input type="date" name="reportstart" id="reportstart" value="<?php echo $info['reportstart']?>"  />

<label>Reporting Period end
</label>
<input type="date" name="reportend" id="reportend" value="<?php echo $info['reportend']?>"  />

<label>
</label>
<button type="submit" id="submit">SAVE BALANCE</button>
</fieldset>
</div>
   <table style="background-color:#FFF; width: 100%;" cellpadding="0" cellspacing="0" border="1">
   <tr>
      <th><font color="black" style="transform-style:flat">DRUGS</font></th>
      <th><font color="black">Basic Unit</font></th>
      <th><font color="black">Opening Balance</font>
      <th><font color="black">Quantity Received during the Reporting period</font></th>
      <th><font color="black">Quantity Dispensed during Reporting Period</font></th>
      <th><font color="black">Ending Balance (Physical Count)</font></th>
      <th><font color="black">Remarks</font></th>
       </tr>
 	<tr><td><font color="black">Fixed Dose Combination Adult first line</font></td></tr> 
 <tr>
           <th align="left"><font color="black">AZT/3TC/NVP (300/150/200 mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m51" readonly value="60 TABS" style="width:70%; "></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m121" id="m121" value="<?php echo $info['m121']?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m171" id="m171" value="<?php if($info['m171']==""){echo '0';} else{echo $info['m171'];}?>"  style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f51" id="f51"  value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'AZT/3TC/NVP' AND drugdose1 = '300/150/200')
OR (drugname2 =  'AZT/3TC/NVP' AND drugdose2 = '300/150/200')
OR (drugname3 =  'AZT/3TC/NVP' AND drugdose3 = '300/150/200')
OR (drugname4 =  'AZT/3TC/NVP' AND drugdose4 = '300/150/200')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum1a();updatesum1b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f121" id="f121" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f171" style="width:70%;" onChange="updatesum1a();updatesum1b()" ></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">ABC/3TC (600/300mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m52" readonly value="30 TABS" style="width:70%; " ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m122" value="<?php echo $info['m122']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m172" value="<?php if($info['m172']==""){echo '0';} else{echo $info['m172'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f52"  value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'ABC/3TC' AND drugdose1 = '600/300')
OR (drugname2 =  'ABC/3TC' AND drugdose2 = '600/300')
OR (drugname3 =  'ABC/3TC' AND drugdose3 = '600/300')
OR (drugname4 =  'ABC/3TC' AND drugdose4 = '600/300')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:20%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f122" style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f172" style="width:70%;" onChange="updatesum2a();updatesum2b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">AZT/3TC (300/150 mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m53" readonly value="60 TABS" style="width:70%; " ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m123" value="<?php echo $info['m123']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m173" value="<?php if($info['m173']==""){echo '0';} else{echo $info['m173'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f53"  value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 =  'CBV(AZT/3TC)' AND drugdose1 = '300/150')
OR (drugname2 =  'CBV(AZT/3TC)' AND drugdose2 = '300/150')
OR (drugname3 =  'CBV(AZT/3TC)' AND drugdose3 = '300/150')
OR (drugname4 =  'CBV(AZT/3TC)' AND drugdose4 = '300/150'))
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:20%;" onChange="updatesum3a();updatesum3b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f123" style="width:70%;" onChange="updatesum3a();updatesum3b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f173" style="width:70%;" onChange="updatesum3a();updatesum3b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">TDF/3TC (300/300 mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m54" readonly value="30 TABS" style="width:70%; "onChange="updatesum4();updatesum4b()"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m124" value="<?php echo $info['m124']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m174" value="<?php if($info['m174']==""){echo '0';} else{echo $info['m174'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f54"  value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 =  '(TDF/3TC)' AND drugdose1 = '300/300')
OR (drugname2 =  '(TDF/3TC)' AND drugdose2 = '300/300')
OR (drugname3 =  '(TDF/3TC)' AND drugdose3 = '300/300')
OR (drugname4 =  '(TDF/3TC)' AND drugdose4 = '300/300'))
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum4a();updatesum4b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f124" style="width:70%;" onChange="updatesum4a();updatesum4b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f174" style="width:70%;" onChange="updatesum4a();updatesum4b()"></div></div></td>
        </tr>
        
        <tr>
        <th align="right"><font color="black">TDF/3TC/EFV (300/300/600 mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m55" readonly value="30 TABS" style="width:70%; " ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m125" value="<?php echo $info['m125']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m175" value="<?php if($info['m175']==""){echo '0';} else{echo $info['m175'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f55" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 =  'TDF/3TC/EFV' AND drugdose1 = '300/300/600')
OR (drugname2 =  'TDF/3TC/EFV' AND drugdose2 = '300/300/600')
OR (drugname3 =  'TDF/3TC/EFV' AND drugdose3 = '300/300/600')
OR (drugname4 =  'TDF/3TC/EFV' AND drugdose4 = '300/300/600'))
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum5a();updatesum5b();upwardage5b();upwardagetot2();upwardagetot3()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f125" style="width:70%;" onChange="updatesum5a();updatesum5b();upwardage5c();upwardagetot2();upwardagetot3()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f175" style="width:70%;" onChange="updatesum5a();updatesum5b();upwardage5e();upwardagetot2();upwardagetot3()" ></div></div></td>
        </tr>
 	<tr><td><font color="black">Single Dose Adult first line</font></td></tr> 
        <tr>
        <th align="right"><font color="black">Efavirenz (EFV) 600 mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m56" readonly value="30 TABS" style="width:70%; " ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m126" value="<?php echo $info['m126']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m176" value="<?php if($info['m176']==""){echo '0';} else{echo $info['m176'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f56"  value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 =  'EFV' AND drugdose1 = '600')
OR (drugname2 =  'EFV' AND drugdose2 = '600')
OR (drugname3 =  'EFV' AND drugdose3 = '600')
OR (drugname4 =  'EFV' AND drugdose4 = '600'))
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:20%;" onChange="updatesum6a();updatesum6b();upwardage5b();upwardagetot2();upwardagetot3()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f126" style="width:70%;" onChange="updatesum6a();updatesum6b();upwardage5c();upwardagetot2();upwardagetot3()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f176" style="width:70%;" onChange="updatesum6a();updatesum6b();upwardage5e();upwardagetot2();upwardagetot3()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">Nevirapine (NVP) 200 mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m57" readonly value="60 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m127" value="<?php echo $info['m127']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m177" value="<?php if($info['m177']==""){echo '0';} else{echo $info['m177'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f57"  value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 =  'NVP' AND drugdose1 = '200')
OR (drugname2 =  'NVP' AND drugdose2 = '200')
OR (drugname3 =  'NVP' AND drugdose3 = '200')
OR (drugname4 =  'NVP' AND drugdose4 = '200'))
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:20%;" onChange="updatesum7a();updatesum7b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f127" style="width:70%;" onChange="updatesum7a();updatesum7b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f177" style="width:70%;" onChange="updatesum7a();updatesum7b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">Zidovudine (AZT) 300mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m58" readonly value="60 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m128" value="<?php echo $info['m128']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m178" value="<?php if($info['m178']==""){echo '0';} else{echo $info['m178'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f58"  value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 =  'AZT' AND drugdose1 = '300')
OR (drugname2 =  'AZT' AND drugdose2 = '300')
OR (drugname3 =  'AZT' AND drugdose3 = '300')
OR (drugname4 =  'AZT' AND drugdose4 = '300'))
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:20%;" onChange="updatesum8a();updatesum8b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f128" style="width:70%;" onChange="updatesum8a();updatesum8b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f178" style="width:70%;" onChange="updatesum8a();updatesum8b()" ></div></div></td>
        </tr>
 	<tr><td><font color="black">Adult Second Line Drugs</font></td></tr> 
        <tr>
        <th align="left"><font color="black">Lopinavir/Ritonavir (LPV/r) 200/50mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m59" readonly value="TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m129"  value="<?php echo $info['m129']?>"style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m179" value="<?php if($info['m179']==""){echo '0';} else{echo $info['m179'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f59" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 =  'LPV/r' AND drugdose1 = '200/50')
OR (drugname2 =  'LPV/r' AND drugdose2 = '200/50')
OR (drugname3 =  'LPV/r' AND drugdose3 = '200/50')
OR (drugname4 =  'LPV/r' AND drugdose4 = '200/50'))
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum9a();updatesum9b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f129" style="width:70%;" onChange="updatesum9a();updatesum9b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f179" style="width:70%;" onChange="updatesum9a();updatesum9b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">Atazanavir/Ritonavir (ATV/r) 300/100mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m510" readonly value="30 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1210" value="<?php echo $info['m1210']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1710"  value="<?php if($info['m1710']==""){echo '0';} else{echo $info['m1710'];}?>"style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f510" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 =  'ATV/r' AND drugdose1 = '300/100')
OR (drugname2 =  'ATV/r' AND drugdose2 = '300/100')
OR (drugname3 =  'ATV/r' AND drugdose3 = '300/100')
OR (drugname4 =  'ATV/r' AND drugdose4 = '300/100'))
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum10a();updatesum10b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1210" style="width:70%;" onChange="updatesum10a();updatesum10b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1710" style="width:70%;" onChange="updatesum10a();updatesum10b()" ></div></div></td>
        </tr>
 	<tr><td><font color="black">Pediatric Fixed Dose Combination</font></td></tr> 
        <tr>
        <th align="left"><font color="black">AZT/3TC/NVP (60/30/50mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m511" readonly value="1 TEST" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1211" value="<?php echo $info['m1211']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1711" value="<?php if($info['m1711']==""){echo '0';} else{echo $info['m1711'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f511"  value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'AZT/3TC/NVP' AND drugdose1 = '60/30/50')
OR (drugname2 =  'AZT/3TC/NVP' AND drugdose2 = '60/30/50')
OR (drugname3 =  'AZT/3TC/NVP' AND drugdose3 = '60/30/50')
OR (drugname4 =  'AZT/3TC/NVP' AND drugdose4 = '60/30/50')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:20%;" onChange="updatesum11a();updatesum11b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1211" style="width:70%;" onChange="updatesum11a();updatesum11b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1711" style="width:70%;" onChange="updatesum11a();updatesum11b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">ABC/3TC(60/30mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m512" readonly value="60 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1212" value="<?php echo $info['m1212']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1712" value="<?php if($info['m1712']==""){echo '0';} else{echo $info['m1712'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f512"  value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'ABC/3TC' AND drugdose1 = '60/30')
OR (drugname2 =  'ABC/3TC' AND drugdose2 = '60/30')
OR (drugname3 =  'ABC/3TC' AND drugdose3 = '60/30')
OR (drugname4 =  'ABC/3TC' AND drugdose4 = '60/30')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:20%;" onChange="updatesum12a();updatesum12b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1212" style="width:70%;" onChange="updatesum12a();updatesum12b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1712" style="width:70%;" onChange="updatesum12a();updatesum12b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">AZT/3TC (60/30mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m513" readonly value="60 TABS" style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1213" value="<?php echo $info['m1213']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1713" value="<?php if($info['m1713']==""){echo '0';} else{echo $info['m1713'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f513" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'AZT/3TC' AND drugdose1 = '60/30')
OR (drugname2 =  'AZT/3TC' AND drugdose2 = '60/30')
OR (drugname3 =  'AZT/3TC' AND drugdose3 = '60/30')
OR (drugname4 =  'AZT/3TC' AND drugdose4 = '60/30')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum13a();updatesum13b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1213" style="width:70%;" onChange="updatesum13a();updatesum13b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1713" style="width:70%;" onChange="updatesum13a();updatesum13b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">d4T/3TC (6/30mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m514" readonly value="60 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1214" value="<?php echo $info['m1214']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1714" value="<?php if($info['m1714']==""){echo '0';} else{echo $info['m1714'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f514" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'd4T/3TC' AND drugdose1 = '6/30')
OR (drugname2 =  'd4T/3TC' AND drugdose2 = '6/30')
OR (drugname3 =  'd4T/3TC' AND drugdose3 = '6/30')
OR (drugname4 =  'd4T/3TC' AND drugdose4 = '6/30')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum14a();updatesum14b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1214" style="width:70%;" onChange="updatesum14a();updatesum14b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1714" style="width:70%;" onChange="updatesum14a();updatesum14b()" ></div></div></td>
        </tr>
 	<tr><td><font color="black">Pediatric Single Dose</font></td></tr> 
        <tr>
        <th align="left"><font color="black">Abacavir (ABC) 60mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m515" readonly value="60 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1215" value="<?php echo $info['m1215']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1715" value="<?php if($info['m1715']==""){echo '0';} else{echo $info['m1715'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f515" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'ABC' AND drugdose1 = '60')
OR (drugname2 =  'ABC' AND drugdose2 = '60')
OR (drugname3 =  'ABC' AND drugdose3 = '60')
OR (drugname4 =  'ABC' AND drugdose4 = '60')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1215" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1715" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Efavirenz (EFV) 200mg Scored</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m516" readonly value="90 scr TABS" style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1216" value="<?php echo $info['m1216']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1716" value="<?php if($info['m1716']==""){echo '0';} else{echo $info['m1716'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f516" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'EFV' AND drugdose1 = '200')
OR (drugname2 =  'EFV' AND drugdose2 = '200')
OR (drugname3 =  'EFV' AND drugdose3 = '200')
OR (drugname4 =  'EFV' AND drugdose4 = '200')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1216" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1716" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Nevirapine (NVP) 50mg tablet</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m517" readonly value="30 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1217" value="<?php echo $info['m1217']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1717" value="<?php if($info['m1717']==""){echo '0';} else{echo $info['m1717'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f517" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'NVP' AND drugdose1 = '50')
OR (drugname2 =  'NVP' AND drugdose2 = '50')
OR (drugname3 =  'NVP' AND drugdose3 = '50')
OR (drugname4 =  'NVP' AND drugdose4 = '50')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1217" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1717" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Nevirapine (NVP) 50mg/5ml</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m518" readonly value="100ml" style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1218" value="<?php echo $info['m1218']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1718" value="<?php if($info['m1718']==""){echo '0';} else{echo $info['m1718'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f518" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'NVP' AND drugdose1 = '50/5(100)')
OR (drugname2 =  'NVP' AND drugdose2 = '50/5(100)')
OR (drugname3 =  'NVP' AND drugdose3 = '50/5(100)')
OR (drugname4 =  'NVP' AND drugdose4 = '50/5(100)')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1218" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1718" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Nevirapine (NVP) 50mg/5ml</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m519" readonly value="25ml" style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1219" value="<?php echo $info['m1219']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1719" value="<?php if($info['m1719']==""){echo '0';} else{echo $info['m1719'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f519" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'NVP' AND drugdose1 = '50/5(25)')
OR (drugname2 =  'NVP' AND drugdose2 = '50/5(25)')
OR (drugname3 =  'NVP' AND drugdose3 = '50/5(25)')
OR (drugname4 =  'NVP' AND drugdose4 = '50/5(25)')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1219" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1719" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
 	<tr><td><font color="black">Pediatric Second Line Drugs</font></td></tr> 
        <tr>
        <th align="left"><font color="black">Lopinavir/Ritonavir (LPV/r) 100/25mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m520" readonly value="60 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1220" value="<?php echo $info['m1220']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1720" value="<?php if($info['m1720']==""){echo '0';} else{echo $info['m1720'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f520" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'LPV/r' AND drugdose1 = '100/25')
OR (drugname2 =  'LPV/r' AND drugdose2 = '100/25')
OR (drugname3 =  'LPV/r' AND drugdose3 = '100/25')
OR (drugname4 =  'LPV/r' AND drugdose4 = '100/25')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1220" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1720" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Lopinavir/Ritonavir (LPV/r) 80+20mg/ml</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m521" readonly value="300ml" style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1221" value="<?php echo $info['m1221']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1721" value="<?php if($info['m1721']==""){echo '0';} else{echo $info['m1721'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f521" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'LPV/r' AND drugdose1 = '80/20')
OR (drugname2 =  'LPV/r' AND drugdose2 = '80/20')
OR (drugname3 =  'LPV/r' AND drugdose3 = '80/20')
OR (drugname4 =  'LPV/r' AND drugdose4 = '80/20')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1221" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1721" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
 	<tr><td><font color="black">Opportunistic Infections Drugs</font></td></tr> 
        <tr>
        <th align="left"><font color="black">Co-trimoxazole 120mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m522" readonly value="TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1222" value="<?php echo $info['m1222']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1722" value="<?php if($info['m1722']==""){echo '0';} else{echo $info['m1722'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f522" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'ABC' AND drugdose1 = '60')
OR (drugname2 =  'ABC' AND drugdose2 = '60')
OR (drugname3 =  'ABC' AND drugdose3 = '60')
OR (drugname4 =  'ABC' AND drugdose4 = '60')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1222" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1722" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Co-trimoxazole 960mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m523" readonly value="TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1223" value="<?php echo $info['m1223']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1723" value="<?php if($info['m1723']==""){echo '0';} else{echo $info['m1723'];}?>" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f523" value="<?php 
$query2 = "SELECT COUNT(*) 
FROM  `pharmcrirrf` 
WHERE (drugname1 =  'ABC' AND drugdose1 = '60')
OR (drugname2 =  'ABC' AND drugdose2 = '60')
OR (drugname3 =  'ABC' AND drugdose3 = '60')
OR (drugname4 =  'ABC' AND drugdose4 = '60')
AND pharmdispensedate
BETWEEN  '$_GET[reportstart]' AND  '$_GET[reportend]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1223" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1723" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
</table>​
<!-- <button type="submit" id="submit">SAVE</button> -->
</form>
<script src="../jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$('#submit').click( function() {
	if($('#facname').val() == ''&&$('#faccode').val() == ''){
		alert('Facility name missing');
		return false;
	}
	else if($('#reportstart').val() == ''||$('#reportend').val() == ''){
		alert('Report Start and End date mandatory');
		return false;
	}
	else if($('#reportdate').val() == ''){
		alert('Report missind');
		return false;
	}
	else{
			var query = $('#formId').serialize();
        	var url = 'updatecrrirf.php';
        	$.post(url, 
        	query, 
        	function (response) {
        	alert ("CRIRRF BALANCE updated");
			});
		return false;
	}
	});
</script> 
</body>
</html>
