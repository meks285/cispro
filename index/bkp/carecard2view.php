<?php
session_start();

$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


class MyClass{
    public function GetUserInformation(){
$query = "SELECT visitschd,artduration,weight,height,bp,eddpmtct,fp,functionalstatus,whostage,tbstatus,otheroi,sideeff,
regimen,regadherencea,regadherenceb,cotrimdose,cotrimadherencea,cotrimadherenceb,inhdose,inhadherencea,inhadherenceb,otherdrugs,vlscheduled,cd4scheduled,othertests,recommendation,nextapptdate,
clinician,pepid,visitdate
FROM clinicaleval
WHERE pepid = '$_SESSION[pepid]'";
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
.sidebar1{
	width: 170px;
   height: 50px;
   position: fixed;
   left: 0px;
   font-family: Tahoma, Geneva, sans-serif;
   font-style: italic;
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
<title>CiS Pro - C.E.</title>
</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">CLINICAL EVALUATION HISTORY &nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>

<body>
<fieldset>
<legend style="font-weight:bold; font-size:11px">ACTIONS</legend>
<a href="./welcome.php" style="font-weight:bold; font-size:14px; color:#2A1FFF">[MAIN MENU]</a> &nbsp; &nbsp; &nbsp;
<a href="javascript:history.go(-1)" style="color:#2A1FFF"">[BACK]</a>


</fieldset>
<?php 
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT visitschd,artduration,weight,height,bp,bpdiast,eddpmtct,fp,functionalstatus,whostage,tbstatus,otheroi,sideeff,
regimen,regimen2,regimen3,regimen4,regadherencea,regadherenceb,cotrimdose,cotrimadherencea,cotrimadherenceb,inhdose,inhadherencea,inhadherenceb,otherdrugs,vlscheduled,cd4scheduled,othertests,recommendation,nextapptdate,
clinician,pepid,visitdate,cd4value,vlvalue
FROM clinicaleval
WHERE pepid = '$_SESSION[pepid]'");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th ></th>
<th >Patient ID</th>
<th>Is Visit Scheduled</th>
<th>VisitDate</th>
<th>ART Duration (Months)</th>
<th>Weight(kg)</th>
<th>Height(cm) for Children</th>
<th>BP-Syst</th>
<th>BP-Diast</th>
<th>EDD and PMTCT link</th>
<th>FP(Write Method)</th>
<th>Functional Status</th>
<th>WHO Clinical Stage</th>
<th>TB Status</th>
<th>Other Oi's/Problems</th>
<th>Noted Side Effects</th>
<th>ARV: RegimenA</th>
<th>ARV: RegimenB</th>
<th>ARV: RegimenC</th>
<th>ARV: RegimenD</th>
<th>ARV: Adherence-A</th>
<th>ARV: Adherence-B</th>
<th>COTRIM: Dose</th>
<th>COTRIM: Adherence-A</th>
<th>COTRIM: Adherence-B</th>
<th>Other Drugs Dispensed</th>
<th>CD4 Scheduled?</th>
<th>CD4 Value</th>
<th>Viral Load Scheduled?</th>
<th>Viral Value</th>
<th>Other Tests Done</th>
<th>Consult Hospitalise, Refer</th>
<th>Next Appointment Date</th>
<th>Clinician</th>

</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo '<td><a href="carecard2browse.php?visitdate=' . $row['visitdate'] . '&amp;pepid=' . $row['pepid'] . '">Browse</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['visitschd'] . "</td>";
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['artduration'] . "</td>";
  echo "<td>" . $row['weight'] . "</td>";
  echo "<td>" . $row['height'] . "</td>";
  echo "<td>" . $row['bp'] . "</td>";
  echo "<td>" . $row['bpdiast'] . "</td>";
  echo "<td>" . $row['eddpmtct'] . "</td>";
  echo "<td>" . $row['fp'] . "</td>";
  echo "<td>" . $row['functionalstatus'] . "</td>";
  echo "<td>" . $row['whostage'] . "</td>";
  echo "<td>" . $row['tbstatus'] . "</td>";
  echo "<td>" . $row['otheroi'] . "</td>";
  echo "<td>" . $row['sideeff'] . "</td>";
  echo "<td>" . $row['regimen'] . "</td>";
  echo "<td>" . $row['regimen2'] . "</td>";
  echo "<td>" . $row['regimen3'] . "</td>";
  echo "<td>" . $row['regimen4'] . "</td>";
  echo "<td>" . $row['regadherencea'] . "</td>";
  echo "<td>" . $row['regadherenceb'] . "</td>";
  echo "<td>" . $row['cotrimdose'] . "</td>";
  echo "<td>" . $row['cotrimadherencea'] . "</td>";
  echo "<td>" . $row['cotrimadherenceb'] . "</td>";
  echo "<td>" . $row['otherdrugs'] . "</td>";
  echo "<td>" . $row['cd4scheduled'] . "</td>";
  echo "<td>" . $row['cd4value'] . "</td>";
  echo "<td>" . $row['vlscheduled'] . "</td>";
  echo "<td>" . $row['vlvalue'] . "</td>";
  echo "<td>" . $row['othertests'] . "</td>";
  echo "<td>" . $row['recommendation'] . "</td>";
  echo "<td>" . $row['nextapptdate'] . "</td>";
  echo "<td>" . $row['clinician'] . "</td>";


  



  echo "</tr>";
  }
echo "</table>";
echo "<br>";

echo "Total Clinical Evaluation Records: ".$num;

mysqli_close($con);

session_write_close();


?>
</body>
</html>