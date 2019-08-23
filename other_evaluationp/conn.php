<?php

$conn = @mysqli_connect('localhost','root','Nu66et%%','apindb');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}

?>