<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<style type="text/css">
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
}
p,h1, form, button{border:0; margin:0; padding:0;}
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
font-style: normal;
font-weight: normal;
color: #000;
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
width:100px;
float:left;
font-size:10px;
color:#666666;
}
.sidebar {
   width: 170px;
   height: 0px;
   position: fixed;
   left: 0px;
   top: 110px;
   font-family: Tahoma, Geneva, sans-serif;
   font-style: normal;
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
.tops{
   top: 8px;
   position: fixed;
   width:1335px;
	}

#stylized option{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:10px;
font-weight:normal;
text-align:left;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
margin:2px 0 20px 10px;
text-align:left;
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
#stylized .radio-toolbar input[type="radio"] {
font-weight:normal;
text-align:right;
float:left;
padding-right:0px;
width:20px;
}
#stylized .radio-toolbar label {
display:block;
font-weight:normal;
text-align:right;
float:left;
padding-right:0px;
position:absolute;
margin:1px 0 0px 10px;
}
#stylized .radio-toolbar input{
float:left;
padding-right:50px;
margin:1px 0 0px 10px;
position:inherit;
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
<title>CiS Pro - Summary</title>
</head>
<?php 
session_start();
$_SESSION=$_GET;
$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

	class MyClass{
    public function GetUserInformation(){
$username = $_GET['pepid'];
$username;
$query = "SELECT pepid, uniqueid,hospitalid,surname,othernames,sex,lga,facilityname,ancno, dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate,age,hivposdate
FROM patient WHERE pepid = '$username'";
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
<body onload="if(document.referrer=='') self.location='./index.php';">
<div class='sidebar'>
<legend style="font-weight:bold; font-size:11px; color:#00F">DATA-ENTRY</legend>
<fieldset style="background-image:url(images/wood_pattern.jpg)">
<a href="./newpatientiniteval.php" style="font-weight:bold; font-size:14px; color:#555F00;font-family: 'Titillium Web', sans-serif;">Initial Evaluation</a> <br>
</fieldset>
<fieldset style="background-image:url(images/wood_pattern.jpg)">
<a href="./laborderresultadt.php" style="font-weight:bold; font-size:14px; color:#555F00;font-family: 'Titillium Web', sans-serif;"">Lab</a> <br>
</fieldset>
<fieldset style="background-image:url(images/wood_pattern.jpg)">
<a href="./pharmacyordmain.php" style="font-weight:bold; font-size:14px;  color:#555F00;font-family: 'Titillium Web', sans-serif;"">Pharmacy</a> <br>
</fieldset>
<fieldset style="background-image:url(images/wood_pattern.jpg)">
<a href="./carecardadt.php" style="font-weight:bold; font-size:14px;  color:#555F00;font-family: 'Titillium Web', sans-serif;"">Care Card</a> <br>
</fieldset>
<fieldset style="background-image:url(images/wood_pattern.jpg)">
<a href="./carecard2.php" style="font-weight:bold; font-size:14px;  color:#555F00;font-family: 'Titillium Web', sans-serif;"">Care Card (Encounter)</a> <br>
</fieldset>
<fieldset style="background-image:url(images/wood_pattern.jpg)">
<a href="./subswitch.php" style="font-weight:bold; font-size:14px;  color:#555F00;font-family: 'Titillium Web', sans-serif;"">Care Card (Substitution)</a> <br>
</fieldset>
<fieldset style="background-image:url(images/wood_pattern.jpg)">
<a href="./discontinuation.php" style="font-weight:bold; font-size:14px;  color:#555F00;font-family: 'Titillium Web', sans-serif;"">Care Card (Discontinuation)</a> <br>
</fieldset>
<br>
<legend style="font-weight:bold; font-size:11px; color:#00F">MAINTENANCE</legend>
<fieldset style="background-image:url(images/bgnoise_lg.jpg)">
<a href="./patvisitview.php" style="font-weight:bold; font-size:14px; color:#2A00FF"">Visit History</a> <br>
</fieldset>
<fieldset style="background-image:url(images/bgnoise_lg.jpg)">
<a href="./patlabviewadt.php" style="font-weight:bold; font-size:14px; color:#2A00FF"">Lab History</a> <br>
</fieldset>
<fieldset style="background-image:url(images/bgnoise_lg.jpg)">
<a href="./patpharmview.php" style="font-weight:bold; font-size:14px; color:#2A00FF"">Pharmacy History</a> <br>
</fieldset>
<fieldset style="background-image:url(images/bgnoise_lg.jpg)">
<a href="./carecard2view.php" style="font-weight:bold; font-size:14px; color:#2A00FF"">Care Card (Encounter)</a> <br>
</fieldset>
<fieldset style="background-image:url(images/bgnoise_lg.jpg)">
<a href="./subswitch.php" style="font-weight:bold; font-size:14px; color:#2A00FF"">Care Card (Substitution)</a> <br>
</fieldset>
<fieldset style="background-image:url(images/bgnoise_lg.jpg)">
<a href="./discontinuation.php" style="font-weight:bold; font-size:14px; color:#2A00FF"">Care Card (Discontinuation)</a> <br>
</fieldset>


<p></p><br>
<a href="javascript:history.go(-1)">Back</a>

</div>
<div class='tops'>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">PATIENT SUMMARY &nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>
<a href="./main.php" style="font-weight:bold; font-size:14px; color:#2A00FF">MAIN MENU</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="./welcome.php" style="font-weight:bold; font-size:14px; color:#2A00">SEARCH MENU</a> 
</div>
<br />
<br />
<br />
<br />
<div id="stylized" class="myform">

<form id="form" name="form" method="GET" action="updatedata.php">
<h2></h2>
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Patient ID
</label>
<input type="text" name="pepid" id="pepid" value="<?php echo $info['pepid']?>" readonly="readonly" style="width:120px;height:10px;"/>
      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>
Unique ID
</label>
<input type="text" name="uniqueid" id="uniqueid" value="<?php echo $info['uniqueid']?>" readonly style="width:120px;height:10px;"/>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Hospital(UNIT) Number
</label>
<input type="text" name="hospitalno" id="hospitalno" value="<?php echo $info['hospitalid']?>" readonly style="width:120px;height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>

</fieldset>
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>Surname
</label>
<input type="text" name="surname" id="surname" value="<?php echo $info['surname']?>" readonly style="width:120px;height:10px;"/>
      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>Other names
</label>
<input type="text" name="othernames" id="othernames" value="<?php echo $info['othernames']?>" readonly style="width:120px;height:10px;"/>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>HIV+ Date
</label>
<input type="date" name="dob" id="dob" value="<?php echo $info['hivposdate']?>" readonly style="width:120px;height:10px;"/> 


        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<fieldset>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
DoB
</label>
<input type="date" name="dob" id="dob" value="<?php echo $info['dob']?>" readonly style="width:120px;height:10px;"/> 
    </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Phone Number
</label>
<input type="text" name="phoneno" id="phoneno" value="<?php echo $info['phoneno']?>" style="width:120px;height:10px;"/>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Sex
</label>
<input type="text" name="sex" id="sex" value="<?php echo $info['sex']?>" readonly style="width:45px;height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Facility Name</label>
<input type="text" name="facilityname" id="facilityname" value="<?php echo $info['facilityname']?>" style="width:120px;height:10px;"/>
    </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Age</label>
<input type="text" name="age" id="age" size="1" value="<?php echo $info['age']?>" style="height:10px;"/>
          </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div>

</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Visit: Last 3 Visits</legend>
<?php 
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT *
FROM (select visitid, pepid, DATE_FORMAT(visitdate, '%d-%b-%Y') visitdate, visittype FROM visit
 WHERE pepid='$_GET[pepid]' 
 order by visitid DESC LIMIT 3) as vis
 order by visitid ASC");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th>Patient ID</th>
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

echo "Records shown: ".$num;

mysqli_close($con);

session_write_close();


?>
</fieldset>

<fieldset>

<legend style="font-weight:bold; font-size:11px">Pharmacy: Last 3 Visits</legend>
<?php 
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT *
FROM (select pharmacyid, pepid, DATE_FORMAT(visitdate, '%d-%b-%Y') visitdate, CONCAT(`drugname1`,'/',`drugname2`,'/',`drugname3`) as regimen,DATE_FORMAT(dispensedate, '%d-%b-%Y') dispensedate FROM pharmacy
 WHERE pepid='$_GET[pepid]' 
 order by pharmacyid DESC LIMIT 3) as visa
 order by pharmacyid ASC");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th>Patient ID</th>
<th>Visit Date</th>
<th>Regimen</th>
<th>Dispense Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['regimen'] . "</td>";
  echo "<td>" . $row['dispensedate'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br>";

echo "Records shown: ".$num;

mysqli_close($con);

session_write_close();


?>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Laboratory: Last 3 Tests</legend>
<?php 
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT *
FROM (SELECT pepid,visitdate
FROM lab_results_pivot_test
WHERE pepid =  '$_SESSION[pepid]'
GROUP BY visitdate
order by visitdate DESC LIMIT 3) as lab
order by visitdate ASC");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th>Patient ID</th>
<th>visitdate</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br>";

echo "Records shown: ".$num;

mysqli_close($con);

session_write_close();


?>
</fieldset>
<fieldset>
<legend style="font-weight:bold; color:#0C3; font-size:11px">FileMaker Pro Import: Laboratory: Last 3 Tests</legend>
<?php 
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT *
FROM (SELECT pepid,visitdate
FROM lab_results_pivot_test2
WHERE pepid =  '$_SESSION[pepid]'
GROUP BY visitdate
order by visitdate DESC LIMIT 3) as lab
order by visitdate ASC");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th>Patient ID</th>
<th>visitdate</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "</tr>";
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