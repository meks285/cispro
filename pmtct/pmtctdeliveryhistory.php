<?php

include_once("db_conx.php");


class MyClass{
    public function GetUserInformation(){
		global $db;
$query = "SELECT * FROM `pmtct_delivery`";

        $stmt = $db->query($query);
        $info = $stmt->fetch(PDO::FETCH_ASSOC);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<style type="text/css">
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:850px;
padding:14px;
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: italic;
font-weight: bold;
color: #09C;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;

border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
li input
{
    position: absolute;
    margin-left: -40px;
    margin-top: 5px;
}
.sidebar {
   width: 165px;
   height: 100px;
   position: fixed;
   left: 0px;
   top: 300px;
   border: 1px solid black;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 1px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
display:block;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
table
{
	width:100%;
border-collapse:collapse;
}
 
th
{
	font: bold 12px "Trebuchet MS", Verdana, Arial, Helvetica,
	sans-serif;
	color: #6D929B;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:50px;
border:1px solid black;
}
td {
	font: italic 11px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
}

  .btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #47a447;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  background-image: none;
  
}
 #status2{
	 padding:10px;
	 background-color:#21D54C;
	 color:#FFFFFF;
	 font:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	 font-size:18px;
	 font-weight:bold;
 }
 #error{
	 padding:10px;
	 background-color:#EF2323;
	 color:#FFFFFF;
	 font:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	 font-size:18px;
	 font-weight:bold;
 }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PMTCT EMR</title>
</head>
<h1 style="font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #FFFFFF;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px 355681;    border-radius: 0 10px 0 10px;    background: #355681;">PMTCT EMR - PMTCT DELIVERY &nbsp;&nbsp;&nbsp;</h1>
<body>

<fieldset>
<legend style="font-weight:bold; font-size:11px">ACTIONS</legend>
<a href="pmtctdelivery.php?pmtctid=<?php echo $_GET['pmtctid']; ?>&username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px"><< GO BACK</a>

</fieldset>
<?php 
if(isset($_GET['pmtctid']) && $_GET['pmtctid'] !=""){
			$pmtctid = preg_replace('#[^a-z0-9-]#i', '', $_GET['pmtctid']);
			
		}
$pregnancy_history_tpals='';
$result = "SELECT * FROM `pmtct_delivery` where `pmtct_id` = '$pmtctid'";
$stmt = $db->query($result);
$num=$stmt->rowCount();

echo "<table class=\"table table-bordered table-hover\" rules=\"all\" border='1'>
<tr>
<th></th>
<th>PMTCT ID</th>
<th>Delivery site</th>
<th>Delivery date</th>
<th>Outcome of current Pregnancy</th>
<th>ART given to mother at delivery</th>
<th>Number of infants in this pregnancy</th>

</tr>";
if($num > 0){
while($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
	  if($row['art_given_to_mother_at_delivery_yes'] != 'undefined'){
		  $art_given_to_mother_at_delivery_yes = "<br/>&nbsp;&nbsp;".$row['art_given_to_mother_at_delivery_yes'];
	  }else {
		  $art_given_to_mother_at_delivery_yes ='';
	  }
	   if($row['status_of_birth_alive_weight'] != "" ){
		  $status_of_birth_alive_weight = "<br/>Weight: ".$row['status_of_birth_alive_weight']."kg";
	  }else {
		  $status_of_birth_alive_weight ='';
	  }
	  if($row['status_of_birth_alive_lenght'] != "" ){
		  $status_of_birth_alive_lenght = "<br/>Lenght: ".$row['status_of_birth_alive_lenght']."cm";
	  }else {
		  $status_of_birth_alive_lenght ='';
	  }
	  if($row['status_of_birth_alive_head_circumf'] != "" ){
		  $status_of_birth_alive_head_circumf = "<br/>Head Circumference: ".$row['status_of_birth_alive_head_circumf']."";
	  }else {
		  $status_of_birth_alive_head_circumf ='';
	  }
	   if($row['status_of_birth_alive_gest_age'] != "" ){
		  $status_of_birth_alive_gest_age = "<br/>Gest. Age at delivery: ".$row['status_of_birth_alive_gest_age']."Wks";
	  }else {
		  $status_of_birth_alive_gest_age ='';
	  }
	  if($row['status_of_birth_alive_apgar'] != "" ){
		  $status_of_birth_alive_apgar = "<br/> APGAR score@ 5mins: ".$row['status_of_birth_alive_apgar']."";
	  }else {
		  $status_of_birth_alive_apgar ='';
	  }
	  
	  if($row['hospitalname'] != "" ){
		  $hospitalname = "<br/>Name: ".$row['hospitalname']."";
	  }else {
		  $hospitalname ='';
	  }
	  
	  if($row['clinicname'] != "" ){
		  $clinicname = "<br/>Name: ".$row['clinicname']."";
	  }else {
		  $clinicname ='';
	  }
	  
  echo "<tr>";
  echo '<td><a href="pmtctdeliverybrowse.php?pmtctid=' . $row['pmtct_id'] . '&id='.$row['id'].'&username='.$_GET['username'].'">Browse</a></td>';
  echo "<td>" . $row['pmtct_id'] . "</td>";
  echo "<td>" 
  . $row['delivery_site'] . 
  " ".$hospitalname.
  " ".$clinicname.
  "</td>";
  echo "<td>" . $row['delivery_date'] . "</td>";
  echo "<td> Term: " 
  . $row['noofterms'] . 
  "<br/>Premature: ". $row['noofpremature'] .
  "<br/>Abortion: ". $row['noofabortion'] .
  "<br/>Live birth: ". $row['nooflivebirth'] .
  "<br/>Surviving: ". $row['noofsurviving'] .
  
  "</td>";
  echo "<td>" . $row['art_given_to_mother_at_delivery'] . " ".$art_given_to_mother_at_delivery_yes.
  "<br/>REGIMEN/ART COMBINATION: ".$row['art_status_regimen_combination'].
  "</td>";
  echo "<td>" . $row['no_of_infants_in_this_pregnancy'] . "</td>";
  
  echo "</tr>";
	  
  }
}else{
	echo "<tr>";
	echo "<td><h3>No records found!</h3></td>";
	echo "</tr>";
}
echo "</table>";
echo "<br>";

echo "TOTAL PMTCT DELIVERY: ".$num;

?>

</body>
</html>