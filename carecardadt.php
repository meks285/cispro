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
width:1200px;
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
session_start();
include './mandate_/lidh.php';

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$myid=$_SESSION['pepid'];

class MyClass{
    public function GetUserInformation(){
$query = "SELECT idpatient,pepid, uniqueid,hospitalid,surname,other_art_start_stat,bmi_muac,patienttransindate,patienttransinfac,uniqueidmother,othernames,sex,age,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
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
<a href="./welcome.php?username=<?php echo $_GET['username'] ?>" style="font-weight:bold; font-size:14px; color:#2A1FFF">[MAIN MENU]</a> &nbsp;&nbsp;&nbsp;
<a href="./patsummary.php?pepid=<?php echo $myid ?>&login_id=<?php echo $_GET['username'] ?>"; style="color:#2A1FFF">[BACK]</a>
</div>

<div id="stylized" class="myform">
<form id="formId" name="form" onkeypress="return event.keyCode != 13;" method="POST" >
<input type="hidden" name="pepid" id="pepid" value="<?php echo $info['pepid']?>"/>


<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Care Card Number</span>
</label>
<?php include './mandate_/lidh2.php';
                                $sqla=" SELECT facilityname,lga,state from facility LIMIT 1";
                                $resulta=mysqli_query($con,$sqla);
                                $info1a=mysqli_fetch_assoc($resulta); ?>

<input type="text" name="facilityname" id="facilityname" required="required" value="<?php echo $info['idpatient']?>" style="width:70px; height:10px; float:left"/>
        </fieldset>
         </div>
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">FACILITY NAME</span>
</label>
<?php include './mandate_/lidh2.php';
                                $sqla=" SELECT facilityname,lga,state from facility LIMIT 1";
                                $resulta=mysqli_query($con,$sqla);
                                $info1a=mysqli_fetch_assoc($resulta); ?>

<input type="text" name="facilityname" id="facilityname" required="required" value="<?php echo $info1a['facilityname']?>" style="width:150px; height:10px; float:left"/>
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
<label>
<span class="small" style="font-weight:bold">5a. Occupation</span>
</label>
<input type="text" name="jobstatus" id="jobstatus" placeholder="   -    -    " value="<?php echo $info['jobstatus']?>" style="width:100px; height:10px;" />
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
         </div>        <div style="display: table-cell;"> 
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">5b. Telephone No.</span>
</label>
<input type="text" name="phoneno" id="phoneno" value="<?php echo $info['phoneno']?>" style="width:120px; height:10px;"/>

        </fieldset>
         </div>        
		 <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">5c. Next of Kin</span>
</label>
<input type="text" name="nokname" id="nokname" value="<?php echo $info['nokname']?>" style="width:120px; height:10px; font-weight:bold" />

        </fieldset>
         </div>
		 <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">5d. Relationship</span>
</label>
<input type="text" name="nokrelationship" id="nokrelationship" value="<?php echo $info['nokrelationship']?>" style="width:120px; height:10px; font-weight:bold" />

        </fieldset>
         </div>
        <div style="width: 250px; display: table-cell;"> 
         </div>
		 
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">5e. Telephone No. (Next of Kin)</span>
</label>
<input type="text" name="nokphoneno" id="nokphoneno" value="<?php echo $info['nokphoneno']?>" style="width:120px; height:10px; font-weight:bold" />

        </fieldset>
         </div>        
		 <div style="display: table-cell;"> 
         </div>
        <div style="width: 250px; display: table-cell;"> 
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
<td><input type="radio" name="sex" id="sexmale" value="Male" <?php if ($info['sex']=='male'||$info['sex']=='Male'||$info['sex']=='m'||$info['sex']=='M') { echo 'checked'; } ?> required="required" onchange="anccheck()" />M</td>
<td><input type="radio" name="sex" id="sexfemale" value="Female" <?php if ($info['sex']=='Female'||$info['sex']=='female'||$info['sex']=='F'||$info['sex']=='f') { echo 'checked'; } ?> required="required" onchange="anccheck()"/>F</td>
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
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">9. Mothers Unique ID (If Infantt)</span>
</label>
<input type="text" name="uniqueidmother" id="uniqueidmother" value="<?php echo $info['uniqueidmother']?>"  style="height:10px; width:120px"/>

        </fieldset>
         </div>
         
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
         <div style="display: table-cell;"> 
        <fieldset style="height:60px; width:1080px; ">
<label>
10. Care entry point
</label>
<input tabindex="disable" type="text" name="careentrypoint" id="careentrypoint" value="<?php echo $info['careentrypoint']?>" onChange="update11();" style="color:#F00; font-style:italic; width:120px; height:30px" list="DrugName" />
<datalist id="DrugName">
    <option value="..." label="Enter Care Entry Number:"></option>
    <option value="OPD">1 - OPD</option>
    <option value="In Patient">2 - In  Patient</option>
    <option value="HCT">3 - HCT</option>
    <option value="TB DOTS">4 - TB DOTS</option>
    <option value="STI Clinic">5 - STI Clinic</option>
    <option value="ANC/PMTCT">6 - ANC/PMTCT</option>
    <option value="Transfer In">7 - Transfer In</option>
    <option value="Outreaches">8 - Outreaches</option>
    <option value="Others">9 - Others (Specify)</option>
</datalist> 
<input tabindex="disable" type="text" name="careentrypointo" id="careentrypointo" value="<?php if ($info['careentrypoint']=='OPD' || $info['careentrypoint']=='In Patient' || $info['careentrypoint']=='TB DOTS' || $info['careentrypoint']=='STI Clinic' || $info['careentrypoint']=='ANC/PMTCT' || $info['careentrypoint']=='Transfer In' || $info['careentrypoint']=='Outreaches' || $info['careentrypoint']=='HCT') {echo '';} elseif($info['careentrypoint']==''){echo 'Specify (If Others)';}else{echo '';} ?>" onChange="update11();" style="color:#F00; font-style:italic; width:120px; height:30px" />
        </fieldset>
         </div>
        <div style="display: table-cell; width:90px"> 
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
<span class="small" style="font-weight:bold">11. Date of Confirmed HIV test</span>
</label>
<input type="date" name="hivposdate" id="hivposdate" value="<?php echo $info['hivposdate']?>" style="width:120px;height:10px;" />

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">12. Mode of HIV test </span>
</label>
<div class="radio-toolbar">
<table>
<td><input type="radio" name="hivmode" id="hivmode" value="HIVAb" <?php if ($info['hivmode']=='HIVAb') { echo 'checked'; } ?>>HIVAb</td>
<td><input type="radio" name="hivmode" id="hivmode" value="HIVPCR" <?php if ($info['hivmode']=='HIVPCR') { echo 'checked'; } ?>>HIVPCR</td>
</table>
</div>
        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">13. Where</span>
</label>
<input type="text" name="testlocation" id="testlocation" value="<?php echo $info['testlocation']?>" style="width:120px;height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 850px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">14. Prior ART</span>
</label>
<div class="radio-toolbar">
<table>
<td><input type="radio" name="priorart" id="priorart" value="Transfer in with records" <?php if ($info['priorart']=='Transfer in with records') { echo 'checked'; } ?>>Transfer in with records</td>
<td><input type="radio" name="priorart" id="priorart" value="Earlier ARV but not a transfer in" <?php if ($info['priorart']=='Earlier ARV but not a transfer in') { echo 'checked'; } ?>>Earlier ARV but not a transfer in</td>
<td><input type="radio" name="priorart" id="priorart" value="PMTCT only" <?php if ($info['priorart']=='PMTCT only') { echo 'checked'; } ?>>PMTCT only</td>
<td><input type="radio" name="priorart" id="priorart" value="PEP" <?php if ($info['priorart']=='PEP') { echo 'checked'; } ?>>PEP</td>
</table>
</div>

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
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 850px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
		<?php include './mandate_/lidh2.php';
                                $sqla="SELECT SUBSTRING((select facilityidprefix from facility),1,2) as facilityprefix,SUBSTRING(pepid,1,2) patientprefix,CASE SUBSTRING(pepid,1,2) 
WHEN 'LG' THEN 'LASUTH'
WHEN 'MW' THEN 'MCC Amuwo Odofin'
WHEN 'IR' THEN 'Iru Primary Health Center'
WHEN 'AP' THEN 'Agboju Primary Health Center'
WHEN 'LN' THEN 'Lagoon Hospital'
WHEN 'SG' THEN 'General Hospital Shomolu'
WHEN 'GB' THEN 'General Hospital Agbowa'
WHEN 'GH' THEN 'General Hospital Agbowa'
WHEN 'KZ' THEN 'St Kizito Catholic Clinic'
WHEN 'SU' THEN 'St Kizito Clinic'
WHEN 'RS' THEN 'Ring Road Specialist Hospital'
WHEN 'MC' THEN 'May Clinic Shendam'
WHEN 'LD' THEN 'Ladoke Akintola University of Technology'
WHEN 'JH' THEN 'Jericho Specialist Hospital Ibadan'
WHEN 'BA' THEN 'Comprehensive Health Center Bassa'
WHEN 'BA' THEN 'Comprehensive Health Center Madagali'
WHEN 'BK' THEN 'Comprehensive Health Center Banki'
WHEN 'CL' THEN 'Comprehensive Health Center Lardang'
WHEN 'GD' THEN 'Comprehensive Health Center JUTH Gindiri'
WHEN 'DY' THEN 'Comprehensive Health Center Dyerok'
WHEN 'BC' THEN 'Comprehensive Health Center Bokkos'
WHEN 'TK' THEN 'General Hospital Tunkus'
WHEN 'MO' THEN 'General Hospital Moniya'
WHEN 'QP' THEN 'General Hospital Quan Pan'
WHEN 'IK' THEN 'General Hospital Ikorodu'
WHEN 'EP' THEN 'General Hospital Epe'
WHEN 'FH' THEN 'Adefemi Hospital'
WHEN 'AG' THEN 'Agape Hospital'
WHEN 'AW' THEN 'General Hospital Angware'
WHEN 'GS' THEN 'General Hospital Isolo'
WHEN 'NU' THEN 'Federal Medical Center Nguru'
WHEN 'ON' THEN 'Womens Hospital Onikan'
WHEN 'DK' THEN 'Dadin Kowa Comprehensive Health Center'
WHEN 'LT' THEN 'Sacred Heart Hospital Lantoro'
WHEN 'IJ' THEN 'General Hospital Ijebu-Ode'
WHEN 'NH' THEN 'Nursing Home Maiduguri'
WHEN 'SM' THEN 'State Specialist Hospital Maiduguri'
WHEN 'UM' THEN 'University Of Maiduguri Teaching Hospital'
WHEN 'MH' THEN '68 Military Hospital'
WHEN 'AB' THEN 'Ahmadu Bello Teaching Hospital'
WHEN 'PY' THEN 'CCDP Panyam'
WHEN 'PS' THEN 'Plateau State Hospital'
WHEN 'BU' THEN 'Bingham University Teaching Hospital'
WHEN 'BU' THEN 'BUTH'
WHEN 'GA' THEN 'GH Alimosho'
WHEN 'RB' THEN 'Rauf Aregbesola PHC'
WHEN 'IP' THEN 'Ipaja PHC'
WHEN 'OJ' THEN 'Ojodu PHC'
WHEN 'IF' THEN 'GH Ifako-Ijaiye'
WHEN 'FK' THEN 'Ifako PHC'
WHEN 'AN' THEN 'Ancilla Catholic Hospital'
WHEN 'MU' THEN 'GH Mushin'
WHEN 'JB' THEN 'Ajeabo PHC'
WHEN 'PV' THEN 'Palm Avenue PHC'
WHEN 'LU' THEN 'LUTH'
WHEN 'JU' THEN 'Jos University Teaching Hospital'

WHEN 'FL' THEN 'Police Hospital, Falomo'
WHEN 'NM' THEN 'National Insitute of Medical Research (NIMR)'
WHEN 'IL' THEN 'GH Ibeju-Lekki'

WHEN 'UC' THEN 'University College Hospital'
WHEN 'AD' THEN 'Adeoyo Maternity Hospital'
WHEN 'OG' THEN 'State Hospital Ogbomoso'
WHEN 'EH' THEN 'St. Mary Chatholic Hospital Eleta'
WHEN 'BM' THEN 'Baptist  Medical Centre Saki'
WHEN 'SY' THEN 'State Hospital Oyo'
WHEN 'SK' THEN 'State Hospital Saki'
WHEN 'BW' THEN 'Bowen Teachin Hospital Ogbomoso'
WHEN 'OY' THEN 'OLA Hospital Oluyoro'
WHEN 'ER' THEN 'General Hospital Eruwa'

WHEN 'BL' THEN 'Barkin Ladi General Hospital'
WHEN 'JU' THEN 'Jos University Teaching Hospital'
WHEN 'KW' THEN 'Cottage Hospital, Kwalla'
WHEN 'PS' THEN 'Plateau State Specialist Hospital, Jos'
WHEN 'OL' THEN 'Our Lady of Apostles, Jos'
WHEN 'PK' THEN 'Pankshin General Hospital'
WHEN 'PY' THEN 'CCDP Panyam'
WHEN 'SD' THEN 'Seventh Day Adventist Hospital, Jengre'
WHEN 'SH' THEN 'General Hospital, Shendam'
WHEN 'SL' THEN 'Solat Women Hospital'
WHEN 'VH' THEN 'Vom Christian Hospital'
WHEN 'ZK' THEN 'JUTH, Comprehensive Health Centre, Zamko'
WHEN 'MG' THEN 'General Hospital, Mangu'
WHEN 'FA' THEN 'Faith Alive Foundation'
WHEN 'RC' THEN 'COCIN Hospital Rehabilitation Centre, Mangu'
WHEN 'LG' THEN 'General Hospital, Langtang'
WHEN 'BA' THEN 'Cottage Hospital, Bassa'
WHEN 'BK' THEN 'Cottage Hospital Bokkos'
WHEN 'ZA' THEN 'Our Lady of Apostles, Zawan'
WHEN 'HW' THEN 'Hwolshe Medical Centre'
WHEN 'DK' THEN 'CHC Dakinkowa'
WHEN 'FM' THEN 'FMC Makurdi'
WHEN 'UM' THEN 'University Of Maiduguri'
WHEN 'UN' THEN 'University Of Nigeria Teaching Hospital'
WHEN 'VC' THEN 'St Virgilus Mangu'

ELSE SUBSTRING(pepid,1,2) END AS diagfac from patient where pepid='$_SESSION[pepid]' limit 1";
                                $resulta=mysqli_query($con,$sqla);
                                $info1a=mysqli_fetch_assoc($resulta); ?>
<label>
<span class="small" style="font-weight:bold">15. Date Transfered In</span>
</label>
<input type="date" name="patienttransindate" id="patienttransindate" value="<?php if($info1a['facilityprefix']!=$info1a['patientprefix']){ if(isset($info['patienttransindate'])){echo $info['patienttransindate'];} else { echo $info['enroldate']; } } else {echo $info['datetransfin']; }?>" style="width:120px;height:10px;"/>
      </fieldset>
         </div>
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">16. Facility Transfered In From</span>
</label>
<input type="text" name="patienttransinfac" id="patienttransinfac" value="<?php if($info1a['facilityprefix']!=$info1a['patientprefix']){ echo $info1a['diagfac']; } else {}?>" style="width:120px;height:10px;"/>
        </fieldset>
         </div>       
		 <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        

        </fieldset>
         </div>
        <div style="width: 300px; display: table-cell;"> 
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
        <div style="width: 345px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">17. Clinical stage at start of ART</span>
</label>

<select name="clinicalstageart" id="clinicalstageart" style="height:20px;width:60px">
	<option value="<?php if ($info['clinicalstageart']=='') {
echo $info['whostage'];
}
else {
echo $info['clinicalstageart'];
} ?>"><?php if ($info['clinicalstageart']=='') {
echo $info['whostage'];
}
else {
echo $info['clinicalstageart'];
} ?></option> 
    <option value="1">1</option> 
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select>
</fieldset>
      </div>
        <div style="display: table-cell; width:350px"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">18. CD4 at start of ART</span>
</label>
<input type="text" name="cd4atart" id="cd4atart" value="<?php if ($info['cd4atart']=='') {
echo $info['lastcd4'];
}
else {
echo $info['cd4atart'];
} ?>" style="width:100px; height:10px"/>        
</fieldset>
         </div>        
         <div style="display: table-cell; width:300px"> 

         </div>
         <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 345px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">19. Date initial adherence counselling completed</span>
</label>
<input type="date" name="dateinitadh" id="dateinitadh" value="<?php echo $info['dateinitadh']?>" style="width:120px; height:10px"/>
        </fieldset>
      </div>
        <div style="display: table-cell; width:350px"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">20. Date ART Started</span>
</label>
<input type="date" name="dateartstart" id="dateartstart" value="<?php echo $info['dateartstart']?>" style="width:120px; height:10px"/>
<input type="hidden" name="login_id" id="login_id" style="height:10px; width:120px" value="<?php echo $_GET['username']; ?>"
	</fieldset>
         </div>        
         <div style="display: table-cell; width:300px"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">21. First ART Regimen</span>
</label>
<input type="text" name="firstartregimen" id="firstartregimen" list="DrugName" value="<?php echo $info['firstartregimen']?>" style="width:120px; height:20px"/>
<datalist id="DrugName">
    <option value="..." label="Adult 1st Line Regimens:"></option>
    <option value="AZT/3TC/EFV">AZT/3TC/EFV</option>
    <option value="AZT/3TC/NVP">AZT/3TC/NVP</option>
    <option value="TDF/FTC/EFV">TDF/FTC/EFV</option>
    <option value="TDF/FTC/NVP">TDF/FTC/NVP</option>
    <option value="TDF/3TC/EFV">TDF/3TC/EFV</option>
    <option value="TDF/3TC/NVP">TDF/3TC/NVP</option>
    <option value="...">Adult Alternate 1st Line:</option>
    <option value="AZT/3TC/ABC">AZT/3TC/ABC</option>
    <option value="AZT/3TC/TDF">AZT/3TC/TDF</option>
    <option value="...">Adult 2nd Line Regimens:</option>
    <option value="TDF/FTC/LPV/r">TDF/FTC/LPV/r</option>
    <option value="TDF/3TC/LPV/r">TDF/3TC/LPV/r</option>
    <option value="TDF/FTC/ATV/r">TDF/FTC/ATV/r</option>
    <option value="TDF/3TC/ATV/r">TDF/3TC/ATV/r</option>
    <option value="AZT/3TC/LPV/r">AZT/3TC/LPV/r</option>
    <option value="AZT/3TC/ATV/r">AZT/3TC/ATV/r</option>
    <option value="...">Salvage Regimens:</option>
    <option value="DAR">Darunavir</option>
    <option value="RAL">Raltegravir</option>
    <option value="ETR">Etravirine</option>
    <option value="RTV">Ritonavir</option>
    <option value="...">Child 1st/Line Regimens</option>
    <option value="AZT/3TC/EFV">AZT/3TC/EFV</option>
    <option value="AZT/3TC/NVP">AZT/3TC/NVP</option>
    <option value="ABC/3TC/EFV">ABC/3TC/EFV</option>
    <option value="...">Child Alternate 1st Line:</option>
    <option value="ABC/3TC/NVP">ABC/3TC/NVP</option>
    <option value="AZT/3TC/ABC">AZT/3TC/ABC</option>
    <option value="d4T/3TC/NVP">d4T/3TC/NVP</option>
    <option value="...">Child 2nd/line Regimens</option>
    <option value="ABC/3TC/LPV/r">ABC/3TC/LPV/r</option>
    <option value="AZT/3TC/LPV/r">AZT/3TC/LPV/r</option>
    <option value="d4T/3TC/LPV/r">d4T/3TC/LPV/r</option>
    <option value="ddi/3TC/NVP">ddi/3TC/NVP</option>
    <option value="ABC/3TC/ddi">ABC/3TC/ddi</option>
</datalist>
        </fieldset>

         </div>
         <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">

        </fieldset>
         </div>
    </div>
</div>
<br />
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
<span class="small" style="font-weight:bold">24. BMI/MUAC</span>
</label>
<input type="text" name="bmi_muac" id="bmi_muac" value="<?php if ($info['bmi_muac']=='') {
echo $info['bmi_muac'];
}
else {
echo $info['bmi_muac'];
}?>" style="width:30px; height:10px"/>
        </fieldset>

         </div>
         <div style="display: table-cell; width:300px"> 
        <fieldset style="height:20px; border:none">

<label>
<span class="small" style="font-weight:bold">25. Functional Status</span>
</label>
<select name="patfunction" id="patfunction" style="width:120px; height:20px;">
	<option value="<?php echo $info['patfunction']?>"><?php echo $info['patfunction']?></option> 
    <option value="Working">Working</option> 
    <option value="Ambulant">Ambulant</option>
    <option value="Bed Ridden">Bed Ridden</option>
</select>
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
        <div style="width: 505px; display: table-cell;"> 
        <fieldset style="border:none">
<label>
<span class="checkbox-toolbar" style="font-weight:bold">26. Status</span>
</label>
<table>
<tr>
<td><input type="checkbox" name="other_art_start_stat[]" id="other_art_start_stat" value="Pregnant" <?php if (strpos($info['other_art_start_stat'],'Pregnant') !== false) { echo 'checked'; }?> >Pregnant</td>
<td><input type="checkbox" name="other_art_start_stat[]" id="other_art_start_stat" value="Breast Feeding" <?php if (strpos($info['other_art_start_stat'],'Breast Feeding') !== false) { echo 'checked'; }?> >Breast Feeding</td>
</tr>
</table>
        </fieldset>
      </div>
        <div style="display: table-cell; width:350px"> 
         </div>        
         <div style="display: table-cell; width:300px"> 

         </div>
         <div style="display: table-cell; width:300px"> 

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
        	var login_id = $('#login_id').val();
        	var url = 'updatecaredata.php';
        	$.post(url, 
        	query, 
        	function (response) {
        	alert ("Care Card Updated");
		window.location.href="./patsummary.php?pepid="+pepid+"&login_id="+login_id;    
			});

		return false;
	
	});
</script> 
</div>

</body>
</html>