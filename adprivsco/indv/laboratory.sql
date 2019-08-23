SELECT labregno, visitdate, artstatus, baselineorrepeat, resultstatus,tests,results,reportedby,reportdate,checkedby,checkdate,pepid,clinicianname,additionaltests 
FROM laboratory
INTO OUTFILE 'C:/CIS_PRO_FILES/MERGE_CIS/indv/laboratory.csv'
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n';