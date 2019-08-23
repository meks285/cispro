<?php 
ob_start();
session_start();
$host="169.255.59.5"; // Host name
$username="trustcor_admin"; // Mysql username
$password="Nu66et%%"; // Mysql password
$db_name="trustcor_trustcoregrp"; // Database name

// Connect to server and select databse.
$con=mysqli_connect("$host","$username","$password","$db_name");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to CIS Pro: " . mysqli_connect_error();
  }
  else{
	  echo "Connected!";
  }
  $query4="INSERT INTO `current_details`(`id`, `bank_name`, `account_num`, `bank_balance`, `loan_out_amt`) 
VALUES (2,'MeksyBank','0021213343',12110,20000)";
	$result4 = mysqli_query($con,$query4);
echo mysqli_error($con);
?>