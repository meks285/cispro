<?php
include './mandate_/lidh.php';
// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mylga=$_POST['lga'];
$mystate=$_POST['state'];
$myprefix=$_POST['facilityidprefix'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$myusername = mysqli_real_escape_string($con,$myusername);

$mylga = stripslashes($mylga);
$mylga = mysqli_real_escape_string($con,$mylga);

$mystate = stripslashes($mystate);
$mystate = mysqli_real_escape_string($con,$mystate);


if (!empty($myusername)) {
$sql1="delete from facility";
$result1=mysqli_query($con,$sql1);
$sql2="INSERT into facility (id,facilityidprefix, facilityname,lga,state) VALUES (NULL,'$myprefix','$myusername','$mylga','$mystate')";
$result2=mysqli_query($con,$sql2);

// Mysql_num_row is counting table row

if ($result2){
	echo 'Facility Updated on CIS - Restart your CIS';
	}
}
// If result matched $myusername and $mypassword, table row must be 1 row
?>