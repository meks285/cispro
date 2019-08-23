SET FOREIGN_KEY_CHECKS=0;

LOAD DATA LOCAL INFILE 'C:\\CIS_PRO_FILES\\MERGE_CIS\\indv\\audit_trail.csv' 
INTO TABLE apindb.audit_trail
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(Server_Name, User_Name, cur_timestamp, Table_Name, Column_Name,Old_Value,New_Value,action);

SET FOREIGN_KEY_CHECKS=1;