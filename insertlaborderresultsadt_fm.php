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




// =============== code for Submit_input type ================================
$query1="SELECT * from lab_results_pivot_test2 where id='$_POST[id]'";
			$result = mysqli_query($con,$query1);



if (mysqli_num_rows($result)>=1 && isset($_POST['submit'])){

	$query9="update forlabcispro SET visitdate='$_POST[visitdate]' where id='$_POST[id]'";
			$result9 = mysqli_query($con,$query9);
$pepid = $_POST['pepid'];
     //============================================================
if(strlen($pepid)==10){
//header('Location: ./patsummary.php?pepid='.$pepid);
	if ( mysqli_affected_rows($con) >= 1 )
{
		{
	include './mandate_/lidhX.php';
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$_POST[username]','Update - FM Pro Laboratory.: $_POST[pepid] - $_POST[visitdate]')";
$result=mysqli_query($con,$sql);
}
	header("refresh:2;./patsummary.php?pepid=".$pepid."&login_id=".$_POST['username']);  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Inserted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Recorded to the Server </br> Continuing...</span></p> </br> ";

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
			{
	include './mandate_/lidhX.php';
$sql="INSERT into AUDIT_TRAIL (server_name,user_name,action) VALUES('$_SERVER[REMOTE_ADDR]','$_POST[username]','Update - FM Pro Laboratory.: $_POST[pepid] - $_POST[visitdate]')";
$result=mysqli_query($con,$sql);
}
	header("refresh:3;./patpedsummary.php?pepid=".$pepid."&login_id=".$_POST['username']);  
echo "Success: " . mysqli_affected_rows($con)." Row(s),Inserted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: #003366;'> Data Successfully Recorded to the Server </br> Continuing...</span></p> </br> ";
}
else {
	$link_address = 'javascript:history.go(-1)';
echo "Failure: " . mysqli_affected_rows($con)." Row(s),Inserted";
echo "<p style='text-align: center;'><span style='font-size: large; font-family: georgia,palatino; color: RED;'> Data could not be saved </br> Please try again </br> <a href='".$link_address."'>BACK</a> </span></p> </br> ";

}

	}
}
   ?>
   <?php if(!mysqli_query($con,"delete from laboratory where results=''")) ?>
   </body>
   </html>