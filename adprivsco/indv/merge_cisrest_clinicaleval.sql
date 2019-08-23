SET FOREIGN_KEY_CHECKS=0;

LOAD DATA LOCAL INFILE 'C:\\CIS_PRO_FILES\\MERGE_CIS\\indv\\clinicaleval.csv' 
INTO TABLE apindb.clinicaleval
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(visitschd, artduration, weight, height, bp, bpdiast, eddpmtct, fp, functionalstatus, whostage, tbstatus, otheroi, sideeff, regimen, regimen2, regimen3, regimen4, otherregimen, regadherencea, cotrimdose, cotrimadherencea, inhdose, inhadherencea, regadherenceb, cotrimadherenceb, inhadherenceb, tbdose, tbadherencea, tbadherenceb, otherdrugs, vlscheduled, cd4scheduled, cd4value, vlvalue, othertests, otherdiag, recommendation, visitdate, nextapptdate, clinician, pepid);

SET FOREIGN_KEY_CHECKS=1;