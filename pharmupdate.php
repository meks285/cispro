<title>Processing_Insert_main</title>
</head>

<body>

<?php
// =============== code for Connection_SQLi ==============================      

include './mandate_/lidh.php';
//check connection
if(mysqli_connect_errno())
{
echo "Cannot connect to mysqli:" . mysqli_connect_error();
}
if(isset($_POST['subswitch'])) {$subswitch=$_POST['subswitch'];}else {$subswitch="";}
if(isset($_POST['pregyn'])) {$pregyn=$_POST['pregyn'];}else {$pregyn="";}
if(isset($_POST['refillyn'])) {$refillyn=$_POST['refillyn'];}else {$refillyn="";}
if(isset($_POST['pepid'])) {$pepid=$_POST['pepid'];}else {$pepid="";}
if(isset($_POST['visitdate'])) {$visitdate=$_POST['visitdate'];}else {$visitdate="";}
if(isset($_POST['visittype'])) {$visittype=$_POST['visittype'];}else {$visittype="";}
if(isset($_POST['patienttype'])) {$patienttype=$_POST['patienttype'];}else {$patienttype="";}
//if(isset($_POST['tbdrug'])) {$tbdrug=$_POST['tbdrug'];}else {$tbdrug="";}
if(isset($_POST['tbqty'])) {$tbqty=$_POST['tbqty'];}else {$tbqty="";}
if(isset($_POST['tbduration'])) {$tbduration=$_POST['tbduration'];}else {$tbduration="";}
if(isset($_POST['oidrug'])) {$oidrug=$_POST['oidrug'];}else {$oidrug="";}
if(isset($_POST['oiqty'])) {$oiqty=$_POST['oiqty'];}else {$oiqty="";}
if(isset($_POST['oiduration'])) {$oiduration=$_POST['oiduration'];}else {$oiduration="";}
if(isset($_POST['pharmdispensedate'])) {$pharmdispensedate=$_POST['pharmdispensedate'];}else {$pharmdispensedate="";}
if(isset($_POST['otherdrugs'])) {$otherdrugs=$_POST['otherdrugs'];}else {$otherdrugs="";}
if(isset($_POST['otherquantity'])) {$otherquantity=$_POST['otherquantity'];}else {$otherquantity="";}
if(isset($_POST['otherduration'])) {$otherduration=$_POST['otherduration'];}else {$otherduration="";}
if(isset($_POST['orderedby'])) {$orderedby=$_POST['orderedby'];}else {$orderedby="";}
if(isset($_POST['orderdate'])) {$orderdate=$_POST['orderdate'];}else {$orderdate="";}
if(isset($_POST['dispensedby'])) {$dispensedby=$_POST['dispensedby'];}else {$dispensedby="";}
if(isset($_POST['pickedupby'])) {$pickedupby=$_POST['pickedupby'];}else {$pickedupby="";}
if(isset($_POST['pickupdate'])) {$pickupdate=$_POST['pickupdate'];}else {$pickupdate="";}
if(isset($_POST['counseledby'])) {$counseledby=$_POST['counseledby'];}else {$counseledby="";}
if(isset($_POST['counseldate'])) {$counseldate=$_POST['counseldate'];}else {$counseldate="";}
if(isset($_POST['errordrugname'])) {$errordrugname=$_POST['errordrugname'];}else {$errordrugname="";}
if(isset($_POST['errornature'])) {$errornature=$_POST['errornature'];}else {$errornature="";}
if(isset($_POST['errorconsequence'])) {$errorconsequence=$_POST['errorconsequence'];}else {$errorconsequence="";}
if(isset($_POST['errorrepdate'])) {$errorrepdate=$_POST['errorrepdate'];}else {$errorrepdate="";}
if(isset($_POST['drugcode1a'])) {$drugcode1a=$_POST['drugcode1a'];}else {$drugcode1a="";}
if(isset($_POST['drugcode1b'])) {$drugcode1b=$_POST['drugcode1b'];}else {$drugcode1b="";}
if(isset($_POST['drugcode1c'])) {$drugcode1c=$_POST['drugcode1c'];}else {$drugcode1c="";}
if(isset($_POST['drugcode1d'])) {$drugcode1d=$_POST['drugcode1d'];}else {$drugcode1d="";}
if(isset($_POST['regduration1'])) {$regduration1=$_POST['regduration1'];}else {$regduration1="";}
if(isset($_POST['drugcode2a'])) {$drugcode2a=$_POST['drugcode2a'];}else {$drugcode2a="";}
if(isset($_POST['drugcode2b'])) {$drugcode2b=$_POST['drugcode2b'];}else {$drugcode2b="";}
if(isset($_POST['drugcode2c'])) {$drugcode2c=$_POST['drugcode2c'];}else {$drugcode2c="";}
if(isset($_POST['drugcode2d'])) {$drugcode2d=$_POST['drugcode2d'];}else {$drugcode2d="";}
if(isset($_POST['regduration2'])) {$regduration2=$_POST['regduration2'];}else {$regduration2="";}
if(isset($_POST['drugcode3a'])) {$drugcode3a=$_POST['drugcode3a'];}else {$drugcode3a="";}
if(isset($_POST['drugcode3b'])) {$drugcode3b=$_POST['drugcode3b'];}else {$drugcode3b="";}
if(isset($_POST['drugcode3c'])) {$drugcode3c=$_POST['drugcode3c'];}else {$drugcode3c="";}
if(isset($_POST['drugcode3d'])) {$drugcode3d=$_POST['drugcode3d'];}else {$drugcode3d="";}
if(isset($_POST['regduration3'])) {$regduration3=$_POST['regduration3'];}else {$regduration3="";}
if(isset($_POST['drugcode4a'])) {$drugcode4a=$_POST['drugcode4a'];}else {$drugcode4a="";}
if(isset($_POST['drugcode4b'])) {$drugcode4b=$_POST['drugcode4b'];}else {$drugcode4b="";}
if(isset($_POST['drugcode4c'])) {$drugcode4c=$_POST['drugcode4c'];}else {$drugcode4c="";}
if(isset($_POST['drugcode4d'])) {$drugcode4d=$_POST['drugcode4d'];}else {$drugcode4d="";}
if(isset($_POST['regduration4'])) {$regduration4=$_POST['regduration4'];}else {$regduration4="";}
if(isset($_POST['otherdrugs1'])) {$otherdrugs1=$_POST['otherdrugs1'];}else {$otherdrugs1="";}
if(isset($_POST['otherquantity1'])) {$otherquantity1=$_POST['otherquantity1'];}else {$otherquantity1="";}
if(isset($_POST['otherduration1'])) {$otherduration1=$_POST['otherduration1'];}else {$otherduration1="";}
if(isset($_POST['otherdrugs2'])) {$otherdrugs2=$_POST['otherdrugs2'];}else {$otherdrugs2="";}
if(isset($_POST['otherquantity2'])) {$otherquantity2=$_POST['otherquantity2'];}else {$otherquantity2="";}
if(isset($_POST['otherduration2'])) {$otherduration2=$_POST['otherduration2'];}else {$otherduration2="";}
if(isset($_POST['weight'])) {$weight=$_POST['weight'];}else {$weight="";}
if(isset($_POST['height'])) {$height=$_POST['height'];}else {$height="";}
if(isset($_POST['pharmregno'])) {$pharmregno=$_POST['pharmregno'];}else {$pharmregno="";}
if(isset($_POST['nextapptdate'])) {$nextapptdate=$_POST['nextapptdate'];}else {$nextapptdate="";}
if(isset($_POST['tbdrug'])) {
$tbdrug = implode("-", $_POST['tbdrug']);
} else {
$tbdrug = "";
}
$_SESSION=$_POST;
// =============== code for Submit_input type ================================

    if(!mysqli_query($con,"UPDATE pharmacy 
SET pepid='$pepid', visitdate='$visitdate', patienttype='$patienttype',visittype='$visittype', pregyn='$pregyn',refillyn='$refillyn',subswitch='$subswitch',
tbdrug='$tbdrug',tbqty='$tbqty',tbduration='$tbduration',oidrug='$oidrug',oiqty='$oiqty',oiduration='$oiduration',dispensedate='$pharmdispensedate',otherdrugs='$otherdrugs',
otherquantity='$otherquantity',otherduration='$otherduration',orderedby='$orderedby',orderdate='$orderdate',dispensedby='$dispensedby',pharmdispensedate='$pharmdispensedate',
pickedupby='$pickedupby',pickupdate='$pickupdate',counseledby='$counseledby',
counseldate='$counseldate',errordrugname='$errordrugname',errornature='$errornature',errorconsequence='$errorconsequence',
errorrepdate='$errorrepdate', 
drugname1='$drugcode1a',drugdose1='$drugcode1b',drugno1='$drugcode1c',drugsource1='$drugcode1d',regduration1='$regduration1',
drugname2='$drugcode2a',drugdose2='$drugcode2b',
drugno2='$drugcode2c',drugsource2='$drugcode2d',regduration2='$regduration2',drugname3='$drugcode3a',drugdose3='$drugcode3b',
drugno3='$drugcode3c',drugsource3='$drugcode3d',regduration3='$regduration3',drugname4='$drugcode4a',drugdose4='$drugcode4b',
drugno4='$drugcode4c',drugsource4='$drugcode4d',regduration4='$regduration4',otherdrugs1='$otherdrugs1',
otherquantity1='$otherquantity1',
otherduration1='$otherduration1',otherdrugs2='$otherdrugs2',otherquantity2='$otherquantity2',otherduration2='$otherduration2',
weight='$weight',height='$height',pharmregno='$pharmregno',nextapptdate='$nextapptdate'
WHERE pharmacyid='$_POST[pharmacyid]'"))
    {
        echo "Not Recorded".mysqli_error($con);
    }
if(strlen($pepid)==10){
if ( mysqli_affected_rows($con) >= 1 )
{
		{
	include './mandate_/lidhX.php';
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$_SESSION[login_id]','Update - Pharmacy.: $_POST[pepid] - $_POST[visitdate]')";
$result=mysqli_query($con,$sql);
}
	header("refresh:3;./patsummary.php?pepid=".$pepid."&login_id=".$_POST['login_id']);  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Updated";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Recorded to the Server </br> Continuing...</span></p> </br> ";

}
else {
	$link_address = 'javascript:history.go(-1)';
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Update";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> Data could not be saved OR No Changes was made </br> Please try again </br> <a href='".$link_address."'>BACK</a> </span></p> </br> ";
}
}
else{
	if ( mysqli_affected_rows($con) >= 1 )
{
		{
	include './mandate_/lidhX.php';
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$_SESSION[login_id]','Update - Pharmacy.: $_POST[pepid] - $_POST[visitdate]')";
$result=mysqli_query($con,$sql);
}
	header("refresh:3;./patpedsummary.php?pepid=".$pepid."&login_id=".$_POST['login_id']);  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Updated";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Recorded to the Server </br> Continuing...</span></p> </br> ";

}
else {
	$link_address = 'javascript:history.go(-1)';
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Update";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> Data could not be saved OR No Changes was made </br> Please try again </br> <a href='".$link_address."'>BACK</a> </span></p> </br> ";
}
}


     //============================================================

   ?>
   
   <?php if(!mysqli_query($con,"delete from pharmacy where drugname1='' and drugname2='' and oidrug='' and tbdrug='' and otherdrugs=''")) ?>
            <?php 
	class MyClassndr{ 
    public function GetUserInformation(){ 
$query = "SELECT a.idpatient as PatientIdentifier,a.pepid as pepid,(select facilityname from facility) as FacilityName,CASE 
WHEN (select facilityname from facility) LIKE '%Solat%Women%' THEN 'SL'
WHEN (select facilityname from facility) LIKE '%solat%women%' THEN 'SL'
WHEN (select facilityname from facility) LIKE '%Zamko%' THEN 'ZK'
WHEN (select facilityname from facility) LIKE '%State%Specialist%Maiduguri%' THEN 'SM'
WHEN (select facilityname from facility) LIKE '%SSH%' THEN 'SM'
WHEN (select facilityname from facility) LIKE '%CHC%Zamko%' THEN 'ZK'
WHEN (select facilityname from facility) LIKE '%Comprehensive%Zamko%' THEN 'ZK'
WHEN (select facilityname from facility) LIKE '%Kwalla%' THEN 'KW'
WHEN (select facilityname from facility) LIKE '%Cottage%Hospital%Kwalla%' THEN 'KW'
WHEN (select facilityname from facility) LIKE '%cottage%hospital%kwalla%' THEN 'KW'
WHEN (select facilityname from facility) LIKE '%lasuth%' THEN 'LG'
WHEN (select facilityname from facility) LIKE '%LASUTH%' THEN 'LG'
WHEN (select facilityname from facility) LIKE '%Lagos%State%University%' THEN 'LG'
WHEN (select facilityname from facility) LIKE '%Alimosho%' THEN 'GA'
WHEN (select facilityname from facility) LIKE '%General%Alimosho%' THEN 'GA'
WHEN (select facilityname from facility) LIKE '%GH%Alimosho%' THEN 'GA'
WHEN (select facilityname from facility) LIKE '%Aregb%' THEN 'RB'
WHEN (select facilityname from facility) LIKE '%Ipaja%' THEN 'IP'
WHEN (select facilityname from facility) LIKE '%Ipaja%PHC%' THEN 'IP'
WHEN (select facilityname from facility) LIKE '%Ipaja%Primary%' THEN 'IP'
WHEN (select facilityname from facility) LIKE '%Primary%Health%Ipaja%' THEN 'IP'
WHEN (select facilityname from facility) LIKE '%Ojodu%' THEN 'OJ'
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
WHEN (select facilityname from facility) LIKE '%Ajeabo%' THEN 'JB'
WHEN (select facilityname from facility) LIKE '%Palm%' THEN 'PV'
WHEN (select facilityname from facility) LIKE '%Palm%Avenue%' THEN 'PV'
WHEN (select facilityname from facility) LIKE '%LUTH%' THEN 'LU'
WHEN (select facilityname from facility) LIKE '%Lagos%University%' THEN 'LU'
WHEN (select facilityname from facility) LIKE '%Police%' THEN 'FL'
WHEN (select facilityname from facility) LIKE '%NIMR%' THEN 'NM'
WHEN (select facilityname from facility) LIKE '%Nigerian%Insti%' THEN 'NM'
WHEN (select facilityname from facility) LIKE '%Ibej%' THEN 'IL'
WHEN (select facilityname from facility) LIKE '%University College Hospital%' THEN 'UC'
WHEN (select facilityname from facility) LIKE '%University Collage Hospital%' THEN 'UC'
WHEN (select facilityname from facility) LIKE '%UCH%' THEN 'UC'
WHEN (select facilityname from facility) LIKE '%Adeoyo%' THEN 'AD'
WHEN (select facilityname from facility) LIKE '%State Hospital Ogbomoso%' THEN 'OG'
WHEN (select facilityname from facility) LIKE '%Ogbomoso%' THEN 'OG'
WHEN (select facilityname from facility) LIKE '%St%Mary%' THEN 'EH'
WHEN (select facilityname from facility) LIKE '%Mary%' THEN 'EH'
WHEN (select facilityname from facility) LIKE '%Baptist%Medical%saki%' THEN 'BM'
WHEN (select facilityname from facility) LIKE '%Baptist%Medical%' THEN 'BM'
WHEN (select facilityname from facility) LIKE '%State Hospital Oyo%' THEN 'SY'
WHEN (select facilityname from facility) LIKE '%State Hospital Saki%' THEN 'SK'
WHEN (select facilityname from facility) LIKE '%Bowen%' THEN 'BW'
WHEN (select facilityname from facility) LIKE '%OLA%' THEN 'OL'
WHEN (select facilityname from facility) LIKE '%Our%Lady%' THEN 'OL'
WHEN (select facilityname from facility) LIKE '%Eruwa%' THEN 'ER'
WHEN (select facilityname from facility) LIKE '%Barkin%Ladi%' THEN 'BL'
WHEN (select facilityname from facility) LIKE '%Jos University%' THEN 'JU'
WHEN (select facilityname from facility) LIKE '%Cottage Hospital%' THEN 'KW'
WHEN (select facilityname from facility) LIKE '%Plateau State Specialist%' THEN 'PS'
WHEN (select facilityname from facility) LIKE '%Our Lady of Apostle%' THEN 'OL'
WHEN (select facilityname from facility) LIKE '%Pankshin%General%Hospital%' THEN 'PH'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Pankshin%' THEN 'PH'
WHEN (select facilityname from facility) LIKE '%GH%Pankshin%' THEN 'PH'
WHEN (select facilityname from facility) LIKE '%Pankshin%GH%' THEN 'PH'
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
WHEN (select facilityname from facility) LIKE '%Vom%Christian%' THEN 'VH'
WHEN (select facilityname from facility) LIKE '%VCH%' THEN 'VH'
WHEN (select facilityname from facility) LIKE '%Military%' THEN 'MH'
WHEN (select facilityname from facility) LIKE '%JUTH%Comprehensive%' THEN 'ZK'
WHEN (select facilityname from facility) LIKE '%JUTH%' THEN 'JU'
WHEN (select facilityname from facility) LIKE '%Jos%University%Teaching%Hospital%' THEN 'JU'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Mangu%' THEN 'MG'
WHEN (select facilityname from facility) LIKE '%GH%Mangu%' THEN 'MG'
WHEN (select facilityname from facility) LIKE '%Faith%Alive%' THEN 'FA'
WHEN (select facilityname from facility) LIKE '%FAF%' THEN 'FA'
WHEN (select facilityname from facility) LIKE '%COCIN%Mangu%' THEN 'RC'
WHEN (select facilityname from facility) LIKE '%CH%RC%Mangu%' THEN 'RC'
WHEN (select facilityname from facility) LIKE '%CHRC%Mangu%' THEN 'RC'
WHEN (select facilityname from facility) LIKE '%Church%Mangu%' THEN 'RC'
WHEN (select facilityname from facility) LIKE '%General%Hospital%Langtang%' THEN 'LG'
WHEN (select facilityname from facility) LIKE '%GH%Langtang%' THEN 'LG'
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
WHEN (select facilityname from facility) LIKE '%Bingham%' THEN 'BU'
WHEN (select facilityname from facility) LIKE '%BUTH%' THEN 'BU'
WHEN (select facilityname from facility) LIKE '%CCDP%' THEN 'PY'
WHEN (select facilityname from facility) LIKE '%Plateau%State%' THEN 'PS'
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
WHEN (select facilityname from facility) LIKE '%GH%Ibeju%' THEN 'IL'
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
WHEN 'BU' THEN 'Bingham University Teaching Hospital'
WHEN 'BU' THEN 'BUTH'
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
WHEN 'JU' THEN 'Jos University Teaching Hospital'

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
WHEN 'PY' THEN 'CCDP Panyam'
WHEN 'SD' THEN 'Seventh Day Adventist Hospital, Jengre'
WHEN 'SH' THEN 'General Hospital, Shendam'
WHEN 'SL' THEN 'Solat Women Hospital'
WHEN 'VH' THEN 'Vom Christian Hospital'
WHEN 'ZK' THEN 'JUTH, Comprehensive Health Centre, Zamko'
WHEN 'MG' THEN 'General Hospital, Mangu'
WHEN 'FA' THEN 'Faith Alive Foundation'
WHEN 'RC' THEN 'COCIN Hospital Rehabilitation Centre, Mangu'
WHEN 'LG' THEN 'General Hospital, Langtang'
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
from patient a LEFT JOIN (select * from clinicaleval order by visitdate DESC) b
ON (a.pepid=b.pepid)
LEFT JOIN (select * from laboratory where tests='CD4' order by visitdate DESC) c
ON (a.pepid=c.pepid)
LEFT JOIN (select * from pharmacy order by visitdate DESC) d
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
echo mysqli_error($con);

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
	$PatientAddress->addChild("LGACode", $infondr['LGACode']);
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
   </body>
   </html>