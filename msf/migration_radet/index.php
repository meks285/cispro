<?php
ob_start();
include '../../mandate_/lidh.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


class MyClass{
    public function GetUserInformation(){include '../../mandate_/lidh.php';

	$table = 'migration_data';
if(mysqli_num_rows(mysqli_query($con,"SHOW TABLES LIKE '".$table."'"))==1){
	
	$results = mysqli_query($con,"SELECT `pepid`, `hospitalid`, `sex`, `age`, `AgeMonths`, `ARTStartDate`, `LastVisitDate`, `MonthsofARVRefill`, `RegimenatARTStart`, `RegimenLineatARTStart`, `CurrentRegimen`, `CurrentRegimenLine`, `pregyn`, `v_load`, `lab_date`, `CurrentARTStatus` FROM `migration_data`");
	$info = mysqli_fetch_assoc($results);
	return $info;
	
	} 
    
	else {
		
		$results = mysqli_query($con,"CREATE TABLE `migration_data` (
 `pepid` varchar(45) CHARACTER SET utf8 NOT NULL,
 `hospitalid` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
 `sex` varchar(6) CHARACTER SET utf8 NOT NULL DEFAULT '',
 `age` int(3) DEFAULT NULL,
 `AgeMonths` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
 `ARTStartDate` date DEFAULT NULL,
 `LastVisitDate` date DEFAULT NULL,
 `MonthsofARVRefill` double(17,0) DEFAULT NULL,
 `RegimenatARTStart` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
 `RegimenLineatARTStart` varchar(14) CHARACTER SET utf8 DEFAULT NULL,
 `CurrentRegimen` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
 `CurrentRegimenLine` varchar(14) CHARACTER SET utf8 DEFAULT NULL,
 `pregyn` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
 `v_load` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
 `lab_date` date DEFAULT NULL,
 `CurrentARTStatus` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
 PRIMARY KEY (`pepid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1");
		$info = 'No Facility Set';
			
	}
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysqli_error($con);
?>
<?php
//load the database configuration file
include 'dbConfig.php';

if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'RADET CSV has been Loaded successfully.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Please upload a valid RADET CSV file.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CIS Pro - Migration [RADET]</title>
<link rel="stylesheet" href="css/normalize.css">    
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./bootstrap.min.css">
  <script src="./jquery.min.js"></script>
  <script src="./bootstrap.min.js"></script>
  <style type="text/css">
    .panel-heading a{float: right;}
    #importFrm{margin-bottom: 20px;display: none;}
    #importFrm input[type=file] {display: inline;}
  </style>

<h1 align="center" style="color:#7F3FAA">MIGRATION USING RADET</h1>
</head>

<body>


    <ul>
      <li><a href="../../reports.php?username=migration" style="font-weight:bold">REPORTS</a></li>
   </ul>
<div class="container">
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Import RADET CSV</a>
        </div>
        <div class="panel-body">
            <form action="importData.php" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
        </div>
    </div>
</div>


    <?php
	$con=mysqli_connect("localhost","root","Nu66et%%","apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT `pepid`, `hospitalid`, `sex`, STR_TO_DATE(CONCAT((YEAR(NOW()) - age),'-06-01'), '%Y-%m-%d') as dob, `AgeMonths`, `ARTStartDate`, `LastVisitDate`, `MonthsofARVRefill`, REPLACE(`RegimenatARTStart`,'-','/') as RegimenatARTStart, `RegimenLineatARTStart`,
 REPLACE(`CurrentRegimen`,'-','/') as CurrentRegimen, `CurrentRegimenLine`, `pregyn`, `v_load`, `lab_date`, `CurrentARTStatus` FROM `migration_data`");

$num=$result->num_rows;

echo "<table class='imagetable' align='center'>
<tr>
<th>PATIENT ID</th>
<th>HOSPITAL ID</th>
<th>SEX</th>
<th>DOB</th>
<th>AGEMONTHS</th>
<th>ART START DATE</th>
<th>LAST VISIT DATE</th>
<th>MONTHS OF ARV REFILL</th>
<th>REGIMEN AT ART START</th>
<th>REGIMEN LINE AT ART START</th>
<th>CURRENT REGIMEN</th>
<th>CURRENT REGIMEN LINE</th>
<th>PREGNANCY STATUS</th>
<th>CURRENT VIRAL LOAD</th>
<th>DATE OF CURRENT VIRAL LOAD</th>
<th>CURRENT ART STATUS</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
	 	  if( strlen($row['pepid'])==10){
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a style="color:blue;"  href="../../Newpatient.php?pepid=' . $row['pepid'] . '&amp;v_load=' . $row['v_load'] . '&amp;lab_date=' . $row['lab_date'] . '&amp;pregyn=' . $row['pregyn'] . '&amp;dob=' . $row['dob'] . '&amp;visitdate=' . $row['ARTStartDate'] . '&amp;sex=' . $row['sex'] . '&amp;ARTStartDate=' . $row['ARTStartDate'] . '&amp;RegimenatARTStart=' . $row['RegimenatARTStart'] . '&amp;LastVisitDate=' . $row['LastVisitDate'] . '&amp;CurrentRegimen=' . $row['CurrentRegimen'] . '">' . $row['pepid'] . '</a></td>';
  echo "<td>" . $row['hospitalid'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['AgeMonths'] . "</td>";
  echo "<td>" . $row['ARTStartDate'] . "</td>";
  echo "<td>" . $row['LastVisitDate'] . "</td>";
  echo "<td>" . $row['MonthsofARVRefill'] . "</td>";
  echo "<td>" . $row['RegimenatARTStart'] . "</td>";
  echo "<td>" . $row['RegimenLineatARTStart'] . "</td>";
  echo "<td>" . $row['CurrentRegimen'] . "</td>";
  echo "<td>" . $row['CurrentRegimenLine'] . "</td>";
  echo "<td>" . $row['pregyn'] . "</td>";
  echo "<td>" . $row['v_load'] . "</td>";
  echo "<td>" . $row['lab_date'] . "</td>";
  echo "<td>" . $row['CurrentARTStatus'] . "</td>";
  echo "</tr>";
		  }
		  else{
  echo "<tr>";
  echo '<td style="color:blue; padding: 3px;"><a style="color:blue;"  href="../../Newpedpatient.php?pepid=' . $row['pepid'] . '&amp;v_load=' . $row['v_load'] . '&amp;hospitalid=' . $row['hospitalid'] . '&amp;lab_date=' . $row['lab_date'] . '&amp;pregyn=' . $row['pregyn'] . '&amp;dob=' . $row['dob'] . '&amp;visitdate=' . $row['ARTStartDate'] . '&amp;sex=' . $row['sex'] . '&amp;ARTStartDate=' . $row['ARTStartDate'] . '&amp;RegimenatARTStart=' . $row['RegimenatARTStart'] . '&amp;LastVisitDate=' . $row['LastVisitDate'] . '&amp;CurrentRegimen=' . $row['CurrentRegimen'] . '">' . $row['pepid'] . '</a></td>';
  echo "<td>" . $row['hospitalid'] . "</td>";
  echo "<td>" . $row['sex'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['AgeMonths'] . "</td>";
  echo "<td>" . $row['ARTStartDate'] . "</td>";
  echo "<td>" . $row['LastVisitDate'] . "</td>";
  echo "<td>" . $row['MonthsofARVRefill'] . "</td>";
  echo "<td>" . $row['RegimenatARTStart'] . "</td>";
  echo "<td>" . $row['RegimenLineatARTStart'] . "</td>";
  echo "<td>" . $row['CurrentRegimen'] . "</td>";
  echo "<td>" . $row['CurrentRegimenLine'] . "</td>";
  echo "<td>" . $row['pregyn'] . "</td>";
  echo "<td>" . $row['v_load'] . "</td>";
  echo "<td>" . $row['lab_date'] . "</td>";
  echo "<td>" . $row['CurrentARTStatus'] . "</td>";
  echo "</tr>";
		  }
  }
echo "</table>";
echo "<br>";

mysqli_close($con);

session_write_close();
?>

<br />

    </div>
  <!-- end .container --></div>
</body>
</html>
