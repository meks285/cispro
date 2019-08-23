<?php
$_SESSION=$_POST;
if(isset($_POST['symptomsreview'])) {$symptomsreview = implode(", ", $_POST['symptomsreview']);} else {$symptomsreview = "";}
if(isset($_POST['riskfactors'])) {$riskfactors = implode(", ", $_POST['riskfactors']);} else {$riskfactors = "";}
if(isset($_POST['currentmedications'])) {$currentmedications = implode(", ", $_POST['currentmedications']);} else {$currentmedications = "";}
if(isset($_POST['hivstatdisclosure'])) {$hivstatdisclosure = implode(", ", $_POST['hivstatdisclosure']);} else {$hivstatdisclosure = "";}
if(isset($_POST['pastcurrarvsideeff'])) {$pastcurrarvsideeff = implode(", ", $_POST['pastcurrarvsideeff']);} else {$pastcurrarvsideeff = "";}
if(isset($_POST['pegenappearance'])) {$pegenappearance = implode(", ", $_POST['pegenappearance']);} else {$pegenappearance = "";}
if(isset($_POST['peskin'])) {$peskin = implode(", ", $_POST['peskin']);} else {$peskin = "";}
if(isset($_POST['peheadeye'])) {$peheadeye = implode(", ", $_POST['peheadeye']);} else {$peheadeye = "";}
if(isset($_POST['pebreasts'])) {$pebreasts = implode(", ", $_POST['pebreasts']);} else {$pebreasts = "";}
if(isset($_POST['pecardiovascular'])) {$pecardiovascular = implode(", ", $_POST['pecardiovascular']);} else {$pecardiovascular = "";}
if(isset($_POST['pegenitalia'])) {$pegenitalia = implode(", ", $_POST['pegenitalia']);} else {$pegenitalia = "";}
if(isset($_POST['gerespiratory'])) {$gerespiratory = implode(", ", $_POST['gerespiratory']);} else {$gerespiratory = "";}
if(isset($_POST['gegastrointestinal'])) {$gegastrointestinal = implode(", ", $_POST['gegastrointestinal']);} else {$gegastrointestinal = "";}
if(isset($_POST['geneurological'])) {$geneurological = implode(", ", $_POST['geneurological']);} else {$geneurological = "";}
if(isset($_POST['gementalstatus'])) {$gementalstatus = implode(", ", $_POST['gementalstatus']);} else {$gementalstatus = "";}
if(isset($_POST['plan'])) {$plan = implode(", ", $_POST['plan']);} else {$plan = "";}
if(isset($_POST['prevarvexp'])) {$prevarvexp=$_POST['prevarvexp'];}else {$prevarvexp = "";}
if(isset($_POST['serviceentry'])) {$serviceentry=$_POST['serviceentry'];}else {$serviceentry = "";}
if(isset($_POST['adherenceyn'])) {$adherenceyn=$_POST['adherenceyn'];}else {$adherenceyn = "";}
if(isset($_POST['missedadh3daysyn'])) {$missedadh3daysyn=$_POST['missedadh3daysyn'];}else {$missedadh3daysyn = "";}
if(isset($_POST['trtmtinterruptionyn'])) {$trtmtinterruptionyn=$_POST['trtmtinterruptionyn'];}else {$trtmtinterruptionyn="";}
if(isset($_POST['trtmtstopyn'])) {$trtmtstopyn=$_POST['trtmtstopyn'];}else {$trtmtstopyn="";}
if(isset($_POST['supportgrpyn'])) {$supportgrpyn=$_POST['supportgrpyn'];}else {$supportgrpyn="";}
if(isset($_POST['assessment'])) {$assessment=$_POST['assessment'];}else {$assessment="";}
if(isset($_POST['whostagecriteria'])) {$whostagecriteria = implode(", ", $_POST['whostagecriteria']);} else {$whostagecriteria = "";}

if(isset($_POST['enrollin'])) {$enrollin=$_POST['enrollin'];}else {$enrollin="";}
if(isset($_POST['visitdate'])) {$visitdate=$_POST['visitdate'];}else {$visitdate="";}
if(isset($_POST['hivposdate'])) {$hivposdate=$_POST['hivposdate'];}else {$hivposdate="";}
if(isset($_POST['dob'])) {$dob=$_POST['dob'];}else {$dob="";}
if(isset($_POST['regimen1st'])) {$regimen1st=$_POST['regimen1st'];}else {$regimen1st="";}
if(isset($_POST['planarvtherapy'])) {$planarvtherapy=$_POST['planarvtherapy'];}else {$planarvtherapy="";}
if(isset($_POST['regimen1st'])) {$regimen1st=$_POST['regimen1st'];}else {$regimen1st="";}
if(isset($_POST['ancno'])) {$ancno=$_POST['ancno'];}else {$ancno="";}
if(isset($_POST['nextappointment'])) {$nextappointment=$_POST['nextappointment'];}else {$nextappointment="";}
if(isset($_POST['jobstatusfather '])) {$jobstatusfather =$_POST['jobstatusfather '];}else {$jobstatusfather ="";}
if(isset($_POST['educationallevelfather '])) {$educationallevelfather =$_POST['educationallevelfather '];}else {$educationallevelfather ="";}
if(isset($_POST['educationallevelmother '])) {$educationallevelmother =$_POST['educationallevelmother '];}else {$educationallevelmother ="";}
if(isset($_POST['educationallevelchild '])) {$educationallevelchild =$_POST['educationallevelchild '];}else {$educationallevelchild ="";}

if(isset($_POST['address'])){ $address = $_POST['address']; $address=mysql_real_escape_string($address);} 
if(isset($_POST['addrwardvillage'])){ $addrwardvillage = $_POST['addrwardvillage']; $addrwardvillage=mysql_real_escape_string($addrwardvillage);} 
if(isset($_POST['addrtown'])){ $addrtown = $_POST['addrtown']; $addrtown=mysql_real_escape_string($addrtown);} 
if(isset($_POST['addrlga'])){ $addrlga = $_POST['addrlga']; $addrlga=mysql_real_escape_string($addrlga);} 
if(isset($_POST['jobstatusfather'])){ $jobstatusfather = $_POST['jobstatusfather']; $jobstatusfather=mysql_real_escape_string($jobstatusfather);} 
if(isset($_POST['jobstatusmother'])){ $jobstatusmother = $_POST['jobstatusmother']; $jobstatusmother=mysql_real_escape_string($jobstatusmother);} 
if(isset($_POST['pcaregiversrelationshipstatus'])){ $pcaregiversrelationshipstatus = $_POST['pcaregiversrelationshipstatus']; $pcaregiversrelationshipstatus=mysql_real_escape_string($pcaregiversrelationshipstatus);} 

?>

<?php

include './mandate_/lidh.php';

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$pepid = $_POST['pepid'];  
if(!mysqli_query($con,"UPDATE patient 
   SET 
   state='$_POST[state]',
   lga='$_POST[lga]',
   jobstatusfather='$jobstatusfather',
   jobstatusmother='$jobstatusmother',
   educationallevelcaregiver='$_POST[educationallevelcaregiver]',
   jobstatuscaregiver='$_POST[jobstatuscaregiver]',
   educationallevelmother='$educationallevelmother',
   educationallevelchild='$educationallevelchild',
   educationallevelfather='$educationallevelfather',
   pcaregiversrelationshipstatus='$pcaregiversrelationshipstatus',
   address='$address',
   wardvillage='$addrwardvillage',
   town='$addrtown',
   enroldate='$visitdate',
   hivposdate='$hivposdate',
   dob='$dob',
   ancno='$ancno',
   addrlga='$addrlga',
   phoneno='$_POST[phoneno]',
   pchildliveswith='$_POST[pchildliveswith]'
   WHERE pepid='$pepid'"));
 
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
