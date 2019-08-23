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
$query = "SELECT pepid, uniqueid,hospitalid,surname,othernames,age,sex,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
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
<?php echo $info['pepid'];?> <br>
<?php echo date("Y/m/d")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
padding:14px;
}
li input
{
    position: absolute;
    margin-left: -40px;
    margin-top: 5px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 1px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
table{
	font-size:12px;
	text-align:left;
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
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
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

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>APIN DB - Pharmacy Order</title>
</head>
<h1 align="center" style="background-color:green">Adult Pharmacy Order Form</h1>
<body>
<a href="./index.php" >Logout</a>
<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="insertpharm.php">
<h1>Pharmacy Form</h1>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Patient Identification Numbers</legend>
<label>PEPID
<span class="small">PEPFAR ID</span>
</label>
<input type="text" name="pepid" id="pepid" value="<?php echo $info['pepid']?>" />

<label>Unique Number
<span class="small">Unique ID</span>
</label>
<input type="text" name="uniqueid" id="uniqueid" disabled="disabled" value="<?php echo $info['uniqueid']?>" />

<label>Surname
<span class="small">Surname</span>
</label>
<input type="text" name="surname" id="surname" disabled="disabled" value="<?php echo $info['surname']?>" />

<label>Other names
<span class="small">Other names</span>
</label>
<input type="text" name="othernames" id="othernames" disabled="disabled" value="<?php echo $info['othernames']?>" />

<label>Age
<span class="small">Years</span>
</label>
<input type="text" name="age" id="age" disabled="disabled" value="<?php echo $info['age']?>" />

<label>Visit Date
<span class="small">Date of Visit</span>
</label>
<input type="date" name="visitdate" id="visitdate" value="<?php echo date("d/m/Y")?>" />
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Type of Patient Order</legend>
<fieldset>
<label></label>
<ul>
<li><input type="radio" name="patienttype" value="ART" />ART</li>
<li><input type="radio" name="patienttype" value="Non-ART" />Non-ART</li>
<li><input type="radio" name="patienttype" value="Occup PEP" />Occup PEP</li>
<li><input type="radio" name="patienttype" value="Non-Occup PEP" />Non-Occup PEP</li>
<li><input type="radio" name="patienttype" value="PMTCT" />PMTCT</li>
</ul>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Initial or Followup Visit</legend>
<label></label>
<ul>
<li><input type="radio" name="visittype" value="initial" />Initial</li>
<li><input type="radio" name="visittype" value="Follow-Up" />Followup</li>
</ul>
</fieldset>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Other Details</legend>
<fieldset>
<label>Pregnant</label><br >
<ul>
<li><input type="radio" name="pregyn" value="Yes" />Yes</li>
<li><input type="radio" name="pregyn" value="No" />No</li>
</ul>
<label>Refill/Fastrack</label><br >
<ul>
<li><input type="radio" name="refillyn" value="Yes" />Yes</li>
<li><input type="radio" name="refillyn" value="No" />No</li>
</ul>
<label>Substitution/Switch</label><br >
<ul>
<li><input type="radio" name="subswitch" value="Substitution" />Substitution</li>
<li><input type="radio" name="subswitch" value="Switch" />Switch</li>
</ul>
</fieldset>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">ARV Medications</legend>
<select name="drugname">
	<option value="">Click to select:DRUG NAME</option> 
    <option value="Zidovudine (AZT, ZDV; Retrovir)">Zidovudine (AZT, ZDV; Retrovir)</option> 
    <option value="Lamivudine (3TC; Epivir)">Lamivudine (3TC; Epivir)</option>
    <option value="Abacavir (ABC; Ziagen)">Abacavir (ABC; Ziagen)</option>
    <option value="Emtricitabine (FTC; Emtriva)">Emtricitabine (FTC; Emtriva)</option>
    <option value="Tenofovir (TDF; Viread)">Tenofovir (TDF; Viread)</option>
    <option value="Combivir (AZT + 3TC)">Combivir (AZT + 3TC)</option>
    <option value="Truvada (TDF + FTC)">Truvada (TDF + FTC)</option>
    <option value="Tenofovir+Lamivudine (TDF+3TC)">Tenofovir+Lamivudine (TDF+3TC)</option>
    <option value="Nevirapine (NVP; Viramune)">Nevirapine (NVP; Viramune)</option>
    <option value="Efavirenz (EFV; Sustiva, Stocrin)">Efavirenz (EFV; Sustiva, Stocrin)</option>
    <option value="Nelfinavir (NFV; Viracept)">Nelfinavir (NFV; Viracept)</option>
    <option value="Indinavir (IDV; Crixivan)">Indinavir (IDV; Crixivan)</option>
    <option value="Ritonavir (RTV; Norvir)">Ritonavir (RTV; Norvir)</option>
    <option value="Saquinavir (SQV; Fortovase, Invirase)">Saquinavir (SQV; Fortovase, Invirase)</option>
    <option value="Kaletra (LPV/r; lopinavir + ritonavir)">Kaletra (LPV/r; lopinavir + ritonavir)</option>
    <option value="Atazanavir (ATV)">Atazanavir (ATV) </option>
</select>

<select name="strength">
	<option value="">STRENGTH</option> 
    <option value="100mg">100mg</option> 
    <option value="150mg">150mg</option>
    <option value="200mg">200mg</option>
    <option value="250mg">250mg</option>
    <option value="300mg">300mg</option>
    <option value="350mg">350mg</option>
    <option value="400mg">400mg</option>
    <option value="450mg">450mg</option>
    <option value="500mg">500mg</option>
    <option value="600mg">600mg</option>
    <option value="800mg">800mg</option>
</select>
<select name="frequency">
	<option value="">FREQUENCY</option> 
    <option value="OD">OD</option> 
    <option value="OD (if on rifampicin)">OD (if on rifampicin)</option> 
    <option value="BD">BD</option>
    <option value="2 BD">2 BD</option>
    <option value="2 BD(w/RTV)">2 BD(w/RTV)</option>
    <option value="3 BD">3 BD</option>
    <option value="4 BD(w/RTV)">4 BD(w/RTV)</option>
    <option value="4 BD(w/NNRTI)">4 BD(w/NNRTI)</option>
    <option value="5 BD">5 BD</option>
    <option value="5 BD(w/RTV)">5 BD(w/RTV)</option>
    <option value="5 BD(w/NNRTI)">5 BD(w/NNRTI)</option>
</select>
<select name="duration">
	<option value="">DURATION IN MONTHS</option> 
    <option value="1 month">1 month</option> 
    <option value="2 months">2 months</option> 
    <option value="3 months">3 months</option>
    <option value="4 months">4 months</option>
</select>
<fieldset>
<label>Regimen
<span class="small">Regimen</span>
</label>
<input type="text" name="regimen" id="regimen" />
<label>Quantity
<span class="small">Dispense Quantity</span>
</label>
<input type="text" name="quantitydisp" id="quantitydisp" />
</fieldset>

<label>Dispense Date
</label>
<input type="date" name="dispensedate" id="dispensedate" />

</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Drugs for OI Prophylaxis</legend>
<select name="drugname1">
	<option value="">Click to select:DRUG NAME</option> 
    <option value="CTX">CTX</option> 
    <option value="Fluconazole">Fluconazole</option>
    <option value="Dapsone">Dapsone</option>
    <option value="INH/B6">INH/B6</option>
</select>

<select name="strength1">
	<option value="">STRENGTH</option> 
    <option value="100mg">100mg</option> 
    <option value="200mg">200mg</option>
    <option value="300mg">300mg</option>
    <option value="480mg">480mg</option>
    <option value="960mg">960mg</option>
</select>
<select name="frequency1">
	<option value="">FREQUENCY</option> 
    <option value="OD">OD</option> 
    <option value="BD">BD</option>
    <option value="2 BD">2 BD</option>
    <option value="3x/wk">3x/wk</option>
</select>
<select name="duration1">
	<option value="">DURATION IN MONTHS</option> 
    <option value="1 month">1 month</option> 
    <option value="2 months">2 months</option> 
    <option value="3 months">3 months</option>
    <option value="4 months">4 months</option>
</select>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Anti-TB Drugs</legend>
<select name="drugname2">
	<option value="">Click to select:DRUG NAME</option> 
    <option value="INH">INH</option> 
    <option value="Rifampicin">Rifampicin</option>
    <option value="Ethambutol">Ethambutol</option>
    <option value="PZI">PZI</option>
    <option value="Streptomycin Injection">Streptomycin Injection</option>
</select>

<select name="strength2">
	<option value="">STRENGTH</option> 
    <option value="300mg">300mg</option> 
    <option value="400mg">400mg</option>
    <option value="600mg">600mg</option>
    <option value="1g">1g</option>
</select>
<select name="frequency2">
	<option value="">FREQUENCY</option> 
    <option value="OD">OD</option> 
</select>
<select name="duration2">
	<option value="">DURATION IN MONTHS</option> 
    <option value="1 month">1 month</option> 
    <option value="2 months">2 months</option> 
    <option value="3 months">3 months</option>
    <option value="4 months">4 months</option>
</select>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Drugs for other OIs or non-HIV related conditions </legend>
<label>Drug Name
</label>
<input type="text" name="otherdrugs" id="otherdrugs" />
<label>Quantity
</label>
<input type="text" name="otherquantity" id="otherquantity" />
<label>Duration
</label>
<input type="text" name="otherduration" id="otherduration" />

</fieldset>
</fieldset>
<fieldset>
<label>Ordered By
<span class="small">(Clinician)</span>
</label>
<input type="text" name="orderedby" id="orderedby" />
<label>Order Date
<span class="small">Date</span>
</label>
<input type="date" name="orderdate" id="orderdate" />
<label>Dispensed By
<span class="small">(Pharmacist)</span>
</label>
<input type="text" name="dispensedby" id="dispensedby" />
<label>Dispense Date
<span class="small">Date</span>
</label>
<input type="date" name="pharmdispensedate" id="pharmdispensedate" />
<label>Picked Up By
</label>
<input type="text" name="pickedupby" id="pickedupby" />
<label>Pickup Date
<span class="small">Date</span>
</label>
<input type="date" name="pickupdate" id="pickupdate" />

<label>Counseled By
</label>
<input type="text" name="counseledby" id="counseledby" />

<label>Counsel Date
<span class="small">Date</span>
</label>
<input type="date" name="counseldate" id="counseldate" />

</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Feedback from the Pharmacist in case of any observed medication error:</legend>
<label>Drug
<span class="small">Name of Drug(s)</span>
</label>
<input type="text" name="errordrugname" id="errordrugname" />

<label>Error
<span class="small">Nature of Error(s)</span>
</label>
<input type="text" name="errornature" id="errornature" />

<label>Consequence
<span class="small">Consequence of Error(s)</span>
</label>
<input type="text" name="errorconsequence" id="errorconsequence" />

<label>Report Date
<span class="small">Error report date</span>
</label>
<input type="date" name="errorrepdate" id="errorrepdate" />

<button type="submit">CONTINUE</button>
<div class="spacer"></div>

</fieldset>

</form>
</div>
</body>
</html>
<?php session_write_close();?>