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
if (mysql_num_rows($result2)==0){
	class MyClass{
    public function GetUserInformation(){
$pepid = $_POST['pepid'];
$pepid = strtoupper($pepid);
if(isset($_POST['ancno'])){ 
$ancno = $_POST['ancno']; 
} 
 else {
$ancno = "";
}
if(isset($_POST['educationallevel'])){ 
$educationallevel = $_POST['educationallevel']; 
} 
 else {
$educationallevel = "";
}
if(isset($_POST['maritalstatus'])){ 
$maritalstatus = $_POST['maritalstatus']; 
} 
 else {
$maritalstatus = "";
}
if(isset($_POST['jobstatus'])){ 
$jobstatus = $_POST['jobstatus']; 
} 
 else {
$jobstatus = "";
}
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



$query = " INSERT INTO patient (pepid, uniqueid, hospitalid,surname,state, othernames,sex,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate,hivposdate)
VALUES
('$pepid','$_POST[uniqueid]','$_POST[hospitalno]','$_POST[surname]','$_POST[state]','$_POST[othernames]','$_POST[sex]',
'$_POST[lga]','$_POST[facilityname]',
'$ancno','$_POST[dob]','$maritalstatus','$educationallevel','$jobstatus','$address',
'$addrwardvillage','$_POST[addrtown]','$addrlga','$_POST[phoneno]','$_POST[nokname]','$nokaddr','$nokwardvillage','$_POST[noktown]',
'$_POST[nokstate]','$_POST[nokrelationship]','$_POST[nokphoneno]','$_POST[visitdate]','$_POST[hivposdate]')"; 
 
        $info = mysql_query($query);
        return $info;
	} 
	
}

$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();
header("refresh:4;./newpatientiniteval.php");
session_write_close();

	$query4="insert into visit(visittype,visitdate,pepid) values('Patient Registration','$_POST[visitdate]','$_POST[pepid]')";
	$result4 = mysql_query($query4,$con);
	echo mysql_error();
	echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Patient registered, Please Wait </br> Loading Clinical Evaluation...</span></p> </br> ";
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$_POST[username]','CREATE: $_POST[pepid]')";
$result=mysql_query($sql);

	
}
else{
	echo "Patient: ".$_POST['pepid']." already exists<br>";
	$query3 = "SELECT pepid FROM visit WHERE pepid = '$_POST[pepid]'";
	$result3 = mysql_query($query3,$con);
    if (mysql_num_rows($result3)==0){
	$query4="insert into visit(visittype,visitdate,pepid) values('Patient Registration','$_POST[visitdate]','$_POST[pepid]')";
	$result4 = mysql_query($query4,$con);
	echo mysql_error();
	echo "Visit record created...";
	echo "GOING FORWARD...";
	header("refresh:3;./newpatient.php");
	}
	else{
	echo "Patient: ".$_POST['pepid']." already registered in visit table";
	echo ".";
	echo ".";
	echo ".<br>";
	echo "GOING BACK, in a moment...";
	header("refresh:3;./registration.php");
	exit();
	}

}
?>
   </body>
   </html>