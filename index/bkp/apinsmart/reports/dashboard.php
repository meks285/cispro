<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>APIN e-Smart</title>
<style>
ul{
display:inline;
	}
header{
	color:#FFFBF0;
	background-color:#7FFFAA;
	}
#horizontalmenu ul {
padding:1; margin:1; list-style:none;
}
#horizontalmenu li {
float:left; position:relative; padding-right:200; display:block;
}
#horizontalmenu li ul {
    display:none;
position:absolute;
}
#horizontalmenu li:hover ul{
    display:table;
    background:#FFFBF0;
height:auto; width:auto;
}
#horizontalmenu li ul li{
    clear:both;
border-style:none;
}
#sidebar {
	height: 400px;
	width: 200px;
	float: left;
	margin-right: 5px;
	padding: 5px 0 0 5px;
	line-height: 40px;
  	font-size: 15px;
  	font-weight: bold;
  	color: #555;
  	text-align: center;
  	text-shadow: 0 1px white;
  	background: #f3f3f3;
  	border-radius: 3px 3px 0 0;
  	background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  	background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  	background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  	background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
  	-webkit-box-shadow: 0 1px whitesmoke;
}	font-family:Arial, Helvetica, sans-serif
}
#availability_status {
	font-size:11px;
	margin-left:10px;
}
input.form_element {
	width: 221px;
	background: transparent url('bg.jpg') no-repeat;
	color : #747862;
	height:20px;
	border:0;
	padding:4px 8px;
	margin-bottom:0px;
}
label {
	width: 125px;
	float: left;
	text-align: left;
	margin-right: 0.5em;
	display: block;
}
.style_form {
	margin:3px;
}
#content {
	margin-left: auto;
	margin-right: auto;
	width: 600px;
	margin-top:200px;
}
#submit_btn {
	margin-left:133px;
	height:30px;
	width: 221px;
}

h1 {
  margin: 0px;
  line-height: 40px;
  font-size: 15px;
  font-weight: bold;
  color: #555;
  text-align: center;
  text-shadow: 0 1px white;
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

h2 {
  margin: 0px;
  line-height: 40px;
  font-size: 15px;
  font-weight: bold;
  color: #555;
  text-align: center;
  text-shadow: 0 1px white;
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


#footer {
   position:absolute;
   bottom:0;
   width:99.1%;
   height:15px;   /* Height of the footer */
   background:#6cf;
   font-size:9px;
}

button.gray, a.gray, input[type=submit].gray {
    padding: 10px 10px;
    -webkit-border-radius: 2px 2px;
    border: solid 1px #dadada;
    background: #f4f4f4; /* Old browsers */
    background: -moz-linear-gradient(top,  #f4f4f4 0%, #f1f1f1 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f4f4f4), color-stop(100%,#f1f1f1)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #f4f4f4 0%,#f1f1f1 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #f4f4f4 0%,#f1f1f1 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #f4f4f4 0%,#f1f1f1 100%); /* IE10+ */
    background: linear-gradient(top,  #f4f4f4 0%,#f1f1f1 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4f4f4', endColorstr='#f1f1f1',GradientType=0 ); /* IE6-9 */
    color: #555;
    text-decoration: none;
    cursor: pointer;
    display: inline-block;
    text-align: center;
    font-weight:bold;
    font-family:Arial, Helvetica, sans-serif;
    text-shadow: 0px 1px 1px rgba(255,255,255,1);
    line-height: 1;
    font-size:11px;
}
 
.gray:hover { 
    border:1px solid #c6c6c4; 
    background: background: #f8f8f8; /* Old browsers */
    background: -moz-linear-gradient(top,  #f8f8f8 0%, #f1f1f1 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f8f8f8), color-stop(100%,#f1f1f1)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #f8f8f8 0%,#f1f1f1 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #f8f8f8 0%,#f1f1f1 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #f8f8f8 0%,#f1f1f1 100%); /* IE10+ */
    background: linear-gradient(top,  #f8f8f8 0%,#f1f1f1 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f1f1f1',GradientType=0 ); /* IE6-9 */
    color: #222; 
    -webkit-box-shadow: 0px 1px 1px 0px rgba(10, 10, 10, 0.4);
    -moz-box-shadow: 0px 1px 1px 0px rgba(10, 10, 10, 0.4);
    box-shadow: 0px 1px 1px 0px rgba(10, 10, 10, 0.4);
}
         
.gray:active { 
    border:1px solid #c6c6c4; 
    color: #222;
    -webkit-box-shadow: inset 0 0 2px 4px #f1f1f1, 0 1px 0 0 #eeeeee;
    -moz-box-shadow: inset 0 0 2px 4px #f1f1f1, 0 1px 0 0 #eeeeee;
    box-shadow: inset 0 0 2px 4px #f1f1f1, 0 1px 0 0 #eeeeee;
}
form{
	border:0;
	margin:0;
	padding:0;
	}
.myform{
	margin:0 auto;
	width:500px;
	padding:14px;
	}
/* ----------- stylized ----------- */
#stylized{
border:solid 1px #b7ddf2;
background:#ebf4fb;
}

#stylized1{
border:solid 1px #b7ddf2;
background:#ebf4fb;
}
#stylized p{
	font: bold 12px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
	color: #6D929B;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:20px;
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
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
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
</style>
</head>
<h1 align="center" style="background-color:#0FF">APIN e-Smart Reporting: DASHBOARD</h1>
<h2 align="center" style="background-color:#0FF"><?php echo date('l, F jS, Y'); ?></h2>
<header>
<div id="horizontalmenu">
</div>
</header>
<body>
<div id="sidebar">
<a href="getreports.html">Reports</a><br />
<a href="getsummaries.html">Summaries</a>
</div>
<p></p>
<div id="stylized" class="myform">
<form>
<?php 
include('database_connection.php');
$query1 = "select count(*) from phcs";
            $result1 = mysql_query($query1);
            $count1 = mysql_fetch_array($result1);
echo "<div style ='
font: italic bold 12px Verdana, Arial, Helvetica,sans-serif;
color:blue;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:15px;
'>Total Facility Count: </div>".$count1[0];
?>
</form>
</div>
<p></p>
<div id="stylized" class="myform">
<form>
<?php 
include('database_connection.php');
$query1 = "select count(*) from indicators where rmonth=MONTHNAME(CURDATE())";
            $result1 = mysql_query($query1);
            $count1 = mysql_fetch_array($result1);
echo "<div style ='
font: italic bold 12px Verdana, Arial, Helvetica,sans-serif;
color:blue;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:15px;
'>Submitted Reports - Current Month: </div>".date('F')." : ".$count1[0];
?>
<?php 
include('database_connection.php');
$query1 = "select count(*) from indicators where rmonth=DATE_FORMAT(LAST_DAY(NOW() - INTERVAL 1 MONTH), '%M')";
            $result1 = mysql_query($query1);
            $count1 = mysql_fetch_array($result1);
echo "<div style ='
font: italic bold 12px Verdana, Arial, Helvetica,sans-serif;
color:blue;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:15px;
'>Submitted Reports - Previous Month: </div>".date("F", strtotime("-1 months"))." : ".$count1[0];
?>

</form>
</div>

</body>
</html>