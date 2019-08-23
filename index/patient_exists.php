<?php
include('database_connection.php');
//Include The Database Connection File 

if(isset($_POST['pepid']))//If a username has been submitted 
{
$pepid = mysql_real_escape_string($_POST['pepid']);//Some clean up :)


$check_for_drugcode = mysql_query("SELECT pepid,surname,othernames FROM patient WHERE LOWER(pepid)=LOWER('$pepid')");
//Query to check if username is available or not 

if(mysql_num_rows($check_for_drugcode))
{
echo '1';//If there is a  record match in the Database - Available

}
else
{
echo '0';//No Record Found - Drug is Not available 
}

}


?>