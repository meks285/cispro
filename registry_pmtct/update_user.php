<?php

$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id = $_REQUEST['id'];


class MyClass{
    public function GetUserInformation(){
$query = "select firstname,lastname,hospid,regimen,age,dob,hivdate,pmtctarvdate,pmtctid,g_age,eid,pcr6wks,pcr12mths,pcr18mths,pcr6wksdate,pcr12mthsdate,pcr18mthsdate from pmtctregistry where id='$_REQUEST[id]'";
        $result = mysql_query($query);
        $info = mysql_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();

//Reconcile with Database Values

{
$dob = $_REQUEST['dob'];
$dob = date('Y-m-d',strtotime($dob));
$today1=date('Y-m-d');

if($dob==$info['dob']){$dob1 = $info['dob'];}
elseif($dob=='0000-00-00'){$dob1 = $info['dob'];}
elseif($dob=='1970-01-01'){$dob1 = $info['dob'];}
elseif($dob==$today1){$dob1 = $info['dob'];}
else{$dob1 = $_REQUEST['dob'];}

//HIV Date
$hivdate = $_REQUEST['hivdate'];
$hivdates = date('Y-m-d',strtotime($hivdate));

if($hivdates==$info['hivdate']){$hivdate1 = $info['hivdate'];}
elseif($hivdates=='0000-00-00'){$hivdate1 = $info['hivdate'];}
elseif($hivdates=='1970-01-01'){$hivdate1 = $info['hivdate'];}
elseif($hivdates==$today1){$hivdate1 = $info['hivdate'];}
else{$hivdate1 = $_REQUEST['hivdate'];}

// PMTCT ARV Dates	
$pmtctarvdate = $_REQUEST['pmtctarvdate'];
$pmtctarvdates = date('Y-m-d',strtotime($pmtctarvdate));

if($pmtctarvdates==$info['hivdate']){$pmtctarvdate1 = $info['pmtctarvdate'];}
elseif($pmtctarvdates=='0000-00-00'){$pmtctarvdate1 = $info['pmtctarvdate'];}
elseif($pmtctarvdates=='1970-01-01'){$pmtctarvdate1 = $info['pmtctarvdate'];}
elseif($pmtctarvdates==$today1){$pmtctarvdate1 = $info['pmtctarvdate'];}
else{$pmtctarvdate1 = $_REQUEST['pmtctarvdate'];}


// PMTCT 6 WEEKS Dates	
$pcr6wksdate = $_REQUEST['pcr6wksdate'];
$pcr6wksdates = date('Y-m-d',strtotime($pcr6wksdate));

if($pcr6wksdates==$info['pcr6wksdate']){$pcr6wksdate1 = $info['pcr6wksdate'];}
elseif($pcr6wksdates=='0000-00-00'){$pcr6wksdate1 = $info['pcr6wksdate'];}
elseif($pcr6wksdates=='1970-01-01'){$pcr6wksdate1 = $info['pcr6wksdate'];}
elseif($pcr6wksdates==$today1){$pcr6wksdate1 = $info['pcr6wksdate'];}
else{$pcr6wksdate1 = $_REQUEST['pcr6wksdate'];}

// PMTCT 12 Months Date	
$pcr12mthsdate = $_REQUEST['pcr12mthsdate'];
$pcr12mthsdates = date('Y-m-d',strtotime($pcr12mthsdate));

if($pcr12mthsdates==$info['pcr12mthsdate']){$pcr12mthsdate1 = $info['pcr12mthsdate'];}
elseif($pcr12mthsdates=='0000-00-00'){$pcr12mthsdate1 = $info['pcr12mthsdate'];}
elseif($pcr12mthsdates=='1970-01-01'){$pcr12mthsdate1 = $info['pcr12mthsdate'];}
elseif($pcr12mthsdates==$today1){$pcr12mthsdate1 = $info['pcr12mthsdate'];}
else{$pcr12mthsdate1 = $_REQUEST['pcr12mthsdate'];}


// PMTCT 18 Months Date	
$pcr18mthsdate = $_REQUEST['pcr18mthsdate'];
$pcr18mthsdates = date('Y-m-d',strtotime($pcr18mthsdate));

if($pcr18mthsdates==$info['pcr18mthsdate']){$pcr18mthsdate1 = $info['pcr18mthsdate'];}
elseif($pcr18mthsdates=='0000-00-00'){$pcr18mthsdate1 = $info['pcr18mthsdate'];}
elseif($pcr18mthsdates=='1970-01-01'){$pcr18mthsdate1 = $info['pcr18mthsdate'];}
elseif($pcr18mthsdates==$today1){$pcr18mthsdate1 = $info['pcr18mthsdate'];}
else{$pcr18mthsdate1 = $_REQUEST['pcr18mthsdate'];}


}
// END
$id = intval($_REQUEST['id']);
$dob = date('Y-m-d',strtotime($dob1));
$hivdates = date('Y-m-d',strtotime($hivdate1));
$pmtctarvdates = date('Y-m-d',strtotime($pmtctarvdate1));
$pcr6wksdate = date('Y-m-d',strtotime($pcr6wksdate1));
$pcr12mthsdate = date('Y-m-d',strtotime($pcr12mthsdate1));
$pcr18mthsdate = date('Y-m-d',strtotime($pcr18mthsdate1));

$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$hospid = $_REQUEST['hospid'];
$regimen = $_REQUEST['regimen'];
$age = $_REQUEST['age'];


$pmtctid = $_REQUEST['pmtctid'];
$g_age = $_REQUEST['g_age'];
$eid = $_REQUEST['eid'];
$pcr6wks = $_REQUEST['pcr6wks'];
$pcr12mths = $_REQUEST['pcr12mths'];
$pcr18mths = $_REQUEST['pcr18mths'];



include 'conn.php';

$sql = "update pmtctregistry set firstname='$firstname',lastname='$lastname',hospid='$hospid',regimen='$regimen',age='$age',dob='$dob',hivdate='$hivdates',pmtctarvdate='$pmtctarvdates',pmtctid='$pmtctid',g_age='$g_age',eid='$eid',pcr6wks='$pcr6wks',pcr12mths='$pcr12mths',pcr18mths='$pcr18mths',pcr6wksdate='$pcr6wksdate',pcr12mthsdate='$pcr12mthsdate',pcr18mthsdate='$pcr18mthsdate' where id=$id";
@mysql_query($sql);
echo json_encode(array(
	'id' => $id,
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