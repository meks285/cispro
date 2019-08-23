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
	background: #CAE8EA url(../images/bg_header.jpg) no-repeat;
	height:50px;
border:1px solid black;
}
td {
	font: italic 11px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
}
#container {   font-size: 0; }

#container > div {font-size: 1rem; display: inline-block; }
#chartdiv7 {
	width		: 100%;
	height		: 500px;
	font-size	: 11px;
}	
</style>
<link rel="shortcut icon" href="../images/favicon.png" type="image/png">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>CIS Pro - DASHBOARD</title>
</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(../images/bartoszkosowski.jpg) no-repeat center left;">DASHBOARD UTILITY &nbsp;&nbsp;&nbsp;</h1>

<body>

<fieldset  style="height:300px; border:none; background-color:powderblue;">
<?php
$link = mysql_connect( 'localhost', 'root', 'Nu66et%%' );
if ( !$link ) {
  die( 'Could not connect: ' . mysql_error() );
}

// Select the data base
$db = mysql_select_db( 'apindb', $link );
if ( !$db ) {
  die ( 'Error selecting database \'test\' : ' . mysql_error() );
}
$facilitydetails="SELECT count(DISTINCT facilityname)
from patient
group by facilityname";
$rfacilitydetails=mysql_query($facilitydetails);
$cntfacilitydetails=mysql_num_rows($rfacilitydetails);
// NEW
$arvdetails="select EXTRACT(YEAR from pharmdispensedate) as category
 from pharmacy
where drugname1!='' AND EXTRACT(YEAR from pharmdispensedate)=2017
order by category ASC";
$rarvdetails=mysql_query($arvdetails);
$cntarvdetails=mysql_num_rows($rarvdetails);
// NEW
$retdetails="SELECT a.pepid,DATE_FORMAT(a.pharmdispensedate,'%Y/%m/%d') category
from pharmacy a JOIN (select pepid,pharmdispensedate,drugname1
 						from pharmacy
						where lower(visittype)='initial' and patienttype='ART' and length(EXTRACT(YEAR from pharmdispensedate))=4) b
ON (a.pepid=b.pepid)
WHERE DATEDIFF(a.pharmdispensedate,b.pharmdispensedate)/30.4>=12 and EXTRACT(YEAR FROM b.pharmdispensedate)=2016
order by a.pharmdispensedate ASC";
$rretdetails=mysql_query($retdetails);
$cntretdetails=mysql_num_rows($rretdetails);
$v_loaddetails="select DISTINCT l.pepid
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND EXTRACT(YEAR FROM l.visitdate) = 2017 - 1";
$rv_loaddetails=mysql_query($v_loaddetails);
$cntv_loaddetails=mysql_num_rows($rv_loaddetails);
// CARE NEW
$caredetails="SELECT a.pepid,a.visitdate
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(YEAR from a.visitdate) = 2017";
$rcaredetails=mysql_query($caredetails);
$cntcaredetails=mysql_num_rows($rcaredetails);
//TB SCREEN
$tbdetails="select DISTINCT b.pepid
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(YEAR from b.visitdate) = 2017";
$rtbdetails=mysql_query($tbdetails);
$cnttbdetails=mysql_num_rows($rtbdetails);
echo "<table border='1';  width='1000px'>
<tr>
<th> NUMBER OF FACILITIES</th>
<th> TOTAL RECEIVING ARV(2017)</th>
<th> TX Retention(2017)</th>
<th> TX_PLVS(2017)</th>
<th> CARE_NEW(2017)</th>
</tr>";
  echo "<tr>";
echo "<td>" .$cntfacilitydetails. "</td>";
echo "<td>" .$cntarvdetails. "</td>";
echo "<td>" .$cntretdetails. "</td>";
echo "<td>" .$cntv_loaddetails. "</td>";
echo "<td>" .$cntcaredetails. "</td>";
  echo "</tr>";
echo "</table>";
echo "<table border='1';  width='1000px'>
<tr>
<th> SCREENED FOR TB(2017)</th>

</tr>";
  echo "<tr>";
echo "<td>" .$cnttbdetails. "</td>";
  echo "</tr>";
echo "</table>";
echo "<br>";
?>

</fieldset>
  <!-- prerequisites -->
  <link rel="stylesheet" href="./style.css" type="text/css">
  <script src="./amcharts.js" type="text/javascript"></script>
  <script src="./serial.js" type="text/javascript"></script>

  <!-- cutom functions -->
  
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

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<div id="chartdiv" style="width: 500px; height: 300px;"></div>
        </fieldset>
         </div>
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<div id="chartdiv2" style="width: 500px; height: 300px;"></div>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<div id="chartdiv3" style="width: 500px; height: 300px;"></div>
        </fieldset>
         </div>
    </div>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 250px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<div id="chartdiv4" style="width: 500px; height: 300px;"></div>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<div id="chartdiv5" style="width: 500px; height: 300px;"></div>
        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<div id="chartdiv6" style="width: 500px; height: 300px;"></div>
        </fieldset>
         </div>
    </div>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<p style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;">Targets & Achievements</p>
<div id="chartdiv7"></div>	
 <!-- the chart code -->
  <script>
var chart;

// create chart
AmCharts.ready(function() {

  // load the data
  var chartData = AmCharts.loadJSON('data.php');

  // SERIAL CHART
  chart = new AmCharts.AmSerialChart();
  chart.pathToImages = "http://www.amcharts.com/lib/images/";
  chart.dataProvider = chartData;
  chart.categoryField = "category";
  chart.dataDateFormat = "YYYY-MM";
  chart.hideCredits=true;

  // GRAPHS

  var graph1 = new AmCharts.AmGraph();
  graph1.valueField = "value1";
  graph1.bullet = "round";
  graph1.bulletBorderColor = "#FFFFFF";
  graph1.bulletBorderThickness = 2;
  graph1.lineThickness = 2;
  //graph1.type = 'column';
  graph1.lineAlpha = 0.5;
  graph1.columnWidth = 0.5;
  graph1.balloonText="[[category]]<br><b><span style='font-size:14px;'>value:[[value1]]</span></b>";
  chart.addGraph(graph1);


  // CATEGORY AXIS
	chart.categoryAxis.parseDates = false;
    chart.categoryAxis.minPeriod = "MM"; // our data is daily, so we set minPeriod to DD                
    chart.categoryAxis.autoGridCount = false;
    chart.categoryAxis.gridCount = 50;
    chart.categoryAxis.gridAlpha = 0;
    chart.categoryAxis.gridColor = "#000000";
	  //LEGEND
	var legend = new AmCharts.AmLegend();
                                legend = new AmCharts.AmLegend();
                                legend.position = "top";
                                legend.align = "center";
                                legend.markerType = "square";
                                legend.labelText = "TX_NEW(2017)";
                chart.addLegend(legend);  


  // WRITE
  chart.write("chartdiv");
});

  </script>
  <script>
var chart2;

// create chart
AmCharts.ready(function() {

  // load the data
  var chartData = AmCharts.loadJSON('data2.php');

  // SERIAL CHART
  chart2 = new AmCharts.AmSerialChart();
  chart2.pathToImages = "http://www.amcharts.com/lib/images/";
  chart2.dataProvider = chartData;
  chart2.categoryField = "category";
  chart2.dataDateFormat = "YYYY-MM-DD";
  chart2.hideCredits=true;
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
  //LEGEND
	var legend = new AmCharts.AmLegend();
                                legend = new AmCharts.AmLegend();
                                legend.position = "top";
                                legend.align = "center";
                                legend.markerType = "square";
                                legend.labelText = "TX_CURR";
                chart2.addLegend(legend);  


  // WRITE
  chart2.write("chartdiv2");
});

  </script>
      <script>
var chart23;

// create chart
AmCharts.ready(function() {

  // load the data
  var chartData1 = AmCharts.loadJSON('data3.php');

  // SERIAL CHART
  chart23 = new AmCharts.AmSerialChart();
  chart23.pathToImages = "http://www.amcharts.com/lib/images/";
  chart23.dataProvider = chartData1;
  chart23.categoryField = "category";
  chart23.dataDateFormat = "YYYY-MM-DD";
  chart23.hideCredits=true;
  // GRAPHS

  var graph12A = new AmCharts.AmGraph();
  graph12A.valueField = "value1";
  graph12A.bullet = "round";
  graph12A.bulletBorderColor = "#FFFFFF";
  graph12A.bulletBorderThickness = 2;
  graph12A.lineThickness = 2;
  //graph12A.type = 'column';
  graph12A.lineAlpha = 0.5;
  graph12A.columnWidth = 0.5;
  graph12A.balloonText="[[category]]<br><b><span style='font-size:14px;'>value:[[value1]]</span></b>";
  //graph12A.BalloonDateFormats="[period:"YYYY", format:"YYYY"]";
  chart23.addGraph(graph12A);
  //LEGEND
	var legend = new AmCharts.AmLegend();
                                legend = new AmCharts.AmLegend();
                                legend.position = "top";
                                legend.align = "center";
                                legend.markerType = "square";
                                legend.labelText = "TX_RET(2017)";
                chart23.addLegend(legend);  

  // CATEGORY AXIS
  chart23.categoryAxis.parseDates = false;

  // WRITE
  chart23.write("chartdiv3");
});

  </script>
  <script>
var chart4;

// create chart
AmCharts.ready(function() {

  // load the data
  var chartData = AmCharts.loadJSON('data4.php');

  // SERIAL CHART
  chart4 = new AmCharts.AmSerialChart();
  chart4.pathToImages = "http://www.amcharts.com/lib/images/";
  chart4.dataProvider = chartData;
  chart4.categoryField = "category";
  chart4.dataDateFormat = "YYYY-MM";
  chart4.hideCredits=true;

  // GRAPHS

  var graph4 = new AmCharts.AmGraph();
  graph4.valueField = "value1";
  graph4.label = "TX_PLVS";
  graph4.bullet = "round";
  graph4.bulletBorderColor = "#FFFFFF";
  graph4.bulletBorderThickness = 2;
  graph4.lineThickness = 2;
  //graph1.type = 'column';
  graph4.lineAlpha = 0.5;
  graph4.columnWidth = 0.5;
  graph4.balloonText="[[category]]<br><b><span style='font-size:14px;'>value:[[value1]]</span></b>";
  chart4.addGraph(graph4);


  // CATEGORY AXIS
	chart4.categoryAxis.parseDates = true;
    chart4.categoryAxis.minPeriod = "MM"; // our data is daily, so we set minPeriod to DD                
    chart4.categoryAxis.autoGridCount = false;
    chart4.categoryAxis.gridCount = 50;
    chart4.categoryAxis.gridAlpha = 0;
    chart4.categoryAxis.gridColor = "#000000";
  //LEGEND
	var legend = new AmCharts.AmLegend();
                                legend = new AmCharts.AmLegend();
                                legend.position = "top";
                                legend.align = "center";
                                legend.markerType = "square";
                                legend.labelText = "TX_PLVS - (<1000 copies/ml)";
                chart4.addLegend(legend);  
				// WRITE
  chart4.write("chartdiv4");
});

  </script>
    <script>
var chart5;

// create chart
AmCharts.ready(function() {

  // load the data
  var chartData = AmCharts.loadJSON('data5.php');

  // SERIAL CHART
  chart5 = new AmCharts.AmSerialChart();
  chart5.pathToImages = "http://www.amcharts.com/lib/images/";
  chart5.dataProvider = chartData;
  chart5.categoryField = "category";
  chart5.dataDateFormat = "YYYY-MM";
  chart5.hideCredits=true;

  // GRAPHS

  var graph5 = new AmCharts.AmGraph();
  graph5.valueField = "value1";
  graph5.label = "TX_PLVS";
  graph5.bullet = "round";
  graph5.bulletBorderColor = "#FFFFFF";
  graph5.bulletBorderThickness = 2;
  graph5.lineThickness = 2;
  //graph1.type = 'column';
  graph5.lineAlpha = 0.5;
  graph5.columnWidth = 0.5;
  graph5.balloonText="[[category]]<br><b><span style='font-size:14px;'>value:[[value1]]</span></b>";
  chart5.addGraph(graph5);


  // CATEGORY AXIS
	chart5.categoryAxis.parseDates = true;
    chart5.categoryAxis.minPeriod = "MM"; // our data is daily, so we set minPeriod to DD                
    chart5.categoryAxis.autoGridCount = false;
    chart5.categoryAxis.gridCount = 50;
    chart5.categoryAxis.gridAlpha = 0;
    chart5.categoryAxis.gridColor = "#000000";
  //LEGEND
	var legend = new AmCharts.AmLegend();
                                legend = new AmCharts.AmLegend();
                                legend.position = "top";
                                legend.align = "center";
                                legend.markerType = "square";
                                legend.labelText = "CARE_NEW";
                chart5.addLegend(legend);  
				// WRITE
  chart5.write("chartdiv5");
});

  </script>
      <script>
var chart6;

// create chart
AmCharts.ready(function() {

  // load the data
  var chartData = AmCharts.loadJSON('data6.php');

  // SERIAL CHART
  chart6 = new AmCharts.AmSerialChart();
  chart6.pathToImages = "http://www.amcharts.com/lib/images/";
  chart6.dataProvider = chartData;
  chart6.categoryField = "category";
  chart6.dataDateFormat = "YYYY-MM";
  chart6.hideCredits=true;

  // GRAPHS

  var graph6 = new AmCharts.AmGraph();
  graph6.valueField = "value1";
  graph6.label = "TX_PLVS";
  graph6.bullet = "round";
  graph6.bulletBorderColor = "#FFFFFF";
  graph6.bulletBorderThickness = 2;
  graph6.lineThickness = 2;
  //graph1.type = 'column';
  graph6.lineAlpha = 0.5;
  graph6.columnWidth = 0.5;
  graph6.balloonText="[[category]]<br><b><span style='font-size:14px;'>value:[[value1]]</span></b>";
  chart6.addGraph(graph6);


  // CATEGORY AXIS
	chart6.categoryAxis.parseDates = true;
    chart6.categoryAxis.minPeriod = "MM"; // our data is daily, so we set minPeriod to DD                
    chart6.categoryAxis.autoGridCount = false;
    chart6.categoryAxis.gridCount = 50;
    chart6.categoryAxis.gridAlpha = 0;
    chart6.categoryAxis.gridColor = "#000000";
  //LEGEND
	var legend = new AmCharts.AmLegend();
                                legend = new AmCharts.AmLegend();
                                legend.position = "top";
                                legend.align = "center";
                                legend.markerType = "square";
                                legend.labelText = "TB_STAT";
                chart6.addLegend(legend);  
				// WRITE
  chart6.write("chartdiv6");
});

  </script>
<script>
var chart = AmCharts.makeChart("chartdiv7", {
    "theme": "light",
    "type": "serial",
    "dataProvider": [{
        "country": "TX_RET",
        "target": 1200,
        "achievement": 350
    }, {
        "country": "TX_PLVS",
        "target": 900,
        "achievement": 271
    }, {
        "country": "TB_STAT",
        "target": 250,
        "achievement": 89
    }, {
        "country": "PMTCT_EID",
        "target": 950,
        "achievement": 300
    }, {
        "country": "TX_NEW",
        "target": 1400,
        "achievement": 2100
    }, {
        "country": "TX_CURR",
        "target": 2600,
        "achievement": 4900
    }, {
        "country": "TB_ART",
        "target": 260,
        "achievement": 490
    }],
    "valueAxes": [{
        "unit": "",
        "position": "left",
        "title": "Targets & Achievements",
    }],
    "startDuration": 1,
    "graphs": [{
        "balloonText": "Target in [[category]] (2017): <b>[[value]]</b>",
        "fillAlphas": 0.9,
        "lineAlpha": 0.2,
        "title": "2004",
        "type": "column",
        "valueField": "target"
    }, {
        "balloonText": "Achievements in [[category]] (2017): <b>[[value]]</b>",
        "fillAlphas": 0.9,
        "lineAlpha": 0.2,
        "title": "2005",
        "type": "column",
        "clustered":false,
        "columnWidth":0.5,
        "valueField": "achievement"
    }],
    "plotAreaFillAlphas": 0.1,
    "categoryField": "country",
    "categoryAxis": {
        "gridPosition": "start"
    },
    "export": {
    	"enabled": true
     }

});
</script>
</body>
</html>

