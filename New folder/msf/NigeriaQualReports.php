<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<script src="../jquery-1.11.1.min.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NigeriaQual</title>
<h1 align="center">Nigeria Qual Export Portal										
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
<a href="javascript:history.go(-1)">[BACK]</a>
<?php 
session_start();
ob_start();
$_SESSION=$_GET;
$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$fac="select facilityname from facility;";
$resultfac=mysql_query($fac);
$infac = mysql_fetch_assoc($resultfac); 


// Check Adult/Pediatric string
if ($_GET['summ']=='Adult'){
	
$reppstartm = $_GET['reppstartm'];
$reppstartm;
$reppstarty = $_GET['reppstarty'];
$reppstarty;
 
$reppendm = $_GET['reppendm'];
$reppendm;
$reppendy = $_GET['reppendy'];
$reppendy; 
	if($reppstartm=='1' && $reppstarty==2014 ) {$rtime = strtotime('1/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='2' && $reppstarty==2014) {$rtime = strtotime('2/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='3' && $reppstarty==2014) {$rtime = strtotime('3/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='4' && $reppstarty==2014) {$rtime = strtotime('4/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='5' && $reppstarty==2014) {$rtime = strtotime('5/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='6' && $reppstarty==2014) {$rtime = strtotime('6/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='7' && $reppstarty==2014) {$rtime = strtotime('7/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='8' && $reppstarty==2014) {$rtime = strtotime('8/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='9' && $reppstarty==2014) {$rtime = strtotime('9/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='10' && $reppstarty==2014) {$rtime = strtotime('10/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='11' && $reppstarty==2014) {$rtime = strtotime('11/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='12' && $reppstarty==2014) {$rtime = strtotime('12/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='1' && $reppstarty==2015 ) {$rtime = strtotime('1/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='2' && $reppstarty==2015) {$rtime = strtotime('2/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='3' && $reppstarty==2015) {$rtime = strtotime('3/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='4' && $reppstarty==2015) {$rtime = strtotime('4/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='5' && $reppstarty==2015) {$rtime = strtotime('5/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='6' && $reppstarty==2015) {$rtime = strtotime('6/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='7' && $reppstarty==2015) {$rtime = strtotime('7/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='8' && $reppstarty==2015) {$rtime = strtotime('8/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='9' && $reppstarty==2015) {$rtime = strtotime('9/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='10' && $reppstarty==2015) {$rtime = strtotime('10/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='11' && $reppstarty==2015) {$rtime = strtotime('11/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='12' && $reppstarty==2015) {$rtime = strtotime('12/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='1' && $reppstarty==2016) {$rtime = strtotime('1/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='2' && $reppstarty==2016) {$rtime = strtotime('2/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='3' && $reppstarty==2016) {$rtime = strtotime('3/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='4' && $reppstarty==2016) {$rtime = strtotime('4/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='5' && $reppstarty==2016) {$rtime = strtotime('5/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='6' && $reppstarty==2016) {$rtime = strtotime('6/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='7' && $reppstarty==2016) {$rtime = strtotime('7/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='8' && $reppstarty==2016) {$rtime = strtotime('8/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='9' && $reppstarty==2016) {$rtime = strtotime('9/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='10' && $reppstarty==2016) {$rtime = strtotime('10/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='11' && $reppstarty==2016) {$rtime = strtotime('11/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='12' && $reppstarty==2016) {$rtime = strtotime('12/1/2016'); $rdatestart=date('Y-m-d',$rtime);}
	elseif($reppstartm=='1' && $reppstarty==2017) {$rtime = strtotime('1/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='2' && $reppstarty==2017) {$rtime = strtotime('2/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='3' && $reppstarty==2017) {$rtime = strtotime('3/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='4' && $reppstarty==2017) {$rtime = strtotime('4/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='5' && $reppstarty==2017) {$rtime = strtotime('5/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='6' && $reppstarty==2017) {$rtime = strtotime('6/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='7' && $reppstarty==2017) {$rtime = strtotime('7/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='8' && $reppstarty==2017) {$rtime = strtotime('8/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='9' && $reppstarty==2017) {$rtime = strtotime('9/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='10' && $reppstarty==2017) {$rtime = strtotime('10/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='11' && $reppstarty==2017) {$rtime = strtotime('11/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='12' && $reppstarty==2017) {$rtime = strtotime('12/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	else {$rdatestart = "";}
		if($reppendm=='1' && $reppendy==2014 ) {$rtime = strtotime('1/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='2' && $reppendy==2014) {$rtime = strtotime('2/28/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='3' && $reppendy==2014) {$rtime = strtotime('3/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='4' && $reppendy==2014) {$rtime = strtotime('4/30/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='5' && $reppendy==2014) {$rtime = strtotime('5/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='6' && $reppendy==2014) {$rtime = strtotime('6/30/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='7' && $reppendy==2014) {$rtime = strtotime('7/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='8' && $reppendy==2014) {$rtime = strtotime('8/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='9' && $reppendy==2014) {$rtime = strtotime('9/30/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='10' && $reppendy==2014) {$rtime = strtotime('10/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='11' && $reppendy==2014) {$rtime = strtotime('11/30/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='12' && $reppendy==2014) {$rtime = strtotime('12/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='1' && $reppendy==2016) {$rtime = strtotime('1/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='1' && $reppendy==2015 ) {$rtime = strtotime('1/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='2' && $reppendy==2015) {$rtime = strtotime('2/28/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='3' && $reppendy==2015) {$rtime = strtotime('3/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='4' && $reppendy==2015) {$rtime = strtotime('4/30/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='5' && $reppendy==2015) {$rtime = strtotime('5/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='6' && $reppendy==2015) {$rtime = strtotime('6/30/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='7' && $reppendy==2015) {$rtime = strtotime('7/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='8' && $reppendy==2015) {$rtime = strtotime('8/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='9' && $reppendy==2015) {$rtime = strtotime('9/30/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='10' && $reppendy==2015) {$rtime = strtotime('10/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='11' && $reppendy==2015) {$rtime = strtotime('11/30/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='12' && $reppendy==2015) {$rtime = strtotime('12/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='1' && $reppendy==2016) {$rtime = strtotime('1/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='2' && $reppendy==2016) {$rtime = strtotime('2/28/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='3' && $reppendy==2016) {$rtime = strtotime('3/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='4' && $reppendy==2016) {$rtime = strtotime('4/30/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='5' && $reppendy==2016) {$rtime = strtotime('5/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='6' && $reppendy==2016) {$rtime = strtotime('6/30/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='7' && $reppendy==2016) {$rtime = strtotime('7/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='8' && $reppendy==2016) {$rtime = strtotime('8/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='9' && $reppendy==2016) {$rtime = strtotime('9/30/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='10' && $reppendy==2016) {$rtime = strtotime('10/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='11' && $reppendy==2016) {$rtime = strtotime('11/30/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='12' && $reppendy==2016) {$rtime = strtotime('12/31/2016'); $rdateend=date('Y-m-d',$rtime);}
	elseif($reppendm=='1' && $reppendy==2017) {$rtime = strtotime('1/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='2' && $reppendy==2017) {$rtime = strtotime('2/28/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='3' && $reppendy==2017) {$rtime = strtotime('3/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='4' && $reppendy==2017) {$rtime = strtotime('4/30/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='5' && $reppendy==2017) {$rtime = strtotime('5/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='6' && $reppendy==2017) {$rtime = strtotime('6/30/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='7' && $reppendy==2017) {$rtime = strtotime('7/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='8' && $reppendy==2017) {$rtime = strtotime('8/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='9' && $reppendy==2017) {$rtime = strtotime('9/30/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='10' && $reppendy==2017) {$rtime = strtotime('10/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='11' && $reppendy==2017) {$rtime = strtotime('11/30/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='12' && $reppendy==2017) {$rtime = strtotime('12/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	else {$rdateend = "";}
//	echo $rdatestart."\n".$rdateend;
	//ART 1
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Patient Demographics Data...</span><br />';
$patdem="select surname, othernames, 'Yes' as ClinicalVisit6MonthsPriorToReview,case maritalstatus WHEN '' THEN 'Single' ELSE maritalstatus END as maritalstatus,hospitalid as hospitalno,@a:=@a+1 RNL_SerialNo,sex as Gender,dob as DateOfBirth,Age,'No' as HospitalAdmissionDuringReview,	case jobstatus WHEN '' THEN 'Unemployed' ELSE jobstatus END as jobstatus,case educationallevel WHEN '' THEN 'None' ELSE educationallevel END as educationallevel,pepid,enroldate
from patient,(SELECT @a:= 0) AS a
WHERE pepid IN (select DISTINCT pepid from visit where visittype in ('Clinical Evaluation','Pharmacy Order','Laboratory Order/Result') and visitdate BETWEEN '$rdatestart' AND '$rdateend')
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/patientdemographics.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Patient Demographics Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Patient Demographics Data Not Exported, Make Sure the Directory is empty.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting ART Data...</span><br />';
$patdem="select pepid as patientid,case visitdate WHEN '' THEN 'No' ELSE 'Yes' END as PatientEverStartedOnART,visitdate as ART_Start_Date,'Yes' as TreatmentPrepCompletedBeforeStartOfART
from pharmacy
where drugname1!='' and visitdate BETWEEN '$rdatestart' AND '$rdateend'
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/art.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">ART Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: ART Data Not Exported, Delete already existing art.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting ART ADHERENCE Data...</span><br />';
$patdem="SELECT c.pepid,CASE c.regadherencea WHEN '' THEN 'Yes' ELSE 'No' END as ARTAdherenceAssessmentPerformedDuringLast3Months,MAX(c.visitdate) as LastDateOfAssessment,b.cd4,b.visitdate
from clinicaleval c JOIN (SELECT pepid,MAX(CONVERT((results), SIGNED INTEGER)) AS cd4,visitdate
from laboratory
where tests='CD4'
group by pepid) b
ON (c.pepid=b.pepid)
GROUP BY c.pepid
HAVING MAX(c.visitdate) BETWEEN '$rdatestart' AND '$rdateend'
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/art_adherence.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">ART ADHERENCE Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: ART ADHERENCE Data Not Exported, Delete already existing art_adherence.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting ART REGIMEN Data...</span><br />';
$patdem="select pepid, CASE visitdate WHEN '2015-06-01' THEN 'Yes' ELSE 'No' END as PatientOnARTFirstDayOfReviewPeriod,'Yes' as PatientOnARTAnytimeDuringReviewPeriod,CASE 
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%NVP%'  THEN 1 
WHEN drugname1 LIKE  '%TDF%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN 2 
WHEN drugname1 LIKE  '%NVP%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%D4T%'  THEN 3 
WHEN drugname1 LIKE  '%NVP%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%ABC%'  THEN 4 
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN 5 
WHEN drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%TDF%' AND (drugname1 LIKE  '%FTC%' OR drugname1 LIKE  '%3TC%') THEN 6 
WHEN drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%D4T%' AND drugname1 LIKE  '%3TC%'  THEN 7
WHEN drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%3TC%'  THEN 8
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%'  THEN 9
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%D4T%' AND drugname1 LIKE  '%3TC%'  THEN 10
ELSE 11 END as 1stRegminen,MIN(visitdate) as 1stRegimenStartDate,CASE WHEN drugname1 LIKE '%LPV%' THEN visitdate ELSE '' END as 1stRegimenChangeDate,CASE WHEN drugname1 LIKE '%LPV%' THEN drugname1 ELSE '' END as 2ndRegimen,CASE WHEN drugname1 LIKE '%LPV%' THEN visitdate ELSE '' END as 2ndRegimenStartDate,CASE WHEN drugname1 LIKE '%DRV%' THEN visitdate ELSE '' END as 2ndRegimenChangeDate,CASE WHEN drugname1 LIKE '%DRV%' THEN drugname1 ELSE '' END as 3rdRegimen,CASE WHEN drugname1 LIKE '%DRV%' THEN visitdate ELSE '' END as 3rdRegimenStartDate,'' as 3rdRegimenChangeDate,'' as OtherRegimenSpecify, MAX(visitdate) as DateOfLastDrugPickup,ROUND(drugno1/30) as DurationOfMedicationCoverageInMonths
from pharmacy
where drugname1 !=''
group by pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/ARTRegimenDuringReviewPeriod.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">ART REGIMEN Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: ART REGIMEN Data Not Exported, Delete already existing art_adherence.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting BASELINE Data...</span><br />';
$patdem="select  cd4value as CD4_Count, MIN(visitdate) as CD4_Count_Date,weight,visitdate as Weight_Date,whostage as WHO_Clinical_Stage, CASE whostage WHEN 1 THEN visitdate WHEN 2 THEN visitdate WHEN 3 THEN visitdate WHEN 4 THEN visitdate else '' END as WHO_Clinical_State_Date,pepid as patientid
from clinicaleval
where visitdate  BETWEEN '$rdatestart' AND '$rdateend'
group by pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/BaselineParameters.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">BASELINE Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: BASELINE Data Not Exported, Delete already existing art_adherence.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting HEPATITIS B Data...<br /></span>';
$patdem="select a.pepid, CASE a.tests WHEN 'HBsAG (*At Baseline)' THEN 'Yes' ELSE 'No' END as HepatitisBAssayEverDoneForPatient,a.results as ResultOfHepatitisBAssay,CASE b.visittype WHEN 'Clinical Evaluation' THEN 'Yes' ELSE 'No' END as ClinicalEvaluationARTFormFilledAtLastVisit
from laboratory a JOIN (select pepid,MAX(visitdate) as visitdate,visittype from visit where visittype in ('Clinical Evaluation','Pharmacy Order','Laboratory Order/Result')) b
ON (a.pepid=b.pepid)
where lower(tests) like '%hbs%'
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/hepatitisb.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">HEPATITIS B Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: HEPATITIS B Data Not Exported, Delete already existing hepatitisb.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting COTRIMOXAZOLE Data...</span><br />';
$patdem="SELECT a.pepid AS patientid,CASE MAX(a.oidrug) WHEN  'CTX' THEN  'Yes' ELSE  'No' END AS PatientReceiveCotrimoxazoleDuringReviewPeriod,CASE WHEN b.visitdate >=  '$rdatestart' <  '$rdateend' THEN  'Yes' ELSE  'No' END AS PatientCurrentlyOnCotrimoxazoleProphylaxis, b.visitdate as DateOfLastPrescription
FROM pharmacy a JOIN (SELECT pepid, MAX( visitdate ) AS visitdate, oidrug FROM pharmacy WHERE oidrug =  'CTX' AND visitdate BETWEEN  '$rdatestart' AND '$rdateend' GROUP BY pepid ) b 
ON ( a.pepid = b.pepid )  
WHERE a.visitdate BETWEEN '$rdatestart' AND '$rdateend'
group by a.pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/cotrimoxazole.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">COTRIMOXAZOLE Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: COTRIMOXAZOLE Data Not Exported, Delete already existing cotrimoxazole.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting ClinicalEvaluationVisitsInReviewPeriod Data...</span><br />';
$patdem="SELECT
    pepid,visitdate as visit1,  
    MAX(CASE WHEN (visittype='Clinical Evaluation') THEN visitdate ELSE 0 END) AS visit2,
    MAX(CASE WHEN (visittype='Pharmacy Order') THEN visitdate ELSE 0 END) AS visit3,
    MAX(CASE WHEN (visittype='Laboratory Order/Result') THEN visitdate ELSE 0 END) AS visit4
FROM 
    visit
WHERE visitdate BETWEEN '$rdatestart' AND '$rdateend'
GROUP BY 
    pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/ClinicalEvaluationVisitsInReviewPeriod.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">ClinicalEvaluationVisitsInReviewPeriod Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: ClinicalEvaluationVisitsInReviewPeriod Data Not Exported, Delete already existing cotrimoxazole.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting PatientStatusDuringReviewPeriod Data...</span><br />';
$patdem="select pepid,planarvtherapy AS status,enroldate as DateOfStatusChange,planarvtherchgtrtmtreason as ReasonForStatusChange, CASE 	patienttransout WHEN 'ART' THEN 'Yes' WHEN 'PRE-ART' THEN 'Yes' ELSE 'No' END as Transferred_Out, CASE 	patientdied WHEN 'ART' THEN 'Yes' WHEN 'PRE-ART' THEN 'Yes' ELSE 'No' END as Death, CASE WHEN patientdied='ART' OR patienttransout='ART' THEN 'Yes' WHEN patientdied='PRE-ART' OR patienttransout='PRE-ART' THEN 'Yes' ELSE 'No' END as Discontinued_Care,patienttransoutdate,dateofdeath,CASE WHEN patientdied='ART' OR patienttransout='ART' THEN patienttransoutdate  ELSE 'No' END as Discontinued_Care_Date,sourceofdeathinf as Discontinued_Care_Reason,'' as Discontinued_Care_Reason_Other
from patient
WHERE enroldate BETWEEN '$rdatestart' AND '$rdateend'
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/PatientStatusDuringReviewPeriod.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">PatientStatusDuringReviewPeriod Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: PatientStatusDuringReviewPeriod Data Not Exported, Delete already existing PatientStatusDuringReviewPeriod.csv in the Storage Directory.</span><br /><br />';
		}
	}
}
elseif ($_GET['summ']=='Pediatric'){
	
$reppstartm = $_GET['reppstartm'];
$reppstartm;
$reppstarty = $_GET['reppstarty'];
$reppstarty;
 
$reppendm = $_GET['reppendm'];
$reppendm;
$reppendy = $_GET['reppendy'];
$reppendy; 
	if($reppstartm=='1' && $reppstarty==2014 ) {$rtime = strtotime('1/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='2' && $reppstarty==2014) {$rtime = strtotime('2/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='3' && $reppstarty==2014) {$rtime = strtotime('3/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='4' && $reppstarty==2014) {$rtime = strtotime('4/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='5' && $reppstarty==2014) {$rtime = strtotime('5/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='6' && $reppstarty==2014) {$rtime = strtotime('6/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='7' && $reppstarty==2014) {$rtime = strtotime('7/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='8' && $reppstarty==2014) {$rtime = strtotime('8/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='9' && $reppstarty==2014) {$rtime = strtotime('9/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='10' && $reppstarty==2014) {$rtime = strtotime('10/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='11' && $reppstarty==2014) {$rtime = strtotime('11/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='12' && $reppstarty==2014) {$rtime = strtotime('12/1/2014'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='1' && $reppstarty==2015 ) {$rtime = strtotime('1/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='2' && $reppstarty==2015) {$rtime = strtotime('2/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='3' && $reppstarty==2015) {$rtime = strtotime('3/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='4' && $reppstarty==2015) {$rtime = strtotime('4/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='5' && $reppstarty==2015) {$rtime = strtotime('5/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='6' && $reppstarty==2015) {$rtime = strtotime('6/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='7' && $reppstarty==2015) {$rtime = strtotime('7/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='8' && $reppstarty==2015) {$rtime = strtotime('8/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='9' && $reppstarty==2015) {$rtime = strtotime('9/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='10' && $reppstarty==2015) {$rtime = strtotime('10/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='11' && $reppstarty==2015) {$rtime = strtotime('11/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='12' && $reppstarty==2015) {$rtime = strtotime('12/1/2015'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='1' && $reppstarty==2016) {$rtime = strtotime('1/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='2' && $reppstarty==2016) {$rtime = strtotime('2/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='3' && $reppstarty==2016) {$rtime = strtotime('3/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='4' && $reppstarty==2016) {$rtime = strtotime('4/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='5' && $reppstarty==2016) {$rtime = strtotime('5/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='6' && $reppstarty==2016) {$rtime = strtotime('6/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='7' && $reppstarty==2016) {$rtime = strtotime('7/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='8' && $reppstarty==2016) {$rtime = strtotime('8/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='9' && $reppstarty==2016) {$rtime = strtotime('9/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='10' && $reppstarty==2016) {$rtime = strtotime('10/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='11' && $reppstarty==2016) {$rtime = strtotime('11/1/2016'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='12' && $reppstarty==2016) {$rtime = strtotime('12/1/2016'); $rdatestart=date('Y-m-d',$rtime);}
	elseif($reppstartm=='1' && $reppstarty==2017) {$rtime = strtotime('1/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='2' && $reppstarty==2017) {$rtime = strtotime('2/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='3' && $reppstarty==2017) {$rtime = strtotime('3/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='4' && $reppstarty==2017) {$rtime = strtotime('4/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='5' && $reppstarty==2017) {$rtime = strtotime('5/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='6' && $reppstarty==2017) {$rtime = strtotime('6/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='7' && $reppstarty==2017) {$rtime = strtotime('7/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='8' && $reppstarty==2017) {$rtime = strtotime('8/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='9' && $reppstarty==2017) {$rtime = strtotime('9/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='10' && $reppstarty==2017) {$rtime = strtotime('10/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='11' && $reppstarty==2017) {$rtime = strtotime('11/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='12' && $reppstarty==2017) {$rtime = strtotime('12/1/2017'); $rdatestart=date('Y-m-d',$rtime);} 
	else {$rdatestart = "";}
		if($reppendm=='1' && $reppendy==2014 ) {$rtime = strtotime('1/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='2' && $reppendy==2014) {$rtime = strtotime('2/28/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='3' && $reppendy==2014) {$rtime = strtotime('3/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='4' && $reppendy==2014) {$rtime = strtotime('4/30/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='5' && $reppendy==2014) {$rtime = strtotime('5/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='6' && $reppendy==2014) {$rtime = strtotime('6/30/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='7' && $reppendy==2014) {$rtime = strtotime('7/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='8' && $reppendy==2014) {$rtime = strtotime('8/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='9' && $reppendy==2014) {$rtime = strtotime('9/30/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='10' && $reppendy==2014) {$rtime = strtotime('10/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='11' && $reppendy==2014) {$rtime = strtotime('11/30/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='12' && $reppendy==2014) {$rtime = strtotime('12/31/2014'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='1' && $reppendy==2016) {$rtime = strtotime('1/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='1' && $reppendy==2015 ) {$rtime = strtotime('1/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='2' && $reppendy==2015) {$rtime = strtotime('2/28/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='3' && $reppendy==2015) {$rtime = strtotime('3/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='4' && $reppendy==2015) {$rtime = strtotime('4/30/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='5' && $reppendy==2015) {$rtime = strtotime('5/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='6' && $reppendy==2015) {$rtime = strtotime('6/30/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='7' && $reppendy==2015) {$rtime = strtotime('7/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='8' && $reppendy==2015) {$rtime = strtotime('8/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='9' && $reppendy==2015) {$rtime = strtotime('9/30/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='10' && $reppendy==2015) {$rtime = strtotime('10/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='11' && $reppendy==2015) {$rtime = strtotime('11/30/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='12' && $reppendy==2015) {$rtime = strtotime('12/31/2015'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='1' && $reppendy==2016) {$rtime = strtotime('1/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='2' && $reppendy==2016) {$rtime = strtotime('2/28/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='3' && $reppendy==2016) {$rtime = strtotime('3/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='4' && $reppendy==2016) {$rtime = strtotime('4/30/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='5' && $reppendy==2016) {$rtime = strtotime('5/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='6' && $reppendy==2016) {$rtime = strtotime('6/30/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='7' && $reppendy==2016) {$rtime = strtotime('7/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='8' && $reppendy==2016) {$rtime = strtotime('8/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='9' && $reppendy==2016) {$rtime = strtotime('9/30/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='10' && $reppendy==2016) {$rtime = strtotime('10/31/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='11' && $reppendy==2016) {$rtime = strtotime('11/30/2016'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='12' && $reppendy==2016) {$rtime = strtotime('12/31/2016'); $rdateend=date('Y-m-d',$rtime);}
	elseif($reppendm=='1' && $reppendy==2017) {$rtime = strtotime('1/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='2' && $reppendy==2017) {$rtime = strtotime('2/28/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='3' && $reppendy==2017) {$rtime = strtotime('3/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='4' && $reppendy==2017) {$rtime = strtotime('4/30/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='5' && $reppendy==2017) {$rtime = strtotime('5/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='6' && $reppendy==2017) {$rtime = strtotime('6/30/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='7' && $reppendy==2017) {$rtime = strtotime('7/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='8' && $reppendy==2017) {$rtime = strtotime('8/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='9' && $reppendy==2017) {$rtime = strtotime('9/30/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='10' && $reppendy==2017) {$rtime = strtotime('10/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='11' && $reppendy==2017) {$rtime = strtotime('11/30/2017'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='12' && $reppendy==2017) {$rtime = strtotime('12/31/2017'); $rdateend=date('Y-m-d',$rtime);} 
	else {$rdateend = "";}
//	echo $rdatestart."\n".$rdateend;
	//ART 1
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_PatientDemographics Data...</span><br />';
$patdem="select p.pepid,p.surname, othernames,hospitalid as hospitalno,sex as Gender,dob as DateOfBirth,Age,'Year' as UnitOfAgeMeasure,enroldate as DateEnrolledInCare,'' as DeliveryLocation,pchildliveswith as PrimaryCareGiver,v.visitdate as DateOfLastVisit, 'Yes' as ClinicalVisit6MonthsPriorToReview,'No' as HospitalAdmissionDuringReview,@a:=@a+1 RNL_SerialNo,jobstatuscaregiver as CareGiverOccupation
from patient p
JOIN (select pepid,MAX(visitdate) as visitdate from visit where length(pepid)=11 group by pepid) v
ON (p.pepid=v.pepid),(SELECT @a:= 0) AS a 
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_PatientDemographics.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_PatientDemographics Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_PatientDemographics Data Not Exported, Make Sure the Directory is empty.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatrics ART Data...</span><br />';
$patdem="select pepid as patientid,case visitdate WHEN '' THEN 'No' ELSE 'Yes' END as PatientEverStartedOnART,visitdate as ART_Start_Date,'Yes' as TreatmentPrepCompletedBeforeStartOfART
from pharmacy
where drugname1!='' and visitdate BETWEEN '$rdatestart' AND '$rdateend'
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/pediatric_art.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">ART Pediatrics Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: ART Pediatrics Data Not Exported, Delete already existing art.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_ART_Adherence Data...</span><br />';
$patdem="SELECT CASE c.regadherencea WHEN '' THEN 'Yes' ELSE 'No' END as ARTAdherenceAssessmentPerformedDuringLast3Months,MAX(c.visitdate) as LastDateOfAssessment, c.pepid AS patientid
from clinicaleval c JOIN (SELECT pepid,MAX(CONVERT((results), SIGNED INTEGER)) AS cd4,visitdate
from laboratory
where tests='CD4' and length(pepid)=11
group by pepid) b
ON (c.pepid=b.pepid)
GROUP BY c.pepid
HAVING MAX(c.visitdate) BETWEEN '$rdatestart' AND '$rdateend'
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_ART_Adherence.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_ART_Adherence Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_ART_Adherence Data Not Exported, Delete already existing art_adherence.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_ARTRegimenSinceStartingTreatment Data...</span><br />';
$patdem="select pepid,'Yes' as PatientOnARTAnytimeDuringReviewPeriod,CASE 
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%NVP%'  THEN 1 
WHEN drugname1 LIKE  '%TDF%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN 2 
WHEN drugname1 LIKE  '%NVP%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%D4T%'  THEN 3 
WHEN drugname1 LIKE  '%NVP%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%ABC%'  THEN 4 
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN 5 
WHEN drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%TDF%' AND (drugname1 LIKE  '%FTC%' OR drugname1 LIKE  '%3TC%') THEN 6 
WHEN drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%D4T%' AND drugname1 LIKE  '%3TC%'  THEN 7
WHEN drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%3TC%'  THEN 8
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%'  THEN 9
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%D4T%' AND drugname1 LIKE  '%3TC%'  THEN 10
ELSE 11 END as 1stRegminen,MIN(visitdate) as 1stRegimenStartDate,CASE WHEN drugname1 LIKE '%LPV%' THEN visitdate ELSE '' END as 1stRegimenChangeDate,CASE WHEN drugname1 LIKE '%LPV%' THEN drugname1 ELSE '' END as 2ndRegimen,CASE WHEN drugname1 LIKE '%LPV%' THEN visitdate ELSE '' END as 2ndRegimenStartDate,CASE WHEN drugname1 LIKE '%DRV%' THEN visitdate ELSE '' END as 2ndRegimenChangeDate,CASE WHEN drugname1 LIKE '%DRV%' THEN drugname1 ELSE '' END as 3rdRegimen,CASE WHEN drugname1 LIKE '%DRV%' THEN visitdate ELSE '' END as 3rdRegimenStartDate,'' as 3rdRegimenChangeDate,'' as OtherRegimenSpecify
from pharmacy
where drugname1 !='' and length(pepid)=11
group by pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_ARTRegimenSinceStartingTreatment.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_ARTRegimenSinceStartingTreatment Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_ARTRegimenSinceStartingTreatment Not Exported, Delete already existing art_adherence.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_BaselineParameters Data...</span><br />';
$patdem="select  pepid as patientid,cd4value as CD4_Count, MIN(visitdate) as CD4_Count_Date,weight,visitdate as Weight_Date,whostage as WHO_Clinical_Stage, CASE whostage WHEN 1 THEN visitdate WHEN 2 THEN visitdate WHEN 3 THEN visitdate WHEN 4 THEN visitdate else '' END as WHO_Clinical_State_Date,CASE cd4value WHEN '' THEN 'No' else 'Yes' END as CD4_Not_Recorded,CASE weight WHEN '' THEN 'No' else 'Yes' END as Weight_Not_Recorded,CASE whostage WHEN '' THEN 'No' else 'Yes' END as Weight_Not_Recorded
from clinicaleval where length(pepid)=11
group by pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_BaselineParameters.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_BaselineParameters Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_BaselineParameters Not Exported, Delete already existing art_adherence.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_Cotrimoxazole Data...</span><br />';
$patdem="SELECT a.pepid AS patientid,CASE MAX(a.oidrug) WHEN  'CTX' THEN  'Yes' ELSE  'No' END AS PatientReceiveCotrimoxazoleDuringReviewPeriod,CASE WHEN b.visitdate >=  '$rdatestart' <  '$rdateend' THEN  'Yes' ELSE  'No' END AS PatientCurrentlyOnCotrimoxazoleProphylaxis, b.visitdate as DateOfLastPrescription
FROM pharmacy a JOIN (SELECT pepid, MAX( visitdate ) AS visitdate, oidrug FROM pharmacy WHERE oidrug =  'CTX' AND visitdate BETWEEN  '$rdatestart' AND '$rdateend' GROUP BY pepid ) b 
ON ( a.pepid = b.pepid )  
WHERE a.visitdate BETWEEN '$rdatestart' AND '$rdateend' and length(a.pepid)=11
group by a.pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_Cotrimoxazole.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_Cotrimoxazole Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_Cotrimoxazole Data Not Exported, Delete already existing cotrimoxazole.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_ClinicalEvaluationInReviewPeriod Data...</span><br />';
$patdem="SELECT
    pepid,visitdate as visit1,  
    MAX(CASE WHEN (visittype='Clinical Evaluation') THEN visitdate ELSE 0 END) AS visit2,
    MAX(CASE WHEN (visittype='Pharmacy Order') THEN visitdate ELSE 0 END) AS visit3,
    MAX(CASE WHEN (visittype='Laboratory Order/Result') THEN visitdate ELSE 0 END) AS visit4
FROM 
    visit
WHERE visitdate BETWEEN '$rdatestart' AND '$rdateend' and length(pepid)=11
GROUP BY 
    pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_ClinicalEvaluationInReviewPeriod.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_ClinicalEvaluationInReviewPeriod Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_ClinicalEvaluationInReviewPeriod Data Not Exported, Delete already existing cotrimoxazole.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_PatientStatus Data...</span><br />';
$patdem="select pepid,planarvtherapy as status,enroldate as DateOfStatusChange,planarvtherchgtrtmtreason as ReasonForStatusChange, CASE 	patienttransout WHEN 'ART' THEN 'Yes' WHEN 'PRE-ART' THEN 'Yes' ELSE 'No' END as Transferred_Out, CASE 	patientdied WHEN 'ART' THEN 'Yes' WHEN 'PRE-ART' THEN 'Yes' ELSE 'No' END as Death, CASE WHEN patientdied='ART' OR patienttransout='ART' THEN 'Yes' WHEN patientdied='PRE-ART' OR patienttransout='PRE-ART' THEN 'Yes' ELSE 'No' END as Discontinued_Care,patienttransoutdate,dateofdeath,CASE WHEN patientdied='ART' OR patienttransout='ART' THEN patienttransoutdate  ELSE 'No' END as Discontinued_Care_Date,sourceofdeathinf as Discontinued_Care_Reason,'' as Discontinued_Care_Reason_Other
from patient
WHERE enroldate BETWEEN '$rdatestart' AND '$rdateend' and length(pepid) =11
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_PatientStatus.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysql_query($patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_PatientStatus Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_PatientStatus Data Not Exported, Delete already existing cotrimoxazole.csv in the Storage Directory.</span><br /><br />';
		}
	}
}
else{
	echo "Date not Initialised";
	}
?>




<script src="../jquery-1.11.1.min.js" type="text/javascript"></script>


</body>
</html>
