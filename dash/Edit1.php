<?php
session_start();
$con=mysql_connect("127.0.0.1","appsapin","9001Memday");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}


mysql_select_db('appsapin_apinorg_db',$con) or die ("could not open db".mysql_error());

if(isset($_GET['id'])){
$id = $_GET['id'];
$query = "SELECT `id`, `facilityname`, `sender`, `facid`, `month`, `year`, `rmonthnum`, `repdate`, `a1`, `b1`, `c1`, `d1`, `e1`, `f1`, `g1`, `h1`, `i1`, `j1`, `k1`, `l1`, `a2`, `b2`, `c2`, `d2`, `e2`, `f2`, `g2`, `h2`, `i2`, `j2`, `k2`, `l2`, `a8`, `b8`, `c8`, `d8`, `e8`, `f8`, `g8`, `h8`, `i8`, `j8`, `k8`, `l8`, `a9`, `b9`, `c9`, `d9`, `e9`, `f9`, `g9`, `h9`, `i9`, `j9`, `k9`, `l9`, `a22`, `b22`, `c22`, `d22`, `e22`, `f22`, `g22`, `h22`, `i22`, `j22`, `k22`, `l22`, `a23`, `b23`, `c23`, `d23`, `e23`, `f23`, `g23`, `h23`, `i23`, `j23`, `k23`, `l23`, `a29`, `b29`, `c29`, `d29`, `e29`, `f29`, `g29`, `h29`, `i29`, `j29`, `k29`, `l29`, `a30`, `b30`, `c30`, `d30`, `e30`, `f30`, `g30`, `h30`, `i30`, `j30`, `k30`, `l30`, `a36`, `b36`, `c36`, `d36`, `e36`, `f36`, `g36`, `h36`, `i36`, `j36`, `k36`, `l36`, `a37`, `b37`, `c37`, `d37`, `e37`, `f37`, `g37`, `h37`, `i37`, `j37`, `k37`, `l37` , `a38`, `b38`, `c38`, `d38`, `e38`, `f38`, `g38`, `h38`, `i38`, `j38`, `k38`, `l38`, `a39`, `b39`, `c39`, `d39`, `e39`, `f39`, `g39`, `h39`, `i39`, `j39`, `k39`, `l39` 
FROM `mrf_tbart_table` where id='$id'";
	$result = mysql_query ($query);
    $info = mysql_fetch_assoc($result);
	
echo mysql_error();
}
elseif(isset($_GET['facid'])){
$facilityid = $_GET['facid'];
$cso = $_GET['cso'];

$query = "SELECT `facilityid`, `facilityname`, `lga`, `state`,cso_name,cso_email
from phc_ovc
where facilityid='$facilityid'";
	$result = mysql_query ($query);
    $info = mysql_fetch_assoc($result);
	
echo mysql_error();
}


session_write_close();
$appr = $_GET['appr_lvl'];
if ($appr==3){
	$level = 'FACILITY';
}
if ($appr==2){
	$level = 'STATE';
}
if ($appr==1){
	$level = 'FEDERAL';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="./jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
function row1() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a1").value;
var t2 = document.getElementById("b1").value;
var t3 = document.getElementById("c1").value;
var t4 = document.getElementById("d1").value;
var t5 = document.getElementById("e1").value;
var t6 = document.getElementById("f1").value;
var t7 = document.getElementById("g1").value;
var t8 = document.getElementById("h1").value;
var t9 = document.getElementById("i1").value;
var t10 = document.getElementById("j1").value;
var t11 = document.getElementById("k1").value;
var t12 = document.getElementById("l1").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_1").innerHTML =total1 ;
}
function row2() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a2").value;
var t2 = document.getElementById("b2").value;
var t3 = document.getElementById("c2").value;
var t4 = document.getElementById("d2").value;
var t5 = document.getElementById("e2").value;
var t6 = document.getElementById("f2").value;
var t7 = document.getElementById("g2").value;
var t8 = document.getElementById("h2").value;
var t9 = document.getElementById("i2").value;
var t10= document.getElementById("j2").value;
var t11= document.getElementById("k2").value;
var t12= document.getElementById("l2").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_2").innerHTML =total1 ;
}
function row8() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a8").value;
var t2 = document.getElementById("b8").value;
var t3 = document.getElementById("c8").value;
var t4 = document.getElementById("d8").value;
var t5 = document.getElementById("e8").value;
var t6 = document.getElementById("f8").value;
var t7 = document.getElementById("g8").value;
var t8 = document.getElementById("h8").value;
var t9 = document.getElementById("i8").value;
var t10= document.getElementById("j8").value;
var t11= document.getElementById("k8").value;
var t12= document.getElementById("l8").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_8").innerHTML =total1 ;
}
function row9() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a9").value;
var t2 = document.getElementById("b9").value;
var t3 = document.getElementById("c9").value;
var t4 = document.getElementById("d9").value;
var t5 = document.getElementById("e9").value;
var t6 = document.getElementById("f9").value;
var t7 = document.getElementById("g9").value;
var t8 = document.getElementById("h9").value;
var t9 = document.getElementById("i9").value;
var t10= document.getElementById("j9").value;
var t11= document.getElementById("k9").value;
var t12= document.getElementById("l9").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_9").innerHTML =total1 ;
}
function row22() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a22").value;
var t2 = document.getElementById("b22").value;
var t3 = document.getElementById("c22").value;
var t4 = document.getElementById("d22").value;
var t5 = document.getElementById("e22").value;
var t6 = document.getElementById("f22").value;
var t7 = document.getElementById("g22").value;
var t8 = document.getElementById("h22").value;
var t9 = document.getElementById("i22").value;
var t10= document.getElementById("j22").value;
var t11= document.getElementById("k22").value;
var t12= document.getElementById("l22").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_22").innerHTML =total1 ;
}
function row23() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
document.getElementById("a23").value = parseInt(document.getElementById("a8").value) + parseInt(document.getElementById("a9").value) + parseInt(document.getElementById("a22").value);

document.getElementById("b23").value = parseInt(document.getElementById("b8").value) + parseInt(document.getElementById("b9").value) + parseInt(document.getElementById("b22").value);

document.getElementById("c23").value = parseInt(document.getElementById("c8").value) + parseInt(document.getElementById("c9").value) + parseInt(document.getElementById("c22").value);

document.getElementById("d23").value = parseInt(document.getElementById("d8").value) + parseInt(document.getElementById("d9").value) + parseInt(document.getElementById("d22").value);

document.getElementById("e23").value = parseInt(document.getElementById("e8").value) + parseInt(document.getElementById("e9").value) + parseInt(document.getElementById("e22").value);

document.getElementById("f23").value = parseInt(document.getElementById("f8").value) + parseInt(document.getElementById("f9").value) + parseInt(document.getElementById("f22").value);

document.getElementById("g23").value = parseInt(document.getElementById("g8").value) + parseInt(document.getElementById("g9").value) + parseInt(document.getElementById("g22").value);

document.getElementById("h23").value = parseInt(document.getElementById("h8").value) + parseInt(document.getElementById("h9").value) + parseInt(document.getElementById("h22").value);

document.getElementById("i23").value = parseInt(document.getElementById("i8").value) + parseInt(document.getElementById("i9").value) + parseInt(document.getElementById("i22").value);

document.getElementById("j23").value = parseInt(document.getElementById("j8").value) + parseInt(document.getElementById("j9").value) + parseInt(document.getElementById("j22").value);

document.getElementById("k23").value = parseInt(document.getElementById("k8").value) + parseInt(document.getElementById("k9").value) + parseInt(document.getElementById("k22").value);

document.getElementById("l23").value = parseInt(document.getElementById("l8").value) + parseInt(document.getElementById("l9").value) + parseInt(document.getElementById("l22").value);

var t1 = document.getElementById("a23").value;
var t2 = document.getElementById("b23").value;
var t3 = document.getElementById("c23").value;
var t4 = document.getElementById("d23").value;
var t5 = document.getElementById("e23").value;
var t6 = document.getElementById("f23").value;
var t7 = document.getElementById("g23").value;
var t8 = document.getElementById("h23").value;
var t9 = document.getElementById("i23").value;
var t10= document.getElementById("j23").value;
var t11= document.getElementById("k23").value;
var t12= document.getElementById("l23").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_23").innerHTML =total1 ;
}
function row29() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a29").value;
var t2 = document.getElementById("b29").value;
var t3 = document.getElementById("c29").value;
var t4 = document.getElementById("d29").value;
var t5 = document.getElementById("e29").value;
var t6 = document.getElementById("f29").value;
var t7 = document.getElementById("g29").value;
var t8 = document.getElementById("h29").value;
var t9 = document.getElementById("i29").value;
var t10= document.getElementById("j29").value;
var t11= document.getElementById("k29").value;
var t12= document.getElementById("l29").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_29").innerHTML =total1 ;
}
function row30() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a30").value;
var t2 = document.getElementById("b30").value;
var t3 = document.getElementById("c30").value;
var t4 = document.getElementById("d30").value;
var t5 = document.getElementById("e30").value;
var t6 = document.getElementById("f30").value;
var t7 = document.getElementById("g30").value;
var t8 = document.getElementById("h30").value;
var t9 = document.getElementById("i30").value;
var t10= document.getElementById("j30").value;
var t11= document.getElementById("k30").value;
var t12= document.getElementById("l30").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_30").innerHTML =total1 ;
}
function row36() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a36").value;
var t2 = document.getElementById("b36").value;
var t3 = document.getElementById("c36").value;
var t4 = document.getElementById("d36").value;
var t5 = document.getElementById("e36").value;
var t6 = document.getElementById("f36").value;
var t7 = document.getElementById("g36").value;
var t8 = document.getElementById("h36").value;
var t9 = document.getElementById("i36").value;
var t10= document.getElementById("j36").value;
var t11= document.getElementById("k36").value;
var t12= document.getElementById("l36").value;

document.getElementById("a37").value = parseInt(document.getElementById("a30").value) + parseInt(document.getElementById("a36").value);
document.getElementById("b37").value = parseInt(document.getElementById("b30").value) + parseInt(document.getElementById("b36").value);
document.getElementById("c37").value = parseInt(document.getElementById("c30").value) + parseInt(document.getElementById("c36").value);
document.getElementById("d37").value = parseInt(document.getElementById("d30").value) + parseInt(document.getElementById("d36").value);
document.getElementById("e37").value = parseInt(document.getElementById("e30").value) + parseInt(document.getElementById("e36").value);
document.getElementById("f37").value = parseInt(document.getElementById("f30").value) + parseInt(document.getElementById("f36").value);
document.getElementById("g37").value = parseInt(document.getElementById("g30").value) + parseInt(document.getElementById("g36").value);
document.getElementById("h37").value = parseInt(document.getElementById("h30").value) + parseInt(document.getElementById("h36").value);
document.getElementById("i37").value = parseInt(document.getElementById("i30").value) + parseInt(document.getElementById("i36").value);
document.getElementById("j37").value = parseInt(document.getElementById("j30").value) + parseInt(document.getElementById("j36").value);
document.getElementById("k37").value = parseInt(document.getElementById("k30").value) + parseInt(document.getElementById("k36").value);
document.getElementById("l37").value = parseInt(document.getElementById("l30").value) + parseInt(document.getElementById("l36").value);

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_36").innerHTML =total1 ;
	
	row37();
}
function row37() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a37").value;
var t2 = document.getElementById("b37").value;
var t3 = document.getElementById("c37").value;
var t4 = document.getElementById("d37").value;
var t5 = document.getElementById("e37").value;
var t6 = document.getElementById("f37").value;
var t7 = document.getElementById("g37").value;
var t8 = document.getElementById("h37").value;
var t9 = document.getElementById("i37").value;
var t10= document.getElementById("j37").value;
var t11= document.getElementById("k37").value;
var t12= document.getElementById("l37").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_37").innerHTML =total1 ;
}

function row38() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a38").value;
var t2 = document.getElementById("b38").value;
var t3 = document.getElementById("c38").value;
var t4 = document.getElementById("d38").value;
var t5 = document.getElementById("e38").value;
var t6 = document.getElementById("f38").value;
var t7 = document.getElementById("g38").value;
var t8 = document.getElementById("h38").value;
var t9 = document.getElementById("i38").value;
var t10= document.getElementById("j38").value;
var t11= document.getElementById("k38").value;
var t12= document.getElementById("l38").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_38").innerHTML =total1 ;
}

function row39() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a39").value;
var t2 = document.getElementById("b39").value;
var t3 = document.getElementById("c39").value;
var t4 = document.getElementById("d39").value;
var t5 = document.getElementById("e39").value;
var t6 = document.getElementById("f39").value;
var t7 = document.getElementById("g39").value;
var t8 = document.getElementById("h39").value;
var t9 = document.getElementById("i39").value;
var t10= document.getElementById("j39").value;
var t11= document.getElementById("k39").value;
var t12= document.getElementById("l39").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_39").innerHTML =total1 ;
}

</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MRF - TB-HIV (ART)</title>
<h1 align="center">MRF TB-HIV (ART) FORM ~~ LEVEL: <?php echo $level; ?>														
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
<body onload="row1();row2();row8();row9();row22();row23();row29();row30();row36();row37();row38();row39();">
<a href="javascript:history.go(-1)">[BACK]</a>

<form method="post" width="100%" action="mrf_tbart_browse_ins.php" id="form1" onSubmit="return validateForm()" >
<input type="hidden" name="appr_lvl" style="width:30px" id="appr_lvl"  value="<?php echo $_GET['appr_lvl']; ?>"   />
<input type="hidden" name="id" style="width:30px" id="id"  value="<?php echo $_GET['id']; ?>"   />

   <table align="center" style="background-color:#FFF; width: 75%; alignment-adjust:central" cellpadding="0" cellspacing="0" border="1">
   <tr>
<th align="left"><font color="black">Name of Facility:</font></th>
  <td colspan="5"><input type="text" name="facilityname" style="width:250px" id="facilityname" readonly value="<?php echo $info['facilityname']; ?>"  /></td>
<th align="left" colspan="3"><font color="black">Report Date:</font></th>
<td colspan="3"><input type="text" name="repdate" id="repdate" style="width:120px" readonly  value="<?php echo $info['repdate']; ?>"   /></td>
<th align="left" colspan="3"><font color="black">Sender:</font></th>
<td colspan="3"><input type="text" name="sender" id="sender" style="width:160px" required value="<?php echo $info['sender']; ?>"   /></td>

   </tr>

<input type="hidden" name="state" id="state" style="width:160px" required value="<?php echo $info['state']; ?>"   />
<input type="hidden" name="lga" id="lga" style="width:160px" required value="<?php echo $info['lga']; ?>"   />



    <tr>
<th align="left"><font color="black">MONTH:</font></th>
<td colspan="5"><select id="month" name="month" required>
<option value="<?php echo $info['month']; ?>"><?php echo $info['month']; ?></option>
</select></td>
<th align="left" colspan="3"><font color="black">YEAR:</font></th>
<td colspan="3"><select id="year" name="year" required >
<option value="<?php echo $info['year']; ?>"><?php echo $info['year']; ?></option>
</select></td>
<th align="left" colspan="3"><font color="black">Facility ID:</font></th>
<td colspan="3"><input type="text" name="facid" id="facid" style="width:160px" readonly onblur="endbalcalc1();"  value="<?php echo $info['facid']; ?>"  /></td>

   </tr>

  <tr>

  	<th><font color="black"></font>
  	<th colspan="6" style="background-color:#993; font-size:18px "><font color="black">MALE</font></th>
  	<th colspan="6" style="background-color:#993; font-size:18px"><font color="black">FEMALE</font></th>
    <th colspan="4"><font color="black"></font>
</tr>
   <tr style="position: Non">
      <th style="width: 117px "><font color="black" style="transform-style:flat">Male/Female</font></th>
      <th style="width:40px"><font color="black">< 1</font></th>
      <th style="width:40px"><font color="black">1-4</font>
      <th style="width:40px"><font color="black">5-9</font>
      <th style="width:40px"><font color="black">10-14</font>
      <th style="width:40px"><font color="black">15-19</font>
      <th style="width:40px"><font color="black">20+</font>
      <th style="width:40px"><font color="black"> < 1</font></th>
      <th style="width:40px"><font color="black">1-4</font>
      <th style="width:40px"><font color="black">5-9</font>
      <th style="width:40px"><font color="black">10-14</font>
      <th style="width:40px"><font color="black">15-19</font>
      <th style="width:63px"><font color="black">20+</font>
      <th style="width:160px"><font color="black">Total</font></th>
       </tr>
 
 
<tr>                                                                                                                
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">TB/HIV</font></th>       
</tr> 
<tr>  
           <th align="left"><font color="black">Number of HIV+ patients clinically screened for TB</font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a1" id="a1" style="width:30px" onblur="row1();"  value="<?php echo $info['a1']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b1" id="b1" style="width:30px" onblur="row1();"  value="<?php echo $info['b1']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c1" id="c1" style="width:30px" onblur="row1();"  value="<?php echo $info['c1']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d1" id="d1" style="width:30px" onblur="row1();"  value="<?php echo $info['d1']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e1" id="e1" style="width:30px" onblur="row1();"  value="<?php echo $info['e1']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f1" id="f1" style="width:30px" onblur="row1();"  value="<?php echo $info['f1']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g1" id="g1" style="width:30px" onblur="row1();"  value="<?php echo $info['g1']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h1" id="h1" style="width:30px" onblur="row1();"  value="<?php echo $info['h1']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i1" id="i1" style="width:30px" onblur="row1();"  value="<?php echo $info['i1']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j1" id="j1" style="width:30px" onblur="row1();"  value="<?php echo $info['j1']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k1" id="k1" style="width:30px" onblur="row1();"  value="<?php echo $info['k1']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l1" id="l1" style="width:30px" onblur="row1();"  value="<?php echo $info['l1']; ?>"   /></div></div></td>
       <td colspan=5; style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_1" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th style="background-color:#FFFF00;" align="left"><font color="black">Number of PLHIV with at least one symptom of TB (presumptive TB)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="a2" style="width:30px" id="a2" onblur="row2();"  value="<?php echo $info['a2']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="b2" style="width:30px" id="b2" onblur="row2();"  value="<?php echo $info['b2']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="c2" style="width:30px" id="c2" onblur="row2();"  value="<?php echo $info['c2']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="d2" style="width:30px" id="d2" onblur="row2();"  value="<?php echo $info['d2']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="e2" style="width:30px" id="e2" onblur="row2();"  value="<?php echo $info['e2']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="f2" style="width:30px" id="f2" onblur="row2();"  value="<?php echo $info['f2']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="g2" style="width:30px" id="g2" onblur="row2();"  value="<?php echo $info['g2']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="h2" style="width:30px" id="h2" onblur="row2();"  value="<?php echo $info['h2']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="i2" style="width:30px" id="i2" onblur="row2();"  value="<?php echo $info['i2']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="j2" style="width:30px" id="j2" onblur="row2();"  value="<?php echo $info['j2']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="k2" style="width:30px" id="k2" onblur="row2();"  value="<?php echo $info['k2']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="l2" style="width:30px" id="l2" onblur="row2();"  value="<?php echo $info['l2']; ?>"   /></div></div></td>
<td colspan=5; style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_2" style="padding-right: 3px;"></div></div></td>
        </tr>
 <tr>  
           <th style="background-color:#FFFF00;" align="left"><font color="black">Number of Samples Tested for TB using GeneXpert (A)</font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="a8" style="width:30px" id="a8" onblur="row8();"  value="<?php echo $info['a8']; ?>"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="b8" style="width:30px" id="b8" onblur="row8();"  value="<?php echo $info['b8']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="c8" style="width:30px" id="c8" onblur="row8();"  value="<?php echo $info['c8']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="d8" style="width:30px" id="d8" onblur="row8();"  value="<?php echo $info['d8']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="e8" style="width:30px" id="e8" onblur="row8();"  value="<?php echo $info['e8']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="f8" style="width:30px" id="f8" onblur="row8();"  value="<?php echo $info['f8']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="g8" style="width:30px" id="g8" onblur="row8();"  value="<?php echo $info['g8']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="h8" style="width:30px" id="h8" onblur="row8();"  value="<?php echo $info['h8']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="i8" style="width:30px" id="i8" onblur="row8();"  value="<?php echo $info['i8']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="j8" style="width:30px" id="j8" onblur="row8();"  value="<?php echo $info['j8']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="k8" style="width:30px" id="k8" onblur="row8();"  value="<?php echo $info['k8']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="l8" style="width:30px" id="l8" onblur="row8();"  value="<?php echo $info['l8']; ?>"   /></div></div></td>
        <td colspan=5; style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_8" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th style="background-color:#FFFF00;" align="left"><font color="black">Number of Samples tested for Smear microscopy only (B)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a9" id="a9" style="width:30px" id="a9"  onblur="row9();"  value="<?php echo $info['a9']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b9" id="b9" style="width:30px" id="b9"  onblur="row9();"  value="<?php echo $info['b9']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c9" id="c9" style="width:30px" id="c9"  onblur="row9();"  value="<?php echo $info['c9']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d9" id="d9" style="width:30px" id="d9"  onblur="row9();"  value="<?php echo $info['d9']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e9" id="e9" style="width:30px" id="e9"  onblur="row9();"  value="<?php echo $info['e9']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f9" id="f9" style="width:30px" id="f9"  onblur="row9();"  value="<?php echo $info['f9']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g9" id="g9" style="width:30px" id="g9"  onblur="row9();"  value="<?php echo $info['g9']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h9" id="h9" style="width:30px" id="h9"  onblur="row9();"  value="<?php echo $info['h9']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i9" id="i9" style="width:30px" id="i9"  onblur="row9();"  value="<?php echo $info['i9']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j9" id="j9" style="width:30px" id="j9"  onblur="row9();"  value="<?php echo $info['j9']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k9" id="k9" style="width:30px" id="k9"  onblur="row9();"  value="<?php echo $info['k9']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l9" id="l9" style="width:30px" id="l9"  onblur="row9();"  value="<?php echo $info['l9']; ?>"   /></div></div></td>
<td colspan=5; style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_9" style="padding-right: 3px;"></div></div></td>
        </tr>
 <tr>  
           <th align="left"><font color="black">Number of Additional test done other than GeneXpert and Smear microscopy ( C )</font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a22" id="a22" style="width:30px" onblur="row22();"  value="<?php echo $info['a22']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b22" id="b22" style="width:30px" onblur="row22();"  value="<?php echo $info['b22']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c22" id="c22" style="width:30px" onblur="row22();"  value="<?php echo $info['c22']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d22" id="d22" style="width:30px" onblur="row22();"  value="<?php echo $info['d22']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e22" id="e22" style="width:30px" onblur="row22();"  value="<?php echo $info['e22']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f22" id="f22" style="width:30px" onblur="row22();"  value="<?php echo $info['f22']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g22" id="g22" style="width:30px" onblur="row22();"  value="<?php echo $info['g22']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h22" id="h22" style="width:30px" onblur="row22();"  value="<?php echo $info['h22']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i22" id="i22" style="width:30px" onblur="row22();"  value="<?php echo $info['i22']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j22" id="j22" style="width:30px" onblur="row22();"  value="<?php echo $info['j22']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k22" id="k22" style="width:30px" onblur="row22();"  value="<?php echo $info['k22']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l22" id="l22" style="width:30px" onblur="row22();"  value="<?php echo $info['l22']; ?>"   /></div></div></td>
        <td colspan=5; style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_22" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Total number of presumptive TB cases that had a specimen sent for bacteriologic diagnosis of active TB (A+B+C)</font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a2" style="padding-right: 3px;"><input type="text" name="a23" style="width:30px" id="a23" onclick="row23();"  value="<?php echo $info['a23']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b2" style="padding-right: 3px;"><input type="text" name="b23" style="width:30px" id="b23" onclick="row23();"  value="<?php echo $info['b23']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c2" style="padding-right: 3px;"><input type="text" name="c23" style="width:30px" id="c23" onclick="row23();"  value="<?php echo $info['c23']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d2" style="padding-right: 3px;"><input type="text" name="d23" style="width:30px" id="d23" onclick="row23();"  value="<?php echo $info['d23']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e2" style="padding-right: 3px;"><input type="text" name="e23" style="width:30px" id="e23" onclick="row23();"  value="<?php echo $info['e23']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f2" style="padding-right: 3px;"><input type="text" name="f23" style="width:30px" id="f23" onclick="row23();"  value="<?php echo $info['f23']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g2" style="padding-right: 3px;"><input type="text" name="g23" style="width:30px" id="g23" onclick="row23();"  value="<?php echo $info['g23']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h2" style="padding-right: 3px;"><input type="text" name="h23" style="width:30px" id="h23" onclick="row23();"  value="<?php echo $info['h23']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i2" style="padding-right: 3px;"><input type="text" name="i23" style="width:30px" id="i23" onclick="row23();"  value="<?php echo $info['i23']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j2" style="padding-right: 3px;"><input type="text" name="j23" style="width:30px" id="j23" onclick="row23();"  value="<?php echo $info['j23']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k2" style="padding-right: 3px;"><input type="text" name="k23" style="width:30px" id="k23" onclick="row23();"  value="<?php echo $info['k23']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l2" style="padding-right: 3px;"><input type="text" name="l23" style="width:30px" id="l23" onclick="row23();"  value="<?php echo $info['l23']; ?>"   /></div></div></td>
<td colspan=5; style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_23" style="padding-right: 3px;"></div></div></td>
        </tr>
        
 
<tr>  
   <th align="left"><font color="black"><span style="background-color:#DD4F43; padding: 3px;">Number of TB  clients diagnosed with TB among presumptive cases identified </span></font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a29" id="a29" style="width:30px" onblur="row29();"  value="<?php echo $info['a29']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b29" id="b29" style="width:30px" onblur="row29();"  value="<?php echo $info['b29']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c29" id="c29" style="width:30px" onblur="row29();"  value="<?php echo $info['c29']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d29" id="d29" style="width:30px" onblur="row29();"  value="<?php echo $info['d29']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e29" id="e29" style="width:30px" onblur="row29();"  value="<?php echo $info['e29']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f29" id="f29" style="width:30px" onblur="row29();"  value="<?php echo $info['f29']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g29" id="g29" style="width:30px" onblur="row29();"  value="<?php echo $info['g29']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h29" id="h29" style="width:30px" onblur="row29();"  value="<?php echo $info['h29']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i29" id="i29" style="width:30px" onblur="row29();"  value="<?php echo $info['i29']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j29" id="j29" style="width:30px" onblur="row29();"  value="<?php echo $info['j29']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k29" id="k29" style="width:30px" onblur="row29();"  value="<?php echo $info['k29']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l29" id="l29" style="width:30px" onblur="row29();"  value="<?php echo $info['l29']; ?>"   /></div></div></td>
        <td colspan=5; style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_29" style="padding-right: 3px;"></div></div></td>
        </tr>
        
        <tr>                                                                                                                
<th colspan=16; style="text-align:center; background-color:#FFCE44"><font color="black">TX_TB (The proportion of ART patients who were screened who are receiving TB treatment)</font></th>       
</tr>   
        
          <tr>
        <th align="left"><font color="black"><span style="background-color:#DD4F43; padding: 3px;">Number of patients starting TB treatment who newly started ART during the reporting period </span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="a2" style="padding-right: 3px;"><input type="text" name="a30" style="width:30px" id="a30" onblur="row30();"  value="<?php echo $info['a30']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="b2" style="padding-right: 3px;"><input type="text" name="b30" style="width:30px" id="b30" onblur="row30();"  value="<?php echo $info['b30']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="c2" style="padding-right: 3px;"><input type="text" name="c30" style="width:30px" id="c30" onblur="row30();"  value="<?php echo $info['c30']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="d2" style="padding-right: 3px;"><input type="text" name="d30" style="width:30px" id="d30" onblur="row30();"  value="<?php echo $info['d30']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="e2" style="padding-right: 3px;"><input type="text" name="e30" style="width:30px" id="e30" onblur="row30();"  value="<?php echo $info['e30']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="f2" style="padding-right: 3px;"><input type="text" name="f30" style="width:30px" id="f30" onblur="row30();"  value="<?php echo $info['f30']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="g2" style="padding-right: 3px;"><input type="text" name="g30" style="width:30px" id="g30" onblur="row30();"  value="<?php echo $info['g30']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="h2" style="padding-right: 3px;"><input type="text" name="h30" style="width:30px" id="h30" onblur="row30();"  value="<?php echo $info['h30']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="i2" style="padding-right: 3px;"><input type="text" name="i30" style="width:30px" id="i30" onblur="row30();"  value="<?php echo $info['i30']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="j2" style="padding-right: 3px;"><input type="text" name="j30" style="width:30px" id="j30" onblur="row30();"  value="<?php echo $info['j30']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="k2" style="padding-right: 3px;"><input type="text" name="k30" style="width:30px" id="k30" onblur="row30();"  value="<?php echo $info['k30']; ?>"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="l2" style="padding-right: 3px;"><input type="text" name="l30" style="width:30px" id="l30" onblur="row30();"  value="<?php echo $info['l30']; ?>"   /></div></div></td>
<td colspan=5; style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_30" style="padding-right: 3px;"></div></div></td>
        </tr>
<tr>  
           <th align="left"><font color="black">Number of patients starting TB treatment who were already on ART prior to the start of the reporting period </font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a36" id="a36" style="width:30px" onblur="row36();"  value="<?php echo $info['a36']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b36" id="b36" style="width:30px" onblur="row36();"  value="<?php echo $info['b36']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c36" id="c36" style="width:30px" onblur="row36();"  value="<?php echo $info['c36']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d36" id="d36" style="width:30px" onblur="row36();"  value="<?php echo $info['d36']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e36" id="e36" style="width:30px" onblur="row36();"  value="<?php echo $info['e36']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f36" id="f36" style="width:30px" onblur="row36();"  value="<?php echo $info['f36']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g36" id="g36" style="width:30px" onblur="row36();"  value="<?php echo $info['g36']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h36" id="h36" style="width:30px" onblur="row36();"  value="<?php echo $info['h36']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i36" id="i36" style="width:30px" onblur="row36();"  value="<?php echo $info['i36']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j36" id="j36" style="width:30px" onblur="row36();"  value="<?php echo $info['j36']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k36" id="k36" style="width:30px" onblur="row36();"  value="<?php echo $info['k36']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l36" id="l36" style="width:30px" onblur="row36();"  value="<?php echo $info['l36']; ?>"   /></div></div></td>
        <td colspan=5; style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_36" style="padding-right: 3px;"></div></div></td>
        </tr>

<tr>  
           <th align="left"><font color="black">Total</font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a37" id="a37" style="width:30px" onblur="row37();"  value="<?php echo $info['a37']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b37" id="b37" style="width:30px" onblur="row37();"  value="<?php echo $info['b37']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c37" id="c37" style="width:30px" onblur="row37();"  value="<?php echo $info['c37']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d37" id="d37" style="width:30px" onblur="row37();"  value="<?php echo $info['d37']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e37" id="e37" style="width:30px" onblur="row37();"  value="<?php echo $info['e37']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f37" id="f37" style="width:30px" onblur="row37();"  value="<?php echo $info['f37']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g37" id="g37" style="width:30px" onblur="row37();"  value="<?php echo $info['g37']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h37" id="h37" style="width:30px" onblur="row37();"  value="<?php echo $info['h37']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i37" id="i37" style="width:30px" onblur="row37();"  value="<?php echo $info['i37']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j37" id="j37" style="width:30px" onblur="row37();"  value="<?php echo $info['j37']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k37" id="k37" style="width:30px" onblur="row37();"  value="<?php echo $info['k37']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l37" id="l37" style="width:30px" onblur="row37();"  value="<?php echo $info['l37']; ?>"   /></div></div></td>
        <td colspan=5; style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_37" style="padding-right: 3px;"></div></div></td>
        </tr>
        
  <tr>                                                                                                                
<th colspan=16; style="text-align:center; background-color:#FFCE44"><font color="black">TB PREVENTIVE THERAPY</font></th>       
</tr>      
 
     
 <tr>  
           <th align="left"><font color="black">Number of HIV+ patients who started TB Preventive Therapy (INH prophylaxis)</font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a38" id="a38" style="width:30px" onblur="row38();"  value="<?php echo $info['a38']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b38" id="b38" style="width:30px" onblur="row38();"  value="<?php echo $info['b38']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c38" id="c38" style="width:30px" onblur="row38();"  value="<?php echo $info['c38']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d38" id="d38" style="width:30px" onblur="row38();"  value="<?php echo $info['d38']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e38" id="e38" style="width:30px" onblur="row38();"  value="<?php echo $info['e38']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f38" id="f38" style="width:30px" onblur="row38();"  value="<?php echo $info['f38']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g38" id="g38" style="width:30px" onblur="row38();"  value="<?php echo $info['g38']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h38" id="h38" style="width:30px" onblur="row38();"  value="<?php echo $info['h38']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i38" id="i38" style="width:30px" onblur="row38();"  value="<?php echo $info['i38']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j38" id="j38" style="width:30px" onblur="row38();"  value="<?php echo $info['j38']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k38" id="k38" style="width:30px" onblur="row38();"  value="<?php echo $info['k38']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l38" id="l38" style="width:30px" onblur="row38();"  value="<?php echo $info['l38']; ?>"   /></div></div></td>
        <td colspan=5; style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_38" style="padding-right: 3px;"></div></div></td>
        </tr>
   
 <tr>  
           <th align="left"><font color="black">Number of HIV+ patients whocompleted TB Preventive Therapy (INH prophylaxis)</font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a39" id="a39" style="width:30px" onblur="row39();"  value="<?php echo $info['a39']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b39" id="b39" style="width:30px" onblur="row39();"  value="<?php echo $info['b39']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c39" id="c39" style="width:30px" onblur="row39();"  value="<?php echo $info['c39']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d39" id="d39" style="width:30px" onblur="row39();"  value="<?php echo $info['d39']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e39" id="e39" style="width:30px" onblur="row39();"  value="<?php echo $info['e39']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f39" id="f39" style="width:30px" onblur="row39();"  value="<?php echo $info['f39']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g39" id="g39" style="width:30px" onblur="row39();"  value="<?php echo $info['g39']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h39" id="h39" style="width:30px" onblur="row39();"  value="<?php echo $info['h39']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i39" id="i39" style="width:30px" onblur="row39();"  value="<?php echo $info['i39']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j39" id="j39" style="width:30px" onblur="row39();"  value="<?php echo $info['j39']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k39" id="k39" style="width:30px" onblur="row39();"  value="<?php echo $info['k39']; ?>"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l39" id="l39" style="width:30px" onblur="row39();"  value="<?php echo $info['l39']; ?>"   /></div></div></td>
        <td colspan=5; style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_39" style="padding-right: 3px;"></div></div></td>
        </tr>       
       

<tr>
    <td width="148" colspan="2" style="padding: 5px 30px 5px 8px;text-align:center;" > <button type="submit" form="form1" value="Submit" style="padding: 10px 30px 10px 8px; ">CONTINUE</button>
<!--<label type="" form="form1" value="" style="padding: 10px 30px 10px 8px; ">REPORTING SEASON IS OVER</label></td>-->
</tr>            
</table>
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
