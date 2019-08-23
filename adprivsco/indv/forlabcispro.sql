SELECT pepid, specdate, AlkaPhos, BaselineFolUp, CD4Count, CD4Pct, CholeTot, Creatin, Glucose, HBsAg, Hemoglob, LabTech, LymphPct, PhysicDate, Physician, Platelet, RNAVload, Triglyc, WBC, labregno, artstatus, additionaltests 
FROM forlabcispro
INTO OUTFILE 'C:/CIS_PRO_FILES/MERGE_CIS/indv/forlabcispro.csv'
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n';