
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="drugcodetranslate.js"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.3.2.js"></script>
<script src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
jQuery(function($){
   $("#pepid").mask("aa-99-9999",{placeholder:" "});
});
</script>


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
#availability_status {
	font-size:11px;
	margin-left:10px;
}
p, h1,h2, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:850px;
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

h1 {
  margin: 0px;
  line-height: 40px;
  font-size: 15px;
  font-weight: bold;
  color: #555;
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
#stylized h2{
font-size:14px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
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
color:#666666;
margin-bottom:20px;
padding-bottom:10px;
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
width:50px;
}

button.blue, a.blue, input[type=submit].blue {
    padding: 10px 30px;
    -webkit-border-radius: 2px 2px;
	margin-left:150px;
    border: solid 1px #3079ed;
    background: #4d90fe; /* Old browsers */
    background: -moz-linear-gradient(top,  #4d90fe 0%, #4787ed 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4d90fe), color-stop(100%,#4787ed)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #4d90fe 0%,#4787ed 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #4d90fe 0%,#4787ed 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #4d90fe 0%,#4787ed 100%); /* IE10+ */
    background: linear-gradient(top,  #4d90fe 0%,#4787ed 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4d90fe', endColorstr='#4787ed',GradientType=0 ); /* IE6-9 */
    color: #fff;
    text-decoration: none;
    cursor: pointer;
    display: inline-block;
    text-align: center;
    font-weight:bold;
    font-family:Arial, Helvetica, sans-serif;
    text-transform:uppercase;
    font-size:11px;
    line-height: 1;
}
 
button.blue:hover, a.blue:hover, input[type=submit].blue:hover {
    border: 1px solid #2f5bb7;
    background: #4d90fe; /* Old browsers */
    background: -moz-linear-gradient(top,  #4d90fe 0%, #357ae8 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4d90fe), color-stop(100%,#357ae8)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #4d90fe 0%,#357ae8 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #4d90fe 0%,#357ae8 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #4d90fe 0%,#357ae8 100%); /* IE10+ */
    background: linear-gradient(top,  #4d90fe 0%,#357ae8 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4d90fe', endColorstr='#357ae8',GradientType=0 ); /* IE6-9 */
    -webkit-box-shadow: 0 1px 1px #333333;
    -moz-box-shadow: 0 1px 1px #333333;
    box-shadow: 0 1px 1px #333333;
}
 
button.blue:active, a.blue:active, input[type=submit].blue:active {
    border: 1px solid #377cea;
    -webkit-box-shadow: inset 0 0 2px 2px #377cea, 0 1px 0 0 #aaa;
    -moz-box-shadow: inset 0 0 2px 2px #377cea, 0 1px 0 0 #aaa;
    box-shadow: inset 0 0 2px 2px #377cea, 0 1px 0 0 #aaa;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro: CQI - Search</title>
</head>

<body>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(../images/bartoszkosowski.jpg) no-repeat center left;">Nigerian Qual Exchange Platform									
</h1>
<a href="javascript:history.go(-1)" style="font-weight:bold; font-size:14px">[BACK]</a>

<div id="stylized" class="myform">
<form id="form" name="form" method="GET" action="NigeriaQualReports.php">
<h2>ENTER SIX MONTH REPORTING PERIOD</h2>
<fieldset>
<legend style="font-weight:bold; font-size:11px"></legend>
<div class="style_form">
<table>
<tr>
<td>
<label for="reppstartm">START MONTH
</label></td><td>
<select name="reppstartm" style="width:120px; height:20px; float:left">
    <option value="1">January</option> 
    <option value="2">February</option>
    <option value="3">March</option>
    <option value="4">April</option> 
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option> 
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option> 
    <option value="11">November</option>
    <option value="12">December</option>
</select></td><td>
<label for="reppstarty">START YEAR
</label></td><td>
<select name="reppstarty" style="width:120px; height:20px; float:left">
    <option value="2007">2007</option> 
    <option value="2008">2008</option> 
    <option value="2009">2009</option> 
    <option value="2010">2010</option> 
    <option value="2011">2011</option> 
    <option value="2012">2012</option> 
    <option value="2013">2013</option> 
    <option value="2014">2014</option> 
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
</select></td></tr>
<tr><td>
<label for="reppendm">END MONTH
</label></td><td>
<select name="reppendm" style="width:120px; height:20px; float:left">
    <option value="1">January</option> 
    <option value="2">February</option>
    <option value="3">March</option>
    <option value="4">April</option> 
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option> 
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option> 
    <option value="11">November</option>
    <option value="12">December</option>
</select></td><td>
<label for="reppendy">END YEAR
</label></td><td>
<select name="reppendy" style="width:120px; height:20px; float:left">
    <option value="2007">2007</option> 
    <option value="2008">2008</option> 
    <option value="2009">2009</option> 
    <option value="2010">2010</option> 
    <option value="2011">2011</option> 
    <option value="2012">2012</option> 
    <option value="2013">2013</option> 
    <option value="2014">2014</option> 
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
    <option value="2021">2021</option>
</select>
</td>
</tr>
</table>

<br />
<span id="availability_status"></span> </div>
</fieldset>
<table>
<tr>
<td><input type="radio" required name="summ" value="Adult">Adult<br></td>
</tr>
<tr>
<td><input type="radio" required name="summ" value="Pediatric">Pediatric<br /></td>
</tr>
</table>

<button class="blue" type="submit"><img src="../images/search.png" /></button>
<div class="spacer"></div>
</form>
</div>
</body>
</html>