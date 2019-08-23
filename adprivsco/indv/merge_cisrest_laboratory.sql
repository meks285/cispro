SET FOREIGN_KEY_CHECKS=0;

LOAD DATA LOCAL INFILE 'C:\\CIS_PRO_FILES\\MERGE_CIS\\indv\\laboratory.csv' 
INTO TABLE apindb.laboratory
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(labregno, visitdate, artstatus, baselineorrepeat, resultstatus,tests,results,reportedby,reportdate,checkedby,checkdate,pepid,clinicianname,additionaltests);

SET FOREIGN_KEY_CHECKS=1;