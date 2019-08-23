<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - Login</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<script src="drugcodetranslate.js"></script>
<script type="text/javascript">
	var existing = window.onload;
	window.onload = function()
	{ 
		if(typeof(existing) == "function")
		{
			  existing();
		}
		loadCapsChecker();
	}
	  
	function loadCapsChecker()
	{	
		capsClass = "capLocksCheck";
		capsNotice = "capsLockNotice";
		
		var inputs = document.getElementsByTagName('INPUT');
		var elements = new Array();
		for(var i=0; i<inputs.length; i++)
		{
			if(inputs[i].className.indexOf(capsClass) != -1)
			{
				elements[elements.length] = inputs[i];
			}
		}	
		for(var i=0; i<elements.length; i++)
		{
			if(document.addEventListener)
			{
				elements[i].addEventListener("keypress",checkCaps,"false");
			}
			else
			{
				elements[i].attachEvent("onkeypress",checkCaps);
			}
		}	
	}
	
	function checkCaps(e)
	{
		var pushed = (e.charCode) ? e.charCode : e.keyCode;
		var shifted = false;		
		if(e.shiftKey)
		{
			shifted = e.shiftKey;
		}
		else if (e.modifiers)
		{
			shifted = !!(e.modifiers & 4);
		}			
		var upper = (pushed >= 65 && pushed <= 90);
		var lower = (pushed >= 97 && pushed <= 122);
		if((upper && !shifted) || (lower && shifted))
		{
			if(document.getElementById(capsNotice))
			{
				document.getElementById(capsNotice).style.display = 'block';
			}
			else
			{
				alert("Caps lock is on");
			}
		}
		else if((lower && !shifted) || (upper && shifted))
		{
			if(document.getElementById(capsNotice))
			{
				document.getElementById(capsNotice).style.display = 'none';
			}
		}
	}
</script>
<style type="text/css">
body {
	font-family:Arial, Helvetica, sans-serif
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

#footer {
   position:absolute;
   bottom:0;
   width:99.1%;
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
#copyright{
    clear: both;
    text-align: right;
    font-size: 80%;
    color: #666666;
}

#copyright-apin{
    clear: both;
    text-align: right;
    font-size: 80%;
    color: #666666;
    padding-top: 1px;
}

#copyright-apin span {
	vertical-align: top;
}
#capsLockNotice {
	position: relative;
	display: none;
}
#capsLockNotice img {
	position: absolute;
	left: 180Px;
	top: 88px;	
}

</style>
</head>

<h1 align="center">Clinical Information System</h1>

<p />
<body >
<div id="content">
<IMG STYLE="position:absolute; TOP:60px; LEFT:2px; WIDTH:285px; HEIGHT:140px" src="images/header1.png">
<IMG STYLE="position:absolute; TOP:60px; RIGHT:2px; WIDTH:190px; HEIGHT:140px" src="images/coa.png">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" style="position:inherit; top:200px; left:500" >
<tr>
<div id="capsLockNotice">
        	<img src="./images/capslock-notice.png" title="Caps Lock Is ON" alt="Caps Lock Is ON" />
        </div>
<form name="form1" method="post" action="checklogin.php" autocomplete="off">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
</tr>
<tr>
<td width="78"></td>
<td width="6"></td>
<td width="294"><div class="style_form"><input name="myusername" type="text" id="myusername" class="form_element" placeholder="User name" ><span id="availability_status"></span></div></td>
</tr>
<tr>
<td></td>
<td></td>
<td><div class="style_form"><input name="mypassword" type="password" id="mypassword" class="input capLocksCheck, form_element" onkeypress="checkCapsLock( event )" placeholder="Password" required><?php $reasons = array("password" => "Wrong Username or Password", "blank" => "You have left one or more fields blank."); if(isset($_GET["loginFailed"])) echo $reasons[$_GET["reason"]]; ?><span id="availability_status"></span></div></td>
</tr>
<tr>
<td><br /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><button class="gray" type="submit" >Login</button></td>
</tr>
</table>
</form>
</tr>
</table>
</div>
<div id="footer">
<div id="copyright-apin"><a href="http://www.apin.org.ng/"><img src="images/apin_label.png" alt="APIN" width="39" height="15" /></a>&nbsp;&nbsp;<span>&copy; 2014, AIDS Prevention Initiative in Nigeria, Ltd./Gte (APIN)</span></div>
</div>
</body>
</html>