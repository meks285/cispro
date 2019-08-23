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

table
{
	width:100%;
border-collapse:collapse;
}
 
th
{
	font: bold 12px "Trebuchet MS", Verdana, Arial, Helvetica,
	sans-serif;
	color: #6D929B;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:50px;
border:1px solid black;
}
td {
	font: italic 11px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
}


</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CiS Pro - Discontinuation</title>
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
    public function GetUserInformation(){include './mandate_/lidh.php';
$query = "SELECT pepid,drugallergies, uniqueid,hospitalid,surname,othernames,sex,age,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate,hivposdate, hivmode,careentrypoint,priorart,dateeligible,whyeligible,dateinitadh,datetransfin,facilitytransf,firstartregimen,dateartstart,clinicalstageart,peweight,peheight,lastcd4,lastcd4date,testlocation,patfunction,patienttransout,patienttransoutdate,facilityrefto,patientdied,dateofdeath,sourceofdeathinf,causeofdeath
FROM patient WHERE pepid = '$_SESSION[pepid]'"
;
        $result = mysqli_query($con,$query);
        $info = mysqli_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysqli_error($con);
?>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">DISCONTINUATION & INTERRUPTIONS&nbsp;&nbsp;&nbsp; <?php echo $info['pepid']?></h1>
<body >
<div class='sidebar1'>
<a href="./welcome.php?username=<?php echo $_GET['username']; ?>" style="font-weight:bold; font-size:14px; color:#2A1FFF">[MAIN MENU]</a> &nbsp; &nbsp; &nbsp;
<a href="javascript:history.go(-1)">[BACK]</a>
</div>
<div id="stylized" class="myform">
<form id="formId" name="form" onkeypress="return event.keyCode != 13;" method="POST">
<input type="hidden" name="pepid" id="pepid" value="<?php echo $info['pepid']?>"/>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Discontinuation</legend>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 150px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label><span class="small" style="font-weight:bold">39. Patient transfer out</span></label>
<table>
<tr>
<td><input type="radio" name="patienttransout" id="patienttransoutart" value="ART" <?php if ($info['patienttransout']=='ART') { echo 'checked'; } ?> />ART</td>
<td><input type="radio" name="patienttransout" id="patienttransoutpreart" value="PRE-ART" <?php if ($info['patienttransout']=='PRE-ART') { echo 'checked'; } ?> />PRE-ART</td>
</tr>
</table>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
       <label>
<span class="small" style="font-weight:bold">Date</span>
</label>
<input type="date" name="patienttransoutdate" id="patienttransoutdate" value="<?php echo $info['patienttransoutdate']?>" style="width:120px; height:10px;"/>

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
       <label>
<span class="small" style="font-weight:bold">40. Facility referred to</span>
</label>
<input type="text" name="facilityrefto" id="facilityrefto" value="<?php echo $info['facilityrefto']?>" style="width:120px; height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 150px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
     
<label><span class="small" style="font-weight:bold">41. Patient has died</span></label>
<table>
<tr>
<td><input type="radio" name="patientdied" id="patientdiedart" value="ART" <?php if ($info['patientdied']=='ART') { echo 'checked'; } ?> />ART</td>
<td><input type="radio" name="patientdied" id="patientdiedpreart" value="PRE-ART" <?php if ($info['patientdied']=='PRE-ART') { echo 'checked'; } ?> />PRE-ART</td>
</tr>
</table>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
       <label>
<span class="small" style="font-weight:bold">Date of death</span>
</label>
<input type="date" name="dateofdeath" id="dateofdeath" value="<?php echo $info['dateofdeath']?>" style="width:120px; height:10px;"/>

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
       <label>
<span class="small" style="font-weight:bold">42. Source of death info</span>
</label>
<input type="text" name="sourceofdeathinf" id="sourceofdeathinf" value="<?php echo $info['sourceofdeathinf']?>" style="width:120px; height:10px;"/>

        </fieldset>
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 210px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
 
<label><span class="small" style="font-weight:bold">43. Cause of death, HIV related?</span></label>
<table>
<tr>
<td><input type="radio" name="causeofdeath" id="causeofdeathyes" value="Yes" <?php if ($info['causeofdeath']=='Yes') { echo 'checked'; } ?> />Yes</td>
<td><input type="radio" name="causeofdeath" id="causeofdeathno" value="No" <?php if ($info['causeofdeath']=='No') { echo 'checked'; } ?> />No</td>
<td><input type="radio" name="causeofdeath" id="causeofdeathunk" value="Unknown" <?php if ($info['causeofdeath']=='Unknown') { echo 'checked'; } ?> />Unknown</td>
</tr>
</table>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
		<label><span class="small" style="font-weight:bold">44. Drug Allergies</span></label>
        <textarea rows="3" cols="45" name="drugallergies" id="drugallergies">
		<?php echo $info['drugallergies']?>
		</textarea>

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
<legend style="font-weight:bold; font-size:11px">Interruption</legend>
<?php 
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT interruptstatus, interrdate,reason,restartdate from interruptions  WHERE pepid = '$_SESSION[pepid]'");

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th>Stopped/Lost</th>
<th>Date</th>
<th>Reason</th>
<th>Restart Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['interruptstatus'] . "</td>";
  echo "<td>" . $row['interrdate'] . "</td>";
  echo "<td>" . $row['reason'] . "</td>";
  echo "<td>" . $row['restartdate'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br>";

echo "Records shown: ".$num;

mysqli_close($con);

session_write_close();
?>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 150px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label><span class="small" style="font-weight:bold">38. Stopped/Lost</span></label>
<table>
<tr>
<td><input type="radio" name="interruptstatus" id="interruptstatusstp" value="Stopped" />Stopped</td>
<td><input type="radio" name="interruptstatus" id="interruptstatuslst" value="Lost" />Lost</td>
</tr>
</table>
      </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
       <label>
<span class="small" style="font-weight:bold">Date</span>
</label>
<input type="date" name="interrdate" id="interrdate" style="width:120px; height:10px;"/>

        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
<span class="small" style="font-weight:bold">Why</span>
</label>
<select name="reason" id="reason" style="width:120px; height:20px; float:left">
	<option value="">Select</option> 
    <option value="Toxicity/side effects">Toxicity/side effects</option> 
    <option value="Pregnancy">Pregnancy</option>
    <option value="Treatment failure">Treatment failure</option>
    <option value="Poor adherence">Poor adherence</option>
    <option value="Illness, hospitalization">Illness, hospitalization</option>
    <option value="Drug out of stock">Drug out of stock</option>
    <option value="Patient lacks finances">Patient lacks finances</option>
    <option value="Other patient decision">Other patient decision</option>
    <option value="Planned Rx interruption">Planned Rx interruption</option>
    <option value="Other">Other</option>
</select>
        </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
       <label>
<span class="small" style="font-weight:bold">Restart Date</span>
</label>
<input type="date" name="restartdate" id="restartdate" style="width:120px; height:10px;"/>

        </fieldset>
         </div>

    </div>
</div>
<br />


</fieldset>
<button type="submit" id="submit" >UPDATE</button>
<div class="spacer"></div>

</form>
<script src="jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$('#submit').click( function() {
			var query = $('#formId').serialize();
			var pepid = $('#pepid').val();
        	var url = 'updatedis.php';
        	$.post(url, 
        	query, 
        	function (response) {
        	alert ("Patient Data Updated");
			});
			if (pepid.length==10){
		window.location.href="./patsummary.php?pepid="+pepid+"&login_id="+login_id;
			}
			else
			{
		window.location.href="./patpedsummary.php?pepid="+pepid+"&login_id="+login_id;
				}
		
		return false;
	
	});
</script> 
</div>

</body>
</html>