<?php
session_start();
if(isset($_POST['facname'])) {$facname = $_POST['facname'];} else {$facname = "";}
if(isset($_POST['faccode'])) {$faccode = $_POST['faccode'];} else {$faccode = "";}
if(isset($_POST['reportdate'])) {$reportdate = $_POST['reportdate'];} else {$reportdate = "";}
if(isset($_POST['reportstart'])) {$reportstart = $_POST['reportstart'];} else {$reportstart = "";}
if(isset($_POST['reportend'])) {$reportend = $_POST['reportend'];} else {$reportend = "";}
if(isset($_POST['m51'])) {$m51 = $_POST['m51'];} else {$m51 = "";}
if(isset($_POST['m121'])) {$m121 = $_POST['m121'];} else {$m121 = "";}
if(isset($_POST['m171'])) {$m171 = $_POST['m171'];} else {$m171 = "";}
if(isset($_POST['f51'])) {$f51 = $_POST['f51'];} else {$f51 = "";}
if(isset($_POST['f121'])) {$f121 = $_POST['f121'];} else {$f121 = "";}
if(isset($_POST['f171'])) {$f171 = $_POST['f171'];} else {$f171 = "";}
if(isset($_POST['m52'])) {$m52 = $_POST['m52'];} else {$m52 = "";}
if(isset($_POST['m122'])) {$m122 = $_POST['m122'];} else {$m122 = "";}
if(isset($_POST['m172'])) {$m172 = $_POST['m172'];} else {$m172 = "";}
if(isset($_POST['f52'])) {$f52 = $_POST['f52'];} else {$f52 = "";}
if(isset($_POST['f122'])) {$f122 = $_POST['f122'];} else {$f122 = "";}
if(isset($_POST['f172'])) {$f172 = $_POST['f172'];} else {$f172 = "";}
if(isset($_POST['m53'])) {$m53 = $_POST['m53'];} else {$m53 = "";}
if(isset($_POST['m123'])) {$m123 = $_POST['m123'];} else {$m123 = "";}
if(isset($_POST['m173'])) {$m173 = $_POST['m173'];} else {$m173 = "";}
if(isset($_POST['f53'])) {$f53 = $_POST['f53'];} else {$f53 = "";}
if(isset($_POST['f123'])) {$f123 = $_POST['f123'];} else {$f123 = "";}
if(isset($_POST['f173'])) {$f173 = $_POST['f173'];} else {$f173 = "";}
if(isset($_POST['m54'])) {$m54 = $_POST['m54'];} else {$m54 = "";}
if(isset($_POST['m124'])) {$m124 = $_POST['m124'];} else {$m124 = "";}
if(isset($_POST['m174'])) {$m174 = $_POST['m174'];} else {$m174 = "";}
if(isset($_POST['f54'])) {$f54 = $_POST['f54'];} else {$f54 = "";}
if(isset($_POST['f124'])) {$f124 = $_POST['f124'];} else {$f124 = "";}
if(isset($_POST['f174'])) {$f174 = $_POST['f174'];} else {$f174 = "";}
if(isset($_POST['m55'])) {$m55 = $_POST['m55'];} else {$m55 = "";}
if(isset($_POST['m125'])) {$m125 = $_POST['m125'];} else {$m125 = "";}
if(isset($_POST['m175'])) {$m175 = $_POST['m175'];} else {$m175 = "";}
if(isset($_POST['f55'])) {$f55 = $_POST['f55'];} else {$f55 = "";}
if(isset($_POST['f125'])) {$f125 = $_POST['f125'];} else {$f125 = "";}
if(isset($_POST['f175'])) {$f175 = $_POST['f175'];} else {$f175 = "";}
if(isset($_POST['m56'])) {$m56 = $_POST['m56'];} else {$m56 = "";}
if(isset($_POST['m126'])) {$m126 = $_POST['m126'];} else {$m126 = "";}
if(isset($_POST['m176'])) {$m176 = $_POST['m176'];} else {$m176 = "";}
if(isset($_POST['f56'])) {$f56 = $_POST['f56'];} else {$f56 = "";}
if(isset($_POST['f126'])) {$f126 = $_POST['f126'];} else {$f126 = "";}
if(isset($_POST['f176'])) {$f176 = $_POST['f176'];} else {$f176 = "";}
if(isset($_POST['m57'])) {$m57 = $_POST['m57'];} else {$m57 = "";}
if(isset($_POST['m127'])) {$m127 = $_POST['m127'];} else {$m127 = "";}
if(isset($_POST['m177'])) {$m177 = $_POST['m177'];} else {$m177 = "";}
if(isset($_POST['f57'])) {$f57 = $_POST['f57'];} else {$f57 = "";}
if(isset($_POST['f127'])) {$f127 = $_POST['f127'];} else {$f127 = "";}
if(isset($_POST['f177'])) {$f177 = $_POST['f177'];} else {$f177 = "";}
if(isset($_POST['m58'])) {$m58 = $_POST['m58'];} else {$m58 = "";}
if(isset($_POST['m128'])) {$m128 = $_POST['m128'];} else {$m128 = "";}
if(isset($_POST['m178'])) {$m178 = $_POST['m178'];} else {$m178 = "";}
if(isset($_POST['f58'])) {$f58 = $_POST['f58'];} else {$f58 = "";}
if(isset($_POST['f128'])) {$f128 = $_POST['f128'];} else {$f128 = "";}
if(isset($_POST['f178'])) {$f178 = $_POST['f178'];} else {$f178 = "";}
if(isset($_POST['m59'])) {$m59 = $_POST['m59'];} else {$m59 = "";}
if(isset($_POST['m129'])) {$m129 = $_POST['m129'];} else {$m129 = "";}
if(isset($_POST['m179'])) {$m179 = $_POST['m179'];} else {$m179 = "";}
if(isset($_POST['f59'])) {$f59 = $_POST['f59'];} else {$f59 = "";}
if(isset($_POST['f129'])) {$f129 = $_POST['f129'];} else {$f129 = "";}
if(isset($_POST['f179'])) {$f179 = $_POST['f179'];} else {$f179 = "";}
if(isset($_POST['m510'])) {$m510 = $_POST['m510'];} else {$m510 = "";}
if(isset($_POST['m1210'])) {$m1210 = $_POST['m1210'];} else {$m1210 = "";}
if(isset($_POST['m1710'])) {$m1710 = $_POST['m1710'];} else {$m1710 = "";}
if(isset($_POST['f510'])) {$f510 = $_POST['f510'];} else {$f510 = "";}
if(isset($_POST['f1210'])) {$f1210 = $_POST['f1210'];} else {$f1210 = "";}
if(isset($_POST['f1710'])) {$f1710 = $_POST['f1710'];} else {$f1710 = "";}
if(isset($_POST['m511'])) {$m511 = $_POST['m511'];} else {$m511 = "";}
if(isset($_POST['m1211'])) {$m1211 = $_POST['m1211'];} else {$m1211 = "";}
if(isset($_POST['m1711'])) {$m1711 = $_POST['m1711'];} else {$m1711 = "";}
if(isset($_POST['f511'])) {$f511 = $_POST['f511'];} else {$f511 = "";}
if(isset($_POST['f1211'])) {$f1211 = $_POST['f1211'];} else {$f1211 = "";}
if(isset($_POST['f1711'])) {$f1711 = $_POST['f1711'];} else {$f1711 = "";}
if(isset($_POST['m512'])) {$m512 = $_POST['m512'];} else {$m512 = "";}
if(isset($_POST['m1212'])) {$m1212 = $_POST['m1212'];} else {$m1212 = "";}
if(isset($_POST['m1712'])) {$m1712 = $_POST['m1712'];} else {$m1712 = "";}
if(isset($_POST['f512'])) {$f512 = $_POST['f512'];} else {$f512 = "";}
if(isset($_POST['f1212'])) {$f1212 = $_POST['f1212'];} else {$f1212 = "";}
if(isset($_POST['f1712'])) {$f1712 = $_POST['f1712'];} else {$f1712 = "";}
if(isset($_POST['m513'])) {$m513 = $_POST['m513'];} else {$m513 = "";}
if(isset($_POST['m1213'])) {$m1213 = $_POST['m1213'];} else {$m1213 = "";}
if(isset($_POST['m1713'])) {$m1713 = $_POST['m1713'];} else {$m1713 = "";}
if(isset($_POST['f513'])) {$f513 = $_POST['f513'];} else {$f513 = "";}
if(isset($_POST['f1213'])) {$f1213 = $_POST['f1213'];} else {$f1213 = "";}
if(isset($_POST['f1713'])) {$f1713 = $_POST['f1713'];} else {$f1713 = "";}
if(isset($_POST['m514'])) {$m514 = $_POST['m514'];} else {$m514 = "";}
if(isset($_POST['m1214'])) {$m1214 = $_POST['m1214'];} else {$m1214 = "";}
if(isset($_POST['m1714'])) {$m1714 = $_POST['m1714'];} else {$m1714 = "";}
if(isset($_POST['f514'])) {$f514 = $_POST['f514'];} else {$f514 = "";}
if(isset($_POST['f1214'])) {$f1214 = $_POST['f1214'];} else {$f1214 = "";}
if(isset($_POST['f1714'])) {$f1714 = $_POST['f1714'];} else {$f1714 = "";}

if(isset($_POST['m1215'])) {$m1215 = $_POST['m1215'];} else {$m1215 = "";}
if(isset($_POST['m1715'])) {$m1715 = $_POST['m1715'];} else {$m1715 = "";}

if(isset($_POST['m1216'])) {$m1216 = $_POST['m1216'];} else {$m1216 = "";}
if(isset($_POST['m1716'])) {$m1716 = $_POST['m1716'];} else {$m1716 = "";}

if(isset($_POST['m1217'])) {$m1217 = $_POST['m1217'];} else {$m1217 = "";}
if(isset($_POST['m1717'])) {$m1717 = $_POST['m1717'];} else {$m1717 = "";}

if(isset($_POST['m1218'])) {$m1218 = $_POST['m1218'];} else {$m1218 = "";}
if(isset($_POST['m1718'])) {$m1718 = $_POST['m1718'];} else {$m1718 = "";}

if(isset($_POST['m1219'])) {$m1219 = $_POST['m1219'];} else {$m1219 = "";}
if(isset($_POST['m1719'])) {$m1719 = $_POST['m1719'];} else {$m1719 = "";}

if(isset($_POST['m1220'])) {$m1220 = $_POST['m1220'];} else {$m1220 = "";}
if(isset($_POST['m1720'])) {$m1720 = $_POST['m1720'];} else {$m1720 = "";}

if(isset($_POST['m1221'])) {$m1221 = $_POST['m1221'];} else {$m1221 = "";}
if(isset($_POST['m1721'])) {$m1721 = $_POST['m1721'];} else {$m1721 = "";}

if(isset($_POST['m1222'])) {$m1222 = $_POST['m1222'];} else {$m1222 = "";}
if(isset($_POST['m1722'])) {$m1722 = $_POST['m1722'];} else {$m1722 = "";}

if(isset($_POST['m1223'])) {$m1223 = $_POST['m1223'];} else {$m1223 = "";}
if(isset($_POST['m1723'])) {$m1723 = $_POST['m1723'];} else {$m1723 = "";}



$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$sql="INSERT INTO crrirf(facname,faccode,reportdate,reportstart,reportend,m121,m171,f121,f171,m122,m172,
f122,f172,m123,m173,f123,f173,m124,m174,f124,f174,m125,m175,f125,
f175,m126,m176,f126,f176,m127,m177,f127,f177,m128,m178,f128,f178,
m129,m179,f129,f179,m1210,m1710,f1210,f1710,m1211,m1711,f1211,
f1711,m1212,m1712,f1212,f1712,m1213,m1713,f1213,f1713,m1214,m1714,
f1214,f1714,m1215,m1715,m1216,m1716,m1217,m1717,m1218,m1718,m1219,m1719,m1220,m1720,m1221,m1721,m1222,m1722,m1223,m1723)
VALUES('$facname','$faccode','$reportdate','$reportstart','$reportend','$m121','$m171','$f121','$f171','$m122','$m172',
'$f122','$f172','$m123','$m173','$f123','$f173','$m124','$m174','$f124','$f174','$m125','$m175','$f125',
'$f175','$m126','$m176','$f126','$f176','$m127','$m177','$f127','$f177','$m128','$m178','$f128','$f178',
'$m129','$m179','$f129','$f179','$m1210','$m1710','$f1210','$f1710','$m1211','$m1711','$f1211',
'$f1711','$m1212','$m1712','$f1212','$f1712','$m1213','$m1713','$f1213','$f1713','$m1214','$m1714',
'$f1214','$f1714','$m1215','$m1715','$m1216','$m1716','$m1217','$m1717','$m1218','$m1718','$m1219','$m1719','$m1220','$m1720','$m1221','$m1721','$m1222','$m1722','$m1223','$m1723'
)";


var_dump($sql);

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);

?>