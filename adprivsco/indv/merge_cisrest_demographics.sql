SET FOREIGN_KEY_CHECKS=0;

LOAD DATA LOCAL INFILE 'C:\\CIS_PRO_FILES\\MERGE_CIS\\indv\\patient.csv' 
INTO TABLE apindb.patient
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(pepid, uniqueid, surname, othernames, hospitalid, Sex, lga, state, facilityname, ancno, dob, age, agemonth, maritalstatus, educationallevel, educationallevelchild, educationallevelmother, educationallevelfather, educationallevelcaregiver, jobstatus, jobstatusmother, jobstatusfather, jobstatuscaregiver, address, wardvillage, town, addrlga, phoneno, nokname, nokaddr, nokwardvillage, noktown, nokstate, nokrelationship, nokphoneno, enroldate, hivposdate, hivmode, careentrypoint, priorart, presentingcomplaint, symptomsreview, dur_fever, dur_nausea, dur_nsweats, dur_weigthl, dur_cough, dur_head, dur_rash, dur_itch, dur_diarh, dur_gendis, dur_genitch, dur_gensore, dur_shortbreath, dur_visimp, dur_painswall, dur_numb, dur_otherpain, dur_eardis, dur_painmict, dur_oralsores, dur_irr, dur_sleep, dur_food, dur_convul, symduration, addiotnalsymcmments, pastmedicalhist, relfamilyhist, hospitalization, drugallergies, riskfactors, lastmenstrualperiod, currentlypregnant, gestationalage, edd, lastcd4, lastcd4date, lastvl, lastvldate, prevarvexp, prevarvtype, prevfacilityname, prevdurationofcarefromdate, prevdurationofcaretodate, currentmedications, serviceentry, adherenceyn, missedadh3daysyn, missadhreason, missedadhcode, interradhcode, stopadhcode, trtmtinterruptionyn, trtmtinterdate, trtmtinterduration, trtmtinterreason, trtmtstopyn, trtmtstopdate, trtmtstopduration, trtmtstopreason, hivstatdisclosure, hivstatdisclosureother, hivstatdiscussion, supportgrpyn, pastcurrarvsideeff, petemp, pebp, pepulse, peweight, peheight, peweightatart, peheightatart, cd4atart, pegenappearance, peskin, peheadeye, pebreasts, pecardiovascular, pegenitalia, gerespiratory, gerespiratoryrate, gegastrointestinal, geneurological, gementalstatus, peadditional, patfunction, assessment, assessmentnotes, whostagecriteria, whostage, plan, planlab, plantbs, planoip, planpep, planadh, planoit, planadm, planpain, plancounsel, planref, planpalliative, plancxr, planpmtct, planother, enrollin, planarvtherapy, planarvtherchgtrtmtreason, planarvtherstoptrtmtreason, regimen1st, regimen2nd, regimenalternate, regimenothers, myregimen, regimendrugs, nextappointment, nextappointmentdate, Clinicianname, dateeligible, whyeligible, dateinitadh, datetransfin, facilitytransf, firstartregimen, dateartstart, clinicalstageart, pmotheralive, testlocation, pmothername, pmotheradd, pfatheralive, pfathername, pfatheradd, pcaregiversrelationshipstatus, psiblings, pchildliveswith, pdevassess, pimmunecomplete, pfeedingmode, pprevarvtrtmt, pprevarvdrugs, ppreviousarvexp, ppreviousarvpmtct, pcurrmeds, pedcircumf, pedmuac, pedsurface, pedpeglands, pedadditional, patienttransout, patienttransoutdate, facilityrefto, patientdied, dateofdeath, sourceofdeathinf, causeofdeath, syseventdate, created_on, changed_on);

SET FOREIGN_KEY_CHECKS=1;