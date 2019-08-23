md c:\"CiS Pro Backups"\
cd "C:\Program Files\MySQL\MySQL Server 5.6\bin\"
mysqldump --no-data -u root -pNu66et apindb > CiSBackup_STRUCTURE%date:~-4,4%%date:~-7,2%%date:~0,2%.sql
copy "C:\Program Files\MySQL\MySQL Server 5.6\bin\CiSBackup_STRUCTURE%date:~-4,4%%date:~-7,2%%date:~0,2%.sql" "c:\CiS Pro Backups\"
pause