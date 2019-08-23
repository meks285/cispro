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
   width: 190px;
   height: 150px;
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
#stylized input{
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
<title>APIN DB - Browse Patient Form</title>
</head>
<?php 
session_start();
$_SESSION=$_POST;
$con=mysql_connect("localhost","root","","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

	class MyClass{
    public function GetUserInformation(){

$query = "SELECT pepid, uniqueid,hospitalid,surname,othernames,sex,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate
FROM patient WHERE pepid = '$_POST[pepid]'";
        $result = mysql_query($query);
        $info = mysql_fetch_assoc($result);
        return $info;
	} 
	

	}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();
session_write_close();
?>
<h1 align="center" style="background-color:#0FF">PATIENT SUMMARY</h1>
<body >
<a href="./index.php" >Logout</a> <br>
<a href="./welcome.php" >WELCOME PAGE</a> 
<div class='sidebar'>
<a href="./initevalbrowse.php">Patient Initial Evaluation</a> <br>
<a href="./patvisitview.php">View visit records</a> <br>
<a href="./patlabview.php">Lab Form</a> <br>
<a href="./patpharmview.php">Pharmacy Form</a> <br>
<a href="./carecard2view.php">Clinical Evaluation</a> <br>

<p></p><br>
<a href="javascript:history.go(-1)">Back</a>

</div>
<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="updatedata.php">
<h1>BioData</h1>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Patient Identification Numbers</legend>
<label>PEPID
<span class="small">PEPFAR ID</span>
</label>
<input type="text" name="pepid" id="pepid" value="<?php echo $info['pepid']?>" />

<label>Unique Number
<span class="small">Unique ID</span>
</label>
<input type="text" name="uniqueid" id="uniqueid" value="<?php echo $info['uniqueid']?>" disabled="disabled"/>
</fieldset>
<fieldset>
<label>Surname
<span class="small">Patient Surname</span>
</label>
<input type="text" name="surname" id="surname" value="<?php echo $info['surname']?>" disabled="disabled"/>

<label>Other names
<span class="small">Patient Other Name</span>
</label>
<input type="text" name="othernames" id="othernames" value="<?php echo $info['othernames']?>" disabled="disabled"/>

<label>DOB
<span class="small">YYYY-MM-DD</span>
</label>
<input type="date" name="dob" id="dob" value="<?php echo $info['dob']?>" disabled="disabled"/> 

<label>Phone Number
<span class="small">Phone Number</span>
</label>
<input type="text" name="phoneno" id="phoneno" value="<?php echo $info['phoneno']?>" />

<label>Sex
<span class="small">Male/Female</span>
</label>
<input type="text" name="sex" id="sex" value="<?php echo $info['sex']?>" disabled="disabled"/>

<label>Hospital Number
<span class="small">Hospital(UNIT) Number</span>
</label>
<input type="text" name="hospitalno" id="hospitalno" value="<?php echo $info['hospitalid']?>" />

<label>Facility Name
<span class="small">Name of facility</span>
</label>
<input type="text" name="facilityname" id="facilityname" value="<?php echo $info['facilityname']?>" />
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Visit: Last 3 Visits</legend>
<?php 
$con=mysqli_connect("localhost","root","","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT *
FROM (select visitid, pepid, visitdate, visittype FROM visit
 WHERE pepid='$_POST[pepid]' 
 order by visitid DESC LIMIT 3) as vis
 order by visitid ASC");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th>PepID</th>
<th>Visit Date</th>
<th>Type of visit</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['visittype'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br>";

echo "Total Visit Records: ".$num;

mysqli_close($con);

session_write_close();


?>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Pharmacy: Last 3 Records</legend>
<?php 
$con=mysqli_connect("localhost","root","","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT *
FROM(SELECT pharmacy.pharmacyid,pharmacy.pepid, pharmacy.visitdate, pharmacy.patienttype,pharmacy.visittype, pharmacy.pregyn,pharmacy.refillyn,pharmacy.subswitch,pharmacy.drugname,pharmacy.strength,pharmacy.frequency,pharmacy.duration,pharmacy.regimen,pharmacy.quantitydisp,pharmacy.dispensedate, drugs.drugname as regimend, drugs.dose,drugs.no 
FROM pharmacy INNER JOIN drugs 
WHERE pepid='$_POST[pepid]' and pharmacy.drugcode=drugs.drugcode 
order by pharmacy.pharmacyid DESC LIMIT 3) as pharm
ORDER BY pharmacyid asc");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th>PepID</th>
<th>Visit Date</th>
<th>Visit Type</th>
<th>Patient Type</th>
<th>Regimen</th>
<th>Dose</th>
<th>Dispense Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['visittype'] . "</td>";
  echo "<td>" . $row['patienttype'] . "</td>";
  echo "<td>" . $row['regimend'] . "</td>";
  echo "<td>" . $row['dose'] . "</td>";
  echo "<td>" . $row['dispensedate'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br>";

echo "Total Pharmacy Records: ".$num;

mysqli_close($con);

session_write_close();


?>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Laboratory: Last 3 Tests</legend>
<?php 
$con=mysqli_connect("localhost","root","","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT *
FROM (SELECT labid,pepid, visitdate, labregno,artstatus, baselineorrepeat,tests,results,reportedby,checkedby 
FROM laboratory WHERE pepid='$_POST[pepid]'
order by labid DESC LIMIT 3) as lab
order by labid ASC");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th>PEPID</th>
<th>visitdate</th>
<th>registration number</th>
<th>art status</th>
<th>Base/Repeat</th>
<th>Lab Test</th>
<th>Test Result</th>
<th>Report By</th>
<th>Checked By</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['labregno'] . "</td>";
  echo "<td>" . $row['artstatus'] . "</td>";
  echo "<td>" . $row['baselineorrepeat'] . "</td>";
  echo "<td>" . $row['tests'] . "</td>";
  echo "<td>" . $row['results'] . "</td>";
  echo "<td>" . $row['reportedby'] . "</td>";
  echo "<td>" . $row['checkedby'] . "</td>";

  echo "</tr>";
  }
echo "</table>";
echo "<br>";

echo "Total Laboratory Records: ".$num;

mysqli_close($con);

session_write_close();


?>
</fieldset>

</form>
</div>

</body>
</html>