<?php
$status='';
$rowcount='';
if(isset($_POST["pmtct_id"])){
// CONNECT TO THE DATABASE
include_once("db_conx.php");
				$id = preg_replace('#[^0-9]#i', '',  $_POST['id']);
				$visitdate = $_POST['visitdate'];
				$pmtct_id =preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['pmtct_id']);
				$months_since_last_menstrual_period = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['months_since_last_menstrual_period']);
				 $gestational_age_at_this_vist = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['gestational_age_at_this_vist']);
				 $pregnancy_history = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['pregnancy_history']);
				 $pregnancy_history_tpals =preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['pregnancy_history_tpals']);
				 $physical_findings_weight = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['physical_findings_weight']);
				 $physical_findings_sbp = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['physical_findings_sbp']);
				 $physical_findings_dbp =  preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['physical_findings_dbp']);
				 $who = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['who']);
				 				 $baseline_cd4_count = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['baseline_cd4_count']);
				 $baseline_cd4_count_date =  $_POST['baseline_cd4_count_date'];
				 $six_months_cd4_count = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['six_months_cd4_count']);
				 $six_months_cd4_count_date =  $_POST['six_months_cd4_count_date'];
				 $most_recent_cd4_count = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['most_recent_cd4_count']);
				 $most_recent_cd4_count_date =  $_POST['most_recent_cd4_count_date'];
				 $viral_load = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['viral_load']);
				 $viral_load_date = $_POST['viral_load_date'];
				 $art_status = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['art_status']);
				 $art_status_line = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['art_status_line']);
				 $art_status_regimen_combination =  $_POST['art_status_regimen_combination'];
				 $ctx_prophylaxis = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['ctx_prophylaxis']);
				 $ctx_prophylaxis_date = $_POST['ctx_prophylaxis_date'];
				 $ctx_prophylaxis_ga_commenced = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['ctx_prophylaxis_ga_commenced']);
				 $tb_screening = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['tb_screening']);
				 $tb_screening_date = $_POST['tb_screening_date'];
				 $arv_start_date = $_POST['arv_start_date'];
				 
				 $partnershivserostatus = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['partnershivserostatus']);
					$gravidityno = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['gravidityno']);
					$noofterms = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['noofterms']);
					$noofpremature = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['noofpremature']);
					$noofabortion = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['noofabortion']);
					$nooflivebirth = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['nooflivebirth']);
					$noofsurviving = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['noofsurviving']);
					$physical_findings_height = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['physical_findings_height']);
					$physical_findings_bmi = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['physical_findings_bmi']);
					$viral_load_option = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['viral_load_option']);
					
					$pepid =  $_POST['pepid'];
					$uniqueid = $_POST['uniqueid'];
					$hospitalunit = $_POST['hospitalunit'];
					$surname = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['surname']);
					$othernames = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['othernames']);
					$hivdate =  $_POST['hivdate'];
					$dateofbirth = $_POST['dateofbirth'];
					$phoneno = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['phoneno']);
					$basicinfosex = preg_replace('#[^a-z 0-9,()-]#i', '', $_POST['basicinfosex']);
					$facilityname = $_POST['facilityname'];
					$basicinfoage =  $_POST['basicinfoage'];
					$first_anc_visit_date = $_POST['first_anc_visit_date'];
				 
	$sql="UPDATE `antenatal_care` SET `visitdate` = '$visitdate',`partnershivserostatus` ='$partnershivserostatus',`months_since_last_menstrual_period`='$months_since_last_menstrual_period',`gestational_age_at_this_vist`='$gestational_age_at_this_vist',`pregnancy_history`='$pregnancy_history',`pregnancy_history_tpals`='$pregnancy_history_tpals',`gravidityno`='$gravidityno', `noofterms`='$noofterms', `noofpremature`='$noofpremature', `noofabortion`='$noofabortion', `nooflivebirth`='$nooflivebirth', `noofsurviving`='$noofsurviving', `physical_findings_height`='$physical_findings_height', `physical_findings_bmi`='$physical_findings_bmi',`physical_findings_weight`='$physical_findings_weight',`physical_findings_sbp`='$physical_findings_sbp',`physical_findings_dbp`='$physical_findings_dbp',`who`='$who',`baseline_cd4_count`='$baseline_cd4_count',`baseline_cd4_count_date`='$baseline_cd4_count_date',`six_months_cd4_count`='$six_months_cd4_count',`six_months_cd4_count_date`='$six_months_cd4_count_date',`most_recent_cd4_count`='$most_recent_cd4_count',`most_recent_cd4_count_date`='$most_recent_cd4_count_date',`viral_load_option`='$viral_load_option',`viral_load`='$viral_load',`viral_load_date`='$viral_load_date',`art_status`='$art_status',`art_status_line`='$art_status_line',`art_status_regimen_combination`='$art_status_regimen_combination',`ctx_prophylaxis`='$ctx_prophylaxis',`ctx_prophylaxis_date`='$ctx_prophylaxis_date',`ctx_prophylaxis_ga_commenced`='$ctx_prophylaxis_ga_commenced',`tb_screening`='$tb_screening',`tb_screening_date`='$tb_screening_date',`arv_start_date`='$arv_start_date' WHERE `pmtct_id`='$pmtct_id' and `id` = '$id'";
	
	$sql2="UPDATE `basic_info` SET `pepid`='$pepid',`uniqueid`='$uniqueid',`hospitalunit`='$hospitalunit',`surname`='$surname',`othernames`='$othernames',`hivdate`='$hivdate',`dateofbirth`='$dateofbirth',`phoneno`='$phoneno',`basicinfosex`='$basicinfosex',`facilityname`='$facilityname',`basicinfoage`='$basicinfoage',`first_anc_visit_date`='$first_anc_visit_date' WHERE `pmtct_id`='$pmtct_id'";
				 		  
		try {
		 $stmt   = $db->exec($sql);
		 $stmt2   = $db->exec($sql2);
		 echo "saved_succesfully";
		 
		}catch (PDOException $ex) {
		   echo "saved_failed";
		}
		


	exit();
}
?>
<?php

include_once("db_conx.php");


class MyClass{
    public function GetUserInformation(){
		global $db;
		if(isset($_GET['pmtctid']) && $_GET['pmtctid'] !="" && isset($_GET['id']) && $_GET['id'] !=""){
			$pmtctid = preg_replace('#[^a-z0-9-]#i', '', $_GET['pmtctid']);
			$id = preg_replace('#[^0-9]#i', '', $_GET['id']);
			
		}else{
			header("location: antenatalcarehistory.php");
            exit();
		}
$query = "SELECT `visitdate`, `pmtct_id`, `partnershivserostatus`, `months_since_last_menstrual_period`, `gestational_age_at_this_vist`, `pregnancy_history`, `pregnancy_history_tpals`, `gravidityno`, `noofterms`, `noofpremature`, `noofabortion`, `nooflivebirth`, `noofsurviving`, `physical_findings_height`, `physical_findings_bmi`, `physical_findings_weight`, `physical_findings_sbp`, `physical_findings_dbp`, `who`, `baseline_cd4_count`, `baseline_cd4_count_date`, `six_months_cd4_count`, `six_months_cd4_count_date`, `most_recent_cd4_count`, `most_recent_cd4_count_date`, `viral_load_option`, `viral_load`, `viral_load_date`, `art_status`, `art_status_line`, `art_status_regimen_combination`, `ctx_prophylaxis`, `ctx_prophylaxis_date`, `ctx_prophylaxis_ga_commenced`, `tb_screening`, `tb_screening_date`,`arv_start_date` FROM `antenatal_care` WHERE pmtct_id ='$pmtctid' and id = '$id'";

        $stmt = $db->query($query);
        $info = $stmt->fetch(PDO::FETCH_ASSOC);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
?><?php

include_once("db_conx.php");


class MyClass2{
    public function GetUserInformation2(){
		global $db;
		if(isset($_GET['pmtctid']) && $_GET['pmtctid'] !=""){
			$pmtctid = preg_replace('#[^a-z0-9-]#i', '', $_GET['pmtctid']);
			
		}else{
			header("location: antenatalcarehistory.php");
            exit();
		}
$query = "SELECT `id`, `pepid`,`pmtct_id`, `uniqueid`, `hospitalunit`, `surname`, `othernames`, `hivdate`, `dateofbirth`, `phoneno`, `basicinfosex`, `facilityname`, `basicinfoage`, `first_anc_visit_date` FROM `basic_info` WHERE pmtct_id ='$pmtctid'";

        $stmt = $db->query($query);
        $info2 = $stmt->fetch(PDO::FETCH_ASSOC);
        return $info2;
		
    } 
}
$class = new MyClass2;
$info2 = $class->GetUserInformation2();
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
p,h1, form, button{border:0; margin:0; padding:0;}
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
font-style: normal;
font-weight: normal;
color: #000;
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
   top: 110px;
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
.tops{
   top: 8px;
   position: fixed;
   width:1335px;
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
padding-right:0px;
width:20px;
}
#stylized .radio-toolbar label {
display:block;
font-weight:normal;
text-align:right;
padding-right:0px;
position:absolute;
margin:1px 0 0px 10px;
}
#stylized .radio-toolbar input{
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
table {
  max-width: 100%;
  background-color: transparent;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  display: table-column;
  float: none;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  display: table-cell;
  float: none;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-x: scroll;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
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
<script src="js/main.js"></script>
  <script src="js/ajax.js"></script>
  <script>
 function emptyElement(x,y){
_(x).innerHTML = "";
_(y).innerHTML = "";
}

 function updateantenatalcare(){
	 
	 	 var id = _("id").value;
var pmtct_id = _("pmtct_id").value;
var months_since_last_menstrual_period = _("months_since_last_menstrual_period").value;
var gestational_age_at_this_vist = _("gestational_age_at_this_vist").value;
var pregnancy_history;
var rates = document.getElementsByName('pregnancy_history');
for(var i = 0; i < rates.length; i++){
    if(rates[i].checked){
        pregnancy_history = rates[i].value;
    }
}
var pregnancy_history_tpals="Non";
/*var rates2 = document.getElementsByName('pregnancy_history_tpals');
for(var i = 0; i < rates2.length; i++){
    if(rates2[i].checked){
        pregnancy_history_tpals = rates2[i].value;
    }
}*/

var physical_findings_weight = _("physical_findings_weight").value;
var physical_findings_sbp = _("physical_findings_sbp").value;
var physical_findings_dbp =  _("physical_findings_dbp").value;
var who;
var rates3 = document.getElementsByName('who');
for(var i = 0; i < rates3.length; i++){
    if(rates3[i].checked){
        who = rates3[i].value;
    }
}
var baseline_cd4_count = _("baseline_cd4_count").value;
var baseline_cd4_count_date = _("baseline_cd4_count_date").value;
var six_months_cd4_count = _("six_months_cd4_count").value;
var six_months_cd4_count_date = _("six_months_cd4_count_date").value;
var most_recent_cd4_count = _("most_recent_cd4_count").value;
var most_recent_cd4_count_date = _("most_recent_cd4_count_date").value;
var viral_load = _("viral_load").value;
var viral_load_date = _("viral_load_date").value;

var art_status;
var rates4 = document.getElementsByName('art_status');
for(var i = 0; i < rates4.length; i++){
    if(rates4[i].checked){
        art_status = rates4[i].value;
    }
}

var art_status_line;
var rates5 = document.getElementsByName('art_status_line');
for(var i = 0; i < rates5.length; i++){
    if(rates5[i].checked){
        art_status_line = rates5[i].value;
    }
}

var art_status_regimen_combination = _("art_status_regimen_combination").value;
var ctx_prophylaxis;
var rates6 = document.getElementsByName('ctx_prophylaxis');
for(var i = 0; i < rates6.length; i++){
    if(rates6[i].checked){
        ctx_prophylaxis = rates6[i].value;
    }
}
var ctx_prophylaxis_date = _("ctx_prophylaxis_date").value;
var ctx_prophylaxis_ga_commenced = _("ctx_prophylaxis_ga_commenced").value;
var visitdate = _("visitdate").value;
var tb_screening;
var rates7 = document.getElementsByName('tb_screening');
for(var i = 0; i < rates7.length; i++){
    if(rates7[i].checked){
        tb_screening = rates7[i].value;
    }
}

var tb_screening_date = _("tb_screening_date").value;
var arv_start_date = _("arv_start_date").value
//////////////////new fields////////////////////
var partnershivserostatus = _("partnershivserostatus").value;
var gravidityno = _("gravidityno").value;
var noofterms = _("noofterms").value;
var noofpremature = _("noofpremature").value;
var noofabortion = _("noofabortion").value;
var nooflivebirth = _("nooflivebirth").value;
var noofsurviving = _("noofsurviving").value;
var physical_findings_height = _("physical_findings_height").value;
var physical_findings_bmi = _("physical_findings_bmi").value;
var viral_load_option;
var rates8 = document.getElementsByName('viral_load_option');
for(var i = 0; i < rates8.length; i++){
    if(rates8[i].checked){
        viral_load_option = rates8[i].value;
    }
}
var pepid = _("pepid").value;
var uniqueid = _("uniqueid").value;
var hospitalunit = _("hospitalunit").value;
var surname = _("surname").value;
var othernames = _("othernames").value;
var hivdate = _("hivdate").value;
var dateofbirth = _("dateofbirth").value;
var phoneno = _("phoneno").value;
var basicinfosex = _("basicinfosex").value;
var facilityname = _("facilityname").value;
var basicinfoage = _("basicinfoage").value;
var first_anc_visit_date = "Non";
///////////////////////////////////////////////////////

var status = _("status");
var status3 = _("status3");
if(pmtct_id == ""){
status.innerHTML = "<div id=\"error\">Please complete PMTCT ID!</div>";
status3.innerHTML = "<div id=\"error\">Please complete PMTCT ID!</div>";
} else if(visitdate == ""){
status.innerHTML = "<div id=\"error\">Please complete visit date!</div>";
status3.innerHTML = "<div id=\"error\">Please complete visit date!</div>";
}else if(partnershivserostatus == ""){
status.innerHTML = "<div id=\"error\">Please complete partners HIV serostatus!</div>";
status3.innerHTML = "<div id=\"error\">Please complete partners HIV serostatus!</div>";
}else if(physical_findings_height == ""){
status.innerHTML = "<div id=\"error\">Please complete physical findings!</div>";
status3.innerHTML = "<div id=\"error\">Please complete physical findings!</div>";
}else if(physical_findings_bmi == ""){
status.innerHTML = "<div id=\"error\">Please complete physical findings!</div>";
status3.innerHTML = "<div id=\"error\">Please complete physical findings!</div>";
}else if(viral_load_option == null){
status.innerHTML = "<div id=\"error\">Please complete viral load!</div>";
status3.innerHTML = "<div id=\"error\">Please complete viral load!</div>";
}else if(months_since_last_menstrual_period == ""){
status.innerHTML = "<div id=\"error\">Please complete Months since last Menstrual Period (months)!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Months since last Menstrual Period (months)!</div>";
}else if(gestational_age_at_this_vist == ""){
status.innerHTML = "<div id=\"error\">Please complete Gestational Age at this visit (in wks.)!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Gestational Age at this visit (in wks.)!</div>";
}else if(pregnancy_history == "" || pregnancy_history == null){
status.innerHTML = "<div id=\"error\">Please complete Pregnancy History!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Pregnancy History!</div>";
}else if(physical_findings_weight == "" || physical_findings_sbp == "" || physical_findings_dbp ==""){
status.innerHTML = "<div id=\"error\">Please complete Physical findings!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Physical findings!</div>";
}else if(who == "" || who == null){
status.innerHTML = "<div id=\"error\">Please complete WHO staging!</div>";
status3.innerHTML = "<div id=\"error\">Please complete WHO staging!</div>";
}else if(art_status == "" || art_status == null || art_status_regimen_combination==""){
status.innerHTML = "<div id=\"error\">Please complete ART Status!</div>";
status3.innerHTML = "<div id=\"error\">Please complete ART Status!</div>";
}else if(ctx_prophylaxis == "YES" && ctx_prophylaxis_ga_commenced==""){
status.innerHTML = "<div id=\"error\">Please complete CTX Prophylaxis!</div>";
status3.innerHTML = "<div id=\"error\">Please complete CTX Prophylaxis!</div>";
}else if(ctx_prophylaxis == null){
status.innerHTML = "<div id=\"error\">Please complete CTX Prophylaxis!</div>";
status3.innerHTML = "<div id=\"error\">Please complete CTX Prophylaxis!</div>";
}else if(tb_screening == null){
status.innerHTML = "<div id=\"error\">Please complete TB Screening!</div>";
status3.innerHTML = "<div id=\"error\">Please complete TB Screening!</div>";
}else {
	_("submitbtn").style.display = "none";
status.innerHTML = '<br/><img src="js/loading_bar.gif">';
status3.innerHTML = '<br/><img src="js/loading_bar.gif">';
var ajax = ajaxObj("POST", "antenatalcarebrowse.php");
        ajax.onreadystatechange = function() {
       if(ajaxReturn(ajax) == true) {
		   if(ajax.responseText == "saved_succesfully"){
			   _("submitbtn").style.display = "block";
		    status.innerHTML = "<div id=\"status2\">Data updated Successfully</div>";
			status3.innerHTML = "<div id=\"status2\">Data updated Successfully</div>";
		   }else{ //addedto be removed
		   _("submitbtn").style.display = "block";
			status.innerHTML = "<div id=\"error\">Data failed to update</div>";
			status3.innerHTML = "<div id=\"error\">Data failed to update</div>";
				}// end else
			} 
        }// end else
        ajax.send("visitdate="+visitdate+"&pmtct_id="+pmtct_id+"&months_since_last_menstrual_period="+months_since_last_menstrual_period+"&gestational_age_at_this_vist="+gestational_age_at_this_vist+"&pregnancy_history="+pregnancy_history+"&pregnancy_history_tpals="+pregnancy_history_tpals+"&physical_findings_weight="+physical_findings_weight+"&physical_findings_sbp="+physical_findings_sbp+"&physical_findings_dbp="+physical_findings_dbp+"&who="+who+"&baseline_cd4_count="+baseline_cd4_count+"&baseline_cd4_count_date="+baseline_cd4_count_date+"&six_months_cd4_count="+six_months_cd4_count+"&six_months_cd4_count_date="+six_months_cd4_count_date+"&most_recent_cd4_count="+most_recent_cd4_count+"&most_recent_cd4_count_date="+most_recent_cd4_count_date+"&viral_load="+viral_load+"&viral_load_date="+viral_load_date+"&art_status="+art_status+"&art_status_line="+art_status_line+"&art_status_regimen_combination="+art_status_regimen_combination+"&ctx_prophylaxis="+ctx_prophylaxis+"&ctx_prophylaxis_date="+ctx_prophylaxis_date+"&ctx_prophylaxis_ga_commenced="+ctx_prophylaxis_ga_commenced+"&tb_screening="+tb_screening+"&tb_screening_date="+tb_screening_date+"&partnershivserostatus="+partnershivserostatus+"&gravidityno="+gravidityno+"&noofterms="+noofterms+"&noofpremature="+noofpremature+"&noofabortion="+noofabortion+"&nooflivebirth="+nooflivebirth+"&noofsurviving="+noofsurviving+"&physical_findings_height="+physical_findings_height+"&physical_findings_bmi="+physical_findings_bmi+"&viral_load_option="+viral_load_option+"&pepid="+pepid+"&uniqueid="+uniqueid+"&hospitalunit="+hospitalunit+"&surname="+surname+"&othernames="+othernames+"&hivdate="+hivdate+"&dateofbirth="+dateofbirth+"&phoneno="+phoneno+"&basicinfosex="+basicinfosex+"&facilityname="+facilityname+"&basicinfoage="+basicinfoage+"&first_anc_visit_date="+first_anc_visit_date+"&arv_start_date="+arv_start_date+"&id="+id);
}
}
function getbmi(){
	var weight = _("physical_findings_weight").value;
	var height = _("physical_findings_height").value;
	var bmi;
	var heightsquare;
	heightsquare = parseInt(height) * parseInt(height);
	bmi = parseInt(weight)/parseInt(heightsquare);
	document.getElementById("physical_findings_bmi").value = bmi;
}
</script>
</head>

<body>
<div class='sidebar'>
<legend style="font-weight:bold; margin:10px 0px; font-size:14px; color:#0EBF5F">DATA ENTRY</legend>
<fieldset style="background-color:#355681">
<a href="antenatalcare.php?pmtctid=<?php echo $_GET['pmtctid']; ?>&username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:#ffffff;font-family: 'Titillium Web', sans-serif;">PMTCT ANC</a> <br>
</fieldset>
<fieldset style="background-color:#355681">
<a href="pmtctdelivery.php?pmtctid=<?php echo $_GET['pmtctid']; ?>&username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:#ffffff;font-family: 'Titillium Web', sans-serif;">PMTCT DELIVERY</a> <br>
</fieldset>
<fieldset style="background-color:#355681">
<a href="exposedinfant.php?pmtctid=<?php echo $_GET['pmtctid']; ?>&username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:#ffffff;font-family: 'Titillium Web', sans-serif;">EXPOSED INFANT</a> <br>
</fieldset>
<hr />
<br/>
<legend style="font-weight:bold; margin:10px 0px; font-size:14px; color:#0EBF5F">VIEW DATA</legend>
<fieldset style="background-color:#6490cb">
<a href="antenatalcarehistory.php<?php if(isset($_GET['pmtctid'])){?>?pmtctid=<?php echo $_GET['pmtctid']; }?>&username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:#ffffff;font-family: 'Titillium Web', sans-serif;">ANTENATAL CARE HISTORY</a> <br>
</fieldset>
<fieldset style="background-color:#6490cb">
<a href="pmtctdeliveryhistory.php<?php if(isset($_GET['pmtctid'])){?>?pmtctid=<?php echo $_GET['pmtctid']; }?>&username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:#ffffff;font-family: 'Titillium Web', sans-serif;">PMTCT DELIVERY HISTORY</a> <br>
</fieldset>
<fieldset style="background-color:#6490cb">
<a href="exposedinfanthistory.php<?php if(isset($_GET['pmtctid'])){?>?pmtctid=<?php echo $_GET['pmtctid']; }?>&username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:#ffffff;font-family: 'Titillium Web', sans-serif;">EXPOSED INFANT HISTORY</a> <br>
</fieldset>
<hr />
</div>
<div class='tops'>
<h1 style="font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #FFFFFF;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px 355681;    border-radius: 0 10px 0 10px;    background: #355681;">PMTCT EMR - ANTENATAL CARE &nbsp;&nbsp;&nbsp; </h1>
</div>
<br />
<br />
<br />
<br />
<div id="stylized" class="myform">


<h3 style="text-align:center">BASIC INFORMATION</h3>
<span id="status"></span>
<form id="form" name="form" onSubmit="return false;">
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        
         <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Patient ID
</label>
<input type="text" name="pepid" id="pepid" value="<?php echo $info2['pepid']; ?>"  style="width:120px;height:10px;" required>
      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>
Unique ID
</label>
<input type="text" name="uniqueid" id="uniqueid" value="<?php echo $info2['uniqueid']; ?>"  style="width:120px;height:10px;" required>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Hospital(UNIT) Number
</label>
<input type="text" name="hospitalunit" id="hospitalunit"  value="<?php echo $info2['hospitalunit']; ?>"  style="width:120px;height:10px;" required>

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
<label>Surname
</label>
<input type="text" name="surname" id="surname" value="<?php echo $info2['surname']; ?>" style="width:120px;height:10px;" required>
      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>Other names
</label>
<input type="text" name="othernames" id="othernames" value="<?php echo $info2['othernames']; ?>" style="width:120px;height:10px;" required>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>HIV+ Date (Confirmed)
</label>
<input type="date" name="hivdate" id="hivdate" value="<?php echo date("Y-m-d", strtotime($info2['hivdate'])); ?>" style="width:120px;height:10px;" required> 


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
DoB
</label>
<input type="date" name="dateofbirth" id="dateofbirth" value="<?php echo date("Y-m-d", strtotime( $info2['hivdate'])); ?>" style="width:120px;height:10px;"  required> 
    </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Phone Number
</label>
<input type="text" name="phoneno" id="phoneno" value="<?php echo $info2['phoneno']; ?>" style="width:120px;height:10px;" required>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Sex
</label>
<input type="text" name="basicinfosex" id="basicinfosex" value="<?php echo $info2['basicinfosex']; ?>" style="width:45px;height:10px;" required>

        </fieldset>
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Facility Name</label>
<input type="text" name="facilityname" id="facilityname" value="<?php echo $info2['facilityname']; ?>"  style="width:120px; height:10px;" required>
    </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Age</label>
<input type="text" name="basicinfoage" id="basicinfoage" value="<?php echo $info2['basicinfoage']; ?>" size="1"  style="height:10px;" required>
          </fieldset>
         </div>   
         <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
1st ANC Visit date</label>
<input type="date" name="visitdate" id="visitdate" value="<?php echo date("Y-m-d", strtotime($info['visitdate'])); ?>" onfocus="emptyElement('status','status3')"  style="width:120px; height:15px;" required>
        </fieldset>
         </div>
    </div>
</div>

</fieldset>

<fieldset>
<h3 style="text-align:center">ANTENATAL CARE</h3>
<table  class="table table-bordered table-hover">

<tr><td style="width:20px;"></td>
<td><b>PMTCT ID</b></td><td><input type="text" name="pmtct_id" id="pmtct_id" style="width:120px;height:10px;" value="<?php echo $info['pmtct_id']; ?>" onfocus="emptyElement('status','status3')" required></td>
</tr>

<tr><td style="width:20px;"></td>
<td><b>Patners HIV serostatus</b></td><td>&nbsp;&nbsp;
<select name="partnershivserostatus" id="partnershivserostatus" onfocus="emptyElement('status','status3')" style="width:120px;">
<option value="<?php echo $info['partnershivserostatus']; ?>"><?php echo $info['partnershivserostatus']; ?></option>
<option value="positive">positive</option>
<option value="negative">negative</option>
<option value="unknown">unknown</option>
</select></td>
</tr>
   
<tr><td style="width:20px;">1</td>
<td><b>Last Menstrual Period at first ANC visit</b></td><td><input type="text" onfocus="emptyElement('status','status3')" name="months_since_last_menstrual_period" id="months_since_last_menstrual_period" value="<?php echo $info['months_since_last_menstrual_period']; ?>"  style="width:30px;" required>(months)</td>
</tr>

<tr><td>2</td>
<td><b>Gestational Age at first ANC visit </b></td><td><input type="text" onfocus="emptyElement('status','status3')" name="gestational_age_at_this_vist" id="gestational_age_at_this_vist" value="<?php echo $info['gestational_age_at_this_vist']; ?>"  style="width:30px; " required>(in wks.)</td>
</tr>
<tr><td>3</td>
<td><b>Pregnancy History at first ANC visit</b></td>
<td>
<?php if ($info['pregnancy_history'] == "Gravidity"){ ?>
	<input type="radio" id="pregnancy_history" name="pregnancy_history" checked="checked" value="Gravidity" onfocus="emptyElement('status','status3')" required>Gravidity <input type="text" onfocus="emptyElement('status','status3')" name="gravidityno" id="gravidityno" value="<?php echo $info['gravidityno']; ?>" style="width:15px;" required><br/>
    <?php } else {?>
    <input type="radio" id="pregnancy_history" name="pregnancy_history" value="Gravidity" onfocus="emptyElement('status','status3')" required>Gravidity <input type="text" onfocus="emptyElement('status','status3')" name="gravidityno" id="gravidityno" value="" style="width:15px;" required><br/>
    <?php }?>
     
  <div style="margin-left:50px;">
  Term <input type="text" onfocus="emptyElement('status','status3')" name="noofterms" id="noofterms" value="<?php echo $info['noofterms']; ?>"  style="width:120px;" required>
  &nbsp; &nbsp;&nbsp; Premature <input type="text" onfocus="emptyElement('status','status3')" name="noofpremature" id="noofpremature" value="<?php echo $info['noofpremature']; ?>" style="width:15px;" required><br />
 Abortion <input type="text" onfocus="emptyElement('status','status3')" name="noofabortion" id="noofabortion" value="<?php echo $info['noofabortion']; ?>" style="width:15px;" required>
 &nbsp; &nbsp;&nbsp;Live birth<input type="text" onfocus="emptyElement('status','status3')" name="nooflivebirth" id="nooflivebirth" value="<?php echo $info['nooflivebirth']; ?>" style="width:15px;" required><br />
 Surviving <input type="text" onfocus="emptyElement('status','status3')" name="noofsurviving" id="noofsurviving" value="<?php echo $info['noofsurviving']; ?>" style="width:15px;" required>
 </div>
  </td>
</tr>
<tr><td>4</td>
<td><b>Physical findings</b></td>
<td>
<label>Weight (kg)</label>
<input type="text" name="physical_findings_weight" value="<?php echo $info['physical_findings_weight']; ?>" onfocus="emptyElement('status','status3')" id="physical_findings_weight"  style="width:25px;" required><br />
<label>Height (m)</label>
<input type="text" name="physical_findings_height" value="<?php echo $info['physical_findings_height']; ?>" onfocus="emptyElement('status','status3')" id="physical_findings_height"  style="width:25px;" required><br />
<label>BMI (kg/m<sup>2</sup>)</label>
<input type="text" name="physical_findings_bmi" value="<?php echo $info['physical_findings_bmi']; ?>" onfocus="emptyElement('status','status3'); getbmi();" id="physical_findings_bmi"  style="width:30px;" required><br />
<fieldset>
<legend>Blood Pressure</legend>

<input type="text" name="physical_findings_sbp" value="<?php echo $info['physical_findings_sbp']; ?>" onfocus="emptyElement('status','status3')" id="physical_findings_sbp"  style="width:30px;" required>
/
<input type="text" name="physical_findings_dbp" value="<?php echo $info['physical_findings_dbp']; ?>" onfocus="emptyElement('status','status3')" id="physical_findings_dbp"  style="width:30px;" required> (mmHg)<br />
</fieldset>
</td>
</table>
<h3 style="text-align:center">ART ELIGIBILITY</h3>
<table   class="table table-bordered table-hover" border="1" rules="all">
<tr><td>5</td>
<td>WHO staging</td>
<td>
<?php if ($info['who'] == "I"){ ?>
<input type="radio" id="who" checked="checked" onfocus="emptyElement('status','status3')" name="who" value="I" required>I &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="II">II &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="III">III &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="IV">IV &nbsp;
 <?php } elseif ($info['who'] == "II") {?>
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="I" required>I &nbsp;
 <input type="radio" id="who" checked="checked"  onfocus="emptyElement('status','status3')" name="who" value="II">II &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="III">III &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="IV">IV &nbsp;
  <?php } elseif ($info['who'] == "III") {?>
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="I" required>I &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="II">II &nbsp;
 <input type="radio" id="who" checked="checked" onfocus="emptyElement('status','status3')" name="who" value="III">III &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="IV">IV &nbsp;
 <?php } elseif ($info['who'] == "IV") {?>
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="I" required>I &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="II">II &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="III">III &nbsp;
 <input type="radio" id="who" checked="checked" onfocus="emptyElement('status','status3')" name="who" value="IV">IV &nbsp;
 <?php } else {?>
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="I" required>I &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="II">II &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="III">III &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="IV">IV &nbsp;
 <?php }?>
 
</td>
</tr>
<tr><td rowspan="4">6</td>
<td><br />
Baseline CD4 Count
</td>
<td>
<br />
<input type="text" name="baseline_cd4_count" value="<?php echo $info['baseline_cd4_count']; ?>" onfocus="emptyElement('status','status3')" id="baseline_cd4_count"  style="width:25px;" required>Cells/mm &nbsp;
Date
<input type="date" name="baseline_cd4_count_date" value="<?php echo date("Y-m-d", strtotime($info['baseline_cd4_count_date'])); ?>" onfocus="emptyElement('status','status3')" id="baseline_cd4_count_date"  style="width:120px;" required>
</td>
</tr>
<tr><td><br />6 Months CD4 Count</td>
<td><br />
<input type="text" name="six_months_cd4_count" value="<?php echo $info['six_months_cd4_count']; ?>" onfocus="emptyElement('status','status3')" id="six_months_cd4_count"  style="width:25px;" required>Cells/mm &nbsp;
Date
<input type="date" name="six_months_cd4_count_date" value="<?php echo date("Y-m-d", strtotime($info['six_months_cd4_count_date'])); ?>" onfocus="emptyElement('status','status3')" id="six_months_cd4_count_date"  style="width:120px;" required></td></tr>

<tr><td><br />Most Recent CD4 Count</td>
<td><br />
<input type="text" name="most_recent_cd4_count" value="<?php echo $info['most_recent_cd4_count']; ?>" onfocus="emptyElement('status','status3')" id="most_recent_cd4_count"  style="width:25px;" required>Cells/mm &nbsp;
Date
<input type="date" name="most_recent_cd4_count_date" value="<?php echo date("Y-m-d", strtotime($info['most_recent_cd4_count_date'])); ?>" onfocus="emptyElement('status','status3')" id="most_recent_cd4_count_date"  style="width:120px;" required></td></tr>

<tr><td><br />Viral Load:
<br />

</td>
<td><br />
<?php if($info['viral_load_option'] == "6 months post-ART"){ ?>
<input type="radio" checked="checked" id="viral_load_option" name="viral_load_option" onfocus="emptyElement('status','status3')" value="6 months post-ART" required>6 months post-ART &nbsp;
 <input type="radio" id="viral_load_option" name="viral_load_option" onfocus="emptyElement('status','status3')" value="32-36 weeks Gest Age">32-36 weeks Gest Age &nbsp;
 <?php } elseif($info['viral_load_option'] == "32-36 weeks Gest Age"){ ?>
 <input type="radio" id="viral_load_option" name="viral_load_option" onfocus="emptyElement('status','status3')" value="6 months post-ART" required>6 months post-ART &nbsp;
 <input type="radio" id="viral_load_option" checked="checked" name="viral_load_option" onfocus="emptyElement('status','status3')" value="32-36 weeks Gest Age">32-36 weeks Gest Age &nbsp;
 <?php }?>
 <br />
<input type="text" name="viral_load" id="viral_load" value="<?php echo $info['viral_load']; ?>" onfocus="emptyElement('status','status3')" style="width:25px;" required>Cells/mm &nbsp;
Date
<input type="date" name="viral_load_date" value="<?php echo date("Y-m-d", strtotime($info['viral_load_date'])); ?>" id="viral_load_date" onfocus="emptyElement('status','status3')" style="width:120px;" required>
</td></tr>

<tr><td style="width:20px;">7</td>
<td>ART Status</td>
<td>
<?php if($info['art_status'] == "Starting ART"){ ?>
<input type="radio" id="art_status" checked="checked" name="art_status" onfocus="emptyElement('status','status3')" value="Starting ART" required>Starting ART &nbsp;
 <input type="radio" id="art_status" name="art_status" onfocus="emptyElement('status','status3')" value="Continuing ART">Continuing ART &nbsp;
 <?php } elseif($info['art_status'] == "Continuing ART"){ ?>
 <input type="radio" id="art_status" name="art_status" onfocus="emptyElement('status','status3')" value="Starting ART" required>Starting ART &nbsp;
 <input type="radio" id="art_status" checked="checked" name="art_status" onfocus="emptyElement('status','status3')" value="Continuing ART">Continuing ART &nbsp;
 <?php }?>
 <br />
 <br />
 <?php if($info['art_status_line'] == "first line"){ ?>
 <input type="radio" id="art_status_line" checked="checked" onfocus="emptyElement('status','status3')" name="art_status_line" value="first line" required>1<sup>st</sup>LINE &nbsp;
 <input type="radio" id="art_status_line" onfocus="emptyElement('status','status3')" name="art_status_line" value="second line">2<sup>nd</sup>LINE &nbsp;
 <input type="radio" id="art_status_line" onfocus="emptyElement('status','status3')" name="art_status_line" value="Salvage">Salvage &nbsp;
 <?php } elseif($info['art_status_line'] == "second line"){ ?>
 <input type="radio" id="art_status_line" onfocus="emptyElement('status','status3')" name="art_status_line" value="first line" required>1<sup>st</sup>LINE &nbsp;
 <input type="radio" id="art_status_line" checked="checked" onfocus="emptyElement('status','status3')" name="art_status_line" value="second line">2<sup>nd</sup>LINE &nbsp;
 <input type="radio" id="art_status_line" onfocus="emptyElement('status','status3')" name="art_status_line" value="Salvage">Salvage &nbsp;
  <?php } elseif($info['art_status_line'] == "Salvage"){ ?>
 <input type="radio" id="art_status_line" onfocus="emptyElement('status','status3')" name="art_status_line" value="first line" required>1<sup>st</sup>LINE &nbsp;
 <input type="radio" id="art_status_line"  onfocus="emptyElement('status','status3')" name="art_status_line" value="second line">2<sup>nd</sup>LINE &nbsp;
 <input type="radio" id="art_status_line" checked="checked" onfocus="emptyElement('status','status3')" name="art_status_line" value="Salvage">Salvage &nbsp;
 
 <?php } else{?>
  <input type="radio" id="art_status_line" onfocus="emptyElement('status','status3')" name="art_status_line" value="first line" required>1<sup>st</sup>LINE &nbsp;
 <input type="radio" id="art_status_line" onfocus="emptyElement('status','status3')" name="art_status_line" value="second line">2<sup>nd</sup>LINE &nbsp;
  <input type="radio" id="art_status_line" onfocus="emptyElement('status','status3')" name="art_status_line" value="Salvage">Salvage &nbsp;

 <?php }?>
 <br />
 <br />
 REGIMEN/ ART COMBINATION 
<input tabindex="disable" type="text" value="<?php echo $info['art_status_regimen_combination']; ?>" name="art_status_regimen_combination" id="art_status_regimen_combination" onfocus="emptyElement('status','status3')"  style="color:#2BAC12; font-style:italic; width:120px; height:30px;" list="DrugName"  />
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
<br/>
Date
<input type="date" name="arv_start_date" value="<?php echo date("Y-m-d", strtotime($info['arv_start_date'])); ?>" onfocus="emptyElement('status','status3')" id="arv_start_date"  style="width:120px;"/>
</td>
</tr>

<tr><td style="width:20px;">8</td>
<td>CTX Prophylaxis</td>
<td>
<?php if($info['ctx_prophylaxis'] == "YES"){ ?>
<label><input type="radio" id="ctx_prophylaxis" checked="checked" onfocus="emptyElement('status','status3')" name="ctx_prophylaxis" value="YES" required>YES</label> &nbsp;


<?php }else{ ?>
<label><input type="radio" id="ctx_prophylaxis" onfocus="emptyElement('status','status3')" name="ctx_prophylaxis" value="YES" required>YES</label> &nbsp;

<?php } ?>

<hr style="margin-top:20px;" />
GA Commenced (in wks) 
<input type="text" name="ctx_prophylaxis_ga_commenced" value="<?php echo $info['ctx_prophylaxis_ga_commenced']; ?>" onfocus="emptyElement('status','status3')" id="ctx_prophylaxis_ga_commenced"  style="width:30px;"/>
&nbsp;
Date
<input type="date" name="ctx_prophylaxis_date" value="<?php echo date("Y-m-d", strtotime($info['ctx_prophylaxis_date'])); ?>" onfocus="emptyElement('status','status3')" id="ctx_prophylaxis_date"  style="width:120px;">
<br />
<hr />
<?php if($info['ctx_prophylaxis'] == "NO"){ ?>
<label><input type="radio" id="ctx_prophylaxis" checked="checked" onfocus="emptyElement('status','status3')" name="ctx_prophylaxis" value="NO">NO</label> &nbsp;
<?php }else{ ?>
<label><input type="radio" id="ctx_prophylaxis" onfocus="emptyElement('status','status3')" name="ctx_prophylaxis" value="NO">NO</label> &nbsp;
<?php } ?>
</td>
</tr>
<tr>
<td style="width:20px;">9</td>
<td>TB Screening</td>
<td><br />
<?php if($info['tb_screening'] == "YES"){ ?>
<label><input type="radio" id="tb_screening" checked="checked" onfocus="emptyElement('status','status3')" name="tb_screening" value="YES" required>YES</label> &nbsp;
<label>Date</label>
<input type="date" name="tb_screening_date" value="<?php echo date("Y-m-d", strtotime($info['tb_screening_date'])); ?>" onfocus="emptyElement('status','status3')" id="tb_screening_date"  style="width:120px;"/>
<?php }else{ ?>
<label><input type="radio" id="tb_screening" onfocus="emptyElement('status','status3')" name="tb_screening" value="YES" required>YES</label> &nbsp;
<label>Date</label>
<input type="date" name="tb_screening_date" onfocus="emptyElement('status','status3')" id="tb_screening_date"  style="width:120px;"/>
<?php } ?>
<hr />
<?php if($info['tb_screening'] == "NO"){ ?>
 <label><input type="radio" id="tb_screening" checked="checked" onfocus="emptyElement('status','status3')" name="tb_screening" value="NO">NO</label> &nbsp;
 <?php }else{ ?>
 <label><input type="radio" id="tb_screening" onfocus="emptyElement('status','status3')" name="tb_screening" value="NO">NO</label> &nbsp;
 <?php } ?>
</td>
</tr>
</table>
<span id="status3"></span>
<input type="hidden" id="id" name="id" value="<?php echo preg_replace('#[^0-9]#i', '', $_GET['id']); ?>"  />
<button type="button" id="submitbtn" name="submitbtn" style="float: right !important; cursor:pointer;" onClick="updateantenatalcare()" class="btn btn-success">Update</button>
</fieldset>
 
</form>
<p style="margin-bottom:150px;"></p>
</div>

</body>
</html>