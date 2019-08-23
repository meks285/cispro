<?php

$pepid = $_REQUEST['pepid'];
$service = $_REQUEST['service'];
$comments = $_REQUEST['comments'];
$date_of_service = $_REQUEST['date_of_service'];
$date_of_service = date('Y-m-d',strtotime($date_of_service));
if ($date_of_service=='1970-01-01'){
	$date_of_service=NULL;
}
else{
	$date_of_service;
}

include 'conn.php';

$sql = "insert into art_adherence(pepid,service,date_of_service,comments) values('$pepid','$service','$date_of_service','$comments')";
@mysqli_query($conn,$sql);
echo json_encode(array(
	'id' => mysqli_insert_id(),
	'pepid' => $pepid,
	'service' => $service,
	'date_of_service' => $date_of_service,
	'comments' => $comments
));

?>