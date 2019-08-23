<?php
session_start();
$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="UPDATE crrirf
 SET f121='$_POST[f121]',
 f122='$_POST[f122]',
 f123='$_POST[f123]',
 f124='$_POST[f124]',
 f125='$_POST[f125]',
 f126='$_POST[f126]',
 f127='$_POST[f127]',
 f128='$_POST[f128]',
 f129='$_POST[f129]',
 f1210='$_POST[f1210]',
 f1211='$_POST[f1211]',
 f1212='$_POST[f1212]',
 f1213='$_POST[f1213]',
 f1214='$_POST[f1214]',
 f1215='$_POST[f1215]',
 f1216='$_POST[f1216]',
 f1217='$_POST[f1217]',
 f1218='$_POST[f1218]',
 f1219='$_POST[f1219]',
 f1220='$_POST[f1220]',
 f1221='$_POST[f1221]',
 f1222='$_POST[f1222]',
 f1223='$_POST[f1223]'
 WHERE reportstart='$_POST[reportstart]' AND reportend='$_POST[reportend]'";


var_dump($sql);

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);

?>