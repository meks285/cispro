SET FOREIGN_KEY_CHECKS=0;

LOAD DATA LOCAL INFILE 'C:\\MERGE_CIS\\clinicaleval.csv' 
INTO TABLE apindb.clinicaleval
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(visitschd, artduration, weight, height, bp, bpdiast, eddpmtct, fp, functionalstatus, whostage, tbstatus, otheroi, sideeff, regimen, regimen2, regimen3, regimen4, otherregimen, regadherencea, cotrimdose, cotrimadherencea, inhdose, inhadherencea, regadherenceb, cotrimadherenceb, inhadherenceb, tbdose, tbadherencea, tbadherenceb, otherdrugs, vlscheduled, cd4scheduled, cd4value, vlvalue, othertests, otherdiag, recommendation, @visitdate, @nextapptdate, clinician, pepid)
SET visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y'),
nextapptdate = STR_TO_DATE(@nextapptdate, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\MERGE_CIS\\appointment.csv' 
INTO TABLE apindb.appointment
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(pepid, @visitdate, @nextapptdate, purpose)
SET visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y'),
nextapptdate = STR_TO_DATE(@nextapptdate, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\MERGE_CIS\\audit_trail.csv' 
INTO TABLE apindb.audit_trail
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(Server_Name, User_Name, @cur_timestamp, Table_Name, Column_Name,Old_Value,New_Value,action)
SET cur_timestamp = STR_TO_DATE(@cur_timestamp, '%d/%m/%Y %h:%i%p');


LOAD DATA LOCAL INFILE 'C:\\MERGE_CIS\\crrirf.csv' 
INTO TABLE apindb.crrirf
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(facname, faccode, @reportdate, @reportstart, @reportend,m51,m121,m171,f51,f121,f171,m52,m122,m172,f52,f122,f172,m53,m123,m173,f53,f123,f173,m54,m124,m174,f54,f124,f174,m55,m125,m175,f55,f125,f175,m56,m126,m176,f56,f126,f176,m57,m127,m177,f57,f127,f177,m58,m128,m178,f58,f128,f178,m59,m129,m179,f59,f129,f179,m510,m1210,m1710,f510,f1210,f1710,m511,m1211,m1711,f511,f1211,f1711,m512,m1212,m1712,f512,f1212,f1712,m513,m1213,m1713,f513,f1213,f1713,m514,m1214,m1714,f514,f1214,f1714,m515,m1215,m1715,f515,f1215,f1715,m516,m1216,m1716,f516,f1216,f1716,m517,m1217,m1717,f517,f1217,f1717,m518,m1218,m1718,f518,f1218,f1718,m519,m1219,m1719,f519,f1219,f1719,m520,m1220,m1720,f520,f1220,f1720,m521,m1221,m1721,f521,f1221,f1721,m522,m1222,m1722,f522,f1222,f1722,m523,m1223,m1723,f523,f1223,f1723)
SET reportdate = STR_TO_DATE(@reportdate, '%d/%m/%Y'),
reportstart = STR_TO_DATE(@reportstart, '%d/%m/%Y'),
reportend = STR_TO_DATE(@reportend, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\MERGE_CIS\\forlabcispro.csv' 
INTO TABLE apindb.forlabcispro
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(pepid, @specdate, AlkaPhos, BaselineFolUp, CD4Count, CD4Pct, CholeTot, Creatin, Glucose, HBsAg, Hemoglob, LabTech, LymphPct, @PhysicDate, Physician, Platelet, RNAVload, Triglyc, WBC, labregno, artstatus, additionaltests)
SET specdate = STR_TO_DATE(@specdate, '%d/%m/%Y'),
PhysicDate = STR_TO_DATE(@PhysicDate, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\MERGE_CIS\\interruptions.csv' 
INTO TABLE apindb.interruptions
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(interruptstatus, @interrdate, reason, restartdate, pepid)
SET interrdate = STR_TO_DATE(@interrdate, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\MERGE_CIS\\laboratory.csv' 
INTO TABLE apindb.laboratory
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(labregno, @visitdate, artstatus, baselineorrepeat, resultstatus,tests,results,reportedby,@reportdate,checkedby,@checkdate,pepid,clinicianname,additionaltests)
SET visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y'),
reportdate = STR_TO_DATE(@reportdate, '%d/%m/%Y'),
checkdate = STR_TO_DATE(@checkdate, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\MERGE_CIS\\patient.csv' 
INTO TABLE apindb.patient
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(pepid, uniqueid, surname, othernames, hospitalid, Sex, lga, state, facilityname, ancno, @DOB, age, agemonth, maritalstatus, educationallevel, educationallevelchild, educationallevelmother, educationallevelfather, educationallevelcaregiver, jobstatus, jobstatusmother, jobstatusfather, jobstatuscaregiver, address, wardvillage, town, addrlga, phoneno, nokname, nokaddr, nokwardvillage, noktown, nokstate, nokrelationship, nokphoneno, @enroldate, @hivposdate, hivmode, careentrypoint, priorart, presentingcomplaint, symptomsreview, dur_fever, dur_nausea, dur_nsweats, dur_weigthl, dur_cough, dur_head, dur_rash, dur_itch, dur_diarh, dur_gendis, dur_genitch, dur_gensore, dur_shortbreath, dur_visimp, dur_painswall, dur_numb, dur_otherpain, dur_eardis, dur_painmict, dur_oralsores, dur_irr, dur_sleep, dur_food, dur_convul, symduration, addiotnalsymcmments, pastmedicalhist, relfamilyhist, hospitalization, drugallergies, riskfactors, lastmenstrualperiod, currentlypregnant, gestationalage, @edd, lastcd4, @lastcd4date, lastvl, @lastvldate, prevarvexp, prevarvtype, prevfacilityname, @prevdurationofcarefromdate, @prevdurationofcaretodate, currentmedications, serviceentry, adherenceyn, missedadh3daysyn, missadhreason, missedadhcode, interradhcode, stopadhcode, trtmtinterruptionyn, @trtmtinterdate, trtmtinterduration, trtmtinterreason, trtmtstopyn, @trtmtstopdate, trtmtstopduration, trtmtstopreason, hivstatdisclosure, hivstatdisclosureother, hivstatdiscussion, supportgrpyn, pastcurrarvsideeff, petemp, pebp, pepulse, peweight, peheight, peweightatart, peheightatart, cd4atart, pegenappearance, peskin, peheadeye, pebreasts, pecardiovascular, pegenitalia, gerespiratory, gerespiratoryrate, gegastrointestinal, geneurological, gementalstatus, peadditional, patfunction, assessment, assessmentnotes, whostagecriteria, whostage, plan, planlab, plantbs, planoip, planpep, planadh, planoit, planadm, planpain, plancounsel, planref, planpalliative, plancxr, planpmtct, planother, enrollin, planarvtherapy, planarvtherchgtrtmtreason, planarvtherstoptrtmtreason, regimen1st, regimen2nd, regimenalternate, regimenothers, myregimen, regimendrugs, nextappointment, @nextappointmentdate, Clinicianname, @dateeligible, whyeligible, @dateinitadh, @datetransfin, facilitytransf, firstartregimen, @dateartstart, clinicalstageart, pmotheralive, testlocation, pmothername, pmotheradd, pfatheralive, pfathername, pfatheradd, pcaregiversrelationshipstatus, psiblings, pchildliveswith, pdevassess, pimmunecomplete, pfeedingmode, pprevarvtrtmt, pprevarvdrugs, ppreviousarvexp, ppreviousarvpmtct, pcurrmeds, pedcircumf, pedmuac, pedsurface, pedpeglands, pedadditional, patienttransout, @patienttransoutdate, facilityrefto, patientdied, @dateofdeath, sourceofdeathinf, causeofdeath, @syseventdate, @created_on, @changed_on)
SET DOB = STR_TO_DATE(@DOB, '%d/%m/%Y'),
enroldate = STR_TO_DATE(@enroldate, '%d/%m/%Y'),
hivposdate = STR_TO_DATE(@hivposdate, '%d/%m/%Y'),
edd = STR_TO_DATE(@edd, '%d/%m/%Y'),
lastcd4date = STR_TO_DATE(@lastcd4date, '%d/%m/%Y'),
lastvldate = STR_TO_DATE(@lastvldate, '%d/%m/%Y'),
prevdurationofcarefromdate = STR_TO_DATE(@prevdurationofcarefromdate, '%d/%m/%Y'),
prevdurationofcaretodate = STR_TO_DATE(@prevdurationofcaretodate, '%d/%m/%Y'),
trtmtinterdate = STR_TO_DATE(@trtmtinterdate, '%d/%m/%Y'),
trtmtstopdate = STR_TO_DATE(@trtmtstopdate, '%d/%m/%Y'),
nextappointmentdate = STR_TO_DATE(@nextappointmentdate, '%d/%m/%Y'),
dateeligible = STR_TO_DATE(@dateeligible, '%d/%m/%Y'),
dateinitadh = STR_TO_DATE(@dateinitadh, '%d/%m/%Y'),
datetransfin = STR_TO_DATE(@datetransfin, '%d/%m/%Y'),
dateartstart = STR_TO_DATE(@dateartstart, '%d/%m/%Y'),
patienttransoutdate = STR_TO_DATE(@patienttransoutdate, '%d/%m/%Y'),
dateofdeath = STR_TO_DATE(@dateofdeath, '%d/%m/%Y'),
syseventdate = STR_TO_DATE(@syseventdate, '%d/%m/%Y %h:%i%p'),
created_on = STR_TO_DATE(@created_on, '%d/%m/%Y %h:%i%p'),
changed_on = STR_TO_DATE(@changed_on, '%d/%m/%Y %h:%i%p');


LOAD DATA LOCAL INFILE 'C:\\MERGE_CIS\\pharmacy.csv' 
INTO TABLE apindb.pharmacy
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(pharmregno, @visitdate, @dispensedate, patienttype, visittype, pregyn, refillyn, subswitch, drugname, strength, newregimenyn, regimen, dosage, frequency, duration, quantitypres, quantitydisp, drugname1, drugdose1, drugno1, drugsource1, drugname2, drugdose2, drugno2, drugsource2, drugname3, drugdose3, drugno3, drugsource3, drugname4, drugdose4, drugno4, drugsource4, regduration1, regduration2, regduration3, regduration4, tbdrug, oidrug, tbqty, oiqty, tbduration, oiduration, otherdrugs, otherquantity, otherduration, otherdrugs1, otherquantity1, otherduration1, otherdrugs2, otherquantity2, otherduration2, orderedby, @orderdate, dispensedby, @pharmdispensedate, counseledby, @counseldate, pickedupby, @pickupdate, errordrugname, errornature, errorconsequence, @errorrepdate, pepid, drugcode, drugcode1, weight, height, @nextapptdate)
SET visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y'),
dispensedate = STR_TO_DATE(@dispensedate, '%d/%m/%Y'),
orderdate = STR_TO_DATE(@orderdate, '%d/%m/%Y'),
dispensedby = STR_TO_DATE(@dispensedby, '%d/%m/%Y'),
pharmdispensedate = STR_TO_DATE(@pharmdispensedate, '%d/%m/%Y'),
pickupdate = STR_TO_DATE(@pickupdate, '%d/%m/%Y'),
errorrepdate = STR_TO_DATE(@errorrepdate, '%d/%m/%Y'),
nextapptdate = STR_TO_DATE(@nextapptdate, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\MERGE_CIS\\subswitch.csv' 
INTO TABLE apindb.subswitch
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(newregimen, @newregimendate, reason, other, pepid)
SET newregimendate = STR_TO_DATE(@newregimendate, '%d/%m/%Y');


LOAD DATA LOCAL INFILE 'C:\\MERGE_CIS\\visit.csv' 
INTO TABLE apindb.visit
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(visittype, @visitdate, pepid)
SET visitdate = STR_TO_DATE(@visitdate, '%d/%m/%Y');

SET FOREIGN_KEY_CHECKS=1;