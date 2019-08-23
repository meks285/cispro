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

// =============== code for Submit_input type ================================
$hivmode = $_POST['hivmode'];
$careentrypoint = $_POST['careentrypoint'];
$priorart = $_POST['priorart'];
    if(!mysqli_query($con,"INSERT INTO patient (pepid, uniqueid, hospitalid,surname, othernames,sex,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate,hivposdate,hivmode,careentrypoint,priorart)
VALUES
('$_POST[pepid]','$_POST[uniqueid]','$_POST[hospitalno]','$_POST[surname]','$_POST[othernames]','$_POST[sex]',
'$_POST[lga]','$_POST[facilityname]',
'$_POST[ancno]','$_POST[dob]','$_POST[maritalstatus]','$_POST[educationallevel]','$_POST[jobstatus]','$_POST[address]',
'$_POST[addrwardvillage]','$_POST[addrtown]','$_POST[addrlga]','$_POST[phoneno]','$_POST[nokname]','$_POST[nokaddr]','$_POST[nokwardvillage]','$_POST[noktown]',
'$_POST[nokstate]','$_POST[nokrelationship]','$_POST[nokphoneno]',CURDATE(),'$_POST[hivposdate]','$hivmode','$careentrypoint','$priorart')"))

    {
        echo "Not Recorded".mysqli_error($con);
    }
header('Location: ./newpatientiniteval.php');

     //============================================================
session_write_close();
   ?>
   <?php if(!mysqli_query($con,"insert into visit(visittype,visitdate,pepid) values('Patient Registration',CURDATE(),'$_POST[pepid]')")) ?>
   </body>
   </html>