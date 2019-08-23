<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="drugcodetranslate.js"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.3.2.js"></script>

<script type="text/javascript">
jQuery(function($){
   $("#pepid").mask("aa-99-9999",{placeholder:" "});
});
</script>

<script type="text/javascript">
{

history.go(1);
 }

</script>
<script type="text/javascript">

$(document).ready(function()//When the dom is ready 
{
$("#pepid").change(function(e){ //if theres a change in the PEPID textbox

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
<script type="text/javascript"> 

function stopRKey(evt) { 
  var evt = (evt) ? evt : ((event) ? event : null); 
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
  if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
} 

document.onkeypress = stopRKey; 

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
width:950px;
padding:14px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: normal;
font-weight: bold;
color: #000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
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
.tops{
   top: 8px;
   position: fixed;
   width:1335px;
	}
/* ----------- stylized ----------- */
#stylized{
border:solid 1px #b7ddf2;
background:# FFF;
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
float:left;
font-size:10px;
color:#666666;
}
#stylized option{
display:block;
font-weight:bold;
text-align:right;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:10px;
font-weight:normal;
text-align:left;
}
input{
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

td {
	font: italic 11px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
}
#stylized .radio-toolbar input[type="radio"] {
font-weight:normal;
text-align:right;
float:left;
padding-right:0px;
width:20px;
}
#stylized .radio-toolbar label {
display:block;
font-weight:normal;
text-align:right;
float:left;
padding-right:0px;
position:absolute;
margin:1px 0 0px 10px;
}
#stylized .radio-toolbar input{
float:left;
padding-right:50px;
margin:1px 0 0px 10px;
position:inherit;
}
#stylized .check-toolbar input[type="checkbox"] {
font-weight:normal;
text-align:right;
float:left;
padding-right:0px;
width:20px;
}
#stylized .check-toolbar label {
display:block;
font-weight:normal;
text-align:right;
float:left;
padding-right:0px;
position:absolute;
margin:1px 0 0px 10px;
}
#stylized .check-toolbar input{
float:left;
padding-right:50px;
margin:1px 0 0px 10px;
position:inherit;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - ndr</title>
</head>

<body onload="if(document.referrer=='') self.location='./index.php'; document.forms.form.pepid.focus()">
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">NDR GENERATION</h1>
<a href="../main.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px">MAIN MENU</a>

<div id="stylized" class="myform">
<form id="form" name="form" method="GET" action="../ndrindvxmlgen.php">
<h2>ENTER SEARCH CRITERIA and Click the BUTTON</h2>
<fieldset>
<legend style="font-weight:bold; font-size:11px">SELECT NDR type, Last Day of Last Month NDR Generation</legend>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="condition" id="initial" value="INITIAL"  onchange="anccheck()" />INITIAL
<br /> <label for="sex">NDR Type</label></td>
<td><input type="radio" name="condition" id="updated" value="UPDATED"  onchange="anccheck()"/>UPDATED</td>
</tr>
</table>
<br />
<table>
<tr>
<td><input type="date" name="dolupload" required="required" style="width:120px; height:20px;" />Last Day of Last Upload Month</td></td>
</tr>
</table>
</fieldset>
<button class="blue" type="submit"><img src="images/search.png" /></button>
<div class="spacer"></div>
</form>
</div>
</body>
</html>