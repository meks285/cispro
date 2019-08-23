LOAD DATA LOCAL INFILE 'C:\\FMImp\\Demographics.csv' 
INTO TABLE apindb.patient 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS 
(pepid, othernames,surname,@enroldate,@hivposdate,sex,@dob,educationallevel,maritalstatus,jobstatus,drugallergies,hospitalization,riskfactors,currentlypregnant,lastcd4,@lastcd4date,@prevdurationofcarefromdate,prevarvexp,serviceentry,pebp,peskin,peheight,pepulse,petemp,peweight,whostage,plan,@nextappointmentdate)
SET enroldate = STR_TO_DATE(@enroldate, '%d/%m/%Y'), 
hivposdate = STR_TO_DATE(@hivposdate, '%d/%m/%Y'), 
dob = STR_TO_DATE(@dob, '%d/%m/%Y'), 
prevdurationofcarefromdate = STR_TO_DATE(@prevdurationofcarefromdate, '%d/%m/%Y'), 
nextappointmentdate = STR_TO_DATE(@nextappointmentdate, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\FMImp\\Pharmacy.csv' 
INTO TABLE apindb.pharmacy 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS 
(pepid, @visitdate,weight,drugdose1,drugname1,drugno1,drugsource1,drugdose2,drugname2,drugno2,drugsource2,drugdose3,drugname3,drugno3,drugsource3,drugdose4,drugname4,drugno4,drugsource4,otherdrugs,orderedby,dispensedby,@pharmdispensedate,@nextapptdate)
SET visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y'), 
pharmdispensedate = STR_TO_DATE(@pharmdispensedate, '%d/%m/%Y'), 
nextapptdate = STR_TO_DATE(@nextapptdate, '%d/%m/%Y');



LOAD DATA LOCAL INFILE 'C:\\FMImp\\Laboratory.csv' 
INTO TABLE apindb.lab_results_pivot_test 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS 
(pepid, @visitdate,Alk_Phosphatase,baselineorrepeat,CD4,CD4_per,Total_Cholesterol,Creatinine,GLUCOSE,HBsAG,HbPCV,reportedby,Lymphocytes,@reportdate,clinicianname,Platelets,Viral_Load,Triglyceride,WBC)
SET visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y'), 
reportdate = STR_TO_DATE(@reportdate, '%d/%m/%Y');



LOAD DATA LOCAL INFILE 'C:\\FMImp\\Entry.csv' 
INTO TABLE apindb.expentry_temp 
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS 
(pepid, lastcd4,@lastcd4date,@dateartstart,prevarvexp,ppreviousarvexp,facilitytransf,whostage)
SET lastcd4date = STR_TO_DATE(@lastcd4date, '%d/%m/%Y'), 
dateartstart = STR_TO_DATE(@dateartstart, '%d/%m/%Y');