<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
session_start();

$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$_SESSION=$_GET;

class MyClass{
    public function GetUserInformation(){
		$pepid=$_GET['pepid'];
$query = "SELECT pepid, uniqueid,hospitalid,age,hivposdate,state,surname,othernames,sex,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate,symptomsreview,addiotnalsymcmments,pastmedicalhist,presentingcomplaint,addiotnalsymcmments,relfamilyhist,hospitalization,drugallergies,riskfactors,lastmenstrualperiod,currentlypregnant,gestationalage,edd,lastcd4,lastcd4date,lastvl,lastvldate,prevarvexp,prevfacilityname,prevdurationofcarefromdate,prevdurationofcaretodate,currentmedications,serviceentry,adherenceyn,missedadh3daysyn,missadhreason,trtmtinterruptionyn,trtmtinterdate,trtmtinterduration,trtmtinterreason,trtmtstopyn,trtmtstopdate,trtmtstopduration,trtmtstopreason,hivstatdisclosure,hivstatdisclosureother,hivstatdiscussion,supportgrpyn,pastcurrarvsideeff,petemp,pebp,pepulse,peweight,peheight,pegenappearance,peskin,peheadeye,pebreasts,pecardiovascular,pegenitalia,gerespiratory,gerespiratoryrate,gegastrointestinal,geneurological,gementalstatus,peadditional,assessment,whostagecriteria,whostage,plan,planlab,plantbs,planoip,planpep,planadh,planoit,planadm,planpain,planother,enrollin,planarvtherapy,planarvtherchgtrtmtreason,planarvtherstoptrtmtreason,regimen1st,regimenothers,regimendrugs,nextappointment,nextappointmentdate,Clinicianname,prevarvtype,missedadhcode,interradhcode,stopadhcode,assessmentnotes,regimen2nd,dur_fever,dur_nausea,dur_nsweats,dur_weigthl,dur_cough,dur_head,dur_rash,dur_itch,dur_diarh,dur_gendis,dur_genitch,dur_gensore,dur_shortbreath,dur_visimp,dur_painswall,dur_numb,dur_otherpain
FROM patient WHERE pepid = '$pepid'";
        $result = mysql_query($query);
        $info = mysql_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();
?>
<script src="drugcodetranslate.js"></script>
<script type="text/javascript">
function checkcd4()  
{  
if ((document.form.lastcd4.value<350)&& (document.form.lastcd4.value!=0)) 
document.getElementById('a5b').innerHTML ='Start on ART -- CD4<350';
else  
document.getElementById('a5b').innerHTML ='';  
}
</script>
<script src="drugcodetranslate.js"></script>
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
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: normal;
font-weight: normal;
color: #000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
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
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:100px;
float:left;
font-size:10px;
color:#666666;
}
.sidebar {
   width: 170px;
   height: 0px;
   position: fixed;
   left: 0px;
   top: 150px;
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

#stylized option{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
.tops{
   top: 8px;
   position: fixed;
   width:1335px;
	}

#stylized .small{
color:#666666;
display:block;
font-size:10px;
font-weight:normal;
text-align:left;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
margin:2px 0 20px 10px;
text-align:left;
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
#stylized .radio-toolbar input[type="radio"] {
font-weight:normal;
text-align:right;
float:left;
padding-right:0px;
width:20px;
}
#stylized .radio-toolbar label {
display:block;
font-weight:normal;
text-align:right;
float:left;
padding-right:0px;
position:absolute;
margin:1px 0 0px 10px;
}
#stylized .radio-toolbar input{
float:left;
padding-right:50px;
margin:1px 0 0px 10px;
position:inherit;
}


</style>
<script type="text/javascript">
function adtpepid(){
	var pepid = document.getElementById('pepid').value;
	var pepid = pepid.toUpperCase();
	if (pepid.length!=10){
				document.getElementById('doblabel2').innerHTML = "PepID Error: Wrong Length";
		}
		else if((pepid.indexOf("/") != -1)||(pepid.indexOf(" ") != -1)||(pepid.indexOf("*") != -1)||(pepid.indexOf("&") != -1)||(pepid.indexOf("?") != -1)||(pepid.indexOf("%") != -1)||(pepid.indexOf("$") != -1)||(pepid.indexOf("^") != -1)||(pepid.indexOf("(") != -1)||(pepid.indexOf(")") != -1)){
				document.getElementById('doblabel2').innerHTML = "PepID Error: Invalid Character";
			}
			else{
						document.getElementById('doblabel2').innerHTML = "";
				}
	}

function validateAge()
{
var today = new Date();
var del_date = new Date(document.getElementById('dob').value);
var del_date = del_date.getFullYear();
var td1 = today.getFullYear();
var intAge = td1 - del_date;
var str1="Age: "
var strAge= str1+(td1 - del_date)+"Yrs ";
document.getElementById('doblabel').innerHTML = str1+(td1 - del_date)+"Yrs";
if (intAge < 15){
	document.getElementById('doblabel2').innerHTML = "Enroll this Patient under pedriatic";
	}
	else{
		document.getElementById('doblabel2').innerHTML = "";
		}
}
function missedadh()
{
var missedadhcode = document.getElementById('missedadhcode').value;
if (missedadhcode == 1){
	document.getElementById('missadhreason').innerHTML = "Felt good";
	}
	else if(missedadhcode == 2){
		document.getElementById('missadhreason').innerHTML = "Forgot/Slept through";
		}
	else if(missedadhcode == 3){
		document.getElementById('missadhreason').innerHTML = "Couldn't adhere to schedule";
		}
	else if(missedadhcode == 4){
		document.getElementById('missadhreason').innerHTML = "Patient preference";
		}
	else if(missedadhcode == 5){
		document.getElementById('missadhreason').innerHTML = "Stigma of HIV/AIDS";
		}
	else if(missedadhcode == 6){
		document.getElementById('missadhreason').innerHTML = "Doctor's instruction";
		}
	else if(missedadhcode == 7){
		document.getElementById('missadhreason').innerHTML = "Never went back";
		}
	else if(missedadhcode == 8){
		document.getElementById('missadhreason').innerHTML = "Patient moved";
		}
	else if(missedadhcode == 9){
		document.getElementById('missadhreason').innerHTML = "Toxicity";
		}
	else if(missedadhcode == 10){
		document.getElementById('missadhreason').innerHTML = "Drug interaction";
		}
	else if(missedadhcode == 11){
		document.getElementById('missadhreason').innerHTML = "Ran out of medication";
		}
	else if(missedadhcode == 12){
		document.getElementById('missadhreason').innerHTML = "Drugs not available";
		}
	else if(missedadhcode == 13){
		document.getElementById('missadhreason').innerHTML = "Clinical failure";
		}
	else if(missedadhcode == 14){
		document.getElementById('missadhreason').innerHTML = "Immunologic failure";
		}
	else if(missedadhcode == 15){
		document.getElementById('missadhreason').innerHTML = "Virologic failure";
		}
	else if(missedadhcode == 16){
		document.getElementById('missadhreason').innerHTML = "Other(Specify)";
		}
	else {
		document.getElementById('missadhreason').innerHTML = "";
		}

}

function interradh()
{
var missedadhcode = document.getElementById('interradhcode').value;
if (missedadhcode == 1){
	document.getElementById('trtmtinterreason').innerHTML = "Felt good";
	}
	else if(missedadhcode == 2){
		document.getElementById('trtmtinterreason').innerHTML = "Forgot/Slept through";
		}
	else if(missedadhcode == 3){
		document.getElementById('trtmtinterreason').innerHTML = "Couldn't adhere to schedule";
		}
	else if(missedadhcode == 4){
		document.getElementById('trtmtinterreason').innerHTML = "Patient preference";
		}
	else if(missedadhcode == 5){
		document.getElementById('trtmtinterreason').innerHTML = "Stigma of HIV/AIDS";
		}
	else if(missedadhcode == 6){
		document.getElementById('trtmtinterreason').innerHTML = "Doctor's instruction";
		}
	else if(missedadhcode == 7){
		document.getElementById('trtmtinterreason').innerHTML = "Never went back";
		}
	else if(missedadhcode == 8){
		document.getElementById('trtmtinterreason').innerHTML = "Patient moved";
		}
	else if(missedadhcode == 9){
		document.getElementById('trtmtinterreason').innerHTML = "Toxicity";
		}
	else if(missedadhcode == 10){
		document.getElementById('trtmtinterreason').innerHTML = "Drug interaction";
		}
	else if(missedadhcode == 11){
		document.getElementById('trtmtinterreason').innerHTML = "Ran out of medication";
		}
	else if(missedadhcode == 12){
		document.getElementById('trtmtinterreason').innerHTML = "Drugs not available";
		}
	else if(missedadhcode == 13){
		document.getElementById('trtmtinterreason').innerHTML = "Clinical failure";
		}
	else if(missedadhcode == 14){
		document.getElementById('trtmtinterreason').innerHTML = "Immunologic failure";
		}
	else if(missedadhcode == 15){
		document.getElementById('trtmtinterreason').innerHTML = "Virologic failure";
		}
	else if(missedadhcode == 16){
		document.getElementById('trtmtinterreason').innerHTML = "Other(Specify)";
		}
	else {
		document.getElementById('trtmtinterreason').innerHTML = "";
		}
		
}
function stopadh()
{
var missedadhcode = document.getElementById('stopadhcode').value;
if (missedadhcode == 1){
	document.getElementById('trtmtstopreason').innerHTML = "Felt good";
	}
	else if(missedadhcode == 2){
		document.getElementById('trtmtstopreason').innerHTML = "Forgot/Slept through";
		}
	else if(missedadhcode == 3){
		document.getElementById('trtmtstopreason').innerHTML = "Couldn't adhere to schedule";
		}
	else if(missedadhcode == 4){
		document.getElementById('trtmtstopreason').innerHTML = "Patient preference";
		}
	else if(missedadhcode == 5){
		document.getElementById('trtmtstopreason').innerHTML = "Stigma of HIV/AIDS";
		}
	else if(missedadhcode == 6){
		document.getElementById('trtmtstopreason').innerHTML = "Doctor's instruction";
		}
	else if(missedadhcode == 7){
		document.getElementById('trtmtstopreason').innerHTML = "Never went back";
		}
	else if(missedadhcode == 8){
		document.getElementById('trtmtstopreason').innerHTML = "Patient moved";
		}
	else if(missedadhcode == 9){
		document.getElementById('trtmtstopreason').innerHTML = "Toxicity";
		}
	else if(missedadhcode == 10){
		document.getElementById('trtmtstopreason').innerHTML = "Drug interaction";
		}
	else if(missedadhcode == 11){
		document.getElementById('trtmtstopreason').innerHTML = "Ran out of medication";
		}
	else if(missedadhcode == 12){
		document.getElementById('trtmtstopreason').innerHTML = "Drugs not available";
		}
	else if(missedadhcode == 13){
		document.getElementById('trtmtstopreason').innerHTML = "Clinical failure";
		}
	else if(missedadhcode == 14){
		document.getElementById('trtmtstopreason').innerHTML = "Immunologic failure";
		}
	else if(missedadhcode == 15){
		document.getElementById('trtmtstopreason').innerHTML = "Virologic failure";
		}
	else if(missedadhcode == 16){
		document.getElementById('trtmtstopreason').innerHTML = "Other(Specify)";
		}
	else {
		document.getElementById('trtmtstopreason').innerHTML = "";
		}
}

function format(input){
 var num = input.value.replace(/\,/g,'');
  if(!isNaN(num)){
   if(num.indexOf('.') > -1){
   num = num.split('.');
   num[0] = num[0].toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1,').split('').reverse().join('').replace(/^[\,]/,'');
   if(num[1].length > 2){
    alert('You may only enter two decimals!');
    num[1] = num[1].substring(0,num[1].length-1);
   } input.value = num[0]+'.'+num[1];
  } else {
   input.value = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1,').split('').reverse().join('').replace(/^[\,]/,'') };
  } else {
   alert('You may enter only numbers in this field!');
   input.value = input.value.substring(0,input.value.length-10);
  }
}
 
// Limit the text field to only numbers (no decimals)
 
function formatInt(input){
  var num = input.value.replace(/\,/g,'');
  if(!isNaN(num)){
    if(num.indexOf('.') > -1) {
      alert("You may not enter any decimals.");
      input.value = input.value.substring(0,input.value.length-10);
    }
  } else {
    alert('You may enter only numbers in this field!');
    input.value = input.value.substring(0,input.value.length-10);
  }
}

function bmicalc(){
	var weight = document.getElementById('peweight').value;
	var height = document.getElementById('peheight').value;
	var heightcm = height*100;
	var bsa = (heightcm*weight)/3600;
	var bsa = Math.sqrt(bsa);
	var bmi = weight/(height*height);
	if(weight&&height){
	document.getElementById('bmilabel').innerHTML = "BMI: "+Math.round(bmi);
	document.getElementById('bsalabel').innerHTML = "BSA: "+Math.round(bsa);
	}
}



</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - A.I.C.E.</title>

</head>
<div class="tops">
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">Adult Patient&nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>
<a href="./Welcome.php" style="font-weight:bold; font-size:14px; color:#2A00FF">[MAIN MENU]</a> &nbsp;&nbsp;&nbsp;&nbsp;
<a href="javascript:history.go(-1)">[BACK]</a>
</div>
<br />
<br />
<br />
<br />
<body onload="if(document.referrer=='') self.location='./index.php';anccheck();arvexpcheck();adherencecheck();missedadhcheck();interradhcheck();stopadhcheck();allergychk();bmicalc()">
<div id="stylized" class="myform">
<form id="formId" name="form" method="POST">
<fieldset style="height:20px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">1. Visit Date</span>
</label>
<input type="date" name="visitdate" id="visitdate" required="required" placeholder="YYYY-MM-DD" value="<?php echo $info['enroldate']?>" style="width:120px; height:10px; float:left"/>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold"> 2. Date HIV confirmed</span>
</label>
<input type="date" name="hivposdate" id="hivposdate" placeholder="YYYY-MM-DD" readonly required value="<?php echo $info['hivposdate']?>" style="width:120px; height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<br />
<fieldset style="width:822px; height:20px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">3. Patient Surname</span>
</label>
<input type="text" name="surname" id="surname" required="required" placeholder="Required" value="<?php echo $info['surname']?>" style="width:120px; height:10px;"/>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
       <label>
<span class="small" style="font-weight:bold">4. Other names</span>
</label>
<input type="text" name="othernames" id="othernames" required="required" placeholder="Required" value="<?php echo $info['othernames']?>" style="width:120px; height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<br />
<fieldset style="width:822px; height:30px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">5. Unique ID</span>
</label>
<input type="text" name="uniqueid" id="uniqueid" readonly placeholder="   -    -    " value="<?php echo $info['uniqueid']?>" style="width:120px; height:10px;" />
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Hospital (unit) No</span>
</label>
<input type="text" name="hospitalno" id="hospitalno" readonly value="<?php echo $info['hospitalid']?>" style="width:120px;height:10px;" />

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Patient ID</span>
</label>
<input type="text" name="pepid" id="pepid" required="required" readonly placeholder="Required" value="<?php echo $info['pepid']?>" onchange="adtpepid()" style="width:120px; height:10px; font-weight:bold" />

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<fieldset style="width:822px; height:30px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label><span class="small" style="font-weight:bold">7. Sex</span></label>
<table>
<tr>
<td><input type="radio" name="sex" id="sexmale" value="male" <?php if ($info['sex']=='male'||$info['sex']=='Male'||$info['sex']=='m'||$info['sex']=='M') { echo 'checked'; } ?> required="required" onchange="anccheck()" />Male</td>
<td><input type="radio" name="sex" id="sexfemale" value="Female" <?php if ($info['sex']=='Female'||$info['sex']=='female'||$info['sex']=='F'||$info['sex']=='f') { echo 'checked'; } ?> required="required" onchange="anccheck()"/>Female</td>
</tr>
</table>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">8. LGA</span>
</label>
<input type="text" name="lga" id="lga" value="<?php echo $info['lga']?>" style="width:120px;height:10px;"/>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">9. Facility Name</span>
</label>
<input type="text" name="facilityname" id="facilityname" value="<?php echo $info['facilityname']?>" style="width:120px;height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<fieldset style="width:822px; height:35px;">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">10. ANC No.</span>
</label>
<input type="text" name="ancno" id="ancno" value="<?php echo $info['ancno']?>" style="width:120px;height:10px;"/>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">11. Date of Birth</span>
</label>
<input type="date" name="dob" id="dob" required="required" value="<?php echo $info['dob']?>" placeholder="Required" onChange="validateAge()" style="width:118px;height:10px;"/> 

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Age(yrs)</span>
</label>
<input type="text" name="agecalc" id="agecalc" readonly value="<?php echo $info['age']?>" style="width:25px;height:10px;"/>
       
        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
<div style="width: 300px; display: table-cell;"> 
<fieldset style="width:300">
<legend style="font-weight:bold; font-size:11px">13. Marital Status:</legend>
<label></label>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="maritalstatus" value="Single" <?php if ($info['maritalstatus']=='Single') { echo 'checked'; } ?>/>Single</td>
<td><input type="radio" name="maritalstatus" value="Widowed" <?php if ($info['maritalstatus']=='Widowed') { echo 'checked'; } ?>/>Widowed</td>
</tr>
<tr>
<td><input type="radio" name="maritalstatus" value="Married" <?php if ($info['maritalstatus']=='Married') { echo 'checked'; } ?>/>Married</td>
<td><input type="radio" name="maritalstatus" value="Separated" <?php if ($info['maritalstatus']=='Separated') { echo 'checked'; } ?> />Separated</td>
</tr>
<tr>
<td><input type="radio" name="maritalstatus" value="Divorced" <?php if ($info['maritalstatus']=='Divorced') { echo 'checked'; } ?>/>Divorced</td>
</tr>
</table>
</div>
</fieldset>
         </div>
        <div style="display: table-cell;"> 
<fieldset style="width:275px">
<legend style="font-weight:bold; font-size:11px;">14. Educational Level:</legend>
<div class="radio-toolbar"> 
<label></label>
<table>
<tr>
<td><input type="radio" name="educationallevel" value="None" <?php if ($info['educationallevel']=='None') { echo 'checked'; } ?>/>None</td>
<td><input type="radio" name="educationallevel" value="Quranic" <?php if ($info['educationallevel']=='Quranic') { echo 'checked'; } ?>/>Quranic</td>
</tr>
<tr>
<td><input type="radio" name="educationallevel" value="Primary" <?php if ($info['educationallevel']=='Primary') { echo 'checked'; } ?>/>Primary</td>
<td><input type="radio" name="educationallevel" value="Junior Secondary" <?php if ($info['educationallevel']=='Junior Secondary') { echo 'checked'; } ?>/>Junior Secondary</td>
</tr>
<tr>
<td><input type="radio" name="educationallevel" value="Senior Secondary" <?php if ($info['educationallevel']=='Senior Secondary'||$info['educationallevel']=='Secondary') { echo 'checked'; } ?>/>Senior Secondary</td>
<td><input type="radio" name="educationallevel" value="Post Secondary" <?php if ($info['educationallevel']=='Post Secondary'||$info['educationallevel']=='Tertiary') { echo 'checked'; } ?>/>Post Secondary</td>
</tr>
</table>
</div>
</fieldset>
        </div>
        <div style="display: table-cell;"> 
<fieldset style="width:270;  height:72px">
<legend style="font-weight:bold; font-size:11px">15. Job/Occupation Status:</legend>
<div class="radio-toolbar">
<label></label>
<table>
<tr>
<td><input type="radio" name="jobstatus" value="Unemployed" <?php if ($info['jobstatus']=='Unemployed'||$info['jobstatus']=='HOUSE WIFE') { echo 'checked'; } ?>/>Unemployed</td>
<td><input type="radio" name="jobstatus" value="Student" <?php if ($info['jobstatus']=='Student') { echo 'checked'; } ?>/>Student</td>
</tr>
<tr>
<td><input type="radio" name="jobstatus" value="Employed" <?php if ($info['jobstatus']=='Employed'||$info['jobstatus']=='TRADING'||$info['jobstatus']=='TAILORING'||$info['jobstatus']=='APPRENTICE'||$info['jobstatus']=='BEER SELLER'||$info['jobstatus']=='FOOD SELLER'||$info['jobstatus']=='CIVIL SERVANT'||$info['jobstatus']=='INTERN'||$info['jobstatus']=='TEACHING'||$info['jobstatus']=='LAND OFFICER'||$info['jobstatus']=='MEAT SELLER'||$info['jobstatus']=='MECHANIC'||$info['jobstatus']=='DRIVER'||$info['jobstatus']=='MEDICAL PRACTITIONER'||$info['jobstatus']=='FASHION DESIGNER'||$info['jobstatus']=='FARMER'||$info['jobstatus']=='BUSINESS WOMAN'||$info['jobstatus']=='REWIRE'||$info['jobstatus']=='JOB SEEKER'||$info['jobstatus']=='SECRETARY'||$info['jobstatus']=='STUDENT NURSE'||$info['jobstatus']=='FACTORY WORKER'||$info['jobstatus']=='HAIR DRESSER'||$info['jobstatus']=='DRIVING'||$info['jobstatus']=='TRADER'||$info['jobstatus']=='LECTURER'||$info['jobstatus']=='BUSINESS MAN') { echo 'checked'; } ?>/>Employed</td>
<td><input type="radio" name="jobstatus" value="Retired" <?php if ($info['jobstatus']=='Retired') { echo 'checked'; } ?>/>Retired</td>
</tr>
</table>
</ul>
</div>
</fieldset>
       </div>
   </div>
</div>
<div style="width: 100%; display: table;">
<div style="display: table-row">
<div style="width: 300px; display: table-cell;"> 
<fieldset>
<legend style="font-weight:bold; font-size:11px">16. Where does the patient live:</legend>
<label>Address
</label>
<input type="text" name="address" id="address" value="<?php echo $info['address']?>" style="width:120px; height:10px;"/>

<label>Ward/Village
</label>
<input type="text" name="addrwardvillage" id="addrwardvillage" value="<?php echo $info['wardvillage']?>" style="width:120px; height:10px;"/>

<label>Town Name
</label>
<input type="text" name="addrtown" id="addrtown" value="<?php echo $info['town']?>" style="width:120px; height:10px;"/>

<label>LGA
</label>
<input type="text" name="addrlga" id="addrlga" value="<?php echo $info['addrlga']?>" style="width:120px; height:10px;"/>

<label>State
</label>
<input type="text" name="state" id="state" value="<?php echo $info['state']?>" style="width:120px; height:10px;"/>


<label>Phone Number
</label>
<input type="text" name="phoneno" id="phoneno" value="<?php echo $info['phoneno']?>" style="width:120px; height:10px;"/>

</fieldset>
       </div>
        <div style="display: table-cell;"> 
<fieldset style="height:262px">
<legend style="font-weight:bold; font-size:11px">17. Contact person/next of kin:</legend>
<label>Name
</label>
<input type="text" name="nokname" id="nokname" value="<?php echo $info['nokname']?>" style="width:120px; height:10px;"/>

<label>Relationship
</label>
<input type="text" name="nokrelationship" id="nokrelationship" value="<?php echo $info['nokrelationship']?>" style="width:120px; height:10px;"/>

<label>Address
</label>
<input type="text" name="nokaddr" id="nokaddr" value="<?php echo $info['nokaddr']?>" style="width:120px; height:10px;"/>

<label>Ward/Village
</label>
<input type="text" name="nokwardvillage" id="nokwardvillage" value="<?php echo $info['nokwardvillage']?>" style="width:120px; height:10px;"/>

<label>Town Name
</label>
<input type="text" name="noktown" id="noktown" value="<?php echo $info['noktown']?>" style="width:120px; height:10px;"/>

<label>State
</label>
<input type="text" name="nokstate" id="nokstate" value="<?php echo $info['nokstate']?>" style="width:120px; height:10px;"/>

<label>Phone Number
</label>
<input type="text" name="nokphoneno" id="nokphoneno" value="<?php echo $info['nokphoneno']?>" style="width:120px; height:10px;"/>
</fieldset>
        </div>
    </div>
</div>
<button type="submit" id="submit">UPDATE</button>
<div class="spacer"></div>
</form>
<script src="jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$('#submit').click( function() {
			var query = $('#formId').serialize();
			var pepid = $('#pepid').val();
        	var url = 'getpatientupdate.php';
        	$.post(url, 
        	query, 
        	function (response) {
        	alert ("Patient Record Added");
			});
		window.location.href="./totalpatientlist.php";    
		alert ("Patient Record Updated");
		return false;
	
	});
</script> 

</div>
</body>
</head>