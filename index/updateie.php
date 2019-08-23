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
$whostagecriteria = implode(", ", $_POST['whostagecriteria']);
} else {
$whostagecriteria = "";
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
if(isset($_POST['nextappointment'])) {$nextappointment=$_POST['nextappointment'];}else {$nextappointment="";}
//Patient Demographics
if(isset($_POST['address'])){ $address = $_POST['address']; $address=mysql_real_escape_string($address);}  else {$address = "";}
if(isset($_POST['nokaddr'])){ $nokaddr = $_POST['nokaddr']; $nokaddr=mysql_real_escape_string($nokaddr);}  else {$nokaddr = "";}

if(isset($_POST['addrlga'])){$addrlga = $_POST['addrlga']; $addrlga=mysql_real_escape_string($addrlga);}  else {$addrlga = "";}
if(isset($_POST['hospitalid'])){$hospitalid  = $_POST['hospitalid']; $hospitalid =mysql_real_escape_string($hospitalid );}  else {$hospitalid  = "";}
if(isset($_POST['maritalstatus'])){$maritalstatus  = $_POST['maritalstatus']; $maritalstatus =mysql_real_escape_string($maritalstatus );}  else {$maritalstatus  = "";}
if(isset($_POST['educationallevel'])){$educationallevel  = $_POST['educationallevel']; $educationallevel =mysql_real_escape_string($educationallevel );}  else {$educationallevel  = "";}
if(isset($_POST['jobstatus'])){$jobstatus = $_POST['jobstatus']; $jobstatus=mysql_real_escape_string($jobstatus);}  else {$jobstatus = "";}
if(isset($_POST['addrwardvillage'])){ $addrwardvillage = $_POST['addrwardvillage']; $addrwardvillage=mysql_real_escape_string($addrwardvillage);}  else {$addrwardvillage = "";}
if(isset($_POST['nokwardvillage'])){ $nokwardvillage = $_POST['nokwardvillage']; $nokwardvillage=mysql_real_escape_string($nokwardvillage);}  else {$nokwardvillage = "";}
if(isset($_POST['visitdate'])) {$visitdate=$_POST['visitdate'];}else {$visitdate="";}
if(isset($_POST['hivposdate'])) {$hivposdate=$_POST['hivposdate'];}else {$hivposdate="";}
if(isset($_POST['surname'])) {$surname=$_POST['surname'];}else {$surname="";}
if(isset($_POST['othernames'])) {$othernames=$_POST['othernames'];}else {$othernames="";}
if(isset($_POST['uniqueid'])) {$uniqueid=$_POST['uniqueid'];}else {$uniqueid="";}
if(isset($_POST['sex'])) {$sex=$_POST['sex'];}else {$sex="";}
if(isset($_POST['lga'])) {$lga=$_POST['lga'];}else {$lga="";}
if(isset($_POST['facilityname'])) {$facilityname=$_POST['facilityname'];}else {$facilityname="";}
if(isset($_POST['ancno'])) {$ancno=$_POST['ancno'];}else {$ancno="";}
if(isset($_POST['dob'])) {$dob=$_POST['dob'];}else {$dob="";}
if(isset($_POST['addrtown'])) {$addrtown=$_POST['addrtown'];}else {$addrtown="";}
if(isset($_POST['pepid'])) {$pepid=$_POST['pepid'];}else {$pepid="";}
if(isset($_POST['state'])) {$state=$_POST['state'];}else {$state="";}
if(isset($_POST['phoneno'])) {$phoneno=$_POST['phoneno'];}else {$phoneno="";}
if(isset($_POST['nokname'])) {$nokname=$_POST['nokname'];}else {$nokname="";}
if(isset($_POST['nokrelationship'])) {$nokrelationship=$_POST['nokrelationship'];}else {$nokrelationship="";}
if(isset($_POST['noktown'])) {$noktown=$_POST['noktown'];}else {$noktown="";}
if(isset($_POST['nokstate'])) {$nokstate=$_POST['nokstate'];}else {$nokstate="";}
if(isset($_POST['nokphoneno'])) {$nokphoneno=$_POST['nokphoneno'];}else {$nokphoneno="";}
if(isset($_POST['presentingcomplaint'])) {$presentingcomplaint=$_POST['presentingcomplaint'];}else {$presentingcomplaint="";}
?>

<?php
include './mandate_/lidh.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$pepid = $_POST['pepid'];  
$sql="UPDATE patient 
   SET 
   hospitalid='$hospitalid',   enroldate='$visitdate',   hivposdate='$hivposdate',   surname='$surname',   othernames='$othernames',   uniqueid='$uniqueid',
   sex='$sex',   lga='$lga',   facilityname='$facilityname',   ancno='$ancno',   dob='$dob',   maritalstatus='$maritalstatus',   educationallevel='$educationallevel',
   jobstatus='$jobstatus',   address='$address',   wardvillage='$addrwardvillage',   town='$addrtown',   addrlga='$addrlga',
   pepid='$pepid',   state='$state',   phoneno='$phoneno',   nokname='$nokname',   nokrelationship='$_POST[nokrelationship]',
   nokaddr='$nokaddr',   nokwardvillage='$nokwardvillage',   noktown='$noktown',   nokstate='$nokstate',   nokphoneno='$nokphoneno',
   presentingcomplaint='$presentingcomplaint',   symptomsreview='$symptomsreview',   dur_fever='$_POST[dur_fever]',   dur_nausea='$_POST[dur_nausea]',
   dur_nsweats='$_POST[dur_nsweats]',
   dur_weigthl='$_POST[dur_weigthl]',
   dur_cough='$_POST[dur_cough]',
   dur_head='$_POST[dur_head]',
   dur_rash='$_POST[dur_rash]',
   dur_itch='$_POST[dur_itch]',
   dur_diarh='$_POST[dur_diarh]',
   dur_gendis='$_POST[dur_gendis]',
   dur_genitch='$_POST[dur_genitch]',
   dur_gensore='$_POST[dur_gensore]',
   dur_shortbreath='$_POST[dur_shortbreath]',
   dur_visimp='$_POST[dur_visimp]',
   dur_painswall='$_POST[dur_painswall]',
   dur_numb='$_POST[dur_numb]',
   dur_otherpain='$_POST[dur_otherpain]',
   addiotnalsymcmments='$_POST[addiotnalsymcmments]',
   pastmedicalhist='$_POST[pastmedicalhist]',
   relfamilyhist='$_POST[relfamilyhist]',
   hospitalization='$_POST[hospitalization]',
   drugallergies='$_POST[drugallergies]',
   riskfactors='$riskfactors',
   lastmenstrualperiod='$_POST[lastmenstrualperiod]',
   currentlypregnant='$_POST[currentlypregnant]',
   gestationalage='$_POST[gestationalage]',
   edd='$_POST[edd]',
   lastcd4='$_POST[lastcd4]',
   lastcd4date='$_POST[lastcd4date]',
   lastvl='$_POST[lastvl]',
   lastvldate='$_POST[lastvldate]',
   prevarvexp='$prevarvexp',
   prevfacilityname='$_POST[prevfacilityname]',
   prevdurationofcarefromdate='$_POST[prevdurationofcarefromdate]',
   prevdurationofcaretodate='$_POST[prevdurationofcaretodate]',
   prevarvtype='$_POST[prevarvtype]',
   currentmedications='$currentmedications',
   serviceentry='$serviceentry',
   adherenceyn='$adherenceyn',
   missedadh3daysyn='$missedadh3daysyn',
   missadhreason='$_POST[missadhreason]',
   missedadhcode='$_POST[missedadhcode]',
   interradhcode='$_POST[interradhcode]',
   stopadhcode='$_POST[stopadhcode]',
   trtmtinterruptionyn='$trtmtinterruptionyn',
   trtmtinterdate='$_POST[trtmtinterdate]',
   trtmtinterduration='$_POST[trtmtinterduration]',
   trtmtinterreason='$_POST[trtmtinterreason]',
   trtmtstopyn='$trtmtstopyn',
   trtmtstopdate='$_POST[trtmtstopdate]',
   trtmtstopduration='$_POST[trtmtstopduration]',
   trtmtstopreason='$_POST[trtmtstopreason]',
   hivstatdisclosure='$hivstatdisclosure',
   hivstatdisclosureother='$_POST[hivstatdisclosureother]',
   hivstatdiscussion='$_POST[hivstatdiscussion]',
   supportgrpyn='$supportgrpyn',
   pastcurrarvsideeff='$pastcurrarvsideeff',
   petemp='$_POST[petemp]',
   pebp='$_POST[pebp]',
   pepulse='$_POST[pepulse]',
   peweight='$_POST[peweight]',
   peheight='$_POST[peheight]',
   pegenappearance='$pegenappearance',
   peskin='$peskin',
   peheadeye='$peheadeye',
   pebreasts='$pebreasts',
   pecardiovascular='$pecardiovascular',
   pegenitalia='$pegenitalia',
   gerespiratory='$gerespiratory',
   gerespiratoryrate='$_POST[gerespiratoryrate]',
   gegastrointestinal='$gegastrointestinal',
   geneurological='$geneurological',
   gementalstatus='$gementalstatus',
   peadditional='$_POST[peadditional]',
   assessmentnotes='$_POST[assessmentnotes]',
   assessment='$assessment',
   whostagecriteria='$whostagecriteria',
   whostage='$_POST[whostage]',
   planlab='$_POST[planlab]',
   plantbs='$_POST[plantbs]',
   planoip='$_POST[planoip]',
   planpep='$_POST[planpep]',
   planadh='$_POST[planadh]',
   planoit='$_POST[planoit]',
   planadm='$_POST[planadm]',
   planpain='$_POST[planpain]',
   plan='$plan',
   planother='$_POST[planother]',
   enrollin='$enrollin',
   planarvtherapy='$planarvtherapy',
   planarvtherchgtrtmtreason='$_POST[planarvtherchgtrtmtreason]',
   planarvtherstoptrtmtreason='$_POST[planarvtherstoptrtmtreason]',
   regimen1st='$regimen1st',
   regimen2nd='$_POST[regimen2nd]',
   regimenothers='$_POST[regimenothers]',
   nextappointment='$nextappointment',
   nextappointmentdate='$_POST[nextappointmentdate]',
   enroldate='$_POST[visitdate]',
   Clinicianname='$_POST[Clinicianname]'
   WHERE pepid='$pepid'";
   
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  
echo "Update successful... Redirecting, Please wait...";
//header('Location: ./patsummary.php?pepid='.$pepid);

mysqli_close($con);
/*var_dump($_POST)*/
?>
