<?php 
session_start();
$_SESSION=$_GET;
$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

	class MyClass{
    public function GetUserInformation(){
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;
		if($repmonth=='1' && $repyear==2007 ) {$rtime = strtotime('1/31/2007'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='2' && $repyear==2007) {$rtime = strtotime('2/28/2007'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='3' && $repyear==2007) {$rtime = strtotime('3/31/2007'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='4' && $repyear==2007) {$rtime = strtotime('4/30/2007'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='5' && $repyear==2007) {$rtime = strtotime('5/31/2007'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='6' && $repyear==2007) {$rtime = strtotime('6/30/2007'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='7' && $repyear==2007) {$rtime = strtotime('7/31/2007'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='8' && $repyear==2007) {$rtime = strtotime('8/31/2007'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='9' && $repyear==2007) {$rtime = strtotime('9/30/2007'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='10' && $repyear==2007) {$rtime = strtotime('10/31/2007'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='11' && $repyear==2007) {$rtime = strtotime('11/30/2007'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='12' && $repyear==2007) {$rtime = strtotime('12/31/2007'); $rdate=date('d/m/Y',$rtime);}
	elseif($repmonth=='1' && $repyear==2008 ) {$rtime = strtotime('1/31/2008'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='2' && $repyear==2008) {$rtime = strtotime('2/28/2008'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='3' && $repyear==2008) {$rtime = strtotime('3/31/2008'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='4' && $repyear==2008) {$rtime = strtotime('4/30/2008'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='5' && $repyear==2008) {$rtime = strtotime('5/31/2008'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='6' && $repyear==2008) {$rtime = strtotime('6/30/2008'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='7' && $repyear==2008) {$rtime = strtotime('7/31/2008'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='8' && $repyear==2008) {$rtime = strtotime('8/31/2008'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='9' && $repyear==2008) {$rtime = strtotime('9/30/2008'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='10' && $repyear==2008) {$rtime = strtotime('10/31/2008'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='11' && $repyear==2008) {$rtime = strtotime('11/30/2008'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='12' && $repyear==2008) {$rtime = strtotime('12/31/2008'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='1' && $repyear==2009 ) {$rtime = strtotime('1/31/2009'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='2' && $repyear==2009) {$rtime = strtotime('2/28/2009'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='3' && $repyear==2009) {$rtime = strtotime('3/31/2009'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='4' && $repyear==2009) {$rtime = strtotime('4/30/2009'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='5' && $repyear==2009) {$rtime = strtotime('5/31/2009'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='6' && $repyear==2009) {$rtime = strtotime('6/30/2009'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='7' && $repyear==2009) {$rtime = strtotime('7/31/2009'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='8' && $repyear==2009) {$rtime = strtotime('8/31/2009'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='9' && $repyear==2009) {$rtime = strtotime('9/30/2009'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='10' && $repyear==2009) {$rtime = strtotime('10/31/2009'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='11' && $repyear==2009) {$rtime = strtotime('11/30/2009'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='12' && $repyear==2009) {$rtime = strtotime('12/31/2009'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='1' && $repyear==2010 ) {$rtime = strtotime('1/31/2010'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='2' && $repyear==2010) {$rtime = strtotime('2/28/2010'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='3' && $repyear==2010) {$rtime = strtotime('3/31/2010'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='4' && $repyear==2010) {$rtime = strtotime('4/30/2010'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='5' && $repyear==2010) {$rtime = strtotime('5/31/2010'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='6' && $repyear==2010) {$rtime = strtotime('6/30/2010'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='7' && $repyear==2010) {$rtime = strtotime('7/31/2010'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='8' && $repyear==2010) {$rtime = strtotime('8/31/2010'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='9' && $repyear==2010) {$rtime = strtotime('9/30/2010'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='10' && $repyear==2010) {$rtime = strtotime('10/31/2010'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='11' && $repyear==2010) {$rtime = strtotime('11/30/2010'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='12' && $repyear==2010) {$rtime = strtotime('12/31/2010'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='1' && $repyear==2011) {$rtime = strtotime('1/31/2011'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='2' && $repyear==2011) {$rtime = strtotime('2/28/2011'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='3' && $repyear==2011) {$rtime = strtotime('3/31/2011'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='4' && $repyear==2011) {$rtime = strtotime('4/30/2011'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='5' && $repyear==2011) {$rtime = strtotime('5/31/2011'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='6' && $repyear==2011) {$rtime = strtotime('6/30/2011'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='7' && $repyear==2011) {$rtime = strtotime('7/31/2011'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='8' && $repyear==2011) {$rtime = strtotime('8/31/2011'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='9' && $repyear==2011) {$rtime = strtotime('9/30/2011'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='10' && $repyear==2011) {$rtime = strtotime('10/31/2011'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='11' && $repyear==2011) {$rtime = strtotime('11/30/2011'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='12' && $repyear==2011) {$rtime = strtotime('12/31/2011'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='1' && $repyear==2012 ) {$rtime = strtotime('1/31/2012'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='2' && $repyear==2012) {$rtime = strtotime('2/28/2012'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='3' && $repyear==2012) {$rtime = strtotime('3/31/2012'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='4' && $repyear==2012) {$rtime = strtotime('4/30/2012'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='5' && $repyear==2012) {$rtime = strtotime('5/31/2012'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='6' && $repyear==2012) {$rtime = strtotime('6/30/2012'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='7' && $repyear==2012) {$rtime = strtotime('7/31/2012'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='8' && $repyear==2012) {$rtime = strtotime('8/31/2012'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='9' && $repyear==2012) {$rtime = strtotime('9/30/2012'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='10' && $repyear==2012) {$rtime = strtotime('10/31/2012'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='11' && $repyear==2012) {$rtime = strtotime('11/30/2012'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='12' && $repyear==2012) {$rtime = strtotime('12/31/2012'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='1' && $repyear==2013 ) {$rtime = strtotime('1/31/2013'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='2' && $repyear==2013) {$rtime = strtotime('2/28/2013'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='3' && $repyear==2013) {$rtime = strtotime('3/31/2013'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='4' && $repyear==2013) {$rtime = strtotime('4/30/2013'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='5' && $repyear==2013) {$rtime = strtotime('5/31/2013'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='6' && $repyear==2013) {$rtime = strtotime('6/30/2013'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='7' && $repyear==2013) {$rtime = strtotime('7/31/2013'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='8' && $repyear==2013) {$rtime = strtotime('8/31/2013'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='9' && $repyear==2013) {$rtime = strtotime('9/30/2013'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='10' && $repyear==2013) {$rtime = strtotime('10/31/2013'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='11' && $repyear==2013) {$rtime = strtotime('11/30/2013'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='12' && $repyear==2013) {$rtime = strtotime('12/31/2013'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='1' && $repyear==2014) {$rtime = strtotime('1/31/2014'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='2' && $repyear==2014) {$rtime = strtotime('2/28/2014'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='3' && $repyear==2014) {$rtime = strtotime('3/31/2014'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='4' && $repyear==2014) {$rtime = strtotime('4/30/2014'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='5' && $repyear==2014) {$rtime = strtotime('5/31/2014'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='6' && $repyear==2014) {$rtime = strtotime('6/30/2014'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='7' && $repyear==2014) {$rtime = strtotime('7/31/2014'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='8' && $repyear==2014) {$rtime = strtotime('8/31/2014'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='9' && $repyear==2014) {$rtime = strtotime('9/30/2014'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='10' && $repyear==2014) {$rtime = strtotime('10/31/2014'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='11' && $repyear==2014) {$rtime = strtotime('11/30/2014'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='12' && $repyear==2014) {$rtime = strtotime('12/31/2014'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='1' && $repyear==2015 ) {$rtime = strtotime('1/31/2015'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='2' && $repyear==2015) {$rtime = strtotime('2/28/2015'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='3' && $repyear==2015) {$rtime = strtotime('3/31/2015'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='4' && $repyear==2015) {$rtime = strtotime('4/30/2015'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='5' && $repyear==2015) {$rtime = strtotime('5/31/2015'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='6' && $repyear==2015) {$rtime = strtotime('6/30/2015'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='7' && $repyear==2015) {$rtime = strtotime('7/31/2015'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='8' && $repyear==2015) {$rtime = strtotime('8/31/2015'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='9' && $repyear==2015) {$rtime = strtotime('9/30/2015'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='10' && $repyear==2015) {$rtime = strtotime('10/31/2015'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='11' && $repyear==2015) {$rtime = strtotime('11/30/2015'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='12' && $repyear==2015) {$rtime = strtotime('12/31/2015'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='1' && $repyear==2016) {$rtime = strtotime('1/31/2016'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='2' && $repyear==2016) {$rtime = strtotime('2/28/2016'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='3' && $repyear==2016) {$rtime = strtotime('3/31/2016'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='4' && $repyear==2016) {$rtime = strtotime('4/30/2016'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='5' && $repyear==2016) {$rtime = strtotime('5/31/2016'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='6' && $repyear==2016) {$rtime = strtotime('6/30/2016'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='7' && $repyear==2016) {$rtime = strtotime('7/31/2016'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='8' && $repyear==2016) {$rtime = strtotime('8/31/2016'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='9' && $repyear==2016) {$rtime = strtotime('9/30/2016'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='10' && $repyear==2016) {$rtime = strtotime('10/31/2016'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='11' && $repyear==2016) {$rtime = strtotime('11/30/2016'); $rdate=date('d/m/Y',$rtime);} 
	elseif($repmonth=='12' && $repyear==2016) {$rtime = strtotime('12/31/2016'); $rdate=date('d/m/Y',$rtime);} 
	else {$rdate = "";}
	
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
document.form.sum171.value = parseInt(document.form.m121.value) + parseInt(document.form.m171.value)+ parseInt(document.form.m51.value)+ parseInt(document.form.f121.value)+ parseInt(document.form.f171.value)+ parseInt(document.form.f51.value);
document.form.sum172.value = parseInt(document.form.m122.value) + parseInt(document.form.m172.value)+ parseInt(document.form.m52.value)+ parseInt(document.form.f122.value)+ parseInt(document.form.f172.value)+ parseInt(document.form.f52.value);
document.form.sum173.value = parseInt(document.form.m123.value) + parseInt(document.form.m173.value)+ parseInt(document.form.m53.value)+ parseInt(document.form.f123.value)+ parseInt(document.form.f173.value)+ parseInt(document.form.f53.value);
document.form.sum174.value = parseInt(document.form.m124.value) + parseInt(document.form.m174.value)+ parseInt(document.form.m54.value)+ parseInt(document.form.f124.value)+ parseInt(document.form.f174.value)+ parseInt(document.form.f54.value);
document.form.sum175.value = parseInt(document.form.m125.value) + parseInt(document.form.m175.value)+ parseInt(document.form.m55.value)+ parseInt(document.form.f125.value)+ parseInt(document.form.f175.value)+ parseInt(document.form.f55.value);
document.form.sum176.value = parseInt(document.form.m126.value) + parseInt(document.form.m176.value)+ parseInt(document.form.m56.value)+ parseInt(document.form.f126.value)+ parseInt(document.form.f176.value)+ parseInt(document.form.f56.value);
document.form.sum177.value = parseInt(document.form.m127.value) + parseInt(document.form.m177.value)+ parseInt(document.form.m57.value)+ parseInt(document.form.f127.value)+ parseInt(document.form.f177.value)+ parseInt(document.form.f57.value);
document.form.sum178.value = parseInt(document.form.m128.value) + parseInt(document.form.m178.value)+ parseInt(document.form.m58.value)+ parseInt(document.form.f128.value)+ parseInt(document.form.f178.value)+ parseInt(document.form.f58.value);
document.form.sum179.value = parseInt(document.form.m129.value) + parseInt(document.form.m179.value)+ parseInt(document.form.m59.value)+ parseInt(document.form.f129.value)+ parseInt(document.form.f179.value)+ parseInt(document.form.f59.value);
document.form.sum1710.value = parseInt(document.form.m510.value) + parseInt(document.form.m1210.value)+ parseInt(document.form.m1710.value)+ parseInt(document.form.f510.value)+ parseInt(document.form.f1710.value)+ parseInt(document.form.f1210.value);
document.form.sum1711.value = parseInt(document.form.m511.value) + parseInt(document.form.m1211.value)+ parseInt(document.form.m1711.value)+ parseInt(document.form.f511.value)+ parseInt(document.form.f1711.value)+ parseInt(document.form.f1211.value);
document.form.sum1712.value = parseInt(document.form.m512.value) + parseInt(document.form.m1212.value)+ parseInt(document.form.m1712.value)+ parseInt(document.form.f512.value)+ parseInt(document.form.f1712.value)+ parseInt(document.form.f1212.value);
document.form.sum1713.value = parseInt(document.form.m513.value) + parseInt(document.form.m1213.value)+ parseInt(document.form.m1713.value)+ parseInt(document.form.f513.value)+ parseInt(document.form.f1713.value)+ parseInt(document.form.f1213.value);
document.form.sum1714.value = parseInt(document.form.m514.value) + parseInt(document.form.m1214.value)+ parseInt(document.form.m1714.value)+ parseInt(document.form.f514.value)+ parseInt(document.form.f1714.value)+ parseInt(document.form.f1214.value);
document.form.sum1715.value = parseInt(document.form.m515.value) + parseInt(document.form.m1215.value)+ parseInt(document.form.m1715.value)+ parseInt(document.form.f515.value)+ parseInt(document.form.f1715.value)+ parseInt(document.form.f1215.value);
document.form.sum1716.value = parseInt(document.form.m516.value) + parseInt(document.form.m1216.value)+ parseInt(document.form.m1716.value)+ parseInt(document.form.f516.value)+ parseInt(document.form.f1716.value)+ parseInt(document.form.f1216.value);
document.form.sum1717.value = parseInt(document.form.m517.value) + parseInt(document.form.m1217.value)+ parseInt(document.form.m1717.value)+ parseInt(document.form.f517.value)+ parseInt(document.form.f1717.value)+ parseInt(document.form.f1217.value);
document.form.sum1718.value = parseInt(document.form.m518.value) + parseInt(document.form.m1218.value)+ parseInt(document.form.m1718.value)+ parseInt(document.form.f518.value)+ parseInt(document.form.f1718.value)+ parseInt(document.form.f1218.value);
document.form.sum1220.value = parseInt(document.form.m520.value) + parseInt(document.form.m1220.value);
document.form.sum1219.value = parseInt(document.form.m519.value) + parseInt(document.form.m1219.value);
document.form.sum1221.value = parseInt(document.form.m521.value) + parseInt(document.form.m1221.value);
document.form.sum1222.value = parseInt(document.form.m522.value) + parseInt(document.form.m1222.value);
document.form.sum1223.value = parseInt(document.form.m523.value) + parseInt(document.form.m1223.value);
document.form.sum1224.value = parseInt(document.form.m524.value) + parseInt(document.form.m1224.value)+ parseInt(document.form.m1724.value)+ parseInt(document.form.f524.value);
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CQI</title>
<h1 align="center"> Clinical Quality Indicators														
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
<input type="text" name="facname" id="facname"  value="<?php echo $info['facname']?>" />

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

<label>Reporting Year: 
</label>
<?php echo $_GET['reportingyear']; ?>

</fieldset>
</div>
   <table align="center" style="background-color:#FFF; width: 75%; alignment-adjust:central" cellpadding="0" cellspacing="0" border="1">
   <tr>
      <th><font color="black" style="transform-style:flat">Type:</font></th>
      <th><font color="black">Description:</font></th>
      <th><font color="black">Numerator:</font>
      <th><font color="black">Denominator:</font></th>
      <th><font color="black">PERCENTAGE:</font></th>
       </tr>
 <tr>
           <th align="left"><font color="black">ART 1</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;">
        Percentage of eligible adults that initiated ART over the last 6 months (CD4)</div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px; font-size:24px; font-style:normal;"><?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;
		if($repmonth=='1' && $repyear==2007 ) {$rtime = strtotime('1/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2007) {$rtime = strtotime('2/28/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2007) {$rtime = strtotime('3/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2007) {$rtime = strtotime('4/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2007) {$rtime = strtotime('5/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2007) {$rtime = strtotime('6/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2007) {$rtime = strtotime('7/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2007) {$rtime = strtotime('8/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2007) {$rtime = strtotime('9/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2007) {$rtime = strtotime('10/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2007) {$rtime = strtotime('11/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2007) {$rtime = strtotime('12/31/2007'); $rdate=date('Y/m/d',$rtime);}
	elseif($repmonth=='1' && $repyear==2008 ) {$rtime = strtotime('1/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2008) {$rtime = strtotime('2/28/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2008) {$rtime = strtotime('3/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2008) {$rtime = strtotime('4/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2008) {$rtime = strtotime('5/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2008) {$rtime = strtotime('6/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2008) {$rtime = strtotime('7/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2008) {$rtime = strtotime('8/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2008) {$rtime = strtotime('9/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2008) {$rtime = strtotime('10/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2008) {$rtime = strtotime('11/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2008) {$rtime = strtotime('12/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2009 ) {$rtime = strtotime('1/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2009) {$rtime = strtotime('2/28/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2009) {$rtime = strtotime('3/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2009) {$rtime = strtotime('4/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2009) {$rtime = strtotime('5/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2009) {$rtime = strtotime('6/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2009) {$rtime = strtotime('7/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2009) {$rtime = strtotime('8/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2009) {$rtime = strtotime('9/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2009) {$rtime = strtotime('10/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2009) {$rtime = strtotime('11/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2009) {$rtime = strtotime('12/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2010 ) {$rtime = strtotime('1/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2010) {$rtime = strtotime('2/28/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2010) {$rtime = strtotime('3/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2010) {$rtime = strtotime('4/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2010) {$rtime = strtotime('5/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2010) {$rtime = strtotime('6/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2010) {$rtime = strtotime('7/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2010) {$rtime = strtotime('8/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2010) {$rtime = strtotime('9/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2010) {$rtime = strtotime('10/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2010) {$rtime = strtotime('11/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2010) {$rtime = strtotime('12/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2011) {$rtime = strtotime('1/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2011) {$rtime = strtotime('2/28/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2011) {$rtime = strtotime('3/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2011) {$rtime = strtotime('4/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2011) {$rtime = strtotime('5/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2011) {$rtime = strtotime('6/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2011) {$rtime = strtotime('7/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2011) {$rtime = strtotime('8/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2011) {$rtime = strtotime('9/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2011) {$rtime = strtotime('10/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2011) {$rtime = strtotime('11/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2011) {$rtime = strtotime('12/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2012 ) {$rtime = strtotime('1/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2012) {$rtime = strtotime('2/28/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2012) {$rtime = strtotime('3/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2012) {$rtime = strtotime('4/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2012) {$rtime = strtotime('5/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2012) {$rtime = strtotime('6/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2012) {$rtime = strtotime('7/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2012) {$rtime = strtotime('8/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2012) {$rtime = strtotime('9/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2012) {$rtime = strtotime('10/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2012) {$rtime = strtotime('11/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2012) {$rtime = strtotime('12/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2013 ) {$rtime = strtotime('1/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2013) {$rtime = strtotime('2/28/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2013) {$rtime = strtotime('3/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2013) {$rtime = strtotime('4/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2013) {$rtime = strtotime('5/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2013) {$rtime = strtotime('6/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2013) {$rtime = strtotime('7/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2013) {$rtime = strtotime('8/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2013) {$rtime = strtotime('9/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2013) {$rtime = strtotime('10/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2013) {$rtime = strtotime('11/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2013) {$rtime = strtotime('12/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2014) {$rtime = strtotime('1/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2014) {$rtime = strtotime('2/28/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2014) {$rtime = strtotime('3/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2014) {$rtime = strtotime('4/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2014) {$rtime = strtotime('5/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2014) {$rtime = strtotime('6/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2014) {$rtime = strtotime('7/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2014) {$rtime = strtotime('8/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2014) {$rtime = strtotime('9/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2014) {$rtime = strtotime('10/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2014) {$rtime = strtotime('11/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2014) {$rtime = strtotime('12/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2015 ) {$rtime = strtotime('1/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2015) {$rtime = strtotime('2/28/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2015) {$rtime = strtotime('3/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2015) {$rtime = strtotime('4/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2015) {$rtime = strtotime('5/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2015) {$rtime = strtotime('6/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2015) {$rtime = strtotime('7/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2015) {$rtime = strtotime('8/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2015) {$rtime = strtotime('9/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2015) {$rtime = strtotime('10/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2015) {$rtime = strtotime('11/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2015) {$rtime = strtotime('12/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2016) {$rtime = strtotime('1/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2016) {$rtime = strtotime('2/28/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2016) {$rtime = strtotime('3/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2016) {$rtime = strtotime('4/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2016) {$rtime = strtotime('5/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2016) {$rtime = strtotime('6/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2016) {$rtime = strtotime('7/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2016) {$rtime = strtotime('8/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2016) {$rtime = strtotime('9/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2016) {$rtime = strtotime('10/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2016) {$rtime = strtotime('11/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2016) {$rtime = strtotime('12/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	else {$rdate = "";}

$query2 = "select COUNT(distinct t.pepid)
from
  pharmacy t JOIN patient p
ON (t.pepid=p.pepid)
where lower(visittype)='initial' AND lower(patienttype)='art' AND ROUND(DATEDIFF(t.dispensedate , p.dob)/365) > 15 AND
  t.dispensedate >= DATE_ADD(LAST_DAY(DATE_SUB('$rdate', INTERVAL 6 MONTH)), INTERVAL 1 DAY) and
t.dispensedate <= DATE_SUB('$rdate', INTERVAL 1 DAY)";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;font-size:24px; font-style:normal;"><?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;
		if($repmonth=='1' && $repyear==2007 ) {$rtime = strtotime('1/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2007) {$rtime = strtotime('2/28/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2007) {$rtime = strtotime('3/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2007) {$rtime = strtotime('4/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2007) {$rtime = strtotime('5/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2007) {$rtime = strtotime('6/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2007) {$rtime = strtotime('7/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2007) {$rtime = strtotime('8/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2007) {$rtime = strtotime('9/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2007) {$rtime = strtotime('10/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2007) {$rtime = strtotime('11/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2007) {$rtime = strtotime('12/31/2007'); $rdate=date('Y/m/d',$rtime);}
	elseif($repmonth=='1' && $repyear==2008 ) {$rtime = strtotime('1/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2008) {$rtime = strtotime('2/28/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2008) {$rtime = strtotime('3/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2008) {$rtime = strtotime('4/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2008) {$rtime = strtotime('5/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2008) {$rtime = strtotime('6/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2008) {$rtime = strtotime('7/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2008) {$rtime = strtotime('8/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2008) {$rtime = strtotime('9/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2008) {$rtime = strtotime('10/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2008) {$rtime = strtotime('11/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2008) {$rtime = strtotime('12/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2009 ) {$rtime = strtotime('1/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2009) {$rtime = strtotime('2/28/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2009) {$rtime = strtotime('3/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2009) {$rtime = strtotime('4/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2009) {$rtime = strtotime('5/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2009) {$rtime = strtotime('6/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2009) {$rtime = strtotime('7/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2009) {$rtime = strtotime('8/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2009) {$rtime = strtotime('9/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2009) {$rtime = strtotime('10/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2009) {$rtime = strtotime('11/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2009) {$rtime = strtotime('12/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2010 ) {$rtime = strtotime('1/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2010) {$rtime = strtotime('2/28/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2010) {$rtime = strtotime('3/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2010) {$rtime = strtotime('4/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2010) {$rtime = strtotime('5/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2010) {$rtime = strtotime('6/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2010) {$rtime = strtotime('7/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2010) {$rtime = strtotime('8/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2010) {$rtime = strtotime('9/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2010) {$rtime = strtotime('10/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2010) {$rtime = strtotime('11/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2010) {$rtime = strtotime('12/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2011) {$rtime = strtotime('1/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2011) {$rtime = strtotime('2/28/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2011) {$rtime = strtotime('3/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2011) {$rtime = strtotime('4/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2011) {$rtime = strtotime('5/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2011) {$rtime = strtotime('6/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2011) {$rtime = strtotime('7/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2011) {$rtime = strtotime('8/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2011) {$rtime = strtotime('9/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2011) {$rtime = strtotime('10/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2011) {$rtime = strtotime('11/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2011) {$rtime = strtotime('12/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2012 ) {$rtime = strtotime('1/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2012) {$rtime = strtotime('2/28/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2012) {$rtime = strtotime('3/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2012) {$rtime = strtotime('4/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2012) {$rtime = strtotime('5/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2012) {$rtime = strtotime('6/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2012) {$rtime = strtotime('7/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2012) {$rtime = strtotime('8/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2012) {$rtime = strtotime('9/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2012) {$rtime = strtotime('10/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2012) {$rtime = strtotime('11/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2012) {$rtime = strtotime('12/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2013 ) {$rtime = strtotime('1/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2013) {$rtime = strtotime('2/28/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2013) {$rtime = strtotime('3/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2013) {$rtime = strtotime('4/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2013) {$rtime = strtotime('5/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2013) {$rtime = strtotime('6/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2013) {$rtime = strtotime('7/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2013) {$rtime = strtotime('8/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2013) {$rtime = strtotime('9/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2013) {$rtime = strtotime('10/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2013) {$rtime = strtotime('11/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2013) {$rtime = strtotime('12/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2014) {$rtime = strtotime('1/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2014) {$rtime = strtotime('2/28/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2014) {$rtime = strtotime('3/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2014) {$rtime = strtotime('4/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2014) {$rtime = strtotime('5/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2014) {$rtime = strtotime('6/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2014) {$rtime = strtotime('7/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2014) {$rtime = strtotime('8/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2014) {$rtime = strtotime('9/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2014) {$rtime = strtotime('10/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2014) {$rtime = strtotime('11/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2014) {$rtime = strtotime('12/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2015 ) {$rtime = strtotime('1/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2015) {$rtime = strtotime('2/28/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2015) {$rtime = strtotime('3/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2015) {$rtime = strtotime('4/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2015) {$rtime = strtotime('5/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2015) {$rtime = strtotime('6/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2015) {$rtime = strtotime('7/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2015) {$rtime = strtotime('8/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2015) {$rtime = strtotime('9/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2015) {$rtime = strtotime('10/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2015) {$rtime = strtotime('11/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2015) {$rtime = strtotime('12/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2016) {$rtime = strtotime('1/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2016) {$rtime = strtotime('2/28/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2016) {$rtime = strtotime('3/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2016) {$rtime = strtotime('4/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2016) {$rtime = strtotime('5/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2016) {$rtime = strtotime('6/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2016) {$rtime = strtotime('7/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2016) {$rtime = strtotime('8/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2016) {$rtime = strtotime('9/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2016) {$rtime = strtotime('10/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2016) {$rtime = strtotime('11/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2016) {$rtime = strtotime('12/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	else {$rdate = "";}


$query2 = "select COUNT(distinct t.pepid)
from laboratory t join patient p
on (t.pepid=p.pepid)
where lower(tests)='cd4' and results <= 500 AND lower(artstatus)='non-art'
AND ROUND(DATEDIFF(t.visitdate , p.dob)/365) > 15 AND
  t.visitdate >= DATE_ADD(LAST_DAY(DATE_SUB('$rdate', INTERVAL 6 MONTH)), INTERVAL 1 DAY) and
t.visitdate <= DATE_SUB('$rdate', INTERVAL 1 DAY)";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;font-size:24px; font-style:normal;"><?php 

$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;
		if($repmonth=='1' && $repyear==2007 ) {$rtime = strtotime('1/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2007) {$rtime = strtotime('2/28/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2007) {$rtime = strtotime('3/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2007) {$rtime = strtotime('4/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2007) {$rtime = strtotime('5/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2007) {$rtime = strtotime('6/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2007) {$rtime = strtotime('7/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2007) {$rtime = strtotime('8/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2007) {$rtime = strtotime('9/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2007) {$rtime = strtotime('10/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2007) {$rtime = strtotime('11/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2007) {$rtime = strtotime('12/31/2007'); $rdate=date('Y/m/d',$rtime);}
	elseif($repmonth=='1' && $repyear==2008 ) {$rtime = strtotime('1/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2008) {$rtime = strtotime('2/28/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2008) {$rtime = strtotime('3/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2008) {$rtime = strtotime('4/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2008) {$rtime = strtotime('5/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2008) {$rtime = strtotime('6/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2008) {$rtime = strtotime('7/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2008) {$rtime = strtotime('8/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2008) {$rtime = strtotime('9/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2008) {$rtime = strtotime('10/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2008) {$rtime = strtotime('11/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2008) {$rtime = strtotime('12/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2009 ) {$rtime = strtotime('1/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2009) {$rtime = strtotime('2/28/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2009) {$rtime = strtotime('3/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2009) {$rtime = strtotime('4/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2009) {$rtime = strtotime('5/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2009) {$rtime = strtotime('6/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2009) {$rtime = strtotime('7/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2009) {$rtime = strtotime('8/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2009) {$rtime = strtotime('9/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2009) {$rtime = strtotime('10/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2009) {$rtime = strtotime('11/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2009) {$rtime = strtotime('12/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2010 ) {$rtime = strtotime('1/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2010) {$rtime = strtotime('2/28/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2010) {$rtime = strtotime('3/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2010) {$rtime = strtotime('4/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2010) {$rtime = strtotime('5/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2010) {$rtime = strtotime('6/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2010) {$rtime = strtotime('7/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2010) {$rtime = strtotime('8/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2010) {$rtime = strtotime('9/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2010) {$rtime = strtotime('10/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2010) {$rtime = strtotime('11/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2010) {$rtime = strtotime('12/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2011) {$rtime = strtotime('1/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2011) {$rtime = strtotime('2/28/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2011) {$rtime = strtotime('3/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2011) {$rtime = strtotime('4/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2011) {$rtime = strtotime('5/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2011) {$rtime = strtotime('6/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2011) {$rtime = strtotime('7/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2011) {$rtime = strtotime('8/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2011) {$rtime = strtotime('9/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2011) {$rtime = strtotime('10/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2011) {$rtime = strtotime('11/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2011) {$rtime = strtotime('12/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2012 ) {$rtime = strtotime('1/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2012) {$rtime = strtotime('2/28/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2012) {$rtime = strtotime('3/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2012) {$rtime = strtotime('4/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2012) {$rtime = strtotime('5/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2012) {$rtime = strtotime('6/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2012) {$rtime = strtotime('7/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2012) {$rtime = strtotime('8/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2012) {$rtime = strtotime('9/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2012) {$rtime = strtotime('10/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2012) {$rtime = strtotime('11/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2012) {$rtime = strtotime('12/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2013 ) {$rtime = strtotime('1/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2013) {$rtime = strtotime('2/28/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2013) {$rtime = strtotime('3/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2013) {$rtime = strtotime('4/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2013) {$rtime = strtotime('5/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2013) {$rtime = strtotime('6/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2013) {$rtime = strtotime('7/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2013) {$rtime = strtotime('8/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2013) {$rtime = strtotime('9/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2013) {$rtime = strtotime('10/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2013) {$rtime = strtotime('11/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2013) {$rtime = strtotime('12/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2014) {$rtime = strtotime('1/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2014) {$rtime = strtotime('2/28/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2014) {$rtime = strtotime('3/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2014) {$rtime = strtotime('4/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2014) {$rtime = strtotime('5/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2014) {$rtime = strtotime('6/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2014) {$rtime = strtotime('7/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2014) {$rtime = strtotime('8/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2014) {$rtime = strtotime('9/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2014) {$rtime = strtotime('10/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2014) {$rtime = strtotime('11/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2014) {$rtime = strtotime('12/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2015 ) {$rtime = strtotime('1/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2015) {$rtime = strtotime('2/28/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2015) {$rtime = strtotime('3/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2015) {$rtime = strtotime('4/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2015) {$rtime = strtotime('5/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2015) {$rtime = strtotime('6/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2015) {$rtime = strtotime('7/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2015) {$rtime = strtotime('8/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2015) {$rtime = strtotime('9/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2015) {$rtime = strtotime('10/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2015) {$rtime = strtotime('11/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2015) {$rtime = strtotime('12/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2016) {$rtime = strtotime('1/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2016) {$rtime = strtotime('2/28/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2016) {$rtime = strtotime('3/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2016) {$rtime = strtotime('4/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2016) {$rtime = strtotime('5/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2016) {$rtime = strtotime('6/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2016) {$rtime = strtotime('7/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2016) {$rtime = strtotime('8/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2016) {$rtime = strtotime('9/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2016) {$rtime = strtotime('10/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2016) {$rtime = strtotime('11/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2016) {$rtime = strtotime('12/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	else {$rdate = "";}

$query1 = "select COUNT(distinct t.pepid)
from
  pharmacy t JOIN patient p
ON (t.pepid=p.pepid)
where lower(visittype)='initial' AND lower(patienttype)='art' AND ROUND(DATEDIFF(t.dispensedate , p.dob)/365) > 15 AND
  t.dispensedate >= DATE_ADD(LAST_DAY(DATE_SUB('$rdate', INTERVAL 6 MONTH)), INTERVAL 1 DAY) and
t.dispensedate <= DATE_SUB('$rdate', INTERVAL 1 DAY)";
$result1 = mysql_query($query1,$con);
if (mysql_result($result2,0)!=0){
$perc1 = ROUND(mysql_result($result1,0)/mysql_result($result2,0)*100,2).'%';
echo $perc1;
}
else {
	echo "NaN";
	}
?></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">
        ART 2</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;">Percentage of new ART adults with ≥50 cell/mL increase in CD4 count after 6 months on ART.</div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m122" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;
		if($repmonth=='1' && $repyear==2007 ) {$rtime = strtotime('1/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2007) {$rtime = strtotime('2/28/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2007) {$rtime = strtotime('3/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2007) {$rtime = strtotime('4/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2007) {$rtime = strtotime('5/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2007) {$rtime = strtotime('6/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2007) {$rtime = strtotime('7/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2007) {$rtime = strtotime('8/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2007) {$rtime = strtotime('9/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2007) {$rtime = strtotime('10/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2007) {$rtime = strtotime('11/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2007) {$rtime = strtotime('12/31/2007'); $rdate=date('Y/m/d',$rtime);}
	elseif($repmonth=='1' && $repyear==2008 ) {$rtime = strtotime('1/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2008) {$rtime = strtotime('2/28/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2008) {$rtime = strtotime('3/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2008) {$rtime = strtotime('4/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2008) {$rtime = strtotime('5/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2008) {$rtime = strtotime('6/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2008) {$rtime = strtotime('7/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2008) {$rtime = strtotime('8/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2008) {$rtime = strtotime('9/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2008) {$rtime = strtotime('10/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2008) {$rtime = strtotime('11/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2008) {$rtime = strtotime('12/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2009 ) {$rtime = strtotime('1/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2009) {$rtime = strtotime('2/28/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2009) {$rtime = strtotime('3/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2009) {$rtime = strtotime('4/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2009) {$rtime = strtotime('5/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2009) {$rtime = strtotime('6/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2009) {$rtime = strtotime('7/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2009) {$rtime = strtotime('8/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2009) {$rtime = strtotime('9/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2009) {$rtime = strtotime('10/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2009) {$rtime = strtotime('11/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2009) {$rtime = strtotime('12/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2010 ) {$rtime = strtotime('1/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2010) {$rtime = strtotime('2/28/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2010) {$rtime = strtotime('3/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2010) {$rtime = strtotime('4/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2010) {$rtime = strtotime('5/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2010) {$rtime = strtotime('6/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2010) {$rtime = strtotime('7/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2010) {$rtime = strtotime('8/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2010) {$rtime = strtotime('9/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2010) {$rtime = strtotime('10/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2010) {$rtime = strtotime('11/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2010) {$rtime = strtotime('12/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2011) {$rtime = strtotime('1/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2011) {$rtime = strtotime('2/28/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2011) {$rtime = strtotime('3/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2011) {$rtime = strtotime('4/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2011) {$rtime = strtotime('5/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2011) {$rtime = strtotime('6/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2011) {$rtime = strtotime('7/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2011) {$rtime = strtotime('8/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2011) {$rtime = strtotime('9/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2011) {$rtime = strtotime('10/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2011) {$rtime = strtotime('11/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2011) {$rtime = strtotime('12/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2012 ) {$rtime = strtotime('1/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2012) {$rtime = strtotime('2/28/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2012) {$rtime = strtotime('3/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2012) {$rtime = strtotime('4/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2012) {$rtime = strtotime('5/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2012) {$rtime = strtotime('6/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2012) {$rtime = strtotime('7/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2012) {$rtime = strtotime('8/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2012) {$rtime = strtotime('9/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2012) {$rtime = strtotime('10/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2012) {$rtime = strtotime('11/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2012) {$rtime = strtotime('12/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2013 ) {$rtime = strtotime('1/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2013) {$rtime = strtotime('2/28/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2013) {$rtime = strtotime('3/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2013) {$rtime = strtotime('4/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2013) {$rtime = strtotime('5/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2013) {$rtime = strtotime('6/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2013) {$rtime = strtotime('7/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2013) {$rtime = strtotime('8/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2013) {$rtime = strtotime('9/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2013) {$rtime = strtotime('10/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2013) {$rtime = strtotime('11/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2013) {$rtime = strtotime('12/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2014) {$rtime = strtotime('1/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2014) {$rtime = strtotime('2/28/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2014) {$rtime = strtotime('3/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2014) {$rtime = strtotime('4/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2014) {$rtime = strtotime('5/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2014) {$rtime = strtotime('6/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2014) {$rtime = strtotime('7/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2014) {$rtime = strtotime('8/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2014) {$rtime = strtotime('9/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2014) {$rtime = strtotime('10/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2014) {$rtime = strtotime('11/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2014) {$rtime = strtotime('12/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2015 ) {$rtime = strtotime('1/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2015) {$rtime = strtotime('2/28/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2015) {$rtime = strtotime('3/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2015) {$rtime = strtotime('4/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2015) {$rtime = strtotime('5/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2015) {$rtime = strtotime('6/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2015) {$rtime = strtotime('7/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2015) {$rtime = strtotime('8/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2015) {$rtime = strtotime('9/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2015) {$rtime = strtotime('10/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2015) {$rtime = strtotime('11/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2015) {$rtime = strtotime('12/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2016) {$rtime = strtotime('1/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2016) {$rtime = strtotime('2/28/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2016) {$rtime = strtotime('3/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2016) {$rtime = strtotime('4/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2016) {$rtime = strtotime('5/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2016) {$rtime = strtotime('6/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2016) {$rtime = strtotime('7/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2016) {$rtime = strtotime('8/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2016) {$rtime = strtotime('9/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2016) {$rtime = strtotime('10/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2016) {$rtime = strtotime('11/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2016) {$rtime = strtotime('12/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	else {$rdate = "";}
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d') 
AND age between 1 and 14 and agemonth>12
AND ((prevarvtype != 'Transfer in with records' AND currentmedications NOT LIKE '%ART%') OR prevarvtype IS NULL)
AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m172" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;
		if($repmonth=='1' && $repyear==2007 ) {$rtime = strtotime('1/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2007) {$rtime = strtotime('2/28/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2007) {$rtime = strtotime('3/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2007) {$rtime = strtotime('4/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2007) {$rtime = strtotime('5/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2007) {$rtime = strtotime('6/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2007) {$rtime = strtotime('7/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2007) {$rtime = strtotime('8/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2007) {$rtime = strtotime('9/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2007) {$rtime = strtotime('10/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2007) {$rtime = strtotime('11/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2007) {$rtime = strtotime('12/31/2007'); $rdate=date('Y/m/d',$rtime);}
	elseif($repmonth=='1' && $repyear==2008 ) {$rtime = strtotime('1/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2008) {$rtime = strtotime('2/28/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2008) {$rtime = strtotime('3/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2008) {$rtime = strtotime('4/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2008) {$rtime = strtotime('5/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2008) {$rtime = strtotime('6/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2008) {$rtime = strtotime('7/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2008) {$rtime = strtotime('8/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2008) {$rtime = strtotime('9/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2008) {$rtime = strtotime('10/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2008) {$rtime = strtotime('11/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2008) {$rtime = strtotime('12/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2009 ) {$rtime = strtotime('1/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2009) {$rtime = strtotime('2/28/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2009) {$rtime = strtotime('3/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2009) {$rtime = strtotime('4/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2009) {$rtime = strtotime('5/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2009) {$rtime = strtotime('6/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2009) {$rtime = strtotime('7/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2009) {$rtime = strtotime('8/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2009) {$rtime = strtotime('9/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2009) {$rtime = strtotime('10/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2009) {$rtime = strtotime('11/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2009) {$rtime = strtotime('12/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2010 ) {$rtime = strtotime('1/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2010) {$rtime = strtotime('2/28/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2010) {$rtime = strtotime('3/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2010) {$rtime = strtotime('4/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2010) {$rtime = strtotime('5/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2010) {$rtime = strtotime('6/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2010) {$rtime = strtotime('7/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2010) {$rtime = strtotime('8/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2010) {$rtime = strtotime('9/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2010) {$rtime = strtotime('10/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2010) {$rtime = strtotime('11/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2010) {$rtime = strtotime('12/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2011) {$rtime = strtotime('1/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2011) {$rtime = strtotime('2/28/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2011) {$rtime = strtotime('3/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2011) {$rtime = strtotime('4/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2011) {$rtime = strtotime('5/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2011) {$rtime = strtotime('6/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2011) {$rtime = strtotime('7/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2011) {$rtime = strtotime('8/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2011) {$rtime = strtotime('9/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2011) {$rtime = strtotime('10/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2011) {$rtime = strtotime('11/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2011) {$rtime = strtotime('12/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2012 ) {$rtime = strtotime('1/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2012) {$rtime = strtotime('2/28/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2012) {$rtime = strtotime('3/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2012) {$rtime = strtotime('4/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2012) {$rtime = strtotime('5/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2012) {$rtime = strtotime('6/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2012) {$rtime = strtotime('7/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2012) {$rtime = strtotime('8/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2012) {$rtime = strtotime('9/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2012) {$rtime = strtotime('10/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2012) {$rtime = strtotime('11/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2012) {$rtime = strtotime('12/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2013 ) {$rtime = strtotime('1/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2013) {$rtime = strtotime('2/28/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2013) {$rtime = strtotime('3/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2013) {$rtime = strtotime('4/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2013) {$rtime = strtotime('5/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2013) {$rtime = strtotime('6/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2013) {$rtime = strtotime('7/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2013) {$rtime = strtotime('8/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2013) {$rtime = strtotime('9/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2013) {$rtime = strtotime('10/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2013) {$rtime = strtotime('11/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2013) {$rtime = strtotime('12/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2014) {$rtime = strtotime('1/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2014) {$rtime = strtotime('2/28/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2014) {$rtime = strtotime('3/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2014) {$rtime = strtotime('4/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2014) {$rtime = strtotime('5/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2014) {$rtime = strtotime('6/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2014) {$rtime = strtotime('7/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2014) {$rtime = strtotime('8/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2014) {$rtime = strtotime('9/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2014) {$rtime = strtotime('10/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2014) {$rtime = strtotime('11/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2014) {$rtime = strtotime('12/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2015 ) {$rtime = strtotime('1/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2015) {$rtime = strtotime('2/28/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2015) {$rtime = strtotime('3/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2015) {$rtime = strtotime('4/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2015) {$rtime = strtotime('5/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2015) {$rtime = strtotime('6/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2015) {$rtime = strtotime('7/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2015) {$rtime = strtotime('8/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2015) {$rtime = strtotime('9/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2015) {$rtime = strtotime('10/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2015) {$rtime = strtotime('11/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2015) {$rtime = strtotime('12/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2016) {$rtime = strtotime('1/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2016) {$rtime = strtotime('2/28/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2016) {$rtime = strtotime('3/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2016) {$rtime = strtotime('4/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2016) {$rtime = strtotime('5/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2016) {$rtime = strtotime('6/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2016) {$rtime = strtotime('7/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2016) {$rtime = strtotime('8/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2016) {$rtime = strtotime('9/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2016) {$rtime = strtotime('10/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2016) {$rtime = strtotime('11/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2016) {$rtime = strtotime('12/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	else {$rdate = "";}
	
	
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d')
AND age>15
AND ((prevarvtype != 'Transfer in with records' AND currentmedications NOT LIKE '%ART%') OR prevarvtype IS NULL)
AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f172" value="<?php 
$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;
		if($repmonth=='1' && $repyear==2007 ) {$rtime = strtotime('1/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2007) {$rtime = strtotime('2/28/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2007) {$rtime = strtotime('3/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2007) {$rtime = strtotime('4/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2007) {$rtime = strtotime('5/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2007) {$rtime = strtotime('6/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2007) {$rtime = strtotime('7/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2007) {$rtime = strtotime('8/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2007) {$rtime = strtotime('9/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2007) {$rtime = strtotime('10/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2007) {$rtime = strtotime('11/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2007) {$rtime = strtotime('12/31/2007'); $rdate=date('Y/m/d',$rtime);}
	elseif($repmonth=='1' && $repyear==2008 ) {$rtime = strtotime('1/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2008) {$rtime = strtotime('2/28/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2008) {$rtime = strtotime('3/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2008) {$rtime = strtotime('4/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2008) {$rtime = strtotime('5/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2008) {$rtime = strtotime('6/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2008) {$rtime = strtotime('7/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2008) {$rtime = strtotime('8/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2008) {$rtime = strtotime('9/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2008) {$rtime = strtotime('10/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2008) {$rtime = strtotime('11/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2008) {$rtime = strtotime('12/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2009 ) {$rtime = strtotime('1/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2009) {$rtime = strtotime('2/28/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2009) {$rtime = strtotime('3/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2009) {$rtime = strtotime('4/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2009) {$rtime = strtotime('5/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2009) {$rtime = strtotime('6/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2009) {$rtime = strtotime('7/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2009) {$rtime = strtotime('8/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2009) {$rtime = strtotime('9/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2009) {$rtime = strtotime('10/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2009) {$rtime = strtotime('11/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2009) {$rtime = strtotime('12/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2010 ) {$rtime = strtotime('1/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2010) {$rtime = strtotime('2/28/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2010) {$rtime = strtotime('3/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2010) {$rtime = strtotime('4/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2010) {$rtime = strtotime('5/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2010) {$rtime = strtotime('6/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2010) {$rtime = strtotime('7/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2010) {$rtime = strtotime('8/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2010) {$rtime = strtotime('9/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2010) {$rtime = strtotime('10/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2010) {$rtime = strtotime('11/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2010) {$rtime = strtotime('12/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2011) {$rtime = strtotime('1/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2011) {$rtime = strtotime('2/28/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2011) {$rtime = strtotime('3/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2011) {$rtime = strtotime('4/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2011) {$rtime = strtotime('5/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2011) {$rtime = strtotime('6/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2011) {$rtime = strtotime('7/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2011) {$rtime = strtotime('8/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2011) {$rtime = strtotime('9/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2011) {$rtime = strtotime('10/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2011) {$rtime = strtotime('11/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2011) {$rtime = strtotime('12/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2012 ) {$rtime = strtotime('1/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2012) {$rtime = strtotime('2/28/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2012) {$rtime = strtotime('3/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2012) {$rtime = strtotime('4/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2012) {$rtime = strtotime('5/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2012) {$rtime = strtotime('6/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2012) {$rtime = strtotime('7/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2012) {$rtime = strtotime('8/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2012) {$rtime = strtotime('9/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2012) {$rtime = strtotime('10/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2012) {$rtime = strtotime('11/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2012) {$rtime = strtotime('12/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2013 ) {$rtime = strtotime('1/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2013) {$rtime = strtotime('2/28/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2013) {$rtime = strtotime('3/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2013) {$rtime = strtotime('4/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2013) {$rtime = strtotime('5/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2013) {$rtime = strtotime('6/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2013) {$rtime = strtotime('7/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2013) {$rtime = strtotime('8/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2013) {$rtime = strtotime('9/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2013) {$rtime = strtotime('10/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2013) {$rtime = strtotime('11/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2013) {$rtime = strtotime('12/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2014) {$rtime = strtotime('1/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2014) {$rtime = strtotime('2/28/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2014) {$rtime = strtotime('3/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2014) {$rtime = strtotime('4/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2014) {$rtime = strtotime('5/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2014) {$rtime = strtotime('6/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2014) {$rtime = strtotime('7/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2014) {$rtime = strtotime('8/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2014) {$rtime = strtotime('9/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2014) {$rtime = strtotime('10/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2014) {$rtime = strtotime('11/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2014) {$rtime = strtotime('12/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2015 ) {$rtime = strtotime('1/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2015) {$rtime = strtotime('2/28/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2015) {$rtime = strtotime('3/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2015) {$rtime = strtotime('4/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2015) {$rtime = strtotime('5/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2015) {$rtime = strtotime('6/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2015) {$rtime = strtotime('7/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2015) {$rtime = strtotime('8/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2015) {$rtime = strtotime('9/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2015) {$rtime = strtotime('10/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2015) {$rtime = strtotime('11/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2015) {$rtime = strtotime('12/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2016) {$rtime = strtotime('1/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2016) {$rtime = strtotime('2/28/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2016) {$rtime = strtotime('3/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2016) {$rtime = strtotime('4/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2016) {$rtime = strtotime('5/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2016) {$rtime = strtotime('6/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2016) {$rtime = strtotime('7/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2016) {$rtime = strtotime('8/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2016) {$rtime = strtotime('9/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2016) {$rtime = strtotime('10/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2016) {$rtime = strtotime('11/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2016) {$rtime = strtotime('12/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	else {$rdate = "";}
	
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE enroldate <= DATE_FORMAT('$rdate','%Y/%m/%d')
AND age>15
AND ((prevarvtype != 'Transfer in with records' AND currentmedications NOT LIKE '%ART%') OR prevarvtype IS NULL)
AND LOWER(sex)='female'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum2a();updatesum2b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">
ART 3</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;">Percentage of adults initiating ART with detectable viral load after 6 months on ART.</div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m123" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND age between 1 and 14 and agemonth>12
AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m173" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND currentmedications NOT LIKE '%ART%'
AND prevarvtype = 'Transfer in with records'
AND age>15 AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f53"  value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from enroldate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from enroldate) = '$_GET[reportingyear]' 
AND pcurrmeds NOT LIKE '%ART%'
AND ppreviousarvexp = 'Transfer in with records'
AND agemonth<12 AND LOWER(sex)='female'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:70%;" onChange="updatesum3a();updatesum3b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">
CLINICAL CARE 1 </font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;">Percentage of adults with at least one (1) clinical visit in the last 6 months
</div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m124" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND patienttransout= 'PRE-ART'
AND age between 1 and 14 and agemonth>12
AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m174" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND patienttransout= 'PRE-ART'
AND age>15 AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f54"  value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from patienttransoutdate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from patienttransoutdate) = '$_GET[reportingyear]' 
AND patienttransout= 'PRE-ART'
AND agemonth<12 AND LOWER(sex)='female'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum4a();updatesum4b()" ></div></div></td>
        <tr>
        <th align="right"><font color="black">
CLINICAL CARE 2</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;">Percentage of adults in HIV Care who received WHO Clinical Staging at least once in the last 6 months
</div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m125" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;
		if($repmonth=='1' && $repyear==2007 ) {$rtime = strtotime('1/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2007) {$rtime = strtotime('2/28/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2007) {$rtime = strtotime('3/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2007) {$rtime = strtotime('4/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2007) {$rtime = strtotime('5/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2007) {$rtime = strtotime('6/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2007) {$rtime = strtotime('7/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2007) {$rtime = strtotime('8/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2007) {$rtime = strtotime('9/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2007) {$rtime = strtotime('10/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2007) {$rtime = strtotime('11/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2007) {$rtime = strtotime('12/31/2007'); $rdate=date('Y/m/d',$rtime);}
	elseif($repmonth=='1' && $repyear==2008 ) {$rtime = strtotime('1/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2008) {$rtime = strtotime('2/28/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2008) {$rtime = strtotime('3/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2008) {$rtime = strtotime('4/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2008) {$rtime = strtotime('5/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2008) {$rtime = strtotime('6/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2008) {$rtime = strtotime('7/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2008) {$rtime = strtotime('8/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2008) {$rtime = strtotime('9/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2008) {$rtime = strtotime('10/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2008) {$rtime = strtotime('11/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2008) {$rtime = strtotime('12/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2009 ) {$rtime = strtotime('1/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2009) {$rtime = strtotime('2/28/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2009) {$rtime = strtotime('3/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2009) {$rtime = strtotime('4/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2009) {$rtime = strtotime('5/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2009) {$rtime = strtotime('6/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2009) {$rtime = strtotime('7/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2009) {$rtime = strtotime('8/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2009) {$rtime = strtotime('9/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2009) {$rtime = strtotime('10/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2009) {$rtime = strtotime('11/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2009) {$rtime = strtotime('12/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2010 ) {$rtime = strtotime('1/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2010) {$rtime = strtotime('2/28/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2010) {$rtime = strtotime('3/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2010) {$rtime = strtotime('4/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2010) {$rtime = strtotime('5/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2010) {$rtime = strtotime('6/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2010) {$rtime = strtotime('7/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2010) {$rtime = strtotime('8/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2010) {$rtime = strtotime('9/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2010) {$rtime = strtotime('10/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2010) {$rtime = strtotime('11/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2010) {$rtime = strtotime('12/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2011) {$rtime = strtotime('1/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2011) {$rtime = strtotime('2/28/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2011) {$rtime = strtotime('3/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2011) {$rtime = strtotime('4/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2011) {$rtime = strtotime('5/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2011) {$rtime = strtotime('6/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2011) {$rtime = strtotime('7/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2011) {$rtime = strtotime('8/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2011) {$rtime = strtotime('9/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2011) {$rtime = strtotime('10/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2011) {$rtime = strtotime('11/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2011) {$rtime = strtotime('12/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2012 ) {$rtime = strtotime('1/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2012) {$rtime = strtotime('2/28/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2012) {$rtime = strtotime('3/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2012) {$rtime = strtotime('4/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2012) {$rtime = strtotime('5/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2012) {$rtime = strtotime('6/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2012) {$rtime = strtotime('7/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2012) {$rtime = strtotime('8/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2012) {$rtime = strtotime('9/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2012) {$rtime = strtotime('10/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2012) {$rtime = strtotime('11/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2012) {$rtime = strtotime('12/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2013 ) {$rtime = strtotime('1/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2013) {$rtime = strtotime('2/28/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2013) {$rtime = strtotime('3/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2013) {$rtime = strtotime('4/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2013) {$rtime = strtotime('5/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2013) {$rtime = strtotime('6/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2013) {$rtime = strtotime('7/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2013) {$rtime = strtotime('8/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2013) {$rtime = strtotime('9/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2013) {$rtime = strtotime('10/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2013) {$rtime = strtotime('11/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2013) {$rtime = strtotime('12/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2014) {$rtime = strtotime('1/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2014) {$rtime = strtotime('2/28/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2014) {$rtime = strtotime('3/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2014) {$rtime = strtotime('4/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2014) {$rtime = strtotime('5/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2014) {$rtime = strtotime('6/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2014) {$rtime = strtotime('7/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2014) {$rtime = strtotime('8/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2014) {$rtime = strtotime('9/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2014) {$rtime = strtotime('10/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2014) {$rtime = strtotime('11/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2014) {$rtime = strtotime('12/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2015 ) {$rtime = strtotime('1/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2015) {$rtime = strtotime('2/28/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2015) {$rtime = strtotime('3/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2015) {$rtime = strtotime('4/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2015) {$rtime = strtotime('5/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2015) {$rtime = strtotime('6/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2015) {$rtime = strtotime('7/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2015) {$rtime = strtotime('8/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2015) {$rtime = strtotime('9/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2015) {$rtime = strtotime('10/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2015) {$rtime = strtotime('11/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2015) {$rtime = strtotime('12/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2016) {$rtime = strtotime('1/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2016) {$rtime = strtotime('2/28/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2016) {$rtime = strtotime('3/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2016) {$rtime = strtotime('4/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2016) {$rtime = strtotime('5/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2016) {$rtime = strtotime('6/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2016) {$rtime = strtotime('7/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2016) {$rtime = strtotime('8/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2016) {$rtime = strtotime('9/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2016) {$rtime = strtotime('10/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2016) {$rtime = strtotime('11/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2016) {$rtime = strtotime('12/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	else {$rdate = "";}
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, age, agemonth ) NOT IN (SELECT distinct pepid, age, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND age between 1 and 14 and agemonth>12
AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m175" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;
		if($repmonth=='1' && $repyear==2007 ) {$rtime = strtotime('1/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2007) {$rtime = strtotime('2/28/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2007) {$rtime = strtotime('3/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2007) {$rtime = strtotime('4/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2007) {$rtime = strtotime('5/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2007) {$rtime = strtotime('6/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2007) {$rtime = strtotime('7/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2007) {$rtime = strtotime('8/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2007) {$rtime = strtotime('9/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2007) {$rtime = strtotime('10/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2007) {$rtime = strtotime('11/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2007) {$rtime = strtotime('12/31/2007'); $rdate=date('Y/m/d',$rtime);}
	elseif($repmonth=='1' && $repyear==2008 ) {$rtime = strtotime('1/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2008) {$rtime = strtotime('2/28/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2008) {$rtime = strtotime('3/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2008) {$rtime = strtotime('4/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2008) {$rtime = strtotime('5/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2008) {$rtime = strtotime('6/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2008) {$rtime = strtotime('7/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2008) {$rtime = strtotime('8/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2008) {$rtime = strtotime('9/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2008) {$rtime = strtotime('10/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2008) {$rtime = strtotime('11/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2008) {$rtime = strtotime('12/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2009 ) {$rtime = strtotime('1/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2009) {$rtime = strtotime('2/28/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2009) {$rtime = strtotime('3/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2009) {$rtime = strtotime('4/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2009) {$rtime = strtotime('5/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2009) {$rtime = strtotime('6/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2009) {$rtime = strtotime('7/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2009) {$rtime = strtotime('8/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2009) {$rtime = strtotime('9/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2009) {$rtime = strtotime('10/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2009) {$rtime = strtotime('11/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2009) {$rtime = strtotime('12/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2010 ) {$rtime = strtotime('1/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2010) {$rtime = strtotime('2/28/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2010) {$rtime = strtotime('3/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2010) {$rtime = strtotime('4/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2010) {$rtime = strtotime('5/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2010) {$rtime = strtotime('6/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2010) {$rtime = strtotime('7/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2010) {$rtime = strtotime('8/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2010) {$rtime = strtotime('9/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2010) {$rtime = strtotime('10/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2010) {$rtime = strtotime('11/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2010) {$rtime = strtotime('12/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2011) {$rtime = strtotime('1/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2011) {$rtime = strtotime('2/28/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2011) {$rtime = strtotime('3/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2011) {$rtime = strtotime('4/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2011) {$rtime = strtotime('5/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2011) {$rtime = strtotime('6/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2011) {$rtime = strtotime('7/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2011) {$rtime = strtotime('8/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2011) {$rtime = strtotime('9/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2011) {$rtime = strtotime('10/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2011) {$rtime = strtotime('11/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2011) {$rtime = strtotime('12/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2012 ) {$rtime = strtotime('1/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2012) {$rtime = strtotime('2/28/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2012) {$rtime = strtotime('3/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2012) {$rtime = strtotime('4/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2012) {$rtime = strtotime('5/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2012) {$rtime = strtotime('6/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2012) {$rtime = strtotime('7/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2012) {$rtime = strtotime('8/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2012) {$rtime = strtotime('9/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2012) {$rtime = strtotime('10/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2012) {$rtime = strtotime('11/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2012) {$rtime = strtotime('12/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2013 ) {$rtime = strtotime('1/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2013) {$rtime = strtotime('2/28/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2013) {$rtime = strtotime('3/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2013) {$rtime = strtotime('4/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2013) {$rtime = strtotime('5/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2013) {$rtime = strtotime('6/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2013) {$rtime = strtotime('7/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2013) {$rtime = strtotime('8/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2013) {$rtime = strtotime('9/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2013) {$rtime = strtotime('10/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2013) {$rtime = strtotime('11/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2013) {$rtime = strtotime('12/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2014) {$rtime = strtotime('1/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2014) {$rtime = strtotime('2/28/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2014) {$rtime = strtotime('3/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2014) {$rtime = strtotime('4/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2014) {$rtime = strtotime('5/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2014) {$rtime = strtotime('6/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2014) {$rtime = strtotime('7/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2014) {$rtime = strtotime('8/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2014) {$rtime = strtotime('9/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2014) {$rtime = strtotime('10/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2014) {$rtime = strtotime('11/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2014) {$rtime = strtotime('12/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2015 ) {$rtime = strtotime('1/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2015) {$rtime = strtotime('2/28/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2015) {$rtime = strtotime('3/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2015) {$rtime = strtotime('4/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2015) {$rtime = strtotime('5/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2015) {$rtime = strtotime('6/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2015) {$rtime = strtotime('7/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2015) {$rtime = strtotime('8/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2015) {$rtime = strtotime('9/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2015) {$rtime = strtotime('10/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2015) {$rtime = strtotime('11/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2015) {$rtime = strtotime('12/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2016) {$rtime = strtotime('1/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2016) {$rtime = strtotime('2/28/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2016) {$rtime = strtotime('3/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2016) {$rtime = strtotime('4/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2016) {$rtime = strtotime('5/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2016) {$rtime = strtotime('6/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2016) {$rtime = strtotime('7/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2016) {$rtime = strtotime('8/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2016) {$rtime = strtotime('9/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2016) {$rtime = strtotime('10/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2016) {$rtime = strtotime('11/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2016) {$rtime = strtotime('12/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	else {$rdate = "";}
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, age, agemonth ) NOT IN (SELECT distinct pepid, age, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND AGE>15 AND LOWER(sex)='male'
";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f55" value="<?php 
		
		$repmonth = $_GET['reportingmonth'];
$repmonth;
$repyear = $_GET['reportingyear'];
$repyear;
		if($repmonth=='1' && $repyear==2007 ) {$rtime = strtotime('1/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2007) {$rtime = strtotime('2/28/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2007) {$rtime = strtotime('3/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2007) {$rtime = strtotime('4/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2007) {$rtime = strtotime('5/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2007) {$rtime = strtotime('6/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2007) {$rtime = strtotime('7/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2007) {$rtime = strtotime('8/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2007) {$rtime = strtotime('9/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2007) {$rtime = strtotime('10/31/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2007) {$rtime = strtotime('11/30/2007'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2007) {$rtime = strtotime('12/31/2007'); $rdate=date('Y/m/d',$rtime);}
	elseif($repmonth=='1' && $repyear==2008 ) {$rtime = strtotime('1/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2008) {$rtime = strtotime('2/28/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2008) {$rtime = strtotime('3/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2008) {$rtime = strtotime('4/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2008) {$rtime = strtotime('5/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2008) {$rtime = strtotime('6/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2008) {$rtime = strtotime('7/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2008) {$rtime = strtotime('8/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2008) {$rtime = strtotime('9/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2008) {$rtime = strtotime('10/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2008) {$rtime = strtotime('11/30/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2008) {$rtime = strtotime('12/31/2008'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2009 ) {$rtime = strtotime('1/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2009) {$rtime = strtotime('2/28/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2009) {$rtime = strtotime('3/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2009) {$rtime = strtotime('4/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2009) {$rtime = strtotime('5/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2009) {$rtime = strtotime('6/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2009) {$rtime = strtotime('7/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2009) {$rtime = strtotime('8/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2009) {$rtime = strtotime('9/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2009) {$rtime = strtotime('10/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2009) {$rtime = strtotime('11/30/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2009) {$rtime = strtotime('12/31/2009'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2010 ) {$rtime = strtotime('1/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2010) {$rtime = strtotime('2/28/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2010) {$rtime = strtotime('3/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2010) {$rtime = strtotime('4/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2010) {$rtime = strtotime('5/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2010) {$rtime = strtotime('6/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2010) {$rtime = strtotime('7/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2010) {$rtime = strtotime('8/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2010) {$rtime = strtotime('9/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2010) {$rtime = strtotime('10/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2010) {$rtime = strtotime('11/30/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2010) {$rtime = strtotime('12/31/2010'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2011) {$rtime = strtotime('1/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2011) {$rtime = strtotime('2/28/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2011) {$rtime = strtotime('3/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2011) {$rtime = strtotime('4/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2011) {$rtime = strtotime('5/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2011) {$rtime = strtotime('6/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2011) {$rtime = strtotime('7/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2011) {$rtime = strtotime('8/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2011) {$rtime = strtotime('9/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2011) {$rtime = strtotime('10/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2011) {$rtime = strtotime('11/30/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2011) {$rtime = strtotime('12/31/2011'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2012 ) {$rtime = strtotime('1/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2012) {$rtime = strtotime('2/28/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2012) {$rtime = strtotime('3/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2012) {$rtime = strtotime('4/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2012) {$rtime = strtotime('5/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2012) {$rtime = strtotime('6/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2012) {$rtime = strtotime('7/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2012) {$rtime = strtotime('8/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2012) {$rtime = strtotime('9/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2012) {$rtime = strtotime('10/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2012) {$rtime = strtotime('11/30/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2012) {$rtime = strtotime('12/31/2012'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2013 ) {$rtime = strtotime('1/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2013) {$rtime = strtotime('2/28/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2013) {$rtime = strtotime('3/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2013) {$rtime = strtotime('4/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2013) {$rtime = strtotime('5/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2013) {$rtime = strtotime('6/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2013) {$rtime = strtotime('7/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2013) {$rtime = strtotime('8/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2013) {$rtime = strtotime('9/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2013) {$rtime = strtotime('10/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2013) {$rtime = strtotime('11/30/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2013) {$rtime = strtotime('12/31/2013'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2014) {$rtime = strtotime('1/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2014) {$rtime = strtotime('2/28/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2014) {$rtime = strtotime('3/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2014) {$rtime = strtotime('4/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2014) {$rtime = strtotime('5/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2014) {$rtime = strtotime('6/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2014) {$rtime = strtotime('7/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2014) {$rtime = strtotime('8/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2014) {$rtime = strtotime('9/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2014) {$rtime = strtotime('10/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2014) {$rtime = strtotime('11/30/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2014) {$rtime = strtotime('12/31/2014'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2015 ) {$rtime = strtotime('1/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2015) {$rtime = strtotime('2/28/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2015) {$rtime = strtotime('3/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2015) {$rtime = strtotime('4/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2015) {$rtime = strtotime('5/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2015) {$rtime = strtotime('6/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2015) {$rtime = strtotime('7/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2015) {$rtime = strtotime('8/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2015) {$rtime = strtotime('9/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2015) {$rtime = strtotime('10/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2015) {$rtime = strtotime('11/30/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2015) {$rtime = strtotime('12/31/2015'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='1' && $repyear==2016) {$rtime = strtotime('1/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='2' && $repyear==2016) {$rtime = strtotime('2/28/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='3' && $repyear==2016) {$rtime = strtotime('3/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='4' && $repyear==2016) {$rtime = strtotime('4/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='5' && $repyear==2016) {$rtime = strtotime('5/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='6' && $repyear==2016) {$rtime = strtotime('6/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='7' && $repyear==2016) {$rtime = strtotime('7/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='8' && $repyear==2016) {$rtime = strtotime('8/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='9' && $repyear==2016) {$rtime = strtotime('9/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='10' && $repyear==2016) {$rtime = strtotime('10/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='11' && $repyear==2016) {$rtime = strtotime('11/30/2016'); $rdate=date('Y/m/d',$rtime);} 
	elseif($repmonth=='12' && $repyear==2016) {$rtime = strtotime('12/31/2016'); $rdate=date('Y/m/d',$rtime);} 
	else {$rdate = "";}
	
$query2 = "SELECT COUNT(distinct pepid) 
FROM `visitforart` 
WHERE visitdate  NOT BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate' 
AND visitdate <= '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order')
AND (pepid, age, agemonth ) NOT IN (SELECT distinct pepid, age, agemonth 
FROM `visitforart` 
WHERE visitdate  BETWEEN '$rdate' - INTERVAL 6 MONTH AND '$rdate'
AND dateartstart IS NULL AND (Patientdied IS NULL or patienttransout IS NULL OR interruptstatus!='Stopped') AND 
visittype IN ('Clinical Evaluation', 'Laboratory Order/Result','Pharmacy Order'))
AND agemonth<12 AND LOWER(sex)='female'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum5a();updatesum5b();upwardage5b();upwardagetot2();upwardagetot3()" ></div></div></td>
        </tr>
        <tr>
        <th align="right"><font color="black">
CLINICAL CARE 3
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;">Percentage of HIV-positive adults receiving cotrimoxazole prophylaxis
</div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m126" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND age between 1 and 14 and agemonth>12
AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m176" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND AGE>15
AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f56"  value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateofdeath) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateofdeath) = '$_GET[reportingyear]' 
AND patientdied = 'PRE-ART'
AND agemonth<12 AND LOWER(sex)='female'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum6a();updatesum6b();upwardage5b();upwardagetot2();upwardagetot3()" ></div></div></td>

        </tr>
        
        <tr>
        <th align="left"><font color="black">
CLINICAL CARE 4
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;">Percentage of eligible adults who received a TB clinical symptom assessment in the last 6 months.
</div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m127" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateartstart) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateartstart) = '$_GET[reportingyear]' 
AND dateartstart IS NOT NULL
AND age between 1 and 14 and agemonth>12
AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m177" value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateartstart) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateartstart) = '$_GET[reportingyear]' 
AND dateartstart IS NOT NULL
AND age>15
AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f57"  value="<?php 
$query2 = "SELECT COUNT(pepid) 
FROM  `patient` 
WHERE EXTRACT(MONTH from dateartstart) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from dateartstart) = '$_GET[reportingyear]' 
AND dateartstart IS NOT NULL
AND agemonth<12 AND LOWER(sex)='female'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:70%;" onChange="updatesum7a();updatesum7b()" ></div></div></td>

        </tr>
        
        <tr>
        <th align="left"><font color="black">
LAB 1</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;">Percentage of newly enrolled adults in the last six (6) months with baseline CD4 count 
</div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m128" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'EFV') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'EFV')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'EFV') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'EFV')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'EFV')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'EFV'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND age between 1 and 14 and agemonth>12
AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m178" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'TDF/3TC/EFV' OR drugname2 LIKE  'TDF/3TC/EFV' OR drugname3 LIKE  'TDF/3TC/EFV' OR drugname4 LIKE  'TDF/3TC/EFV')
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
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'TDF') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'TDF') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'TDF')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'TDF') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'TDF') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'TDF')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'TDF') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'TDF') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'TDF')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'TDF') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'TDF') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'TDF'))

OR ((drugname1 LIKE  'FDC%(TDF/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'FDC%(TDF/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'FDC%(TDF/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'FDC%(TDF/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'FDC%(TDF/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'FDC%(TDF/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'FDC%(TDF/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'FDC%(TDF/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'FDC%(TDF/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'FDC%(TDF/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'FDC%(TDF/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'FDC%(TDF/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'FDC%(TDF/3TC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  'FDC%(TDF/3TC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  'FDC%(TDF/3TC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  'FDC%(TDF/3TC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  'FDC%(TDF/3TC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  'FDC%(TDF/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  'FDC%(TDF/3TC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  'FDC%(TDF/3TC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  'FDC%(TDF/3TC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  'FDC%(TDF/3TC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  'FDC%(TDF/3TC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  'FDC%(TDF/3TC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  '%(TDF/FTC)' AND drugname2 LIKE  'NVP') OR (drugname1 LIKE  '%(TDF/FTC)' AND drugname3 LIKE  'NVP') OR (drugname1 LIKE  '%(TDF/FTC)' AND drugname4 LIKE  'NVP')
 	OR (drugname2 LIKE  '%(TDF/FTC)' AND drugname1 LIKE  'NVP') OR (drugname2 LIKE  '%(TDF/FTC)' AND drugname3 LIKE  'NVP') OR (drugname2 LIKE  '%(TDF/FTC)' AND drugname4 LIKE  'NVP')
  	OR (drugname3 LIKE  '%(TDF/FTC)' AND drugname1 LIKE  'NVP') OR (drugname3 LIKE  '%(TDF/FTC)' AND drugname2 LIKE  'NVP') OR (drugname3 LIKE  '%(TDF/FTC)' AND drugname4 LIKE  'NVP')
  	OR (drugname4 LIKE  '%(TDF/FTC)' AND drugname1 LIKE  'NVP') OR (drugname4 LIKE  '%(TDF/FTC)' AND drugname2 LIKE  'NVP') OR (drugname4 LIKE  '%(TDF/FTC)' AND drugname3 LIKE  'NVP'))
OR ((drugname1 LIKE  '%(TDF/FTC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  '%(TDF/FTC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  '%(TDF/FTC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  '%(TDF/FTC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  '%(TDF/FTC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  '%(TDF/FTC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  '%(TDF/FTC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  '%(TDF/FTC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  '%(TDF/FTC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  '%(TDF/FTC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  '%(TDF/FTC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  '%(TDF/FTC)' AND drugname3 LIKE  'EFV'))
)
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND age>15
AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f58"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE ((drugname1 LIKE  'AZT/3TC/NVP' OR drugname2 LIKE  'AZT/3TC/NVP' OR drugname3 LIKE  'AZT/3TC/NVP' OR drugname4 LIKE  'AZT/3TC/NVP')
OR (drugname1 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname2 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname3 LIKE  'Triomun (d4T/3TC/NVP)' OR drugname4 LIKE  'Triomun (d4T/3TC/NVP)')
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'EFV')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'EFV') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'EFV'))
OR ((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ABC')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ABC') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ABC'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'EFV') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'EFV')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'EFV') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'EFV')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'EFV')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'EFV'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'NVP') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'NVP')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'NVP') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'NVP')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'NVP')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'NVP')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND agemonth<12 AND LOWER(sex)='female' ";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>"style="width:70%;" onChange="updatesum8a();updatesum8b()" ></div></div></td>

        </tr>
        <tr>
        <th align="left"><font color="black">
LAB 2</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;">Percentage of adults who had a CD4 count in the last six (6) months.
</div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m129"  value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE (((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
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
AND age between 1 and 14 and agemonth>12
AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m179" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE (((drugname1 LIKE  '%(TDF/FTC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  '%(TDF/FTC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  '%(TDF/FTC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  '%(TDF/FTC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  '%(TDF/FTC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  '%(TDF/FTC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  '%(TDF/FTC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  '%(TDF/FTC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  '%(TDF/FTC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  '%(TDF/FTC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  '%(TDF/FTC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  '%(TDF/FTC)' AND drugname3 LIKE  'LPV/r'))
OR	((drugname1 LIKE  '(TDF/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  '(TDF/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  '(TDF/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  '(TDF/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  '(TDF/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  '(TDF/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  '(TDF/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  '(TDF/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  '(TDF/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  '(TDF/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  '(TDF/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  '(TDF/3TC)' AND drugname3 LIKE  'LPV/r'))
OR	((drugname1 LIKE  '(TDF/3TC)' AND drugname2 LIKE  'ATV/r') OR (drugname1 LIKE  '(TDF/3TC)' AND drugname3 LIKE  'ATV/r') OR (drugname1 LIKE  '(TDF/3TC)' AND drugname4 LIKE  'ATV/r')
 	OR (drugname2 LIKE  '(TDF/3TC)' AND drugname1 LIKE  'ATV/r') OR (drugname2 LIKE  '(TDF/3TC)' AND drugname3 LIKE  'ATV/r') OR (drugname2 LIKE  '(TDF/3TC)' AND drugname4 LIKE  'ATV/r')
  	OR (drugname3 LIKE  '(TDF/3TC)' AND drugname1 LIKE  'ATV/r') OR (drugname3 LIKE  '(TDF/3TC)' AND drugname2 LIKE  'ATV/r') OR (drugname3 LIKE  '(TDF/3TC)' AND drugname4 LIKE  'ATV/r')
  	OR (drugname4 LIKE  '(TDF/3TC)' AND drugname1 LIKE  'ATV/r') OR (drugname4 LIKE  '(TDF/3TC)' AND drugname2 LIKE  'ATV/r') OR (drugname4 LIKE  '(TDF/3TC)' AND drugname3 LIKE  'ATV/r'))
OR	((drugname1 LIKE  '%(TDF/FTC)' AND drugname2 LIKE  'ATV/r') OR (drugname1 LIKE  '%(TDF/FTC)' AND drugname3 LIKE  'ATV/r') OR (drugname1 LIKE  '%(TDF/FTC)' AND drugname4 LIKE  'ATV/r')
 	OR (drugname2 LIKE  '%(TDF/FTC)' AND drugname1 LIKE  'ATV/r') OR (drugname2 LIKE  '%(TDF/FTC)' AND drugname3 LIKE  'ATV/r') OR (drugname2 LIKE  '%(TDF/FTC)' AND drugname4 LIKE  'ATV/r')
  	OR (drugname3 LIKE  '%(TDF/FTC)' AND drugname1 LIKE  'ATV/r') OR (drugname3 LIKE  '%(TDF/FTC)' AND drugname2 LIKE  'ATV/r') OR (drugname3 LIKE  '%(TDF/FTC)' AND drugname4 LIKE  'ATV/r')
  	OR (drugname4 LIKE  '%(TDF/FTC)' AND drugname1 LIKE  'ATV/r') OR (drugname4 LIKE  '%(TDF/FTC)' AND drugname2 LIKE  'ATV/r') OR (drugname4 LIKE  '%(TDF/FTC)' AND drugname3 LIKE  'ATV/r'))
OR	((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ATV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ATV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ATV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ATV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ATV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ATV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ATV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ATV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'ATV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'ATV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'ATV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'ATV/r'))
OR	((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r')))
AND  EXTRACT(MONTH from pharmdispensedate) = '$_GET[reportingmonth]' 
AND  EXTRACT(YEAR from pharmdispensedate) = '$_GET[reportingyear]'
AND age>15
AND LOWER(sex)='male'";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f59" value="<?php 
$query2 = "SELECT COUNT(DISTINCT PEPID) 
FROM  `pharmcrirrf` 
WHERE (((drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname1 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
 	OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r') OR (drugname2 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname3 LIKE  'CBV%(AZT/3TC)' AND drugname4 LIKE  'LPV/r')
  	OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname1 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname2 LIKE  'LPV/r') OR (drugname4 LIKE  'CBV%(AZT/3TC)' AND drugname3 LIKE  'LPV/r'))
OR ((drugname1 = 'ABC' AND drugname2 = '3TC' AND drugname3 = 'LPV/r') 
	OR (drugname2 = 'ABC' AND drugname3 = '3TC' AND drugname1 = 'LPV/r')
	OR (drugname3 = 'ABC' AND drugname2 = '3TC' AND drugname1 = 'LPV/r') 
	OR (drugname3 = 'ABC' AND drugname1 = '3TC' AND drugname2 = 'LPV/r')
	OR (drugname2 = 'ABC' AND drugname1 = '3TC' AND drugname3 = 'LPV/r')
	OR (drugname1 = 'ABC' AND drugname3 = '3TC' AND drugname2 = 'LPV/r'))
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
AND agemonth<12 AND LOWER(sex)='female' ";
$result2 = mysql_query($query2,$con);
echo mysql_result($result2,0);
?>" style="width:70%;" onChange="updatesum9a();updatesum9b()" ></div></div></td>
        </tr>
        
        <tr>
        <th align="left"><font color="black">
LAB 3
</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;">Percentage of adults who had a viral load test in the last one year
</div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1210" readonly value="<?php echo $info['f1210']?>" style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m1710" readonly  value=""style="width:70%;" onChange="endbalcalc1()" ></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f510" readonly value="" style="width:70%;" onChange="updatesum10a();updatesum10b()" ></div></div></td>
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
