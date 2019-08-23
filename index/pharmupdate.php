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
if(isset($_POST['tbdrug'])) {$tbdrug=$_POST['tbdrug'];}else {$tbdrug="";}
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

if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:3;./patsummary.php?pepid=".$pepid);  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Updated";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Recorded to the Server </br> Continuing...</span></p> </br> ";

}
else {
	$link_address = 'javascript:history.go(-1)';
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Update";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> Data could not be saved OR No Changes was made </br> Please try again </br> <a href='".$link_address."'>BACK</a> </span></p> </br> ";
}


     //============================================================

   ?>
   <?php if(!mysqli_query($con,"delete from pharmacy where drugname1='' and drugname2='' and oidrug='' and tbdrug='' and otherdrugs=''")) ?>
   </body>
   </html>