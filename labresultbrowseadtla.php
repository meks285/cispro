<?php
$_SESSION=$_GET;
include './mandate_/lidh.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 

class MyClass{
    public function GetUserInformation(){
		$visitdate = $_GET['visitdate'];
		$visitdate;

$query = "SELECT p.pepid as pepid,l.checkedby,l.additionaltests,l.otherstatus,l.checkdate,l.cliniciandate,l.pcrlabname,l.pcrsampleno,l.pcrsampletype,l.pcrsamplecolldate,l.pcrsamplerecievedate,l.vl_indication,l.artstartdate,l.drugregimen,l.resultstatus,l.reportdate, l.reportedby,l.clinicianname, l.visitdate as visitdate,max(l.labregno) as labregno,max(p.surname) as surname,max(p.othernames) as othernames,max(p.sex) as sex,ROUND(DATEDIFF(max(l.visitdate),max(p.dob))/365) AS age,max(p.uniqueid) as uniqueid,max(p.hospitalid) as hospitalid,max(l.baselineorrepeat) as baselineorrepeat,max(p.facilityname) as facilityname,max(p.addrlga) as addrlga,max(p.state) as state,max(l.artstatus) as artstatus, MAX( l.cd4 ) AS cd4,MAX( l.CD4_per ) AS CD4_per, MAX( l.viral_load ) AS viral_load, MAX( l.pregnancy ) AS pregnancy,MAX( l.Malaria_smear ) AS Malaria_smear,MAX( l.Lymphocytes ) AS Lymphocytes,MAX( l.Monocytes ) AS Monocytes,MAX( l.Polymorph ) AS Polymorph,MAX( l.Eosinophils ) AS Eosinophils,MAX( l.Basophils ) AS Basophils,MAX( l.HbPCV ) AS HbPCV,MAX( l.Platelets ) AS Platelets,MAX( l.HBsAG ) AS HBsAG,MAX( l.VDRL ) AS VDRL,MAX( l.Creatinine ) AS Creatinine,MAX( l.ALT_SGPT ) AS ALT_SGPT,MAX( l.GLUCOSE ) AS GLUCOSE,MAX( l.PROTEIN ) AS PROTEIN,MAX( l.VIAPap_Smear ) AS VIAPap_Smear,MAX( l.Na ) AS Na,MAX( l.K ) AS K,MAX( l.Cl ) AS Cl,MAX( l.HCO3 ) AS HCO3,MAX( l.BUN ) AS BUN,MAX( l.Fasting_Glucose ) AS Fasting_Glucose,MAX( l.Total_Bilirubin ) AS Total_Bilirubin,MAX( l.Amylase ) AS Amylase,MAX( l.Total_Cholesterol ) AS Total_Cholesterol,MAX( l.LDL ) AS LDL,MAX( l.AST_SGOT ) AS AST_SGOT,MAX( l.Triglyceride ) AS Triglyceride,MAX( l.Alk_Phosphatase ) AS Alk_Phosphatase,MAX( l.WBC ) AS WBC,MAX(l.HDL) as HDL,MAX(l.HCVAntibody) as HCVAntibody
FROM lab_results_pivot_test l JOIN patient p
ON (p.pepid=l.pepid)
AND p.pepid = '$_SESSION[pepid]'  and l.visitdate='$visitdate'
GROUP BY p.pepid,l.visitdate";

include 'lidh.php';

        $result = mysqli_query($con,$query);
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
<script src="drugcodetranslate.js"></script>
<script type="text/javascript">
function panicval(){
var e = document.getElementById("testsid");
var r = document.getElementById("results1").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4'&& r < 350 ){
	document.getElementById('panic1').innerHTML = "*CD4 Panic Value alert!";
 }
	else if(value=='CD4%'&& r < 15 ){
	document.getElementById('panic1').innerHTML = "*CD4% Panic Value alert!";
 } 
else{
	document.getElementById('panic1').innerHTML = "";
	}
}
function panicvala(){
var e = document.getElementById("testsid2");
var r = document.getElementById("results2").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic2').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic2').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic2').innerHTML = "";
	}
}
function panicvalb(){
var e = document.getElementById("testsid3");
var r = document.getElementById("results3").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic3').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic3').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic3').innerHTML = "";
	}
}
function panicvalc(){
var e = document.getElementById("testsid4");
var r = document.getElementById("results4").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic4').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic4').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic4').innerHTML = "";
	}
}
function panicvald(){
var e = document.getElementById("testsid5");
var r = document.getElementById("results5").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic5').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic5').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic5').innerHTML = "";
	}
}
function panicvale(){
var e = document.getElementById("testsid6");
var r = document.getElementById("results6").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic6').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic6').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic6').innerHTML = "";
	}
}
function panicvalf(){
var e = document.getElementById("testsid7");
var r = document.getElementById("results7").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic7').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic7').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic7').innerHTML = "";
	}
}
function panicvalg(){
var e = document.getElementById("testsid8");
var r = document.getElementById("results8").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic8').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic8').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic8').innerHTML = "";
	}
}
function panicvalh(){
var e = document.getElementById("testsid9");
var r = document.getElementById("results9").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic9').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic9').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic9').innerHTML = "";
	}
}
function panicvali(){
var e = document.getElementById("testsid10");
var r = document.getElementById("results10").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic10').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic10').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic10').innerHTML = "";
	}
}
function panicvalj(){
var e = document.getElementById("testsid11");
var r = document.getElementById("results11").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic11').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic11').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic11').innerHTML = "";
	}
}
function panicvalk(){
var e = document.getElementById("testsid12");
var r = document.getElementById("results12").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic12').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic12').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic12').innerHTML = "";
	}
}
function panicvall(){
var e = document.getElementById("testsid13");
var r = document.getElementById("results13").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic13').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic13').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic13').innerHTML = "";
	}
}
function panicvalm(){
var e = document.getElementById("testsid14");
var r = document.getElementById("results14").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic14').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic14').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic14').innerHTML = "";
	}
}
function panicvaln(){
var e = document.getElementById("testsid15");
var r = document.getElementById("results15").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic15').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic15').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic15').innerHTML = "";
	}
}
function panicvalo(){
var e = document.getElementById("testsid16");
var r = document.getElementById("results16").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4' && r < 350 ){
	document.getElementById('panic16').innerHTML = "*CD4 Panic Value alert!";
}
else if(value=='CD4%' && r < 15 ){
	document.getElementById('panic16').innerHTML = "*CD4% Panic Value alert!";
} 
else{
	document.getElementById('panic16').innerHTML = "";
	}
}


</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - Lab Order/Result</title>
</head>
<div class="tops">
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">Laboratory order and results form&nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>
<?php
echo '<a href="dtentryportlab.php?role=Lab">[MAIN MENU]</a>&nbsp; &nbsp; &nbsp; &nbsp;'; 
?>
<a href="javascript:history.go(-1)" style="color:#2A1FFF">[BACK]</a>
</div>
<br />
<br />
<br />
<br />

<body onload="labresultchk();">
<div id="stylized" class="myform">
<form id="form" name="form" onkeypress="return event.keyCode != 13;" method="POST" action="insertlaborderresultsadtla.php">
<br />
<fieldset style="height:20px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">1. Patient's ART Status</span>
</label>
<div> 
<table>
<tr>
<td><input type="radio" name="artstatus" value="ART"  <?php if ($info['artstatus']=='ART') { echo 'checked'; }?> />ART</td>
<td><input type="radio" name="artstatus" value="Non-ART" <?php if ($info['artstatus']=='Non-ART'||$info['artstatus']=='Pre-ART') { echo 'checked'; }?>/>Pre-ART</td>
</tr>
</table>
</div>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">2. Collection Date</span>
</label>
<input type="date" name="visitdate" id="visitdate" value="<?php echo $info['visitdate']?>" style="width:120px; height:10px;"/>
<input type="hidden" name="visitdatex" id="visitdatex" value="<?php echo $info['visitdate']?>" style="width:120px; height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
</fieldset>

<fieldset style="height:20px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">3. State</span>
</label>
<input type="text" name="state" id="state" value="<?php echo $info['state']?>" style="width:120px; height:10px;" readonly="readonly"/>
        
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">4. LGA</span>
</label>
<input type="text" name="addrlga" id="addrlga" value="<?php echo $info['addrlga']?>" style="width:120px; height:10px;" readonly="readonly"/>
        </fieldset>
         </div>
    </div>
</div>
</fieldset>


<fieldset style="height:20px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">5. Facility Name</span>
</label>
<input type="text" name="facilityname" id="facilityname" value="<?php echo $info['facilityname']?>" readonly="readonly" style="width:120px;height:10px;"/>
        
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; width:180px; border:none">
<label>
<span class="small" style="font-weight:bold"></span>
</label>
<table>
<tr>
<td><input type="radio" name="baselineorrepeat" value="Baseline" <?php if ($info['baselineorrepeat']=='Baseline') { echo 'checked'; }?> />Baseline</td>
<td><input type="radio" name="baselineorrepeat" value="Repeat" <?php if ($info['baselineorrepeat']=='Repeat') { echo 'checked'; }?>/>Repeat</td>
</tr>
</table>
        </fieldset>
         </div>
    </div>
</div>
</fieldset>

<fieldset style="height:20px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">6. Patient Surname</span>
</label>
<input type="text" name="surname" id="surname" readonly="readonly" value="<?php echo $info['surname']?>" style="width:120px; height:10px;"/>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
       <label>
<span class="small" style="font-weight:bold">7. Other names</span>
</label>
<input type="text" name="othernames" id="othernames" readonly="readonly" value="<?php echo $info['othernames']?>" style="width:120px; height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
</fieldset>


<fieldset style="height:20px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label><span class="small" style="font-weight:bold">8. Sex</span></label>
<table>
<tr>
<td><input type="radio" name="sex" id="sexmale" value="male" <?php if ($info['sex']=='male') { echo 'checked'; } ?> disabled="disabled" onchange="anccheck()" />Male</td>
<td><input type="radio" name="sex" id="sexfemale" value="Female" <?php if ($info['sex']=='Female') { echo 'checked'; } ?> disabled="disabled" onchange="anccheck()"/>Female</td>
</tr>
</table>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
<label>
<span class="checkbox-toolbar" style="font-weight:bold"></span>
</label>
<table>
<tr>
<td><input type="checkbox" name="otherstatus[]" id="otherstatus" value="Pregnant" <?php if (strpos($info['otherstatus'],'Pregnant') !== false||strpos($info['otherstatus'],'Pregnant') !== false) { echo 'checked'; }?> >Pregnant</td>
<td><input type="checkbox" name="otherstatus[]" id="otherstatus" value="Breast Feeding" <?php if (strpos($info['otherstatus'],'Breast Feeding') !== false||strpos($info['otherstatus'],'Breast Feeding') !== false) { echo 'checked'; }?> >Breast Feeding</td>
</tr>
</table>
        </fieldset>
         </div>
		 
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; width:180px; border:none">
<label>
<span class="small" style="font-weight:bold">9. Age</span>
</label>
<input type="text" name="agecalc" id="agecalc" value="<?php echo $info['age']?>" disabled="disabled" style="width:50px;height:10px;"/>
       
        </fieldset>
         </div>
    </div>
</div>
</fieldset>



<fieldset style="height:20px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">10. ID</span>
</label>
<input type="text" name="uniqueid" id="uniqueid" readonly="readonly" value="<?php echo $info['uniqueid']?>" style="height:10px; width:120px" />
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
<label>
<span class="small" style="font-weight:bold">11. Hospital(unit) No</span>
</label>
<input type="text" name="hospitalno" id="hospitalno" value="<?php echo $info['hospitalid']?>" style="width:120px;height:10px;" />
        </fieldset>
         </div>
                 <div style="display: table-cell;"> 
        <fieldset style="border:none">
<label>
<span class="small" style="font-weight:bold">Patient ID</span>
</label>
<input type="text" name="pepid" id="pepid" value="<?php echo $info['pepid']?>" readonly style="width:120px;height:10px;font-weight:bold" />
        </fieldset>
         </div>

    </div>
</div>
</fieldset>
<br />
<br />
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="border:none">
        
<label>
<span class="small" style="font-weight:bold">Lab Registration Number</span>
</label>
<input type="text" name="labregno" id="labregno" value="<?php echo $info['labregno']?>"  style="width:120px; height:10px"/>
        

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
<label>
<span class="small" style="font-weight:bold">PCR Lab Name</span>
</label>
<input type="text" name="pcrlabname" id="pcrlabname" value="<?php echo $info['pcrlabname']?>" style="width:120px; height:10px"/>
        

      </fieldset>
         </div>       
    </div>
</div>

</fieldset>

<input type="hidden" name="pepid" id="pepid" value="<?php echo $info['pepid']?>" />


<fieldset>
<legend style="font-weight:bold; font-size:11px">Laboratory Tests and Results</legend>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 400px; display: table-cell;"> 
<fieldset>
<label></label>
<table>
<tr>
<td>   <select name="tests[]" id="testsid" onChange="panicval()" >
    <option value="CD4">CD4+ Cell Count</option>
</select></td>
<td><ul><label></label>
<input type="text" name="results[]" id="results1" onChange="panicval()" value="<?php echo $info['cd4'] ?>" style="height:10px; width:50px" />cells/Âµl
<label id="panic1" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid2" onChange="panicvala()" >
    <option value="CD4%">CD4%</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results2" onChange="panicvala()" value="<?php echo $info['CD4_per']?>" style="height:10px; width:50px" />
<label id="panic2" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid3" onChange="panicvalb()">
    <option value="WBC">WBC</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results3" onChange="panicvalb()" value="<?php echo $info['WBC']?>" style="height:10px; width:50px"/>x 10^9/L
<label id="panic3" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>    <select name="tests[]" id="testsid6" onChange="panicvale()">
    <option value="Polymorph">Polymorphs.</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results6" onChange="panicvale()" value="<?php echo $info['Polymorph']?>" style="height:10px; width:50px"/>/mm3
<label id="panic6" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>    <select name="tests[]" id="testsid4" onChange="panicvalc()">
    <option value="Lymphocytes">Lymphocytes</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results4" onChange="panicvalc()" value="<?php echo $info['Lymphocytes']?>" style="height:10px; width:50px"/>/mm3
<label id="panic4" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid5" onChange="panicvald()">
    <option value="Monocytes">Monocytes</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results5" onChange="panicvald()" value="<?php echo $info['Monocytes']?>" style="height:10px; width:50px"/>/mm3
<label id="panic5" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>    <select name="tests[]" id="testsid7" onChange="panicvalf()">
    <option value="Eosinophils">Eosinophils</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results7" onChange="panicvalf()" value="<?php echo $info['Eosinophils']?>" style="height:10px; width:50px"/>/mm3
<label id="panic7" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid8" onChange="panicvalg()">
    <option value="Basophils">Basophils</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results8" onChange="panicvalg()" value="<?php echo $info['Basophils']?>" style="height:10px; width:50px"/>/mm3
<label id="panic7" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
</tr>
<td>
    <select name="tests[]" id="testsid9" onChange="panicvalh()">
    <option value="PCV/Hb">PCV/Hb</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results9" onChange="panicvalh()" value="<?php echo $info['HbPCV']?>" style="height:10px; width:50px"/>% g/dl
<label id="panic9" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid10" onChange="panicvali()">
    <option value="Platelets">Platelets</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results10" onChange="panicvali()" value="<?php echo $info['Platelets']?>" style="height:10px; width:50px"/>10^9 /L
<label id="panic10" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>    <select name="tests[]" id="testsid11" onChange="panicvalj()">
    <option value="HCV Antibody">HCV Antibody</option>
</select></td>
<td><ul><label></label>
    <select name="results[]" id="results11" onChange="panicvalj()">
    <option value="<?php echo $info['HCVAntibody']?>"><?php echo $info['HCVAntibody']?></option>
    <option value="Negative">Negative</option>
    <option value="Positive">Positive</option>
</select>
<label id="panic11" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>    <select name="tests[]" id="testsid11" onChange="panicvalj()">
    <option value="HBsAG (*At Baseline)">HBsAG (*At Baseline)</option>
</select></td>
<td><ul><label></label>
    <select name="results[]" id="results11" onChange="panicvalj()">
    <option value="<?php echo $info['HBsAG']?>"><?php echo $info['HBsAG']?></option>
    <option value="Negative">Negative</option>
    <option value="Positive">Positive</option>
</select>
<label id="panic11" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td> <select name="tests[]" id="testsid12" onChange="panicvalk()">
    <option value="VDRL">VDRL</option>
</select>
</td>
<td><ul><label></label>
    <select name="results[]" id="results12" onChange="panicvalk()">
    <option value="<?php echo $info['VDRL']?>"><?php echo $info['VDRL']?></option>
    <option value="Negative">Negative</option>
    <option value="Positive">Positive</option>
</select>
<label id="panic12" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td><select name="tests[]" id="testsid13" onChange="panicvall()">
    <option value="Creatinine">Creatinine</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results13" onChange="panicvall()" value="<?php echo $info['Creatinine']?>"  style="height:10px; width:50px"/>Âµmol/l
<label id="panic13" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid14" onChange="panicvalm()">
    <option value="ALT/SGPT">ALT/SGPT</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results14" onChange="panicvalm()" value="<?php echo $info['ALT_SGPT']?>" style="height:10px; width:50px"/>U/I
<label id="panic14" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid30" onChange="panicvalzc()">
    <option value="AST/SGOT">AST/SGOT</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results30" onChange="panicvalzc()" value="<?php echo $info['AST_SGOT']?>" style="height:10px; width:50px"/>U/I
<label id="panic30" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid32" onChange="panicvalze()">
    <option value="Alk. Phosphatase">Alk. Phosphatase</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results32" onChange="panicvalze()" value="<?php echo $info['Alk_Phosphatase']?>" style="height:10px; width:50px"/>U/I
<label id="panic32" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>


</table>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Urinalysis:</legend>
<table>
<tr>
<td>
    <select name="tests[]" id="testsid15" onChange="panicvaln()">
    <option value="Urinalysis: GLUCOSE">GLUCOSE</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results15" onChange="panicvaln()" value="<?php echo $info['GLUCOSE']?>" style="height:10px; width:50px"/>
<label id="panic15" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid16" onChange="panicvalo()">
    <option value="Urinalysis: PROTEIN">PROTEIN</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results16" onChange="panicvalo()" value="<?php echo $info['PROTEIN']?>" style="height:10px; width:50px"/>
<label id="panic16" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
</table>
</fieldset>
<table>
<tr>
<td>
<select name="tests[]" id="testsid17" onChange="panicvalp()">
<option value="Cytology: VIA/Pap Smear">Cytology: VIA/Pap Smear</option></select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results17" onChange="panicvalp()" value="<?php echo $info['VIAPap_Smear']?>" style="height:10px; width:50px"/>
<label id="panic17" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul>
</td>
</tr>
<tr>
<td>
<select name="tests[]" id="testsid35" onChange="panicvalp()">
<option value="Awaiting Results"></option></select>
</td>
<td><ul><label></label>
<input type="hidden" name="results[]" id="results35" onChange="panicvalp()" style="height:10px; width:50px"/>
<label id="panic17" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul>
</td>
</tr>
</table>
</fieldset>
<fieldset style="height:210px">
<br />
<table>
<tr><td>
<label>Clinician / Date
</td></tr>
<tr><td>
</label>
<input type="text" name="clinicianname" id="clinicianname" value="<?php echo $info['clinicianname']?>" style="height:10px; width:120px"/>
</td><td>
<input type="date" name="cliniciandate" id="cliniciandate" value="<?php echo $info['cliniciandate']?>" style="height:10px; width:120px"/></td></tr>
<tr><td>
<label>Reported By / Date
</td></tr>
<tr><td>
</label>
<input type="text" name="reportedby" id="reportedby" value="<?php echo $info['reportedby']?>" style="height:10px; width:120px"/>
</td><td>
<input type="date" name="reportdate" id="reportdate" value="<?php echo $info['reportdate']?>" style="height:10px; width:120px"/></td></tr>
<tr><td>
<label>Checked By / Date
</td></tr>
<tr><td>
</label>
<input type="text" name="checkedby" id="checkedby" value="<?php echo $info['checkedby']?>" style="height:10px; width:120px"/>
</td><td>
<input type="date" name="checkdate" id="checkdate" value="<?php echo $info['checkdate']?>" style="height:10px; width:120px"/></td></tr>
</table>
</fieldset>

         </div>
        <div style="display: table-cell;"> 
<fieldset>
<label></label>
<table>

<tr>
<td>
    <select name="tests[]" id="testsid25" onChange="panicvalx()">
    <option value="Total Bilirubin">Total Bilirubin</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results25" onChange="panicvalx()" value="<?php echo $info['Total_Bilirubin']?>" style="height:10px; width:50px"/>Âµmol/l
<label id="panic25" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid19" onChange="panicvalr()">
    <option value="Na+">Na+</option>
    </select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results19" onChange="panicvalr()" value="<?php echo $info['Na']?>" style="height:10px; width:50px"/>mmol/L
<label id="panic19" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid20" onChange="panicvals()">
    <option value="K+">K+</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results20" onChange="panicvals()" value="<?php echo $info['K']?>" style="height:10px; width:50px"/>mmol/l
<label id="panic20" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid24" onChange="panicvalw()">
    <option value="Fasting Glucose">Fasting Glucose</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results24" onChange="panicvalw()" value="<?php echo $info['Fasting_Glucose']?>" style="height:10px; width:50px"/>Âµmol/l
<label id="panic24" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid27" onChange="panicvalz()">
    <option value="Total Cholesterol">Total Cholesterol</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results27" onChange="panicvalz()" value="<?php echo $info['Total_Cholesterol']?>" style="height:10px; width:50px"/>mmol/L
<label id="panic27" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid28" onChange="panicvalza()">
	<option value="LDL">LDL</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results28" onChange="panicvalza()" value="<?php echo $info['LDL']?>" style="height:10px; width:50px"/>mmol/L
<label id="panic28" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid29" onChange="panicvalzb()">
    <option value="HDL">HDL</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results29" onChange="panicvalzb()" value="<?php echo $info['HDL']?>" style="height:10px; width:50px"/>mmol/L
<label id="panic29" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td></tr>
<tr>
<td>
    <select name="tests[]" id="testsid31" onChange="panicvalzd()">
    <option value="Triglyceride">Triglyceride</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results31" onChange="panicvalzd()" value="<?php echo $info['Triglyceride']?>" style="height:10px; width:50px"/>mmol/L
<label id="panic31" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td></tr>
<tr>
<td>
    <select name="tests[]" id="testsid33" onChange="panicvalzf()">
    <option value="Pregnancy">Pregnancy</option>
</select>
</td>
<td><ul><label></label>
    <select name="results[]" id="results33" onChange="panicvalzf()">
    <option value="<?php echo $info['pregnancy']?>"><?php echo $info['pregnancy']?></option>
    <option value="Negative">Negative</option>
    <option value="Positive">Positive</option>
</select>
<label id="panic33" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td></tr>
<tr><td>
    <select name="tests[]" id="testsid34" onChange="panicvalzg()">
    <option value="Malaria smear">Malaria smear</option>
</select>
</td>
<td><ul><label></label>
    <select name="results[]" id="results34" onChange="panicvalzg()">
    <option value="<?php echo $info['Malaria_smear']?>"><?php echo $info['Malaria_smear']?></option>
    <option value="Negative">Negative</option>
    <option value="Positive">Positive</option>
</select>
<label id="panic34" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td></tr>
</table>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Viral Load:</legend>
<table>
<tr>
<td>
    <option value="">PCR Lab Sample No.</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="pcrsampleno" id="pcrsampleno"  value="<?php echo $info['pcrsampleno']?>"  style="height:10px; width:50px"/>
</ul></td>
</tr>
<tr>
<td>
    <option value="">Sample Type</option>
</select>
</td>
<td><ul><label></label>
    <select name="pcrsampletype" id="pcrsampletype" >
    <option value="<?php echo $info['pcrsampletype']?>"><?php echo $info['pcrsampletype']?></option>
    <option value="Whole Blood/Plasma">Whole Blood/Plasma</option>
    <option value="DBS">DBS</option>
</select>
</ul></td>
</tr>
<tr>
<td>
    <option value="">Collection Date/Time</option>
</select>
</td>
<td><ul><label></label>
<input type="datetime-local" name="pcrsamplecolldate" id="pcrsamplecolldate" value="<?php echo date("Y-m-d\TH:i:s",strtotime($info['pcrsamplecolldate'])); ?>"  style="height:10px; width:158px"/>
</ul></td>
</tr>
<tr>
<td>
    <option value="">Date Received at PCR Lab</option>
</select>
</td>
<td><ul><label></label>
<input type="datetime-local" name="pcrsamplerecievedate" id="pcrsamplerecievedate" value="<?php echo date("Y-m-d\TH:i:s",strtotime($info['pcrsamplerecievedate'])); ?>" style="height:10px; width:158px"/>
</ul></td>
</tr>
<tr>
<td>
    <option value="">Indication for Viral Load</option>
</select>
</td>
<td><ul><label></label>
    <select name="vl_indication" id="vl_indication" onChange="panicvalzf()">
    <option value="<?php echo $info['vl_indication']?>"><?php echo $info['vl_indication']?></option>
    <option value="Baseline">Baseline (6 Months after ART Start)</option>
    <option value="Routine">Routine (Every 12 Months)</option>
    <option value="Clinical Failure">Clinical Failure</option>
    <option value="Immunologic Failure">Immunologic Failure</option>
    <option value="Confirmation">Confirmation</option>
    <option value="Repeat Test">Repeat Test</option>
</select>
<label id="panic33" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td></tr>
<tr>
<td>
<?php include './mandate_/lidh2.php';
		$sql="SELECT visitdate as artstartdate FROM pharmacy where pepid='$info[pepid]' and drugname1 !='' and visitdate !='0000-00-00' order by visitdate ASC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$info1=mysqli_fetch_assoc($result); ?>
    <option value="">ART Start Date</option>
</select>
</td>
<td><ul><label></label>
<input type="date" name="artstartdate" id="artstartdate" value="<?php echo $info1['artstartdate'] ?>"  style="height:10px; width:120px"/>
</ul></td>
</tr>
<tr>
<td>
<?php include './mandate_/lidh2.php';
		$sql="SELECT visitdate as artstartdate,drugname1 as drugregimen FROM pharmacy where pepid='$info[pepid]' and drugname1 !='' order by visitdate DESC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$info1=mysqli_fetch_assoc($result); ?>
    <option value="">Drug Regimen</option>
</select>
</td>
</tr>
<tr>
<td><?php     if (strpos($info1['drugregimen'], 'AZT/3TC/EFV') !== false || 
        strpos($info1['drugregimen'], 'AZT/3TC/NVP') !== false || 
        strpos($info1['drugregimen'], 'TDF/FTC/EFV') !== false || 
        strpos($info1['drugregimen'], 'TDF/FTC/NVP') !== false || 
        strpos($info1['drugregimen'], 'TDF/3TC/EFV') !== false || 
        strpos($info1['drugregimen'], 'TDF/3TC/NVP') !== false || 
        strpos($info1['drugregimen'], 'ABC/3TC/EFV') !== false || 
        strpos($info1['drugregimen'], 'AZT/3TC/ABC') !== false || 
        strpos($info1['drugregimen'], 'AZT/3TC/TDF') !== false || 
        strpos($info1['drugregimen'], 'ABC/3TC/NVP') !== false || 
        strpos($info1['drugregimen'], 'd4T/3TC/NVP') !== false
        ){
        	echo 'Line: 1st Line';
        	}
     elseif (
        strpos($info1['drugregimen'], 'TDF/FTC/LPV') !== false || 
        strpos($info1['drugregimen'], 'TDF/3TC/LPV') !== false || 
        strpos($info1['drugregimen'], 'TDF/FTC/ATV') !== false || 
        strpos($info1['drugregimen'], 'TDF/3TC/ATV') !== false || 
        strpos($info1['drugregimen'], 'AZT/3TC/LPV') !== false || 
        strpos($info1['drugregimen'], 'AZT/3TC/ATV') !== false || 
        strpos($info1['drugregimen'], 'd4T/3TC/LPV') !== false || 
        strpos($info1['drugregimen'], 'ddi/3TC/NVP') !== false
     ){
        	echo 'Line: 2nd Line';
     	}
     	else{
     	echo 'Drug Regimen Line: UNDETECTED';
     	} ?></td>
<td><ul><label></label>
<input type="text" name="drugregimen" id="drugregimen" value="<?php echo $info1['drugregimen'] ?>"  style="height:10px; width:120px"/>
</ul></td>
</tr>
<tr>
<td><b>Results</b></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid35" onChange="panicvalzd()">
    <option value="Viral Load">Viral Load</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results35" onChange="panicvalzd()" value="<?php echo $info['viral_load']?>" style="height:10px; width:50px"/>Copies/mL
<label id="panic35" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td></tr>

</table>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Additional tests</legend>
<label>Specify exact clinical indication for requested tests</label>
<textarea rows="17" cols="40" name="additionaltests" id="additionaltests">
<?php echo $info['additionaltests']?>
</textarea>
<table>
</table>
</fieldset>
         </div>       
    </div>
</div>
</fieldset>
<input type="button" value="Print Form" onclick="window.print()">
<button type="submit" name="submit">UPDATE</button>
<div class="spacer"></div>
</form>
</div>
</body>
</html>
<?php session_write_close();?>