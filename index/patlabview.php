<?php
session_start();

$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//$_SESSION=$_GET;
class MyClass{
    public function GetUserInformation(){
$query = "SELECT patient.pepid,patient.surname,patient.othernames, laboratory.visitdate,laboratory.labregno,laboratory.artstatus, laboratory.baselineorrepeat,laboratory.tests,laboratory.results,laboratory.reportedby,laboratory.checkedby
FROM laboratory INNER JOIN patient 
WHERE laboratory.pepid = '$_SESSION[pepid]' and laboratory.pepid=patient.pepid";
        $result = mysql_query($query);
        $info = mysql_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();
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
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">LAB HISTORY &nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>
<body >
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

$result = mysqli_query($con,"SELECT pepid,visitdate,MAX( cd4 ) AS cd4,MAX( CD4_per ) AS CD4_per, MAX( viral_load ) AS viral_load, MAX( pregnancy ) AS pregnancy,MAX( Malaria_smear ) AS Malaria_smear,MAX( Lymphocytes ) AS Lymphocytes,
MAX( Monocytes ) AS Monocytes,MAX( Polymorph ) AS Polymorph,MAX( Eosinophils ) AS Eosinophils,MAX( Basophils ) AS Basophils,
MAX( HbPCV ) AS HbPCV,MAX( Platelets ) AS Platelets,MAX( HBsAG ) AS HBsAG,MAX( VDRL ) AS VDRL,MAX( Creatinine ) AS Creatinine,MAX( ALT_SGPT ) AS ALT_SGPT,
MAX( GLUCOSE ) AS GLUCOSE,MAX( PROTEIN ) AS PROTEIN,MAX( VIAPap_Smear ) AS VIAPap_Smear,MAX( Na ) AS Na,MAX( K ) AS K,MAX( Cl ) AS Cl,
MAX( HCO3 ) AS HCO3,MAX( BUN ) AS BUN,MAX( Fasting_Glucose ) AS Fasting_Glucose,MAX( Total_Bilirubin ) AS Total_Bilirubin,
MAX( Amylase ) AS Amylase,MAX( Total_Cholesterol ) AS Total_Cholesterol,MAX( LDL ) AS LDL,MAX( AST_SGOT ) AS AST_SGOT,MAX( Triglyceride ) AS Triglyceride,
MAX( Alk_Phosphatase ) AS Alk_Phosphatase,MAX( WBC ) AS WBC
FROM lab_results_pivot_test
WHERE pepid =  '$_SESSION[pepid]'
GROUP BY visitdate");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th></th>
<th>visitdate</th>
<th>CD4</th>
<th>CD4%</th>
<th>Viral Load</th>
<th>Pregnancy</th>
<th>Malaria Smear</th>
<th>Lymphocytes</th>
<th>Monocytes</th>
<th>Polymorph</th>
<th>Eosinophils</th>
<th>Basophils</th>
<th>HbPCV</th>
<th>Platelets</th>
<th>HBsAG</th>
<th>VDRL</th>
<th>Creatinine</th>
<th>ALT_SGPT</th>
<th>GLUCOSE</th>
<th>PROTEIN</th>
<th>VIAPap_Smear</th>
<th>Na</th>
<th>K</th>
<th>Cl</th>
<th>HCO3</th>
<th>BUN</th>
<th>Total_Bilirubin</th>
<th>Amylase</th>
<th>Total_Cholesterol</th>
<th>LDL</th>
<th>AST_SGOT</th>
<th>Triglyceride</th>
<th>Alk_Phosphatase</th>
<th>WBC</th>
</tr>";
//echo '<td><a href="labresultbrowse.php?id=' . $row['visitdate'] . '">. $row['visitdate'] .</a></td>';
//<a href="http://www.w3schools.com">Visit W3Schools.com!</a>
//echo '<td><a href="labresultbrowse.php?id=' . $row['visitdate'] . '">View Details</a></td>';
//?coice=search&amp;cat=...&amp;subcat=...&amp;srch=...
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo '<td><a href="labresultbrowseadt.php?visitdate=' . $row['visitdate'] . '&amp;pepid=' . $row['pepid'] . '">Browse</a></td>';
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['cd4'] . "</td>";
  echo "<td>" . $row['CD4_per'] . "</td>";
  echo "<td>" . $row['viral_load'] . "</td>";
  echo "<td>" . $row['pregnancy'] . "</td>";
  echo "<td>" . $row['Malaria_smear'] . "</td>";
  echo "<td>" . $row['Lymphocytes'] . "</td>";
  echo "<td>" . $row['Monocytes'] . "</td>";
  echo "<td>" . $row['Polymorph'] . "</td>";
  echo "<td>" . $row['Eosinophils'] . "</td>";
  echo "<td>" . $row['Basophils'] . "</td>";
  echo "<td>" . $row['HbPCV'] . "</td>";
  echo "<td>" . $row['Platelets'] . "</td>";
  echo "<td>" . $row['HBsAG'] . "</td>";
  echo "<td>" . $row['VDRL'] . "</td>";
  echo "<td>" . $row['Creatinine'] . "</td>";
  echo "<td>" . $row['ALT_SGPT'] . "</td>";
  echo "<td>" . $row['GLUCOSE'] . "</td>";
  echo "<td>" . $row['PROTEIN'] . "</td>";
  echo "<td>" . $row['VIAPap_Smear'] . "</td>";
  echo "<td>" . $row['Na'] . "</td>";
  echo "<td>" . $row['K'] . "</td>";
  echo "<td>" . $row['Cl'] . "</td>";
  echo "<td>" . $row['HCO3'] . "</td>";
  echo "<td>" . $row['BUN'] . "</td>";
  echo "<td>" . $row['Total_Bilirubin'] . "</td>";
  echo "<td>" . $row['Amylase'] . "</td>";
  echo "<td>" . $row['Total_Cholesterol'] . "</td>";
  echo "<td>" . $row['LDL'] . "</td>";
  echo "<td>" . $row['AST_SGOT'] . "</td>";
  echo "<td>" . $row['Triglyceride'] . "</td>";
  echo "<td>" . $row['Alk_Phosphatase'] . "</td>";
  echo "<td>" . $row['WBC'] . "</td>";

  echo "</tr>";
  }

echo "</table>";
echo "<br>";

echo "Total Laboratory Record: ".$num;

mysqli_close($con);

session_write_close();


?>

<br />
<br />
<br />
<br />
<br />
<?php 
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"
SELECT pepid,visitdate,MAX( cd4 ) AS cd4,MAX( CD4_per ) AS CD4_per, MAX( viral_load ) AS viral_load, MAX( pregnancy ) AS pregnancy,MAX( Malaria_smear ) AS Malaria_smear,MAX( Lymphocytes ) AS Lymphocytes,
MAX( Monocytes ) AS Monocytes,MAX( Polymorph ) AS Polymorph,MAX( Eosinophils ) AS Eosinophils,MAX( Basophils ) AS Basophils,
MAX( HbPCV ) AS HbPCV,MAX( Platelets ) AS Platelets,MAX( HBsAG ) AS HBsAG,MAX( VDRL ) AS VDRL,MAX( Creatinine ) AS Creatinine,MAX( ALT_SGPT ) AS ALT_SGPT,
MAX( GLUCOSE ) AS GLUCOSE,MAX( PROTEIN ) AS PROTEIN,MAX( VIAPap_Smear ) AS VIAPap_Smear,MAX( Na ) AS Na,MAX( K ) AS K,MAX( Cl ) AS Cl,
MAX( HCO3 ) AS HCO3,MAX( BUN ) AS BUN,MAX( Fasting_Glucose ) AS Fasting_Glucose,MAX( Total_Bilirubin ) AS Total_Bilirubin,
MAX( Amylase ) AS Amylase,MAX( Total_Cholesterol ) AS Total_Cholesterol,MAX( LDL ) AS LDL,MAX( AST_SGOT ) AS AST_SGOT,MAX( Triglyceride ) AS Triglyceride,
MAX( Alk_Phosphatase ) AS Alk_Phosphatase,MAX( WBC ) AS WBC
FROM lab_results_pivot_test2
WHERE pepid =  '$_SESSION[pepid]'
GROUP BY visitdate");

$num=$result->num_rows;
echo "FILE MAKER PRO Imports:";
echo "<table border='1'>
<tr>
<th></th>
<th>visitdate</th>
<th>CD4</th>
<th>CD4%</th>
<th>Viral Load</th>
<th>Pregnancy</th>
<th>Malaria Smear</th>
<th>Lymphocytes</th>
<th>Monocytes</th>
<th>Polymorph</th>
<th>Eosinophils</th>
<th>Basophils</th>
<th>HbPCV</th>
<th>Platelets</th>
<th>HBsAG</th>
<th>VDRL</th>
<th>Creatinine</th>
<th>ALT_SGPT</th>
<th>GLUCOSE</th>
<th>PROTEIN</th>
<th>VIAPap_Smear</th>
<th>Na</th>
<th>K</th>
<th>Cl</th>
<th>HCO3</th>
<th>BUN</th>
<th>Total_Bilirubin</th>
<th>Amylase</th>
<th>Total_Cholesterol</th>
<th>LDL</th>
<th>AST_SGOT</th>
<th>Triglyceride</th>
<th>Alk_Phosphatase</th>
<th>WBC</th>
</tr>";
//echo '<td><a href="labresultbrowse.php?id=' . $row['visitdate'] . '">. $row['visitdate'] .</a></td>';
//<a href="http://www.w3schools.com">Visit W3Schools.com!</a>
//echo '<td><a href="labresultbrowse.php?id=' . $row['visitdate'] . '">View Details</a></td>';
//?coice=search&amp;cat=...&amp;subcat=...&amp;srch=...
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo '<td><a href="labresultbrowse_fm.php?visitdate=' . $row['visitdate'] . '&amp;pepid=' . $row['pepid'] . '">Browse</a></td>';
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['cd4'] . "</td>";
  echo "<td>" . $row['CD4_per'] . "</td>";
  echo "<td>" . $row['viral_load'] . "</td>";
  echo "<td>" . $row['pregnancy'] . "</td>";
  echo "<td>" . $row['Malaria_smear'] . "</td>";
  echo "<td>" . $row['Lymphocytes'] . "</td>";
  echo "<td>" . $row['Monocytes'] . "</td>";
  echo "<td>" . $row['Polymorph'] . "</td>";
  echo "<td>" . $row['Eosinophils'] . "</td>";
  echo "<td>" . $row['Basophils'] . "</td>";
  echo "<td>" . $row['HbPCV'] . "</td>";
  echo "<td>" . $row['Platelets'] . "</td>";
  echo "<td>" . $row['HBsAG'] . "</td>";
  echo "<td>" . $row['VDRL'] . "</td>";
  echo "<td>" . $row['Creatinine'] . "</td>";
  echo "<td>" . $row['ALT_SGPT'] . "</td>";
  echo "<td>" . $row['GLUCOSE'] . "</td>";
  echo "<td>" . $row['PROTEIN'] . "</td>";
  echo "<td>" . $row['VIAPap_Smear'] . "</td>";
  echo "<td>" . $row['Na'] . "</td>";
  echo "<td>" . $row['K'] . "</td>";
  echo "<td>" . $row['Cl'] . "</td>";
  echo "<td>" . $row['HCO3'] . "</td>";
  echo "<td>" . $row['BUN'] . "</td>";
  echo "<td>" . $row['Total_Bilirubin'] . "</td>";
  echo "<td>" . $row['Amylase'] . "</td>";
  echo "<td>" . $row['Total_Cholesterol'] . "</td>";
  echo "<td>" . $row['LDL'] . "</td>";
  echo "<td>" . $row['AST_SGOT'] . "</td>";
  echo "<td>" . $row['Triglyceride'] . "</td>";
  echo "<td>" . $row['Alk_Phosphatase'] . "</td>";
  echo "<td>" . $row['WBC'] . "</td>";

  echo "</tr>";
  }

echo "</table>";
echo "<br>";

echo "Total Laboratory Record: ".$num;

mysqli_close($con);

session_write_close();


?>
</body>
</html>