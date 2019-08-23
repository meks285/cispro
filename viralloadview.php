<?php
session_start();

include './mandate_/lidh.php';




class MyClass{
    public function GetUserInformation(){include './mandate_/lidh.php';
$query = "SELECT patient.pepid,patient.surname,patient.othernames, laboratory.visitdate,laboratory.labregno,laboratory.artstatus, laboratory.baselineorrepeat,laboratory.tests,laboratory.results,laboratory.reportedby,laboratory.checkedby
FROM laboratory INNER JOIN patient 
WHERE laboratory.pepid = '$_SESSION[pepid]' and laboratory.pepid=patient.pepid";
        $result = mysqli_query($con,$query);
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
<title>CiS Pro - Lab</title>
</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">VIRAL LOAD HISTORY &nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>
<body >
<fieldset>
<legend style="font-weight:bold; font-size:11px">ACTIONS</legend>
<a href="./welcome.php?username=<?php echo $_GET['username']; ?>" style="font-weight:bold; font-size:14px; color:#2A1FFF">[MAIN MENU]</a> &nbsp; &nbsp; &nbsp;
<?php if(strlen($_SESSION['pepid'])==10){ 
echo '<a style="color:blue" href="patsummary.php?pepid=' . $_SESSION['pepid'] .'&login_id=' . $_GET['username'] .'">[BACK]</a>';
} 
else{
echo '<a style="color:blue" href="patpedsummary.php?pepid=' . $_SESSION['pepid'] .'&login_id=' . $_GET['username'] .'">[BACK]</a>';
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

$result = mysqli_query($con,"SELECT `labid`, `labregno`, `visitdate`, `artstatus`, `otherstatus`, `baselineorrepeat`, `resultstatus`, `tests`, `results`, `resultintepretation`, `reportedby`, `reportdate`, `checkedby`, `checkdate`, `orderedby`, `orderdate`, `assayedby`, `assaydate`, `approvedby`, `approvedate`, `collectedby`, `collectdate`, `pepid`, `clinicianname`, `additionaltests`, `cliniciandate`, `pcrlabname`, `pcrsampleno`, `pcrsampletype`, `pcrsamplecolldate`, `pcrsamplerecievedate`, `vl_indication`, `artstartdate`, `drugregimen` 
FROM `laboratory` 
WHERE tests='Viral Load' and pepid =  '$_SESSION[pepid]'
GROUP BY visitdate");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th></th>
<th>visitdate</th>
<th>ART Status</th>
<th>Sample Type</th>
<th>Indication</th>
<th>Viral Load</th>
<th>Interpretation</th>
<th>Ordered By</th>
<th>Order Date</th>
</tr>";
//echo '<td><a href="labresultbrowse.php?id=' . $row['visitdate'] . '">. $row['visitdate'] .</a></td>';
//<a href="http://www.w3schools.com">Visit W3Schools.com!</a>
//echo '<td><a href="labresultbrowse.php?id=' . $row['visitdate'] . '">View Details</a></td>';
//?coice=search&amp;cat=...&amp;subcat=...&amp;srch=...
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo '<td><a style="color:blue" href="viralloadbrowseadt.php?visitdate=' . $row['visitdate'] . '&amp;pepid=' . $row['pepid'] . '&amp;username=' . $_GET['username'] . '">Browse</a></td>';
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['artstatus'] . "</td>";
  echo "<td>" . $row['pcrsampletype'] . "</td>";
  echo "<td>" . $row['vl_indication'] . "</td>";
  echo "<td>" . $row['results'] . "</td>";
  echo "<td>" . $row['resultintepretation'] . "</td>";
  echo "<td>" . $row['orderedby'] . "</td>";
  echo "<td>" . $row['orderdate'] . "</td>";
  echo "</tr>";
  }

echo "</table>";
echo "<br>";

echo "Total Viral Load Record for Patient: ".$num;

mysqli_close($con);

session_write_close();


?>

<br />
<br />
<br />
<br />
<br />
</body>
</html>