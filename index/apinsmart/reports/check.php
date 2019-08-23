<?php
session_start();
$con=mysql_connect("localhost","root","");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db('asmart',$con) or die ("could not open db".mysql_error());


	$query = "select loginid, username, password from loginusers where username='$_POST[myusername]' and password='$_POST[mypassword]'";
	$result = mysql_query ($query);
	if (mysql_num_rows($result)==0){
	echo "Wrong Username/Password";
	}
	else{
	header( 'Location: ./dashboard.php' ) ;
	exit();
	}

?>