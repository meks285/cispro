<?php 
require("../connect.php");

$sqltransf="update patient set surname=upper(surname), othernames=upper(othernames);";
$resultstransf=mysqli_query($con,$sqltransf);

echo "Records transformed to Upper Case: " . mysqli_affected_rows($con);
echo "<br/>";
echo "<br/>";
echo "Close this Window and refresh the main page to confirm...";
?>