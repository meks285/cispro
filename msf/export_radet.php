<?php
// Create your database query
$con=mysql_connect("localhost","root","Nu66et%%");
$db_selected = mysql_select_db('apindb', $con);
// Set Year Variable
$rad_year=$_POST['radyear'];
$query = "(select a.pepid,a.hospitalid,a.sex,a.age,period_diff(date_format(now(), '%Y%m'), date_format(a.dob, '%Y%m')) as AgeMonths,MIN(b.visitdate) as 'ARTStartDate', MAX(b.visitdate) as 'LastVisitDate',period_diff(date_format(MAX(b.visitdate), '%Y%m'), date_format(MIN(b.visitdate), '%Y%m')) as 'MonthsofARVRefill',REPLACE (b.drugname1,'/','-') as 'RegimenatARTStart',CASE WHEN b.drugname1 like '%/r%' then 2 ELSE 1 END as 'RegimenLineatARTStart',REPLACE (c.drugname1,'/','-') as 'CurrentRegimen',CASE WHEN c.drugname1 like '%/r%' then 2 ELSE 1 END as 'CurrentRegimenLine',c.pregyn,l.v_load as v_load,l.lab_date as lab_date,CASE 
WHEN lower(patientdied)='art' OR lower(patientdied)='pre-art'  THEN 'DEAD'
WHEN lower(patienttransout)='art' OR lower(patienttransout)='pre-art'  THEN 'Transferred Out' ELSE '' END as 'CurrentARTStatus'
from patient a JOIN pharmacy b
ON (a.pepid=b.pepid)
JOIN (SELECT t1.pepid, t1.visitdate,t1.drugname1,t1.pregyn
FROM pharmacy t1
WHERE t1.visitdate = (SELECT t2.visitdate
                 FROM pharmacy t2
                 WHERE t2.pepid = t1.pepid            
                 ORDER BY t2.visitdate DESC
                 LIMIT 1)
and t1.drugname1!='') c
ON (b.pepid=c.pepid)
LEFT JOIN (select pepid,MAX(visitdate) as lab_date, results as v_load from laboratory where tests='Viral Load' group by pepid) l
ON(a.pepid=l.pepid)
WHERE b.drugname1!='' 
group by a.pepid
having EXTRACT(YEAR from MIN(b.visitdate))='$rad_year'
into outfile 'c:/RADET/radet_excel.csv' 
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '\"'
LINES TERMINATED BY '\n')";

// Execute the database query
$result = mysql_query($query);
$pointer_cluster='option_failure';
if ($result){
	header("Refresh: 0;url=RADET_Reports.php?radet_year=$rad_year&status=finite");
	$pointer_cluster='';
	//exit;
	}
	elseif($pointer_cluster=='option_failure'){
	header("Refresh: 0;url=RADET_Reports.php?radet_year=$rad_year&fstatus=infinite");
	exit;		
	}
?>