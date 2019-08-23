<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
#stylized input{
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
<title>APIN DB - Patient Search</title>
</head>

<body onload="if(document.referrer=='') self.location='./index.php';">
<h1 align="center" style="background-color:#0FF">FIND PATIENT</h1>
<body>
<a href="./index.php" >Logout</a> <br>
<a href="./Welcome.php" >Welcome</a>

<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="patsummary.php">
<h1>ENTER SEARCH CRITERIA</h1>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Patient Identification Number:</legend>
<label>PEPID
<span class="small">PEPFAR ID</span>
</label>
<input type="text" name="pepid" id="pepid" required/>
</fieldset>
<button class="blue" type="submit"><img src="images/search.png" /></button>
<div class="spacer"></div>
</form>
</div>
</body>
</html>