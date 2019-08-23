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
?>  