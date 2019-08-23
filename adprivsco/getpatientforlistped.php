<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src="drugcodetranslate.js"></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.3.2.js"></script>
<script src="js/jquery.maskedinput.js"></script>
<script type="text/javascript">
jQuery(function($){
   $("#newpepid").mask("aaa-99-9999",{placeholder:" "});
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

$("#newpepid").change(function(e){ //if theres a change in the PEPID textbox

var pepid = $("#newpepid").val();//Get the value in the pepid drugcode textbox
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
	$("#availability_status").html('<img src="images/available.png" align="absmiddle"> <font color="Green"> ID Available </font>  ');
	//add this image to the span with id "availability_status"
	 $("#newpepid").val(pepid);
	}  
	else  if(server_response == '1')//if it returns "1"
	{  
	 $("#availability_status").html('<img src="images/not_available.png" align="absmiddle"> <font color="Red">ID Already in Use</font>');
	 $("#newpepid").val("");
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
<?php
session_start();

include '../lidh.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$_SESSION=$_GET;

class MyClass{
    public function GetUserInformation(){
		include '../lidh.php';
		$pepid=$_GET['pepid'];
$query = "SELECT idpatient, pepid,surname,othernames
FROM patient WHERE pepid = '$pepid'";
        $result = mysqli_query($con,$query);
        $info = mysqli_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysqli_error($con);
?>
<script src="../drugcodetranslate.js"></script>
<script src="../drugcodetranslate.js"></script>
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
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: normal;
font-weight: normal;
color: #000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
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
width:100px;
float:left;
font-size:10px;
color:#666666;
}
.sidebar {
   width: 170px;
   height: 0px;
   position: fixed;
   left: 0px;
   top: 150px;
   font-family: Tahoma, Geneva, sans-serif;
   font-style: normal;
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

#stylized option{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
.tops{
   top: 8px;
   position: fixed;
   width:1335px;
	}

#stylized .small{
color:#666666;
display:block;
font-size:10px;
font-weight:normal;
text-align:left;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
margin:2px 0 20px 10px;
text-align:left;
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

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - Update ID</title>

</head>
<div class="tops">
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">PATIENT ID CHANGE:&nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>

<a href="javascript:history.go(-1)" style="font-weight:bold; font-size:14px; color:#2A00FF">[BACK]</a>
</div>
<br />
<br />
<br />
<br />
<body onload="if(document.referrer=='') self.location='./index.php'">
<div id="stylized" class="myform">
<form id="formId" name="form" method="POST" action="r-i-penetrate.php">
<fieldset style="width:822px; height:20px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">1. Patient Surname</span>
</label>
<input type="hidden" name="surname" id="surname" required="required" placeholder="Required" value="<?php echo $info['surname']?>" style="width:120px; height:10px;"/>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
       <label>
<span class="small" style="font-weight:bold">2. Other names</span>
</label>
<input type="hidden" name="othernames" id="othernames" required="required" placeholder="Required" value="<?php echo $info['othernames']?>" style="width:120px; height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<br />
<fieldset style="width:822px; height:30px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">OLD Patient ID</span>
</label>
<input type="text" name="pepid" id="pepid" required="required" readonly value="<?php echo $info['pepid']?>" style="width:120px; height:10px; font-weight:bold" />
<input type="text" name="idpatient" id="idpatient" required="required" readonly value="<?php echo $info['idpatient']?>" style="width:30px; height:10px; font-weight:bold" />

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">NEW Patient ID</span>
</label>
<input type="text" name="newpepid" id="newpepid" required style="width:120px; height:10px; font-weight:bold" />

        </fieldset>
         </div>        
         <div style="display: table-cell;"> 
<span id="availability_status"></span>
         </div>
    </div>
</div>
</fieldset>
<button type="submit" id="submit">UPDATE Patient ID</button>
<div class="spacer"></div>
</form>


</div>
</body>
</head>