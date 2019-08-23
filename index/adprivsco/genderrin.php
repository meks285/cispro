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
$idpatient = $_POST['idpatient']; 
 
$sql="UPDATE patient 
   SET 
   sex='$_POST[sex]'
   WHERE idpatient='$idpatient'";
   
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
header("refresh:2;./pepmngmt.php");
session_write_close();

	echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Patient Sex Updated, Please Wait </br> Loading New Page...</span></p> </br> ";
	
 
  
mysqli_close($con);
/*var_dump($_POST)*/
?>
