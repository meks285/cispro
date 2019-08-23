@echo off

set SCRIPT="%TEMP%\%RANDOM%-%RANDOM%-%RANDOM%-%RANDOM%.vbs"

echo Set oWS = WScript.CreateObject("WScript.Shell") >> %SCRIPT%
echo sLinkFile = "%USERPROFILE%\Downloads\APINCiSs\APINCiS.lnk" >> %SCRIPT%
echo Set oLink = oWS.CreateShortcut(sLinkFile) >> %SCRIPT%
echo oLink.TargetPath = "http://127.0.0.1/apindb/" >> %SCRIPT%
echo oUrlLink.IconLocation = "C:\Users\cifechelobi\Downloads\APIN\favicon.png"
echo oLink.Save >> %SCRIPT%
echo oUrlLink.Save >> %SCRIPT%

cscript /logo %SCRIPT%
del %SCRIPT%