<?php
session_start();

include '../mandate_/lidh.php';

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


class MyClass{
    public function GetUserInformation(){include '../mandate_/lidh.php';
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
<!DOCTYPE html>
<html>
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
width:500px;
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
	width:40%;
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
	background: #CAE8EA url(../images/bg_header.jpg) no-repeat;
	height:50px;
border:1px solid black;
}
td {
	font: italic 11px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
}
</style>
<link rel="shortcut icon" href="../images/favicon.png" type="image/png">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>CIS Pro - TXRes</title>
</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(../images/bartoszkosowski.jpg) no-repeat center left;">TREATMENT RESPONSE UTILITY &nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>

<body>
<fieldset>
<legend style="font-weight:bold; font-size:11px">ACTIONS</legend>
<a href="../welcome.php?username=<?php echo $_GET['username']; ?>" style="font-weight:bold; font-size:14px; color:#2A1FFF">[MAIN MENU]</a> &nbsp; &nbsp; &nbsp;
<a href="javascript:history.go(-1)">[BACK]</a>


</fieldset>
<br />
<br />
<?php 
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT 
    p.pepid
    , DATE_FORMAT(p.visitdate, '%d-%M-%Y') as visitdate
    ,MAX(IF(p.tests = 'CD4', p.results, NULL)) as `CD4`
    ,MAX(IF(p.tests = 'Viral Load', p.results, NULL)) as `Viral_Load`
FROM laboratory p
where pepid='$_SESSION[pepid]'
group by p.visitdate");

$num=$result->num_rows;

echo "<table border='1' width='50%'>
<tr>
<th>visitdate</th>
<th>CD4 Count</th>
<th>Viral Load</th>
</tr>";
//echo '<td><a href="labresultbrowse.php?id=' . $row['visitdate'] . '">. $row['visitdate'] .</a></td>';
//<a href="http://www.w3schools.com">Visit W3Schools.com!</a>
//echo '<td><a href="labresultbrowse.php?id=' . $row['visitdate'] . '">View Details</a></td>';
//?coice=search&amp;cat=...&amp;subcat=...&amp;srch=...
while($row = mysqli_fetch_array($result))
  {
	
  echo "<tr>";
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['CD4'] . "</td>";
  echo "<td>" . $row['Viral_Load'] . "</td>";
  echo "</tr>";

  }

echo "</table>";
echo "<br>";

mysqli_close($con);

session_write_close();

?>
  <!-- prerequisites -->
  <link rel="stylesheet" href="./style.css" type="text/css">
  <script src="./amcharts.js" type="text/javascript"></script>
  <script src="./serial.js" type="text/javascript"></script>

  <!-- cutom functions -->
  <label style="background-color:Tomato;"><em><i><strong>CD4 - GRAPH</strong><i></em></label>
  <script>
AmCharts.loadJSON = function(url) {
  // create the request
  if (window.XMLHttpRequest) {
    // IE7+, Firefox, Chrome, Opera, Safari
    var request = new XMLHttpRequest();
  } else {
    // code for IE6, IE5
    var request = new ActiveXObject('Microsoft.XMLHTTP');
  }

  // load it
  // the last "false" parameter ensures that our code will wait before the
  // data is loaded
  request.open('GET', url, false);
  request.send();

  // parse adn return the output
  return eval(request.responseText);
};
  </script>

  <!-- chart container -->
  <div id="chartdiv" style="width: 1000px; height: 300px;"></div>
    <label style="background-color:Tomato;"><strong>ARV - PICKUPS</strong></label>
<div id="chartdiv3" style="width: 1000px; height: 80px;"></div>
    <label style="background-color:Tomato;"><strong>Viral Load - GRAPH</strong></label>
<div id="chartdiv2" style="width: 1000px; height: 300px;"></div>

  <!-- the chart code -->

  <script>
var chart;

// create chart
AmCharts.ready(function() {

  // load the data
  var chartData = AmCharts.loadJSON('data.php?pepid=<?php echo $_SESSION['pepid'] ?>');

  // SERIAL CHART
  chart = new AmCharts.AmSerialChart();
  chart.pathToImages = "http://www.amcharts.com/lib/images/";
  chart.dataProvider = chartData;
  chart.categoryField = "category";
  chart.dataDateFormat = "YYYY-MM-DD";

  // GRAPHS

  var graph1 = new AmCharts.AmGraph();
  graph1.valueField = "value1";
  graph1.bullet = "round";
  graph1.bulletBorderColor = "#FFFFFF";
  graph1.bulletBorderThickness = 2;
  graph1.lineThickness = 2;
  graph1.lineAlpha = 0.5;
  chart.addGraph(graph1);


  // CATEGORY AXIS
  chart.categoryAxis.parseDates = true;

  // WRITE
  chart.write("chartdiv");
});

  </script>
      <script>
var chart23;

// create chart
AmCharts.ready(function() {

  // load the data
  var chartData1 = AmCharts.loadJSON('data3.php?pepid=<?php echo $_SESSION['pepid'] ?>');

  // SERIAL CHART
  chart23 = new AmCharts.AmSerialChart();
  chart23.pathToImages = "http://www.amcharts.com/lib/images/";
  chart23.dataProvider = chartData1;
  chart23.categoryField = "category";
  chart23.dataDateFormat = "YYYY-MM-DD";

  // GRAPHS

  var graph12A = new AmCharts.AmGraph();
  graph12A.valueField = "value1";
  graph12A.bullet = "round";
  graph12A.bulletBorderColor = "#FFFFFF";
  graph12A.bulletBorderThickness = 2;
  graph12A.lineThickness = 2;
  graph12A.lineAlpha = 0.5;
  chart23.addGraph(graph12A);


  // CATEGORY AXIS
  chart23.categoryAxis.parseDates = true;

  // WRITE
  chart23.write("chartdiv3");
});

  </script>
  <script>
var chart2;

// create chart
AmCharts.ready(function() {

  // load the data
  var chartData = AmCharts.loadJSON('data2.php?pepid=<?php echo $_SESSION['pepid'] ?>');

  // SERIAL CHART
  chart2 = new AmCharts.AmSerialChart();
  chart2.pathToImages = "http://www.amcharts.com/lib/images/";
  chart2.dataProvider = chartData;
  chart2.categoryField = "category";
  chart2.dataDateFormat = "YYYY-MM-DD";

  // GRAPHS

  var graph12 = new AmCharts.AmGraph();
  graph12.valueField = "value1";
  graph12.bullet = "round";
  graph12.bulletBorderColor = "#FFFFFF";
  graph12.bulletBorderThickness = 2;
  graph12.lineThickness = 2;
  graph12.lineAlpha = 0.5;
  chart2.addGraph(graph12);


  // CATEGORY AXIS
  chart2.categoryAxis.parseDates = true;

  // WRITE
  chart2.write("chartdiv2");
});

  </script>

</body>
</html>

