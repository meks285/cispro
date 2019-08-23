<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<script src="../jquery-1.11.1.min.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CQI</title>
<h1 align="center"> Clinical Quality Indicators	- Adult													
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
	echo $rdatestart."\n".$rdateend;
	//ART 1
if (!empty($rdatestart)){
	$indicator='ART 1';
	if ($indicator=='ART 1'){
		ob_start();
		echo 'Executing ART 1... Pls Wait.';	
$art1NUM="select distinct t.pepid
from laboratory t join patient p
on (t.pepid=p.pepid)
where lower(t.tests)='cd4' and t.results <= 500 AND lower(t.artstatus)='non-art'
AND ROUND(DATEDIFF(t.visitdate , p.dob)/365) > 15
AND t.visitdate BETWEEN '$rdatestart' AND '$rdateend'
AND t.pepid IN (select distinct t.pepid
from
pharmacy t JOIN patient p
ON (t.pepid=p.pepid)
WHERE lower(visittype)='initial' 
AND lower(patienttype)='art' 
AND ROUND(DATEDIFF(t.dispensedate , p.dob)/365) > 15 
AND t.dispensedate BETWEEN '$rdatestart' AND '$rdateend')";
$resultart1NUM=mysql_query($art1NUM);
$cntart1NUM=mysql_num_rows($resultart1NUM);
	
$art1DEN="select distinct t.pepid
from laboratory t join patient p
on (t.pepid=p.pepid)
where lower(t.tests)='cd4' and t.results <= 500 AND lower(t.artstatus)='non-art'
AND ROUND(DATEDIFF(t.visitdate , p.dob)/365) > 15
AND t.visitdate BETWEEN '$rdatestart' AND '$rdateend'";
$resultart1DEN=mysql_query($art1DEN);
$cntart1DEN=mysql_num_rows($resultart1DEN);
ob_end_clean();
	$indicator='ART 2';
	if ($indicator=='ART 2'){
		echo 'Executing ART 2... Pls Wait.';	
		
			//ART 2
$art2NUM="SELECT DISTINCT la.pepid
FROM laboratory la JOIN (SELECT pepid, visitdate,results FROM laboratory where tests='CD4') lb 
ON ( la.pepid = lb.pepid )
JOIN patient p
ON (p.pepid=lb.pepid)
AND la.tests =  'CD4'
AND la.baselineorrepeat =  'Baseline'
AND (lb.results-la.results) >=50  and lower(la.artstatus)='art'
AND ROUND((DATEDIFF(lb.visitdate, la.visitdate) / 30.4),0)=6
AND la.visitdate BETWEEN '$rdatestart' AND '$rdateend'
AND ROUND(DATEDIFF(lb.visitdate , p.dob)/365) > 15";
$resultart2NUM=mysql_query($art2NUM);
$cntart2NUM=mysql_num_rows($resultart2NUM);

$art2DEN="SELECT DISTINCT la.pepid
FROM laboratory la
JOIN patient p
ON (p.pepid=la.pepid)
AND la.baselineorrepeat =  'Baseline' and lower(la.artstatus)='art'
AND la.visitdate BETWEEN '$rdatestart' AND '$rdateend'
AND ROUND(DATEDIFF(la.visitdate , p.dob)/365) > 15";
$resultart2DEN=mysql_query($art2DEN);
$cntart2DEN=mysql_num_rows($resultart2DEN);
ob_end_clean();	
		$indicator='ART 3';
if ($indicator=='ART 3'){
	ob_start();
		echo 'Executing ART 3... Pls Wait.';	

// ART 3

$art3NUM="SELECT DISTINCT la.pepid
FROM laboratory la JOIN (SELECT pepid, visitdate,results FROM laboratory where tests='Viral Load') lb 
ON ( la.pepid = lb.pepid )
JOIN patient p
ON (p.pepid=lb.pepid)
AND la.tests =  'Viral Load'
AND la.baselineorrepeat =  'Baseline'
AND (lb.results) >=1000  and lower(la.artstatus)='art'
AND ROUND((DATEDIFF(lb.visitdate, la.visitdate) / 30.4),0)=6
AND la.visitdate BETWEEN '$rdatestart' AND '$rdateend'
AND ROUND(DATEDIFF(lb.visitdate , p.dob)/365) > 15";
$resultart3NUM=mysql_query($art3NUM);
$cntart3NUM=mysql_num_rows($resultart3NUM);


$art3DEN="SELECT DISTINCT la.pepid
FROM laboratory la
JOIN patient p
ON (p.pepid=la.pepid)
AND la.baselineorrepeat =  'Baseline' and lower(la.artstatus)='art'
AND la.visitdate BETWEEN '$rdatestart' AND '$rdateend'
AND ROUND(DATEDIFF(la.visitdate , p.dob)/365) > 15";
$resultart3DEN=mysql_query($art3DEN);
$cntart3DEN=mysql_num_rows($resultart3DEN);
		ob_end_clean();	
		$indicator='CC 1';
	if ($indicator=='CC 1'){
ob_start();
		echo 'Executing CLINICAL CARE 1... Pls Wait.';	
include 'cqi_date_back.php';		
		// CLINICAL CARE 1

$cc1NUM="SELECT DISTINCT a.pepid
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Clinical Evaluation')
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) > 15 
AND a.visitdate BETWEEN '$rdatestart' AND '$rdateend'";
$resultcc1NUM=mysql_query($cc1NUM);
$cntcc1NUM=mysql_num_rows($resultcc1NUM);


$cc1DEN="SELECT DISTINCT a.pepid
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Clinical Evaluation')
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) > 15
AND a.visitdate BETWEEN '$date6low' AND '$rdatestart'";
$resultcc1DEN=mysql_query($cc1DEN);
$cntcc1DEN=mysql_num_rows($resultcc1DEN);
ob_end_clean();	
		$indicator='CC 2';
	if ($indicator=='CC 2'){
ob_start();
		echo 'Executing CLINICAL CARE 2... Pls Wait.';	

// CLINICAL CARE 2
$cc2NUM="select distinct c.pepid
FROM clinicaleval c JOIN patient p
ON (c.pepid=p.pepid)
WHERE (c.whostage>0 and c.whostage !='') 
AND ROUND(DATEDIFF(c.visitdate , p.dob)/365) > 15 
AND c.visitdate BETWEEN '$rdatestart' AND '$rdateend'";
$resultcc2NUM=mysql_query($cc2NUM);
$cntcc2NUM=mysql_num_rows($resultcc2NUM);

$cc2DEN="select distinct c.pepid
FROM clinicaleval c JOIN patient p
ON (c.pepid=p.pepid)
where ROUND(DATEDIFF(c.visitdate , p.dob)/365) > 15 
AND c.visitdate BETWEEN '$rdatestart' AND '$rdateend'";
$resultcc2DEN=mysql_query($cc2DEN);
$cntcc2DEN=mysql_num_rows($resultcc2DEN);
ob_end_clean();	
		$indicator='CC 3';

if ($indicator=='CC 3'){
ob_start();
		echo 'Executing CLINICAL CARE 3... Pls Wait.';	


// CLINICAL CARE 3
set_time_limit(0);
$cc3NUM="select distinct c.pepid
FROM clinicaleval c JOIN patient p
ON (c.pepid=p.pepid)
JOIN laboratory l
ON (p.pepid=l.pepid)
WHERE (((c.tbstatus IN ('Currently on TB treatment','TB positive, Not on drugs')) AND (c.visitdate BETWEEN '$rdatestart' AND '$rdateend')) OR ((l.tests='CD4' AND l.results<350) AND (l.visitdate BETWEEN '$rdatestart' AND '$rdateend')))
AND c.pepid IN (select DISTINCT pepid from pharmacy where (lower(otherdrugs) LIKE '%co-trim%' OR lower(otherdrugs) LIKE '%cotrim%') OR (lower(otherdrugs1) LIKE '%co-trim%' OR lower(otherdrugs1) LIKE '%cotrim%') OR (lower(otherdrugs2) LIKE '%co-trim%' OR lower(otherdrugs2) LIKE '%cotrim%') or lower(oidrug)='ctx' and visitdate BETWEEN '$rdatestart' AND '$rdateend')
AND ROUND(DATEDIFF(c.visitdate , p.dob)/365) > 15";
$resultcc3NUM=mysql_query($cc3NUM);
$cntcc3NUM=mysql_num_rows($resultcc3NUM);

$cc3DEN="select distinct c.pepid
FROM clinicaleval c JOIN patient p
ON (c.pepid=p.pepid)
JOIN laboratory l
ON (p.pepid=l.pepid)
WHERE (((c.tbstatus IN ('Currently on TB treatment','TB positive, Not on drugs')) AND (c.visitdate BETWEEN '$rdatestart' AND '$rdateend')) OR ((l.tests='CD4' AND l.results<350) AND (l.visitdate BETWEEN '$rdatestart' AND '$rdateend')))
AND ROUND(DATEDIFF(c.visitdate , p.dob)/365) > 15";
$resultcc3DEN=mysql_query($cc3DEN);
$cntcc3DEN=mysql_num_rows($resultcc3DEN);
ob_end_clean();	

		$indicator='CC 4';
if ($indicator=='CC 4'){
ob_start();
		echo 'Executing CLINICAL CARE 4... Pls Wait.';	


// CLINICAL CARE 4

$cc4NUM="SELECT DISTINCT c.pepid
FROM clinicaleval c
JOIN patient p ON ( c.pepid = p.pepid ) 
WHERE c.visitdate BETWEEN  '$rdatestart' AND '$rdateend'
AND c.tbstatus IN ('No Signs',  'TB Suspected and referred for evaluation',  'On INH prophylaxis',  'Currently on TB treatment',  'TB positive, Not on drugs') AND ROUND(DATEDIFF(c.visitdate , p.dob)/365) > 15
GROUP BY c.pepid
ORDER BY MAX(c.visitdate) ";
$resultcc4NUM=mysql_query($cc4NUM);
$cntcc4NUM=mysql_num_rows($resultcc4NUM);

$cc4DEN="SELECT DISTINCT a.pepid
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Clinical Evaluation')
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) > 15 
AND a.visitdate BETWEEN '$rdatestart' AND '$rdateend'";
$resultcc4DEN=mysql_query($cc4DEN);
$cntcc4DEN=mysql_num_rows($resultcc4DEN);

ob_end_clean();		
			$indicator='LAB 1';
if ($indicator=='LAB 1'){
ob_start();
		echo 'Executing LAB 1... Pls Wait.';	

							
// LAB 1
$lab1NUM="select DISTINCT a.pepid
from patient a JOIN laboratory b
ON (a.pepid=b.pepid)
and a.enroldate BETWEEN '$rdatestart' AND '$rdateend'
AND b.tests='CD4' and b.baselineorrepeat='Baseline'
AND b.visitdate BETWEEN '$rdatestart' AND '$rdateend'
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365) > 15";
$resultlab1NUM=mysql_query($lab1NUM);
$cntcclab1NUM=mysql_num_rows($resultlab1NUM);

$lab1DEN="select DISTINCT a.pepid
from patient a 
where a.enroldate BETWEEN '$rdatestart' AND '$rdateend'
AND ROUND(DATEDIFF(a.enroldate, a.dob)/365) > 15";
$resultlab1DEN=mysql_query($lab1DEN);
$cntcclab1DEN=mysql_num_rows($resultlab1DEN);
ob_end_clean();	
			$indicator='LAB 2';
if ($indicator=='LAB 2'){
ob_start();
		echo 'Executing LAB 2... Pls Wait.';	

							
	// LAB 2
$lab2NUM="select DISTINCT p.pepid
from laboratory l JOIN patient p
ON (l.pepid=p.pepid)
where l.tests='CD4'
AND l.visitdate BETWEEN '$date6low' AND '$rdatestart'
AND p.pepid IN (select DISTINCT pepid FROM laboratory where tests='CD4' AND visitdate BETWEEN '$rdatestart' AND '$rdateend')
AND ROUND(DATEDIFF(l.visitdate, p.dob)/365) > 15";
$resultlab2NUM=mysql_query($lab2NUM);
$cntcclab2NUM=mysql_num_rows($resultlab2NUM);

$lab2DEN="select DISTINCT p.pepid
from laboratory l JOIN patient p
ON (l.pepid=p.pepid)
where l.tests='CD4'
AND l.visitdate BETWEEN '$date6low' AND '$rdatestart'
AND ROUND(DATEDIFF(l.visitdate, p.dob)/365) > 15";
$resultlab2DEN=mysql_query($lab2DEN);
$cntcclab2DEN=mysql_num_rows($resultlab2DEN);
ob_end_clean();								
				$indicator='LAB 3';
	if ($indicator=='LAB 3'){
ob_start();
		echo 'Executing LAB 3... Pls Wait.';	


// LAB 3
$lab3NUM="select DISTINCT a.pepid
from pharmacy a JOIN patient b
ON (a.pepid=b.pepid)
WHERE lower(a.patienttype)='art' AND lower(a.visittype)='initial'
AND a.visitdate BETWEEN '$rdatestart' AND '$rdateend'
AND b.pepid IN (select DISTINCT pepid from laboratory where visitdate BETWEEN '$date6low' AND '$rdatestart' AND tests='Viral Load')
AND ROUND(DATEDIFF(a.visitdate, b.dob)/365) > 15";
$resultlab3NUM=mysql_query($lab3NUM);
$cntcclab3NUM=mysql_num_rows($resultlab3NUM);

$lab3DEN="select DISTINCT a.pepid
from pharmacy a JOIN patient b
ON (a.pepid=b.pepid)
WHERE lower(a.patienttype)='art' AND lower(a.visittype)='initial'
AND a.visitdate BETWEEN '$rdatestart' AND '$rdateend'
AND ROUND(DATEDIFF(a.visitdate, b.dob)/365) > 15";
$resultlab3DEN=mysql_query($lab3DEN);
$cntcclab3DEN=mysql_num_rows($resultlab3DEN);
ob_end_clean();	
				$indicator='LAB 4';
if ($indicator=='LAB 4'){
ob_start();
		echo 'Executing LAB 4... Pls Wait.';	

// LAB 4
$lab4NUM="SELECT distinct a.pepid
from laboratory a JOIN (select pepid, MAX(visitdate) as datev from laboratory where lower(tests)='viral load' 
group by pepid) b
ON (a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=b.pepid)
AND lower(tests)='viral load' 
AND PERIOD_DIFF(DATE_FORMAT(b.datev,'%Y%m'),DATE_FORMAT(a.visitdate,'%Y%m'))=12
and  ROUND(DATEDIFF(b.datev , p.dob)/365) > 15";
$resultlab4NUM=mysql_query($lab4NUM);
$cntcclab4NUM=mysql_num_rows($resultlab4NUM);

$lab4DEN="SELECT DISTINCT p.pepid
from pharmacy p JOIN patient a
ON (p.pepid=a.pepid)
where p.patienttype='ART'
AND p.visitdate BETWEEN '$rdatestart' AND '$rdateend'
AND p.pepid IN (select DISTINCT pepid from laboratory where tests='Viral Load' and visitdate BETWEEN '$date12low' AND '$rdatestart')
AND ROUND(DATEDIFF(p.visitdate, a.dob)/365) > 15";
$resultlab4DEN=mysql_query($lab4DEN);
$cntcclab4DEN=mysql_num_rows($resultlab4DEN);

ob_end_clean();	
	$indicator='LAB 5';
	
	}
	}

								}
							}

						}

				}
				    }

			}

	}		
	
	}

	}
echo $rdatestart."\n".$date6low;
}
else{
	echo 'Date not correctly Initialised';
	}






}
else {
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;
		header("Location: CQIped.php?reportingmonth=".$repmonth."&reportingyear=".$repyear."");
		//die();	
	}
?>

<a href="javascript:history.go(-1)">[BACK]</a>


<script src="../jquery-1.11.1.min.js" type="text/javascript"></script>


</body>
</html>
