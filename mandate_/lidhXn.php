<?php 
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="Nu66et%%"; // Mysql password
$db_name="apindb"; // Database name

// Connect to server and select databse.
$con=mysql_connect("$host","$username","$password","$db_name");

mysql_select_db("apindb", $con);
// Check connection
if (mysql_error())
  {
  echo "Failed to connect to CIS Pro: " . mysqli_connect_error();
  }
?>