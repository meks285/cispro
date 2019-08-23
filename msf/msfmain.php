<?php 
session_start();
ini_set('max_execution_time', 600);
$_SESSION=$_GET;
include '../mandate_/lidh.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$fac="select facilityname from facility;";
$resultfac=mysqli_query($con,$fac);
$infac = mysqli_fetch_assoc($resultfac); 


	class MyClass{
    public function GetUserInformation(){include '../mandate_/lidh.php';

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
$cohortdate1;
echo $cohortdate1;

	
	//echo $rdate;
	include '../mandate_/lidh.php';

$query = "SELECT pepid, uniqueid,hospitalid,surname,othernames,sex,lga,facilityname,ancno, dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate,age,hivposdate
FROM patient WHERE pepid = '$repmonth'";
        $result = mysqli_query($con,$query);
        $info = mysqli_fetch_assoc($result);
        return $info;
	} 
	

	}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysqli_error($con);
session_write_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="../jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
function endbalcalc1() {
document.getElementById('tot1').innerHTML = parseInt(document.getElementById('a1').innerHTML)+parseInt(document.getElementById('b1').innerHTML)+parseInt(document.getElementById('c1').innerHTML)+parseInt(document.getElementById('d1').innerHTML)+parseInt(document.getElementById('e1').innerHTML)+parseInt(document.getElementById('f1').innerHTML)+parseInt(document.getElementById('g1').innerHTML)+parseInt(document.getElementById('h1').innerHTML)+parseInt(document.getElementById('i1').innerHTML)+parseInt(document.getElementById('j1').innerHTML)+parseInt(document.getElementById('k1').innerHTML)+parseInt(document.getElementById('l1').innerHTML)+parseInt(document.getElementById('m1').innerHTML)+parseInt(document.getElementById('n1').innerHTML)+parseInt(document.getElementById('o1').innerHTML)+parseInt(document.getElementById('p1').innerHTML);
document.getElementById('tot2').innerHTML = parseInt(document.getElementById('a2').innerHTML)+parseInt(document.getElementById('b2').innerHTML)+parseInt(document.getElementById('c2').innerHTML)+parseInt(document.getElementById('d2').innerHTML)+parseInt(document.getElementById('e2').innerHTML)+parseInt(document.getElementById('f2').innerHTML)+parseInt(document.getElementById('g2').innerHTML)+parseInt(document.getElementById('h2').innerHTML)+parseInt(document.getElementById('i2').innerHTML)+parseInt(document.getElementById('j2').innerHTML)+parseInt(document.getElementById('k2').innerHTML)+parseInt(document.getElementById('l2').innerHTML)+parseInt(document.getElementById('m2').innerHTML)+parseInt(document.getElementById('n2').innerHTML)+parseInt(document.getElementById('o2').innerHTML)+parseInt(document.getElementById('p2').innerHTML);
document.getElementById('tot3').innerHTML = parseInt(document.getElementById('a3').innerHTML)+parseInt(document.getElementById('b3').innerHTML)+parseInt(document.getElementById('c3').innerHTML)+parseInt(document.getElementById('d3').innerHTML)+parseInt(document.getElementById('e3').innerHTML)+parseInt(document.getElementById('f3').innerHTML)+parseInt(document.getElementById('g3').innerHTML)+parseInt(document.getElementById('h3').innerHTML)+parseInt(document.getElementById('i3').innerHTML)+parseInt(document.getElementById('j3').innerHTML)+parseInt(document.getElementById('k3').innerHTML)+parseInt(document.getElementById('l3').innerHTML)+parseInt(document.getElementById('m3').innerHTML)+parseInt(document.getElementById('n3').innerHTML)+parseInt(document.getElementById('o3').innerHTML)+parseInt(document.getElementById('p3').innerHTML);
document.getElementById('tot4').innerHTML = parseInt(document.getElementById('a4').innerHTML)+parseInt(document.getElementById('b4').innerHTML)+parseInt(document.getElementById('c4').innerHTML)+parseInt(document.getElementById('d4').innerHTML)+parseInt(document.getElementById('e4').innerHTML)+parseInt(document.getElementById('f4').innerHTML)+parseInt(document.getElementById('g4').innerHTML)+parseInt(document.getElementById('h4').innerHTML)+parseInt(document.getElementById('i4').innerHTML)+parseInt(document.getElementById('j4').innerHTML)+parseInt(document.getElementById('k4').innerHTML)+parseInt(document.getElementById('l4').innerHTML)+parseInt(document.getElementById('m4').innerHTML)+parseInt(document.getElementById('n4').innerHTML)+parseInt(document.getElementById('o4').innerHTML)+parseInt(document.getElementById('p4').innerHTML);
document.getElementById('tot5').innerHTML = parseInt(document.getElementById('a5').innerHTML)+parseInt(document.getElementById('b5').innerHTML)+parseInt(document.getElementById('c5').innerHTML)+parseInt(document.getElementById('d5').innerHTML)+parseInt(document.getElementById('e5').innerHTML)+parseInt(document.getElementById('f5').innerHTML)+parseInt(document.getElementById('g5').innerHTML)+parseInt(document.getElementById('h5').innerHTML)+parseInt(document.getElementById('i5').innerHTML)+parseInt(document.getElementById('j5').innerHTML)+parseInt(document.getElementById('k5').innerHTML)+parseInt(document.getElementById('l5').innerHTML)+parseInt(document.getElementById('m5').innerHTML)+parseInt(document.getElementById('n5').innerHTML)+parseInt(document.getElementById('o5').innerHTML)+parseInt(document.getElementById('p5').innerHTML);
document.getElementById('tot6').innerHTML = parseInt(document.getElementById('a6').innerHTML)+parseInt(document.getElementById('b6').innerHTML)+parseInt(document.getElementById('c6').innerHTML)+parseInt(document.getElementById('d6').innerHTML)+parseInt(document.getElementById('e6').innerHTML)+parseInt(document.getElementById('f6').innerHTML)+parseInt(document.getElementById('g6').innerHTML)+parseInt(document.getElementById('h6').innerHTML)+parseInt(document.getElementById('i6').innerHTML)+parseInt(document.getElementById('j6').innerHTML)+parseInt(document.getElementById('k6').innerHTML)+parseInt(document.getElementById('l6').innerHTML)+parseInt(document.getElementById('m6').innerHTML)+parseInt(document.getElementById('n6').innerHTML)+parseInt(document.getElementById('o6').innerHTML)+parseInt(document.getElementById('p6').innerHTML);
document.getElementById('tot7').innerHTML = parseInt(document.getElementById('a7').innerHTML)+parseInt(document.getElementById('b7').innerHTML)+parseInt(document.getElementById('c7').innerHTML)+parseInt(document.getElementById('d7').innerHTML)+parseInt(document.getElementById('e7').innerHTML)+parseInt(document.getElementById('f7').innerHTML)+parseInt(document.getElementById('g7').innerHTML)+parseInt(document.getElementById('h7').innerHTML)+parseInt(document.getElementById('i7').innerHTML)+parseInt(document.getElementById('j7').innerHTML)+parseInt(document.getElementById('k7').innerHTML)+parseInt(document.getElementById('l7').innerHTML)+parseInt(document.getElementById('m7').innerHTML)+parseInt(document.getElementById('n7').innerHTML)+parseInt(document.getElementById('o7').innerHTML)+parseInt(document.getElementById('p7').innerHTML);
document.getElementById('tot8').innerHTML = parseInt(document.getElementById('a8').innerHTML)+parseInt(document.getElementById('b8').innerHTML)+parseInt(document.getElementById('c8').innerHTML)+parseInt(document.getElementById('d8').innerHTML)+parseInt(document.getElementById('e8').innerHTML)+parseInt(document.getElementById('f8').innerHTML)+parseInt(document.getElementById('g8').innerHTML)+parseInt(document.getElementById('h8').innerHTML)+parseInt(document.getElementById('i8').innerHTML)+parseInt(document.getElementById('j8').innerHTML)+parseInt(document.getElementById('k8').innerHTML)+parseInt(document.getElementById('l8').innerHTML)+parseInt(document.getElementById('m8').innerHTML)+parseInt(document.getElementById('n8').innerHTML)+parseInt(document.getElementById('o8').innerHTML)+parseInt(document.getElementById('p8').innerHTML);
document.getElementById('tot9').innerHTML = parseInt(document.getElementById('a9').innerHTML)+parseInt(document.getElementById('b9').innerHTML)+parseInt(document.getElementById('c9').innerHTML)+parseInt(document.getElementById('d9').innerHTML)+parseInt(document.getElementById('e9').innerHTML)+parseInt(document.getElementById('f9').innerHTML)+parseInt(document.getElementById('g9').innerHTML)+parseInt(document.getElementById('h9').innerHTML)+parseInt(document.getElementById('i9').innerHTML)+parseInt(document.getElementById('j9').innerHTML)+parseInt(document.getElementById('k9').innerHTML)+parseInt(document.getElementById('l9').innerHTML)+parseInt(document.getElementById('m9').innerHTML)+parseInt(document.getElementById('n9').innerHTML)+parseInt(document.getElementById('o9').innerHTML)+parseInt(document.getElementById('p9').innerHTML);
document.getElementById('tot10').innerHTML = parseInt(document.getElementById('a10').innerHTML)+parseInt(document.getElementById('b10').innerHTML)+parseInt(document.getElementById('c10').innerHTML)+parseInt(document.getElementById('d10').innerHTML)+parseInt(document.getElementById('e10').innerHTML)+parseInt(document.getElementById('f10').innerHTML)+parseInt(document.getElementById('g10').innerHTML)+parseInt(document.getElementById('h10').innerHTML)+parseInt(document.getElementById('i10').innerHTML)+parseInt(document.getElementById('j10').innerHTML)+parseInt(document.getElementById('k10').innerHTML)+parseInt(document.getElementById('l10').innerHTML)+parseInt(document.getElementById('m10').innerHTML)+parseInt(document.getElementById('n10').innerHTML)+parseInt(document.getElementById('o10').innerHTML)+parseInt(document.getElementById('p10').innerHTML);
document.getElementById('tot11').innerHTML = parseInt(document.getElementById('a11').innerHTML)+parseInt(document.getElementById('b11').innerHTML)+parseInt(document.getElementById('c11').innerHTML)+parseInt(document.getElementById('d11').innerHTML)+parseInt(document.getElementById('e11').innerHTML)+parseInt(document.getElementById('f11').innerHTML)+parseInt(document.getElementById('g11').innerHTML)+parseInt(document.getElementById('h11').innerHTML)+parseInt(document.getElementById('i11').innerHTML)+parseInt(document.getElementById('j11').innerHTML)+parseInt(document.getElementById('k11').innerHTML)+parseInt(document.getElementById('l11').innerHTML)+parseInt(document.getElementById('m11').innerHTML)+parseInt(document.getElementById('n11').innerHTML)+parseInt(document.getElementById('o11').innerHTML)+parseInt(document.getElementById('p11').innerHTML);
document.getElementById('tot12').innerHTML = parseInt(document.getElementById('a12').innerHTML)+parseInt(document.getElementById('b12').innerHTML)+parseInt(document.getElementById('c12').innerHTML)+parseInt(document.getElementById('d12').innerHTML)+parseInt(document.getElementById('e12').innerHTML)+parseInt(document.getElementById('f12').innerHTML)+parseInt(document.getElementById('g12').innerHTML)+parseInt(document.getElementById('h12').innerHTML)+parseInt(document.getElementById('i12').innerHTML)+parseInt(document.getElementById('j12').innerHTML)+parseInt(document.getElementById('k12').innerHTML)+parseInt(document.getElementById('l12').innerHTML)+parseInt(document.getElementById('m12').innerHTML)+parseInt(document.getElementById('n12').innerHTML)+parseInt(document.getElementById('o12').innerHTML)+parseInt(document.getElementById('p12').innerHTML);
document.getElementById('tot13').innerHTML = parseInt(document.getElementById('a13').innerHTML)+parseInt(document.getElementById('b13').innerHTML)+parseInt(document.getElementById('c13').innerHTML)+parseInt(document.getElementById('d13').innerHTML)+parseInt(document.getElementById('e13').innerHTML)+parseInt(document.getElementById('f13').innerHTML)+parseInt(document.getElementById('g13').innerHTML)+parseInt(document.getElementById('h13').innerHTML)+parseInt(document.getElementById('i13').innerHTML)+parseInt(document.getElementById('j13').innerHTML)+parseInt(document.getElementById('k13').innerHTML)+parseInt(document.getElementById('l13').innerHTML)+parseInt(document.getElementById('m13').innerHTML)+parseInt(document.getElementById('n13').innerHTML)+parseInt(document.getElementById('o13').innerHTML)+parseInt(document.getElementById('p13').innerHTML);
document.getElementById('tot14').innerHTML = parseInt(document.getElementById('a14').innerHTML)+parseInt(document.getElementById('b14').innerHTML)+parseInt(document.getElementById('c14').innerHTML)+parseInt(document.getElementById('d14').innerHTML)+parseInt(document.getElementById('e14').innerHTML)+parseInt(document.getElementById('f14').innerHTML)+parseInt(document.getElementById('g14').innerHTML)+parseInt(document.getElementById('h14').innerHTML)+parseInt(document.getElementById('i14').innerHTML)+parseInt(document.getElementById('j14').innerHTML)+parseInt(document.getElementById('k14').innerHTML)+parseInt(document.getElementById('l14').innerHTML)+parseInt(document.getElementById('m14').innerHTML)+parseInt(document.getElementById('n14').innerHTML)+parseInt(document.getElementById('o14').innerHTML)+parseInt(document.getElementById('p14').innerHTML);
document.getElementById('tot15').innerHTML = parseInt(document.getElementById('a15').innerHTML)+parseInt(document.getElementById('b15').innerHTML)+parseInt(document.getElementById('c15').innerHTML)+parseInt(document.getElementById('d15').innerHTML)+parseInt(document.getElementById('e15').innerHTML)+parseInt(document.getElementById('f15').innerHTML)+parseInt(document.getElementById('g15').innerHTML)+parseInt(document.getElementById('h15').innerHTML)+parseInt(document.getElementById('i15').innerHTML)+parseInt(document.getElementById('j15').innerHTML)+parseInt(document.getElementById('k15').innerHTML)+parseInt(document.getElementById('l15').innerHTML)+parseInt(document.getElementById('m15').innerHTML)+parseInt(document.getElementById('n15').innerHTML)+parseInt(document.getElementById('o15').innerHTML)+parseInt(document.getElementById('p15').innerHTML);
document.getElementById('tot16').innerHTML = parseInt(document.getElementById('a16').innerHTML)+parseInt(document.getElementById('b16').innerHTML)+parseInt(document.getElementById('c16').innerHTML)+parseInt(document.getElementById('d16').innerHTML)+parseInt(document.getElementById('e16').innerHTML)+parseInt(document.getElementById('f16').innerHTML)+parseInt(document.getElementById('g16').innerHTML)+parseInt(document.getElementById('h16').innerHTML)+parseInt(document.getElementById('i16').innerHTML)+parseInt(document.getElementById('j16').innerHTML)+parseInt(document.getElementById('k16').innerHTML)+parseInt(document.getElementById('l16').innerHTML)+parseInt(document.getElementById('m16').innerHTML)+parseInt(document.getElementById('n16').innerHTML)+parseInt(document.getElementById('o16').innerHTML)+parseInt(document.getElementById('p16').innerHTML);
document.getElementById('tot17').innerHTML = parseInt(document.getElementById('a17').innerHTML)+parseInt(document.getElementById('b17').innerHTML)+parseInt(document.getElementById('c17').innerHTML)+parseInt(document.getElementById('d17').innerHTML)+parseInt(document.getElementById('e17').innerHTML)+parseInt(document.getElementById('f17').innerHTML)+parseInt(document.getElementById('g17').innerHTML);
document.getElementById('tot18').innerHTML = parseInt(document.getElementById('a18').innerHTML)+parseInt(document.getElementById('b18').innerHTML)+parseInt(document.getElementById('c18').innerHTML)+parseInt(document.getElementById('d18').innerHTML)+parseInt(document.getElementById('e18').innerHTML)+parseInt(document.getElementById('f18').innerHTML)+parseInt(document.getElementById('g18').innerHTML);
document.getElementById('tot19').innerHTML = parseInt(document.getElementById('a19').innerHTML)+parseInt(document.getElementById('b19').innerHTML)+parseInt(document.getElementById('c19').innerHTML)+parseInt(document.getElementById('d19').innerHTML)+parseInt(document.getElementById('e19').innerHTML)+parseInt(document.getElementById('f19').innerHTML)+parseInt(document.getElementById('g19').innerHTML)+parseInt(document.getElementById('h19').innerHTML)+parseInt(document.getElementById('i19').innerHTML)+parseInt(document.getElementById('j19').innerHTML)+parseInt(document.getElementById('k19').innerHTML)+parseInt(document.getElementById('l19').innerHTML)+parseInt(document.getElementById('m19').innerHTML)+parseInt(document.getElementById('n19').innerHTML)+parseInt(document.getElementById('o19').innerHTML)+parseInt(document.getElementById('p19').innerHTML);
document.getElementById('tot20').innerHTML = parseInt(document.getElementById('a20').innerHTML)+parseInt(document.getElementById('b20').innerHTML)+parseInt(document.getElementById('c20').innerHTML)+parseInt(document.getElementById('d20').innerHTML)+parseInt(document.getElementById('e20').innerHTML)+parseInt(document.getElementById('f20').innerHTML)+parseInt(document.getElementById('g20').innerHTML)+parseInt(document.getElementById('h20').innerHTML)+parseInt(document.getElementById('i20').innerHTML)+parseInt(document.getElementById('j20').innerHTML)+parseInt(document.getElementById('k20').innerHTML)+parseInt(document.getElementById('l20').innerHTML)+parseInt(document.getElementById('m20').innerHTML)+parseInt(document.getElementById('n20').innerHTML)+parseInt(document.getElementById('o20').innerHTML)+parseInt(document.getElementById('p20').innerHTML);
document.getElementById('tot21').innerHTML = parseInt(document.getElementById('a21').innerHTML)+parseInt(document.getElementById('b21').innerHTML)+parseInt(document.getElementById('c21').innerHTML)+parseInt(document.getElementById('d21').innerHTML)+parseInt(document.getElementById('e21').innerHTML)+parseInt(document.getElementById('f21').innerHTML)+parseInt(document.getElementById('g21').innerHTML)+parseInt(document.getElementById('h21').innerHTML)+parseInt(document.getElementById('i21').innerHTML)+parseInt(document.getElementById('j21').innerHTML)+parseInt(document.getElementById('k21').innerHTML)+parseInt(document.getElementById('l21').innerHTML)+parseInt(document.getElementById('m21').innerHTML)+parseInt(document.getElementById('n21').innerHTML)+parseInt(document.getElementById('o21').innerHTML)+parseInt(document.getElementById('p21').innerHTML);
document.getElementById('tot22').innerHTML = parseInt(document.getElementById('a22').innerHTML);
document.getElementById('tot23').innerHTML = parseInt(document.getElementById('a23').innerHTML)+parseInt(document.getElementById('b23').innerHTML);
document.getElementById('tot24').innerHTML = parseInt(document.getElementById('a24').innerHTML)+parseInt(document.getElementById('b24').innerHTML);
document.getElementById('tot25').innerHTML = parseInt(document.getElementById('a25').innerHTML)+parseInt(document.getElementById('b25').innerHTML);
document.getElementById('tot26').innerHTML = parseInt(document.getElementById('a26').innerHTML)+parseInt(document.getElementById('b26').innerHTML);
document.getElementById('tot27').innerHTML = parseInt(document.getElementById('a27').innerHTML)+parseInt(document.getElementById('b27').innerHTML)+parseInt(document.getElementById('c27').innerHTML)+parseInt(document.getElementById('d27').innerHTML)+parseInt(document.getElementById('e27').innerHTML)+parseInt(document.getElementById('f27').innerHTML)+parseInt(document.getElementById('g27').innerHTML)+parseInt(document.getElementById('h27').innerHTML)+parseInt(document.getElementById('i27').innerHTML)+parseInt(document.getElementById('j27').innerHTML)+parseInt(document.getElementById('k27').innerHTML)+parseInt(document.getElementById('l27').innerHTML)+parseInt(document.getElementById('m27').innerHTML)+parseInt(document.getElementById('n27').innerHTML);
document.getElementById('tot28').innerHTML = parseInt(document.getElementById('a28').innerHTML)+parseInt(document.getElementById('b28').innerHTML)+parseInt(document.getElementById('c28').innerHTML)+parseInt(document.getElementById('d28').innerHTML)+parseInt(document.getElementById('e28').innerHTML)+parseInt(document.getElementById('f28').innerHTML)+parseInt(document.getElementById('g28').innerHTML)+parseInt(document.getElementById('h28').innerHTML)+parseInt(document.getElementById('i28').innerHTML)+parseInt(document.getElementById('j28').innerHTML)+parseInt(document.getElementById('k28').innerHTML)+parseInt(document.getElementById('l28').innerHTML)+parseInt(document.getElementById('m28').innerHTML)+parseInt(document.getElementById('n28').innerHTML)+parseInt(document.getElementById('o28').innerHTML)+parseInt(document.getElementById('p28').innerHTML);
document.getElementById('tot29').innerHTML = parseInt(document.getElementById('a29').innerHTML)+parseInt(document.getElementById('b29').innerHTML)+parseInt(document.getElementById('c29').innerHTML)+parseInt(document.getElementById('d29').innerHTML)+parseInt(document.getElementById('e29').innerHTML)+parseInt(document.getElementById('f29').innerHTML)+parseInt(document.getElementById('g29').innerHTML)+parseInt(document.getElementById('h29').innerHTML)+parseInt(document.getElementById('i29').innerHTML)+parseInt(document.getElementById('j29').innerHTML)+parseInt(document.getElementById('k29').innerHTML)+parseInt(document.getElementById('l29').innerHTML)+parseInt(document.getElementById('m29').innerHTML)+parseInt(document.getElementById('n29').innerHTML)+parseInt(document.getElementById('o29').innerHTML)+parseInt(document.getElementById('p29').innerHTML);
document.getElementById('tot30').innerHTML = parseInt(document.getElementById('a30').innerHTML)+parseInt(document.getElementById('b30').innerHTML)+parseInt(document.getElementById('c30').innerHTML)+parseInt(document.getElementById('d30').innerHTML)+parseInt(document.getElementById('e30').innerHTML)+parseInt(document.getElementById('f30').innerHTML)+parseInt(document.getElementById('g30').innerHTML)+parseInt(document.getElementById('h30').innerHTML)+parseInt(document.getElementById('i30').innerHTML)+parseInt(document.getElementById('j30').innerHTML)+parseInt(document.getElementById('k30').innerHTML)+parseInt(document.getElementById('l30').innerHTML)+parseInt(document.getElementById('m30').innerHTML)+parseInt(document.getElementById('n30').innerHTML)+parseInt(document.getElementById('o30').innerHTML)+parseInt(document.getElementById('p30').innerHTML);
document.getElementById('tot31').innerHTML = parseInt(document.getElementById('a31').innerHTML)+parseInt(document.getElementById('b31').innerHTML)+parseInt(document.getElementById('c31').innerHTML)+parseInt(document.getElementById('d31').innerHTML)+parseInt(document.getElementById('e31').innerHTML)+parseInt(document.getElementById('f31').innerHTML)+parseInt(document.getElementById('g31').innerHTML)+parseInt(document.getElementById('h31').innerHTML)+parseInt(document.getElementById('i31').innerHTML)+parseInt(document.getElementById('j31').innerHTML)+parseInt(document.getElementById('k31').innerHTML)+parseInt(document.getElementById('l31').innerHTML)+parseInt(document.getElementById('m31').innerHTML)+parseInt(document.getElementById('n31').innerHTML)+parseInt(document.getElementById('o31').innerHTML)+parseInt(document.getElementById('p31').innerHTML);
document.getElementById('tot32').innerHTML = parseInt(document.getElementById('a32').innerHTML)+parseInt(document.getElementById('b32').innerHTML)+parseInt(document.getElementById('c32').innerHTML)+parseInt(document.getElementById('d32').innerHTML)+parseInt(document.getElementById('e32').innerHTML)+parseInt(document.getElementById('f32').innerHTML)+parseInt(document.getElementById('g32').innerHTML)+parseInt(document.getElementById('h32').innerHTML)+parseInt(document.getElementById('i32').innerHTML)+parseInt(document.getElementById('j32').innerHTML)+parseInt(document.getElementById('k32').innerHTML)+parseInt(document.getElementById('l32').innerHTML)+parseInt(document.getElementById('m32').innerHTML)+parseInt(document.getElementById('n32').innerHTML)+parseInt(document.getElementById('o32').innerHTML)+parseInt(document.getElementById('p32').innerHTML);
document.getElementById('tot28b').innerHTML = parseInt(document.getElementById('a28b').innerHTML)+parseInt(document.getElementById('b28b').innerHTML)+parseInt(document.getElementById('c28b').innerHTML)+parseInt(document.getElementById('d28b').innerHTML)+parseInt(document.getElementById('e28b').innerHTML)+parseInt(document.getElementById('f28b').innerHTML)+parseInt(document.getElementById('g28b').innerHTML)+parseInt(document.getElementById('h28b').innerHTML)+parseInt(document.getElementById('i28b').innerHTML)+parseInt(document.getElementById('j28b').innerHTML)+parseInt(document.getElementById('k28b').innerHTML)+parseInt(document.getElementById('l28b').innerHTML)+parseInt(document.getElementById('m28b').innerHTML)+parseInt(document.getElementById('n28b').innerHTML)+parseInt(document.getElementById('o28b').innerHTML)+parseInt(document.getElementById('p28b').innerHTML);

//document.form.tot1.value = parseInt(document.form.a1.value) + parseInt(document.form.b1.value)+ parseInt(document.form.c1.value)+ parseInt(document.form.d1.value)+ parseInt(document.form.e1.value)+ parseInt(document.form.f1.value)+parseInt(document.form.g1.value)+parseInt(document.form.h1.value)+parseInt(document.form.i1.value)+parseInt(document.form.j1.value)+parseInt(document.form.k1.value)+parseInt(document.form.l1.value)+parseInt(document.form.m1.value)+parseInt(document.form.n1.value)+parseInt(document.form.o1.value)+parseInt(document.form.p1.value);
//document.form.tot2.value = parseInt(document.form.a2.value) + parseInt(document.form.b2.value)+ parseInt(document.form.c2.value)+ parseInt(document.form.d2.value)+ parseInt(document.form.e2.value)+ parseInt(document.form.f2.value)+parseInt(document.form.g2.value)+parseInt(document.form.h2.value)+parseInt(document.form.i2.value)+parseInt(document.form.j2.value)+parseInt(document.form.k2.value)+parseInt(document.form.l2.value)+parseInt(document.form.m2.value)+parseInt(document.form.n2.value)+parseInt(document.form.o2.value)+parseInt(document.form.p2.value);
//document.form.tot3.value = parseInt(document.form.a3.value) + parseInt(document.form.b3.value)+ parseInt(document.form.c3.value)+ parseInt(document.form.d3.value)+ parseInt(document.form.e3.value)+ parseInt(document.form.f3.value)+parseInt(document.form.g3.value)+parseInt(document.form.h3.value)+parseInt(document.form.i3.value)+parseInt(document.form.j3.value)+parseInt(document.form.k3.value)+parseInt(document.form.l3.value)+parseInt(document.form.m3.value)+parseInt(document.form.n3.value)+parseInt(document.form.o3.value)+parseInt(document.form.p3.value);
//document.form.tot4.value = parseInt(document.form.a4.value) + parseInt(document.form.b4.value)+ parseInt(document.form.c4.value)+ parseInt(document.form.d4.value)+ parseInt(document.form.e4.value)+ parseInt(document.form.e4.value)+ parseInt(document.form.f4.value)+ parseInt(document.form.g4.value)+ parseInt(document.form.h4.value)+ parseInt(document.form.i4.value)+ parseInt(document.form.j4.value)+ parseInt(document.form.k4.value)+ parseInt(document.form.l4.value)+ parseInt(document.form.m4.value)+ parseInt(document.form.n4.value)+ parseInt(document.form.o4.value)+ parseInt(document.form.p4.value);
//document.form.tot5.value = parseInt(document.form.a5.value) + parseInt(document.form.b5.value)+ parseInt(document.form.c5.value)+ parseInt(document.form.d5.value)+ parseInt(document.form.e5.value)+ parseInt(document.form.f5.value)+parseInt(document.form.g5.value)+parseInt(document.form.h5.value)+parseInt(document.form.i5.value)+parseInt(document.form.j5.value)+parseInt(document.form.k5.value)+parseInt(document.form.l5.value)+parseInt(document.form.m5.value)+parseInt(document.form.n5.value)+parseInt(document.form.o5.value)+parseInt(document.form.p5.value);
//document.form.tot6.value = parseInt(document.form.a6.value) + parseInt(document.form.b6.value)+ parseInt(document.form.c6.value)+ parseInt(document.form.d6.value)+ parseInt(document.form.e6.value)+ parseInt(document.form.f6.value)+parseInt(document.form.g6.value)+parseInt(document.form.h6.value)+parseInt(document.form.i6.value)+parseInt(document.form.j6.value)+parseInt(document.form.k6.value)+parseInt(document.form.l6.value)+parseInt(document.form.m6.value)+parseInt(document.form.n6.value)+parseInt(document.form.o6.value)+parseInt(document.form.p6.value);
//document.form.tot7.value = parseInt(document.form.a7.value) + parseInt(document.form.b7.value)+ parseInt(document.form.c7.value)+ parseInt(document.form.d7.value)+ parseInt(document.form.e7.value)+ parseInt(document.form.f7.value)+parseInt(document.form.g7.value)+parseInt(document.form.h7.value)+parseInt(document.form.i7.value)+parseInt(document.form.j7.value)+parseInt(document.form.k7.value)+parseInt(document.form.l7.value)+parseInt(document.form.m7.value)+parseInt(document.form.n7.value)+parseInt(document.form.o7.value)+parseInt(document.form.p7.value);
//document.form.tot8.value = parseInt(document.form.a8.value) + parseInt(document.form.b8.value)+ parseInt(document.form.c8.value)+ parseInt(document.form.d8.value)+ parseInt(document.form.e8.value)+ parseInt(document.form.f8.value)+parseInt(document.form.g8.value)+parseInt(document.form.h8.value)+parseInt(document.form.i8.value)+parseInt(document.form.j8.value)+parseInt(document.form.k8.value)+parseInt(document.form.l8.value)+parseInt(document.form.m8.value)+parseInt(document.form.n8.value)+parseInt(document.form.o8.value)+parseInt(document.form.p8.value);
//document.form.tot9.value = parseInt(document.form.a9.value) + parseInt(document.form.b9.value)+ parseInt(document.form.c9.value)+ parseInt(document.form.d9.value)+ parseInt(document.form.e9.value)+ parseInt(document.form.f9.value)+parseInt(document.form.g9.value)+parseInt(document.form.h9.value)+parseInt(document.form.i9.value)+parseInt(document.form.j9.value)+parseInt(document.form.k9.value)+parseInt(document.form.l9.value)+parseInt(document.form.m9.value)+parseInt(document.form.n9.value)+parseInt(document.form.o9.value)+parseInt(document.form.p9.value);
//document.form.tot10.value = parseInt(document.form.a10.value) + parseInt(document.form.b10.value)+ parseInt(document.form.c10.value)+ parseInt(document.form.d10.value)+ parseInt(document.form.e10.value)+ parseInt(document.form.f10.value)+parseInt(document.form.g10.value)+parseInt(document.form.h10.value)+parseInt(document.form.i10.value)+parseInt(document.form.j10.value)+parseInt(document.form.k10.value)+parseInt(document.form.l10.value)+parseInt(document.form.m10.value)+parseInt(document.form.n10.value)+parseInt(document.form.o10.value)+parseInt(document.form.p10.value);
//document.form.tot11.value = parseInt(document.form.a11.value) + parseInt(document.form.b11.value)+ parseInt(document.form.c11.value)+ parseInt(document.form.d11.value)+ parseInt(document.form.e11.value)+ parseInt(document.form.f11.value)+parseInt(document.form.g11.value)+parseInt(document.form.h11.value)+parseInt(document.form.i11.value)+parseInt(document.form.j11.value)+parseInt(document.form.k11.value)+parseInt(document.form.l11.value)+parseInt(document.form.m11.value)+parseInt(document.form.n11.value)+parseInt(document.form.o11.value)+parseInt(document.form.p11.value);
//document.form.tottb11.value = parseInt(document.form.atb11.value) + parseInt(document.form.btb11.value)+ parseInt(document.form.ctb11.value)+ parseInt(document.form.dtb11.value)+ parseInt(document.form.etb11.value)+ parseInt(document.form.ftb11.value)+parseInt(document.form.gtb11.value)+parseInt(document.form.htb11.value)+parseInt(document.form.itb11.value)+parseInt(document.form.jtb11.value)+parseInt(document.form.ktb11.value)+parseInt(document.form.ltb11.value)+parseInt(document.form.mtb11.value)+parseInt(document.form.ntb11.value)+parseInt(document.form.otb11.value)+parseInt(document.form.ptb11.value);
//document.form.totcc11.value = parseInt(document.form.acc11.value) + parseInt(document.form.bcc11.value)+ parseInt(document.form.ccc11.value)+ parseInt(document.form.dcc11.value)+ parseInt(document.form.ecc11.value)+ parseInt(document.form.fcc11.value)+parseInt(document.form.gcc11.value)+parseInt(document.form.hcc11.value)+parseInt(document.form.icc11.value)+parseInt(document.form.jcc11.value)+parseInt(document.form.kcc11.value)+parseInt(document.form.lcc11.value)+parseInt(document.form.mcc11.value)+parseInt(document.form.ncc11.value)+parseInt(document.form.occ11.value)+parseInt(document.form.pcc11.value);
//document.form.tot12.value = parseInt(document.form.a12.value) + parseInt(document.form.b12.value)+ parseInt(document.form.c12.value)+ parseInt(document.form.d12.value)+ parseInt(document.form.e12.value)+ parseInt(document.form.f12.value)+parseInt(document.form.g12.value)+parseInt(document.form.h12.value)+parseInt(document.form.i12.value)+parseInt(document.form.j12.value)+parseInt(document.form.k12.value)+parseInt(document.form.l12.value)+parseInt(document.form.m12.value)+parseInt(document.form.n12.value)+parseInt(document.form.o12.value)+parseInt(document.form.p12.value);
//document.form.totcc12.value = parseInt(document.form.acc12.value) + parseInt(document.form.bcc12.value)+ parseInt(document.form.ccc12.value)+ parseInt(document.form.dcc12.value)+ parseInt(document.form.ecc12.value)+ parseInt(document.form.fcc12.value)+parseInt(document.form.gcc12.value)+parseInt(document.form.hcc12.value)+parseInt(document.form.icc12.value)+parseInt(document.form.jcc12.value)+parseInt(document.form.kcc12.value)+parseInt(document.form.lcc12.value)+parseInt(document.form.mcc12.value)+parseInt(document.form.ncc12.value)+parseInt(document.form.occ12.value)+parseInt(document.form.pcc12.value);
//document.form.tot13.value = parseInt(document.form.a13.value) + parseInt(document.form.b13.value)+ parseInt(document.form.c13.value)+ parseInt(document.form.d13.value)+ parseInt(document.form.e13.value)+ parseInt(document.form.f13.value)+parseInt(document.form.g13.value)+parseInt(document.form.h13.value)+parseInt(document.form.i13.value)+parseInt(document.form.j13.value)+parseInt(document.form.k13.value)+parseInt(document.form.l13.value)+parseInt(document.form.m13.value)+parseInt(document.form.n13.value)+parseInt(document.form.o13.value)+parseInt(document.form.p13.value);
//document.form.tot14.value = parseInt(document.form.a14.value) + parseInt(document.form.b14.value)+ parseInt(document.form.c14.value)+ parseInt(document.form.d14.value)+ parseInt(document.form.e14.value)+ parseInt(document.form.f14.value)+parseInt(document.form.g14.value)+parseInt(document.form.h14.value)+parseInt(document.form.i14.value)+parseInt(document.form.j14.value)+parseInt(document.form.k14.value)+parseInt(document.form.l14.value)+parseInt(document.form.m14.value)+parseInt(document.form.n14.value)+parseInt(document.form.o14.value)+parseInt(document.form.p14.value);
//document.form.tot15.value = parseInt(document.form.a15.value) + parseInt(document.form.b15.value)+ parseInt(document.form.c15.value)+ parseInt(document.form.d15.value)+ parseInt(document.form.e15.value)+ parseInt(document.form.f15.value)+parseInt(document.form.g15.value)+parseInt(document.form.h15.value)+parseInt(document.form.i15.value)+parseInt(document.form.j15.value)+parseInt(document.form.k15.value)+parseInt(document.form.l15.value)+parseInt(document.form.m15.value)+parseInt(document.form.n15.value)+parseInt(document.form.o15.value)+parseInt(document.form.p15.value);
//document.form.tot16.value = parseInt(document.form.a16.value) + parseInt(document.form.b16.value)+ parseInt(document.form.c16.value)+ parseInt(document.form.d16.value)+ parseInt(document.form.e16.value)+ parseInt(document.form.f16.value)+parseInt(document.form.g16.value)+parseInt(document.form.h16.value)+parseInt(document.form.i16.value)+parseInt(document.form.j16.value)+parseInt(document.form.k16.value)+parseInt(document.form.l16.value)+parseInt(document.form.m16.value)+parseInt(document.form.n16.value)+parseInt(document.form.o16.value)+parseInt(document.form.p16.value);
//document.form.tot17.value = parseInt(document.form.a17.value) + parseInt(document.form.b17.value)+ parseInt(document.form.c17.value)+ parseInt(document.form.d17.value)+ parseInt(document.form.e17.value)+ parseInt(document.form.f17.value)+parseInt(document.form.g17.value);
//document.form.tot18.value = parseInt(document.form.a18.value) + parseInt(document.form.b18.value)+ parseInt(document.form.c18.value)+ parseInt(document.form.d18.value)+ parseInt(document.form.e18.value)+ parseInt(document.form.f18.value)+parseInt(document.form.g18.value);
//document.form.tot19.value = parseInt(document.form.a19.value) + parseInt(document.form.b19.value);
//document.form.tot20.value = parseInt(document.form.a20.value) + parseInt(document.form.b20.value);
//document.form.tot21.value = parseInt(document.form.a21.value) + parseInt(document.form.b21.value);
//document.form.tot22.value = parseInt(document.form.a22.value) + parseInt(document.form.b22.value)+ parseInt(document.form.c22.value)+ parseInt(document.form.d22.value)+ parseInt(document.form.e22.value)+ parseInt(document.form.f22.value)+parseInt(document.form.g22.value)+parseInt(document.form.h22.value)+parseInt(document.form.i22.value)+parseInt(document.form.j22.value)+parseInt(document.form.k22.value)+parseInt(document.form.l22.value)+parseInt(document.form.m22.value)+parseInt(document.form.n22.value);

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
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND ROUND(DATEDIFF(enroldate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'm%'";
$result2 = mysqli_query($con,$query2);
echo mysqli_fetch_assoc($result2);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div id="b1" style="margin-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysqli_query($con,$query2);
echo mysqli_fetch_assoc($result2);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysqli_query($con,$query2);
mysqli_fetch_assoc($result2);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(ppreviousarvexp) != 'transfer in with records' or prevarvtype is null or ppreviousarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p1" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE pepid IN (select pepid 
                from patient  
		where lower(prevarvexp) != 'transfer in with records' or prevarvtype is null or prevarvexp is null)
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]'
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot1" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of persons cumulatively enrolled into HIV care since the beginning of the program</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p2" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot2" style="padding-right: 3px;"></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">No. of Pre-ART patients transferred in from another ART service point during the reporting month </font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
               <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p3" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND BINARY pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND FLOOR(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>

<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot3" style="padding-right: 3px;"></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">No. of Pre-ART patients transferred out to another ART service point during the reporting month</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>

        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
 <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p4" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND  BINARY patienttransout= 'PRE-ART'
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot4" style="padding-right: 3px;"></div></div></td>
        </tr>
        
        <tr>
        <th align="right"><font color="black">No. of Pre-ART patients who are lost to follow up during reporting month</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/30.4) < 12 
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) between 1 and 4
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) between 5 and 9
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) between 10 and 14
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) between 15 and 19
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) between 20 and 24
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) between 25 and 49
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) >= 50
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/30.4) < 12 
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) between 1 and 4
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) between 5 and 9
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) between 10 and 14
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) between 15 and 19
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) between 20 and 24
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) between 25 and 49
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
       <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p5" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(visitdate , dob)/365) >= 50
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot5" style="padding-right: 3px;"></div></div></td>
        </tr>
        <tr>
        <th align="right"><font color="black">No. of Pre-ART patients known to have died during reporting month</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/30.4) < 12 
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 1 and 4
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 5 and 9
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 10 and 14
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 15 and 19
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 20 and 24
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 25 and 49
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) >= 50
AND LOWER(sex)LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/30.4) < 12
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 1 and 4
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 5 and 9
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 10 and 14
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 15 and 19
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 20 and 24
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 25 and 49
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p6" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) >= 50
AND LOWER(sex)LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot6" style="padding-right: 3px;"></div></div></td>

        </tr>
        <tr>
        <th align="left"><font color="black">Number of persons currently on 1st line ARV during the reporting period
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p8" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot8" style="padding-right: 3px;"></div></div></td>

        </tr>
        <tr>
        <th align="left"><font color="black">Number of persons currently on 2nd line ARV during the reporting period
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'm%' ";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'f%' ";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p9" style="padding-right: 3px;"><?php 
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
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot9" style="padding-right: 3px;"></div></div></td>

        </tr>
        
        <tr>
        <th align="left"><font color="black">Number of persons currently on Salvage ARV during the reporting period
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 14 and 19

AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 14 and 19

AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p10" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  '%DAR%' OR drugname2 LIKE  '%DAR%' OR drugname3 LIKE  '%DAR%' OR drugname4 LIKE  '%DAR%')
OR (drugname1 LIKE  '%RAL%' OR drugname2 LIKE  '%RAL%' OR drugname3 LIKE  '%RAL%' OR drugname4 LIKE  '%RAL%')
OR (drugname1 LIKE  '%ETR%' OR drugname2 LIKE  '%ETR%' OR drugname3 LIKE  '%ETR%' OR drugname4 LIKE  '%ETR%')
OR (drugname1 LIKE  '%RTV%' OR drugname2 LIKE  '%RTV%' OR drugname3 LIKE  '%RTV%' OR drugname4 LIKE  '%RTV%'))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(pharmdispensedate , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot10" style="padding-right: 3px;"><input type="text" name="tot10" readonly style="width:70%;" onChange="updatesum10a();updatesum10b()" ></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Number of persons newly transferred into the ART programme for ART from other facilities during the reporting  month</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p11" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE ppreviousarvexp = 'Transfer in with records' AND BINARY pcurrmeds LIKE '%ART%'
AND EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND enroldate IS NOT NULL
AND FLOOR(DATEDIFF(enroldate , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot11" style="padding-right: 3px;"><input type="text" name="tot11" style="width:70%;" ></div></div></td>

        </tr>
        
        <tr>
        <th align="left"><font color="black">No. of ART patients who stopped ART during reporting month</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/30.4) < 12 
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 1 and 4
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 5 and 9
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 10 and 14
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 15 and 19
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 20 and 24
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 25 and 49
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) >= 50
AND LOWER(patient.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/30.4) < 12 
AND LOWER(patient.sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 1 and 4
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 5 and 9
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 10 and 14
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 15 and 19
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 20 and 24
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 25 and 49
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p12" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient JOIN interruptions
ON(patient.pepid=interruptions.pepid)
WHERE interruptions.interruptstatus = 'Stopped' 
AND patient.dateartstart IS NOT NULL
AND EXTRACT(MONTH from interruptions.interrdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from interruptions.interrdate) = '$_GET[reportingyear]' 
AND interruptions.interrdate IS NOT NULL
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) >= 50
AND LOWER(patient.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot12" style="padding-right: 3px;"></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">No. of ART patients who are lost to follow up during reporting month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/30.4) < 12
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/30.4) < 12 
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 1 and 4
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 1 and 4
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 5 and 9
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 5 and 9
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 10 and 14
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 10 and 14
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 15 and 19
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 15 and 19
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 20 and 24
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 20 and 24
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 25 and 49
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 25 and 49
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) > 50
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) >= 50
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/30.4) < 12 
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/30.4) < 12 
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 1 and 4
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 1 and 4
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 5 and 9
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 5 and 9
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 10 and 14
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 10 and 14
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 15 and 19
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 15 and 19
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 20 and 24
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 20 and 24
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) between 25 and 49
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 25 and 49
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p13" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.interrdate , dob)/365) >= 50
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) >= 50
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot13" style="padding-right: 3px;"></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">No. of ART patients known to have died during reporting month</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p14" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(pepid) 
FROM  patient
WHERE patientdied = 'ART' 
AND (dateartstart IS NOT NULL or dateartstart!='')
AND EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(dateofdeath , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot14" style="padding-right: 3px;"></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">No. of ART patients transferred out to another ART service point during the reporting month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/30.4) < 12 
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) >= 50
AND LOWER(sex) LIKE 'm%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/30.4) < 12
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 1 and 4
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 5 and 9
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 10 and 14
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 15 and 19
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 20 and 24
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) between 25 and 49
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p15" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE patienttransout = 'ART' 
AND dateartstart IS NOT NULL
AND EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(patienttransoutdate , dob)/365) >= 50
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot15" style="padding-right: 3px;"></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Number of persons who restarted ART therapy after stopping therapy or missed appointment for more than 3 months</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/30.4) < 12
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/30.4) < 12
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) between 1 and 4
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 1 and 4
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) between 5 and 9
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 5 and 9
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) between 10 and 14
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 10 and 14
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) between 15 and 19
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 15 and 19
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) between 20 and 24
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 20 and 24
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) between 25 and 49
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 25 and 49
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) >= 50
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) >= 50
AND LOWER(patient.sex) LIKE 'm%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/30.4) < 12
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/30.4) < 12
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) between 1 and 4
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 1 and 4
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) between 5 and 9
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 5 and 9
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) between 10 and 14
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 10 and 14
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) between 15 and 19
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 15 and 19
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) between 20 and 24
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 20 and 24
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) between 25 and 49
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) between 25 and 49
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p16" style="padding-right: 3px;"><?php 
		
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
AND FLOOR(DATEDIFF(interruptions.restartdate , dob)/365) >= 50
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
AND FLOOR(DATEDIFF(pharmacy.pharmdispensedate , dob)/365) >= 50
AND LOWER(patient.sex) LIKE 'f%')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot16" style="padding-right: 3px;"></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Number of HIV infected pregnant women newly enrolled for PreART care during the reporting month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a17" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 1 and 4
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b17" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 5 and 9
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c17" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 10 and 14
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d17" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 15 and 19
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e17" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 20 and 24
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f17" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(enroldate , dob)/365) between 25 and 49
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g17" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(enroldate , dob)/365) >= 50
AND (ancno !='' or lower(currentlypregnant)='yes')
AND LOWER(sex) LIKE 'f%'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot17" style="padding-right: 3px;"></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Number of HIV infected pregnant women newly initiated on ART for their own health during the reporting month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a18" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND FLOOR(DATEDIFF(enroldate , dob)/365) between 1 and 4
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b18" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND FLOOR(DATEDIFF(enroldate , dob)/365) between 5 and 9
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c18" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND FLOOR(DATEDIFF(enroldate , dob)/365) between 10 and 14
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d18" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND FLOOR(DATEDIFF(enroldate , dob)/365) between 15 and 19
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e18" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND FLOOR(DATEDIFF(enroldate , dob)/365) between 20 and 24
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f18" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND FLOOR(DATEDIFF(enroldate , dob)/365) between 25 and 49
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g18" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		and (a.drugname1 != '' or lower(a.patienttype)='art') 
		AND FLOOR(DATEDIFF(enroldate , dob)/365) >= 50
		AND LOWER(b.sex) LIKE 'f%'
		group by a.pepid)
AND lower(pregyn) = 'yes'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot18" style="padding-right: 3px;"></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Current Patients receiving clinical care for HIV by the end of the reporting period (6 months)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a20" style="padding-right: 3px;"><?php 

include 'realignsixmths.php';
        
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/30.4) <= 12 
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND ROUND(DATEDIFF(a.visitdate , b.dob)/365) >= 1 AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) <= 4
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) >= 5 AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) <= 9
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) >= 10 AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) <= 14
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) >= 15 AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) <= 19
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) >= 20 AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) <= 24
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate' 
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) >= 25 AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) <= 49
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) > 49
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/30.4) <= 12
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 1 and 4
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 5 and 9
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate' 
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 10 and 14
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate' 
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 15 and 19
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate' 
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 20 and 24
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate' 
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 25 and 49
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p20" style="padding-right: 3px;"><?php 
$query2 = "SELECT count(DISTINCT a.pepid)
FROM visit a JOIN patient b 
ON (a.pepid=b.pepid)
WHERE a.visittype IN ('Laboratory Order/Result','Clinical Evaluation','Pharmacy Order')
AND a.visitdate BETWEEN '$date6low' AND '$rdate'
AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) >= 50
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot20" style="padding-right: 3px;"></div></div></td>
</tr>        
<tr>
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">CARE INDICATORS</font></th>
        
</tr>
<tr>
        <th align="left"><font color="black">Number of HIV-positive Patients newly enrolled in clinical care during the reporting period who received at least one of the following at enrollment: clinical assessment (WHO staging) OR CD4 count OR viral load</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/30.4) < 12 
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 1 and 4
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 5 and 9
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 10 and 14
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 15 and 19
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 20 and 24
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 25 and 49
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) >= 50
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/30.4) < 12
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 1 and 4
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 5 and 9
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 10 and 14
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 15 and 19
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 20 and 24
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 25 and 49
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p31" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT a.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) >= 50
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;">

<a href="msf_loadquery.php?id=SELECT DISTINCT a.pepid from clinicaleval a JOIN patient p ON(a.pepid=p.pepid) where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
 and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
 AND EXTRACT(MONTH from a.visitdate) = <?php echo $_GET['reportingmonth']; ?> 
 AND EXTRACT(YEAR from a.visitdate) = <?php echo $_GET['reportingyear']; ?>" target="_blank"><div id="tot31" style="padding-right: 3px;"></div></a>
</div></td>
</tr> 
<tr>
        <th align="left"><font color="black">Number of HIV positive adults and children who received at least one of the following during the reporting period: clinical assessment (WHO staging) OR CD4 count OR viral load </font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/30.4) < 12 
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 1 and 4
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 5 and 9
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 10 and 14
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 15 and 19
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 20 and 24
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 25 and 49
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) >= 50
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/30.4) < 12
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 1 and 4
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 5 and 9
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 10 and 14
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 15 and 19
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 20 and 24
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) between 25 and 49
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p32" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT p.pepid)
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(MONTH from a.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from a.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(a.visitdate , p.dob)/365) >= 50
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;">

<a href="msf_loadquery.php?id=SELECT DISTINCT p.pepid from clinicaleval a JOIN patient p ON(a.pepid=p.pepid)
 where (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
 AND EXTRACT(MONTH from a.visitdate) = <?php echo $_GET['reportingmonth']; ?> 
 AND EXTRACT(YEAR from a.visitdate) = <?php echo $_GET['reportingyear']; ?>" target="_blank"><div id="tot32" style="padding-right: 3px;"></div></a>
</div></td>
</tr> 
        <tr>
        <th align="left"><font color="black">Number of HIV+ patients screened for TB</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/30.4) < 12 
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) between 1 and 4
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) between 5 and 9
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) between 10 and 14
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) between 15 and 19
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) between 20 and 24
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) between 25 and 49
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) >= 50
AND LOWER(a.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/30.4) < 12
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) between 1 and 4
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) between 5 and 9
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) between 10 and 14
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) between 15 and 19
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) between 20 and 24
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) between 25 and 49
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p19" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT b.pepid)
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(MONTH from b.visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from b.visitdate) = '$_GET[reportingyear]' 
AND FLOOR(DATEDIFF(b.visitdate , a.dob)/365) >= 50
AND LOWER(a.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;">

<a href="msf_loadquery.php?id=select DISTINCT b.pepid
 from patient a JOIN clinicaleval b
 ON (a.pepid=b.pepid)
 where a.hivposdate NOT IN ('0000-00-00')
 AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
 AND EXTRACT(MONTH from b.visitdate) = <?php echo $_GET['reportingmonth']; ?> 
 AND EXTRACT(YEAR from b.visitdate) = <?php echo $_GET['reportingyear']; ?>" target="_blank"><div id="tot19" style="padding-right: 3px;"></div></a>
</div></td>
</tr>    

<tr>
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">TREATMENT/ART INDICATORS</font></th>
        
</tr>

        
        <tr>
        <th align="left"><font color="black">Number of persons newly started on ART during the reporting month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(v_datemin , p.dob)/30.4) < 12 AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(v_datemin , dob)/365) between 1 and 4
AND LOWER(p.sex) LIKE 'm%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(v_datemin , dob)/365) between 5 and 9
                                AND LOWER(p.sex) LIKE 'm%'
                                AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(v_datemin , dob)/365) between 9 and 14
                                AND LOWER(p.sex) LIKE 'm%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.v_datemin , dob)/365) between 14 and 19
                                AND LOWER(p.sex) LIKE 'm%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.v_datemin , dob)/365) between 19 and 24
                                AND LOWER(p.sex) LIKE 'm%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.v_datemin , dob)/365) between 24 and 49
                                AND LOWER(p.sex) LIKE 'm%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.v_datemin , dob)/365) >= 50
                                AND LOWER(p.sex) LIKE 'm%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.v_datemin , dob)/30.4) <= 12
                                AND LOWER(p.sex) LIKE 'f%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.v_datemin , dob)/365) between 1 and 4
                                AND LOWER(p.sex) LIKE 'f%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.v_datemin , dob)/365) between 5 and 9
                                AND LOWER(p.sex) LIKE 'f%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.v_datemin , dob)/365) between 9 and 14
                                AND LOWER(p.sex) LIKE 'f%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.v_datemin , dob)/365) between 14 and 19
                                AND LOWER(p.sex) LIKE 'f%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.v_datemin , dob)/365) between 19 and 24
                                AND LOWER(p.sex) LIKE 'f%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.v_datemin , dob)/365) between 24 and 49
                                AND LOWER(p.sex) LIKE 'f%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p7" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND EXTRACT(MONTH from v_datemin) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from v_datemin) = '$_GET[reportingyear]'
AND FLOOR(DATEDIFF(b.v_datemin , dob)/365) >= 50
                                AND LOWER(p.sex) LIKE 'f%'
AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;">

<a href="msf_loadquery.php?id=select DISTINCT a.pepid,p.age,p.sex,b.v_datemin as ARTSTARTDATE,b.v_datemax as LastPickupdate
 from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax,drugname1 from pharmacy where drugname1!='' group by pepid) b
 ON(a.pepid=b.pepid)
 JOIN patient p
 ON (p.pepid=a.pepid)
 where a.drugname1 !=''
 AND EXTRACT(MONTH from v_datemin) = <?php echo $_GET['reportingmonth']; ?> 
 AND EXTRACT(YEAR from v_datemin) = <?php echo $_GET['reportingyear']; ?> 
 AND a.patienttype NOT IN ('Occup PEP','Non-Occup PEP','PMTCT')" target="_blank"><div id="tot7" style="padding-right: 3px;"></div></a>
</div></td>
        </tr>

        
 

 <tr>
        <th align="left"><font color="black">Current Patients receiving ART in the last 3 months</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a21" style="padding-right: 3px;"><?php 

include 'realignsixmths.php';
//echo DATE_ADD(DATE_SUB($rdate, INTERVAL 3 MONTH), INTERVAL 1 DAY);
        
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate'
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/30.4) < 12 
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate'
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) between 1 and 4
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate'
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) between 5 and 9
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate'
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) between 10 and 14
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate'
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) between 15 and 19
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate'
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) between 20 and 24
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate' 
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) between 25 and 49
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate'
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) >= 50
AND LOWER(b.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate'
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/30.4) < 12
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate'
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) between 1 and 4
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate'
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) between 5 and 9
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate' 
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) between 10 and 14
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate' 
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) between 15 and 19
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate' 
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) between 20 and 24
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate' 
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) between 25 and 49
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p21" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN patient b
ON (b.pepid=a.pepid)
where lower(a.drugname1) != '' and lower(a.patienttype)='art'
AND a.dispensedate BETWEEN DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY) AND '$rdate'
AND FLOOR(DATEDIFF(a.dispensedate , b.dob)/365) >= 50
AND LOWER(b.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;">

<a href="msf_loadquery.php?id=select DISTINCT a.pepid,b.age,b.sex
 from pharmacy a JOIN patient b
 ON (b.pepid=a.pepid)
 where lower(a.drugname1) != '' and lower(a.patienttype)='art'
 AND a.dispensedate BETWEEN '<?php $query2 = "SELECT DATE_ADD(DATE_SUB('$rdate', INTERVAL 3 MONTH), INTERVAL 1 DAY)"; $result2 = mysql_query($query2,$con); echo mysql_result($result2,0); ?>' AND '<?php echo $rdate; ?>'" target="_blank"><div id="tot21" style="padding-right: 3px;"></div></a>
</div></td>
</tr>   
<tr>
        <th align="left"><font color="black">Number of Adults and Children known to be Alive and on  Treatment 12 Months After ART Initiation (NUM)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12
AND FLOOR(DATEDIFF(b.v_datemax , p.dob)/30.4) < 12 
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12
AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 1 and 4
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12
AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 5 and 9
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12
AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 10 and 14
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 15 and 19
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 20 and 24
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 25 and 49
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) >= 50
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12

AND FLOOR(DATEDIFF(v_datemax , p.dob)/30.4) < 12
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 1 and 4
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 5 and 9
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 10 and 14
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 15 and 19
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 20 and 24
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 25 and 49
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p28" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
AND p.patientdied IS NULL
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
and b.v_datemax between '$cohortdate1' and '$rdate'
and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) >= 50
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;">

<a href="msf_loadquery.php?id=select COUNT(DISTINCT a.pepid)
 from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
 ON(a.pepid=b.pepid)
 JOIN patient p
 ON (p.pepid=a.pepid)
 where a.drugname1 !=''
 AND p.patientdied IS NULL
 and b.v_datemin between '<?php echo $cohortdate2; ?>' and '<?php echo $cohortdate1; ?>'
 and b.v_datemax between '<?php $cohortdate1; ?>' and '<?php $rdate; ?>' and TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + DATEDIFF(v_datemax,b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) / DATEDIFF(b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) + 1 MONTH, b.v_datemin + INTERVAL TIMESTAMPDIFF(MONTH, b.v_datemin, v_datemax) MONTH  ) >= 12" target="_blank"><div id="tot28" style="padding-right: 3px;"></div></a>
</div></td>
</tr>   
<tr>
        <th align="left"><font color="black">Total number of adults and children who initiated ART in the 12 months prior to the beginning of the reporting period, including those who have died, those who have stopped ART, and those lost to follow-up. (DEN)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
AND FLOOR(DATEDIFF(b.v_datemax , p.dob)/30.4) < 12 
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 1 and 4
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 5 and 9
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'
AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 10 and 14
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 15 and 19
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 20 and 24
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 25 and 49
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) >= 50
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'

AND FLOOR(DATEDIFF(v_datemax , p.dob)/30.4) < 12
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 1 and 4
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 5 and 9
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 10 and 14
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 15 and 19
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 20 and 24
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) between 25 and 49
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p28b" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT a.pepid)
from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
ON(a.pepid=b.pepid)
JOIN patient p
ON (p.pepid=a.pepid)
where a.drugname1 !=''
and b.v_datemin between '$cohortdate2' and '$cohortdate1'

AND FLOOR(DATEDIFF(v_datemax , p.dob)/365) >= 50
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;">

<a href="msf_loadquery.php?id=select DISTINCT a.pepid
 from pharmacy a JOIN (select pepid,min(VISITDATE) v_datemin, MAX(visitdate) as v_datemax from pharmacy where drugname1!='' group by pepid) b
 ON(a.pepid=b.pepid)
 JOIN patient p
 ON (p.pepid=a.pepid)
 where a.drugname1 !=''
 and b.v_datemin between '<?php echo $cohortdate2; ?>' and '<?php include 'realign.php'; echo $cohortdate1; ?>'" target="_blank"><div id="tot28b" style="padding-right: 3px;"></div></a>
</div></td>
</tr>               
<tr>
        <th align="left"><font color="black">Number of Viral Load Test from ART Patients conducted in the past 12 months with a Viral Load <1,000 Copies/ml </font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/30.4) < 12 
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 1 and 4
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 5 and 9
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 10 and 14
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 15 and 19
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 20 and 24
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 25 and 49
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) >= 50
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/30.4) < 12
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 1 and 4
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 5 and 9
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 10 and 14
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 15 and 19
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 20 and 24
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 25 and 49
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p29" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) >= 50
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;">

<a href="msf_loadquery.php?id=select DISTINCT l.pepid
 from laboratory l JOIN patient p
 ON (p.pepid=l.pepid)
 where lower(l.tests)='viral load' 
 and l.results < 1000
 AND l.visitdate > '<?php echo $rdate; ?>' - INTERVAL 12 MONTH" target="_blank"><div id="tot29" style="padding-right: 3px;"></div></a>
</div></td>

</tr>
<tr>
        <th align="left"><font color="black">Number of ART Patients with Viral Load Result Documented in the Medical Records within the past 12 months</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/30.4) < 12 
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 1 and 4
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 5 and 9
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 10 and 14
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 15 and 19
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 20 and 24
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 25 and 49
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) >= 50
AND LOWER(p.sex) LIKE 'm%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/30.4) < 12
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 1 and 4
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 5 and 9
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 10 and 14
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 15 and 19
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 20 and 24
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="o30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) between 25 and 49
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="p30" style="padding-right: 3px;"><?php 
$query2 = "select COUNT(DISTINCT l.pepid)
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load'
AND l.visitdate > '$rdate' - INTERVAL 12 MONTH
AND FLOOR(DATEDIFF(l.visitdate , p.dob)/365) >= 50
AND LOWER(p.sex) LIKE 'f%'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;">

<a href="msf_loadquery.php?id=select DISTINCT l.pepid
 from laboratory l JOIN patient p
 ON (p.pepid=l.pepid)
 where lower(l.tests)='viral load'
 AND l.visitdate > '<?php echo $rdate; ?>' - INTERVAL 12 MONTH" target="_blank"><div id="tot30" style="padding-right: 3px;"></div></a>
</div></td>
</tr>         
 	<tr><td style="background-color:#FFCE45"><font color="black" style="font-size:24px;">Post-Exposure Prophylaxis</font></td>
    <td><font color="black" style="font-size:12px;">Occupational</font></td>
    <td><font color="black" style="font-size:12px;">Non-Occupational</font></td>
    <td><font color="black" style="font-size:12px;">Grand Total</font></td>
        <tr>
        <th align="left"><font color="black">Number of reported  HIV exposure during the reporting month (excluding HIV exposed babies)
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a22" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(patient.pepid) 
FROM  patient
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND (dateartstart IS NULL)
AND lower(plan)='pep'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot22" style="padding-right: 3px;"></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Number of persons provided with post-exposure prophylaxis 
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a23" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID)
FROM PHARMACY
WHERE lower(PATIENTTYPE)='occup pep'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' 
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b23" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT PEPID)
FROM PHARMACY
WHERE lower(PATIENTTYPE)='non-occup pep'
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]' 
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot23" style="padding-right: 3px;"></div></div></td>
        </tr>
 	<tr><td style="background-color:#FFCE45"><font color="black" style="font-size:24px;background-color:#FFCE45">TB & Opportunistic Infections</font></td>
    <td><font color="black" style="font-size:12px;">ART</font></td>
    <td><font color="black" style="font-size:12px;">PreART</font></td>
    <td><font color="black" style="font-size:12px;">Grand Total</font></td>
        <tr>
        <tr>
        <th align="left"><font color="black">Number  of persons enrolled for HIV care (PreART and ART) who were screened for TB this month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a24" style="padding-right: 3px;"><?php 
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
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b24" style="padding-right: 3px;"><?php 
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
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot24" style="padding-right: 3px;"></div></div></td>
        </tr>
        <tr>
        <th align="left"><font color="black">Number of persons enrolled for HIV care (PreART and ART) who commenced TB treatment
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a25" style="padding-right: 3px;"><?php 
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
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b25" style="padding-right: 3px;"><?php 
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
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot25" style="padding-right: 3px;"></div></div></td>

        </tr>
        <tr>
        <th align="left"><font color="black">Number of persons enrolled for HIV care (PreART and ART) who were placed on INH prophylaxis this month
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a26" style="padding-right: 3px;"><?php 
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
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b26" style="padding-right: 3px;"><?php 
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
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot26" style="padding-right: 3px;"></div></div></td>

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
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 0 and 4
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 5 and 9
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 10 and 14
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 15 and 19
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 20 and 24
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 25 and 49
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) >= 50
		AND lower(sex) LIKE 'm%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 0 and 4
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 5 and 9
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 10 and 14
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 15 and 19
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 20 and 24
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="m27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) between 25 and 49
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="n27" style="padding-right: 3px;"><?php 
$query2 = "SELECT COUNT(DISTINCT pepid)
FROM pharmacy
where (PEPID, VISITDATE) IN (SELECT a.pepid,min(a.visitdate)
		FROM  pharmacy a JOIN patient b 
		ON (a.pepid=b.pepid)
		where a.visitdate is not null 
		AND a.oidrug LIKE '%CTX%' 
		AND FLOOR(DATEDIFF(a.visitdate , b.dob)/365) >= 50
		AND lower(sex) LIKE 'f%'
		group by a.pepid)
AND EXTRACT(MONTH from visitdate) = '$_GET[reportingmonth]' 
AND EXTRACT(YEAR from visitdate) = '$_GET[reportingyear]'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot27" style="padding-right: 3px;"></div></div></td>
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
