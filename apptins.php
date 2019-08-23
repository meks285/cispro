<?php
session_start();
$_SESSION=$_POST;
$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");



$query2 = "SELECT pepid FROM patient WHERE pepid = '$_POST[pepid]'";
$result2 = mysql_query($query2,$con);
if (mysql_num_rows($result2)==1){
		class MyClass{

public function GetUserInformation(){
if(isset($_POST['purpose'])) {
$purpose = implode(", ", $_POST['purpose']);
} else {
$purpose = "";
}

$query = "INSERT into appointment(pepid, visitdate, nextapptdate, purpose) VALUES('$_POST[pepid]','$_POST[visitdate]','$_POST[nextapptdate]','$purpose')";

        
        $info = mysql_query($query);
        return $info;
	} 
	
}

$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();
header("refresh:4;./apptpat.php");
session_write_close();

	echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color:  #003366;'> New APPOINTMENT CREATED, Please Wait </br></br> Loading New Page...</span></p> </br> ";


}
else{
	echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color:red;'>Patient not Existing on CIS Pro. </br>   Reversing APPOINTMENT CREATE...</span></p> </br> ";
	echo "</br></br>";
	echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: red;'> <a href=\"./apptpat.php\" style=\"font-weight:bold; font-size:14px\">[BACK]</a>";
	}


?>