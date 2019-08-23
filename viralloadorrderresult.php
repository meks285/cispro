<?php
session_start();
include './mandate_/lidh.php';

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


class MyClass{
    public function GetUserInformation(){
$query = "SELECT pepid, uniqueid,hospitalid,surname,othernames,hivposdate,age,sex,lga,state,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate
FROM patient WHERE pepid = '$_SESSION[pepid]'";

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
<script src="drugcodetranslate.js"></script>
<script src="jquery-2.1.0.min.js" type="text/javascript"></script>
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
<script type="text/javascript">
function panicval(){
var e = document.getElementById("testsid");
var r = document.getElementById("results1").value;
var value= e.options[e.selectedIndex].value;
if (value=='CD4'&& r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
if (value=='CD4' && r < 500 ){
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
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">Viral LOAD order and results form&nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>
<a href="./welcome.php?username=<?php echo $_GET['username'] ?>" style="font-weight:bold; font-size:14px; color:#2A1FFF">[MAIN MENU]</a> &nbsp;&nbsp;&nbsp;
<a href="javascript:history.go(-1)" style="color:#2A1FFF">[BACK]</a>
</div>
<br />
<br />
<br />
<br />

<body>
<div id="stylized" class="myform">
<form id="form" name="form" onkeypress="return event.keyCode != 13;" method="POST" action="insertlaborder.php?status=VL">
<br />
<fieldset style="height:20px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Facility Name</span>
</label>
<?php include './mandate_/lidh2.php';
                                $sqla=" SELECT facilityname,lga,state,facilityidprefix from facility LIMIT 1";
                                $resulta=mysqli_query($con,$sqla);
                                $info1a=mysqli_fetch_assoc($resulta); ?>

<input type="text" name="facilityname" id="facilityname" value="<?php echo $info1a['facilityname']?>" readonly="readonly" style="width:120px;height:10px;"/>
        
        </fieldset>
         </div>
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Visit Date</span>
</label>
<input type="date" name="visitdate" id="visitdate" required style="width:120px;height:10px;"/>
        
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; width:180px; border:none">
<label>
<span class="small" style="font-weight:bold"></span>
</label>
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
<span class="small" style="font-weight:bold">State</span>
</label>
<input type="text" name="state" id="state" value="<?php echo $info1a['state']?>" style="width:120px; height:10px;" readonly="readonly"/>
        
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">LGA</span>
</label>
<input type="text" name="addrlga" id="addrlga" value="<?php echo $info1a['lga']?>" style="width:120px; height:10px;" readonly="readonly"/>
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
<span class="small" style="font-weight:bold">Patient Surname</span>
</label>
<input type="text" name="surname" id="surname" readonly="readonly" value="<?php echo $info['surname']?>" style="width:120px; height:10px;"/>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
       <label>
<span class="small" style="font-weight:bold">Other names</span>
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
<label><span class="small" style="font-weight:bold">Sex</span></label>
<table>
<tr>
<td><input type="radio" name="sex" id="sexmale" value="male" <?php if ($info['sex']=='male'||$info['sex']=='Male'||$info['sex']=='m'||$info['sex']=='M') { echo 'checked'; } ?> disabled="disabled" onchange="anccheck()" />Male</td>
<td><input type="radio" name="sex" id="sexfemale" value="Female" <?php if ($info['sex']=='Female'||$info['sex']=='female'||$info['sex']=='F'||$info['sex']=='f') { echo 'checked'; } ?> disabled="disabled" onchange="anccheck()"/>Female</td>
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
<td><input type="checkbox" name="otherstatus[]" id="otherstatus" value="Pregnant">Pregnant</td>
<td><input type="checkbox" name="otherstatus[]" id="otherstatus" value="Breast Feeding" >Breast Feeding</td>
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
        <fieldset style="height:30px; border:none">
<label>
<span class="small" style="font-weight:bold">ID</span>
</label>
<input type="text" name="uniqueid" id="uniqueid" readonly="readonly" value="<?php echo $info['uniqueid']?>" style="height:10px; width:120px" />
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
<label>
<span class="small" style="font-weight:bold">Hospital(unit) No</span>
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
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
	        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label><span class="small" style="font-weight:bold">Sample Type</span></label>
<table>
<tr>
<td><input type="radio" name="pcrsampletype" id="wholeblood" required="required" value="Whole Blood/Plasma"  />Whole Blood</td>
<td><input type="radio" name="pcrsampletype" id="dbs" required="required" value="DBS" >DBS</td>
</tr>
</table>
        </fieldset>
         </div>

        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="border:none">
        
<label>
<span class="small" style="font-weight:bold">Lab Registration Number</span>
</label>
<input type="text" name="labregno" id="labregno"  style="width:120px; height:10px"/>
        

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
        
        
        

        </fieldset>
         </div>       
    </div>
</div>

</fieldset>

<input type="hidden" name="pepid" id="pepid" value="<?php echo $info['pepid']?>" />


<fieldset>
<legend style="font-weight:bold; font-size:11px"></legend>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
	        <div style="width: 490px; display: table-cell;"> 
        <fieldset style="border:none">
<legend style="font-weight:bold; font-size:11px">INDICATION FOR VIRAL LOAD TESTS</legend>
<div class="radio-toolbar"> 
<table>
<label ></label>
<tr>
<td><input type="radio" name="vl_indication" value="Baseline" >Baseline (6 Months after ART Start)</td>
</tr>
<tr>
<td><input type="radio" name="vl_indication" value="Routine" >Routine (Every 12 Months)</td>
</tr>
<tr>
<td><input type="radio" name="vl_indication" value="Clinical Failure" >Clinical Failure</td>
</tr>
<tr>
<td><input type="radio" name="vl_indication" value="Immunologic Failure" >Immunologic Failure</td>
</tr>
<tr>
<td><input type="radio" name="vl_indication" value="Confirmation (3-6 months after Intense Adherence Counselling)" >Confirmation (3-6 months after Intense Adherence Counselling)</td>
</tr>
<tr>
<td><input type="radio" name="vl_indication" value="Repeat Test" >Repeat Test</td>
</tr>
</table>        
</div>
      </fieldset>
         </div>

        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="border:none">
        
<table>
<tr>
<td>
<?php include './mandate_/lidh2.php';
		$sql="SELECT visitdate as artstartdate FROM pharmacy where pepid='$info[pepid]' and drugname1 !='' and visitdate !='0000-00-00' order by visitdate ASC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$info1=mysqli_fetch_assoc($result); ?>
    <option value="">ART Commencement Date</option>
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
</table>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
        
        
        

        </fieldset>
         </div>       
    </div>
</div>
</fieldset>
<fieldset style="height:210px">
<br />
<table>
<tr><td>
<label>Ordered By / Date
</td></tr>
<tr><td>
</label>
<input type="text" name="orderedby" id="orderedby" style="height:10px; width:180px"/>
</td><td>
<input type="date" name="orderdate" id="orderdate" style="height:10px; width:120px"/></td></tr>
<tr><td>
<label>Collected By / Date
</td></tr>
<tr><td>
</label>
<input type="text" name="collectedby" id="collectedby" style="height:10px; width:180px"/>
</td><td>
<input type="date" name="collectdate" id="collectdate" style="height:10px; width:120px"/></td></tr>
</table>
</fieldset>
<fieldset>
<h3 style="text-align:center">RESULTS</h3>
<table>
<tr>
<td>
    <option value="">Date Received at PCR Lab</option>
</select>
</td>
<td><ul><label></label>
<input type="datetime-local" name="pcrsamplerecievedate" id="pcrsamplerecievedate"  style="height:10px; width:158px"/>
</ul></td>
<td>
    <option value="">PCR Lab Name</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="pcrlabname" id="pcrlabname"  style="height:10px; width:158px"/>
</ul></td>
</tr>
<tr>
<td>
    <option value="">PCR Lab Sample No.</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="pcrsampleno" id="pcrsampleno"  style="height:10px; width:50px"/>
</ul></td>
</tr>
<tr>
<td>   <select name="tests[]" id="testsid" onChange="panicval()" >
    <option value="Viral Load">Result</option>
</select></td>
<td><ul><label></label>
<input type="text" name="results[]" id="results1" onChange="panicval()" style="height:10px; width:50px" />copies/ml
<label id="panic1" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
</table>
        <fieldset style="border:none">
<legend style="font-weight:bold; font-size:11px">RESULT INTERPRETATION</legend>
<div class="radio-toolbar"> 
<table>
<label ></label>
<tr>
<td><input type="radio" name="resultintepretation" value="Viral Suppression" >Viral Suppression (< 1000 c/ml)</td>
</tr>
<tr>
<td><input type="radio" name="resultintepretation" value="Poor Suppression" >Poor Suppression (1000-10000 c/ml)</td>
</tr>
<tr>
<td><input type="radio" name="resultintepretation" value="Critical Values" >Critical Values > 10,000 c/ml</td>
</tr>
</table>        
</div>
      </fieldset>

</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Comments</legend>
<label></label>
<textarea rows="5" cols="112" name="additionaltests" id="additionaltests">

</textarea>
<table>
</table>
</fieldset>
<fieldset style="height:210px">
<br />
<table>
<tr><td>
<label>Assayed By / Date
</td></tr>
<tr><td>
</label>
<input type="text" name="assayedby" id="assayedby" style="height:10px; width:180px"/>
</td><td>
<input type="date" name="assaydate" id="assaydate" style="height:10px; width:120px"/></td></tr>
<tr><td>
<label>Approved By / Date
</td></tr>
<tr><td>
</label>
<input type="text" name="approvedby" id="approvedby" style="height:10px; width:180px"/>
</td><td>
<input type="date" name="approvedate" id="approvedate" style="height:10px; width:120px"/></td></tr>
</table>
</fieldset>

<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 400px; display: table-cell;"> 

         </div>
        <div style="display: table-cell;"> 

         </div>       
    </div>
</div>
</fieldset>
<button type="submit" name="submit">SUBMIT</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Print Form" onclick="window.print()">
<div class="spacer"></div>

</form>
</div>
<script src="jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
function validateForm(){
var x = document.forms["form"]["results"].value;	
	if (x==null || x==""){
		alert ("At least one result must be specified");
		return false;
		}
	}
</script> 
</body>
</html>
<?php session_write_close();?>