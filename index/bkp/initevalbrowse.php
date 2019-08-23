<?php
session_start();

$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


class MyClass{
    public function GetUserInformation(){
$query = "SELECT pepid, uniqueid,hospitalid,surname,othernames,sex,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate,symptomsreview,addiotnalsymcmments,pastmedicalhist,presentingcomplaint,addiotnalsymcmments,relfamilyhist,hospitalization,drugallergies,riskfactors,lastmenstrualperiod,currentlypregnant,gestationalage,edd,lastcd4,lastcd4date,lastvl,lastvldate,prevarvexp,prevfacilityname,prevdurationofcarefromdate,prevdurationofcaretodate,currentmedications,serviceentry,adherenceyn,missedadh3daysyn,missadhreason,trtmtinterruptionyn,trtmtinterdate,trtmtinterduration,trtmtinterreason,trtmtstopyn,trtmtstopdate,trtmtstopduration,trtmtstopreason,hivstatdisclosure,hivstatdisclosureother,hivstatdiscussion,supportgrpyn,pastcurrarvsideeff,petemp,pebp,pepulse,peweight,peheight,pegenappearance,peskin,peheadeye,pebreasts,pecardiovascular,pegenitalia,gerespiratory,gerespiratoryrate,gegastrointestinal,geneurological,gementalstatus,peadditional,assessment,whostagecriteria,whostage,plan,planother,enrollin,planarvtherapy,planarvtherchgtrtmtreason,planarvtherstoptrtmtreason,regimen1st,regimenothers,regimendrugs,nextappointment,nextappointmentdate,Clinicianname
FROM patient WHERE pepid = '$_SESSION[pepid]'";
        $result = mysql_query($query);
        $info = mysql_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();
?>
<script type="text/javascript">
function checkcd4()  
{  
if ((document.form.lastcd4.value<350)&& (document.form.lastcd4.value!=0))
document.getElementById('a5b').innerHTML ='Start on ART -- CD4<350';
else  
document.getElementById('a5b').innerHTML =''; 
}
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<style type="text/css">
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:850px;
padding:14px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: normal;
font-weight: bold;
color: #000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
}
li input
{
    position: absolute;
    margin-left: -40px;
    margin-top: 5px;
}
.sidebar {
   width: 165px;
   height: 150px;
   position: fixed;
   left: 0px;
   top: 300px;
   border: 1px solid black;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 1px #b7ddf2;
background:# FFF;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
table{
	font-size:12px;
	text-align:left;
}
#stylized p{
font: bold 12px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
font: bold 12px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
font: bold 12px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized fieldset{
font: bold 12px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
	}
#stylized input{
font: bold 12px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
.sidebar {
   width: 170px;
   height: 0px;
   position: fixed;
   left: 0px;
   top: 300px;
   font-family: Tahoma, Geneva, sans-serif;
   font-style: normal;
   text-decoration: none;
   border: 1px solid #cfcfcf;
   background: #f3f3f3;
   border-bottom: 1px solid #cfcfcf;
   border-radius: 3px 3px 0 0;
   background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
   background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
   background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
   background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
   -webkit-box-shadow: 0 1px whitesmoke;
   box-shadow: 0 1px whitesmoke;
}
.sidebar1{
	width: 170px;
   height: 0px;
   position: fixed;
   left: 0px;
   font-family: Tahoma, Geneva, sans-serif;
   font-style: normal;
   text-decoration: none;
   border: 1px solid #cfcfcf;
   background: #f3f3f3;
   border-bottom: 1px solid #cfcfcf;
   border-radius: 3px 3px 0 0;
   background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
   background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
   background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
   background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
   -webkit-box-shadow: 0 1px whitesmoke;
   box-shadow: 0 1px whitesmoke;
	}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>APIN DB - Inital Evaluation</title>
</head>
<h1 align="center" style="background-color:green">NEW PATIENT - Initial Evaluation Form</h1>
<body onLoad="checkcd4()">
<div class="sidebar1">
<a href="./welcome.php" style="font-weight:bold; font-size:14px">MAIN MENU</a> 
</div>
<div class='sidebar'>
<a href="./patbrowse.php" style="font-weight:bold; font-size:14px">Patient Demographics</a> <br>
<a href="./patvisitview.php" style="font-weight:bold; font-size:14px">Visit records</a> <br>
<a href="./patlabview.php" style="font-weight:bold; font-size:14px">Lab Form</a> <br>
<a href="./patpharmview.php" style="font-weight:bold; font-size:14px">Pharmacy Form</a> <br>
<a href="./carecard2view.php" style="font-weight:bold; font-size:14px">Clinical Evaluation</a> <br>
<a href="./carecard.php" style="font-weight:bold; font-size:14px">Care Card</a> <br><br>
<a href="./newpatientiniteval.php" style="font-weight:bold; font-size:11px; color:#F00">Fill (I.E) Form</a> <br>
<br><br><br>
<p></p>
<a href="javascript:history.go(-1)">Back</a>

</div>
<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="#">
<h1>Initial Evaluation data</h1>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Patient Identification Numbers</legend>
<label>Patient ID
<span class="small"></span>
</label>
<input type="text" name="pepid" id="pepid" value="<?php echo $info['pepid']?>" readonly />

<label>Unique Number
<span class="small">Unique ID</span>
</label>
<input type="text" name="uniqueid" id="uniqueid" readonly value="<?php echo $info['uniqueid']?>" />

<label>Surname
<span class="small">Surname</span>
</label>
<input type="text" name="surname" id="surname" readonly value="<?php echo $info['surname']?>" />

<label>Other names
<span class="small">Other names</span>
</label>
<input type="text" name="othernames" id="othernames" readonly value="<?php echo $info['othernames']?>"  />

<label>Enrollment Date
<span class="small">Date of enrollment</span>
</label>
<input type="date" name="enroldate" id="enroldate" readonly value="<?php echo $info['enroldate']?>"  />


</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Presenting Complaint</legend>
<textarea rows="3" cols="90" name="presentingcomplaint" id="presentingcomplaint" readonly > <?php echo $info['presentingcomplaint']?>  
</textarea>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">MEDICAL HISTORY</legend>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Symptoms Review</legend>
<textarea rows="3" cols="90" name="symptomsreview" id="symptomsreview" readonly> <?php echo $info['symptomsreview']?>
</textarea>

<label>Additional Comments
<span class="small">Additional Comments</span>
</label>
<textarea rows="2" cols="90" name="addiotnalsymcmments" id="addiotnalsymcmments" readonly> <?php echo $info['addiotnalsymcmments']?>
</textarea>

</fieldset>
<label>Past Medical History
<span class="small">Past Medical History</span>
</label>
<textarea rows="3" cols="90" name="pastmedicalhist" id="pastmedicalhist" readonly> <?php echo $info['pastmedicalhist']?>
</textarea>

<label>Relevant Family History
<span class="small">Relevant Family History</span>
</label>
<textarea rows="3" cols="90" name="relfamilyhist" id="relfamilyhist" readonly> <?php echo $info['relfamilyhist']?>
</textarea>

<label>Hospitalization
<span class="small">Relevant Hospitilization History</span>
</label>
<textarea rows="2" cols="90" name="hospitalization" id="hospitalization" readonly> <?php echo $info['hospitalization']?>
</textarea>


<label>Drug Allergies
<span class="small">Any Known Drug Allergies</span>
</label>
<textarea rows="2" cols="90" name="drugallergies" id="drugallergies" readonly> <?php echo $info['drugallergies']?>
</textarea>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Risk Factors</legend>
<textarea rows="2" cols="90" name="drugallergies" id="drugallergies" readonly> <?php echo $info['riskfactors']?>
</textarea>
</fieldset>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">PMTCT Data</legend>
<label>LMP
<span class="small">Last Menstrual Period</span>
</label>
<input type="date" name="lastmenstrualperiod" id="lastmenstrualperiod"  value="<?php echo $info['lastmenstrualperiod']?>"/>

<label>Currently Pregnant
<span class="small">Yes/No/Uncertain</span>
</label>
<input type="text" name="currentlypregnant" id="currentlypregnant" value="<?php echo $info['currentlypregnant']?>"/>

<label>Gestational Age
<span class="small">Weeks</span>
</label>
<input type="text" name="gestationalage" id="gestationalage" value="<?php echo $info['gestationalage']?>"/>

<label>EDD
<span class="small">Expected Date of Delivery</span>
</label>
<input type="date" name="edd" id="edd" value="<?php echo $info['edd']?>"/>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Laboratory Data</legend>
<label>Latest CD4
<span class="small">cell/mL</span>
</label>
<input type="text" name="lastcd4" id="lastcd4" value="<?php echo $info['lastcd4']?>" onChange="checkcd4()"/>

<label>Latest CD4 Date
<span class="small">CD4 Date(YYYY-MM-DD)</span>
</label>
<input type="date" name="lastcd4date" id="lastcd4date" value="<?php echo $info['lastcd4date']?>"/>

<label>Latest Viral Load
<span class="small">cells/mL</span>
</label>
<input type="text" name="lastvl" id="lastvl" value="<?php echo $info['lastvl']?>"/>

<label>Latest Viral Load Date
<span class="small">VL Date(YYYY-MM-DD)</span>
</label>
<input type="date" name="lastvldate" id="lastvldate" value="<?php echo $info['lastvldate']?>"/>
<label id="a5b" style="color:#F00; font-style:italic;"></label>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Pharmacy Data</legend>
<fieldset>
<legend style="font-weight:bold; font-size:11px">ARV Exposure</legend>
<label>Previous ARV Exposure</label>
<input type="date" name="prevarvexp" id="prevarvexp" value="<?php echo $info['prevarvexp']?>"/>


<label>Facility Name
<span class="small">Name of facility</span>
</label>
<input type="text" name="prevfacilityname" id="prevfacilityname" value="<?php echo $info['prevfacilityname']?>"/>

<label>Duration of Care
<span class="small">From: (YYYY-MM-DD)</span>
</label>
<input type="date" name="prevdurationofcarefromdate" id="prevdurationofcarefromdate" value="<?php echo $info['prevdurationofcarefromdate']?>"/>

<label>Duration of Care
<span class="small">To: (YYYY-MM-DD)</span>
</label>
<input type="date" name="prevdurationofcaretodate" id="prevdurationofcaretodate" value="<?php echo $info['prevdurationofcaretodate']?>"/>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Current Medications</legend>
<textarea rows="3" cols="90" name="currentmedications" id="currentmedications"> <?php echo $info['currentmedications']?>
</textarea>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Service Entry into Program</legend>
<label></label>
<input type="text" name="serviceentry" id="serviceentry" value="<?php echo $info['serviceentry']?>"/>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Adherence: Complete if patient has recieved ARV before coming to this facility</legend>
<label>Participating in Adh Program</label>
<input type="text" name="adherenceyn" id="adherenceyn" value="<?php echo $info['adherenceyn']?>"/>

<label>Missed ARV in the last 3 days</label>
<input type="text" name="missedadh3daysyn" id="missedadh3daysyn" value="<?php echo $info['missedadh3daysyn']?>"/>

<label>Reason:</label>
<input type="text" name="missadhreason" id="missadhreason" value="<?php echo $info['missadhreason']?>"/>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Treatment was Interrupted?</legend>
<label>Interrupted?</label>
<input type="text" name="trtmtinterruptionyn" id="trtmtinterruptionyn" value="<?php echo $info['trtmtinterruptionyn']?>"/>

<label>Date:
<span class="small">YYYY-MM-DD</span>
</label>
<input type="date" name="trtmtinterdate" id="trtmtinterdate" placeholder="YYYY-MM-DD" value="<?php echo $info['trtmtinterdate']?>"/>

<label>Duration
<span class="small">Days</span>
</label>
<input type="text" name="trtmtinterduration" id="trtmtinterduration" value="<?php echo $info['trtmtinterduration']?>"/>

<label>Reason:
<span class="small"></span>
</label>
<input type="text" name="trtmtinterreason" id="trtmtinterreason" value="<?php echo $info['trtmtinterreason']?>"/>

</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Treatment was Stopped</legend>
<label>Stopped?</label>
<input type="text" name="trtmtstopyn" id="trtmtstopyn" value="<?php echo $info['trtmtstopyn']?>"/>

<label>Date
<span class="small">YYYY-MM-DD</span>
</label>
<input type="date" name="trtmtstopdate" id="trtmtstopdate" placeholder="YYYY-MM-DD" value="<?php echo $info['trtmtstopdate']?>"/>

<label>Duration
<span class="small">Days</span>
</label>
<input type="text" name="trtmtstopduration" id="trtmtstopduration" value="<?php echo $info['trtmtstopduration']?>"/>

<label>Duration
<span class="small">Days</span>
</label>
<input type="text" name="trtmtstopreason" id="trtmtstopreason" value="<?php echo $info['trtmtstopreason']?>"/>

</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Status Disclosure</legend>
<label>To:</label>
<input type="text" name="hivstatdisclosure" id="hivstatdisclosure" value="<?php echo $info['hivstatdisclosure']?>"/>

<label>Other
<span class="small">Other Persons Disclosed</span>
</label>
<input type="text" name="hivstatdisclosureother" id="hivstatdisclosureother" value="<?php echo $info['hivstatdisclosureother']?>"/>

<label>HIV Status Discussion
<span class="small">Status can be discussed with</span>
</label>
<input type="text" name="hivstatdiscussion" id="hivstatdiscussion" value="<?php echo $info['hivstatdiscussion']?>"/>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Is Patient a member of a support group</legend>
<label></label>
<input type="text" name="supportgrpyn" id="supportgrpyn" value="<?php echo $info['supportgrpyn']?>"/>
</fieldset>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Past or current ARV side effects</legend>
<label></label>
<textarea rows="3" cols="90" name="pastcurrarvsideeff" id="pastcurrarvsideeff"> <?php echo $info['pastcurrarvsideeff']?>
</textarea>

</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Physical Examination (note: NSF= No Significant Findings)</legend>
<fieldset>
<label>Temp
<span class="small">Celsius (°C)</span>
</label>
<input type="text" name="petemp" id="petemp" value="<?php echo $info['petemp']?>"/>

<label>BP
<span class="small">Blood Pressure(mmHg)</span>
</label>
<input type="text" name="pebp" id="pebp" value="<?php echo $info['pebp']?>"/>

<label>Pulse
<span class="small">Pulse</span>
</label>
<input type="text" name="pepulse" id="pepulse" value="<?php echo $info['pepulse']?>"/>

<label>Weight
<span class="small">Weight(kgs)</span>
</label>
<input type="text" name="peweight" id="peweight" value="<?php echo $info['peweight']?>"/>

<label>Height
<span class="small">Height(M)</span>
</label>
<input type="text" name="peheight" id="peheight" value="<?php echo $info['peheight']?>"/>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">General Appearance</legend>
<label></label>
<textarea rows="3" cols="90" name="pegenappearance" id="pegenappearance"> <?php echo $info['pegenappearance']?>
</textarea>

</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Skin</legend>
<label></label>
<textarea rows="3" cols="90" name="peskin" id="peskin"> <?php echo $info['peskin']?>
</textarea>

</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Head/Eye/ENT</legend>
<label></label>
<textarea rows="3" cols="90" name="peheadeye" id="peheadeye"> <?php echo $info['peheadeye']?>
</textarea>

</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Breast</legend>
<label></label>
<textarea rows="3" cols="90" name="pebreasts" id="pebreasts"> <?php echo $info['pebreasts']?>
</textarea>

</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Cardiovascular</legend>
<label></label>
<textarea rows="3" cols="90" name="pecardiovascular" id="pecardiovascular"> <?php echo $info['pebreasts']?>
</textarea>

</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Genitalia</legend>
<label></label>
<textarea rows="3" cols="90" name="pegenitalia" id="pegenitalia"> <?php echo $info['pegenitalia']?>
</textarea>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Respiratory</legend>
<label></label>
<textarea rows="3" cols="90" name="gerespiratory" id="gerespiratory"> <?php echo $info['gerespiratory']?>
</textarea>
<label>Rate
<span class="small">Breaths/Min</span>
</label>
<input type="text" name="gerespiratoryrate" id="gerespiratoryrate" value="<?php echo $info['gerespiratoryrate']?>" />
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Gastrointestinal</legend>
<label></label>
<textarea rows="3" cols="90" name="gegastrointestinal" id="gegastrointestinal"> <?php echo $info['gegastrointestinal']?>
</textarea>

</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Neurological</legend>
<label></label>
<textarea rows="3" cols="90" name="geneurological" id="geneurological"> <?php echo $info['geneurological']?>
</textarea>

</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Mental Status</legend>
<label></label>
<textarea rows="3" cols="90" name="gementalstatus" id="gementalstatus"> <?php echo $info['gementalstatus']?>
</textarea>

</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Additional and Detailed Finding</legend>
<textarea rows="3" cols="90" name="peadditional" id="peadditional"> <?php echo $info['peadditional']?>
</textarea>
</fieldset>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Assessment</legend>
<label></label>
<textarea rows="3" cols="90" name="assessment" id="assessment"> <?php echo $info['assessment']?>
</textarea>

</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">WHO Staging criteria (History of any of the following)</legend>
<fieldset>
<textarea rows="3" cols="90" name="whostagecriteria" id="whostagecriteria"> <?php echo $info['whostagecriteria']?>
</textarea>

</fieldset>
<label>WHO Stage
<span class="small">WHO Staging Number</span>
</label>
<input type="text" name="whostage" id="whostage" value="<?php echo $info['whostage']?>" />
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Plan (specify orders on requisition)</legend>
<label></label>
<textarea rows="3" cols="90" name="plan" id="plan"> <?php echo $info['plan']?>
</textarea>

<label>
<span class="small">Other plans</span>
</label>
<input type="text" name="planother" id="planother" value="<?php echo $info['planother']?>" />
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Enroll in</legend>
<label></label>
<input type="text" name="enrollin" id="enrollin" value="<?php echo $info['enrollin']?>" />
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Plan for ARV Therapy</legend>
<label></label>
<textarea rows="3" cols="90" name="planarvtherapy" id="planarvtherapy"> <?php echo $info['planarvtherapy']?>
</textarea>

<p></p>
<label>Reason</label>
<input type="text" name="planarvtherchgtrtmtreason" id="planarvtherchgtrtmtreason" value="<?php echo $info['planarvtherchgtrtmtreason'].$info['planarvtherstoptrtmtreason']?>" />
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Plan for ARV Therapy</legend>
<label ></label>
<textarea rows="3" cols="90" name="regimen1st" id="regimen1st"> <?php echo $info['regimen1st']?>
</textarea>
<label>
<span class="small">specify other</span>
</label>
<input type="text" name="regimenothers" id="regimenothers" value="<?php echo $info['regimenothers']?>" />
<label>Drugs in Regimen
<span class="small">Specify Drugs in Regimen selected</span>
</label>
<input type="text" name="regimendrugs" id="regimendrugs" value="<?php echo $info['regimendrugs']?>"/>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Next Appointment</legend>
<label ></label>
<input type="text" name="nextappointment" id="nextappointment" value="<?php echo $info['nextappointment']?>"/>

<label>Date
<span class="small">Next Appointment Date</span>
</label>
<input type="date" name="nextappointmentdate" id="nextappointmentdate" value="<?php echo $info['nextappointmentdate']?>"/>
</fieldset>
<label>Clinician's name
<span class="small">Name of Clinician</span>
</label>
<input type="text" name="Clinicianname" id="Clinicianname" value="<?php echo $info['Clinicianname']?>"/>

</fieldset>


<button type="submit">CONTINUE</button>
<div class="spacer"></div>

</form>
</div>
</body>
</html>
<?php session_write_close();?>