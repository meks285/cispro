<?php
$_SESSION=$_POST;
if(isset($_POST['symptomsreview'])) {
$symptomsreview = implode(", ", $_POST['symptomsreview']);
} else {
$symptomsreview = "";
}
if(isset($_POST['riskfactors'])) {
$riskfactors = implode(", ", $_POST['riskfactors']);
} else {
$riskfactors = "";
}
if(isset($_POST['currentmedications'])) {
$currentmedications = implode(", ", $_POST['currentmedications']);
} else {
$currentmedications = "";
}
if(isset($_POST['hivstatdisclosure'])) {
$hivstatdisclosure = implode(", ", $_POST['hivstatdisclosure']);
} else {
$hivstatdisclosure = "";
}
if(isset($_POST['pastcurrarvsideeff'])) {
$pastcurrarvsideeff = implode(", ", $_POST['pastcurrarvsideeff']);
} else {
$pastcurrarvsideeff = "";
}
if(isset($_POST['pegenappearance'])) {
$pegenappearance = implode(", ", $_POST['pegenappearance']);
} else {
$pegenappearance = "";
}
if(isset($_POST['peskin'])) {
$peskin = implode(", ", $_POST['peskin']);
} else {
$peskin = "";
}
if(isset($_POST['peheadeye'])) {
$peheadeye = implode(", ", $_POST['peheadeye']);
} else {
$peheadeye = "";
}
if(isset($_POST['pebreasts'])) {
$pebreasts = implode(", ", $_POST['pebreasts']);
} else {
$pebreasts = "";
}
if(isset($_POST['pecardiovascular'])) {
$pecardiovascular = implode(", ", $_POST['pecardiovascular']);
} else {
$pecardiovascular = "";
}
if(isset($_POST['pegenitalia'])) {
$pegenitalia = implode(", ", $_POST['pegenitalia']);
} else {
$pegenitalia = "";
}
if(isset($_POST['gerespiratory'])) {
$gerespiratory = implode(", ", $_POST['gerespiratory']);
} else {
$gerespiratory = "";
}
if(isset($_POST['gegastrointestinal'])) {
$gegastrointestinal = implode(", ", $_POST['gegastrointestinal']);
} else {
$gegastrointestinal = "";
}
if(isset($_POST['geneurological'])) {
$geneurological = implode(", ", $_POST['geneurological']);
} else {
$geneurological = "";
}
if(isset($_POST['gementalstatus'])) {
$gementalstatus = implode(", ", $_POST['gementalstatus']);
} else {
$gementalstatus = "";
}
if(isset($_POST['plan'])) {
$plan = implode(", ", $_POST['plan']);
} else {
$plan = "";
}
if(isset($_POST['prevarvexp'])) {
$prevarvexp=$_POST['prevarvexp'];
}else {
$prevarvexp = "";
}
if(isset($_POST['serviceentry'])) {
$serviceentry=$_POST['serviceentry'];
}else {
$serviceentry = "";
}
if(isset($_POST['adherenceyn'])) {
$adherenceyn=$_POST['adherenceyn'];
}else {
$adherenceyn = "";
}
if(isset($_POST['missedadh3daysyn'])) {
$missedadh3daysyn=$_POST['missedadh3daysyn'];
}else {
$missedadh3daysyn = "";
}
if(isset($_POST['trtmtinterruptionyn'])) {
$trtmtinterruptionyn=$_POST['trtmtinterruptionyn'];
}else {
$trtmtinterruptionyn="";
}
if(isset($_POST['trtmtstopyn'])) {
$trtmtstopyn=$_POST['trtmtstopyn'];
}else {
$trtmtstopyn="";
}
if(isset($_POST['supportgrpyn'])) {
$supportgrpyn=$_POST['supportgrpyn'];
}else {
$supportgrpyn="";
}
if(isset($_POST['assessment'])) {
$assessment=$_POST['assessment'];
}else {
$assessment="";
}
if(isset($_POST['whostagecriteria'])) {
$whostagecriteria=$_POST['whostagecriteria'];
}else {
$whostagecriteria="";
}
if(isset($_POST['enrollin'])) {
$enrollin=$_POST['enrollin'];
}else {
$enrollin="";
}
if(isset($_POST['planarvtherapy'])) {
$planarvtherapy=$_POST['planarvtherapy'];
}else {
$planarvtherapy="";
}
if(isset($_POST['regimen1st'])) {
$regimen1st=$_POST['regimen1st'];
}else {
$regimen1st="";
}
if(isset($_POST['nextappointment'])) {
$nextappointment=$_POST['nextappointment'];
}else {
$nextappointment="";
}

?>

<?php
include './mandate_/lidh.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$pepid = $_POST['pepid'];
if (strlen($pepid)==10){  
$sql="UPDATE patient 
   SET 
   dateeligible='$_POST[dateeligible]',
   whyeligible='$_POST[whyeligible]',
   dateinitadh='$_POST[dateinitadh]',
   datetransfin='$_POST[datetransfin]',
   firstartregimen='$_POST[firstartregimen]',
   dateartstart='$_POST[dateartstart]',
   clinicalstageart='$_POST[clinicalstageart]',
   facilitytransf='$_POST[facilitytransf]',
   careentrypoint='$_POST[careentrypoint]',
   priorart='$_POST[priorart]',
   hivmode='$_POST[hivmode]',
   hivmode='$_POST[hivmode]',
   testlocation='$_POST[testlocation]',
   peweightatart='$_POST[peweightatart]',
   peheightatart='$_POST[peheightatart]',
   patfunction='$_POST[patfunction]',
   cd4atart='$_POST[cd4atart]'
   WHERE pepid='$pepid';";
   
  
if (!$con->multi_query($sql)) {
    echo "Multi query failed: (" . $con->errno . ") " . $con->error;
}

do {
    if ($res = $con->store_result()) {
        var_dump($res->fetch_all(MYSQLI_ASSOC));
        $res->free();
    }
} while ($con->more_results() && $con->next_result());  
echo "Update successful... Redirecting, Please wait...";
header('Location: ./carecardadt.php');
}
else{
$sql="UPDATE patient 
   SET 
   dateeligible='$_POST[dateeligible]',
   whyeligible='$_POST[whyeligible]',
   dateinitadh='$_POST[dateinitadh]',
   datetransfin='$_POST[datetransfin]',
   firstartregimen='$_POST[firstartregimen]',
   dateartstart='$_POST[dateartstart]',
   clinicalstageart='$_POST[clinicalstageart]',
   facilitytransf='$_POST[facilitytransf]',
   careentrypoint='$_POST[careentrypoint]',
   priorart='$_POST[priorart]',
   hivmode='$_POST[hivmode]',
   hivmode='$_POST[hivmode]',
   testlocation='$_POST[testlocation]',
   peweightatart='$_POST[peweightatart]',
   peheightatart='$_POST[peheightatart]',
   patfunction='$_POST[patfunction]',
   cd4atart='$_POST[cd4atart]'
   WHERE pepid='$pepid';";
   
  
if (!$con->multi_query($sql)) {
    echo "Multi query failed: (" . $con->errno . ") " . $con->error;
}

do {
    if ($res = $con->store_result()) {
        var_dump($res->fetch_all(MYSQLI_ASSOC));
        $res->free();
    }
} while ($con->more_results() && $con->next_result());  
echo "Update successful... Redirecting, Please wait...";
if (strlen($pepid) == 11) {
		header('Location: ./carecardped.php');
			}
			elseif (strlen($pepid) == 10){
		header('Location: ./carecard.php');
				}
}
mysqli_close($con);
/*var_dump($_POST)*/
?>