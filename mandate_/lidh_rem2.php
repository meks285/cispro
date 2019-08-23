<?php 
ob_start();
session_start();
$host="52.22.221.103"; // Host name
$username="appsapin"; // Mysql username
$password="9001Memday"; // Mysql password
$db_name="appsapin_apindb"; // Database name

// Connect to server and select databse.
$con=mysqli_connect("$host","$username","$password","$db_name");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to CIS Pro: " . mysqli_connect_error();
  }
  else{
	  echo "Connected!!!";
  }
?>