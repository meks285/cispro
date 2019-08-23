<?php

include './mandate_/lidh.php';

$_SESSION=$_POST;
 
 // Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$pepid = $_POST['pepid'];  
if(isset($_POST['address'])){ $address = $_POST['address']; $address=mysql_real_escape_string($address);}  else {$address = "";}
if(isset($_POST['nokaddr'])){ $nokaddr = $_POST['nokaddr']; $nokaddr=mysql_real_escape_string($nokaddr);}  else {$nokaddr = "";}

if(isset($_POST['addrlga'])){$addrlga = $_POST['addrlga']; $addrlga=mysql_real_escape_string($addrlga);}  else {$addrlga = "";}
if(isset($_POST['hospitalid '])){$hospitalid  = $_POST['hospitalid ']; $hospitalid =mysql_real_escape_string($hospitalid );}  else {$hospitalid  = "";}
if(isset($_POST['maritalstatus '])){$maritalstatus  = $_POST['maritalstatus ']; $maritalstatus =mysql_real_escape_string($maritalstatus );}  else {$maritalstatus  = "";}
if(isset($_POST['educationallevel '])){$educationallevel  = $_POST['educationallevel ']; $educationallevel =mysql_real_escape_string($educationallevel );}  else {$educationallevel  = "";}
if(isset($_POST['jobstatus'])){$jobstatus = $_POST['jobstatus']; $jobstatus=mysql_real_escape_string($jobstatus);}  else {$jobstatus = "";}

if(isset($_POST['addrwardvillage'])){ $addrwardvillage = $_POST['addrwardvillage']; $addrwardvillage=mysql_real_escape_string($addrwardvillage);}  else {$addrwardvillage = "";}

if(isset($_POST['nokwardvillage'])){ $nokwardvillage = $_POST['nokwardvillage']; $nokwardvillage=mysql_real_escape_string($nokwardvillage);}  else {$nokwardvillage = "";}
if(isset($_POST['ancno'])) {$ancno=$_POST['ancno'];}else {$ancno="";}
if(!mysqli_query($con,"UPDATE patient 
   SET 
   hospitalid='$hospitalid',
   enroldate='$_POST[visitdate]',
   hivposdate='$_POST[hivposdate]',
   surname='$_POST[surname]',
   othernames='$_POST[othernames]',
   uniqueid='$_POST[uniqueid]',
   sex='$_POST[sex]',
   lga='$_POST[lga]',
   facilityname='$_POST[facilityname]',
   ancno='$ancno',
   dob='$_POST[dob]',
   maritalstatus='$maritalstatus',
   educationallevel='$educationallevel',
   jobstatus='$jobstatus',
   address='$address',
   wardvillage='$addrwardvillage',
   town='$_POST[addrtown]',
   addrlga='$addrlga',
   pepid='$_POST[pepid]',
   state='$_POST[state]',
   phoneno='$_POST[phoneno]',
   nokname='$_POST[nokname]',
   nokrelationship='$_POST[nokrelationship]',
   nokaddr='$nokaddr',
   nokwardvillage='$nokwardvillage',
   noktown='$_POST[noktown]',
   nokstate='$_POST[nokstate]',
   nokphoneno='$_POST[nokphoneno]'
   WHERE idpatient='$_POST[idpatient]'"));
   
    {
        echo "Not Recorded".mysqli_error($con);
    }

     if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:3;./todayslist.php");  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Inserted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Recorded to the Server </br> Continuing...</span></p> </br> ";

}
else {
	$link_address = 'javascript:history.go(-1)';
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Inserted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> Data could not be saved </br> Please VERIFY YOU MADE A CHANGE and try again </br> <a href='".$link_address."'>BACK</a> </span></p> </br> ";
}

  
mysqli_close($con);
/*var_dump($_POST)*/
?>
