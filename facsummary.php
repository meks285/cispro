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
font-size:11px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:850px;
padding:14px;
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
font-weight: bold;
color: #09C;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;

border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
li input
{
    position: absolute;
    margin-left: -40px;
    margin-top: 5px;
}
.sidebar {
   width: 165px;
   height: 100px;
   position: fixed;
   left: 0px;
   top: 300px;
   border: 1px solid black;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 1px #b7ddf2;
background:#ebf4fb;
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
display:block;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
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
	width:100%;
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - Facility Summary</title>
</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">FACILITY SUMMARY</h1>
<body>
<a href="javascript:history.go(-1)">[BACK]</a>
<div id="stylized" class="myform">
<form>
<?php 
include './mandate_/lidh.php';
$query1 = "select count(*) from patient";
            $result1 = mysqli_query($con,$query1);
            $count1 = mysqli_fetch_array($result1);
echo "<div style ='
font: normal bold 12px Verdana, Arial, Helvetica,sans-serif;
color:black;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:15px;
'>Total Patients in this Facility: </div>".$count1[0];
?>
<?php 
include './mandate_/lidh.php';
$query2 = "select count(*) from patient where sex='male'";
            $result2 = mysqli_query($con,$query2);
            $count2 = mysqli_fetch_array($result2);
echo "<div style ='
font: normal bold 12px Verdana, Arial, Helvetica,sans-serif;
color:black;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:15px;
'>Total Male: </div>".$count2[0];
?>
<?php 
include './mandate_/lidh.php';
$query9 = "select count(*) from patient where sex='female'";
            $result9 = mysqli_query($con,$query9);
            $count9 = mysqli_fetch_array($result9);
echo "<div style ='
font: normal bold 12px Verdana, Arial, Helvetica,sans-serif;
color:black;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:15px;
'>Total Female: </div>".$count9[0];
?>
<?php 
include './mandate_/lidh.php';
$query3 = "select count(*) from patient where age>=15";
            $result3 = mysqli_query($con,$query3);
            $count3 = mysqli_fetch_array($result3);
echo "<div style ='
font: normal bold 12px Verdana, Arial, Helvetica,sans-serif;
color:black;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:15px;
'>Total Adult: </div>".$count3[0];
?>
<?php 
include './mandate_/lidh.php';
$query3 = "select count(*) from patient where sex='male' and age>=15";
            $result3 = mysqli_query($con,$query3);
            $count3 = mysqli_fetch_array($result3);
echo "<div style ='
font: normal bold 12px Verdana, Arial, Helvetica,sans-serif;
color:black;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:15px;
'>Total Adult - Male: </div>".$count3[0];
?>
<?php 
include './mandate_/lidh.php';
$query3 = "select count(*) from patient where sex='female' and age>=15";
            $result3 = mysqli_query($con,$query3);
            $count3 = mysqli_fetch_array($result3);
echo "<div style ='
font: normal bold 12px Verdana, Arial, Helvetica,sans-serif;
color:black;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:15px;
'>Total Adult - Female: </div>".$count3[0];
?>
<?php 
include './mandate_/lidh.php';
$query = "select count(*) from patient where age<15";
            $result = mysqli_query($con,$query);
            $count = mysqli_fetch_array($result);
echo "<div style ='
font: normal bold 12px Verdana, Arial, Helvetica,sans-serif;
color:black;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:15px;
'>Total Pediatrics: </div>".$count[0];
?>
<?php 
include './mandate_/lidh.php';
$query = "select count(*) from patient where age<15 AND sex='male'";
            $result = mysqli_query($con,$query);
            $count = mysqli_fetch_array($result);
echo "<div style ='
font: normal bold 12px Verdana, Arial, Helvetica,sans-serif;
color:black;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:15px;
'>Total Pediatrics(MALE): </div>".$count[0];
?>
<?php 
include './mandate_/lidh.php';
$query = "select count(*) from patient where age<15 AND sex='female'";
            $result = mysqli_query($con,$query);
            $count = mysqli_fetch_array($result);
echo "<div style ='
font: normal bold 12px Verdana, Arial, Helvetica,sans-serif;
color:black;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:15px;
'>Total Pediatrics(FEMALE): </div>".$count[0];
?>

</form>
</div>
</body>
</html>