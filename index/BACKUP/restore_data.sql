USE apindb;
SET FOREIGN_KEY_CHECKS=0;
LOAD DATA LOCAL INFILE 'C:\\FMImp\\Demographics.csv' 
INTO TABLE apindb.patient 
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"' ESCAPED BY "\\"
LINES TERMINATED BY '\r\n' 
IGNORE 1 ROWS
(pepid, othernames,surname,@enroldate,@hivposdate,sex,@dob,educationallevel,maritalstatus,jobstatus,drugallergies,hospitalization,riskfactors,currentlypregnant,lastcd4,@lastcd4date,@prevdurationofcarefromdate,prevarvexp,serviceentry,pebp,peskin,peheight,pepulse,petemp,peweight,whostage,planarvtherapy,@nextappointmentdate,symptomsreview,currentmedications,plan,enrollin,serviceentry)
SET enroldate = STR_TO_DATE(@enroldate, '%d/%m/%Y'), 
hivposdate = STR_TO_DATE(@hivposdate, '%d/%m/%Y'), 
dob = STR_TO_DATE(@dob, '%d/%m/%Y'), 
prevdurationofcarefromdate = STR_TO_DATE(@prevdurationofcarefromdate, '%d/%m/%Y'), 
nextappointmentdate = STR_TO_DATE(@nextappointmentdate, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\FMImp\\Pharmacy.csv' 
INTO TABLE apindb.pharmacy 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' ESCAPED BY "\\"
LINES TERMINATED BY '\r\n' 
IGNORE 1 ROWS
(pepid, @visitdate,weight,drugdose1,drugname1,drugno1,drugsource1,drugdose2,drugname2,drugno2,drugsource2,drugdose3,drugname3,drugno3,drugsource3,drugdose4,drugname4,drugno4,drugsource4,otherdrugs,orderedby,dispensedby,@pharmdispensedate,@nextapptdate)
SET visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y'), 
pharmdispensedate = STR_TO_DATE(@pharmdispensedate, '%d/%m/%Y'), 
nextapptdate = STR_TO_DATE(@nextapptdate, '%d/%m/%Y');



LOAD DATA LOCAL INFILE 'C:\\FMImp\\Laboratory.csv' 
INTO TABLE apindb.forlabcispro 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' ESCAPED BY "\\"
LINES TERMINATED BY '\r\n' 
IGNORE 1 ROWS
(pepid, @specdate,AlkaPhos,BaselineFolUp,CD4Count,CD4Pct,CholeTot,Creatin,Glucose,HBsAg,Hemoglob,LabTech,LymphPct,@PhysicDate,Physician,Platelet,RNAVload,Triglyc,WBC)
SET specdate = STR_TO_DATE(@specdate, '%d/%m/%Y'), 
PhysicDate = STR_TO_DATE(@PhysicDate, '%d/%m/%Y');



LOAD DATA LOCAL INFILE 'C:\\FMImp\\Entry.csv' 
INTO TABLE apindb.expentry_temp 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' ESCAPED BY "\\"
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
hivposdate = (SELECT visitdate FROM expentry_temp WHERE pepid = patient.pepid AND (patient.hivposdate='' OR patient.hivposdate IS NULL)),
whostage = (SELECT whostage FROM expentry_temp WHERE pepid = patient.pepid);

LOAD DATA LOCAL INFILE 'C:\\FMImp\\Visit.csv' 
INTO TABLE apindb.clinicaleval
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' ESCAPED BY "\\"
LINES TERMINATED BY '\r\n' 
IGNORE 1 ROWS
(pepid, @visitdate,weight,height,bp,bpdiast,eddpmtct,fp,tbstatus,otheroi,regimen,regimen2,regimen3,regimen4,regadherencea,cotrimdose,otherdrugs,recommendation,@nextapptdate,clinician)
SET visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y'),
nextapptdate = STR_TO_DATE(@nextapptdate, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\FMImp\\FMPIMP\\DemographicsP.csv' 
INTO TABLE apindb.patient 
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"' ESCAPED BY "\\"
LINES TERMINATED BY '\r\n' 
IGNORE 1 ROWS
(@enroldate,pepid,surname, othernames,sex,@dob,agemonth,age,pastmedicalhist,pimmunecomplete,prevarvexp,prevfacilityname,ppreviousarvexp,drugallergies,pastmedicalhist,ppreviousarvpmtct,trtmtinterruptionyn,@trtmtinterdate,trtmtinterduration,interradhcode,petemp,pepulse,peweight,pedcircumf,pedmuac,pegenappearance,gerespiratory,peskin,geneurological,pecardiovascular,peheadeye,gegastrointestinal,pedpeglands,pegenitalia,gementalstatus,peadditional,assessment,whostage,planarvtherapy,regimenothers,pedadditional,nextappointment,@nextappointmentdate,Clinicianname,priorart,firstartregimen,@dateartstart,peheightatart)
SET enroldate = STR_TO_DATE(@enroldate, '%d/%m/%Y'), 
dob = STR_TO_DATE(@dob, '%d/%m/%Y'), 
dateartstart = STR_TO_DATE(@dateartstart, '%d/%m/%Y'), 
trtmtinterdate = STR_TO_DATE(@trtmtinterdate, '%d/%m/%Y'), 
nextappointmentdate = STR_TO_DATE(@nextappointmentdate, '%d/%m/%Y');



LOAD DATA LOCAL INFILE 'C:\\FMImp\\FMPIMP\\PharmacyP.csv' 
INTO TABLE apindb.pharmacy 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' ESCAPED BY "\\"
LINES TERMINATED BY '\r\n' 
IGNORE 1 ROWS
(pepid, @visitdate,weight,newregimenyn,drugdose1,drugname1,drugno1,drugsource1,drugdose2,drugname2,drugno2,drugsource2,drugdose3,drugname3,drugno3,drugsource3,drugdose4,drugname4,drugno4,drugsource4,otherdrugs,orderedby,dispensedby,@pharmdispensedate,@nextapptdate)
SET visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y'), 
pharmdispensedate = STR_TO_DATE(@pharmdispensedate, '%d/%m/%Y'), 
nextapptdate = STR_TO_DATE(@nextapptdate, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\FMImp\\FMPIMP\\LaboratoryP.csv' 
INTO TABLE apindb.forlabcispro 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' ESCAPED BY "\\"
LINES TERMINATED BY '\r\n' 
IGNORE 1 ROWS
(pepid, @specdate,BaselineFolUp,CD4Count,CD4Pct,WBC,LymphPct,Hemoglob,Platelet,Creatin,HBsAg,RNAVload,CholeTot,Glucose,Triglyc,AlkaPhos,Physician,@PhysicDate,LabTech)
SET specdate = STR_TO_DATE(@specdate, '%d/%m/%Y'), 
PhysicDate = STR_TO_DATE(@PhysicDate, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\FMImp\\FMPIMP\\ClinicalEvalP.csv' 
INTO TABLE apindb.clinicaleval 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' ESCAPED BY "\\"
LINES TERMINATED BY '\r\n' 
IGNORE 1 ROWS
(pepid, @visitdate,weight,height,whostage,sideeff,regimen,cotrimdose,otherdrugs,@nextapptdate,clinician)
SET visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y'), 
nextapptdate = STR_TO_DATE(@nextapptdate, '%d/%m/%Y');


SET FOREIGN_KEY_CHECKS=1;