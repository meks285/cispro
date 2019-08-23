<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
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
<script type="text/javascript">
{

history.go(1);
 }

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
<title>CiS Pro - Management Inferface</title>
</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">AUDIT TRAIL INTERFACE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if(isset($_GET["username"])) echo $_GET["username"]; ?></h1>
<body onload="if(document.referrer=='') self.location='./index.php';">
<a href="../misc/logoutclrhistory.php" style="font-weight:bold; font-size:14px; color:#F00">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a style="font-weight:bold; font-size:14px; color:blue" href="./">[BACK]</a> 

<div id="stylized1" class="myform">
<div id="horizontalmenu">
<p>

</p>
</div>
</div>
<form class="myform" autocomplete="off">
<?php 
include '../mandate_/lidh.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT table_name AS  `Table` , ROUND( ((data_length + index_length) /1024 /1024 ) , 2) `SizeinMB` FROM information_schema.TABLES where table_name='audit_trail'");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th>TABLE NAME</th>
<th>SIZE (MB)</th>
<th>ACTION</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
	  if($row['SizeinMB']>5){
  echo "<tr>";
  echo "<td>" . $row['Table'] . "</td>";
  echo "<td>" . $row['SizeinMB'] . "</td>";
  echo '<td><a  style="color:red; font-weight:bold; font-style:normal;" href="clear_audit.php?USERNAME=' . $row['Table'] . '&amp;CREATIONDATE=' . $row['SizeinMB'] . '" onclick="return confirm(\'This is irreversible!!! Backup Audit table before delete\');">Audit too Big, Delete!!!</a></td>';
  echo "</tr>";
	  }
	  else
	  {
  echo "<tr>";
  echo "<td>" . $row['Table'] . "</td>";
  echo "<td>" . $row['SizeinMB'] . "</td>";
  echo '<td style="color:green; font-weight:bold; font-style:normal;">AUDIT Size Okay</td>';
  echo "</tr>";
		  
	  }
  }
echo "</table>";
echo "<br>";

echo "Row Count: ".$num;

mysqli_close($con);

session_write_close();


?>
</form>
<input name="myusername" type="hidden" id="myusername" class="form_element" value="<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" />
<span style="font-family: Arial; font-size: 10; color: #CC0000;">
		</span>
</body>
</html>