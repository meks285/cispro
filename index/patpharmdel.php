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

$_SESSION=$_GET;
$pepid = $_SESSION['pepid'];
$visitdate = $_SESSION['visitdate'];
// =============== code for Submit_input type ================================
$query1="SELECT * from pharmacy where pepid='$pepid' and visitdate='$visitdate'";
			$result = mysqli_query($con,$query1);


if (mysqli_num_rows($result)==1){
	echo "Good";
		header("refresh:3;");  
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Pharmacy record Found </br> Commencing the delete process...</span></p> </br> ";

     //============================================================

if(!mysqli_query($con,"DELETE from pharmacy where pepid='$pepid' and visitdate='$visitdate'"))

    {
if ( mysqli_affected_rows($con) >= 1 )
{ 
		$link_address = 'javascript:history.go(-1)';
echo "Success: " . mysqli_affected_rows($con)." Row(s),Deleted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Removed From Pharmacy Table </br> <a href='".$link_address."'>BACK</a></span></p> </br> ";

}
}
}

     //============================================================


     //============================================================

   ?>
   </body>
   </html>