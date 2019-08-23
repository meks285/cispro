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

$_SESSION=$_POST;
$pepid = $_POST['pepid'];
// =============== code for Submit_input type ================================

    if(!mysqli_query($con,"INSERT INTO pharmacy (pepid, visitdate, patienttype,visittype, pregyn,refillyn,subswitch,tbdrug,tbqty,tbduration,oidrug,oiqty,oiduration,dispensedate,
otherdrugs,otherquantity,otherduration,orderedby,orderdate,dispensedby,pharmdispensedate,pickedupby,pickupdate,counseledby,counseldate,errordrugname,errornature,errorconsequence,errorrepdate, drugname1,drugdose1,drugno1,drugsource1,regduration1,drugname2,drugdose2,drugno2,drugsource2,regduration2,drugname3,drugdose3,drugno3,drugsource3,regduration3,drugname4,drugdose4,drugno4,drugsource4,regduration4,otherdrugs1,otherquantity1,otherduration1,otherdrugs2,otherquantity2,otherduration2,weight,height,pharmregno,nextapptdate)
VALUES
('$_POST[pepid]','$_POST[visitdate]','$_POST[patienttype]','$_POST[visittype]','$pregyn','$refillyn',
'$subswitch','$_POST[tbdrug]',
'$_POST[tbqty]','$_POST[tbduration]','$_POST[oidrug]','$_POST[oiqty]','$_POST[oiduration]','$_POST[pharmdispensedate]',
'$_POST[otherdrugs]','$_POST[otherquantity]','$_POST[otherduration]','$_POST[orderedby]','$_POST[orderdate]','$_POST[dispensedby]','$_POST[pharmdispensedate]','$_POST[pickedupby]',
'$_POST[pickupdate]','$_POST[counseledby]','$_POST[counseldate]','$_POST[errordrugname]','$_POST[errornature]','$_POST[errorconsequence]','$_POST[errorrepdate]','$_POST[drugcode1a]','$_POST[drugcode1b]','$_POST[drugcode1c]','$_POST[drugcode1d]','$_POST[regduration1]','$_POST[drugcode2a]','$_POST[drugcode2b]','$_POST[drugcode2c]','$_POST[drugcode2d]','$_POST[regduration2]','$_POST[drugcode3a]','$_POST[drugcode3b]','$_POST[drugcode3c]','$_POST[drugcode3d]','$_POST[regduration3]','$_POST[drugcode4a]','$_POST[drugcode4b]','$_POST[drugcode4c]','$_POST[drugcode4d]','$_POST[regduration4]','$_POST[otherdrugs1]','$_POST[otherquantity1]','$_POST[otherduration1]','$_POST[otherdrugs2]','$_POST[otherquantity2]','$_POST[otherduration2]','$_POST[weight]','$_POST[height]','$_POST[pharmregno]','$_POST[nextapptdate]')"))

    {
        echo "Not Recorded".mysqli_error($con);
    }

if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:3;./patsummary.php?pepid=".$pepid);  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Inserted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Recorded to the Server </br> Continuing...</span></p> </br> ";

if(!mysqli_query($con,"insert into visit(visittype,visitdate,pepid) values('Pharmacy Order','$_POST[visitdate]','$_POST[pepid]')"));
}
else {
	$link_address = 'javascript:history.go(-1)';
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Inserted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> Data could not be saved </br> Please try again </br> <a href='".$link_address."'>BACK</a> </span></p> </br> ";
}


     //============================================================

   ?>
   <?php if(!mysqli_query($con,"delete from pharmacy where drugname1='' and drugname2='' and oidrug='' and tbdrug='' and otherdrugs=''")) ?>
   </body>
   </html>