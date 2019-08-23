<html>
<head>
<title>Processing_Insert_main</title>
<script language="javascript">
var max_time = 5;
var cinterval;
 
function countdown_timer(){
  // decrease timer
  max_time--;
  document.getElementById('countdown').innerHTML = max_time;
  if(max_time == 0){
    clearInterval(cinterval);
  }
}
// 1,000 means 1 second.
cinterval = setInterval('countdown_timer()', 1000);
</script>
</head>

<body>
<?php 
$_SESSION=$_POST;
include '../mandate_/lidh.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$query2 = "SELECT username FROM members WHERE username = '$_POST[username]'";
$result2 = mysqli_query($con,$query2);
if (mysqli_num_rows($result2)==0){
	class MyClass{
    public function GetUserInformation(){
include '../mandate_/lidh.php';
$query = "INSERT INTO members (username, password, role,creationdate)
VALUES('$_POST[username]',md5('$_POST[password]'),'$_POST[role]','$_POST[createdate]')"; 
 
        $info = mysqli_query($con,$query);
        return $info;
	} 
	
}

$class = new MyClass;
$info = $class->GetUserInformation();
echo mysqli_error($con);
header("refresh:4;./newuser.php");
session_write_close();

	echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> New User Created, Please Wait </br> Loading New Page...</span></p> </br> ";
	
}
else{
	echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> This Username is already registered with CIS Pro. </br> Loading New Page...</span></p> </br> ";
	}
?>
 </body>
</html>