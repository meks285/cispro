md c:\CIS_PRO_FILES\CiS_Pro_Backups\
cd "C:\wamp64\bin\mysql\mysql5.7.23\bin"
mysqldump -u root -pNu66et apindb > CiSBackup%date:~-4,4%%date:~-7,2%%date:~0,2%.sql
copy "C:\wamp64\bin\mysql\mysql5.7.23\bin\CiSBackup%date:~-4,4%%date:~-7,2%%date:~0,2%.sql" "c:\CIS_PRO_FILES\CiS_Pro_Backups\"
pause