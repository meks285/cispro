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
  

class MyClass{
    public function GetUserInformation(){
$query = "SELECT pepid, uniqueid,hospitalid,age,hivposdate,state,surname,othernames,sex,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate,symptomsreview,addiotnalsymcmments,pastmedicalhist,presentingcomplaint,addiotnalsymcmments,relfamilyhist,hospitalization,drugallergies,riskfactors,lastmenstrualperiod,currentlypregnant,gestationalage,edd,lastcd4,lastcd4date,lastvl,lastvldate,prevarvexp,prevfacilityname,prevdurationofcarefromdate,prevdurationofcaretodate,currentmedications,serviceentry,adherenceyn,missedadh3daysyn,missadhreason,trtmtinterruptionyn,trtmtinterdate,trtmtinterduration,trtmtinterreason,trtmtstopyn,trtmtstopdate,trtmtstopduration,trtmtstopreason,hivstatdisclosure,hivstatdisclosureother,hivstatdiscussion,supportgrpyn,pastcurrarvsideeff,petemp,pebp,pepulse,peweight,peheight,pegenappearance,peskin,peheadeye,pebreasts,pecardiovascular,pegenitalia,gerespiratory,gerespiratoryrate,gegastrointestinal,geneurological,gementalstatus,peadditional,assessment,whostagecriteria,whostage,plan,planlab,plantbs,planoip,planpep,planadh,planoit,planadm,planpain,planother,enrollin,planarvtherapy,planarvtherchgtrtmtreason,planarvtherstoptrtmtreason,regimen1st,regimenothers,regimendrugs,nextappointment,nextappointmentdate,Clinicianname,prevarvtype,missedadhcode,interradhcode,stopadhcode,assessmentnotes,regimen2nd,dur_fever,dur_nausea,dur_nsweats,dur_weigthl,dur_cough,dur_head,dur_rash,dur_itch,dur_diarh,dur_gendis,dur_genitch,dur_gensore,dur_shortbreath,dur_visimp,dur_painswall,dur_numb,dur_otherpain
FROM patient WHERE pepid = 'TEST'";
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
<h1 align="center" style="background-color:#0F3">Adult Initial Clinical Evaluation</h1>
<body onload="anccheck();arvexpcheck();adherencecheck();missedadhcheck();interradhcheck();stopadhcheck();allergychk();bmicalc()">
<a href="javascript:history.go(-1)">Back</a>
<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="updateie.php">
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
<input type="date" name="hivposdate" id="hivposdate" placeholder="YYYY-MM-DD" required value="<?php echo $info['hivposdate']?>" style="width:120px; height:10px;"/>

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
<input type="text" name="uniqueid" id="uniqueid" placeholder="   -    -    " value="<?php echo $info['uniqueid']?>" style="width:120px; height:10px;" />
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Hospital (unit) No</span>
</label>
<input type="text" name="hospitalno" id="hospitalno" value="<?php echo $info['hospitalid']?>" style="width:120px;height:10px;" />

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Patient ID</span>
</label>
<input type="text" name="pepid" id="pepid" required="required" placeholder="Required" value="<?php echo $info['pepid']?>" onchange="adtpepid()" style="width:120px; height:10px; font-weight:bold" />

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
<td><input type="radio" name="sex" id="sexmale" value="male" <?php if ($info['sex']=='male') { echo 'checked'; } ?> required="required" onchange="anccheck()" />Male</td>
<td><input type="radio" name="sex" id="sexfemale" value="Female" <?php if ($info['sex']=='Female') { echo 'checked'; } ?> required="required" onchange="anccheck()"/>Female</td>
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
<input type="text" name="agecalc" id="agecalc" value="<?php echo $info['age']?>" style="width:25px;height:10px;"/>
       
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
<td><input type="radio" name="educationallevel" value="Senior Secondary" <?php if ($info['educationallevel']=='Senior Secondary') { echo 'checked'; } ?>/>Senior Secondary</td>
<td><input type="radio" name="educationallevel" value="Post Secondary" <?php if ($info['educationallevel']=='Post Secondary') { echo 'checked'; } ?>/>Post Secondary</td>
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
<td><input type="radio" name="jobstatus" value="Unemployed" <?php if ($info['jobstatus']=='Unemployed') { echo 'checked'; } ?>/>Unemployed</td>
<td><input type="radio" name="jobstatus" value="Student" <?php if ($info['jobstatus']=='Student') { echo 'checked'; } ?>/>Student</td>
</tr>
<tr>
<td><input type="radio" name="jobstatus" value="Employed" <?php if ($info['jobstatus']=='Employed') { echo 'checked'; } ?>/>Employed</td>
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
<fieldset style="border:none">
<legend style="font-weight:bold; font-size:11px">18. Presenting Complaint</legend>
<textarea rows="3" cols="90" name="presentingcomplaint" id="presentingcomplaint" >
<?php echo $info['presentingcomplaint']?>
</textarea>

</fieldset>
<legend style="font-weight:bold; font-size:11px">MEDICAL HISTORY</legend>
<fieldset>
<legend style="font-weight:bold; font-size:11px">19. Symptom Review</legend>
<div class="checkbox-toolbar"> 
<table>
<tr>
<td></td>
<td>Duration(days)</td>
<td></td>
<td>Duration(days)</td>
<td></td>
<td>Duration(days)</td>
</tr>
<tr>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Fever/Chills" <?php if (strpos($info['symptomsreview'],'Fever/Chills') !== false) { echo 'checked'; }?> >Fever/Chills</td>
<td><input type="text" name="dur_fever" id="dur_fever" style="width:20%;height:10px;" value="<?php echo $info['dur_fever']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Rash" <?php if (strpos($info['symptomsreview'],'Rash') !== false) { echo 'checked'; }?> >Rash </td>
<td><input type="text" name="dur_rash" id="dur_rash" style="width:20%;height:10px;" value="<?php echo $info['dur_rash']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Shortness of Breath" <?php if (strpos($info['symptomsreview'],'Shortness of Breath') !== false) { echo 'checked'; }?> >Shortness of Breath</td>
<td><input type="text" name="dur_shortbreath" id="dur_shortbreath" style="width:20%;height:10px;" value="<?php echo $info['dur_shortbreath']?>"/></td>
</tr>
<tr> 
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Nausea/Vomitting" <?php if (strpos($info['symptomsreview'],'Nausea/Vomitting') !== false) { echo 'checked'; }?> >Nausea/ Vomitting</td>
<td><input type="text" name="dur_nausea" id="dur_nausea" style="width:20%;height:10px;" value="<?php echo $info['dur_nausea']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Itching" <?php if (strpos($info['symptomsreview'],'Itching') !== false) { echo 'checked'; }?> >Itching</td>
<td><input type="text" name="dur_itch" id="dur_itch" style="width:20%;height:10px;" value="<?php echo $info['dur_itch']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="New Visual Imparity" <?php if (strpos($info['symptomsreview'],'New Visual Imparity') !== false) { echo 'checked'; }?> >New Visual Imparity</td>
<td><input type="text" name="dur_visimp" id="dur_visimp" style="width:20%;height:10px;" value="<?php echo $info['dur_visimp']?>"/></td>
</tr>
<tr>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Night Sweats" <?php if (strpos($info['symptomsreview'],'Night Sweats') !== false) { echo 'checked'; }?> >Night Sweats </td>
<td><input type="text" name="dur_nsweats" id="dur_nsweats" style="width:20%;height:10px;" value="<?php echo $info['dur_nsweats']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Chronic Diarrhea" <?php if (strpos($info['symptomsreview'],'Chronic Diarrhea') !== false) { echo 'checked'; }?> >Chronic Diarrhea</td>
<td><input type="text" name="dur_diarh" id="dur_diarh" style="width:20%;height:10px;" value="<?php echo $info['dur_diarh']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Pain/Difficulty when swallowing" <?php if (strpos($info['symptomsreview'],'Pain/Difficulty when swallowing') !== false) { echo 'checked'; }?> >Pain when swallowing</td>
<td><input type="text" name="dur_painswall" id="dur_painswall" style="width:20%;height:10px;" value="<?php echo $info['dur_painswall']?>"/></td>
</tr>
<tr> 
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Recent Weight Loss" <?php if (strpos($info['symptomsreview'],'Recent Weight Loss') !== false) { echo 'checked'; }?> >Recent Weight Loss</td>
<td><input type="text" name="dur_weigthl" id="dur_weigthl" style="width:20%;height:10px;" value="<?php echo $info['dur_weigthl']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Genital Discharge" <?php if (strpos($info['symptomsreview'],'Genital Discharge') !== false) { echo 'checked'; }?> >Genital Discharge </td>
<td><input type="text" name="dur_gendis" id="dur_gendis" style="width:20%;height:10px;" value="<?php echo $info['dur_gendis']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Numbness/Tingling" <?php if (strpos($info['symptomsreview'],'Numbness/Tingling') !== false) { echo 'checked'; }?> >Numbness/ Tingling </td>
<td><input type="text" name="dur_numb" id="dur_numb" style="width:20%;height:10px;" value="<?php echo $info['dur_numb']?>"/></td>
</tr>
<tr>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Cough" <?php if (strpos($info['symptomsreview'],'Cough') !== false) { echo 'checked'; }?> >Cough</td>
<td><input type="text" name="dur_cough" id="dur_cough" style="width:20%;height:10px;" value="<?php echo $info['dur_cough']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Genital Itching" <?php if (strpos($info['symptomsreview'],'Genital Itching') !== false) { echo 'checked'; }?> >Genital Itching </td>
<td><input type="text" name="dur_genitch" id="dur_genitch" style="width:20%;height:10px;" value="<?php echo $info['dur_genitch']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Pain (other site)" <?php if (strpos($info['symptomsreview'],'Pain (other site)') !== false) { echo 'checked'; }?> >Pain (other site) </td>
<td><input type="text" name="dur_otherpain" id="dur_otherpain" style="width:20%;height:10px;" value="<?php echo $info['dur_otherpain']?>"/></td>
</tr>
<tr>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Headache" <?php if (strpos($info['symptomsreview'],'Headache') !== false) { echo 'checked'; }?> >Headache </td>
<td><input type="text" name="dur_head" id="dur_head" style="width:20%;height:10px;" value="<?php echo $info['dur_head']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Genital Sores" <?php if (strpos($info['symptomsreview'],'Genital Sores') !== false) { echo 'checked'; }?> >Genital Sores </td>
<td><input type="text" name="dur_gensore" id="dur_gensore" style="width:20%;height:10px;" value="<?php echo $info['dur_gensore']?>"/></td>
</tr>
</table>
</div>
<label>
<span class="small" style="font-weight:bold">20. Additional Comments</span>
</label>
<textarea rows="2" cols="90" name="addiotnalsymcmments" id="addiotnalsymcmments">
<?php echo $info['addiotnalsymcmments']?>
</textarea>

<label>
<span class="small" style="font-weight:bold">21. Past Medical History</span>
</label>
<textarea rows="3" cols="90" name="pastmedicalhist" id="pastmedicalhist">
<?php echo $info['pastmedicalhist']?>
</textarea>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">22. Relevant Family History</span>
</label>
<textarea rows="3" cols="40" name="relfamilyhist" id="relfamilyhist">
<?php echo $info['relfamilyhist']?>
</textarea>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">23. Hospitilization</span>
</label>
<textarea rows="3" cols="40" name="hospitalization" id="hospitalization">
<?php echo $info['hospitalization']?>
</textarea>

        </fieldset>
         </div>       
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 250px; display: table-cell;"> 
        <fieldset style="border:none">
        
<label>
<span class="small" style="font-weight:bold">24. Drug Allergies?</span>
<table>
<tr>
<td><input type="radio" name="knwnallergy" id="allyes" required="required" onchange="allergychk()" />Yes</td>
<td><input type="radio" name="knwnallergy" id="allno" required="required" onchange="allergychk()"/>No</td>
</tr>
</table>
</label>
<textarea rows="3" cols="90" name="drugallergies" id="drugallergies">
<?php echo $info['drugallergies']?>
</textarea>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
         </div>       
    </div>
</div>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 500px; display: table-cell;"> 
        <fieldset style="border:none">
        
<fieldset style="width:733px; height:60px">
<legend style="font-weight:bold; font-size:11px">25. Risk Factors</legend>
<table>
<tr>
<td><input type="checkbox" name="riskfactors[]" id="riskfactors" value="Unprotected Sex" <?php if (strpos($info['riskfactors'],'Unprotected Sex') !== false) { echo 'checked'; }?> >Unprotected Sex</td>
<td><input type="checkbox" name="riskfactors[]" id="riskfactors" value="Long Distance Drivers" <?php if (strpos($info['riskfactors'],'Long Distance Drivers') !== false) { echo 'checked'; }?> >Long Dist Drivers</td>
<td><input type="checkbox" name="riskfactors[]" id="riskfactors" value="Blood Transfusion" <?php if (strpos($info['riskfactors'],'Blood Transfusion') !== false) { echo 'checked'; }?> >Blood Transfusion </td>
<td><input type="checkbox" name="riskfactors[]" id="riskfactors" value="Commercial Sex Workers" <?php if (strpos($info['riskfactors'],'Commercial Sex Workers') !== false) { echo 'checked'; }?> >Commercial Sex Workers </td>
</tr>
<tr>
<td><input type="checkbox" name="riskfactors[]" id="riskfactors" value="Occupational Hazard" <?php if (strpos($info['riskfactors'],'Occupational Hazard') !== false) { echo 'checked'; }?> >Occupation Hazard</td>
<td><input type="checkbox" name="riskfactors[]" id="riskfactors" value="Harmful Traditional Practices" <?php if (strpos($info['riskfactors'],'Harmful Traditional Practices') !== false) { echo 'checked'; }?> >Harmful Traditional Practices</td>
<td><input type="checkbox" name="riskfactors[]" id="riskfactors" value="IDU" <?php if (strpos($info['riskfactors'],'IDU') !== false) { echo 'checked'; }?> >IDU </td>
</tr>
</table>
</fieldset>
     </fieldset>
         </div>
        <div style="display: table-cell;"> 
        
         </div>       
    </div>
</div>


<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="border:none">
        
<label>
<span class="small" style="font-weight:bold">26a. Last Menstrual Period</span>
</label>
<input type="date" name="lastmenstrualperiod" id="lastmenstrualperiod" style="width:120px; height:10px;" value="<?php echo $info['lastmenstrualperiod']?>"/>

<label>
<span class="small" style="font-weight:bold">26b. Currently Pregnant</span>
</label>
<input type="text" name="currentlypregnant" id="currentlypregnant" style="width:120px; height:10px;" value="<?php echo $info['currentlypregnant']?>"/>

<label>
<span class="small" style="font-weight:bold">26c. Gestational Age(wks)</span>
</label>
<input type="text" name="gestationalage" id="gestationalage" style="width:120px; height:10px;" value="<?php echo $info['gestationalage']?>"/>

<label>
<span class="small" style="font-weight:bold">26d. Expected Date of Delivery</span>
</label>
<input type="date" name="edd" id="edd" style="width:120px; height:10px;" value="<?php echo $info['edd']?>"/>
     </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none; width:300px; margin-left:200px">
        
<label>
<span class="small" style="font-weight:bold">27. Latest CD4(cells/mL)</span>
</label>
<input type="text" name="lastcd4" id="lastcd4" onChange="checkcd4()" style="width:120px; height:10px;" value="<?php echo $info['lastcd4']?>"/>

<label>
<span class="small" style="font-weight:bold">Date</span>
</label>
<input type="date" name="lastcd4date" id="lastcd4date" style="width:120px; height:10px;" value="<?php echo $info['lastcd4date']?>"/>

<label>
<span class="small"style="font-weight:bold">28. Latest VL(c/ml)</span>
</label>
<input type="text" name="lastvl" id="lastvl" style="width:120px; height:10px;" value="<?php echo $info['lastvl']?>"/>

<label>
<span class="small" style="font-weight:bold">Date</span>
</label>
<input type="date" name="lastvldate" id="lastvldate" style="width:120px; height:10px;" value="<?php echo $info['lastvldate']?>"/>
<label id="a5b" style="color:#F00; font-style:italic;"></label>
</fieldset>

          </div>       
    </div>
</div>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 250px; display: table-cell;"> 
        <fieldset style="border:none">
        
<label>30. Previous ARV Exposure</label><br>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="prevarvexp" id="prevarvmail" value="Yes" onClick="arvexpcheck()" <?php if ($info['prevarvexp']=='Yes') { echo 'checked'; } ?>/>Yes</td>
<td><input type="radio" name="prevarvexp" value="No" onChange="arvexpcheck()" <?php if ($info['prevarvexp']=='No') { echo 'checked'; } ?>/>No</td>
</tr>
</table>
</div>
<label>
<span class="small" style="font-weight:bold">30a.Name of facility</span>
</label>
<input type="text" name="prevfacilityname" id="prevfacilityname" style="width:120px; height:10px;" value="<?php echo $info['prevfacilityname']?>"/>


     </fieldset>
     <fieldset style="width:236px">
     <label>
<span class="small" style="font-weight:bold">30b. Duration of Care(From):</span>
</label>
<input type="date" name="prevdurationofcarefromdate" id="prevdurationofcarefromdate" style="width:120px; height:10px;" value="<?php echo $info['prevdurationofcarefromdate']?>"/>

<label>
<span class="small" style="font-weight:bold">30b. Duration of Care(To):</span>
</label>
<input type="date" name="prevdurationofcaretodate" id="prevdurationofcaretodate" style="width:120px; height:10px;" value="<?php echo $info['prevdurationofcaretodate']?>"/>
</fieldset>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="prevarvtype" id="prevarvtype" value="Transfer in with records" <?php if ($info['prevarvtype']=='Transfer in with records') { echo 'checked'; } ?>>Transfer in with records</td>
</tr>
<tr>
<td><input type="radio" name="prevarvtype" id="prevarvtype" value="Earlier ARV not transfer in" <?php if ($info['prevarvtype']=='Earlier ARV not transfer in') { echo 'checked'; } ?>>Earlier ARV not transfer in</td>
</tr>
<tr>
<td><input type="radio" name="prevarvtype" id="prevarvtype" value="PMTCT Only" <?php if ($info['prevarvtype']=='PMTCT Only') { echo 'checked'; } ?>>PMTCT Only</td>
</tr>
<tr>
<td><input type="radio" name="prevarvtype" id="prevarvtype" value="Never recieved ARVs" <?php if ($info['prevarvtype']=='Never recieved ARVs') { echo 'checked'; } ?>>Never recieved ARVs</td>
</tr>
</table>
</div>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
<legend style="font-weight:bold; font-size:11px">31. Current Medications</legend>
<div class="checkbox-toolbar">
<table>
<tr>
<td><input type="checkbox" name="currentmedications[]" id="currentmedications" value="None" <?php if (strpos($info['currentmedications'],'None') !== false) { echo 'checked'; }?>>None</td>
</tr>
<tr>
<td><input type="checkbox" name="currentmedications[]" id="currentmedications" value="ART" <?php if (strpos($info['currentmedications'],'ART') !== false) { echo 'checked'; }?>>ART</td>
</tr>
<tr>
<td><input type="checkbox" name="currentmedications[]" id="currentmedications" value="CTX" <?php if (strpos($info['currentmedications'],'CTX') !== false) { echo 'checked'; }?>>CTX</td>
</tr>
<tr>
<td><input type="checkbox" name="currentmedications[]" id="currentmedications" value="Anti-TB" <?php if (strpos($info['currentmedications'],'Anti-TB') !== false) { echo 'checked'; }?>>Anti-TB Drugs</td>
</tr>
<tr>
<td><input type="checkbox" name="currentmedications[]" id="currentmedications" value="STI" <?php if (strpos($info['currentmedications'],'STI') !== false) { echo 'checked'; }?>>STI</td>
</tr>
<tr>
<td><input type="checkbox" name="currentmedications[]" id="currentmedications" value="OPD" <?php if (strpos($info['currentmedications'],'OPD') !== false) { echo 'checked'; }?>>OPD</td>
</tr>
<tr>
<td><input type="checkbox" name="currentmedications[]" id="currentmedications" value="HCT" <?php if (strpos($info['currentmedications'],'HCT') !== false) { echo 'checked'; }?>>HCT</td>
</tr>
<tr>
<td><input type="checkbox" name="currentmedications[]" id="currentmedications" value="HBC" <?php if (strpos($info['currentmedications'],'HBC') !== false) { echo 'checked'; }?>>HBC</td>
</tr>

</table>
</div>  
     </fieldset> 
         </div>      
                 <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
<legend style="font-weight:bold; font-size:11px">32. Service Entry into Program</legend>
<label></label>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="serviceentry" value="STI" <?php if ($info['serviceentry']=='STI') { echo 'checked'; } ?>/>STI</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="OPD" <?php if ($info['serviceentry']=='OPD') { echo 'checked'; } ?>/>OPD</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="HCT" <?php if ($info['serviceentry']=='HCT') { echo 'checked'; } ?>/>HCT</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="HBC" <?php if ($info['serviceentry']=='HBC') { echo 'checked'; } ?>/>HBC</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="Private" <?php if ($info['serviceentry']=='Private') { echo 'checked'; } ?>/>Private</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="TB" <?php if ($info['serviceentry']=='TB') { echo 'checked'; } ?>/>TB</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="Ward" <?php if ($info['serviceentry']=='Ward') { echo 'checked'; } ?>/>Ward</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="Casualty" <?php if ($info['serviceentry']=='Casualty') { echo 'checked'; } ?>/>Casualty</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="Public" <?php if ($info['serviceentry']=='Public') { echo 'checked'; } ?>/>Public</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="ANC/PMTCT" <?php if ($info['serviceentry']=='ANC/PMTCT') { echo 'checked'; } ?>/>ANC/PMTCT</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="Current Clinic Patient" <?php if ($info['serviceentry']=='Current Clinic Patient') { echo 'checked'; } ?>/>Current Clinic Patient</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="Self Referral" <?php if ($info['serviceentry']=='Self Referral') { echo 'checked'; } ?>/>Self Referral</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="Substance Use" <?php if ($info['serviceentry']=='Substance Use') { echo 'checked'; } ?>/>Substance Use</td>
</tr>
</table>
</div>
        </fieldset>
         </div>    
    </div>
</div>

</fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
       <fieldset>
<legend style="font-weight:bold; font-size:11px">33. Adherence: Complete if patient has recieved ART before coming to this facility</legend>
        <div style="width: 250px; display: table-cell;"> 
        <fieldset>
<label>a. Participating in an adherence program</label><br>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="adherenceyn" id="adhyes" value="Yes" onclick="adherencecheck();missedadhcheck();interradhcheck();stopadhcheck()" <?php if ($info['adherenceyn']=='Yes') { echo 'checked'; } ?>/>Yes</td>
<td><input type="radio" name="adherenceyn" value="No" onchange="adherencecheck()" <?php if ($info['adherenceyn']=='No') { echo 'checked'; } ?>/>No</td>
</tr>
</table>
</div>

<label> &nbsp;&nbsp; Missed ARV in the last 3 days</label><br>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="missedadh3daysyn" id="missedadhyes" value="Yes" onclick="missedadhcheck()" <?php if ($info['missedadh3daysyn']=='Yes') { echo 'checked'; } ?>/>Yes</td>
<td><input type="radio" name="missedadh3daysyn" value="No" onchange="missedadhcheck()" <?php if ($info['missedadh3daysyn']=='No') { echo 'checked'; } ?>/>No</td>
</tr>
</table>
</div>
<label>Enter Code why patient missed medication</label><br>
<table>
<tr>
<td><input type="text" name="missedadhcode" id="missedadhcode" style="width:20px; height:10px;" onchange="missedadh()" value="<?php echo $info['missedadhcode']?>"/></td>
</tr>
<tr>
<td><label id="missadhreason" style="color:#559FAA; font-style:italic;"></label></td>
</tr>
</table>

      </fieldset>

        <fieldset   style="width:236px">
<label>b. Treatment was interrupted</label><br>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="trtmtinterruptionyn" value="Yes" id="interradhyes" onclick="interradhcheck()" <?php if ($info['trtmtinterruptionyn']=='Yes') { echo 'checked'; } ?>/>Yes</td>
<td><input type="radio" name="trtmtinterruptionyn" value="No" onchange="interradhcheck()" <?php if ($info['trtmtinterruptionyn']=='No') { echo 'checked'; } ?>/>No</td>
</tr>
</table></div>

<label style="font-weight:bold">
Date:
</label>
<input type="date" name="trtmtinterdate" id="trtmtinterdate" style="width:120px; height:10px;" value="<?php echo $info['trtmtinterdate']?>"/>
<label style="font-weight:bold">
Number of days:
</label>
<input type="text" name="trtmtinterduration" id="trtmtinterduration" style="width:30px; height:10px;" value="<?php echo $info['trtmtinterduration']?>"/>
<label>Enter Code why patient interrupted medication</label><br>
<table>
<tr>
<td><input type="text" name="interradhcode" id="interradhcode" style="width:20px; height:10px;" onchange="interradh()" value="<?php echo $info['interradhcode']?>"/></td>
</tr>
<tr>
<td><label id="trtmtinterreason" style="color:#559FAA; font-style:italic;"></label></td>
</tr>
</table>

      </fieldset>

         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
<table>
<tr>
<td>1. Felt good</td>
<td>9. Toxicity</td>
</tr>
<tr>
<td>2. Forgot/slept through</td>
<td>10. Drug interaction</td>
</tr>
<tr>
<td>3. Couldn't adhere to schedule</td>
<td>11. Ran out of medication</td>
</tr>
<tr>
<td>4. Patient preference</td>
<td>12. Drugs not available</td>
</tr>
<tr>
<td>5. Stigma of HIV/AIDS</td>
<td>13. Clinical failure</td>
</tr>
<tr>
<td>6. Doctor's instruction</td>
<td>14. Immunologic failure</td>
</tr>
<tr>
<td>7. Never went back</td>
<td>15. Virologic failure</td>
</tr>
<tr>
<td>8. Patient Moved</td>
<td>16. Other(specify)</td>
</tr>
</table>
        <fieldset   style="width:236px">
<label>c. Treatment was Stopped</label><br>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="trtmtstopyn" value="Yes" id="stopadhyes" onclick="stopadhcheck()" <?php if ($info['trtmtstopyn']=='Yes') { echo 'checked'; } ?>/>Yes</td>
<td><input type="radio" name="trtmtstopyn" value="No" onchange="stopadhcheck()" <?php if ($info['trtmtstopyn']=='No') { echo 'checked'; } ?>/>No</td>
</tr>
</table></div>

<label style="font-weight:bold">
Date:
</label>
<input type="date" name="trtmtstopdate" id="trtmtstopdate" style="width:120px; height:10px;" value="<?php echo $info['trtmtstopdate']?>"/>
<label style="font-weight:bold">
Number of days:
</label>
<input type="text" name="trtmtstopduration" id="trtmtstopduration" style="width:30px; height:10px;" value="<?php echo $info['trtmtstopduration']?>"/>
<label>Enter Code why patient stopped medication</label><br>
<table>
<tr>
<td><input type="text" name="stopadhcode" id="stopadhcode" style="width:20px; height:10px;" onchange="stopadh()" value="<?php echo $info['stopadhcode']?>"/></td>
</tr>
<tr>
<td><label id="trtmtstopreason" style="color:#559FAA; font-style:italic;"></label></td>
</tr>
</table>

      </fieldset>

        </fieldset>
         </div>  
         </fieldset>     
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 250px; display: table-cell;"> 
        <fieldset style="border:none">
        
        
        <legend style="font-weight:bold; font-size:11px">34. Patient has disclosed status to:</legend>
<div class="checkbox-toolbar">
<table>
<tr>
<td><input type="checkbox" name="hivstatdisclosure[]" id="hivstatdisclosure" value="No one" <?php if (strpos($info['hivstatdisclosure'],'No one') !== false) { echo 'checked'; }?>>No one</td>
<td><input type="checkbox" name="hivstatdisclosure[]" id="hivstatdisclosure" value="Friend" <?php if (strpos($info['hivstatdisclosure'],'Friend') !== false) { echo 'checked'; }?>>Friend</td>
</tr>
<tr>
<td><input type="checkbox" name="hivstatdisclosure[]" id="hivstatdisclosure" value="Family Member" <?php if (strpos($info['hivstatdisclosure'],'Family Member') !== false) { echo 'checked'; }?>>Family Member</td>
<td><input type="checkbox" name="hivstatdisclosure[]" id="hivstatdisclosure" value="Spouse" <?php if (strpos($info['hivstatdisclosure'],'Spouse') !== false) { echo 'checked'; }?>>Spouse</td>
</tr>
<tr>
<td><input type="checkbox" name="hivstatdisclosure[]" id="hivstatdisclosure" value="Spiritual Leader" <?php if (strpos($info['hivstatdisclosure'],'Spiritual Leader') !== false) { echo 'checked'; }?>>Spiritual Leader</td>
</tr>
<tr>
<td><input type="checkbox" name="hivstatdisclosure[]" id="hivstatdisclosure" value="Other" <?php if (strpos($info['hivstatdisclosure'],'Other') !== false) { echo 'checked'; }?>>Other</td>
<td><input type="text" name="hivstatdisclosureother" id="hivstatdisclosureother" style="width:50px; height:10px;" value="<?php echo $info['hivstatdisclosureother']?>"
></td>
</tr>
</table>
</div>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        <legend style="font-weight:bold; font-size:11px">35. HIV status can be discussed with</legend>
<input type="text" name="hivstatdiscussion" id="hivstatdiscussion" style="width:120px; height:10px;" value="<?php echo $info['hivstatdiscussion']?>"
/>
        
        

        </fieldset>
         </div>       
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        <legend style="font-weight:bold; font-size:11px">36. Is patient a member of a support group</legend>
<div class="radio-toolbar">
<table>
<label></label>
<tr>
<td><input type="radio" name="supportgrpyn" value="Yes" <?php if ($info['supportgrpyn']=='Yes') { echo 'checked'; } ?>
/>Yes</td>
<td><input type="radio" name="supportgrpyn" value="No"  <?php if ($info['supportgrpyn']=='No') { echo 'checked'; } ?>/>No</td>
</tr>
</table>
</div>
        </fieldset>
         </div>       
    </div>
</div>

<fieldset>
<legend style="font-weight:bold; font-size:11px">37. Past or current ARV side effects</legend>
<div class="checkbox-toolbar">
<table>
<label></label>
<tr>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Signif. Nausea/Vomit" <?php if (strpos($info['pastcurrarvsideeff'],'Signif. Nausea/Vomit') !== false) { echo 'checked'; }?>>Signif. Nausea/Vomit</td>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Insomnia/Bad Dreams" <?php if (strpos($info['pastcurrarvsideeff'],'Insomnia/Bad Dreams') !== false) { echo 'checked'; }?>>Insomnia</td>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Steven Johnson Syndrome" <?php if (strpos($info['pastcurrarvsideeff'],'Steven Johnson Syndrome') !== false) { echo 'checked'; }?>>Steven Johnson Syndrome</td>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Fat accumulation" <?php if (strpos($info['pastcurrarvsideeff'],'Fat accumulation') !== false) { echo 'checked'; }?>>Fat accumulation or loss</td>
</tr>
<tr>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Headache" <?php if (strpos($info['pastcurrarvsideeff'],'Headache') !== false) { echo 'checked'; }?>>Headache</td>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Confusion/dizzy" <?php if (strpos($info['pastcurrarvsideeff'],'Confusion/dizzy') !== false) { echo 'checked'; }?>>Confusion/dizzy</td>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Itching" <?php if (strpos($info['pastcurrarvsideeff'],'Itching') !== false) { echo 'checked'; }?>>Itching</td>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Hyperglycemia" <?php if (strpos($info['pastcurrarvsideeff'],'Hyperglycemia') !== false) { echo 'checked'; }?>>Hyperglycemia</td>
</tr>
<tr>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Diarrhea" <?php if (strpos($info['pastcurrarvsideeff'],'Diarrhea') !== false) { echo 'checked'; }?>>Diarrhea</td>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Tingling of extremeties" <?php if (strpos($info['pastcurrarvsideeff'],'Tingling of extremeties') !== false) { echo 'checked'; }?>>Tingling of extremeties</td>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Anemia" <?php if (strpos($info['pastcurrarvsideeff'],'Anemia') !== false) { echo 'checked'; }?>>Anemia</td>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Kidney Problems" <?php if (strpos($info['pastcurrarvsideeff'],'Kidney Problems') !== false) { echo 'checked'; }?>>Kidney Problems</td>
</tr>
<tr>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Pain abdomen or muscle" <?php if (strpos($info['pastcurrarvsideeff'],'Pain abdomen or muscle') !== false) { echo 'checked'; }?>>Pain abdomen or muscle</td>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Rash" <?php if (strpos($info['pastcurrarvsideeff'],'Rash') !== false) { echo 'checked'; }?>>Rash </td>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Weakness/Fatigue" <?php if (strpos($info['pastcurrarvsideeff'],'Weakness/Fatigue') !== false) { echo 'checked'; }?>>Weakness/Fatigue</td>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Liver Problems" <?php if (strpos($info['pastcurrarvsideeff'],'Liver Problems') !== false) { echo 'checked'; }?>>Liver Problems</td>
</tr>
<tr>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Jaundice" <?php if (strpos($info['pastcurrarvsideeff'],'Jaundice') !== false) { echo 'checked'; }?>>Jaundice</td>
<td><input type="checkbox" name="pastcurrarvsideeff[]" id="pastcurrarvsideeff" value="Pancreatitis" <?php if (strpos($info['pastcurrarvsideeff'],'Pancreatitis') !== false) { echo 'checked'; }?>>Pancreatitis</td>
</tr>
</table>
</div>
</fieldset>
<label>38. Physical exam.</label>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 250px; display: table-cell;"> 
        <fieldset style="height:32px; width:100px">
<legend style="font-weight:bold; font-size:11px">Temp (°C)</legend>
<input type="text" name="petemp" id="petemp" style="width:40px; height:10px;" value="<?php echo $info['petemp']?>" onkeyup="format(this);"/>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
        <fieldset style="height:32px; width:100px">
<legend style="font-weight:bold; font-size:11px">BP (mm/Hg)</legend>
<input type="text" name="pebp" id="pebp" style="width:40px; height:10px;" value="<?php echo $info['pebp']?>" onkeyup="format(this);"/>
      </fieldset>
        </fieldset>
         </div>       
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
        <fieldset style="height:32px; width:100px">
<legend style="font-weight:bold; font-size:11px">Pulse:</legend>
<input type="text" name="pepulse" id="pepulse" style="width:40px; height:10px;" value="<?php echo $info['pepulse']?>" onkeyup="format(this);"/>
      </fieldset>
        </fieldset>
         </div>       
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
        <fieldset style="height:32px; width:100px">
<legend style="font-weight:bold; font-size:11px">Wt (kgs)</legend>
<input type="text" name="peweight" id="peweight" style="width:40px; height:10px;" value="<?php echo $info['peweight']?>" onchange="bmicalc()" onkeyup="format(this);"/>
      </fieldset>
        </fieldset>
         </div>       
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
        <fieldset style="height:32px; width:160px">
<legend style="font-weight:bold; font-size:11px">Ht (m)</legend>
<input type="text" name="peheight" id="peheight" style="width:120px; height:10px;" value="<?php echo $info['peheight']?>" onchange="bmicalc()" onkeyup="format(this);"/>
      </fieldset>
        </fieldset>
         </div>       
    </div>
</div>


<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label id="bmilabel" style="color:#007F00; font-style:italic; width:40px"></label>


      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label id="bsalabel" style="color:#007F00; font-style:italic;"></label>

        </fieldset>
         </div>
    </div>
</div>


<div style="width: 100%; display: table;">
    <div style="display: table-row">
<div style="width: 200px; display: table-cell;"> 
<fieldset style="height:361px">
<legend style="font-weight:bold; font-size:11px">General Appearance</legend>
<div class="checkbox-toolbar"> 
<table>
<tr>
<td><input type="checkbox" name="pegenappearance[]" id="pegenappearance" value="Palour" <?php if (strpos($info['pegenappearance'],'Palour') !== false) { echo 'checked'; }?>>Palour</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenappearance[]" id="pegenappearance" value="Febrile" <?php if (strpos($info['pegenappearance'],'Febrile') !== false) { echo 'checked'; }?>>Ferbrile</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenappearance[]" id="pegenappearance" value="Dehydrated" <?php if (strpos($info['pegenappearance'],'Dehydrated') !== false) { echo 'checked'; }?>>Dehydrated</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenappearance[]" id="pegenappearance" value="Jaunduce" <?php if (strpos($info['pegenappearance'],'Jaunduce') !== false) { echo 'checked'; }?>>Jaundice</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenappearance[]" id="pegenappearance" value="Peripheral Edema" <?php if (strpos($info['pegenappearance'],'Peripheral Edema') !== false) { echo 'checked'; }?>>Peripheral Edema</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenappearance[]" id="pegenappearance" value="Rash" <?php if (strpos($info['pegenappearance'],'Rash') !== false) { echo 'checked'; }?>>Rash</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenappearance[]" id="pegenappearance" value="Lymphadenopathy" <?php if (strpos($info['pegenappearance'],'Lymphadenopathy') !== false) { echo 'checked'; }?>>Lymphadenopathy</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenappearance[]" id="pegenappearance" value="No Significant Findings" <?php if (strpos($info['pegenappearance'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
</table>
</div>
</fieldset>
<fieldset style="height:296px">
<legend style="font-weight:bold; font-size:11px">Respiratory</legend>
<div class="checkbox-toolbar">
<table>
<tr>
<td><input type="checkbox" name="gerespiratory[]" id="gerespiratory" value="No Significant Findings" <?php if (strpos($info['gerespiratory'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
</table>
<label >
<span class="small" style="font-weight:bold">Rate(Breaths/Min)</span>
</label>
<input type="text" name="gerespiratoryrate" id="gerespiratoryrate" style="height:10px; width:25px" value="<?php echo $info['gerespiratoryrate']?>"/>
<table>
<label></label>
<tr>
<td><input type="checkbox" name="gerespiratory[]" id="gerespiratory" value="Labored breathing" <?php if (strpos($info['gerespiratory'],'Labored breathing') !== false) { echo 'checked'; }?>>Labored Breathing</td>
</tr>
<tr>
<td><input type="checkbox" name="gerespiratory[]" id="gerespiratory" value="Cyanosis" <?php if (strpos($info['gerespiratory'],'Cyanosis') !== false) { echo 'checked'; }?>>Cyanosis</td>
</tr>
<tr>
<td><input type="checkbox" name="gerespiratory[]" id="gerespiratory" value="Wheezing" <?php if (strpos($info['gerespiratory'],'Wheezing') !== false) { echo 'checked'; }?>>Wheezing</td>
</tr>
<tr>
<td><input type="checkbox" name="gerespiratory[]" id="gerespiratory" value="Intercostal (sub)Recession" <?php if (strpos($info['gerespiratory'],'Intercostal (sub)Recession') !== false) { echo 'checked'; }?>>Intercostal (sub)Recession</td>
</tr>
<tr>
<td><input type="checkbox" name="gerespiratory[]" id="gerespiratory" value="Auscultation Findings" <?php if (strpos($info['gerespiratory'],'Auscultation Findings') !== false) { echo 'checked'; }?>>Auscultation Findings</td>
</tr>
</table>
</div>
</fieldset>
         </div>
        <div style="display: table-cell;"> 
<fieldset style="height:361px">
<legend style="font-weight:bold; font-size:11px">Skin</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="peskin[]" id="peskin" value="No Significant Findings" <?php if (strpos($info['peskin'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
<tr>
<td><input type="checkbox" name="peskin[]" id="peskin" value="Pruritic Paplar Dermatitis" <?php if (strpos($info['peskin'],'Pruritic Paplar Dermatitis') !== false) { echo 'checked'; }?>>Pruritic Paplar Dermatitis</td>
</tr>
<tr>
<td><input type="checkbox" name="peskin[]" id="peskin" value="Abcesses" <?php if (strpos($info['peskin'],'Abcesses') !== false) { echo 'checked'; }?>>Abcesses</td>
</tr>
<tr>
<td><input type="checkbox" name="peskin[]" id="peskin" value="Herpes Zoster" <?php if (strpos($info['peskin'],'Herpes Zoster') !== false) { echo 'checked'; }?>>Herpes Zoster</td>
</tr>
<tr>
<td><input type="checkbox" name="peskin[]" id="peskin" value="Kaposis Lesions" <?php if (strpos($info['peskin'],'Kaposis Lesions') !== false) { echo 'checked'; }?>>Kaposi's Lesions</td>
</tr>
<tr>
<td><input type="checkbox" name="peskin[]" id="peskin" value="Suborrheic Dermatits" <?php if (strpos($info['peskin'],'Suborrheic Dermatits') !== false) { echo 'checked'; }?>>Suborrheic Dermatitis</td>
</tr>
<tr>
<td><input type="checkbox" name="peskin[]" id="peskin" value="Fungal Infections" <?php if (strpos($info['peskin'],'Fungal Infections') !== false) { echo 'checked'; }?>>Fungal Infections</td>
</tr>
</table>
</div>
</fieldset>
<fieldset style="height:297px">
<legend style="font-weight:bold; font-size:11px">Gastrointestinal</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="gegastrointestinal[]" id="gegastrointestinal" value="No Significant Findings" <?php if (strpos($info['gegastrointestinal'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
<tr>
<td><input type="checkbox" name="gegastrointestinal[]" id="gegastrointestinal" value="Dystention" <?php if (strpos($info['gegastrointestinal'],'Dystention') !== false) { echo 'checked'; }?>>Distention</td>
</tr>
<tr>
<td><input type="checkbox" name="gegastrointestinal[]" id="gegastrointestinal" value="Hepatomegaly" <?php if (strpos($info['gegastrointestinal'],'Hepatomegaly') !== false) { echo 'checked'; }?>>Hepatomegaly</td>
</tr>
<tr>
<td><input type="checkbox" name="gegastrointestinal[]" id="gegastrointestinal" value="Spenomegaly" <?php if (strpos($info['gegastrointestinal'],'Spenomegaly') !== false) { echo 'checked'; }?>>Spenomegaly</td>
</tr>
<tr>
<td><input type="checkbox" name="gegastrointestinal[]" id="gegastrointestinal" value="Tenderness" <?php if (strpos($info['gegastrointestinal'],'Tenderness') !== false) { echo 'checked'; }?>>Tenderness</td>
</tr>
</table>
</div>
</fieldset>
        </div>
        <div style="display: table-cell;"> 
<fieldset style="width:270; ">
<legend style="font-weight:bold; font-size:11px">Head/Eye/ENT</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="peheadeye[]" id="peheadeye" value="No Significant Findings" <?php if (strpos($info['peheadeye'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
<tr>
<td><input type="checkbox" name="peheadeye[]" id="peheadeye" value="Icterus" <?php if (strpos($info['peheadeye'],'Icterus') !== false) { echo 'checked'; }?>>Icterus</td>
</tr>
<tr>
<td><input type="checkbox" name="peheadeye[]" id="peheadeye" value="Thrush" <?php if (strpos($info['peheadeye'],'Thrush') !== false) { echo 'checked'; }?>>Thrush</td>
</tr>
<tr>
<td><input type="checkbox" name="peheadeye[]" id="peheadeye" value="Oral KS" <?php if (strpos($info['peheadeye'],'Oral KS') !== false) { echo 'checked'; }?>>Oral KS</td>
</tr>
<tr>
<td><input type="checkbox" name="peheadeye[]" id="peheadeye" value="Abnormal Fundoscopy" <?php if (strpos($info['peheadeye'],'Abnormal Fundoscopy') !== false) { echo 'checked'; }?>>Abnormal Fundoscopy</td>
</tr>
</table>
</div>
</fieldset>
<fieldset style="height:140px">
<legend style="font-weight:bold; font-size:11px">Cardiovascular</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="pecardiovascular[]" id="pecardiovascular" value="No Significant Findings" <?php if (strpos($info['pecardiovascular'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
<tr>
<td><input type="checkbox" name="pecardiovascular[]" id="pecardiovascular" value="Abnormal Heart rate" <?php if (strpos($info['pecardiovascular'],'Abnormal Heart rate') !== false) { echo 'checked'; }?>>Abn Heart rate</td>
</tr>
<tr>
<td><input type="checkbox" name="pecardiovascular[]" id="pecardiovascular" value="Auscultation Finding" <?php if (strpos($info['pecardiovascular'],'Auscultation Finding') !== false) { echo 'checked'; }?>>Auscultation Finding</td>
</tr>
</table>
</div>
</fieldset>
<fieldset style="height:297px">
<legend style="font-weight:bold; font-size:11px">Neurological</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="No Significant Findings" <?php if (strpos($info['geneurological'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="Orientation to TPP" <?php if (strpos($info['geneurological'],'Orientation to TPP') !== false) { echo 'checked'; }?>>Orientation to TPP</td>
</tr>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="Speech Slurs" <?php if (strpos($info['geneurological'],'Speech Slurs') !== false) { echo 'checked'; }?>>Speech Slurs</td>
</tr>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="Neck Stiffness" <?php if (strpos($info['geneurological'],'Neck Stiffness') !== false) { echo 'checked'; }?>>Neck Stiffness</td>
</tr>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="Blindness 1/2 Eyes" <?php if (strpos($info['geneurological'],'Blindness 1/2 Eyes') !== false) { echo 'checked'; }?>>Blindness</td>
</tr>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="Hemiplegia Paresis" <?php if (strpos($info['geneurological'],'Hemiplegia Paresis') !== false) { echo 'checked'; }?>>Hemiplegia</td>
</tr>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="Numbness of extremeties" <?php if (strpos($info['geneurological'],'Numbness of extremeties') !== false) { echo 'checked'; }?>>Numbness</td>
</tr>
</table>
</div>
</fieldset>


       </div>
        <div style="display: table-cell;"> 
<fieldset style="width:270; height:203px ">
<legend style="font-weight:bold; font-size:11px">Breast</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="pebreasts[]" id="pebreasts" value="No Significant Findings" <?php if (strpos($info['pebreasts'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
<tr>
<td><input type="checkbox" name="pebreasts[]" id="pebreasts" value="Lumps|Masses" <?php if (strpos($info['pebreasts'],'Lumps|Masses') !== false) { echo 'checked'; }?>>Lumps|Masses</td>
</tr>
<tr>
<td><input type="checkbox" name="pebreasts[]" id="pebreasts" value="Discharge" <?php if (strpos($info['pebreasts'],'Discharge') !== false) { echo 'checked'; }?>>Discharge</td>
</tr>
</table>
</div>
</fieldset>
<fieldset style="height:140px">
<legend style="font-weight:bold; font-size:11px">Genitalia</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="pegenitalia[]" id="pegenitalia" value="No Significant Findings" <?php if (strpos($info['pegenitalia'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenitalia[]" id="pegenitalia" value="Genital Discharge" <?php if (strpos($info['pegenitalia'],'Genital Discharge') !== false) { echo 'checked'; }?>>Genital Discharge</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenitalia[]" id="pegenitalia" value="Genital Ulcer/Other Lesion" <?php if (strpos($info['pegenitalia'],'Genital Ulcer/Other Lesion') !== false) { echo 'checked'; }?>>Genital Ulcer</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenitalia[]" id="pegenitalia" value="Inguinal Node Enlargement" <?php if (strpos($info['pegenitalia'],'Inguinal Node Enlargement') !== false) { echo 'checked'; }?>>Ing. Node Enl.</td>
</tr>
</table>
</div>
</fieldset>
<fieldset style="height:297px">
<legend style="font-weight:bold; font-size:11px">Mental Status</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="gementalstatus[]" id="gementalstatus" value="No Significant Findings" <?php if (strpos($info['gementalstatus'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
<tr>
<td><input type="checkbox" name="gementalstatus[]" id="gementalstatus" value="Slow Mentation" <?php if (strpos($info['gementalstatus'],'Slow Mentation') !== false) { echo 'checked'; }?>>Slow Mentation</td>
</tr>
<tr>
<td><input type="checkbox" name="gementalstatus[]" id="gementalstatus" value="Memory Loss" <?php if (strpos($info['gementalstatus'],'Memory Loss') !== false) { echo 'checked'; }?>>Memory Loss</td>
</tr>
<tr>
<td><input type="checkbox" name="gementalstatus[]" id="gementalstatus" value="Mood Swings" <?php if (strpos($info['gementalstatus'],'Mood Swings') !== false) { echo 'checked'; }?>>Mood Swings</td>
</tr>
<tr>
<td><input type="checkbox" name="gementalstatus[]" id="gementalstatus" value="Depression" <?php if (strpos($info['gementalstatus'],'Depression') !== false) { echo 'checked'; }?>>Depression</td>
</tr>
<tr>
<td><input type="checkbox" name="gementalstatus[]" id="gementalstatus" value="Anxiety" <?php if (strpos($info['gementalstatus'],'Anxiety') !== false) { echo 'checked'; }?>>Anxiety</td>
</tr>
<tr>
<td><input type="checkbox" name="gementalstatus[]" id="gementalstatus" value="Suicidal Ideation" <?php if (strpos($info['gementalstatus'],'Suicidal Ideation') !== false) { echo 'checked'; }?>>Suicidal Ideation</td>
</tr>
</table>
</div>
</fieldset>
       </div>
   </div>
</div>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Additional and Detailed Finding</legend>
<textarea rows="3" cols="97" name="peadditional" id="peadditional">
<?php echo $info['peadditional']?>
</textarea>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">39. Assessment</legend>
<div class="radio-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="radio" name="assessment" value="Asymptomatic" <?php if ($info['assessment']=='Asymptomatic') { echo 'checked'; } ?>
/>Asymptomatic</td>
<td><input type="radio" name="assessment" value="Symptomatic" <?php if ($info['assessment']=='Symptomatic') { echo 'checked'; } ?>/>Symptomatic</td>
<td><input type="radio" name="assessment" value="AIDS defining illness" <?php if ($info['assessment']=='AIDS defining illness') { echo 'checked'; } ?>/>Aids Defining illness</td>
</tr>
</table>
<textarea rows="3" cols="97" name="assessmentnotes" id="assessmentnotes">
<?php echo $info['assessmentnotes']?>
</textarea>
</div>
</fieldset>


<fieldset>
<legend style="font-weight:bold; font-size:11px">40. WHO Staging criteria(History of any of the following)</legend>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 400px; display: table-cell;"> 
<fieldset>
<legend style="font-weight:bold; font-size:11px">Stage 1.</legend>
<div class="checkbox-toolbar"> 
<table>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" id="whostagecriteria" value="Asymptomatic*" <?php if (strpos($info['whostagecriteria'],'Asymptomatic*') !== false) { echo 'checked'; }?>/>Asymptomatic</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" id="whostagecriteria" value="Persistent generalized Lympadenopathy"  <?php if (strpos($info['whostagecriteria'],'Persistent generalized Lympadenopathy') !== false) { echo 'checked'; }?>/>Persistent Lymphadenopathy</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" id="whostagecriteria" value="Performance Scale: 1 Asymptomatic, normal activity" <?php if (strpos($info['whostagecriteria'],'Performance Scale: 1 Asymptomatic, normal activity') !== false) { echo 'checked'; }?>/>Performance scale:1 Asymptomatic, normal activity</td>
</tr>
</table>
</div>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Stage 2.</legend>
<div class="checkbox-toolbar"> 
<table>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Weight Loss <10% of Body Weight"  <?php if (strpos($info['whostagecriteria'],'Weight Loss <10% of Body Weight') !== false) { echo 'checked'; }?>/>Weight Loss < 10% of body weight</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Minor Mucocutaneous Manifestations"  <?php if (strpos($info['whostagecriteria'],'Minor Mucocutaneous Manifestations') !== false) { echo 'checked'; }?>/>Minor Mucocutaneous Manifestations</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Herpes Zoster (within last 5 years)" <?php if (strpos($info['whostagecriteria'],'Herpes Zoster (within last 5 years)') !== false) { echo 'checked'; }?>/>Herpes Zoster (within last 5 years)</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Recurrent Upper Respiratory Tract Infections" <?php if (strpos($info['whostagecriteria'],'Recurrent Upper Respiratory Tract Infections') !== false) { echo 'checked'; }?> />Recurrent Upper Respiratory Tract Infections</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Performance scale: 2 symptomatic, normal activity" <?php if (strpos($info['whostagecriteria'],'Performance scale: 2 symptomatic, normal activity') !== false) { echo 'checked'; }?> />Performance scale: 2 symptomatic, normal activity</td>
</tr>
</table>
</div>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Stage 3.</legend>
<div class="checkbox-toolbar"> 
<table>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Weight loss >10% of body weight" <?php if (strpos($info['whostagecriteria'],'Weight loss >10% of body weight') !== false) { echo 'checked'; }?>/>Weight loss >10% of body weight</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Unexplained Chronic Diarrhea (>1 month)" <?php if (strpos($info['whostagecriteria'],'Unexplained Chronic Diarrhea (>1 month)') !== false) { echo 'checked'; }?>/>Unexplained Chronic Diarrhea (>1 month)</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Unexplained Prolonged Fever" <?php if (strpos($info['whostagecriteria'],'Unexplained Prolonged Fever') !== false) { echo 'checked'; }?>/>Unexplained Prolonged Fever</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Oral Candidiasis" <?php if (strpos($info['whostagecriteria'],'Oral Candidiasis') !== false) { echo 'checked'; }?>/>Oral Candidiasis</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Oral Hairy Leukoplakia" <?php if (strpos($info['whostagecriteria'],'Oral Hairy Leukoplakia') !== false) { echo 'checked'; }?>/>Oral Hairy Leukoplakia</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria" value="TB, Pulmonary (within previous year)" <?php if (strpos($info['whostagecriteria'],'TB, Pulmonary (within previous year)') !== false) { echo 'checked'; }?>/>TB, Pulmonary (within previous year)</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Severe Bacterial Infections" <?php if (strpos($info['whostagecriteria'],'Severe Bacterial Infections') !== false) { echo 'checked'; }?>/>Severe Bacterial Infections</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Performance scale: 3 bedridden <50% of day in last month" <?php if (strpos($info['whostagecriteria'],'Performance scale: 3 bedridden <50% of day in last month') !== false) { echo 'checked'; }?>/>Performance scale: 3 bedridden <50% of day in last month</td>
</tr>
</table>
</div>

</fieldset>


         </div>
        <div style="display: table-cell;"> 
<fieldset>
<legend style="font-weight:bold; font-size:11px">Stage 4.</legend>
<div class="checkbox-toolbar"> 
<table>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="HIV Wasting syndrome" <?php if (strpos($info['whostagecriteria'],'HIV Wasting syndrome') !== false) { echo 'checked'; }?> />HIV Wasting syndrome</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="PCP"  <?php if (strpos($info['whostagecriteria'],'PCP') !== false) { echo 'checked'; }?>/>PCP</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Toxoplasmosis, CNS" <?php if (strpos($info['whostagecriteria'],'Toxoplasmosis, CNS') !== false) { echo 'checked'; }?>/>Toxoplasmosis, CNS</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Cryptosporidiosis with Diarrhea (>1 month)"  <?php if (strpos($info['whostagecriteria'],'Cryptosporidiosis with Diarrhea (>1 month)') !== false) { echo 'checked'; }?>/>Cryptosporidiosis with Diarrhea (>1 month)</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Cryptococcosis, Extrapulmonary"  <?php if (strpos($info['whostagecriteria'],'Cryptococcosis, Extrapulmonary') !== false) { echo 'checked'; }?>/>Cryptococcosis, Extrapulmonary</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Cytomegalovirus disease" <?php if (strpos($info['whostagecriteria'],'Cytomegalovirus disease') !== false) { echo 'checked'; }?>/>Cytomegalovirus disease</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Herpes Simplex (mucotaneous >1 month)"  <?php if (strpos($info['whostagecriteria'],'Herpes Simplex (mucotaneous >1 month)') !== false) { echo 'checked'; }?>/>Herpes Simplex (mucotaneous >1 month)</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Progressive Multifocal Leukoencephalopathy"  <?php if (strpos($info['whostagecriteria'],'Progressive Multifocal Leukoencephalopathy') !== false) { echo 'checked'; }?>/>Progressive Multifocal Leukoencephalopathy</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Mycosis, disseminated"  <?php if (strpos($info['whostagecriteria'],'Mycosis, disseminated') !== false) { echo 'checked'; }?>/>Mycosis, disseminated</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Candidiasis*"  <?php if (strpos($info['whostagecriteria'],'Candidiassis*') !== false) { echo 'checked'; }?>/>Candidiasis</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Atypical Mycobacteriosis, disseminated" <?php if (strpos($info['whostagecriteria'],'Atypical Mycobacteriosis, disseminated') !== false) { echo 'checked'; }?>/>Atypical Mycobacteriosis, disseminated</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Oral Candidiasis"  <?php if (strpos($info['whostagecriteria'],'Oral Candidiasis') !== false) { echo 'checked'; }?>/>Oral Candidiasis</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Oral Hairy Leukoplakia"  <?php if (strpos($info['whostagecriteria'],'Oral Hairy Leukoplakia') !== false) { echo 'checked'; }?>/>Oral Hairy Leukoplakia</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="TB, Pulmonary (within previous year)" <?php if (strpos($info['whostagecriteria'],'TB, Pulmonary (within previous year)') !== false) { echo 'checked'; }?>/>TB, Pulmonary (within previous year)</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Severe Bacterial Infections"  <?php if (strpos($info['whostagecriteria'],'Severe Bacterial Infections') !== false) { echo 'checked'; }?>/>Severe Bacterial Infections</td>
</tr>
<tr>
<td><input type="checkbox" name="whostagecriteria[]" value="Performance scale: 3 bedridden <50% of day in last month"  <?php if (strpos($info['whostagecriteria'],'Performance scale: 3 bedridden <50% of day in last month') !== false) { echo 'checked'; }?>/>Performance scale: 3 bedridden <50% of day in last month</td>
</tr>
</table>
</div>
</fieldset>
<fieldset style="height:42px">
<legend style="font-weight:bold; font-size:11px">41. WHO Stage</legend>
<input type="text" name="whostage" id="whostage" style="width:25px; height:10px" value="<?php echo $info['whostage']?>"/>
</fieldset>
         </div>       
    </div>
</div>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">42. Plan (specify orders on requisition)</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="plan[]" id="plan" value="Lab Evaluation" <?php if (strpos($info['plan'],'Lab Evaluation') !== false) { echo 'checked'; }?>/>Lab Evaluation</td>
<td><input type="text" name="planlab" id="planlab" style="height:10px; width:80px" value="<?php echo $info['planlab']?>"/></td>
<td><input type="checkbox" name="plan[]" id="plan" value="TB Screening" <?php if (strpos($info['plan'],'TB Screening') !== false) { echo 'checked'; }?>/>TB Screening</td>
<td><input type="text" name="plantbs" id="plantbs"  style="height:10px; width:80px" value="<?php echo $info['plantbs']?>"/></td>
<td><input type="checkbox" name="plan[]" id="plan" value="OI Prophylaxis" <?php if (strpos($info['plan'],'OI Prophylaxis') !== false) { echo 'checked'; }?>/>OI Prophylaxis</td>
<td><input type="text" name="planoip" id="planoip" style="height:10px; width:80px" value="<?php echo $info['planoip']?>"/></td>
</tr>
<tr>
<td><input type="checkbox" name="plan[]" id="plan" value="Post Exp Prophylaxis" <?php if (strpos($info['plan'],'Post Exp Prophylaxis') !== false) { echo 'checked'; }?>/>PEP</td>
<td><input type="text" name="planpep" id="planpep"  style="height:10px; width:80px"  value="<?php echo $info['planpep']?>"/></td>
<td><input type="checkbox" name="plan[]" id="plan" value="Adherence Counseling" <?php if (strpos($info['plan'],'Adherence Counseling') !== false) { echo 'checked'; }?>/>Adh Counseling</td>
<td><input type="text" name="planadh" id="planadh"  style="height:10px; width:80px" value="<?php echo $info['planadh']?>"/></td>
<td><input type="checkbox" name="plan[]" id="plan" value="OI Therapy" <?php if (strpos($info['plan'],'OI Therapy') !== false) { echo 'checked'; }?>>OI Therapy</td>
<td><input type="text" name="planoit" id="planoit"  style="height:10px; width:80px" value="<?php echo $info['planoit']?>"/></td>
</tr>
<tr>
<td><input type="checkbox" name="plan[]" id="plan" value="Admission" <?php if (strpos($info['plan'],'Admission') !== false) { echo 'checked'; }?>>Admission</td>
<td><input type="text" name="planadm" id="planadm"  style="height:10px; width:80px" value="<?php echo $info['planadm']?>"/></td>
<td><input type="checkbox" name="plan[]" id="plan" value="Symptomatic treatment/Pain control" <?php if (strpos($info['plan'],'Symptomatic treatment/Pain control') !== false) { echo 'checked'; }?>>Pain Control</td>
<td><input type="text" name="planpain" id="planpain"  style="height:10px; width:80px" value="<?php echo $info['planpain']?>"/></td>
<td><input type="checkbox" name="plan[]" id="plan" value="Other" <?php if (strpos($info['plan'],'Other') !== false) { echo 'checked'; }?>>Other</td>
<td><input type="text" name="planother" id="planother"  style="height:10px; width:80px" value="<?php echo $info['planother']?>"/></td>
</tr>
</table>
</div>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">43. Enroll in:</legend>
<div class="radio-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="radio" name="enrollin" value="General Medical Follow up" <?php if ($info['enrollin']=='General Medical Follow up') { echo 'checked'; } ?>>Medical Followup</td>
<td><input type="radio" name="enrollin" value="ARV Therapy" <?php if ($info['enrollin']=='ARV Therapy') { echo 'checked'; } ?>>ARV Therapy</td>
<td><input type="radio" name="enrollin" value="Pending lab results" <?php if ($info['enrollin']=='Pending lab results') { echo 'checked'; } ?>>Pending Lab results</td>
</tr>
</table>
</div>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">44. Plan for ARV Therapy</legend>
<div class="radio-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="radio" name="planarvtherapy" value="Continue current treatment" <?php if ($info['planarvtherapy']=='Continue current treatment') { echo 'checked'; } ?>>Continue current treatment</td>
<td><input type="radio" name="planarvtherapy" value="Restart treatment" <?php if ($info['planarvtherapy']=='Restart treatment') { echo 'checked'; } ?>>Restart treatment</td>
<td><input type="radio" name="planarvtherapy" value="Start new treatment" <?php if ($info['planarvtherapy']=='Start new treatment') { echo 'checked'; } ?>>Start new treatment</td>
</tr>
<tr>
<td><input type="radio" name="planarvtherapy" value="Ongoing monitoring-ARV Tx not indicated" <?php if ($info['planarvtherapy']=='Ongoing monitoring-ARV Tx not indicated') { echo 'checked'; } ?>>Ongoing monitoring-ARV Tx not indicated</td>
<td><input type="radio" name="planarvtherapy" value="Ongoing monitoring -ARV Tx post-poned/Clinical reasons" <?php if ($info['planarvtherapy']=='Ongoing monitoring -ARV Tx post-poned/Clinical reasons') { echo 'checked'; } ?>>Ongoing monitoring -ARV Tx post-poned</td>
</tr>
<tr>
<td><input type="radio" name="planarvtherapy" value="Change treatment" <?php if ($info['planarvtherapy']=='Change treatment') { echo 'checked'; } ?>>Change treatment(Indicate reason code)</td>
<td><input type="text" name="planarvtherchgtrtmtreason" id="planarvtherchgtrtmtreason" style="height:10px; width:10px" value="<?php echo $info['planarvtherchgtrtmtreason']?>"
/></td>
</tr>
<tr>
<td><input type="radio" name="planarvtherapy" value="Stop treatment" <?php if ($info['planarvtherapy']=='Stop treatment') { echo 'checked'; } ?>>Stop treatment(indicate reason code)</td>
<td><input type="text" name="planarvtherstoptrtmtreason" id="planarvtherstoptrtmtreason"  style="height:10px; width:10px" value="<?php echo $info['planarvtherstoptrtmtreason']?>"
/></td>
</tr>
</table>
</div>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">45. a. Regimen</legend>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 200px; display: table-cell;"> 
        <fieldset style="border:none">
<legend style="font-weight:bold; font-size:11px">1st Line</legend>
<div class="radio-toolbar"> 
<table>
<label ></label>
<tr>
<td><input type="radio" name="regimen1st" value="AZT/3TC/NVP" <?php if ($info['regimen1st']=='AZT/3TC/NVP') { echo 'checked'; } ?>
>AZT/3TC/NVP</td>
</tr>
<tr>
<td><input type="radio" name="regimen1st" value="AZT/3TC/EFV" <?php if ($info['regimen1st']=='AZT/3TC/EFV') { echo 'checked'; } ?>>AZT/3TC/EFV</td>
</tr>
<tr>
<td><input type="radio" name="regimen1st" value="TDF/3TC/EFV" <?php if ($info['regimen1st']=='TDF/3TC/EFV') { echo 'checked'; } ?>>TDF/3TC/EFV</td>
</tr>
<tr>
<td><input type="radio" name="regimen1st" value="TDF/3TC/NVP" <?php if ($info['regimen1st']=='TDF/3TC/NVP') { echo 'checked'; } ?>>TDF/3TC/NVP</td>
</tr>
</table>        
</div>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
<legend style="font-weight:bold; font-size:11px">Alternate</legend>
<div class="radio-toolbar"> 
<table>
<label ></label>
<tr>
<td><input type="radio" name="regimen1st" value="AZT/3TC/ABC" <?php if ($info['regimen1st']=='AZT/3TC/ABC') { echo 'checked'; } ?>
>AZT/3TC/ABC</td>
</tr>
<tr>
<td><input type="radio" name="regimen1st" value="AZT/3TC/TDF" <?php if ($info['regimen1st']=='AZT/3TC/TDF') { echo 'checked'; } ?>>AZT/3TC/TDF</td>
</tr>
</table>        
</div>        

        </fieldset>
         </div>       
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
<legend style="font-weight:bold; font-size:11px">2nd Line</legend>
<div class="radio-toolbar"> 
<table>
<label ></label>
</tr>
<tr>
<td><input type="radio" name="regimen1st" value="TDF/3TC or FTC/ATV/r or LPV/r" <?php if ($info['regimen1st']=='TDF/3TC or FTC/ATV/r or LPV/r') { echo 'checked'; } ?>>TDF/3TC or FTC/ATV/r or LPV/r</td>
</tr>
<tr>
<td><input type="radio" name="regimen1st" value="AZT/3TC/ATVr or LPV/r" <?php if ($info['regimen1st']=='AZT/3TC/ATVr or LPV/r') { echo 'checked'; } ?>>AZT/3TC/ATVr or LPV/r</td>
</tr>
<tr>
</table>        
</div>        

        </fieldset>
         </div>       
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
<legend style="font-weight:bold; font-size:11px">Others</legend>
<div class="radio-toolbar"> 
<table>
<label ></label>
<textarea rows="3" cols="15" name="regimen2nd" id="regimen2nd">
<?php echo $info['regimen2nd']?>
</textarea>
</table>        
</div>        

        </fieldset>
         </div>       
    </div>
</div>
        <fieldset style="border:none">
        
<legend style="font-weight:bold; font-size:11px">45. b. Drugs in Regimen</legend>
<textarea rows="3" cols="90" name="regimenothers" id="regimenothers">
<?php echo $info['regimenothers']?>
</textarea>
</fieldset>
</fieldset>
<fieldset >  
<legend style="font-weight:bold; font-size:11px">46. Next Appointment?</legend>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 250px; display: table-cell;"> 
        <fieldset style="border:none">
        
<div class="radio-toolbar"> 
<table>
<tr>
<td><input type="radio" name="nextappointment" value="1 week" <?php if ($info['nextappointment']=='1 week') { echo 'checked'; } ?>>1 week</td>
<td><input type="radio" name="nextappointment" value="2 months" <?php if ($info['nextappointment']=='2 months') { echo 'checked'; } ?>>2 months</td>
</tr>
<tr>
<td><input type="radio" name="nextappointment" value="2 weeks" <?php if ($info['nextappointment']=='2 weeks') { echo 'checked'; } ?>>2 weeks</td>
<td><input type="radio" name="nextappointment" value="3 months" <?php if ($info['nextappointment']=='3 months') { echo 'checked'; } ?>>3 months</td>
</tr>
<tr>
<td><input type="radio" name="nextappointment" value="4 weeks" <?php if ($info['nextappointment']=='4 weeks') { echo 'checked'; } ?>>4 weeks</td>
</tr>
</table>
</div>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
<div class="radio-toolbar"> 
<table>
<tr>
<td><input type="date" name="nextappointmentdate" id="nextappointmentdate" style="height:10px; width:120px" value="<?php echo $info['nextappointmentdate']?>"
/></td>
</tr>
</table>
</div>
</fieldset>
         </div>       
    </div>
</div>
</fieldset>
<fieldset>
<label>Clinician's name
</label>
<input type="text" name="Clinicianname" id="Clinicianname" style="height:10px; width:120px" value="<?php echo $info['Clinicianname']?>"
/>
</fieldset>
<input type="button" value="Print Form" onclick="window.print()">
</form>
<script type="text/javascript">
{

history.go(1)
 }

</script>
</body>
</html>
     </ 