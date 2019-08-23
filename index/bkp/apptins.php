<?php
if(isset($_POST['purpose'])) {
$purpose = implode(", ", $_POST['purpose']);
} else {
$purpose = "";
}

include('database_connection.php');
$query = "INSERT into appointment(pepid, visitdate, nextapptdate, purpose) VALUES('$_POST[pepid]','$_POST[visitdate]','$_POST[nextapptdate]','$purpose')";
$result = mysql_query($query);

?>