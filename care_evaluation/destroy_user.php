<?php

$id = intval($_REQUEST['id']);

include 'conn.php';

$sql = "delete from art_adherence where id=$id";
@mysql_query($sql);
echo json_encode(array('success'=>true));
?>