<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CheckLogin</title>
<script type="text/javascript"></script>
</head>
<body>
<?php
ob_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="Nu66et%%"; // Mysql password
$db_name="apindb"; // Database name
$tbl_name="members"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die(mysql_error());

// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes(strtolower($myusername));
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

if (strpos($myusername,'appt') !== false) {
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password=md5('$mypassword')";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword");
$_SESSION['myusername'];
$_SESSION['mypassword'];
header("location:apptdb.php");
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$myusername','LOGIN: Appointment Database')";
$result=mysql_query($sql);
}
else {
die(header("location:login.php?loginFailed=true&reason=password"));
}
}
elseif (strpos($myusername,'data') !== false || strpos($myusername,'DATA') !== false) {
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password=md5('$mypassword')";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword");
$_SESSION['myusername'];
$_SESSION['mypassword'];
header("location:./main.php?username=$myusername");
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$myusername','LOGIN: DATA ENTRY')";
$result=mysql_query($sql);
}
else {
die(header("location:login.php?loginFailed=true&reason=password"));
}
}
else{
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password=md5('$mypassword')";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword");
$_SESSION['myusername'];
$_SESSION['mypassword'];
header("location:../main.php?username=$myusername");
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$myusername','LOGIN: Admin')";
$result=mysql_query($sql);
}
else {
die(header("location:login.php?loginFailed=true&reason=password"));
}

}

?>

</body>
</html>