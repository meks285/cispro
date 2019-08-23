<?php
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$sql="UPDATE patient SET hospitalid='$_POST[hospitalno]', 
   lga='$_POST[lga]',
   facilityname='$_POST[facilityname]',
   ancno='$_POST[ancno]',
   maritalstatus='$_POST[maritalstatus]',
   educationallevel='$_POST[educationallevel]',
   jobstatus='$_POST[jobstatus]',
   address='$_POST[address]',
   wardvillage='$_POST[addrwardvillage]',
   town='$_POST[addrtown]',
   addrlga='$_POST[addrlga]',
   phoneno='$_POST[phoneno]',
   nokname='$_POST[nokname]',
   nokaddr='$_POST[nokaddr]',
   nokwardvillage='$_POST[nokwardvillage]',
   noktown='$_POST[noktown]',
   nokstate='$_POST[nokstate]',
   nokrelationship='$_POST[nokrelationship]',
   nokphoneno='$_POST[nokphoneno]' 
   WHERE pepid='$_POST[pepid]'";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
echo "Update successful... Redirecting, Please wait...";
mysqli_close($con);
header("refresh:5;./welcome.php");
/*var_dump($_POST)*/
?>
