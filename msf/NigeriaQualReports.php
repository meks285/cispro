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
ob_start();
$_SESSION=$_GET;
include '../mandate_/lidh.php';

// Check connection


$fac="select facilityname from facility;";
$resultfac=mysqli_query($con,$fac);
$infac = mysqli_fetch_assoc($resultfac); 


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
	elseif($reppstartm=='1' && $reppstarty==2018) {$rtime = strtotime('1/1/2018'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='2' && $reppstarty==2018) {$rtime = strtotime('2/1/2018'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='3' && $reppstarty==2018) {$rtime = strtotime('3/1/2018'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='4' && $reppstarty==2018) {$rtime = strtotime('4/1/2018'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='5' && $reppstarty==2018) {$rtime = strtotime('5/1/2018'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='6' && $reppstarty==2018) {$rtime = strtotime('6/1/2018'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='7' && $reppstarty==2018) {$rtime = strtotime('7/1/2018'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='8' && $reppstarty==2018) {$rtime = strtotime('8/1/2018'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='9' && $reppstarty==2018) {$rtime = strtotime('9/1/2018'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='10' && $reppstarty==2018) {$rtime = strtotime('10/1/2018'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='11' && $reppstarty==2018) {$rtime = strtotime('11/1/2018'); $rdatestart=date('Y-m-d',$rtime);} 
	elseif($reppstartm=='12' && $reppstarty==2018) {$rtime = strtotime('12/1/2018'); $rdatestart=date('Y-m-d',$rtime);} 
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
	elseif($reppendm=='1' && $reppendy==2018) {$rtime = strtotime('1/31/2018'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='2' && $reppendy==2018) {$rtime = strtotime('2/28/2018'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='3' && $reppendy==2018) {$rtime = strtotime('3/31/2018'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='4' && $reppendy==2018) {$rtime = strtotime('4/30/2018'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='5' && $reppendy==2018) {$rtime = strtotime('5/31/2018'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='6' && $reppendy==2018) {$rtime = strtotime('6/30/2018'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='7' && $reppendy==2018) {$rtime = strtotime('7/31/2018'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='8' && $reppendy==2018) {$rtime = strtotime('8/31/2018'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='9' && $reppendy==2018) {$rtime = strtotime('9/30/2018'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='10' && $reppendy==2018) {$rtime = strtotime('10/31/2018'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='11' && $reppendy==2018) {$rtime = strtotime('11/30/2018'); $rdateend=date('Y-m-d',$rtime);} 
	elseif($reppendm=='12' && $reppendy==2018) {$rtime = strtotime('12/31/2018'); $rdateend=date('Y-m-d',$rtime);} 
	else {$rdateend = "";}
//echo $rdatestart."\n".$rdateend;

//Create Table, {POPULATE}
if (!empty($rdatestart)){include '../mandate_/lidh.php';
	echo '<br /><br /><span style="color:blue;text-align:center;">Creating ADULT Patient Table for Nigerian Qual Extraction</span><br />';
$patdem="CREATE TABLE ngq_adt AS
select surname, othernames,CASE COALESCE(x.visitdate,0) WHEN 0 THEN 'No' ELSE 'Yes' END as ClinicalVisit6MonthsPriorToReview,case maritalstatus WHEN '' THEN 'Single' ELSE maritalstatus END as maritalstatus,hospitalid as hospitalno,@a:=@a+1 RNL_SerialNo,sex as Gender,dob as DateOfBirth,Age,'No' as HospitalAdmissionDuringReview,	case jobstatus WHEN '' THEN 'Unemployed' ELSE jobstatus END as jobstatus,case educationallevel WHEN '' THEN 'None' ELSE educationallevel END as educationallevel,p.pepid,enroldate
from patient p LEFT OUTER JOIN (select pepid,visitdate from visit where length(pepid)=10 and visitdate between '$rdatestart' - INTERVAL 6 MONTH AND '$rdateend' and visittype IN ('Clinical Evaluation','Pharmacy Order','Laboratory Order/Result') group by pepid) x 
ON (p.pepid=x.pepid),(SELECT @a:= 0) AS a
WHERE p.pepid IN (select DISTINCT pepid from visit where visitdate BETWEEN '$rdatestart' AND '$rdateend') AND LENGTH(p.pepid) = 10
ORDER BY RAND()
LIMIT 150";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Table Created Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Table not Created (May Already Exist)... Check SQL Database.</span><br /><br />';
		}
	}
			//ART 1
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Patient Demographics Data...</span><br />';
$patdem="select surname, othernames,CASE COALESCE(x.visitdate,0) WHEN 0 THEN 'No' ELSE 'Yes' END as ClinicalVisit6MonthsPriorToReview,case maritalstatus WHEN '' THEN 'Single' ELSE maritalstatus END as maritalstatus,hospitalid as hospitalno,@a:=@a+1 RNL_SerialNo,sex as Gender,dob as DateOfBirth,Age,'No' as HospitalAdmissionDuringReview,	case jobstatus WHEN '' THEN 'Unemployed' ELSE jobstatus END as jobstatus,case educationallevel WHEN '' THEN 'None' ELSE educationallevel END as educationallevel,p.pepid,enroldate
from patient p LEFT OUTER JOIN (select pepid,visitdate from visit where length(pepid)=10 and visitdate between '$rdatestart' - INTERVAL 6 MONTH AND '$rdateend' and visittype IN ('Clinical Evaluation','Pharmacy Order','Laboratory Order/Result') group by pepid) x 
ON (p.pepid=x.pepid),(SELECT @a:= 0) AS a
WHERE p.pepid IN (select DISTINCT pepid from visit where visitdate BETWEEN '$rdatestart' AND '$rdateend') AND LENGTH(p.pepid) = 10 and p.pepid IN (select pepid from ngq_adt)
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/patientdemographics.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
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
where drugname1!='' and visitdate BETWEEN '$rdatestart' AND '$rdateend' AND LENGTH(pepid) = 10 and pepid IN (select pepid from ngq_adt)
group by pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/art.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">ART Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: ART Data Not Exported, Delete already existing art.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting ART ADHERENCE Data...</span><br />';
$patdem="SELECT c.pepid,CASE  
WHEN c.regadherencea='Good' AND MAX(c.visitdate) between '$rdateend' - INTERVAL 3 MONTH AND '$rdateend' THEN 'Yes'  
WHEN c.regadherencea='Fair' AND MAX(c.visitdate) between '$rdateend' - INTERVAL 3 MONTH AND '$rdateend' THEN 'Yes' 
WHEN c.regadherencea='Poor' AND MAX(c.visitdate) between '$rdateend' - INTERVAL 3 MONTH AND '$rdateend' THEN 'Yes'  
ELSE 'No' 
END as ARTAdherenceAssessmentPerformedDuringLast3Months,ca.maxadhdate,b.cd4,b.visitdate
from clinicaleval c JOIN (SELECT pepid,MAX(CONVERT((results), SIGNED INTEGER)) AS cd4,visitdate
from laboratory
where tests='CD4' 
group by pepid) b
ON (c.pepid=b.pepid) JOIN (select pepid, regadherencea, MAX(visitdate) as maxadhdate from clinicaleval where regadherencea IN ('Good', 'Fair', 'Poor') group by pepid) ca
ON (c.pepid=ca.pepid)
WHERE c.pepid IN (select pepid from ngq_adt)
GROUP BY c.pepid
HAVING MAX(c.visitdate) BETWEEN '$rdatestart' AND '$rdateend' AND LENGTH(pepid) = 10
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/art_adherence.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">ART ADHERENCE Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: ART ADHERENCE Data Not Exported, Delete already existing art_adherence.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting ART REGIMEN Data...</span><br />';
$patdem="select ph.pepid, CASE ph.pharmdispensedate WHEN '$rdatestart' THEN 'Yes' ELSE 'No' END as PatientOnARTFirstDayOfReviewPeriod,CASE 
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%TDF%' and (ph.drugname1 LIKE '%FDC%' or ph.drugname1 LIKE '%3TC%') THEN 'Yes' 
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%AZT%' and ph.drugname1 LIKE '%3TC%' THEN 'Yes' 
WHEN ph.drugname1 LIKE '%LPV%' and lower(ph.drugname1) LIKE '%d4t%' and ph.drugname1 LIKE '%3TC%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%ABC%' and ph.drugname1 LIKE '%3TC%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%ABC%' and LOWER(ph.drugname1) LIKE '%ddl%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%AZT%' and ph.drugname1 LIKE '%3TC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%TDF%' and ph.drugname1 LIKE '%FTC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%TDF%' and ph.drugname1 LIKE '%3TC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%3TC%' and ph.drugname2 LIKE '%ABC%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname2 LIKE '%ABC%' and LOWER(ph.drugname3) LIKE '%3tc%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%ABC%' and ph.drugname2 LIKE '%3TC%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%3TC%' and ph.drugname2 LIKE '%AZT%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%RTV%' OR ph.drugname2 LIKE '%RTV%' OR LOWER(ph.drugname3) LIKE '%rtv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%ATV%' OR ph.drugname2 LIKE '%ATV%' OR LOWER(ph.drugname3) LIKE '%atv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%LPV%' OR ph.drugname2 LIKE '%LPV%' OR LOWER(ph.drugname3) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%NVP%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname2 LIKE  '%3TC%' AND ph.drugname3 LIKE  '%NVP%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%NVP%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%EFV%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%D4T%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%ABC%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%EFV%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%TDF%' AND (ph.drugname1 LIKE  '%FTC%' OR ph.drugname1 LIKE  '%3TC%') THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%D4T%' AND ph.drugname1 LIKE  '%3TC%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%3TC%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%D4T%' AND ph.drugname1 LIKE  '%3TC%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%NVP%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%FTC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname2 LIKE  '%EFV%' AND ph.drugname3 LIKE  '%3TC%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname2 LIKE  '%3TC%' AND ph.drugname3 LIKE  '%EFV%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%ABC%' AND ph.drugname3 LIKE  '%EFV%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%ABC%' AND ph.drugname3 LIKE  '%NVP%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%AZT%' AND ph.drugname3 LIKE  '%NVP%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname2 LIKE  '%AZT%' AND ph.drugname3 LIKE  '%3TC%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%NVP%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 'Yes'
ELSE 'No' END as PatientOnARTAnytimeDuringReviewPeriod,CASE 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%NVP%'  THEN 1 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname2 LIKE  '%3TC%' AND ph.drugname3 LIKE  '%NVP%'  THEN 1 
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%NVP%'  THEN 2 
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%EFV%'  THEN 6 
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%D4T%'  THEN 3 
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%ABC%'  THEN 4 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%EFV%'  THEN 5 
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%TDF%' AND (ph.drugname1 LIKE  '%FTC%' OR ph.drugname1 LIKE  '%3TC%') THEN 6 
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%D4T%' AND ph.drugname1 LIKE  '%3TC%'  THEN 7
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%3TC%'  THEN 8
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%'  THEN 9
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%D4T%' AND ph.drugname1 LIKE  '%3TC%'  THEN 10
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%NVP%'  THEN 2
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%FTC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 6
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 8
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname2 LIKE  '%EFV%' AND ph.drugname3 LIKE  '%3TC%'  THEN 6
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 5
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname2 LIKE  '%3TC%' AND ph.drugname3 LIKE  '%EFV%'  THEN 8
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%ABC%' AND ph.drugname3 LIKE  '%EFV%'  THEN 8
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%ABC%' AND ph.drugname3 LIKE  '%NVP%'  THEN 4
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%AZT%' AND ph.drugname3 LIKE  '%NVP%'  THEN 1
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname2 LIKE  '%AZT%' AND ph.drugname3 LIKE  '%3TC%'  THEN 1
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 6
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%NVP%'  THEN 1
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%TDF%' and (ph.drugname1 LIKE '%FDC%' or ph.drugname1 LIKE '%3TC%') THEN 20 
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%AZT%' and ph.drugname1 LIKE '%3TC%' THEN 21 
WHEN ph.drugname1 LIKE '%LPV%' and lower(ph.drugname1) LIKE '%d4t%' and ph.drugname1 LIKE '%3TC%' THEN 22
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%ABC%' and ph.drugname1 LIKE '%3TC%' THEN 23
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%ABC%' and LOWER(ph.drugname1) LIKE '%ddl%' THEN 24
WHEN ph.drugname1 LIKE '%AZT%' and ph.drugname1 LIKE '%3TC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN 21
WHEN ph.drugname1 LIKE '%TDF%' and ph.drugname1 LIKE '%FTC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN 20
WHEN ph.drugname1 LIKE '%TDF%' and ph.drugname1 LIKE '%3TC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN 20
WHEN ph.drugname1 LIKE '%3TC%' and ph.drugname2 LIKE '%ABC%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN 23
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname2 LIKE '%ABC%' and LOWER(ph.drugname3) LIKE '%3tc%' THEN 23
WHEN ph.drugname1 LIKE '%ABC%' and ph.drugname2 LIKE '%3TC%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN 23
WHEN ph.drugname1 LIKE '%3TC%' and ph.drugname2 LIKE '%AZT%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN 21
WHEN ph.drugname1 LIKE '%RTV%' OR ph.drugname2 LIKE '%RTV%' OR LOWER(ph.drugname3) LIKE '%rtv%' THEN 25
WHEN ph.drugname1 LIKE '%ATV%' OR ph.drugname2 LIKE '%ATV%' OR LOWER(ph.drugname3) LIKE '%atv%' THEN 25
WHEN ph.drugname1 LIKE '%LPV%' OR ph.drugname2 LIKE '%LPV%' OR LOWER(ph.drugname3) LIKE '%lpv%' THEN 25
WHEN ph.drugname1 LIKE '%DRV%' or ph.drugname2 LIKE '%DRV%' or ph.drugname3 LIKE '%DRV%' THEN 30
ELSE '' END as 1stRegminen,CASE 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%NVP%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname2 LIKE  '%3TC%' AND ph.drugname3 LIKE  '%NVP%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%NVP%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%EFV%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%D4T%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%ABC%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%EFV%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%TDF%' AND (ph.drugname1 LIKE  '%FTC%' OR ph.drugname1 LIKE  '%3TC%') THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%D4T%' AND ph.drugname1 LIKE  '%3TC%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%3TC%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%D4T%' AND ph.drugname1 LIKE  '%3TC%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%NVP%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%FTC%' AND ph.drugname2 LIKE  '%EFV%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname2 LIKE  '%EFV%' AND ph.drugname3 LIKE  '%3TC%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname2 LIKE  '%3TC%' AND ph.drugname3 LIKE  '%EFV%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%ABC%' AND ph.drugname3 LIKE  '%EFV%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%ABC%' AND ph.drugname3 LIKE  '%NVP%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%AZT%' AND ph.drugname3 LIKE  '%NVP%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname2 LIKE  '%AZT%' AND ph.drugname3 LIKE  '%3TC%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%NVP%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN pb.mindate
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%TDF%' and (ph.drugname1 LIKE '%FDC%' or ph.drugname1 LIKE '%3TC%') THEN pb.mindate 
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%AZT%' and ph.drugname1 LIKE '%3TC%' THEN pb.mindate 
WHEN ph.drugname1 LIKE '%LPV%' and lower(ph.drugname1) LIKE '%d4t%' and ph.drugname1 LIKE '%3TC%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%ABC%' and ph.drugname1 LIKE '%3TC%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%ABC%' and LOWER(ph.drugname1) LIKE '%ddl%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%AZT%' and ph.drugname1 LIKE '%3TC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%TDF%' and ph.drugname1 LIKE '%FTC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%TDF%' and ph.drugname1 LIKE '%3TC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%3TC%' and ph.drugname2 LIKE '%ABC%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname2 LIKE '%ABC%' and LOWER(ph.drugname3) LIKE '%3tc%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%ABC%' and ph.drugname2 LIKE '%3TC%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%3TC%' and ph.drugname2 LIKE '%AZT%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%RTV%' OR ph.drugname2 LIKE '%RTV%' OR LOWER(ph.drugname3) LIKE '%rtv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%ATV%' OR ph.drugname2 LIKE '%ATV%' OR LOWER(ph.drugname3) LIKE '%atv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%LPV%' OR ph.drugname2 LIKE '%LPV%' OR LOWER(ph.drugname3) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%DRV%' or ph.drugname2 LIKE '%DRV%' or ph.drugname3 LIKE '%DRV%' THEN pb.mindate
ELSE '' END as 1stRegimenStartDate,'' as 1stRegimenChangeDate,
'' as 2ndRegimen,'' as 2ndRegimenStartDate,'' as 2ndRegimenChangeDate,'' as 3rdRegimen,'' as 3rdRegimenStartDate,'' as 3rdRegimenChangeDate,ph.otherdrugs as OtherRegimenSpecify, pb.maxdate as DateOfLastDrugPickup,ROUND(ph.drugno1/30) as DurationOfMedicationCoverageInMonths
from pharmacy ph JOIN (select pepid,MAX(pharmdispensedate) as maxdate, MIN(pharmdispensedate) as mindate from pharmacy where drugname1!='' group by pepid) pb
ON (ph.pepid=pb.pepid)
where ph.drugname1 !='' AND LENGTH(pb.pepid) = 10  and ph.pharmdispensedate BETWEEN '$rdatestart' AND '$rdateend' and ph.pepid in (select pepid from ngq_adt)
group by ph.pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/ARTRegimenDuringReviewPeriod.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">ART REGIMEN Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: ART REGIMEN Data Not Exported, Delete already existing art_regimen.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting BASELINE Data...</span><br />';
$patdem="SELECT b.CD4_Count,b.CD4_Count_Date,ROUND(c.weight) weight,c.Weight_Date,a.WHO_Clinical_Stage,a.WHO_Clinical_State_Date,a.patientid
FROM (select pepid as patientid, whostage as WHO_Clinical_Stage, MIN(visitdate) as WHO_Clinical_State_Date
from clinicaleval
where whostage in (1,2,3,4)
group by pepid) a JOIN (select pepid, results as CD4_Count, MIN(visitdate) as CD4_Count_Date
from laboratory
where lower(tests) like '%cd4%' and visitdate !='0000-00-00'
group by pepid ) b
ON (a.patientid=b.pepid) JOIN (select pepid, weight as weight, MIN(visitdate) as Weight_Date
from clinicaleval
where weight!=''
group by pepid) c
ON (a.patientid=c.pepid)
WHERE length(a.patientid)=10 and a.patientid IN (select pepid from ngq_adt)
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/BaselineParameters.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">BASELINE Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: BASELINE Data Not Exported, Delete already existing art_adherence.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting HEPATITIS B Data...<br /></span>';
$patdem="select a.pepid, CASE a.tests WHEN 'HBsAG (*At Baseline)' THEN 'Yes' ELSE 'No' END as HepatitisBAssayEverDoneForPatient,a.results as ResultOfHepatitisBAssay,CASE WHEN b.visitdate BETWEEN '$rdatestart' AND '$rdateend' THEN 'Yes' ELSE 'No' END as ClinicalEvaluationARTFormFilledAtLastVisit
from laboratory a JOIN (SELECT pepid, MAX(visitdate) as visitdate,visittype from visit where visitdate BETWEEN '$rdatestart' AND '$rdateend' AND lower(visittype) ='clinical evaluation' group by pepid) b
ON (a.pepid=b.pepid)
where lower(a.tests) like '%hbs%' AND LENGTH(a.pepid) = 10 and a.pepid IN (select pepid from ngq_adt)
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/hepatitisb.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">HEPATITIS B Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: HEPATITIS B Data Not Exported, Delete already existing hepatitisb.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting COTRIMOXAZOLE Data...</span><br />';
$patdem="SELECT a.pepid AS patientid,CASE MAX(a.oidrug) WHEN  'CTX' THEN  'Yes' ELSE  'No' END AS PatientReceiveCotrimoxazoleDuringReviewPeriod,CASE WHEN b.visitdate BETWEEN  '$rdateend' - interval 1 MONTH AND '$rdateend'  THEN  'Yes' ELSE  'No' END AS PatientCurrentlyOnCotrimoxazoleProphylaxis, b.visitdate as DateOfLastPrescription
FROM pharmacy a JOIN (SELECT pepid, MAX( visitdate ) AS visitdate, oidrug FROM pharmacy WHERE oidrug =  'CTX' AND visitdate BETWEEN  '$rdatestart' AND '$rdateend' GROUP BY pepid ) b 
ON ( a.pepid = b.pepid )  
WHERE a.visitdate BETWEEN '$rdatestart' AND '$rdateend' AND LENGTH(a.pepid) = 10 and a.pepid IN (select pepid from ngq_adt)
group by a.pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/cotrimoxazole.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">COTRIMOXAZOLE Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: COTRIMOXAZOLE Data Not Exported, Delete already existing cotrimoxazole.csv in the Storage Directory.</span><br /><br />';
		}
	}
/////// VIRAL LOAD //////////
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting VIRAL LOAD Data...</span><br />';
$patdem="SELECT pepid as PatientID, CASE tests WHEN 'Viral Load' THEN 'Yes' ELSE 'No' END as HasPatientReceivedVLTesting, CASE tests WHEN 'Viral Load' THEN DATE_FORMAT(visitdate,'%m/%d/%Y') ELSE '' END as VLTestDate, CASE tests WHEN 'Viral Load' THEN results ELSE '' END as Result_Copies_Per_ml
from laboratory 
where tests='Viral Load' AND visitdate BETWEEN '$rdatestart' AND '$rdateend' AND LENGTH(pepid) = 10 and pepid IN (select pepid from ngq_adt)
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/ViralLoadtesting.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">VIRAL LOAD Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: VIRAL LOAD Data Not Exported, Delete already existing ViralLoadtesting.csv in the Storage Directory.</span><br /><br />';
		}
	}
////////// VIRAL LOAD END ////////	
///////// TUBERCULOSIS /////////
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Tuberculosis Data...</span><br />';
$patdem="select pepid as PatientID, CASE tbstatus WHEN 'Currently on TB treatment' THEN 'Yes' ELSE 'No' END as PatientOnTBTreatmentDuringReviewPeriod,
CASE tbstatus 
WHEN 'Currently on TB treatment' THEN 'Yes' 
WHEN 'No Signs' THEN 'Yes' 
WHEN 'TB Suspected and referred for evaluation' THEN 'Yes' 
WHEN 'On INH prophylaxis' THEN 'Yes' 
WHEN 'TB positive, Not on drugs' THEN 'Yes' 
ELSE 'No' END as PatientClinicallyScreenForTBDuringReviewPeriod,'' as TBClinicalScreeningCriteria,CASE tbstatus 
WHEN 'TB Suspected and referred for evaluation' THEN 'Yes' 
ELSE 'No' END as BasedOnScreeningWasPatientedSuspectedToHaveTB,'No' as PatientBeenEvaluatedInReviewPeriodForTBUsingSputumSmearOrCulture, 'No' as PatientHdChestXRay,CASE tbstatus 
WHEN 'TB positive, Not on drugs' THEN 'Yes' 
ELSE 'No' END as PatientDiagnosedOfTBInReviewPeriod,CASE tbstatus 
WHEN 'Currently on TB treatment' THEN 'Yes' 
ELSE 'No' END as PatientStartTBTreatment, CASE tbstatus WHEN 'Currently on TB treatment' THEN visitdate ELSE '' END as TB_TreatmentStartDate, CASE tbstatus WHEN 'TB positive, Not on drugs' THEN visitdate ELSE '' END as TBDiagnosis_Date
from clinicaleval
where tbstatus NOT IN ('No','Yes','NA','') and visitdate BETWEEN '$rdatestart' AND '$rdateend' and LENGTH(pepid) = 10 and pepid in (select pepid from ngq_adt)
group by pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Tuberculosis.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Tuberculosis Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Tuberculosis Data Not Exported, Delete already existing Tuberculosis.csv in the Storage Directory.</span><br /><br />';
		}
	}
///////Tuberculosis END////////	
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting ClinicalEvaluationVisitsInReviewPeriod Data...</span><br />';
$patdem="SELECT a.pepid,
(
    SELECT DISTINCT b.visitdate
    FROM visit b 
    WHERE b.pepid = a.pepid  AND visitdate BETWEEN '$rdatestart' AND '$rdateend'
    ORDER BY visitdate 
    LIMIT 0,1
) as visitdate1,
(
    SELECT DISTINCT b.visitdate
    FROM visit b 
    WHERE b.pepid = a.pepid  AND visitdate BETWEEN '$rdatestart' AND '$rdateend'
    ORDER BY visitdate 
    LIMIT 1,1
) as visitdate2
,
(
    SELECT DISTINCT b.visitdate 
    FROM visit b 
    WHERE b.pepid = a.pepid AND visitdate BETWEEN '$rdatestart' AND '$rdateend'
    ORDER BY visitdate 
    LIMIT 2,1
) as visitdate3
,
(
    SELECT DISTINCT b.visitdate 
    FROM visit b 
    WHERE b.pepid = a.pepid AND visitdate BETWEEN '$rdatestart' AND '$rdateend'
    ORDER BY visitdate 
    LIMIT 3,1
) as visitdate4
FROM visit a
WHERE a.visitdate BETWEEN '$rdatestart' AND '$rdateend' AND length(a.pepid)=10 and a.pepid IN (select pepid from ngq_adt)
GROUP BY a.pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/ClinicalEvaluationVisitsInReviewPeriod.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">ClinicalEvaluationVisitsInReviewPeriod Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: ClinicalEvaluationVisitsInReviewPeriod Data Not Exported, Delete already existing ClinicalEvaluationVisitsInReviewPeriod.csv in the Storage Directory.</span><br /><br />';
		}
	}
//////////CLINICAL EVALUATION END////////
/////////MISSED APPOINTMENT START///////
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Missed Appointment Data...</span><br />';
$patdem="select i.pepid as PatientID, 'Checked' as Missed_appointment_1, i.interrdate as Missed_appointment_1_Date, 
CASE WHEN i.restartdate !='0000-00-00' THEN 'Checked' ELSE '' END as Missed_appointment_1_AttemptedContact,
CASE WHEN i.restartdate !='0000-00-00' THEN i.restartdate ELSE '' END as Missed_appointment_1_AttemptedContactDate,
i.reason as Missed_appointment_1_ReasonForLFTU,
p.causeofdeath as Missed_appointment_1_CauseOfDeath
from interruptions i JOIN patient p
ON (i.pepid=p.pepid)
where length(i.pepid)=10 and i.interrdate BETWEEN '$rdatestart' AND '$rdateend' AND lower(i.interruptstatus) = 'lost'
and i.interrdate!='0000-00-00' and p.pepid IN (select pepid from ngq_adt)
group by i.pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/MissedAppt.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Missed Appointment Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Missed Appointment Data Not Exported, Delete already existing MissedAppt.csv in the Storage Directory.</span><br /><br />';
		}
	}	
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting PatientStatusDuringReviewPeriod Data...</span><br />';
$patdem="select pepid,planarvtherapy AS status,CASE enroldate WHEN '' THEN enroldate ELSE '' END as DateOfStatusChange,planarvtherchgtrtmtreason as ReasonForStatusChange, CASE 	patienttransout WHEN 'ART' THEN 'Yes' WHEN 'PRE-ART' THEN 'Yes' ELSE 'No' END as Transferred_Out, CASE 	patientdied WHEN 'ART' THEN 'Yes' WHEN 'PRE-ART' THEN 'Yes' ELSE 'No' END as Death, CASE WHEN patientdied='ART' OR patienttransout='ART' THEN 'Yes' WHEN patientdied='PRE-ART' OR patienttransout='PRE-ART' THEN 'Yes' ELSE 'No' END as Discontinued_Care,patienttransoutdate,dateofdeath,CASE WHEN patientdied='ART' OR patienttransout='ART' THEN patienttransoutdate  ELSE 'No' END as Discontinued_Care_Date,sourceofdeathinf as Discontinued_Care_Reason,'' as Discontinued_Care_Reason_Other
from patient
WHERE enroldate BETWEEN '$rdatestart' AND '$rdateend' AND LENGTH(pepid) = 10 and pepid IN (select pepid from ngq_adt)
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/PatientStatusDuringReviewPeriod.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">PatientStatusDuringReviewPeriod Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: PatientStatusDuringReviewPeriod Data Not Exported, Delete already existing PatientStatusDuringReviewPeriod.csv in the Storage Directory.</span><br /><br />';
		}
	}
		//DROP Table, {DE-POPULATE}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Removing Patient Table for Nigerian Qual Extraction</span><br />';
$patdem="DROP TABLE ngq_adt";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Table DROPPED Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Table not DROPPED (May be Already removed)... Check SQL Database.</span><br /><br />';
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
//Create Table, {POPULATE}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Creating Patient Table for Nigerian Qual Extraction</span><br />';
$patdem="CREATE TABLE ngq_ped AS
select p.pepid,p.surname, othernames,hospitalid as hospitalno,sex as Gender,dob as DateOfBirth,Age,'Year' as UnitOfAgeMeasure,enroldate as DateEnrolledInCare,'' as DeliveryLocation,pchildliveswith as PrimaryCareGiver,v.visitdate as DateOfLastVisit, CASE COALESCE(x.visitdate,0) WHEN 0 THEN 'No' ELSE 'Yes' END as ClinicalVisit6MonthsPriorToReview,'No' as HospitalAdmissionDuringReview,@a:=@a+1 RNL_SerialNo,jobstatuscaregiver as CareGiverOccupation
from patient p
LEFT OUTER JOIN (select pepid,visitdate from visit where length(pepid)=11 and visitdate between '$rdatestart' - INTERVAL 6 MONTH AND '$rdatestart' and visittype IN ('Clinical Evaluation','Pharmacy Order','Laboratory Order/Result') group by pepid) x 
ON (p.pepid=x.pepid) JOIN
(select pepid,MAX(visitdate) as visitdate from visit where length(pepid)=11 and visitdate between '$rdatestart' AND '$rdateend' group by pepid) v
ON (p.pepid=v.pepid),(SELECT @a:= 0) AS a WHERE dob!='0000-00-00' and length(p.pepid)=11";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Table Created Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Table not Created (May Already Exist)... Check SQL Database.</span><br /><br />';
		}
	}
	//ART 1
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_PatientDemographics Data...</span><br />';
$patdem="select p.pepid,p.surname, othernames,hospitalid as hospitalno,sex as Gender,dob as DateOfBirth,Age,'Year' as UnitOfAgeMeasure,enroldate as DateEnrolledInCare,'' as DeliveryLocation,pchildliveswith as PrimaryCareGiver,v.visitdate as DateOfLastVisit, CASE COALESCE(x.visitdate,0) WHEN 0 THEN 'No' ELSE 'Yes' END as ClinicalVisit6MonthsPriorToReview,'No' as HospitalAdmissionDuringReview,@a:=@a+1 RNL_SerialNo,jobstatuscaregiver as CareGiverOccupation
from patient p
LEFT OUTER JOIN (select pepid,visitdate from visit where length(pepid)=11 and visitdate between '$rdatestart' - INTERVAL 6 MONTH AND '$rdatestart' and visittype IN ('Clinical Evaluation','Pharmacy Order','Laboratory Order/Result') group by pepid) x 
ON (p.pepid=x.pepid) JOIN
(select pepid,MAX(visitdate) as visitdate from visit where length(pepid)=11 and visitdate between '$rdatestart' AND '$rdateend' group by pepid) v
ON (p.pepid=v.pepid),(SELECT @a:= 0) AS a WHERE dob!='0000-00-00' and length(p.pepid)=11
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_PatientDemographics.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_PatientDemographics Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_PatientDemographics Data Not Exported, Make Sure the Directory is empty.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_ART_Adherence Data...</span><br />';
$patdem="SELECT c.pepid,CASE  
WHEN c.regadherencea='Good' AND MAX(c.visitdate) between '$rdateend' - INTERVAL 3 MONTH AND '$rdateend' THEN 'Yes'  
WHEN c.regadherencea='Fair' AND MAX(c.visitdate) between '$rdateend' - INTERVAL 3 MONTH AND '$rdateend' THEN 'Yes' 
WHEN c.regadherencea='Poor' AND MAX(c.visitdate) between '$rdateend' - INTERVAL 3 MONTH AND '$rdateend' THEN 'Yes'  
ELSE 'No' 
END as ARTAdherenceAssessmentPerformedDuringLast3Months
from clinicaleval c JOIN (SELECT pepid,MAX(CONVERT((results), SIGNED INTEGER)) AS cd4,visitdate
from laboratory
where tests='CD4' and length(pepid)=11  and pepid IN (select pepid from ngq_ped)
group by pepid) b
ON (c.pepid=b.pepid) JOIN (select pepid, regadherencea, MAX(visitdate) as maxadhdate from clinicaleval where regadherencea IN ('Good', 'Fair', 'Poor') group by pepid) ca
ON (c.pepid=ca.pepid)
where c.visitdate BETWEEN '$rdatestart' AND '$rdateend'
GROUP BY c.pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_ART_Adherence.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_ART_Adherence Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_ART_Adherence Data Not Exported, Delete already existing art_adherence.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_Tuberculosis Data...</span><br />';
$patdem="select pepid as PatientID, CASE tbstatus WHEN 'Currently on TB treatment' THEN 'Yes' ELSE 'No' END as PatientOnTBTreatmentDuringReviewPeriod,
CASE tbstatus 
WHEN 'Currently on TB treatment' THEN 'Yes' 
WHEN 'No Signs' THEN 'Yes' 
WHEN 'TB Suspected and referred for evaluation' THEN 'Yes' 
WHEN 'On INH prophylaxis' THEN 'Yes' 
WHEN 'TB positive, Not on drugs' THEN 'Yes' 
ELSE 'No' END as PatientClinicallyScreenForTBDuringReviewPeriod,'' as TBClinicalScreeningCriteria,CASE tbstatus 
WHEN 'TB Suspected and referred for evaluation' THEN 'Yes' 
ELSE 'No' END as BasedOnScreeningWasPatientedSuspectedToHaveTB,'No' as PatientBeenEvaluatedInReviewPeriodForTBUsingSputumSmearOrCulture, 'No' as PatientHdChestXRay,CASE tbstatus 
WHEN 'TB positive, Not on drugs' THEN 'Yes' 
ELSE 'No' END as PatientDiagnosedOfTBInReviewPeriod,CASE tbstatus 
WHEN 'Currently on TB treatment' THEN 'Yes' 
ELSE 'No' END as PatientStartTBTreatment, CASE tbstatus WHEN 'Currently on TB treatment' THEN visitdate ELSE '' END as TB_TreatmentStartDate, CASE tbstatus WHEN 'TB positive, Not on drugs' THEN visitdate ELSE '' END as TBDiagnosis_Date
from clinicaleval
where tbstatus NOT IN ('No','Yes','NA','') and visitdate BETWEEN '$rdatestart' AND '$rdateend' and LENGTH(pepid) = 11 and pepid IN (select pepid from ngq_ped)
group by pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/PED_Tuberculosis.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_Tuberculosis Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_Tuberculosis Data Not Exported, Delete already existing PED_Tuberculosis.csv in the Storage Directory.</span><br /><br />';
		}
	}	
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_ARTRegimenSinceStartingTreatment Data...</span><br />';
$patdem="select ph.pepid,CASE 
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%TDF%' and (ph.drugname1 LIKE '%FDC%' or ph.drugname1 LIKE '%3TC%') THEN 'Yes' 
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%AZT%' and ph.drugname1 LIKE '%3TC%' THEN 'Yes' 
WHEN ph.drugname1 LIKE '%LPV%' and lower(ph.drugname1) LIKE '%d4t%' and ph.drugname1 LIKE '%3TC%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%ABC%' and ph.drugname1 LIKE '%3TC%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%ABC%' and LOWER(ph.drugname1) LIKE '%ddl%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%AZT%' and ph.drugname1 LIKE '%3TC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%TDF%' and ph.drugname1 LIKE '%FTC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%TDF%' and ph.drugname1 LIKE '%3TC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%3TC%' and ph.drugname2 LIKE '%ABC%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname2 LIKE '%ABC%' and LOWER(ph.drugname3) LIKE '%3tc%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%ABC%' and ph.drugname2 LIKE '%3TC%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%3TC%' and ph.drugname2 LIKE '%AZT%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%RTV%' OR ph.drugname2 LIKE '%RTV%' OR LOWER(ph.drugname3) LIKE '%rtv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%ATV%' OR ph.drugname2 LIKE '%ATV%' OR LOWER(ph.drugname3) LIKE '%atv%' THEN 'Yes'
WHEN ph.drugname1 LIKE '%LPV%' OR ph.drugname2 LIKE '%LPV%' OR LOWER(ph.drugname3) LIKE '%lpv%' THEN 'Yes'
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%NVP%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname2 LIKE  '%3TC%' AND ph.drugname3 LIKE  '%NVP%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%NVP%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%EFV%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%D4T%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%ABC%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%EFV%'  THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%TDF%' AND (ph.drugname1 LIKE  '%FTC%' OR ph.drugname1 LIKE  '%3TC%') THEN 'Yes' 
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%D4T%' AND ph.drugname1 LIKE  '%3TC%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%3TC%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%D4T%' AND ph.drugname1 LIKE  '%3TC%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%NVP%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%FTC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname2 LIKE  '%EFV%' AND ph.drugname3 LIKE  '%3TC%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname2 LIKE  '%3TC%' AND ph.drugname3 LIKE  '%EFV%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%ABC%' AND ph.drugname3 LIKE  '%EFV%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%ABC%' AND ph.drugname3 LIKE  '%NVP%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%AZT%' AND ph.drugname3 LIKE  '%NVP%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname2 LIKE  '%AZT%' AND ph.drugname3 LIKE  '%3TC%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%NVP%'  THEN 'Yes'
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 'Yes'
ELSE 'No' END as PatientOnARTAnytimeDuringReviewPeriod,CASE 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%NVP%'  THEN 1 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname2 LIKE  '%3TC%' AND ph.drugname3 LIKE  '%NVP%'  THEN 1 
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%NVP%'  THEN 2 
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%EFV%'  THEN 6 
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%D4T%'  THEN 3 
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%ABC%'  THEN 4 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%EFV%'  THEN 5 
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%TDF%' AND (ph.drugname1 LIKE  '%FTC%' OR ph.drugname1 LIKE  '%3TC%') THEN 6 
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%D4T%' AND ph.drugname1 LIKE  '%3TC%'  THEN 7
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%3TC%'  THEN 8
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%'  THEN 9
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%D4T%' AND ph.drugname1 LIKE  '%3TC%'  THEN 10
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%NVP%'  THEN 2
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%FTC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 6
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 8
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname2 LIKE  '%EFV%' AND ph.drugname3 LIKE  '%3TC%'  THEN 6
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 5
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname2 LIKE  '%3TC%' AND ph.drugname3 LIKE  '%EFV%'  THEN 8
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%ABC%' AND ph.drugname3 LIKE  '%EFV%'  THEN 8
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%ABC%' AND ph.drugname3 LIKE  '%NVP%'  THEN 4
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%AZT%' AND ph.drugname3 LIKE  '%NVP%'  THEN 1
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname2 LIKE  '%AZT%' AND ph.drugname3 LIKE  '%3TC%'  THEN 1
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN 6
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%NVP%'  THEN 1
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%TDF%' and (ph.drugname1 LIKE '%FDC%' or ph.drugname1 LIKE '%3TC%') THEN 20 
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%AZT%' and ph.drugname1 LIKE '%3TC%' THEN 21 
WHEN ph.drugname1 LIKE '%LPV%' and lower(ph.drugname1) LIKE '%d4t%' and ph.drugname1 LIKE '%3TC%' THEN 22
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%ABC%' and ph.drugname1 LIKE '%3TC%' THEN 23
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%ABC%' and LOWER(ph.drugname1) LIKE '%ddl%' THEN 24
WHEN ph.drugname1 LIKE '%AZT%' and ph.drugname1 LIKE '%3TC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN 21
WHEN ph.drugname1 LIKE '%TDF%' and ph.drugname1 LIKE '%FTC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN 20
WHEN ph.drugname1 LIKE '%TDF%' and ph.drugname1 LIKE '%3TC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN 20
WHEN ph.drugname1 LIKE '%3TC%' and ph.drugname2 LIKE '%ABC%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN 23
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname2 LIKE '%ABC%' and LOWER(ph.drugname3) LIKE '%3tc%' THEN 23
WHEN ph.drugname1 LIKE '%ABC%' and ph.drugname2 LIKE '%3TC%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN 23
WHEN ph.drugname1 LIKE '%3TC%' and ph.drugname2 LIKE '%AZT%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN 21
WHEN ph.drugname1 LIKE '%RTV%' OR ph.drugname2 LIKE '%RTV%' OR LOWER(ph.drugname3) LIKE '%rtv%' THEN 25
WHEN ph.drugname1 LIKE '%ATV%' OR ph.drugname2 LIKE '%ATV%' OR LOWER(ph.drugname3) LIKE '%atv%' THEN 25
WHEN ph.drugname1 LIKE '%LPV%' OR ph.drugname2 LIKE '%LPV%' OR LOWER(ph.drugname3) LIKE '%lpv%' THEN 25
WHEN ph.drugname1 LIKE '%DRV%' or ph.drugname2 LIKE '%DRV%' or ph.drugname3 LIKE '%DRV%' THEN 30
ELSE '' END as 1stRegminen,CASE 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%NVP%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname2 LIKE  '%3TC%' AND ph.drugname3 LIKE  '%NVP%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%NVP%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%EFV%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%D4T%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%ABC%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname1 LIKE  '%EFV%'  THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%TDF%' AND (ph.drugname1 LIKE  '%FTC%' OR ph.drugname1 LIKE  '%3TC%') THEN pb.mindate 
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%D4T%' AND ph.drugname1 LIKE  '%3TC%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%EFV%' AND ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%3TC%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%D4T%' AND ph.drugname1 LIKE  '%3TC%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%NVP%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%FTC%' AND ph.drugname2 LIKE  '%EFV%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname2 LIKE  '%EFV%' AND ph.drugname3 LIKE  '%3TC%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname2 LIKE  '%3TC%' AND ph.drugname3 LIKE  '%EFV%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%ABC%' AND ph.drugname3 LIKE  '%EFV%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%ABC%' AND ph.drugname3 LIKE  '%NVP%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%AZT%' AND ph.drugname3 LIKE  '%NVP%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%NVP%' AND ph.drugname2 LIKE  '%AZT%' AND ph.drugname3 LIKE  '%3TC%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%TDF%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%AZT%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%NVP%'  THEN pb.mindate
WHEN ph.drugname1 LIKE  '%ABC%' AND ph.drugname1 LIKE  '%3TC%' AND ph.drugname2 LIKE  '%EFV%'  THEN pb.mindate
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%TDF%' and (ph.drugname1 LIKE '%FDC%' or ph.drugname1 LIKE '%3TC%') THEN pb.mindate 
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%AZT%' and ph.drugname1 LIKE '%3TC%' THEN pb.mindate 
WHEN ph.drugname1 LIKE '%LPV%' and lower(ph.drugname1) LIKE '%d4t%' and ph.drugname1 LIKE '%3TC%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%ABC%' and ph.drugname1 LIKE '%3TC%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname1 LIKE '%ABC%' and LOWER(ph.drugname1) LIKE '%ddl%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%AZT%' and ph.drugname1 LIKE '%3TC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%TDF%' and ph.drugname1 LIKE '%FTC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%TDF%' and ph.drugname1 LIKE '%3TC%' and LOWER(ph.drugname2) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%3TC%' and ph.drugname2 LIKE '%ABC%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%LPV%' and ph.drugname2 LIKE '%ABC%' and LOWER(ph.drugname3) LIKE '%3tc%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%ABC%' and ph.drugname2 LIKE '%3TC%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%3TC%' and ph.drugname2 LIKE '%AZT%' and LOWER(ph.drugname3) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%RTV%' OR ph.drugname2 LIKE '%RTV%' OR LOWER(ph.drugname3) LIKE '%rtv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%ATV%' OR ph.drugname2 LIKE '%ATV%' OR LOWER(ph.drugname3) LIKE '%atv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%LPV%' OR ph.drugname2 LIKE '%LPV%' OR LOWER(ph.drugname3) LIKE '%lpv%' THEN pb.mindate
WHEN ph.drugname1 LIKE '%DRV%' or ph.drugname2 LIKE '%DRV%' or ph.drugname3 LIKE '%DRV%' THEN pb.mindate
ELSE '' END as 1stRegimenStartDate,'01/01/1900' as 1stRegimenChangeDate,
'0' as 2ndRegimen,'01/01/1900' as 2ndRegimenStartDate,'01/01/1900' as 2ndRegimenChangeDate,'0' as 3rdRegimen,'01/01/1900' as 3rdRegimenStartDate,'01/01/1900' as 3rdRegimenChangeDate,'0' as OtherRegimenSpecify
from pharmacy ph JOIN (select pepid,MAX(pharmdispensedate) as maxdate, MIN(pharmdispensedate) as mindate from pharmacy where drugname1!='' group by pepid) pb
ON (ph.pepid=pb.pepid)
where ph.drugname1 !='' AND LENGTH(pb.pepid) = 11  and ph.pharmdispensedate BETWEEN '$rdatestart' AND '$rdateend' and ph.pepid IN (select pepid from ngq_ped)
group by ph.pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_ARTRegimenSinceStartingTreatment.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_ARTRegimenSinceStartingTreatment Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_ARTRegimenSinceStartingTreatment Not Exported, Delete already existing art_adherence.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_BaselineParameters Data...</span><br />';
$patdem="SELECT a.patientid,b.CD4_Count,b.CD4_Count_Date,ROUND(c.weight) weight,c.Weight_Date,a.WHO_Clinical_Stage,a.WHO_Clinical_State_Date,CASE b.CD4_Count WHEN '' THEN 'Yes' else 'No' END as CD4_Not_Recorded,CASE c.weight WHEN '' THEN 'Yes' else 'No' END as Weight_Not_Recorded,CASE WHO_Clinical_Stage WHEN '' THEN 'Yes' else 'No' END as Weight_Not_Recorded, CASE COALESCE(p.dateartstart,0) WHEN 0 THEN 'No' ELSE 'Yes' END as PatientEverStartOnART,CASE COALESCE(p.dateartstart,0) WHEN 0 THEN '' ELSE p.dateartstart END as ART_Start_Date
FROM (select pepid as patientid, whostage as WHO_Clinical_Stage, MIN(visitdate) as WHO_Clinical_State_Date
from clinicaleval
where whostage in (1,2,3,4)
group by pepid) a JOIN (select pepid, results as CD4_Count, MIN(visitdate) as CD4_Count_Date
from laboratory
where lower(tests) like '%cd4%' and visitdate !='0000-00-00'
group by pepid ) b
ON (a.patientid=b.pepid) JOIN (select pepid, weight as weight, MIN(visitdate) as Weight_Date
from clinicaleval
where weight!=''
group by pepid) c
ON (a.patientid=c.pepid) JOIN (select pepid,dateartstart from patient) p ON (a.patientid=p.pepid)
WHERE length(a.patientid)=11 and a.patientid IN (select pepid from ngq_ped)
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_BaselineParameters.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_BaselineParameters Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_BaselineParameters Not Exported, Delete already existing art_adherence.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_Cotrimoxazole Data...</span><br />';
$patdem="SELECT a.pepid AS patientid,CASE MAX(a.oidrug) WHEN  'CTX' THEN  'Yes' ELSE  'No' END AS PatientReceiveCotrimoxazoleDuringReviewPeriod,CASE WHEN b.visitdate BETWEEN '$rdateend' - interval 1 month AND '$rdateend' THEN  'Yes' ELSE  'No' END AS PatientCurrentlyOnCotrimoxazoleProphylaxis, DATE_FORMAT(b.visitdate,'%d/%m/%Y %T') as DateOfLastPrescription
FROM pharmacy a JOIN (SELECT pepid, MAX( visitdate ) AS visitdate, oidrug FROM pharmacy WHERE oidrug =  'CTX' AND visitdate BETWEEN  '$rdatestart' AND '$rdateend' GROUP BY pepid ) b 
ON ( a.pepid = b.pepid )  
WHERE a.visitdate BETWEEN '$rdatestart' AND '$rdateend' and length(a.pepid)=11 and a.pepid IN (select pepid from ngq_ped)
group by a.pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_Cotrimoxazole.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_Cotrimoxazole Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_Cotrimoxazole Data Not Exported, Delete already existing cotrimoxazole.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_ClinicalEvaluationInReviewPeriod Data...</span><br />';
$patdem="SELECT a.pepid,
(
    SELECT DISTINCT b.visitdate
    FROM visit b 
    WHERE b.pepid = a.pepid  AND visitdate BETWEEN '$rdatestart' AND '$rdateend'
    ORDER BY visitdate 
    LIMIT 0,1
) as visitdate1,
(
    SELECT DISTINCT b.visitdate
    FROM visit b 
    WHERE b.pepid = a.pepid  AND visitdate BETWEEN '$rdatestart' AND '$rdateend'
    ORDER BY visitdate 
    LIMIT 1,1
) as visitdate2
,
(
    SELECT DISTINCT b.visitdate 
    FROM visit b 
    WHERE b.pepid = a.pepid AND visitdate BETWEEN '$rdatestart' AND '$rdateend'
    ORDER BY visitdate 
    LIMIT 2,1
) as visitdate3
,
(
    SELECT DISTINCT b.visitdate 
    FROM visit b 
    WHERE b.pepid = a.pepid AND visitdate BETWEEN '$rdatestart' AND '$rdateend'
    ORDER BY visitdate 
    LIMIT 3,1
) as visitdate4
FROM visit a
WHERE a.visitdate BETWEEN '$rdatestart' AND '$rdateend' AND length(a.pepid)=11 and a.pepid IN (select pepid from ngq_ped)
GROUP BY a.pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_ClinicalEvaluationInReviewPeriod.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_ClinicalEvaluationInReviewPeriod Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_ClinicalEvaluationInReviewPeriod Data Not Exported, Delete already existing Pediatric_ClinicalEvaluationInReviewPeriod.csv in the Storage Directory.</span><br /><br />';
		}
	}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric_PatientStatus Data...</span><br />';
$patdem="select pepid,planarvtherapy as status,enroldate as DateOfStatusChange,planarvtherchgtrtmtreason as Reason, CASE 	patienttransout WHEN 'ART' THEN 'Checked' WHEN 'PRE-ART' THEN 'Checked' ELSE 'Unchecked' END as Transferred_Out, CASE 	patientdied WHEN 'ART' THEN 'Yes' WHEN 'PRE-ART' THEN 'Yes' ELSE 'No' END as Death, CASE WHEN patientdied='ART' OR patienttransout='ART' THEN 'Checked' WHEN patientdied='PRE-ART' OR patienttransout='PRE-ART' THEN 'Checked' ELSE 'Unchecked' END as Discontinued_Care,patienttransoutdate,dateofdeath,CASE WHEN patientdied='ART' OR patienttransout='ART' THEN patienttransoutdate  ELSE '' END as Discontinued_Care_Date,sourceofdeathinf as Discontinued_Care_Reason,'' as Discontinued_Care_Reason_Other
from patient where planarvtherapy !='' and planarvtherapy is not null and length(pepid) = 11 and pepid IN (select pepid from ngq_ped)
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_PatientStatus.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric_PatientStatus Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric_PatientStatus Data Not Exported, Delete already existing Pediatric_PatientStatus.csv in the Storage Directory.</span><br /><br />';
		}
	}
/////////MISSED APPOINTMENT START///////
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Exporting Pediatric Missed Appointment Data...</span><br />';
$patdem="select i.pepid as PatientID, 'Checked' as Missed_appointment_1, i.interrdate as Missed_appointment_1_Date, 
CASE WHEN i.restartdate !='0000-00-00' THEN 'Checked' ELSE '' END as Missed_appointment_1_AttemptedContact,
CASE WHEN i.restartdate !='0000-00-00' THEN i.restartdate ELSE '' END as Missed_appointment_1_AttemptedContactDate,
i.reason as Missed_appointment_1_ReasonForLFTU,
p.causeofdeath as Missed_appointment_1_CauseOfDeath
from interruptions i JOIN patient p
ON (i.pepid=p.pepid)
where length(i.pepid)=11 and i.interrdate BETWEEN '$rdatestart' AND '$rdateend' AND lower(i.interruptstatus) = 'lost'
and i.interrdate!='0000-00-00' and i.pepid IN (select pepid from ngq_ped)
group by i.pepid
INTO OUTFILE 'C:/FM_NIGQUAL_EXP/Pediatric_MissedAppt.csv'
FIELDS TERMINATED BY ','
ENCLOSED BY '\"'
LINES TERMINATED BY '\n'";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Pediatric Missed Appointment Data Exported Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Pediatric Missed Appointment Data Not Exported, Delete already existing MissedAppt.csv in the Storage Directory.</span><br /><br />';
		}
	}
	//DROP Table, {DE-POPULATE}
if (!empty($rdatestart)){
	echo '<br /><br /><span style="color:blue;text-align:center;">Removing Patient Table for Nigerian Qual Extraction</span><br />';
$patdem="DROP TABLE ngq_ped";
$resultpatdem=mysqli_query($con,$patdem);
if($resultpatdem){
	echo '<span style="color:green;text-align:center;">Table DROPPED Successfully</span><br />';
	}
	else{
		echo '<span style="color:red;text-align:center;">Error: Table not DROPPED (May be Already removed)... Check SQL Database.</span><br /><br />';
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
