SELECT pepid, visitdate, nextapptdate, purpose
FROM appointment
INTO OUTFILE 'C:/CIS_PRO_FILES/MERGE_CIS/indv/appointment.csv'
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n';