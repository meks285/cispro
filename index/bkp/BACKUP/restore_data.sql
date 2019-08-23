LOAD DATA LOCAL INFILE 'C:\\FMImp\\Demographics.csv' 
INTO TABLE apindb.patient 
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\r\n' 
IGNORE 1 ROWS
(pepid, othernames,surname,@enroldate,@hivposdate,sex,@dob,educationallevel,maritalstatus,jobstatus,drugallergies,hospitalization,riskfactors,currentlypregnant,lastcd4,@lastcd4date,@prevdurationofcarefromdate,prevarvexp,serviceentry,pebp,peskin,peheight,pepulse,petemp,peweight,whostage,plan,@nextappointmentdate,symptomsreview)
SET enroldate = STR_TO_DATE(@enroldate, '%d/%m/%Y'), 
hivposdate = STR_TO_DATE(@hivposdate, '%d/%m/%Y'), 
dob = STR_TO_DATE(@dob, '%d/%m/%Y'), 
prevdurationofcarefromdate = STR_TO_DATE(@prevdurationofcarefromdate, '%d/%m/%Y'), 
nextappointmentdate = STR_TO_DATE(@nextappointmentdate, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\FMImp\\Pharmacy.csv' 
INTO TABLE apindb.pharmacy 
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\r\n' 
IGNORE 1 ROWS
(pepid, @visitdate,weight,drugdose1,drugname1,drugno1,drugsource1,drugdose2,drugname2,drugno2,drugsource2,drugdose3,drugname3,drugno3,drugsource3,drugdose4,drugname4,drugno4,drugsource4,otherdrugs,orderedby,dispensedby,@pharmdispensedate,@nextapptdate)
SET visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y'), 
pharmdispensedate = STR_TO_DATE(@pharmdispensedate, '%d/%m/%Y'), 
nextapptdate = STR_TO_DATE(@nextapptdate, '%d/%m/%Y');



LOAD DATA LOCAL INFILE 'C:\\FMImp\\Laboratory.csv' 
INTO TABLE apindb.forlabcispro 
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\r\n' 
IGNORE 1 ROWS
(pepid, @specdate,AlkaPhos,BaselineFolUp,CD4Count,CD4Pct,CholeTot,Creatin,Glucose,HBsAg,Hemoglob,LabTech,LymphPct,@PhysicDate,Physician,Platelet,RNAVload,Triglyc,WBC)
SET specdate = STR_TO_DATE(@specdate, '%d/%m/%Y'), 
PhysicDate = STR_TO_DATE(@PhysicDate, '%d/%m/%Y');



LOAD DATA LOCAL INFILE 'C:\\FMImp\\Entry.csv' 
INTO TABLE apindb.expentry_temp 
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\r\n' 
IGNORE 1 ROWS
(pepid, lastcd4,@lastcd4date,@dateartstart,prevarvexp,facilitytransf,whostage,@visitdate)
SET lastcd4date = STR_TO_DATE(@lastcd4date, '%d/%m/%Y'), visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y'), 
dateartstart = STR_TO_DATE(@dateartstart, '%d/%m/%Y');


UPDATE patient
SET lastCD4 = (SELECT lastCD4 FROM expentry_temp WHERE pepid = patient.pepid),
lastCD4 = (SELECT lastCD4 FROM expentry_temp WHERE pepid = patient.pepid),
lastcd4date = (SELECT lastcd4date FROM expentry_temp WHERE pepid = patient.pepid),
dateartstart = (SELECT dateartstart FROM expentry_temp WHERE pepid = patient.pepid),
prevarvexp = (SELECT prevarvexp FROM expentry_temp WHERE pepid = patient.pepid),
facilitytransf = (SELECT facilitytransf FROM expentry_temp WHERE pepid = patient.pepid),
visitdate = (SELECT visitdate FROM expentry_temp WHERE pepid = patient.pepid),
whostage = (SELECT whostage FROM expentry_temp WHERE pepid = patient.pepid);

LOAD DATA LOCAL INFILE 'C:\\FMImp\\Visit.csv' 
INTO TABLE apindb.clinicaleval
FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\r\n' 
IGNORE 1 ROWS
(pepid, @visitdate,weight,height,bp,bpdiast,eddpmtct,fp,tbstatus,otheroi,regimen,regimen2,regimen3,regimen4,regadherencea,cotrimdose,otherdrugs,recommendation,@nextapptdate,clinician)
SET visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y'),
nextapptdate = STR_TO_DATE(@nextapptdate, '%d/%m/%Y');