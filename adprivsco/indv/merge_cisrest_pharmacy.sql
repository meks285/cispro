SET FOREIGN_KEY_CHECKS=0;

LOAD DATA LOCAL INFILE 'C:\\CIS_PRO_FILES\\MERGE_CIS\\indv\\pharmacy.csv' 
INTO TABLE apindb.pharmacy
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(pharmregno, visitdate, dispensedate, patienttype, visittype, pregyn, refillyn, subswitch, drugname, strength, newregimenyn, regimen, dosage, frequency, duration, quantitypres, quantitydisp, drugname1, drugdose1, drugno1, drugsource1, drugname2, drugdose2, drugno2, drugsource2, drugname3, drugdose3, drugno3, drugsource3, drugname4, drugdose4, drugno4, drugsource4, regduration1, regduration2, regduration3, regduration4, tbdrug, oidrug, tbqty, oiqty, tbduration, oiduration, otherdrugs, otherquantity, otherduration, otherdrugs1, otherquantity1, otherduration1, otherdrugs2, otherquantity2, otherduration2, orderedby, orderdate, dispensedby, pharmdispensedate, counseledby, counseldate, pickedupby, pickupdate, errordrugname, errornature, errorconsequence, errorrepdate, pepid, drugcode, drugcode1, weight, height, nextapptdate);

SET FOREIGN_KEY_CHECKS=1;