<?php

include './mandate_/lidh.php';

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


class MyClass{
    public function GetUserInformation(){
$query = "SELECT patient.pepid, patient.surname,patient.othernames,patient.age, patient.uniqueid,patient.sex, CURDATE() as visitdate
FROM patient
WHERE patient.pepid = '$_SESSION[pepid]'";

include 'lidh.php';

        $result = mysqli_query($con, $query);
        $info = mysqli_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysqli_error($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CiS Pro - Encounter</title>
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
   top: 8px;
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
<script type="text/javascript">
function panicval(){
	var whostage = document.getElementById('whostage').value;
	if (whostage == 3 || whostage == 4){
				document.getElementById('doblabel2').innerHTML = "*WHO panic value!";
		}
			else if (whostage > 4 || whostage == 0 ){
						document.getElementById('doblabel2').innerHTML = "*Invalid WHO Staging Number";
				}
			else{
						document.getElementById('doblabel2').innerHTML = "";
				}

	}
function agecheck(){
	if(document.getElementById('age').value<15){
		document.getElementById('bp').disabled=true;
		}
	else if(document.getElementById('age').value>=15){
		document.getElementById('bp').disabled=false;
		document.getElementById('height').disabled=true;
		}
	}
</script>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<div class="tops">
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">
Care Card - Encounter&nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>
<a href="./Welcome.php" style="font-weight:bold; font-size:14px; color:#2A1FFF">[MAIN MENU]</a> &nbsp;&nbsp;&nbsp;
<a href="javascript:history.go(-1)">[BACK]</a>

</div>
<br />
<br />
<br />
<br />

<body onload="if(document.referrer=='') self.location='./index.php';">
<div class='sidebar1'>
</div>

<div id="stylized" class="myform">
<form id="form" name="form" method="POST" onkeypress="return event.keyCode != 13;"  action="carecard2insert.php">
<fieldset>
<input type="hidden" name="pepid" id="pepid" value="<?php echo $info['pepid']?>" readonly />
<input type="hidden" name="age" id="age" value="<?php echo $info['age']?>" readonly />


<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">E1. Visit Date</span>
</label>
<input type="date" name="visitdate" id="visitdate" required="required" placeholder="YYYY-MM-DD" style="width:120px; height:10px; float:left"/>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold">E2. Duration (MONTHS) on ART</span>
</label>
<input type="text" name="artduration" id="artduration" style="width:50px; height:10px;"/>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold">Patient ID</span>
</label>
<input type="text" name="pepid" id="pepid" value="<?php echo $info['pepid']?>" readonly style="width:120px;height:10px;font-weight:bold" />
        </fieldset>
         </div>
    </div>
</div>



<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">E3. Weight</span>
</label>
<input type="text" name="weight" id="weight" style="width:50px; height:10px; float:left"/>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold">E4. Height(cm) for children</span>
</label>
<input type="text" name="height" id="height" style="width:50px; height:10px;"/>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold">E5. Blood pressure(mmHg) adults only</span>
</label>
<input type="text" name="bp" id="bp" style="width:120px; height:10px;"/>
        </fieldset>
         </div>
    </div>
</div>




<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">E6. EDD and PMTCT link</span>
</label>
<select name="eddpmtct" style="width:120px; height:20px; float:left">
	<option value="">Select</option> 
    <option value="Pregnant">1. (P) Pregnant</option> 
    <option value="Pregnant and on PMTCT">2. (PMTCT) Pregnant and on PMTCT</option>
    <option value="Not Pregnant">3. (NP) Not Pregnant</option>
    <option value="Not known">4. (NK) Not known</option>
</select>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label >
<span class="small" style="font-weight:bold">E7. FP (write method)</span>
</label>
<select name="fp" style="width:120px; height:20px; float:left">
	<option value="">Select</option> 
	<optgroup label="On family planning">    
    <option value="Condoms">1. Condoms</option> 
    <option value="Oral contraceptive pills">2. Oral contraceptive pills</option> 
    <option value="Injectable/Implantable hormones">3. Injectable/Implantable hormones</option> 
    <option value="Diaphragm/cervical caps">4. Diaphragm/cervical caps</option> 
    <option value="Intra uterine device">5. Intra uterine device</option> 
    <option value="Vasectomy/tubal ligation/hysterectomy">6. Vasectomy/tubal ligation/hysterectomy</option> 
    <option value="Other">7. Other</option> 
    </optgroup>
    <option value="Not on family planning">No FP - Not on family planning</option>
</select>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label>
<span class="small" style="font-weight:bold">E8. Functional status</span>
</label>
<select name="functionalstatus" style="width:120px; height:20px; float:left">
	<option value="">Select</option> 
    <option value="Working">W - Working</option> 
    <option value="Ambulant">A - Ambulant</option>
    <option value="Bedridden">B - Bedridden</option>
</select>
        </fieldset>
         </div>
    </div>
</div>





<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">E9. WHO clinical stage</span>
</label>
<select name="whostage" style="width:40px; height:20px; float:left">
	<option value=""></option> 
    <option value="1">1</option> 
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold">E10. TB status</span>
</label>
<select name="tbstatus" style="width:120px; height:20px; float:left">
	<option value=""></option> 
    <option value="No Signs">1. No Signs</option> 
    <option value="TB Suspected and referred for evaluation">2. SUSP - TB Suspected</option>
    <option value="On INH prophylaxis">3. INH - On INH prophylaxis</option>
    <option value="TB positive, Not on drugs">4. TB positive, Not on drugs</option>
    <option value="Currently on TB treatment">5. TB Rx - Currently on TB treatment</option>
</select>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label>
<span class="small" style="font-weight:bold">E11. Other OIs/Other OI problems</span>
</label>
<select name="otheroi" style="width:120px; height:20px; float:left">
	<option value=""></option> 
    <option value="Herpes Zoster">1. Herpes Zoster</option> 
    <option value="Pneumonia">2. Pneumonia</option>
    <option value="Dementia/Encephalitis">3. Dementia/Encephalitis</option>
    <option value="Thrush Oral/Vaginal">4. Thrush Oral/Vaginal</option>
    <option value="Fever">5. Fever</option>
    <option value="Cough">6. Cough</option>
</select>
        </fieldset>
         </div>
    </div>
</div>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">E12. Noted side effects</span>
</label>
<select name="sideeff" style="width:120px; height:20px; float:left">
	<option value=""></option> 
    <option value="Nausea/Vomitting">1. Nausea/Vomitting</option> 
    <option value="Headache">2. Headache</option>
    <option value="Insomnia/bad dreams">3. Insomnia/bad dreams</option>
    <option value="Fatigue/weakness">4. Fatigue/weakness</option>
    <option value="PV Bleding/discharge">5. PV Bleding/discharge</option>
    <option value="Rash">6. Rash</option>
    <option value="FAT changes">7. FAT changes</option>
    <option value="Anemia">8. Anemia</option>
    <option value="Drainage of liquor">9. Drainage of liquor</option>
    <option value="Stevens Johnson Syndrome">10. Stevens Johnson Syndrome</option>
    <option value="Hyperglycemia">11. Hyperglycemia</option>
</select>

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label>
<span class="small" style="font-weight:bold">Other Diagnosis (OI & Side Effects)</span>
</label>
<textarea rows="1" cols="55" name="otherdiag" id="otherdiag" maxlength="100" >
</textarea>

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        </fieldset>
         </div>
    </div>
</div>

</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">ARV Drugs</legend>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="regimen">
<span class="small" style="font-weight:bold">E13. Regimen</span>
</label>
<select name="regimen" style="width:120px; height:20px; float:left">
	<option value="">Select</option> 
    <option value="Others">Others</option>
    <optgroup label="Adult 1st-Line Regimen">
    <option value="AZT-3TC-EFV">1a. AZT-3TC-EFV</option> 
    <option value="AZT-3TC-NVP">1b. AZT-3TC-NVP</option>
    <option value="TDF-FTC-EFV">1c. TDF-FTC-EFV</option>
    <option value="TDF-FTC-NVP">1d. TDF-FTC-NVP</option>
    <option value="TDF-3TC-EFV">1e. TDF-3TC-EFV</option>
    <option value="TDF-3TC-NVP">1f. TDF-3TC-NVP</option>
    </optgroup>
    <optgroup label="Adult Alternate 1st Line">
    <option value="AZT-3TC-ABC">1g. AZT-3TC-ABC</option>
    <option value="AZT-3TC-TDF">1h. AZT-3TC-TDF</option>
    </optgroup>
    <optgroup label="Adult 2nd-Line Regimen">
    <option value="TDF-FTC-LPV/r">2a. TDF-FTC-LPV/r</option>
    <option value="TDF-3TC-LPV/r">2b. TDF-3TC-LPV/r</option>
    <option value="TDF-FTC-ATV/r">2c. TDF-FTC-ATV/r</option>
    <option value="TDF-3TC-ATV/r">2d. TDF-3TC-ATV/r</option>
    <option value="AZT-3TC-LPV/r">2e. AZT-3TC-LPV/r</option>
    <option value="AZT-3TC-ATV/r">2f. AZT-3TC-ATV/r</option>
    </optgroup>
    <optgroup label="Child 1st-Line Regimen">
    <option value="AZT-3TC-EFV">4a. AZT-3TC-EFV</option>
    <option value="AZT-3TC-NVP">4b. AZT-3TC-NVP</option>
    <option value="ABC-3TC-EFV">4c. ABC-3TC-EFV</option>
    </optgroup>
    <optgroup label="Child alternate 1st Line">
    <option value="ABC-3TC-NVP">4d. ABC-3TC-NVP</option>
    <option value="AZT-3TC-ABC">4e. AZT-3TC-ABC</option>
    <option value="d4T-3TC-NVP">4f. d4T-3TC-NVP</option>
    <option value="Others">4g. Others</option>
    </optgroup>
    <optgroup label="Child 2nd-line Regimen">
    <option value="ABC-3TC-LPV/r">5a. ABC-3TC-LPV/r</option>
    <option value="AZT-3TC-LPV/r">5b. AZT-3TC-LPV/r</option>
    <option value="d4T-3TC-LPV/r">5c. d4T-3TC-LPV/r</option>
    <option value="ddi-3TC-NVP">5d. ddi-3TC-NVP</option>
    <option value="ABC-3TC-ddi">5e. ABC-3TC-ddi</option>
    <option value="Others">5f. Others</option>
    </optgroup>
</select>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label>
<span class="small" style="font-weight:bold">Adherence: A</span>
</label>
<select name="regadherencea">
	<option value="">Select</option> 
    <option value="Good">Good</option> 
    <option value="Fair">Fair</option>
    <option value="Poor">Poor</option>
</select>

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label>
<span class="small" style="font-weight:bold">Adherence: B</span>
</label>
<select name="regadherenceb">
	<option value="">Select</option> 
    <option value="Forgot">1. Forgot</option> 
    <option value="Fell asleep/slept through dose">2. Fell asleep/slept through dose</option>
    <option value="Change in routine/away from home">3. Change in routine/away from home</option>
    <option value="Busy/working/at school">4. Busy/working/at school</option> 
    <option value="Got prenant">5. Got prenant</option>
    <option value="Patient Moved">6. Patient Moved</option>
    <option value="Ran out of Medications">7. Ran out of Medications</option> 
    <option value="Drug stock-out">8. Drug stock-out</option>
    <option value="Not able to pay">9. Not able to pay</option>
    <option value="Felt Well">10. Felt Well</option> 
    <option value="Felt Sick/Bad">11. Felt Sick/Bad</option>
    <option value="Felt overwhelmed/depressed">12. Felt overwhelmed/depressed</option>
    <option value="Did not understand how to take medication">13. Did not understand how to take medication</option> 
    <option value="Did not want others to know">14. Did not want others to know</option>
    <option value="Too many pills">15. Too many pills</option>
    <option value="Did not want to take Medications">16. Did not want to take Medications</option> 
    <option value="Afraid/Affected by Side effects">17. Afraid/Affected by Side effects</option>
    <option value="Other">18. Other</option>
</select>
        </fieldset>
         </div>
    </div>
</div>
<br />
<label>
<span class="small" style="font-weight:bold">Other: Regimen</span>
</label>
<textarea rows="1" cols="55" name="otherregimen" id="otherregimen" >
</textarea>
</fieldset>



<fieldset>
<legend style="font-weight:bold; font-size:11px">COTRIMOXAZOLE</legend>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="regimen">
<span class="small" style="font-weight:bold">E15. Dose</span>
</label>
<input type="text"  name="cotrimdose" id="cotrimdoze" style="width:120px; height:10px;" />
<p></p>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label>
<span class="small" style="font-weight:bold">Adherence: A</span>
</label>
<select name="cotrimadherencea">
	<option value="">Select</option> 
    <option value="Good">Good</option> 
    <option value="Fair">Fair</option>
    <option value="Poor">Poor</option>
</select>

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label>
<span class="small" style="font-weight:bold">Adherence: B</span>
</label>
<select name="cotrimadherencea">
	<option value="">Select</option> 
    <option value="Forgot">1. Forgot</option> 
    <option value="Fell asleep/slept through dose">2. Fell asleep/slept through dose</option>
    <option value="Change in routine/away from home">3. Change in routine/away from home</option>
    <option value="Busy/working/at school">4. Busy/working/at school</option> 
    <option value="Got prenant">5. Got prenant</option>
    <option value="Patient Moved">6. Patient Moved</option>
    <option value="Ran out of Medications">7. Ran out of Medications</option> 
    <option value="Drug stock-out">8. Drug stock-out</option>
    <option value="Not able to pay">9. Not able to pay</option>
    <option value="Felt Well">10. Felt Well</option> 
    <option value="Felt Sick/Bad">11. Felt Sick/Bad</option>
    <option value="Felt overwhelmed/depressed">12. Felt overwhelmed/depressed</option>
    <option value="Did not understand how to take medication">13. Did not understand how to take medication</option> 
    <option value="Did not want others to know">14. Did not want others to know</option>
    <option value="Too many pills">15. Too many pills</option>
    <option value="Did not want to take Medications">16. Did not want to take Medications</option> 
    <option value="Afraid/Affected by Side effects">17. Afraid/Affected by Side effects</option>
    <option value="Other">18. Other</option>
</select>
        </fieldset>
         </div>
    </div>
</div>
</fieldset>





<fieldset>
<legend style="font-weight:bold; font-size:11px">INH</legend>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="regimen">
<span class="small" style="font-weight:bold">E17. Dose</span>
</label>
<input type="text" name="inhdose" id="inhdose" style="width:120px; height:10px;"/>
<p></p>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label>
<span class="small" style="font-weight:bold">Adherence: A</span>
</label>
<select name="inhadherencea">
	<option value="">Select</option> 
    <option value="Good">Good</option> 
    <option value="Fair">Fair</option>
    <option value="Poor">Poor</option>
</select>

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label>
<span class="small" style="font-weight:bold">Adherence: B</span>
</label>
<select name="inhadherenceb">
	<option value="">Select</option> 
    <option value="Forgot">1. Forgot</option> 
    <option value="Fell asleep/slept through dose">2. Fell asleep/slept through dose</option>
    <option value="Change in routine/away from home">3. Change in routine/away from home</option>
    <option value="Busy/working/at school">4. Busy/working/at school</option> 
    <option value="Got prenant">5. Got prenant</option>
    <option value="Patient Moved">6. Patient Moved</option>
    <option value="Ran out of Medications">7. Ran out of Medications</option> 
    <option value="Drug stock-out">8. Drug stock-out</option>
    <option value="Not able to pay">9. Not able to pay</option>
    <option value="Felt Well">10. Felt Well</option> 
    <option value="Felt Sick/Bad">11. Felt Sick/Bad</option>
    <option value="Felt overwhelmed/depressed">12. Felt overwhelmed/depressed</option>
    <option value="Did not understand how to take medication">13. Did not understand how to take medication</option> 
    <option value="Did not want others to know">14. Did not want others to know</option>
    <option value="Too many pills">15. Too many pills</option>
    <option value="Did not want to take Medications">16. Did not want to take Medications</option> 
    <option value="Afraid/Affected by Side effects">17. Afraid/Affected by Side effects</option>
    <option value="Other">18. Other</option>
</select>
        </fieldset>
         </div>
    </div>
</div>
</fieldset>

<fieldset>
<label>
<span class="small" style="font-weight:bold">E17C. Other drugs prescribed</span>
</label>
<textarea rows="3" cols="90" name="otherdrugs" id="otherdrugs" >
</textarea>
</fieldset>

<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label><span class="small" style="font-weight:bold">E18. CD4 (check if scheduled)</span></label>
<table>
<tr>
<td><input type="checkbox" name="cd4scheduled" id="cd4scheduled" value="Yes (CD4)" /></td>
<td><input type="text" name="cd4value" id="cd4value" size="3" style="height:10px" /></td>
</tr>
</table>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label><span class="small" style="font-weight:bold">E19. Viral load (check if scheduled)</span></label>
<table>
<tr>
<td><input type="checkbox" name="vlscheduled" id="vlscheduled" value="Yes (VL)" /></td>
<td><input type="text" name="vlvalue" id="vlvalue" size="3" style="height:10px" /></td>
</tr>
</table>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        </fieldset>
         </div>
    </div>
</div>

<label><span class="small" style="font-weight:bold">E20. Other tests done</span></label>
<textarea rows="3" cols="39" name="othertests" id="othertests" >
</textarea>
</fieldset>

<fieldset>
<label><span class="small" style="font-weight:bold">E21. Consult, hospitalize, refer link</span></label>
<textarea rows="3" cols="39" name="recommendation" id="recommendation" >
</textarea>
</fieldset>

<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label><span class="small" style="font-weight:bold">E22. Next appointment date</span></label>
<span class="small"></span>
</label>
<input type="date" name="nextapptdate" id="nextapptdate" required="required" style="width:120px; height:10px;"/>

</fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        </fieldset>
         </div>        
         <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label><span class="small" style="font-weight:bold">E23. Name/Signature</span></label>
<span class="small"></span>
</label>
<input type="text" name="clinician" id="clinician" required="required" style="width:120px; height:10px;"/>
        </fieldset>
         </div>
    </div>
</div>

</fieldset>

<button type="submit" name="submit" id="submit">SUBMIT</button>
<div class="spacer"></div>

</form>


</div>

</body>
</html>