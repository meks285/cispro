SELECT Server_Name, User_Name, cur_timestamp, Table_Name, Column_Name,Old_Value,New_Value,action 
FROM audit_trail
INTO OUTFILE 'C:/CIS_PRO_FILES/MERGE_CIS/indv/audit_trail.csv'
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n';