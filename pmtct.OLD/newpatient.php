<?php

$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


class MyClass{
    public function GetUserInformation(){
	$table = 'basic_info';
if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '".$table."'"))==1){

	} 
    
	else {
		
		$results = mysql_query("CREATE TABLE IF NOT EXISTS `basic_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pepid` varchar(100) DEFAULT NULL,
  `pmtct_id` varchar(20) DEFAULT NULL,
  `uniqueid` varchar(100) NOT NULL,
  `hospitalunit` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `othernames` varchar(255) DEFAULT NULL,
  `hivdate` date DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `phoneno` varchar(100) DEFAULT NULL,
  `basicinfosex` varchar(10) DEFAULT NULL,
  `facilityname` varchar(255) DEFAULT NULL,
  `basicinfoage` varchar(10) DEFAULT NULL,
  `first_anc_visit_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
)");

		$results0 = mysql_query("CREATE TABLE IF NOT EXISTS `antenatal_care` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `visitdate` date NOT NULL,
  `pmtct_id` varchar(100) NOT NULL,
  `partnershivserostatus` varchar(100) NOT NULL,
  `months_since_last_menstrual_period` varchar(50) DEFAULT NULL,
  `gestational_age_at_this_vist` varchar(50) DEFAULT NULL,
  `pregnancy_history` varchar(50) DEFAULT NULL,
  `pregnancy_history_tpals` varchar(100) DEFAULT NULL,
  `gravidityno` varchar(10) DEFAULT NULL,
  `noofterms` varchar(10) DEFAULT NULL,
  `noofpremature` varchar(10) DEFAULT NULL,
  `noofabortion` varchar(10) DEFAULT NULL,
  `nooflivebirth` varchar(10) DEFAULT NULL,
  `noofsurviving` varchar(10) DEFAULT NULL,
  `physical_findings_height` varchar(10) DEFAULT NULL,
  `physical_findings_bmi` varchar(100) DEFAULT NULL,
  `physical_findings_weight` varchar(50) DEFAULT NULL,
  `physical_findings_sbp` varchar(50) DEFAULT NULL,
  `physical_findings_dbp` varchar(50) DEFAULT NULL,
  `who` varchar(50) DEFAULT NULL,
  `baseline_cd4_count` varchar(50) DEFAULT NULL,
  `baseline_cd4_count_date` datetime DEFAULT NULL,
  `six_months_cd4_count` varchar(50) DEFAULT NULL,
  `six_months_cd4_count_date` datetime DEFAULT NULL,
  `most_recent_cd4_count` varchar(50) DEFAULT NULL,
  `most_recent_cd4_count_date` datetime DEFAULT NULL,
  `viral_load_option` varchar(100) DEFAULT NULL,
  `viral_load` varchar(50) DEFAULT NULL,
  `viral_load_date` datetime DEFAULT NULL,
  `art_status` varchar(50) DEFAULT NULL,
  `art_status_line` varchar(50) DEFAULT NULL,
  `art_status_regimen_combination` varchar(255) DEFAULT NULL,
  `ctx_prophylaxis` varchar(50) DEFAULT NULL,
  `ctx_prophylaxis_date` datetime DEFAULT NULL,
  `ctx_prophylaxis_ga_commenced` varchar(100) DEFAULT NULL,
  `tb_screening` varchar(50) DEFAULT NULL,
  `tb_screening_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
)");

		$results1 = mysql_query("CREATE TABLE IF NOT EXISTS `exposed_infant` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `visitdate` date NOT NULL,
  `pmtct_id` varchar(100) NOT NULL,
  `infant_eid_id` varchar(100) DEFAULT NULL,
  `visit_date` datetime DEFAULT NULL,
  `infant_name` varchar(255) DEFAULT NULL,
  `infant_date_of_birth` datetime DEFAULT NULL,
  `age_of_infant_at_visit` varchar(50) DEFAULT NULL,
  `age_of_infant_weeks_month` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `delivery_mode` varchar(255) DEFAULT NULL,
  `delivery_vaginal_tear` varchar(50) DEFAULT NULL,
  `delivery_vaginal_tear_age` varchar(50) DEFAULT NULL,
  `delivery_vaginal_tear_weight` varchar(50) DEFAULT NULL,
  `delivery_vaginal_tear_duration` varchar(50) DEFAULT NULL,
  `zbabies_hiv_serostatus` varchar(50) DEFAULT NULL,
  `zbabies_arv_history` varchar(50) DEFAULT NULL,
  `ctx_prophylasis` varchar(50) DEFAULT NULL,
  `six_week_eid_done` varchar(50) DEFAULT NULL,
  `six_week_eid_done_date` datetime DEFAULT NULL,
  `sample_collected` varchar(50) DEFAULT NULL,
  `sample_collected_date` datetime DEFAULT NULL,
  `sample_sent` varchar(50) DEFAULT NULL,
  `sample_sent_date` datetime DEFAULT NULL,
  `eid_result` varchar(50) DEFAULT NULL,
  `eid_result_date` datetime DEFAULT NULL,
  `eigthteen_rapidtest_done` varchar(50) DEFAULT NULL,
  `eigthteen_rapidtest_done_date` datetime DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  `ei_outcome_discharged` varchar(50) DEFAULT NULL,
  `ei_outcome_discharged_date` datetime DEFAULT NULL,
  `ei_outcome_linkedtocare` varchar(50) DEFAULT NULL,
  `ei_outcome_linkedtocare_ped_pepid` varchar(50) DEFAULT NULL,
  `ei_outcome_referred` varchar(50) DEFAULT NULL,
  `ei_outcome_referred_facilityname` varchar(255) DEFAULT NULL,
  `other_comments` text,
  `infant_sex` varchar(50) DEFAULT NULL,
  `status_of_birth` varchar(50) DEFAULT NULL,
  `status_of_birth_alive_weight` varchar(50) DEFAULT NULL,
  `status_of_birth_alive_lenght` varchar(50) DEFAULT NULL,
  `status_of_birth_alive_head_circumf` varchar(50) DEFAULT NULL,
  `status_of_birth_alive_gest_age` varchar(50) DEFAULT NULL,
  `status_of_birth_alive_apgar` varchar(50) DEFAULT NULL,
  `syrup_nvp` varchar(50) DEFAULT NULL,
  `feeding_method_chosen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
)");

		$results2 = mysql_query("CREATE TABLE IF NOT EXISTS `pmtct_delivery` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `visitdate` date NOT NULL,
  `pmtct_id` varchar(100) NOT NULL,
  `delivery_site` varchar(100) DEFAULT NULL,
  `hospitalname` varchar(255) DEFAULT NULL,
  `clinicname` varchar(255) DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `did_preg_end_in_spon_abortion` varchar(50) DEFAULT NULL,
  `noofterms` varchar(10) DEFAULT NULL,
  `noofpremature` varchar(10) DEFAULT NULL,
  `noofabortion` varchar(10) DEFAULT NULL,
  `nooflivebirth` varchar(10) DEFAULT NULL,
  `noofsurviving` varchar(10) DEFAULT NULL,
  `art_given_to_mother_at_delivery` varchar(50) DEFAULT NULL,
  `art_given_to_mother_at_delivery_yes` varchar(50) DEFAULT NULL,
  `art_status_regimen_combination` varchar(100) DEFAULT NULL,
  `no_of_infants_in_this_pregnancy` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `status_of_birth` varchar(50) DEFAULT NULL,
  `status_of_birth_alive_weight` varchar(50) DEFAULT NULL,
  `status_of_birth_alive_lenght` varchar(50) DEFAULT NULL,
  `status_of_birth_alive_head_circumf` varchar(50) DEFAULT NULL,
  `status_of_birth_alive_gest_age` varchar(50) DEFAULT NULL,
  `status_of_birth_alive_apgar` varchar(50) DEFAULT NULL,
  `syrup_nvp` varchar(50) DEFAULT NULL,
  `syrup_zdv` varchar(50) DEFAULT NULL,
  `feeding_method_chosen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
)");



		$info = '';
	}
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();

?>
<?php
$status='';
$rowcount='';
if(isset($_POST["pmtct_id"])){
// CONNECT TO THE DATABASE
include_once("db_conx.php");
				$pmtct_id =preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['pmtct_id']);
							 
				 	$pepid =  $_POST['pepid'];
					//$username =  $_POST['username'];
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
					
			  
		try {
			

	$sql2 = "INSERT INTO `basic_info`( `pepid`,`pmtct_id`, `uniqueid`, `hospitalunit`, `surname`, `othernames`, `hivdate`, `dateofbirth`, `phoneno`, `basicinfosex`, `facilityname`, `basicinfoage`, `first_anc_visit_date`) VALUES ('$pepid','$pmtct_id', '$uniqueid', '$hospitalunit', '$surname', '$othernames', '$hivdate', '$dateofbirth', '$phoneno', '$basicinfosex', '$facilityname', '$basicinfoage', '$first_anc_visit_date')";
	$stmt2  = $db->exec($sql2);
	  		 
		 echo "saved_succesfully";
		 
		}catch (PDOException $ex) {
		   echo "saved_failed";
		  //echo $ex;
		}
		


	exit();
}
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
 function savenewpatient(){
	 
	 	 
var pmtct_id = _("pmtct_id").value;

var pepid = _("pepid").value;
var username = _("username").value;
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
} else {
	_("submitbtn").style.display = "none";
status.innerHTML = '<br/><img src="js/loading_bar.gif">';
status3.innerHTML = '<br/><img src="js/loading_bar.gif">';
var ajax = ajaxObj("POST", "newpatient.php");
        ajax.onreadystatechange = function() {
       if(ajaxReturn(ajax) == true) {
		   if(ajax.responseText == "saved_succesfully"){
			   _("submitbtn").style.display = "block";
		   window.location = "antenatalcare.php?pmtctid="+pmtct_id+"&username="+username+"";
		   }else{ //addedto be removed
		    _("submitbtn").style.display = "block";
			status.innerHTML = "<div id=\"error\">Data failed to submit</div>";
			status3.innerHTML = "<div id=\"error\">Data failed to submit</div>";
			//status3.innerHTML = ajax.responseText;
				}// end else
			} 
        }// end else
        ajax.send("pmtct_id="+pmtct_id+"&pepid="+pepid+"&uniqueid="+uniqueid+"&hospitalunit="+hospitalunit+"&surname="+surname+"&othernames="+othernames+"&hivdate="+hivdate+"&dateofbirth="+dateofbirth+"&phoneno="+phoneno+"&basicinfosex="+basicinfosex+"&facilityname="+facilityname+"&basicinfoage="+basicinfoage+"&first_anc_visit_date="+first_anc_visit_date);
}
}

</script>
</head>

<body>

<div class='tops'>
<h1 style="font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #FFFFFF;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px 355681;    border-radius: 0 10px 0 10px;    background: #355681;">NEW PATIENT (PMTCT) &nbsp;&nbsp;&nbsp; </h1>
</div>
<br />
<br />
<br />
<?php
$uname=$_GET["username"];
if (isset($_GET['data_set'])){
echo '<a href="../registration.php?username='.$uname.'">[REGISTRATION MENU]</a>&nbsp; &nbsp; &nbsp; &nbsp;'; 
}
else{
echo '<a href="../main.php?username='.$uname.'">[MAIN MENU]</a>&nbsp; &nbsp; &nbsp; &nbsp;'; 
}
?>

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
<input type="text" name="pepid" id="pepid"  style="width:120px;height:10px;" required>
      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>
Unique ID
</label>
<input type="text" name="uniqueid" id="uniqueid"  style="width:120px;height:10px;" required>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Hospital(UNIT) Number
</label>
<input type="text" name="hospitalunit" id="hospitalunit"  style="width:120px;height:10px;" required>

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
<input type="text" name="surname" id="surname" style="width:120px;height:10px;" required>
      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>Other names
</label>
<input type="text" name="othernames" id="othernames" style="width:120px;height:10px;" required>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>HIV+ Date (Confirmed)
</label>
<input type="date" name="hivdate" id="hivdate" style="width:120px;height:10px;" required> 


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
<input type="date" name="dateofbirth" id="dateofbirth" style="width:120px;height:10px;"  required> 
    </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Phone Number
</label>
<input type="text" name="phoneno" id="phoneno" style="width:120px;height:10px;" required>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Sex
</label>
<select name="basicinfosex" id="basicinfosex" onfocus="emptyElement('status','status3')" style="width:120px;">
<option value="Female">Female</option>
</select>
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
<input type="text" name="facilityname" id="facilityname" style="width:120px; height:10px;" required>
    </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Age</label>
<input type="text" name="basicinfoage" id="basicinfoage" size="1"  style="height:10px;" required>
          </fieldset>
         </div>     
         
          <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
PMTCT ID </label>
<input type="text" name="pmtct_id" id="pmtct_id"  onfocus="emptyElement('status','status3')" style="height:10px;" required>
<input type="hidden" name="username" id="username" value="<?php echo $_GET['username']; ?>"  style="height:10px;">
          </fieldset>
         </div>            
              
        
    </div>
</div>

</fieldset>

<fieldset>
<span id="status3"></span>
<button type="button" id="submitbtn" name="submitbtn" style="float: right !important; cursor:pointer;" onClick="savenewpatient()" class="btn btn-success">Submit</button>
<br /><br /><br /><br />
<span id="status4"></span>
<button type="button" id="submitbtn" name="submitbtn" style="float: right !important; cursor:pointer; background-color:#EFAC77" class="btn btn-success"><a href="./exposedinfantz.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>">Z-Babies</a></button>
</fieldset>
 
</form>
<p style="margin-bottom:50px;"></p>
</div>

</body>
</html>