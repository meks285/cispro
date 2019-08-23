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
<title>CiS Pro - Patient total</title>
</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">TOTAL PATIENT LIST</h1>
<body >
<a href="./index.php">[BACK]</a>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br />
<br />
<div id="stylized" class="myform">
<fieldset>
<legend style="font-weight:bold; font-size:11px"></legend>
<?php 
session_start();
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//$newpepid='AB-13-0001';
$result = mysqli_query($con,"select pepid,age,DATE_FORMAT(enroldate, '%d-%b-%Y') enroldate, surname,othernames,sex, DATE_FORMAT(DOB, '%d-%b-%Y') dob from patient order by pepid asc");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th></th>
<th>PepID</th>
<th>Surname</th>
<th>First Name</th>
<th>D.O.B</th>
<th>Sex</th>
<th>Enrolment Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
	  if( strlen($row['pepid'])==10&&($row['age']>14&&$row['age']<120)&&(!empty($row['surname'])||!empty($row['othernames']))&&!empty($row['enroldate'])&&empty($row['sex'])){
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a href="enroldateerr.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:red; padding: 3px;" >Sex Error</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['enroldate'] . "</td>";
  echo '<td style="color:red; padding: 3px;"><a href="patientdel.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:blue; padding: 3px;" >Drop Patient</a></td>';
  echo "</tr>";
	  }
	  elseif( strlen($row['pepid'])==11&&(!empty($row['surname'])||!empty($row['othernames']))&&!empty($row['enroldate'])&&empty($row['sex'])){
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a href="genderr.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:red; padding: 3px;" >Sex Error</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['enroldate'] . "</td>";
  echo '<td style="color:red; padding: 3px;"><a href="patientdel.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:blue; padding: 3px;" >Drop Patient</a></td>';
  echo "</tr>";
	  }
	  elseif( strlen($row['pepid'])==10&&($row['age']>14&&$row['age']<120)&&(!empty($row['surname'])||!empty($row['othernames']))&&empty($row['enroldate'])){
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a href="enroldateerr.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:red; padding: 3px;" >Enroldate Error</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['enroldate'] . "</td>";
  echo '<td style="color:red; padding: 3px;"><a href="patientdel.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:blue; padding: 3px;" >Drop Patient</a></td>';
  echo "</tr>";
	  }
	  elseif( strlen($row['pepid'])==11&&(!empty($row['surname'])||!empty($row['othernames']))&&empty($row['enroldate'])){
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a href="enroldateerr.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:red; padding: 3px;" >Enroldate Error</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['enroldate'] . "</td>";
  echo '<td style="color:red; padding: 3px;"><a href="patientdel.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:blue; padding: 3px;" >Drop Patient</a></td>';
  echo "</tr>";
	  }
	  elseif( strlen($row['pepid'])==10&&($row['age']>14&&$row['age']<120)&&(empty($row['surname'])||empty($row['othernames']))){
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a href="nameerror.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:blue; padding: 3px;" >Name Error</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['enroldate'] . "</td>";
  echo '<td style="color:red; padding: 3px;"><a href="patientdel.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:blue; padding: 3px;" >Drop Patient</a></td>';
  echo "</tr>";
	  }
	  elseif ( strlen($row['pepid'])==11&&(empty($row['surname'])||empty($row['othernames']))){
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a href="nameerror.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:blue; padding: 3px;" >Name Error</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['enroldate'] . "</td>";
  echo '<td style="color:red; padding: 3px;"><a href="patientdel.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:blue; padding: 3px;" >Drop Patient</a></td>';
  echo "</tr>";
		  }
	  elseif ( strlen($row['pepid'])==10&&empty($row['dob'])){
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a href="verifydob.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"; >Verify DOB</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['enroldate'] . "</td>";
  echo '<td style="color:red; padding: 3px;"><a href="patientdel.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:red; padding: 3px;" >Drop Patient</a></td>';
  echo "</tr>";
		  }
	  elseif ( strlen($row['pepid'])==11&&empty($row['dob'])){
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a href="verifydob.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"; >Verify DOB</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['enroldate'] . "</td>";
  echo '<td style="color:red; padding: 3px;"><a href="patientdel.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:red; padding: 3px;" >Drop Patient</a></td>';
  echo "</tr>";
		  }
	  elseif ( strlen($row['pepid'])==11){
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a href="getpatientforlistped.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '" style="color:GREEN; padding: 3px;">CHANGE ID</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['enroldate'] . "</td>";
  echo '<td style="color:red; padding: 3px;"><a href="patientdel.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:red; padding: 3px;" >Drop Patient</a></td>';
  echo "</tr>";
		  }
	  elseif ( strlen($row['pepid'])==10){
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a href="getpatientforlist.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '" style="color:GREEN; padding: 3px;">CHANGE ID</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['enroldate'] . "</td>";
  echo '<td style="color:red; padding: 3px;"><a href="patientdel.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:red; padding: 3px;" >Drop Patient</a></td>';
  echo "</tr>";
		  }
	  else{
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a href="getpatientforlist.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '" style="color:GREEN; padding: 3px;">CHANGE ID</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['enroldate'] . "</td>";
  echo '<td style="color:red; padding: 3px;"><a href="patientdel.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '"  style="color:red; padding: 3px;" >Drop Patient</a></td>';
  echo "</tr>";
		  }
  }
echo "</table>";
echo "<br>";

echo "Records shown: ".$num;

mysqli_close($con);

session_write_close();


?>
</fieldset>


</form>
</div>

</body>
</html>