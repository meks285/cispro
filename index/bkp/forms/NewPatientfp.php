<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<script src="drugcodetranslate.js"></script>
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
#stylized .checkbox-toolbar input[type="checkbox"] {
font-weight:bold;
text-align:right;
float:left;
padding-right:0px;
width:20px;
}
#stylized .checkbox-toolbar label {
display:block;
font-weight:bold;
text-align:right;
float:left;
padding-right:0px;
position:absolute;
margin:1px 0 0px 10px;
}
#stylized .checkbox-toolbar input{
float:left;
padding-right:50px;
margin:1px 0 0px 10px;
position:inherit;
}


</style>
<script type="text/javascript">
function adtpepid(){
	var pepid = document.getElementById('pepid').value;
	var pepid = pepid.toUpperCase();
	if (pepid.length!=10){
				document.getElementById('doblabel2').innerHTML = "PepID Error: Wrong Length";
				document.getElementById('pepid').value = "";
		}
		else if((pepid.indexOf("/") != -1)||(pepid.indexOf(" ") != -1)||(pepid.indexOf("*") != -1)||(pepid.indexOf("&") != -1)||(pepid.indexOf("?") != -1)||(pepid.indexOf("%") != -1)||(pepid.indexOf("$") != -1)||(pepid.indexOf("^") != -1)||(pepid.indexOf("(") != -1)||(pepid.indexOf(")") != -1)){
				document.getElementById('doblabel2').innerHTML = "PepID Error: Invalid Character";
				document.getElementById('pepid').value = "";
			}
			else{
						document.getElementById('doblabel2').innerHTML = "";
				}
	}

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
	document.getElementById('doblabel2').innerHTML = "Enroll this Patient under pedriatic";
	}
	else{
		document.getElementById('doblabel2').innerHTML = "";
		}
}

</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - New adult</title>
</head>
<h1 align="center" style="background-color:#0F3">New [Adult] Patient registration</h1>
<body onload="if(document.referrer=='') self.location='./index.php';">
<a href="javascript:history.go(-1)">[BACK]</a>

<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="insert.php">
<fieldset style="height:20px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">1. Visit Date</span>
</label>
<input type="date" name="visitdate" id="visitdate" required="required" placeholder="YYYY-MM-DD" style="width:120px; height:10px; float:left"/>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold"> 2. Date HIV confirmed</span>
</label>
<input type="date" name="hivposdate" id="hivposdate" placeholder="YYYY-MM-DD" required style="width:120px; height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<br />
<fieldset style="width:822px; height:20px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">3. Patient Surname</span>
</label>
<input type="text" name="surname" id="surname" required="required" placeholder="Required" style="width:120px; height:10px;"/>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
       <label>
<span class="small" style="font-weight:bold">4. Other names</span>
</label>
<input type="text" name="othernames" id="othernames" required="required" placeholder="Required" style="width:120px; height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<br />
<fieldset style="width:822px; height:30px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">5. Unique ID</span>
</label>
<input type="text" name="uniqueid" id="uniqueid" placeholder="   -    -    " style="width:120px; height:10px;" />
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Hospital (unit) No</span>
</label>
<input type="text" name="hospitalno" id="hospitalno" style="width:120px;height:10px;" />

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Patient ID</span>
</label>
<input type="text" name="pepid" id="pepid" required="required" placeholder="Required" onchange="adtpepid()" style="width:120px; height:10px;" />

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<fieldset style="width:822px; height:30px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label><span class="small" style="font-weight:bold">7. Sex</span></label>
<table>
<tr>
<td><input type="radio" name="sex" id="sexmale" value="male" required="required" onchange="anccheck()" />Male</td>
<td><input type="radio" name="sex" value="Female" required="required" onchange="anccheck()"/>Female</td>
</tr>
</table>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">8. LGA</span>
</label>
<input type="text" name="lga" id="lga" style="width:120px;height:10px;"/>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">9. Facility Name</span>
</label>
<input type="text" name="facilityname" id="facilityname" style="width:120px;height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<fieldset style="width:822px; height:35px;">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">10. ANC No.</span>
</label>
<input type="text" name="ancno" id="ancno" style="width:120px;height:10px;"/>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">11. Date of Birth</span>
</label>
<input type="date" name="dob" id="dob" required="required" placeholder="Required" onChange="validateAge()" style="width:118px;height:10px;"/> 

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label id="doblabel" style="color:#00BF00; font-style:italic;"></label>
<label id="doblabel2" style="color:#F00; font-style:italic;"></label>

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
<div style="width: 300px; display: table-cell;"> 
<fieldset style="width:300">
<legend style="font-weight:bold; font-size:11px">13. Marital Status:</legend>
<label></label>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="maritalstatus" value="Single" />Single</td>
<td><input type="radio" name="maritalstatus" value="Widowed" />Widowed</td>
</tr>
<tr>
<td><input type="radio" name="maritalstatus" value="Married" />Married</td>
<td><input type="radio" name="maritalstatus" value="Separated" />Separated</td>
</tr>
<tr>
<td><input type="radio" name="maritalstatus" value="Divorced" />Divorced</td>
</tr>
</table>
</div>
</fieldset>
         </div>
        <div style="display: table-cell;"> 
<fieldset style="width:275px">
<legend style="font-weight:bold; font-size:11px;">14. Educational Level:</legend>
<div class="radio-toolbar"> 
<label></label>
<table>
<tr>
<td><input type="radio" name="educationallevel" value="None"/>None</td>
<td><input type="radio" name="educationallevel" value="Quranic" />Quranic</td>
</tr>
<tr>
<td><input type="radio" name="educationallevel" value="Primary" />Primary</td>
<td><input type="radio" name="educationallevel" value="Junior Secondary" />Junior Secondary</td>
</tr>
<tr>
<td><input type="radio" name="educationallevel" value="Senior Secondary" />Senior Secondary</td>
<td><input type="radio" name="educationallevel" value="Post Secondary" />Post Secondary</td>
</tr>
</table>
</div>
</fieldset>
        </div>
        <div style="display: table-cell;"> 
<fieldset style="width:270;  height:72px">
<legend style="font-weight:bold; font-size:11px">15. Job/Occupation Status:</legend>
<div class="radio-toolbar">
<label></label>
<table>
<tr>
<td><input type="radio" name="jobstatus" value="Unemployed" />Unemployed</td>
<td><input type="radio" name="jobstatus" value="Student" />Student</td>
</tr>
<tr>
<td><input type="radio" name="jobstatus" value="Employed" />Employed</td>
<td><input type="radio" name="jobstatus" value="Retired" />Retired</td>
</tr>
</table>
</ul>
</div>
</fieldset>
       </div>
   </div>
</div>
<div style="width: 100%; display: table;">
<div style="display: table-row">
<div style="width: 300px; display: table-cell;"> 
<fieldset>
<legend style="font-weight:bold; font-size:11px">16. Where does the patient live:</legend>
<label>Address
</label>
<input type="text" name="address" id="address" style="width:120px; height:10px;"/>

<label>Ward/Village
</label>
<input type="text" name="addrwardvillage" id="addrwardvillage" style="width:120px; height:10px;"/>

<label>Town Name
</label>
<input type="text" name="addrtown" id="addrtown" style="width:120px; height:10px;"/>

<label>LGA
</label>
<input type="text" name="addrlga" id="addrlga" style="width:120px; height:10px;"/>

<label>State
</label>
<input type="text" name="state" id="state" style="width:120px; height:10px;"/>


<label>Phone Number
</label>
<input type="text" name="phoneno" id="phoneno" style="width:120px; height:10px;"/>

</fieldset>
       </div>
        <div style="display: table-cell;"> 
<fieldset style="height:260px">
<legend style="font-weight:bold; font-size:11px">17. Contact person/next of kin:</legend>
<label>Name
</label>
<input type="text" name="nokname" id="nokname" style="width:120px; height:10px;"/>

<label>Relationship
</label>
<input type="text" name="nokrelationship" id="nokrelationship" style="width:120px; height:10px;"/>

<label>Address
</label>
<input type="text" name="nokaddr" id="nokaddr" style="width:120px; height:10px;"/>

<label>Ward/Village
</label>
<input type="text" name="nokwardvillage" id="nokwardvillage" style="width:120px; height:10px;"/>

<label>Town Name
</label>
<input type="text" name="noktown" id="noktown" style="width:120px; height:10px;"/>

<label>State
</label>
<input type="text" name="nokstate" id="nokstate" style="width:120px; height:10px;"/>

<label>Phone Number
</label>
<input type="text" name="nokphoneno" id="nokphoneno" style="width:120px; height:10px;"/>
</fieldset>
        </div>
    </div>
</div>
</fieldset>

</fieldset>

<input type="button" value="Print Form" onclick="window.print()">
<div class="spacer"></div></form>
</div>
<script type="text/javascript">
{

history.go(1)
 }

</script>
</body>
</html>