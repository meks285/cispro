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
   pepid='$_POST[newpepid]'
   WHERE idpatient='$idpatient'";
   
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
$sql2="UPDATE laboratory 
   SET 
   pepid='$_POST[newpepid]'
   WHERE pepid='$pepid'";
if (!mysqli_query($con,$sql2))
  {
  die('Error: ' . mysqli_error($con));
  }
  
 
$sql4="UPDATE clinicaleval 
   SET 
   pepid='$_POST[newpepid]'
   WHERE pepid='$pepid'";
if (!mysqli_query($con,$sql4))
  {
  die('Error: ' . mysqli_error($con));
  }
  
  
  $sql5="UPDATE pharmacy 
   SET 
   pepid='$_POST[newpepid]'
   WHERE pepid='$pepid'";
if (!mysqli_query($con,$sql5))
  {
  die('Error: ' . mysqli_error($con));
  }

$sql6="UPDATE forlabcispro 
   SET 
   pepid='$_POST[newpepid]'
   WHERE pepid='$pepid'";
if (!mysqli_query($con,$sql6))
  {
  die('Error: ' . mysqli_error($con));
  }
  
 
  
mysqli_close($con);
/*var_dump($_POST)*/
?>
<?php
$sql="UPDATE laboratory 
   SET 
   pepid='$_POST[newpepid]'
   WHERE idpatient='$idpatient'";
  ?>