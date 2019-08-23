<?php

$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$counreport = 1;

class MyClass{
    public function GetUserInformation(){
	$table = 'basic_info';
	$column = 'months_eid_ordered';
	$column1 = 'infant_oname';
	$column2 = 'assited_vagina_type';
	$column3 = 'eid_zbabies_date';

	$column4 = 'linkedtocare_ped_pepid_fcaility';
	$column5 = 'delivery_rom';
	$column6 = 'delivery_bleeding';
	$column7 = 'delivery_episiotomy';
	$column8 = 'eid_zbabies';
	$column9 = 'loss_followup';
	$column10 = 'noofdeliveries';
	$column11 = 'age_first_dna_p';
	$column12 = 'months_eid_ordered';
	$column13 = 'hiv_neg_breastfd_st';
	$column14 = 'ei_outcome_linkedtocare2';

if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '".$table."'"))==1){
	$results_C2 = mysql_query("ALTER TABLE exposed_infant
	MODIFY COLUMN age_first_dna_pcr varchar(4) DEFAULT NULL;");
	if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN months_eid_ordered varchar(10) DEFAULT NULL;");
	}
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column1."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN infant_oname varchar(50) DEFAULT NULL;");
	}
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column2."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN assited_vagina_type varchar(50) DEFAULT NULL;");
	}
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column3."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN eid_zbabies_date date DEFAULT NULL;");
	}
// Addition of Multiple New Columns
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column4."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN linkedtocare_ped_pepid_fcaility varchar(50) DEFAULT NULL;");
	}
// Addition of Multiple New Columns
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column5."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN delivery_rom varchar(50) DEFAULT NULL;");
	}
// Addition of Multiple New Columns
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column6."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN delivery_bleeding varchar(50) DEFAULT NULL;");
	}
// Addition of Multiple New Columns
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column7."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN delivery_episiotomy varchar(50) DEFAULT NULL;");
	}
// Addition of Multiple New Columns
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column8."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN eid_zbabies varchar(50) DEFAULT NULL;");
	}
// Addition of Multiple New Columns
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column9."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN loss_followup varchar(50) DEFAULT NULL;");
	}
// Addition of Multiple New Columns
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column10."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN noofdeliveries varchar(50) DEFAULT NULL;");
	}
// Addition of Multiple New Columns
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column11."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN age_first_dna_p varchar(50) DEFAULT NULL;");
	}
// Addition of Multiple New Columns
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column12."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN months_eid_ordered varchar(50) DEFAULT NULL;");
	}
// Addition of Multiple New Columns
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column13."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN hiv_neg_breastfd_st varchar(100) DEFAULT NULL;");
	}
	
	// Addition of Multiple New Columns
if(mysql_num_rows(mysql_query("SHOW COLUMNS FROM `exposed_infant` LIKE '".$column14."'"))==0){
	$results_C1 = mysql_query("ALTER TABLE exposed_infant
	ADD COLUMN ei_outcome_linkedtocare2 varchar(100) DEFAULT NULL;");
	}
	
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
  `age_first_dna_pcr` varchar(4) DEFAULT NULL,
  `months_eid_ordered` varchar(10) DEFAULT NULL,
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

?><?php
$status='';
$rowcount='';
if(isset($_POST["pmtct_id"])){
// CONNECT TO THE DATABASE
include_once("db_conx.php");

				$visitdate =$_POST['visitdate'];
				$pmtct_id = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['pmtct_id']);
				$noofdeliveries = preg_replace('#[^0-9]#i', '',  $_POST['noofdeliveries']);
				$infant_eid_id= preg_replace('#[^a-z 0-9.-]#i', '',  $_POST['infant_eid_id']);
				$visit_date =$_POST['visit_date'];
				$infant_name=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['infant_name']);
				$infant_date_of_birth=$_POST['infant_date_of_birth'];
				$age_of_infant_at_visit=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['age_of_infant_at_visit']);
				$age_of_infant_weeks_month=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['age_of_infant_weeks_month']);
				$sex=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['sex']);
				$delivery_mode=	preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['delivery_mode']);
				$delivery_vaginal_tear=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['delivery_vaginal_tear']);
				$delivery_vaginal_tear_age=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['delivery_vaginal_tear_age']);
				$delivery_vaginal_tear_weight=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['delivery_vaginal_tear_weight']);
				$delivery_vaginal_tear_duration=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['delivery_vaginal_tear_duration']);
				$zbabies_hiv_serostatus=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['zbabies_hiv_serostatus']);
				$zbabies_arv_history=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['zbabies_arv_history']);
				if($zbabies_arv_history == "other"){
					$zbabies_arv_history_specify = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['zbabies_arv_history_specify']);
					$zbabies_arv_history = $zbabies_arv_history_specify;
				}
				if(isset($_POST['zbabies_arv_history_specify']) && $_POST['zbabies_arv_history_specify'] != ""){
					$zbabies_arv_history_specify = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['zbabies_arv_history_specify']);
					$zbabies_arv_history = $zbabies_arv_history_specify;
				}
				$ctx_prophylasis=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['ctx_prophylasis']);
				$six_week_eid_done=	preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['six_week_eid_done']);
				$six_week_eid_done_date=$_POST['six_week_eid_done_date'];
				$sample_collected=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['sample_collected']);
				$sample_collected_date=	$_POST['sample_collected_date'];
				$sample_sent=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['sample_sent']);
				$sample_sent_date=$_POST['sample_sent_date'];
				$eid_result=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['eid_result']);
				$eid_result_date=$_POST['eid_result_date'];
				$eigthteen_rapidtest_done=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['eigthteen_rapidtest_done']);
				$eigthteen_rapidtest_done_date=	$_POST['eigthteen_rapidtest_done_date'];
				$result=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['result']);
				$ei_outcome_discharged=	preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['ei_outcome_discharged']);
				$ei_outcome_discharged_date=$_POST['ei_outcome_discharged_date'];
				$ei_outcome_linkedtocare=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['ei_outcome_linkedtocare']);
				$ei_outcome_linkedtocare_ped_pepid=	preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['ei_outcome_linkedtocare_ped_pepid']);
				$ei_outcome_referred=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['ei_outcome_referred']);
				$ei_outcome_referred_facilityname=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['ei_outcome_referred_facilityname']);
				$other_comments=preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['other_comments']);
				
				
				 
				$infant_sex = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['infant_sex']);			
				$status_of_birth = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['status_of_birth']);
				$status_of_birth_alive_weight= preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['status_of_birth_alive_weight']);
				$status_of_birth_alive_lenght = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['status_of_birth_alive_lenght']);
				$status_of_birth_alive_head_circumf = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['status_of_birth_alive_head_circumf']);
				$status_of_birth_alive_gest_age = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['status_of_birth_alive_gest_age']);
				$status_of_birth_alive_apgar = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['status_of_birth_alive_apgar']);
				$syrup_nvp = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['syrup_nvp']);

								
				$feeding_method_chosen = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['feeding_method_chosen']);
				if($feeding_method_chosen == "other"){
					$feeding_method_chosen_specify = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['feeding_method_chosen_specify']);
					$feeding_method_chosen = $feeding_method_chosen_specify;
				}
				if(isset($_POST['feeding_method_chosen_specify']) && $_POST['feeding_method_chosen_specify'] != ""){
					$feeding_method_chosen_specify = preg_replace('#[^a-z 0-9,()-]#i', '',  $_POST['feeding_method_chosen_specify']);
					$feeding_method_chosen = $feeding_method_chosen_specify;
				}
				///New fields 13/5/2016 /////////
				$infant_oname = preg_replace('#[^a-z 0-9()-]#i', '',  $_POST['infant_oname']);
				$assited_vagina_type = preg_replace('#[^a-z 0-9()-]#i', '',  $_POST['assited_vagina_type']);
				
				if($delivery_mode == "other"){
				$delivery_mode_specify = preg_replace('#[^a-z 0-9()-]#i', '',  $_POST['delivery_mode_specify']);
				$delivery_mode = $delivery_mode_specify;
				}
				
				$eid_zbabies_date =  $_POST['eid_zbabies_date'];
				$linkedtocare_ped_pepid_fcaility = preg_replace('#[^a-z 0-9()-]#i', '',  $_POST['linkedtocare_ped_pepid_fcaility']);
				
				$delivery_rom = preg_replace('#[^a-z 0-9()-]#i', '',  $_POST['delivery_rom']);
				$delivery_bleeding = preg_replace('#[^a-z 0-9()-]#i', '',  $_POST['delivery_bleeding']);
				$delivery_episiotomy = preg_replace('#[^a-z 0-9()-]#i', '',  $_POST['delivery_episiotomy']);
				$eid_zbabies = preg_replace('#[^a-z 0-9()-]#i', '',  $_POST['eid_zbabies']);
				$loss_followup = preg_replace('#[^a-z 0-9()-]#i', '',  $_POST['loss_followup']);
				$noofdeliveries = preg_replace('#[^0-9]#i', '',  $_POST['noofdeliveries']);
				$age_first_dna_pcr = $_POST['age_first_dna_pcr'];
				$months_eid_ordered = preg_replace('#[^a-z 0-9()-]#i', '',  $_POST['months_eid_ordered']);
				
				///new fields 24/08/2016
				$hiv_neg_breastfd_st = preg_replace('#[^a-z 0-9,-]#i', '',  $_POST['hiv_neg_breastfd_st']);
				
		//new 06/09/2016
		$ei_outcome_linkedtocare2 = preg_replace('#[^a-z 0-9,-]#i', '',  $_POST['ei_outcome_linkedtocare2']);

	$sql = "INSERT INTO `exposed_infant`(`visitdate`,`pmtct_id`, `infant_eid_id`, `visit_date`, `infant_name`, `infant_date_of_birth`, `age_of_infant_at_visit`, `age_of_infant_weeks_month`, `sex`, `delivery_mode`, `delivery_vaginal_tear`, `delivery_vaginal_tear_age`, `delivery_vaginal_tear_weight`, `delivery_vaginal_tear_duration`, `zbabies_hiv_serostatus`, `zbabies_arv_history`, `ctx_prophylasis`, `six_week_eid_done`, `six_week_eid_done_date`, `sample_collected`, `sample_collected_date`, `sample_sent`, `sample_sent_date`, `eid_result`, `eid_result_date`, `eigthteen_rapidtest_done`, `eigthteen_rapidtest_done_date`, `result`, `ei_outcome_discharged`, `ei_outcome_discharged_date`, `ei_outcome_linkedtocare`, `ei_outcome_linkedtocare_ped_pepid`, `ei_outcome_referred`, `ei_outcome_referred_facilityname`, `other_comments`, `infant_sex`, `status_of_birth`, `status_of_birth_alive_weight`, `status_of_birth_alive_lenght`, `status_of_birth_alive_head_circumf`, `status_of_birth_alive_gest_age`, `status_of_birth_alive_apgar`, `syrup_nvp`, `feeding_method_chosen`,`infant_oname`, `assited_vagina_type`, `eid_zbabies_date`, `linkedtocare_ped_pepid_fcaility`, `delivery_rom`, `delivery_bleeding`, `delivery_episiotomy`, `eid_zbabies`, `loss_followup`,`noofdeliveries`,`age_first_dna_pcr`,`months_eid_ordered`,`hiv_neg_breastfd_st`,`ei_outcome_linkedtocare2`) VALUES ('$visitdate','$pmtct_id','$infant_eid_id','$visit_date','$infant_name','$infant_date_of_birth','$age_of_infant_at_visit','$age_of_infant_weeks_month','$sex','$delivery_mode','$delivery_vaginal_tear','$delivery_vaginal_tear_age','$delivery_vaginal_tear_weight','$delivery_vaginal_tear_duration','$zbabies_hiv_serostatus','$zbabies_arv_history','$ctx_prophylasis','$six_week_eid_done','$six_week_eid_done_date','$sample_collected','$sample_collected_date','$sample_sent','$sample_sent_date','$eid_result','$eid_result_date','$eigthteen_rapidtest_done','$eigthteen_rapidtest_done_date','$result','$ei_outcome_discharged','$ei_outcome_discharged_date','$ei_outcome_linkedtocare','$ei_outcome_linkedtocare_ped_pepid','$ei_outcome_referred','$ei_outcome_referred_facilityname','$other_comments','$infant_sex','$status_of_birth','$status_of_birth_alive_weight','$status_of_birth_alive_lenght','$status_of_birth_alive_head_circumf','$status_of_birth_alive_gest_age','$status_of_birth_alive_apgar','$syrup_nvp','$feeding_method_chosen','$infant_oname','$assited_vagina_type','$eid_zbabies_date','$linkedtocare_ped_pepid_fcaility','$delivery_rom','$delivery_bleeding','$delivery_episiotomy','$eid_zbabies','$loss_followup','$noofdeliveries','$age_first_dna_pcr','$months_eid_ordered','$hiv_neg_breastfd_st','$ei_outcome_linkedtocare2')";
	
	try {
						
		 $stmt   = $db->exec($sql);
		 echo "saved_succesfully";
		 
		}catch (PDOException $ex) {
			echo $ex->getMessage();
		   //echo "saved_failed";
		}
		


	exit();
}
?><?php

include_once("db_conx.php");


class MyClass2{
    public function GetUserInformation2(){
		global $db;
		if(isset($_GET['pmtctid']) && $_GET['pmtctid'] !=""){
			$pmtctid = preg_replace('#[^a-z0-9-]#i', '', $_GET['pmtctid']);
$query = "SELECT `id`, `pepid`,`pmtct_id`, `uniqueid`, `hospitalunit`, `surname`, `othernames`, `hivdate`, `dateofbirth`, `phoneno`, `basicinfosex`, `facilityname`, `basicinfoage`, `first_anc_visit_date` FROM `basic_info` WHERE pmtct_id ='$pmtctid'";
        $stmt = $db->query($query);
        $info2 = $stmt->fetch(PDO::FETCH_ASSOC);
        return $info2;
			
		}
		
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
 function saveexposedinfant(){
	 
var pmtct_id = _("pmtct_id").value;
var infant_eid_id= _("infant_eid_id").value;
var visit_date ="Non";
var infant_name=_("infant_name").value;
var infant_date_of_birth=_("infant_date_of_birth").value;
var age_of_infant_at_visit=	_("age_of_infant_at_visit").value;
var visitdate = "Non";
var age_of_infant_weeks_month;
var rates1 = document.getElementsByName('age_of_infant_weeks_month');
				for(var i = 0; i < rates1.length; i++){
					if(rates1[i].checked){
						age_of_infant_weeks_month = rates1[i].value;
					}
				}
				
var sex;
var rates2 = document.getElementsByName('sex');
				for(var i = 0; i < rates2.length; i++){
					if(rates2[i].checked){
						sex = rates2[i].value;
					}
				}
				
var delivery_mode;
var rates3 = document.getElementsByName('delivery_mode');
				for(var i = 0; i < rates3.length; i++){
					if(rates3[i].checked){
						delivery_mode = rates3[i].value;
					}
				}

var delivery_vaginal_tear;
var rates4 = document.getElementsByName('delivery_vaginal_tear');
				for(var i = 0; i < rates4.length; i++){
					if(rates4[i].checked){
						delivery_vaginal_tear = rates4[i].value;
					}
				}

var delivery_vaginal_tear_age="Non";
var delivery_vaginal_tear_weight="Non";
var delivery_vaginal_tear_duration="Non";

var zbabies_hiv_serostatus = "Non";

var zbabies_arv_history;
var rates6 = document.getElementsByName('zbabies_arv_history');
				for(var i = 0; i < rates6.length; i++){
					if(rates6[i].checked){
						zbabies_arv_history = rates6[i].value;
					}
				}
var zbabies_arv_history_specify = _("zbabies_arv_history_specify").value

var ctx_prophylasis;
var rates7 = document.getElementsByName('ctx_prophylasis');
				for(var i = 0; i < rates7.length; i++){
					if(rates7[i].checked){
						ctx_prophylasis = rates7[i].value;
					}
				}

var six_week_eid_done;
var rates8 = document.getElementsByName('six_week_eid_done');
				for(var i = 0; i < rates8.length; i++){
					if(rates8[i].checked){
						six_week_eid_done = rates8[i].value;
					}
				}

var six_week_eid_done_date=_("six_week_eid_done_date").value;

var sample_collected;
var rates9 = document.getElementsByName('sample_collected');
				for(var i = 0; i < rates9.length; i++){
					if(rates9[i].checked){
						sample_collected = rates9[i].value;
					}
				}
				
var sample_collected_date=	_("sample_collected_date").value;

var sample_sent;
var rates10 = document.getElementsByName('sample_sent');
				for(var i = 0; i < rates10.length; i++){
					if(rates10[i].checked){
						sample_sent = rates10[i].value;
					}
				}

var sample_sent_date=_("sample_sent_date").value;

var eid_result;
var rates11 = document.getElementsByName('eid_result');
				for(var i = 0; i < rates11.length; i++){
					if(rates11[i].checked){
						eid_result = rates11[i].value;
					}
				}


var eid_result_date=_("eid_result_date").value;

var eigthteen_rapidtest_done;
var rates12 = document.getElementsByName('eigthteen_rapidtest_done');
				for(var i = 0; i < rates12.length; i++){
					if(rates12[i].checked){
						eigthteen_rapidtest_done = rates12[i].value;
					}
				}

var eigthteen_rapidtest_done_date=	_("eigthteen_rapidtest_done_date").value;

var result;
var rates13 = document.getElementsByName('result');
				for(var i = 0; i < rates13.length; i++){
					if(rates13[i].checked){
						result = rates13[i].value;
					}
				}

var ei_outcome_discharged;
var rates14 = document.getElementsByName('ei_outcome_discharged');
				for(var i = 0; i < rates14.length; i++){
					if(rates14[i].checked){
						ei_outcome_discharged = rates14[i].value;
					}
				}

var ei_outcome_discharged_date=_("ei_outcome_discharged_date").value;

var ei_outcome_linkedtocare;
var rates15 = document.getElementsByName('ei_outcome_linkedtocare');
				for(var i = 0; i < rates15.length; i++){
					if(rates15[i].checked){
						ei_outcome_linkedtocare = rates15[i].value;
					}
				}
///// New field 06/09/2016 ///////// 
var ei_outcome_linkedtocare2;
var rates155 = document.getElementsByName('ei_outcome_linkedtocare2');
				for(var i = 0; i < rates155.length; i++){
					if(rates155[i].checked){
						ei_outcome_linkedtocare2 = rates155[i].value;
					}
				}
/////////////////////////////////////////
var ei_outcome_linkedtocare_ped_pepid=	_("ei_outcome_linkedtocare_ped_pepid").value;

var ei_outcome_referred = "Non";
/*
var rates16 = document.getElementsByName('ei_outcome_referred');
				for(var i = 0; i < rates16.length; i++){
					if(rates16[i].checked){
						ei_outcome_referred = rates16[i].value;
					}
				}
				
				*/

var ei_outcome_referred_facilityname=_("ei_outcome_referred_facilityname").value;
var other_comments=_("other_comments").value;				

//////////////// new fields //////////////////////
			var infant_sex;
				var rates17 = document.getElementsByName('infant_sex');
				for(var i = 0; i < rates17.length; i++){
					if(rates17[i].checked){
						infant_sex = rates17[i].value;
					}
				}
				var status_of_birth;
				var rates18 = document.getElementsByName('status_of_birth');
				for(var i = 0; i < rates18.length; i++){
					if(rates18[i].checked){
						status_of_birth = rates18[i].value;
					}
				}
				
				var status_of_birth_alive_weight = _("status_of_birth_alive_weight").value;
				var status_of_birth_alive_lenght = _("status_of_birth_alive_lenght").value;
				var status_of_birth_alive_head_circumf =_("status_of_birth_alive_head_circumf").value;
				var status_of_birth_alive_gest_age = _("status_of_birth_alive_gest_age").value;
				var status_of_birth_alive_apgar = _("status_of_birth_alive_apgar").value;
				var syrup_nvp;
				var rates19 = document.getElementsByName('syrup_nvp');
				for(var i = 0; i < rates19.length; i++){
					if(rates19[i].checked){
						syrup_nvp = rates19[i].value;
					}
				}
				
				var feeding_method_chosen_specify = _("feeding_method_chosen_specify").value;
				var feeding_method_chosen;
				
				var rates20 = document.getElementsByName('feeding_method_chosen');
				for(var i = 0; i < rates20.length; i++){
					if(rates20[i].checked){
						
							feeding_method_chosen = rates20[i].value;
						
					}
				}
				
				
				var noofdeliveries;
				var rates21 = document.getElementsByName('noofdeliveries');
				for(var i = 0; i < rates21.length; i++){
					if(rates21[i].checked){
						
							noofdeliveries = rates21[i].value;
						
					}
				}

///New fields 13/5/2016 ////////////////
var infant_oname = _("infant_oname").value;
var assited_vagina_type = _("assited_vagina_type").value;
var delivery_mode_specify = _("delivery_mode_specify").value;
var eid_zbabies_date = _("eid_zbabies_date").value;
var linkedtocare_ped_pepid_fcaility = _("linkedtocare_ped_pepid_fcaility").value;
var age_first_dna_pcr = _("age_first_dna_pcr").value

				var delivery_rom;
				var rates22 = document.getElementsByName('delivery_rom');
				for(var i = 0; i < rates22.length; i++){
					if(rates22[i].checked){
						
							delivery_rom = rates22[i].value;
						
					}
				}
				
				var delivery_bleeding;
				var rates23 = document.getElementsByName('delivery_bleeding');
				for(var i = 0; i < rates23.length; i++){
					if(rates23[i].checked){
						
							delivery_bleeding = rates23[i].value;
						
					}
				}
				
				var delivery_episiotomy;
				var rates24 = document.getElementsByName('delivery_episiotomy');
				for(var i = 0; i < rates24.length; i++){
					if(rates24[i].checked){
						
							delivery_episiotomy = rates24[i].value;
						
					}
				}
				
				var eid_zbabies;
				var rates25 = document.getElementsByName('eid_zbabies');
				for(var i = 0; i < rates25.length; i++){
					if(rates25[i].checked){
						
							eid_zbabies = rates25[i].value;
						
					}
				}
				
				var loss_followup = "Non";
				/*var rates26 = document.getElementsByName('loss_followup');
				for(var i = 0; i < rates26.length; i++){
					if(rates26[i].checked){
						
							loss_followup = rates26[i].value;
						
					}
				}*/
				
				var noofdeliveries;
				var rates27 = document.getElementsByName('noofdeliveries');
				for(var i = 0; i < rates27.length; i++){
					if(rates27[i].checked){
						
							noofdeliveries = rates27[i].value;
						
					}
				}
				
				var months_eid_ordered;
			var rates28 = document.getElementsByName('months_eid_ordered');
				for(var i = 0; i < rates28.length; i++){
					if(rates28[i].checked){
						
							months_eid_ordered = rates28[i].value;
						
					}
				}
				
				///new fields 24/08/2016
				var hiv_neg_breastfd_st;
				var rates28 = document.getElementsByName('hiv_neg_breastfd_st');
				for(var i = 0; i < rates29.length; i++){
					if(rates29[i].checked){
						
							hiv_neg_breastfd_st = rates29[i].value;
						
					}
				}
				
////////////////////////////////////////////				

var status = _("status");
var status3 = _("status3");
if(pmtct_id == ""){
status.innerHTML = "<div id=\"error\">Please complete PMTCT ID!</div>";
status3.innerHTML = "<div id=\"error\">Please complete PMTCT ID!</div>";
}else if(visitdate == ""){
status.innerHTML = "<div id=\"error\">Please complete visit date!</div>";
status3.innerHTML = "<div id=\"error\">Please complete visit date!</div>";
}else if(noofdeliveries == "" || noofdeliveries==null){
status.innerHTML = "<div id=\"error\">Please complete No of Deliveries!</div>";
status3.innerHTML = "<div id=\"error\">Please complete No of Deliveries!</div>";
}else if(infant_eid_id == ""){
status.innerHTML = "<div id=\"error\">Please complete Infant's EID ID!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Infant's EID ID!</div>";
}else if(visit_date == ""){
status.innerHTML = "<div id=\"error\">Please complete Visit Date!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Visit Date!</div>";
} else if(infant_name == ""){
status.innerHTML = "<div id=\"error\">Please complete Infant’s Name!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Infant’s Name!</div>";
}else if(infant_date_of_birth == ""){
status.innerHTML = "<div id=\"error\">Please complete Infant’s date of birth!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Infant’s date of birth!</div>";
}else if(age_of_infant_at_visit == "" || age_of_infant_at_visit==null || age_of_infant_weeks_month=="" || age_of_infant_weeks_month==null){
status.innerHTML = "<div id=\"error\">Please complete Age of infant at visit!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Age of infant at visit!</div>";
}else if(sex == "" || sex==null){
status.innerHTML = "<div id=\"error\">Please complete Sex!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Sex!</div>";
}else if(delivery_mode == "" || delivery_mode==null || delivery_vaginal_tear=="" || delivery_vaginal_tear==null){
status.innerHTML = "<div id=\"error\">Please complete Delivery!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Delivery!</div>";
}else if(ctx_prophylasis == "" || ctx_prophylasis==null){
status.innerHTML = "<div id=\"error\">Please complete CTX Prophylaxis (>6 weeks)!</div>";
status3.innerHTML = "<div id=\"error\">Please complete CTX Prophylaxis (>6 weeks)!</div>";
} else if(six_week_eid_done == "" || six_week_eid_done==null || six_week_eid_done_date==""){
status.innerHTML = "<div id=\"error\">Please complete 6 week EID done!</div>";
status3.innerHTML = "<div id=\"error\">Please complete 6 week EID done!</div>";
}else if(sample_collected == "" || sample_collected==null){
status.innerHTML = "<div id=\"error\">Please complete Sample Collected!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Sample Collected!</div>";
} else if(sample_sent == "" || sample_sent==null){
status.innerHTML = "<div id=\"error\">Please complete Sample Sent!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Sample Sent!</div>";
}else if(eid_result == "" || eid_result==null || eid_result_date==""){
status.innerHTML = "<div id=\"error\">Please complete EID Result!</div>";
status3.innerHTML = "<div id=\"error\">Please complete EID Result!</div>";
} else if(eigthteen_rapidtest_done == "" || eigthteen_rapidtest_done==null){
status.innerHTML = "<div id=\"error\">Please complete 18 months Rapid test done!</div>";
status3.innerHTML = "<div id=\"error\">Please complete 18 months Rapid test done!</div>";
} else if(result == "" || result==null){
status.innerHTML = "<div id=\"error\">Please complete Result!</div>";
status3.innerHTML = "<div id=\"error\">Please complete Result!</div>";
} else if(infant_sex == "" || infant_sex==null ){
status.innerHTML = "<div id=\"error\">Please complete sex on Infant status at birth!</div>";
status3.innerHTML = "<div id=\"error\">Please complete sex on Infant status at birth!</div>";
} else if(status_of_birth == "" || status_of_birth ==null ){
status.innerHTML = "<div id=\"error\">Please complete status of birth!</div>";
status3.innerHTML = "<div id=\"error\">Please complete status of birth!</div>";
}else if(syrup_nvp == "" || syrup_nvp ==null ){
status.innerHTML = "<div id=\"error\">Please complete syrup nvp!</div>";
status3.innerHTML = "<div id=\"error\">Please complete syrup nvp!</div>";
}else if(feeding_method_chosen == "" || feeding_method_chosen ==null ){
status.innerHTML = "<div id=\"error\">Please complete feeding method chosen!</div>";
status3.innerHTML = "<div id=\"error\">Please complete feeding method chosen!</div>";
}else {
	_("submitbtn").style.display = "none";
status.innerHTML = '<br/><img src="js/loading_bar.gif">';
status3.innerHTML = '<br/><img src="js/loading_bar.gif">';
var ajax = ajaxObj("POST", "exposedinfant.php");
        ajax.onreadystatechange = function() {
       if(ajaxReturn(ajax) == true) {
		   if(ajax.responseText == "saved_succesfully"){
			   _("submitbtn").style.display = "block";
			  
			   noOfDeliveries2();
			   clearfields();
		    status.innerHTML = "<div id=\"status2\">Data submitted Successfully</div>";
			status3.innerHTML = "<div id=\"status2\">Data submitted Successfully</div>";
		   }else{ //addedto be removed
		   _("submitbtn").style.display = "block";
			status.innerHTML = "<div id=\"error\">Data failed to submit</div>";
			status3.innerHTML = "<div id=\"error\">Data failed to submit</div>";
			status3.innerHTML =ajax.responseText;
				}// end else
			} 
        }// end else
        ajax.send("visitdate="+visitdate+"&pmtct_id="+pmtct_id+"&infant_eid_id="+infant_eid_id+"&visit_date="+visit_date+"&infant_name="+infant_name+"&infant_date_of_birth="+infant_date_of_birth+"&age_of_infant_at_visit="+age_of_infant_at_visit+"&age_of_infant_weeks_month="+age_of_infant_weeks_month+"&sex="+sex+"&delivery_mode="+delivery_mode+"&delivery_vaginal_tear="+delivery_vaginal_tear+"&delivery_vaginal_tear_age="+delivery_vaginal_tear_age+"&delivery_vaginal_tear_weight="+delivery_vaginal_tear_weight+"&delivery_vaginal_tear_duration="+delivery_vaginal_tear_duration+"&zbabies_hiv_serostatus="+zbabies_hiv_serostatus+"&zbabies_arv_history="+zbabies_arv_history+"&zbabies_arv_history_specify="+zbabies_arv_history_specify+"&ctx_prophylasis="+ctx_prophylasis+"&six_week_eid_done="+six_week_eid_done+"&six_week_eid_done_date="+six_week_eid_done_date+"&sample_collected="+sample_collected+"&sample_collected_date="+sample_collected_date+"&sample_sent="+sample_sent+"&sample_sent_date="+sample_sent_date+"&eid_result="+eid_result+"&eid_result_date="+eid_result_date+"&eigthteen_rapidtest_done="+eigthteen_rapidtest_done+"&eigthteen_rapidtest_done_date="+eigthteen_rapidtest_done_date+"&result="+result+"&ei_outcome_discharged="+ei_outcome_discharged+"&ei_outcome_discharged_date="+ei_outcome_discharged_date+"&ei_outcome_linkedtocare="+ei_outcome_linkedtocare+"&ei_outcome_linkedtocare_ped_pepid="+ei_outcome_linkedtocare_ped_pepid+"&ei_outcome_referred="+ei_outcome_referred+"&ei_outcome_referred_facilityname="+ei_outcome_referred_facilityname+"&other_comments="+other_comments+"&infant_sex="+infant_sex+"&status_of_birth="+status_of_birth+"&status_of_birth_alive_weight="+status_of_birth_alive_weight+"&status_of_birth_alive_lenght="+status_of_birth_alive_lenght+"&status_of_birth_alive_head_circumf="+status_of_birth_alive_head_circumf+"&status_of_birth_alive_gest_age="+status_of_birth_alive_gest_age+"&status_of_birth_alive_apgar="+status_of_birth_alive_apgar+"&syrup_nvp="+syrup_nvp+"&feeding_method_chosen="+feeding_method_chosen+"&feeding_method_chosen_specify="+feeding_method_chosen_specify+"&noofdeliveries="+noofdeliveries+"&infant_oname="+infant_oname+"&assited_vagina_type="+assited_vagina_type+"&delivery_mode_specify="+delivery_mode_specify+"&eid_zbabies_date="+eid_zbabies_date+"&linkedtocare_ped_pepid_fcaility="+linkedtocare_ped_pepid_fcaility+"&delivery_rom="+delivery_rom+"&delivery_bleeding="+delivery_bleeding+"&delivery_episiotomy="+delivery_episiotomy+"&eid_zbabies="+eid_zbabies+"&loss_followup="+loss_followup+"&age_first_dna_pcr="+age_first_dna_pcr+"&months_eid_ordered="+months_eid_ordered+"&hiv_neg_breastfd_st="+hiv_neg_breastfd_st+"&ei_outcome_linkedtocare2="+ei_outcome_linkedtocare2);
}
}

function noOfDeliveries(){
	var nodelv;
	var pmtctidno = document.getElementById("pmtct_id").value;
				var ratesnodelv = document.getElementsByName('noofdeliveries');
				for(var i = 0; i < ratesnodelv.length; i++){
					if(ratesnodelv[i].checked){
						nodelv = ratesnodelv[i].value;
					}
				}
				if(nodelv == "1"){
					
					document.getElementById("infant_eid_id").value = pmtctidno+".01";
				}else if(nodelv == "2"){
					document.getElementById("infant_eid_id").value = pmtctidno+".01";
					
				}else if(nodelv == "3"){
					document.getElementById("infant_eid_id").value = pmtctidno+".01";
					
				}else if(nodelv == "4"){
					document.getElementById("infant_eid_id").value = pmtctidno+".01";
					
				}else if(nodelv == "5"){
					document.getElementById("infant_eid_id").value = pmtctidno+".01";
					
				}else if(nodelv == "6"){
					document.getElementById("infant_eid_id").value = pmtctidno+".01";
					
				}
}
function noOfDeliveries2(){
	var nodelv;
	var pmtctidno = document.getElementById("pmtct_id").value;
				var ratesnodelv = document.getElementsByName('noofdeliveries');
				for(var i = 0; i < ratesnodelv.length; i++){
					if(ratesnodelv[i].checked){
						nodelv = ratesnodelv[i].value;
					}
				}
				var count =document.getElementById("multireport").value;
				
				if(parseInt(count) < parseInt(nodelv) ){
					count = parseInt(count) + 1;
					document.getElementById("infant_eid_id").value = pmtctidno+".0"+count;
					document.getElementById("multireport").value = count;
				}else{
					document.getElementById("infant_eid_id").value = "";
					
				}
}
function checkeidsix(){
		
				
			var radio=document.getElementsByName("six_week_eid_done");
  			var len=radio.length;
   			for(var i=0;i<len;i++)
   			{
       			radio[i].disabled=true;
   			}
			document.getElementById("six_week_eid_done_date").disabled=true;
			
			var radio2=document.getElementsByName("months_eid_ordered");
  			var len2=radio2.length;
   			for(var i=0;i<len2;i++)
   			{
       			radio2[i].disabled=true;
   			}
			
			
}
function checkeidz(){
	
	
	
				
			var radio=document.getElementsByName("eid_zbabies");
  			var len=radio.length;
   			for(var i=0;i<len;i++)
   			{
       			radio[i].disabled=true;
   			}
			document.getElementById("eid_zbabies_date").disabled=true;
}

function resetcheckeidsix(){
		
				
			var radio=document.getElementsByName("six_week_eid_done");
  			var len=radio.length;
   			for(var i=0;i<len;i++)
   			{
       			radio[i].disabled=false;
				radio[i].checked=false;
   			}
			document.getElementById("six_week_eid_done_date").disabled=false;
			
			var radio2=document.getElementsByName("eid_zbabies");
  			var len2=radio2.length;
   			for(var i=0;i<len2;i++)
   			{
       			radio2[i].disabled=false;
				radio2[i].checked=false;
   			}
			document.getElementById("eid_zbabies_date").disabled=false;
			
			var radio3=document.getElementsByName("months_eid_ordered");
  			var len3=radio3.length;
   			for(var i=0;i<len3;i++)
   			{
       			radio3[i].disabled=false;
				radio3[i].checked=false;
   			}
			
			
}


function clearfields(){
	document.getElementById("infant_name").value="";
	document.getElementById("infant_oname").value="";
	document.getElementById("age_of_infant_at_visit").value="";
	document.getElementById("assited_vagina_type").value="";
	document.getElementById("delivery_mode_specify").value="";
	document.getElementById("zbabies_arv_history_specify").value="";
	document.getElementById("status_of_birth_alive_weight").value="";
	document.getElementById("status_of_birth_alive_lenght").value="";
	document.getElementById("status_of_birth_alive_head_circumf").value="";
	document.getElementById("status_of_birth_alive_gest_age").value="";
	document.getElementById("status_of_birth_alive_apgar").value="";
	document.getElementById("feeding_method_chosen_specify").value="";
	document.getElementById("ei_outcome_linkedtocare_ped_pepid").value="";
	document.getElementById("ei_outcome_referred_facilityname").value="";
	document.getElementById("linkedtocare_ped_pepid_fcaility").value="";
	document.getElementById("age_first_dna_pcr").value="";
	///date///
	document.getElementById("infant_date_of_birth").value="0000-00-00";
	document.getElementById("six_week_eid_done_date").value="0000-00-00";
	document.getElementById("sample_collected_date").value="0000-00-00";
	document.getElementById("sample_sent_date").value="0000-00-00";
	document.getElementById("eid_result_date").value="0000-00-00";
	document.getElementById("ei_outcome_discharged_date").value="0000-00-00";
	
	///radio///
	
	var ele1 = document.getElementsByName("sex");
   for(var i=0;i<ele1.length;i++){
      ele1[i].checked = false;}
	  
	  var ele2 = document.getElementsByName("age_of_infant_weeks_month");
   for(var i=0;i<ele2.length;i++){
      ele2[i].checked = false;}
	  
	  var ele3 = document.getElementsByName("delivery_mode");
   for(var i=0;i<ele3.length;i++){
      ele3[i].checked = false;}
	  
	  var ele4 = document.getElementsByName("delivery_rom");
   for(var i=0;i<ele4.length;i++){
      ele4[i].checked = false;}
	  
	  var ele5 = document.getElementsByName("delivery_bleeding");
   for(var i=0;i<ele5.length;i++){
      ele5[i].checked = false;}
	  
	  var ele6 = document.getElementsByName("delivery_vaginal_tear");
   for(var i=0;i<ele6.length;i++){
      ele6[i].checked = false;}
	  
	  var ele7 = document.getElementsByName("delivery_episiotomy");
   for(var i=0;i<ele7.length;i++){
      ele7[i].checked = false;}
	  
	  var ele8 = document.getElementsByName("zbabies_arv_history");
   for(var i=0;i<ele8.length;i++){
      ele8[i].checked = false;}
	  
	  var ele9 = document.getElementsByName("ctx_prophylasis");
   for(var i=0;i<ele9.length;i++){
      ele9[i].checked = false;}
	  
	  var eleinfant_sex = document.getElementsByName("infant_sex");
   for(var i=0;i<eleinfant_sex.length;i++){
      eleinfant_sex[i].checked = false;}
	  
	  var elestatus_of_birth = document.getElementsByName("status_of_birth");
   for(var i=0;i<elestatus_of_birth.length;i++){
      elestatus_of_birth[i].checked = false;}
	  
	  var elesyrup_nvp = document.getElementsByName("syrup_nvp");
   for(var i=0;i<elesyrup_nvp.length;i++){
      elesyrup_nvp[i].checked = false;}
	  
	  var elefeeding_method_chosen = document.getElementsByName("feeding_method_chosen");
   for(var i=0;i<elefeeding_method_chosen.length;i++){
      elefeeding_method_chosen[i].checked = false;}
	  
	  var elesix_week_eid_done = document.getElementsByName("six_week_eid_done");
   for(var i=0;i<elesix_week_eid_done.length;i++){
      elesix_week_eid_done[i].checked = false;}
	  
	  var eleeid_zbabies = document.getElementsByName("eid_zbabies");
   for(var i=0;i<eleeid_zbabies.length;i++){
      eleeid_zbabies[i].checked = false;}
	  
	  var eleeid_zbabies_date = document.getElementsByName("eid_zbabies_date");
   for(var i=0;i<eleeid_zbabies_date.length;i++){
      eleeid_zbabies_date[i].checked = false;}
	  
	  var elesample_collected = document.getElementsByName("sample_collected");
   for(var i=0;i<elesample_collected.length;i++){
      elesample_collected[i].checked = false;}
	  
	  var elesample_sent = document.getElementsByName("sample_sent");
   for(var i=0;i<elesample_sent.length;i++){
      elesample_sent[i].checked = false;}
	  
	  var eleeid_result = document.getElementsByName("eid_result");
   for(var i=0;i<eleeid_result.length;i++){
      eleeid_result[i].checked = false;}
	  
	  var eleeigthteen_rapidtest_done_date = document.getElementsByName("eigthteen_rapidtest_done_date");
   for(var i=0;i<eleeigthteen_rapidtest_done_date.length;i++){
      eleeigthteen_rapidtest_done_date[i].checked = false;}
	  
	  var eleresult = document.getElementsByName("result");
   for(var i=0;i<eleresult.length;i++){
      eleresult[i].checked = false;}
	  
	  var eleei_outcome_discharged = document.getElementsByName("ei_outcome_discharged");
   for(var i=0;i<eleei_outcome_discharged.length;i++){
      eleei_outcome_discharged[i].checked = false;}
	  
	  var eleei_outcome_linkedtocare = document.getElementsByName("ei_outcome_linkedtocare");
   for(var i=0;i<eleei_outcome_linkedtocare.length;i++){
      eleei_outcome_linkedtocare[i].checked = false;}
	  
	  	  
	  
	  var elemonths_eid_ordered = document.getElementsByName("months_eid_ordered");
	  for(var i=0;i<elemonths_eid_ordered.length;i++){
      elemonths_eid_ordered[i].checked = false;}
	  
	  var elehiv_neg_breastfd_st = document.getElementsByName("hiv_neg_breastfd_st");
	  for(var i=0;i<elehiv_neg_breastfd_st.length;i++){
      elehiv_neg_breastfd_st[i].checked = false;}
	  
	  var ei_outcome_linkedtocare2 = document.getElementsByName("ei_outcome_linkedtocare2");
	  for(var i=0;i<ei_outcome_linkedtocare2.length;i++){
      ei_outcome_linkedtocare2[i].checked = false;}
}
</script>
</head>

<body>
<div class='sidebar'>
<legend style="font-weight:bold; margin:10px 0px; font-size:14px; color:#0EBF5F">DATA ENTRY</legend>
<fieldset style="background-color:#355681">
<a href="antenatalcare.php<?php if(isset($_GET['pmtctid'])){?>?pmtctid=<?php echo $_GET['pmtctid']; }?>&username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:#ffffff;font-family: 'Titillium Web', sans-serif;">PMTCT ANC</a> <br>
</fieldset>
<fieldset style="background-color:#355681">
<a href="pmtctdelivery.php<?php if(isset($_GET['pmtctid'])){?>?pmtctid=<?php echo $_GET['pmtctid']; }?>&username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:#ffffff;font-family: 'Titillium Web', sans-serif;">PMTCT DELIVERY</a> <br>
</fieldset>
<fieldset style="background-color:#355681">
<a href="exposedinfant.php<?php if(isset($_GET['pmtctid'])){?>?pmtctid=<?php echo $_GET['pmtctid']; }?>&username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:#ffffff;font-family: 'Titillium Web', sans-serif;">EXPOSED INFANT</a> <br>
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
<h1 style="font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #FFFFFF;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px 355681;    border-radius: 0 10px 0 10px;    background: #355681;">PMTCT EMR - EXPOSED INFANT &nbsp;&nbsp;&nbsp; </h1>
</div>
<br />
<br />
<br />
<a href="../patsearchpmtct.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue"><<< BACK</a>
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
<input type="text" name="pepid" id="pepid" value="<?php if(isset($info2['pepid'])){echo $info2['pepid'];} ?>"  style="width:120px;height:10px;" required>
      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>
Unique ID
</label>
<input type="text" name="uniqueid" id="uniqueid" value="<?php if(isset($info2['uniqueid'])){echo $info2['uniqueid'];}else{echo "";} ?>"  style="width:120px;height:10px;" required>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Hospital(UNIT) Number
</label>
<input type="text" name="hospitalunit" id="hospitalunit"  value="<?php if(isset($info2['hospitalunit'])){echo $info2['hospitalunit'];}else{echo "";} ?>"  style="width:120px;height:10px;" required>

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
<input type="text" name="surname" id="surname" value="<?php if(isset($info2['surname'])){echo $info2['surname'];}else{echo "";} ?>" style="width:120px;height:10px;" required>
      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>Other names
</label>
<input type="text" name="othernames" id="othernames" value="<?php if(isset($info2['othernames'])){echo $info2['othernames'];}else{echo "";} ?>" style="width:120px;height:10px;" required>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>HIV+ Date (Confirmed)
</label>
<input type="date" name="hivdate" id="hivdate" value="<?php if(isset($info2['hivdate'])){echo date("Y-m-d", strtotime($info2['hivdate'])); }else{echo "";} ?>" style="width:120px;height:10px;" required> 


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
<input type="date" name="dateofbirth" id="dateofbirth" value="<?php if(isset($info2['dateofbirth'])){echo date("Y-m-d", strtotime($info2['dateofbirth'])); }else{echo "";} ?>" style="width:120px;height:10px;"  required> 
    </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Phone Number
</label>
<input type="text" name="phoneno" id="phoneno" value="<?php if(isset($info2['phoneno'])){echo $info2['phoneno'];}else{echo "";} ?>" style="width:120px;height:10px;" required>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Sex
</label>
<input type="text" name="basicinfosex" id="basicinfosex" value="<?php if(isset($info2['basicinfosex'])){echo $info2['basicinfosex'];}else{echo "";} ?>" style="width:45px;height:10px;" required>

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
<input type="text" name="facilityname" id="facilityname" value="<?php if(isset($info2['facilityname'])){echo $info2['facilityname'];}else{echo "";} ?>"  style="width:120px; height:10px;" required>
    </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Age</label>
<input type="text" name="basicinfoage" id="basicinfoage" value="<?php if(isset($info2['basicinfoage'])){echo $info2['basicinfoage'];}else{echo "";} ?>" size="1"  style="height:10px;" required>
          </fieldset>
         </div>   
         <!--<div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Visit date</label>
<input type="date" name="visitdate" id="visitdate" onfocus="emptyElement('status','status3')"  style="width:120px; height:15px;" required>
        </fieldset>
         </div>-->
    </div>
</div>

</fieldset>
<fieldset>
<h3 style="text-align:center">EXPOSED INFANT</h3>
<table class="table table-bordered table-hover">
<tr><td style="width:20px;"></td>
<td><b>PMTCT ID (Not required for Z-babies)</b></td><td><input type="text" name="pmtct_id" id="pmtct_id" value="<?php if(isset($_GET['pmtctid'])){echo $_GET['pmtctid'];} ?>" style="width:120px;height:10px;" onfocus="emptyElement('status','status3')" required></td>
</tr>
<tr><td style="width:20px;">1</td>
<td><b>Number of Deliveries</b></td>
<td>
<input type="radio" name="noofdeliveries" onclick="noOfDeliveries();" onfocus="emptyElement('status','status3')" value="1">1 &nbsp;
 <input type="radio" name="noofdeliveries" onclick="noOfDeliveries();" onfocus="emptyElement('status','status3')" value="2">2 &nbsp;
 <input type="radio" name="noofdeliveries" onclick="noOfDeliveries();" onfocus="emptyElement('status','status3')" value="3">3 &nbsp;
 <input type="radio" name="noofdeliveries" onclick="noOfDeliveries();" onfocus="emptyElement('status','status3')" value="4">4 &nbsp;
 <input type="radio" name="noofdeliveries" onclick="noOfDeliveries();" onfocus="emptyElement('status','status3')" value="5">5 &nbsp;
 <input type="radio" name="noofdeliveries" onclick="noOfDeliveries();" onfocus="emptyElement('status','status3')" value="6">6 
</td>
</tr>
<tr><td style="width:20px;">2</td>
<td><b>Infant's EID ID</b></td>
<td><input type="text" name="infant_eid_id" id="infant_eid_id" onfocus="emptyElement('status','status3')" style="width:120px;"/> </td>
</tr>
<!--<tr><td style="width:20px;">2</td>
<td><b>Visit Date</b></td>
<td><b>Date</b>
<input type="date" name="visit_date" id="visit_date" onfocus="emptyElement('status','status3')" style="width:120px;"/>
 </td>
</tr>-->
<tr><td style="width:20px;">3</td>
<td><b>Infant’s Name</b></td>
<td>Surname<input type="text" name="infant_name" id="infant_name" onfocus="emptyElement('status','status3')" style="width:120px;"/>
&nbsp; Othernames<input type="text" name="infant_oname" id="infant_oname" onfocus="emptyElement('status','status3')" style="width:120px;"/>
 </td>
</tr>
<tr><td style="width:20px;">4</td>
<td><b>Infant’s date of birth</b></td>
<td><b>Date</b><input type="date" name="infant_date_of_birth" id="infant_date_of_birth" onfocus="emptyElement('status','status3')" style="width:120px;"/> </td>
</tr>

<tr><td style="width:20px;">5</td>
<td><b>Sex</b></td>
<td>
<input type="radio" name="sex" onfocus="emptyElement('status','status3')" value="Male">Male &nbsp;&nbsp;
 <input type="radio" name="sex" onfocus="emptyElement('status','status3')" value="Female">Female
 </td>
</tr>

<tr><td style="width:20px;">6</td>
<td><b>Age of infant at visit</b></td>
<td>
<input type="text" name="age_of_infant_at_visit" id="age_of_infant_at_visit" onfocus="emptyElement('status','status3')" style="width:30px;"/>
<input type="radio" name="age_of_infant_weeks_month" onfocus="emptyElement('status','status3')" value="Weeks">Weeks &nbsp;
 <input type="radio" name="age_of_infant_weeks_month" onfocus="emptyElement('status','status3')" value="Months">Months
 </td>
</tr>



<tr><td style="width:20px;">7</td>
<td style="width:200px;"><b>Delivery</b></td>
<td>
<div>Type of delivery</div>
<input type="radio" onfocus="emptyElement('status','status3')" name="delivery_mode" value="Spontaneous Vaginal">Spontaneous Vaginal <br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_mode" value="Elective Caesarean">Elective C-section<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_mode" value="Emergency Caesarean">Emergency C-section<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_mode" value="Assisted Vaginal">Assisted Vaginal &nbsp;
 type<input type="text" name="assited_vagina_type" id="assited_vagina_type" style="width:120px;"/>
 <br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_mode" value="other">Other &nbsp;
 specify<input type="text" name="delivery_mode_specify" id="delivery_mode_specify" style="width:120px;"/>
 
 <div>Delivery description</div>
  ROM
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_rom" value="Less than 4 hrs">Less than 4 hrs &nbsp; &nbsp;
  
  Bleeding before delivery
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_bleeding" value="NO">NO 
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_bleeding" value="YES">YES 
 &nbsp;&nbsp;
 Vaginal Tear
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_vaginal_tear" value="NO">NO 
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_vaginal_tear" value="YES">YES 
 <br/>
  Episiotoy
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_episiotomy" value="NO">NO 
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_episiotomy" value="YES">YES 
 
 </td>
</tr>

<tr><td style="width:20px;">8</td>
<td style="width:200px;"><b>Z-BABIES only</b></td>
<td>

 <div>ARV history:</div>
<input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="None">None<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="AZT+NVP">AZT+NVP<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="NVP only">NVP only
 <input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="HAART">HAART<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="AZT/3TC+NVP">AZT/3TC+NVP<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="Unknown">Unknown<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="other">Other <input type="text" onfocus="emptyElement('status','status3')" name="zbabies_arv_history_specify" id="zbabies_arv_history_specify"  style="width:120px;"/>specify 
 </td>
</tr>
<tr><td style="width:20px;">9</td>
<td style="width:200px;"><b>CTX Prophylaxis (>6 weeks)</b></td>
<td>
<input type="radio" onfocus="emptyElement('status','status3')" name="ctx_prophylasis" value="YES">YES &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="ctx_prophylasis" value="NO">NO 
</td>

</table>



<!--//////////////////////////////////////////// NEW FIELDS ////////////////////////////////////  -->

<h3 style="text-align:center">INFANT STATUS AT BIRTH</h3>
<table class="table table-bordered table-hover">
<tr><td style="width:20px;">10</td>
<td><b>Sex</b></td>
<td>
 <input type="radio" name="infant_sex" onfocus="emptyElement('status','status3')" value="Male">Male
 <input type="radio" name="infant_sex" onfocus="emptyElement('status','status3')" value="Female">Female</td>
</tr>

<tr><td style="width:20px;">11</td>
<td><b>Status at birth</b></td>
<td>
 <input type="radio" name="status_of_birth" onfocus="emptyElement('status','status3')" value="Alive">Alive
 <input type="radio" name="status_of_birth" onfocus="emptyElement('status','status3')" value="Stillbirth">Stillbirth
 <input type="radio" name="status_of_birth" onfocus="emptyElement('status','status3')" value="Neonatal death">Neonatal death
 <input type="radio" name="status_of_birth" onfocus="emptyElement('status','status3')" value="Other">Other
 <br />
 <div>
 Weight<input type="text" name="status_of_birth_alive_weight" onfocus="emptyElement('status','status3')" id="status_of_birth_alive_weight"  style="width:25px;"/>kg &nbsp;
  Lenght<input type="text" name="status_of_birth_alive_lenght" onfocus="emptyElement('status','status3')" id="status_of_birth_alive_lenght"  style="width:25px;"/>cm 
 &nbsp;
  Head Circumference
 <input type="text" name="status_of_birth_alive_head_circumf" onfocus="emptyElement('status','status3')" id="status_of_birth_alive_head_circumf"  style="width:25px;"/> &nbsp;
  Gest. Age at delivery
 <input type="text" name="status_of_birth_alive_gest_age" onfocus="emptyElement('status','status3')" id="status_of_birth_alive_gest_age"  style="width:25px;"/>Wks <br /> 
  APGAR score@ 5mins
 <input type="text" name="status_of_birth_alive_apgar" onfocus="emptyElement('status','status3')" id="status_of_birth_alive_apgar"  style="width:25px;"/> 
 
 </div>
 </td>
</tr>

<tr><td style="width:20px;">12</td>
<td><b>Prophylaxis given to infant</b></td>
<td>
<div>Syrup NVP</div>
<input type="radio" name="syrup_nvp" onfocus="emptyElement('status','status3')" value="YES">YES &nbsp;&nbsp;
 <input type="radio" name="syrup_nvp" onfocus="emptyElement('status','status3')" value="NO">NO &nbsp;&nbsp;
  <input type="radio" name="syrup_nvp" onfocus="emptyElement('status','status3')" value="N/A">N/A (Note: check only for still birth)
 <!--<div>Syrup ZDV</div>
 <input type="radio" name="syrup_zdv" onfocus="emptyElement('status','status3')" value="YES">YES &nbsp;&nbsp;
 <input type="radio" name="syrup_zdv" onfocus="emptyElement('status','status3')" value="NO">NO-->
</td>
</tr>

<tr><td style="width:20px;">13</td>
<td><b>Feeding Method Chosen</b></td>
<td>
<input type="radio" name="feeding_method_chosen" onfocus="emptyElement('status','status3')" value="Exclusive BF">Exclusive BF &nbsp;&nbsp;
 <input type="radio" name="feeding_method_chosen" onfocus="emptyElement('status','status3')" value="Exclusive BMS">Exclusive BMS
 <input type="radio" name="feeding_method_chosen" onfocus="emptyElement('status','status3')" value="Mixed BMS and BF">Mixed BMS & BF &nbsp;&nbsp;<br />
 <div><input type="radio" name="feeding_method_chosen" onfocus="emptyElement('status','status3')" value="other">Other
 <input type="text" name="feeding_method_chosen_specify" onfocus="emptyElement('status','status3')" id="feeding_method_chosen_specify" style="width:120px;"/>(specify)</div>
</td>
</tr>

</table>

<h3 style="text-align:center">EID STATUS</h3>
<table class="table table-bordered table-hover">
<tr><td style="width:20px;">14</td>
<td><b>6 weeks EID  ordered</b></td>
<td>
<input type="radio" onclick="checkeidz();" onfocus="emptyElement('status','status3')" name="six_week_eid_done" value="YES">YES &nbsp; &nbsp;
 <input type="radio" onclick="checkeidz();" onfocus="emptyElement('status','status3')" name="six_week_eid_done" value="NO">NO &nbsp; &nbsp;&nbsp; 
 Date<input type="date" onclick="checkeidz();" onfocus="emptyElement('status','status3')" name="six_week_eid_done_date" id="six_week_eid_done_date"  style="width:120px;"/> &nbsp;
 
 <input type="radio" onclick="checkeidz();" onfocus="emptyElement('status','status3')" name="months_eid_ordered" value="0-2">0-2 &nbsp; &nbsp;
 <input type="radio" onclick="checkeidz();" onfocus="emptyElement('status','status3')" name="months_eid_ordered" value="3-12">3-12 &nbsp; &nbsp;&nbsp; months 
 
  <button name="" onclick="resetcheckeidsix();">Reset</button>
</td>
</tr>

<tr><td style="width:20px;">15</td>
<td><b>EID ordered for Z-babies</b></td>
<td>
<input type="radio" onclick="checkeidsix();" onfocus="emptyElement('status','status3')" name="eid_zbabies" value="YES">YES &nbsp; &nbsp;
 <input type="radio" onclick="checkeidsix();" onfocus="emptyElement('status','status3')" name="eid_zbabies" value="NO">NO &nbsp; &nbsp;&nbsp; 
 Date<input type="date" onclick="checkeidsix();" onfocus="emptyElement('status','status3')" name="eid_zbabies_date" id="eid_zbabies_date"  style="width:120px;"/> &nbsp; <button name="" onclick="resetcheckeidsix();">Reset</button>
</td>
</tr>

<tr><td style="width:20px;">16</td>
<td><b>Sample Collected</b></td>
<td>
<input type="radio" onfocus="emptyElement('status','status3')" name="sample_collected" value="YES">YES &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="sample_collected" value="NO">NO &nbsp; &nbsp;&nbsp; 
 Date<input type="date" onfocus="emptyElement('status','status3')" name="sample_collected_date" id="sample_collected_date"  style="width:120px;"/>
</td>
</tr>
<tr><td style="width:20px;">17</td>
<td><b>Sample Sent</b></td>
<td>
<input type="radio" onfocus="emptyElement('status','status3')" name="sample_sent" value="YES">YES &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="sample_sent" value="NO">NO &nbsp; &nbsp;&nbsp; 
 Date<input type="date" onfocus="emptyElement('status','status3')" name="sample_sent_date" id="sample_sent_date"  style="width:120px;"/>
</td>
</tr>
<tr><td style="width:20px;">18</td>
<td><b>EID Result</b></td>
<td>
<input type="radio" onfocus="emptyElement('status','status3')" name="eid_result" value="Positive">Positive &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="eid_result" value="Negative">Negative &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="eid_result" value="Indeterminate">Indeterminate &nbsp; &nbsp; 
 Date<input type="date" onfocus="emptyElement('status','status3')" name="eid_result_date" id="eid_result_date"  style="width:120px;"/>
</td>
</tr>

<tr><td style="width:20px;">19</td>
<td><b>18 months Rapid test ordered</b></td>
<td>
<input type="radio" onfocus="emptyElement('status','status3')" name="eigthteen_rapidtest_done" value="YES">YES &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="eigthteen_rapidtest_done" value="NO">NO &nbsp; &nbsp;&nbsp; 
 Date<input type="date" onfocus="emptyElement('status','status3')" name="eigthteen_rapidtest_done_date" id="eigthteen_rapidtest_done_date"  style="width:120px;"/>
</td>
</tr>
<tr><td style="width:20px;">20</td>
<td><b>Result</b></td>
<td>
<input type="radio" onfocus="emptyElement('status','status3')" name="result" value="Positive">Positive &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="result" value="Negative">Negative 
</td>
</tr>

<tr><td style="width:20px;">21</td>
<td><b>Age at 1st DNA PCR </b></td>
<td>
Age<input type="text" name="age_first_dna_pcr" onfocus="emptyElement('status','status3')" id="age_first_dna_pcr"  style="width:25px;" required>
</td>
</tr>

<tr><td style="width:20px;">22</td>
<td><b>EI Exit/Continum</b></td>
<td>
<fieldset>
 <legend>HIV Negative (Disaggregated by breastfeeding status):</legend>
 <input type="radio" onfocus="emptyElement('status','status3')" name="hiv_neg_breastfd_st" value="Not breastfedding">Not breastfeeding
 <input type="radio" onfocus="emptyElement('status','status3')" name="hiv_neg_breastfd_st" value="Breastfedding">Breastfeeding
 <input type="radio" onfocus="emptyElement('status','status3')" name="hiv_neg_breastfd_st" value="Unknown">Breast feeding status Unknown</fieldset>
 <br/>
<div>Discharged if negative:</div>
<input type="radio" onfocus="emptyElement('status','status3')" name="ei_outcome_discharged" value="YES">YES &nbsp; &nbsp;
  Date<input type="date" onfocus="emptyElement('status','status3')" name="ei_outcome_discharged_date" id="ei_outcome_discharged_date"  style="width:120px;"/>&nbsp; &nbsp;&nbsp;
   
 <fieldset>
 <legend>HIV infected (Disaggregated by ART linkage status):</legend>
<input type="radio" onfocus="emptyElement('status','status3')" name="ei_outcome_linkedtocare" value="Linked, Same Facility">Linked, Same Facility &nbsp; &nbsp;
  Ped PEP ID<input type="text" name="ei_outcome_linkedtocare_ped_pepid" id="ei_outcome_linkedtocare_ped_pepid"  style="width:120px;"/>&nbsp; &nbsp;&nbsp;
  
 
 <div></div>
<input type="radio" onfocus="emptyElement('status','status3')" name="ei_outcome_linkedtocare" value="Linked, Another Facility">Linked, Another Facility &nbsp; &nbsp;
  Facility Name<input type="text" onfocus="emptyElement('status','status3')" name="ei_outcome_referred_facilityname" id="ei_outcome_referred_facilityname"  style="width:150px;"/>&nbsp; 
   Ped PEP ID<input type="text" name="linkedtocare_ped_pepid_fcaility" id="linkedtocare_ped_pepid_fcaility"  style="width:80px;"/>
   <div></div>
   <input type="radio" onfocus="emptyElement('status','status3')" name="ei_outcome_linkedtocare" value="Not Linked">Not Linked
  
   </fieldset>
   <br/>
   <fieldset>
 <legend>Unknown F.O:</legend>
  <div></div>
<input type="radio" onfocus="emptyElement('status','status3')" name="ei_outcome_linkedtocare2" value="Loss to follow-up">Loss to follow-up
&nbsp; &nbsp;
<input type="radio" onfocus="emptyElement('status','status3')" name="ei_outcome_linkedtocare2" value="Dead">Dead
&nbsp; &nbsp;
<input type="radio" onfocus="emptyElement('status','status3')" name="ei_outcome_linkedtocare2" value="transferred out">Transferred out 
</fieldset>
   
  
</td>
</tr>
<tr><td style="width:20px;">23</td>
<td><b>Other Comments (tracking, referral etc)</b></td>
<td><textarea onfocus="emptyElement('status','status3')" name="other_comments" id="other_comments" cols="50" rows="5"></textarea></td>
</tr>

</table>

<span id="status3"></span>
<input type="hidden" name="multireport" id="multireport" value="1" />
<button type="button" id="submitbtn" name="submitbtn" style="float: right !important; cursor:pointer;" class="btn btn-success" onclick="saveexposedinfant()">Submit</button>
</fieldset>

</form>
<p style="margin-bottom:150px;"></p>
</div>

</body>
</html>