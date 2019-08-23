<?php

$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$hospid = $_REQUEST['hospid'];
$regimen = $_REQUEST['regimen'];
$age = $_REQUEST['age'];
$hivdate = $_REQUEST['hivdate'];
$hivdates = date('Y-m-d',strtotime($hivdate));
$dob = $_REQUEST['dob'];
$dob = date('Y-m-d',strtotime($dob));
$pmtctarvdate = $_REQUEST['pmtctarvdate'];
$pmtctarvdates = date('Y-m-d',strtotime($pmtctarvdate));
$pmtctid = $_REQUEST['pmtctid'];
$g_age = $_REQUEST['g_age'];
$eid = $_REQUEST['eid'];
$pcr6wks = $_REQUEST['pcr6wks'];
$pcr12mths = $_REQUEST['pcr12mths'];
$pcr18mths = $_REQUEST['pcr18mths'];
$pcr6wksdate = $_REQUEST['pcr6wksdate'];
$pcr12mthsdate = $_REQUEST['pcr12mthsdate'];
$pcr18mthsdate = $_REQUEST['pcr18mthsdate'];
$pcr6wksdates = date('Y-m-d',strtotime($pcr6wksdate));
$pcr12mthsdates = date('Y-m-d',strtotime($pcr12mthsdate));
$pcr18mthsdates = date('Y-m-d',strtotime($pcr18mthsdate));
include 'conn.php';

$sql = "insert into pmtctregistry(firstname,lastname,hospid,regimen,age,dob,hivdate,pmtctarvdate,pmtctid,g_age,eid,pcr6wks,pcr12mths,pcr18mths,pcr6wksdate,pcr12mthsdate,pcr18mthsdate) values('$firstname','$lastname','$hospid','$regimen','$age','$dob','$hivdates','$pmtctarvdates','$pmtctid','$g_age','$eid','$pcr6wks','$pcr12mths','$pcr18mths','$pcr6wksdates','$pcr12mthsdates','$pcr18mthsdates')";
@mysql_query($sql);
echo json_encode(array(
	'id' => mysql_insert_id(),
	'firstname' => $firstname,
	'lastname' => $lastname,
	'hospid' => $hospid,
	'regimen' => $regimen,
	'age' => $age,
	'dob' => $dob,
	'hivdate' => $hivdate,
	'pmtctarvdate' => $pmtctarvdate,
	'pmtctid' => $pmtctid,
	'g_age' => $g_age,
	'eid' => $eid,
	'pcr6wks' => $pcr6wks,
	'pcr12mths' => $pcr12mths,
	'pcr18mths' => $pcr18mths,
	'pcr6wksdate' => $pcr6wksdate,
	'pcr12mthsdate' => $pcr12mthsdate,
	'pcr18mthsdate' => $pcr18mthsdate
));

?>