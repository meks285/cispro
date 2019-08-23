<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="drugcodetranslate.js"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.3.2.js"></script>
<script src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
jQuery(function($){
   $("#pepid").mask("aaa-99-9999",{placeholder:" "});
});
</script>

<script type="text/javascript">
$(document).ready(function()//When the dom is ready 
{
$("#pepid").change(function() 
{ //if theres a change in the PEPID textbox

var pepid = $("#pepid").val();//Get the value in the pepid drugcode textbox
if(pepid.length > 0)//if the lenght greater than 0 characters
{
$("#availability_status").html('<img src="images/loader.gif" align="absmiddle">&nbsp;Checking for patient...');
//Add a loading image in the span id="availability_status"

$.ajax({  //Make the Ajax Request
    type: "POST",  
    url: "patient_exists.php",  //file name
    data: "pepid="+ pepid,  //data
    success: function(server_response){  
   
   $("#availability_status").ajaxComplete(function(event, request){ 

	if(server_response == '0')//if ajax_check_drugcode.php return value "0"
	{ 
	$("#availability_status").html('<img src="images/not_available.png" align="absmiddle"> <font color="Red"> Patient Does not Exist </font>  ');
	//add this image to the span with id "availability_status"
	 $("#pepid").val("");
	// $("#pepid").focus();
	}  
	else  if(server_response == '1')//if it returns "1"
	{  
	 $("#availability_status").html('<img src="images/available.png" align="absmiddle"> <font color="Green">Patient Exists</font>');
	 $("#pepid").val(pepid);
	}  
   
   });
   } 
   
  }); 

}
else
{

$("#availability_status").html('<font color="#cc0000">pepid too short</font>');
//if in case the drugcode is less than or equal 3 characters only 
}



return false;
});

});
</script>
<head>
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
<title>CiS Pro - Search</title>
</head>

<body onload="if(document.referrer=='') self.location='./index.php';document.forms.form.pepid.focus()">
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">PATIENTS REGISTERED TODAY</h1>
<a href="./registration.php" style="font-weight:bold; font-size:14px">[BACK]</a>

<div id="stylized" class="myform">
<form id="form" name="form" method="GET" action="">
<h2></h2>
<?php 
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT pepid, surname,othernames, age, sex,created_on
from patient 
where DATE(created_on)=CURRENT_DATE()
order by created_on desc");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th></th>
<th>PATIENT ID</th>
<th>SURNAME</th>
<th>OTHER NAMES</th>
<th>AGE</th>
<th>SEX</th>
<th>CREATED ON</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
	  if( $row['age']>14){
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a href="getpatient.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '">VIEW</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['created_on'] . "</td>";
  echo "</tr>";
	  }
	  else {
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a href="pedpatientbrowse.php?pepid=' . $row['pepid'] . '&amp;surname=' . $row['surname'] . '">VIEW</a></td>';
  echo "<td>" . $row['pepid'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "<td>" . $row['othernames'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['created_on'] . "</td>";
  echo "</tr>";
		  }
  }
echo "</table>";
echo "<br>";

echo "Total patients registered today: ".$num;

mysqli_close($con);

session_write_close();


?>
</form>
</div>
</body>
</html>