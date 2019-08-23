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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - Lab Order/Result</title>
</head>
<h1 align="center" style="background-color:#0F0">Laboratory order and results form</h1>
<body>
<a href="javascript:history.go(-1)">Back</a>
<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="">
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
<input type="text" name="state" id="state" value="" readonly="readonly"/>
        
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">4. LGA</span>
</label>
<input type="text" name="addrlga" id="addrlga" value="" style="width:120px; height:10px;" readonly="readonly"/>
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
<input type="text" name="facilityname" id="facilityname" value="" readonly="readonly" style="width:120px;height:10px;"/>
        
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
<input type="text" name="surname" id="surname" readonly="readonly" value="" style="width:120px; height:10px;"/>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
       <label>
<span class="small" style="font-weight:bold">7. Other names</span>
</label>
<input type="text" name="othernames" id="othernames" readonly="readonly" value="" style="width:120px; height:10px;"/>

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
<td><input type="radio" name="sex" id="sexmale" value="male"  disabled="disabled" onchange="anccheck()" />Male</td>
<td><input type="radio" name="sex" id="sexfemale" value="Female" disabled="disabled" onchange="anccheck()"/>Female</td>
</tr>
</table>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; width:180px; border:none">
<label>
<span class="small" style="font-weight:bold">9. Age</span>
</label>
<input type="text" name="agecalc" id="agecalc" value="" disabled="disabled" style="width:50px;height:10px;"/>
       
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
<input type="text" name="uniqueid" id="uniqueid" readonly="readonly" value="" style="height:10px; width:120px" />
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
<label>
<span class="small" style="font-weight:bold">11. Hospital(unit) No</span>
</label>
<input type="text" name="hospitalno" id="hospitalno" value="" style="width:120px;height:10px;" />
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

<input type="hidden" name="pepid" id="pepid" value="" />


<fieldset>
<legend style="font-weight:bold; font-size:11px">Laboratory Tests and Results</legend>
<label><span class="small" style="font-weight:bold">STATUS</span></label>
<table>
<tr>
<td><input type="radio" name="resultstatus" id="resultstatusawres" value="Awaiting results" required="required" onchange="labresultchk()"  />Awaiting results</td>
<td><input type="radio" name="resultstatus" id="resultstatusresav" value="Results available" onchange="labresultchk()" />Results available</td>
</tr>
</table>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 400px; display: table-cell;"> 
<fieldset>
<label></label>
<table>
<tr>
<td><select name="tests[]" id="testsid" onChange="panicval()"><option value="CD4">CD4</option>
</select></td>
<td><ul><label></label>
<input type="text" name="results[]" id="results1" onChange="panicval()" style="height:10px; width:50px" />cells/µl
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
<input type="text" name="results[]" id="results2" onChange="panicvala()" style="height:10px; width:50px" />%
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
<fieldset style="height:164px">
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
<input type="button" value="Print Form" onclick="window.print()">
<div class="spacer"></div>

</form>
</div>
</body>
</html>
