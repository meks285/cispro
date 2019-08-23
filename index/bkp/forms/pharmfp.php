<script src="drugcodetranslate.js"></script>

<!DOCTYPE html> 
<html lang="en"> 
<head> 
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<SCRIPT TYPE="text/javascript">
<!--
function popup(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=400,height=600,scrollbars=yes');
return false;
}
//-->
</SCRIPT>
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
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: normal;
font-weight: bold;
color: #000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
}
li input
{
    position: absolute;
    margin-left: -40px;
    margin-top: 5px;
}
.sidebar {
   width: 165px;
   height: 100px;
   position: fixed;
   left: 0px;
   top: 300px;
   border: 1px solid black;
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
float:left;
font-size:10px;
color:#666666;
}
#stylized option{
display:block;
font-weight:bold;
text-align:right;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:10px;
font-weight:normal;
text-align:left;
}
input{
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

td {
	font: italic 11px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
}
#stylized .radio-toolbar input[type="radio"] {
font-weight:bold;
text-align:right;
float:left;
padding-right:0px;
width:20px;
}
#stylized .radio-toolbar label {
display:block;
font-weight:bold;
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
<meta charset="utf-8"> 
<title>CiS Pro- Pharm</title> 
<meta name="description" content="HTML code for user interface for Ajax, PHP and MySQL demo."> 
<link href="../includes/bootstrap.css" rel="stylesheet">

</head>
<h1 align="center" style="background-color:#0F0">Pharmacy Order Form</h1>
<body onLoad="pharmsexchk();">
<a href="./welcome.php" style="font-weight:bold; font-size:14px">[MAIN MENU]</a><br />
<a href="javascript:history.go(-1)">Back</a>

<div id="stylized" class="myform">

<form class="well-home span6 form-horizontal" name="form" id="form1" method="POST" action="insertpharmtest.php">
<div style="width: 100%; display: table;">
    <div style="display: table-row" align="left">
        <div style="width: 500px; display: table-cell;"> 
        <fieldset style="border:none">
<fieldset>
<label></label>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="patienttype" id="patart" value="ART" required onClick="pharmrefillchk()"  />ART</td>
<td><input type="radio" name="patienttype" id="patnart" value="Non-ART" required onClick="pharmrefillchk()"  />Non-ART</td>
<td><input type="radio" name="patienttype" id="patopep" value="Occup PEP" required onClick="pharmrefillchk()"  />Occup PEP</td>
<td><input type="radio" name="patienttype" id="patnopep" value="Non-Occup PEP" required onClick="pharmrefillchk()"  />Non-Occup PEP</td>
<td><input type="radio" name="patienttype" id="patpmtct" value="PMTCT" required onClick="pharmrefillchk()"  />PMTCT</td>
</tr>
</table>
</div>
</fieldset>
</fieldset>
         </div>
        <div style="display: table-cell;" > 
        <fieldset style="border:none; width:250px;">
        
        
<fieldset>
<label></label>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="visittype" id="visini" value="initial" required onClick="pharmrefillchk()"  />Initial Visit</td>
<td><input type="radio" name="visittype" id="visfoll" value="Follow-Up" required onClick="pharmrefillchk()"  />Followup Visit</td>
</tr>
</table>
</div>
</fieldset>
<label>
<span class="small" style="font-weight:bold; font-size:9px">1. Visit Date</span>
</label>
<input type="date" name="visitdate" id="visitdate" required style="width:140px; height:20px"/>
</fieldset>
         </div>  
     
    </div>
</div>
<div class="radio-toolbar">
<table>
<tr>
<td>
<input type="text" name="surname" id="surname" readonly style="width:120px; height:20px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br /> <label for="surname">Surname</label></td> 
<td>
<input type="text" name="othernames" id="othernames" readonly style="width:120px; height:20px"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br /> <label for="othernames">Other names</label></td>
<td>
<input type="text" name="age" id="age" readonly style="width:70px; height:20px;" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br /> <label for="age">Age</label></td>
<td><input type="radio" name="sex" id="sexmale" value="male" disabled="disabled" onchange="anccheck()" />Male
<br /> <label for="sex">Sex</label></td>
<td><input type="radio" name="sex" id="sexfemale" value="Female" disabled="disabled" onchange="anccheck()"/>Female</td>
</tr>
</table>
</div>
<input type="hidden" name="pepid" id="pepid" readonly style="width:120px; height:20px" />
<br />
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">2. State</span>
</label>
<input type="text" name="state" id="state" style="width:120px; height:20px;" readonly/>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">3. LGA</span>
</label>
<input type="text" name="addrlga" id="addrlga" style="width:120px; height:20px;" readonly/>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">4. Facility Name</span>
</label>
<input type="text" name="facilityname" id="facilityname" style="width:180px;height:20px;" readonly/>
       
        </fieldset>
         </div>
    </div>
</div>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 500px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">5. Unique ID</span>
</label>
<input type="text" name="uniqueid" id="uniqueid" style="width:120px;height:20px;" readonly/>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">6. Hospital (unit) No</span>
</label>
<input type="text" name="hospitalno" id="hospitalno" style="width:120px;height:20px;" readonly />

        </fieldset>
         </div>
    </div>
</div>

</fieldset>

<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">7. Pharmacy registration No.</span>
</label>
<input type="text" name="pharmregno" id="pharmregno" style="width:110px;height:20px;"/>

      </fieldset>
         </div>
        <div style="display: table-cell; width:200px"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">8. Weight(Kg)</span>
</label>
<input type="text" name="weight" id="weight" style="width:40px;height:20px;" onChange="bmicalc()" />

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">9. Height(m)</span>
</label>
<input type="text" name="height" id="height"  style="width:40px;height:20px;" onChange="bmicalc()" />

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

</fieldset>

<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
 <label>10. Pregnant</label><br >
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="pregyn" value="Yes" />Yes</td>
<td><input type="radio" name="pregyn" value="No" />No</td>
</tr>
</table>
</div>
       

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        

<label>11. Refill/Fastrack</label><br >
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="refillyn" id="reffyes" value="Yes" />Yes</td>
<td><input type="radio" name="refillyn" id="reffno" value="No" />No</td>
</tr>
</table>
</div>


        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>12. Substitution/Switch</label><br >
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="subswitch" value="Substitution" />Substitution</td>
<td><input type="radio" name="subswitch" value="Switch" />Switch</td>
</tr>
</table>
</div>



        </fieldset>
         </div>
    </div>
</div>
</fieldset>



<fieldset>
<legend style="font-weight:bold; font-size:11px">Regimen</legend>
<label><span class="small" style="font-weight:bold">New Regimen?</span></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="hidden" style="display: none"><?php echo '<a href="subswitch.php?pepid="'.$info['pepid'].'>Substitution/Switch</a>'?></div>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="newregimenyn" id="newregyes" value="Yes" required onclick="this.style.display = 'none'; document.getElementById('hidden').style.display = 'block'" />Yes</td>
<td><input type="radio" name="newregimenyn" value="No" required/>No</td>
</tr>
</table>
</div>
<table>
<tr>
<td>Code</td>
<td>Drug</td>
<td>Dose(mg)</td>
<td>No.</td>
<td>Sig</td>
<td><A HREF="drugcodes.html" onClick="return popup(this, 'stevie')">Drug Codes</A></td>
</tr>
<tr>
<td><input tabindex="1" type="text" name="val2" id="a2b" onChange="pharmacydrugcode()" style="width:30px; height:20px"/></td>
<label id="a5b" style="color:#F00; font-style:italic;"></label>
<td><input tabindex="disable" type="text" name="drugcode1a" id="drugcode1a" onChange="update11();" style="color:#F00; font-style:italic; width:120px; height:20px" readonly /></td>
<td><input tabindex="disable" type="text" name="drugcode1b" id="drugcode1b" onChange="update11();" readonly style="width:120px; height:20px"/></td>
<td><input tabindex="disable" type="text" name="drugcode1c" id="drugcode1c" onChange="update11();" readonly style="width:120px; height:20px"/></td>
<td><input tabindex="disable" type="text" name="drugcode1d" id="drugcode1d" onChange="update11();" readonly style="width:120px; height:20px"/></td>
</tr>
<tr>
<td><input tabindex="2" type="text" name="val3" id="a2b" onChange="pharmacydrugcode1()" style="width:30px; height:20px"/></td>
<label id="a5b" style="color:#F00; font-style:italic;"></label>
<td><input type="text" name="drugcode2a" id="drugcode2a" onChange="update11();" style="color:#F00; font-style:italic;width:120px; height:20px" readonly /></td>
<td><input type="text" name="drugcode2b" id="drugcode2b" onChange="update11();" readonly style="width:120px; height:20px"/>
</td>
<td><input type="text" name="drugcode2c" id="drugcode2c" onChange="update11();" readonly style="width:120px; height:20px"/>
</td>
<td><input type="text" name="drugcode2d" id="drugcode2d" onChange="update11();" readonly style="width:120px; height:20px"/>
</td>
</tr>
<tr>
<td><input tabindex="3" type="text" name="val4" id="a2b" onChange="pharmacydrugcode2()" style="width:30px; height:20px"/></td>
<label id="a5b" style="color:#F00; font-style:italic;"></label>
<td><input type="text" name="drugcode3a" id="drugcode3a" onChange="update11();" style="color:#F00; font-style:italic;width:120px; height:20px" readonly></td>
<td><input type="text" name="drugcode3b" id="drugcode3b" onChange="update11();" readonly style="width:120px; height:20px"/></td>
<td><input type="text" name="drugcode3c" id="drugcode3c" onChange="update11();" readonly style="width:120px; height:20px"/></td>
<td><input type="text" name="drugcode3d" id="drugcode3d" onChange="update11();" readonly style="width:120px; height:20px"/></td>
</tr>
</table>


 </fieldset>


<fieldset>
<legend style="font-weight:bold; font-size:11px">Drugs for OI Prophylaxis</legend>
<select name="oidrug">
	<option value="">Click to select:DRUG NAME</option> 
    <option value="CTX">CTX</option> 
    <option value="Fluconazole">Fluconazole</option>
    <option value="Dapsone">Dapsone</option>
    <option value="INH/B6">INH/B6</option>
</select>

<select name="oiqty">
	<option value="">STRENGTH</option> 
    <option value="100mg">100mg</option> 
    <option value="200mg">200mg</option>
    <option value="300mg">300mg</option>
    <option value="480mg">480mg</option>
    <option value="960mg">960mg</option>
</select>

<select name="oiduration">
	<option value="">DURATION IN MONTHS</option> 
    <option value="1 month">1 month</option> 
    <option value="2 months">2 months</option> 
    <option value="3 months">3 months</option>
    <option value="4 months">4 months</option>
</select>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Anti-TB Drugs</legend>
<select name="tbdrug">
	<option value="">Click to select:DRUG NAME</option> 
    <option value="INH">INH</option> 
    <option value="Rifampicin">Rifampicin</option>
    <option value="Ethambutol">Ethambutol</option>
    <option value="PZI">PZI</option>
    <option value="Streptomycin Injection">Streptomycin Injection</option>
</select>

<select name="tbqty">
	<option value="">STRENGTH</option> 
    <option value="300mg">300mg</option> 
    <option value="400mg">400mg</option>
    <option value="600mg">600mg</option>
    <option value="1g">1g</option>
</select>

<select name="tbduration">
	<option value="">DURATION IN MONTHS</option> 
    <option value="1 month">1 month</option> 
    <option value="2 months">2 months</option> 
    <option value="3 months">3 months</option>
    <option value="4 months">4 months</option>
</select>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Drugs for other OIs or non-HIV related conditions </legend>
<table>
<tr>
<td><label>Drug Name
</label>
<input type="text" name="otherdrugs" id="otherdrugs" style="width:120px; height:20px" /></td>
<td><label>Qty prescribed
</label>
<input type="text" name="otherquantity" id="otherquantity" style="width:120px; height:20px"/></td>
<td><label>Qty dispensed
</label>
<input type="text" name="otherduration" id="otherduration" style="width:120px; height:20px"/></td>
</tr>
<tr>
<td><label>Drug Name
</label>
<input type="text" name="otherdrugs1" id="otherdrugs1" style="width:120px; height:20px" /></td>
<td><label>Qty prescribed
</label>
<input type="text" name="otherquantity1" id="otherquantity1" style="width:120px; height:20px"/></td>
<td><label>Qty dispensed
</label>
<input type="text" name="otherduration1" id="otherduration1" style="width:120px; height:20px"/></td>
</tr>
<tr>
<td><label>Drug Name
</label>
<input type="text" name="otherdrugs2" id="otherdrugs2" style="width:120px; height:20px" /></td>
<td><label>Qty prescribed
</label>
<input type="text" name="otherquantity2" id="otherquantity2" style="width:120px; height:20px"/></td>
<td><label>Qty dispensed
</label>
<input type="text" name="otherduration2" id="otherduration2" style="width:120px; height:20px"/></td>
</tr>
</table>
</fieldset>
</fieldset>
<fieldset>
<table>
<tr>
<td><label>Ordered By
</label>
<input type="text" name="orderedby" id="orderedby" style="width:120px; height:20px"/></td>
<td><label>Order Date
</label>
<input type="date" name="orderdate" id="orderdate" style="width:130px; height:20px"/></td>
<td><label>Dispensed By
</label>
<input type="text" name="dispensedby" id="dispensedby" style="width:120px; height:20px"/></td>
<td><label>Dispense Date
</label>
<input type="date" name="pharmdispensedate" id="pharmdispensedate" style="width:130px; height:20px"/></td>
</tr>
<tr>
<td><label>Picked Up By
</label>
<input type="text" name="pickedupby" id="pickedupby" style="width:120px; height:20px"/></td>
<td><label>Pickup Date
</label>
<input type="date" name="pickupdate" id="pickupdate" style="width:130px; height:20px"/></td>
<td><label>Counseled By
</label>
<input type="text" name="counseledby" id="counseledby" style="width:120px; height:20px"/></td>
<td><label>Counsel Date
</label>
<input type="date" name="counseldate" id="counseldate" style="width:130px; height:20px"/></td>
</tr>
</table>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Feedback from the Pharmacist in case of any observed medication error:</legend>
<table>
<tr>
<td>
<label>Name of Drug(s)
</label>
<input type="text" name="errordrugname" id="errordrugname" style="width:130px; height:20px"/>
</td>
<td>
<label>Nature of Error(s)
</label>
<input type="text" name="errornature" id="errornature" style="width:130px; height:20px"/>
</td>
<td>
<label>Consequence(s) of Error
</label>
<input type="text" name="errorconsequence" id="errorconsequence" style="width:130px; height:20px"/>
</td>
</tr>
<tr>
<td>
<label>Report Date
</label>
<input type="date" name="errorrepdate" id="errorrepdate" style="width:130px; height:20px"/>
</td>
</tr>
</table>
</fieldset>
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label><span class="small" style="font-weight:bold">Next appointment date</span></label>
<span class="small"></span>
</label>
<input type="date" name="nextapptdate" id="nextapptdate" required style="width:140px; height:20px;"/>
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
<input type="button" value="Print Form" onclick="window.print()">
</form>
 </div>

</body>
</html>

