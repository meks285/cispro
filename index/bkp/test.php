<?php
session_start();
$_SESSION=$_POST;
if(isset($_POST['details'])) {
$details = implode(",", $_POST['details']);
} else {
$details = "";
}
?>

<?php
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id = $_POST['id'];
//$details = $_POST['details'];
$sql="INSERT INTO test1 (id, details)
VALUES
('$id','$details')";


if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo ("1 patient created " . "<br />\n");
echo("PEPFAR ID: " . $_POST['id'] . "<br />\n");
echo("SURNAME: " . $details . "<br />\n");

mysqli_close($con);
session_write_close();
?>
