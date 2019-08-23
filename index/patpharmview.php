<?php

include './mandate_/lidh.php';

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//$_SESSION=$_POST;
class MyClass{
    public function GetUserInformation(){
$query = "SELECT patient.surname,patient.othernames,pharmacy.pharmacyid,pharmacy.pepid, DATE_FORMAT(pharmacy.visitdate, '%d-%b-%Y') visitdate,
 pharmacy.patienttype,pharmacy.visittype,pharmacy.tbdrug,pharmacy.oidrug,pharmacy.otherdrugs, pharmacy.pregyn,pharmacy.refillyn,pharmacy.subswitch,pharmacy.drugname,pharmacy.strength,pharmacy.frequency,
 pharmacy.duration,pharmacy.regimen,pharmacy.quantitydisp,DATE_FORMAT(pharmacy.dispensedate, '%d-%b-%Y') dispensedate, drugname1 as regimend 
FROM pharmacy JOIN patient
ON patient.pepid=pharmacy.pepid
and pharmacy.pepid='$_SESSION[pepid]'
order by pharmacy.pharmacyid";

include 'lidh.php';

        $result = mysqli_query($con, $query);
        $info = mysqli_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysqli_error($con);
?>
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
<title>CiS Pro - Pharm</title>
</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">PHARMACY HISTORY &nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>
<body onload="if(document.referrer=='') self.location='./index.php';">

<fieldset>
<legend style="font-weight:bold; font-size:11px">ACTIONS</legend>
<a href="./welcome.php" style="font-weight:bold; font-size:14px; color:#2A1FFF">[MAIN MENU]</a> &nbsp; &nbsp; &nbsp; &nbsp;
<?php if(strlen($_SESSION['pepid'])==10){ 
echo '<a href="patsummary.php?pepid=' . $_SESSION['pepid'] . '">[BACK]</a>';
} 
else{
echo '<a href="patpedsummary.php?pepid=' . $_SESSION['pepid']  . '">[BACK]</a>';
	}
?>


</fieldset>
<?php 
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT patient.surname,patient.othernames,pharmacy.pharmacyid,pharmacy.pepid,pharmacy.visitdate,
 pharmacy.patienttype,pharmacy.visittype,pharmacy.tbdrug,pharmacy.oidrug,pharmacy.otherdrugs, pharmacy.pregyn,pharmacy.refillyn,pharmacy.subswitch,pharmacy.drugname,pharmacy.strength,pharmacy.frequency,
 pharmacy.duration,pharmacy.regimen,pharmacy.quantitydisp,DATE_FORMAT(pharmacy.pharmdispensedate, '%d-%b-%Y') dispensedate, CONCAT(`drugname1`,'/',`drugname2`,'/',`drugname3`) as regimend 
FROM pharmacy JOIN patient
ON patient.pepid=pharmacy.pepid
and pharmacy.pepid='$_SESSION[pepid]'
order by pharmacy.pharmacyid");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th></th>
<th>Patient ID</th>
<th>Visit Date</th>
<th>Visit Type</th>
<th>Patient Type</th>
<th>ARV Regimen</th>
<th>TB Drug</th>
<th>OI Prophylaxis</th>
<th>Dispense Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
	  if (strlen($row['pepid'])==10&&(empty($row['dispensedate']))){
  echo "<tr>";
  echo '<td><a href="patpharmbrowse.php?visitdate=' . $row['visitdate'] . '&amp;pepid=' . $row['pepid'] . '">Browse</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['visittype'] . "</td>";
  echo "<td>" . $row['patienttype'] . "</td>";
  echo "<td>" . $row['regimend'] . "</td>";
  echo "<td>" . $row['tbdrug'] . "</td>";
  echo "<td>" . $row['oidrug'] . "</td>";
  echo "<td>" . $row['dispensedate'] . "</td>";
  echo "</tr>";
	  }
	  else{
  echo "<tr>";
  echo '<td><a href="patpharmbrowse.php?visitdate=' . $row['visitdate'] . '&amp;pepid=' . $row['pepid'] . '">Browse</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['visittype'] . "</td>";
  echo "<td>" . $row['patienttype'] . "</td>";
  echo "<td>" . $row['regimend'] . "</td>";
  echo "<td>" . $row['tbdrug'] . "</td>";
  echo "<td>" . $row['oidrug'] . "</td>";
  echo "<td>" . $row['dispensedate'] . "</td>";
  echo "</tr>";
		  }
  }
echo "</table>";
echo "<br>";

echo "Total Pharmacy Record: ".$num;

mysqli_close($con);

session_write_close();


?>

</body>
</html>