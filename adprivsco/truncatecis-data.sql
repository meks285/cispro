USE apindb;
SET FOREIGN_KEY_CHECKS=0;
TRUNCATE TABLE pharmacy;
TRUNCATE TABLE visit;
TRUNCATE TABLE subswitch;
DROP TABLE IF EXISTS persons;
DROP TABLE IF EXISTS member;
DROP TABLE IF EXISTS test1;
TRUNCATE TABLE laboratory;
TRUNCATE TABLE drugs;
TRUNCATE TABLE interruptions;
TRUNCATE TABLE crrirf;
TRUNCATE TABLE clinicaleval;
TRUNCATE TABLE audit_trail;
TRUNCATE TABLE appointment;
TRUNCATE TABLE patient;
TRUNCATE TABLE forlabcispro;
TRUNCATE TABLE expentry_temp;
TRUNCATE TABLE members;
TRUNCATE TABLE basic_info;
TRUNCATE TABLE migration_data;

DROP TABLE IF EXISTS art_adherence;

TRUNCATE TABLE exposed_infant;
TRUNCATE TABLE facility;
TRUNCATE TABLE pmtctregistry;
TRUNCATE TABLE pmtct_delivery;
TRUNCATE TABLE antenatal_care;
TRUNCATE TABLE basic_info;

SET FOREIGN_KEY_CHECKS=1;
insert into members (id,username, password, role)
values (999,'userbase', md5('1234'),'Super');
