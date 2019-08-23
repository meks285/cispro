<title>Processing_Insert_main</title>
</head>

<body>

<?php
// =============== code for Connection_SQLi ==============================      

include '../mandate_/lidh.php';
//check connection
if(mysqli_connect_errno())
{
echo "Cannot connect to mysqli:" . mysqli_connect_error();
}

$_SESSION=$_GET;
$pepid = $_SESSION['pepid'];
// =============== code for Submit_input type ================================
$query1="SELECT * from patient where pepid='$pepid'";
			$result = mysqli_query($con,$query1);



if (mysqli_num_rows($result)==1){
		header("refresh:3;");  
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Patient record Found </br> Commencing the delete process...</span></p> </br> ";

     //============================================================

    if(!mysqli_query($con,"DELETE from visit where pepid='$pepid'"))

    {
if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:3;");  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Removed From Visit Table </br> Continuing Delete...</span></p> </br> ";

}
else {
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> No Visit Record Found </br> Continuing... </br> </span></p> </br> ";
}
    }


     //============================================================

    if(!mysqli_query($con,"DELETE from clinicaleval where pepid='$pepid'"))

    {
if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:3;");  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Removed From Clinical Evaluation Table </br> Continuing Delete...</span></p> </br> ";

}
else {
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> No Clinical Evaluation Record Found </br> Continuing... </span></p> </br> ";
}
    }


     //============================================================

    if(!mysqli_query($con,"DELETE from laboratory where pepid='$pepid'"))

    {
if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:3;");  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Removed From Laboratory Table </br> Continuing Delete...</span></p> </br> ";

}
else {
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> No Laboratory Record Found </br> Continuing... </span></p> </br> ";
}
    }


     //============================================================

     //============================================================

    if(!mysqli_query($con,"DELETE from pharmacy where pepid='$pepid'"))

    {
if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:3;");  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Removed From Pharmacy Table </br> Continuing Delete...</span></p> </br> ";

}
else {
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> No Pharmacy Record Found </br> Continuing... </span></p> </br> ";
}
    }


     //============================================================
     //============================================================

    if(!mysqli_query($con,"DELETE from appointment where pepid='$pepid'"))

    {
if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:3;");  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Removed From Appointment Table </br> Continuing Delete...</span></p> </br> ";

}
else {
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> No Appointment Record Found </br> Continuing... </span></p> </br> ";
}
    }


     //============================================================

     //============================================================

    if(!mysqli_query($con,"DELETE from interruptions where pepid='$pepid'"))

    {
if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:3;");  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Removed From Interruptions Table </br> Continuing Delete...</span></p> </br> ";

}
else {
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> No Interruption Record Found </br> Continuing... </span></p> </br> ";
}
    }


     //============================================================
     //============================================================

    if(!mysqli_query($con,"DELETE from subswitch where pepid='$pepid'"))

    {
if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:3;");  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Removed From Subswitch Table </br> Continuing Delete...</span></p> </br> ";

}
else {
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> No Sub Switch Record Found </br> Continuing... </span></p> </br> ";
}
    }


     //============================================================
     //============================================================

    if(!mysqli_query($con,"DELETE from patient where pepid='$pepid'"))

    {
if ( mysqli_affected_rows($con) >= 1 )
{
	$link_address = 'javascript:history.go(-1)';
echo "Success: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Patient Has been Successfull removed </br> Ending Delete...</br><a href='".$link_address."'>BACK</a> </span></p> </br> ";

}
else {
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> No Patient </br> Returning... </span></p> </br> ";
}
    }


     //============================================================

}
else {
	$link_address = 'javascript:history.go(-1)';
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> Patient Deleted </br></br> <a href='".$link_address."'>BACK</a> </span></p> </br> ";
	}

 
 
 
 
 
     //============================================================

   ?>
   </body>
   </html>