<?php
session_start();
$_SESSION=$_POST;
?>

<?php
include '../mandate_/lidh.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$pepid = $_POST['pepid'];  
$idpatient = $_POST['idpatient']; 
 
$sql="UPDATE patient 
   SET 
   surname='$_POST[surname]',
   othernames='$_POST[othernames]'
   WHERE idpatient='$idpatient'";
   
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
header("refresh:3;./pepmngmt.php");
session_write_close();

	echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Name Updated, Please Wait </br> Loading New Page...</span></p> </br> ";
	
 
  
mysqli_close($con);
/*var_dump($_POST)*/
?>
