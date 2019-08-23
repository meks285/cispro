		include './mandate_/lidh2.php';
		$sql="SELECT dispensedate as DateRegimenStarted,DATE_FORMAT(dispensedate,'%d') as DateRegimenStartedDD,DATE_FORMAT(dispensedate,'%c') as DateRegimenStartedMM,DATE_FORMAT(dispensedate,'%Y') as DateRegimenStartedYYYY FROM pharmacy where pepid='$row[pepid]' and lower(oidrug) like '%ctx%' order by visitdate ASC LIMIT 1";
		$result=mysqli_query($con,$sql);
		$info1=mysqli_fetch_assoc($result);
