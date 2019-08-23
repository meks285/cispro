<?php
$status='';
$rowcount='';
if(isset($_POST["pmtct_id"])){
// CONNECT TO THE DATABASE
include_once("db_conx.php");

				$id = preg_replace('#[^0-9]#i', '',  $_POST['id']);
				$visitdate = $_POST['visitdate'];
				$pmtct_id = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['pmtct_id']);
				$delivery_site = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['delivery_site']);
				$delivery_date = $_POST['delivery_date'];
				$did_preg_end_in_spon_abortion = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['did_preg_end_in_spon_abortion']);
				$art_given_to_mother_at_delivery = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['art_given_to_mother_at_delivery']);
				$art_given_to_mother_at_delivery_yes = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['art_given_to_mother_at_delivery_yes']);
				
				$no_of_infants_in_this_pregnancy = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['no_of_infants_in_this_pregnancy']);
				if($no_of_infants_in_this_pregnancy == "other"){
				$no_of_infants_in_this_pregnancy_other = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['no_of_infants_in_this_pregnancy_other']);
				$no_of_infants_in_this_pregnancy = $no_of_infants_in_this_pregnancy_other;
				}
			if(isset($_POST['no_of_infants_in_this_pregnancy_other']) && $_POST['no_of_infants_in_this_pregnancy_other'] != ""){
					$no_of_infants_in_this_pregnancy_other = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['no_of_infants_in_this_pregnancy_other']);
				$no_of_infants_in_this_pregnancy = $no_of_infants_in_this_pregnancy_other;
				}
				$sex = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['sex']);
				$status_of_birth =  $_POST['status_of_birth'];
				$status_of_birth_alive_weight = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['status_of_birth_alive_weight']);
				$status_of_birth_alive_lenght = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['status_of_birth_alive_lenght']);
				$status_of_birth_alive_head_circumf = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['status_of_birth_alive_head_circumf']);
				$status_of_birth_alive_gest_age = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['status_of_birth_alive_gest_age']);
				$status_of_birth_alive_apgar = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['status_of_birth_alive_apgar']);
				$syrup_nvp = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['syrup_nvp']);
				$syrup_zdv = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['syrup_zdv']);
				$feeding_method_chosen = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['feeding_method_chosen']);
				if($feeding_method_chosen == "other"){
					$feeding_method_chosen_specify = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['feeding_method_chosen_specify']);
					$feeding_method_chosen = $feeding_method_chosen_specify;
				}
				if(isset($_POST['feeding_method_chosen_specify']) && $_POST['feeding_method_chosen_specify'] != ""){
					$feeding_method_chosen_specify = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['feeding_method_chosen_specify']);
					$feeding_method_chosen = $feeding_method_chosen_specify;
				}
				
				$hospitalname = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['hospitalname']);
				$clinicname = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['clinicname']);
				$art_status_regimen_combination =  $_POST['art_status_regimen_combination'];
				$noofterms = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['noofterms']);
				$noofpremature = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['noofpremature']);
				$noofabortion = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['noofabortion']);
				$nooflivebirth = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['nooflivebirth']);
				$noofsurviving = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['noofsurviving']);
				
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
				
	$sql="UPDATE `pmtct_delivery` SET `visitdate` = '$visitdate',  `delivery_site`='$delivery_site',`hospitalname`='$hospitalname',`clinicname`='$clinicname',`delivery_date`='$delivery_date',`did_preg_end_in_spon_abortion`='$did_preg_end_in_spon_abortion',`art_given_to_mother_at_delivery`='$art_given_to_mother_at_delivery',`art_given_to_mother_at_delivery_yes`='$art_given_to_mother_at_delivery_yes',`art_status_regimen_combination`='$art_status_regimen_combination',`no_of_infants_in_this_pregnancy`='$no_of_infants_in_this_pregnancy',`sex`='$sex',`status_of_birth`='$status_of_birth',`status_of_birth_alive_weight`='$status_of_birth_alive_weight',`status_of_birth_alive_lenght`='$status_of_birth_alive_lenght',`status_of_birth_alive_head_circumf`='$status_of_birth_alive_head_circumf',`status_of_birth_alive_gest_age`='$status_of_birth_alive_gest_age',`status_of_birth_alive_apgar`='$status_of_birth_alive_apgar',`syrup_nvp`='$syrup_nvp',`syrup_zdv`='$syrup_zdv',`feeding_method_chosen`='$feeding_method_chosen',`noofterms`='$noofterms', `noofpremature`='$noofpremature', `noofabortion`='$noofabortion', `nooflivebirth`='$nooflivebirth', `noofsurviving`='$noofsurviving' WHERE `pmtct_id` = '$pmtct_id' and `id` = '$id'";

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
?><?php

include_once("db_conx.php");


class MyClass{
    public function GetUserInformation(){
		global $db;
		if(isset($_GET['pmtctid']) && $_GET['pmtctid'] !="" && isset($_GET['id']) && $_GET['id'] !=""){
			$pmtctid = preg_replace('#[^a-z0-9-]#i', '', $_GET['pmtctid']);
			$id = preg_replace('#[^0-9]#i', '', $_GET['id']);
			
		}else{
			header("location: pmtctdeliveryhistory.php");
            exit();
		}
$query = "SELECT  `visitdate`, `pmtct_id`, `delivery_site`, `hospitalname`, `clinicname`, `delivery_date`, `did_preg_end_in_spon_abortion`, `noofterms`, `noofpremature`, `noofabortion`, `nooflivebirth`, `noofsurviving`, `art_given_to_mother_at_delivery`, `art_given_to_mother_at_delivery_yes`, `art_status_regimen_combination`, `no_of_infants_in_this_pregnancy`, `sex`, `status_of_birth`, `status_of_birth_alive_weight`, `status_of_birth_alive_lenght`, `status_of_birth_alive_head_circumf`, `status_of_birth_alive_gest_age`, `status_of_birth_alive_apgar`, `syrup_nvp`, `syrup_zdv`, `feeding_method_chosen` FROM `pmtct_delivery` WHERE pmtct_id ='$pmtctid' and id = '$id'";

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
 function savepmtctdelivery(){
	 var id = _("id").value;
	 var visitdate = "Non";
var pmtct_id = _("pmtct_id").value;
				var delivery_site;
				var rates1 = document.getElementsByName('delivery_site');
				for(var i = 0; i < rates1.length; i++){
					if(rates1[i].checked){
						delivery_site = rates1[i].value;
					}
				}
				
				
				var delivery_date = _("delivery_date").value;
				var did_preg_end_in_spon_abortion = "Non";
				/*var rates2 = document.getElementsByName('did_preg_end_in_spon_abortion');
				for(var i = 0; i < rates2.length; i++){
					if(rates2[i].checked){
						did_preg_end_in_spon_abortion = rates2[i].value;
					}
				}*/
				
				var art_given_to_mother_at_delivery;
				var rates3 = document.getElementsByName('art_given_to_mother_at_delivery');
				for(var i = 0; i < rates3.length; i++){
					if(rates3[i].checked){
						art_given_to_mother_at_delivery = rates3[i].value;
					}
				}
				
				var art_given_to_mother_at_delivery_yes;
				var rates4 = document.getElementsByName('art_given_to_mother_at_delivery_yes');
				for(var i = 0; i < rates4.length; i++){
					if(rates4[i].checked){
						art_given_to_mother_at_delivery_yes = rates4[i].value;
					}
				}
				var no_of_infants_in_this_pregnancy_other = _("no_of_infants_in_this_pregnancy_other").value;
				//////it has other specify///////////////////////////////////////////////////////
				var no_of_infants_in_this_pregnancy;
				var rates5 = document.getElementsByName('no_of_infants_in_this_pregnancy');
				
				for(var i = 0; i < rates5.length; i++){
					if(rates5[i].checked){
						
							no_of_infants_in_this_pregnancy = rates5[i].value;
						
					}
				}
				
				var sex = "Non";
				/*var rates6 = document.getElementsByName('sex');
				for(var i = 0; i < rates6.length; i++){
					if(rates6[i].checked){
						sex = rates6[i].value;
					}
				}*/
				
				var status_of_birth = "Non";
				/*var rates7 = document.getElementsByName('status_of_birth');
				for(var i = 0; i < rates7.length; i++){
					if(rates7[i].checked){
						status_of_birth = rates7[i].value;
					}
				}*/
				
				var status_of_birth_alive_weight = "Non";
				var status_of_birth_alive_lenght = "Non";
				var status_of_birth_alive_head_circumf = "Non";
				var status_of_birth_alive_gest_age = "Non";
				var status_of_birth_alive_apgar = "Non";
				var syrup_nvp = "Non";
				/*var rates8 = document.getElementsByName('syrup_nvp');
				for(var i = 0; i < rates8.length; i++){
					if(rates8[i].checked){
						syrup_nvp = rates8[i].value;
					}
				}*/
				
				var syrup_zdv = "Non";
				/*var rates9 = document.getElementsByName('syrup_zdv');
				for(var i = 0; i < rates9.length; i++){
					if(rates9[i].checked){
						syrup_zdv = rates9[i].value;
					}
				}*/
				var feeding_method_chosen_specify = "Non"
				//var feeding_method_chosen_specify = _("feeding_method_chosen_specify").value;
				var feeding_method_chosen = "Non";
				
				/*var rates10 = document.getElementsByName('feeding_method_chosen');
				for(var i = 0; i < rates10.length; i++){
					if(rates10[i].checked){
						
							feeding_method_chosen = rates10[i].value;
						
					}
				}*/
				
				/////////////New fields///////////////////
				var hospitalname = _("hospitalname").value;
				var clinicname = _("clinicname").value;
				var art_status_regimen_combination = _("art_status_regimen_combination").value;
				var noofterms = _("noofterms").value;
				var noofpremature = _("noofpremature").value;
				var noofabortion = _("noofabortion").value;
				var nooflivebirth = _("nooflivebirth").value;
				var noofsurviving = _("noofsurviving").value;
				///////////////////////////////////////
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

var status = _("status");
var status3 = _("status3");
if(pmtct_id == "" ){
status.innerHTML = "<div id=\"error\">Please complete PMTCT ID!</div>";
status3.innerHTML = "<div id=\"error\">Please complete PMTCT ID!</div>";
}else if(visitdate == ""){
status.innerHTML = "<div id=\"error\">Please complete visit date!</div>";
status3.innerHTML = "<div id=\"error\">Please complete visit date!</div>";
}else if(delivery_site == "" || delivery_site == null){
status.innerHTML = "<div id=\"error\">Please complete Delivery site!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Delivery site!</div>";
}else if(delivery_site == "Hospital" && hospitalname == ""){
status.innerHTML = "<div id=\"error\">Please complete Delivery site!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Delivery site!</div>";
}else if(delivery_site == "TBA or CBA, Faith Clinic" && clinicname == ""){
status.innerHTML = "<div id=\"error\">Please complete Delivery site!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Delivery site!</div>";
}else if(delivery_date == "" || delivery_date == null){
status.innerHTML = "<div id=\"error\">Please complete Delivery date!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Delivery date!</div>";
}else if(noofterms == "" && noofpremature == "" && noofabortion == "" && nooflivebirth == "" && noofsurviving == ""){
status.innerHTML = "<div id=\"error\">Please complete Outcome of current Pregnancy!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Outcome of current Pregnancy!</div>";
} else if(art_given_to_mother_at_delivery == "" || art_given_to_mother_at_delivery == null){
status.innerHTML = "<div id=\"error\">Please complete ART given to mother at delivery!</div>";
status3.innerHTML = "<div id=\"error\">Please complete ART given to mother at delivery	!</div>";
} else if(no_of_infants_in_this_pregnancy == "" || no_of_infants_in_this_pregnancy == null){
status.innerHTML = "<div id=\"error\">Please complete Number of infants in this pregnancy!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Number of infants in this pregnancy!</div>";
} else if(sex == "" || sex == null){
status.innerHTML = "<div id=\"error\">Please complete Sex!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Sex!</div>";
}else if(status_of_birth == "" || status_of_birth == null || status_of_birth_alive_weight=="" || status_of_birth_alive_lenght=="" || status_of_birth_alive_head_circumf=="" || status_of_birth_alive_gest_age == "" || status_of_birth_alive_apgar == ""){
status.innerHTML = "<div id=\"error\">Please complete Status at birth!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Status at birth!</div>";
}else if(syrup_nvp == "" || syrup_nvp == null || syrup_zdv=="" || syrup_zdv==null){
status.innerHTML = "<div id=\"error\">Please complete Prophylaxis given to infant!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Prophylaxis given to infant!</div>";
}else if(feeding_method_chosen == "" || feeding_method_chosen == null){
status.innerHTML = "<div id=\"error\">Please complete Feeding Method Chosen!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Feeding Method Chosen!</div>";
} else {
	_("submitbtn").style.display = "none";
status.innerHTML = '<br/><img src="js/loading_bar.gif">';
status3.innerHTML = '<br/><img src="js/loading_bar.gif">';
var ajax = ajaxObj("POST", "pmtctdeliverybrowse.php");
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
        ajax.send("visitdate="+visitdate+"&pmtct_id="+pmtct_id+"&delivery_site="+delivery_site+"&delivery_date="+delivery_date+"&did_preg_end_in_spon_abortion="+did_preg_end_in_spon_abortion+"&art_given_to_mother_at_delivery="+art_given_to_mother_at_delivery+"&art_given_to_mother_at_delivery_yes="+art_given_to_mother_at_delivery_yes+"&no_of_infants_in_this_pregnancy="+no_of_infants_in_this_pregnancy+"&sex="+sex+"&status_of_birth="+status_of_birth+"&status_of_birth_alive_weight="+status_of_birth_alive_weight+"&status_of_birth_alive_lenght="+status_of_birth_alive_lenght+"&status_of_birth_alive_head_circumf="+status_of_birth_alive_head_circumf+"&status_of_birth_alive_gest_age="+status_of_birth_alive_gest_age+"&status_of_birth_alive_apgar="+status_of_birth_alive_apgar+"&syrup_nvp="+syrup_nvp+"&syrup_zdv="+syrup_zdv+"&feeding_method_chosen="+feeding_method_chosen+"&no_of_infants_in_this_pregnancy_other="+no_of_infants_in_this_pregnancy_other+"&feeding_method_chosen_specify="+feeding_method_chosen_specify+"&hospitalname="+hospitalname+"&clinicname="+clinicname+"&art_status_regimen_combination="+art_status_regimen_combination+"&noofterms="+noofterms+"&noofpremature="+noofpremature+"&noofabortion="+noofabortion+"&nooflivebirth="+nooflivebirth+"&noofsurviving="+noofsurviving+"&pepid="+pepid+"&uniqueid="+uniqueid+"&hospitalunit="+hospitalunit+"&surname="+surname+"&othernames="+othernames+"&hivdate="+hivdate+"&dateofbirth="+dateofbirth+"&phoneno="+phoneno+"&basicinfosex="+basicinfosex+"&facilityname="+facilityname+"&basicinfoage="+basicinfoage+"&first_anc_visit_date="+first_anc_visit_date+"&id="+id);
}
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
<h1 style="font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #FFFFFF;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px 355681;    border-radius: 0 10px 0 10px;    background: #355681;">PMTCT EMR - PMTCT DELIVERY &nbsp;&nbsp;&nbsp; </h1>
</div>
<br />
<br />
<br />
<br />
<div id="stylized" class="myform">

<form id="form" name="form" onSubmit="return false;">
<h3 style="text-align:center">BASIC INFORMATION</h3>
<span id="status"></span>
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
         <!--<div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Visit date</label>
<input type="date" name="visitdate" id="visitdate" value="<?php echo date("Y-m-d", strtotime($info['visitdate'])); ?>" onfocus="emptyElement('status','status3')"  style="width:120px; height:15px;" required>
        </fieldset>
         </div>-->
    </div>
</div>

</fieldset>
<fieldset>
<h3 style="text-align:center">DELIVERY</h3>
<table class="table table-bordered table-hover">

<tr><td style="width:20px;"></td>
<td><b>PMTCT ID</b></td><td><input type="text" name="pmtct_id" id="pmtct_id" style="width:120px;height:10px;" value="<?php echo $info['pmtct_id']; ?>" onfocus="emptyElement('status','status3')" required></td>
</tr>
<tr><td style="width:20px;">1</td>
<td><b>Delivery site</b></td>
<td>
<?php if($info['delivery_site'] == "Home"){ ?>
<input type="radio" name="delivery_site" checked="checked" onfocus="emptyElement('status','status3')" value="Home">Home &nbsp;
 <input type="radio" name="delivery_site" onfocus="emptyElement('status','status3')" value="TBA">TBA
 <input type="radio" name="delivery_site" onfocus="emptyElement('status','status3')" value="PHC">PHC or Faith Clinic (Specify)
 <input type="text" name="clinicname" id="clinicname" onfocus="emptyElement('status','status3')"  style="width:120px; height:15px;" required><br />
 <input type="radio" name="delivery_site" onfocus="emptyElement('status','status3')" value="Hospital">Hospital(Specify)
 <input type="text" name="hospitalname" id="hospitalname" onfocus="emptyElement('status','status3')"  style="width:120px; height:15px;" required>
 <?php }elseif($info['delivery_site'] == "Hospital"){?>
 <input type="radio" name="delivery_site"  onfocus="emptyElement('status','status3')" value="Home">Home &nbsp;
 <input type="radio" name="delivery_site" onfocus="emptyElement('status','status3')" value="TBA">TBA
 <input type="radio" name="delivery_site" onfocus="emptyElement('status','status3')" value="PHC">PHC or Faith Clinic (Specify)
 <input type="text" name="clinicname" id="clinicname" onfocus="emptyElement('status','status3')"  style="width:120px; height:15px;" required><br />
 <input type="radio" name="delivery_site" checked="checked" onfocus="emptyElement('status','status3')" value="Hospital">Hospital(Specify)
 <input type="text" name="hospitalname" id="hospitalname" value="<?php if(isset($info['hospitalname'])){ echo $info['hospitalname'];}?>" onfocus="emptyElement('status','status3')"  style="width:120px; height:15px;" required>
 <?php }elseif($info['delivery_site'] == "PHC"){?>
<input type="radio" name="delivery_site"  onfocus="emptyElement('status','status3')" value="Home">Home &nbsp;
 <input type="radio" name="delivery_site" onfocus="emptyElement('status','status3')" value="TBA">TBA
 <input type="radio" name="delivery_site" checked="checked" onfocus="emptyElement('status','status3')" value="PHC">PHC or Faith Clinic (Specify)
 <input type="text" name="clinicname" id="clinicname" value="<?php if(isset($info['clinicname'])){ echo $info['hospitalname'];}?>" onfocus="emptyElement('status','status3')"  style="width:120px; height:15px;" required><br />
 <input type="radio" name="delivery_site" onfocus="emptyElement('status','status3')" value="Hospital">Hospital(Specify)
 <input type="text" name="hospitalname" id="hospitalname"  onfocus="emptyElement('status','status3')"  style="width:120px; height:15px;" required>
 <?php }elseif($info['delivery_site'] == "TBA"){?>
<input type="radio" name="delivery_site"  onfocus="emptyElement('status','status3')" value="Home">Home &nbsp;
 <input type="radio" name="delivery_site" checked="checked" onfocus="emptyElement('status','status3')" value="TBA">TBA
 <input type="radio" name="delivery_site" onfocus="emptyElement('status','status3')" value="PHC">PHC or Faith Clinic (Specify)
 <input type="text" name="clinicname" id="clinicname" onfocus="emptyElement('status','status3')"  style="width:120px; height:15px;" required><br />
 <input type="radio" name="delivery_site" onfocus="emptyElement('status','status3')" value="Hospital">Hospital(Specify)
 <input type="text" name="hospitalname" id="hospitalname"  onfocus="emptyElement('status','status3')"  style="width:120px; height:15px;" required>
 <?php }?>
 </td>
</tr>

<tr><td style="width:20px;">2</td>
<td><b>Delivery date</b></td>
<td>
<label>Date</label>
<input type="date" name="delivery_date" value="<?php echo date("Y-m-d", strtotime($info['delivery_date'])); ?>" onfocus="emptyElement('status','status3')" id="delivery_date"  style="width:120px;"/>
 </td>
</tr>

<tr><td style="width:20px;">3</td>
<td><b>Outcome of current Pregnancy</b></td>
<td>
<!--<?php if($info['did_preg_end_in_spon_abortion'] == "YES"){ ?>
<input type="radio" name="did_preg_end_in_spon_abortion" checked="checked" onfocus="emptyElement('status','status3')" value="YES">YES &nbsp;&nbsp;
 <input type="radio" name="did_preg_end_in_spon_abortion" onfocus="emptyElement('status','status3')" value="NO">NO
 <?php } elseif($info['did_preg_end_in_spon_abortion'] == "NO"){ ?>
 <input type="radio" name="did_preg_end_in_spon_abortion" onfocus="emptyElement('status','status3')" value="YES">YES &nbsp;&nbsp;
 <input type="radio" name="did_preg_end_in_spon_abortion" checked="checked" onfocus="emptyElement('status','status3')" value="NO">NO
 <?php } ?>-->
 
 <div style="margin-left:50px;">
 <!--<input type="radio" id="pregnancy_history_tpals" onfocus="emptyElement('status','status3')" name="pregnancy_history_tpals" value="Term" required>-->Term <input type="text" onfocus="emptyElement('status','status3')" name="noofterms" id="noofterms"  value="<?php echo $info['noofterms']; ?>" style="width:30px;" required>
 <!--<input type="radio" id="pregnancy_history_tpals" onfocus="emptyElement('status','status3')" name="pregnancy_history_tpals" value="Premature">--> &nbsp; &nbsp;&nbsp; Premature <input type="text" onfocus="emptyElement('status','status3')" name="noofpremature" id="noofpremature" value="<?php echo $info['noofpremature']; ?>" style="width:30px;" required>
 <!--<input type="radio" id="pregnancy_history_tpals" onfocus="emptyElement('status','status3')" name="pregnancy_history_tpals" value="Abortion" >-->Abortion <input type="text" onfocus="emptyElement('status','status3')" name="noofabortion" id="noofabortion" value="<?php echo $info['noofabortion']; ?>" style="width:30px;" required>
 <!--<input type="radio" id="pregnancy_history_tpals" onfocus="emptyElement('status','status3')" name="pregnancy_history_tpals" value="Live birth" >-->&nbsp; &nbsp;&nbsp;Live birth<input type="text" onfocus="emptyElement('status','status3')" name="nooflivebirth" id="nooflivebirth" value="<?php echo $info['nooflivebirth']; ?>" style="width:30px;" required>
 <!--<input type="radio" id="pregnancy_history_tpals" onfocus="emptyElement('status','status3')" name="pregnancy_history_tpals" value="Surviving">-->Surviving <input type="text" onfocus="emptyElement('status','status3')" name="noofsurviving" id="noofsurviving" value="<?php echo $info['noofsurviving']; ?>" style="width:30px;" required>
 </div>
 </td>
</tr>

<tr><td style="width:20px;">4</td>
<td><b>ART given to mother at delivery</b></td>
<td>
<?php if($info['art_given_to_mother_at_delivery'] == "YES"){ ?>
<input type="radio" name="art_given_to_mother_at_delivery" checked="checked" onfocus="emptyElement('status','status3')" value="YES">YES
<input type="radio" name="art_given_to_mother_at_delivery"  onfocus="emptyElement('status','status3')" value="NO">NO 
 
 <?php } elseif($info['art_given_to_mother_at_delivery'] == "NO"){ ?>
 <input type="radio" name="art_given_to_mother_at_delivery" onfocus="emptyElement('status','status3')" value="YES">YES
 <input type="radio" name="art_given_to_mother_at_delivery" checked="checked" onfocus="emptyElement('status','status3')" value="NO">NO 
 
 <?php } ?>
 
 <div style="margin-left:15px;">
 <br />
 REGIMEN/ART COMBINATION 

<input tabindex="disable" type="text" name="art_status_regimen_combination" id="art_status_regimen_combination" value="<?php echo $info['art_status_regimen_combination']; ?>" onfocus="emptyElement('status','status3')"  style="color:#2BAC12; font-style:italic; width:120px; height:30px;" list="DrugName"  />
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
 <br />
 </div>
 </td>
</tr>

<tr><td style="width:20px;">5</td>
<td><b>Number of infants in this pregnancy</b></td>
<td>
<?php if($info['no_of_infants_in_this_pregnancy'] == "1"){ ?>
<input type="radio" name="no_of_infants_in_this_pregnancy" checked="checked" onfocus="emptyElement('status','status3')" value="1">1 
 <input type="radio" name="no_of_infants_in_this_pregnancy" onfocus="emptyElement('status','status3')" value="2">2
 <input type="radio" name="no_of_infants_in_this_pregnancy" onfocus="emptyElement('status','status3')" value="3">3 <br />
 <input type="radio" name="no_of_infants_in_this_pregnancy" onfocus="emptyElement('status','status3')" value="other">Other &nbsp;&nbsp;&nbsp;
 <input type="text" name="no_of_infants_in_this_pregnancy_other" value="" onfocus="emptyElement('status','status3')" id="no_of_infants_in_this_pregnancy_other" style="width:30px;"/>Specify
 
 <?php } elseif($info['no_of_infants_in_this_pregnancy'] == "2"){ ?>
<input type="radio" name="no_of_infants_in_this_pregnancy" onfocus="emptyElement('status','status3')" value="1">1 
 <input type="radio" name="no_of_infants_in_this_pregnancy" checked="checked" onfocus="emptyElement('status','status3')" value="2">2
 <input type="radio" name="no_of_infants_in_this_pregnancy" onfocus="emptyElement('status','status3')" value="3">3 <br />
 <input type="radio" name="no_of_infants_in_this_pregnancy" onfocus="emptyElement('status','status3')" value="other">Other &nbsp;&nbsp;&nbsp;
 <input type="text" name="no_of_infants_in_this_pregnancy_other" value="" onfocus="emptyElement('status','status3')" id="no_of_infants_in_this_pregnancy_other" style="width:30px;"/>Specify
 <?php } elseif($info['no_of_infants_in_this_pregnancy'] == "3"){ ?>
<input type="radio" name="no_of_infants_in_this_pregnancy" onfocus="emptyElement('status','status3')" value="1">1 
 <input type="radio" name="no_of_infants_in_this_pregnancy" onfocus="emptyElement('status','status3')" value="2">2
 <input type="radio" name="no_of_infants_in_this_pregnancy" checked="checked" onfocus="emptyElement('status','status3')" value="3">3 <br />
 <input type="radio" name="no_of_infants_in_this_pregnancy" onfocus="emptyElement('status','status3')" value="other">Other &nbsp;&nbsp;&nbsp;
 <input type="text" name="no_of_infants_in_this_pregnancy_other" value="" onfocus="emptyElement('status','status3')" id="no_of_infants_in_this_pregnancy_other" style="width:30px;"/>Specify
 <?php } else{ ?>
<input type="radio" name="no_of_infants_in_this_pregnancy" onfocus="emptyElement('status','status3')" value="1">1 
 <input type="radio" name="no_of_infants_in_this_pregnancy" onfocus="emptyElement('status','status3')" value="2">2
 <input type="radio" name="no_of_infants_in_this_pregnancy" onfocus="emptyElement('status','status3')" value="3">3 <br />
 <input type="radio" name="no_of_infants_in_this_pregnancy" checked="checked" onfocus="emptyElement('status','status3')" value="other">Other &nbsp;&nbsp;&nbsp;
 <input type="text" name="no_of_infants_in_this_pregnancy_other" value="<?php echo $info['no_of_infants_in_this_pregnancy']; ?>" onfocus="emptyElement('status','status3')" id="no_of_infants_in_this_pregnancy_other" style="width:30px;"/>Specify
  <?php } ?>


 </td>
</tr>
</table>

<span id="status3"></span>
<input type="hidden" id="id" name="id" value="<?php echo preg_replace('#[^0-9]#i', '', $_GET['id']); ?>"  />
<button type="button" id="submitbtn" name="submitbtn" style="float: right !important; cursor:pointer;" class="btn btn-success" onclick="savepmtctdelivery()">Update</button>
</fieldset>

</form>
<p style="margin-bottom:150px;"></p>
</div>

</body>
</html>