<?php
if(!isset($_GET['username'])){
	header("refresh:0;./login.php?loginFailed=true&reason=SessionExpired");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<script type="text/javascript">
{

history.go(1);
 }

</script>
<link rel="stylesheet" href="../css/normalize.css">    
<link rel="stylesheet" href="../css/style.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - Menu</title>
</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">NDR RECONCILIATION &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
<body onload="if(document.referrer=='') self.location='./index.php';">
<a href="../main.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px;">MAIN MENU</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="sidebar">
<fieldset>
</fieldset>
</div>
<br />
<div class="form">
<div class="tab-content">
        <div id="login">   
<form autocomplete="off">
<div class="field-wrap">
<button class="button button-block"><a href="../ndrrecon.php/?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue; background-color:white">NDR RECONCILIATION</a></button>
<button class="button button-block"><a href="../ndrgenxml.php/?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue; background-color:white">REGENERATE XML</a></button>
</div>
</form>
</div>
<input name="myusername" type="hidden" id="myusername" class="form_element" value="<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" />
</body>
</html>