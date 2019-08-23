SET FOREIGN_KEY_CHECKS=0;

LOAD DATA LOCAL INFILE 'C:\\CIS_PRO_FILES\\MERGE_CIS\\indv\\interruptions.csv' 
INTO TABLE apindb.interruptions
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(interruptstatus, interrdate, reason, restartdate, pepid);

SET FOREIGN_KEY_CHECKS=1;