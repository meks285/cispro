SELECT newregimen, newregimendate, reason, other, pepid 
FROM subswitch
INTO OUTFILE 'C:/CIS_PRO_FILES/MERGE_CIS/indv/subswitch.csv'
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n';