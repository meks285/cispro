SELECT facname, faccode, reportdate, reportstart, reportend,m51,m121,m171,f51,f121,f171,m52,m122,m172,f52,f122,f172,m53,m123,m173,f53,f123,f173,m54,m124,m174,f54,f124,f174,m55,m125,m175,f55,f125,f175,m56,m126,m176,f56,f126,f176,m57,m127,m177,f57,f127,f177,m58,m128,m178,f58,f128,f178,m59,m129,m179,f59,f129,f179,m510,m1210,m1710,f510,f1210,f1710,m511,m1211,m1711,f511,f1211,f1711,m512,m1212,m1712,f512,f1212,f1712,m513,m1213,m1713,f513,f1213,f1713,m514,m1214,m1714,f514,f1214,f1714,m515,m1215,m1715,f515,f1215,f1715,m516,m1216,m1716,f516,f1216,f1716,m517,m1217,m1717,f517,f1217,f1717,m518,m1218,m1718,f518,f1218,f1718,m519,m1219,m1719,f519,f1219,f1719,m520,m1220,m1720,f520,f1220,f1720,m521,m1221,m1721,f521,f1221,f1721,m522,m1222,m1722,f522,f1222,f1722,m523,m1223,m1723,f523,f1223,f1723 
FROM crrirf
INTO OUTFILE 'C:/CIS_PRO_FILES/MERGE_CIS/indv/crrirf.csv'
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n';