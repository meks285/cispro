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
if(isset($_POST['visitid'])) {$visitid=$_POST['visitid'];}else {$visitid="";}
if(isset($_POST['visitdate'])) {$visitdate=$_POST['visitdate'];}else {$visitdate="";}
if(isset($_POST['pepid'])) {$pepid=$_POST['pepid'];}else {$pepid="";}
if(isset($_POST['visittype'])) {$visittype=$_POST['visittype'];}else {$visittype="";}

$_SESSION=$_POST;
// =============== code for Submit_input type ================================

    if(!mysqli_query($con,"UPDATE visit 
SET pepid='$pepid', visitdate='$visitdate', visittype='$visittype'
WHERE visitid='$visitid'"))
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
   </body>
   </html>