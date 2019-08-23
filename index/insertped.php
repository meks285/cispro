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

include './mandate_/lidh.php';

$_SESSION=$_POST;

$query2 = "SELECT pepid FROM patient WHERE pepid = '$_POST[pepid]'";
$result2 = mysqli_query($con,$query2);  
if (mysqli_num_rows($result2)==0){
	class MyClass{
    public function GetUserInformation(){

if(isset($_POST['pmothername'])) {
$pmothername=$_POST['pmothername'];
}else {
$pmothername="";
}

if(isset($_POST['pmotheradd'])) {
$pmotheradd=$_POST['pmotheradd'];
$pmotheradd=mysql_real_escape_string($pmotheradd);
}else {
$pmotheradd="";
}

if(isset($_POST['pfathername'])) {
$pfathername=$_POST['pfathername'];
}else {
$pfathername="";
}

if(isset($_POST['pfatheradd'])) {
$pfatheradd=$_POST['pfatheradd'];
$pfatheradd=mysql_real_escape_string($pfatheradd);
}else {
$pfatheradd="";
}

if(isset($_POST['jobstatusmother'])) {
$jobstatusmother=$_POST['jobstatusmother'];
}else {
$jobstatusmother="";
}

if(isset($_POST['jobstatusfather'])) {
$jobstatusfather=$_POST['jobstatusfather'];
}else {
$jobstatusfather="";
}

if(isset($_POST['jobstatuscaregiver'])) {
$jobstatuscaregiver=$_POST['jobstatuscaregiver'];
}else {
$jobstatuscaregiver="";
}

if(isset($_POST['educationallevelchild'])) {
$educationallevelchild=$_POST['educationallevelchild'];
}else {
$educationallevelchild="";
}

if(isset($_POST['educationallevelmother'])) {
$educationallevelmother=$_POST['educationallevelmother'];
}else {
$educationallevelmother="";
}

if(isset($_POST['educationallevelfather'])) {
$educationallevelfather=$_POST['educationallevelfather'];
}else {
$educationallevelfather="";
}

if(isset($_POST['educationallevelcaregiver'])) {
$educationallevelcaregiver=$_POST['educationallevelcaregiver'];
}else {
$educationallevelcaregiver="";
}
if(isset($_POST['pchildliveswith'])) {
$pchildliveswith=$_POST['pchildliveswith'];
}else {
$pchildliveswith="";
}

if(isset($_POST['address'])) {
$address=$_POST['address'];
$address=mysql_real_escape_string($address);
}else {
$address="";
}
if(isset($_POST['pcaregiversrelationshipstatus
'])) {
$pcaregiversrelationshipstatus
=$_POST['pcaregiversrelationshipstatus
'];
$address=mysql_real_escape_string($pcaregiversrelationshipstatus
);
}else {
$pcaregiversrelationshipstatus
="";
}
if(isset($_POST['addrwardvillage'])) {
$addrwardvillage=$_POST['addrwardvillage'];
$addrwardvillage=mysql_real_escape_string($addrwardvillage);
}else {
$address="";
}

if(isset($_POST['addrlga'])) {
$addrlga=$_POST['addrlga'];
$addrlga=mysql_real_escape_string($addrlga);
}else {
$addrlga="";
}

$pepid = $_POST['pepid'];
$pepid = strtoupper($pepid);

$query = "INSERT INTO patient (pepid, uniqueid,surname, othernames,sex,lga,facilityname,dob,pmotheralive,pmothername,pmotheradd,pfatheralive,pfathername,pfatheradd,pcaregiversrelationshipstatus,psiblings,pchildliveswith,hivposdate,enroldate,jobstatusfather,jobstatusmother,jobstatuscaregiver,educationallevelchild,educationallevelmother,educationallevelfather,educationallevelcaregiver,address,wardvillage,town,addrlga,state,phoneno,agemonth)
VALUES
('$pepid','$_POST[uniqueid]','$_POST[surname]','$_POST[othernames]','$_POST[sex]',
'$_POST[lga]','$_POST[facilityname]','$_POST[dob]','$_POST[pmotheralive]','$pmothername','$pmotheradd',
'$_POST[pfatheralive]','$pfathername','$pfatheradd','$pcaregiversrelationshipstatus','$_POST[psiblings]',
'$pchildliveswith','$_POST[hivposdate]','$_POST[visitdate]','$jobstatusfather','$jobstatusmother','$jobstatuscaregiver','$educationallevelchild','$educationallevelmother','$educationallevelfather','$educationallevelcaregiver','$address','$addrwardvillage','$_POST[addrtown]','$addrlga','$_POST[state]','$_POST[phoneno]','$_POST[agemonth]')"; 

include 'lidh.php';

        $info = mysqli_query($con,$query);
        return $info;
	} 
	
}

$class = new MyClass;
$info = $class->GetUserInformation();
echo mysqli_error($con);
header("refresh:3;./pedinitialeval.php");
session_write_close();
$pepid = $_POST['pepid'];
$pepid = strtoupper($pepid);

	$query4="insert into visit(visittype,visitdate,pepid) values('Patient Registration','$_POST[visitdate]','$pepid')";
	$result4 = mysqli_query($con,$query4);
	echo mysqli_error($con);
	echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Patient registered, Please Wait </br> Loading Clinical Evaluation...</span></p> </br> ";
	$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$_POST[username]','CREATE: $_POST[pepid]')";
$result=mysqli_query($con,$sql);
}
else{
	echo "Patient: ".$_POST['pepid']." already exists<br>";
	$query3 = "SELECT pepid FROM visit WHERE pepid = '$_POST[pepid]'";
	$result3 = mysqli_query($con,$query3);
    if (mysqli_num_rows($result3)==0){
$pepid = $_POST['pepid'];
$pepid = strtoupper($pepid);
	$query4="insert into visit(visittype,visitdate,pepid) values('Patient Registration','$_POST[visitdate]','$pepid')";
	$result4 = mysqli_query($con,$query4);
	echo mysqli_error($con);
	echo "Visit record created...";
	echo "GOING FORWARD, Initial Evaluation...";
	header("refresh:3;./registration.php");
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