<title>Processing_Insert_main</title>
</head>

<body>

<?php

// =============== code for Connection_SQLi ==============================      

$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
//check connection
if(mysqli_connect_errno())
{
echo "Cannot connect to mysqli:" . mysqli_connect_error();
}

// =============== code for Submit_input type ================================

if(isset($_POST['submit']))
{
  // ====== code for subject_checkbox ================  
$tests = $_POST['tests'];
$results = $_POST['results'];
$pepid = $_POST['pepid'];
$how_many=count($tests);

for($i=0;$i<$how_many;$i++)
{
    echo "You Selected: " .$tests[$i]."<br/>";
if( !empty($results) ) {
    if(!mysqli_query($con,"INSERT INTO laboratory(labregno,visitdate,resultstatus,artstatus,baselineorrepeat,tests,results,reportedby,reportdate,checkedby,pepid,additionaltests,clinicianname) 
VALUES('$_POST[labregno]','$_POST[visitdate]','$_POST[resultstatus]','$_POST[artstatus]','$_POST[baselineorrepeat]','$tests[$i]','$results[$i]','$_POST[reportedby]','$_POST[reportdate]','$_POST[checkedby]','$_POST[pepid]','$_POST[additionaltests]','$_POST[clinicianname]')"))

    {
        echo "Not Recorded ".mysqli_error($con);
    echo "<br/>";
	}
	else{
    echo "Record Added for subject<br/>";
	}
}
}
     //============================================================
if(strlen($pepid)==10){
header('Location: ./patsummary.php?pepid='.$pepid);
}
else{
header('Location: ./patpedsummary.php?pepid='.$pepid);
	}
   }

   ?>
   <?php if(!mysqli_query($con,"delete from laboratory where results=''")) ?>
   <?php if(!mysqli_query($con,"insert into visit(visittype,visitdate,pepid) values('Laboratory Order/Result','$_POST[visitdate]','$_POST[pepid]')")) ?>
   </body>
   </html>