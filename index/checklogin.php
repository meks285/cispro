<?php
ob_start();
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="Nu66et%%"; // Mysql password
$db_name="apindb"; // Database name
$tbl_name="members"; // Table name

// Connect to server and select databse.
$con=mysqli_connect("$host","$username","$password","$db_name");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to CIS Pro: " . mysqli_connect_error();
  }
// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes(strtolower($myusername));
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

if (!empty($myusername)) {
$sql="SELECT id,username, password,role FROM $tbl_name WHERE username='$myusername' and password=md5('$mypassword')";
$result=mysqli_query($con,$sql);
$info = mysqli_fetch_assoc($result);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1 && $info['role']=='Appt'){

// Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword");
$_SESSION['myusername'];
$_SESSION['mypassword'];
header("location:apptdb.php");
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$myusername','LOGIN: Appointment Database')";
$result=mysqli_query($con,$sql);
}
elseif($count==1 && $info['role']=='Super'){

// Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword");
$_SESSION['myusername'];
$_SESSION['mypassword'];
header("location:adprivsco");
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$myusername','LOGIN: Manager'.$myusername)";
$result=mysqli_query($con,$sql);
}
elseif($count==1 && $info['role']=='Admin'){

// Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword");
$_SESSION['myusername'];
$_SESSION['mypassword'];
header("location:main.php");
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$myusername','LOGIN: Manager'.$myusername)";
$result=mysqli_query($con,$sql);
}
elseif($count==1 && $info['role']=='Data'){

// Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword");
$_SESSION['myusername'];
$_SESSION['mypassword'];
header("location:./index/main.php?username=$myusername");
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$myusername','LOGIN: Manager'.$myusername)";
$result=mysqli_query($con,$sql);
}

else {
die(header("location:login.php?loginFailed=true&reason=password"));
}
}

?>