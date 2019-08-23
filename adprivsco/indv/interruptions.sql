SELECT interruptstatus, interrdate, reason, restartdate, pepid 
FROM interruptions
INTO OUTFILE 'C:/CIS_PRO_FILES/MERGE_CIS/indv/interruptions.csv'
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n';