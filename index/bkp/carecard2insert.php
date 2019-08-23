<title>Processing_Insert_main</title>
</head>

<body>

<?php
session_start();
$_SESSION=$_POST;


// =============== code for Connection_SQLi ==============================      

$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
//check connection
if(mysqli_connect_errno())
{
echo "Cannot connect to mysqli:" . mysqli_connect_error();
}
if(isset($_POST['visitschd'])) {
$visitschd =$_POST['visitschd '];
}else {
$visitschd  = "";
}
if(isset($_POST['cotrimadherenceb'])) {
$cotrimadherenceb =$_POST['cotrimadherenceb '];
}else {
$cotrimadherenceb  = "";
}
if(isset($_POST['tbdose'])) {
$tbdose =$_POST['tbdose'];
}else {
$tbdose = "";
}
if(isset($_POST['tbadherencea'])) {
$tbadherencea=$_POST['tbadherencea'];
}else {
$tbadherencea = "";
}
if(isset($_POST['tbadherenceb'])) {
$tbadherenceb=$_POST['tbadherenceb'];
}else {
$tbadherenceb = "";
}

// =============== code for Submit_input type ================================

    if(!mysqli_query($con,"insert into clinicaleval(visitschd,artduration,weight,height,bp,eddpmtct,fp,functionalstatus,whostage,tbstatus,otheroi,sideeff,
regimen,regadherencea,regadherenceb,cotrimdose,cotrimadherencea,cotrimadherenceb,inhdose,inhadherencea,inhadherenceb,otherdrugs,vlscheduled,cd4scheduled,othertests,recommendation,nextapptdate,
clinician,pepid,visitdate,tbdose,tbadherencea,tbadherenceb,otherregimen,cd4value,vlvalue,otherdiag)
values('$visitschd','$_POST[artduration]','$_POST[weight]','$_POST[height]','$_POST[bp]','$_POST[eddpmtct]','$_POST[fp]','$_POST[functionalstatus]','$_POST[whostage]',
'$_POST[tbstatus]','$_POST[otheroi]','$_POST[sideeff]','$_POST[regimen]','$_POST[regadherencea]','$_POST[regadherenceb]','$_POST[cotrimdose]','$_POST[cotrimadherencea]','$cotrimadherenceb','$_POST[inhdose]','$_POST[inhadherencea]','$_POST[inhadherenceb]',
'$_POST[otherdrugs]','$_POST[vlscheduled]','$_POST[cd4scheduled]','$_POST[othertests]','$_POST[recommendation]','$_POST[nextapptdate]','$_POST[clinician]','$_POST[pepid]','$_POST[visitdate]','$tbdose','$tbadherencea','$tbadherenceb','$_POST[otherregimen]','$_POST[cd4value]','$_POST[vlvalue]','$_POST[otherdiag]')"))

    {
        echo "Not Recorded".mysqli_error($con);
    }
//header('Location: ./carecard2view.php');

     //============================================================
session_write_close();
   ?>
   <?php if(!mysqli_query($con,"insert into visit(visittype,visitdate,pepid) values('Clinical Evaluation',CURDATE(),'$_POST[pepid]')")) ?>
   </body>
   </html>