<?php

include './mandate_/lidh.php';

$_SESSION=$_POST;
 
 // Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$pepid = $_POST['pepid'];  
if(isset($_POST['address'])){ $address = $_POST['address']; $address=mysql_real_escape_string($address);}  else {$address = "";}
if(isset($_POST['nokaddr'])){ $nokaddr = $_POST['nokaddr']; $nokaddr=mysql_real_escape_string($nokaddr);}  else {$nokaddr = "";}

if(isset($_POST['addrlga'])){$addrlga = $_POST['addrlga']; $addrlga=mysql_real_escape_string($addrlga);}  else {$addrlga = "";}
if(isset($_POST['hospitalno'])) {$hospitalid=$_POST['hospitalno'];}else {$hospitalid="";}
if(isset($_POST['jobstatus'])){$jobstatus = $_POST['jobstatus']; $jobstatus=mysql_real_escape_string($jobstatus);}  else {$jobstatus = "";}
if(isset($_POST['maritalstatus'])){$maritalstatus = $_POST['maritalstatus']; $maritalstatus=mysql_real_escape_string($maritalstatus);}  else {$maritalstatus = "";}
if(isset($_POST['educationallevel'])){$educationallevel = $_POST['educationallevel']; $educationallevel=mysql_real_escape_string($educationallevel);}  else {$educationallevel = "";}

if(isset($_POST['addrwardvillage'])){ $addrwardvillage = $_POST['addrwardvillage']; $addrwardvillage=mysql_real_escape_string($addrwardvillage);}  else {$addrwardvillage = "";}

if(isset($_POST['nokwardvillage'])){ $nokwardvillage = $_POST['nokwardvillage']; $nokwardvillage=mysql_real_escape_string($nokwardvillage);}  else {$nokwardvillage = "";}
if(isset($_POST['ancno'])) {$ancno=$_POST['ancno'];}else {$ancno="";}
if(isset($_POST['created_on'])) {$created_on=$_POST['created_on'];}else {$created_on="";}
if(!mysqli_query($con,"UPDATE patient 
   SET 
   hospitalid='$hospitalid',
   enroldate='$_POST[visitdate]',
   hivposdate='$_POST[hivposdate]',
   surname='$_POST[surname]',
   othernames='$_POST[othernames]',
   uniqueid='$_POST[uniqueid]',
   sex='$_POST[sex]',
   lga='$_POST[lga]',
   facilityname='$_POST[facilityname]',
   ancno='$ancno',
   dob='$_POST[dob]',
   maritalstatus='$maritalstatus',
   educationallevel='$educationallevel',
   jobstatus='$jobstatus',
   address='$address',
   wardvillage='$addrwardvillage',
   town='$_POST[addrtown]',
   addrlga='$addrlga',
   pepid='$_POST[pepid]',
   state='$_POST[state]',
   phoneno='$_POST[phoneno]',
   nokname='$_POST[nokname]',
   nokrelationship='$_POST[nokrelationship]',
   nokaddr='$nokaddr',
   nokwardvillage='$nokwardvillage',
   noktown='$_POST[noktown]',
   nokstate='$_POST[nokstate]',
   nokphoneno='$_POST[nokphoneno]'
   WHERE pepid='$_POST[pepid]'"));
   
    {
        echo "... ".mysqli_error($con);
    }

     if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:3;./todayslistpep.php?pepid=".$pepid."");  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Updated";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Recorded to the Server </br> Continuing...</span></p> </br> ";

}
else {
	$link_address = 'javascript:history.go(-1)';
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Updated";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> Data could not be saved </br> Please VERIFY YOU MADE A CHANGE and try again </br> <a href='".$link_address."'>BACK</a> </span></p> </br> ";
}

  
mysqli_close($con);
/*var_dump($_POST)*/
?>
<?php 
	class MyClassndr{ 
    public function GetUserInformation(){ 
$query = "SELECT a.idpatient as PatientIdentifier,a.pepid as pepid,(select facilityname from facility) as FacilityName,CASE 
WHEN (select facilityname from facility) LIKE '%lasuth%' THEN 'LG'
WHEN (select facilityname from facility) LIKE '%GH Alimosho%' THEN 'GA'
WHEN (select facilityname from facility) LIKE '%Aregb%' THEN 'RB'
WHEN (select facilityname from facility) LIKE '%Ipaja%' THEN 'IP'
WHEN (select facilityname from facility) LIKE '%Ojodu%' THEN 'OJ'
WHEN (select facilityname from facility) LIKE '%GH Ifako%' THEN 'IF'
WHEN (select facilityname from facility) LIKE '%Ifako PHC%' THEN 'FK'
WHEN (select facilityname from facility) LIKE '%Ancilla%' THEN 'AN'
WHEN (select facilityname from facility) LIKE '%GH Mushin%' THEN 'MU'
WHEN (select facilityname from facility) LIKE '%Ajeabo%' THEN 'JB'
WHEN (select facilityname from facility) LIKE '%Palm%' THEN 'PV'
WHEN (select facilityname from facility) LIKE '%LUTH%' THEN 'LU'
WHEN (select facilityname from facility) LIKE '%Police%' THEN 'FL'
WHEN (select facilityname from facility) LIKE '%NIMR%' THEN 'NM'
WHEN (select facilityname from facility) LIKE '%Ibej%' THEN 'IL'
WHEN (select facilityname from facility) LIKE '%University College Hospital%' THEN 'UC'
WHEN (select facilityname from facility) LIKE '%Adeoyo%' THEN 'AD'
WHEN (select facilityname from facility) LIKE '%State Hospital Ogbomoso%' THEN 'OG'
WHEN (select facilityname from facility) LIKE '%St. Mary%' THEN 'EH'
WHEN (select facilityname from facility) LIKE '%Baptist  Medical%' THEN 'BM'
WHEN (select facilityname from facility) LIKE '%State Hospital Oyo%' THEN 'SY'
WHEN (select facilityname from facility) LIKE '%State Hospital Saki%' THEN 'SK'
WHEN (select facilityname from facility) LIKE '%Bowen%' THEN 'BW'
WHEN (select facilityname from facility) LIKE '%OLA%' THEN 'OY'
WHEN (select facilityname from facility) LIKE '%Eruwa%' THEN 'ER'
WHEN (select facilityname from facility) LIKE '%Barkin Ladi%' THEN 'BL'
WHEN (select facilityname from facility) LIKE '%Jos University%' THEN 'JU'
WHEN (select facilityname from facility) LIKE '%Cottage Hospital%' THEN 'KW'
WHEN (select facilityname from facility) LIKE '%Plateau State Specialist%' THEN 'PS'
WHEN (select facilityname from facility) LIKE '%Our Lady of Apostle%' THEN 'OL'
WHEN (select facilityname from facility) LIKE '%Pankshin General Hospital%' THEN 'PH'
WHEN (select facilityname from facility) LIKE '%Panyam Maternity%' THEN 'PY'
WHEN (select facilityname from facility) LIKE '%Seventh Day%' THEN 'SD'
WHEN (select facilityname from facility) LIKE '%General Hospital%Shendam%' THEN 'SH'
WHEN (select facilityname from facility) LIKE '%Solat Women%' THEN 'SL'
WHEN (select facilityname from facility) LIKE '%Vom Christian%' THEN 'VH'
WHEN (select facilityname from facility) LIKE '%JUTH Comprehensive%' THEN 'ZK'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Mangu%' THEN 'MG'
WHEN (select facilityname from facility) LIKE '%Faith Alive%' THEN 'FA'
WHEN (select facilityname from facility) LIKE '%COCIN%' THEN 'RC'
WHEN (select facilityname from facility) LIKE '%General Hospital%Langtang%' THEN 'LG'
WHEN (select facilityname from facility) LIKE '%Cottage Hospital%Bassa%' THEN 'BA'
WHEN (select facilityname from facility) LIKE '%Cottage Hospital%Bokkos%' THEN 'BK'
WHEN (select facilityname from facility) LIKE '%Our Lady of Apostles%Zawan%' THEN 'ZA'
WHEN (select facilityname from facility) LIKE '%Hwolshe%Medical%Centre%' THEN 'HW'
ELSE SUBSTRING(a.pepid,1,2) END AS facn,CASE SUBSTRING(a.pepid,1,2) 
WHEN 'LG' THEN 'LASUTH'
WHEN 'GA' THEN 'GH Alimosho'
WHEN 'RB' THEN 'Rauf Aregbesola PHC'
WHEN 'IP' THEN 'Ipaja PHC'
WHEN 'OJ' THEN 'Ojodu PHC'
WHEN 'IF' THEN 'GH Ifako-Ijaiye'
WHEN 'FK' THEN 'Ifako PHC'
WHEN 'AN' THEN 'Ancilla Hospital'
WHEN 'MU' THEN 'GH Mushin'
WHEN 'JB' THEN 'Ajeabo PHC'
WHEN 'PV' THEN 'Palm Avenue PHC'
WHEN 'LU' THEN 'LUTH'

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
WHEN 'PY' THEN 'Panyam Maternity Hospital'
WHEN 'SD' THEN 'Seventh Day Adventist Hospital, Jengre'
WHEN 'SH' THEN 'General Hospital, Shendam'
WHEN 'SL' THEN 'Solat Women Hospital'
WHEN 'VH' THEN 'Vom Christian Hospital'
WHEN 'ZK' THEN 'JUTH, Comprehensive Health Centre, Zamko'
WHEN 'MG' THEN 'General Hospital, Mangu'
WHEN 'FA' THEN 'Faith Alive Foundation'
WHEN 'RC' THEN 'COCIN Hospital & Rehabilitation Centre, Mangu'
WHEN 'LG' THEN 'General Hospital, Langtang'
WHEN 'BA' THEN 'Cottage Hospital, Bassa'
WHEN 'BK' THEN 'Cottage Hospital Bokkos'
WHEN 'ZA' THEN 'Our Lady of Apostles, Zawan'
WHEN 'HW' THEN 'Hwolshe Medical Centre'
ELSE SUBSTRING(a.pepid,1,2) END AS diagfac,uniqueid as IDNumber,dob as PatientDateOfBirth,substring(upper(sex),1,1) as PatientSexCode,CASE lower(patientdied) WHEN 'art' THEN 'true' WHEN 'pre-art' THEN 'true' ELSE 'false' END as PatientDeceasedIndicator,CASE educationallevel WHEN 'None' THEN 1 WHEN 'Quranic' THEN 4 WHEN 'Primary' THEN 2 WHEN 'Junior Secondary' THEN 5 WHEN 'Senior Secondary' THEN 3 WHEN 'Post Secondary' THEN 6 ELSE 7 END as PatientEducationLevelCode,CASE jobstatus WHEN 'Unemployed' THEN 'UNE' WHEN 'Student' THEN 'STU' WHEN 'Employed' THEN 'EMP' WHEN 'Retired' THEN 'RET' ELSE 'UNK' END as PatientOccupationCode,CASE maritalstatus WHEN 'Single' THEN 'S' WHEN 'Widowed' THEN 'W' WHEN 'Married' THEN 'M' WHEN 'Separated' THEN 'A' WHEN 'Divorced' THEN 'D' ELSE 'U' END as PatientMaritalStatusCode,CASE  
WHEN whostagecriteria LIKE '%Asymptomatic%' THEN '236704009' 
WHEN whostagecriteria LIKE '%Persistent Lymphadenopathy%' THEN '95892003' 
WHEN whostagecriteria LIKE '%Minor Mucocutaneous Manifestations%' THEN '29147005' 
WHEN whostagecriteria LIKE '%Herpes Zoster%' THEN '4740000' 
WHEN whostagecriteria LIKE '%Recurrent Upper Respiratory Tract Infections%' THEN '195708003' 
WHEN whostagecriteria LIKE '%Unexplained Chronic Diarrhea%' THEN '86615009' 
WHEN whostagecriteria LIKE '%Unexplained Prolonged Fever%' THEN '409553007' 
WHEN whostagecriteria LIKE '%Oral Candidiasis%' THEN '79740000' 
WHEN whostagecriteria LIKE '%Oral Hairy Leukoplakia%' THEN '235032001' 
WHEN whostagecriteria LIKE '%TB, Pulmonary%' THEN '154283005' 
WHEN whostagecriteria LIKE '%Severe Bacterial Infections%' THEN '428875002' 
WHEN whostagecriteria LIKE '%PCP%' THEN '75549005' 
WHEN whostagecriteria LIKE '%Toxoplasmosis, CNS%' THEN '187192000' 
WHEN whostagecriteria LIKE '%Cryptosporidiosis with Diarrhea%' THEN '240370009' 
WHEN whostagecriteria LIKE '%Cryptococcosis, Extrapulmonary%' THEN '20953001' 
WHEN whostagecriteria LIKE '%Cytomegalovirus disease%' THEN '28944009' 
WHEN whostagecriteria LIKE '%Herpes Simplex%' THEN '88594005' 
WHEN whostagecriteria LIKE '%Progressive Multifocal Leukoencephalopathy%' THEN '22255007' 
WHEN whostagecriteria LIKE '%Mycosis, disseminated%' THEN '402138008' 
WHEN whostagecriteria LIKE '%Candidiasis%' THEN '78048006' 
WHEN whostagecriteria LIKE '%Atypical Mycobacteriosis, disseminated%' THEN '88415009' 
WHEN whostagecriteria LIKE '%Oral Candidiasis%' THEN '79740000' 
ELSE '' 
END as ConditionCode,WardVillage, town,CASE  
WHEN lower(state) LIKE '%abia%' THEN '1' 
WHEN lower(state) LIKE '%adamawa%' THEN '2' 
WHEN lower(state) LIKE '%akwaibom%' THEN '3' 
WHEN lower(state) LIKE '%anambra%' THEN '4' 
WHEN lower(state) LIKE '%bauchi%' THEN '5' 
WHEN lower(state) LIKE '%benue%' THEN '6' 
WHEN lower(state) LIKE '%bayelsa%' THEN '7' 
WHEN lower(state) LIKE '%borno%' THEN '8' 
WHEN lower(state) LIKE '%cross%' THEN '9' 
WHEN lower(state) LIKE '%delta%' THEN '10' 
WHEN lower(state) LIKE '%ebonyi%' THEN '11' 
WHEN lower(state) LIKE '%edo%' THEN '12' 
WHEN lower(state) LIKE '%ekiti%' THEN '13' 
WHEN lower(state) LIKE '%enugu%' THEN '14' 
WHEN lower(state) LIKE '%fct%' THEN '15' 
WHEN lower(state) LIKE '%abuja%' THEN '15' 
WHEN lower(state) LIKE '%gombe%' THEN '16' 
WHEN lower(state) LIKE '%imo%' THEN '17' 
WHEN lower(state) LIKE '%jigawa%' THEN '18' 
WHEN lower(state) LIKE '%kaduna%' THEN '19' 
WHEN lower(state) LIKE '%kano%' THEN '20' 
WHEN lower(state) LIKE '%katsina%' THEN '21' 
WHEN lower(state) LIKE '%kebbi%' THEN '22' 
WHEN lower(state) LIKE '%kogi%' THEN '23' 
WHEN lower(state) LIKE '%kwara%' THEN '24' 
WHEN lower(state) LIKE '%lagos%' THEN '25' 
WHEN lower(state) LIKE '%nasarawa%' THEN '26' 
WHEN lower(state) LIKE '%niger%' THEN '27' 
WHEN lower(state) LIKE '%ogun%' THEN '28' 
WHEN lower(state) LIKE '%ondo%' THEN '29' 
WHEN lower(state) LIKE '%osun%' THEN '30' 
WHEN lower(state) LIKE '%oyo%' THEN '31' 
WHEN lower(state) LIKE '%plateau%' THEN '32' 
WHEN lower(state) LIKE '%rivers%' THEN '33' 
WHEN lower(state) LIKE '%sokoto%' THEN '34' 
WHEN lower(state) LIKE '%taraba%' THEN '35' 
WHEN lower(state) LIKE '%yobe%' THEN '36' 
WHEN lower(state) LIKE '%zamfara%' THEN '37' 
ELSE '' 
END as state,hospitalid as HospitalNumber, enroldate as DateOfFirstReport,enroldate as DiagnosisDate,age as PatientAge,CASE serviceentry 
WHEN 'STI' THEN 1 
WHEN 'OPD' THEN 2 
WHEN 'HCT' THEN 3 
WHEN 'Private' THEN 5 
WHEN 'TB' THEN 6 
WHEN 'Ward' THEN 7 
WHEN 'Casualty' THEN 8 
WHEN 'ANC/PMTCT' THEN 9 
WHEN 'Current Clinic Patient' THEN 12 
WHEN 'Self Referral' THEN 13  
ELSE '' END as CareEntryPoint,hivposdate as FirstConfirmedHIVTestDate,CASE WHEN lower(hivmode) LIKE '%ab%' THEN 'HIVAb'
WHEN lower(hivmode) LIKE '%pcr%' THEN 'HIVPCR'
ELSE '' END as FirstHIVTestMode,testlocation as WhereFirstHIVTest, CASE priorart 
WHEN 'Transfer in with records' THEN 'T' 
WHEN 'Earlier ARV but not a transfer in' THEN 'NT'
WHEN 'PMTCT only' THEN 'P' 
WHEN 'None' THEN 'N' 
ELSE '' END as PriorArt,dateeligible as MedicallyEligibleDate,CASE whyeligible 
WHEN 'CD4' THEN '2' 
WHEN 'TLC' THEN '4' 
WHEN 'Clinically only' THEN '1'
ELSE '' END as ReasonMedicallyEligible,dateinitadh as InitialAdherenceCounselingCompletedDate,CASE firstartregimen 
WHEN 'AZT/3TC/EFV' THEN '1a' 
WHEN 'AZT/3TC/NVP' THEN '1b' 
WHEN 'TDF/FTC/EFV' THEN '1c' 
WHEN 'TDF/FTC/NVP' THEN '1d' 
WHEN 'TDF/3TC/EFV' THEN '1e' 
WHEN 'TDF/3TC/NVP' THEN '1f' 
WHEN 'AZT/3TC/ABC' THEN '1g' 
WHEN 'AZT/3TC/TDF' THEN '1h' 
WHEN 'TDF/FTC/LPV/r' THEN '2a' 
WHEN 'TDF/3TC/LPV/r' THEN '2b' 
WHEN 'TDF/FTC/ATV/r' THEN '2c' 
WHEN 'TDF/3TC/ATV/r' THEN '2d' 
WHEN 'AZT/3TC/LPV/r' THEN '2e' 
WHEN 'AZT/3TC/ATV/r' THEN '2f' 
WHEN 'TLC' THEN '4' 

ELSE '' END as Code,CASE firstartregimen 
WHEN 'AZT/3TC/EFV' THEN 'AZT-3TC-EFV' 
WHEN 'AZT/3TC/NVP' THEN 'AZT-3TC-NVP' 
WHEN 'TDF/FTC/EFV' THEN 'TDF-FTC-EFV' 
WHEN 'TDF/FTC/NVP' THEN 'TDF-FTC-NVP' 
WHEN 'TDF/3TC/EFV' THEN 'TDF-3TC-EFV' 
WHEN 'TDF/3TC/NVP' THEN 'TDF-3TC-NVP' 
WHEN 'AZT/3TC/ABC' THEN 'AZT-3TC-ABC' 
WHEN 'AZT/3TC/TDF' THEN 'AZT-3TC-TDF' 
WHEN 'TDF/FTC/LPV/r' THEN 'TDF-FTC-LPV/r' 
WHEN 'TDF/3TC/LPV/r' THEN 'TDF-3TC-LPV/r' 
WHEN 'TDF/FTC/ATV/r' THEN 'TDF-FTC-ATV/r' 
WHEN 'TDF/3TC/ATV/r' THEN 'TDF-3TC-ATV/r' 
WHEN 'AZT/3TC/LPV/r' THEN 'AZT-3TC-LPV/r' 
WHEN 'AZT/3TC/ATV/r' THEN 'AZT-3TC-ATV/r' 
ELSE '' END as CodeDescTxt,CASE b.regimen
WHEN 'AZT-3TC-EFV' THEN '1a' 
WHEN 'AZT-3TC-NVP' THEN '1b' 
WHEN 'TDF-FTC-EFV' THEN '1c' 
WHEN 'TDF-FTC-NVP' THEN '1d' 
WHEN 'TDF-3TC-EFV' THEN '1e' 
WHEN 'TDF-3TC-NVP' THEN '1f' 
WHEN 'AZT-3TC-ABC' THEN '1g' 
WHEN 'AZT-3TC-TDF' THEN '1h' 
WHEN 'TDF-FTC-LPV/r' THEN '2a' 
WHEN 'TDF-3TC-LPV/r' THEN '2b' 
WHEN 'TDF-FTC-ATV/r' THEN '2c' 
WHEN 'TDF-3TC-ATV/r' THEN '2d' 
WHEN 'AZT-3TC-LPV/r' THEN '2e' 
WHEN 'AZT-3TC-ATV/r' THEN '2f' 
WHEN 'TLC' THEN '4' 

ELSE '' END as CodeRegEnc,b.regimen as CodeDescTxtRegEnc,dateartstart AS ARTStartDate,clinicalstageart as WHOClinicalStageARTStart,ROUND(peweightatart) as WeightAtARTStart,CASE patfunction 
WHEN 'Working' THEN 'W' 
WHEN 'Ambulant' THEN 'A' 
WHEN 'Bedridden' THEN 'B' 
ELSE '' END as FunctionalStatusStartART,cd4atart as CD4AtStartOfART,enroldate as EnrolledInHIVCareDate,CASE b.tbstatus 
WHEN 'No Signs' THEN '1' 
WHEN 'TB Suspected and referred for evaluation' THEN '2' 
WHEN 'On INH prophylaxis' THEN '3' 
WHEN 'Currently on TB treatment' THEN '4' 
WHEN 'TB positive, Not on drugs' THEN '5' 
ELSE '' END as InitialTBStatus,b.clinicevalid as VisitIDEnc,b.visitdate as VisitDateEnc,CASE b.artduration 
WHEN '' THEN 0
ELSE b.artduration END as DurationOnArt,ROUND(b.weight) as Weight,b.bp as BloodPressure,CASE b.fp 
WHEN 'Condoms' THEN 'FP1' 
WHEN 'Oral contraceptive pills' THEN 'FP2' 
WHEN 'Injectable/Implantable hormones' THEN 'FP3' 
WHEN 'Diaphragm/cervical caps' THEN 'FP4' 
WHEN 'Intra uterine device' THEN 'FP5' 
WHEN 'Vasectomy/tubal ligation/hysterectomy' THEN 'FP6' 
WHEN 'Other' THEN 'FP7' 
WHEN 'Not on family planning' THEN 'NOFP'
ELSE '' END as PatientFamilyPlanningMethodCode,CASE b.functionalstatus 
WHEN 'Working' THEN 'W' 
WHEN 'Ambulant' THEN 'A' 
WHEN 'Bedridden' THEN 'B' 
ELSE '' END as FunctionalStatus,b.whostage AS WHOClinicalStage,CASE b.tbstatus 
WHEN 'No Signs' THEN '1' 
WHEN 'TB Suspected and referred for evaluation' THEN '2' 
WHEN 'On INH prophylaxis' THEN '3' 
WHEN 'Currently on TB treatment' THEN '4' 
WHEN 'TB positive, Not on drugs' THEN 'B' 
ELSE '' END as TBStatus,CASE  
WHEN b.cotrimdose like '%480%' THEN 'CTX480' 
WHEN b.cotrimdose like '%960%' THEN 'CTX960' 
ELSE '' END as CodeCTX,CASE  
WHEN b.cotrimdose like '%480%' THEN 'Cotrimoxazole 480mg' 
WHEN b.cotrimdose like '%960%' THEN 'Cotrimoxazole 960mg' 
ELSE '' END as CodeDescTxtCTX,CASE  
WHEN d.oiqty like '%100%' AND d.oidrug like '%CTX%' THEN 'CTX100' 
WHEN d.oiqty like '%200%' AND d.oidrug like '%CTX%' THEN 'CTX200' 
WHEN d.oiqty like '%300%' AND d.oidrug like '%CTX%' THEN 'CTX300' 
WHEN d.oiqty like '%480%' AND d.oidrug like '%CTX%' THEN 'CTX480' 
WHEN d.oiqty like '%960%' AND d.oidrug like '%CTX%' THEN 'CTX960' 
ELSE '' END as CodeCTXPharm,CASE  
WHEN d.oiqty like '%100%' AND d.oidrug like '%CTX%' THEN 'Cotrimoxazole 100mg' 
WHEN d.oiqty like '%200%' AND d.oidrug like '%CTX%' THEN 'Cotrimoxazole 200mg' 
WHEN d.oiqty like '%300%' AND d.oidrug like '%CTX%' THEN 'Cotrimoxazole 300mg' 
WHEN d.oiqty like '%480%' AND d.oidrug like '%CTX%' THEN 'Cotrimoxazole 480mg' 
WHEN d.oiqty like '%960%' AND d.oidrug like '%CTX%' THEN 'Cotrimoxazole 960mg' 
ELSE '' END as CodeDescTxtCTXPharm,c.labid as VisitID,c.VisitDate as VisitDate,c.reportdate as CollectionDate,CASE c.baselineorrepeat 
WHEN 'Baseline' THEN 'B' 
WHEN 'Repeat' THEN 'R' 
ELSE '' END as BaselineRepeatCode,CASE c.artstatus 
WHEN 'ART' THEN 'A' 
WHEN 'Non-ART' THEN 'N' 
ELSE '' END as ARTStatusCode,results as Value1,c.clinicianname as Clinician,c.reportedby as ReportedBy,c.CheckedBy as checkedby,d.pharmacyid as VisitIDpharm,d.visitdate as VisitDatepharm,CASE drugname1 
WHEN 'AZT/3TC/EFV' THEN '1a' 
WHEN 'AZT/3TC/NVP' THEN '1b' 
WHEN 'TDF/FTC/EFV' THEN '1c' 
WHEN 'TDF/FTC/NVP' THEN '1d' 
WHEN 'TDF/3TC/EFV' THEN '1e' 
WHEN 'TDF/3TC/NVP' THEN '1f' 
WHEN 'AZT/3TC/ABC' THEN '1g' 
WHEN 'AZT/3TC/TDF' THEN '1h' 
WHEN 'TDF/FTC/LPV/r' THEN '2a' 
WHEN 'TDF/3TC/LPV/r' THEN '2b' 
WHEN 'TDF/FTC/ATV/r' THEN '2c' 
WHEN 'TDF/3TC/ATV/r' THEN '2d' 
WHEN 'AZT/3TC/LPV/r' THEN '2e' 
WHEN 'AZT/3TC/ATV/r' THEN '2f' 
WHEN 'ABC/3TC/NVP' THEN '4d' 
WHEN 'ABC/3TC/EFV' THEN '4c' 
WHEN 'd4T/3TC/NVP' THEN '4d'
WHEN 'ABC/3TC/LPV/r' THEN '5a'
WHEN 'd4T/3TC/LPV/r' THEN '5c'
WHEN 'ddi/3TC/NVP' THEN '5d'
WHEN 'ABC/3TC/ddi' THEN '5e'
WHEN 'TLC' THEN '4' 
ELSE '' END as CodePharmDrgName1,CASE d.drugname1 
WHEN 'AZT/3TC/EFV' THEN 'AZT-3TC-EFV' 
WHEN 'AZT/3TC/NVP' THEN 'AZT-3TC-NVP' 
WHEN 'TDF/FTC/EFV' THEN 'TDF-FTC-EFV' 
WHEN 'TDF/FTC/NVP' THEN 'TDF-FTC-NVP' 
WHEN 'TDF/3TC/EFV' THEN 'TDF-3TC-EFV' 
WHEN 'TDF/3TC/NVP' THEN 'TDF-3TC-NVP' 
WHEN 'AZT/3TC/ABC' THEN 'AZT-3TC-ABC' 
WHEN 'AZT/3TC/TDF' THEN 'AZT-3TC-TDF' 
WHEN 'ABC/3TC/NVP' THEN 'ABC-3TC-NVP' 
WHEN 'ABC/3TC/EFV' THEN 'ABC-3TC-EFV' 
WHEN 'd4T/3TC/NVP' THEN 'd4T-3TC-NVP'
WHEN 'ABC/3TC/LPV/r' THEN 'ABC-3TC-LPV/r'
WHEN 'd4T/3TC/LPV/r' THEN 'd4T-3TC-LPV/r'
WHEN 'ddi/3TC/NVP' THEN 'ddi-3TC-NVP'
WHEN 'ABC/3TC/ddi' THEN 'ABC-3TC-ddi'
WHEN 'TDF/FTC/LPV/r' THEN 'TDF-FTC-LPV/r' 
WHEN 'TDF/3TC/LPV/r' THEN 'TDF-3TC-LPV/r' 
WHEN 'TDF/FTC/ATV/r' THEN 'TDF-FTC-ATV/r' 
WHEN 'TDF/3TC/ATV/r' THEN 'TDF-3TC-ATV/r' 
WHEN 'AZT/3TC/LPV/r' THEN 'AZT-3TC-LPV/r' 
WHEN 'AZT/3TC/ATV/r' THEN 'AZT-3TC-ATV/r' 
ELSE '' END as CodeDescTxtPharmDrgName1,d.dispensedate as PrescribedRegimenDispensedDate,CASE  
WHEN (d.oidrug like '%CTX%' AND d.oiqty='480mg') THEN 'CTX480' 
WHEN (d.oidrug like '%CTX%' AND d.oiqty='960mg') THEN 'CTX960' 
ELSE '' END AS Code_oi,CASE  
WHEN (d.oidrug like '%CTX%' AND d.oiqty='480mg') THEN 'Cotrimoxazole 480mg' 
WHEN (d.oidrug like '%CTX%' AND d.oiqty='960mg') THEN 'Cotrimoxazole 960mg' 
ELSE '' END AS CodeDescTxt_OI,b.nextapptdate as NextAppointmentDate,CASE d.drugname1 
WHEN 'AZT/3TC/EFV' THEN '10' 
WHEN 'AZT/3TC/NVP' THEN '10' 
WHEN 'TDF/FTC/EFV' THEN '10' 
WHEN 'TDF/FTC/NVP' THEN '10' 
WHEN 'TDF/3TC/EFV' THEN '10' 
WHEN 'TDF/3TC/NVP' THEN '10' 
WHEN 'AZT/3TC/EFV' THEN '10' 
WHEN 'AZT/3TC/NVP' THEN '10' 
WHEN 'ABC/3TC/EFV' THEN '10'
WHEN 'AZT/3TC/ABC' THEN '11'
WHEN 'AZT/3TC/TDF' THEN '11'
WHEN 'ABC/3TC/NVP' THEN '11'
WHEN 'AZT/3TC/ABC' THEN '11'
WHEN 'ABC/3TC/EFV' THEN '11'
WHEN 'ABC/3TC/EFV' THEN '11'
WHEN 'TDF/FTC/LPV/r' THEN '20'
WHEN 'TDF/3TC/LPV/r' THEN '20'
WHEN 'TDF/FTC/ATV/r' THEN '20'
WHEN 'TDF/3TC/ATV/r' THEN '20'
WHEN 'AZT/3TC/LPV/r' THEN '20'
WHEN 'AZT/3TC/ATV/r' THEN '20'
WHEN 'ABC/3TC/LPV/r' THEN '20'
WHEN 'AZT/3TC/LPV/r' THEN '20' 
WHEN 'd4T/3TC/LPV/r' THEN '20' 
WHEN 'ddi/3TC/NVP' THEN '20' 
WHEN 'ABC/3TC/ddi' THEN '20' 
WHEN 'DAR' THEN '30' 
WHEN 'RAL' THEN '30' 
WHEN 'ETR' THEN '30' 
WHEN 'RTV' THEN '30' 
ELSE '' END as PrescribedRegimenLineCode,d.regduration1 as PrescribedRegimenDuration,CASE d.oiduration 
WHEN '1 month' THEN '30' 
WHEN '2 month' THEN '60' 
WHEN '3 month' THEN '90' 
WHEN '4 month' THEN '120' 
ELSE '' END as PrescribedRegimenDurationCTXpharm,CASE d.tbduration 
WHEN '1 month' THEN '30' 
WHEN '2 month' THEN '60' 
WHEN '3 month' THEN '90' 
WHEN '4 month' THEN '120' 
ELSE '' END as PrescribedRegimenDurationTBpharm,b.cd4value as cd4value,b.visitdate as CD4TestDate,CASE  
WHEN d.tbdrug LIKE '%INH%' and d.tbdrug LIKE '%Rifampicin%' AND d.tbdrug LIKE '%PZI%' AND d.tbdrug LIKE '%Streptomycin Injection%' AND d.tbdrug LIKE '%Ethambutol%' THEN 'HRZES'
WHEN d.tbdrug LIKE '%INH%' and d.tbdrug LIKE '%Rifampicin%' AND d.tbdrug LIKE '%PZI%' AND d.tbdrug LIKE '%Ethambutol%' THEN 'HRZE' 
WHEN d.tbdrug LIKE '%INH%' and d.tbdrug LIKE '%Rifampicin%' AND d.tbdrug LIKE '%Ethambutol%' THEN 'HRE' 
WHEN d.tbdrug LIKE '%INH%' and d.tbdrug LIKE '%Rifampicin%' AND d.tbdrug LIKE '%Streptomycin Injection%' THEN 'HRS' 
WHEN d.tbdrug LIKE '%INH%' and d.tbdrug LIKE '%Rifampicin%' THEN 'HR' 
WHEN d.tbdrug LIKE '%INH%' AND d.tbdrug LIKE '%Ethambutol%' THEN 'HE' 
WHEN d.tbdrug LIKE '%Streptomycin Injection%' THEN 'S' 
WHEN d.tbdrug LIKE '%PZI%' THEN 'Z' 
WHEN d.tbdrug LIKE '%Ethambutol%' THEN 'E' 
WHEN d.tbdrug LIKE '%Rifampicin%' THEN 'R' 
WHEN d.tbdrug LIKE '%INH%' THEN 'H'  
ELSE '' END as tbdrugcode,d.tbdrug as tbdrug,c.labregno as LaboratoryTestIdentifier
from patient a LEFT JOIN (select * from clinicaleval where pepid='$_POST[pepid]' order by visitdate DESC LIMIT 1) b
ON (a.pepid=b.pepid)
LEFT JOIN (select * from laboratory where pepid='$_POST[pepid]' and tests='CD4' order by visitdate DESC LIMIT 1) c
ON (a.pepid=c.pepid)
LEFT JOIN (select * from pharmacy where pepid='$_POST[pepid]' order by visitdate DESC LIMIT 1) d
ON (a.pepid=d.pepid)
where a.pepid='$_POST[pepid]'";

		include './mandate_/lidhX.php';

        $resultndr = mysqli_query($con,$query);
        $infondr = mysqli_fetch_assoc($resultndr);
        return $infondr;
    }
}
$classndr = new MyClassndr;
$infondr = $classndr->GetUserInformation();
echo mysql_error();

try 
{ 
        /*** a new dom object ***/ 
    $dom = new domDocument; 

    /*** make the output tidy ***/ 
    $dom->formatOutput = true; 

    /*** create the root element ***/ 
    $root = $dom->appendChild($dom->createElement( "Container" )); 

    /*** create the simple xml element ***/ 
    $Container = simplexml_import_dom( $dom ); 
	

    /*** add a MessageHeader element ***/ 
	$MessageHeader = $Container->addChild("MessageHeader"); 
	$MessageHeader->addChild("MessageStatusCode", "UPDATED"); 
    $MessageHeader->addChild("MessageCreationDateTime", date('Y-m-d\TH:i:s')); 
    $MessageHeader->addChild("MessageSchemaVersion", "1.2"); 
	$MessageHeader->addChild("MessageUniqueID", date('YmdHis')); 
	
	/*** add a MessageSendingOrganization element ***/
	$MessageSendingOrganization = $MessageHeader->addChild("MessageSendingOrganization"); 
	$MessageSendingOrganization->addChild("FacilityName", "AIDS Prevention Initiative In Nigeria"); 
    $MessageSendingOrganization->addChild("FacilityID",  "APIN"); 
    $MessageSendingOrganization->addChild("FacilityTypeCode", "IP"); 
    
	/*** add a IndividualReport element ***/ 
	$IndividualReport = $Container->addChild("IndividualReport"); 
	
	/////////////////////////////////////////////////////////////Start Patient Demographics//////////////////////////////////// 
	$PatientDemographics = $IndividualReport->addChild("PatientDemographics"); 
	
	///// add patientidentifer//////////////////
	$PatientDemographics->addChild("PatientIdentifier", $infondr['PatientIdentifier']); 
	/////////add treatment facility
	$TreatmentFacility = $PatientDemographics->addChild("TreatmentFacility");
	$TreatmentFacility->addChild("FacilityName", $infondr['FacilityName']);
	$TreatmentFacility->addChild("FacilityID", $infondr['facn']);
	$TreatmentFacility->addChild("FacilityTypeCode", "FAC");
	///////////////////add OtherPatientIdentifiers //////////////////////////
	$OtherPatientIdentifiers = $PatientDemographics->addChild("OtherPatientIdentifiers");
	$Identifier = $OtherPatientIdentifiers->addChild("Identifier");
	$Identifier->addChild("IDNumber", $infondr['IDNumber']);
	$Identifier->addChild("IDTypeCode", "PN");
	if($infondr['PatientDateOfBirth']=='0000-00-00'){
	//$PatientDemographics->addChild("PatientDateOfBirth", $infondr['PatientDateOfBirth']);
	}
	else{
	$PatientDemographics->addChild("PatientDateOfBirth", $infondr['PatientDateOfBirth']);
	}
	$PatientDemographics->addChild("PatientSexCode", $infondr['PatientSexCode']);
	$PatientDemographics->addChild("PatientDeceasedIndicator", $infondr['PatientDeceasedIndicator']);
	//$PatientDemographics->addChild("PatientPrimaryLanguageCode", "");
	$PatientDemographics->addChild("PatientEducationLevelCode", $infondr['PatientEducationLevelCode']);
	$PatientDemographics->addChild("PatientOccupationCode", $infondr['PatientOccupationCode']);
	$PatientDemographics->addChild("PatientMaritalStatusCode", $infondr['PatientMaritalStatusCode']);
	$PatientDemographics->addChild("StateOfNigeriaOriginCode", $infondr['state']);
	
	/////////////////////////////////////////////////////////////End Patient Demographics//////////////////////////////////// 
	
	/////////////////////////////////////////////////////////////Start Condition//////////////////////////////////// 
	$Condition = $IndividualReport->addChild("Condition"); 
	$Condition->addChild("ConditionCode", $infondr['ConditionCode']);
	////// add program area //////
	$ProgramArea = $Condition->addChild("ProgramArea"); 
	$ProgramArea->addChild("ProgramAreaCode", "HIV");
	///////////////// add patient address //////////////////
	$PatientAddress = $Condition->addChild("PatientAddress"); 
	$PatientAddress->addChild("AddressTypeCode", "H");
	$PatientAddress->addChild("WardVillage", $infondr['WardVillage']);
	$PatientAddress->addChild("Town", $infondr['town']);
	$PatientAddress->addChild("LGACode", "236");
	$PatientAddress->addChild("StateCode", $infondr['state']);
	$PatientAddress->addChild("CountryCode", "NGA");
	$PatientAddress->addChild("PostalCode", "");
	$PatientAddress->addChild("OtherAddressInformation", "");
	
	/////// add CommonQuestions ///////
	$CommonQuestions = $Condition->addChild("CommonQuestions"); 
	$CommonQuestions->addChild("HospitalNumber", $infondr['HospitalNumber']);
	$DiagnosisFacility = $CommonQuestions->addChild("DiagnosisFacility"); 
	$DiagnosisFacility->addChild("FacilityName", $infondr['diagfac']);
	$DiagnosisFacility->addChild("FacilityID", substr($infondr['pepid'],0,2));
	$DiagnosisFacility->addChild("FacilityTypeCode", "FAC");
	if($infondr['DateOfFirstReport']=='0000-00-00'){
	//$CommonQuestions->addChild("DateOfFirstReport",  $infondr['DateOfFirstReport']);
	//$CommonQuestions->addChild("DiagnosisDate", $infondr['DateOfFirstReport']);
	}
	else{
	$CommonQuestions->addChild("DateOfFirstReport",  $infondr['DateOfFirstReport']);
	$CommonQuestions->addChild("DiagnosisDate", $infondr['DateOfFirstReport']);
	}
	//$CommonQuestions->addChild("DateOfLastReport", "");
	$CommonQuestions->addChild("PatientDieFromThisIllness",  $infondr['PatientDeceasedIndicator']);
	$CommonQuestions->addChild("PatientAge", $infondr['PatientAge']);
	
	/////// add ConditionSpecificQuestions ///////
	$ConditionSpecificQuestions = $Condition->addChild("ConditionSpecificQuestions");
	$HIVQuestions = $ConditionSpecificQuestions->addChild("HIVQuestions");
	if($infondr['CareEntryPoint']==''){
		//$HIVQuestions->addChild("CareEntryPoint", $infondr['CareEntryPoint']);
	}
	else{
		$HIVQuestions->addChild("CareEntryPoint", $infondr['CareEntryPoint']);
	}
	if($infondr['FirstConfirmedHIVTestDate']=='0000-00-00'){
	//$HIVQuestions->addChild("FirstConfirmedHIVTestDate", $infondr['FirstConfirmedHIVTestDate']);
	}
	else{
	$HIVQuestions->addChild("FirstConfirmedHIVTestDate", $infondr['FirstConfirmedHIVTestDate']);
	}
	if ($infondr['FirstHIVTestMode']==''){
		//$HIVQuestions->addChild("FirstHIVTestMode", $infondr['FirstHIVTestMode']);
	}
	else{
		$HIVQuestions->addChild("FirstHIVTestMode", $infondr['FirstHIVTestMode']);
	}
	$HIVQuestions->addChild("WhereFirstHIVTest", $infondr['WhereFirstHIVTest']);
	$HIVQuestions->addChild("PriorArt", $infondr['PriorArt']);
	if($infondr['MedicallyEligibleDate']=='0000-00-00'||$infondr['MedicallyEligibleDate']==''){
		//$HIVQuestions->addChild("MedicallyEligibleDate", $infondr['MedicallyEligibleDate']);
	}
	else{
		$HIVQuestions->addChild("MedicallyEligibleDate", $infondr['MedicallyEligibleDate']);
	}
	if($infondr['ReasonMedicallyEligible']==''){
		//$HIVQuestions->addChild("ReasonMedicallyEligible", $infondr['ReasonMedicallyEligible']);
	}else{
		$HIVQuestions->addChild("ReasonMedicallyEligible", $infondr['ReasonMedicallyEligible']);
	}
	if($infondr['InitialAdherenceCounselingCompletedDate']=='0000-00-00'||$infondr['InitialAdherenceCounselingCompletedDate']==''){
		//$HIVQuestions->addChild("InitialAdherenceCounselingCompletedDate", $infondr['InitialAdherenceCounselingCompletedDate']);
	}else{
		$HIVQuestions->addChild("InitialAdherenceCounselingCompletedDate", $infondr['InitialAdherenceCounselingCompletedDate']);
	}
	
	///// add first art regime //////
	$FirstARTRegimen = $HIVQuestions->addChild("FirstARTRegimen");
	$FirstARTRegimen->addChild("Code", $infondr['Code']);
	$FirstARTRegimen->addChild("CodeDescTxt", $infondr['CodeDescTxt']);
	if($infondr['ARTStartDate']=='0000-00-00'||$infondr['ARTStartDate']==''){
		//$HIVQuestions->addChild("ARTStartDate", $infondr['ARTStartDate']);
	}else{
		$HIVQuestions->addChild("ARTStartDate", $infondr['ARTStartDate']);
	}
	if($infondr['WHOClinicalStageARTStart']==''||$infondr['WHOClinicalStageARTStart']=='0'){
		//$HIVQuestions->addChild("WHOClinicalStageARTStart", $infondr['WHOClinicalStageARTStart']);
	}else{
		$HIVQuestions->addChild("WHOClinicalStageARTStart", $infondr['WHOClinicalStageARTStart']);
	}
	if($infondr['WeightAtARTStart']=='0'||$infondr['WeightAtARTStart']==''){
		//$HIVQuestions->addChild("WeightAtARTStart", $infondr['WeightAtARTStart']);
	}else{
			$HIVQuestions->addChild("WeightAtARTStart", $infondr['WeightAtARTStart']);
	}
	if($infondr['FunctionalStatusStartART']==''){
		//$HIVQuestions->addChild("FunctionalStatusStartART", $infondr['FunctionalStatusStartART']);
	}else{
		$HIVQuestions->addChild("FunctionalStatusStartART", $infondr['FunctionalStatusStartART']);
	}
	if($infondr['CD4AtStartOfART']=='0'){
	//$HIVQuestions->addChild("CD4AtStartOfART", $infondr['CD4AtStartOfART']);
	}
	else{
	$HIVQuestions->addChild("CD4AtStartOfART", $infondr['CD4AtStartOfART']);
	}
	$HIVQuestions->addChild("PatientHasDied", $infondr['PatientDeceasedIndicator']);
	if($infondr['EnrolledInHIVCareDate']=='0000-00-00'){
	//$HIVQuestions->addChild("EnrolledInHIVCareDate", $infondr['EnrolledInHIVCareDate']);
	}
	else{
	$HIVQuestions->addChild("EnrolledInHIVCareDate", $infondr['EnrolledInHIVCareDate']);
	}
	if($infondr['InitialTBStatus']==''){
		//$HIVQuestions->addChild("InitialTBStatus", $infondr['InitialTBStatus']);
	}else{
		$HIVQuestions->addChild("InitialTBStatus", $infondr['InitialTBStatus']);
	}
	
	
	
	/////// add Encounters ///////
	if($infondr['VisitID']==''){
	//$Encounters = $Condition->addChild("Encounters");
	//$HIVEncounter = $Encounters->addChild("HIVEncounter");
	//$HIVEncounter->addChild("VisitID", $infondr['VisitID']);
	//$HIVEncounter->addChild("VisitDate", $infondr['VisitDate']);
	//$HIVEncounter->addChild("DurationOnArt", $infondr['DurationOnArt']);
	//$HIVEncounter->addChild("Weight", $infondr['Weight']);
	//$HIVEncounter->addChild("BloodPressure", $infondr['BloodPressure']);
	//$HIVEncounter->addChild("PatientFamilyPlanningCode", "FP");
	//$HIVEncounter->addChild("PatientFamilyPlanningMethodCode", $infondr['PatientFamilyPlanningMethodCode']);
	//$HIVEncounter->addChild("FunctionalStatus", $infondr['FunctionalStatus']);
	//$HIVEncounter->addChild("WHOClinicalStage", $infondr['WHOClinicalStage']);
	//$HIVEncounter->addChild("TBStatus", $infondr['TBStatus']);
	//$ARVDrugRegimen = $HIVEncounter->addChild("ARVDrugRegimen");
	//$ARVDrugRegimen->addChild("Code", $infondr['Code']);
	//$ARVDrugRegimen->addChild("CodeDescTxt", $infondr['CodeDescTxt']);
	//$CotrimoxazoleDose = $HIVEncounter->addChild("CotrimoxazoleDose");
	//$CotrimoxazoleDose->addChild("Code", $infondr['CodeCTX']);
	//$CotrimoxazoleDose->addChild("CodeDescTxt", $infondr['CodeDescTxtCTX']);
	//$INHDose = $HIVEncounter->addChild("INHDose");
	//$INHDose->addChild("Code", "");
	//$INHDose->addChild("CodeDescTxt", "");
	//$HIVEncounter->addChild("CD4", $infondr['cd4value']);
	//$HIVEncounter->addChild("CD4TestDate", $infondr['CD4TestDate']);
	//$HIVEncounter->addChild("NextAppointmentDate", $infondr['NextAppointmentDate']);
	}else{
	$Encounters = $Condition->addChild("Encounters");
	$HIVEncounter = $Encounters->addChild("HIVEncounter");
	$HIVEncounter->addChild("VisitID", $infondr['VisitID']);		
	$HIVEncounter->addChild("VisitDate", $infondr['VisitDate']);
	if($infondr['DurationOnArt']=='0'||$infondr['DurationOnArt']==''){
	//$HIVEncounter->addChild("DurationOnArt", $infondr['DurationOnArt']);
	}
	else{
	$HIVEncounter->addChild("DurationOnArt", $infondr['DurationOnArt']);
	}
	if($infondr['Weight']==''){
		//$HIVEncounter->addChild("Weight", $infondr['Weight']);
	}else{
		$HIVEncounter->addChild("Weight", $infondr['Weight']);
	}
	if($infondr['BloodPressure']==''){
		//$HIVEncounter->addChild("BloodPressure", $infondr['BloodPressure']);
	}else{
		$HIVEncounter->addChild("BloodPressure", $infondr['BloodPressure']);
	}
	if($infondr['VisitDate']=='0000-00-00'){
		//$HIVEncounter->addChild("PatientFamilyPlanningCode", "FP");
		//$HIVEncounter->addChild("PatientFamilyPlanningMethodCode", $infondr['PatientFamilyPlanningMethodCode']);
	}else{
		$HIVEncounter->addChild("PatientFamilyPlanningCode", "FP");
		$HIVEncounter->addChild("PatientFamilyPlanningMethodCode", $infondr['PatientFamilyPlanningMethodCode']);
	}
	
	
	if($infondr['FunctionalStatus']==''){
		//$HIVEncounter->addChild("FunctionalStatus", $infondr['FunctionalStatus']);
	}else{
		$HIVEncounter->addChild("FunctionalStatus", $infondr['FunctionalStatus']);
	}
	if($infondr['WHOClinicalStage']==''){
		//$HIVEncounter->addChild("WHOClinicalStage", $infondr['WHOClinicalStage']);
	}else{
		$HIVEncounter->addChild("WHOClinicalStage", $infondr['WHOClinicalStage']);
	}
	if($infondr['TBStatus']==''){
		//$HIVEncounter->addChild("TBStatus", $infondr['TBStatus']);
	}else{
		$HIVEncounter->addChild("TBStatus", $infondr['TBStatus']);
	}
	
	if($infondr['VisitDate']=='0000-00-00'){
	//$ARVDrugRegimen = $HIVEncounter->addChild("ARVDrugRegimen");
	//$ARVDrugRegimen->addChild("Code", $infondr['Code']);
	//$ARVDrugRegimen->addChild("CodeDescTxt", $infondr['CodeDescTxt']);
	//$CotrimoxazoleDose = $HIVEncounter->addChild("CotrimoxazoleDose");
	//$CotrimoxazoleDose->addChild("Code", $infondr['CodeCTX']);
	//$CotrimoxazoleDose->addChild("CodeDescTxt", $infondr['CodeDescTxtCTX']);
	}else{
	$ARVDrugRegimen = $HIVEncounter->addChild("ARVDrugRegimen");
	$ARVDrugRegimen->addChild("Code", $infondr['Code']);
	$ARVDrugRegimen->addChild("CodeDescTxt", $infondr['CodeDescTxt']);	
	$CotrimoxazoleDose = $HIVEncounter->addChild("CotrimoxazoleDose");
	$CotrimoxazoleDose->addChild("Code", $infondr['CodeCTX']);
	$CotrimoxazoleDose->addChild("CodeDescTxt", $infondr['CodeDescTxtCTX']);
	}

	
	//$INHDose = $HIVEncounter->addChild("INHDose");
	//$INHDose->addChild("Code", "");
	//$INHDose->addChild("CodeDescTxt", "");
	if($infondr['cd4value']==''){
		//$HIVEncounter->addChild("CD4", $infondr['cd4value']);
		//$HIVEncounter->addChild("CD4TestDate", $infondr['VisitDate']);
	}else{
		$HIVEncounter->addChild("CD4", $infondr['cd4value']);
		$HIVEncounter->addChild("CD4TestDate", $infondr['VisitDate']);
	}
	
	
	if($infondr['NextAppointmentDate']=='0000-00-00'||$infondr['NextAppointmentDate']==''){
		//$HIVEncounter->addChild("NextAppointmentDate", $infondr['NextAppointmentDate']);
	}
	else{
		$HIVEncounter->addChild("NextAppointmentDate", $infondr['NextAppointmentDate']);
	}
	}
	
	
	/////// add LaboratoryReport ///////
	if($infondr['VisitID']==''){
	//$LaboratoryReport = $Condition->addChild("LaboratoryReport");
	//$LaboratoryReport->addChild("VisitID", $infondr['VisitID']);
	}else{
	$LaboratoryReport = $Condition->addChild("LaboratoryReport");
	$LaboratoryReport->addChild("VisitID", $infondr['VisitID']);
		
	}
	if($infondr['VisitDate']==''){
		//$LaboratoryReport->addChild("VisitDate", $infondr['VisitDate']);
	}else{
		$LaboratoryReport->addChild("VisitDate", $infondr['VisitDate']);
	}
	
	if($infondr['LaboratoryTestIdentifier']==''){
		//$LaboratoryReport->addChild("LaboratoryTestIdentifier", $infondr['LaboratoryTestIdentifier']);
	}
	else{
		$LaboratoryReport->addChild("LaboratoryTestIdentifier", $infondr['LaboratoryTestIdentifier']);
	}
	if($infondr['CollectionDate']=='0000-00-00'||$infondr['CollectionDate']==''){
		//$LaboratoryReport->addChild("CollectionDate", $infondr['CollectionDate']);
	}else{
		$LaboratoryReport->addChild("CollectionDate", $infondr['CollectionDate']);
	}
	if($infondr['BaselineRepeatCode']==''){
		//$LaboratoryReport->addChild("BaselineRepeatCode", $infondr['BaselineRepeatCode']);
	}else{
		$LaboratoryReport->addChild("BaselineRepeatCode", $infondr['BaselineRepeatCode']);
	}
	if($infondr['ARTStatusCode']==''){
		//$LaboratoryReport->addChild("ARTStatusCode", $infondr['ARTStatusCode']);
	}else{
		$LaboratoryReport->addChild("ARTStatusCode", $infondr['ARTStatusCode']);
	}
	
	
	if($infondr['VisitDate']==''){
		//$LaboratoryOrderAndResult->addChild("OrderedTestDate", $infondr['VisitDate']);
		//$LaboratoryOrderAndResult = $LaboratoryReport->addChild("LaboratoryOrderAndResult");
		//$LaboratoryResultedTest = $LaboratoryOrderAndResult->addChild("LaboratoryResultedTest");
		//$LaboratoryResultedTest->addChild("Code", "11");
		//$LaboratoryResultedTest->addChild("CodeDescTxt", "CD4");
		//$LaboratoryResult = $LaboratoryOrderAndResult->addChild("LaboratoryResult");
		//$AnswerNumeric = $LaboratoryResult->addChild("AnswerNumeric");
	}else{
		$LaboratoryOrderAndResult = $LaboratoryReport->addChild("LaboratoryOrderAndResult");
		$LaboratoryOrderAndResult->addChild("OrderedTestDate", $infondr['VisitDate']);
		$LaboratoryResultedTest = $LaboratoryOrderAndResult->addChild("LaboratoryResultedTest");
		$LaboratoryResultedTest->addChild("Code", "11");
		$LaboratoryResultedTest->addChild("CodeDescTxt", "CD4");
		$LaboratoryResult = $LaboratoryOrderAndResult->addChild("LaboratoryResult");
		$AnswerNumeric = $LaboratoryResult->addChild("AnswerNumeric");
	}
	
	
	
	
	
	
	if($infondr['Value1']==''){
		//$AnswerNumeric->addChild("Value1", $infondr['Value1']);
	}else{
		$AnswerNumeric->addChild("Value1", $infondr['Value1']);
	}
	if($infondr['VisitDate']==''){
		//$LaboratoryOrderAndResult->addChild("ResultedTestDate", $infondr['VisitDate']);
		//$LaboratoryReport->addChild("Clinician", $infondr['Clinician']);
		//$LaboratoryReport->addChild("ReportedBy", $infondr['ReportedBy']);
		//$LaboratoryReport->addChild("CheckedBy", $infondr['checkedby']);		
	}else{
		$LaboratoryOrderAndResult->addChild("ResultedTestDate", $infondr['VisitDate']);
		$LaboratoryReport->addChild("Clinician", $infondr['Clinician']);
		$LaboratoryReport->addChild("ReportedBy", $infondr['ReportedBy']);
		$LaboratoryReport->addChild("CheckedBy", $infondr['checkedby']);	
	}
	
	

	
	/////// add Regimen 1 ///////
	{		include './mandate_/lidh2.php';
		$sqla="SELECT dispensedate as PrescribedRegimenDispensedDate,CASE drugname1 
WHEN 'AZT/3TC/EFV' THEN '10' 
WHEN 'AZT/3TC/NVP' THEN '10' 
WHEN 'TDF/FTC/EFV' THEN '10' 
WHEN 'TDF/FTC/NVP' THEN '10' 
WHEN 'TDF/3TC/EFV' THEN '10' 
WHEN 'TDF/3TC/NVP' THEN '10' 
WHEN 'AZT/3TC/EFV' THEN '10' 
WHEN 'AZT/3TC/NVP' THEN '10' 
WHEN 'ABC/3TC/EFV' THEN '10'
WHEN 'AZT/3TC/ABC' THEN '11'
WHEN 'AZT/3TC/TDF' THEN '11'
WHEN 'ABC/3TC/NVP' THEN '11'
WHEN 'AZT/3TC/ABC' THEN '11'
WHEN 'ABC/3TC/EFV' THEN '11'
WHEN 'ABC/3TC/EFV' THEN '11'
WHEN 'TDF/FTC/LPV/r' THEN '20'
WHEN 'TDF/3TC/LPV/r' THEN '20'
WHEN 'TDF/FTC/ATV/r' THEN '20'
WHEN 'TDF/3TC/ATV/r' THEN '20'
WHEN 'AZT/3TC/LPV/r' THEN '20'
WHEN 'AZT/3TC/ATV/r' THEN '20'
WHEN 'ABC/3TC/LPV/r' THEN '20'
WHEN 'AZT/3TC/LPV/r' THEN '20' 
WHEN 'd4T/3TC/LPV/r' THEN '20' 
WHEN 'ddi/3TC/NVP' THEN '20' 
WHEN 'ABC/3TC/ddi' THEN '20' 
WHEN 'DAR' THEN '30' 
WHEN 'RAL' THEN '30' 
WHEN 'ETR' THEN '30' 
WHEN 'RTV' THEN '30' 
ELSE '' END as PrescribedRegimenLineCode,CASE drugname1 
WHEN 'AZT/3TC/EFV' THEN '1a' 
WHEN 'AZT/3TC/NVP' THEN '1b' 
WHEN 'TDF/FTC/EFV' THEN '1c' 
WHEN 'TDF/FTC/NVP' THEN '1d' 
WHEN 'TDF/3TC/EFV' THEN '1e' 
WHEN 'TDF/3TC/NVP' THEN '1f' 
WHEN 'AZT/3TC/ABC' THEN '1g' 
WHEN 'AZT/3TC/TDF' THEN '1h' 
WHEN 'TDF/FTC/LPV/r' THEN '2a' 
WHEN 'TDF/3TC/LPV/r' THEN '2b' 
WHEN 'TDF/FTC/ATV/r' THEN '2c' 
WHEN 'TDF/3TC/ATV/r' THEN '2d' 
WHEN 'AZT/3TC/LPV/r' THEN '2e' 
WHEN 'AZT/3TC/ATV/r' THEN '2f' 
WHEN 'ABC/3TC/NVP' THEN '4d' 
WHEN 'ABC/3TC/EFV' THEN '4c' 
WHEN 'd4T/3TC/NVP' THEN '4d'
WHEN 'ABC/3TC/LPV/r' THEN '5a'
WHEN 'd4T/3TC/LPV/r' THEN '5c'
WHEN 'ddi/3TC/NVP' THEN '5d'
WHEN 'ABC/3TC/ddi' THEN '5e'
WHEN 'TLC' THEN '4' 
ELSE '' END as CodePharmDrgName1,CASE drugname1 
WHEN 'AZT/3TC/EFV' THEN 'AZT-3TC-EFV' 
WHEN 'AZT/3TC/NVP' THEN 'AZT-3TC-NVP' 
WHEN 'TDF/FTC/EFV' THEN 'TDF-FTC-EFV' 
WHEN 'TDF/FTC/NVP' THEN 'TDF-FTC-NVP' 
WHEN 'TDF/3TC/EFV' THEN 'TDF-3TC-EFV' 
WHEN 'TDF/3TC/NVP' THEN 'TDF-3TC-NVP' 
WHEN 'AZT/3TC/ABC' THEN 'AZT-3TC-ABC' 
WHEN 'AZT/3TC/TDF' THEN 'AZT-3TC-TDF' 
WHEN 'ABC/3TC/NVP' THEN 'ABC-3TC-NVP' 
WHEN 'ABC/3TC/EFV' THEN 'ABC-3TC-EFV' 
WHEN 'd4T/3TC/NVP' THEN 'd4T-3TC-NVP'
WHEN 'ABC/3TC/LPV/r' THEN 'ABC-3TC-LPV/r'
WHEN 'd4T/3TC/LPV/r' THEN 'd4T-3TC-LPV/r'
WHEN 'ddi/3TC/NVP' THEN 'ddi-3TC-NVP'
WHEN 'ABC/3TC/ddi' THEN 'ABC-3TC-ddi'
WHEN 'TDF/FTC/LPV/r' THEN 'TDF-FTC-LPV/r' 
WHEN 'TDF/3TC/LPV/r' THEN 'TDF-3TC-LPV/r' 
WHEN 'TDF/FTC/ATV/r' THEN 'TDF-FTC-ATV/r' 
WHEN 'TDF/3TC/ATV/r' THEN 'TDF-3TC-ATV/r' 
WHEN 'AZT/3TC/LPV/r' THEN 'AZT-3TC-LPV/r' 
WHEN 'AZT/3TC/ATV/r' THEN 'AZT-3TC-ATV/r' 
ELSE '' END as CodeDescTxtPharmDrgName1 ,pharmacyid as VisitIDpharm,visitdate as VisitDatepharm,regduration1 as PrescribedRegimenDuration
FROM pharmacy 
where pepid='$infondr[pepid]' AND drugname1!=''
order by visitdate DESC LIMIT 1";
		$resulta=mysqli_query($con,$sqla);
		$info1a=mysqli_fetch_assoc($resulta);
	if($info1a['CodeDescTxtPharmDrgName1']==''){
	//$Regimen = $Condition->addChild("Regimen");
	//$Regimen->addChild("VisitID", $infondr['VisitIDpharm']);
	//$Regimen->addChild("VisitDate", $infondr['VisitDatepharm']);
	
	//$PrescribedRegimen = $Regimen->addChild("PrescribedRegimen");
	//$PrescribedRegimen->addChild("Code", $infondr['CodePharmDrgName1']);
	//$PrescribedRegimen->addChild("CodeDescTxt", $infondr['CodeDescTxtPharmDrgName1']);
	
	//$Regimen->addChild("PrescribedRegimenTypeCode", "ART");
	//$Regimen->addChild("PrescribedRegimenLineCode", $infondr['PrescribedRegimenLineCode']);
	//$Regimen->addChild("PrescribedRegimenDuration", $infondr['PrescribedRegimenDuration']);
	//$Regimen->addChild("PrescribedRegimenDispensedDate", $infondr['PrescribedRegimenDispensedDate']);
	//$Regimen->addChild("DateRegimenStarted", $info1['DateRegimenStarted']);
	//$Regimen->addChild("DateRegimenStartedDD", $info1['DateRegimenStartedDD']);
	//$Regimen->addChild("DateRegimenStartedMM", $info1['DateRegimenStartedMM']);
	//$Regimen->addChild("DateRegimenStartedYYYY", $info1['DateRegimenStartedYYYY']);
	//$Regimen->addChild("PrescribedRegimenInitialIndicator", "false");
	//$Regimen->addChild("PrescribedRegimenCurrentIndicator", "false");
	//$Regimen->addChild("TypeOfPreviousExposureCode", "N");
	//$Regimen->addChild("SubstitutionIndicator", "false");
	//$Regimen->addChild("SwitchIndicator", "false");
	}
	else{
		include './mandate_/lidh2.php';
		$sql="SELECT visitdate as DateRegimenStarted,DATE_FORMAT(visitdate,'%d') as DateRegimenStartedDD,DATE_FORMAT(visitdate,'%c') as DateRegimenStartedMM,DATE_FORMAT(visitdate,'%Y') as DateRegimenStartedYYYY FROM pharmacy where pepid='$infondr[pepid]' AND drugname1!='' order by visitdate ASC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$info1=mysqli_fetch_assoc($result);
		
	$Regimen = $Condition->addChild("Regimen");
	$Regimen->addChild("VisitID", $info1a['VisitIDpharm']);
	$Regimen->addChild("VisitDate", $info1a['VisitDatepharm']);
	
	$PrescribedRegimen = $Regimen->addChild("PrescribedRegimen");;
	$PrescribedRegimen->addChild("Code", $info1a['CodePharmDrgName1']);
	$PrescribedRegimen->addChild("CodeDescTxt", $info1a['CodeDescTxtPharmDrgName1']);
	
	$Regimen->addChild("PrescribedRegimenTypeCode", "ART");
	$Regimen->addChild("PrescribedRegimenLineCode", $info1a['PrescribedRegimenLineCode']);
	$Regimen->addChild("PrescribedRegimenDuration", $info1a['PrescribedRegimenDuration']);
	$Regimen->addChild("PrescribedRegimenDispensedDate", $info1a['PrescribedRegimenDispensedDate']);
	$Regimen->addChild("DateRegimenStarted", $info1['DateRegimenStarted']);
	$Regimen->addChild("DateRegimenStartedDD", $info1['DateRegimenStartedDD']);
	$Regimen->addChild("DateRegimenStartedMM", $info1['DateRegimenStartedMM']);
	$Regimen->addChild("DateRegimenStartedYYYY", $info1['DateRegimenStartedYYYY']);
	$Regimen->addChild("PrescribedRegimenInitialIndicator", "false");
	$Regimen->addChild("PrescribedRegimenCurrentIndicator", "false");
	$Regimen->addChild("TypeOfPreviousExposureCode", "N");
	$Regimen->addChild("SubstitutionIndicator", "false");
	$Regimen->addChild("SwitchIndicator", "false");
	}}
	/////// add Regimen 2 ///////
	{	include './mandate_/lidh2.php';
		$sqlb="SELECT pharmacyid as VisitIDCTX,visitdate as PrescribedRegimenDispensedDateCTX,CASE  
WHEN oiqty like '%100%' AND oidrug like '%CTX%' THEN 'CTX100' 
WHEN oiqty like '%200%' AND oidrug like '%CTX%' THEN 'CTX200' 
WHEN oiqty like '%300%' AND oidrug like '%CTX%' THEN 'CTX300' 
WHEN oiqty like '%480%' AND oidrug like '%CTX%' THEN 'CTX480' 
WHEN oiqty like '%960%' AND oidrug like '%CTX%' THEN 'CTX960' 
ELSE '' END as CodeCTXPharm,CASE  
WHEN oiqty like '%100%' AND oidrug like '%CTX%' THEN 'Cotrimoxazole 100mg' 
WHEN oiqty like '%200%' AND oidrug like '%CTX%' THEN 'Cotrimoxazole 200mg' 
WHEN oiqty like '%300%' AND oidrug like '%CTX%' THEN 'Cotrimoxazole 300mg' 
WHEN oiqty like '%480%' AND oidrug like '%CTX%' THEN 'Cotrimoxazole 480mg' 
WHEN oiqty like '%960%' AND oidrug like '%CTX%' THEN 'Cotrimoxazole 960mg' 
ELSE '' END as CodeDescTxtCTXPharm,CASE oiduration 
WHEN '1 month' THEN '30' 
WHEN '2 month' THEN '60' 
WHEN '3 month' THEN '90' 
WHEN '4 month' THEN '120' 
ELSE '' END as PrescribedRegimenDurationCTXpharm
FROM pharmacy 
where pepid='$infondr[pepid]' and lower(oidrug) like '%ctx%'
order by visitdate DESC LIMIT 1";
		$resultb=mysqli_query($con,$sqlb);
		$info1b=mysqli_fetch_assoc($resultb);
	if($info1b['CodeDescTxtCTXPharm']==''){

	//$Regimen = $Condition->addChild("Regimen");
	//$Regimen->addChild("VisitID", $infondr['VisitIDpharm']);
	//$Regimen->addChild("VisitDate", $infondr['VisitDatepharm']);
	
	//$PrescribedRegimen = $Regimen->addChild("PrescribedRegimen");
	//$PrescribedRegimen->addChild("Code", $infondr['CodeCTX']);
	//$PrescribedRegimen->addChild("CodeDescTxt", $infondr['CodeDescTxtCTX']);
	
	//$Regimen->addChild("PrescribedRegimenTypeCode", $infondr['PrescribedRegimenDurationCTXpharm']);
	//$Regimen->addChild("PrescribedRegimenDuration", $info1['DateRegimenStarted']);
	//$Regimen->addChild("PrescribedRegimenDispensedDate", $info1['DateRegimenStarted']);
	//$Regimen->addChild("DateRegimenStarted", $info1['DateRegimenStarted']);
	//$Regimen->addChild("DateRegimenStartedDD", $info1['DateRegimenStartedDD']);
	//$Regimen->addChild("DateRegimenStartedMM", $info1['DateRegimenStartedMM']);
	//$Regimen->addChild("DateRegimenStartedYYYY", $info1['DateRegimenStartedYYYY']);
	//$Regimen->addChild("PrescribedRegimenInitialIndicator", "true");
	//$Regimen->addChild("PrescribedRegimenCurrentIndicator", "true");
	//$Regimen->addChild("SubstitutionIndicator", "false");
	//$Regimen->addChild("SwitchIndicator", "false");
	}
	else{
		include './mandate_/lidh2.php';
		$sql="SELECT dispensedate as DateRegimenStarted,DATE_FORMAT(dispensedate,'%d') as DateRegimenStartedDD,DATE_FORMAT(dispensedate,'%c') as DateRegimenStartedMM,DATE_FORMAT(dispensedate,'%Y') as DateRegimenStartedYYYY FROM pharmacy where pepid='$infondr[pepid]' and lower(oidrug) like '%ctx%' order by visitdate ASC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$info1=mysqli_fetch_assoc($result);
		
	$Regimen = $Condition->addChild("Regimen");
	$Regimen->addChild("VisitID", $info1b['VisitIDCTX']);
	$Regimen->addChild("VisitDate", $info1b['PrescribedRegimenDispensedDateCTX']);
	
	$PrescribedRegimen = $Regimen->addChild("PrescribedRegimen");
	$PrescribedRegimen->addChild("Code", $info1b['CodeCTXPharm']);
	$PrescribedRegimen->addChild("CodeDescTxt", $info1b['CodeDescTxtCTXPharm']);
	
	$Regimen->addChild("PrescribedRegimenTypeCode", "CTX");
	$Regimen->addChild("PrescribedRegimenDuration", $info1b['PrescribedRegimenDurationCTXpharm']);
	$Regimen->addChild("PrescribedRegimenDispensedDate", $info1b['PrescribedRegimenDispensedDateCTX']);
	$Regimen->addChild("DateRegimenStarted", $info1['DateRegimenStarted']);
	$Regimen->addChild("DateRegimenStartedDD", $info1['DateRegimenStartedDD']);
	$Regimen->addChild("DateRegimenStartedMM", $info1['DateRegimenStartedMM']);
	$Regimen->addChild("DateRegimenStartedYYYY", $info1['DateRegimenStartedYYYY']);
	$Regimen->addChild("PrescribedRegimenInitialIndicator", "true");
	$Regimen->addChild("PrescribedRegimenCurrentIndicator", "true");
	$Regimen->addChild("SubstitutionIndicator", "false");
	$Regimen->addChild("SwitchIndicator", "false");
		}
	}
	/////// add Regimen 3 ///////
	{include './mandate_/lidh2.php';
		$sqlc="SELECT pharmacyid as VisitIDtb,visitdate as visitdateTB,CASE tbduration 
WHEN '1 month' THEN '30' 
WHEN '2 month' THEN '60' 
WHEN '3 month' THEN '90' 
WHEN '4 month' THEN '120' 
ELSE '' END as PrescribedRegimenDurationTBpharm,CASE  
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' AND tbdrug LIKE '%PZI%' AND tbdrug LIKE '%Streptomycin Injection%' AND tbdrug LIKE '%Ethambutol%' THEN 'HRZES'
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' AND tbdrug LIKE '%PZI%' AND tbdrug LIKE '%Ethambutol%' THEN 'HRZE' 
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' AND tbdrug LIKE '%Ethambutol%' THEN 'HRE' 
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' AND tbdrug LIKE '%Streptomycin Injection%' THEN 'HRS' 
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' THEN 'HR' 
WHEN tbdrug LIKE '%INH%' AND tbdrug LIKE '%Ethambutol%' THEN 'HE' 
WHEN tbdrug LIKE '%Streptomycin Injection%' THEN 'S' 
WHEN tbdrug LIKE '%PZI%' THEN 'Z' 
WHEN tbdrug LIKE '%Ethambutol%' THEN 'E' 
WHEN tbdrug LIKE '%Rifampicin%' THEN 'R' 
WHEN tbdrug LIKE '%INH%' THEN 'H'  
ELSE '' END as tbdrugcode,tbdrug as tbdrug
FROM pharmacy 
where pepid='$infondr[pepid]' and (lower(tbdrug) like '%rifampicin%' or lower(tbdrug) like '%inh%' or lower(tbdrug) like '%strept%' or lower(tbdrug) like '%etham%' or lower(tbdrug) like '%pzi%')
order by visitdate DESC LIMIT 1";
		$resultc=mysqli_query($con,$sqlc);
		$info2c=mysqli_fetch_assoc($resultc);

	if($info2c['tbdrugcode']==''){
	//$Regimen = $Condition->addChild("Regimen");
	//$Regimen->addChild("VisitID", $infondr['VisitIDpharm']);
	//$Regimen->addChild("VisitDate", $infondr['VisitDatepharm']);
	
	//$PrescribedRegimen = $Regimen->addChild("PrescribedRegimen");
	//$PrescribedRegimen->addChild("Code", $infondr['tbdrugcode']);
	//$PrescribedRegimen->addChild("CodeDescTxt", $infondr['tbdrug']);
	
	//$Regimen->addChild("PrescribedRegimenTypeCode", "TB");
	//$Regimen->addChild("PrescribedRegimenDuration", $info2['PrescribedRegimenDurationTBpharm']);
	//$Regimen->addChild("PrescribedRegimenDispensedDate", $info2['DateRegimenStarted']);
	//$Regimen->addChild("DateRegimenStarted", $info2['DateRegimenStarted']);
	//$Regimen->addChild("DateRegimenStartedDD", $info2['DateRegimenStartedDD']);
	//$Regimen->addChild("DateRegimenStartedMM", $info2['DateRegimenStartedMM']);
	//$Regimen->addChild("DateRegimenStartedYYYY", $info2['DateRegimenStartedYYYY']);
	//$Regimen->addChild("PrescribedRegimenInitialIndicator", "true");
	//$Regimen->addChild("PrescribedRegimenCurrentIndicator", "true");
	//$Regimen->addChild("SubstitutionIndicator", "false");
	//$Regimen->addChild("SwitchIndicator", "false");
	}
	else{
		include './mandate_/lidh2.php';
		$sql="SELECT dispensedate as DateRegimenStarted,DATE_FORMAT(dispensedate,'%d') as DateRegimenStartedDD,DATE_FORMAT(dispensedate,'%c') as DateRegimenStartedMM,DATE_FORMAT(dispensedate,'%Y') as DateRegimenStartedYYYY FROM pharmacy where pepid='$infondr[pepid]' and (lower(tbdrug) like '%rifampicin%' or lower(tbdrug) like '%inh%' or lower(tbdrug) like '%strept%' or lower(tbdrug) like '%etham%' or lower(tbdrug) like '%pzi%') order by visitdate ASC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$info2=mysqli_fetch_assoc($result);
	$Regimen = $Condition->addChild("Regimen");
	$Regimen->addChild("VisitID", $info2c['VisitIDtb']);
	$Regimen->addChild("VisitDate", $info2c['visitdateTB']);
	
	$PrescribedRegimen = $Regimen->addChild("PrescribedRegimen");
	$PrescribedRegimen->addChild("Code", $info2c['tbdrugcode']);
	$PrescribedRegimen->addChild("CodeDescTxt", $info2c['tbdrug']);
	
	$Regimen->addChild("PrescribedRegimenTypeCode", "TB");
	$Regimen->addChild("PrescribedRegimenDuration", $info2c['PrescribedRegimenDurationTBpharm']);
	$Regimen->addChild("PrescribedRegimenDispensedDate", $info2c['visitdateTB']);
	$Regimen->addChild("DateRegimenStarted", $info2['DateRegimenStarted']);
	$Regimen->addChild("DateRegimenStartedDD", $info2['DateRegimenStartedDD']);
	$Regimen->addChild("DateRegimenStartedMM", $info2['DateRegimenStartedMM']);
	$Regimen->addChild("DateRegimenStartedYYYY", $info2['DateRegimenStartedYYYY']);
	$Regimen->addChild("PrescribedRegimenInitialIndicator", "true");
	$Regimen->addChild("PrescribedRegimenCurrentIndicator", "true");
	$Regimen->addChild("SubstitutionIndicator", "false");
	$Regimen->addChild("SwitchIndicator", "false");
	}
	}
	/////////////////////////////////////////////////////////////End Condition//////////////////////////////////// 
$filen=""; 
$filen.="UPDATED_"; 
$filen.=date('YmdHis')."_";
$filen.=$infondr['PatientIdentifier'];

////////////////////CREATE ndr FOLDER/////////////
if (!file_exists('c:\ndr')) {
    mkdir('c:\ndr', 0777, true);
}
    /*** echo the xml ***/ 
    $Container->asXML("c:\\ndr\\".$filen.".xml"); 
	echo $filen.' Generated...'.'<br>';
 
    } 
catch( Exception $e ) 
{ 
    echo $e->getMessage(); 
} 
?>
