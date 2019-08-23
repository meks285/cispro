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


$query_select = "SELECT a.idpatient as PatientIdentifier,a.pepid as pepid,(select facilityname from facility) as FacilityName,CASE 
WHEN (select facilityname from facility) LIKE '%SDA%Jengre%' THEN 'SD'
WHEN (select facilityname from facility) LIKE '%SDA%Hospital%Jengre%' THEN 'SD'
WHEN (select facilityname from facility) LIKE '%Solat%Women%Hospital%' THEN 'SL'
WHEN (select facilityname from facility) LIKE '%solat%women%' THEN 'SL'
WHEN (select facilityname from facility) LIKE '%Comprehensive%Zamko%' THEN 'ZK'
WHEN (select facilityname from facility) LIKE '%CHC%Zamko%' THEN 'ZK'
WHEN (select facilityname from facility) LIKE '%Zamko%' THEN 'ZK'
WHEN (select facilityname from facility) LIKE '%State%Specialist%Maiduguri%' THEN 'SM'
WHEN (select facilityname from facility) LIKE '%SSH%' THEN 'SM'
WHEN (select facilityname from facility) LIKE '%Kwalla%' THEN 'KW'
WHEN (select facilityname from facility) LIKE '%Cottage%Hospital%Kwalla%' THEN 'KW'
WHEN (select facilityname from facility) LIKE '%cottage%hospital%kwalla%' THEN 'KW'
WHEN (select facilityname from facility) LIKE '%lasuth%' THEN 'LG'
WHEN (select facilityname from facility) LIKE '%LASUTH%' THEN 'LG'
WHEN (select facilityname from facility) LIKE '%Lagos%State%University%' THEN 'LG'
WHEN (select facilityname from facility) LIKE '%Alimosho%GH%' THEN 'GA'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Alimosho%' THEN 'GA'
WHEN (select facilityname from facility) LIKE '%GH%Alimosho%' THEN 'GA'
WHEN (select facilityname from facility) LIKE '%Rauf%Aregbesola%PHC%' THEN 'RB'
WHEN (select facilityname from facility) LIKE '%aregbesola%' THEN 'RB'
WHEN (select facilityname from facility) LIKE '%Ipaja%Phc%' THEN 'IP'
WHEN (select facilityname from facility) LIKE '%Ipaja%PHC%' THEN 'IP'
WHEN (select facilityname from facility) LIKE '%Ipaja%Primary%' THEN 'IP'
WHEN (select facilityname from facility) LIKE '%Primary%Health%Ipaja%' THEN 'IP'
WHEN (select facilityname from facility) LIKE '%Ojodu%PHC%' THEN 'OJ'
WHEN (select facilityname from facility) LIKE '%PHC%Ojodu%' THEN 'OJ'
WHEN (select facilityname from facility) LIKE '%Primary%Health%Care%Ojodu%' THEN 'OJ'
WHEN (select facilityname from facility) LIKE '%GH%Ifako%' THEN 'IF'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Ifako%' THEN 'IF'
WHEN (select facilityname from facility) LIKE '%GH%Ikorodu%' THEN 'IK'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Ikorodu%' THEN 'IK'
WHEN (select facilityname from facility) LIKE '%Ifako%Primary%' THEN 'FK'
WHEN (select facilityname from facility) LIKE '%Primary%Health%Care%ifako%' THEN 'FK'
WHEN (select facilityname from facility) LIKE '%Ifako%PHC%' THEN 'FK'
WHEN (select facilityname from facility) LIKE '%Ancilla%' THEN 'AN'
WHEN (select facilityname from facility) LIKE '%GH%Mushin%' THEN 'MU'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Mushin%' THEN 'MU'
WHEN (select facilityname from facility) LIKE '%GH%Epe%' THEN 'EP'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Epe%' THEN 'EP'
WHEN (select facilityname from facility) LIKE '%Ajeabo%PHC%' THEN 'JB'
WHEN (select facilityname from facility) LIKE '%Palm%' THEN 'PV'
WHEN (select facilityname from facility) LIKE '%Palm%Avenue%' THEN 'PV'
WHEN (select facilityname from facility) LIKE '%LUTH%' THEN 'LU'
WHEN (select facilityname from facility) LIKE '%Lagos%University%' THEN 'LU'
WHEN (select facilityname from facility) LIKE '%Police%Hospital%Falomo%' THEN 'FL'
WHEN (select facilityname from facility) LIKE '%NPMS%' THEN 'FL'
WHEN (select facilityname from facility) LIKE '%NIMR%' THEN 'NM'
WHEN (select facilityname from facility) LIKE '%Nigerian%Insti%' THEN 'NM'
WHEN (select facilityname from facility) LIKE '%University College Hospital%' THEN 'UC'
WHEN (select facilityname from facility) LIKE '%University Collage Hospital%' THEN 'UC'
WHEN (select facilityname from facility) LIKE '%UCH%' THEN 'UC'
WHEN (select facilityname from facility) LIKE '%Adeoyo%' THEN 'AD'
WHEN (select facilityname from facility) LIKE '%State%Hospital%Ogbomoso%' THEN 'OG'
WHEN (select facilityname from facility) LIKE '%Ogbomoso%state%' THEN 'OG'
WHEN (select facilityname from facility) LIKE '%St%Mary%' THEN 'EH'
WHEN (select facilityname from facility) LIKE '%Mary%' THEN 'EH'
WHEN (select facilityname from facility) LIKE '%SMCH%' THEN 'EH'
WHEN (select facilityname from facility) LIKE '%Baptist%Medical%saki%' THEN 'BM'
WHEN (select facilityname from facility) LIKE '%Baptist%Medical%' THEN 'BM'
WHEN (select facilityname from facility) LIKE '%bmc%saki%' THEN 'BM'
WHEN (select facilityname from facility) LIKE '%State Hospital Oyo%' THEN 'SY'
WHEN (select facilityname from facility) LIKE '%State Hospital Saki%' THEN 'SK'
WHEN (select facilityname from facility) LIKE '%Bowen%' THEN 'BW'
WHEN (select facilityname from facility) LIKE '%ola%hospital%jos%' THEN 'OL'
WHEN (select facilityname from facility) LIKE '%Our%Lady%' THEN 'OL'
WHEN (select facilityname from facility) LIKE '%Eruwa%' THEN 'ER'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Barkin%ladi%' THEN 'BL'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Barkin%Ladi%' THEN 'BL'
WHEN (select facilityname from facility) LIKE '%GH%Barkin%ladi%' THEN 'BL'
WHEN (select facilityname from facility) LIKE '%Barkin%Ladi%' THEN 'BL'
WHEN (select facilityname from facility) LIKE '%Jos University%' THEN 'JU'
WHEN (select facilityname from facility) LIKE '%Plateau State Specialist%' THEN 'PS'
WHEN (select facilityname from facility) LIKE '%Our Lady of Apostle%' THEN 'OL'
WHEN (select facilityname from facility) LIKE '%Pankshin%General%Hospital%' THEN 'PK'
WHEN (select facilityname from facility) LIKE '%general%hospital%pankshin%' THEN 'PK'
WHEN (select facilityname from facility) LIKE '%GH%Pankshin%' THEN 'PK'
WHEN (select facilityname from facility) LIKE '%Pankshin%GH%' THEN 'PK'
WHEN (select facilityname from facility) LIKE '%Panyam%Maternity%' THEN 'PY'
WHEN (select facilityname from facility) LIKE '%CCDP%Panyam%' THEN 'PY'
WHEN (select facilityname from facility) LIKE '%CCDP%Hospital%Panyam%' THEN 'PY'
WHEN (select facilityname from facility) LIKE '%COCIN%Hospital%Panyam%' THEN 'PY'
WHEN (select facilityname from facility) LIKE '%COCIN%Panyam%' THEN 'PY'
WHEN (select facilityname from facility) LIKE '%Seventh%Day%' THEN 'SD'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Shendam%' THEN 'SH'
WHEN (select facilityname from facility) LIKE '%Shendam%General%Hospital%' THEN 'SH'
WHEN (select facilityname from facility) LIKE '%Shendam%GH%' THEN 'SH'
WHEN (select facilityname from facility) LIKE '%GH%Shendam%' THEN 'SH'
WHEN (select facilityname from facility) LIKE '%Vom%Christian%Hospital%' THEN 'VH'
WHEN (select facilityname from facility) LIKE '%Vom%' THEN 'VH'
WHEN (select facilityname from facility) LIKE '%VCH%' THEN 'VH'
WHEN (select facilityname from facility) LIKE '%Military%' THEN 'MH'
WHEN (select facilityname from facility) LIKE '%JUTH%Comprehensive%' THEN 'ZK'
WHEN (select facilityname from facility) LIKE '%JUTH%' THEN 'JU'
WHEN (select facilityname from facility) LIKE '%Jos%University%Teaching%Hospital%' THEN 'JU'
WHEN (select facilityname from facility) LIKE '%general%hospital%mangu%' THEN 'MG'
WHEN (select facilityname from facility) LIKE '%GH%Mangu%' THEN 'MG'
WHEN (select facilityname from facility) LIKE '%Faith%Alive%' THEN 'FA'
WHEN (select facilityname from facility) LIKE '%FAF%' THEN 'FA'
WHEN (select facilityname from facility) LIKE '%COCIN%Mangu%' THEN 'RC'
WHEN (select facilityname from facility) LIKE '%CH%RC%Mangu%' THEN 'RC'
WHEN (select facilityname from facility) LIKE '%CHRC%Mangu%' THEN 'RC'
WHEN (select facilityname from facility) LIKE '%Church%Mangu%' THEN 'RC'
WHEN (select facilityname from facility) LIKE '%Cottage%Hospital%Bassa%' THEN 'BA'
WHEN (select facilityname from facility) LIKE '%Cottage%Hospital%Bokkos%' THEN 'BK'
WHEN (select facilityname from facility) LIKE '%Our%Lady%Apostles%Zawan%' THEN 'ZA'
WHEN (select facilityname from facility) LIKE '%Zawan%' THEN 'ZA'
WHEN (select facilityname from facility) LIKE '%zawan%' THEN 'ZA'
WHEN (select facilityname from facility) LIKE '%Hwolshe%Medical%Centre%' THEN 'HW'
WHEN (select facilityname from facility) LIKE '%Dadinkowa%' THEN 'DK'
WHEN (select facilityname from facility) LIKE '%FMC%' THEN 'FM'
WHEN (select facilityname from facility) LIKE '%University%Maiduguri%' THEN 'UM'
WHEN (select facilityname from facility) LIKE '%UMTH%' THEN 'UM'
WHEN (select facilityname from facility) LIKE '%Nsukka%' THEN 'UN'
WHEN (select facilityname from facility) LIKE '%UNTH%' THEN 'UN'
WHEN (select facilityname from facility) LIKE '%University%Nigeria%Teaching%' THEN 'UN'
WHEN (select facilityname from facility) LIKE '%Virgilus%' THEN 'VC'
WHEN (select facilityname from facility) LIKE '%Bingham%University%' THEN 'BU'
WHEN (select facilityname from facility) LIKE '%BUTH%' THEN 'BU'
WHEN (select facilityname from facility) LIKE '%BHUTH%' THEN 'BU'
WHEN (select facilityname from facility) LIKE '%CCDP%Panyam%' THEN 'PY'
WHEN (select facilityname from facility) LIKE '%Plateau%State%Specialist%' THEN 'PS'
WHEN (select facilityname from facility) LIKE '%PSSH%' THEN 'PS'
WHEN (select facilityname from facility) LIKE '%Ahmadu%' THEN 'AB'
WHEN (select facilityname from facility) LIKE '%ABUTH%' THEN 'AB'
WHEN (select facilityname from facility) LIKE '%Makurdi%' THEN 'FM'
WHEN (select facilityname from facility) LIKE '%Federal%Medical%Center%Makurdi%' THEN 'FM'
WHEN (select facilityname from facility) LIKE '%Nursing%Home%Maiduguri%' THEN 'NH'
WHEN (select facilityname from facility) LIKE '%Nursing%' THEN 'NH'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Ijebu%' THEN 'IJ'
WHEN (select facilityname from facility) LIKE '%GH%Ijebu%' THEN 'IJ'
WHEN (select facilityname from facility) LIKE '%Sacred%Heart%Lantoro%' THEN 'LT'
WHEN (select facilityname from facility) LIKE '%Lantoro%' THEN 'LT'
WHEN (select facilityname from facility) LIKE '%Dadin%Kowa%' THEN 'DK'
WHEN (select facilityname from facility) LIKE '%Womens%Hospital%Onikan%' THEN 'ON'
WHEN (select facilityname from facility) LIKE '%Onikan%' THEN 'ON'
WHEN (select facilityname from facility) LIKE '%Nguru%' THEN 'NU'
WHEN (select facilityname from facility) LIKE '%Federeal%Nguru%' THEN 'NU'
WHEN (select facilityname from facility) LIKE '%General%Tunkus%' THEN 'TK'
WHEN (select facilityname from facility) LIKE '%GH%Tunkus%' THEN 'TK'
WHEN (select facilityname from facility) LIKE '%General%Moniya%' THEN 'MO'
WHEN (select facilityname from facility) LIKE '%GH%Moniya%' THEN 'MO'
WHEN (select facilityname from facility) LIKE '%GH%Angware%' THEN 'AW'
WHEN (select facilityname from facility) LIKE '%General%Angware%' THEN 'AW'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Ibeju%' THEN 'IL'
WHEN (select facilityname from facility) LIKE '%General%Ibeju%' THEN 'IL'
WHEN (select facilityname from facility) LIKE '%GH%Isolo%' THEN 'GS'
WHEN (select facilityname from facility) LIKE '%General%Isolo%' THEN 'GS'
WHEN (select facilityname from facility) LIKE '%Angware%' THEN 'AW'
WHEN (select facilityname from facility) LIKE '%Adefemi%Hospital%' THEN 'FH'
WHEN (select facilityname from facility) LIKE '%Agape%Hospital%' THEN 'AG'
WHEN (select facilityname from facility) LIKE '%Comprehensive%Bassa%' THEN 'BA'
WHEN (select facilityname from facility) LIKE '%CHC%Bassa%' THEN 'BA'
WHEN (select facilityname from facility) LIKE '%Comprehensive%Bokkos%' THEN 'BC'
WHEN (select facilityname from facility) LIKE '%CHC%Bokkos%' THEN 'BC'
WHEN (select facilityname from facility) LIKE '%Comprehensive%Dyerok%' THEN 'DY'
WHEN (select facilityname from facility) LIKE '%CHC%Dyerok%' THEN 'DY'
WHEN (select facilityname from facility) LIKE '%Comprehensive%Gindiri%' THEN 'GD'
WHEN (select facilityname from facility) LIKE '%CHC%Gindiri%' THEN 'GD'
WHEN (select facilityname from facility) LIKE '%Comprehensive%Lardang%' THEN 'CL'
WHEN (select facilityname from facility) LIKE '%CHC%Lardang%' THEN 'CL'
WHEN (select facilityname from facility) LIKE '%Comprehensive%Banki%' THEN 'BK'
WHEN (select facilityname from facility) LIKE '%CHC%Banki%' THEN 'BK'
WHEN (select facilityname from facility) LIKE '%Comprehensive%Madagali%' THEN 'MA'
WHEN (select facilityname from facility) LIKE '%CHC%Madagali%' THEN 'MA'
WHEN (select facilityname from facility) LIKE '%General%Quan%' THEN 'QP'
WHEN (select facilityname from facility) LIKE '%General%Quaan%' THEN 'QP'
WHEN (select facilityname from facility) LIKE '%GH%Quan%' THEN 'QP'
WHEN (select facilityname from facility) LIKE '%GH%Quaan%' THEN 'QP'
WHEN (select facilityname from facility) LIKE '%Jericho%Specialist%' THEN 'JH'
WHEN (select facilityname from facility) LIKE '%JSH%' THEN 'JH'
WHEN (select facilityname from facility) LIKE '%Ladoke%Akintola%' THEN 'LD'
WHEN (select facilityname from facility) LIKE '%LAUTECH%' THEN 'LD'
WHEN (select facilityname from facility) LIKE '%May%Clinic%Shendam%' THEN 'MC'
WHEN (select facilityname from facility) LIKE '%May%Clinic%' THEN 'MC'
WHEN (select facilityname from facility) LIKE '%Ring%Road%' THEN 'RS'
WHEN (select facilityname from facility) LIKE '%RRSH%' THEN 'RS'
WHEN (select facilityname from facility) LIKE '%Kizito%Catholic%' THEN 'KZ'
WHEN (select facilityname from facility) LIKE '%Kizito%Clinic%' THEN 'SU'
WHEN (select facilityname from facility) LIKE '%General%Agbowa%' THEN 'GB'
WHEN (select facilityname from facility) LIKE '%GH%Agbowa%' THEN 'GB'
WHEN (select facilityname from facility) LIKE '%General%Shomolu%' THEN 'SG'
WHEN (select facilityname from facility) LIKE '%GH%Shomolu%' THEN 'SG'
WHEN (select facilityname from facility) LIKE '%Lagoon%Hospital%' THEN 'LN'
WHEN (select facilityname from facility) LIKE '%Lagoon%' THEN 'LN'
WHEN (select facilityname from facility) LIKE '%Primary%Agboju%' THEN 'AP'
WHEN (select facilityname from facility) LIKE '%PHC%Agboju%' THEN 'AP'
WHEN (select facilityname from facility) LIKE '%Agboju%Primary%' THEN 'AP'
WHEN (select facilityname from facility) LIKE '%Agboju%PHC%' THEN 'AP'
WHEN (select facilityname from facility) LIKE '%Primary%Aregbesola%' THEN 'RB'
WHEN (select facilityname from facility) LIKE '%PHC%Aregbesola%' THEN 'RB'
WHEN (select facilityname from facility) LIKE '%Aregbesola%Primary%' THEN 'RB'
WHEN (select facilityname from facility) LIKE '%Aregbesola%PHC%' THEN 'RB'
WHEN (select facilityname from facility) LIKE '%Primary%Iru%' THEN 'IR'
WHEN (select facilityname from facility) LIKE '%PHC%Iru%' THEN 'IR'
WHEN (select facilityname from facility) LIKE '%Iru%Primary%' THEN 'IR'
WHEN (select facilityname from facility) LIKE '%Iru%PHC%' THEN 'IR'
WHEN (select facilityname from facility) LIKE '%MCC%Amuwo%' THEN 'MW'
ELSE SUBSTRING(a.pepid,1,2) END AS facn,CASE SUBSTRING(a.pepid,1,2) 
WHEN 'LG' THEN 'LASUTH'
WHEN 'MW' THEN 'MCC Amuwo Odofin'
WHEN 'IR' THEN 'Iru Primary Health Center'
WHEN 'AP' THEN 'Agboju Primary Health Center'
WHEN 'LN' THEN 'Lagoon Hospital'
WHEN 'SG' THEN 'General Hospital Shomolu'
WHEN 'GB' THEN 'General Hospital Agbowa'
WHEN 'GH' THEN 'General Hospital Agbowa'
WHEN 'KZ' THEN 'St Kizito Catholic Clinic'
WHEN 'SU' THEN 'St Kizito Clinic'
WHEN 'RS' THEN 'Ring Road Specialist Hospital'
WHEN 'MC' THEN 'May Clinic Shendam'
WHEN 'LD' THEN 'Ladoke Akintola University of Technology'
WHEN 'JH' THEN 'Jericho Specialist Hospital Ibadan'
WHEN 'BA' THEN 'Comprehensive Health Center Bassa'
WHEN 'BA' THEN 'Comprehensive Health Center Madagali'
WHEN 'BK' THEN 'Comprehensive Health Center Banki'
WHEN 'CL' THEN 'Comprehensive Health Center Lardang'
WHEN 'GD' THEN 'Comprehensive Health Center JUTH Gindiri'
WHEN 'DY' THEN 'Comprehensive Health Center Dyerok'
WHEN 'BC' THEN 'Comprehensive Health Center Bokkos'
WHEN 'TK' THEN 'General Hospital Tunkus'
WHEN 'MO' THEN 'General Hospital Moniya'
WHEN 'QP' THEN 'General Hospital Quan Pan'
WHEN 'IK' THEN 'General Hospital Ikorodu'
WHEN 'EP' THEN 'General Hospital Epe'
WHEN 'FH' THEN 'Adefemi Hospital'
WHEN 'AG' THEN 'Agape Hospital'
WHEN 'AW' THEN 'General Hospital Angware'
WHEN 'GS' THEN 'General Hospital Isolo'
WHEN 'NU' THEN 'Federal Medical Center Nguru'
WHEN 'ON' THEN 'Womens Hospital Onikan'
WHEN 'DK' THEN 'Dadin Kowa Comprehensive Health Center'
WHEN 'LT' THEN 'Sacred Heart Hospital Lantoro'
WHEN 'IJ' THEN 'General Hospital Ijebu-Ode'
WHEN 'NH' THEN 'Nursing Home Maiduguri'
WHEN 'SM' THEN 'State Specialist Hospital Maiduguri'
WHEN 'UM' THEN 'University Of Maiduguri Teaching Hospital'
WHEN 'MH' THEN '68 Military Hospital'
WHEN 'AB' THEN 'Ahmadu Bello Teaching Hospital'
WHEN 'PY' THEN 'CCDP Panyam'
WHEN 'PS' THEN 'Plateau State Hospital'
WHEN 'BU' THEN 'Bingham University Teaching Hospital (BUTH)'
WHEN 'BU' THEN 'BUTH Jos'
WHEN 'GA' THEN 'General Hospital Alimosho'
WHEN 'RB' THEN 'Rauf Aregbesola PHC'
WHEN 'IP' THEN 'Ipaja PHC'
WHEN 'OJ' THEN 'Ojodu PHC'
WHEN 'IF' THEN 'General Hospital Ifako-Ijaiye'
WHEN 'FK' THEN 'Ifako PHC'
WHEN 'AN' THEN 'Ancilla Catholic Hospital'
WHEN 'MU' THEN 'General Hospital Mushin'
WHEN 'JB' THEN 'Ajeabo PHC'
WHEN 'PV' THEN 'Palm Avenue PHC'
WHEN 'LU' THEN 'LUTH'
WHEN 'JU' THEN 'Jos University Teaching Hospital'

WHEN 'FL' THEN 'Police Hospital (NPMS), Falomo'
WHEN 'NM' THEN 'National Insitute of Medical Research (NIMR)'
WHEN 'IL' THEN 'General Hospital Ibeju-Lekki'

WHEN 'UC' THEN 'University College Hospital'
WHEN 'AD' THEN 'Adeoyo Maternity Hospital'
WHEN 'OG' THEN 'State Hospital Ogbomoso'
WHEN 'EH' THEN 'St. Mary Chatholic Hospital (SMCH) Eleta'
WHEN 'BM' THEN 'Baptist  Medical Centre (BMC) Saki'
WHEN 'SY' THEN 'State Hospital Oyo'
WHEN 'SK' THEN 'State Hospital Saki'
WHEN 'BW' THEN 'Bowen Teachin Hospital Ogbomoso'
WHEN 'OY' THEN 'OLA Hospital Oluyoro'
WHEN 'ER' THEN 'General Hospital Eruwa'

WHEN 'BL' THEN 'General Hospital Barkin Ladi'
WHEN 'JU' THEN 'Jos University Teaching Hospital'
WHEN 'KW' THEN 'Cottage Hospital, Kwalla'
WHEN 'PS' THEN 'Plateau State Specialist Hospital, Jos'
WHEN 'OL' THEN 'Our Lady of Apostles Hospital (OLA), Jos'
WHEN 'PK' THEN 'Pankshin General Hospital'
WHEN 'PY' THEN 'CCDP Panyam'
WHEN 'SD' THEN 'Seventh Day Adventist (SDA) Hospital, Jengre'
WHEN 'SH' THEN 'General Hospital, Shendam'
WHEN 'SL' THEN 'Solat Women Hospital'
WHEN 'VH' THEN 'Vom Christian Hospital'
WHEN 'ZK' THEN 'CHC Zamko'
WHEN 'MG' THEN 'General Hospital, Mangu'
WHEN 'FA' THEN 'Faith Alive Foundation'
WHEN 'RC' THEN 'COCIN Hospital Rehabilitation Centre (CHRC), Mangu'
WHEN 'BA' THEN 'Cottage Hospital, Bassa'
WHEN 'BK' THEN 'Cottage Hospital Bokkos'
WHEN 'ZA' THEN 'Our Lady of Apostles, Zawan'
WHEN 'HW' THEN 'Hwolshe Medical Centre'
WHEN 'DK' THEN 'CHC Dakinkowa'
WHEN 'FM' THEN 'FMC Makurdi'
WHEN 'UM' THEN 'University Of Maiduguri'
WHEN 'UN' THEN 'University Of Nigeria Teaching Hospital'
WHEN 'VC' THEN 'St Virgilus Mangu'

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
END as state,CASE
WHEN addrlga LIKE '%Abadam%'              THEN '1'	         
WHEN addrlga LIKE '%Abaji%'               THEN '2'	
WHEN addrlga LIKE '%Abak%'                THEN '3'	
WHEN addrlga LIKE '%Abakaliki%'           THEN '4'	
WHEN addrlga LIKE '%Aba%North%'           THEN '5'	
WHEN addrlga LIKE '%Aba%South%'           THEN '6'	
WHEN addrlga LIKE '%Abeokuta%North%'      THEN '7'	
WHEN addrlga LIKE '%Abeokuta%South%'      THEN '8'	
WHEN addrlga LIKE '%Abi%'                 THEN '9'	
WHEN addrlga LIKE '%Aboh%Mbaise%'         THEN '10'	
WHEN addrlga LIKE '%Abua%Odual%'          THEN '11'	
WHEN addrlga LIKE '%Adavi%'               THEN '12'	
WHEN addrlga LIKE '%Ado%Ekiti%'           THEN '13'	
WHEN addrlga LIKE '%Ado%Odo%Ota%'         THEN '14'	
WHEN addrlga LIKE '%Afijio%'              THEN '15'	
WHEN addrlga LIKE '%Afikpo%North%'        THEN '16'	
WHEN addrlga LIKE '%Afikpo%South%'        THEN '17'	
WHEN addrlga LIKE '%Agaie%'               THEN '18'	
WHEN addrlga LIKE '%Agatu%'               THEN '19'	
WHEN addrlga LIKE '%Agwara%'              THEN '20'	
WHEN addrlga LIKE '%Agege%'               THEN '21'	
WHEN addrlga LIKE '%Aguata%'              THEN '22'	
WHEN addrlga LIKE '%Ahiazu%Mbaise%'       THEN '23'	
WHEN addrlga LIKE '%Ahoada%East%'         THEN '24'	
WHEN addrlga LIKE '%Ahoada%West%'         THEN '25'	
WHEN addrlga LIKE '%Ajaokuta%'            THEN '26'	
WHEN addrlga LIKE '%Ajeromi%Ifelodun%'    THEN '27'	
WHEN addrlga LIKE '%Ajingi%'              THEN '28'	
WHEN addrlga LIKE '%Akamkpa%'             THEN '29'	
WHEN addrlga LIKE '%Akinyele%'            THEN '30'	
WHEN addrlga LIKE '%Akko%'                THEN '31'	
WHEN addrlga LIKE '%Akoko%Edo%'           THEN '32'	
WHEN addrlga LIKE '%Akoko%North%East%'    THEN '33'	
WHEN addrlga LIKE '%Akoko%North%West%'    THEN '34'	
WHEN addrlga LIKE '%Akoko%South%West%'    THEN '35'	
WHEN addrlga LIKE '%Akoko%South%East%'    THEN '36'	
WHEN addrlga LIKE '%Akpabuyo%'            THEN '37'	
WHEN addrlga LIKE '%Akuku%Toru%'          THEN '38'	
WHEN addrlga LIKE '%Akure%North%'         THEN '39'	
WHEN addrlga LIKE '%Akure%South%'         THEN '40'	
WHEN addrlga LIKE '%Akwanga%'             THEN '41'	
WHEN addrlga LIKE '%Albasu%'              THEN '42'	
WHEN addrlga LIKE '%Aleiro%'              THEN '43'	
WHEN addrlga LIKE '%Alimosho%'            THEN '44'	
WHEN addrlga LIKE '%Alkaleri%'            THEN '45'	
WHEN addrlga LIKE '%Amuwo%Odofin%'        THEN '46'	
WHEN addrlga LIKE '%Anambra%East%'        THEN '47'	
WHEN addrlga LIKE '%Anambra%West%'        THEN '48'	
WHEN addrlga LIKE '%Anaocha%'             THEN '49'	
WHEN addrlga LIKE '%Andoni%'              THEN '50'	
WHEN addrlga LIKE '%Aninri%'              THEN '51'	
WHEN addrlga LIKE '%Aniocha%North%'       THEN '52'	
WHEN addrlga LIKE '%Aniocha%South%'       THEN '53'	
WHEN addrlga LIKE '%Anka%'                THEN '54'	
WHEN addrlga LIKE '%Ankpa%'               THEN '55'	
WHEN addrlga LIKE '%Apa%'                 THEN '56'	
WHEN addrlga LIKE '%Apapa%'               THEN '57'	
WHEN addrlga LIKE '%Ado%'                 THEN '58'	
WHEN addrlga LIKE '%Ardo%Kola%'           THEN '59'	
WHEN addrlga LIKE '%Arewa%Dandi%'         THEN '60'	
WHEN addrlga LIKE '%Argungu%'             THEN '61'	
WHEN addrlga LIKE '%Arochukwu%'           THEN '62'	
WHEN addrlga LIKE '%Asa%'                 THEN '63'	
WHEN addrlga LIKE '%Asari%Toru%'          THEN '64'	
WHEN addrlga LIKE '%Askira%Uba%'          THEN '65'	
WHEN addrlga LIKE '%Atakunmosa%East%'     THEN '66'	
WHEN addrlga LIKE '%Atakunmosa%West%'     THEN '67'	
WHEN addrlga LIKE '%Atiba%'               THEN '68'	
WHEN addrlga LIKE '%Atisbo%'              THEN '69'	
WHEN addrlga LIKE '%Augie%'               THEN '70'	
WHEN addrlga LIKE '%Auyo%'                THEN '71'	
WHEN addrlga LIKE '%Awe%'                 THEN '72'	
WHEN addrlga LIKE '%Awgu%'                THEN '73'	
WHEN addrlga LIKE '%Awka%North%'          THEN '74'	
WHEN addrlga LIKE '%Awka%South%'          THEN '75'	
WHEN addrlga LIKE '%Ayamelum%'            THEN '76'	
WHEN addrlga LIKE '%Aiyedaade%'           THEN '77'	
WHEN addrlga LIKE '%Aiyedire%'            THEN '78'	
WHEN addrlga LIKE '%Babura%'              THEN '79'	
WHEN addrlga LIKE '%Badagry%'             THEN '80'	
WHEN addrlga LIKE '%Bagudo%'              THEN '81'	
WHEN addrlga LIKE '%Bagwai%'              THEN '82'	
WHEN addrlga LIKE '%Bakassi%'             THEN '83'	
WHEN addrlga LIKE '%Bokkos%'              THEN '84'	
WHEN addrlga LIKE '%Bakori%'              THEN '85'	
WHEN addrlga LIKE '%Bakura%'              THEN '86'	
WHEN addrlga LIKE '%Balanga%'             THEN '87'	
WHEN addrlga LIKE '%Bali%'                THEN '88'	
WHEN addrlga LIKE '%Bama%'                THEN '89'	
WHEN addrlga LIKE '%Bade%'                THEN '90'	
WHEN addrlga LIKE '%Barkin%Ladi%'         THEN '91'	
WHEN addrlga LIKE '%Baruten%'             THEN '92'	
WHEN addrlga LIKE '%Bassa%'               THEN '93'	
WHEN addrlga LIKE '%Bassa%'               THEN '94'	
WHEN addrlga LIKE '%Batagarawa%'          THEN '95'	
WHEN addrlga LIKE '%Batsari%'             THEN '96'	
WHEN addrlga LIKE '%Bauchi%'              THEN '97'	
WHEN addrlga LIKE '%Baure%'               THEN '98'	
WHEN addrlga LIKE '%Bayo%'                THEN '99'	
WHEN addrlga LIKE '%Bebeji%'              THEN '100'     
WHEN addrlga LIKE '%Bekwarra%'            THEN '102'     
WHEN addrlga LIKE '%Bende%'               THEN '103'     
WHEN addrlga LIKE '%Biase%'               THEN '104'     
WHEN addrlga LIKE '%Bichi%'               THEN '105'     
WHEN addrlga LIKE '%Bida%'                THEN '106'     
WHEN addrlga LIKE '%Billiri%'             THEN '107'     
WHEN addrlga LIKE '%Bindawa%'             THEN '108'     
WHEN addrlga LIKE '%Binji%'               THEN '109'     
WHEN addrlga LIKE '%Biriniwa%'            THEN '110'     
WHEN addrlga LIKE '%Birnin%Gwari%'        THEN '111'     
WHEN addrlga LIKE '%Birnin%Kebbi%'        THEN '112'     
WHEN addrlga LIKE '%Birnin%Kudu%'         THEN '113'     
WHEN addrlga LIKE '%Birnin%Magaji%Kiyaw%' THEN '114'     
WHEN addrlga LIKE '%Biu%'                 THEN '115'     
WHEN addrlga LIKE '%Bodinga%'             THEN '116'     
WHEN addrlga LIKE '%Bogoro%'              THEN '117'     
WHEN addrlga LIKE '%Boki%'                THEN '118'     
WHEN addrlga LIKE '%Boluwaduro%'          THEN '119'     
WHEN addrlga LIKE '%Bomadi%'              THEN '120'     
WHEN addrlga LIKE '%Bonny%'               THEN '121'     
WHEN addrlga LIKE '%Borgu%'               THEN '122'     
WHEN addrlga LIKE '%Boripe%'              THEN '123'     
WHEN addrlga LIKE '%Bursari%'             THEN '124'     
WHEN addrlga LIKE '%Bosso%'               THEN '125'     
WHEN addrlga LIKE '%Brass%'               THEN '126'     
WHEN addrlga LIKE '%Buji%'                THEN '127'     
WHEN addrlga LIKE '%Bukkuyum%'            THEN '128'     
WHEN addrlga LIKE '%Buruku%'              THEN '129'     
WHEN addrlga LIKE '%Bungudu%'             THEN '130'     
WHEN addrlga LIKE '%Bunkure%'             THEN '131'     
WHEN addrlga LIKE '%Bunza%'               THEN '132'     
WHEN addrlga LIKE '%Burutu%'              THEN '133'     
WHEN addrlga LIKE '%Bwari%'               THEN '134'     
WHEN addrlga LIKE '%Calabar%Municipal%'   THEN '135'     
WHEN addrlga LIKE '%Calabar%South%'       THEN '136'     
WHEN addrlga LIKE '%Chanchaga%'           THEN '137'     
WHEN addrlga LIKE '%Charanchi%'           THEN '138'     
WHEN addrlga LIKE '%Chibok%'              THEN '139'     
WHEN addrlga LIKE '%Chikun%'              THEN '140'     
WHEN addrlga LIKE '%Dala%'                THEN '141'     
WHEN addrlga LIKE '%Damaturu%'            THEN '142'     
WHEN addrlga LIKE '%Damban%'              THEN '143'     
WHEN addrlga LIKE '%Dambatta%'            THEN '144'     
WHEN addrlga LIKE '%Damboa%'              THEN '145'     
WHEN addrlga LIKE '%Dandi%'               THEN '146'     
WHEN addrlga LIKE '%Dandume%'             THEN '147'     
WHEN addrlga LIKE '%Dange%Shuni%'         THEN '148'     
WHEN addrlga LIKE '%Danja%'               THEN '149'     
WHEN addrlga LIKE '%Dan%Musa%'            THEN '150'     
WHEN addrlga LIKE '%Darazo%'              THEN '151'     
WHEN addrlga LIKE '%Dass%'                THEN '152'     
WHEN addrlga LIKE '%Daura%'               THEN '153'     
WHEN addrlga LIKE '%Dawakin%Kudu%'        THEN '154'     
WHEN addrlga LIKE '%Dawakin%Tofa%'        THEN '155'     
WHEN addrlga LIKE '%Degema%'              THEN '156'     
WHEN addrlga LIKE '%Dekina%'              THEN '157'     
WHEN addrlga LIKE '%Demsa%'               THEN '158'     
WHEN addrlga LIKE '%Dikwa%'               THEN '159'     
WHEN addrlga LIKE '%Doguwa%'              THEN '160'     
WHEN addrlga LIKE '%Doma%'                THEN '161'     
WHEN addrlga LIKE '%Donga%'               THEN '162'     
WHEN addrlga LIKE '%Dukku%'               THEN '163'     
WHEN addrlga LIKE '%Dunukofia%'           THEN '164'     
WHEN addrlga LIKE '%Dutse%'               THEN '165'     
WHEN addrlga LIKE '%Dutsi%'               THEN '166'     
WHEN addrlga LIKE '%Dutsin%Ma%'           THEN '167'     
WHEN addrlga LIKE '%Eastern%Obolo%'       THEN '168'     
WHEN addrlga LIKE '%Ebonyi%'              THEN '169'     
WHEN addrlga LIKE '%Edati%'               THEN '170'     
WHEN addrlga LIKE '%Ede%North%'           THEN '171'     
WHEN addrlga LIKE '%Ede%South%'           THEN '172'     
WHEN addrlga LIKE '%Edu%'                 THEN '173'     
WHEN addrlga LIKE '%Ife%Central%'         THEN '174'     
WHEN addrlga LIKE '%Ife%East%'            THEN '175'     
WHEN addrlga LIKE '%Ife%North%'           THEN '176'     
WHEN addrlga LIKE '%Ife%South%'           THEN '177'     
WHEN addrlga LIKE '%Efon%'                THEN '178'     
WHEN addrlga LIKE '%Egbado%North%'        THEN '179'     
WHEN addrlga LIKE '%Egbado%South%'        THEN '180'     
WHEN addrlga LIKE '%Egbeda%'              THEN '181'     
WHEN addrlga LIKE '%Egbedore%'            THEN '182'     
WHEN addrlga LIKE '%Egor%'                THEN '183'     
WHEN addrlga LIKE '%Ehime%Mbano%'         THEN '184'     
WHEN addrlga LIKE '%Ejigbo%'              THEN '185'     
WHEN addrlga LIKE '%Ekeremor%'            THEN '186'     
WHEN addrlga LIKE '%Eket%'                THEN '187'     
WHEN addrlga LIKE '%Ekiti%'               THEN '188'     
WHEN addrlga LIKE '%Ekiti%East%'          THEN '189'     
WHEN addrlga LIKE '%Ekiti%South-West%'    THEN '190'     
WHEN addrlga LIKE '%Ekiti%West%'          THEN '191'     
WHEN addrlga LIKE '%Ekwusigo%'            THEN '192'     
WHEN addrlga LIKE '%Eleme%'               THEN '193'     
WHEN addrlga LIKE '%Emuoha%'              THEN '194'     
WHEN addrlga LIKE '%Emure%'               THEN '195'     
WHEN addrlga LIKE '%Enugu%East%'          THEN '196'     
WHEN addrlga LIKE '%Enugu%North%'         THEN '197'     
WHEN addrlga LIKE '%Enugu%South%'         THEN '198'     
WHEN addrlga LIKE '%Epe%'                 THEN '199'     
WHEN addrlga LIKE '%Esan%Central%'        THEN '200'     
WHEN addrlga LIKE '%Esan%North%East%'     THEN '201'     
WHEN addrlga LIKE '%Esan%South%East%'     THEN '202'     
WHEN addrlga LIKE '%Esan%West%'           THEN '203'     
WHEN addrlga LIKE '%Ese%Odo%'             THEN '204'     
WHEN addrlga LIKE '%Esit%Eket%'           THEN '205'     
WHEN addrlga LIKE '%Essien%Udim%'         THEN '206'     
WHEN addrlga LIKE '%Etche%'               THEN '207'     
WHEN addrlga LIKE '%Ethiope%East%'        THEN '208'     
WHEN addrlga LIKE '%Ethiope%West%'        THEN '209'     
WHEN addrlga LIKE '%Etim%Ekpo%'           THEN '210'     
WHEN addrlga LIKE '%Etinan%'              THEN '211'     
WHEN addrlga LIKE '%Eti%Osa%'             THEN '212'     
WHEN addrlga LIKE '%Etsako%Central%'      THEN '213'     
WHEN addrlga LIKE '%Etsako%East%'         THEN '214'     
WHEN addrlga LIKE '%Etsako%West%'         THEN '215'     
WHEN addrlga LIKE '%Etung%'               THEN '216'     
WHEN addrlga LIKE '%Ewekoro%'             THEN '217'     
WHEN addrlga LIKE '%Ezeagu%'              THEN '218'     
WHEN addrlga LIKE '%Ezinihitte%'          THEN '219'     
WHEN addrlga LIKE '%Ezza%North%'          THEN '220'     
WHEN addrlga LIKE '%Ezza%South%'          THEN '221'     
WHEN addrlga LIKE '%Fagge%'               THEN '222'     
WHEN addrlga LIKE '%Fakai%'               THEN '223'     
WHEN addrlga LIKE '%Faskari%'             THEN '224'     
WHEN addrlga LIKE '%Fika%'                THEN '225'     
WHEN addrlga LIKE '%Fufure%'              THEN '226'     
WHEN addrlga LIKE '%Funakaye%'            THEN '227'     
WHEN addrlga LIKE '%Fune%'                THEN '228'     
WHEN addrlga LIKE '%Funtua%'              THEN '229'     
WHEN addrlga LIKE '%Gabasawa%'            THEN '230'     
WHEN addrlga LIKE '%Gada%'                THEN '231'     
WHEN addrlga LIKE '%Gagarawa%'            THEN '232'     
WHEN addrlga LIKE '%Gamawa%'              THEN '233'     
WHEN addrlga LIKE '%Ganjuwa%'             THEN '234'     
WHEN addrlga LIKE '%Ganye%'               THEN '235'     
WHEN addrlga LIKE '%Garki%'               THEN '236'     
WHEN addrlga LIKE '%Garko%'               THEN '237'     
WHEN addrlga LIKE '%Garun%Mallam%'        THEN '238'     
WHEN addrlga LIKE '%Gashaka%'             THEN '239'     
WHEN addrlga LIKE '%Gassol%'              THEN '240'     
WHEN addrlga LIKE '%Gaya%'                THEN '241'     
WHEN addrlga LIKE '%Gayuk%'               THEN '242'     
WHEN addrlga LIKE '%Gezawa%'              THEN '243'     
WHEN addrlga LIKE '%Gbako%'               THEN '244'     
WHEN addrlga LIKE '%Gboko%'               THEN '245'     
WHEN addrlga LIKE '%Gbonyin%'             THEN '246'     
WHEN addrlga LIKE '%Geidam%'              THEN '247'     
WHEN addrlga LIKE '%Giade%'               THEN '248'     
WHEN addrlga LIKE '%Giwa%'                THEN '249'     
WHEN addrlga LIKE '%Gokana%'              THEN '250'     
WHEN addrlga LIKE '%Gombe%'               THEN '251'     
WHEN addrlga LIKE '%Gombi%'               THEN '252'     
WHEN addrlga LIKE '%Goronyo%'             THEN '253'     
WHEN addrlga LIKE '%Grie%'                THEN '254'     
WHEN addrlga LIKE '%Gubio%'               THEN '255'     
WHEN addrlga LIKE '%Gudu%'                THEN '256'     
WHEN addrlga LIKE '%Gujba%'               THEN '257'     
WHEN addrlga LIKE '%Gulani%'              THEN '258'     
WHEN addrlga LIKE '%Guma%'                THEN '259'     
WHEN addrlga LIKE '%Gumel%'               THEN '260'     
WHEN addrlga LIKE '%Gummi%'               THEN '261'     
WHEN addrlga LIKE '%Gurara%'              THEN '262'     
WHEN addrlga LIKE '%Guri%'                THEN '263'     
WHEN addrlga LIKE '%Gusau%'               THEN '264'     
WHEN addrlga LIKE '%Guzamala%'            THEN '265'     
WHEN addrlga LIKE '%Gwadabawa%'           THEN '266'     
WHEN addrlga LIKE '%Gwagwalada%'          THEN '267'     
WHEN addrlga LIKE '%Gwale%'               THEN '268'     
WHEN addrlga LIKE '%Gwandu%'              THEN '269'     
WHEN addrlga LIKE '%Gwaram%'              THEN '270'     
WHEN addrlga LIKE '%Gwarzo%'              THEN '271'     
WHEN addrlga LIKE '%Gwer%East%'           THEN '272'     
WHEN addrlga LIKE '%Gwer%West%'           THEN '273'     
WHEN addrlga LIKE '%Gwiwa%'               THEN '274'     
WHEN addrlga LIKE '%Gwoza%'               THEN '275'     
WHEN addrlga LIKE '%Hadejia%'             THEN '276'     
WHEN addrlga LIKE '%Hawul%'               THEN '277'     
WHEN addrlga LIKE '%Hong%'                THEN '278'     
WHEN addrlga LIKE '%Ibadan%North%'        THEN '279'     
WHEN addrlga LIKE '%Ibadan%North%East%'   THEN '280'     
WHEN addrlga LIKE '%Ibadan%North%West%'   THEN '281'     
WHEN addrlga LIKE '%Ibadan%South%East%'   THEN '282'     
WHEN addrlga LIKE '%Ibadan%South%West%'   THEN '283'     
WHEN addrlga LIKE '%Ibaji%'               THEN '284'     
WHEN addrlga LIKE '%Ibarapa%Central%'     THEN '285'     
WHEN addrlga LIKE '%Ibarapa%East%'        THEN '286'     
WHEN addrlga LIKE '%Ibarapa%North%'       THEN '287'     
WHEN addrlga LIKE '%Ibeju%Lekki%'         THEN '288'     
WHEN addrlga LIKE '%Ibeno%'               THEN '289'     
WHEN addrlga LIKE '%Ibesikpo%Asutan%'     THEN '290'     
WHEN addrlga LIKE '%Ibi%'                 THEN '291'     
WHEN addrlga LIKE '%Ibiono%Ibom%'         THEN '292'     
WHEN addrlga LIKE '%Idah%'                THEN '293'     
WHEN addrlga LIKE '%Idanre%'              THEN '294'     
WHEN addrlga LIKE '%Ideato%North%'        THEN '295'     
WHEN addrlga LIKE '%Ideato%South%'        THEN '296'     
WHEN addrlga LIKE '%Idemili%North%'       THEN '297'     
WHEN addrlga LIKE '%Idemili%South%'       THEN '298'     
WHEN addrlga LIKE '%Ido%'                 THEN '299'     
WHEN addrlga LIKE '%Ido%Osi%'             THEN '300'     
WHEN addrlga LIKE '%Ifako%Ijaiye%'        THEN '301'     
WHEN addrlga LIKE '%Ifedayo%'             THEN '302'     
WHEN addrlga LIKE '%Ifedore%'             THEN '303'     
WHEN addrlga LIKE '%Ifelodun%'            THEN '304'     
WHEN addrlga LIKE '%Ifelodun%'            THEN '305'     
WHEN addrlga LIKE '%Ifo%'                 THEN '306'     
WHEN addrlga LIKE '%Igabi%'               THEN '307'     
WHEN addrlga LIKE '%Igalamela%Odolu%'     THEN '308'     
WHEN addrlga LIKE '%Igbo%Etiti%'          THEN '309'     
WHEN addrlga LIKE '%Igbo%Eze%North%'      THEN '310'     
WHEN addrlga LIKE '%Igbo%Eze%South%'      THEN '311'     
WHEN addrlga LIKE '%Igueben%'             THEN '312'     
WHEN addrlga LIKE '%Ihiala%'              THEN '313'     
WHEN addrlga LIKE '%Ihitte%Uboma%'        THEN '314'     
WHEN addrlga LIKE '%Ilaje%'               THEN '315'     
WHEN addrlga LIKE '%Ijebu%East%'          THEN '316'     
WHEN addrlga LIKE '%Ijebu%North%'         THEN '317'     
WHEN addrlga LIKE '%Ijebu%North East%'    THEN '318'     
WHEN addrlga LIKE '%Ijebu%Ode%'           THEN '319'     
WHEN addrlga LIKE '%Ijero%'               THEN '320'     
WHEN addrlga LIKE '%Ijumu%'               THEN '321'     
WHEN addrlga LIKE '%Ika%'                 THEN '322'     
WHEN addrlga LIKE '%Ika%North%East%'      THEN '323'     
WHEN addrlga LIKE '%Ikara%'               THEN '324'     
WHEN addrlga LIKE '%Ika%South%'           THEN '325'     
WHEN addrlga LIKE '%Ikeduru%'             THEN '326'     
WHEN addrlga LIKE '%Ikeja%'               THEN '327'     
WHEN addrlga LIKE '%Ikenne%'              THEN '328'     
WHEN addrlga LIKE '%Ikere%'               THEN '329'     
WHEN addrlga LIKE '%Ikole%'               THEN '330'     
WHEN addrlga LIKE '%Ikom%'                THEN '331'     
WHEN addrlga LIKE '%Ikono%'               THEN '332'     
WHEN addrlga LIKE '%Ikorodu%'             THEN '333'     
WHEN addrlga LIKE '%Ikot%Abasi%'          THEN '334'     
WHEN addrlga LIKE '%Ikot%Ekpene%'         THEN '335'     
WHEN addrlga LIKE '%Ikpoba%Okha%'         THEN '336'     
WHEN addrlga LIKE '%Ikwerre%'             THEN '337'     
WHEN addrlga LIKE '%Ikwo%'                THEN '338'     
WHEN addrlga LIKE '%Ikwuano%'             THEN '339'     
WHEN addrlga LIKE '%Ila%'                 THEN '340'     
WHEN addrlga LIKE '%Ilejemeje%'           THEN '341'     
WHEN addrlga LIKE '%Ile%Oluji%Okeigbo%'   THEN '342'     
WHEN addrlga LIKE '%Ilesa%East%'          THEN '343'     
WHEN addrlga LIKE '%Ilesa%West%'          THEN '344'     
WHEN addrlga LIKE '%Illela%'              THEN '345'     
WHEN addrlga LIKE '%Ilorin%East%'         THEN '346'     
WHEN addrlga LIKE '%Ilorin%South%'        THEN '347'     
WHEN addrlga LIKE '%Ilorin%West%'         THEN '348'     
WHEN addrlga LIKE '%Imeko%Afon%'          THEN '349'     
WHEN addrlga LIKE '%Ingawa%'              THEN '350'     
WHEN addrlga LIKE '%Ini%'                 THEN '351'     
WHEN addrlga LIKE '%Ipokia%'              THEN '352'     
WHEN addrlga LIKE '%Irele%'               THEN '353'     
WHEN addrlga LIKE '%Irepo%'               THEN '354'     
WHEN addrlga LIKE '%Irepodun%'            THEN '355'     
WHEN addrlga LIKE '%Irepodun%'            THEN '356'     
WHEN addrlga LIKE '%Irepodun%Ifelodun%'   THEN '357'     
WHEN addrlga LIKE '%Irewole%'             THEN '358'     
WHEN addrlga LIKE '%Isa%'                 THEN '359'     
WHEN addrlga LIKE '%Ise%Orun%'            THEN '360'     
WHEN addrlga LIKE '%Iseyin%'              THEN '361'     
WHEN addrlga LIKE '%Ishielu%'             THEN '362'     
WHEN addrlga LIKE '%Isiala%Mbano%'        THEN '363'     
WHEN addrlga LIKE '%Isiala%Ngwa%North%'   THEN '364'     
WHEN addrlga LIKE '%Isiala%Ngwa%South%'   THEN '365'     
WHEN addrlga LIKE '%Isin%'                THEN '366'     
WHEN addrlga LIKE '%Isi%Uzo%'             THEN '367'     
WHEN addrlga LIKE '%Isokan%'              THEN '368'     
WHEN addrlga LIKE '%Isoko%North%'         THEN '369'     
WHEN addrlga LIKE '%Isoko%South%'         THEN '370'     
WHEN addrlga LIKE '%Isu%'                 THEN '371'     
WHEN addrlga LIKE '%Isuikwuato%'          THEN '372'     
WHEN addrlga LIKE '%Itas%Gadau%'          THEN '373'     
WHEN addrlga LIKE '%Itesiwaju%'           THEN '374'     
WHEN addrlga LIKE '%Itu%'                 THEN '375'     
WHEN addrlga LIKE '%Ivo%'                 THEN '376'     
WHEN addrlga LIKE '%Iwajowa%'             THEN '377'     
WHEN addrlga LIKE '%Iwo%'                 THEN '378'     
WHEN addrlga LIKE '%Izzi%'                THEN '379'     
WHEN addrlga LIKE '%Jaba%'                THEN '380'     
WHEN addrlga LIKE '%Jada%'                THEN '381'     
WHEN addrlga LIKE '%Jahun%'               THEN '382'     
WHEN addrlga LIKE '%Jakusko%'             THEN '383'     
WHEN addrlga LIKE '%Jalingo%'             THEN '384'     
WHEN addrlga LIKE '%Jama%are%'            THEN '385'     
WHEN addrlga LIKE '%Jega%'                THEN '386'     
WHEN addrlga LIKE '%Jema%a%'              THEN '387'     
WHEN addrlga LIKE '%Jere%'                THEN '388'     
WHEN addrlga LIKE '%Jibia%'               THEN '389'     
WHEN addrlga LIKE '%Jos%East%'            THEN '390'     
WHEN addrlga LIKE '%Jos%North%'           THEN '391'     
WHEN addrlga LIKE '%Jos%South%'           THEN '392'     
WHEN addrlga LIKE '%Kabba%Bunu%'          THEN '393'     
WHEN addrlga LIKE '%Kabo%'                THEN '394'     
WHEN addrlga LIKE '%Kachia%'              THEN '395'     
WHEN addrlga LIKE '%Kaduna%North%'        THEN '396'     
WHEN addrlga LIKE '%Kaduna%South%'        THEN '397'     
WHEN addrlga LIKE '%Kafin%Hausa%'         THEN '398'     
WHEN addrlga LIKE '%Kafur%'               THEN '399'     
WHEN addrlga LIKE '%Kaga%'                THEN '400'     
WHEN addrlga LIKE '%Kagarko%'             THEN '401'     
WHEN addrlga LIKE '%Kaiama%'              THEN '402'     
WHEN addrlga LIKE '%Kaita%'               THEN '403'     
WHEN addrlga LIKE '%Kajola%'              THEN '404'     
WHEN addrlga LIKE '%Kajuru%'              THEN '405'     
WHEN addrlga LIKE '%Kala%Balge%'          THEN '406'     
WHEN addrlga LIKE '%Kalgo%'               THEN '407'     
WHEN addrlga LIKE '%Kaltungo%'            THEN '408'     
WHEN addrlga LIKE '%Kanam%'               THEN '409'     
WHEN addrlga LIKE '%Kankara%'             THEN '410'     
WHEN addrlga LIKE '%Kanke%'               THEN '411'     
WHEN addrlga LIKE '%Kankia%'              THEN '412'     
WHEN addrlga LIKE '%Kano%Municipal%'      THEN '413'     
WHEN addrlga LIKE '%Karasuwa%'            THEN '414'     
WHEN addrlga LIKE '%Karaye%'              THEN '415'     
WHEN addrlga LIKE '%Karim%Lamido%'        THEN '416'     
WHEN addrlga LIKE '%Karu%'                THEN '417'     
WHEN addrlga LIKE '%Katagum%'             THEN '418'     
WHEN addrlga LIKE '%Katcha%'              THEN '419'     
WHEN addrlga LIKE '%Katsina%'             THEN '420'     
WHEN addrlga LIKE '%Katsina%Ala%'         THEN '421'     
WHEN addrlga LIKE '%Kaura%'               THEN '422'     
WHEN addrlga LIKE '%Kaura%Namoda%'        THEN '423'     
WHEN addrlga LIKE '%Kauru%'               THEN '424'     
WHEN addrlga LIKE '%Kazaure%'             THEN '425'     
WHEN addrlga LIKE '%Keana%'               THEN '426'     
WHEN addrlga LIKE '%Kebbe%'               THEN '427'     
WHEN addrlga LIKE '%Keffi%'               THEN '428'     
WHEN addrlga LIKE '%Khana%'               THEN '429'     
WHEN addrlga LIKE '%Kibiya%'              THEN '430'     
WHEN addrlga LIKE '%Kirfi%'               THEN '431'     
WHEN addrlga LIKE '%Kiri%Kasama%'         THEN '432'     
WHEN addrlga LIKE '%Kiru%'                THEN '433'     
WHEN addrlga LIKE '%Kiyawa%'              THEN '434'     
WHEN addrlga LIKE '%Kogi%'                THEN '435'     
WHEN addrlga LIKE '%Koko%Besse%'          THEN '436'     
WHEN addrlga LIKE '%Kokona%'              THEN '437'     
WHEN addrlga LIKE '%Kolokuma%Opokuma%'    THEN '438'     
WHEN addrlga LIKE '%Konduga%'             THEN '439'     
WHEN addrlga LIKE '%Konshisha%'           THEN '440'     
WHEN addrlga LIKE '%Kontagora%'           THEN '441'     
WHEN addrlga LIKE '%Kosofe%'              THEN '442'     
WHEN addrlga LIKE '%Kaugama%'             THEN '443'     
WHEN addrlga LIKE '%Kubau%'               THEN '444'     
WHEN addrlga LIKE '%Kudan%'               THEN '445'     
WHEN addrlga LIKE '%Kuje%'                THEN '446'     
WHEN addrlga LIKE '%Kukawa%'              THEN '447'     
WHEN addrlga LIKE '%Kumbotso%'            THEN '448'     
WHEN addrlga LIKE '%Kumi%'                THEN '449'     
WHEN addrlga LIKE '%Kunchi%'              THEN '450'     
WHEN addrlga LIKE '%Kura%'                THEN '451'     
WHEN addrlga LIKE '%Kurfi%'               THEN '452'     
WHEN addrlga LIKE '%Kusada%'              THEN '453'     
WHEN addrlga LIKE '%Kwali%'               THEN '454'     
WHEN addrlga LIKE '%Kwande%'              THEN '455'     
WHEN addrlga LIKE '%Kwami%'               THEN '456'     
WHEN addrlga LIKE '%Kware%'               THEN '457'     
WHEN addrlga LIKE '%Kwaya%Kusar%'         THEN '458'     
WHEN addrlga LIKE '%Lafia%'               THEN '459'     
WHEN addrlga LIKE '%Lagelu%'              THEN '460'     
WHEN addrlga LIKE '%Lagos%Island%'        THEN '461'     
WHEN addrlga LIKE '%Lagos%Mainland%'      THEN '462'     
WHEN addrlga LIKE '%Langtang%South%'      THEN '463'     
WHEN addrlga LIKE '%Langtang%North%'      THEN '464'     
WHEN addrlga LIKE '%Lapai%'               THEN '465'     
WHEN addrlga LIKE '%Larmurde%'            THEN '466'     
WHEN addrlga LIKE '%Lau%'                 THEN '467'     
WHEN addrlga LIKE '%Lavun%'               THEN '468'     
WHEN addrlga LIKE '%Lere%'                THEN '469'     
WHEN addrlga LIKE '%Logo%'                THEN '470'     
WHEN addrlga LIKE '%Lokoja%'              THEN '471'     
WHEN addrlga LIKE '%Machina%'             THEN '472'     
WHEN addrlga LIKE '%Madagali%'            THEN '473'     
WHEN addrlga LIKE '%Madobi%'              THEN '474'     
WHEN addrlga LIKE '%Mafa%'                THEN '475'     
WHEN addrlga LIKE '%Magama%'              THEN '476'     
WHEN addrlga LIKE '%Magumeri%'            THEN '477'     
WHEN addrlga LIKE '%Mai%Adua%'            THEN '478'     
WHEN addrlga LIKE '%Maiduguri%'           THEN '479'     
WHEN addrlga LIKE '%Maigatari%'           THEN '480'     
WHEN addrlga LIKE '%Maiha%'               THEN '481'     
WHEN addrlga LIKE '%Maiyama%'             THEN '482'     
WHEN addrlga LIKE '%Makarfi%'             THEN '483'     
WHEN addrlga LIKE '%Makoda%'              THEN '484'     
WHEN addrlga LIKE '%Malam%Madori%'        THEN '485'     
WHEN addrlga LIKE '%Malumfashi%'          THEN '486'     
WHEN addrlga LIKE '%Mangu%'               THEN '487'     
WHEN addrlga LIKE '%Mani%'                THEN '488'     
WHEN addrlga LIKE '%Maradun%'             THEN '489'     
WHEN addrlga LIKE '%Mariga%'              THEN '490'     
WHEN addrlga LIKE '%Makurdi%'             THEN '491'     
WHEN addrlga LIKE '%Marte%'               THEN '492'     
WHEN addrlga LIKE '%Maru%'                THEN '493'     
WHEN addrlga LIKE '%Mashegu%'             THEN '494'     
WHEN addrlga LIKE '%Mashi%'               THEN '495'     
WHEN addrlga LIKE '%Matazu%'              THEN '496'     
WHEN addrlga LIKE '%Mayo%Belwa%'          THEN '497'     
WHEN addrlga LIKE '%Mbaitoli%'            THEN '498'     
WHEN addrlga LIKE '%Mbo%'                 THEN '499'     
WHEN addrlga LIKE '%Michika%'             THEN '500'     
WHEN addrlga LIKE '%Miga%'                THEN '501'     
WHEN addrlga LIKE '%Mikang%'              THEN '502'     
WHEN addrlga LIKE '%Minjibir%'            THEN '503'     
WHEN addrlga LIKE '%Misau%'               THEN '504'     
WHEN addrlga LIKE '%Moba%'                THEN '505'     
WHEN addrlga LIKE '%Mobbar%'              THEN '506'     
WHEN addrlga LIKE '%Mubi%North%'          THEN '507'     
WHEN addrlga LIKE '%Mubi%South%'          THEN '508'     
WHEN addrlga LIKE '%Mokwa%'               THEN '509'     
WHEN addrlga LIKE '%Monguno%'             THEN '510'     
WHEN addrlga LIKE '%Mopa%Muro%'           THEN '511'     
WHEN addrlga LIKE '%Moro%'                THEN '512'     
WHEN addrlga LIKE '%Moya%'                THEN '513'     
WHEN addrlga LIKE '%Mkpat%Enin%'          THEN '514'     
WHEN addrlga LIKE '%AMAC%'                THEN '515'     
WHEN addrlga LIKE '%Musawa%'              THEN '516'     
WHEN addrlga LIKE '%Mushin%'              THEN '517'     
WHEN addrlga LIKE '%Nafada%'              THEN '518'     
WHEN addrlga LIKE '%Nangere%'             THEN '519'     
WHEN addrlga LIKE '%Nasarawa%'            THEN '520'     
WHEN addrlga LIKE '%Nasarawa%'            THEN '521'     
WHEN addrlga LIKE '%Nasarawa%Egon%'       THEN '522'     
WHEN addrlga LIKE '%Ndokwa%East%'         THEN '523'     
WHEN addrlga LIKE '%Ndokwa%West%'         THEN '524'     
WHEN addrlga LIKE '%Nembe%'               THEN '525'     
WHEN addrlga LIKE '%Ngala%'               THEN '526'     
WHEN addrlga LIKE '%Nganzai%'             THEN '527'     
WHEN addrlga LIKE '%Ngaski%'              THEN '528'     
WHEN addrlga LIKE '%Ngor%Okpala%'         THEN '529'     
WHEN addrlga LIKE '%Nguru%'               THEN '530'     
WHEN addrlga LIKE '%Ningi%'               THEN '531'     
WHEN addrlga LIKE '%Njaba%'               THEN '532'     
WHEN addrlga LIKE '%Njikoka%'             THEN '533'     
WHEN addrlga LIKE '%Nkanu%East%'          THEN '534'     
WHEN addrlga LIKE '%Nkanu%West%'          THEN '535'     
WHEN addrlga LIKE '%Nkwerre%'             THEN '536'     
WHEN addrlga LIKE '%Nnewi%North%'         THEN '537'     
WHEN addrlga LIKE '%Nnewi%South%'         THEN '538'     
WHEN addrlga LIKE '%Nsit%Atai%'           THEN '539'     
WHEN addrlga LIKE '%Nsit%Ibom%'           THEN '540'     
WHEN addrlga LIKE '%Nsit%Ubium%'          THEN '541'     
WHEN addrlga LIKE '%Nsukka%'              THEN '542'     
WHEN addrlga LIKE '%Numan%'               THEN '543'     
WHEN addrlga LIKE '%Nwangele%'            THEN '544'     
WHEN addrlga LIKE '%Obafemi Owode%'       THEN '545'     
WHEN addrlga LIKE '%Obanliku%'            THEN '546'     
WHEN addrlga LIKE '%Obi%'                 THEN '547'     
WHEN addrlga LIKE '%Obi%'                 THEN '548'     
WHEN addrlga LIKE '%Obi%Ngwa%'            THEN '549'     
WHEN addrlga LIKE '%Obio%Akpor%'          THEN '550'     
WHEN addrlga LIKE '%Obokun%'              THEN '551'     
WHEN addrlga LIKE '%Obot%Akara%'          THEN '552'     
WHEN addrlga LIKE '%Obowo%'               THEN '553'     
WHEN addrlga LIKE '%Obubra%'              THEN '554'     
WHEN addrlga LIKE '%Obudu%'               THEN '555'     
WHEN addrlga LIKE '%Odeda%'               THEN '556'     
WHEN addrlga LIKE '%Odigbo%'              THEN '557'     
WHEN addrlga LIKE '%Odogbolu%'            THEN '558'     
WHEN addrlga LIKE '%Odo%Otin%'            THEN '559'     
WHEN addrlga LIKE '%Odukpani%'            THEN '560'     
WHEN addrlga LIKE '%Offa%'                THEN '561'     
WHEN addrlga LIKE '%Ofu%'                 THEN '562'     
WHEN addrlga LIKE '%Ogba%Egbema%Ndoni%'   THEN '563'     
WHEN addrlga LIKE '%Ogbadibo%'            THEN '564'     
WHEN addrlga LIKE '%Ogbaru%'              THEN '565'     
WHEN addrlga LIKE '%Ogbia%'               THEN '566'     
WHEN addrlga LIKE '%Ogbomosho%North%'     THEN '567'     
WHEN addrlga LIKE '%Ogbomosho%South%'     THEN '568'     
WHEN addrlga LIKE '%Ogu%Bolo%'            THEN '569'     
WHEN addrlga LIKE '%Ogoja%'               THEN '570'     
WHEN addrlga LIKE '%Ogo%Oluwa%'           THEN '571'     
WHEN addrlga LIKE '%Ogori%Magongo%'       THEN '572'     
WHEN addrlga LIKE '%Ogun%Waterside%'      THEN '573'     
WHEN addrlga LIKE '%Oguta%'               THEN '574'     
WHEN addrlga LIKE '%Ohafia%'              THEN '575'     
WHEN addrlga LIKE '%Ohaji%Egbema%'        THEN '576'     
WHEN addrlga LIKE '%Ohaozara%'            THEN '577'     
WHEN addrlga LIKE '%Ohaukwu%'             THEN '578'     
WHEN addrlga LIKE '%Ohimini%'             THEN '579'     
WHEN addrlga LIKE '%Orhionmwon%'          THEN '580'     
WHEN addrlga LIKE '%Oji%River%'           THEN '581'     
WHEN addrlga LIKE '%Ojo%'                 THEN '582'     
WHEN addrlga LIKE '%Oju%'                 THEN '583'     
WHEN addrlga LIKE '%Okehi%'               THEN '584'     
WHEN addrlga LIKE '%Okene%'               THEN '585'     
WHEN addrlga LIKE '%Oke Ero%'             THEN '586'     
WHEN addrlga LIKE '%Okigwe%'              THEN '587'     
WHEN addrlga LIKE '%Okitipupa%'           THEN '588'     
WHEN addrlga LIKE '%Okobo%'               THEN '589'     
WHEN addrlga LIKE '%Okpe%'                THEN '590'     
WHEN addrlga LIKE '%Okrika%'              THEN '591'     
WHEN addrlga LIKE '%Olamaboro%'           THEN '592'     
WHEN addrlga LIKE '%Ola%Oluwa%'           THEN '593'     
WHEN addrlga LIKE '%Olorunda%'            THEN '594'     
WHEN addrlga LIKE '%Olorunsogo%'          THEN '595'     
WHEN addrlga LIKE '%Oluyole%'             THEN '596'     
WHEN addrlga LIKE '%Omala%'               THEN '597'     
WHEN addrlga LIKE '%Omuma%'               THEN '598'     
WHEN addrlga LIKE '%Ona%Ara%'             THEN '599'     
WHEN addrlga LIKE '%Ondo%East%'           THEN '600'     
WHEN addrlga LIKE '%Ondo%West%'           THEN '601'     
WHEN addrlga LIKE '%Onicha%'              THEN '602'     
WHEN addrlga LIKE '%Onitsha%North%'       THEN '603'     
WHEN addrlga LIKE '%Onitsha%South%'       THEN '604'     
WHEN addrlga LIKE '%Onna%'                THEN '605'     
WHEN addrlga LIKE '%Okpokwu%'             THEN '606'     
WHEN addrlga LIKE '%Opobo%Nkoro%'         THEN '607'     
WHEN addrlga LIKE '%Oredo%'               THEN '608'     
WHEN addrlga LIKE '%Orelope%'             THEN '609'     
WHEN addrlga LIKE '%Oriade%'              THEN '610'     
WHEN addrlga LIKE '%Ori%Ire%'             THEN '611'     
WHEN addrlga LIKE '%Orlu%'                THEN '612'     
WHEN addrlga LIKE '%Orolu%'               THEN '613'     
WHEN addrlga LIKE '%Oron%'                THEN '614'     
WHEN addrlga LIKE '%Orsu%'                THEN '615'     
WHEN addrlga LIKE '%Oru%East%'            THEN '616'     
WHEN addrlga LIKE '%Oruk%Anam%'           THEN '617'     
WHEN addrlga LIKE '%Orumba%North%'        THEN '618'     
WHEN addrlga LIKE '%Orumba%South%'        THEN '619'     
WHEN addrlga LIKE '%Oru%West%'            THEN '620'     
WHEN addrlga LIKE '%Ose%'                 THEN '621'     
WHEN addrlga LIKE '%Oshimili%North%'      THEN '622'     
WHEN addrlga LIKE '%Oshimili%South%'      THEN '623'     
WHEN addrlga LIKE '%Oshodi%Isolo%'        THEN '624'     
WHEN addrlga LIKE '%Osisioma%'            THEN '625'     
WHEN addrlga LIKE '%Osogbo%'              THEN '626'     
WHEN addrlga LIKE '%Oturkpo%'             THEN '627'     
WHEN addrlga LIKE '%Ovia%North-East%'     THEN '628'     
WHEN addrlga LIKE '%Ovia%South-West%'     THEN '629'     
WHEN addrlga LIKE '%Owan%East%'           THEN '630'     
WHEN addrlga LIKE '%Owan%West%'           THEN '631'     
WHEN addrlga LIKE '%Owerri%Municipal%'    THEN '632'     
WHEN addrlga LIKE '%Owerri%North%'        THEN '633'     
WHEN addrlga LIKE '%Owerri%West%'         THEN '634'     
WHEN addrlga LIKE '%Owo%'                 THEN '635'     
WHEN addrlga LIKE '%Oye%'                 THEN '636'     
WHEN addrlga LIKE '%Oyi%'                 THEN '637'     
WHEN addrlga LIKE '%Oyigbo%'              THEN '638'     
WHEN addrlga LIKE '%Oyo%'                 THEN '639'     
WHEN addrlga LIKE '%Oyo%East%'            THEN '640'     
WHEN addrlga LIKE '%Oyun%'                THEN '641'     
WHEN addrlga LIKE '%Paikoro%'             THEN '642'     
WHEN addrlga LIKE '%Pankshin%'            THEN '643'     
WHEN addrlga LIKE '%Patani%'              THEN '644'     
WHEN addrlga LIKE '%Pategi%'              THEN '645'     
WHEN addrlga LIKE '%Port%Harcourt%'       THEN '646'     
WHEN addrlga LIKE '%Potiskum%'            THEN '647'     
WHEN addrlga LIKE '%Qua%an%Pan%'          THEN '648'     
WHEN addrlga LIKE '%Rabah%'               THEN '649'     
WHEN addrlga LIKE '%Rafi%'                THEN '650'     
WHEN addrlga LIKE '%Rano%'                THEN '651'     
WHEN addrlga LIKE '%Remo%North%'          THEN '652'     
WHEN addrlga LIKE '%Rijau%'               THEN '653'     
WHEN addrlga LIKE '%Rimi%'                THEN '654'     
WHEN addrlga LIKE '%Rimin%Gado%'          THEN '655'     
WHEN addrlga LIKE '%Ringim%'              THEN '656'     
WHEN addrlga LIKE '%Riyom%'               THEN '657'     
WHEN addrlga LIKE '%Rogo%'                THEN '658'     
WHEN addrlga LIKE '%Roni%'                THEN '659'     
WHEN addrlga LIKE '%Sabon%Birni%'         THEN '660'     
WHEN addrlga LIKE '%Sabon%Gari%'          THEN '661'     
WHEN addrlga LIKE '%Sabuwa%'              THEN '662'     
WHEN addrlga LIKE '%Safana%'              THEN '663'     
WHEN addrlga LIKE '%Sagbama%'             THEN '664'     
WHEN addrlga LIKE '%Sakaba%'              THEN '665'     
WHEN addrlga LIKE '%Saki%East%'           THEN '666'     
WHEN addrlga LIKE '%Saki%West%'           THEN '667'     
WHEN addrlga LIKE '%Sandamu%'             THEN '668'     
WHEN addrlga LIKE '%Sanga%'               THEN '669'     
WHEN addrlga LIKE '%Sapele%'              THEN '670'     
WHEN addrlga LIKE '%Sardauna%'            THEN '671'     
WHEN addrlga LIKE '%Shagamu%'             THEN '672'     
WHEN addrlga LIKE '%Shagari%'             THEN '673'     
WHEN addrlga LIKE '%Shanga%'              THEN '674'     
WHEN addrlga LIKE '%Shani%'               THEN '675'     
WHEN addrlga LIKE '%Shanono%'             THEN '676'     
WHEN addrlga LIKE '%Shelleng%'            THEN '677'     
WHEN addrlga LIKE '%Shendam%'             THEN '678'     
WHEN addrlga LIKE '%Shinkafi%'            THEN '679'     
WHEN addrlga LIKE '%Shira%'               THEN '680'     
WHEN addrlga LIKE '%Shiroro%'             THEN '681'     
WHEN addrlga LIKE '%Shongom%'             THEN '682'     
WHEN addrlga LIKE '%Shomolu%'             THEN '683'     
WHEN addrlga LIKE '%Silame%'              THEN '684'     
WHEN addrlga LIKE '%Soba%'                THEN '685'     
WHEN addrlga LIKE '%Sokoto%North%'        THEN '686'     
WHEN addrlga LIKE '%Sokoto%South%'        THEN '687'     
WHEN addrlga LIKE '%Song%'                THEN '688'     
WHEN addrlga LIKE '%Southern%Ijaw%'       THEN '689'     
WHEN addrlga LIKE '%Suleja%'              THEN '690'     
WHEN addrlga LIKE '%Sule%Tankarkar%'      THEN '691'     
WHEN addrlga LIKE '%Sumaila%'             THEN '692'     
WHEN addrlga LIKE '%Suru%'                THEN '693'     
WHEN addrlga LIKE '%Surulere%'            THEN '694'     
WHEN addrlga LIKE '%Surulere%'            THEN '695'     
WHEN addrlga LIKE '%Tafa%'                THEN '696'     
WHEN addrlga LIKE '%Tafawa%Balewa%'       THEN '697'     
WHEN addrlga LIKE '%Tai%'                 THEN '698'     
WHEN addrlga LIKE '%Takai%'               THEN '699'     
WHEN addrlga LIKE '%Takum%'               THEN '700'     
WHEN addrlga LIKE '%Talata%Mafara%'       THEN '701'     
WHEN addrlga LIKE '%Tambuwal%'            THEN '702'     
WHEN addrlga LIKE '%Tangaza%'             THEN '703'     
WHEN addrlga LIKE '%Tarauni%'             THEN '704'     
WHEN addrlga LIKE '%Tarka%'               THEN '705'     
WHEN addrlga LIKE '%Tarmuwa%'             THEN '706'     
WHEN addrlga LIKE '%Taura%'               THEN '707'     
WHEN addrlga LIKE '%Toungo%'              THEN '708'     
WHEN addrlga LIKE '%Tofa%'                THEN '709'     
WHEN addrlga LIKE '%Toro%'                THEN '710'     
WHEN addrlga LIKE '%Toto%'                THEN '711'     
WHEN addrlga LIKE '%Chafe%'               THEN '712'     
WHEN addrlga LIKE '%Tsanyawa%'            THEN '713'     
WHEN addrlga LIKE '%Tudun%Wada%'          THEN '714'     
WHEN addrlga LIKE '%Tureta%'              THEN '715'     
WHEN addrlga LIKE '%Udenu%'               THEN '716'     
WHEN addrlga LIKE '%Udi%'                 THEN '717'     
WHEN addrlga LIKE '%Udu%'                 THEN '718'     
WHEN addrlga LIKE '%Udung%Uko%'           THEN '719'     
WHEN addrlga LIKE '%Ughelli%North%'       THEN '720'     
WHEN addrlga LIKE '%Ughelli%South%'       THEN '721'     
WHEN addrlga LIKE '%Ugwunagbo%'           THEN '722'     
WHEN addrlga LIKE '%Uhunmwonde%'          THEN '723'     
WHEN addrlga LIKE '%Ukanafun%'            THEN '724'     
WHEN addrlga LIKE '%Ukum%'                THEN '725'     
WHEN addrlga LIKE '%Ukwa%East%'           THEN '726'     
WHEN addrlga LIKE '%Ukwa%West%'           THEN '727'     
WHEN addrlga LIKE '%Ukwuani%'             THEN '728'     
WHEN addrlga LIKE '%Umuahia%North%'       THEN '729'     
WHEN addrlga LIKE '%Umuahia%South%'       THEN '730'     
WHEN addrlga LIKE '%Umu%Nneochi%'         THEN '731'     
WHEN addrlga LIKE '%Ungogo%'              THEN '732'     
WHEN addrlga LIKE '%Unuimo%'              THEN '733'     
WHEN addrlga LIKE '%Uruan%'               THEN '734'     
WHEN addrlga LIKE '%Urue%Offong%Oruko%'   THEN '735'     
WHEN addrlga LIKE '%Ushongo%'             THEN '736'     
WHEN addrlga LIKE '%Ussa%'                THEN '737'     
WHEN addrlga LIKE '%Uvwie%'               THEN '738'     
WHEN addrlga LIKE '%Uyo%'                 THEN '739'     
WHEN addrlga LIKE '%Uzo%Uwani%'           THEN '740'     
WHEN addrlga LIKE '%Vandeikya%'           THEN '741'     
WHEN addrlga LIKE '%Wamako%'              THEN '742'     
WHEN addrlga LIKE '%Wamba%'               THEN '743'     
WHEN addrlga LIKE '%Warawa%'              THEN '744'     
WHEN addrlga LIKE '%Warji%'               THEN '745'     
WHEN addrlga LIKE '%Warri%North%'         THEN '746'     
WHEN addrlga LIKE '%Warri%South%'         THEN '747'     
WHEN addrlga LIKE '%Warri%South%West%'    THEN '748'     
WHEN addrlga LIKE '%Wasagu%Danko%'        THEN '749'     
WHEN addrlga LIKE '%Wase%'                THEN '750'     
WHEN addrlga LIKE '%Wudil%'               THEN '751'     
WHEN addrlga LIKE '%Wukari%'              THEN '752'     
WHEN addrlga LIKE '%Wurno%'               THEN '753'     
WHEN addrlga LIKE '%Wushishi%'            THEN '754'     
WHEN addrlga LIKE '%Yabo%'                THEN '755'     
WHEN addrlga LIKE '%Yagba%East%'          THEN '756'     
WHEN addrlga LIKE '%Yagba%West%'          THEN '757'     
WHEN addrlga LIKE '%Yakuur%'              THEN '758'     
WHEN addrlga LIKE '%Yala%'                THEN '759'     
WHEN addrlga LIKE '%Yamaltu%Deba%'        THEN '760'     
WHEN addrlga LIKE '%Yankwashi%'           THEN '761'     
WHEN addrlga LIKE '%Yauri%'               THEN '762'     
WHEN addrlga LIKE '%Yenagoa%'             THEN '763'     
WHEN addrlga LIKE '%Yola%North%'          THEN '764'     
WHEN addrlga LIKE '%Yola%South%'          THEN '765'     
WHEN addrlga LIKE '%Yorro%'               THEN '766'     
WHEN addrlga LIKE '%Yunusari%'            THEN '767'     
WHEN addrlga LIKE '%Yusufari%'            THEN '768'     
WHEN addrlga LIKE '%Zaki%'                THEN '769'     
WHEN addrlga LIKE '%Zango%'               THEN '770'     
WHEN addrlga LIKE '%Zangon Kataf%'        THEN '771'     
WHEN addrlga LIKE '%Zaria%'               THEN '772'     
WHEN addrlga LIKE '%Zing%'                THEN '773'     
WHEN addrlga LIKE '%Zurmi%'               THEN '774'     
WHEN addrlga LIKE '%Zuru%'                THEN '775'     
ELSE '0' END AS LGACode,hospitalid as HospitalNumber, enroldate as DateOfFirstReport,enroldate as DiagnosisDate,age as PatientAge,CASE serviceentry 
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
ELSE '' END as CareEntryPoint,CASE WHEN hivposdate='0000-00-00' OR hivposdate IS NULL THEN DATE_SUB(enroldate, INTERVAL 7 DAY) ELSE hivposdate END as FirstConfirmedHIVTestDate,CASE WHEN lower(hivmode) LIKE '%ab%' THEN 'HIVAb'
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
WHEN '2/12' THEN 2
WHEN '3/12' THEN 3
WHEN '1/12' THEN 1
WHEN '2/52' THEN 0.5
WHEN '1/52' THEN 0.25
ELSE CAST('b.artduration' AS UNSIGNED) END as DurationOnArt,ROUND(b.weight) as Weight,b.bp as BloodPressure,CASE b.fp 
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
WHEN 'TB positive, Not on drugs' THEN '5' 
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
from patient a LEFT JOIN (select * from clinicaleval order by visitdate DESC) b
ON (a.pepid=b.pepid)
LEFT JOIN (select * from laboratory where tests='CD4' order by visitdate DESC) c
ON (a.pepid=c.pepid)
LEFT JOIN (select * from pharmacy order by visitdate DESC) d
ON (a.pepid=d.pepid) 
where a.enroldate!='0000-00-00' and (b.visitdate > '2017-07-31' or c.visitdate > '2017-07-31' or d.pharmdispensedate > '2017-07-31')
group by a.pepid order by a.pepid";

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
	$PatientDemographics->addChild("PatientIdentifier", $row['PatientIdentifier']); 
	/////////add treatment facility
	$TreatmentFacility = $PatientDemographics->addChild("TreatmentFacility");
	$TreatmentFacility->addChild("FacilityName", $row['FacilityName']);
	$TreatmentFacility->addChild("FacilityID", $row['facn']);
	$TreatmentFacility->addChild("FacilityTypeCode", "FAC");
	///////////////////add OtherPatientIdentifiers //////////////////////////
	$OtherPatientIdentifiers = $PatientDemographics->addChild("OtherPatientIdentifiers");
	$Identifier = $OtherPatientIdentifiers->addChild("Identifier");
	$Identifier->addChild("IDNumber", $row['IDNumber']);
	$Identifier->addChild("IDTypeCode", "PN");
	if($row['PatientDateOfBirth']=='0000-00-00'){
	//$PatientDemographics->addChild("PatientDateOfBirth", $row['PatientDateOfBirth']);
	}
	else{
	$PatientDemographics->addChild("PatientDateOfBirth", $row['PatientDateOfBirth']);
	}
	$PatientDemographics->addChild("PatientSexCode", $row['PatientSexCode']);
	$PatientDemographics->addChild("PatientDeceasedIndicator", $row['PatientDeceasedIndicator']);
	//$PatientDemographics->addChild("PatientPrimaryLanguageCode", "");
	$PatientDemographics->addChild("PatientEducationLevelCode", $row['PatientEducationLevelCode']);
	$PatientDemographics->addChild("PatientOccupationCode", $row['PatientOccupationCode']);
	$PatientDemographics->addChild("PatientMaritalStatusCode", $row['PatientMaritalStatusCode']);
	$PatientDemographics->addChild("StateOfNigeriaOriginCode", $row['state']);
	
	/////////////////////////////////////////////////////////////End Patient Demographics//////////////////////////////////// 
	
	/////////////////////////////////////////////////////////////Start Condition//////////////////////////////////// 
	$Condition = $IndividualReport->addChild("Condition"); 
	$Condition->addChild("ConditionCode", $row['ConditionCode']);
	////// add program area //////
	$ProgramArea = $Condition->addChild("ProgramArea"); 
	$ProgramArea->addChild("ProgramAreaCode", "HIV");
	///////////////// add patient address //////////////////
	$PatientAddress = $Condition->addChild("PatientAddress"); 
	$PatientAddress->addChild("AddressTypeCode", "H");
	$PatientAddress->addChild("WardVillage", $row['WardVillage']);
	$PatientAddress->addChild("Town", $row['town']);
	$PatientAddress->addChild("LGACode", $row['LGACode']);
	$PatientAddress->addChild("StateCode", $row['state']);
	$PatientAddress->addChild("CountryCode", "NGA");
	$PatientAddress->addChild("PostalCode", "");
	$PatientAddress->addChild("OtherAddressInformation", "");
	
	/////// add CommonQuestions ///////
	$CommonQuestions = $Condition->addChild("CommonQuestions"); 
	$CommonQuestions->addChild("HospitalNumber", $row['HospitalNumber']);
	$DiagnosisFacility = $CommonQuestions->addChild("DiagnosisFacility"); 
	$DiagnosisFacility->addChild("FacilityName", $row['diagfac']);
	$DiagnosisFacility->addChild("FacilityID", substr($row['pepid'],0,2));
	$DiagnosisFacility->addChild("FacilityTypeCode", "FAC");
	if($row['DateOfFirstReport']=='0000-00-00'){
	//$CommonQuestions->addChild("DateOfFirstReport",  $row['DateOfFirstReport']);
	//$CommonQuestions->addChild("DiagnosisDate", $row['DateOfFirstReport']);
	}
	else{
	$CommonQuestions->addChild("DateOfFirstReport",  $row['DateOfFirstReport']);
	$CommonQuestions->addChild("DiagnosisDate", $row['DateOfFirstReport']);
	}
	//$CommonQuestions->addChild("DateOfLastReport", "");
	$CommonQuestions->addChild("PatientDieFromThisIllness",  $row['PatientDeceasedIndicator']);
	$CommonQuestions->addChild("PatientAge", $row['PatientAge']);
	
	/////// add ConditionSpecificQuestions ///////
	$ConditionSpecificQuestions = $Condition->addChild("ConditionSpecificQuestions");
	$HIVQuestions = $ConditionSpecificQuestions->addChild("HIVQuestions");
	if($row['CareEntryPoint']==''){
		//$HIVQuestions->addChild("CareEntryPoint", $row['CareEntryPoint']);
	}
	else{
		$HIVQuestions->addChild("CareEntryPoint", $row['CareEntryPoint']);
	}
	if($row['FirstConfirmedHIVTestDate']=='0000-00-00'||$row['FirstConfirmedHIVTestDate']==''){
	//$HIVQuestions->addChild("FirstConfirmedHIVTestDate", $row['FirstConfirmedHIVTestDate']);
	}
	else{
	$HIVQuestions->addChild("FirstConfirmedHIVTestDate", $row['FirstConfirmedHIVTestDate']);
	}
	if ($row['FirstHIVTestMode']==''){
		//$HIVQuestions->addChild("FirstHIVTestMode", $row['FirstHIVTestMode']);
	}
	else{
		$HIVQuestions->addChild("FirstHIVTestMode", $row['FirstHIVTestMode']);
	}
	$HIVQuestions->addChild("WhereFirstHIVTest", $row['WhereFirstHIVTest']);
	$HIVQuestions->addChild("PriorArt", $row['PriorArt']);
	if($row['MedicallyEligibleDate']=='0000-00-00'||$row['MedicallyEligibleDate']==''){
		//$HIVQuestions->addChild("MedicallyEligibleDate", $row['MedicallyEligibleDate']);
	}
	else{
		$HIVQuestions->addChild("MedicallyEligibleDate", $row['MedicallyEligibleDate']);
	}
	if($row['ReasonMedicallyEligible']==''){
		//$HIVQuestions->addChild("ReasonMedicallyEligible", $row['ReasonMedicallyEligible']);
	}else{
		$HIVQuestions->addChild("ReasonMedicallyEligible", $row['ReasonMedicallyEligible']);
	}
	if(substr($row['pepid'], 0, 2) != $row['facn']){
	if($row['EnrolledInHIVCareDate']==''){
		
	}
	else{
	$HIVQuestions->addChild("TransferredInDate", $row['EnrolledInHIVCareDate']);
	}
	$TransferredInFrom = $HIVQuestions->addChild("TransferredInFrom");
	$TransferredInFrom->addChild("FacilityName",$row['diagfac']);
	$TransferredInFrom->addChild("FacilityID", substr($row['pepid'], 0, 2));
	$TransferredInFrom->addChild("FacilityTypeCode", "FAC");
	}
	else{
			if($row['InitialAdherenceCounselingCompletedDate']=='0000-00-00'||$row['InitialAdherenceCounselingCompletedDate']==''){
		//$HIVQuestions->addChild("InitialAdherenceCounselingCompletedDate", $row['InitialAdherenceCounselingCompletedDate']);
	}else{
		$HIVQuestions->addChild("InitialAdherenceCounselingCompletedDate", $row['InitialAdherenceCounselingCompletedDate']);
	}

	}
	
	///// add first art regime //////
	$FirstARTRegimen = $HIVQuestions->addChild("FirstARTRegimen");
	$FirstARTRegimen->addChild("Code", $row['Code']);
	$FirstARTRegimen->addChild("CodeDescTxt", $row['CodeDescTxt']);
	if($row['ARTStartDate']=='0000-00-00'||$row['ARTStartDate']==''){
		//$HIVQuestions->addChild("ARTStartDate", $row['ARTStartDate']);
	}else{
		$HIVQuestions->addChild("ARTStartDate", $row['ARTStartDate']);
	}
	if($row['WHOClinicalStageARTStart']==''||$row['WHOClinicalStageARTStart']=='0'){
		//$HIVQuestions->addChild("WHOClinicalStageARTStart", $row['WHOClinicalStageARTStart']);
	}else{
		$HIVQuestions->addChild("WHOClinicalStageARTStart", $row['WHOClinicalStageARTStart']);
	}
	if($row['WeightAtARTStart']=='0'||$row['WeightAtARTStart']==''){
		//$HIVQuestions->addChild("WeightAtARTStart", $row['WeightAtARTStart']);
	}else{
			$HIVQuestions->addChild("WeightAtARTStart", $row['WeightAtARTStart']);
	}
	if($row['FunctionalStatusStartART']==''){
		//$HIVQuestions->addChild("FunctionalStatusStartART", $row['FunctionalStatusStartART']);
	}else{
		$HIVQuestions->addChild("FunctionalStatusStartART", $row['FunctionalStatusStartART']);
	}
	if($row['CD4AtStartOfART']=='0'){
	//$HIVQuestions->addChild("CD4AtStartOfART", $row['CD4AtStartOfART']);
	}
	else{
	$HIVQuestions->addChild("CD4AtStartOfART", $row['CD4AtStartOfART']);
	}
	$HIVQuestions->addChild("PatientHasDied", $row['PatientDeceasedIndicator']);
	if($row['EnrolledInHIVCareDate']=='0000-00-00'){
	//$HIVQuestions->addChild("EnrolledInHIVCareDate", $row['EnrolledInHIVCareDate']);
	}
	else{
	$HIVQuestions->addChild("EnrolledInHIVCareDate", $row['EnrolledInHIVCareDate']);
	}
	if($row['InitialTBStatus']==''){
		//$HIVQuestions->addChild("InitialTBStatus", $row['InitialTBStatus']);
	}else{
		$HIVQuestions->addChild("InitialTBStatus", $row['InitialTBStatus']);
	}
	
	
	
	/////// add Encounters ///////
	{	
					$Encounters = $Condition->addChild("Encounters");

	include './mandate_/lidh2.php';
		$sql_enc="SELECT CASE 
WHEN regimen = 'AZT/3TC/EFV' THEN '1a' 
WHEN regimen = 'AZT/3TC/NVP' THEN '1b' 
WHEN regimen = 'TDF/FTC/EFV' THEN '1c'
WHEN regimen = 'TDF/FTC/NVP' THEN '1d' 
WHEN regimen = 'TDF/3TC/EFV' THEN '1e' 
WHEN regimen = 'TDF/3TC/NVP' THEN '1f' 
WHEN regimen = 'AZT/3TC/ABC' THEN '1g' 
WHEN regimen = 'AZT/3TC/TDF' THEN '1h' 
WHEN regimen = 'TDF/FTC/LPV/r' THEN '2a' 
WHEN regimen = 'TDF/3TC/LPV/r' THEN '2b' 
WHEN regimen = 'TDF/FTC/ATV/r' THEN '2c' 
WHEN regimen = 'TDF/3TC/ATV/r' THEN '2d' 
WHEN regimen = 'AZT/3TC/LPV/r' THEN '2e' 
WHEN regimen = 'AZT/3TC/ATV/r' THEN '2f' 
WHEN regimen = 'ABC/3TC/NVP' THEN '4d' 
WHEN regimen = 'ABC/3TC/EFV' THEN '4c' 
WHEN regimen = 'd4T/3TC/NVP' THEN '4d'
WHEN regimen = 'ABC/3TC/LPV/r' THEN '5a'
WHEN regimen = 'd4T/3TC/LPV/r' THEN '5c'
WHEN regimen = 'ddi/3TC/NVP' THEN '5d'
WHEN regimen = 'ABC/3TC/ddi' THEN '5e'
WHEN regimen = 'TLC' THEN '4' 
WHEN regimen = 'FDC (TDF/FTC/EFV)' THEN '1c'                      
WHEN regimen = 'FDC (TDF/3TC/EFV)' THEN '1e'                      
WHEN regimen = 'FDC (3TC/AZT/NVP)' THEN '1b'                      
WHEN regimen = 'Truvada (TDF/FTC)' AND regimen2= 'EFV' THEN '1c' 
WHEN regimen = 'Truv (TDF/FTC)' AND regimen2= 'EFV' THEN '1c'    
WHEN regimen = 'Truvada (TDF/FTC)' AND regimen2= 'NVP' THEN '1d' 
WHEN regimen = 'Truv (TDF/FTC)' AND regimen2= 'NVP' THEN '1d'    
WHEN regimen = 'CBV (AZT/3TC)' AND regimen2='NVP' THEN '1b'      
WHEN regimen = 'CBV (AZT/3TC)' AND regimen2='EFV' THEN '1a'    
ELSE '' END as CodeRegEnc,regimen as CodeDescTxtRegEnc,CASE tbstatus 
WHEN 'No Signs' THEN '1' 
WHEN 'TB Suspected and referred for evaluation' THEN '2' 
WHEN 'On INH prophylaxis' THEN '3' 
WHEN 'Currently on TB treatment' THEN '4' 
WHEN 'TB positive, Not on drugs' THEN '5' 
ELSE '' END as InitialTBStatus,clinicevalid as VisitIDEnc,visitdate as VisitDateEnc,CASE artduration 
WHEN '' THEN 0
WHEN '2/12' THEN 2
WHEN '3/12' THEN 3
WHEN '1/12' THEN 1
WHEN '2/52' THEN 0.5
WHEN '1/52' THEN 0.25
ELSE (artduration  * 1) END as DurationOnArt,ROUND(weight) as Weight,bp as BloodPressure,CASE fp 
WHEN 'Condoms' THEN 'FP1' 
WHEN 'Oral contraceptive pills' THEN 'FP2' 
WHEN 'Injectable/Implantable hormones' THEN 'FP3' 
WHEN 'Diaphragm/cervical caps' THEN 'FP4' 
WHEN 'Intra uterine device' THEN 'FP5' 
WHEN 'Vasectomy/tubal ligation/hysterectomy' THEN 'FP6' 
WHEN 'Other' THEN 'FP7' 
WHEN 'Not on family planning' THEN 'NOFP'
ELSE '' END as PatientFamilyPlanningMethodCode,CASE functionalstatus 
WHEN 'Working' THEN 'W' 
WHEN 'Ambulant' THEN 'A' 
WHEN 'Bedridden' THEN 'B' 
ELSE '' END as FunctionalStatus,whostage AS WHOClinicalStage,CASE tbstatus 
WHEN 'No Signs' THEN '1' 
WHEN 'TB Suspected and referred for evaluation' THEN '2' 
WHEN 'On INH prophylaxis' THEN '3' 
WHEN 'Currently on TB treatment' THEN '4' 
WHEN 'TB positive, Not on drugs' THEN '5' 
ELSE '' END as TBStatus,CASE  
WHEN cotrimdose like '%480%' THEN 'CTX480' 
WHEN cotrimdose like '%960%' THEN 'CTX960' 
ELSE '' END as CodeCTX,CASE  
WHEN cotrimdose like '%480%' THEN 'Cotrimoxazole 480mg' 
WHEN cotrimdose like '%960%' THEN 'Cotrimoxazole 960mg' 
ELSE '' END as CodeDescTxtCTX,CAST(cd4value as UNSIGNED) as cd4value,visitdate as CD4TestDate,nextapptdate as NextAppointmentDate
from clinicaleval
where pepid='$row[pepid]' and visitdate !='0000-00-00'
group by visitdate order by visitdate ASC";
		//$resulta=mysqli_query($con,$sqla);
		//$info1a=mysqli_fetch_assoc($resulta);
		//============
		$result_enc = mysql_query($sql_enc) or die(mysql_error());
		$rows_enc = array();
		while($row_enc = mysql_fetch_array($result_enc))
		$rows_enc[] = $row_enc;
		foreach($rows_enc as $row_enc){ 
	if($row_enc['VisitIDEnc']==''){
	//$Encounters = $Condition->addChild("Encounters");
	//$HIVEncounter = $Encounters->addChild("HIVEncounter");
	//$HIVEncounter->addChild("VisitID", $row['VisitID']);
	//$HIVEncounter->addChild("VisitDate", $row['VisitDate']);
	//$HIVEncounter->addChild("DurationOnArt", $row['DurationOnArt']);
	//$HIVEncounter->addChild("Weight", $row['Weight']);
	//$HIVEncounter->addChild("BloodPressure", $row['BloodPressure']);
	//$HIVEncounter->addChild("PatientFamilyPlanningCode", "FP");
	//$HIVEncounter->addChild("PatientFamilyPlanningMethodCode", $row['PatientFamilyPlanningMethodCode']);
	//$HIVEncounter->addChild("FunctionalStatus", $row['FunctionalStatus']);
	//$HIVEncounter->addChild("WHOClinicalStage", $row['WHOClinicalStage']);
	//$HIVEncounter->addChild("TBStatus", $row['TBStatus']);
	//$ARVDrugRegimen = $HIVEncounter->addChild("ARVDrugRegimen");
	//$ARVDrugRegimen->addChild("Code", $row['Code']);
	//$ARVDrugRegimen->addChild("CodeDescTxt", $row['CodeDescTxt']);
	//$CotrimoxazoleDose = $HIVEncounter->addChild("CotrimoxazoleDose");
	//$CotrimoxazoleDose->addChild("Code", $row['CodeCTX']);
	//$CotrimoxazoleDose->addChild("CodeDescTxt", $row['CodeDescTxtCTX']);
	//$INHDose = $HIVEncounter->addChild("INHDose");
	//$INHDose->addChild("Code", "");
	//$INHDose->addChild("CodeDescTxt", "");
	//$HIVEncounter->addChild("CD4", $row['cd4value']);
	//$HIVEncounter->addChild("CD4TestDate", $row['CD4TestDate']);
	//$HIVEncounter->addChild("NextAppointmentDate", $row['NextAppointmentDate']);
	}
	else{
	$HIVEncounter = $Encounters->addChild("HIVEncounter");
	$HIVEncounter->addChild("VisitID", $row_enc['VisitIDEnc']);		
	$HIVEncounter->addChild("VisitDate", $row_enc['VisitDateEnc']);
	if($row_enc['DurationOnArt']=='0'||$row_enc['DurationOnArt']==''){
	//$HIVEncounter->addChild("DurationOnArt", $row['DurationOnArt']);
	}
	else{
	$HIVEncounter->addChild("DurationOnArt", $row_enc['DurationOnArt']);
	}
	if($row_enc['Weight']==''){
		//$HIVEncounter->addChild("Weight", $row['Weight']);
	}else{
		$HIVEncounter->addChild("Weight", $row_enc['Weight']);
	}
	if($row_enc['BloodPressure']==''){
		//$HIVEncounter->addChild("BloodPressure", $row_enc['BloodPressure']);
	}else{
		$HIVEncounter->addChild("BloodPressure", $row_enc['BloodPressure']);
	}
	if($row_enc['VisitDateEnc']=='0000-00-00'){
		//$HIVEncounter->addChild("PatientFamilyPlanningCode", "FP");
		//$HIVEncounter->addChild("PatientFamilyPlanningMethodCode", $row_enc['PatientFamilyPlanningMethodCode']);
	}else{
		$HIVEncounter->addChild("PatientFamilyPlanningCode", "FP");
		$HIVEncounter->addChild("PatientFamilyPlanningMethodCode", $row_enc['PatientFamilyPlanningMethodCode']);
	}
	
	
	if($row_enc['FunctionalStatus']==''){
		//$HIVEncounter->addChild("FunctionalStatus", $row_enc['FunctionalStatus']);
	}else{
		$HIVEncounter->addChild("FunctionalStatus", $row_enc['FunctionalStatus']);
	}
	if($row_enc['WHOClinicalStage']==''){
		//$HIVEncounter->addChild("WHOClinicalStage", $row_enc['WHOClinicalStage']);
	}else{
		$HIVEncounter->addChild("WHOClinicalStage", $row_enc['WHOClinicalStage']);
	}
	if($row_enc['TBStatus']==''){
		//$HIVEncounter->addChild("TBStatus", $row_enc['TBStatus']);
	}else{
		$HIVEncounter->addChild("TBStatus", $row_enc['TBStatus']);
	}
	
	if($row_enc['VisitDateEnc']=='0000-00-00'){
	//$ARVDrugRegimen = $HIVEncounter->addChild("ARVDrugRegimen");
	//$ARVDrugRegimen->addChild("Code", $row_enc['Code']);
	//$ARVDrugRegimen->addChild("CodeDescTxt", $row_enc['CodeDescTxt']);
	//$CotrimoxazoleDose = $HIVEncounter->addChild("CotrimoxazoleDose");
	//$CotrimoxazoleDose->addChild("Code", $row_enc['CodeCTX']);
	//$CotrimoxazoleDose->addChild("CodeDescTxt", $row_enc['CodeDescTxtCTX']);
	}else{
	$ARVDrugRegimen = $HIVEncounter->addChild("ARVDrugRegimen");
	$ARVDrugRegimen->addChild("Code", $row_enc['CodeRegEnc']);
	$ARVDrugRegimen->addChild("CodeDescTxt", $row_enc['CodeDescTxtRegEnc']);	
	$CotrimoxazoleDose = $HIVEncounter->addChild("CotrimoxazoleDose");
	$CotrimoxazoleDose->addChild("Code", $row_enc['CodeCTX']);
	$CotrimoxazoleDose->addChild("CodeDescTxt", $row_enc['CodeDescTxtCTX']);
	}

	
	//$INHDose = $HIVEncounter->addChild("INHDose");
	//$INHDose->addChild("Code", "");
	//$INHDose->addChild("CodeDescTxt", "");
	if($row_enc['cd4value']==''){
		//$HIVEncounter->addChild("CD4", $row_enc['cd4value']);
		//$HIVEncounter->addChild("CD4TestDate", $row_enc['VisitDate']);
	}else{
		$HIVEncounter->addChild("CD4", $row_enc['cd4value']);
		$HIVEncounter->addChild("CD4TestDate", $row_enc['VisitDateEnc']);
	}
	
	
	if($row_enc['NextAppointmentDate']=='0000-00-00'||$row_enc['NextAppointmentDate']==''){
		//$HIVEncounter->addChild("NextAppointmentDate", $row_enc['NextAppointmentDate']);
	}
	else{
		$HIVEncounter->addChild("NextAppointmentDate", $row_enc['NextAppointmentDate']);
	}
	}
		} //ForEach
	}
	/////// add LaboratoryReport ///////
		{		include './mandate_/lidh2.php';
			$sqllab="select labid as VisitID,visitdate as VisitDate,labregno as LaboratoryTestIdentifier,visitdate as CollectionDate,CASE baselineorrepeat 
WHEN 'Baseline' THEN 'B'                                                                                                               
WHEN 'Repeat' THEN 'R'                                                                                                                 
ELSE '' END as BaselineRepeatCode,CASE artstatus                                                                                       
WHEN 'ART' THEN 'A'                                                                                                                    
WHEN 'Non-ART' THEN 'N'                                                                                                                
ELSE '' END as ARTStatusCode,CASE tests           
WHEN 'Albumin' THEN '1' 
WHEN 'ALT/SGPT' THEN '2' 
WHEN 'Amylase' THEN '3' 
WHEN 'AST/SGOT' THEN '4' 
WHEN 'BilirubinDirect' THEN '5' 
WHEN 'BilirubinIndirect' THEN '6' 
WHEN 'Total Bilirubin' THEN '7' 
WHEN 'BloodUreaNitrogen' THEN '8' 
WHEN 'Calcium' THEN '9' 
WHEN 'CalciumIonized' THEN '10' 
WHEN 'CD4' THEN '11' 
WHEN 'Cell Count Lymphocytes' THEN '12' 
WHEN 'Cell Count Neutrophils' THEN '13' 
WHEN 'Chest X-Ray' THEN '14' 
WHEN 'Chlamydia' THEN '15' 
WHEN 'Chloride' THEN '16' 
WHEN 'Total Cholesterol' THEN '17' 
WHEN 'CholesterolHDL' THEN '18' 
WHEN 'CholesterolLDL' THEN '19' 
WHEN 'Colposcopy (Cervical CA – female only)' THEN '20' 
WHEN 'Creatinine' THEN '21' 
WHEN 'CSF Biochemistry' THEN '22' 
WHEN 'CSF cryptococcal Ag' THEN '23' 
WHEN 'CSF Culture' THEN '24' 
WHEN 'CSF Gram Stain' THEN '25' 
WHEN 'CSF India Ink' THEN '26' 
WHEN 'Cytomegalovirus (CMV)' THEN '27' 
WHEN 'Elisa' THEN '28' 
WHEN 'Epstein Barr Virus (EBV)' THEN '29' 
WHEN 'ESR' THEN '30' 
WHEN 'Fasting Blood Sugar' THEN '31' 
WHEN 'Fasting Glucose' THEN '32' 
WHEN 'Gonorrhea' THEN '33' 
WHEN 'PCV/Hb' THEN '34' 
WHEN 'HCT/Hb percent' THEN '35' 
WHEN 'HDL' THEN '36' 
WHEN 'Hepatitis A Ab-IgM' THEN '37' 
WHEN 'Hepatitis A Ab-Total' THEN '38' 
WHEN 'Hepatitis B core - antibody IgM (HBsAb)' THEN '39' 
WHEN 'Hepatitis B core – antibody, total' THEN '40' 
WHEN 'Hepatitis B surface – antibody (HBsAb)' THEN '41' 
WHEN 'HBsAG (*At Baseline)' THEN '42' 
WHEN 'HCV Antibody' THEN '43' 
WHEN 'HIV Confirm' THEN '44' 
WHEN 'HIV Elisa test' THEN '45' 
WHEN 'HIV Rapid Test' THEN '46' 
WHEN 'Lactate' THEN '47' 
WHEN 'LDL' THEN '48' 
WHEN 'Magnesium' THEN '49' 
WHEN 'Malaria smear' THEN '50' 
WHEN 'MTB' THEN '51' 
WHEN 'Cytology: VIA/Pap Smear' THEN '52' 
WHEN 'PCR' THEN '53' 
WHEN 'Phosphate' THEN '54' 
WHEN 'Phosphorus' THEN '55' 
WHEN 'Platelets' THEN '56' 
WHEN 'K+' THEN '57' 
WHEN 'Pregnancy' THEN '58' 
WHEN 'Protein' THEN '59' 
WHEN 'Random Blood Sugar' THEN '60' 
WHEN 'RBC' THEN '61' 
WHEN 'Rectal Pap Smear' THEN '62' 
WHEN 'Serum Crypto Ag' THEN '63' 
WHEN 'Na+' THEN '64' 
WHEN 'Sputum AFB 1' THEN '65' 
WHEN 'Sputum AFB 2' THEN '66' 
WHEN 'Sputum AFB 3' THEN '67' 
WHEN 'Sputum Gram Stain' THEN '68' 
WHEN 'Store Plasma' THEN '69' 
WHEN 'Syphilis (FTA)' THEN '70' 
WHEN 'VDRL' THEN '71' 
WHEN 'Total Cholesterol (mmol/L)' THEN '72' 
WHEN 'Toxoplasma IgG Antibody' THEN '73' 
WHEN 'Triglyceride' THEN '74' 
WHEN 'Uric acid µmol/L' THEN '75' 
WHEN 'Urinalysis: GLUCOSE' THEN '76' 
WHEN 'Urinalysis: PROTEIN' THEN '76' 
WHEN 'Urine Culture/Sensitivity' THEN '77' 
WHEN 'Vaginal Inspection with Acetic Acid (VIA)' THEN '78' 
WHEN 'Varicella (Chicken Pox)' THEN '79' 
WHEN 'Viral Load' THEN '80' 
WHEN 'WBC' THEN '81' 
WHEN 'WBC Diff' THEN '82'
ELSE '' END as Code,CASE tests           
WHEN 'Albumin' THEN 'Albumin (g/L)' 
WHEN 'ALT/SGPT' THEN 'ALT/SGPT' 
WHEN 'Amylase' THEN 'Amylase' 
WHEN 'AST/SGOT' THEN 'AST/SGOT' 
WHEN 'BilirubinDirect' THEN 'BilirubinDirect' 
WHEN 'BilirubinIndirect' THEN 'BilirubinIndirect' 
WHEN 'Total Bilirubin' THEN 'BilirubinTotal (µmol/L)' 
WHEN 'BloodUreaNitrogen' THEN 'BloodUreaNitrogen (µmol/L)' 
WHEN 'Calcium' THEN 'Calcium  (mmol/L)' 
WHEN 'CalciumIonized' THEN 'CalciumIonized (mmol/L)' 
WHEN 'CD4' THEN 'CD4' 
WHEN 'Cell Count Lymphocytes' THEN 'Cell Count Lymphocytes' 
WHEN 'Cell Count Neutrophils' THEN 'Cell Count Neutrophils' 
WHEN 'Chest X-Ray' THEN 'Chest X-Ray' 
WHEN 'Chlamydia' THEN 'Chlamydia' 
WHEN 'Chloride' THEN 'Chloride (mmol/L)' 
WHEN 'Total Cholesterol' THEN 'Cholesterol (total) mmoI/L' 
WHEN 'CholesterolHDL' THEN 'CholesterolHDL (mmol/L)' 
WHEN 'CholesterolLDL' THEN 'CholesterolLDL (mmol/L)' 
WHEN 'Colposcopy (Cervical CA – female only)' THEN 'Colposcopy (Cervical CA – female only)' 
WHEN 'Creatinine' THEN 'Creatinine' 
WHEN 'CSF Biochemistry' THEN 'CSF Biochemistry' 
WHEN 'CSF cryptococcal Ag' THEN 'CSF cryptococcal Ag' 
WHEN 'CSF Culture' THEN 'CSF Culture' 
WHEN 'CSF Gram Stain' THEN 'CSF Gram Stain' 
WHEN 'CSF India Ink' THEN 'CSF India Ink' 
WHEN 'Cytomegalovirus (CMV)' THEN 'Cytomegalovirus (CMV)' 
WHEN 'Elisa' THEN 'Elisa' 
WHEN 'Epstein Barr Virus (EBV)' THEN 'Epstein Barr Virus (EBV)' 
WHEN 'ESR' THEN 'ESR' 
WHEN 'Fasting Blood Sugar' THEN 'Fasting Blood Sugar' 
WHEN 'Fasting Glucose' THEN 'Glucose' 
WHEN 'Gonorrhea' THEN 'Gonorrhea' 
WHEN 'PCV/Hb' THEN 'HCT/Hb' 
WHEN 'HCT/Hb percent' THEN 'HCT/Hb percent' 
WHEN 'HDL' THEN 'HDL (mg/dL)' 
WHEN 'Hepatitis A Ab-IgM' THEN 'Hepatitis A Ab-IgM' 
WHEN 'Hepatitis A Ab-Total' THEN 'Hepatitis A Ab-Total' 
WHEN 'Hepatitis B core - antibody IgM (HBsAb)' THEN 'Hepatitis B core - antibody IgM (HBsAb)' 
WHEN 'Hepatitis B core – antibody, total' THEN 'Hepatitis B core – antibody, total' 
WHEN 'Hepatitis B surface – antibody (HBsAb)' THEN 'Hepatitis B surface – antibody (HBsAb)' 
WHEN 'HBsAG (*At Baseline)' THEN 'Hepatitis B surface – antigen (HBsAg)' 
WHEN 'HCV Antibody' THEN 'Hepatitis C antibody' 
WHEN 'HIV Confirm' THEN 'HIV Confirm' 
WHEN 'HIV Elisa test' THEN 'HIV Elisa test' 
WHEN 'HIV Rapid Test' THEN 'HIV Rapid Test' 
WHEN 'Lactate' THEN 'Lactate' 
WHEN 'LDL' THEN 'LDL' 
WHEN 'Magnesium' THEN 'Magnesium (mmol/L)' 
WHEN 'Malaria smear' THEN 'Malaria parasite' 
WHEN 'MTB' THEN 'MTB' 
WHEN 'Cytology: VIA/Pap Smear' THEN 'Pap Smear (Cervical CA – female only)' 
WHEN 'PCR' THEN 'PCR' 
WHEN 'Phosphate' THEN 'Phosphate' 
WHEN 'Phosphorus' THEN 'Phosphorus' 
WHEN 'Platelets' THEN 'Platelets' 
WHEN 'K+' THEN 'Potassium  (mmol/L)' 
WHEN 'Pregnancy' THEN 'Pregnancy' 
WHEN 'Protein' THEN 'Protein' 
WHEN 'Random Blood Sugar' THEN 'Random Blood Sugar' 
WHEN 'RBC' THEN 'RBC' 
WHEN 'Rectal Pap Smear' THEN 'Rectal Pap Smear' 
WHEN 'Serum Crypto Ag' THEN 'Serum Crypto Ag' 
WHEN 'Na+' THEN 'Sodium (mmol/L)' 
WHEN 'Sputum AFB 1' THEN 'Sputum AFB 1' 
WHEN 'Sputum AFB 2' THEN 'Sputum AFB 2' 
WHEN 'Sputum AFB 3' THEN 'Sputum AFB 3' 
WHEN 'Sputum Gram Stain' THEN 'Sputum Gram Stain' 
WHEN 'Store Plasma' THEN 'Store Plasma' 
WHEN 'Syphilis (FTA)' THEN 'Syphilis (FTA)' 
WHEN 'VDRL' THEN 'Syphilis' 
WHEN 'Total Cholesterol' THEN 'Total Cholesterol (mmol/L)' 
WHEN 'Toxoplasma IgG Antibody' THEN 'Toxoplasma IgG Antibody' 
WHEN 'Triglyceride' THEN 'Triglycerides (mmol/L)' 
WHEN 'Uric acid µmol/L' THEN 'Uric acid µmol/L' 
WHEN 'Urinalysis: GLUCOSE' THEN 'Urinalysis: GLUCOSE' 
WHEN 'Urinalysis: PROTEIN' THEN 'Urinalysis: PROTEIN' 
WHEN 'Urine Culture/Sensitivity' THEN 'Urine Culture/Sensitivity' 
WHEN 'Vaginal Inspection with Acetic Acid (VIA)' THEN 'Vaginal Inspection with Acetic Acid (VIA)' 
WHEN 'Varicella (Chicken Pox)' THEN 'Varicella (Chicken Pox)' 
WHEN 'Viral Load' THEN 'Viral Load' 
WHEN 'WBC' THEN 'WBC' 
WHEN 'WBC Diff' THEN 'WBC Diff'
ELSE '' END as CodeDescTxt,CASE                                                         
WHEN results = 'TND' THEN 0                                  
WHEN results = 'TARGET NOT DETECTED' THEN 0                                  
WHEN results = 'NOT DETECTED' THEN 0                                  
WHEN tests = 'Pregnancy' and results='Positive' THEN 'P'                                  
WHEN tests = 'Pregnancy' and results='Negateive' THEN 'NP'                                  
WHEN tests = 'Malaria smear' and results='Positive' THEN '1'                                  
WHEN tests = 'Malaria smear' and results='Negative' THEN '0'                                  
WHEN tests = 'HBsAG (*At Baseline)' and results='Negative' THEN '0'                                  
WHEN tests = 'HBsAG (*At Baseline)' and results='Positive' THEN '1'                                  
WHEN results like '%<%' THEN CAST(results AS UNSIGNED)
ELSE results END as Value1,clinicianname as Clinician,reportedby as ReportedBy,CheckedBy as checkedby    
from laboratory                                                                                                                        
where pepid='$row[pepid]' and visitdate !='0000-00-00' and (CASE tests           
WHEN 'Albumin' THEN '1' 
WHEN 'ALT/SGPT' THEN '2' 
WHEN 'Amylase' THEN '3' 
WHEN 'AST/SGOT' THEN '4' 
WHEN 'BilirubinDirect' THEN '5' 
WHEN 'BilirubinIndirect' THEN '6' 
WHEN 'Total Bilirubin' THEN '7' 
WHEN 'BloodUreaNitrogen' THEN '8' 
WHEN 'Calcium' THEN '9' 
WHEN 'CalciumIonized' THEN '10' 
WHEN 'CD4' THEN '11' 
WHEN 'Cell Count Lymphocytes' THEN '12' 
WHEN 'Cell Count Neutrophils' THEN '13' 
WHEN 'Chest X-Ray' THEN '14' 
WHEN 'Chlamydia' THEN '15' 
WHEN 'Chloride' THEN '16' 
WHEN 'Total Cholesterol' THEN '17' 
WHEN 'CholesterolHDL' THEN '18' 
WHEN 'CholesterolLDL' THEN '19' 
WHEN 'Colposcopy (Cervical CA – female only)' THEN '20' 
WHEN 'Creatinine' THEN '21' 
WHEN 'CSF Biochemistry' THEN '22' 
WHEN 'CSF cryptococcal Ag' THEN '23' 
WHEN 'CSF Culture' THEN '24' 
WHEN 'CSF Gram Stain' THEN '25' 
WHEN 'CSF India Ink' THEN '26' 
WHEN 'Cytomegalovirus (CMV)' THEN '27' 
WHEN 'Elisa' THEN '28' 
WHEN 'Epstein Barr Virus (EBV)' THEN '29' 
WHEN 'ESR' THEN '30' 
WHEN 'Fasting Blood Sugar' THEN '31' 
WHEN 'Fasting Glucose' THEN '32' 
WHEN 'Gonorrhea' THEN '33' 
WHEN 'PCV/Hb' THEN '34' 
WHEN 'HCT/Hb percent' THEN '35' 
WHEN 'HDL' THEN '36' 
WHEN 'Hepatitis A Ab-IgM' THEN '37' 
WHEN 'Hepatitis A Ab-Total' THEN '38' 
WHEN 'Hepatitis B core - antibody IgM (HBsAb)' THEN '39' 
WHEN 'Hepatitis B core – antibody, total' THEN '40' 
WHEN 'Hepatitis B surface – antibody (HBsAb)' THEN '41' 
WHEN 'HBsAG (*At Baseline)' THEN '42' 
WHEN 'HCV Antibody' THEN '43' 
WHEN 'HIV Confirm' THEN '44' 
WHEN 'HIV Elisa test' THEN '45' 
WHEN 'HIV Rapid Test' THEN '46' 
WHEN 'Lactate' THEN '47' 
WHEN 'LDL' THEN '48' 
WHEN 'Magnesium' THEN '49' 
WHEN 'Malaria smear' THEN '50' 
WHEN 'MTB' THEN '51' 
WHEN 'Cytology: VIA/Pap Smear' THEN '52' 
WHEN 'PCR' THEN '53' 
WHEN 'Phosphate' THEN '54' 
WHEN 'Phosphorus' THEN '55' 
WHEN 'Platelets' THEN '56' 
WHEN 'K+' THEN '57' 
WHEN 'Pregnancy' THEN '58' 
WHEN 'Protein' THEN '59' 
WHEN 'Random Blood Sugar' THEN '60' 
WHEN 'RBC' THEN '61' 
WHEN 'Rectal Pap Smear' THEN '62' 
WHEN 'Serum Crypto Ag' THEN '63' 
WHEN 'Na+' THEN '64' 
WHEN 'Sputum AFB 1' THEN '65' 
WHEN 'Sputum AFB 2' THEN '66' 
WHEN 'Sputum AFB 3' THEN '67' 
WHEN 'Sputum Gram Stain' THEN '68' 
WHEN 'Store Plasma' THEN '69' 
WHEN 'Syphilis (FTA)' THEN '70' 
WHEN 'VDRL' THEN '71' 
WHEN 'Total Cholesterol (mmol/L)' THEN '72' 
WHEN 'Toxoplasma IgG Antibody' THEN '73' 
WHEN 'Triglyceride' THEN '74' 
WHEN 'Uric acid µmol/L' THEN '75' 
WHEN 'Urinalysis: GLUCOSE' THEN '76' 
WHEN 'Urinalysis: PROTEIN' THEN '76' 
WHEN 'Urine Culture/Sensitivity' THEN '77' 
WHEN 'Vaginal Inspection with Acetic Acid (VIA)' THEN '78' 
WHEN 'Varicella (Chicken Pox)' THEN '79' 
WHEN 'Viral Load' THEN '80' 
WHEN 'WBC' THEN '81' 
WHEN 'WBC Diff' THEN '82'
ELSE '' END)!='' 
group by visitdate,tests order by visitdate ASC";
		//$resulta=mysqli_query($con,$sqla);
		//$info1a=mysqli_fetch_assoc($resulta);
		//============
		$resultlab = mysql_query($sqllab) or die(mysql_error());
		$rows_lab = array();
		while($row_lab = mysql_fetch_array($resultlab))
		$rows_lab[] = $row_lab;
		foreach($rows_lab as $row_lab){ 
	if($row_lab['VisitID']==''){
	//$LaboratoryReport = $Condition->addChild("LaboratoryReport");
	//$LaboratoryReport->addChild("VisitID", $row_lab['VisitID']);
	}else{
	$LaboratoryReport = $Condition->addChild("LaboratoryReport");
	$LaboratoryReport->addChild("VisitID", $row_lab['VisitID']);
		
	}
	if($row_lab['VisitDate']==''){
		//$LaboratoryReport->addChild("VisitDate", $row_lab['VisitDate']);
	}else{
		$LaboratoryReport->addChild("VisitDate", $row_lab['VisitDate']);
	}
	
	if($row_lab['LaboratoryTestIdentifier']==''){
		//$LaboratoryReport->addChild("LaboratoryTestIdentifier", $row_lab['LaboratoryTestIdentifier']);
	}
	else{
		$LaboratoryReport->addChild("LaboratoryTestIdentifier", $row_lab['LaboratoryTestIdentifier']);
	}
	if($row_lab['CollectionDate']=='0000-00-00'||$row_lab['CollectionDate']==''){
		$LaboratoryReport->addChild("CollectionDate", $row_lab['VisitDate']);
	}else{
		$LaboratoryReport->addChild("CollectionDate", $row_lab['CollectionDate']);
	}
	if($row_lab['BaselineRepeatCode']==''){
		//$LaboratoryReport->addChild("BaselineRepeatCode", $row_lab['BaselineRepeatCode']);
	}else{
		$LaboratoryReport->addChild("BaselineRepeatCode", $row_lab['BaselineRepeatCode']);
	}
	if($row_lab['ARTStatusCode']==''){
		//$LaboratoryReport->addChild("ARTStatusCode", $row_lab['ARTStatusCode']);
	}else{
		$LaboratoryReport->addChild("ARTStatusCode", $row_lab['ARTStatusCode']);
	}
	
	
	if($row_lab['VisitDate']==''){
		//$LaboratoryOrderAndResult->addChild("OrderedTestDate", $row_lab['VisitDate']);
		//$LaboratoryOrderAndResult = $LaboratoryReport->addChild("LaboratoryOrderAndResult");
		//$LaboratoryResultedTest = $LaboratoryOrderAndResult->addChild("LaboratoryResultedTest");
		//$LaboratoryResultedTest->addChild("Code", "11");
		//$LaboratoryResultedTest->addChild("CodeDescTxt", "CD4");
		//$LaboratoryResult = $LaboratoryOrderAndResult->addChild("LaboratoryResult");
		//$AnswerNumeric = $LaboratoryResult->addChild("AnswerNumeric");
	}else{
		$LaboratoryOrderAndResult = $LaboratoryReport->addChild("LaboratoryOrderAndResult");
		$LaboratoryOrderAndResult->addChild("OrderedTestDate", $row_lab['VisitDate']);
		$LaboratoryResultedTest = $LaboratoryOrderAndResult->addChild("LaboratoryResultedTest");
		$LaboratoryResultedTest->addChild("Code", $row_lab['Code']);
		$LaboratoryResultedTest->addChild("CodeDescTxt", $row_lab['CodeDescTxt']);
		$LaboratoryResult = $LaboratoryOrderAndResult->addChild("LaboratoryResult");
		$AnswerNumeric = $LaboratoryResult->addChild("AnswerNumeric");
	}
	
	
	
	
	
	
	if($row_lab['Value1']==''){
		//$AnswerNumeric->addChild("Value1", $row_lab['Value1']);
	}else{
		$AnswerNumeric->addChild("Value1", htmlspecialchars($row_lab['Value1']));
	}
	if($row_lab['VisitDate']==''){
		//$LaboratoryOrderAndResult->addChild("ResultedTestDate", $row_lab['VisitDate']);
		//$LaboratoryReport->addChild("Clinician", $row_lab['Clinician']);
		//$LaboratoryReport->addChild("ReportedBy", $row_lab['ReportedBy']);
		//$LaboratoryReport->addChild("CheckedBy", $row_lab['checkedby']);		
	}else{
		$LaboratoryOrderAndResult->addChild("ResultedTestDate", $row_lab['VisitDate']);
		$LaboratoryReport->addChild("Clinician", htmlspecialchars($row_lab['Clinician']));
		$LaboratoryReport->addChild("ReportedBy", htmlspecialchars($row_lab['ReportedBy']));
		$LaboratoryReport->addChild("CheckedBy", htmlspecialchars($row_lab['checkedby']));	
	}
	
		}

}
	/////// add Regimen 1 ///////
	{		include './mandate_/lidh2.php';
		$sqla="SELECT pharmdispensedate as PrescribedRegimenDispensedDate,CASE 
WHEN drugname1 = 'AZT/3TC/EFV' THEN '10' 
WHEN drugname1 = 'AZT/3TC/NVP' THEN '10' 
WHEN drugname1 = 'TDF/FTC/EFV' THEN '10' 
WHEN drugname1 = 'TDF/FTC/NVP' THEN '10' 
WHEN drugname1 = 'TDF/3TC/EFV' THEN '10' 
WHEN drugname1 = 'TDF/3TC/NVP' THEN '10' 
WHEN drugname1 = 'AZT/3TC/EFV' THEN '10' 
WHEN drugname1 = 'AZT/3TC' AND drugname2='EFV' THEN '10' 
WHEN drugname1 = 'AZT/3TC/NVP' THEN '10' 
WHEN drugname1 = 'FDC (TDF/FTC/EFV)' THEN '10' 
WHEN drugname1 = 'FDC (TDF/3TC/EFV)' THEN '10' 
WHEN drugname1 = 'FDC (3TC/AZT/NVP)' THEN '10' 
WHEN drugname1 = 'Truvada (TDF/FTC)' AND drugname2= 'EFV' THEN '10' 
WHEN drugname1 = 'Truv (TDF/FTC)' AND drugname2= 'EFV' THEN '10' 
WHEN drugname1 = 'Truvada (TDF/FTC)' AND drugname2= 'NVP' THEN '10' 
WHEN drugname1 = 'Truv (TDF/FTC)' AND drugname2= 'NVP' THEN '10' 
WHEN drugname1 = 'CBV (AZT/3TC)' AND drugname2='NVP' THEN '10' 
WHEN drugname1 = 'CBV (AZT/3TC)' AND drugname2='EFV' THEN '10' 
WHEN drugname1 = 'ABC/3TC/EFV' THEN '10'
WHEN drugname1 = 'AZT/3TC/ABC' THEN '11'
WHEN drugname1 = 'AZT/3TC/TDF' THEN '11'
WHEN drugname1 = 'ABC/3TC/NVP' THEN '11'
WHEN drugname1 = 'AZT/3TC/ABC' THEN '11'
WHEN drugname1 = 'ABC/3TC/EFV' THEN '11'
WHEN drugname1 = 'ABC/3TC/EFV' THEN '11'
WHEN drugname1 = 'TDF/FTC/LPV/r' THEN '20'
WHEN drugname1 = 'TDF/3TC/LPV/r' THEN '20'
WHEN drugname1 = 'TDF/FTC/ATV/r' THEN '20'
WHEN drugname1 = 'TDF/3TC/ATV/r' THEN '20'
WHEN drugname1 = 'AZT/3TC/LPV/r' THEN '20'
WHEN drugname1 = 'AZT/3TC/ATV/r' THEN '20'
WHEN drugname1 = 'ABC/3TC/LPV/r' THEN '20'
WHEN drugname1 = 'AZT/3TC/LPV/r' THEN '20' 
WHEN drugname1 = 'd4T/3TC/LPV/r' THEN '20' 
WHEN drugname1 = 'ddi/3TC/NVP' THEN '20' 
WHEN drugname1 = 'ABC/3TC/ddi' THEN '20' 
WHEN drugname1 = 'DAR' THEN '30' 
WHEN drugname1 = 'RAL' THEN '30' 
WHEN drugname1 = 'ETR' THEN '30' 
WHEN drugname1 = 'RTV' THEN '30' 
ELSE '' END as PrescribedRegimenLineCode,CASE 
WHEN drugname1 = 'AZT/3TC/EFV' THEN '1a' 
WHEN drugname1 = 'AZT/3TC' AND drugname2='EFV' THEN '1a' 
WHEN drugname1 = 'AZT/3TC/NVP' THEN '1b' 
WHEN drugname1 = 'TDF/FTC/EFV' THEN '1c'
WHEN drugname1 = 'TDF/FTC/NVP' THEN '1d' 
WHEN drugname1 = 'TDF/3TC/EFV' THEN '1e' 
WHEN drugname1 = 'TDF/3TC/NVP' THEN '1f' 
WHEN drugname1 = 'AZT/3TC/ABC' THEN '1g' 
WHEN drugname1 = 'AZT/3TC/TDF' THEN '1h' 
WHEN drugname1 = 'TDF/FTC/LPV/r' THEN '2a' 
WHEN drugname1 = 'TDF/3TC/LPV/r' THEN '2b' 
WHEN drugname1 = 'TDF/FTC/ATV/r' THEN '2c' 
WHEN drugname1 = 'TDF/3TC/ATV/r' THEN '2d' 
WHEN drugname1 = 'AZT/3TC/LPV/r' THEN '2e' 
WHEN drugname1 = 'AZT/3TC/ATV/r' THEN '2f' 
WHEN drugname1 = 'ABC/3TC/NVP' THEN '4d' 
WHEN drugname1 = 'ABC/3TC/EFV' THEN '4c' 
WHEN drugname1 = 'd4T/3TC/NVP' THEN '4d'
WHEN drugname1 = 'ABC/3TC/LPV/r' THEN '5a'
WHEN drugname1 = 'd4T/3TC/LPV/r' THEN '5c'
WHEN drugname1 = 'ddi/3TC/NVP' THEN '5d'
WHEN drugname1 = 'ABC/3TC/ddi' THEN '5e'
WHEN drugname1 = 'TLC' THEN '4' 
WHEN drugname1 = 'FDC (TDF/FTC/EFV)' THEN '1c'                      
WHEN drugname1 = 'FDC (TDF/3TC/EFV)' THEN '1e'                      
WHEN drugname1 = 'FDC (3TC/AZT/NVP)' THEN '1b'                      
WHEN drugname1 = 'Truvada (TDF/FTC)' AND drugname2= 'EFV' THEN '1c' 
WHEN drugname1 = 'Truv (TDF/FTC)' AND drugname2= 'EFV' THEN '1c'    
WHEN drugname1 = 'Truvada (TDF/FTC)' AND drugname2= 'NVP' THEN '1d' 
WHEN drugname1 = 'Truv (TDF/FTC)' AND drugname2= 'NVP' THEN '1d'    
WHEN drugname1 = 'CBV (AZT/3TC)' AND drugname2='NVP' THEN '1b'      
WHEN drugname1 = 'CBV (AZT/3TC)' AND drugname2='EFV' THEN '1a'    
ELSE '' END as CodePharmDrgName1,CASE 
WHEN drugname1 = 'AZT/3TC/EFV' THEN 'AZT-3TC-EFV' 
WHEN drugname1 = 'AZT/3TC' AND drugname2='EFV' THEN 'AZT-3TC-EFV' 
WHEN drugname1 = 'AZT/3TC/NVP' THEN 'AZT-3TC-NVP' 
WHEN drugname1 = 'TDF/FTC/EFV' THEN 'TDF-FTC-EFV' 
WHEN drugname1 = 'TDF/FTC/NVP' THEN 'TDF-FTC-NVP' 
WHEN drugname1 = 'TDF/3TC/EFV' THEN 'TDF-3TC-EFV' 
WHEN drugname1 = 'TDF/3TC/NVP' THEN 'TDF-3TC-NVP' 
WHEN drugname1 = 'AZT/3TC/ABC' THEN 'AZT-3TC-ABC' 
WHEN drugname1 = 'AZT/3TC/TDF' THEN 'AZT-3TC-TDF' 
WHEN drugname1 = 'ABC/3TC/NVP' THEN 'ABC-3TC-NVP' 
WHEN drugname1 = 'ABC/3TC/EFV' THEN 'ABC-3TC-EFV' 
WHEN drugname1 = 'd4T/3TC/NVP' THEN 'd4T-3TC-NVP'
WHEN drugname1 = 'ABC/3TC/LPV/r' THEN 'ABC-3TC-LPV/r'
WHEN drugname1 = 'd4T/3TC/LPV/r' THEN 'd4T-3TC-LPV/r'
WHEN drugname1 = 'ddi/3TC/NVP' THEN 'ddi-3TC-NVP'
WHEN drugname1 = 'ABC/3TC/ddi' THEN 'ABC-3TC-ddi'
WHEN drugname1 = 'TDF/FTC/LPV/r' THEN 'TDF-FTC-LPV/r' 
WHEN drugname1 = 'TDF/3TC/LPV/r' THEN 'TDF-3TC-LPV/r' 
WHEN drugname1 = 'TDF/FTC/ATV/r' THEN 'TDF-FTC-ATV/r' 
WHEN drugname1 = 'TDF/3TC/ATV/r' THEN 'TDF-3TC-ATV/r' 
WHEN drugname1 = 'AZT/3TC/LPV/r' THEN 'AZT-3TC-LPV/r' 
WHEN drugname1 = 'AZT/3TC/ATV/r' THEN 'AZT-3TC-ATV/r'
WHEN drugname1 = 'FDC (TDF/FTC/EFV)' THEN 'FDC (TDF-FTC-EFV)'                      
WHEN drugname1 = 'FDC (TDF/3TC/EFV)' THEN 'FDC (TDF-3TC-EFV)'                      
WHEN drugname1 = 'FDC (3TC/AZT/NVP)' THEN 'FDC (3TC-AZT-NVP)'                      
WHEN drugname1 = 'Truvada (TDF/FTC)' AND drugname2= 'EFV' THEN 'Truvada (TDF-FTC)-EFV' 
WHEN drugname1 = 'Truv (TDF/FTC)' AND drugname2= 'EFV' THEN 'Truv (TDF-FTC)-EFV'    
WHEN drugname1 = 'Truvada (TDF/FTC)' AND drugname2= 'NVP' THEN 'Truvada (TDF-FTC)-NVP' 
WHEN drugname1 = 'Truv (TDF/FTC)' AND drugname2= 'NVP' THEN 'Truv (TDF-FTC)-NVP'    
WHEN drugname1 = 'CBV (AZT/3TC)' AND drugname2='NVP' THEN 'CBV (AZT-3TC)-NVP'      
WHEN drugname1 = 'CBV (AZT/3TC)' AND drugname2='EFV' THEN 'CBV (AZT-3TC)-EFV'       
ELSE '' END as CodeDescTxtPharmDrgName1 ,pharmacyid as VisitIDpharm,visitdate as VisitDatepharm,regduration1 as PrescribedRegimenDuration,drugname2,drugname3,drugname1,CASE 
WHEN oiqty like '%100%' AND oidrug like '%CTX%' THEN pharmacyid 
WHEN oiqty like '%200%' AND oidrug like '%CTX%' THEN pharmacyid 
WHEN oiqty like '%300%' AND oidrug like '%CTX%' THEN pharmacyid 
WHEN oiqty like '%480%' AND oidrug like '%CTX%' THEN pharmacyid 
WHEN oiqty like '%960%' AND oidrug like '%CTX%' THEN pharmacyid 
ELSE '' END as VisitIDCTX,CASE 
WHEN oiqty like '%100%' AND oidrug like '%CTX%' THEN visitdate 
WHEN oiqty like '%200%' AND oidrug like '%CTX%' THEN visitdate 
WHEN oiqty like '%300%' AND oidrug like '%CTX%' THEN visitdate 
WHEN oiqty like '%480%' AND oidrug like '%CTX%' THEN visitdate 
WHEN oiqty like '%960%' AND oidrug like '%CTX%' THEN visitdate 
ELSE '' END as PrescribedRegimenDispensedDateCTX,CASE  
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
ELSE '' END as PrescribedRegimenDurationCTXpharm,CASE  
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' AND tbdrug LIKE '%PZI%' AND tbdrug LIKE '%Streptomycin Injection%' AND tbdrug LIKE '%Ethambutol%' THEN pharmacyid
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' AND tbdrug LIKE '%PZI%' AND tbdrug LIKE '%Ethambutol%' THEN pharmacyid 
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' AND tbdrug LIKE '%Ethambutol%' THEN pharmacyid 
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' AND tbdrug LIKE '%Streptomycin Injection%' THEN pharmacyid 
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' THEN pharmacyid 
WHEN tbdrug LIKE '%INH%' AND tbdrug LIKE '%Ethambutol%' THEN pharmacyid 
WHEN tbdrug LIKE '%Streptomycin Injection%' THEN pharmacyid 
WHEN tbdrug LIKE '%PZI%' THEN pharmacyid 
WHEN tbdrug LIKE '%Ethambutol%' THEN pharmacyid 
WHEN tbdrug LIKE '%Rifampicin%' THEN pharmacyid 
WHEN tbdrug LIKE '%INH%' THEN pharmacyid  
ELSE '' END as VisitIDtb,CASE  
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' AND tbdrug LIKE '%PZI%' AND tbdrug LIKE '%Streptomycin Injection%' AND tbdrug LIKE '%Ethambutol%' THEN visitdate
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' AND tbdrug LIKE '%PZI%' AND tbdrug LIKE '%Ethambutol%' THEN visitdate 
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' AND tbdrug LIKE '%Ethambutol%' THEN visitdate 
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' AND tbdrug LIKE '%Streptomycin Injection%' THEN visitdate 
WHEN tbdrug LIKE '%INH%' and tbdrug LIKE '%Rifampicin%' THEN visitdate 
WHEN tbdrug LIKE '%INH%' AND tbdrug LIKE '%Ethambutol%' THEN visitdate 
WHEN tbdrug LIKE '%Streptomycin Injection%' THEN visitdate 
WHEN tbdrug LIKE '%PZI%' THEN visitdate 
WHEN tbdrug LIKE '%Ethambutol%' THEN visitdate 
WHEN tbdrug LIKE '%Rifampicin%' THEN visitdate 
WHEN tbdrug LIKE '%INH%' THEN visitdate  
ELSE '' END as visitdateTB,CASE tbduration 
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
ELSE '' END as tbdrugcode,tbdrug as tbdrug,oidrug as oidrug, CASE subswitch WHEN 'Switch' THEN 'true' ELSE 'false' END as SwitchIndicator,CASE subswitch WHEN 'Substitution' THEN 'true' ELSE 'false' END as SubstitutionIndicator
FROM pharmacy 
where pepid='$row[pepid]' and drugname1!=''  and visitdate !='0000-00-00' and pharmdispensedate !='0000-00-00' and (CASE 
WHEN drugname1 like '%AZT/3TC/EFV%' THEN '10' 
WHEN drugname1 = 'AZT/3TC' AND drugname2='EFV' THEN '10' 
WHEN drugname1 like '%AZT/3TC/NVP%' THEN '10' 
WHEN drugname1 like '%TDF/FTC/EFV%' THEN '10' 
WHEN drugname1 like '%TDF/FTC/NVP%' THEN '10' 
WHEN drugname1 like '%TDF/3TC/EFV%' THEN '10' 
WHEN drugname1 like '%TDF/3TC/NVP%' THEN '10' 
WHEN drugname1 like '%AZT/3TC/EFV%' THEN '10' 
WHEN drugname1 like '%AZT/3TC/NVP%' THEN '10' 
WHEN drugname1 like '%FDC%' THEN '10' 
WHEN drugname1 like '%CBV%' THEN '10' 
WHEN drugname1 like '%Truv%' THEN '10' 
WHEN drugname1 like '%ABC/3TC/EFV%' THEN '10'
WHEN drugname1 like '%AZT/3TC/ABC%' THEN '11'
WHEN drugname1 like '%AZT/3TC/TDF%' THEN '11'
WHEN drugname1 like '%ABC/3TC/NVP%' THEN '11'
WHEN drugname1 like '%AZT/3TC/ABC%' THEN '11'
WHEN drugname1 like '%ABC/3TC/EFV%' THEN '11'
WHEN drugname1 like '%ABC/3TC/EFV%' THEN '11'
WHEN drugname1 like '%TDF/FTC/LPV/r%' THEN '20'
WHEN drugname1 like '%TDF/3TC/LPV/r%' THEN '20'
WHEN drugname1 like '%TDF/FTC/ATV/r%' THEN '20'
WHEN drugname1 like '%TDF/3TC/ATV/r%' THEN '20'
WHEN drugname1 like '%AZT/3TC/LPV/r%' THEN '20'
WHEN drugname1 like '%AZT/3TC/ATV/r%' THEN '20'
WHEN drugname1 like '%ABC/3TC/LPV/r%' THEN '20'
WHEN drugname1 like '%AZT/3TC/LPV/r%' THEN '20' 
WHEN drugname1 like '%d4T/3TC/LPV/r%' THEN '20' 
WHEN drugname1 like '%ddi/3TC/NVP%' THEN '20' 
WHEN drugname1 like '%ABC/3TC/ddi%' THEN '20' 
WHEN drugname1 like '%DAR%' THEN '30' 
WHEN drugname1 like '%RAL%' THEN '30' 
WHEN drugname1 like '%ETR%' THEN '30' 
WHEN drugname1 like '%RTV%' THEN '30' 
ELSE '' END) !=''
group by visitdate order by visitdate ASC";
		//$resulta=mysqli_query($con,$sqla);
		//$info1a=mysqli_fetch_assoc($resulta);
		//============
		$resulta = mysql_query($sqla) or die(mysql_error());
		$rows1 = array();
		while($row1 = mysql_fetch_array($resulta))
		$rows1[] = $row1;
		foreach($rows1 as $row1){ 
//==================
	if($row1['CodeDescTxtPharmDrgName1']==''){
	//$Regimen = $Condition->addChild("Regimen");
	//$Regimen->addChild("VisitID", $row1['VisitIDpharm']);
	//$Regimen->addChild("VisitDate", $row1['VisitDatepharm']);
	
	//$PrescribedRegimen = $Regimen->addChild("PrescribedRegimen");
	//$PrescribedRegimen->addChild("Code", $row1['CodePharmDrgName1']);
	//$PrescribedRegimen->addChild("CodeDescTxt", $row['CodeDescTxtPharmDrgName1']);
	
	//$Regimen->addChild("PrescribedRegimenTypeCode", "ART");
	//$Regimen->addChild("PrescribedRegimenLineCode", $row['PrescribedRegimenLineCode']);
	//$Regimen->addChild("PrescribedRegimenDuration", $row['PrescribedRegimenDuration']);
	//$Regimen->addChild("PrescribedRegimenDispensedDate", $row['PrescribedRegimenDispensedDate']);
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
		$sql="SELECT visitdate as DateRegimenStarted,DATE_FORMAT(visitdate,'%d') as DateRegimenStartedDD,DATE_FORMAT(visitdate,'%c') as DateRegimenStartedMM,DATE_FORMAT(visitdate,'%Y') as DateRegimenStartedYYYY FROM pharmacy where pepid='$row[pepid]' AND drugname1='$row1[drugname1]' AND drugname1!=''  and visitdate !='0000-00-00' and pharmdispensedate !='0000-00-00' group by visitdate order by visitdate ASC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$info1=mysqli_fetch_assoc($result);
		
	$Regimen = $Condition->addChild("Regimen");
	$Regimen->addChild("VisitID", $row1['VisitIDpharm']);
	$Regimen->addChild("VisitDate", $row1['VisitDatepharm']);
	
	$PrescribedRegimen = $Regimen->addChild("PrescribedRegimen");;
	$PrescribedRegimen->addChild("Code", $row1['CodePharmDrgName1']);
	$PrescribedRegimen->addChild("CodeDescTxt", $row1['CodeDescTxtPharmDrgName1']);
	
	$Regimen->addChild("PrescribedRegimenTypeCode", "ART");
	$Regimen->addChild("PrescribedRegimenLineCode", $row1['PrescribedRegimenLineCode']);
	$Regimen->addChild("PrescribedRegimenDuration", $row1['PrescribedRegimenDuration']);
	$Regimen->addChild("PrescribedRegimenDispensedDate", $row1['PrescribedRegimenDispensedDate']);
	$Regimen->addChild("DateRegimenStarted", $info1['DateRegimenStarted']);
	$Regimen->addChild("DateRegimenStartedDD", $info1['DateRegimenStartedDD']);
	$Regimen->addChild("DateRegimenStartedMM", $info1['DateRegimenStartedMM']);
	$Regimen->addChild("DateRegimenStartedYYYY", $info1['DateRegimenStartedYYYY']);
	$Regimen->addChild("PrescribedRegimenInitialIndicator", "false");
	$Regimen->addChild("PrescribedRegimenCurrentIndicator", "false");
	$Regimen->addChild("TypeOfPreviousExposureCode", "N");
	$Regimen->addChild("SubstitutionIndicator", $row1['SubstitutionIndicator']);
	$Regimen->addChild("SwitchIndicator", $row1['SwitchIndicator']);
	}
		
	
	/////// add Regimen 2 ///////
	if($row1['oidrug']!=''){
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
where pepid='$row[pepid]' and (lower(oidrug) like '%ctx%' or lower(oidrug) like '%co-trim%' or lower(oidrug) like '%cotrim%') group by visitdate
order by visitdate DESC LIMIT 1";
		$resultb=mysqli_query($con,$sqlb);
		$info1b=mysqli_fetch_assoc($resultb);
	if($row1['oidrug']==''){

	//$Regimen = $Condition->addChild("Regimen");
	//$Regimen->addChild("VisitID", $row['VisitIDpharm']);
	//$Regimen->addChild("VisitDate", $row['VisitDatepharm']);
	
	//$PrescribedRegimen = $Regimen->addChild("PrescribedRegimen");
	//$PrescribedRegimen->addChild("Code", $row['CodeCTX']);
	//$PrescribedRegimen->addChild("CodeDescTxt", $row['CodeDescTxtCTX']);
	
	//$Regimen->addChild("PrescribedRegimenTypeCode", $row['PrescribedRegimenDurationCTXpharm']);
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
		$sql="SELECT dispensedate as DateRegimenStarted,DATE_FORMAT(dispensedate,'%d') as DateRegimenStartedDD,DATE_FORMAT(dispensedate,'%c') as DateRegimenStartedMM,DATE_FORMAT(dispensedate,'%Y') as DateRegimenStartedYYYY FROM pharmacy where pepid='$row[pepid]' and (lower(oidrug) like '%ctx%' or lower(oidrug) like '%co-trim%' or lower(oidrug) like '%cotrim%') and visitdate !='0000-00-00' and pharmdispensedate !='0000-00-00' group by visitdate order by visitdate ASC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$info1=mysqli_fetch_assoc($result);
		
	$Regimen = $Condition->addChild("Regimen");
	$Regimen->addChild("VisitID", $row1['VisitIDCTX']);
	$Regimen->addChild("VisitDate", $row1['PrescribedRegimenDispensedDateCTX']);
	
	$PrescribedRegimen = $Regimen->addChild("PrescribedRegimen");
	$PrescribedRegimen->addChild("Code", $row1['CodeCTXPharm']);
	$PrescribedRegimen->addChild("CodeDescTxt", $row1['CodeDescTxtCTXPharm']);
	
	$Regimen->addChild("PrescribedRegimenTypeCode", "CTX");
	$Regimen->addChild("PrescribedRegimenDuration", $row1['PrescribedRegimenDurationCTXpharm']);
	$Regimen->addChild("PrescribedRegimenDispensedDate", $row1['PrescribedRegimenDispensedDateCTX']);
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
	}
	/////// add Regimen 3 ///////
	if($row1['tbdrug']!=''){
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
where pepid='$row[pepid]' and (lower(tbdrug) like '%rifampicin%' or lower(tbdrug) like '%inh%' or lower(tbdrug) like '%strept%' or lower(tbdrug) like '%etham%' or lower(tbdrug) like '%pzi%')
group by visitdate order by visitdate DESC LIMIT 1";
		$resultc=mysqli_query($con,$sqlc);
		$info2c=mysqli_fetch_assoc($resultc);

	if($row1['tbdrug']==''){
	//$Regimen = $Condition->addChild("Regimen");
	//$Regimen->addChild("VisitID", $row['VisitIDpharm']);
	//$Regimen->addChild("VisitDate", $row['VisitDatepharm']);
	
	//$PrescribedRegimen = $Regimen->addChild("PrescribedRegimen");
	//$PrescribedRegimen->addChild("Code", $row['tbdrugcode']);
	//$PrescribedRegimen->addChild("CodeDescTxt", $row['tbdrug']);
	
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
		$sql="SELECT dispensedate as DateRegimenStarted,DATE_FORMAT(dispensedate,'%d') as DateRegimenStartedDD,DATE_FORMAT(dispensedate,'%c') as DateRegimenStartedMM,DATE_FORMAT(dispensedate,'%Y') as DateRegimenStartedYYYY FROM pharmacy where pepid='$row[pepid]' and (lower(tbdrug) like '%rifampicin%' or lower(tbdrug) like '%inh%' or lower(tbdrug) like '%strept%' or lower(tbdrug) like '%etham%' or lower(tbdrug) like '%pzi%')  and visitdate !='0000-00-00' and pharmdispensedate !='0000-00-00' group by visitdate order by visitdate ASC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$info2=mysqli_fetch_assoc($result);
	$Regimen = $Condition->addChild("Regimen");
	$Regimen->addChild("VisitID", $row1['VisitIDtb']);
	$Regimen->addChild("VisitDate", $row1['visitdateTB']);
	
	$PrescribedRegimen = $Regimen->addChild("PrescribedRegimen");
	$PrescribedRegimen->addChild("Code", $row1['tbdrugcode']);
	$PrescribedRegimen->addChild("CodeDescTxt", $row1['tbdrug']);
	
	$Regimen->addChild("PrescribedRegimenTypeCode", "TB");
	$Regimen->addChild("PrescribedRegimenDuration", $row1['PrescribedRegimenDurationTBpharm']);
	$Regimen->addChild("PrescribedRegimenDispensedDate", $row1['visitdateTB']);
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
		}
		}
	}
	/////////////////////////////////////////////////////////////End Condition//////////////////////////////////// 
$filen=""; 
$filen.="UPDATED_"; 
$filen.=date('YmdHis')."_";
$filen.=$row['PatientIdentifier'];

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