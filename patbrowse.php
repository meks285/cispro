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
.sidebar {
   width: 170px;
   height: 0px;
   position: fixed;
   left: 0px;
   top: 200px;
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
<title>CiS Pro - Demographics</title>
</head>
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
$query = "SELECT pepid, uniqueid,hospitalid,age,hivposdate,state,surname,othernames,sex,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate,symptomsreview,addiotnalsymcmments,pastmedicalhist,presentingcomplaint,addiotnalsymcmments,relfamilyhist,hospitalization,drugallergies,riskfactors,lastmenstrualperiod,currentlypregnant,gestationalage,edd,lastcd4,lastcd4date,lastvl,lastvldate,prevarvexp,prevfacilityname,prevdurationofcarefromdate,prevdurationofcaretodate,currentmedications,serviceentry,adherenceyn,missedadh3daysyn,missadhreason,trtmtinterruptionyn,trtmtinterdate,trtmtinterduration,trtmtinterreason,trtmtstopyn,trtmtstopdate,trtmtstopduration,trtmtstopreason,hivstatdisclosure,hivstatdisclosureother,hivstatdiscussion,supportgrpyn,pastcurrarvsideeff,petemp,pebp,pepulse,peweight,peheight,pegenappearance,peskin,peheadeye,pebreasts,pecardiovascular,pegenitalia,gerespiratory,gerespiratoryrate,gegastrointestinal,geneurological,gementalstatus,peadditional,assessment,whostagecriteria,whostage,plan,planlab,plantbs,planoip,planpep,planadh,planoit,planadm,planpain,planother,enrollin,planarvtherapy,planarvtherchgtrtmtreason,planarvtherstoptrtmtreason,regimen1st,regimenothers,regimendrugs,nextappointment,nextappointmentdate,Clinicianname,prevarvtype,missedadhcode,interradhcode,stopadhcode,assessmentnotes,regimen2nd
FROM patient WHERE pepid = '$_SESSION[pepid]'"
;
        $result = mysql_query($query);
        $info = mysql_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();
?>
<h1 align="center" style="background-color:#0F0">Demographics</h1>
<body onload="if(document.referrer=='') self.location='./index.php';">
<div class="sidebar1">
<a href="./welcome.php" style="font-weight:bold; font-size:14px">MAIN MENU</a> 
</div>
<div class='sidebar'>
<fieldset>
<a href="./newpatientiniteval.php" style="font-weight:bold; font-size:14px">Initial Evaluation</a> <br>
</fieldset>
<fieldset>
<a href="./patvisitview.php" style="font-weight:bold; font-size:14px">Visit</a> <br>
</fieldset>
<fieldset>
<a href="./patlabview.php" style="font-weight:bold; font-size:14px">Lab</a> <br>
</fieldset>
<fieldset>
<a href="./patpharmview.php" style="font-weight:bold; font-size:14px">Pharmacy</a> <br>
</fieldset>
<fieldset>
<a href="./carecard2view.php" style="font-weight:bold; font-size:14px">Clinical Evaluation</a> <br>
</fieldset>
<fieldset>
<a href="./carecard.php" style="font-weight:bold; font-size:14px">Care Card</a> <br>
</fieldset>
<br>
<p></p><br>
<a href="javascript:history.go(-1)">Back</a>
</div>
<div id="stylized" class="myform">
<form id="form" name="form" method="POST" action="updatedata.php">
<fieldset style="height:20px; border:none">
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">1. Visit Date</span>
</label>
<input type="date" name="visitdate" id="visitdate" required="required" placeholder="YYYY-MM-DD" value="<?php echo $info['enroldate']?>" style="width:120px; height:10px; float:left"/>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold"> 2. Date HIV confirmed</span>
</label>
<input type="date" name="hivposdate" id="hivposdate" placeholder="YYYY-MM-DD" required value="<?php echo $info['hivposdate']?>" style="width:120px; height:10px;"/>

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
<input type="text" name="surname" id="surname" required="required" placeholder="Required" value="<?php echo $info['surname']?>" style="width:120px; height:10px;"/>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
       <label>
<span class="small" style="font-weight:bold">4. Other names</span>
</label>
<input type="text" name="othernames" id="othernames" required="required" placeholder="Required" value="<?php echo $info['othernames']?>" style="width:120px; height:10px;"/>

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
<input type="text" name="uniqueid" id="uniqueid" placeholder="   -    -    " value="<?php echo $info['uniqueid']?>" style="width:120px; height:10px;" />
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Hospital (unit) No</span>
</label>
<input type="text" name="hospitalno" id="hospitalno" value="<?php echo $info['hospitalid']?>" style="width:120px;height:10px;" />

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Patient ID</span>
</label>
<input type="text" name="pepid" id="pepid" required="required" placeholder="Required" value="<?php echo $info['pepid']?>" onchange="adtpepid()" style="width:120px; height:10px; font-weight:bold" />

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
<td><input type="radio" name="sex" id="sexmale" value="male" <?php if ($info['sex']=='male') { echo 'checked'; } ?> required="required" onchange="anccheck()" />Male</td>
<td><input type="radio" name="sex" id="sexfemale" value="Female" <?php if ($info['sex']=='Female') { echo 'checked'; } ?> required="required" onchange="anccheck()"/>Female</td>
</tr>
</table>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">8. LGA</span>
</label>
<input type="text" name="lga" id="lga" value="<?php echo $info['lga']?>" style="width:120px;height:10px;"/>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">9. Facility Name</span>
</label>
<input type="text" name="facilityname" id="facilityname" value="<?php echo $info['facilityname']?>" style="width:120px;height:10px;"/>

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
<input type="text" name="ancno" id="ancno" value="<?php echo $info['ancno']?>" style="width:120px;height:10px;"/>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">11. Date of Birth</span>
</label>
<input type="date" name="dob" id="dob" required="required" value="<?php echo $info['dob']?>" placeholder="Required" onChange="validateAge()" style="width:118px;height:10px;"/> 

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Age(yrs)</span>
</label>
<input type="text" name="agecalc" id="agecalc" value="<?php echo $info['age']?>" style="width:120px;height:10px;"/>
       
        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
<div style="width: 300px; display: table-cell;"> 
<fieldset style="width:300">
<legend style="font-weight:bold; font-size:11px">13. Marital Status:</legend>
<label></label>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="maritalstatus" value="Single" <?php if ($info['maritalstatus']=='Single') { echo 'checked'; } ?>/>Single</td>
<td><input type="radio" name="maritalstatus" value="Widowed" <?php if ($info['maritalstatus']=='Widowed') { echo 'checked'; } ?>/>Widowed</td>
</tr>
<tr>
<td><input type="radio" name="maritalstatus" value="Married" <?php if ($info['maritalstatus']=='Married') { echo 'checked'; } ?>/>Married</td>
<td><input type="radio" name="maritalstatus" value="Separated" <?php if ($info['maritalstatus']=='Separated') { echo 'checked'; } ?> />Separated</td>
</tr>
<tr>
<td><input type="radio" name="maritalstatus" value="Divorced" <?php if ($info['maritalstatus']=='Divorced') { echo 'checked'; } ?>/>Divorced</td>
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
<td><input type="radio" name="educationallevel" value="None" <?php if ($info['educationallevel']=='None') { echo 'checked'; } ?>/>None</td>
<td><input type="radio" name="educationallevel" value="Quranic" <?php if ($info['educationallevel']=='Quranic') { echo 'checked'; } ?>/>Quranic</td>
</tr>
<tr>
<td><input type="radio" name="educationallevel" value="Primary" <?php if ($info['educationallevel']=='Primary') { echo 'checked'; } ?>/>Primary</td>
<td><input type="radio" name="educationallevel" value="Junior Secondary" <?php if ($info['educationallevel']=='Junior Secondary') { echo 'checked'; } ?>/>Junior Secondary</td>
</tr>
<tr>
<td><input type="radio" name="educationallevel" value="Senior Secondary" <?php if ($info['educationallevel']=='Senior Secondary') { echo 'checked'; } ?>/>Senior Secondary</td>
<td><input type="radio" name="educationallevel" value="Post Secondary" <?php if ($info['educationallevel']=='Post Secondary') { echo 'checked'; } ?>/>Post Secondary</td>
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
<td><input type="radio" name="jobstatus" value="Unemployed" <?php if ($info['jobstatus']=='Unemployed') { echo 'checked'; } ?>/>Unemployed</td>
<td><input type="radio" name="jobstatus" value="Student" <?php if ($info['jobstatus']=='Student') { echo 'checked'; } ?>/>Student</td>
</tr>
<tr>
<td><input type="radio" name="jobstatus" value="Employed" <?php if ($info['jobstatus']=='Employed') { echo 'checked'; } ?>/>Employed</td>
<td><input type="radio" name="jobstatus" value="Retired" <?php if ($info['jobstatus']=='Retired') { echo 'checked'; } ?>/>Retired</td>
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
<input type="text" name="address" id="address" value="<?php echo $info['address']?>" style="width:120px; height:10px;"/>

<label>Ward/Village
</label>
<input type="text" name="addrwardvillage" id="addrwardvillage" value="<?php echo $info['wardvillage']?>" style="width:120px; height:10px;"/>

<label>Town Name
</label>
<input type="text" name="addrtown" id="addrtown" value="<?php echo $info['town']?>" style="width:120px; height:10px;"/>

<label>LGA
</label>
<input type="text" name="addrlga" id="addrlga" value="<?php echo $info['addrlga']?>" style="width:120px; height:10px;"/>

<label>State
</label>
<input type="text" name="state" id="state" value="<?php echo $info['state']?>" style="width:120px; height:10px;"/>


<label>Phone Number
</label>
<input type="text" name="phoneno" id="phoneno" value="<?php echo $info['phoneno']?>" style="width:120px; height:10px;"/>

</fieldset>
       </div>
        <div style="display: table-cell;"> 
<fieldset style="height:262px">
<legend style="font-weight:bold; font-size:11px">17. Contact person/next of kin:</legend>
<label>Name
</label>
<input type="text" name="nokname" id="nokname" value="<?php echo $info['nokname']?>" style="width:120px; height:10px;"/>

<label>Relationship
</label>
<input type="text" name="nokrelationship" id="nokrelationship" value="<?php echo $info['nokrelationship']?>" style="width:120px; height:10px;"/>

<label>Address
</label>
<input type="text" name="nokaddr" id="nokaddr" value="<?php echo $info['nokaddr']?>" style="width:120px; height:10px;"/>

<label>Ward/Village
</label>
<input type="text" name="nokwardvillage" id="nokwardvillage" value="<?php echo $info['nokwardvillage']?>" style="width:120px; height:10px;"/>

<label>Town Name
</label>
<input type="text" name="noktown" id="noktown" value="<?php echo $info['noktown']?>" style="width:120px; height:10px;"/>

<label>State
</label>
<input type="text" name="nokstate" id="nokstate" value="<?php echo $info['nokstate']?>" style="width:120px; height:10px;"/>

<label>Phone Number
</label>
<input type="text" name="nokphoneno" id="nokphoneno" value="<?php echo $info['nokphoneno']?>" style="width:120px; height:10px;"/>
</fieldset>
        </div>
    </div>
</div>

<div class="spacer"></div>

</form>
</div>

</body>
</html>