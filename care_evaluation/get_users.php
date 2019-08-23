<?php

include 'conn.php';
$rs = mysql_query("select * from art_adherence WHERE pepid='$_GET[pepid]' ");
$result = array();
while($row = mysql_fetch_object($rs)){
	array_push($result, $row);
}

echo json_encode($result);

?>