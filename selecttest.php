<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">

table, th, td
{
border: 1px solid green;
}
th
{
background-color:green;
color:white;
height:50px;
font-family:"Comic Sans MS", cursive;
}
td
{
padding:10px;
text-align:center;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
}
table
{
width:100%;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>APIN DB - PATIENT(LIST)</title>
</head>

<body onload="if(document.referrer=='') self.location='./index.php';">
<?php 
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT pepid, surname,othernames,dob,age,hospitalid,sex,phoneno,facilityname,
maritalstatus,educationallevel,jobstatus,address,wardvillage,addrlga,town FROM patient order by enroldate");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th>PEPID</th>
<th>SURNAME</th>
<th>OTHERNAMES</th>
<th>DOB</th>
<th>AGE</th>
<th>HOSPITALID</th>
<th>SEX</th>
<th>PHONENO</th>
<th>FACILITY</th>
<th>MARITAL STATUS</th>
<th>EDUCATION</th>
<th>JOB</th>
<th>ADDRESS</th>
<th>WARD/VILLAGE</th>
<th>LGA</th>
<th>TOWN</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['hospitalid'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['phoneno'] . "</td>";
  echo "<td>" . $row['facilityname'] . "</td>";
  echo "<td>" . $row['maritalstatus'] . "</td>";
  echo "<td>" . $row['educationallevel'] . "</td>";
  echo "<td>" . $row['jobstatus'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['wardvillage'] . "</td>";
  echo "<td>" . $row['addrlga'] . "</td>";
  echo "<td>" . $row['town'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br>";

echo "Total Patient Record: ".$num;

mysqli_close($con);



?>
</body>
</html>