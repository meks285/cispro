<?php
if(!isset($_GET['username'])){
	header("refresh:0;./login.php?loginFailed=true&reason=SessionExpired");
}
include './mandate_/lidh.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


if(mysqli_num_rows(mysqli_query($con,"select fac_location from patient where fac_location is not null"))==0){
	$results_CX = mysqli_query($con,"update patient set fac_location=(select state from facility limit 1);");
}
else {
		
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
<link rel="stylesheet" href="css/normalize.css">    
<link rel="stylesheet" href="css/style.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - Menu</title>
</head>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">MAIN MENU &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
<body onload="if(document.referrer=='') self.location='./index.php';">
<a href="misc/logoutclrhistory.php" style="font-weight:bold; font-size:14px; color:#F00">LOGOUT</a>
<div class="sidebar">
<fieldset>
<legend style="font-weight:bold; font-size:11px">Done For the Day?</legend>
<a href="BACKUP/backup.php" style="font-weight:bold; font-size:14px; color:#0F5">Backup CIS Pro</a>
</fieldset>
</div>
<br />
<div class="form">
<div class="tab-content">
        <div id="login">   
<form autocomplete="off">
<div class="field-wrap">
<button class="button button-block"><a href="./registration.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue; background-color:white">New Patient</a></button>
<button class="button button-block"><a href="./welcome.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue; background-color:white">Old Patient</a></button>
<button class="button button-block"><a href="./reports.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue; background-color:white">Reports</a></button>
<button class="button button-block"><a href="./blankforms.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue; background-color:white">Blank Forms</a></button>
<button class="button button-block"><a href="./audit_trails.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue; background-color:white">Audit</a></button>
<button class="button button-block"><a href="./registry_pmtct/?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue; background-color:white">PMTCT REGISTRY</a></button>
<button class="button button-block"><a href="./ndrissueresolve.php/?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue; background-color:white">NDR RECONCILIATION</a></button>
</div>
</form>
</div>
<input name="myusername" type="hidden" id="myusername" class="form_element" value="<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" />
</body>
</html>