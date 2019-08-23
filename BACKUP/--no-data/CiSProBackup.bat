md c:\"CiS Pro Backups"\
cd "C:\wamp\bin\mysql\mysql5.6.12\bin"
mysqldump --no-data -u root -pNu66et apindb > CiSBackup_STRUCTURE%date:~-4,4%%date:~-7,2%%date:~0,2%.sql
copy "C:\wamp\bin\mysql\mysql5.6.12\bin\CiSBackup_STRUCTURE%date:~-4,4%%date:~-7,2%%date:~0,2%.sql" "c:\CiS Pro Backups\"
pause