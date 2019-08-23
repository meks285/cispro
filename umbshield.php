<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', '-1');
echo '<p><a href="./adprivsco">[BACK]</a></p>';
echo 'GENERATING NDR FILES...'.'<br>';


$link = mysql_connect('localhost', 'root', 'Nu66et%%');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make apindb the current db
$db_selected = mysql_select_db('apindb', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}


$query_select = "select p.idpatient as uniqueid,p.pepid as HospitalNumber,(select facilityname from facility) as FacilityName,
p.pepid as ARTEnrollmentNumber, 
CASE WHEN lower(p.sex) like 'm%' THEN 'M' WHEN lower(p.sex) like 'f%' THEN 'F' ELSE 'O' END as Sex,
p.dob as SubjectBirthDate,
p.enroldate as ARTEnrollmentDate,
TIMESTAMPDIFF(YEAR, p.dob, p.enroldate) as AgeAtARTEnrollment,
CASE WHEN lower(p.maritalstatus) like 'single' THEN 'S' WHEN lower(p.maritalstatus) like 'married' THEN 'M' WHEN lower(p.maritalstatus) like 'divorced' THEN 'D' WHEN lower(p.maritalstatus) like 'widowed' THEN 'W' WHEN lower(p.maritalstatus) like 'separated' THEN 'A' ELSE 'U' END as MaritalStatus,
'' as ResidenceAtEnrollment,
'' as PartnerHIVStatus,
CASE WHEN lower(educationallevel) like 'none%' THEN 1 WHEN lower(educationallevel) like 'primary%' THEN 2 WHEN lower(p.educationallevel) like 'post%secondary%' THEN 4 WHEN lower(p.educationallevel) like '%secondary%' THEN 3  WHEN lower(p.educationallevel) like 'quranic%' THEN 6 WHEN COALESCE(lower(p.educationallevel)) = 0 THEN 7 END as PatientEducationalLevel,
'' as OtherPatientEducationalLevel,
CASE WHEN lower(p.jobstatus) like 'employed%' THEN 1 WHEN lower(p.jobstatus) like 'unemployed%' THEN 2 WHEN lower(p.jobstatus) like 'student%' THEN 2 WHEN lower(p.jobstatus) like 'retired%' THEN 2 WHEN COALESCE(lower(p.jobstatus)) = 0 THEN 3 END as PatientEmploymentStatus,
CASE p.currentlypregnant WHEN 'Yes' THEN 'Y' WHEN 'No' THEN 'N' WHEN 'Uncertain' THEN 'N/A' ELSE '4' END as PatientPregnancyStatus,
CASE WHEN substring(p.pepid,1,2) = (select facilityidprefix from facility LIMIT 1) THEN 'N' ELSE 'Y' END as ARTTransferIn,
CASE WHEN substring(p.pepid,1,2) = (select facilityidprefix from facility LIMIT 1) THEN '' ELSE enroldate END as ARTTransferDate,
dateartstart as ARTInitiationDate,regimen1st,
CASE 
WHEN p.regimen1st LIKE '%AZT%3TC%EFV%' THEN '1h' 
WHEN p.regimen1st LIKE '%AZT%3TC%' AND p.regimen1st LIKE '%EFV%' THEN '1h' 
WHEN p.regimen1st LIKE '%AZT%3TC%NVP%' THEN '1g' 
WHEN p.regimen1st LIKE '%TDF%FTC%EFV%' THEN '1f'
WHEN p.regimen1st LIKE '%TDF%FTC%NVP%' THEN '1e' 
WHEN p.regimen1st LIKE '%TDF%3TC%EFV%' THEN '1d' 
WHEN p.regimen1st LIKE '%TDF%3TC%NVP%' THEN '1c' 
WHEN p.regimen1st LIKE '%AZT%3TC%TDF%' THEN '2l' 
WHEN p.regimen1st LIKE '%TDF%FTC%LPV%r%' THEN '2f' 
WHEN p.regimen1st LIKE '%TDF%3TC%LPV%r%' THEN '2k' 
WHEN p.regimen1st LIKE '%TDF%FTC%ATV%r%' THEN '2j' 
WHEN p.regimen1st LIKE '%TDF%3TC%ATV%r%' THEN '2d' 
WHEN p.regimen1st LIKE '%AZT%3TC%LPV%r%' THEN '2i' 
WHEN p.regimen1st LIKE '%AZT%3TC%ATV%r%' THEN '2n' 
WHEN p.regimen1st LIKE '%FDC (TDF%FTC%EFV)%' THEN '1f'                      
WHEN p.regimen1st LIKE '%FDC (TDF%3TC%EFV)%' THEN '1d'                      
WHEN p.regimen1st LIKE '%FDC (3TC%AZT%NVP)%' THEN '1g'                      
WHEN p.regimen1st LIKE '%Truvada (TDF%FTC)%' AND p.regimen1st= '%EFV%' THEN '1f' 
WHEN p.regimen1st LIKE '%Truv (TDF%FTC)%' AND p.regimen1st= '%EFV%' THEN '1f'    
WHEN p.regimen1st LIKE '%Truvada (TDF%FTC)' AND p.regimen1st= '%NVP%' THEN '1e' 
WHEN p.regimen1st LIKE '%Truv (TDF%FTC)%' AND p.regimen1st= '%NVP%' THEN '1e'    
WHEN p.regimen1st LIKE '%CBV (AZT%3TC)%' AND p.regimen1st='%NVP%' THEN '1g'      
WHEN p.regimen1st LIKE '%CBV (AZT%3TC)%' AND p.regimen1st='%EFV%' THEN '1h' 
WHEN p.regimen1st LIKE  '%AZT%' AND p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%NVP%'  THEN '1g' 
WHEN p.regimen1st LIKE  '%AZT%' AND p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%NVP%'  THEN '1g'
WHEN p.regimen1st LIKE  '%TDF%' AND p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%NVP%'  THEN '1c' 
WHEN p.regimen1st LIKE  '%TDF%' AND p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%EFV%'  THEN '1d' 
WHEN p.regimen1st LIKE  '%NVP%' AND p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%D4T%'  THEN '1a' 
WHEN p.regimen1st LIKE  '%AZT%' AND p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%EFV%'  THEN '1h' 
WHEN p.regimen1st LIKE  '%EFV%' AND p.regimen1st LIKE  '%TDF%' AND (p.regimen1st LIKE  '%FTC%' OR p.regimen1st LIKE  '%3TC%') THEN '1f' 
WHEN p.regimen1st LIKE  '%EFV%' AND p.regimen1st LIKE  '%D4T%' AND p.regimen1st LIKE  '%3TC%'  THEN '1b'
WHEN p.regimen1st LIKE  '%TDF%' AND p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%NVP%'  THEN '1c'
WHEN p.regimen1st LIKE  '%TDF%' AND p.regimen1st LIKE  '%FTC%' AND p.regimen1st LIKE  '%EFV%'  THEN '1f'
WHEN p.regimen1st LIKE  '%AZT%' AND p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%EFV%'  THEN '1h'
WHEN p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%AZT%' AND p.regimen1st LIKE  '%NVP%'  THEN '1g'
WHEN p.regimen1st LIKE  '%NVP%' AND p.regimen1st LIKE  '%AZT%' AND p.regimen1st LIKE  '%3TC%'  THEN '1g'
WHEN p.regimen1st LIKE  '%TDF%' AND p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%EFV%'  THEN '1d'
WHEN p.regimen1st LIKE  '%AZT%' AND p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%NVP%'  THEN '1g'
WHEN COALESCE(p.regimen1st,0) = 0 THEN '' 
WHEN p.regimen1st LIKE  '%ABC%' AND p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%EFV%'  THEN '3a'
WHEN p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%ABC%' AND p.regimen1st LIKE  '%EFV%'  THEN '3a'
WHEN p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%ABC%' AND p.regimen1st LIKE  '%NVP%'  THEN '3a'
WHEN p.regimen1st LIKE '%ABC%3TC%NVP%' THEN '3a' 
WHEN p.regimen1st LIKE '%ABC%3TC%EFV%' THEN '3a' 
WHEN p.regimen1st LIKE '%d4T%3TC%NVP%' THEN '1a'
WHEN p.regimen1st LIKE  '%EFV%' AND p.regimen1st LIKE  '%ABC%' AND p.regimen1st LIKE  '%3TC%'  THEN '3a'
WHEN p.regimen1st LIKE  '%ABC%' AND p.regimen1st LIKE  '%AZT%' AND p.regimen1st LIKE  '%3TC%'  THEN '3a'
WHEN p.regimen1st LIKE  '%ABC%' AND p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%EFV%'  THEN '3a'
WHEN p.regimen1st LIKE  '%ABC%' AND p.regimen1st LIKE  '%EFV%' AND p.regimen1st LIKE  '%3TC%'  THEN '3a'
WHEN p.regimen1st LIKE  '%ABC%' AND p.regimen1st LIKE  '%D4T%' AND p.regimen1st LIKE  '%3TC%'  THEN '3a'
WHEN p.regimen1st LIKE '%ABC%3TC%LPV%r' THEN '3a'
WHEN p.regimen1st LIKE '%d4T%3TC%LPV%r' THEN '3a'
WHEN p.regimen1st LIKE '%ddi%3TC%NVP%' THEN '3a'
WHEN p.regimen1st LIKE '%ABC%3TC%ddi%' THEN '3a'
WHEN p.regimen1st LIKE  '%NVP%' AND p.regimen1st LIKE  '%3TC%' AND p.regimen1st LIKE  '%ABC%'  THEN '3a' 
WHEN p.regimen1st LIKE '%TLC%' THEN '3a'
WHEN p.regimen1st LIKE '%AZT%3TC%ABC%' THEN '3a' 
ELSE '3a' END as ARTRegimenName,
'' as ARTRegimenNameOthers,
p.hivposdate as HivConfirmedDate,
p.peheight as PatientHeight,
p.peweight as PatientWeight,
p.dateeligible as ARTEligibilityDate,
p.dateartstart as ARTStartDate,
CASE whyeligible WHEN 'Clinically only' THEN 'Y' ELSE 'N' END as Clinicallyonly,
CASE whyeligible WHEN 'CD4' THEN 'Y' ELSE 'N' END as CD4Count,
CASE WHEN COALESCE(hivposdate,0) = 0 THEN 'N' WHEN hivposdate = '0000-00-00' THEN 'N' ELSE 'Y' END as HIVPositiveTest,
CASE COALESCE(cd4atart,0) WHEN 0 THEN '' ELSE cd4atart END CD4CellCount,
CASE COALESCE(cd4atart,0) WHEN 0 THEN '' ELSE dateartstart END CD4TestDate, 
CASE COALESCE(clinicalstageart,0) WHEN 0 THEN 0 WHEN 1 THEN 'I' WHEN 2 THEN 'II' WHEN 3 THEN 'III' WHEN 4 THEN 'IV' ELSE '' END ARTClinicalStage,
CASE WHEN COALESCE(patfunction,0) THEN 0 WHEN patfunction='Working' THEN 'W' WHEN patfunction='Ambulant' THEN 'A' WHEN patfunction='Bed Ridden' THEN 'B' ELSE '' END as FunctionalStatus,
CASE WHEN LOWER(whostagecriteria) LIKE '%tb%' THEN 'Y' ELSE 'N' END AS Tuberculosis,
CASE WHEN LOWER(whostagecriteria) LIKE '%tb%' THEN enroldate ELSE '' END AS TuberculosisDiagnosisDate,
CASE WHEN LOWER(whostagecriteria) LIKE '%tb%' THEN 'Y' ELSE 'N' END AS Tuberculosis,
CASE WHEN LOWER(whostagecriteria) LIKE '%tb%' THEN enroldate ELSE '' END AS TuberculosisDiagnosisDate,
CASE WHEN LOWER(whostagecriteria) LIKE '%pcp%' THEN 'Y' ELSE 'N' END AS PCP,
CASE WHEN LOWER(whostagecriteria) LIKE '%pcp%' THEN enroldate ELSE '' END AS PCPDiagnosisDate,
CASE WHEN LOWER(whostagecriteria) LIKE '%cryptococcosis%' THEN 'Y' ELSE 'N' END AS Cryptococcosis,
CASE WHEN LOWER(whostagecriteria) LIKE '%cryptococcosis%' THEN enroldate ELSE '' END AS CryptococcosisDiagnosisDate,
CASE WHEN LOWER(whostagecriteria) LIKE '%zoster%' THEN 'Y' ELSE 'N' END AS HerpesZoster,
CASE WHEN LOWER(whostagecriteria) LIKE '%zoster%' THEN enroldate ELSE '' END AS HerpesZosterDiagnosisDate,
CASE WHEN LOWER(whostagecriteria) LIKE '%vaginal thrush%' THEN 'Y' ELSE 'N' END AS VaginalThrush,
CASE WHEN LOWER(whostagecriteria) LIKE '%vaginal thrush%' THEN enroldate ELSE '' END AS VaginalThrushDiagnosisDate,
CASE WHEN LOWER(whostagecriteria) LIKE '%simplex%' THEN 'Y' ELSE 'N' END AS HerpesSimplex,
CASE WHEN LOWER(whostagecriteria) LIKE '%simplex%' THEN enroldate ELSE '' END AS HerpesSimplexDiagnosisDate,
CASE WHEN LOWER(whostagecriteria) LIKE '%others%' THEN 'Y' ELSE 'N' END AS Others,
CASE WHEN LOWER(whostagecriteria) LIKE '%others%' THEN enroldate ELSE '' END AS OthersDiagnosisDate,
'6' AS SexuallyTransmittedInfections,
CASE pastcurrarvsideeff WHEN '' THEN 'N' WHEN 'None' THEN 'N' ELSE 'Y' END as ChronicIllness,
CASE pastcurrarvsideeff WHEN 'Other' THEN pastcurrarvsideeff ELSE '' END as OtherChronicIllness
from patient p JOIN pharmacy ph
ON (p.pepid=ph.pepid)
WHERE enroldate!='0000-00-00' and hivposdate != '0000-00-00'
group by p.pepid";

$result_select = mysql_query($query_select) or die(mysql_error());
$rows = array();
while($row = mysql_fetch_array($result_select))
    $rows[] = $row;
foreach($rows as $row){
			ob_start();
        /*** a new dom object ***/ 
    $dom = new domDocument; 
	//$dom = new DOMDocument('1.0','utf-8');

    /*** make the output tidy ***/ 
    $dom->formatOutput = true; 

    /*** create the root element ***/ 
    $root = $dom->appendChild($dom->createElement( "Container" )); 

    /*** create the simple xml element ***/ 
    $Container = simplexml_import_dom( $dom ); 
	

    /*** add a MessageHeader element ***/ 
	$MessageHeader = $Container->addChild("MessageHeader"); 
	$MessageHeader->addChild("MessageStatusCode", "INITIAL"); 
    $MessageHeader->addChild("MessageCreationDateTime", date('Y-m-d\TH:i:s')); 
	
	/*** add a MessageSendingOrganization element ***/
	$MessageSendingOrganization = $MessageHeader->addChild("MessageSendingOrganization"); 
	$MessageSendingOrganization->addChild("IPName", "APIN Public Health Initiatives"); 
    $MessageSendingOrganization->addChild("FacilityName",  $row['FacilityName']); 
    
	/*** add a SubjectDemography element ***/ 
	$SubjectDemography = $Container->addChild("SubjectDemography"); 
	
	/////////////////////////////////////////////////////////////Start Patient Demographics//////////////////////////////////// 
	///// add patientidentifer//////////////////
	$SubjectDemography->addChild("HospitalNumber", $row['uniqueid']); 
	$SubjectDemography->addChild("ARTEnrollmentNumber", $row['uniqueid']); 
	$SubjectDemography->addChild("Sex", $row['Sex']); 
	$SubjectDemography->addChild("SubjectBirthDate", $row['SubjectBirthDate']); 
	$SubjectDemography->addChild("ARTEnrollmentDate", $row['ARTEnrollmentDate']); 
	$SubjectDemography->addChild("AgeAtARTEnrollment", $row['AgeAtARTEnrollment']); 
	$SubjectDemography->addChild("MaritalStatus", $row['MaritalStatus']); 
	$SubjectDemography->addChild("ResidenceAtEnrollment", $row['ResidenceAtEnrollment']); 
	$SubjectDemography->addChild("PartnerHIVStatus", $row['PartnerHIVStatus']); 
	$SubjectDemography->addChild("PatientEducationalLevel", $row['PatientEducationalLevel']); 
	$SubjectDemography->addChild("OtherPatientEducationalLevel", $row['OtherPatientEducationalLevel']); 
	$SubjectDemography->addChild("PatientEmploymentStatus", $row['PatientEmploymentStatus']); 
	$SubjectDemography->addChild("PatientPregnancyStatus", $row['PatientPregnancyStatus']); 
	$SubjectDemography->addChild("ARTTransferIn", $row['ARTTransferIn']); 
	if($row['ARTInitiationDate']=='Y' && ($row['ARTInitiationDate']=='' || $row['ARTInitiationDate']=='0000-00-00')){
	$sqllab="SELECT pepid,MIN(visitdate) as ARTInitiationDate, oidrug from pharmacy where pepid='$row[HospitalNumber]' and drugname1!='' group by pepid";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
		foreach($rows_lab as $row_lab){ 
	$SubjectDemography->addChild("ARTTransferDate", $row['ARTTransferDate']); 
	$SubjectDemography->addChild("ARTInitiationDate", $row_lab['ARTInitiationDate']); 
	$SubjectDemography->addChild("ARTRegimenName", $row['ARTRegimenName']); 
	$SubjectDemography->addChild("ARTRegimenNameOthers", $row['ARTRegimenNameOthers']); 
		}
	}
	else{
	//$SubjectDemography->addChild("ARTTransferDate", $row['ARTTransferDate']); 
	//$SubjectDemography->addChild("ARTInitiationDate", $row['ARTInitiationDate']); 
	//$SubjectDemography->addChild("ARTRegimenName", $row['ARTRegimenName']); 
	//$SubjectDemography->addChild("ARTRegimenNameOthers", $row['ARTRegimenNameOthers']); 
	}
	
	/*** add a SubjectClinicalInformation element ***/ 
	$SubjectClinicalInformation = $Container->addChild("SubjectClinicalInformation"); 
	$SubjectClinicalInformation->addChild("HivConfirmedDate", $row['HivConfirmedDate']); 
	$SubjectClinicalInformation->addChild("PatientHeight", $row['PatientHeight']); 
	$SubjectClinicalInformation->addChild("PatientWeight", $row['PatientWeight']); 
//*Deleted Field*	$SubjectClinicalInformation->addChild("ARTEligibilityDate", $row['ARTEligibilityDate']); 
	if($row['ARTStartDate']=='' || $row['ARTStartDate']=='0000-00-00'){
	$sqllab="SELECT pepid,MIN(visitdate) as ARTStartDate, oidrug from pharmacy where pepid='$row[HospitalNumber]' and drugname1!='' group by pepid";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
		foreach($rows_lab as $row_lab){ 
	$SubjectClinicalInformation->addChild("ARTStartDate", $row_lab['ARTStartDate']); 
		}
		
	}
	else{
	$SubjectClinicalInformation->addChild("ARTStartDate", $row['ARTStartDate']); 
	}

	
	/*** add a ARTEligibilityCriteria element ***/ 
//*Deleted Field*	$ARTEligibilityCriteria = $SubjectClinicalInformation->addChild("ARTEligibilityCriteria"); 
//	$ARTEligibilityCriteria->addChild("Clinicallyonly", $row['Clinicallyonly']); 
//	$ARTEligibilityCriteria->addChild("CD4Count", $row['CD4Count']); 
//	$ARTEligibilityCriteria->addChild("HIVPositiveTest", $row['HIVPositiveTest']); 


	$CD4CellCount = $SubjectClinicalInformation->addChild("CD4CellCount"); 
	$CD4TestDate = $SubjectClinicalInformation->addChild("CD4TestDate"); 
	$ARTClinicalStage = $SubjectClinicalInformation->addChild("ARTClinicalStage"); 
	$FunctionalStatus = $SubjectClinicalInformation->addChild("FunctionalStatus"); 
	$TBStatus = $SubjectClinicalInformation->addChild("TBStatus"); 
	////////INHProphylaxis////////////
		$sqllab="SELECT pepid, tbdrug from pharmacy where pepid='$row[HospitalNumber]' and lower(tbdrug) LIKE '%inh%' group by pepid";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
		foreach($rows_lab as $row_lab){ 
	if($row_lab['tbdrug']=='INH'){
	$INHProphylaxis = $SubjectClinicalInformation->addChild("INHProphylaxis",'Y'); 
	}else{
	$INHProphylaxis = $SubjectClinicalInformation->addChild("INHProphylaxis",'N'); 
	}
		}
//	$INHProphylaxis = $SubjectClinicalInformation->addChild("INHProphylaxis"); 
	
	/*** add a ARTInfection element ***/ 
	$ARTInfection = $SubjectClinicalInformation->addChild("ARTInfection"); 
//	$ARTInfection->addChild("ChronicDiarrhea", $row['ChronicDiarrhea']); 
//	$ARTInfection->addChild("ChronicDiarrheaDiagnosisDate", $row['ChronicDiarrheaDiagnosisDate']); 
	$ARTInfection->addChild("Tuberculosis", $row['Tuberculosis']); 
	$ARTInfection->addChild("TuberculosisDiagnosisDate", $row['TuberculosisDiagnosisDate']); 
	$ARTInfection->addChild("PCP", $row['PCP']); 
	$ARTInfection->addChild("PCPDiagnosisDate", $row['PCPDiagnosisDate']); 
	$ARTInfection->addChild("Cryptococcosis", $row['Cryptococcosis']); 
	$ARTInfection->addChild("CryptococcosisDiagnosisDate", $row['CryptococcosisDiagnosisDate']); 
//	$ARTInfection->addChild("KaposiSarcoma", $row['KaposiSarcoma']); 
//	$ARTInfection->addChild("KaposiSarcomaDiagnosisDate", $row['KaposiSarcomaDiagnosisDate']); 
//	$ARTInfection->addChild("HerpesZoster", $row['HerpesZoster']); 
//	$ARTInfection->addChild("HerpesZosterDiagnosisDate", $row['HerpesZosterDiagnosisDate']); 
	$ARTInfection->addChild("VaginalThrush", $row['VaginalThrush']); 
	$ARTInfection->addChild("VaginalThrushDiagnosisDate", $row['VaginalThrushDiagnosisDate']); 
	$ARTInfection->addChild("HerpesSimplex", $row['HerpesSimplex']); 
	$ARTInfection->addChild("HerpesSimplexDiagnosisDate", $row['HerpesSimplexDiagnosisDate']); 
	$ARTInfection->addChild("Others", $row['Others']); 
	$ARTInfection->addChild("OthersDiagnosisDate", $row['OthersDiagnosisDate']); 
	

	$SexuallyTransmittedInfections = $SubjectClinicalInformation->addChild("SexuallyTransmittedInfections"); 
	$OtherSexuallyTransmittedInfections = $SubjectClinicalInformation->addChild("OtherSexuallyTransmittedInfections",''); 
	$ChronicIllness = $SubjectClinicalInformation->addChild("ChronicIllness",''); 
	$OtherChronicIllness = $SubjectClinicalInformation->addChild("OtherChronicIllness",''); 

	////////Cotrimoxazole////////////
		$sqllab="SELECT pepid,MIN(visitdate) as minv, oidrug from pharmacy where pepid='$row[HospitalNumber]'  group by pepid";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
		foreach($rows_lab as $row_lab){ 
	if($row_lab['oidrug']==''){
	$Cotrimoxazole = $SubjectClinicalInformation->addChild("Cotrimoxazole",'N'); 
	}else{
	$Cotrimoxazole = $SubjectClinicalInformation->addChild("Cotrimoxazole",'Y'); 
	}
		}
	
	
		$sqllab="SELECT pepid,MAX(visitdate) as minv, oidrug from pharmacy where pepid='$row[HospitalNumber]'  group by pepid";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
		foreach($rows_lab as $row_lab){ 
	if($row_lab['oidrug']==''){
	$CotrimoxazoleOnLastVisit = $SubjectClinicalInformation->addChild("CotrimoxazoleOnLastVisit",'N'); 
	}else{
	$CotrimoxazoleOnLastVisit = $SubjectClinicalInformation->addChild("CotrimoxazoleOnLastVisit",'Y'); 
	}
	
		}
	////////Subject Regimen Change History////////////
		$sqllab="SELECT COUNT(*) as NoRegimenChanges FROM `subswitch`  where pepid='$row[HospitalNumber]'";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
		foreach($rows_lab as $row_lab){ 
	$SubjectARTRegimenChangeHistory = $Container->addChild("SubjectARTRegimenChangeHistory"); 	
	if($row_lab['NoRegimenChanges']=='0'){
	$SubjectARTRegimenChangeHistory->addChild("NoRegimenChanges",'N'); 
	}else{
	$SubjectARTRegimenChangeHistory->addChild("NoRegimenChanges",'Y'); 
	}
		}
	

		$sqllab="SELECT sub.pepid,CASE 
WHEN newregimen LIKE '%AZT%3TC%EFV%' THEN '1h' 
WHEN newregimen LIKE '%AZT%3TC%' AND newregimen LIKE '%EFV%' THEN '1h' 
WHEN newregimen LIKE '%AZT%3TC%NVP%' THEN '1g' 
WHEN newregimen LIKE '%TDF%FTC%EFV%' THEN '1f'
WHEN newregimen LIKE '%TDF%FTC%NVP%' THEN '1e' 
WHEN newregimen LIKE '%TDF%3TC%EFV%' THEN '1d' 
WHEN newregimen LIKE '%TDF%3TC%NVP%' THEN '1c' 
WHEN newregimen LIKE '%AZT%3TC%TDF%' THEN '2l' 
WHEN newregimen LIKE '%TDF%FTC%LPV%r%' THEN '2f' 
WHEN newregimen LIKE '%TDF%3TC%LPV%r%' THEN '2k' 
WHEN newregimen LIKE '%TDF%FTC%ATV%r%' THEN '2j' 
WHEN newregimen LIKE '%TDF%3TC%ATV%r%' THEN '2d' 
WHEN newregimen LIKE '%AZT%3TC%LPV%r%' THEN '2i' 
WHEN newregimen LIKE '%AZT%3TC%ATV%r%' THEN '2n' 
WHEN newregimen LIKE '%FDC (TDF%FTC%EFV)%' THEN '1f'                      
WHEN newregimen LIKE '%FDC (TDF%3TC%EFV)%' THEN '1d'                      
WHEN newregimen LIKE '%FDC (3TC%AZT%NVP)%' THEN '1g'                      
WHEN newregimen LIKE '%Truvada (TDF%FTC)%' AND newregimen= '%EFV%' THEN '1f' 
WHEN newregimen LIKE '%Truv (TDF%FTC)%' AND newregimen= '%EFV%' THEN '1f'    
WHEN newregimen LIKE '%Truvada (TDF%FTC)' AND newregimen= '%NVP%' THEN '1e' 
WHEN newregimen LIKE '%Truv (TDF%FTC)%' AND newregimen= '%NVP%' THEN '1e'    
WHEN newregimen LIKE '%CBV (AZT%3TC)%' AND newregimen='%NVP%' THEN '1g'      
WHEN newregimen LIKE '%CBV (AZT%3TC)%' AND newregimen='%EFV%' THEN '1h' 
WHEN newregimen LIKE  '%AZT%' AND newregimen LIKE  '%3TC%' AND newregimen LIKE  '%NVP%'  THEN '1g' 
WHEN newregimen LIKE  '%AZT%' AND newregimen LIKE  '%3TC%' AND newregimen LIKE  '%NVP%'  THEN '1g'
WHEN newregimen LIKE  '%TDF%' AND newregimen LIKE  '%3TC%' AND newregimen LIKE  '%NVP%'  THEN '1c' 
WHEN newregimen LIKE  '%TDF%' AND newregimen LIKE  '%3TC%' AND newregimen LIKE  '%EFV%'  THEN '1d' 
WHEN newregimen LIKE  '%NVP%' AND newregimen LIKE  '%3TC%' AND newregimen LIKE  '%D4T%'  THEN '1a' 
WHEN newregimen LIKE  '%AZT%' AND newregimen LIKE  '%3TC%' AND newregimen LIKE  '%EFV%'  THEN '1h' 
WHEN newregimen LIKE  '%EFV%' AND newregimen LIKE  '%TDF%' AND (newregimen LIKE  '%FTC%' OR newregimen LIKE  '%3TC%') THEN '1f' 
WHEN newregimen LIKE  '%EFV%' AND newregimen LIKE  '%D4T%' AND newregimen LIKE  '%3TC%'  THEN '1b'
WHEN newregimen LIKE  '%TDF%' AND newregimen LIKE  '%3TC%' AND newregimen LIKE  '%NVP%'  THEN '1c'
WHEN newregimen LIKE  '%TDF%' AND newregimen LIKE  '%FTC%' AND newregimen LIKE  '%EFV%'  THEN '1f'
WHEN newregimen LIKE  '%AZT%' AND newregimen LIKE  '%3TC%' AND newregimen LIKE  '%EFV%'  THEN '1h'
WHEN newregimen LIKE  '%3TC%' AND newregimen LIKE  '%AZT%' AND newregimen LIKE  '%NVP%'  THEN '1g'
WHEN newregimen LIKE  '%NVP%' AND newregimen LIKE  '%AZT%' AND newregimen LIKE  '%3TC%'  THEN '1g'
WHEN newregimen LIKE  '%TDF%' AND newregimen LIKE  '%3TC%' AND newregimen LIKE  '%EFV%'  THEN '1d'
WHEN newregimen LIKE  '%AZT%' AND newregimen LIKE  '%3TC%' AND newregimen LIKE  '%NVP%'  THEN '1g'
WHEN newregimen LIKE  '%ABC%' AND newregimen LIKE  '%3TC%' AND newregimen LIKE  '%EFV%'  THEN '3a'
WHEN newregimen LIKE  '%3TC%' AND newregimen LIKE  '%ABC%' AND newregimen LIKE  '%EFV%'  THEN '3a'
WHEN newregimen LIKE  '%3TC%' AND newregimen LIKE  '%ABC%' AND newregimen LIKE  '%NVP%'  THEN '3a'
WHEN newregimen LIKE '%ABC%3TC%NVP%' THEN '3a' 
WHEN newregimen LIKE '%ABC%3TC%EFV%' THEN '3a' 
WHEN newregimen LIKE '%d4T%3TC%NVP%' THEN '1a'
WHEN newregimen LIKE  '%EFV%' AND newregimen LIKE  '%ABC%' AND newregimen LIKE  '%3TC%'  THEN '3a'
WHEN newregimen LIKE  '%ABC%' AND newregimen LIKE  '%AZT%' AND newregimen LIKE  '%3TC%'  THEN '3a'
WHEN newregimen LIKE  '%ABC%' AND newregimen LIKE  '%3TC%' AND newregimen LIKE  '%EFV%'  THEN '3a'
WHEN newregimen LIKE  '%ABC%' AND newregimen LIKE  '%EFV%' AND newregimen LIKE  '%3TC%'  THEN '3a'
WHEN newregimen LIKE  '%ABC%' AND newregimen LIKE  '%D4T%' AND newregimen LIKE  '%3TC%'  THEN '3a'
WHEN newregimen LIKE '%ABC%3TC%LPV%r' THEN '3a'
WHEN newregimen LIKE '%d4T%3TC%LPV%r' THEN '3a'
WHEN newregimen LIKE '%ddi%3TC%NVP%' THEN '3a'
WHEN newregimen LIKE '%ABC%3TC%ddi%' THEN '3a'
WHEN newregimen LIKE  '%NVP%' AND newregimen LIKE  '%3TC%' AND newregimen LIKE  '%ABC%'  THEN '3a' 
WHEN newregimen LIKE '%TLC%' THEN '3a'
WHEN newregimen LIKE '%AZT%3TC%ABC%' THEN '3a' 
ELSE '3a' END as NewRegimen,newregimen,newregimen as newregimenothers,newregimendate as DateOfChange,old.drugname1 as OldRegimen,old.oldregimenothers as oldregimenothers,CASE reason 
WHEN 'Toxicity/side effects' THEN 1
WHEN 'Pregnancy' THEN 2
WHEN 'Risk of pregnancy' THEN 3
WHEN 'Due to new TB' THEN 4
WHEN 'New drug available' THEN 5
WHEN 'Drug out of stock' THEN 6
WHEN 'Clinical treatment failure' THEN 7
WHEN 'Immunologic failure' THEN 8
WHEN 'Virologic failure' THEN 9
WHEN 'Other' THEN 10
ELSE ''
END as ReasonForChange 
FROM `subswitch` sub JOIN (select pepid,CASE 
WHEN drugname1 LIKE '%AZT%3TC%EFV%' THEN '1h' 
WHEN drugname1 LIKE '%AZT%3TC%' AND drugname1 LIKE '%EFV%' THEN '1h' 
WHEN drugname1 LIKE '%AZT%3TC%NVP%' THEN '1g' 
WHEN drugname1 LIKE '%TDF%FTC%EFV%' THEN '1f'
WHEN drugname1 LIKE '%TDF%FTC%NVP%' THEN '1e' 
WHEN drugname1 LIKE '%TDF%3TC%EFV%' THEN '1d' 
WHEN drugname1 LIKE '%TDF%3TC%NVP%' THEN '1c' 
WHEN drugname1 LIKE '%AZT%3TC%TDF%' THEN '2l' 
WHEN drugname1 LIKE '%TDF%FTC%LPV%r%' THEN '2f' 
WHEN drugname1 LIKE '%TDF%3TC%LPV%r%' THEN '2k' 
WHEN drugname1 LIKE '%TDF%FTC%ATV%r%' THEN '2j' 
WHEN drugname1 LIKE '%TDF%3TC%ATV%r%' THEN '2d' 
WHEN drugname1 LIKE '%AZT%3TC%LPV%r%' THEN '2i' 
WHEN drugname1 LIKE '%AZT%3TC%ATV%r%' THEN '2n' 
WHEN drugname1 LIKE '%FDC (TDF%FTC%EFV)%' THEN '1f'                      
WHEN drugname1 LIKE '%FDC (TDF%3TC%EFV)%' THEN '1d'                      
WHEN drugname1 LIKE '%FDC (3TC%AZT%NVP)%' THEN '1g'                      
WHEN drugname1 LIKE '%Truvada (TDF%FTC)%' AND drugname1= '%EFV%' THEN '1f' 
WHEN drugname1 LIKE '%Truv (TDF%FTC)%' AND drugname1= '%EFV%' THEN '1f'    
WHEN drugname1 LIKE '%Truvada (TDF%FTC)' AND drugname1= '%NVP%' THEN '1e' 
WHEN drugname1 LIKE '%Truv (TDF%FTC)%' AND drugname1= '%NVP%' THEN '1e'    
WHEN drugname1 LIKE '%CBV (AZT%3TC)%' AND drugname1='%NVP%' THEN '1g'      
WHEN drugname1 LIKE '%CBV (AZT%3TC)%' AND drugname1='%EFV%' THEN '1h' 
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%NVP%'  THEN '1g' 
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%NVP%'  THEN '1g'
WHEN drugname1 LIKE  '%TDF%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%NVP%'  THEN '1c' 
WHEN drugname1 LIKE  '%TDF%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN '1d' 
WHEN drugname1 LIKE  '%NVP%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%D4T%'  THEN '1a' 
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN '1h' 
WHEN drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%TDF%' AND (drugname1 LIKE  '%FTC%' OR drugname1 LIKE  '%3TC%') THEN '1f' 
WHEN drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%D4T%' AND drugname1 LIKE  '%3TC%'  THEN '1b'
WHEN drugname1 LIKE  '%TDF%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%NVP%'  THEN '1c'
WHEN drugname1 LIKE  '%TDF%' AND drugname1 LIKE  '%FTC%' AND drugname1 LIKE  '%EFV%'  THEN '1f'
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN '1h'
WHEN drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%NVP%'  THEN '1g'
WHEN drugname1 LIKE  '%NVP%' AND drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%'  THEN '1g'
WHEN drugname1 LIKE  '%TDF%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN '1d'
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%NVP%'  THEN '1g'
WHEN COALESCE(drugname1,0) = 0 THEN '' 
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN '3a'
WHEN drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%EFV%'  THEN '3a'
WHEN drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%NVP%'  THEN '3a'
WHEN drugname1 LIKE '%ABC%3TC%NVP%' THEN '3a' 
WHEN drugname1 LIKE '%ABC%3TC%EFV%' THEN '3a' 
WHEN drugname1 LIKE '%d4T%3TC%NVP%' THEN '1a'
WHEN drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%3TC%'  THEN '3a'
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%'  THEN '3a'
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN '3a'
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%3TC%'  THEN '3a'
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%D4T%' AND drugname1 LIKE  '%3TC%'  THEN '3a'
WHEN drugname1 LIKE '%ABC%3TC%LPV%r' THEN '3a'
WHEN drugname1 LIKE '%d4T%3TC%LPV%r' THEN '3a'
WHEN drugname1 LIKE '%ddi%3TC%NVP%' THEN '3a'
WHEN drugname1 LIKE '%ABC%3TC%ddi%' THEN '3a'
WHEN drugname1 LIKE  '%NVP%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%ABC%'  THEN '3a' 
WHEN drugname1 LIKE '%TLC%' THEN '3a'
WHEN drugname1 LIKE '%AZT%3TC%ABC%' THEN '3a' 
ELSE '3a' END as drugname1,drugname1 as oldregimenothers, MAX(pharmdispensedate) datedisp from pharmacy group by pepid) old
ON (sub.pepid=old.pepid)
where sub.pepid='$row[HospitalNumber]' and sub.newregimendate < old.datedisp 
group by sub.newregimendate";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
		foreach($rows_lab as $row_lab){ 
	if($row_lab['newregimen']==''){
	}else{
	$ARTRegimen = $SubjectARTRegimenChangeHistory->addChild("ARTRegimen"); 
	$ARTRegimen->addChild("DateOfChange",$row_lab['DateOfChange']); 
	$ARTRegimen->addChild("OldRegimen",$row_lab['OldRegimen']); 
	$ARTRegimen->addChild("OldRegimenNameOthers",$row_lab['oldregimenothers']); 
	$ARTRegimen->addChild("NewRegimen",$row_lab['NewRegimen']); 
	$ARTRegimen->addChild("NewRegimenOthers",$row_lab['newregimenothers']); 
	$ARTRegimen->addChild("ReasonForChange",$row_lab['ReasonForChange']); 
	}
		}

	////////Patient Scheduled Visits////////////
	$SubjectDFollowUpStatus = $Container->addChild("SubjectDFollowUpStatus"); 
		$sqllab="SELECT pepid,visitdate as ScheduledDate,visitdate as VisitDate,weight as Weight,'8' as FollowUpStatus from clinicaleval where pepid='$row[HospitalNumber]'";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
		foreach($rows_lab as $row_lab){ 
	if($row_lab['VisitDate']==''){
	}else{
	$PatientScheduledVisits = $SubjectDFollowUpStatus->addChild("PatientScheduledVisits"); 
	$PatientScheduledVisits->addChild("ScheduledDate",$row_lab['ScheduledDate']); 
	$PatientScheduledVisits->addChild("VisitDate",$row_lab['VisitDate']); 
	$PatientScheduledVisits->addChild("Weight",$row_lab['Weight']); 
	$PatientScheduledVisits->addChild("FollowUpStatus",$row_lab['FollowUpStatus']); 
	}
		}


	////////SubjectRegimenPrescriptionHistory////////////
	$SubjectRegimenPrescriptionHistory = $Container->addChild("SubjectRegimenPrescriptionHistory"); 
		$sqllab="SELECT pepid,pharmdispensedate as ARVRefillDate,CASE 
WHEN drugname1 LIKE '%AZT%3TC%EFV%' THEN '1h' 
WHEN drugname1 LIKE '%AZT%3TC%' AND drugname1 LIKE '%EFV%' THEN '1h' 
WHEN drugname1 LIKE '%AZT%3TC%NVP%' THEN '1g' 
WHEN drugname1 LIKE '%TDF%FTC%EFV%' THEN '1f'
WHEN drugname1 LIKE '%TDF%FTC%NVP%' THEN '1e' 
WHEN drugname1 LIKE '%TDF%3TC%EFV%' THEN '1d' 
WHEN drugname1 LIKE '%TDF%3TC%NVP%' THEN '1c' 
WHEN drugname1 LIKE '%AZT%3TC%TDF%' THEN '2l' 
WHEN drugname1 LIKE '%TDF%FTC%LPV%r%' THEN '2f' 
WHEN drugname1 LIKE '%TDF%3TC%LPV%r%' THEN '2k' 
WHEN drugname1 LIKE '%TDF%FTC%ATV%r%' THEN '2j' 
WHEN drugname1 LIKE '%TDF%3TC%ATV%r%' THEN '2d' 
WHEN drugname1 LIKE '%AZT%3TC%LPV%r%' THEN '2i' 
WHEN drugname1 LIKE '%AZT%3TC%ATV%r%' THEN '2n' 
WHEN drugname1 LIKE '%FDC (TDF%FTC%EFV)%' THEN '1f'                      
WHEN drugname1 LIKE '%FDC (TDF%3TC%EFV)%' THEN '1d'                      
WHEN drugname1 LIKE '%FDC (3TC%AZT%NVP)%' THEN '1g'                      
WHEN drugname1 LIKE '%Truvada (TDF%FTC)%' AND drugname1= '%EFV%' THEN '1f' 
WHEN drugname1 LIKE '%Truv (TDF%FTC)%' AND drugname1= '%EFV%' THEN '1f'    
WHEN drugname1 LIKE '%Truvada (TDF%FTC)' AND drugname1= '%NVP%' THEN '1e' 
WHEN drugname1 LIKE '%Truv (TDF%FTC)%' AND drugname1= '%NVP%' THEN '1e'    
WHEN drugname1 LIKE '%CBV (AZT%3TC)%' AND drugname1='%NVP%' THEN '1g'      
WHEN drugname1 LIKE '%CBV (AZT%3TC)%' AND drugname1='%EFV%' THEN '1h' 
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%NVP%'  THEN '1g' 
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%NVP%'  THEN '1g'
WHEN drugname1 LIKE  '%TDF%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%NVP%'  THEN '1c' 
WHEN drugname1 LIKE  '%TDF%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN '1d' 
WHEN drugname1 LIKE  '%NVP%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%D4T%'  THEN '1a' 
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN '1h' 
WHEN drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%TDF%' AND (drugname1 LIKE  '%FTC%' OR drugname1 LIKE  '%3TC%') THEN '1f' 
WHEN drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%D4T%' AND drugname1 LIKE  '%3TC%'  THEN '1b'
WHEN drugname1 LIKE  '%TDF%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%NVP%'  THEN '1c'
WHEN drugname1 LIKE  '%TDF%' AND drugname1 LIKE  '%FTC%' AND drugname1 LIKE  '%EFV%'  THEN '1f'
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN '1h'
WHEN drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%NVP%'  THEN '1g'
WHEN drugname1 LIKE  '%NVP%' AND drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%'  THEN '1g'
WHEN drugname1 LIKE  '%TDF%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN '1d'
WHEN drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%NVP%'  THEN '1g'
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN '3a'
WHEN drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%EFV%'  THEN '3a'
WHEN drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%NVP%'  THEN '3a'
WHEN drugname1 LIKE '%ABC%3TC%NVP%' THEN '3a' 
WHEN drugname1 LIKE '%ABC%3TC%EFV%' THEN '3a' 
WHEN drugname1 LIKE '%d4T%3TC%NVP%' THEN '1a'
WHEN drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%3TC%'  THEN '3a'
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%AZT%' AND drugname1 LIKE  '%3TC%'  THEN '3a'
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%EFV%'  THEN '3a'
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%EFV%' AND drugname1 LIKE  '%3TC%'  THEN '3a'
WHEN drugname1 LIKE  '%ABC%' AND drugname1 LIKE  '%D4T%' AND drugname1 LIKE  '%3TC%'  THEN '3a'
WHEN drugname1 LIKE '%ABC%3TC%LPV%r' THEN '3a'
WHEN drugname1 LIKE '%d4T%3TC%LPV%r' THEN '3a'
WHEN drugname1 LIKE '%ddi%3TC%NVP%' THEN '3a'
WHEN drugname1 LIKE '%ABC%3TC%ddi%' THEN '3a'
WHEN drugname1 LIKE  '%NVP%' AND drugname1 LIKE  '%3TC%' AND drugname1 LIKE  '%ABC%'  THEN '3a' 
WHEN drugname1 LIKE '%TLC%' THEN '3a'
WHEN drugname1 LIKE '%AZT%3TC%ABC%' THEN '3a' 
ELSE '3a' END as ARVRegimen,CASE WHEN regduration1 LIKE '%0.5%' THEN 15
 WHEN regduration1 LIKE '%2%WKS%' THEN 14
 WHEN regduration1 LIKE '%2/52%' THEN 14
 WHEN regduration1 LIKE '%1%' THEN 30
 WHEN regduration1 LIKE '%2%' THEN 60
 WHEN regduration1 LIKE '%3%' THEN 90
 WHEN regduration1 LIKE '%4%' THEN 120
 WHEN lower(regduration1) LIKE '%day%' THEN regduration1
ELSE regduration1 END as NoOfDaysOfPrescription,pharmdispensedate from pharmacy where pepid='$row[HospitalNumber]'";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
		foreach($rows_lab as $row_lab){ 
	if($row_lab['pharmdispensedate']==''){
	}else{
	$CollectedARVs = $SubjectRegimenPrescriptionHistory->addChild("CollectedARVs"); 
	$CollectedARVs->addChild("ARVRefillDate",$row_lab['ARVRefillDate']); 
	$CollectedARVs->addChild("ARVRegimen",$row_lab['ARVRegimen']); 
	$CollectedARVs->addChild("NoOfDaysOfPrescription",$row_lab['NoOfDaysOfPrescription']); 
	}
		}


	////////SubjectLabResultHistory////////////
	$SubjectLabResultHistory = $Container->addChild("SubjectLabResultHistory"); 
		$sqllab="SELECT pepid,visitdate as CD4TestDate, results  as CD4CellCount from laboratory where pepid='$row[HospitalNumber]' and tests='CD4'";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
	$CD4Results = $SubjectLabResultHistory->addChild("CD4Results"); 	
		foreach($rows_lab as $row_lab){
	if($row_lab['CD4TestDate']==''){
	}else{
	$CD4 = $CD4Results->addChild("CD4"); 
	$CD4->addChild("CD4TestDate",$row_lab['CD4TestDate']); 
	$CD4->addChild("CD4CellCount",$row_lab['CD4CellCount']); 
	}
		}

	////////Viral Load////////////
		$sqllab="SELECT pepid,visitdate as ViralLoadTestDate, results  as ViralLoad from laboratory where pepid='$row[HospitalNumber]' and tests='Viral Load'";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
	$ViralLoadResults = $SubjectLabResultHistory->addChild("ViralLoadResults"); 	
		foreach($rows_lab as $row_lab){
	if($row_lab['ViralLoadTestDate']==''){
	}else{
	$ViralLoad = $ViralLoadResults->addChild("ViralLoad"); 
	$ViralLoad->addChild("ViralLoad",$row_lab['ViralLoad']); 
	$ViralLoad->addChild("ViralLoadTestDate",$row_lab['ViralLoadTestDate']); 
	}
		}

	////////PCV/Hb////////////
	
		$sqllab="SELECT pepid,visitdate as HemoglobinTestDate, results  as Hemoglobin from laboratory where pepid='$row[HospitalNumber]' and tests='PCV/Hb'";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
	$HbResults = $SubjectLabResultHistory->addChild("HbResults"); 	
		foreach($rows_lab as $row_lab){
	if($row_lab['HemoglobinTestDate']==''){
	}else{
	$Hb = $HbResults->addChild("Hb"); 
	$Hb->addChild("Hemoglobin",$row_lab['Hemoglobin']); 
	$Hb->addChild("HemoglobinTestDate",$row_lab['HemoglobinTestDate']); 
	}
		}

	////////ALT////////////
	
		$sqllab="SELECT pepid,visitdate as ALTTestDate, results  as ALT from laboratory where pepid='$row[HospitalNumber]' and tests='ALT/SGPT'";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
	$ALTResults = $SubjectLabResultHistory->addChild("ALTResults"); 	
		foreach($rows_lab as $row_lab){
	if($row_lab['ALTTestDate']==''){
	}else{
	$ALT = $ALTResults->addChild("ALT"); 
	$ALT->addChild("ALT",$row_lab['ALT']); 
	$ALT->addChild("ALTTestDate",$row_lab['ALTTestDate']); 
	}
		}

	////////Creatinine////////////
	
		$sqllab="SELECT pepid,visitdate as SerumCreatinineTestDate, results  as SerumCreatinine from laboratory where pepid='$row[HospitalNumber]' and tests='Creatinine'";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
	$CreatinineResults = $SubjectLabResultHistory->addChild("CreatinineResults"); 	
		foreach($rows_lab as $row_lab){
	if($row_lab['SerumCreatinineTestDate']==''){
	}else{
	$Creatinine = $CreatinineResults->addChild("Creatinine"); 
	$Creatinine->addChild("SerumCreatinine",$row_lab['SerumCreatinine']); 
	$Creatinine->addChild("SerumCreatinineTestDate",$row_lab['SerumCreatinineTestDate']); 
	}
		}

	////////HepatitisBStatus////////////
	
		$sqllab="SELECT pepid,MAX(visitdate) as HepatitisBStatusTestDate,CASE results WHEN 'Positive' THEN 2 WHEN 'Negative' THEN 3 END as HepatitisBStatus from laboratory where pepid='$row[HospitalNumber]' and tests='HBsAG (*At Baseline)' group by pepid";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
		foreach($rows_lab as $row_lab){
	if($row_lab['HepatitisBStatusTestDate']==''){
	}else{
	$HepatitisBStatus = $SubjectLabResultHistory->addChild("HepatitisBStatus",$row_lab['HepatitisBStatus']); 	
	}
		}

	////////HepatitisCStatus////////////
	
		$sqllab="SELECT pepid,MAX(visitdate) as HepatitisCStatusTestDate,CASE results WHEN 'Positive' THEN 'Pos' WHEN 'Negative' THEN 'Heg' END as HepatitisCStatus from laboratory where pepid='$row[HospitalNumber]' and tests='HCV Antibody' group by pepid";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
		foreach($rows_lab as $row_lab){
	if($row_lab['HepatitisCStatusTestDate']==''){
	}else{
	$HepatitisCStatus = $SubjectLabResultHistory->addChild("HepatitisCStatus",$row_lab['HepatitisCStatus']); 	
	$HepatitisCStatusTestDate = $SubjectLabResultHistory->addChild("HepatitisCStatusTestDate",$row_lab['HepatitisCStatusTestDate']); 	
	}
		}

		
	////////Last Clinic Visit////////////
	
		$sqllab="SELECT pepid,MAX(visitdate) as LastClinicVisit from visit where pepid='$row[HospitalNumber]' group by pepid";
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
		foreach($rows_lab as $row_lab){
	if($row_lab['LastClinicVisit']==''){
	}else{
	$LastClinicVisit = $SubjectLabResultHistory->addChild("LastClinicVisit",$row_lab['LastClinicVisit']); 	
	}
		}

	////////Patient Outcome////////////
	
		$sqllab="SELECT pepid,CASE trtmtstopdate WHEN '' THEN '' WHEN '0000-00-00' THEN '' ELSE trtmtstopdate END as StopDate,CASE patienttransoutdate WHEN '' THEN '' WHEN '0000-00-00' THEN '' ELSE patienttransoutdate END as TransferDate, CASE COALESCE(patientdied,0) WHEN 0 THEN '2' ELSE '1' END AS PatientOutcome,CASE patientdied WHEN '' THEN '' ELSE dateofdeath END AS PatientDeathDate
FROM patient WHERE pepid='$row[HospitalNumber]'";
//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
	$PatientOutcome = $SubjectLabResultHistory->addChild("PatientOutcome"); 	
		foreach($rows_lab as $row_lab){
	if($row_lab['PatientOutcome']==''){
	}else{
	$PatientOutcome->addChild("PatientOutcome",$row_lab['PatientOutcome']); 
	$PatientOutcome->addChild("PatientDeathDate",$row_lab['PatientDeathDate']); 
	$PatientOutcome->addChild("TransferDate",$row_lab['TransferDate']); 
	$PatientOutcome->addChild("StopDate",$row_lab['StopDate']); 
	}
		}


		
	/////////////////////////////////////////////////////////////End Condition//////////////////////////////////// 
$filen=""; 
$filen.="INITIAL_"; 
$filen.=date('YmdHis')."_";
$filen.=$row['uniqueid'];

////////////////////CREATE ndr FOLDER/////////////
if (!file_exists('c:\ndr')) {
    mkdir('c:\ndr', 0777, true);
}
    /*** echo the xml ***/ 
    $Container->asXML("c:\\ndr\\".$filen.".xml"); 
	echo $filen.' Generated...'.'<br>';
			echo ob_get_contents();
			ob_end_flush();
    }

    /* free result set */
    $result->free();
	echo 'FILE GENERATION COMPLETE';
/* close connection */

?>