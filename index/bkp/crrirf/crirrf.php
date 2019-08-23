<?php
session_start();
$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 

class MyClass{
    public function GetUserInformation(){
$query = "SELECT *
FROM (select * FROM crrirf
 order by id DESC LIMIT 1) as vis
 order by id ASC";
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
<body>
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
<input type="date" name="reportdate" id="reportdate"   />

</fieldset>
<fieldset>
<label>Reporting Period start
</label>
<input type="date" name="reportstart" id="reportstart"   />

<label>Reporting Period end
</label>
<input type="date" name="reportend" id="reportend"  />

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
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m121" id="m121" value="<?php echo $info['f121']?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m171" id="m171" value=""  style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f51" id="f51"  value="" style="width:20%;" onChange="updatesum1a();updatesum1b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f121" id="f121" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f171" style="width:70%;" onChange="updatesum1a();updatesum1b()" ></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">ABC/3TC (600/300mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m52" readonly value="30 TABS" style="width:70%; " ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m122" value="<?php echo $info['f122']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m172" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f52"  value=""style="width:20%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f122" style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f172" style="width:70%;" onChange="updatesum2a();updatesum2b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">AZT/3TC (300/150 mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m53" readonly value="60 TABS" style="width:70%; " ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m123" value="<?php echo $info['f123']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m173" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f53"  value=""style="width:20%;" onChange="updatesum3a();updatesum3b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f123" style="width:70%;" onChange="updatesum3a();updatesum3b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f173" style="width:70%;" onChange="updatesum3a();updatesum3b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">TDF/3TC (300/300 mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m54" readonly value="30 TABS" style="width:70%; "onChange="updatesum4();updatesum4b()"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m124" value="<?php echo $info['f124']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m174" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f54"  value="" style="width:20%;" onChange="updatesum4a();updatesum4b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f124" style="width:70%;" onChange="updatesum4a();updatesum4b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f174" style="width:70%;" onChange="updatesum4a();updatesum4b()"></div></div></td>
        </tr>
        
        <tr>
        <th align="right"><font color="black">TDF/3TC/EFV (300/300/600 mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m55" readonly value="30 TABS" style="width:70%; " ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m125" value="<?php echo $info['f125']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m175" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f55" value="" style="width:20%;" onChange="updatesum5a();updatesum5b();upwardage5b();upwardagetot2();upwardagetot3()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f125" style="width:70%;" onChange="updatesum5a();updatesum5b();upwardage5c();upwardagetot2();upwardagetot3()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f175" style="width:70%;" onChange="updatesum5a();updatesum5b();upwardage5e();upwardagetot2();upwardagetot3()" ></div></div></td>
        </tr>
 	<tr><td><font color="black">Single Dose Adult first line</font></td></tr> 
        <tr>
        <th align="right"><font color="black">Efavirenz (EFV) 600 mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m56" readonly value="30 TABS" style="width:70%; " ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m126" value="<?php echo $info['f126']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m176" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f56"  value=""style="width:20%;" onChange="updatesum6a();updatesum6b();upwardage5b();upwardagetot2();upwardagetot3()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f126" style="width:70%;" onChange="updatesum6a();updatesum6b();upwardage5c();upwardagetot2();upwardagetot3()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f176" style="width:70%;" onChange="updatesum6a();updatesum6b();upwardage5e();upwardagetot2();upwardagetot3()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">Nevirapine (NVP) 200 mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m57" readonly value="60 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m127" value="<?php echo $info['f127']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m177" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f57"  value=""style="width:20%;" onChange="updatesum7a();updatesum7b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f127" style="width:70%;" onChange="updatesum7a();updatesum7b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f177" style="width:70%;" onChange="updatesum7a();updatesum7b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">Zidovudine (AZT) 300mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m58" readonly value="60 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m128" value="<?php echo $info['f128']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m178" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f58"  value=""style="width:20%;" onChange="updatesum8a();updatesum8b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f128" style="width:70%;" onChange="updatesum8a();updatesum8b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f178" style="width:70%;" onChange="updatesum8a();updatesum8b()" ></div></div></td>
        </tr>
 	<tr><td><font color="black">Adult Second Line Drugs</font></td></tr> 
        <tr>
        <th align="left"><font color="black">Lopinavir/Ritonavir (LPV/r) 200/50mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m59" readonly value="TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m129"  value="<?php echo $info['f129']?>"style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m179" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f59" value="" style="width:20%;" onChange="updatesum9a();updatesum9b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f129" style="width:70%;" onChange="updatesum9a();updatesum9b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f179" style="width:70%;" onChange="updatesum9a();updatesum9b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">Atazanavir/Ritonavir (ATV/r) 300/100mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m510" readonly value="30 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1210" value="<?php echo $info['f1210']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1710"  value=""style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f510" value="" style="width:20%;" onChange="updatesum10a();updatesum10b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1210" style="width:70%;" onChange="updatesum10a();updatesum10b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1710" style="width:70%;" onChange="updatesum10a();updatesum10b()" ></div></div></td>
        </tr>
 	<tr><td><font color="black">Pediatric Fixed Dose Combination</font></td></tr> 
        <tr>
        <th align="left"><font color="black">AZT/3TC/NVP (60/30/50mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m511" readonly value="1 TEST" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1211" value="<?php echo $info['f1211']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1711" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f511"  value=""style="width:20%;" onChange="updatesum11a();updatesum11b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1211" style="width:70%;" onChange="updatesum11a();updatesum11b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1711" style="width:70%;" onChange="updatesum11a();updatesum11b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">ABC/3TC(60/30mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m512" readonly value="60 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1212" value="<?php echo $info['f1212']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1712" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f512"  value=""style="width:20%;" onChange="updatesum12a();updatesum12b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1212" style="width:70%;" onChange="updatesum12a();updatesum12b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1712" style="width:70%;" onChange="updatesum12a();updatesum12b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">AZT/3TC (60/30mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m513" readonly value="60 TABS" style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1213" value="<?php echo $info['f1213']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1713" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f513" value="" style="width:20%;" onChange="updatesum13a();updatesum13b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1213" style="width:70%;" onChange="updatesum13a();updatesum13b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1713" style="width:70%;" onChange="updatesum13a();updatesum13b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">d4T/3TC (6/30mg)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m514" readonly value="60 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1214" value="<?php echo $info['f1214']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1714" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f514" value="" style="width:20%;" onChange="updatesum14a();updatesum14b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1214" style="width:70%;" onChange="updatesum14a();updatesum14b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1714" style="width:70%;" onChange="updatesum14a();updatesum14b()" ></div></div></td>
        </tr>
 	<tr><td><font color="black">Pediatric Single Dose</font></td></tr> 
        <tr>
        <th align="left"><font color="black">Abacavir (ABC) 60mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m515" readonly value="60 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1215" value="<?php echo $info['f1215']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1715" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f515" value="" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1215" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1715" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Efavirenz (EFV) 200mg Scored</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m516" readonly value="90 scr TABS" style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1216" value="<?php echo $info['f1216']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1716" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f516" value="" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1216" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1716" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Nevirapine (NVP) 50mg tablet</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m517" readonly value="30 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1217" value="<?php echo $info['f1217']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1717" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f517" value="" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1217" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1717" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Nevirapine (NVP) 50mg/5ml</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m518" readonly value="100ml" style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1218" value="<?php echo $info['f1218']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1718" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f518" value="" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1218" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1718" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Nevirapine (NVP) 50mg/5ml</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m519" readonly value="25ml" style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1219" value="<?php echo $info['f1219']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1719" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f519" value="" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1219" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1719" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
 	<tr><td><font color="black">Pediatric Second Line Drugs</font></td></tr> 
        <tr>
        <th align="left"><font color="black">Lopinavir/Ritonavir (LPV/r) 100/25mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m520" readonly value="60 TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1220" value="<?php echo $info['f1220']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1720" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f520" value="" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1220" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1720" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Lopinavir/Ritonavir (LPV/r) 80+20mg/ml</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m521" readonly value="300ml" style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1221" value="<?php echo $info['f1221']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1721" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f521" value="" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1221" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1721" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
 	<tr><td><font color="black">Opportunistic Infections Drugs</font></td></tr> 
        <tr>
        <th align="left"><font color="black">Co-trimoxazole 120mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m522" readonly value="TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1222" value="<?php echo $info['f1222']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1722" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f522" value="" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1222" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1722" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Co-trimoxazole 960mg</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m523" readonly value="TABS" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1223" value="<?php echo $info['f1223']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1723" value="" style="width:30%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f523" value="" style="width:20%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1223" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1723" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        </tr>
</table>​
<label>
</label>
<button type="submit" id="submit">SAVE</button>
</form>
<script src="../jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$('#submit').click( function() {
	if($('#facname').val() == ''||$('#faccode').val() == ''){
		alert('Facility name and Code Mandatory');
		return false;
	}
	else if($('#reportstart').val() == ''||$('#reportend').val() == ''){
		alert('Report Start and End date mandatory');
		return false;
	}
	else if($('#reportdate').val() == ''){
		alert('Report missing');
		return false;
	}
	else{
			var query = $('#formId').serialize();
        	var url = 'insertcrrirf.php';
        	$.post(url, 
        	query, 
        	function (response) {
        	alert ("CRIRRF Record Added");
			});
		alert ("CRIRRF Record Added");
		return false;
	}
	});
</script> 
</body>
</html>
