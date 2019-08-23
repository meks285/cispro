<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Initial Evaluation Form</title>
</head>


<?php
// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.
session_start();
if(!$_SESSION['myusername']){
header("location:main.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>

<body>
</body>
</html>