<?php
 ////////////////////CREATE backup FOLDER/////////////
	if (!file_exists('C:\CIS_PRO_FILES\CiSQuery')) {
    mkdir('C:\CIS_PRO_FILES\CiSQuery', 0777, true);
	}
?>
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
        <!-- <![endif]-->

</script>
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
width:610px;
padding:14px;

font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: normal;
font-weight: bold;
color: #09C;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;

border-radius: 10px;
padding:10px;
border: 1px solid #999;
}
.myform1{
margin:0 auto;
width:850px;
padding:14px;

font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: normal;
font-weight: bold;
color: #09C;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;

border-radius: 10px;
padding:10px;
border: 1px solid #999;

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
<title>CIS Pro - Reports</title>

</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">PATIENT APPOINTMENT SEARCH - BY PEPID</h1>
<a href="misc/logoutclrhistory.php" style="font-weight:bold; font-size:14px; color:#F00">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="./apptdb.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px;">APPOINTMENTS</a> 
<body onload="if(document.referrer=='') self.location='./index.php';">
<br />
<br />
<br />
<br />
<br />
<form class="myform" id="qbuild" name="qbuild" method="GET" action="apptsearch.php">
<textarea rows="1px" style="width:110px; resize:none" required="Enter Patient ID" name="buildq" id="buildq">
</textarea>
<button type="submit" style="alignment-adjust:middle">SEARCH</button>
<div class="spacer"></div>

</form>
</form>
<br />
<form class="myform1">


<?php
if($_GET){
session_start();
error_reporting(0);

$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


class MyClass{
    public function GetUserInformation(){
		if(isset($_GET['buildq'])){ 
$buildq = $_GET['buildq']; 
} 
 else {
$buildq = "";
}
$query = "select 'CLINICAL VISIT' as CLINICAL_EVAL,pepid, visitdate as LAST_VISIT, nextapptdate as NEXT_APPOINTMENT_DATE
from clinicaleval
where pepid='$buildq'
order by visitdate desc limit 1";
$result=mysql_query($query) or die("Unidentified Pepid!");
if($result === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}else
{
$fields=mysql_num_fields($result) or die("Query Exported to EXCEL version CSV");
}
echo "<table>\n<tr>";

for ($i=0; $i < mysql_num_fields($result); $i++) //Table Header
{ print "<th>".mysql_field_name($result, $i)."</th>"; }
echo "</tr>\n";
while ($row = mysql_fetch_row($result)) { //Table body
echo "<tr>";
    for ($f=0; $f < $fields; $f++) {
    echo "<td>$row[$f]</td>"; }
echo "</tr>\n";}

echo "</table><p>";   


//PHARMACY

$query1 = "select 'DRUG PICKUP' as PHARMACY,pepid, visitdate as LAST_VISIT, nextapptdate as NEXT_APPOINTMENT_DATE
from PHARMACY
where pepid='$buildq'
order by visitdate desc limit 1";
$result1=mysql_query($query1) or die("Unidentified Pepid!");
if($result1 === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}else
{
$fields1=mysql_num_fields($result1) or die("Query Exported to EXCEL version CSV");
}
echo "<table>\n<tr>";

for ($i=0; $i < mysql_num_fields($result1); $i++) //Table Header
{ print "<th>".mysql_field_name($result1, $i)."</th>"; }
echo "</tr>\n";
while ($row = mysql_fetch_row($result1)) { //Table body
echo "<tr>";
    for ($f=0; $f < $fields; $f++) {
    echo "<td>$row[$f]</td>"; }
echo "</tr>\n";}

echo "</table><p>";   
 
 //LABORATORY - VIRAL_LOAD

$query1 = "select 'LAB ORDER' as VIRAL_LOAD,pepid, visitdate as LAST_VL_VISIT, DATE_ADD(visitdate, INTERVAL 1 YEAR) as NEXT_APPOINTMENT_DATE
from LABORATORY
where pepid='$buildq' and lower(tests)='viral load'
order by visitdate desc limit 1";
$result1=mysql_query($query1) or die("Unidentified Pepid!");
if($result1 === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}else
{
$fields1=mysql_num_fields($result1) or die("Query Exported to EXCEL version CSV");
}
echo "<table>\n<tr>";

for ($i=0; $i < mysql_num_fields($result1); $i++) //Table Header
{ print "<th>".mysql_field_name($result1, $i)."</th>"; }
echo "</tr>\n";
while ($row = mysql_fetch_row($result1)) { //Table body
echo "<tr>";
    for ($f=0; $f < $fields; $f++) {
    echo "<td>$row[$f]</td>"; }
echo "</tr>\n";}

echo "</table><p>";   
  
 //LABORATORY - CD4

$query1 = "select 'LAB ORDER' as CD4,pepid, visitdate as LAST_CD4_DATE, DATE_ADD(visitdate, INTERVAL 1 YEAR) as NEXT_APPOINTMENT_DATE
from LABORATORY
where pepid='$buildq' and lower(tests)='cd4'
order by visitdate desc limit 1";
$result1=mysql_query($query1) or die("Unidentified Pepid!");
if($result1 === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}else
{
$fields1=mysql_num_fields($result1) or die("Query Exported to EXCEL version CSV");
}
echo "<table>\n<tr>";

for ($i=0; $i < mysql_num_fields($result1); $i++) //Table Header
{ print "<th>".mysql_field_name($result1, $i)."</th>"; }
echo "</tr>\n";
while ($row = mysql_fetch_row($result1)) { //Table body
echo "<tr>";
    for ($f=0; $f < $fields; $f++) {
    echo "<td>$row[$f]</td>"; }
echo "</tr>\n";}

echo "</table><p>";   
 } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();
}
?>




</form>
</body>

</html>