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
<title>APIN DB - Care Card</title>
</head>
<?php

include './mandate_/lidh.php';

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$myid=$_SESSION['pepid'];

class MyClass{
    public function GetUserInformation(){
$query = "SELECT pepid, uniqueid,hospitalid,surname,othernames,sex,age,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate,hivposdate, hivmode,careentrypoint,serviceentry,priorart,dateeligible,whyeligible,dateinitadh,datetransfin,facilitytransf,firstartregimen,dateartstart,clinicalstageart,peweightatart,peheightatart, cd4atart,lastcd4date,testlocation,patfunction,whostage,lastcd4,peweight,peheight
FROM patient WHERE pepid = '$_SESSION[pepid]'";

include 'lidh.php';

        $result = mysqli_query($con, $query);
        $info = mysqli_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysqli_error($con);
?>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">CARE/ART CARD&nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>
<body >
<div class='sidebar1'>
<a href="./welcome.php" style="font-weight:bold; font-size:14px; color:#2A1FFF">[MAIN MENU]</a> &nbsp;&nbsp;&nbsp;
<a href="./patsummary.php?pepid=<?php echo $myid ?>"; style="color:#2A1FFF">[BACK]</a>
</div>

<div id="stylized" class="myform">
<form id="formId" name="form" onkeypress="return event.keyCode != 13;" method="POST" >
<input type="hidden" name="pepid" id="pepid" value="<?php echo $info['pepid']?>"/>


<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">FACILITY NAME</span>
</label>
<input type="text" name="facilityname" id="facilityname" required="required" value="<?php echo $info['facilityname']?>" style="width:150px; height:10px; float:left"/>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        <label for="hivposdate">
<span class="small" style="font-weight:bold"> 1. Hospital number</span>
</label>
<input type="text" name="hospitalno" id="hospitalno" required value="<?php echo $info['hospitalid']?>" style="width:120px; height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>



<fieldset>
<legend style="font-weight:bold; font-size:11px">Initial visit</legend>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 250px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">2. Unique ID</span>
</label>
<input type="text" name="uniqueid" id="uniqueid" placeholder="   -    -    " value="<?php echo $info['uniqueid']?>" style="width:100px; height:10px;" />
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">3. Date enrolled in HIV care</span>
</label>
<input type="date" name="enroldate" id="enroldate" value="<?php echo $info['enroldate']?>" style="width:120px; height:10px;"/>

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






<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 250px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">4. Surname</span>
</label>
<input type="text" name="surname" id="surname" placeholder="   -    -    " value="<?php echo $info['surname']?>" style="width:100px; height:10px;" />
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Othernames</span>
</label>
<input type="text" name="othernames" id="othernames" value="<?php echo $info['othernames']?>" style="width:120px; height:10px;"/>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">5. Address</span>
</label>
<input type="text" name="address" id="address" value="<?php echo $info['address']?>" style="width:120px; height:10px; font-weight:bold" />

        </fieldset>
         </div>
    </div>
</div>



<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 250px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label><span class="small" style="font-weight:bold">6. Sex</span></label>
<table>
<tr>
<td><input type="radio" name="sex" id="sexmale" value="male" <?php if ($info['sex']=='male'||$info['sex']=='Male'||$info['sex']=='m'||$info['sex']=='M') { echo 'checked'; } ?> required="required" onchange="anccheck()" />Male</td>
<td><input type="radio" name="sex" id="sexfemale" value="Female" <?php if ($info['sex']=='Female'||$info['sex']=='female'||$info['sex']=='F'||$info['sex']=='f') { echo 'checked'; } ?> required="required" onchange="anccheck()"/>Female</td>
</tr>
</table>
      </fieldset>
         </div>
        <div style="display: table-cell; width:285px"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">7. Age</span>
</label>
<input type="text" name="age" id="age" value="<?php echo $info['age']?>" size="1" style="height:10px;"/>

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">8. DOB</span>
</label>
<input type="date" name="dob" id="dob" value="<?php echo $info['dob']?>"  style="height:10px; width:120px"/>

        </fieldset>
         </div>
         
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
         <div style="display: table-cell;"> 
        <fieldset style="height:20px; width:250px; ">
<label>
9. Care entry point
</label>
<table>
<tr>
<td>
<select name="careentrypoint" id="careentrypoint" style="width:120px; height:20px;">
	<option value="<?php if ($info['careentrypoint']=='') {
echo $info['serviceentry'];
}
else {
echo $info['careentrypoint'];
} ?>"><?php if ($info['careentrypoint']=='') {
echo $info['serviceentry'];
}
else {
echo $info['careentrypoint'];
}?></option> 
    <option value="STI">STI</option> 
    <option value="OPD">OPD</option>
    <option value="HCT">HCT</option>
    <option value="CBO">CBO</option>
    <option value="Private">Private</option>
    <option value="TB">TB</option>
    <option value="Ward">Ward</option>
    <option value="Casualty">Casualty</option>
    <option value="Sex workers outreach">Sex workers outreach</option>
    <option value="EDU">EDU</option>
    <option value="ANC/PMTCT">ANC/PMTCT</option>
    <option value="Current clinic patient">Current clinic patient</option>
    <option value="Self referral">Self referral</option>
    <option value="Pre-ART transfer in">Pre-ART transfer in</option>
</select>
</td>
</tr>
</table>
        </fieldset>
         </div>

        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">

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
<span class="small" style="font-weight:bold">10. Date of Confirmed HIV test</span>
</label>
<input type="date" name="hivposdate" id="hivposdate" value="<?php echo $info['hivposdate']?>" style="width:120px;height:10px;" readonly/>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">11. Mode of HIV test </span>
</label>
<input type="text" name="hivmode" id="hivmode" value="<?php echo $info['hivmode']?>" style="width:120px;height:10px;" />

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">12. Where</span>
</label>
<input type="text" name="testlocation" id="testlocation" value="<?php echo $info['testlocation']?>" style="width:120px;height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 350px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">13. Prior ART</span>
</label>
<table>
<tr>
<td>
<select name="priorart" id="priorart" style="height:20px;">
	<option value="<?php echo $info['priorart']?>"><?php echo $info['priorart']?></option> 
    <option value="Transfer in with records">Transfer in with records</option> 
    <option value="Earlier ARV but not a transfer in">Earlier ARV but not a transfer in</option>
    <option value="PMTCT only">PMTCT only</option>
    <option value="None">None</option>
</select>
</td>
</tr>
</table>
      </fieldset>
         </div>
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        

        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">ART commencement</legend>


<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<table>
<tr>
<td>        
<label>
<span class="small" style="font-weight:bold">14. Date medically eligible</span>
</label>
</td>
<td>
<input type="date" name="dateeligible" id="dateeligible" value="<?php echo $info['dateeligible']?>" style="width:120px; height:10px"/>
</td>
</tr>
</table>    
      </fieldset>
         </div>
        <div style="width: 250px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<table>
<tr>
<td>        
<label>
<span class="small" style="font-weight:bold">15. Why eligible</span>
</label>
</td>
<td>
<select name="whyeligible" id="whyeligible" style="width:120px; height:20px;">
	<option value="<?php echo $info['whyeligible']?>"><?php echo $info['whyeligible']?></option> 
    <option value="Clinically only">Clinically only</option> 
    <option value="CD4">CD4</option>
    <option value="TLC">TLC</option>
</select>
</td>
</tr>
</table>
        </fieldset>
         </div>        <div style="display: table-cell;width:300px"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">16. Date initial adherence counselling</span>
</label>
<input type="date" name="dateinitadh" id="dateinitadh" value="<?php echo $info['dateinitadh']?>" style="width:120px; height:10px"/>
        </fieldset>
         </div>
    </div>
</div>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">17. Date Transfered In</span>
</label>
<input type="date" name="datetransfin" id="datetransfin" value="<?php echo $info['datetransfin']?>" style="width:120px; height:10px"/>

 	</fieldset>
      </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">18. Facility Transfered From</span>
</label>
<input type="text" name="facilitytransf" id="facilitytransf" value="<?php echo $info['facilitytransf']?>" style="width:120px; height:10px"/>

        </fieldset>
         </div>        
         <div style="display: table-cell; width:300px"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">19. First ART Regimen</span>
</label>
<input type="text" name="firstartregimen" id="firstartregimen" value="<?php echo $info['firstartregimen']?>" style="width:120px; height:10px"/>
        </fieldset>
         </div>
    </div>
</div>


<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">20. Date ART Started</span>
</label>
<input type="date" name="dateartstart" id="dateartstart" value="<?php echo $info['dateartstart']?>" style="width:120px; height:10px"/>


 	</fieldset>
      </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">21. Clinical stage at start of ART</span>
</label>
<input type="text" name="clinicalstageart" id="clinicalstageart" value="<?php if ($info['clinicalstageart']=='') {
echo $info['whostage'];
}
else {
echo $info['clinicalstageart'];
} ?>" style="width:120px; height:10px"/>
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
<legend style="font-weight:bold; font-size:11px">Status at start of ART</legend>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 345px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">22. Weight</span>
</label>
<input type="text" name="peweightatart" id="peweightatart" value="<?php if ($info['peweightatart']=='') {
echo $info['peweight'];
}
else {
echo $info['peweightatart'];
}?>" style="width:120px; height:10px"/>
</fieldset>
      </div>
        <div style="display: table-cell; width:350px"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">23. Height</span>
</label>
<input type="text" name="peheightatart" id="peheightatart" value="<?php if ($info['peheightatart']=='') {
echo $info['peheight'];
}
else {
echo $info['peheightatart'];
}?>" style="width:30px; height:10px"/>
        </fieldset>
         </div>        
         <div style="display: table-cell; width:300px"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">25. CD4 at start of ART</span>
</label>
<input type="text" name="cd4atart" id="cd4atart" value="<?php if ($info['cd4atart']=='') {
echo $info['lastcd4'];
}
else {
echo $info['cd4atart'];
} ?>" style="width:100px; height:10px"/>
        </fieldset>
         </div>
         <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div>


<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 450px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">

<label>
<span class="small" style="font-weight:bold">24. Function</span>
</label>
<select name="patfunction" id="patfunction" style="width:120px; height:20px;">
	<option value="<?php echo $info['patfunction']?>"><?php echo $info['patfunction']?></option> 
    <option value="Working">Working</option> 
    <option value="Ambulant">Ambulant</option>
    <option value="Bed Ridden">Bed Ridden</option>
</select>
 	</fieldset>
      </div>
        <div style="display: table-cell; width:280px"> 
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

<button type="submit" id="submit">UPDATE</button>
<div class="spacer"></div>

</form>
<script src="jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$('#submit').click( function() {
			var query = $('#formId').serialize();
			var pepid = $('#pepid').val();
        	var url = 'updatecaredata.php';
        	$.post(url, 
        	query, 
        	function (response) {
        	alert ("Care Card Updated");
		window.location.href="./patsummary.php?pepid="+pepid;    
			});

		return false;
	
	});
</script> 
</div>

</body>
</html>