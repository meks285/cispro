<?php
include './mandate_/lidh.php';
// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes(strtolower($myusername));
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($con,$myusername);
$mypassword = mysqli_real_escape_string($con,$mypassword);

if (!empty($myusername)) {
$sql="SELECT id,username, password,role FROM members WHERE username='$myusername' and password=md5('$mypassword')";
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
header("location:apptdb.php?username=$myusername");
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
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$myusername','LOGIN: Super User')";
$result=mysqli_query($con,$sql);
}
elseif($count==1 && $info['role']=='Admin'){

// Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword");
$_SESSION['myusername'];
$_SESSION['mypassword'];
header("location:main.php?username=$myusername");
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$myusername','LOGIN: Admin User')";
$result=mysqli_query($con,$sql);
}
elseif($count==1 && $info['role']=='Data'){

// Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword");
$_SESSION['myusername'];
$_SESSION['mypassword'];
header("location:dtentryport.php?username=$myusername");
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$myusername','LOGIN: Data Entry')";
$result=mysqli_query($con,$sql);
}
elseif($count==1 && $info['role']=='Pharm'){

// Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword");
$_SESSION['myusername'];
$_SESSION['mypassword'];
header("location:dtentryportpharm.php?username=$myusername");
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$myusername','LOGIN: Pharmacist')";
$result=mysqli_query($con,$sql);
}
elseif($count==1 && $info['role']=='Lab'){

// Register $myusername, $mypassword and redirect to file "login_success.php"
// session_register("myusername");
// session_register("mypassword");
$_SESSION['myusername'];
$_SESSION['mypassword'];
header("location:dtentryportlab.php?username=$myusername");
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$myusername','LOGIN: Pharmacist')";
$result=mysqli_query($con,$sql);
}

else {
die(header("location:login.php?loginFailed=true&reason=password"));
}
}

?>