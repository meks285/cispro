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
$query = "SELECT pepid, uniqueid,hospitalid,surname,othernames,hivposdate,age,sex,lga,state,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate
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
<a href="./welcome.php" style="font-weight:bold; font-size:14px; color:#2A1FFF">[MAIN MENU]</a> &nbsp;&nbsp;&nbsp;
<a href="javascript:history.go(-1)" style="color:#2A1FFF">[BACK]</a>
</div>
<br />
<br />
<br />
<br />

<body>
<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="insertlaborder.php">
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
<td><input type="radio" name="artstatus" value="ART" required="required" />ART</td>
<td><input type="radio" name="artstatus" value="Non-ART" />Non-ART</td>
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
<input type="date" name="visitdate" id="visitdate" placeholder="YYYY-MM-DD" required style="width:120px; height:10px;"/>

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
<td><input type="radio" name="baselineorrepeat" value="Baseline" required="required" />Baseline</td>
<td><input type="radio" name="baselineorrepeat" value="Repeat" />Repeat</td>
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
<td><input type="radio" name="sex" id="sexmale" value="male" <?php if ($info['sex']=='male'||$info['sex']=='Male'||$info['sex']=='m'||$info['sex']=='M') { echo 'checked'; } ?> disabled="disabled" onchange="anccheck()" />Male</td>
<td><input type="radio" name="sex" id="sexfemale" value="Female" <?php if ($info['sex']=='Female'||$info['sex']=='female'||$info['sex']=='F'||$info['sex']=='f') { echo 'checked'; } ?> disabled="disabled" onchange="anccheck()"/>Female</td>
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
    </div>
</div>
</fieldset>
<br />
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
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
<legend style="font-weight:bold; font-size:11px">Laboratory Tests and Results</legend>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 400px; display: table-cell;"> 
<fieldset>
<label></label>
<table>
<tr>
<td>   <select name="tests[]" id="testsid" onChange="panicval()" >
    <option value="CD4">CD4</option>
</select></td>
<td><ul><label></label>
<input type="text" name="results[]" id="results1" onChange="panicval()" style="height:10px; width:50px" />cells/µl
<label id="panic1" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select hidden name="tests[]" id="testsid2" onChange="panicvala()" >
    <option value="CD4%">CD4%</option>
</select>
</td>
<td><ul><label></label>
<input type="hidden" name="results[]" id="results2" onChange="panicvala()" style="height:10px; width:50px" />
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
<input type="text" name="results[]" id="results3" onChange="panicvalb()" style="height:10px; width:50px"/>x 10^9/L
<label id="panic3" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>    <select name="tests[]" id="testsid4" onChange="panicvalc()">
    <option value="Lymhocytes">Lymphocytes</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results4" onChange="panicvalc()" style="height:10px; width:50px"/>/mm3
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
<input type="text" name="results[]" id="results5" onChange="panicvald()" style="height:10px; width:50px"/>/mm3
<label id="panic5" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>    <select name="tests[]" id="testsid6" onChange="panicvale()">
    <option value="Polymorph">Polymorph</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results6" onChange="panicvale()" style="height:10px; width:50px"/>/mm3
<label id="panic6" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>    <select name="tests[]" id="testsid7" onChange="panicvalf()">
    <option value="Eosinophils">Eosinophils</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results7" onChange="panicvalf()" style="height:10px; width:50px"/>/mm3
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
<input type="text" name="results[]" id="results8" onChange="panicvalg()" style="height:10px; width:50px"/>/mm3
<label id="panic7" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
</tr>
<td>
    <select name="tests[]" id="testsid9" onChange="panicvalh()">
    <option value="Hb/PCV">Hb/PCV</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results9" onChange="panicvalh()" style="height:10px; width:50px"/>% g/dl
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
<input type="text" name="results[]" id="results10" onChange="panicvali()" style="height:10px; width:50px"/>10^9 /L
<label id="panic10" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>    <select name="tests[]" id="testsid11" onChange="panicvalj()">
    <option value="HBsAG (*At Baseline)">HBsAG (*At Baseline)</option>
</select></td>
<td><ul><label></label>
    <select name="results[]" id="results11" onChange="panicvalj()">
    <option value="">Select</option>
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
    <option value="">Select</option>
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
<input type="text" name="results[]" id="results13" onChange="panicvall()"  style="height:10px; width:50px"/>µmol/l
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
<input type="text" name="results[]" id="results14" onChange="panicvalm()" style="height:10px; width:50px"/>U/I
<label id="panic14" style="color:#F00; font-style:italic; font-size:9px"></label>
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
<input type="text" name="results[]" id="results15" onChange="panicvaln()" style="height:10px; width:50px"/>
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
<input type="text" name="results[]" id="results16" onChange="panicvalo()" style="height:10px; width:50px"/>
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
<input type="text" name="results[]" id="results17" onChange="panicvalp()" style="height:10px; width:50px"/>
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
<fieldset style="height:178px">
<br />
<br />
<br />
<table>
<tr>
<td>
<label>Reported By
</label>
<input type="text" name="reportedby" id="reportedby" style="height:10px; width:120px"/>
</td>
</tr>
<tr>
<td>
<label>Checked By
</label>
<input type="text" name="checkedby" id="checkedby" style="height:10px; width:120px"/>
</td>
</tr>
</table>
</fieldset>

         </div>
        <div style="display: table-cell;"> 
<fieldset>
<label></label>
<table>
<tr>
<td>
    <select name="tests[]" id="testsid18" onChange="panicvalq()">
    <option value="Viral Load">Viral Load</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results18" onChange="panicvalq()" style="height:10px; width:50px"/>copies/ml
<label id="panic18" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid19" onChange="panicvalr()">
    <option value="Na+">Na+</option>
    </select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results19" onChange="panicvalr()" style="height:10px; width:50px"/>mmol/L
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
<input type="text" name="results[]" id="results20" onChange="panicvals()" style="height:10px; width:50px"/>mmol/l
<label id="panic20" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid21" onChange="panicvalt()">
    <option value="Cl-">Cl-</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results21" onChange="panicvalt()" style="height:10px; width:50px"/>mmol/L
<label id="panic21" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid22" onChange="panicvalu()">
    <option value="HCO3">HCO3</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results22" onChange="panicvalu()" style="height:10px; width:50px"/>mmol/L
<label id="panic22" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid23" onChange="panicvalv()">
    <option value="BUN">BUN</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results23" onChange="panicvalv()" style="height:10px; width:50px"/>mmol/l
<label id="panic23" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid24" onChange="panicvalw()">
    <option value="Fasting Glucose">Fasting Glucose</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results24" onChange="panicvalw()" style="height:10px; width:50px"/>µmol/l
<label id="panic24" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid25" onChange="panicvalx()">
    <option value="Total Bilirubin">Total Bilirubin</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results25" onChange="panicvalx()" style="height:10px; width:50px"/>µmol/l
<label id="panic25" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid26" onChange="panicvaly()">
    <option value="Amylase">Amylase</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results26" onChange="panicvaly()" style="height:10px; width:50px"/>U/I
<label id="panic26" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td>
</tr>
<tr>
<td>
    <select name="tests[]" id="testsid27" onChange="panicvalz()">
    <option value="Total Cholesterol">Total Cholesterol</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results27" onChange="panicvalz()" style="height:10px; width:50px"/>mmol/L
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
<input type="text" name="results[]" id="results28" onChange="panicvalza()" style="height:10px; width:50px"/>mmol/L
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
<input type="text" name="results[]" id="results29" onChange="panicvalzb()" style="height:10px; width:50px"/>mmol/L
<label id="panic29" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td></tr>
<tr>
<td>
    <select name="tests[]" id="testsid30" onChange="panicvalzc()">
    <option value="AST/SGOT">AST/SGOT</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results30" onChange="panicvalzc()" style="height:10px; width:50px"/>U/I
<label id="panic30" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td></tr>
<tr>
<td>
    <select name="tests[]" id="testsid31" onChange="panicvalzd()">
    <option value="Triglyceride">Triglyceride</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results31" onChange="panicvalzd()" style="height:10px; width:50px"/>mmol/L
<label id="panic31" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td></tr>
<tr>
<td>
    <select name="tests[]" id="testsid32" onChange="panicvalze()">
    <option value="Alk. Phosphatase">Alk. Phosphatase</option>
</select>
</td>
<td><ul><label></label>
<input type="text" name="results[]" id="results32" onChange="panicvalze()" style="height:10px; width:50px"/>U/I
<label id="panic32" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td></tr>
<tr>
<td>
    <select name="tests[]" id="testsid33" onChange="panicvalzf()">
    <option value="Pregnancy">Pregnancy</option>
</select>
</td>
<td><ul><label></label>
    <select name="results[]" id="results33" onChange="panicvalzf()">
    <option value="">Select</option>
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
    <option value="">Select</option>
    <option value="Negative">Negative</option>
    <option value="Positive">Positive</option>
</select>
<label id="panic34" style="color:#F00; font-style:italic; font-size:9px"></label>
</ul></td></tr>
</table>
</fieldset>
<fieldset >
<legend style="font-weight:bold; font-size:11px">Additional tests</legend>
<label>Specify exact clinical indication for requested tests</label>
<textarea rows="3" cols="40" name="additionaltests" id="additionaltests">

</textarea>
<table>
<tr><td>
<label>Name of Clinician
</label>
<input type="text" name="clinicianname" id="clinicianname" style="height:10px; width:120px"/>
</td></tr>
<tr><td>
<label>Date
</label>
<input type="date" name="reportdate" id="reportdate" style="height:10px; width:120px"/></td></tr>
</table>
</fieldset>
         </div>       
    </div>
</div>
</fieldset>
<button type="submit" name="submit">SUBMIT</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Print Form" onclick="window.print()">
<div class="spacer"></div>

</form>
</div>
</body>
</html>
<?php session_write_close();?>