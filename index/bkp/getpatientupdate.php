<?php
session_start();
$_SESSION=$_POST;
?>

<?php
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$pepid = $_POST['pepid'];  
if(isset($_POST['address'])){ 
$address = $_POST['address']; 
$address=mysql_real_escape_string($address);
} 
 else {
$address = "";
}

if(isset($_POST['nokaddr'])){ 
$nokaddr = $_POST['nokaddr']; 
$nokaddr=mysql_real_escape_string($nokaddr);
} 
 else {
$nokaddr = "";
}

if(isset($_POST['addrlga'])){ 
$addrlga = $_POST['addrlga']; 
$addrlga=mysql_real_escape_string($addrlga);
} 
 else {
$addrlga = "";
}

if(isset($_POST['addrwardvillage'])){ 
$addrwardvillage = $_POST['addrwardvillage']; 
$addrwardvillage=mysql_real_escape_string($addrwardvillage);
} 
 else {
$addrwardvillage = "";
}

if(isset($_POST['nokwardvillage'])){ 
$nokwardvillage = $_POST['nokwardvillage']; 
$nokwardvillage=mysql_real_escape_string($nokwardvillage);
} 
 else {
$nokwardvillage = "";
}
$sql="UPDATE patient 
   SET 
   hospitalid='$_POST[hospitalid]',
   enroldate='$_POST[enroldate]',
   hivposdate='$_POST[hivposdate]',
   surname='$_POST[surname]',
   othernames='$_POST[othernames]',
   uniqueid='$_POST[uniqueid]',
   sex='$_POST[sex]',
   lga='$_POST[lga]',
   facilityname='$_POST[facilityname]',
   ancno='$_POST[ancno]',
   dob='$_POST[dob]',
   maritalstatus='$_POST[maritalstatus]',
   educationallevel='$_POST[educationallevel]',
   jobstatus='$_POST[jobstatus]',
   address='$address',
   wardvillage='$addrwardvillage',
   town='$_POST[addrtown]',
   addrlga='$addrlga',
   state='$_POST[state]',
   phoneno='$_POST[phoneno]',
   nokname='$_POST[nokname]',
   nokrelationship='$_POST[nokrelationship]',
   nokaddr='$nokaddr',
   nokwardvillage='$nokwardvillage',
   noktown='$_POST[noktown]',
   nokstate='$_POST[nokstate]',
   nokphoneno='$_POST[nokphoneno]'
   WHERE pepid='$pepid'";
   
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
mysqli_close($con);
/*var_dump($_POST)*/
?>
