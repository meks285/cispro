<?php

$conn = @mysql_connect('localhost','root','Nu66et%%');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('apindb', $conn);

?>