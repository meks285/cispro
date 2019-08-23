<title>Processing_Insert_main</title>
</head>

<body>

<?php
$_SESSION=$_POST;


// =============== code for Connection_SQLi ==============================      

include './mandate_/lidh.php';
//check connection
if(mysqli_connect_errno())
{
echo "Cannot connect to mysqli:" . mysqli_connect_error();
}
if(isset($_POST['visitschd'])) {$visitschd =$_POST['visitschd '];}else {$visitschd  = "";}
if(isset($_POST['cotrimadherenceb'])) {$cotrimadherenceb =$_POST['cotrimadherenceb '];}else {$cotrimadherenceb  = "";}
if(isset($_POST['tbdose'])) {$tbdose =$_POST['tbdose'];}else {$tbdose = "";}
if(isset($_POST['tbadherencea'])) {$tbadherencea=$_POST['tbadherencea'];}else {$tbadherencea = "";}
if(isset($_POST['artduration'])) {$artduration=$_POST['artduration'];}else {$artduration = "";}
if(isset($_POST['weight'])) {$weight=$_POST['weight'];}else {$weight = "";}
if(isset($_POST['height'])) {$height=$_POST['height'];}else {$height = "";}
if(isset($_POST['bp'])) {$bp=$_POST['bp'];}else {$bp = "";}
if(isset($_POST['eddpmtct'])) {$eddpmtct=$_POST['eddpmtct'];}else {$eddpmtct = "";}
if(isset($_POST['fp'])) {$fp=$_POST['fp'];}else {$fp = "";}
if(isset($_POST['functionalstatus'])) {$functionalstatus=$_POST['functionalstatus'];}else {$functionalstatus = "";}
if(isset($_POST['whostage'])) {$whostage=$_POST['whostage'];}else {$whostage = "";}
if(isset($_POST['tbstatus'])) {$tbstatus=$_POST['tbstatus'];}else {$tbstatus = "";}
if(isset($_POST['otheroi'])) {$otheroi=$_POST['otheroi'];}else {$otheroi = "";}
if(isset($_POST['sideeff'])) {$sideeff=$_POST['sideeff'];}else {$sideeff = "";}
if(isset($_POST['regimen'])) {$regimen=$_POST['regimen'];}else {$regimen = "";}
if(isset($_POST['regadherencea'])) {$regadherencea=$_POST['regadherencea'];}else {$regadherencea = "";}
if(isset($_POST['regadherenceb'])) {$regadherenceb=$_POST['regadherenceb'];}else {$regadherenceb = "";}
if(isset($_POST['cotrimdose'])) {$cotrimdose=$_POST['cotrimdose'];}else {$cotrimdose = "";}
if(isset($_POST['cotrimadherencea'])) {$cotrimadherencea=$_POST['cotrimadherencea'];}else {$cotrimadherencea = "";}
if(isset($_POST['inhdose'])) {$inhdose=$_POST['inhdose'];}else {$inhdose = "";}
if(isset($_POST['inhadherencea'])) {$inhadherencea=$_POST['inhadherencea'];}else {$inhadherencea = "";}
if(isset($_POST['inhadherenceb'])) {$inhadherenceb=$_POST['inhadherenceb'];}else {$inhadherenceb = "";}
if(isset($_POST['otherdrugs'])) {$otherdrugs=$_POST['otherdrugs'];}else {$otherdrugs = "";}
if(isset($_POST['vlscheduled'])) {$vlscheduled=$_POST['vlscheduled'];}else {$vlscheduled = "";}
if(isset($_POST['cd4scheduled'])) {$cd4scheduled=$_POST['cd4scheduled'];}else {$cd4scheduled = "";}
if(isset($_POST['othertests'])) {$othertests=$_POST['othertests'];}else {$othertests = "";}
if(isset($_POST['recommendation'])) {$recommendation=$_POST['recommendation'];}else {$recommendation = "";}
if(isset($_POST['nextapptdate'])) {$nextapptdate=$_POST['nextapptdate'];}else {$nextapptdate = "";}
if(isset($_POST['clinician'])) {$clinician=$_POST['clinician'];}else {$clinician = "";}
if(isset($_POST['visitdate'])) {$visitdate=$_POST['visitdate'];}else {$visitdate = "";}
if(isset($_POST['otherregimen'])) {$otherregimen=$_POST['otherregimen'];}else {$otherregimen = "";}
if(isset($_POST['cd4value'])) {$cd4value=$_POST['cd4value'];}else {$cd4value = "";}
if(isset($_POST['vlvalue'])) {$vlvalue=$_POST['vlvalue'];}else {$vlvalue = "";}
if(isset($_POST['otherdiag'])) {$otherdiag=$_POST['otherdiag'];}else {$otherdiag = "";}
if(isset($_POST['tbadherenceb'])) {$tbadherenceb=$_POST['tbadherenceb'];}else {$tbadherenceb = "";}
if(isset($_POST['pepid'])) {$pepid=$_POST['pepid'];}else {$pepid = "";}

// =============== code for Submit_input type ================================

    if(!mysqli_query($con,"insert into clinicaleval(visitschd,artduration,weight,height,bp,eddpmtct,fp,functionalstatus,whostage,tbstatus,otheroi,sideeff,
regimen,regadherencea,regadherenceb,cotrimdose,cotrimadherencea,cotrimadherenceb,inhdose,inhadherencea,inhadherenceb,otherdrugs,vlscheduled,cd4scheduled,othertests,recommendation,nextapptdate,
clinician,pepid,visitdate,tbdose,tbadherencea,tbadherenceb,otherregimen,cd4value,vlvalue,otherdiag)
values('$visitschd','$artduration','$weight','$height','$bp','$eddpmtct','$fp','$functionalstatus','$whostage',
'$tbstatus','$otheroi','$sideeff','$regimen','$regadherencea','$regadherenceb','$cotrimdose','$cotrimadherencea','$cotrimadherenceb','$inhdose','inhadherencea','$inhadherenceb',
'$otherdrugs','$vlscheduled','$cd4scheduled','$othertests','$recommendation','$nextapptdate','$clinician','$_POST[pepid]','$visitdate','$tbdose','$tbadherencea','$tbadherenceb','$otherregimen','$cd4value','$vlvalue','$otherdiag')"))

    {
        echo "Not Recorded".mysqli_error($con);
    }
	
if(strlen($pepid)==10){
//header('Location: ./patsummary.php?pepid='.$pepid);
	if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:2;./patsummary.php?pepid=".$pepid);  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Inserted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Recorded to the Server </br> Continuing...</span></p> </br> ";
if(!mysqli_query($con,"insert into visit(visittype,visitdate,pepid) values('Clinical Evaluation','$_POST[visitdate]','$_POST[pepid]')"));
}
else {
	$link_address = 'javascript:history.go(-1)';
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Inserted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> Data could not be saved </br> Please try again </br> <a href='".$link_address."'>BACK</a> </span></p> </br> ";
}
}
else{
//header('Location: ./patpedsummary.php?pepid='.$pepid);
	if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:3;./patpedsummary.php?pepid=".$pepid);  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Inserted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Recorded to the Server </br> Continuing...</span></p> </br> ";
if(!mysqli_query($con,"insert into visit(visittype,visitdate,pepid) values('Clinical Evaluation','$_POST[visitdate]','$_POST[pepid]')"));
}
else {
	$link_address = 'javascript:history.go(-1)';
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Inserted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> Data could not be saved </br> Please try again </br> <a href='".$link_address."'>BACK</a> </span></p> </br> ";
}

	}
//header('Location: ./carecard2view.php');

     //============================================================
session_write_close();
   ?>
   </body>
   </html>