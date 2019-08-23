<?php
session_start();
include './mandate_/lidh.php';


{

	$table = 'clinicaleval';
	$column = 'bmi_muac';
	$column1 = 'pregnancybfstat';
	$column2 = 'edddate';
	$column4 = 'otheroi';
	$column5 = 'fp';
	
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table."'"))==1){
	if(mysqli_num_rows(mysqli_query($con,"SHOW COLUMNS FROM `clinicaleval` LIKE '".$column."'"))==0){
	$results_C1 = mysqli_query($con,"ALTER TABLE clinicaleval
	ADD COLUMN bmi_muac varchar(10) DEFAULT NULL;");
	}
}
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table."'"))==1){
	if(mysqli_num_rows(mysqli_query($con,"SHOW COLUMNS FROM `clinicaleval` LIKE '".$column1."'"))==0){
	$results_C1 = mysqli_query($con,"ALTER TABLE clinicaleval
	ADD COLUMN pregnancybfstat varchar(15) DEFAULT NULL;");
	}
}
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table."'"))==1){
	if(mysqli_num_rows(mysqli_query($con,"SHOW COLUMNS FROM `clinicaleval` LIKE '".$column2."'"))==0){
	$results_C1 = mysqli_query($con,"ALTER TABLE clinicaleval
	ADD COLUMN edddate DATE DEFAULT NULL;");
	}
}
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table."'"))==1){
	if(mysqli_num_rows(mysqli_query($con,"SHOW COLUMNS FROM `clinicaleval` LIKE '".$column4."'"))==1){
	$results_C1 = mysqli_query($con,"ALTER TABLE clinicaleval
	MODIFY COLUMN otheroi varchar(255) DEFAULT NULL;");
	}
}
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table."'"))==1){
	if(mysqli_num_rows(mysqli_query($con,"SHOW COLUMNS FROM `clinicaleval` LIKE '".$column5."'"))==1){
	$results_C1 = mysqli_query($con,"ALTER TABLE clinicaleval
	MODIFY COLUMN fp varchar(150) DEFAULT NULL;");
	}
}
		


}
echo mysqli_error($con);

?>
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
<a href="./Welcome.php?username=<?php echo $_GET['username'] ?>" style="font-weight:bold; font-size:14px; color:#2A1FFF">[MAIN MENU]</a> &nbsp;&nbsp;&nbsp;
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
<input type="date" name="visitdate" id="visitdate" required="required" placeholder="YYYY-MM-DD" style="width:120px; height:20px; float:left"/>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold">Tick if Scheduled</span>
</label>
<td><input type="checkbox" name="visitschd" id="visitschd" value="Yes" /></td>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold">Patient ID</span>
</label>
<input type="text" name="pepid" id="pepid" value="<?php echo $info['pepid']?>" readonly style="width:120px;height:20px;font-weight:bold" />
        </fieldset>
         </div>
    </div>
</div>
<br />
<div style="width: 100%; display: table;">
    <div style="display: table-row">
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
<label>
<span class="small" style="font-weight:bold">E3. Weight</span>
</label>
<input type="text" name="weight" id="weight" style="width:50px; height:10px; float:left"/>
        </fieldset>
         </div>
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold">E4. Height(cm) for children</span>
</label>
<input type="text" name="height" id="height" style="width:50px; height:10px;"/>
        </fieldset>
         </div>
         
    </div>
</div>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold">E5. BMI/MUAC</span>
</label>
<input type="text" name="bmi_muac" id="bmi_muac" style="width:50px; height:10px;"/>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold">E6. Blood pressure(mmHg) adults only</span>
</label>
<input type="text" name="bp" id="bp" style="width:50px; height:10px;"/>
        </fieldset>
         </div>
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">E7. Pregnancy Breastfeeding Status</span>
</label>
<input tabindex="disable" type="text" name="pregnancybfstat" id="pregnancybfstat" onChange="update11();" style="color:#F00; font-style:italic; width:100px; height:20px" list="DrugName" />
<datalist id="DrugName">
    <option value="Pregnant">P - Pregnant (Enter EDD)</option>
    <option value="Breastfeeding">BF - Breastfeeding</option>
</datalist> 
        </fieldset>
        <div style="display: table-cell;"> 
         </div>
    </div>
</div>

<br />
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">EDD (If Pregnant)</span>
</label>
<input tabindex="disable" type="date" name="edddate" id="edddate" onChange="update11();" style="color:#F00; font-style:italic; width:140px; height:20px" />
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
         </div>
    </div>
</div>
<br />

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label >
<span class="small" style="font-weight:bold">E8. Family Planning (write code)</span>
</label>
<input tabindex="disable" type="text" name="fp" id="fp" style="color:#F00; font-style:italic; width:140px; height:20px" list="DrugNames" />
<datalist id="DrugNames">
    <option value="...">FP - On Family Planning  Select Type</option>
    <option value="Condoms">1 - Condoms</option>
    <option value="Oral Contraceptive Pills">2 - Oral Contraceptive Pills</option>
    <option value="Injectable/Implantable Hormones">3 - Injectable/Implantable Hormones (e.g. Depo-provera)</option>
    <option value="Diaphram/Cervical Cap">4 - Diaphram/Cervical Cap</option>
    <option value="Intrauterine Device">5 - Intrauterine Device</option>
    <option value="Vasectomy/Tubal Ligation/Hysterectomy">6 - Vasectomy/Tubal Ligation/Hysterectomy</option>
    <option value="Others">7 - Others</option>
    <option value="Not on Family Planning">No FP - Not on Family Planning</option>
</datalist>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<input tabindex="disable" type="text" name="fpo" id="fpo" placeholder="Specify (If Other)" onChange="update11();" style="color:#F00; font-style:italic; width:120px; height:20px" />
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label>
<span class="small" style="font-weight:bold">E9. Functional status</span>
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

<br />


<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">E10. WHO clinical stage</span>
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
<span class="small" style="font-weight:bold">E11. TB status</span>
</label>
<select name="tbstatus" style="width:120px; height:20px; float:left">
	<option value=""></option> 
    <option value="No Signs">1. No Signs</option> 
    <option value="Patient with Signs and Symptoms of TB and Referred for Evaluation">2. Presumptive - Patient with Signs and Symptoms of TB and Referred for Evaluation</option>
    <option value="Currently On INH prophylaxis">3. IPT - Currently On INH prophylaxis</option>
    <option value="Confirmed TB - Patient Has active TB">4. Confirmed TB - Patient Has active TB</option>
</select>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 700px; display: table-cell;"> 
        <fieldset style="height:60px; ">
        <label>
<span class="small" style="font-weight:bold">E12. Other OIs/Other OI problems</span>
</label>
<table>
<label></label>
<tr>
<td><input type="checkbox" name="otheroi[]" id="otheroi" value="Herpes Zoster" >Herpes Zoster</td>
<td><input type="checkbox" name="otheroi[]" id="otheroi" value="Pneumonia" >Pneumonia</td>
<td><input type="checkbox" name="otheroi[]" id="otheroi" value="Dementia/Encephalitis" >Dementia/Encephalitis</td>
<tr>
</tr>
<td><input type="checkbox" name="otheroi[]" id="otheroi" value="Thrush Oral/Vaginal" >Thrush Oral/Vaginal</td>
<td><input type="checkbox" name="otheroi[]" id="otheroi" value="Fever" >Fever</td>
<td><input type="checkbox" name="otheroi[]" id="otheroi" value="Cough" >Cough</td>
</tr>
</table>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
         </div>
        <div style="display: table-cell;"> 
         </div>
    </div>
</div>
<br />
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 700px; display: table-cell;"> 
        <fieldset style="height:150px; ">
        <label>
<span class="small" style="font-weight:bold">E13. Other OIs/Other OI problems</span>
</label>
<table>
<label></label>
<tr>
<td><input type="checkbox" name="sideeff[]" id="sideeff" value="Nausea/Vomitting" >1. Nausea/Vomitting</td>
<td><input type="checkbox" name="sideeff[]" id="sideeff" value="Headache" >2. Headache</td>
<td><input type="checkbox" name="sideeff[]" id="sideeff" value="Insomnia/bad dreams" >3. Insomnia/bad dreams</td>
</tr>                                     
<tr>                                    
<td><input type="checkbox" name="sideeff[]" id="sideeff" value="Fatigue/weakness" >4. Fatigue/weakness</td>
<td><input type="checkbox" name="sideeff[]" id="sideeff" value="PV Bleding/discharge" >5. PV Bleding/discharge</td>
<td><input type="checkbox" name="sideeff[]" id="sideeff" value="Rash" >6. Rash</td>
</tr>                                   
<tr>                                    
<td><input type="checkbox" name="sideeff[]" id="sideeff" value="FAT changes" >7. FAT changes</td>
<td><input type="checkbox" name="sideeff[]" id="sideeff" value="Anemia" >8. Anemia</td>
<td><input type="checkbox" name="sideeff[]" id="sideeff" value="Drainage of liquor" >9. Drainage of liquor</td>
</tr>
<tr>                                    
<td><input type="checkbox" name="sideeff[]" id="sideeff" value="Stevens Johnson Syndrome" >10. Stevens Johnson Syndrome</td>
<td><input type="checkbox" name="sideeff[]" id="sideeff" value="Hyperglycemia" >11. Hyperglycemia</td>
</tr>
</table>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
         </div>
        <div style="display: table-cell;"> 
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
<span class="small" style="font-weight:bold">E14. Regimen</span>
</label>
<input tabindex="disable" type="text" name="regimen" id="regimen" style="color:#F00; font-style:italic; width:140px; height:20px" list="DrugNames1" />
<datalist id="DrugNames1">
    <option value="">Adult 1st-Line Regimen</option>
    <option value="TDF-3TC-EFV">1a. TDF-3TC-EFV</option>
    <option value="AZT-3TC-EFV">1b. AZT-3TC-EFV</option>
    <option value="AZT-3TC-NVP">1c. AZT-3TC-NVP</option>
    <option value="TDF-3TC-DTG">1d. TDF-3TC-DTG</option>
    <option value="TDF-3TC-EFV400">1e. TDF-3TC-EFV400</option>
    <option value="">Adult 2nd-Line Regimen</option>
    <option value="TDF-3TC-ATV/r">2a. TDF-3TC-ATV/r</option>
    <option value="TDF-3TC-LPV/r">2b. TDF-3TC-LPV/r</option>
    <option value="AZT-3TC-ATV/r">2c. AZT-3TC-ATV/r</option>
    <option value="AZT-3TC-LPV/r">2d. AZT-3TC-LPV/r</option>
    <option value="AZT-3TC-LPV/r">2e. AZT-3TC-LPV/r</option>
    <option value="TDF-3TC-DRV/r">2f. TDF-3TC-DRV/r</option>
    <option value="">Adult 3rd-Line Regimen</option>
    <option value="DRV/r-DTG+-1-2NRTIs">3a. DRV/r-DTG+-1-2NRTIs</option>
    <option value="DRV/r-2NRTIs+-NNRTI">3b. DRV/r-2NRTIs+-NNRTI</option>
    <option value="DRV/r-RAL+-1-2NRTIs">3b. DRV/r-RAL+-1-2NRTIs</option>
    <option value="">Pediatric 1st-Line Regimen</option>
    <option value="TDF-3TC-EFV">4a. TDF-3TC-EFV</option>
    <option value="AZT-3TC-NVP">4b. AZT-3TC-NVP</option>
    <option value="ABC-3TC-NVP">4c. ABC-3TC-NVP</option>
    <option value="AZT-3TC-EFV">4d. AZT-3TC-EFV</option>
    <option value="TDF-3TC-DTG">4e. TDF-3TC-DTG</option>
    <option value="TDF-3TC-NVP">4f. TDF-3TC-NVP</option>
    <option value="TDF-3TC-EFV400">4g. TDF-3TC-EFV400</option>
    <option value="ABC-3TC-DTG">4i. ABC-3TC-DTG</option>
    <option value="ABC-3TC-LPV/r">4j. ABC-3TC-LPV/r</option>
    <option value="AZT-3TC-LPV/r">4k. AZT-3TC-LPV/r</option>
    <option value="">Pediatric 2nd Line Regimen</option>
    <option value="TDF-3TC-ATV/r">5a. TDF-3TC-ATV/r</option>
    <option value="AZT-3TC-LPV/r">5b. AZT-3TC-LPV/r</option>
    <option value="ABC-3TC-LPV/r">5c. ABC-3TC-LPV/r</option>
    <option value="TDF-3TC-RAL">5d. TDF-3TC-RAL</option>
    <option value="AZT-3TC-RAL">5e. AZT-3TC-RAL</option>
</datalist>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label>
<span class="small" style="font-weight:bold">E15. Adherence</span>
</label>
<input tabindex="disable" type="text" name="regadherencea" id="regadherencea" style="color:#F00; font-style:italic; width:140px; height:20px" list="DrugNames2" />
<datalist id="DrugNames2">
    <option value="Good">Good</option> 
    <option value="Fair">Fair</option>
    <option value="Poor">Poor</option>
</datalist>

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        </fieldset>
         </div>
    </div>
</div><br />
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 750px; display: table-cell;"> 
        <fieldset style="border:none">
        <label>
<span class="small" style="font-weight:bold">Why Poor/Fair Adherence</span>
</label>
<table>
<label></label>
<tr>
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Forgot" >1. Forgot</td>
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Fell asleep/slept through dose" >2. Fell asleep/slept through dose</td>
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Change in routine/away from home" >3. Change in routine/away from home</td>
</tr>                                     
<tr>                                    
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Busy/working/at school" >4. Busy/working/at school</td>
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Got prenant" >5. Got prenant</td>
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Patient Moved" >6. Patient Moved</td>
</tr>                                   
<tr>                                    
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Ran out of Medications" >7. Ran out of Medications</td>
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Drug stock-out" >8. Drug stock-out</td>
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Not able to pay" >9. Not able to pay</td>
</tr>
<tr>                                    
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Felt Well" >10. Felt Well</td>
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Felt Sick/Bad" >11. Felt Sick/Bad</td>
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Felt overwhelmed/depressed" >12. Felt overwhelmed/depressed</td>
</tr>
<tr>                                    
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Did not understand how to take medication" >13. Did not understand how to take medication</td>
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Did not want others to know" >14. Did not want others to know</td>
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Too many pills" >15. Too many pills</td>
</tr>
<tr>                                    
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Did not want to take Medications" >16. Did not want to take Medications</td>
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Afraid/Affected by Side effects" >17. Afraid/Affected by Side effects</td>
<td><input type="checkbox" name="regadherenceb[]" id="regadherenceb" value="Other" >18. Other(Specify)</td>
</tr>
</table>

       </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

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
        <div style="width: 450px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="cotrimdose">
<span class="small" style="font-weight:bold">E16. Dose</span>
</label>
<input tabindex="disable" type="text" name="cotrimdose" id="cotrimdose;" style="width:140px; height:20px" />
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; width: 450px;border:none">
        <label>
<span class="small" style="font-weight:bold">E17. Adherence: A</span>
</label>
<input tabindex="disable" type="text" name="cotrimadherencea" id="cotrimadherencea" style="color:#F00; font-style:italic; width:140px; height:20px" list="DrugNames3" />
<datalist id="DrugNames3">
    <option value="Good">Good</option> 
    <option value="Fair">Fair</option>
    <option value="Poor">Poor</option>
</datalist>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div><br />
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 750px; display: table-cell;"> 
        <fieldset style="border:none">
        <label>
<span class="small" style="font-weight:bold">Why Poor/Fair Adherence</span>
</label>
<table>
<label></label>
<tr>
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Forgot" >1. Forgot</td>
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Fell asleep/slept through dose" >2. Fell asleep/slept through dose</td>
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Change in routine/away from home" >3. Change in routine/away from home</td>
</tr>                                     
<tr>                                    
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Busy/working/at school" >4. Busy/working/at school</td>
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Got prenant" >5. Got prenant</td>
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Patient Moved" >6. Patient Moved</td>
</tr>                                   
<tr>                                    
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Ran out of Medications" >7. Ran out of Medications</td>
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Drug stock-out" >8. Drug stock-out</td>
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Not able to pay" >9. Not able to pay</td>
</tr>
<tr>                                    
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Felt Well" >10. Felt Well</td>
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Felt Sick/Bad" >11. Felt Sick/Bad</td>
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Felt overwhelmed/depressed" >12. Felt overwhelmed/depressed</td>
</tr>
<tr>                                    
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Did not understand how to take medication" >13. Did not understand how to take medication</td>
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Did not want others to know" >14. Did not want others to know</td>
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Too many pills" >15. Too many pills</td>
</tr>
<tr>                                    
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Did not want to take Medications" >16. Did not want to take Medications</td>
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Afraid/Affected by Side effects" >17. Afraid/Affected by Side effects</td>
<td><input type="checkbox" name="cotrimadherenceb[]" id="cotrimadherenceb" value="Other" >18. Other(Specify)</td>
</tr>
</table>

       </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

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
<legend style="font-weight:bold; font-size:11px">INH</legend>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 450px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="cotrimdose">
<span class="small" style="font-weight:bold">E18. Dose</span>
</label>
<input tabindex="disable" type="text" name="inhdose" id="inhdose;" style="width:140px; height:20px" />
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; width: 450px;border:none">
        <label>
<span class="small" style="font-weight:bold">E19. Adherence: A</span>
</label>
<input tabindex="disable" type="text" name="inhadherencea" id="inhadherencea" style="color:#F00; font-style:italic; width:140px; height:20px" list="DrugNames4" />
<datalist id="DrugNames4">
    <option value="Good">Good</option> 
    <option value="Fair">Fair</option>
    <option value="Poor">Poor</option>
</datalist>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div><br />
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 750px; display: table-cell;"> 
        <fieldset style="border:none">
        <label>
<span class="small" style="font-weight:bold">Why Poor/Fair Adherence</span>
</label>
<table>
<label></label>
<tr>
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Forgot" >1. Forgot</td>
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Fell asleep/slept through dose" >2. Fell asleep/slept through dose</td>
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Change in routine/away from home" >3. Change in routine/away from home</td>
</tr>                                     
<tr>                                    
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Busy/working/at school" >4. Busy/working/at school</td>
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Got prenant" >5. Got prenant</td>
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Patient Moved" >6. Patient Moved</td>
</tr>                                   
<tr>                                    
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Ran out of Medications" >7. Ran out of Medications</td>
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Drug stock-out" >8. Drug stock-out</td>
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Not able to pay" >9. Not able to pay</td>
</tr>
<tr>                                    
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Felt Well" >10. Felt Well</td>
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Felt Sick/Bad" >11. Felt Sick/Bad</td>
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Felt overwhelmed/depressed" >12. Felt overwhelmed/depressed</td>
</tr>
<tr>                                    
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Did not understand how to take medication" >13. Did not understand how to take medication</td>
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Did not want others to know" >14. Did not want others to know</td>
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Too many pills" >15. Too many pills</td>
</tr>
<tr>                                    
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Did not want to take Medications" >16. Did not want to take Medications</td>
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Afraid/Affected by Side effects" >17. Afraid/Affected by Side effects</td>
<td><input type="checkbox" name="inhadherenceb[]" id="inhadherenceb" value="Other" >18. Other(Specify)</td>
</tr>
</table>

       </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

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
<label>
<span class="small" style="font-weight:bold">E20. Other drugs prescribed</span>
</label>
<textarea rows="3" cols="90" name="otherdrugs" id="otherdrugs" >
</textarea>
</fieldset>

<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label><span class="small" style="font-weight:bold">E21. CD4 (check if scheduled)</span></label>
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
<label><span class="small" style="font-weight:bold">E22. Viral load (check if scheduled)</span></label>
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

<label><span class="small" style="font-weight:bold">E23. Other tests done</span></label>
<textarea rows="3" cols="39" name="othertests" id="othertests" >
</textarea>
</fieldset>

<fieldset>
<label><span class="small" style="font-weight:bold">E24. Consult, hospitalize, refer link</span></label>
<textarea rows="3" cols="39" name="recommendation" id="recommendation" >
</textarea>
</fieldset>

<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label><span class="small" style="font-weight:bold">E25. Next appointment date</span></label>
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
<label><span class="small" style="font-weight:bold">E26. Name/Signature</span></label>
<span class="small"></span>
</label>
<input type="text" name="clinician" id="clinician" required="required" style="width:120px; height:10px;"/>
<input type="hidden" name="login_id" id="login_id" value="<?php echo $_GET['username']; ?>" required="required" style="width:120px; height:10px;"/>
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