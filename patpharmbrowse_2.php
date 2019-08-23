<script src="drugcodetranslate.js"></script>

<?php
$_SESSION=$_GET;

include './mandate_/lidh.php';

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


class MyClass{
    public function GetUserInformation(){
		$visitdate = $_GET['visitdate'];
		$visitdate;
$query = "SELECT p.pepid,b.pharmacyid, p.uniqueid,p.hospitalid,p.surname,p.othernames,ROUND(DATEDIFF(b.visitdate,p.dob)/365) AS age,p.state,p.sex,p.lga,p.facilityname,p.dob,p.town,p.addrlga,
p.phoneno,b.patienttype,b.visittype, b.visitdate,b.frequency,b.pharmregno,b.regduration1,b.regduration2,b.regduration3,b.regduration4,b.weight,b.height,b.pregyn,b.refillyn,b.subswitch,b.drugname1,b.drugdose1,b.drugno1,b.drugsource1,b.drugname2,b.drugdose2,b.drugno2,b.drugsource2,b.drugname3,b.drugdose3,b.drugno3,b.drugsource3,b.oidrug,b.oiqty,b.oiduration,b.tbdrug,b.tbqty,b.tbduration,b.otherdrugs,b.otherquantity,b.otherduration,b.otherdrugs1,b.otherquantity1,b.otherduration1,b.otherdrugs2,b.otherquantity2,b.otherduration2,b.orderedby,b.orderdate,b.dispensedby,b.pharmdispensedate,b.counseledby,b.counseldate,b.pickedupby,b.pickupdate,b.errorconsequence,b.errordrugname,b.errornature,b.errorrepdate, b.nextapptdate
FROM patient p JOIN pharmacy b
ON (p.pepid=b.pepid)
WHERE p.pepid = '$_SESSION[pepid]' and b.visitdate='$visitdate'";

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
#stylized .check-toolbar input[type="checkbox"] {
font-weight:normal;
text-align:right;
float:left;
padding-right:0px;
width:20px;
}
#stylized .check-toolbar label {
display:block;
font-weight:normal;
text-align:right;
float:left;
padding-right:0px;
position:absolute;
margin:1px 0 0px 10px;
}
#stylized .check-toolbar input{
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
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">Pharmacy Form&nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>
<a href="./welcome.php?username=<?php echo $_GET['username'] ?>" style="font-weight:bold; font-size:14px; color:#2A1FFF">[MAIN MENU]</a> &nbsp;&nbsp;&nbsp;
<?php  echo '<a style="color:blue" href="patpharmview.php?pepid=' . $info['pepid'] . '&username='.$_GET['username'].'">[BACK]</a>'; ?>
</div>
<body onLoad="bmicalc()">
<div id="stylized" class="myform">
<form class="well-home span6 form-horizontal" name="form" onkeypress="return event.keyCode != 13;" id="form1" method="POST" action="pharmupdate.php">
<div style="width: 100%; display: table;">
    <div style="display: table-row" align="left">
        <div style="width: 550px; display: table-cell;"> 
        <fieldset style="border:none">
<fieldset>
<label></label>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="patienttype" value="ART" <?php if ($info['patienttype']=='ART') { echo 'checked'; } ?> />ART</td>
<td><input type="radio" name="patienttype" value="Non-ART" <?php if ($info['patienttype']=='Non-ART') { echo 'checked'; } ?>/>Non-ART</td>
<td><input type="radio" name="patienttype" value="Occup PEP" <?php if ($info['patienttype']=='Occup PEP') { echo 'checked'; } ?>/>Occup PEP</td>
<td><input type="radio" name="patienttype" value="Non-Occup PEP" <?php if ($info['patienttype']=='Non-Occup PEP') { echo 'checked'; } ?>/>Non-Occup PEP</td>
<td><input type="radio" name="patienttype" value="PMTCT" <?php if ($info['patienttype']=='PMTCT') { echo 'checked'; } ?>/>PMTCT</td>
<td><input type="radio" name="patienttype" value="HIV-Exposed Infant"  <?php if ($info['patienttype']=='HIV-Exposed Infant') { echo 'checked'; } ?> />EID</td>
<td><input type="radio" name="patienttype" value="PrEP"  <?php if ($info['patienttype']=='PrEP') { echo 'checked'; } ?> />PrEP</td>
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
<td><input type="radio" name="visittype" value="initial" <?php if ($info['visittype']=='initial') { echo 'checked'; } ?>/>Initial Visit</td>
<td><input type="radio" name="visittype" value="Follow-Up" <?php if ($info['visittype']=='Follow-Up') { echo 'checked'; } ?> />Followup Visit</td>
</tr>
</table>
</div>
</fieldset>
<label>
<span class="small" style="font-weight:bold; font-size:9px">1. Visit Date</span>
</label>
<input type="date" name="visitdate" id="visitdate" required value="<?php echo $info['visitdate']?>" style="width:140px; height:20px"/>
</fieldset>
         </div>  
     
    </div>
</div>
<div class="radio-toolbar">
<table>
<tr>
<td>
<input type="text" name="surname" id="surname" readonly value="<?php echo $info['surname']?>" style="width:120px; height:20px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br /> <label for="surname">Surname</label></td> 
<td>
<input type="text" name="othernames" id="othernames" readonly value="<?php echo $info['othernames']?>" style="width:120px; height:20px"/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br /> <label for="othernames">Other names</label></td>
<td>
<input type="text" name="age" id="age" readonly value="<?php echo $info['age']?>" style="width:70px; height:20px;" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br /> <label for="age">Age</label></td>
<td><input type="radio" name="sex" id="sexmale" value="male" <?php if ($info['sex']=='male') { echo 'checked'; } ?> disabled="disabled" onchange="anccheck()" />Male
<br /> <label for="sex">Sex</label></td>
<td><input type="radio" name="sex" id="sexfemale" value="Female" <?php if ($info['sex']=='Female') { echo 'checked'; } ?> disabled="disabled" onchange="anccheck()"/>Female</td>
</tr>
</table>
</div>
<input type="hidden" name="pepid" id="pepid" readonly value="<?php echo $info['pepid']?>" style="width:120px; height:20px" />
<input type="hidden" name="pharmacyid" id="pharmacyid" readonly value="<?php echo $info['pharmacyid']?>" style="width:120px; height:20px" />
<br />
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">2. State</span>
</label>
<input type="text" name="state" id="state" value="<?php echo $info['state']?>" style="width:120px; height:20px;" readonly/>

      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">3. LGA</span>
</label>
<input type="text" name="addrlga" id="addrlga" value="<?php echo $info['addrlga']?>" style="width:120px; height:20px;" readonly/>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">4. Facility Name</span>
</label>
<input type="text" name="facilityname" id="facilityname" value="<?php echo $info['facilityname']?>" style="width:180px;height:20px;" readonly/>
       
        </fieldset>
         </div>
    </div>
</div>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">5. Unique ID</span>
</label>
<input type="text" name="uniqueid" id="uniqueid" value="<?php echo $info['uniqueid']?>" style="width:120px;height:20px;" readonly/>

      </fieldset>
         </div>
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold"> Patient ID</span>
</label>
<input type="text" name="uniqueid" id="uniqueid" value="<?php echo $info['pepid']?>" style="width:120px;height:20px; font-weight:bold" readonly/>

      </fieldset>
         </div>
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">6. Hospital No</span>
</label>
<input type="text" name="hospitalno" id="hospitalno" value="<?php echo $info['hospitalid']?>" style="width:120px;height:20px;" readonly />

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
<input type="text" name="pharmregno" id="pharmregno" value="<?php echo $info['pharmregno']?>" style="width:110px;height:20px;"/>

      </fieldset>
         </div>
        <div style="display: table-cell; width:200px"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">8. Weight(Kg)</span>
</label>
<input type="text" name="weight" id="weight" value="<?php echo $info['weight']?>" style="width:40px;height:20px;" />

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
        
<label>
<span class="small" style="font-weight:bold">9. Height(m)</span>
</label>
<input type="text" name="height" id="height" value="<?php echo $info['height']?>" style="width:40px;height:20px;" />

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
<td><input type="radio" name="pregyn" value="Yes"  <?php if ($info['pregyn']=='Yes') { echo 'checked'; } ?>/>Yes</td>
<td><input type="radio" name="pregyn" value="No" <?php if ($info['pregyn']=='No') { echo 'checked'; } ?> />No</td>
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
<td><input type="radio" name="refillyn" value="Yes" <?php if ($info['refillyn']=='Yes') { echo 'checked'; } ?> />Yes</td>
<td><input type="radio" name="refillyn" value="No" <?php if ($info['refillyn']=='No') { echo 'checked'; } ?> />No</td>
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
<td><input type="radio" name="subswitch" value="Substitution"  <?php if ($info['subswitch']=='Substitution') { echo 'checked'; } ?>/>Substitution</td>
<td><input type="radio" name="subswitch" value="Switch"  <?php if ($info['subswitch']=='Switch') { echo 'checked'; } ?>/>Switch</td>
</tr>
</table>
</div>



        </fieldset>
         </div>
    </div>
</div>
</fieldset>



<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 200px; display: table-cell;"> 
        <fieldset style="border:none">
<div class="radio-toolbar"> 
<table>
<tr>
<th>Adult ART</th>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/EFV" <?php if ($info['drugname1']=='TDF/3TC/EFV') { echo 'checked'; } ?> >Tenofovir/Lamivudine/Efavi</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/EFV" <?php if ($info['drugname1']=='TDF/3TC/EFV') { echo 'checked'; } ?> >Tenofovir/Lamivudine/Efavi</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/NVP" <?php if ($info['drugname1']=='3TC/AZT/NVP') { echo 'checked'; } ?> >Lamivudine/Zidovudi/Nevi</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/NVP" <?php if ($info['drugname1']=='TDF/3TC') { echo 'checked'; } ?> >Tenofovir/Lamivudine</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/NVP" <?php if ($info['drugname1']=='3TC/AZT') { echo 'checked'; } ?> >Lamivudine/Zidovudine</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="TDF/3TC/DTG" <?php if ($info['drugname1']=='ABC/3TC') { echo 'checked'; } ?> >Abacavir/Lamivudine</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="TDF/3TC/EFV400" <?php if ($info['drugname1']=='EFV') { echo 'checked'; } ?> >Efavirenz</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="TDF/3TC/EFV400" <?php if ($info['drugname1']=='AZT') { echo 'checked'; } ?> >Zidovudine</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="TDF/3TC/EFV400" <?php if ($info['drugname1']=='ATV/r') { echo 'checked'; } ?> >Atazanivir/Ritonavir</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="TDF/3TC/EFV400" <?php if ($info['drugname1']=='LPV/r') { echo 'checked'; } ?> >Lopinavir/Ritonavir</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="TDF/3TC/EFV400" <?php if ($info['drugname1']=='DRV') { echo 'checked'; } ?> >Darunavir</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="TDF/3TC/EFV400" <?php if ($info['drugname1']=='RTV') { echo 'checked'; } ?> >Ritonavir</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="TDF/3TC/EFV400" <?php if ($info['drugname1']=='DRV/r') { echo 'checked'; } ?> >Darunavir/Ritonavir</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="TDF/3TC/EFV400" <?php if ($info['drugname1']=='DTC') { echo 'checked'; } ?> >Dolutegravir</td>
</tr>
<tr>
<th>Pediatric ART</th>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/EFV" <?php if ($info['drugname1']=='3TC/ZDV/NVP') { echo 'checked'; } ?> >Tenofovir/Lamivudine/Efavi</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/EFV" <?php if ($info['drugname1']=='ABC/3TC') { echo 'checked'; } ?> >Abacavir/Lamivudine</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/EFV" <?php if ($info['drugname1']=='3TC/AZT') { echo 'checked'; } ?> >Lamivudine/Zidovudine</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/EFV" <?php if ($info['drugname1']=='EFV') { echo 'checked'; } ?> >Efavirenz</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/EFV" <?php if ($info['drugname1']=='NVP') { echo 'checked'; } ?> >Nevirapine</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/EFV" <?php if ($info['drugname1']=='ABC') { echo 'checked'; } ?> >Abacavir</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/EFV" <?php if ($info['drugname1']=='LPV/r') { echo 'checked'; } ?> >Lopinavir/Ritonavir</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/EFV" <?php if ($info['drugname1']=='LPV/r') { echo 'checked'; } ?> >Lopinavir/Ritonavir</td>
</tr>
<tr>
<td><input type="radio" name="drugname1" value="AZT/3TC/EFV" <?php if ($info['drugname1']=='LPV/r') { echo 'checked'; } ?> >Lopinavir/Ritonavir</td>
</tr>
</table>        
</div>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
<div class="radio-toolbar"> 
<table>
<th>Strength</th>
<tr>
<td><input type="radio" name="drugdose1" value="300/300/600mg" <?php if ($info['drugname1']=='300/300/600mg') { echo 'checked'; } ?> >300/300/600mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="300/300/400mg" <?php if ($info['drugname1']=='300/300/400mg') { echo 'checked'; } ?> >300/300/400mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="150/300/200mg" <?php if ($info['drugname1']=='150/300/200mg') { echo 'checked'; } ?> >150/300/200mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="300/300mg" <?php if ($info['drugname1']=='300/300mg') { echo 'checked'; } ?> >300/300mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="300/150mg" <?php if ($info['drugname1']=='300/150mg') { echo 'checked'; } ?> >300/150mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="600/300mg" <?php if ($info['drugname1']=='600/300mg') { echo 'checked'; } ?> >600/300mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="600mg" <?php if ($info['drugname1']=='600mg') { echo 'checked'; } ?> >600mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="300mg" <?php if ($info['drugname1']=='300mg') { echo 'checked'; } ?> >300mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="300/100mg" <?php if ($info['drugname1']=='300/100mg') { echo 'checked'; } ?> >300/100mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="200/50mg" <?php if ($info['drugname1']=='200/50mg') { echo 'checked'; } ?> >200/50mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="400mg,600mg" <?php if ($info['drugname1']=='400mg,600mg') { echo 'checked'; } ?> >400mg,600mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="50mg,100mg" <?php if ($info['drugname1']=='50mg,100mg') { echo 'checked'; } ?> >50mg,100mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="400/50mg" <?php if ($info['drugname1']=='400/50mg') { echo 'checked'; } ?> >400/50mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="50mg" <?php if ($info['drugname1']=='50mg') { echo 'checked'; } ?> >50mg</td>
</tr>
<tr>
<th>Strength</th>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="30/60/50mg" <?php if ($info['drugname1']=='30/60/50mg') { echo 'checked'; } ?> >30/60/50mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="60/30mg" <?php if ($info['drugname1']=='60/30mg') { echo 'checked'; } ?> >60/30mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="60/30mg" <?php if ($info['drugname1']=='60/30mg') { echo 'checked'; } ?> >60/30mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="200mg" <?php if ($info['drugname1']=='200mg') { echo 'checked'; } ?> >200mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="50mg/5ml" <?php if ($info['drugname1']=='50mg/5ml') { echo 'checked'; } ?> >50mg/5ml</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="60mg" <?php if ($info['drugname1']=='60mg') { echo 'checked'; } ?> >60mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="300/300/600mg" <?php if ($info['drugname1']=='100/25mg') { echo 'checked'; } ?> >100/25mg</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="300/300/600mg" <?php if ($info['drugname1']=='80/20mg/ml') { echo 'checked'; } ?> >80/20mg/ml</td>
</tr>
<tr>
<td><input type="radio" name="drugdose1" value="300/300/600mg" <?php if ($info['drugname1']=='40/10mg') { echo 'checked'; } ?> >40/10mg</td>
</tr>

</table>        
</div>        

        </fieldset>
         </div>       
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
<div class="radio-toolbar"> 
<table>
<tr>
<th>Frequency</th>
</tr>
<tr>
<td><input type="radio" name="frequency" value="OD" >OD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="OD" >OD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="BD" >BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="OD" >OD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="BD" >BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="OD" >OD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="OD" >OD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="BD" >BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="OD" >OD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="2 BD" >2 BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="OD/BD" >OD/BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="OD/BD" >OD/BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="BD" >BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="OD/BD" >OD/BD</td>
</tr>
<tr>
<th>Frequency</th>
</tr>
<tr>
<td><input type="radio" name="frequency" value="BD" >BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="OD/BD" >OD/BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="BD" >BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="OD" >OD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="BD" >BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="OD/BD" >OD/BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="BD" >BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="BD" >BD</td>
</tr>
<tr>
<td><input type="radio" name="frequency" value="BD" >BD</td>
</tr>

</table>        
</div>        

        </fieldset>
         </div>       
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
<table>
<div class="radio-toolbar"> 
<tr>Duration</tr> <br />
<tr><td><select name="regduration1" id="regduration1" style="height:30px; width:80px">
    <option value="">MTHS</option> 
    <option value="0.25">1 WK</option> 
    <option value="0.5">2 WKS</option>
    <option value="0.75">3 WKS</option>
    <option value="1">1 MTH</option>
	<option value="2">2 MTHS</option>
	<option value="3">3 MTHS</option>
	<option value="4">4 MTHS</option>
	<option value="5">5 MTHS</option>
	<option value="6">6 MTHS</option>
</select></td></tr></div> 
<tr>
<th>QTY Prescribed</th>
</tr>
<tr>
<td><input type="text" name="quantitypres" id="quantitypres" style="width:60px;height:30px;" onChange="bmicalc()" />
</td>
</tr>
<tr>
<th>QTY Dispensed</th>
</tr>
<tr>
<td><input type="text" name="quantitydisp" id="quantitydisp" style="width:60px;height:30px;" onChange="bmicalc()" />
</td>
</tr>
</table>        
       

        </fieldset>
         </div>       
    </div>
</div>

 </fieldset>


<fieldset>
<legend style="font-weight:bold; font-size:11px">Drugs for OI Prophylaxis</legend>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 200px; display: table-cell;"> 
        <fieldset style="border:none">
<div  class="check-toolbar">
<tr>
<td><input type="checkbox" name="oidrug[]" id="oidrug" value="CTX" >Cotrimozaxole</td><br />
<td><input type="checkbox" name="oidrug[]" id="oidrug" value="Fluconazole" >Fluconazole</td><br />
<td><input type="checkbox" name="oidrug[]" id="oidrug" value="Isoniacid">Isoniacid </td><br />
<td><input type="checkbox" name="oidrug[]" id="oidrug" value="Nystatin">Nystatin</td><br />
</tr>
</table>
</div>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
<div  class="check-toolbar">
<tr>
<td><input type="checkbox" name="oiqty[]" id="oiqty" value="120mg" >120mg</td><br />
<td><input type="checkbox" name="oiqty[]" id="oiqty" value="200mg" >200mg</td><br />
<td><input type="checkbox" name="oiqty[]" id="oiqty" value="300mg">300mg </td><br />
<td><input type="checkbox" name="oiqty[]" id="oiqty" value="480mg">480mg</td><br />
<td><input type="checkbox" name="oiqty[]" id="oiqty" value="960mg">960mg</td><br />
</tr>
</table>
</div>
         </div>       
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
<div  class="check-toolbar">
<tr>
<td><input type="checkbox" name="oiduration[]" id="oiduration" value="1 Month" >1 Month</td><br />
<td><input type="checkbox" name="oiduration[]" id="oiduration" value="2 Months" >2 Months</td><br />
<td><input type="checkbox" name="oiduration[]" id="oiduration" value="3 Months">3 Months </td><br />
<td><input type="checkbox" name="oiduration[]" id="oiduration" value="4 Months">4 Months</td><br />
<td><input type="checkbox" name="oiduration[]" id="oiduration" value="5 Months">5 Months</td><br />
</tr>
</table>
</div>
 </fieldset>
         </div>       
</div>
</div>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Anti TB Drugs</legend>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 200px; display: table-cell;"> 
        <fieldset style="border:none">
<div  class="check-toolbar">
<tr>
<td><input type="checkbox" name="tbdrug[]" id="tbdrug" value="RHZE/RH" >RHZE/RH</td><br />
<td><input type="checkbox" name="tbdrug[]" id="tbdrug" value="Rifabutin" >Rifabutin</td><br />
<td><input type="checkbox" name="tbdrug[]" id="tbdrug" value="Others" >Others</td><br />
</tr>
</table>
<input type="text" name="tbdrug[]" id="tbdrug" value="" style="width:120px;height:30px;">
</div>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
<div  class="check-toolbar">
<tr>
<td><input type="checkbox" name="tbqty[]" id="tbqty" value="Kit" >Kit</td><br />
<td><input type="checkbox" name="tbqty[]" id="tbqty" value="150mg" >150mg</td><br />
<td><input type="checkbox" name="tbqty[]" id="tbqty" value="">Others </td><br />
</tr>
</table>
<input type="text" name="tbqty[]" id="tbdrug" value="" style="width:120px;height:30px;">

</div>
         </div>       
        <div style="display: table-cell;"> 
        <fieldset style="border:none">
        
<div  class="check-toolbar">
<tr>
<td><input type="checkbox" name="tbduration[]" id="tbduration" value="OD" >OD</td><br />
<td><input type="checkbox" name="tbduration[]" id="tbduration" value="3ce/Week" >3ce/Week</td><br />
<td><input type="checkbox" name="tbduration[]" id="tbduration" value="">Others</td><br />
</tr>
</table>
<input type="text" name="tbduration[]" id="tbdrug" value="" style="width:120px;height:30px;">

</div>
 </fieldset>
         </div>       
</div>
</div>
</fieldset><fieldset>
<legend style="font-weight:bold; font-size:11px">Drugs for other OIs or non-HIV related conditions </legend>
<table>
<tr>
<td><label>Drug Name
</label>
<input type="text" name="otherdrugs" id="otherdrugs" value="<?php echo $info['otherdrugs']?>"  style="width:120px; height:20px" /></td>
<td><label>Qty prescribed
</label>
<input type="text" name="otherquantity" id="otherquantity" value="<?php echo $info['otherquantity']?>"  style="width:120px; height:20px"/></td>
<td><label>Qty dispensed
</label>
<input type="text" name="otherduration" id="otherduration" value="<?php echo $info['otherduration']?>"  style="width:120px; height:20px"/></td>
</tr>
<tr>
<td><label>Drug Name
</label>
<input type="text" name="otherdrugs1" id="otherdrugs1" value="<?php echo $info['otherdrugs1']?>"  style="width:120px; height:20px" /></td>
<td><label>Qty prescribed
</label>
<input type="text" name="otherquantity1" id="otherquantity1" value="<?php echo $info['otherquantity1']?>"  style="width:120px; height:20px"/></td>
<td><label>Qty dispensed
</label>
<input type="text" name="otherduration1" id="otherduration1" value="<?php echo $info['otherduration1']?>"  style="width:120px; height:20px"/></td>
</tr>
<tr>
<td><label>Drug Name
</label>
<input type="text" name="otherdrugs2" id="otherdrugs2" value="<?php echo $info['otherdrugs2']?>"  style="width:120px; height:20px" /></td>
<td><label>Qty prescribed
</label>
<input type="text" name="otherquantity2" id="otherquantity2" value="<?php echo $info['otherquantity2']?>"  style="width:120px; height:20px"/></td>
<td><label>Qty dispensed
</label>
<input type="text" name="otherduration2" id="otherduration2" value="<?php echo $info['otherduration2']?>"  style="width:120px; height:20px"/></td>
</tr>
</table>
</fieldset>
</fieldset>
<fieldset>
<table>
<tr>
<td><label>Ordered By
</label>
<input type="text" name="orderedby" id="orderedby" value="<?php echo $info['orderedby']?>"  style="width:120px; height:20px"/></td>
<td><label>Order Date
</label>
<input type="date" name="orderdate" id="orderdate" value="<?php echo $info['orderdate']?>"  style="width:130px; height:20px"/></td>
<td><label>Dispensed By
</label>
<input type="text" name="dispensedby" id="dispensedby" value="<?php echo $info['dispensedby']?>" style="width:120px; height:20px"/></td>
<td><label>Dispense Date
</label>
<input type="date" name="pharmdispensedate" id="pharmdispensedate" value="<?php echo $info['pharmdispensedate']?>"  style="width:130px; height:20px"/></td>
</tr>
<tr>
<td><label>Picked Up By
</label>
<input type="text" name="pickedupby" id="pickedupby" value="<?php echo $info['pickedupby']?>"  style="width:120px; height:20px"/></td>
<td><label>Pickup Date
</label>
<input type="date" name="pickupdate" id="pickupdate" value="<?php echo $info['pickupdate']?>"  style="width:130px; height:20px"/></td>
<td><label>Counseled By
</label>
<input type="text" name="counseledby" id="counseledby" value="<?php echo $info['counseledby']?>"  style="width:120px; height:20px"/></td>
<td><label>Counsel Date
</label>
<input type="date" name="counseldate" id="counseldate" value="<?php echo $info['counseldate']?>"  style="width:130px; height:20px"/></td>
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
<input type="text" name="errordrugname" id="errordrugname" value="<?php echo $info['errordrugname']?>" style="width:130px; height:20px"/>
</td>
<td>
<label>Nature of Error(s)
</label>
<input type="text" name="errornature" id="errornature" value="<?php echo $info['errornature']?>" style="width:130px; height:20px"/>
</td>
<td>
<label>Consequence(s) of Error
</label>
<input type="text" name="errorconsequence" id="errorconsequence" value="<?php echo $info['errorconsequence']?>" style="width:130px; height:20px"/>
</td>
</tr>
<tr>
<td>
<label>Report Date
</label>
<input type="date" name="errorrepdate" id="errorrepdate" value="<?php echo $info['errorrepdate']?>" style="width:130px; height:20px"/>
<input type="hidden" name="login_id" id="login_id" value="<?php echo $_GET['username']; ?>" style="width:130px; height:20px"/>
</td>
</tr>
</table>
</fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 300px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label><span class="small" style="font-weight:bold">Next appointment date</span></label>
<span class="small"></span>
</label>
<input type="date" name="nextapptdate" id="nextapptdate" value="<?php echo $info['nextapptdate']?>" required style="width:140px; height:20px;"/>
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
<button type="submit" id="submit">UPDATE</button>
<div class="spacer"></div>
</form>
 </div>

</body>
</html>

