<?php
session_start();
$con=mysql_connect("localhost","root","");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}


mysql_select_db('asmart',$con) or die ("could not open db".mysql_error());


	$query = "INSERT INTO indicators (sender,rfacility,rlga,rstate,rmonth,ryear,ind1, ind2, ind3,ind4,ind5,ind6,ind7,ind8,ind9,ind10,ind11,ind12,ind13,ind14,ind15,facilityid) 
	VALUES ('$_POST[sender]','$_POST[rfacility]','$_POST[rlga]','$_POST[rstate]','$_POST[rmonth]','$_POST[ryear]','$_POST[ind1]','$_POST[ind2]','$_POST[ind3]','$_POST[ind4]','$_POST[ind5]','$_POST[ind6]','$_POST[ind7]','$_POST[ind8]','$_POST[ind9]','$_POST[ind10]','$_POST[ind11]','$_POST[ind12]','$_POST[ind13]','$_POST[ind14]','$_POST[ind15]','$_POST[facilityid]')";
	$result = mysql_query ($query);
	
	//echo '<script type="text/javascript">alert(\'Indicators Submitted!\');</script>';
?>