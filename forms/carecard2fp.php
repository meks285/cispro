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
$query = "SELECT patient.pepid, patient.surname,patient.othernames,patient.age, patient.uniqueid,patient.sex, CURDATE() as visitdate
FROM patient
WHERE patient.pepid = 'TEST'";
        $result = mysql_query($query);
        $info = mysql_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CiS Pro - C.E.</title>
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
background:#666666 url(../img/button.png) no-repeat;
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
<link rel="shortcut icon" href="../images/favicon.png" type="image/png">
<h1 align="center" style="background-color:#0F0">Care Card 2||<?php echo $info['pepid']?></h1>
<body onload="if(document.referrer=='') self.location='./index.php';agecheck()">
<div class='sidebar1'>
<a href="javascript:history.go(-1)">Back</a>
</div>

<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="../carecard2insert.php">
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
    <option value="Pregnant">Pregnant</option> 
    <option value="Pregnant and on PMTCT">Pregnant and on PMTCT</option>
    <option value="Not Pregnant">Not Pregnant</option>
    <option value="Not known">Not known</option>
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
    <option value="Condoms">Condoms</option> 
    <option value="Oral contraceptive pills">Oral contraceptive pills</option> 
    <option value="Injectable/Implantable hormones">Injectable/Implantable hormones</option> 
    <option value="Diaphragm/cervical caps">Diaphragm/cervical caps</option> 
    <option value="Intra uterine device">Intra uterine device</option> 
    <option value="Vasectomy/tubal ligation/hysterectomy">Vasectomy/tubal ligation/hysterectomy</option> 
    </optgroup>
    <option value="Not on family planning">Not on family planning</option>
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
    <option value="Working">Working</option> 
    <option value="Ambulant">Ambulant</option>
    <option value="Bedridden">Bedridden</option>
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
    <option value="No Signs">No Signs</option> 
    <option value="TB Suspected and referred for evaluation">TB Suspected</option>
    <option value="On INH prophylaxis">On INH prophylaxis</option>
    <option value="TB positive, Not on drugs">TB positive, Not on drugs</option>
    <option value="Currently on TB treatment">Currently on TB treatment</option>
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
    <option value="Herpes Zoster">Herpes Zoster</option> 
    <option value="Pneumonia">Pneumonia</option>
    <option value="Dementia/Encephalitis">Dementia/Encephalitis</option>
    <option value="Thrush Oral/Vaginal">Thrush Oral/Vaginal</option>
    <option value="Fever">Fever</option>
    <option value="Cough">Cough</option>
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
    <option value="Nausea/Vomitting">Nausea/Vomitting</option> 
    <option value="Headache">Headache</option>
    <option value="Insomnia/bad dreams">Insomnia/bad dreams</option>
    <option value="Fatigue/weakness">Fatigue/weakness</option>
    <option value="PV Bleding/discharge">PV Bleding/discharge</option>
    <option value="Rash">Rash</option>
    <option value="FAT changes">FAT changes</option>
    <option value="Anemia">Anemia</option>
    <option value="Drainage of liquor">Drainage of liquor</option>
    <option value="Stevens Johnson Syndrome">Stevens Johnson Syndrome</option>
    <option value="Hyperglycemia">Hyperglycemia</option>
</select>

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
    <option value="AZT-3TC-EFV">AZT-3TC-EFV</option> 
    <option value="AZT-3TC-NVP">AZT-3TC-NVP</option>
    <option value="TDF-FTC-EFV">TDF-FTC-EFV</option>
    <option value="TDF-FTC-NVP">TDF-FTC-NVP</option>
    <option value="TDF-3TC-EFV">TDF-3TC-EFV</option>
    <option value="TDF-3TC-NVP">TDF-3TC-NVP</option>
    </optgroup>
    <optgroup label="Adult Alternate 1st Line">
    <option value="AZT-3TC-ABC">AZT-3TC-ABC</option>
    <option value="AZT-3TC-TDF">AZT-3TC-TDF</option>
    </optgroup>
    <optgroup label="Adult 2nd-Line Regimen">
    <option value="TDF-FTC-LPV/r">TDF-FTC-LPV/r</option>
    <option value="TDF-3TC-LPV/r">TDF-3TC-LPV/r</option>
    <option value="TDF-FTC-ATV/r">TDF-FTC-ATV/r</option>
    <option value="TDF-3TC-ATV/r">TDF-3TC-ATV/r</option>
    <option value="AZT-3TC-LPV/r">AZT-3TC-LPV/r</option>
    <option value="AZT-3TC-ATV/r">AZT-3TC-ATV/r</option>
    </optgroup>
    <optgroup label="Child 1st-Line Regimen">
    <option value="AZT-3TC-EFV">AZT-3TC-EFV</option>
    <option value="AZT-3TC-NVP">AZT-3TC-NVP</option>
    <option value="ABC-3TC-EFV">ABC-3TC-EFV</option>
    </optgroup>
    <optgroup label="Child alternate 1st Line">
    <option value="ABC-3TC-NVP">ABC-3TC-NVP</option>
    <option value="AZT-3TC-ABC">AZT-3TC-ABC</option>
    <option value="d4T-3TC-NVP">d4T-3TC-NVP</option>
    <option value="Others">Others</option>
    </optgroup>
    <optgroup label="Child 2nd-line Regimen">
    <option value="ABC-3TC-LPV/r">ABC-3TC-LPV/r</option>
    <option value="AZT-3TC-LPV/r">AZT-3TC-LPV/r</option>
    <option value="d4T-3TC-LPV/r">d4T-3TC-LPV/r</option>
    <option value="ddi-3TC-NVP">ddi-3TC-NVP</option>
    <option value="ABC-3TC-ddi">ABC-3TC-ddi</option>
    <option value="Others">Others</option>
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
    <option value="Forgot">Forgot</option> 
    <option value="Fell asleep/slept through dose">Fell asleep/slept through dose</option>
    <option value="Change in routine/away from home">Change in routine/away from home</option>
    <option value="Busy/working/at school">Busy/working/at school</option> 
    <option value="Got prenant">Got prenant</option>
    <option value="Patient Moved">Patient Moved</option>
    <option value="Ran out of Medications">Ran out of Medications</option> 
    <option value="Drug stock-out">Drug stock-out</option>
    <option value="Not able to pay">Not able to pay</option>
    <option value="Felt Well">Felt Well</option> 
    <option value="Felt Sick/Bad">Felt Sick/Bad</option>
    <option value="Felt overwhelmed/depressed">Felt overwhelmed/depressed</option>
    <option value="Did not understand how to take medication">Did not understand how to take medication</option> 
    <option value="Did not want others to know">Did not want others to know</option>
    <option value="Too many pills">Too many pills</option>
    <option value="Did not want to take Medications">Did not want to take Medications</option> 
    <option value="Afraid/Affected by Side effects">Afraid/Affected by Side effects</option>
    <option value="Other">Other</option>
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
<input type="text" name="cotrimdose" id="cotrimdoze" style="width:120px; height:10px;"/>
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
    <option value="Forgot">Forgot</option> 
    <option value="Fell asleep/slept through dose">Fell asleep/slept through dose</option>
    <option value="Change in routine/away from home">Change in routine/away from home</option>
    <option value="Busy/working/at school">Busy/working/at school</option> 
    <option value="Got prenant">Got prenant</option>
    <option value="Patient Moved">Patient Moved</option>
    <option value="Ran out of Medications">Ran out of Medications</option> 
    <option value="Drug stock-out">Drug stock-out</option>
    <option value="Not able to pay">Not able to pay</option>
    <option value="Felt Well">Felt Well</option> 
    <option value="Felt Sick/Bad">Felt Sick/Bad</option>
    <option value="Felt overwhelmed/depressed">Felt overwhelmed/depressed</option>
    <option value="Did not understand how to take medication">Did not understand how to take medication</option> 
    <option value="Did not want others to know">Did not want others to know</option>
    <option value="Too many pills">Too many pills</option>
    <option value="Did not want to take Medications">Did not want to take Medications</option> 
    <option value="Afraid/Affected by Side effects">Afraid/Affected by Side effects</option>
    <option value="Other">Other</option>
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
    <option value="Forgot">Forgot</option> 
    <option value="Fell asleep/slept through dose">Fell asleep/slept through dose</option>
    <option value="Change in routine/away from home">Change in routine/away from home</option>
    <option value="Busy/working/at school">Busy/working/at school</option> 
    <option value="Got prenant">Got prenant</option>
    <option value="Patient Moved">Patient Moved</option>
    <option value="Ran out of Medications">Ran out of Medications</option> 
    <option value="Drug stock-out">Drug stock-out</option>
    <option value="Not able to pay">Not able to pay</option>
    <option value="Felt Well">Felt Well</option> 
    <option value="Felt Sick/Bad">Felt Sick/Bad</option>
    <option value="Felt overwhelmed/depressed">Felt overwhelmed/depressed</option>
    <option value="Did not understand how to take medication">Did not understand how to take medication</option> 
    <option value="Did not want others to know">Did not want others to know</option>
    <option value="Too many pills">Too many pills</option>
    <option value="Did not want to take Medications">Did not want to take Medications</option> 
    <option value="Afraid/Affected by Side effects">Afraid/Affected by Side effects</option>
    <option value="Other">Other</option>
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
<label><span class="small" style="font-weight:bold">E23. Name/Signature</span></label>
<span class="small"></span>
</label>
<input type="text" name="clinician" id="clinician" required="required" style="width:120px; height:10px;"/>
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

</fieldset>
<br />
<br />
<br />
</form>
</div>
<input type="button" value="Print Form" onclick="window.print()">
<div class="spacer"></div>


</body>
</html>