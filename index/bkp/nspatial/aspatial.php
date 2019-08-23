<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="style.css" type="text/css">
        <script src="../amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../amcharts/serial.js" type="text/javascript"></script>

        <!-- scripts for exporting chart as an image -->
        <!-- Exporting to image works on all modern browsers except IE9 (IE10 works fine) -->
        <!-- Note, the exporting will work only if you view the file from web server -->
        <!--[if (!IE) | (gte IE 10)]> -->
        <script src="../amcharts/exporting/amexport.js" type="text/javascript"></script>
        <script src="../amcharts/exporting/rgbcolor.js" type="text/javascript"></script>
        <script src="../amcharts/exporting/canvg.js" type="text/javascript"></script>
        <script src="../amcharts/exporting/jspdf.js" type="text/javascript"></script>
        <script src="../amcharts/exporting/filesaver.js" type="text/javascript"></script>
<script src="../amcharts/exporting/jspdf.plugin.addimage.js" type="text/javascript"></script>
        <!-- <![endif]-->
        
<style type="text/css">
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:16px;
}
p, h2, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
h2{ font-family:"Comic Sans MS", cursive;
font-size:16px;
font-style:italic;
background-color:#0C0;
border-collapse:collapse;
	
	}
	
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:850px;
padding:14px;
}
li input
{
    position: absolute;
    margin-left: -40px;
    margin-top: 5px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 1px #b7ddf2;
background:#ebf4fb;
}

#stylized1{
border:solid 1px #b7ddf2;
background:#ebf4fb;
}
h1 {
  margin: 0px;
  line-height: 40px;
  font-size: 15px;
  font-weight: bold;
  color: #555;
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
#stylized p{
	font: bold 12px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
	color: #6D929B;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:20px;
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
#horizontalmenu ul {
padding:1; margin:1; list-style:none;
}
#horizontalmenu li {
float:left; position:relative; padding-right:200; display:block;
border-style:inset;
}
#horizontalmenu li ul {
    display:none;
position:absolute;
}
#horizontalmenu li:hover ul{
    display:table;
    background:#CAE8EA;
height:auto; width:auto;
}
#horizontalmenu li ul li{
    clear:both;
border-style:none;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Backup</title>
</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(../images/bartoszkosowski.jpg) no-repeat center left;">SUPER ADMIN - CLEAR DEMO</h1>
<body>
<a href="../index.php" >Logout</a>
<div id="stylized1" class="myform">
</div>
<br>
<div id="stylized" class="myform">
<p>Clear Demo data and create a new CIS Pro Instance - This Happens only once</p>

<a href="?run=true">CLEAR DEMO DATA</a>
<?php
error_reporting(0);
if ($_GET['run']) {
  # This code will run if ?run=true is set.
  shell_exec("C:\wamp\www\apindb\BACKUP\CiSProDropDemo.bat");
  echo "<br />";
  echo "Demo Data Cleared! New Instance of CIS Pro, Running";
}
?>
<!-- This link will add ?run=true to your URL, myfilename.php?run=true -->
</div>
</body>
</html>