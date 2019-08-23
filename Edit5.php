SELECT q.username,x.year year, q.hct_tst_target,q.hct_tst_pos_target,x.username,x.HCT_TST_Facility,x.HCT_TST_Facility_pos
from (SELECT IF(p.username = 'SS', 'Lagos Sustained Support', 'Lagos Priority LGA') username,SUM(a.target) hct_tst_target,SUM(hct_tst_pos_target) hct_tst_pos_target
FROM `HCT_TST` a JOIN phc_ovc p
ON (a.facilityid=p.facilityid)
JOIN (SELECT facilityid,target hct_tst_pos_target
FROM `HCT_TST` 
WHERE year=$ryearfrom and programarea='hts_tst_pos') c
ON (c.facilityid=a.facilityid)
WHERE p.username in ('SS', 'Priority') and year=2016 and a.programarea='hts_tst'
Group by p.username) q JOIN (SELECT IF(o.username = 'SS', 'Lagos Sustained Support', 'Lagos Priority LGA') username,h.year,SUM(h.a1 + h.b1 + h.c1 + h.d1 + h.e1 + h.f1 + h.g1 + h.h1 + h.i1 + h.j1 + h.k1 + h.l1 + h.m1 + h.n1 + h.o1 + h.p1) AS HCT_TST_Facility,
SUM(h.a2 + h.b2 + h.c2 + h.d2 + h.e2 + h.f2 + h.g2 + h.h2 + h.i2 + h.j2 + h.k2 + h.l2 + h.m2 + h.n2 + h.o2 + h.p2) AS HCT_TST_Facility_pos
from mrf_htc_table h JOIN phc_ovc o
ON (h.facid=o.facilityid)
where o.username IN ('SS','Priority') and h.year=$ryearfrom
group by o.username) x
ON (x.username=q.username)


(SELECT IF(p.username = 'SS', 'Lagos Sustained Support', 'Lagos Priority LGA') username,SUM(a.target) hct_tst_target,SUM(hct_tst_pos_target) hct_tst_pos_target
FROM `HCT_TST` a JOIN phc_ovc p
ON (a.facilityid=p.facilityid)
JOIN (SELECT facilityid,target hct_tst_pos_target
FROM `HCT_TST` 
WHERE year=$ryearfrom and programarea='hts_tst_pos')


