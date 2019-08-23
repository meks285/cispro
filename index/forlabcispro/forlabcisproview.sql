SELECT * 
FROM (SELECT pepid,SpecDate,BaselineFolUp,'CD4Count' Test, CD4Count Result,LabTech,PhysicDate,Physician
FROM forlabcispro
where CD4Count != ''
UNION ALL 
SELECT pepid,SpecDate,BaselineFolUp,'AlkaPhos' Test, AlkaPhos Result,LabTech,PhysicDate,Physician
FROM forlabcispro
where AlkaPhos != ''
UNION ALL 
SELECT pepid,SpecDate,BaselineFolUp,'CD4Pct' Test, CD4Pct Result,LabTech,PhysicDate,Physician
FROM forlabcispro
where CD4Pct != ''
UNION ALL 
SELECT pepid,SpecDate,BaselineFolUp,'CholeTot' Test, CholeTot Result,LabTech,PhysicDate,Physician
FROM forlabcispro
where CholeTot != ''
UNION ALL 
SELECT pepid,SpecDate,BaselineFolUp,'Creatin' Test, Creatin Result,LabTech,PhysicDate,Physician
FROM forlabcispro
where Creatin != ''
UNION ALL 
SELECT pepid,SpecDate,BaselineFolUp,'Glucose' Test, Creatin Result,LabTech,PhysicDate,Physician
FROM forlabcispro
where Glucose != ''
UNION ALL 
SELECT pepid,SpecDate,BaselineFolUp,'HBsAg' Test, Creatin Result,LabTech,PhysicDate,Physician
FROM forlabcispro
where HBsAg != ''
UNION ALL 
SELECT pepid,SpecDate,BaselineFolUp,'Hemoglob' Test, Creatin Result,LabTech,PhysicDate,Physician
FROM forlabcispro
where Hemoglob != ''
UNION ALL 
SELECT pepid,SpecDate,BaselineFolUp,'LymphPct' Test, Creatin Result,LabTech,PhysicDate,Physician
FROM forlabcispro
where LymphPct != ''
UNION ALL 
SELECT pepid,SpecDate,BaselineFolUp,'Platelet' Test, Creatin Result,LabTech,PhysicDate,Physician
FROM forlabcispro
where Platelet != ''
UNION ALL 
SELECT pepid,SpecDate,BaselineFolUp,'RNAVload' Test, Creatin Result,LabTech,PhysicDate,Physician
FROM forlabcispro
where RNAVload != ''
UNION ALL 
SELECT pepid,SpecDate,BaselineFolUp,'Triglyc' Test, Creatin Result,LabTech,PhysicDate,Physician
FROM forlabcispro
where Triglyc != ''
UNION ALL 
SELECT pepid,SpecDate,BaselineFolUp,'WBC' Test, Creatin Result,LabTech,PhysicDate,Physician
FROM forlabcispro
where WBC != ''