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
$query = "SELECT pepid, uniqueid,hospitalid,age,hivposdate,state,surname,othernames,sex,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,pmotheralive,pmothername,pmotheradd,pfatheralive,pfathername,pfatheradd,pcaregiversrelationshipstatus,pchildliveswith,jobstatusmother,jobstatusfather,jobstatuscaregiver,educationallevelmother,educationallevelchild,educationallevelfather,educationallevelcaregiver,psiblings,dur_eardis,dur_painmict,dur_oralsores,dur_irr,dur_sleep,dur_food,dur_convul,pdevassess,ppreviousarvexp,pimmunecomplete,pfeedingmode,pprevarvtrtmt,pprevarvdrugs,pedcircumf,pedmuac,pedsurface,pedpeglands,planpalliative,planref,plancounsel,plancxr,planpmtct,pedadditional,ppreviousarvpmtct,
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
	document.getElementById('doblabel2').innerHTML = "";
	}
	else if (intAge >= 15){
		document.getElementById('doblabel2').innerHTML = "This is not a pediatric patient";
		}
}
function pedpepid(){
	var pepid = document.getElementById('pepid').value;
	var pepid = pepid.toUpperCase();
	if (pepid.indexOf("P")!=2){
				document.getElementById('pepidflag').innerHTML = "PepID Error: Pediatric patient";
		}
		else if (pepid.length!=11){
						document.getElementById('pepidflag').innerHTML = "PepID Error: Length";
			}
		else if((pepid.indexOf("/") != -1)||(pepid.indexOf(" ") != -1)||(pepid.indexOf("*") != -1)||(pepid.indexOf("&") != -1)||(pepid.indexOf("?") != -1			)||(pepid.indexOf("%") != -1)||(pepid.indexOf("$") != -1)||(pepid.indexOf("^") != -1)||(pepid.indexOf("(") != -1)||(pepid.indexOf(")") != -1)){
				document.getElementById('doblabel2').innerHTML = "PepID Error: Invalid Character";
			}			else{
						document.getElementById('pepidflag').innerHTML = "";
						document.getElementById('doblabel2').innerHTML = "";
				}
	}
function monthcalc(){
var today = new Date();
var del_date = new Date(document.getElementById('dob').value);
var del_date = del_date.getFullYear();
var td1 = today.getFullYear();
var intAge = td1 - del_date;
var str1="Age: "
var strAge= str1+(td1 - del_date)+"Yrs ";
//document.getElementById('doblabel').innerHTML = str1+(td1 - del_date)+"Yrs";
var date2=new Date(document.getElementById('dob').value);
var year1=today.getFullYear();
var year2=date2.getFullYear();
var month1=today.getMonth();
var month2=date2.getMonth();
if(month1===0){ //Have to take into account
  month1++;
  month2++;
}
var numberOfMonths;
numberOfMonths=(year1-year2)*12+(month1-month2);

if (td1 - del_date < 5){
		document.getElementById('agemonth').value = numberOfMonths;
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
.tops{
   top: 0px;
   position: fixed;
   width:1335px;
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - P.I.C.E</title>
</head>
<div class="tops" style="background-color:#FFFBF0">
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">Pediatric Patient&nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>
<a href="./Welcome.php" style="font-weight:bold; font-size:14px; color:#2A00FF">[MAIN MENU]</a> &nbsp;&nbsp;&nbsp;&nbsp;
<a href="javascript:history.go(-1)">[BACK]</a>
</div>
<br />
<br />
<br />
<body onload="monthcalc();fatheralivecheck();prevarvcheck();motheralivecheck();adherencecheck();missedadhcheck();interradhcheck();stopadhcheck();missedadh();interradhcheck()">
<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="forupdatereplist.php">
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 350px; display: table-cell;"> 
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
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 350px; display: table-cell;"> 
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
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 350px; display: table-cell;"> 
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
<span class="small" style="font-weight:bold">Patient ID</span>
</label>
<input type="text" name="pepid" id="pepid" required="required" placeholder="Required" value="<?php echo $info['pepid']?>" readonly onchange="adtpepid()" style="width:120px; height:10px; font-weight:bold" />

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div>

</fieldset>
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">6. State</span>
</label>
<input type="text" name="lga" id="lga" value="<?php echo $info['state']?>" style="width:100px;height:10px;"/>

      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">7. LGA</span>
</label>
<input type="text" name="lga" id="lga" value="<?php echo $info['lga']?>" style="width:100px;height:10px;"/>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">8. Facility Name</span>
</label>
<input type="text" name="facilityname" id="facilityname" value="<?php echo $info['facilityname']?>" style="width:120px;height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label><span class="small" style="font-weight:bold">9. Sex</span></label>
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
        
        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
        </fieldset>
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">10. Date of Birth</span>
</label>
<input type="date" name="dob" id="dob" value="<?php echo $info['dob']?>" style="width:120px;height:10px;"/>

      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">11. Age</span>
</label>
<input type="text" name="age" id="age" value="<?php echo $info['age']?>" style="width:100px;height:10px;"/>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">If <5 years, months</span>
</label>
<input type="text" name="agemonth" id="agemonth" style="width:120px;height:10px;" readonly/>

        </fieldset>
         </div>
    </div>
</div>

</fieldset>
<fieldset style="height:250px">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label><span class="small" style="font-weight:bold">12. Is the mother of the child alive?</span></label>
<table>
<tr>
<td><input type="radio" name="pmotheralive" id="pma_yes" value="Yes" onchange="motheralivecheck()" <?php if ($info['pmotheralive']=='Yes') { echo 'checked'; } ?> required="required"  />Yes</td>
<td><input type="radio" name="pmotheralive" id="pma_no" value="No"  onchange="motheralivecheck()" <?php if ($info['pmotheralive']=='No') { echo 'checked'; } ?> required="required" />No</td>
</tr>
</table>
<label>
Name:
</label>
<input type="text" name="pmothername" id="pmothername" value="<?php echo $info['pmothername']?>" readonly style="width:120px;height:10px;"/>
<label>
Address:
</label>
<input type="text" name="pmotheradd" id="pmotheradd" value="<?php echo $info['pmotheradd']?>" readonly style="width:120px;height:10px;"/>

<label><span class="small" style="font-weight:bold">13. Is the father of the child alive?</span></label>
<table>
<tr>
<td><input type="radio" name="pfatheralive" id="pfa_yes" value="Yes" onchange="fatheralivecheck()" <?php if ($info['pfatheralive']=='Yes') { echo 'checked'; } ?> required="required"  />Yes</td>
<td><input type="radio" name="pfatheralive" id="pfa_no" value="No"  onchange="fatheralivecheck()" <?php if ($info['pfatheralive']=='No') { echo 'checked'; } ?> required="required" />No</td>
</tr>
</table>
<label>
Name:
</label>
<input type="text" name="pfathername" id="pfathername" value="<?php echo $info['pfathername']?>" readonly style="width:120px;height:10px;"/>

<label>
Address:
</label>
<input type="text" name="pfatheradd" id="pfatheradd" value="<?php echo $info['pfatheradd']?>" readonly style="width:120px;height:10px;"/>
<br />
</fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
<legend style="font-weight:bold; font-size:11px">14. Job Status of child's parent/Caregiver</legend>
<div>
<label>
Mother
</label>
<select name="jobstatusmother" id="jobstatusmother">
	<option value="<?php echo $info['jobstatusmother']?>"><?php echo $info['jobstatusmother']?></option> 
    <option value="Student">Student</option> 
    <option value="Unemployed">Unemployed</option>
    <option value="Employed">Employed</option>
    <option value="Retired">Retired</option>
</select>
<br />
<label>
Father
</label>
<select name="jobstatusfather" id="jobstatusfather">
	<option value="<?php echo $info['jobstatusfather']?>"><?php echo $info['jobstatusfather']?></option> 
    <option value="Student">Student</option> 
    <option value="Unemployed">Unemployed</option>
    <option value="Employed">Employed</option>
    <option value="Retired">Retired</option>
</select>
<br />
<label>
Caregiver
</label>
<select name="jobstatuscaregiver">
	<option value="<?php echo $info['jobstatuscaregiver']?>"><?php echo $info['jobstatuscaregiver']?></option> 
    <option value="Student">Student</option> 
    <option value="Unemployed">Unemployed</option>
    <option value="Employed">Employed</option>
    <option value="Retired">Retired</option>
</select>
<br />
<br />
<legend style="font-weight:bold; font-size:11px">15. Educational Level of child, parent and caregiver</legend>
<label>
Child
</label>
<select name="educationallevelchild" id="educationallevelchild">
	<option value="<?php echo $info['educationallevelchild']?>"><?php echo $info['educationallevelchild']?></option> 
    <option value="None">None</option> 
    <option value="Quranic">Quranic</option>
    <option value="Primary">Primary</option>
    <option value="Junior Secondary">Junior Secondary</option>
    <option value="Senior Secondary">Senior Secondary</option>
    <option value="Post Secondary">Post Secondary</option>
</select>
<br />
<label>
Mother
</label>
<select name="educationallevelmother" id="educationallevelmother">
	<option value="<?php echo $info['educationallevelmother']?>"><?php echo $info['educationallevelmother']?></option> 
    <option value="None">None</option> 
    <option value="Quranic">Quranic</option>
    <option value="Primary">Primary</option>
    <option value="Junior Secondary">Junior Secondary</option>
    <option value="Senior Secondary">Senior Secondary</option>
    <option value="Post Secondary">Post Secondary</option>
</select>
<br />
<label>
Father
</label>
<select name="educationallevelfather" id="educationallevelfather">
	<option value="<?php echo $info['educationallevelfather']?>"><?php echo $info['educationallevelfather']?></option> 
    <option value="None">None</option> 
    <option value="Quranic">Quranic</option>
    <option value="Primary">Primary</option>
    <option value="Junior Secondary">Junior Secondary</option>
    <option value="Senior Secondary">Senior Secondary</option>
    <option value="Post Secondary">Post Secondary</option>
</select>
<br />
<label>
Caregiver
</label>
<select name="educationallevelcaregiver">
	<option value="<?php echo $info['educationallevelcaregiver']?>"><?php echo $info['educationallevelcaregiver']?></option> 
    <option value="None">None</option> 
    <option value="Quranic">Quranic</option>
    <option value="Primary">Primary</option>
    <option value="Junior Secondary">Junior Secondary</option>
    <option value="Senior Secondary">Senior Secondary</option>
    <option value="Post Secondary">Post Secondary</option>
</select>
<br />
</div>
<br />

         </div>        
         <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
</fieldset>
<br />
<br />
<fieldset style="width:275px; border:none">

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 350px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
16. Child's Parents / Caregivers Are: 
</label>
<table>
<tr>
<td><input type="radio" name="pcaregiversrelationshipstatus" id="pcarerstatmarried" value="Married" <?php if ($info['pcaregiversrelationshipstatus']=='Married') { echo 'checked'; } ?> />Married</td>
<td><input type="radio" name="pcaregiversrelationshipstatus" id="pcarerstatcohabit" value="Co-Habiting" <?php if ($info['pcaregiversrelationshipstatus']=='Co-Habiting') { echo 'checked'; } ?>/>CoHabiting</td>
<td><input type="radio" name="pcaregiversrelationshipstatus" id="pcarerstatsingle" value="Single" <?php if ($info['pcaregiversrelationshipstatus']=='Single') { echo 'checked'; } ?>/>Single</td>
</tr>
</table>
      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>17. How many siblings does the child have:</label>
<input type="text" name="psiblings" id="psiblings" size="5" value="<?php echo $info['psiblings']?>" style="height:10px" />
        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<div style="width: 100%; display: table;">
<div style="display: table-row">
<div style="width: 300px; display: table-cell;"> 
<fieldset>
<legend style="font-weight:bold; font-size:11px">18. Where does the child live:</legend>
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
<legend style="font-weight:bold; font-size:11px">19. With whom does the child live</legend>
<div class="radio-toolbar"> 
<table>
<tr>
<td><input type="radio" name="pchildliveswith" value="Both Parents"  <?php if ($info['pchildliveswith']=='Both Parents') { echo 'checked'; } ?> />Both Parents</td>
</tr>
<tr>
<td><input type="radio" name="pchildliveswith" value="Father-Only" <?php if ($info['pchildliveswith']=='Father-Only') { echo 'checked'; } ?>/>Father</td>
</tr>
<tr>
<td><input type="radio" name="pchildliveswith" value="Mother-Only" <?php if ($info['pchildliveswith']=='Mother-Only') { echo 'checked'; } ?>/>Mother</td>
</tr>
<tr>
<td><input type="radio" name="pchildliveswith" value="Caregiver" <?php if ($info['pchildliveswith']=='Caregiver') { echo 'checked'; } ?>/>Caregiver</td>
</tr>
</table>
</div>
</fieldset>
        </div>
    </div>
</div>

<button type="submit">UPDATE</button>
<div class="spacer"></div>

</form>
</div>
</body>
</html>