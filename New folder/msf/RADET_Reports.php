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
width:1295px;
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
<title>CiS Pro - RADET</title>
</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">RADET | RESULTS | <?php echo $_GET['radet_year']; ?></h1>
<body >
<a href="javascript:history.go(-1)">[BACK]</a>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br />
<br />
<div id="stylized" class="myform">
<form id="form1" action="export_radet.php" method="post">
<input type="hidden" name="radyear" id="radyear" value="<?php echo $_GET['radet_year']; ?>" style="width:120px; height:10px; float:left"/>
<button type="submit" name="EXPORT">EXPORT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php 
if(isset($_GET['status'])){
	$statuss=$_GET['status'];
	echo 'Exported Successfully | Check (C:\\RADET) Folder';
	}
	elseif(isset($_GET['fstatus'])){
		echo 'Error: RADET Not exported | Make sure no file name conflict exists ';
	}
	else{
		$statuss;
		$fstatus;
		} 
//	if(isset($_GET['status'])){echo 'Exported Successfully';} else{echo 'Error: RADET Not exported';}
?>
</form>
<br />
<fieldset>
<legend style="font-weight:bold; font-size:11px"></legend>
<?php 
session_start();
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
$rad_year=$_GET['radet_year'];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"select a.pepid,a.hospitalid,a.sex,a.age,period_diff(date_format(now(), '%Y%m'), date_format(a.dob, '%Y%m')) as AgeMonths,MIN(b.visitdate) as 'ARTStartDate', MAX(b.visitdate) as 'LastVisitDate',period_diff(date_format(MAX(b.visitdate), '%Y%m'), date_format(MIN(b.visitdate), '%Y%m')) as 'MonthsofARVRefill',REPLACE (b.drugname1,'/','-') as 'RegimenatARTStart',CASE WHEN b.drugname1 like '%/r%' then 2 ELSE 1 END as 'RegimenLineatARTStart',REPLACE (c.drugname1,'/','-') as 'CurrentRegimen',CASE WHEN c.drugname1 like '%/r%' then 2 ELSE 1 END as 'CurrentRegimenLine',c.pregyn,l.v_load as v_load,l.lab_date as lab_date,CASE 
WHEN lower(patientdied)='art' OR lower(patientdied)='pre-art'  THEN 'DEAD'
WHEN lower(patienttransout)='art' OR lower(patienttransout)='pre-art'  THEN 'Transferred Out' ELSE '' END as 'CurrentARTStatus'
from patient a JOIN pharmacy b
ON (a.pepid=b.pepid)
JOIN (SELECT t1.pepid, t1.visitdate,t1.drugname1,t1.pregyn
FROM pharmacy t1
WHERE t1.visitdate = (SELECT t2.visitdate
                 FROM pharmacy t2
                 WHERE t2.pepid = t1.pepid            
                 ORDER BY t2.visitdate DESC
                 LIMIT 1)
and t1.drugname1!='') c
ON (b.pepid=c.pepid)
LEFT JOIN (select pepid,MAX(visitdate) as lab_date, results as v_load from laboratory where tests='Viral Load' group by pepid) l
ON(a.pepid=l.pepid)
WHERE b.drugname1!='' 
group by a.pepid
having EXTRACT(YEAR from MIN(b.visitdate))='$rad_year'");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th>Patient ID</th>
<th>Hospital ID</th>
<th>Sex</th>
<th>Age</th>
<th>AgeMonths</th>
<th>ART Start Date</th>
<th>Last Visit Date</th>
<th>Months of ARV Refill</th>
<th>Regimen at ART Start</th>
<th>Regimen Line at ART Start</th>
<th>Current Regimen</th>
<th>Current Regimen Line</th>
<th>Pregnancy Status</th>
<th>Current Viral Load</th>
<th>Date of Current Viral Load</th>
<th>Current ART Status</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
	  if( $row['age']>14){
  echo "<tr>";
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['hospitalid'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['AgeMonths'] . "</td>";
  echo "<td>" . $row['ARTStartDate'] . "</td>";
  echo "<td>" . $row['LastVisitDate'] . "</td>";
  echo "<td>" . $row['MonthsofARVRefill'] . "</td>";
  echo "<td>" . $row['RegimenatARTStart'] . "</td>";
  echo "<td>" . $row['RegimenLineatARTStart'] . "</td>";
  echo "<td>" . $row['CurrentRegimen'] . "</td>";
  echo "<td>" . $row['CurrentRegimenLine'] . "</td>";
  echo "<td>" . $row['pregyn'] . "</td>";
  echo "<td>" . $row['v_load'] . "</td>";
  echo "<td>" . $row['lab_date'] . "</td>";
  echo "<td>" . $row['CurrentARTStatus'] . "</td>";
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