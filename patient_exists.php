<?php
include './mandate_/lidh.php';
//Include The Database Connection File 

if(isset($_POST['pepid']))//If a username has been submitted 
{
	include './mandate_/lidh.php';

$pepid = mysqli_real_escape_string($con,$_POST['pepid']);


$check_for_drugcode = mysqli_query($con,"SELECT pepid,surname,othernames FROM patient WHERE LOWER(pepid)=LOWER('$pepid')");
//Query to check if username is available or not 

if(mysqli_num_rows($check_for_drugcode))
{
echo '1';//If there is a  record match in the Database - Available
}
else
{
echo '0';//No Record Found - Drug is Not available 
}

}


?>