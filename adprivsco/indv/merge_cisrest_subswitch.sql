SET FOREIGN_KEY_CHECKS=0;

LOAD DATA LOCAL INFILE 'C:\\CIS_PRO_FILES\\MERGE_CIS\\indv\\subswitch.csv' 
INTO TABLE apindb.subswitch
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(newregimen, newregimendate, reason, other, pepid);

SET FOREIGN_KEY_CHECKS=1;