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
$query1="SELECT * from lab_results_pivot where pepid='$_POST[pepid]' and visitdate='$_POST[visitdate]'";
			$result = mysqli_query($con,$query1);



if (mysqli_num_rows($result)>=1){
	$query9="delete from laboratory where pepid='$_POST[pepid]' and visitdate='$_POST[visitdate]'";
			$result9 = mysqli_query($con,$query9);

if(isset($_POST['submit']))
{
  // ====== code for subject_checkbox ================  
if(isset($_POST['resultstatus'])) {$resultstatus=$_POST['resultstatus'];}else {$resultstatus="";}
if(isset($_POST['artstatus'])) {$artstatus=$_POST['artstatus'];}else {$artstatus="";}
if(isset($_POST['baselineorrepeat'])) {$baselineorrepeat=$_POST['baselineorrepeat'];}else {$baselineorrepeat="";}
if(isset($_POST['tests'])) {$tests=$_POST['tests'];}else {$tests="";}
if(isset($_POST['results'])) {$results=$_POST['results'];}else {$results="";}
if(isset($_POST['reportedby'])) {$reportedby=$_POST['reportedby'];}else {$reportedby="";}
if(isset($_POST['reportdate'])) {$reportdate=$_POST['reportdate'];}else {$reportdate="";}
if(isset($_POST['checkedby'])) {$checkedby=$_POST['checkedby'];}else {$checkedby="";}
if(isset($_POST['additionaltests'])) {$additionaltests=$_POST['additionaltests'];}else {$additionaltests="";}
if(isset($_POST['clinicianname'])) {$clinicianname=$_POST['clinicianname'];}else {$clinicianname="";}
$pepid = $_POST['pepid'];
$how_many=count($tests);

for($i=0;$i<$how_many;$i++)
{
   // echo "You Selected: " .$tests[$i]."<br/>";
if( !empty($results) ) {
    if(!mysqli_query($con,"INSERT INTO laboratory(labregno,visitdate,resultstatus,artstatus,baselineorrepeat,tests,results,reportedby,reportdate,checkedby,pepid,additionaltests,clinicianname) 
VALUES('$_POST[labregno]','$_POST[visitdate]','$resultstatus','$artstatus','$baselineorrepeat','$tests[$i]','$results[$i]','$reportedby','$reportdate','$checkedby','$_POST[pepid]','$_POST[additionaltests]','$_POST[clinicianname]')"))

    {
    //    echo "Not Recorded ".mysqli_error($con);
   // echo "<br/>";
	}
	else{
   // echo "Record Added for subject<br/>";
	}
}
}
     //============================================================
if(strlen($pepid)==10){
//header('Location: ./patsummary.php?pepid='.$pepid);
	if ( mysqli_affected_rows($con) >= 1 )
{
	header("refresh:2;./patsummary.php?pepid=".$pepid);  
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
	header("refresh:3;./patpedsummary.php?pepid=".$pepid);  
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
}
   ?>
   <?php if(!mysqli_query($con,"delete from laboratory where results=''")) ?>
   </body>
   </html>