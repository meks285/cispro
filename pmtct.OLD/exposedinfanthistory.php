<?php

include_once("db_conx.php");


class MyClass{
    public function GetUserInformation(){
		global $db;
$query = "SELECT `visitdate`, `pmtct_id`, `infant_eid_id`, `visit_date`, `infant_name`, `infant_date_of_birth`, `age_of_infant_at_visit`, `age_of_infant_weeks_month`, `sex`, `delivery_mode`, `delivery_vaginal_tear`, `delivery_vaginal_tear_age`, `delivery_vaginal_tear_weight`, `delivery_vaginal_tear_duration`, `zbabies_hiv_serostatus`, `zbabies_arv_history`, `ctx_prophylasis`, `six_week_eid_done`, `six_week_eid_done_date`, `sample_collected`, `sample_collected_date`, `sample_sent`, `sample_sent_date`, `eid_result`, `eid_result_date`, `eigthteen_rapidtest_done`, `eigthteen_rapidtest_done_date`, `result`, `ei_outcome_discharged`, `ei_outcome_discharged_date`, `ei_outcome_linkedtocare`, `ei_outcome_linkedtocare_ped_pepid`, `ei_outcome_referred`, `ei_outcome_referred_facilityname`, `other_comments`, `infant_sex`, `status_of_birth`, `status_of_birth_alive_weight`, `status_of_birth_alive_lenght`, `status_of_birth_alive_head_circumf`, `status_of_birth_alive_gest_age`, `status_of_birth_alive_apgar`, `syrup_nvp`, `feeding_method_chosen` FROM `exposed_infant`";

        $stmt = $db->query($query);
        $info = $stmt->fetch(PDO::FETCH_ASSOC);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
?>
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
padding:14px;
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
font-weight: bold;
color: #09C;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;

border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
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
background:#ebf4fb;
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
input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
display:block;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
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

  .btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #47a447;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  background-image: none;
  
}
 #status2{
	 padding:10px;
	 background-color:#21D54C;
	 color:#FFFFFF;
	 font:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	 font-size:18px;
	 font-weight:bold;
 }
 #error{
	 padding:10px;
	 background-color:#EF2323;
	 color:#FFFFFF;
	 font:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	 font-size:18px;
	 font-weight:bold;
 }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PMTCT EMR</title>
</head>
<h1 style="font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #FFFFFF;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px 355681;    border-radius: 0 10px 0 10px;    background: #355681;">PMTCT EMR - EXPOSED INFANT &nbsp;&nbsp;&nbsp;</h1>
<body>

<fieldset>
<legend style="font-weight:bold; font-size:11px">ACTIONS</legend>
<a href="exposedinfant.php?pmtctid=<?php echo $_GET['pmtctid']; ?>&username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px"><< GO BACK</a>

</fieldset>
<?php 
if(isset($_GET['pmtctid']) && $_GET['pmtctid'] !=""){
			$pmtctid = preg_replace('#[^a-z0-9-]#i', '', $_GET['pmtctid']);
			
		}
$pregnancy_history_tpals='';
$result = "SELECT `id`,`visitdate`, `pmtct_id`, `infant_eid_id`, `visit_date`, `infant_name`, `infant_date_of_birth`, `age_of_infant_at_visit`, `age_of_infant_weeks_month`, `sex`, `delivery_mode`, `delivery_vaginal_tear`, `delivery_vaginal_tear_age`, `delivery_vaginal_tear_weight`, `delivery_vaginal_tear_duration`, `zbabies_hiv_serostatus`, `zbabies_arv_history`, `ctx_prophylasis`, `six_week_eid_done`, `six_week_eid_done_date`, `sample_collected`, `sample_collected_date`, `sample_sent`, `sample_sent_date`, `eid_result`, `eid_result_date`, `eigthteen_rapidtest_done`, `eigthteen_rapidtest_done_date`, `result`, `ei_outcome_discharged`, `ei_outcome_discharged_date`, `ei_outcome_linkedtocare`, `ei_outcome_linkedtocare_ped_pepid`, `ei_outcome_referred`, `ei_outcome_referred_facilityname`, `other_comments`, `infant_sex`, `status_of_birth`, `status_of_birth_alive_weight`, `status_of_birth_alive_lenght`, `status_of_birth_alive_head_circumf`, `status_of_birth_alive_gest_age`, `status_of_birth_alive_apgar`, `syrup_nvp`, `feeding_method_chosen` FROM `exposed_infant` where `pmtct_id` = '$pmtctid'";
$stmt = $db->query($result);
$num=$stmt->rowCount();

echo "<table class=\"table table-bordered table-hover\" rules=\"all\" border='1'>
<tr>
<th></th>
<th>VISIT DATE</th>
<th>PMTCT ID</th>
<th>Infant's EID ID</th>
<th>Visit Date</th>
<th>Infant’s Name</th>
<th>Infant’s date of birth</th>
<th>Age of infant at visit</th>
<th>Sex</th>
<th>Delivery</th>
<th>Z-BABIES only</th>
<th>CTX Prophylaxis (>6 weeks)</th>
<th>6 week EID done</th>
<th>Sample Collected</th>
<th>Sample Sent</th>
<th>EID Result</th>
<th>18 months Rapid test done</th>
<th>Result</th>
<th>EI Outcome</th>
<th>Other Comments (tracking, referral etc)</th>
<th>INFANT STATUS AT BIRTH sex</th>
<th>Status at birth</th>
<th>Prophylaxis given to infant</th>
<th>Feeding Method Chosen</th>
</tr>";
if($num > 0){
while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
	  if($row['delivery_vaginal_tear_age'] != "" ){
		  $delivery_vaginal_tear_age = "<br/> Gestational Age at Birth: ".$row['delivery_vaginal_tear_age']."weeks";
	  }else {
		  $delivery_vaginal_tear_age ='';
	  }
	  if($row['delivery_vaginal_tear_weight'] != "" ){
		  $delivery_vaginal_tear_weight = "<br/> Birth weight: ".$row['delivery_vaginal_tear_weight']."grams";
	  }else {
		  $delivery_vaginal_tear_weight ='';
	  }
	  if($row['delivery_vaginal_tear_duration'] != "" ){
		  $delivery_vaginal_tear_duration = "<br/> ROM duration: ".$row['delivery_vaginal_tear_duration']."hours";
	  }else {
		  $delivery_vaginal_tear_duration ='';
	  }
	  if($row['six_week_eid_done_date'] != "" && $row['six_week_eid_done_date'] != "0000-00-00 00:00:00"){
		  $six_week_eid_done_date = "<br/> Date: ".$row['six_week_eid_done_date']."";
	  }else {
		  $six_week_eid_done_date ='';
	  }
	  if($row['sample_collected_date'] != "" && $row['sample_collected_date'] != "0000-00-00 00:00:00"){
		  $sample_collected_date = "<br/> Date: ".$row['sample_collected_date']."";
	  }else {
		  $sample_collected_date ='';
	  }
	   if($row['sample_sent_date'] != "" && $row['sample_sent_date'] != "0000-00-00 00:00:00"){
		  $sample_sent_date = "<br/> Date: ".$row['sample_sent_date']."";
	  }else {
		  $sample_sent_date ='';
	  }
	  if($row['eid_result_date'] != "" && $row['eid_result_date'] != "0000-00-00 00:00:00"){
		  $eid_result_date = "<br/> Date: ".$row['eid_result_date']."";
	  }else {
		  $eid_result_date ='';
	  }
	  if($row['eigthteen_rapidtest_done_date'] != "" && $row['eigthteen_rapidtest_done_date'] != "0000-00-00 00:00:00"){
		  $eigthteen_rapidtest_done_date = "<br/> Date: ".$row['eigthteen_rapidtest_done_date']."";
	  }else {
		  $eigthteen_rapidtest_done_date ='';
	  }
	  if($row['ei_outcome_discharged_date'] != "" && $row['ei_outcome_discharged_date'] != "0000-00-00 00:00:00"){
		  $ei_outcome_discharged_date = " Date: ".$row['ei_outcome_discharged_date']."";
	  }else {
		  $ei_outcome_discharged_date ='';
	  }
	  if($row['ei_outcome_linkedtocare_ped_pepid'] != "" ){
		  $ei_outcome_linkedtocare_ped_pepid = " Ped PEP ID: ".$row['ei_outcome_linkedtocare_ped_pepid']."";
	  }else {
		  $ei_outcome_linkedtocare_ped_pepid ='';
	  }
	  if($row['ei_outcome_referred_facilityname'] != "" ){
		  $ei_outcome_referred_facilityname = " Facility Name: ".$row['ei_outcome_referred_facilityname']."";
	  }else {
		  $ei_outcome_referred_facilityname ='';
	  }
  echo "<tr>";
  echo '<td><a href="exposedinfantbrowse.php?pmtctid=' . $row['pmtct_id'] . '&id='.$row['id'].'&username='.$_GET['username'].'">Browse</a></td>';
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['pmtct_id'] . "</td>";
  echo "<td>" . $row['infant_eid_id'] . "</td>";
  echo "<td>" . $row['visit_date'] . "</td>";
  echo "<td>" . $row['infant_name'] . "</td>";
  echo "<td>" . $row['infant_date_of_birth'] . "</td>";
  echo "<td>" . $row['age_of_infant_at_visit'] ." ".$row['age_of_infant_weeks_month']. "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>Mode: " . $row['delivery_mode'] . "<br/>Vaginal Tear: ".$row['delivery_vaginal_tear']."".$delivery_vaginal_tear_age."".$delivery_vaginal_tear_weight."".$delivery_vaginal_tear_duration."</td>";
  echo "<td>HIV serostatus: " . $row['zbabies_hiv_serostatus'] . "<br/>ARV history: ".$row['zbabies_arv_history']."</td>"; 
  echo "<td>" . $row['ctx_prophylasis'] . "</td>";
  echo "<td>" . $row['six_week_eid_done'] . " ".$six_week_eid_done_date."</td>";
  echo "<td>" . $row['sample_collected'] . " ".$sample_collected_date."</td>";
  echo "<td>" . $row['sample_sent'] . " ".$sample_sent_date."</td>";
  echo "<td>" . $row['eid_result'] . " ".$eid_result_date."</td>";
  echo "<td>" . $row['eigthteen_rapidtest_done'] . " ".$eigthteen_rapidtest_done_date."</td>";
  echo "<td>" . $row['result'] . "</td>";
  echo "<td>Discharged: " . $row['ei_outcome_discharged'] . " ".$ei_outcome_discharged_date."<br/>Linked to Care: ".$row['ei_outcome_discharged']." ".$ei_outcome_linkedtocare_ped_pepid."<br/>Referred: ".$row['ei_outcome_referred']." ".$ei_outcome_referred_facilityname."</td>";
  echo "<td>" . $row['other_comments'] . "</td>";
  
   echo "<td>" . $row['infant_sex'] . "</td>";
   echo "<td>" . $row['status_of_birth'] . 
   "<br>Weight: ".$row['status_of_birth_alive_weight'].
   "<br>Lenght: ".$row['status_of_birth_alive_lenght'].
   "<br>Head Circumference: ".$row['status_of_birth_alive_head_circumf'].
   "<br>Gest. Age at delivery: ".$row['status_of_birth_alive_gest_age'].
   "<br>APGAR score@ 5mins: ".$row['status_of_birth_alive_apgar'].
   "</td>";
   echo "<td>" . $row['syrup_nvp'] . "</td>";
   echo "<td>" . $row['feeding_method_chosen'] . "</td>";
  
  echo "</tr>";
	  
  }
}else{
	echo "<tr>";
	echo "<td><h3>No records found!</h3></td>";
	echo "</tr>";
}
echo "</table>";
echo "<br>";

echo "TOTAL EXPOSED INFANT: ".$num;

?>

</body>
</html>