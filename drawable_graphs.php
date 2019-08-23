<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<link rel="stylesheet" href="style.css" type="text/css">
        <script src="./amcharts/amcharts.js" type="text/javascript"></script>
        <script src="./amcharts/serial.js" type="text/javascript"></script>
        <script src="amcharts/pie.js" type="text/javascript"></script>

        <!-- scripts for exporting chart as an image -->
        <!-- Exporting to image works on all modern browsers except IE9 (IE10 works fine) -->
        <!-- Note, the exporting will work only if you view the file from web server -->
        <!--[if (!IE) | (gte IE 10)]> -->
        <script src="./amcharts/exporting/amexport.js" type="text/javascript"></script>
        <script src="./amcharts/exporting/rgbcolor.js" type="text/javascript"></script>
        <script src="./amcharts/exporting/canvg.js" type="text/javascript"></script>
        <script src="./amcharts/exporting/jspdf.js" type="text/javascript"></script>
        <script src="./amcharts/exporting/filesaver.js" type="text/javascript"></script>
<script src="./amcharts/exporting/jspdf.plugin.addimage.js" type="text/javascript"></script>
        <!-- <![endif]-->
        
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
<title>CiS Pro - Graphs</title>
</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">GRAPHS</h1>
<body>
<a href="javascript:history.go(-1)" style="float:left">[BACK]</a>
<div id="chartdiv1" style="width: 20%; height: 300px; float: left;"></div>
<div id="chartdiv2" style="width: 20%; height: 300px;"></div>
<div id="chartdiv3" style="width: 20%; height: 300px;"></div>
<div id="chartdiv4" style="width: 20%; height: 300px;"></div> 
<div id="chartdiv5" style="width: 20%; height: 300px;"></div> 
<div id="legenddiv" style=""></div>
<?php 
include('database_connection.php');
$query1 = "select count(*) from patient where year(enroldate) =  '2013'";
            $result1 = mysql_query($query1);
            $count1 = mysql_fetch_array($result1);
?>
<?php 
include('database_connection.php');
$query2 = "select count(*) from patient where sex='male'";
            $result2 = mysql_query($query2);
            $count2 = mysql_fetch_array($result2);
?>
<?php 
include('database_connection.php');
$query9 = "select count(*) from patient where sex='female'";
            $result9 = mysql_query($query9);
            $count9 = mysql_fetch_array($result9);
?>
<?php 
include('database_connection.php');
$query3 = "select count(*) from patient where age>=15";
            $result3 = mysql_query($query3);
            $count3 = mysql_fetch_array($result3);
?>
<?php 
include('database_connection.php');
$query4 = "select count(*) from patient where sex='male' and age>=15";
            $result4 = mysql_query($query4);
            $count4 = mysql_fetch_array($result4);
?>
<?php 
include('database_connection.php');
$query5 = "select count(*) from patient where sex='female' and age>=15";
            $result5 = mysql_query($query5);
            $count5 = mysql_fetch_array($result5);
?>
<?php 
include('database_connection.php');
$query = "select count(*) from patient where age<15";
            $result = mysql_query($query);
            $count = mysql_fetch_array($result);
?>
<?php 
include('database_connection.php');
$query7 = "select count(*) from patient where age<15 AND sex='male'";
            $result7 = mysql_query($query7);
            $count7 = mysql_fetch_array($result7);
?>
<?php 
include('database_connection.php');
$query8 = "select count(*) from patient where age<15 AND sex='female'";
            $result8 = mysql_query($query8);
            $count8 = mysql_fetch_array($result8);
?>
<?php 
include('database_connection.php');
$query11 = "SELECT COUNT(*) FROM patient WHERE YEAR( enroldate ) =  '2014'";
            $result11 = mysql_query($query11);
            $count11 = mysql_fetch_array($result11);
?>
<?php 
include('database_connection.php');
$query12 = "SELECT COUNT(*) FROM patient WHERE YEAR( enroldate ) =  '2015'";
            $result12 = mysql_query($query12);
            $count12 = mysql_fetch_array($result12);
?>
<?php 
include('database_connection.php');
$query13 = "SELECT COUNT(*) FROM patient WHERE YEAR( enroldate ) =  '2015'";
            $result13 = mysql_query($query13);
            $count13 = mysql_fetch_array($result13);
?>

<?php 
include('database_connection.php');
$query14 = "SELECT COUNT(*) FROM patient WHERE YEAR( enroldate ) =  '2012'";
            $result14 = mysql_query($query14);
            $count14 = mysql_fetch_array($result14);
?>

<script type="text/javascript">
            var chart, chart2, chart3;

            var chartData = [{
                "country": "Adult",
                    "visits": <?php echo $count3[0]; ?>,
                    "color": "#FF0F00"
            }, {
                "country": "Pediatric",
                    "visits": <?php echo $count[0]; ?>,
                    "color": "#FF6600"
            },{
                "country": "",
                    "visits": 0,
                    "color": ""
            }];

            var chartData2 = [{
                "country": "Male",
                    "visits": <?php echo $count2[0]; ?>,
                    "color": "#FF0F00"
            }, {
                "country": "Female",
                    "visits": <?php echo $count9[0]; ?>,
                    "color": "#FF6600"
            },{
                "country": "",
                    "visits": 0,
                    "color": ""
            }];

            var chartData3 = [{
                "country": "2012",
                    "visits": <?php echo $count14[0]; ?>,
                    "color": "#FF0F00"
            },{
                "country": "2013",
                    "visits": <?php echo $count1[0]; ?>,
                    "color": "#FF0F00"
            }, {
                "country": "2014",
                    "visits": <?php echo $count11[0]; ?>,
                    "color": "#FF6600"
            },{
                "country": "2015",
                    "visits": <?php echo $count12[0]; ?>,
                    "color": ""
            },{
                "country": "2016",
                    "visits": <?php echo $count13[0]; ?>,
                    "color": ""
            }];
			
			var chartData4 = [
    {
        "country": "Adult Male",
        "litres": <?php echo $count4[0]; ?>
    },
    {
        "country": "Adult Female",
        "litres": <?php echo $count5[0]; ?>
    },
    {
        "country": "Pediatric Male",
        "litres":  <?php echo $count7[0]; ?>
    },
    {
        "country": "Pediatric Female",
        "litres":  <?php echo $count8[0]; ?>
    }
];



            var chart = AmCharts.makeChart("chartdiv2", {
                type: "serial",
                dataProvider: chartData,
                categoryField: "country",
                depth3D: 20,
                angle: 30,

                categoryAxis: {
                    labelRotation: 90,
                    gridPosition: "start"
                },

                valueAxes: [{
                    title: "Adult/Pediatric"
                }],

                graphs: [{

                    valueField: "visits",
                    colorField: "color",
                    type: "column",
                    lineAlpha: 0,
                    fillAlphas: 1
                }],

                chartCursor: {
                    cursorAlpha: 0,
                    zoomable: false,
                    categoryBalloonEnabled: false
                },

                exportConfig: {
                    menuTop: "21px",
                    menuBottom: "auto",
                    menuRight: "21px",
                    backgroundColor: "#efefef",

                    menuItemStyle	: {
                    backgroundColor			: '#EFEFEF',
                    rollOverBackgroundColor	: '#DDDDDD'},

                    menuItems: [{
                        textAlign: 'center',
                        icon: './amcharts/images/export.png',
                        onclick:function(){},
                        items: [{
                            title: 'JPG',
                            format: 'jpg'
                        }, {
                            title: 'PNG',
                            format: 'png'
                        }, {
                            title: 'SVG',
                            format: 'svg'
                        }, {
                            title: 'PDF',
                            format: 'pdf'
                        }]
                    }]
                }
            });
//=======================================

            var chart2 = AmCharts.makeChart("chartdiv1", {
                type: "serial",
                dataProvider: chartData2,
                categoryField: "country",
                depth3D: 20,
                angle: 30,

                categoryAxis: {
                    labelRotation: 90,
                    gridPosition: "start"
                },

                valueAxes: [{
                    title: "Male/Female Population"
                }],

                graphs: [{

                    valueField: "visits",
                    colorField: "color",
                    type: "column",
                    lineAlpha: 0,
                    fillAlphas: 1
                }],

                chartCursor: {
                    cursorAlpha: 0,
                    zoomable: false,
                    categoryBalloonEnabled: false
                },

                exportConfig: {
                    menuTop: "21px",
                    menuBottom: "auto",
                    menuRight: "21px",
                    backgroundColor: "#efefef",

                    menuItemStyle	: {
                    backgroundColor			: '#EFEFEF',
                    rollOverBackgroundColor	: '#DDDDDD'},

                    menuItems: [{
                        textAlign: 'center',
                        icon: './amcharts/images/export.png',
                        onclick:function(){},
                        items: [{
                            title: 'JPG',
                            format: 'jpg'
                        }, {
                            title: 'PNG',
                            format: 'png'
                        }, {
                            title: 'SVG',
                            format: 'svg'
                        }, {
                            title: 'PDF',
                            format: 'pdf'
                        }]
                    }]
                }
            });


//=======================================

            var chart3 = AmCharts.makeChart("chartdiv3", {
                type: "serial",
                dataProvider: chartData3,
                categoryField: "country",
                depth3D: 20,
                angle: 30,

                categoryAxis: {
                    labelRotation: 90,
                    gridPosition: "start"
                },

                valueAxes: [{
                    title: "Patient reg by year"
                }],

                graphs: [{

                    valueField: "visits",
                    colorField: "color",
                    type: "column",
                    lineAlpha: 0,
                    fillAlphas: 1
                }],

                chartCursor: {
                    cursorAlpha: 0,
                    zoomable: false,
                    categoryBalloonEnabled: false
                },

                exportConfig: {
                    menuTop: "21px",
                    menuBottom: "auto",
                    menuRight: "21px",
                    backgroundColor: "#efefef",

                    menuItemStyle	: {
                    backgroundColor			: '#EFEFEF',
                    rollOverBackgroundColor	: '#DDDDDD'},

                    menuItems: [{
                        textAlign: 'center',
                        icon: './amcharts/images/export.png',
                        onclick:function(){},
                        items: [{
                            title: 'JPG',
                            format: 'jpg'
                        }, {
                            title: 'PNG',
                            format: 'png'
                        }, {
                            title: 'SVG',
                            format: 'svg'
                        }, {
                            title: 'PDF',
                            format: 'pdf'
                        }]
                    }]
                }
            });

//===============CHART DATA 4======================

AmCharts.ready(function () {
    // PIE CHART 4
    chart4 = new AmCharts.AmPieChart();
    chart4.dataProvider = chartData4;
    chart4.titleField = "country";
    chart4.valueField = "litres";
    chart4.outlineColor = "#FFFFFF";
    chart4.outlineAlpha = 0.8;
    chart4.outlineThickness = 2;
    chart4.labelText = "";
	
	 var legend = new AmCharts.AmLegend();
    legend.valueText = "";
    chart4.addLegend(legend, "legenddiv");
    
    legend.addListener('hideItem', function (event) {
    chart4.hideSlice(event.dataItem.index);
    });
    
    legend.addListener('showItem', function (event) {
        chart4.showSlice(event.dataItem.index);
    });
	
	
    chart4.write("chartdiv5");
}); 

        </script>
<span style="font-family: Arial; font-size: 10; color: #CC0000;">
		</span>
<div id="chartdiv" style="width: 20%; height: 400px;"></div>
</body>
</html>