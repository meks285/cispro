<?php 
session_start();
ini_set('max_execution_time', 300);
$_SESSION=$_GET;
$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$fac="select facilityname from facility;";
$resultfac=mysql_query($fac);
$infac = mysql_fetch_assoc($resultfac); 


	class MyClass{
    public function GetUserInformation(){
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;


		if($repmonth=='1' && $repyear==2017 ) {$rtime = strtotime('1/31/2017'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2017) {$rtime = strtotime('2/28/2017'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2017) {$rtime = strtotime('3/31/2017'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2017) {$rtime = strtotime('4/30/2017'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2017) {$rtime = strtotime('5/31/2017'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2017) {$rtime = strtotime('6/30/2017'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2017) {$rtime = strtotime('7/31/2017'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2017) {$rtime = strtotime('8/31/2017'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2017) {$rtime = strtotime('9/30/2017'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2017) {$rtime = strtotime('10/31/2017'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2017) {$rtime = strtotime('11/30/2017'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2017) {$rtime = strtotime('12/31/2017'); $rdate=date('Y-m-d',$rtime);}
	elseif($repmonth=='1' && $repyear==2008 ) {$rtime = strtotime('1/31/2008'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2008) {$rtime = strtotime('2/28/2008'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2008) {$rtime = strtotime('3/31/2008'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2008) {$rtime = strtotime('4/30/2008'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2008) {$rtime = strtotime('5/31/2008'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2008) {$rtime = strtotime('6/30/2008'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2008) {$rtime = strtotime('7/31/2008'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2008) {$rtime = strtotime('8/31/2008'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2008) {$rtime = strtotime('9/30/2008'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2008) {$rtime = strtotime('10/31/2008'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2008) {$rtime = strtotime('11/30/2008'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2008) {$rtime = strtotime('12/31/2008'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2009 ) {$rtime = strtotime('1/31/2009'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2009) {$rtime = strtotime('2/28/2009'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2009) {$rtime = strtotime('3/31/2009'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2009) {$rtime = strtotime('4/30/2009'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2009) {$rtime = strtotime('5/31/2009'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2009) {$rtime = strtotime('6/30/2009'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2009) {$rtime = strtotime('7/31/2009'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2009) {$rtime = strtotime('8/31/2009'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2009) {$rtime = strtotime('9/30/2009'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2009) {$rtime = strtotime('10/31/2009'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2009) {$rtime = strtotime('11/30/2009'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2009) {$rtime = strtotime('12/31/2009'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2010 ) {$rtime = strtotime('1/31/2010'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2010) {$rtime = strtotime('2/28/2010'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2010) {$rtime = strtotime('3/31/2010'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2010) {$rtime = strtotime('4/30/2010'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2010) {$rtime = strtotime('5/31/2010'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2010) {$rtime = strtotime('6/30/2010'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2010) {$rtime = strtotime('7/31/2010'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2010) {$rtime = strtotime('8/31/2010'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2010) {$rtime = strtotime('9/30/2010'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2010) {$rtime = strtotime('10/31/2010'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2010) {$rtime = strtotime('11/30/2010'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2010) {$rtime = strtotime('12/31/2010'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2011) {$rtime = strtotime('1/31/2011'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2011) {$rtime = strtotime('2/28/2011'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2011) {$rtime = strtotime('3/31/2011'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2011) {$rtime = strtotime('4/30/2011'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2011) {$rtime = strtotime('5/31/2011'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2011) {$rtime = strtotime('6/30/2011'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2011) {$rtime = strtotime('7/31/2011'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2011) {$rtime = strtotime('8/31/2011'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2011) {$rtime = strtotime('9/30/2011'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2011) {$rtime = strtotime('10/31/2011'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2011) {$rtime = strtotime('11/30/2011'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2011) {$rtime = strtotime('12/31/2011'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2012 ) {$rtime = strtotime('1/31/2012'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2012) {$rtime = strtotime('2/28/2012'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2012) {$rtime = strtotime('3/31/2012'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2012) {$rtime = strtotime('4/30/2012'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2012) {$rtime = strtotime('5/31/2012'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2012) {$rtime = strtotime('6/30/2012'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2012) {$rtime = strtotime('7/31/2012'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2012) {$rtime = strtotime('8/31/2012'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2012) {$rtime = strtotime('9/30/2012'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2012) {$rtime = strtotime('10/31/2012'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2012) {$rtime = strtotime('11/30/2012'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2012) {$rtime = strtotime('12/31/2012'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2013 ) {$rtime = strtotime('1/31/2013'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2013) {$rtime = strtotime('2/28/2013'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2013) {$rtime = strtotime('3/31/2013'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2013) {$rtime = strtotime('4/30/2013'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2013) {$rtime = strtotime('5/31/2013'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2013) {$rtime = strtotime('6/30/2013'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2013) {$rtime = strtotime('7/31/2013'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2013) {$rtime = strtotime('8/31/2013'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2013) {$rtime = strtotime('9/30/2013'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2013) {$rtime = strtotime('10/31/2013'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2013) {$rtime = strtotime('11/30/2013'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2013) {$rtime = strtotime('12/31/2013'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2014) {$rtime = strtotime('1/31/2014'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2014) {$rtime = strtotime('2/28/2014'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2014) {$rtime = strtotime('3/31/2014'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2014) {$rtime = strtotime('4/30/2014'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2014) {$rtime = strtotime('5/31/2014'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2014) {$rtime = strtotime('6/30/2014'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2014) {$rtime = strtotime('7/31/2014'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2014) {$rtime = strtotime('8/31/2014'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2014) {$rtime = strtotime('9/30/2014'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2014) {$rtime = strtotime('10/31/2014'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2014) {$rtime = strtotime('11/30/2014'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2014) {$rtime = strtotime('12/31/2014'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2015 ) {$rtime = strtotime('1/31/2015'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2015) {$rtime = strtotime('2/28/2015'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2015) {$rtime = strtotime('3/31/2015'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2015) {$rtime = strtotime('4/30/2015'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2015) {$rtime = strtotime('5/31/2015'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2015) {$rtime = strtotime('6/30/2015'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2015) {$rtime = strtotime('7/31/2015'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2015) {$rtime = strtotime('8/31/2015'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2015) {$rtime = strtotime('9/30/2015'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2015) {$rtime = strtotime('10/31/2015'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2015) {$rtime = strtotime('11/30/2015'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2015) {$rtime = strtotime('12/31/2015'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2016) {$rtime = strtotime('1/31/2016'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2016) {$rtime = strtotime('2/29/2016'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2016) {$rtime = strtotime('3/31/2016'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2016) {$rtime = strtotime('4/30/2016'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2016) {$rtime = strtotime('5/31/2016'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2016) {$rtime = strtotime('6/30/2016'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2016) {$rtime = strtotime('7/31/2016'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2016) {$rtime = strtotime('8/31/2016'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2016) {$rtime = strtotime('9/30/2016'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2016) {$rtime = strtotime('10/31/2016'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2016) {$rtime = strtotime('11/30/2016'); $rdate=date('Y-m-d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2016) {$rtime = strtotime('12/31/2016'); $rdate=date('Y-m-d',$rtime);} 
	else {$rdate = "";}

$date6 = date_create($rdate);
date_sub($date6, date_interval_create_from_date_string('6 months'));
$date6low= date_format($date6, 'Y-m-d');
echo $date6low."\n";
echo $rdate;
include 'realign.php';

	
	//echo $rdate;
	
$query = "SELECT pepid, uniqueid,hospitalid,surname,othernames,sex,lga,facilityname,ancno, dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate,age,hivposdate
FROM patient WHERE pepid = '$repmonth'";
        $result = mysql_query($query);
        $info = mysql_fetch_assoc($result);
        return $info;
	} 
	

	}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();
session_write_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="../jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
function endbalcalc1() {
document.form.tot1.value = parseInt(document.form.a1.value) + parseInt(document.form.b1.value)+ parseInt(document.form.c1.value)+ parseInt(document.form.d1.value)+ parseInt(document.form.e1.value)+ parseInt(document.form.f1.value)+parseInt(document.form.g1.value)+parseInt(document.form.h1.value)+parseInt(document.form.i1.value)+parseInt(document.form.j1.value)+parseInt(document.form.k1.value)+parseInt(document.form.l1.value)+parseInt(document.form.m1.value)+parseInt(document.form.n1.value)+parseInt(document.form.o1.value)+parseInt(document.form.p1.value);

document.form.tot2.value = parseInt(document.form.a2.value) + parseInt(document.form.b2.value)+ parseInt(document.form.c2.value)+ parseInt(document.form.d2.value)+ parseInt(document.form.e2.value)+ parseInt(document.form.f2.value)+parseInt(document.form.g2.value)+parseInt(document.form.h2.value)+parseInt(document.form.i2.value)+parseInt(document.form.j2.value)+parseInt(document.form.k2.value)+parseInt(document.form.l2.value)+parseInt(document.form.m2.value)+parseInt(document.form.n2.value)+parseInt(document.form.o2.value)+parseInt(document.form.p2.value);

document.form.tot3.value = parseInt(document.form.a3.value) + parseInt(document.form.b3.value)+ parseInt(document.form.c3.value)+ parseInt(document.form.d3.value)+ parseInt(document.form.e3.value)+ parseInt(document.form.f3.value)+parseInt(document.form.g3.value)+parseInt(document.form.h3.value)+parseInt(document.form.i3.value)+parseInt(document.form.j3.value)+parseInt(document.form.k3.value)+parseInt(document.form.l3.value)+parseInt(document.form.m3.value)+parseInt(document.form.n3.value)+parseInt(document.form.o3.value)+parseInt(document.form.p3.value);

document.form.tot4.value = parseInt(document.form.a4.value) + parseInt(document.form.b4.value)+ parseInt(document.form.c4.value)+ parseInt(document.form.d4.value)+ parseInt(document.form.e4.value)+ parseInt(document.form.e4.value)+ parseInt(document.form.f4.value)+ parseInt(document.form.g4.value)+ parseInt(document.form.h4.value)+ parseInt(document.form.i4.value)+ parseInt(document.form.j4.value)+ parseInt(document.form.k4.value)+ parseInt(document.form.l4.value)+ parseInt(document.form.m4.value)+ parseInt(document.form.n4.value)+ parseInt(document.form.o4.value)+ parseInt(document.form.p4.value);

document.form.tot5.value = parseInt(document.form.a5.value) + parseInt(document.form.b5.value)+ parseInt(document.form.c5.value)+ parseInt(document.form.d5.value)+ parseInt(document.form.e5.value)+ parseInt(document.form.f5.value)+parseInt(document.form.g5.value)+parseInt(document.form.h5.value)+parseInt(document.form.i5.value)+parseInt(document.form.j5.value)+parseInt(document.form.k5.value)+parseInt(document.form.l5.value)+parseInt(document.form.m5.value)+parseInt(document.form.n5.value)+parseInt(document.form.o5.value)+parseInt(document.form.p5.value);

document.form.tot6.value = parseInt(document.form.a6.value) + parseInt(document.form.b6.value)+ parseInt(document.form.c6.value)+ parseInt(document.form.d6.value)+ parseInt(document.form.e6.value)+ parseInt(document.form.f6.value)+parseInt(document.form.g6.value)+parseInt(document.form.h6.value)+parseInt(document.form.i6.value)+parseInt(document.form.j6.value)+parseInt(document.form.k6.value)+parseInt(document.form.l6.value)+parseInt(document.form.m6.value)+parseInt(document.form.n6.value)+parseInt(document.form.o6.value)+parseInt(document.form.p6.value);

document.form.tot7.value = parseInt(document.form.a7.value) + parseInt(document.form.b7.value)+ parseInt(document.form.c7.value)+ parseInt(document.form.d7.value)+ parseInt(document.form.e7.value)+ parseInt(document.form.f7.value)+parseInt(document.form.g7.value)+parseInt(document.form.h7.value)+parseInt(document.form.i7.value)+parseInt(document.form.j7.value)+parseInt(document.form.k7.value)+parseInt(document.form.l7.value)+parseInt(document.form.m7.value)+parseInt(document.form.n7.value)+parseInt(document.form.o7.value)+parseInt(document.form.p7.value);

document.form.tot8.value = parseInt(document.form.a8.value) + parseInt(document.form.b8.value)+ parseInt(document.form.c8.value)+ parseInt(document.form.d8.value)+ parseInt(document.form.e8.value)+ parseInt(document.form.f8.value)+parseInt(document.form.g8.value)+parseInt(document.form.h8.value)+parseInt(document.form.i8.value)+parseInt(document.form.j8.value)+parseInt(document.form.k8.value)+parseInt(document.form.l8.value)+parseInt(document.form.m8.value)+parseInt(document.form.n8.value)+parseInt(document.form.o8.value)+parseInt(document.form.p8.value);

document.form.tot9.value = parseInt(document.form.a9.value) + parseInt(document.form.b9.value)+ parseInt(document.form.c9.value)+ parseInt(document.form.d9.value)+ parseInt(document.form.e9.value)+ parseInt(document.form.f9.value)+parseInt(document.form.g9.value)+parseInt(document.form.h9.value)+parseInt(document.form.i9.value)+parseInt(document.form.j9.value)+parseInt(document.form.k9.value)+parseInt(document.form.l9.value)+parseInt(document.form.m9.value)+parseInt(document.form.n9.value)+parseInt(document.form.o9.value)+parseInt(document.form.p9.value);

document.form.tot10.value = parseInt(document.form.a10.value) + parseInt(document.form.b10.value)+ parseInt(document.form.c10.value)+ parseInt(document.form.d10.value)+ parseInt(document.form.e10.value)+ parseInt(document.form.f10.value)+parseInt(document.form.g10.value)+parseInt(document.form.h10.value)+parseInt(document.form.i10.value)+parseInt(document.form.j10.value)+parseInt(document.form.k10.value)+parseInt(document.form.l10.value)+parseInt(document.form.m10.value)+parseInt(document.form.n10.value)+parseInt(document.form.o10.value)+parseInt(document.form.p10.value);

document.form.tot11.value = parseInt(document.form.a11.value) + parseInt(document.form.b11.value)+ parseInt(document.form.c11.value)+ parseInt(document.form.d11.value)+ parseInt(document.form.e11.value)+ parseInt(document.form.f11.value)+parseInt(document.form.g11.value)+parseInt(document.form.h11.value)+parseInt(document.form.i11.value)+parseInt(document.form.j11.value)+parseInt(document.form.k11.value)+parseInt(document.form.l11.value)+parseInt(document.form.m11.value)+parseInt(document.form.n11.value)+parseInt(document.form.o11.value)+parseInt(document.form.p11.value);

document.form.tottb11.value = parseInt(document.form.atb11.value) + parseInt(document.form.btb11.value)+ parseInt(document.form.ctb11.value)+ parseInt(document.form.dtb11.value)+ parseInt(document.form.etb11.value)+ parseInt(document.form.ftb11.value)+parseInt(document.form.gtb11.value)+parseInt(document.form.htb11.value)+parseInt(document.form.itb11.value)+parseInt(document.form.jtb11.value)+parseInt(document.form.ktb11.value)+parseInt(document.form.ltb11.value)+parseInt(document.form.mtb11.value)+parseInt(document.form.ntb11.value)+parseInt(document.form.otb11.value)+parseInt(document.form.ptb11.value);

document.form.totcc11.value = parseInt(document.form.acc11.value) + parseInt(document.form.bcc11.value)+ parseInt(document.form.ccc11.value)+ parseInt(document.form.dcc11.value)+ parseInt(document.form.ecc11.value)+ parseInt(document.form.fcc11.value)+parseInt(document.form.gcc11.value)+parseInt(document.form.hcc11.value)+parseInt(document.form.icc11.value)+parseInt(document.form.jcc11.value)+parseInt(document.form.kcc11.value)+parseInt(document.form.lcc11.value)+parseInt(document.form.mcc11.value)+parseInt(document.form.ncc11.value)+parseInt(document.form.occ11.value)+parseInt(document.form.pcc11.value);

document.form.tot12.value = parseInt(document.form.a12.value) + parseInt(document.form.b12.value)+ parseInt(document.form.c12.value)+ parseInt(document.form.d12.value)+ parseInt(document.form.e12.value)+ parseInt(document.form.f12.value)+parseInt(document.form.g12.value)+parseInt(document.form.h12.value)+parseInt(document.form.i12.value)+parseInt(document.form.j12.value)+parseInt(document.form.k12.value)+parseInt(document.form.l12.value)+parseInt(document.form.m12.value)+parseInt(document.form.n12.value)+parseInt(document.form.o12.value)+parseInt(document.form.p12.value);

document.form.totcc12.value = parseInt(document.form.acc12.value) + parseInt(document.form.bcc12.value)+ parseInt(document.form.ccc12.value)+ parseInt(document.form.dcc12.value)+ parseInt(document.form.ecc12.value)+ parseInt(document.form.fcc12.value)+parseInt(document.form.gcc12.value)+parseInt(document.form.hcc12.value)+parseInt(document.form.icc12.value)+parseInt(document.form.jcc12.value)+parseInt(document.form.kcc12.value)+parseInt(document.form.lcc12.value)+parseInt(document.form.mcc12.value)+parseInt(document.form.ncc12.value)+parseInt(document.form.occ12.value)+parseInt(document.form.pcc12.value);


document.form.tot13.value = parseInt(document.form.a13.value) + parseInt(document.form.b13.value)+ parseInt(document.form.c13.value)+ parseInt(document.form.d13.value)+ parseInt(document.form.e13.value)+ parseInt(document.form.f13.value)+parseInt(document.form.g13.value)+parseInt(document.form.h13.value)+parseInt(document.form.i13.value)+parseInt(document.form.j13.value)+parseInt(document.form.k13.value)+parseInt(document.form.l13.value)+parseInt(document.form.m13.value)+parseInt(document.form.n13.value)+parseInt(document.form.o13.value)+parseInt(document.form.p13.value);

document.form.tot14.value = parseInt(document.form.a14.value) + parseInt(document.form.b14.value)+ parseInt(document.form.c14.value)+ parseInt(document.form.d14.value)+ parseInt(document.form.e14.value)+ parseInt(document.form.f14.value)+parseInt(document.form.g14.value)+parseInt(document.form.h14.value)+parseInt(document.form.i14.value)+parseInt(document.form.j14.value)+parseInt(document.form.k14.value)+parseInt(document.form.l14.value)+parseInt(document.form.m14.value)+parseInt(document.form.n14.value)+parseInt(document.form.o14.value)+parseInt(document.form.p14.value);

document.form.tot15.value = parseInt(document.form.a15.value) + parseInt(document.form.b15.value)+ parseInt(document.form.c15.value)+ parseInt(document.form.d15.value)+ parseInt(document.form.e15.value)+ parseInt(document.form.f15.value)+parseInt(document.form.g15.value)+parseInt(document.form.h15.value)+parseInt(document.form.i15.value)+parseInt(document.form.j15.value)+parseInt(document.form.k15.value)+parseInt(document.form.l15.value)+parseInt(document.form.m15.value)+parseInt(document.form.n15.value)+parseInt(document.form.o15.value)+parseInt(document.form.p15.value);

document.form.tot16.value = parseInt(document.form.a16.value) + parseInt(document.form.b16.value)+ parseInt(document.form.c16.value)+ parseInt(document.form.d16.value)+ parseInt(document.form.e16.value)+ parseInt(document.form.f16.value)+parseInt(document.form.g16.value)+parseInt(document.form.h16.value)+parseInt(document.form.i16.value)+parseInt(document.form.j16.value)+parseInt(document.form.k16.value)+parseInt(document.form.l16.value)+parseInt(document.form.m16.value)+parseInt(document.form.n16.value)+parseInt(document.form.o16.value)+parseInt(document.form.p16.value);

document.form.tot17.value = parseInt(document.form.a17.value) + parseInt(document.form.b17.value)+ parseInt(document.form.c17.value)+ parseInt(document.form.d17.value)+ parseInt(document.form.e17.value)+ parseInt(document.form.f17.value)+parseInt(document.form.g17.value);

document.form.tot18.value = parseInt(document.form.a18.value) + parseInt(document.form.b18.value)+ parseInt(document.form.c18.value)+ parseInt(document.form.d18.value)+ parseInt(document.form.e18.value)+ parseInt(document.form.f18.value)+parseInt(document.form.g18.value);

document.form.tot19.value = parseInt(document.form.a19.value) + parseInt(document.form.b19.value);

document.form.tot20.value = parseInt(document.form.a20.value) + parseInt(document.form.b20.value);

document.form.tot21.value = parseInt(document.form.a21.value) + parseInt(document.form.b21.value);


document.form.tot22.value = parseInt(document.form.a22.value) + parseInt(document.form.b22.value)+ parseInt(document.form.c22.value)+ parseInt(document.form.d22.value)+ parseInt(document.form.e22.value)+ parseInt(document.form.f22.value)+parseInt(document.form.g22.value)+parseInt(document.form.h22.value)+parseInt(document.form.i22.value)+parseInt(document.form.j22.value)+parseInt(document.form.k22.value)+parseInt(document.form.l22.value)+parseInt(document.form.m22.value)+parseInt(document.form.n22.value);

}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MSF</title>
<h1 align="center"> NATIONAL  FACILITY ART MONTHLY  SUMMARY FORM														
</h1>
</head>
<style type="text/css">
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
}
p, h2, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:850px;
padding:14px;
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: normal;
font-weight: bold;
color: #000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
}
li input
{
    position: absolute;
    margin-left: -40px;
    margin-top: 5px;
}
.sidebar {
   width: 170px;
   height: 150px;
   position: fixed;
   left: 0px;
   top: 300px;
   font-family: Tahoma, Geneva, sans-serif;
   font-style: italic;
   text-decoration: none;
   border: 1px solid #cfcfcf;
   background: #f3f3f3;
   border-bottom: 1px solid #cfcfcf;
   border-radius: 3px 3px 0 0;
   background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
   background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
   background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
   background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
   -webkit-box-shadow: 0 1px whitesmoke;
   box-shadow: 0 1px whitesmoke;
}
.sidebar1{
	width: 170px;
   height: 50px;
   position: fixed;
   left: 0px;
   font-family: Tahoma, Geneva, sans-serif;
   font-style: italic;
   text-decoration: none;
   border: 1px solid #cfcfcf;
   background: #f3f3f3;
   border-bottom: 1px solid #cfcfcf;
   border-radius: 3px 3px 0 0;
   background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
   background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
   background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
   background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
   -webkit-box-shadow: 0 1px whitesmoke;
   box-shadow: 0 1px whitesmoke;
	}
h1 {
  margin: 0px;
  line-height: 40px;
  font-size: 15px;
  font-weight: bold;
  color: #555;
  text-align: center;
  text-shadow: 0 1px white;
  background: #f3f3f3;
  border-bottom: 1px solid #cfcfcf;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
  -webkit-box-shadow: 0 1px whitesmoke;
  box-shadow: 0 1px whitesmoke;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 1px #b7ddf2;
background:# FFF;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
color:#666666;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
table
{
	width:70%;
border-collapse:collapse;
}
 
th
{
	font: bold 12px "Trebuchet MS", Verdana, Arial, Helvetica,
	sans-serif;
	color: #6D929B;
	border-right: 1px solid #C1DAD7;
	border-bottom: 1px solid #C1DAD7;
	border-top: 1px solid #C1DAD7;
	letter-spacing: 2px;
	text-transform: uppercase;
	text-align: left;
	padding: 6px 6px 6px 12px;
	background: #CAE8EA url(images/bg_header.jpg) no-repeat;
	height:50px;
border:1px solid black;
}
td {
	font: italic 11px "Trebuchet MS", Verdana, Arial, Helvetica,sans-serif;
}
</style>
<body onload="endbalcalc1();">
<a href="javascript:history.go(-1)">[BACK]</a>

<form name="form" id="formId"  method="POST" >
<div id="stylized">
<fieldset>
<legend style="font-weight:bold; font-size:11px"></legend>
<label for="cboname">Facility Name
</label>
<input type="text" name="facname" id="facname"  value="<?php echo $infac['facilityname']?>" />

<label>Facility Code
</label>
<input type="text" name="faccode" id="faccode"  value="<?php echo $info['faccode']?>"  /> 


<label>Date Prepared
</label>
<input type="text" name="reportdate" id="reportdate" readonly="readonly"  value="<?php echo date("d/M/Y")?>" />

</fieldset>
<fieldset>
<label>Reporting Month
</label>
<input type="text" name="reportingmonth" id="reportingmonth" readonly="readonly" value="<?php if ($_GET['reportingmonth']==1){echo 'January';}
elseif ($_GET['reportingmonth']==2){echo 'February';}
elseif ($_GET['reportingmonth']==3){echo 'March';}
elseif ($_GET['reportingmonth']==4){echo 'April';}
elseif ($_GET['reportingmonth']==5){echo 'May';}
elseif ($_GET['reportingmonth']==6){echo 'June';}
elseif ($_GET['reportingmonth']==7){echo 'July';}
elseif ($_GET['reportingmonth']==8){echo 'August';}
elseif ($_GET['reportingmonth']==9){echo 'September';}
elseif ($_GET['reportingmonth']==10){echo 'October';}
elseif ($_GET['reportingmonth']==11){echo 'November';}
elseif ($_GET['reportingmonth']==12){echo 'December';} ?>"   />

<label>Reporting Year
</label>
<input type="text" name="reportingyear" id="reportingyear" readonly="readonly" value="<?php echo $_GET['reportingyear']; ?>" />

</fieldset>
</div>
   <table align="center" style="background-color:#FFF; width: 75%; alignment-adjust:central" cellpadding="0" cellspacing="0" border="1">
  <tr>
  </tr> 
  	<th><font color="black"></font>
  	<th colspan="8" style="background-color:#993; font-size:18px "><font color="black">MALE</font></th>
  	<th colspan="8" style="background-color:#993; font-size:18px"><font color="black">FEMALE</font></th>
    <th><font color="black"></font>
   <tr>
      <th><font color="black" style="transform-style:flat"></font></th>
      <th><font color="black">< 1</font></th>
      <th><font color="black">1-4</font>
      <th><font color="black">5-9</font>
      <th style="width:18px"><font color="black">10-14</font>
      <th><font color="black">15-19</font>
      <th><font color="black">20-24</font>
      <th><font color="black">25-49</font>
      <th><font color="black">50+ </font>
      <th><font color="black"> < 1</font></th>
      <th><font color="black">1-4</font>
      <th><font color="black">5-9</font>
      <th><font color="black">10-14</font>
      <th><font color="black">15-19</font>
      <th><font color="black">20-24</font>
      <th><font color="black">25-49</font>
      <th><font color="black">50+</font>
      <th><font color="black">Total</font></th>
       </tr>
 <tr>
           <th align="left"><font color="black">Number of persons newly enrolled into the ART programme for PreART care during the reporting month</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" readonly style="width:70%; "></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b1" id="b1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c1" id="c1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d1" id="d1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e1" id="e1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f1" id="f1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g1" id="g1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h1" id="h1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i1" id="i1"  value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum1a();updatesum1b()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j1" id="j1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k1" id="k1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l1" id="l1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1" id="m1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n1" id="n1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o1" id="o1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p1" id="p1" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot1" id="tot1" value="" style="width:70%;" onChange="" ></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of persons cumulatively enrolled into HIV care since the beginning of the program</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a2" readonly value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL)
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%; " ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i2"  value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL)
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p2" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';


$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where (lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or prevarvtype='' OR ppreviousarvexp IS NULL))
AND enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND ROUND(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot2" style="width:70%;" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">No. of Pre-ART patients transferred in from another ART service point during the reporting month </font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a3" readonly value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%; " ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i3"  value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:70%;" onChange="updatesum3a();updatesum3b()" ></div></div></td>
               <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p3" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND ROUND(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>

<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot3" style="width:70%;" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">No. of Pre-ART patients transferred out to another ART service point during the reporting month</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a4" id="a4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" readonly style="width:70%;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b4" id="b4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c4" id="c4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d4" id="d4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e4" id="e4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f4" id="f4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g4" id="g4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h4" id="h4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>

        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i4"  id="14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j4" id="j4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k4" id="k4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l4" id="l4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m4" id="m4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n4" id="n4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o4" id="o4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p4" id="p4" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot4" id="tot4" style="width:70%;" ></div></div></td>
        </tr>
        
        <tr>
        <th align="right"><font color="black">No. of Pre-ART patients who are lost to follow up during reporting month</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a5" readonly value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/30.4) < 12 
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%; " ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) between 1 and 4
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) between 5 and 9
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) between 10 and 14
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) between 15 and 19
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) between 20 and 24
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) between 25 and 49
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) >= 50
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/30.4) < 12 
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum5a();updatesum5b();upwardage5b();upwardagetot2();upwardagetot3()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) between 1 and 4
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) between 5 and 9
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) between 10 and 14
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) between 15 and 19
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) between 20 and 24
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) between 25 and 49
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p5" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, dob, agemonth ) NOT IN (SELECT distinct pepid, dob, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND ROUND(DATEDIFF(visitdate , dob)/365) >= 50
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot5" style="width:70%;" ></div></div></td>
        </tr>
        <tr>
        <th align="right"><font color="black">No. of Pre-ART patients known to have died during reporting month</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a6" readonly value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/30.4) < 12 
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%; " ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 1 and 4
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 5 and 9
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 10 and 14
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 15 and 19
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 20 and 24
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 25 and 49
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) >= 50
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i6"  value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/30.4) < 12
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum6a();updatesum6b();upwardage5b();upwardagetot2();upwardagetot3()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 1 and 4
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 5 and 9
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 10 and 14
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 15 and 19
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 20 and 24
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 25 and 49
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p6" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) >= 50
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot6" style="width:70%;" ></div></div></td>

        </tr>
        
        <tr>
        <th align="left"><font color="black">Number of persons newly started on ART during the reporting month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/30.4) <= 12
                                AND LOWER(b.sex) LIKE 'm%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" readonly style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) between 1 and 4
                                AND LOWER(b.sex) LIKE 'm%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) between 4 and 9
                                AND LOWER(b.sex) LIKE 'm%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) between 9 and 14
                                AND LOWER(b.sex) LIKE 'm%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) between 14 and 19
                                AND LOWER(b.sex) LIKE 'm%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) between 19 and 24
                                AND LOWER(b.sex) LIKE 'm%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) between 24 and 49
                                AND LOWER(b.sex) LIKE 'm%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) >= 50
                                AND LOWER(b.sex) LIKE 'm%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i7"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/30.4) <= 12
                                AND LOWER(b.sex) LIKE 'f%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:70%;" onChange="updatesum7a();updatesum7b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) between 1 and 4
                                AND LOWER(b.sex) LIKE 'f%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) between 4 and 9
                                AND LOWER(b.sex) LIKE 'f%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) between 9 and 14
                                AND LOWER(b.sex) LIKE 'f%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) between 14 and 19
                                AND LOWER(b.sex) LIKE 'f%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) between 19 and 24
                                AND LOWER(b.sex) LIKE 'f%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) between 24 and 49
                                AND LOWER(b.sex) LIKE 'f%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p7" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, visitdate) IN (SELECT a.pepid,min(a.visitdate)
                                FROM  pharmacy a JOIN patient b 
                                ON (a.pepid=b.pepid)
                                where (a.visitdate is not null or a.visitdate!='0000-00-00')
                                and (a.drugname1 != '') 
                                AND ROUND(DATEDIFF(a.visitdate , dob)/365,1) >= 50
                                AND LOWER(b.sex) LIKE 'f%'
                                group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' AND patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot7" style="width:70%;" ></div></div></td>

        </tr>

        
        <tr>
        <th align="left"><font color="black">Number of persons currently on 1st line ARV during the reporting period
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a8" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i8"  value="<?php 
$query2 =  "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:70%;" onChange="updatesum8a();updatesum8b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p8" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT%3TC%NVP' OR drugname2 LIKE  'AZT%3TC%NVP' OR drugname3 LIKE  'AZT%3TC%NVP' OR drugname4 LIKE  'AZT%3TC%NVP')
OR (drugname1 LIKE  'AZT/3TC/EFV' OR drugname2 LIKE  'AZT/3TC/EFV' OR drugname3 LIKE  'AZT/3TC/EFV' OR drugname4 LIKE  'AZT/3TC/EFV')
OR (drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR (drugname1 LIKE  'd4T%3TC%NVP' OR drugname2 LIKE  'd4T%3TC%NVP' OR drugname3 LIKE  'd4T%3TC%NVP' OR drugname4 LIKE  'd4T%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%NVP' OR drugname2 LIKE  'ABC%3TC%NVP' OR drugname3 LIKE  'ABC%3TC%NVP' OR drugname4 LIKE  'ABC%3TC%NVP')
OR (drugname1 LIKE  'ABC%3TC%EFV' OR drugname2 LIKE  'ABC%3TC%EFV' OR drugname3 LIKE  'ABC%3TC%EFV' OR drugname4 LIKE  'ABC%3TC%EFV') 
OR (drugname1 LIKE  'AZT%3TC%EFV' OR drugname2 LIKE  'AZT%3TC%EFV' OR drugname3 LIKE  'AZT%3TC%EFV' OR drugname4 LIKE  'AZT%3TC%EFV') 
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'EFV') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'EFV')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'EFV') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'EFV')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'EFV')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'EFV'))
OR ((drugname1 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'ABC' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'ABC' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'ABC' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP'))
OR ((drugname1 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname3 LIKE 'NVP') 
	OR (drugname2 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname1 LIKE 'NVP')
	OR (drugname3 LIKE 'AZT' AND drugname2 LIKE '3TC' AND drugname1 LIKE 'NVP') 
	OR (drugname3 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname2 LIKE 'NVP')
	OR (drugname2 LIKE 'AZT' AND drugname1 LIKE '3TC' AND drugname3 LIKE 'NVP')
	OR (drugname1 LIKE 'AZT' AND drugname3 LIKE '3TC' AND drugname2 LIKE 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot8" style="width:70%;" ></div></div></td>

        </tr>
        <tr>
        <th align="left"><font color="black">Number of persons currently on 2nd line ARV during the reporting period
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a9" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'm%' ";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i9" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'f%' ";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum9a();updatesum9b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p9"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/LPV/r' OR drugname2 LIKE  'AZT/3TC/LPV/r' OR drugname3 LIKE  'AZT/3TC/LPV/r' OR drugname4 LIKE  'AZT/3TC/LPV/r')
OR (drugname1 LIKE  'AZT%3TC%LPV/r' OR drugname2 LIKE  'AZT%3TC%LPV/r' OR drugname3 LIKE  'AZT%3TC%LPV/r' OR drugname4 LIKE  'AZT%3TC%LPV/r')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'AZT' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'AZT' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'AZT' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'AZT' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'AZT' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'AZT' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'ddi') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'ddi')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'ddi') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'ddi')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'ddi')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'ddi'))
OR ((drugname1 = 'd4T' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'd4T' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'd4T' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'd4T' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'd4T' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'd4T' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
OR ((drugname1 = 'ddi' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ddi' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ddi' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ddi' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ddi' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ddi' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot9" style="width:70%;" ></div></div></td>

        </tr>
        
        <tr>
        <th align="left"><font color="black">Number of persons currently on Salvage ARV during the reporting period
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a10"   value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 14 and 19

AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum10a();updatesum10b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 14 and 19

AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p10" readonly value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(pharmdispensedate , dob)/365,1) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot10" readonly style="width:70%;" onChange="updatesum10a();updatesum10b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Number of persons newly transferred into the ART programme for ART from other facilities during the reporting  month</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" readonly  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum11a();updatesum11b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p11" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND ROUND(DATEDIFF(enroldate , dob)/365,1) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot11" style="width:70%;" ></div></div></td>

        </tr>
        
        <tr>
        <th align="left"><font color="black">No. of ART patients who stopped ART during reporting month</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/30.4) < 12 
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" readonly  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 1 and 4
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 5 and 9
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 10 and 14
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 15 and 19
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 20 and 24
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 25 and 49
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) >= 50
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i12"  value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/30.4) < 12 
AND LOWER(patient.sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum12a();updatesum12b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 1 and 4
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 5 and 9
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 10 and 14
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 15 and 19
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 20 and 24
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 25 and 49
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p12" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) >= 50
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot12" style="width:70%;" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">No. of ART patients who are lost to follow up during reporting month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/30.4) < 12
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/30.4) < 12 
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" readonly  style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 1 and 4
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 1 and 4
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 5 and 9
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 5 and 9
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 10 and 14
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 10 and 14
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 15 and 19
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 15 and 19
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 20 and 24
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 20 and 24
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 25 and 49
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 25 and 49
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) > 50
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) >= 50
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/30.4) < 12 
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/30.4) < 12 
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum13a();updatesum13b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 1 and 4
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 1 and 4
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 5 and 9
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 5 and 9
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 10 and 14
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 10 and 14
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 15 and 19
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 15 and 19
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 20 and 24
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 20 and 24
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) between 25 and 49
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 25 and 49
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p13" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';
	
	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE (interruptions.interruptstatus = 'Lost' AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.interrdate , dob)/365,1) >= 50
      AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$rdate' - INTERVAL 3 MONTH AND '$rdate' )
    AND pharmacy.pharmdispensedate <= '$rdate'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) >= 50
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot13" style="width:70%;" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">No. of ART patients known to have died during reporting month</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" readonly  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 1 and 4
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 5 and 9
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 10 and 14
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 15 and 19
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 20 and 24
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 25 and 49
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) >= 50
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum14a();updatesum14b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 1 and 4
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 5 and 9
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 10 and 14
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 15 and 19
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 20 and 24
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) between 25 and 49
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p14" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(dateofdeath , dob)/365,1) >= 50
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot14" style="width:70%;" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">No. of ART patients transferred out to another ART service point during the reporting month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" readonly  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) between 1 and 4
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) between 5 and 9
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) between 10 and 14
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) between 15 and 19
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) between 20 and 24
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) between 25 and 49
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) >= 50
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) between 1 and 4
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) between 5 and 9
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) between 10 and 14
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) between 15 and 19
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) between 20 and 24
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) between 25 and 49
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p15" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(patienttransoutdate , dob)/365,1) >= 50
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot15" style="width:70%;" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Number of persons who restarted ART therapy after stopping therapy or missed appointment for more than 3 months</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/30.4) < 12
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/30.4) < 12
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" readonly  style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) between 1 and 4
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 1 and 4
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) between 5 and 9
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 5 and 9
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) between 10 and 14
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 10 and 14
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) between 15 and 19
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 15 and 19
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) between 20 and 24
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 20 and 24
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) between 25 and 49
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 25 and 49
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) >= 50
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'm%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) >= 50
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

	
$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/30.4) < 12
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/30.4) < 12
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) between 1 and 4
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 1 and 4
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) between 5 and 9
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 5 and 9
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) between 10 and 14
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 10 and 14
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) between 15 and 19
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 15 and 19
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) between 20 and 24
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 20 and 24
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) between 25 and 49
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) between 25 and 49
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p16" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;

include 'realign.php';

$query2 = "SELECT COUNT( DISTINCT patient.pepid)
FROM  patient LEFT JOIN interruptions
ON(patient.pepid=interruptions.pepid)
JOIN pharmacy
ON(patient.pepid=pharmacy.pepid)
WHERE ((interruptions.interruptstatus = 'Lost' OR interruptions.interruptstatus = 'Stopped') AND ((interruptions.interrdate IS NOT NULL OR interruptions.interrdate !='') )
AND ROUND(DATEDIFF(interruptions.restartdate , dob)/365,1) >= 50
      AND EXTRACT(MONTH from interruptions.restartdate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from interruptions.restartdate) = '$_GET[reportingyear]' 
      AND LOWER(patient.sex) LIKE 'f%')
OR ((patient.dateartstart IS NOT NULL or patient.dateartstart !='')
AND (patient.patienttransout ='' OR patient.patienttransout is null)
AND (patient.patientdied ='' OR patient.patientdied IS NULL)
and PATIENT.PEPID NOT IN ( SELECT DISTINCT PATIENT.PEPID 
                            FROM PATIENT JOIN pharmacy
							ON(patient.pepid=pharmacy.pepid) 
                            WHERE pharmacy.pharmdispensedate BETWEEN '$formerdate' - INTERVAL 3 MONTH AND '$formerdate' )
and PATIENT.PEPID NOT IN ( select pepid
				from pharmacy
				GROUp by pepid
				having  MIN(pharmdispensedate) >= '$formerdate')
      AND EXTRACT(MONTH from pharmacy.pharmdispensedate) = '$_GET[reportingmonth]'
      AND EXTRACT(YEAR from pharmacy.pharmdispensedate) = '$_GET[reportingyear]'
AND ((pharmacy.pharmdispensedate IS NOT NULL OR pharmacy.pharmdispensedate !=''))
AND ROUND(DATEDIFF(pharmacy.pharmdispensedate , dob)/365,1) >= 50
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot16" style="width:70%;" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Number of HIV infected pregnant women newly enrolled for PreART care during the reporting month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m517" value="0"  disabled="disabled" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m517" value="0"  disabled="disabled" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m517" value="0"  disabled="disabled" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m517" value="0"  disabled="disabled" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m517" value="0"  disabled="disabled" style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1217" value="0" disabled  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1217" value="0" disabled  style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1717" value="0" disabled value="" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f517" value="0" disabled style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a17" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 1 and 4
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b17" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 5 and 9
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c17" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 10 and 14
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d17" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 15 and 19
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e17" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 20 and 24
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f17" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 25 and 49
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g17" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(enroldate , dob)/365,1) >= 50
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot17" style="width:70%;" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Number of HIV infected pregnant women newly initiated on ART for their own health during the reporting month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m518" value="0" disabled readonly style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1218" value="0" disabled value="<?php echo $info['f1218']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1718" value="0" disabled value="" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1718" value="0" disabled value="" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1718" value="0" disabled value="" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1718" value="0" disabled value="" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1718" value="0" disabled value="" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1718" value="0" disabled value="" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f518" value="0" disabled style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a18" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 1 and 4
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b18" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 5 and 9
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c18" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 10 and 14
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d18" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 15 and 19
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e18" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 20 and 24
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f18" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND ROUND(DATEDIFF(enroldate , dob)/365,1) between 25 and 49
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g18" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND ROUND(DATEDIFF(enroldate , dob)/365,1) >= 50
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum15a();updatesum15b()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot18" style="width:70%;" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Number of HIV+ patients screened for TB</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="atb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/30.4) < 12 
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" readonly  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="btb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) between 1 and 4
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="ctb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) between 5 and 9
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="dtb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) between 10 and 14
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="etb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) between 15 and 19
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="ftb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) between 20 and 24
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="gtb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) between 25 and 49
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="htb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) >= 50
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="itb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/30.4) < 12
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesumtb11a();updatesumtb11b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="jtb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) between 1 and 4
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="ktb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) between 5 and 9
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="ltb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) between 10 and 14
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="mtb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) between 15 and 19
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="ntb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) between 20 and 24
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="otb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) between 25 and 49
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="ptb11" value="<?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND ROUND(DATEDIFF(b.visitdate , a.dob)/365,1) >= 50
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tottb11" style="width:70%;" ></div></div></td>
</tr>    
        <tr>
        <th align="left"><font color="black">Current Patients receiving clinical care for HIV by the end of the reporting period (6 months)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="acc11" value="<?php 

include 'realignsixmths.php';
        
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND ROUND(DATEDIFF(a.visitdate , b.dob)/30.4) <= 12 
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" readonly  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="bcc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) >= 1 AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) <= 4
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="ccc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) >= 5 AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) <= 9
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="dcc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) >= 10 AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) <= 14
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="ecc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) >= 15 AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) <= 19
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="fcc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) >= 20 AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) <= 24
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="gcc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate' 
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) >= 25 AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) <= 49
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="hcc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) > 49
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="icc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND ROUND(DATEDIFF(a.visitdate , b.dob)/30.4) <= 12
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesumcc11a();updatesumcc11b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="jcc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) between 1 and 4
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="kcc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) between 5 and 9
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="lcc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate' 
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) between 10 and 14
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="mcc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate' 
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) between 15 and 19
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="ncc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate' 
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) between 20 and 24
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="occ11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate' 
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) between 25 and 49
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="pcc11" value="<?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) >= 50
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="totcc11" style="width:70%;" ></div></div></td>
</tr>        

        <tr>
        <th align="left"><font color="black">Current Patients receiving ART in the last 3 months</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="acc12" value="<?php 

include 'realignsixmths.php';
        
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate'
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/30.4) < 12 
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" readonly  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="bcc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate'
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) between 1 and 4
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="ccc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate'
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) between 5 and 9
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="dcc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate'
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) between 10 and 14
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="ecc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate'
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) between 15 and 19
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="fcc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate'
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) between 20 and 24
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="gcc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate' 
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) between 25 and 49
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="hcc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate'
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) >= 50
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="icc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate'
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/30.4) < 12
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesumcc11a();updatesumcc11b()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="jcc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate'
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) between 1 and 4
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="kcc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate'
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) between 5 and 9
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="lcc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate' 
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) between 10 and 14
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="mcc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate' 
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) between 15 and 19
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="ncc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate' 
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) between 20 and 24
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="occ12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate' 
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) between 25 and 49
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="pcc12" value="<?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN '$date3low' AND '$rdate'
AND ROUND(DATEDIFF(a.dispensedate , b.dob)/365) >= 50
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="totcc12" style="width:70%;" ></div></div></td>
</tr>        
 
 	<tr><td><font color="black" style="font-size:24px;">Post-Exposure Prophylaxis</font></td>
    <td><font color="black" style="font-size:12px;">Occupational</font></td>
    <td><font color="black" style="font-size:12px;">Non-Occupational</font></td>
    <td><font color="black" style="font-size:12px;">Grand Total</font></td>
        <tr>
        <th align="left"><font color="black">Number of reported  HIV exposure during the reporting month (excluding HIV exposed babies)
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m519" value="<?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND (dateartstart IS NULL)
AND lower(plan)='pep'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1219" disabled style="width:70%;" value="0" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="sum1219" disabled style="width:70%;" value="0" onChange="endbalcalc1()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Number of persons provided with post-exposure prophylaxis 
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m520" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID)
FROM PHARMACY
WHERE lower(PATIENTTYPE)='occup pep'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' 
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1220" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID)
FROM PHARMACY
WHERE lower(PATIENTTYPE)='non-occup pep'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' 
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="sum1220" style="width:70%;" ></div></div></td>
        </tr>
 	<tr><td><font color="black" style="font-size:24px;">TB & Opportunistic Infections</font></td>
    <td><font color="black" style="font-size:12px;">ART</font></td>
    <td><font color="black" style="font-size:12px;">PreART</font></td>
    <td><font color="black" style="font-size:12px;">Grand Total</font></td>
        <tr>
        <tr>
        <th align="left"><font color="black">Number  of persons enrolled for HIV care (PreART and ART) who were screened for TB this month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a19" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM CLINICALEVAL
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  CLINICALEVAL a JOIN patient b 
		ON (a.pepid=b.pepid)
		where (b.enroldate != '0000-00-00' or b.enroldate not like '0%')
		AND BINARY lower(b.currentmedications) LIKE '%art%'
		and a.tbstatus in ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs') 
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b19" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM CLINICALEVAL
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  CLINICALEVAL a JOIN patient b 
		ON (a.pepid=b.pepid)
		where (b.enroldate != '0000-00-00' or b.enroldate not like '0%')
		AND (BINARY lower(b.currentmedications) NOT LIKE '%art%' OR BINARY b.currentmedications='')
		and a.tbstatus in ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs') 
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot19" style="width:70%;" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Number of persons enrolled for HIV care (PreART and ART) who commenced TB treatment
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a20" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM CLINICALEVAL
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  CLINICALEVAL a JOIN patient b 
		ON (a.pepid=b.pepid)
		where (a.visitdate != '0000-00-00' or a.visitdate not like '0%')
		AND BINARY b.currentmedications LIKE '%ART%'
		and (LOWER(a.tbstatus='yes') or BINARY a.tbstatus like '%INH%' or a.tbstatus LIKE '%Currently on TB treatment%') 
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b20" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM CLINICALEVAL
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  CLINICALEVAL a JOIN patient b 
		ON (a.pepid=b.pepid)
		where (a.visitdate != '0000-00-00' or a.visitdate not like '0%')
		AND BINARY b.currentmedications NOT LIKE '%ART%'
		and (LOWER(a.tbstatus='yes') or BINARY a.tbstatus like '%INH%' or a.tbstatus LIKE '%Currently on TB treatment%') 
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot20" style="width:70%;" ></div></div></td>

        </tr>
        <tr>
        <th align="left"><font color="black">Number of persons enrolled for HIV care (PreART and ART) who were placed on INH prophylaxis this month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a21" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND BINARY b.currentmedications LIKE '%ART%'
		and a.tbdrug LIKE '%INH%' 
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b21" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND BINARY b.currentmedications NOT LIKE '%ART%'
		and a.tbdrug LIKE '%INH%' 
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot21" style="width:70%;" ></div></div></td>

        </tr>
 	<tr><td><font color="black" style="font-size:24px;"></font></td>
    <td><font color="black" style="font-size:12px;">0-4 Yrs</font></td>
    <td><font color="black" style="font-size:12px;">5-9 Yrs</font></td>
    <td><font color="black" style="font-size:12px;">10-14 Yrs</font></td>
    <td><font color="black" style="font-size:12px;">15-19 Yrs</font></td>
    <td><font color="black" style="font-size:12px;">20-24 Yrs</font></td>
    <td><font color="black" style="font-size:12px;">25-49 Yrs</font></td>
    <td><font color="black" style="font-size:12px;"> 50+ Yrs</font></td>
    
    <td><font color="black" style="font-size:12px;">0-4 Yrs</font></td>
    <td><font color="black" style="font-size:12px;">5-9 Yrs</font></td>
    <td><font color="black" style="font-size:12px;">10-14 Yrs</font></td>
    <td><font color="black" style="font-size:12px;">15-19 Yrs</font></td>
    <td><font color="black" style="font-size:12px;">20-24 Yrs</font></td>
    <td><font color="black" style="font-size:12px;">25-49 Yrs</font></td>
    <td><font color="black" style="font-size:12px;"> 50+ Yrs</font></td>
    
    
    <td><font color="black" style="font-size:12px;">Grand Total</font></td>
        <tr>
        <tr>
        <th align="left"><font color="black">Number of persons enrolled for HIV care who initiated CTX  prophylaxis this month
</font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) between 0 and 4
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) between 5 and 9
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) between 10 and 14
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) between 15 and 19
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) between 20 and 24
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) between 25 and 49
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) >= 50
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) between 0 and 4
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) between 5 and 9
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) between 10 and 14
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) between 15 and 19
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) between 20 and 24
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) between 25 and 49
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n22" value="<?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND ROUND(DATEDIFF(a.visitdate , b.dob)/365,1) >= 50
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"  style="width:70%;"  ></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="tot22" style="width:70%;" ></div></div></td>
        </tr>
</table>​
<label>
</label>
</form>
<script src="../jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
$('#submit').click( function() {
	if($('#facname').val() == ''||$('#faccode').val() == ''){
		alert('Facility name and Code Mandatory');
		return false;
	}
	else if($('#reportstart').val() == ''||$('#reportend').val() == ''){
		alert('Report Start and End date mandatory');
		return false;
	}
	else if($('#reportdate').val() == ''){
		alert('Report missing');
		return false;
	}
	else{
			var query = $('#formId').serialize();
        	var url = 'insertcrrirf.php';
        	$.post(url, 
        	query, 
        	function (response) {
        	alert ("CRIRRF Record Added");
			});
		alert ("CRIRRF Record Added");
		return false;
	}
	});
</script> 

</body>
</html>
