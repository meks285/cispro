<?php

include_once("db_conx.php");


class MyClass{
    public function GetUserInformation(){
		global $db;
$query = "SELECT `visitdate`, `pmtct_id`, `partnershivserostatus`, `months_since_last_menstrual_period`, `gestational_age_at_this_vist`, `pregnancy_history`, `pregnancy_history_tpals`, `gravidityno`, `noofterms`, `noofpremature`, `noofabortion`, `nooflivebirth`, `noofsurviving`, `physical_findings_height`, `physical_findings_bmi`, `physical_findings_weight`, `physical_findings_sbp`, `physical_findings_dbp`, `who`, `baseline_cd4_count`, `baseline_cd4_count_date`, `six_months_cd4_count`, `six_months_cd4_count_date`, `most_recent_cd4_count`, `most_recent_cd4_count_date`, `viral_load_option`, `viral_load`, `viral_load_date`, `art_status`, `art_status_line`, `art_status_regimen_combination`, `ctx_prophylaxis`, `ctx_prophylaxis_date`, `ctx_prophylaxis_ga_commenced`, `tb_screening`, `tb_screening_date` FROM `antenatal_care`";

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
<h1 style="font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #FFFFFF;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px 355681;    border-radius: 0 10px 0 10px;    background: #355681;">PMTCT EMR - ANTENATAL CARE &nbsp;&nbsp;&nbsp;</h1>
<body>

<fieldset>
<legend style="font-weight:bold; font-size:11px">ACTIONS</legend>
<a href="antenatalcare.php?pmtctid=<?php echo $_GET['pmtctid']; ?>&username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px"><< GO BACK</a>

</fieldset>
<?php 
if(isset($_GET['pmtctid']) && $_GET['pmtctid'] !=""){
			$pmtctid = preg_replace('#[^a-z0-9-]#i', '', $_GET['pmtctid']);
			
		}
$pregnancy_history_tpals='';
$result = "SELECT `id`,`visitdate`, `pmtct_id`, `partnershivserostatus`, `months_since_last_menstrual_period`, `gestational_age_at_this_vist`, `pregnancy_history`, `pregnancy_history_tpals`, `gravidityno`, `noofterms`, `noofpremature`, `noofabortion`, `nooflivebirth`, `noofsurviving`, `physical_findings_height`, `physical_findings_bmi`, `physical_findings_weight`, `physical_findings_sbp`, `physical_findings_dbp`, `who`, `baseline_cd4_count`, `baseline_cd4_count_date`, `six_months_cd4_count`, `six_months_cd4_count_date`, `most_recent_cd4_count`, `most_recent_cd4_count_date`, `viral_load_option`, `viral_load`, `viral_load_date`, `art_status`, `art_status_line`, `art_status_regimen_combination`, `ctx_prophylaxis`, `ctx_prophylaxis_date`, `ctx_prophylaxis_ga_commenced`, `tb_screening`, `tb_screening_date` FROM `antenatal_care` where `pmtct_id` = '$pmtctid'";
$stmt = $db->query($result);
$num=$stmt->rowCount();

echo "<table class=\"table table-bordered table-hover\" rules=\"all\" border='1'>
<tr>
<th></th>
<th>1st ANC VISIT DATE</th>
<th>PMTCT ID</th>
<th>Partners HIV serostatus</th>
<th>Months since last Menstrual Period (months)</th>
<th>Gestational Age at this visit (in wks.)</th>
<th>Pregnancy History</th>
<th>Physical findings</th>
<th>WHO staging</th>
<th>Baseline CD4 Count</th>
<th>6 Months CD4 Count</th>
<th>Most Recent CD4 Count</th>
<th>Viral Load: 
<br />
<ul>
	<li>6 months post-ART</li>
	<li>32-36 weeks Gest Age</li>
    </ul>
</th>
<th>ART Status</th>
<th>CTX Prophylaxis</th>
<th>TB Screening</th>
</tr>";
if($num > 0){
while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
	  if($row['pregnancy_history_tpals'] != 'undefined' || $row['pregnancy_history_tpals'] != 'Non'){
		  $pregnancy_history_tpals = "<br/>&nbsp;&nbsp;".$row['pregnancy_history_tpals'];
	  }else {
		  $pregnancy_history_tpals ='';
	  }
	  
	  if($row['art_status_line'] != 'undefined' ){
		  if($row['art_status_line'] == 'first line'){
		  $art_status_line = "<br/>&nbsp;&nbsp; 1<sup>st</sup>LINE";
		  }else{
			$art_status_line = "<br/>&nbsp;&nbsp; 2<sup>nd</sup>LINE";  
		  }
	  }else {
		  $art_status_line ='';
	  }
	  
	  if($row['art_status_regimen_combination'] != "" ){
		  $art_status_regimen_combination = "<br/>REGIMEN/ ART COMBINATION: ".$row['art_status_regimen_combination'];
	  }else {
		  $art_status_regimen_combination ='';
	  }
	  
	  if($row['ctx_prophylaxis_date'] != "0000-00-00 00:00:00" && $row['ctx_prophylaxis_date'] != "0000-00-00" ){
		  $ctx_prophylaxis_date = "<br/>Date: ".$row['ctx_prophylaxis_date'];
	  }else {
		  $ctx_prophylaxis_date ='';
	  }
	  
	  if($row['ctx_prophylaxis_ga_commenced'] != "" ){
		  $ctx_prophylaxis_ga_commenced = "<br/>GA Commenced (in wks): ".$row['ctx_prophylaxis_ga_commenced'];
	  }else {
		  $ctx_prophylaxis_ga_commenced ='';
	  }
	  
	   if($row['tb_screening_date'] != "0000-00-00 00:00:00" && $row['tb_screening_date'] != "0000-00-00" ){
		  $tb_screening_date = "<br/>Date: ".$row['tb_screening_date'];
	  }else {
		  $tb_screening_date ='';
	  }
	  
	  if($row['gravidityno'] != "" ){
		  $gravidityno = "Gravidity No: ".$row['gravidityno'];
	  }else {
		  $gravidityno ='';
	  }
	  
  echo "<tr>";
  echo '<td><a href="antenatalcarebrowse.php?pmtctid=' . $row['pmtct_id'] . '&id='.$row['id'].'&username='.$_GET['username'].'">Browse</a></td>';
  echo "<td>" . $row['visitdate'] . "</td>";
  echo "<td>" . $row['pmtct_id'] . "</td>";
  echo "<td>" . $row['partnershivserostatus'] . "</td>";
  echo "<td>" . $row['months_since_last_menstrual_period'] . "</td>";
  echo "<td>" . $row['gestational_age_at_this_vist'] . "</td>";
  echo "<td>" . $row['pregnancy_history'] . 
  "<br/>".$gravidityno .
   "<br/> Term: ".$row['noofterms'].
   "<br/> Premature: ".$row['noofpremature'].
   "<br/> Abortion: ".$row['noofabortion'].
   "<br/> Live Birth: ".$row['nooflivebirth'].
   "<br/> Surviving: ".$row['noofsurviving'].
  
  "</td>";
  echo "<td>Weight:  " . $row['physical_findings_weight'] . "kg<br/>Height:  " . $row['physical_findings_height'] . "m<br/>BMI:  " . $row['physical_findings_bmi'] . "kg/m<sup>2</sup><br/>SBP: ".$row['physical_findings_sbp']."<br/>DBP: ".$row['physical_findings_dbp']."</td>";
  echo "<td>" . $row['who'] . "</td>";
  echo "<td>Cells/mm: " . $row['baseline_cd4_count'] . "&nbsp; Date: ".$row['baseline_cd4_count_date']."</td>";
  echo "<td>Cells/mm: " . $row['six_months_cd4_count'] . "&nbsp; Date: ".$row['six_months_cd4_count_date']. "</td>";
  echo "<td>Cells/mm: " . $row['most_recent_cd4_count'] . "&nbsp; Date: ".$row['most_recent_cd4_count_date']. "</td>";
  echo "<td>" . $row['viral_load_option'] . "&nbsp; Cells/mm: " . $row['viral_load'] . "&nbsp; Date: ".$row['viral_load_date']. "</td>";
  echo "<td>" . $row['art_status'] . "".$art_status_line. "".$art_status_regimen_combination."</td>";
  echo "<td>" . $row['ctx_prophylaxis'] . "".$ctx_prophylaxis_date."".$ctx_prophylaxis_ga_commenced."</td>";
  echo "<td>" . $row['tb_screening'] . " ".$tb_screening_date."</td>";
  echo "</tr>";
	  
  }
}else{
	echo "<tr>";
	echo "<td><h3>No records found!</h3></td>";
	echo "</tr>";
}
echo "</table>";
echo "<br>";

echo "TOTAL ANTENATAL CARE: ".$num;

?>

</body>
</html>