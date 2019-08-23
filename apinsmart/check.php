<?php
session_start();
$con=mysql_connect("localhost","root","");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db('asmart',$con) or die ("could not open db".mysql_error());
$facilityid=$_POST['facilityid'];

	$query = "select username, password, facilityid, facilityname,lga,state from phcs where username='$_POST[username]' and password='$_POST[password]' and facilityid='$_POST[facilityid]'";
	$result = mysql_query ($query);
	if (mysql_num_rows($result)==0){
	echo "Wrong Username/Password";
	}
	else{
//	header( 'Location: ./reportsheet.php' ) ;
	header("Location:reportsheet.php?facilityid=".urlencode($facilityid)."&LEKNEQsgalmqpgnqwgg");
	exit();
	}

?>