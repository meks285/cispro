<?php 
session_start();
$_SESSION=$_POST;
$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$query2 = "SELECT pepid FROM patient WHERE pepid = '$_POST[pepid]'";
$result2 = mysql_query($query2,$con);
if (mysql_num_rows($result2)==1){
	class MyClass{
    public function GetUserInformation(){
$hivmode = $_POST['hivmode'];
$careentrypoint = $_POST['careentrypoint'];
$priorart = $_POST['priorart'];

$query = "INSERT INTO visit (visittype,visitdate,pepid)
values('Patient Registration','$_POST[visitdate]','$_POST[pepid]')";
        $info = mysql_query($query);
        return $info;
	} 
	
}

$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();
header('Location: ./welcome.php');
session_write_close();
	
}
else{
	echo "Patient does not exist";
	echo ".";
	echo ".";
	echo ".<br>";
	echo "GOING BACK, in a moment...";
	header("refresh:3;./welcome.php");
	exit();

}
?>