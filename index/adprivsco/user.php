<?php
session_start();
$con=mysql_connect("localhost","root","Nu66et%%");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}


mysql_select_db('apindb',$con) or die ("could not open db".mysql_error());


$USERNAME = $_GET['USERNAME'];

	$query1 = "delete from members where username='$USERNAME'";
	$result1 = mysql_query ($query1);
    //$info = mysql_fetch_assoc($result);
	echo " ... Deleting User... <br />";
	
echo mysql_error();
session_write_close();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>e-Smart</title>
<link rel="stylesheet" href="jquery.mobile-1.4.2.min.css" type="text/css" />
<link rel="stylesheet" href="jquery.mobile.theme-1.4.2.min.css" />
<script src="jquery-2.1.0.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.4.2.min.js" type="text/javascript"></script>
<script src="jquery.mobile.theme-1.4.2.min.css" type="text/css"></script>
</head>
<body>
<!-- This is the First Page -->
<section id="firstpage" data-role="page" data-fullscreen="true" data-theme="a">
<header data-role="header" data-position="fixed" data-theme="b">
<h1 style="color:#09F">USER DELETED!!!</h1>
</header>
<div data-role="content" align="left">
<a href="./index.php">[Back]</a>

</div>
<footer style="text-align:center" data-role="footer" class="ui-bar" data-position="fixed" data-theme="b">
APIN ©2014
</footer>
</section>
</body>
</html>