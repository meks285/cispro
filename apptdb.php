<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Appointment</title>
<link rel="stylesheet" href="css/normalize.css">    
<link rel="stylesheet" href="css/style.css">

<h1 align="center" style="color:#7F3FAA">APPOINTMENT</h1>
</head>

<body>


    <ul>
      <li><a href="./index.php" style="font-weight:bold">Logout</a></li>
    <li style="background-color:#FFCE45"><a style="text-color:#00A000" href="./apptsearch.php" style="font-weight:bold">Search - PEPID</a></li>
    <li style="background-color:#FFCE45"><a style="text-color:#00A000" href="./apptsearchdate.php" style="font-weight:bold">Search - NEXT APPOINTMENT DATE</a></li>
    <li style="background-color:#FFCE45"><a style="text-color:#00A000" href="./apptsearchdaterr.php" style="font-weight:bold">Search - NEXT APPOINTMENT DATE ERRRORS</a></li>
    </ul>
 


    <?php
	$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"select a.pepid,a.surname,a.address,a.othernames,a.phoneno,DATE_FORMAT(b.dispensedate, '%d-%b-%Y') as visitdate,DATE_FORMAT(b.nextapptdate, '%d-%b-%Y') nextapptdate,'Drug Pickup' as purpose 
from patient a JOIN pharmacy b 
where a.pepid=b.pepid 
and YEARWEEK(b.nextapptdate)=YEARWEEK(CURDATE())");

$num=$result->num_rows;

echo "<table class='imagetable' align='center'>
<tr>
<th>Pep ID</th>
<th>SURNAME</th>
<th>OTHER NAMES</th>
<th>PHONE NUMBER</th>
<th>ADDRESS</th>
<th>LAST VISIT DATE</th>
<th>NEXT APPOINTMENT DATE</th>
<th>PURPOSE</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['phoneno'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['nextapptdate'] . "</td>";
  echo "<td>" . $row['purpose'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br>";

mysqli_close($con);

session_write_close();
?>

<br />
    <?php
	$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"select a.pepid,a.surname,a.address,a.othernames,a.phoneno,DATE_FORMAT(b.visitdate, '%d-%b-%Y') as visitdate,DATE_FORMAT(b.nextapptdate, '%d-%b-%Y') nextapptdate,'Clinical Visit' as purpose 
from patient a JOIN clinicaleval b 
where a.pepid=b.pepid 
and YEARWEEK(b.nextapptdate)=YEARWEEK(CURDATE())");

$num=$result->num_rows;

echo "<table class='imagetable' align='center'>
<tr>
<th>Pep ID</th>
<th>SURNAME</th>
<th>OTHER NAMES</th>
<th>PHONE NUMBER</th>
<th>ADDRESS</th>
<th>LAST VISIT DATE</th>
<th>NEXT APPOINTMENT DATE</th>
<th>PURPOSE</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['phoneno'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['nextapptdate'] . "</td>";
  echo "<td>" . $row['purpose'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br>";

mysqli_close($con);

session_write_close();
?><br />
    <?php
	$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"select a.pepid,a.surname,a.address,a.othernames,a.phoneno,DATE_FORMAT(MAX(b.visitdate), '%d-%b-%Y') as visitdate,DATE_FORMAT(DATE_ADD(MAX(visitdate), INTERVAL 1 YEAR) , '%d-%b-%Y') nextapptdate,'Viral Load Test' as purpose 
from patient a JOIN laboratory b 
where a.pepid=b.pepid 
AND extract(year_month FROM curdate())=extract(year_month FROM DATE_ADD(visitdate, INTERVAL 1 YEAR))
and YEARWEEK((DATE_ADD(visitdate, INTERVAL 1 YEAR)))>=YEARWEEK(CURDATE())
and lower(b.tests)='Viral Load'
group by pepid
order by visitdate desc");

$num=$result->num_rows;

echo "<table class='imagetable' align='center'>
<tr>
<th>Pep ID</th>
<th>SURNAME</th>
<th>OTHER NAMES</th>
<th>PHONE NUMBER</th>
<th>ADDRESS</th>
<th>LAST VIRAL LOAD DATE</th>
<th>NEXT VIRAL LOAD DATE</th>
<th>PURPOSE</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['phoneno'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['nextapptdate'] . "</td>";
  echo "<td>" . $row['purpose'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br>";

mysqli_close($con);

session_write_close();
?>
    </div>
  <!-- end .container --></div>
</body>
</html>
