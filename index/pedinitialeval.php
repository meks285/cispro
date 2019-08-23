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
$myid=$_SESSION['pepid'];

class MyClass{
    public function GetUserInformation(){
$query = "SELECT pepid, uniqueid,hospitalid,ROUND(DATEDIFF(enroldate,dob)/365) AS age,hivposdate,state,surname,othernames,sex,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,pmotheralive,pmothername,pmotheradd,pfatheralive,pfathername,pfatheradd,pcaregiversrelationshipstatus,pchildliveswith,jobstatusmother,jobstatusfather,jobstatuscaregiver,educationallevelmother,educationallevelchild,educationallevelfather,educationallevelcaregiver,psiblings,dur_eardis,dur_painmict,dur_oralsores,dur_irr,dur_sleep,dur_food,dur_convul,pdevassess,ppreviousarvexp,pimmunecomplete,pfeedingmode,pprevarvtrtmt,pprevarvdrugs,pedcircumf,pedmuac,pedsurface,pedpeglands,planpalliative,planref,plancounsel,plancxr,planpmtct,pedadditional,ppreviousarvpmtct ,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate,symptomsreview,addiotnalsymcmments,pastmedicalhist,presentingcomplaint,addiotnalsymcmments,relfamilyhist,hospitalization,drugallergies,riskfactors,lastmenstrualperiod,currentlypregnant,gestationalage,edd,lastcd4,lastcd4date,lastvl,lastvldate,prevarvexp,prevfacilityname,prevdurationofcarefromdate,prevdurationofcaretodate,currentmedications,serviceentry,adherenceyn,missedadh3daysyn,missadhreason,trtmtinterruptionyn,trtmtinterdate,trtmtinterduration,trtmtinterreason,trtmtstopyn,trtmtstopdate,trtmtstopduration,trtmtstopreason,hivstatdisclosure,hivstatdisclosureother,hivstatdiscussion,supportgrpyn,pastcurrarvsideeff,petemp,pebp,pepulse,peweight,peheight,pegenappearance,peskin,peheadeye,pebreasts,pecardiovascular,pegenitalia,gerespiratory,gerespiratoryrate,gegastrointestinal,geneurological,gementalstatus,peadditional,assessment,whostagecriteria,whostage,plan,planlab,plantbs,planoip,planpep,planadh,planoit,planadm,planpain,planother,enrollin,planarvtherapy,planarvtherchgtrtmtreason,planarvtherstoptrtmtreason,regimen1st,regimenothers,regimendrugs,nextappointment,nextappointmentdate,Clinicianname,prevarvtype,missedadhcode,interradhcode,stopadhcode,assessmentnotes,regimen2nd,dur_fever,dur_nausea,dur_nsweats,dur_weigthl,dur_cough,dur_head,dur_rash,dur_itch,dur_diarh,dur_gendis,dur_genitch,dur_gensore,dur_shortbreath,dur_visimp,dur_painswall,dur_numb,dur_otherpain,pcurrmeds
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
function monthcalc()
{
var today = new Date();
var del_date = new Date(document.getElementById('dob').value);
var del_date = del_date.getFullYear();
var td1 =new Date(document.getElementById('visitdate').value);
var td1 = td1.getFullYear();
var intAge = td1 - del_date;
var str1="Age: "
var strAge= str1+(td1 - del_date)+"Yrs ";

// Variables for agemonth calculation START
var date2=new Date(document.getElementById('dob').value);
var vdate=new Date(document.getElementById('visitdate').value);
var year1=vdate.getFullYear();
var year2=date2.getFullYear();
var month1=vdate.getMonth();
var month2=date2.getMonth();
if(month1===0){ //Have to take into account
  month1++;
  month2++;
}
var numberOfMonths;
numberOfMonths=(year1-year2)*12+(month1-month2);

// END
//document.getElementById('agemonth').innerHTML = str1+(td1 - del_date)+"Yrs";
if (intAge < 5){
//	document.getElementById('doblabel2').innerHTML = "";
		document.getElementById('agemonth').value = numberOfMonths;
//		document.getElementById('age').value = intAge;

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
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">Pediatric Initial Clinical Evaluation&nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>
<a href="./Welcome.php" style="font-weight:bold; font-size:14px; color:#2A00FF">[MAIN MENU]</a> &nbsp;&nbsp;&nbsp;&nbsp;
<a href="./patpedsummary.php?pepid=<?php echo $myid ?>" style="color:#2A1FFF">[BACK]</a>
</div>
<br />
<br />
<br />
<body onload="monthcalc();fatheralivecheck();prevarvcheck();motheralivecheck();adherencecheck();missedadhcheck();interradhcheck();stopadhcheck();missedadh();interradhcheck()">
<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="pedupdateie.php">
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
<input type="text" name="pepid" id="pepid" required="required" placeholder="Required" value="<?php echo $info['pepid']?>" onchange="adtpepid()" style="width:120px; height:10px; font-weight:bold" />

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
<td><input type="radio" name="pchildliveswith" value="Father-Only" <?php if ($info['pchildliveswith']=='Both Parents') { echo 'checked'; } ?>/>Father</td>
</tr>
<tr>
<td><input type="radio" name="pchildliveswith" value="Mother-Only" <?php if ($info['pchildliveswith']=='Both Parents') { echo 'checked'; } ?>/>Mother</td>
</tr>
<tr>
<td><input type="radio" name="pchildliveswith" value="Caregiver" <?php if ($info['pchildliveswith']=='Both Parents') { echo 'checked'; } ?>/>Caregiver</td>
</tr>
</table>
</div>
</fieldset>
        </div>
    </div>
</div>

<legend style="font-weight:bold; font-size:11px">MEDICAL HISTORY</legend>
<fieldset>
<legend style="font-weight:bold; font-size:11px">20. Symptom Review</legend>
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
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Fever" <?php if (strpos($info['symptomsreview'],'Fever') !== false) { echo 'checked'; }?> >Fever</td>
<td><input type="text" name="dur_fever" id="dur_fever" style="width:20%;height:10px;" value="<?php echo $info['dur_fever']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Ear Discharge" <?php if (strpos($info['symptomsreview'],'Ear Discharge') !== false) { echo 'checked'; }?> >Ear Discharge</td>
<td><input type="text" name="dur_eardis" id="dur_eardis" style="width:20%;height:10px;" value="<?php echo $info['dur_eardis']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Pain on micturation" <?php if (strpos($info['symptomsreview'],'Pain on micturation') !== false) { echo 'checked'; }?> >Pain on micturation</td>
<td><input type="text" name="dur_painmict" id="dur_painmict" style="width:20%;height:10px;" value="<?php echo $info['dur_painmict']?>"/></td>
</tr>
<tr> 
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Weight Loss/Failure to gain weight" <?php if (strpos($info['symptomsreview'],'Weight Loss/Failure to gain weight') !== false) { echo 'checked'; }?> >Weight Loss/Failure to gain weight</td>
<td><input type="text" name="dur_weigthl" id="dur_weigthl" style="width:20%;height:10px;" value="<?php echo $info['dur_weigthl']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Oral Sores" <?php if (strpos($info['symptomsreview'],'Oral Sores') !== false) { echo 'checked'; }?> >Oral Sores</td>
<td><input type="text" name="dur_oralsores" id="dur_oralsores" style="width:20%;height:10px;" value="<?php echo $info['dur_oralsores']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Genital sores/discharge" <?php if (strpos($info['symptomsreview'],'Genital sores/discharge') !== false) { echo 'checked'; }?> >Genital sores/discharge</td>
<td><input type="text" name="dur_gensore" id="dur_gensore" style="width:20%;height:10px;" value="<?php echo $info['dur_gensore']?>"/></td>
</tr>
<tr>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Night Sweats" <?php if (strpos($info['symptomsreview'],'Night Sweats') !== false) { echo 'checked'; }?> >Night Sweats </td>
<td><input type="text" name="dur_nsweats" id="dur_nsweats" style="width:20%;height:10px;" value="<?php echo $info['dur_nsweats']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Cough" <?php if (strpos($info['symptomsreview'],'Cough') !== false) { echo 'checked'; }?> >Cough</td>
<td><input type="text" name="dur_cough" id="dur_cough" style="width:20%;height:10px;" value="<?php echo $info['dur_cough']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Numbness/Tingling" <?php if (strpos($info['symptomsreview'],'Numbness/Tingling') !== false) { echo 'checked'; }?> >Numbness/ Tingling </td>
<td><input type="text" name="dur_numb" id="dur_numb" style="width:20%;height:10px;" value="<?php echo $info['dur_numb']?>"/></td>
</tr>
<tr> 
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Irritability" <?php if (strpos($info['symptomsreview'],'Irritability') !== false) { echo 'checked'; }?> >Irritability</td>
<td><input type="text" name="dur_irr" id="dur_irr" style="width:20%;height:10px;" value="<?php echo $info['dur_irr']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Shortness of Breath" <?php if (strpos($info['symptomsreview'],'Shortness of Breath') !== false) { echo 'checked'; }?> >Difficulty breathing</td>
<td><input type="text" name="dur_shortbreath" id="dur_shortbreath" style="width:20%;height:10px;" value="<?php echo $info['dur_shortbreath']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Convulsion" <?php if (strpos($info['symptomsreview'],'Convulsion') !== false) { echo 'checked'; }?> >Convulsion</td>
<td><input type="text" name="dur_convul" id="dur_convul" style="width:20%;height:10px;" value="<?php echo $info['dur_convul']?>"/></td>
</tr>
<tr>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Difficulty sleeping" <?php if (strpos($info['symptomsreview'],'Difficulty sleeping') !== false) { echo 'checked'; }?> >Difficulty sleeping</td>
<td><input type="text" name="dur_sleep" id="dur_sleep" style="width:20%;height:10px;" value="<?php echo $info['dur_sleep']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Food refusal" <?php if (strpos($info['symptomsreview'],'Food refusal') !== false) { echo 'checked'; }?> >Food refusal</td>
<td><input type="text" name="dur_food" id="dur_food" style="width:20%;height:10px;" value="<?php echo $info['dur_food']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Rash" <?php if (strpos($info['symptomsreview'],'Rash') !== false) { echo 'checked'; }?> >Rash </td>
<td><input type="text" name="dur_rash" id="dur_rash" style="width:20%;height:10px;" value="<?php echo $info['dur_rash']?>"/></td>
</tr>
<tr>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Headache" <?php if (strpos($info['symptomsreview'],'Headache') !== false) { echo 'checked'; }?> >Headache </td>
<td><input type="text" name="dur_head" id="dur_head" style="width:20%;height:10px;" value="<?php echo $info['dur_head']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Diarrhea" <?php if (strpos($info['symptomsreview'],'Diarrhea') !== false) { echo 'checked'; }?> >Diarrhea</td>
<td><input type="text" name="dur_diarh" id="dur_diarh" style="width:20%;height:10px;" value="<?php echo $info['dur_diarh']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Itching" <?php if (strpos($info['symptomsreview'],'Itching') !== false) { echo 'checked'; }?> >Itching</td>
<td><input type="text" name="dur_itch" id="dur_itch" style="width:20%;height:10px;" value="<?php echo $info['dur_itch']?>"/></td>
</tr>
<tr>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="New Visual impairment" <?php if (strpos($info['symptomsreview'],'New Visual impairment') !== false) { echo 'checked'; }?> >New Visual impairment</td>
<td><input type="text" name="dur_visimp" id="dur_visimp" style="width:20%;height:10px;" value="<?php echo $info['dur_visimp']?>"/></td>
<td><input type="checkbox" name="symptomsreview[]" id="symptomsreview" value="Nausea/Vomitting" <?php if (strpos($info['symptomsreview'],'Nausea/Vomitting') !== false) { echo 'checked'; }?> >Nausea/ Vomitting</td>
<td><input type="text" name="dur_nausea" id="dur_nausea" style="width:20%;height:10px;" value="<?php echo $info['dur_nausea']?>"/></td>
</tr>
</table></div>
</fieldset>
<fieldset style="height:280px">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 450px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
21. Developmental Assessment
</label>
<div class="radio-toolbar"> 
<table>
<tr>
<td><input type="radio" name="pdevassess" id="pdevapp" value="Appropriate" <?php if ($info['pdevassess']=='Appropriate') { echo 'checked'; } ?> />Appropriate</td>
<td><input type="radio" name="pdevassess" id="pdevdel" value="Delayed" <?php if ($info['pdevassess']=='Delayed') { echo 'checked'; } ?> />Delayed</td>
<td><input type="radio" name="pdevassess" id="pdevret" value="Retarded" <?php if ($info['pdevassess']=='Retarded') { echo 'checked'; } ?> />Retarded</td>
</tr>
</table>
</div>
</fieldset>
<label>
23. Patient has recieved previous care for HIV/AIDS?
</label>
<div class="radio-toolbar"> 
<table>
<tr>
<td><input type="radio" name="prevarvexp" id="prevarvexpyes" value="Yes" <?php if ($info['prevarvexp']=='Yes') { echo 'checked'; } ?> onclick="prevarvcheck()"/>Yes</td>
<td><input type="radio" name="prevarvexp" id="prevarvexpno" value="No" <?php if ($info['prevarvexp']=='No') { echo 'checked'; } ?> onclick="prevarvcheck()"/>No</td>
</tr>
</table>
<br />
</div>
<label>
23a. Name of Facility:
</label>
<input type="text" name="prevfacilityname" id="prevfacilityname" value="<?php echo $info['prevfacilityname'] ?>" style="width:120px; height:10px"/>
<br />
<br />
<br />
<label>
23b. Duration of care(From-To)
</label>
<table>
<tr>
<td><input type="date" name="prevdurationofcarefromdate" id="prevdurationofcarefromdate" value="<?php echo $info['prevdurationofcarefromdate'] ?>" style="width:120px; height:10px"/></td>
<td><input type="date" name="prevdurationofcaretodate" id="prevdurationofcaretodate" value="<?php echo $info['prevdurationofcaretodate'] ?>" style="width:120px; height:10px"/></td>
</tr>
</table>
<div class="radio-toolbar"> 
<table>
<tr>
<td><input type="radio" name="ppreviousarvexp" value="Transfer in with records"  <?php if ($info['ppreviousarvexp']=='Transfer in with records') { echo 'checked'; } ?> />Transfer in with records</td>
</tr>
<tr>
<td><input type="radio" name="ppreviousarvexp" value="Earlier ARV but not a transfer in" <?php if ($info['ppreviousarvexp']=='Earlier ARV but not a transfer in') { echo 'checked'; } ?> />Earlier ARV not transfer in</td>
</tr>
<tr>
<td><input type="radio" name="ppreviousarvexp" value="PMTCT Only" <?php if ($info['ppreviousarvexp']=='PMTCT Only') { echo 'checked'; } ?> />PMTCT Only</td>
</tr>
<tr>
<td><input type="radio" name="ppreviousarvexp" value="Has never recieved ARVs" <?php if ($info['ppreviousarvexp']=='Has never recieved ARVs') { echo 'checked'; } ?> />Has never recieved ARVs</td>
</tr>
</table>
</div>
      </div>
        <div style="display: table-cell; width:450px"> 
        <fieldset style="height:20px; border:none">
<label>
22. Immunization Complete for age?
</label>
<div class="radio-toolbar"> 
<table>
<tr>
<td><input type="radio" name="pimmunecomplete" value="Yes" <?php if ($info['pimmunecomplete']=='Yes') { echo 'checked'; } ?> />Yes</td>
<td><input type="radio" name="pimmunecomplete" value="No" <?php if ($info['pimmunecomplete']=='No') { echo 'checked'; } ?>/>No</td>
</tr>
</table>
</div>
</fieldset>
<fieldset style="border:none">
<label>24. Mode of infant feeding</label>
<div class="radio-toolbar"> 
<table>
<tr>
<td><input type="radio" name="pfeedingmode" value="EBF" <?php if ($info['pfeedingmode']=='EBF') { echo 'checked'; } ?> />EBF</td>
<td><input type="radio" name="pfeedingmode" value="EBMS" <?php if ($info['pfeedingmode']=='EBMS') { echo 'checked'; } ?> />EBMS</td>
<td><input type="radio" name="pfeedingmode" value="Mixed" <?php if ($info['pfeedingmode']=='Mixed') { echo 'checked'; } ?> />Mixed</td>
</tr>
</table>
</div>
</fieldset>
<label>
25. Previous ARV Exposure other than PMTCT
</label>
<div class="radio-toolbar"> 
<table>
<tr>
<td><input type="radio" name="ppreviousarvexp" value="None" <?php if ($info['ppreviousarvexp']=='None') { echo 'checked'; } ?> />None</td>
</tr>
<tr>
<td><input type="radio" name="ppreviousarvexp" value="Treatment" <?php if ($info['ppreviousarvexp']=='Treatment') { echo 'checked'; } ?> />Treatment</td>
<td><input type="text" name="pprevarvtrtmt" id="pprevarvtrtmt" placeholder="Mth" style="width:20px; height:10px" value="<?php echo $info['pprevarvtrtmt']?>"/></td>
<td><input type="text" name="pprevarvdrugs" id="pprevarvdrugs" placeholder="Drugs" style="width:40px; height:10px" value="<?php echo $info['pprevarvdrugs']?>"/></td>
</tr>
</table>
</div>
         </div>
         <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 500px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">

</fieldset>
      </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div>
<br />
<br />
<br />
</fieldset>
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 250px; display: table-cell;"> 
        <fieldset style="border:none">
        
<label>
<span class="small" style="font-weight:bold">26. Known Drug Allergies</span>
</label>
<textarea rows="3" cols="90" name="drugallergies" id="drugallergies">
<?php echo $info['drugallergies']?>
</textarea>

<label>
<span class="small" style="font-weight:bold">27. Past Medical History (including hospitalisation and surgery)</span>
</label>
<textarea rows="3" cols="90" name="pastmedicalhist" id="pastmedicalhist">
<?php echo $info['pastmedicalhist']?>
</textarea>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
         </div>       
    </div>
</div>

</fieldset>
<fieldset style="height:600px">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 450px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>28. Previous ART exposure through PMTCT</label>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="ppreviousarvpmtct" value="Yes" <?php if ($info['ppreviousarvpmtct']=='Yes') { echo 'checked'; } ?> />Yes</td>
<td><input type="radio" name="ppreviousarvpmtct" value="No" <?php if ($info['ppreviousarvpmtct']=='No') { echo 'checked'; } ?> />No</td>
</tr>
</table>
</div>   
 </fieldset>
      </div>
        <div style="display: table-cell; width:450px"> 
        <fieldset style="height:20px; border:none">
<label>29. Current Medications</label>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="pcurrmeds" value="None" <?php if ($info['pcurrmeds']=='None') { echo 'checked'; } ?>/>None</td>
<td><input type="radio" name="pcurrmeds" value="ART" <?php if ($info['pcurrmeds']=='ART') { echo 'checked'; } ?>/>ART</td>
</tr>
<tr>
<td><input type="radio" name="pcurrmeds" value="CTX" <?php if ($info['pcurrmeds']=='CTX') { echo 'checked'; } ?>/>CTX</td>
<td><input type="radio" name="pcurrmeds" value="Anti-TB" <?php if ($info['pcurrmeds']=='Anti-TB') { echo 'checked'; } ?>/>Anti-TB</td>
</tr>
<tr>
<td><input type="radio" name="pcurrmeds" value="Others" <?php if ($info['pcurrmeds']=='Others') { echo 'checked'; } ?>/>Others</td>
</tr>
</table>
</div>
        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 450px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>30. Service Entry into program</label>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="serviceentry" value="STI" <?php if ($info['serviceentry']=='STI') { echo 'checked'; } ?>/>STI</td>
<td><input type="radio" name="serviceentry" value="OPD" <?php if ($info['serviceentry']=='OPD') { echo 'checked'; } ?>/>OPD</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="HCT" <?php if ($info['serviceentry']=='HCT') { echo 'checked'; } ?>/>HCT</td>
<td><input type="radio" name="serviceentry" value="HBC" <?php if ($info['serviceentry']=='HBC') { echo 'checked'; } ?>/>HBC</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="Private" <?php if ($info['serviceentry']=='Private') { echo 'checked'; } ?>/>Private</td>
<td><input type="radio" name="serviceentry" value="TB" <?php if ($info['serviceentry']=='TB') { echo 'checked'; } ?>/>TB</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="Ward" <?php if ($info['serviceentry']=='Ward') { echo 'checked'; } ?>/>Ward</td>
<td><input type="radio" name="serviceentry" value="Casualty" <?php if ($info['serviceentry']=='Casualty') { echo 'checked'; } ?>/>Casualty</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="Public" <?php if ($info['serviceentry']=='Public') { echo 'checked'; } ?>/>Public</td>
<td><input type="radio" name="serviceentry" value="ANC/PMTCT" <?php if ($info['serviceentry']=='ANC/PMTCT') { echo 'checked'; } ?>/>ANC/PMTCT</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="Current Clinic Patient" <?php if ($info['serviceentry']=='Current Clinic Patient') { echo 'checked'; } ?>/>Current Clinic Patient</td>
<td><input type="radio" name="serviceentry" value="Self Referral" <?php if ($info['serviceentry']=='Self Referral') { echo 'checked'; } ?>/>Self Referral</td>
</tr>
<tr>
<td><input type="radio" name="serviceentry" value="Substance Use" <?php if ($info['serviceentry']=='Substance Use') { echo 'checked'; } ?>/>Substance Use</td>
</tr>
</table>
</div>
 </fieldset>
      </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 250px; display: table-cell;"> 
<label>31. Adherence:</label><br>
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
<br />
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
 </div>
</div>

</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">32. Physical exam(note: NSF: No significant findings)</legend>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 100px; display: table-cell;"> 
        <fieldset style="height:32px; width:100px; border:none">
<legend style="font-weight:bold; font-size:11px">Temp (°C)</legend>
<input type="text" name="petemp" id="petemp" style="width:40px; height:10px;" value="<?php echo $info['petemp']?>" onkeyup="format(this);"/>
      </fieldset>
         </div>
        <div style="display: table-cell; width:100px"> 
        <fieldset style="height:32px; width:100px; border:none">
<legend style="font-weight:bold; font-size:11px">Pulse (/min)</legend>
<input type="text" name="pepulse" id="pepulse" style="width:40px; height:10px;" value="<?php echo $info['pepulse']?>" onkeyup="format(this);"/>
        </fieldset>
         </div>       
        <div style="display: table-cell; width:100px"> 
        <fieldset style="height:32px; width:100px; border:none">
<legend style="font-weight:bold; font-size:11px">Weight (kgs)</legend>
<input type="text" name="peweight" id="peweight" style="width:40px; height:10px;" value="<?php echo $info['peweight']?>" onkeyup="format(this);"/>
        </fieldset>
         </div>       
        <div style="display: table-cell; width:100px"> 
        <fieldset style="height:32px; width:100px; border:none">
<legend style="font-weight:bold; font-size:11px">Head circum (cm)</legend>
<input type="text" name="pedcircumf" id="pedcircumf" style="width:40px; height:10px;" value="<?php echo $info['pedcircumf']?>" onkeyup="format(this);"/>
        </fieldset>
         </div>       
        <div style="display: table-cell; width:90px"> 
        <fieldset style="height:32px; width:100px; border:none">
<legend style="font-weight:bold; font-size:11px">MUAC (cm)</legend>
<input type="text" name="pedmuac" id="pedmuac" style="width:40px; height:10px;" value="<?php echo $info['pedmuac']?>" onkeyup="format(this);"/>
        </fieldset>
         </div>       
        <div style="display: table-cell; width:100px"> 
        <fieldset style="height:32px; width:100px; border:none">
<legend style="font-weight:bold; font-size:11px">Surf Area (cm3)</legend>
<input type="text" name="pedsurface" id="pedsurface" style="width:40px; height:10px;" value="<?php echo $info['pedsurface']?>" onkeyup="format(this);"/>
        </fieldset>
         </div>       
    </div>
</div>
</fieldset>


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
<td><input type="checkbox" name="pegenappearance[]" id="pegenappearance" value="No Significant Findings" <?php if (strpos($info['pegenappearance'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>

<tr>
<td><input type="checkbox" name="pegenappearance[]" id="pegenappearance" value="Pale" <?php if (strpos($info['pegenappearance'],'Pale') !== false) { echo 'checked'; }?>>Pale</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenappearance[]" id="pegenappearance" value="Dehydrated" <?php if (strpos($info['pegenappearance'],'Dehydrated') !== false) { echo 'checked'; }?>>Dehydrated</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenappearance[]" id="pegenappearance" value="Jaunduce" <?php if (strpos($info['pegenappearance'],'Jaunduce') !== false) { echo 'checked'; }?>>Jaundiced</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenappearance[]" id="pegenappearance" value="Edematous" <?php if (strpos($info['pegenappearance'],'Edematous') !== false) { echo 'checked'; }?>>Edematous</td>
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
<td><input type="checkbox" name="peskin[]" id="peskin" value="Scabies" <?php if (strpos($info['peskin'],'Scabies') !== false) { echo 'checked'; }?>>Scabies</td>
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
<legend style="font-weight:bold; font-size:11px">Neurological</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="No Significant Findings" <?php if (strpos($info['geneurological'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="Disoriented in TPP" <?php if (strpos($info['geneurological'],'Disorientated in TPP') !== false) { echo 'checked'; }?>>Disoriented in TPP</td>
</tr>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="Slurred speech" <?php if (strpos($info['geneurological'],'Slurred speech') !== false) { echo 'checked'; }?>>Slurred speech</td>
</tr>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="Neck Stiffness" <?php if (strpos($info['geneurological'],'Neck Stiffness') !== false) { echo 'checked'; }?>>Neck Stiffness</td>
</tr>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="Blindness 1/2 Eyes" <?php if (strpos($info['geneurological'],'Blindness 1/2 Eyes') !== false) { echo 'checked'; }?>>Blindness</td>
</tr>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="Weakness/paralysis" <?php if (strpos($info['geneurological'],'Weakness/paralysis') !== false) { echo 'checked'; }?>>Weakness/paralysis</td>
</tr>
<tr>
<td><input type="checkbox" name="geneurological[]" id="geneurological" value="Numbness of extremeties" <?php if (strpos($info['geneurological'],'Numbness of extremeties') !== false) { echo 'checked'; }?>>Numbness of extremities</td>
</tr>
</table>
</div>
</fieldset>

        </div>
        <div style="display: table-cell;"> 
<fieldset style="height:140px">
<legend style="font-weight:bold; font-size:11px">Cardiovascular</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="pecardiovascular[]" id="pecardiovascular" value="No Significant Findings" <?php if (strpos($info['pecardiovascular'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
<tr>
<td><input type="checkbox" name="pecardiovascular[]" id="pecardiovascular" value="Irregular pulse" <?php if (strpos($info['pecardiovascular'],'Irregular pulse') !== false) { echo 'checked'; }?>>Irregular pulse</td>
</tr>
<tr>
<td><input type="checkbox" name="pecardiovascular[]" id="pecardiovascular" value="Auscultation Finding" <?php if (strpos($info['pecardiovascular'],'Auscultation Finding') !== false) { echo 'checked'; }?>>Auscultation Finding</td>
</tr>
</table>
</div>
</fieldset>
<fieldset style="width:270; ">
<legend style="font-weight:bold; font-size:11px">Head/Eye/ENT</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="peheadeye[]" id="peheadeye" value="No Significant Findings" <?php if (strpos($info['peheadeye'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
<tr>
<td><input type="checkbox" name="peheadeye[]" id="peheadeye" value="Gingivitis" <?php if (strpos($info['peheadeye'],'Gingivitis') !== false) { echo 'checked'; }?>>Gingivitis</td>
</tr>
<tr>
<td><input type="checkbox" name="peheadeye[]" id="peheadeye" value="Thrush" <?php if (strpos($info['peheadeye'],'Thrush') !== false) { echo 'checked'; }?>>Thrush</td>
</tr>
<tr>
<td><input type="checkbox" name="peheadeye[]" id="peheadeye" value="Oral KS" <?php if (strpos($info['peheadeye'],'Oral KS') !== false) { echo 'checked'; }?>>Oral KS</td>
</tr>
<tr>
<td><input type="checkbox" name="peheadeye[]" id="peheadeye" value="Otitis media" <?php if (strpos($info['peheadeye'],'Otitis media') !== false) { echo 'checked'; }?>>Otitis media</td>
</tr>
<tr>
<td><input type="checkbox" name="peheadeye[]" id="peheadeye" value="Ear discharge" <?php if (strpos($info['peheadeye'],'Ear discharge') !== false) { echo 'checked'; }?>>Ear discharge</td>
</tr>
<tr>
<td><input type="checkbox" name="peheadeye[]" id="peheadeye" value="Oral ulcer" <?php if (strpos($info['peheadeye'],'Oral ulcer') !== false) { echo 'checked'; }?>>Oral ulcer</td>
</tr>
</table>
</div>
</fieldset>
<fieldset style="height:220px">
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
<fieldset style="width:270; height:203px ">
<legend style="font-weight:bold; font-size:11px">Glands</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="pedpeglands[]" id="pedpeglands" value="No Significant Findings" <?php if (strpos($info['pedpeglands'],'No Significant Findings') !== false) { echo 'checked'; }?>>NSF</td>
</tr>
<tr>
<td><input type="checkbox" name="pedpeglands[]" id="pedpeglands" value="Parotid swelling" <?php if (strpos($info['pedpeglands'],'Lumps|Masses') !== false) { echo 'checked'; }?>>Parotid swelling</td>
</tr>
<tr>
<td><input type="checkbox" name="pedpeglands[]" id="pedpeglands" value="Discharge" <?php if (strpos($info['pedpeglands'],'Lymphadenopathy
') !== false) { echo 'checked'; }?>>Lymphadenopathy
</td>
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
<td><input type="checkbox" name="pegenitalia[]" id="pegenitalia" value="Genital lesions" <?php if (strpos($info['pegenitalia'],'Genital lesions') !== false) { echo 'checked'; }?>>Genital lesions</td>
</tr>
<tr>
<td><input type="checkbox" name="pegenitalia[]" id="pegenitalia" value="Tanner Stage" <?php if (strpos($info['pegenitalia'],'Tanner Stage') !== false) { echo 'checked'; }?>>Tanner Stage</td>
<td><input type="text" name="pegenitalia[]" id="pegenitalia" size="1" style="height:10px" ></td>
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
<legend style="font-weight:bold; font-size:11px">33. Additional Physical Examination Findings</legend>
<textarea rows="3" cols="90" name="peadditional" id="peadditional">
<?php echo $info['peadditional']?>
</textarea>
</fieldset>
</fieldset>
<fieldset>
<label>
34. Assessment
</label>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="assessment" value="Asymptomatic" <?php if ($info['assessment']=='Asymptomatic') { echo 'checked'; } ?> />Asymptomatic</td>
<td><input type="radio" name="assessment" value="Symptomatic" <?php if ($info['assessment']=='Symptomatic') { echo 'checked'; } ?>/>Symptomatic</td>
<td><input type="radio" name="assessment" value="AIDS Defining illness" <?php if ($info['assessment']=='AIDS Defining illness') { echo 'checked'; } ?>/>AIDS Defining illness</td>
<td><input type="radio" name="assessment" value="Opportunistic Infections" <?php if ($info['assessment']=='Opportunistic Infections') { echo 'checked'; } ?>/>Opportunistic Infections</td>
</tr>
</table>
<br />
</div>
<label>35. WHO stage</label>
<input type="text" name="whostage" id="whostage" size="1" style="height:10px" value="<?php echo $info['whostage']?>" />
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">36. Plan (Order on specific requisition form)</legend>
<div class="checkbox-toolbar"> 
<table>
<label></label>
<tr>
<td><input type="checkbox" name="plan[]" id="plan" value="Lab Evaluation" style="height:10px;" <?php if (strpos($info['plan'],'Lab Evaluation') !== false) { echo 'checked'; }?>/>Lab Evaluation</td>
<td><input type="text" name="planlab" id="planlab" style="height:10px; width:120px" value="<?php echo $info['planlab']?>"></td>
<td><input type="checkbox" name="plan[]" id="plan" value="TB Screening" style="height:10px;" <?php if (strpos($info['plan'],'TB Screening') !== false) { echo 'checked'; }?>/>TB Screening</td>
<td><input type="text" name="plantbs" id="plantbs" style="height:10px; width:120px" value="<?php echo $info['plantbs']?>"/></td>
</tr>
<tr>
<td><input type="checkbox" name="plan[]" id="plan" value="OI Prophylaxis" style="height:10px;" <?php if (strpos($info['plan'],'OI Prophylaxis') !== false) { echo 'checked'; }?>/>OI Prophylaxis</td>
<td><input type="text" name="planoip" id="planoip" style="height:10px; width:120px" value="<?php echo $info['planoip']?>"/></td>
<td><input type="checkbox" name="plan[]" id="plan" value="Palliative care" style="height:10px;"<?php if (strpos($info['plan'],'Palliative care') !== false) { echo 'checked'; }?>/>Palliative care</td>
<td><select name="planpalliative">
	<option value="<?php echo $info['planpalliative']?>"><?php echo $info['planpalliative']?></option> 
    <option value="Psychosocial support">Psychosocial support</option>
    <option value="End of life care">End of life</option>
</select>
</td></tr>
<tr>
<td><input type="checkbox" name="plan[]" id="plan" value="Adherence Counseling" style="height:10px;"<?php if (strpos($info['plan'],'Adherence Counseling') !== false) { echo 'checked'; }?>/>Adh Counseling</td>
<td><input type="text" name="planadh" id="planadh" style="height:10px; width:120px" value="<?php echo $info['planadh']?>"/></td>
<td><input type="checkbox" name="plan[]" id="plan" value="OI Therapy" style="height:10px;" <?php if (strpos($info['plan'],'OI Therapy') !== false) { echo 'checked'; }?>/>OI Therapy</td>
<td><input type="text" name="planoit" id="planoit" style="height:10px; width:120px" value="<?php echo $info['planoit']?>"/></td>
</tr>
<tr>
<td><input type="checkbox" name="plan[]" id="plan" value="Admission" style="height:10px;" <?php if (strpos($info['plan'],'Admission') !== false) { echo 'checked'; }?>/>Admission</td>
<td><input type="text" name="planadm" id="planadm" style="height:10px; width:120px" value="<?php echo $info['planadm']?>"/></td>
<td><input type="checkbox" name="plan[]" id="plan" value="Symptomatic treatment/Pain control" style="height:10px;"<?php if (strpos($info['plan'],'Symptomatic treatment/Pain control') !== false) { echo 'checked'; }?>/>Pain Control</td>
<td><input type="text" name="planpain" id="planpain" style="height:10px; width:120px" value="<?php echo $info['planpain']?>"/></td>
</tr>
<tr>
<td><input type="checkbox" name="plan[]" id="plan" value="Referrals" style="height:10px;" <?php if (strpos($info['plan'],'Referrals') !== false) { echo 'checked'; }?>/>Referrals</td>
<td><select name="planref">
	<option value="<?php echo $info['planref']?>"><?php echo $info['planref']?></option> 
    <option value="Support">Support</option>
    <option value="PMTCT">PMTCT</option>
</select>
<td><input type="checkbox" name="plan[]" id="plan" value="Counselling" style="height:10px;" <?php if (strpos($info['plan'],'Counselling') !== false) { echo 'checked'; }?>/>Counselling</td>
<td><select name="plancounsel">
	<option value="<?php echo $info['plancounsel']?>"><?php echo $info['plancounsel']?></option> 
    <option value="Adherence">Adherence</option>
    <option value="VCT">VCT</option>
    <option value="Nutrition">Nutrition</option>
    <option value="Peer health support">Peer health support</option>
</select>
</td>
</tr>
<tr>
<td><input type="checkbox" name="plan[]" id="plan" value="CXR" style="height:10px;" <?php if (strpos($info['plan'],'CXR') !== false) { echo 'checked'; }?>/>CXR</td>
<td><input type="text" name="plancxr" id="plancxr" style="height:10px; width:120px" value="<?php echo $info['plancxr']?>"></td>
<td><input type="checkbox" name="plan[]" id="plan" value="PMTCT" style="height:10px;" <?php if (strpos($info['plan'],'PMTCT') !== false) { echo 'checked'; }?>/>PMTCT</td>
<td><input type="text" name="planpmtct" id="planpmtct" style="height:10px; width:120px" value="<?php echo $info['planpmtct']?>"></td>
</tr>
<tr>
<td><input type="checkbox" name="plan[]" id="plan" value="Other" style="height:10px;" <?php if (strpos($info['plan'],'Other') !== false) { echo 'checked'; }?>/>Other</td>
<td><input type="text" name="planother" id="planother" style="height:10px; width:120px" value="<?php echo $info['planother']?>"></td>
</tr>
</table>
</div>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">37. Enroll in:</legend>
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
<legend style="font-weight:bold; font-size:11px">38. Plan for ARV Therapy</legend>
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
<legend style="font-weight:bold; font-size:11px">39. ART Regimen</legend>
<div class="radio-toolbar"> 
<table>
<tr>
Ist Line
</tr>
<tr>
<td><input type="radio" name="regimen1st" value="AZT/3TC/NVP" <?php if ($info['regimen1st']=='AZT/3TC/NVP') { echo 'checked'; } ?>/>AZT/3TC/NVP</td>
<td><input type="radio" name="regimen1st" value="AZT/3TC/LPV/r" <?php if ($info['regimen1st']=='AZT/3TC/LPV/r') { echo 'checked'; } ?>/>AZT/3TC/LPV/r</td>
<td><input type="radio" name="regimen1st" value="AZT/3TC/EFV*" <?php if ($info['regimen1st']=='AZT/3TC/EFV*') { echo 'checked'; } ?>/>AZT/3TC/EFV*</td>
</tr>
</table>
<table>
<tr>
Alternate 1st Line
</tr>
<tr>
<td><input type="radio" name="regimen1st" value="AZT/3TC/ABC" <?php if ($info['regimen1st']=='AZT/3TC/ABC') { echo 'checked'; } ?>/>AZT/3TC/ABC</td>
<td><input type="radio" name="regimen1st" value="ABC/3TC/NVP"  <?php if ($info['regimen1st']=='ABC/3TC/NVP') { echo 'checked'; } ?>/>ABC/3TC/NVP</td>
<td><input type="radio" name="regimen1st" value="d4T/3TC/NVP"  <?php if ($info['regimen1st']=='d4T/3TC/NVP') { echo 'checked'; } ?>/>d4T/3TC/NVP</td>
</tr>
</table>
<table>
<tr>
2nd Line
</tr>
<tr>
<td><input type="radio" name="regimen1st" value="ABC/3TC/LPV/r" onchange="regimen1stcheck()"  <?php if ($info['regimen1st']=='ABC/3TC/LPV/r') { echo 'checked'; } ?>/>ABC/3TC/LPV/r</td>
<td><input type="radio" name="regimen1st" value="AZT/3TC/LPV/r" onchange="regimen1stcheck()"  <?php if ($info['regimen1st']=='AZT/3TC/LPV/r') { echo 'checked'; } ?>/>AZT/3TC/LPV/r</td>
<td><input type="radio" name="regimen1st" value="d4T/3TC/LPV/r" onchange="regimen1stcheck()"  <?php if ($info['regimen1st']=='d4T/3TC/LPV/r') { echo 'checked'; } ?>/>d4T/3TC/LPV/r</td>
<td><input type="radio" name="regimen1st" value="ABC/3TC/ddi" onchange="regimen1stcheck()"  <?php if ($info['regimen1st']=='ABC/3TC/ddi') { echo 'checked'; } ?>/>ABC/3TC/ddi</td>
<td><input type="radio" name="regimen1st" value="ddi/3TC/NVP" onchange="regimen1stcheck()"  <?php if ($info['regimen1st']=='ddi/3TC/NVP') { echo 'checked'; } ?>/>ddi/3TC/NVP</td>
</tr>
</table>
<br />
<table>
<tr>
<td><input type="radio" name="regimen1st" value="Other"  <?php if ($info['regimen1st']=='Other') { echo 'checked'; } ?>/>Others</td>
</tr>
</table>
</div>
<legend style="font-weight:bold; font-size:11px">40. Drugs in Regimen</legend>
<textarea rows="3" cols="90" name="regimenothers" id="regimenothers">
<?php echo $info['regimenothers']?>
</textarea>

</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">41. Additional Comments</legend>
<textarea rows="3" cols="90" name="pedadditional" id="pedadditional">
<?php echo $info['pedadditional']?>
</textarea>
</fieldset>
<fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">42. Next Appointment</legend>
<div class="radio-toolbar"> 
<table>
<label ></label>
<tr>
<td><input type="radio" name="nextappointment" value="1 week" <?php if ($info['nextappointment']=='1 week') { echo 'checked'; } ?>/>1 week</td>
</tr>
<tr>
<td><input type="radio" name="nextappointment" value="2 weeks" <?php if ($info['nextappointment']=='2 weeks') { echo 'checked'; } ?>/>2 weeks</td>
</tr>
<tr>
<td><input type="radio" name="nextappointment" value="4 weeks" <?php if ($info['nextappointment']=='4 weeks') { echo 'checked'; } ?>/>4 weeks</td>
</tr>
<tr>
<td><input type="radio" name="nextappointment" value="2 months" <?php if ($info['nextappointment']=='2 months') { echo 'checked'; } ?>/>2 months</td>
</tr>
<tr>
<td><input type="radio" name="nextappointment" value="3 months" <?php if ($info['nextappointment']=='3 months') { echo 'checked'; } ?>/>3 months</td>
</tr>
</table>
</div>

<label>Next appointment
</label>
<input type="date" name="nextappointmentdate" id="nextappointmentdate" value="<?php echo $info['nextappointmentdate']?>" style="width:120px; height:10px" />
</fieldset>
<label>Clinician's name
</label>
<input type="text" name="Clinicianname" id="Clinicianname" style="width:120px; height:10px" value="<?php echo $info['Clinicianname']?>"/>

</fieldset>
<button type="submit">REGISTER</button>
<div class="spacer"></div>

</form>
</div>
</body>
</html>