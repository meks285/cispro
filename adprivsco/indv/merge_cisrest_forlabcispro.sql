SET FOREIGN_KEY_CHECKS=0;

LOAD DATA LOCAL INFILE 'C:\\CIS_PRO_FILES\\MERGE_CIS\\indv\\forlabcispro.csv' 
INTO TABLE apindb.forlabcispro
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(pepid, specdate, AlkaPhos, BaselineFolUp, CD4Count, CD4Pct, CholeTot, Creatin, Glucose, HBsAg, Hemoglob, LabTech, LymphPct, PhysicDate, Physician, Platelet, RNAVload, Triglyc, WBC, labregno, artstatus, additionaltests);

SET FOREIGN_KEY_CHECKS=1;