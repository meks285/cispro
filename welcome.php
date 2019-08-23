<?php
if(!isset($_GET['username'])){
	header("refresh:0;./login.php?loginFailed=true&reason=SessionExpired");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/normalize.css">    
<link rel="stylesheet" href="css/style.css">

<script type="text/javascript">
{

history.go(1);
 }

</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - Menu</title>
</head>
<BR />
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">FIND PATIENT</h1>
<body onload="if(document.referrer=='') self.location='./index.php';">
<?php
if(isset($_GET["username"])){ 

include './mandate_/lidh.php';
class MyClass{
    public function GetUserInformation(){

$query = "SELECT role
	  FROM members
	  where username='$_GET[username]'";

include 'lidh.php';

        $result = mysqli_query($con,$query);
        $info = mysqli_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysqli_error($con);
if ($info['role']=='Data'){
$uname=$_GET["username"];
echo '<a href="dtentryport.php?username='.$uname.'">[MAIN MENU]</a>&nbsp; &nbsp; &nbsp; &nbsp;'; 
}
else{
$uname=$_GET["username"];
echo '<a href="main.php?username='.$uname.'">[MAIN MENU]</a>&nbsp; &nbsp; &nbsp; &nbsp;'; 
}
}
?><br />
<div class="form">
<div class="tab-content">
        <div id="login">   
<form autocomplete="off">
<div class="field-wrap">
<button class="button button-block"><a href="./patsearch.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue; background-color:white">Adult</a></button>
<button class="button button-block"><a href="./patpedsearch.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue; background-color:white">Pediatric</a></button>
<button class="button button-block"><a href="./patsearchpmtct.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue; background-color:white">PMTCT</span></a></button>
</div>
</form>
</div>
<span style="font-family: Arial; font-size: 10; color: #CC0000;">
		</span>
<div id="chartdiv" style="width: 20%; height: 400px;"></div>
</body>
</html>