<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="drugcodetranslate.js"></script>
<script type="text/javascript">
function validateAge()
{
var today = new Date();
var del_date = new Date(document.getElementById('dob').value);
var del_date = del_date.getFullYear();
var td1 = today.getFullYear();
var intAge = td1 - del_date;
var str1="Age: "
var strAge= str1+(td1 - del_date)+"Yrs ";
//document.getElementById('agemonth').innerHTML = str1+(td1 - del_date)+"Yrs";
if (intAge < 15){
	document.getElementById('doblabel2').innerHTML = "";
		document.getElementById('agemonth').value = ((intAge*365.2425)/30);
		document.getElementById('age').value = intAge;

	}
	else if (intAge >= 15){
		document.getElementById('doblabel2').innerHTML = "This is not a pediatric patient";
		document.getElementById('agemonth').value = "";
		document.getElementById('age').value = "";
		}
}
function pedpepid(){
	var pepid = document.getElementById('pepid').value;
	var pepid = pepid.toUpperCase();
	if (pepid.indexOf("P")!=2){
				document.getElementById('pepidflag').innerHTML = "PepID Error: Pediatric patient";
		}
		else if (pepid.length!=11){
						document.getElementById('pepidflag').innerHTML = "PepID Error: Length";
			}
		else if((pepid.indexOf("/") != -1)||(pepid.indexOf(" ") != -1)||(pepid.indexOf("*") != -1)||(pepid.indexOf("&") != -1)||(pepid.indexOf("?") != -1			)||(pepid.indexOf("%") != -1)||(pepid.indexOf("$") != -1)||(pepid.indexOf("^") != -1)||(pepid.indexOf("(") != -1)||(pepid.indexOf(")") != -1)){
				document.getElementById('doblabel2').innerHTML = "PepID Error: Invalid Character";
			}			else{
						document.getElementById('pepidflag').innerHTML = "";
						document.getElementById('doblabel2').innerHTML = "";
				}
	}
</script>

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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - New pediatric</title>
</head>
<h1 align="center" style="background-color:#0F3">New [PEDIATRIC] patient registration</h1>
<body >
<a href="javascript:history.go(-1)">[BACK]</a>

<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="insertped.php">
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 350px; display: table-cell;"> 
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
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 350px; display: table-cell;"> 
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
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 350px; display: table-cell;"> 
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
<span class="small" style="font-weight:bold">Patient ID</span>
</label>
<input type="text" name="pepid" id="pepid" required="required" placeholder="Required" onchange="adtpepid()" style="width:120px; height:10px; font-weight:bold" />

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div>

</fieldset>
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">6. State</span>
</label>
<input type="text" name="lga" id="lga" style="width:100px;height:10px;"/>

      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">7. LGA</span>
</label>
<input type="text" name="lga" id="lga" style="width:100px;height:10px;"/>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">8. Facility Name</span>
</label>
<input type="text" name="facilityname" id="facilityname" style="width:120px;height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label><span class="small" style="font-weight:bold">9. Sex</span></label>
<table>
<tr>
<td><input type="radio" name="sex" id="sexmale" value="male" required="required" onchange="anccheck()" />Male</td>
<td><input type="radio" name="sex" id="sexfemale" value="Female" required="required" onchange="anccheck()"/>Female</td>
</tr>
</table>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label id="doblabel2" style="color:#F00"></label>
        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
        </fieldset>
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">10. Date of Birth</span>
</label>
<input type="date" name="dob" id="dob" style="width:120px;height:10px;" onchange="validateAge()"/>
      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">11. Age(yrs)</span>
</label>
<input type="text" name="age" id="age" style="width:40px;height:10px;"/>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">Age(months)</span>
</label>
<input type="text" name="agemonth" id="agemonth" style="width:120px;height:10px;" readonly/>

        </fieldset>
         </div>
    </div>
</div>

</fieldset>
<fieldset style="height:250px">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label><span class="small" style="font-weight:bold">12. Is the mother of the child alive?</span></label>
<table>
<tr>
<td><input type="radio" name="pmotheralive" id="pma_yes" value="Yes" onchange="motheralivecheck()" required="required"  />Yes</td>
<td><input type="radio" name="pmotheralive" id="pma_no" value="No"  onchange="motheralivecheck()" required="required" />No</td>
</tr>
</table>
<label>
Name:
</label>
<input type="text" name="pmothername" id="pmothername" style="width:120px;height:10px;"/>
<label>
Address:
</label>
<input type="text" name="pmotheradd" id="pmotheradd" style="width:120px;height:10px;"/>

<label><span class="small" style="font-weight:bold">13. Is the father of the child alive?</span></label>
<table>
<tr>
<td><input type="radio" name="pfatheralive" id="pfa_yes" value="Yes" onchange="fatheralivecheck()" required="required"  />Yes</td>
<td><input type="radio" name="pfatheralive" id="pfa_no" value="No"  onchange="fatheralivecheck()" required="required" />No</td>
</tr>
</table>
<label>
Name:
</label>
<input type="text" name="pfathername" id="pfathername"  style="width:120px;height:10px;"/>

<label>
Address:
</label>
<input type="text" name="pfatheradd" id="pfatheradd" style="width:120px;height:10px;"/>
<br />
</fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
<legend style="font-weight:bold; font-size:11px">14. Job Status of child's parent/Caregiver</legend>
<div>
<label>
Mother
</label>
<select name="jobstatusmother" id="jobstatusmother">
	<option value="">Select</option> 
    <option value="Student">Student</option> 
    <option value="Unemployed">Unemployed</option>
    <option value="Employed">Employed</option>
    <option value="Retired">Retired</option>
</select>
<br />
<label>
Father
</label>
<select name="jobstatusfather" id="jobstatusfather">
	<option value="">Select</option> 
    <option value="Student">Student</option> 
    <option value="Unemployed">Unemployed</option>
    <option value="Employed">Employed</option>
    <option value="Retired">Retired</option>
</select>
<br />
<label>
Caregiver
</label>
<select name="jobstatuscaregiver">
	<option value="">Select</option> 
    <option value="Student">Student</option> 
    <option value="Unemployed">Unemployed</option>
    <option value="Employed">Employed</option>
    <option value="Retired">Retired</option>
</select>
<br />
<br />
<legend style="font-weight:bold; font-size:11px">15. Educational Level of child, parent and caregiver</legend>
<label>
Child
</label>
<select name="educationallevelchild" id="educationallevelchild">
	<option value="">Select</option> 
    <option value="None">None</option> 
    <option value="Quranic">Quranic</option>
    <option value="Primary">Primary</option>
    <option value="Junior Secondary">Junior Secondary</option>
    <option value="Senior Secondary">Senior Secondary</option>
    <option value="Post Secondary">Post Secondary</option>
</select>
<br />
<label>
Mother
</label>
<select name="educationallevelmother" id="educationallevelmother">
	<option value="">Select</option> 
    <option value="None">None</option> 
    <option value="Quranic">Quranic</option>
    <option value="Primary">Primary</option>
    <option value="Junior Secondary">Junior Secondary</option>
    <option value="Senior Secondary">Senior Secondary</option>
    <option value="Post Secondary">Post Secondary</option>
</select>
<br />
<label>
Father
</label>
<select name="educationallevelfather" id="educationallevelfather">
	<option value="">Select</option> 
    <option value="None">None</option> 
    <option value="Quranic">Quranic</option>
    <option value="Primary">Primary</option>
    <option value="Junior Secondary">Junior Secondary</option>
    <option value="Senior Secondary">Senior Secondary</option>
    <option value="Post Secondary">Post Secondary</option>
</select>
<br />
<label>
Caregiver
</label>
<select name="educationallevelcaregiver">
	<option value="">Select</option> 
    <option value="None">None</option> 
    <option value="Quranic">Quranic</option>
    <option value="Primary">Primary</option>
    <option value="Junior Secondary">Junior Secondary</option>
    <option value="Senior Secondary">Senior Secondary</option>
    <option value="Post Secondary">Post Secondary</option>
</select>
<br />
</div>
<br />

         </div>        
         <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
</fieldset>
<br />
<br />
<fieldset style="width:275px; border:none">

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 350px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
16. Child's Parents / Caregivers Are: 
</label>
<table>
<tr>
<td><input type="radio" name="pcaregiversrelationshipstatus" id="pcarerstatmarried" value="Married" />Married</td>
<td><input type="radio" name="pcaregiversrelationshipstatus" id="pcarerstatcohabit" value="Co-Habiting" />CoHabiting</td>
<td><input type="radio" name="pcaregiversrelationshipstatus" id="pcarerstatsingle" value="Single" />Single</td>
</tr>
</table>
      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>17. How many siblings does the child have:</label>
<input type="text" name="psiblings" id="psiblings" size="5"  style="height:10px" />
        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<div style="width: 100%; display: table;">
<div style="display: table-row">
<div style="width: 300px; display: table-cell;"> 
<fieldset>
<legend style="font-weight:bold; font-size:11px">18. Where does the child live:</legend>
<label>Address
</label>
<input type="text" name="address" id="address"  style="width:120px; height:10px;"/>

<label>Ward/Village
</label>
<input type="text" name="addrwardvillage" id="addrwardvillage"  style="width:120px; height:10px;"/>

<label>Town Name
</label>
<input type="text" name="addrtown" id="addrtown"  style="width:120px; height:10px;"/>

<label>LGA
</label>
<input type="text" name="addrlga" id="addrlga"  style="width:120px; height:10px;"/>

<label>State
</label>
<input type="text" name="state" id="state"  style="width:120px; height:10px;"/>


<label>Phone Number
</label>
<input type="text" name="phoneno" id="phoneno" style="width:120px; height:10px;"/>

</fieldset>
       </div>
        <div style="display: table-cell;"> 
<fieldset style="height:262px">
<legend style="font-weight:bold; font-size:11px">19. With whom does the child live</legend>
<div class="radio-toolbar"> 
<table>
<tr>
<td><input type="radio" name="pchildliveswith" value="Both Parents"  />Both Parents</td>
</tr>
<tr>
<td><input type="radio" name="pchildliveswith" value="Father-Only" />Father</td>
</tr>
<tr>
<td><input type="radio" name="pchildliveswith" value="Mother-Only" />Mother</td>
</tr>
<tr>
<td><input type="radio" name="pchildliveswith" value="Caregiver" />Caregiver</td>
</tr>
</table>
</div>
</fieldset>
        </div>
    </div>
</div>

<input type="button" value="Print Form" onclick="window.print()">

</form>
</div>
</body>
</html>