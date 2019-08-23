<?php
session_start();
$con=mysql_connect("localhost","appsapin","9001Memday");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}


mysql_select_db('appsapin_apinorg_db',$con) or die ("could not open db".mysql_error());

if(isset($_GET['id'])){
$id = $_GET['id'];
$query = "SELECT `id`, `facilityname`, `sender`, `facid`, `state`, `lga`, `month`, `year`, `rmonthnum`, `repdate`, `appr_lvl`, `comment`, `a1`, `b1`, `c1`, `d1`, `e1`, `f1`, `g1`, `h1`, `i1`, `j1`, `k1`, `l1`, `m1`, `n1`, `o1`, `p1`, `a2`, `b2`, `c2`, `d2`, `e2`, `f2`, `g2`, `h2`, `i2`, `j2`, `k2`, `l2`, `m2`, `n2`, `o2`, `p2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `b8`, `c8`, `d8`, `e8`, `f8`, `g8`, `h8`, `i8`, `j8`, `k8`, `l8`, `m8`, `n8`, `o8`, `p8`, `a9`, `b9`, `c9`, `d9`, `e9`, `f9`, `g9`, `h9`, `i9`, `j9`, `k9`, `l9`, `m9`, `n9`, `o9`, `p9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `b15`, `c15`, `d15`, `e15`, `i15`, `j15`, `k15`, `l15`, `m15`, `a16`, `b16`, `c16`, `d16`, `e16`, `i16`, `j16`, `k16`, `l16`, `m16`, `a17`, `a18`, `a19`, `a20`, `a21`, `a22`, `b22`, `c22`, `d22`, `e22`, `f22`, `g22`, `h22`, `i22`, `j22`, `k22`, `l22`, `m22`, `n22`, `o22`, `p22`, `a23`, `b23`, `c23`, `d23`, `e23`, `f23`, `g23`, `h23`, `i23`, `j23`, `k23`, `l23`, `m23`, `n23`, `o23`, `p23`, `a24`, `a25`, `a26`, `a27`, `a28`, `a29`, `b29`, `c29`, `d29`, `e29`, `f29`, `g29`, `h29`, `i29`, `j29`, `k29`, `l29`, `m29`, `n29`, `o29`, `p29`, `a30`, `b30`, `c30`, `d30`, `e30`, `f30`, `g30`, `h30`, `i30`, `j30`, `k30`, `l30`, `m30`, `n30`, `o30`, `p30`, `a31`, `a32`, `a33`, `a34`, `a35`, `a36`, `b36`, `c36`, `d36`, `e36`, `f36`, `g36`, `h36`, `i36`, `j36`, `k36`, `l36`, `m36`, `n36`, `o36`, `p36`, `a37`, `b37`, `c37`, `d37`, `e37`, `f37`, `g37`, `h37`, `i37`, `j37`, `k37`, `l37`, `m37`, `n37`, `o37`, `p37`, `a38`, `a39`, `a40`, `a41`, `a42`, `a43`, `b43`, `c43`, `d43`, `e43`, `f43`, `g43`, `h43`, `i43`, `j43`, `k43`, `l43`, `m43`, `n43`, `o43`, `p43`, `a44`, `b44`, `c44`, `d44`, `e44`, `f44`, `g44`, `h44`, `i44`, `j44`, `k44`, `l44`, `m44`, `n44`, `o44`, `p44`, `a45`, `a46`, `a47`, `a48`, `a49`, `j50`, `k50`, `l50`, `m50`, `n50`, `o50`, `j52`, `k52`, `l52`, `m52`, `n52`, `o52`, `a53`, `a54`, `a55`, `a56`, `a57`, `a58`, `b58`, `c58`, `d58`, `e58`, `f58`, `g58`, `h58`, `i58`, `j58`, `k58`, `l58`, `m58`, `n58`, `o58`, `p58`, `a59`, `b59`, `c59`, `d59`, `e59`, `f59`, `g59`, `h59`, `i59`, `j59`, `k59`, `l59`, `m59`, `n59`, `o59`, `p59`, `a60`, `a61`, `a62`, `a63`, `a64`, `b17`, `c17`, `d17`, `e17`, `i17`, `j17`, `k17`, `l17`, `m17`, `b18`, `c18`, `d18`, `e18`, `i18`, `j18`, `k18`, `l18`, `m18`, `b19`, `c19`, `d19`, `e19`, `i19`, `j19`, `k19`, `l19`, `m19`, `b20`, `c20`, `d20`, `e20`, `i20`, `j20`, `k20`, `l20`, `m20` 
FROM `mrf_htc_table` where id='$id'";
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
var t13 = document.getElementById("m1").value;
var t14 = document.getElementById("n1").value;
var t15 = document.getElementById("o1").value;
var t16 = document.getElementById("p1").value;

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
var t10 = document.getElementById("j2").value;
var t11 = document.getElementById("k2").value;
var t12 = document.getElementById("l2").value;
var t13 = document.getElementById("m2").value;
var t14 = document.getElementById("n2").value;
var t15 = document.getElementById("o2").value;
var t16 = document.getElementById("p2").value;

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
var t10 = document.getElementById("j8").value;
var t11 = document.getElementById("k8").value;
var t12 = document.getElementById("l8").value;
var t13 = document.getElementById("m8").value;
var t14 = document.getElementById("n8").value;
var t15 = document.getElementById("o8").value;
var t16 = document.getElementById("p8").value;

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
var t10 = document.getElementById("j9").value;
var t11 = document.getElementById("k9").value;
var t12 = document.getElementById("l9").value;
var t13 = document.getElementById("m9").value;
var t14 = document.getElementById("n9").value;
var t15 = document.getElementById("o9").value;
var t16 = document.getElementById("p9").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_9").innerHTML =total1 ;
}
function row15() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a15").value;
var t2 = document.getElementById("b15").value;
var t3 = document.getElementById("c15").value;
var t4 = document.getElementById("d15").value;
var t5 = document.getElementById("e15").value;

var t9 = document.getElementById("i15").value;
var t10 = document.getElementById("j15").value;
var t11 = document.getElementById("k15").value;
var t12 = document.getElementById("l15").value;
var t13 = document.getElementById("m15").value;


total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_15").innerHTML =total1 ;
}
function row16() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a16").value;
var t2 = document.getElementById("b16").value;
var t3 = document.getElementById("c16").value;
var t4 = document.getElementById("d16").value;
var t5 = document.getElementById("e16").value;

var t9 = document.getElementById("i16").value;
var t10 = document.getElementById("j16").value;
var t11 = document.getElementById("k16").value;
var t12 = document.getElementById("l16").value;
var t13 = document.getElementById("m16").value;


total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_16").innerHTML =total1 ;
}

function row17() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a17").value;
var t2 = document.getElementById("b17").value;
var t3 = document.getElementById("c17").value;
var t4 = document.getElementById("d17").value;
var t5 = document.getElementById("e17").value;

var t9 	= document.getElementById("i17").value;
var t10 = document.getElementById("j17").value;
var t11 = document.getElementById("k17").value;
var t12 = document.getElementById("l17").value;
var t13 = document.getElementById("m17").value;


total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_17").innerHTML =total1 ;
}

function row18() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a18").value;
var t2 = document.getElementById("b18").value;
var t3 = document.getElementById("c18").value;
var t4 = document.getElementById("d18").value;
var t5 = document.getElementById("e18").value;

var t9 	= document.getElementById("i18").value;
var t10 = document.getElementById("j18").value;
var t11 = document.getElementById("k18").value;
var t12 = document.getElementById("l18").value;
var t13 = document.getElementById("m18").value;


total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_18").innerHTML =total1 ;
}


function row19() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a19").value;
var t2 = document.getElementById("b19").value;
var t3 = document.getElementById("c19").value;
var t4 = document.getElementById("d19").value;
var t5 = document.getElementById("e19").value;

var t9 	= document.getElementById("i19").value;
var t10 = document.getElementById("j19").value;
var t11 = document.getElementById("k19").value;
var t12 = document.getElementById("l19").value;
var t13 = document.getElementById("m19").value;


total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_19").innerHTML =total1 ;
}

function row20() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a20").value;
var t2 = document.getElementById("b20").value;
var t3 = document.getElementById("c20").value;
var t4 = document.getElementById("d20").value;
var t5 = document.getElementById("e20").value;

var t9 	= document.getElementById("i20").value;
var t10 = document.getElementById("j20").value;
var t11 = document.getElementById("k20").value;
var t12 = document.getElementById("l20").value;
var t13 = document.getElementById("m20").value;


total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_20").innerHTML =total1 ;
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
var t10 = document.getElementById("j22").value;
var t11 = document.getElementById("k22").value;
var t12 = document.getElementById("l22").value;
var t13 = document.getElementById("m22").value;
var t14 = document.getElementById("n22").value;
var t15 = document.getElementById("o22").value;
var t16 = document.getElementById("p22").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_22").innerHTML =total1 ;
}
function row23() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a23").value;
var t2 = document.getElementById("b23").value;
var t3 = document.getElementById("c23").value;
var t4 = document.getElementById("d23").value;
var t5 = document.getElementById("e23").value;
var t6 = document.getElementById("f23").value;
var t7 = document.getElementById("g23").value;
var t8 = document.getElementById("h23").value;
var t9 = document.getElementById("i23").value;
var t10 = document.getElementById("j23").value;
var t11 = document.getElementById("k23").value;
var t12 = document.getElementById("l23").value;
var t13 = document.getElementById("m23").value;
var t14 = document.getElementById("n23").value;
var t15 = document.getElementById("o23").value;
var t16 = document.getElementById("p23").value;

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
var t10 = document.getElementById("j29").value;
var t11 = document.getElementById("k29").value;
var t12 = document.getElementById("l29").value;
var t13 = document.getElementById("m29").value;
var t14 = document.getElementById("n29").value;
var t15 = document.getElementById("o29").value;
var t16 = document.getElementById("p29").value;

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
var t10 = document.getElementById("j30").value;
var t11 = document.getElementById("k30").value;
var t12 = document.getElementById("l30").value;
var t13 = document.getElementById("m30").value;
var t14 = document.getElementById("n30").value;
var t15 = document.getElementById("o30").value;
var t16 = document.getElementById("p30").value;

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
var t10 = document.getElementById("j36").value;
var t11 = document.getElementById("k36").value;
var t12 = document.getElementById("l36").value;
var t13 = document.getElementById("m36").value;
var t14 = document.getElementById("n36").value;
var t15 = document.getElementById("o36").value;
var t16 = document.getElementById("p36").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_36").innerHTML =total1 ;
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
var t10 = document.getElementById("j37").value;
var t11 = document.getElementById("k37").value;
var t12 = document.getElementById("l37").value;
var t13 = document.getElementById("m37").value;
var t14 = document.getElementById("n37").value;
var t15 = document.getElementById("o37").value;
var t16 = document.getElementById("p37").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_37").innerHTML =total1 ;
}
function row43() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a43").value;
var t2 = document.getElementById("b43").value;
var t3 = document.getElementById("c43").value;
var t4 = document.getElementById("d43").value;
var t5 = document.getElementById("e43").value;
var t6 = document.getElementById("f43").value;
var t7 = document.getElementById("g43").value;
var t8 = document.getElementById("h43").value;
var t9 = document.getElementById("i43").value;
var t10 = document.getElementById("j43").value;
var t11 = document.getElementById("k43").value;
var t12 = document.getElementById("l43").value;
var t13 = document.getElementById("m43").value;
var t14 = document.getElementById("n43").value;
var t15 = document.getElementById("o43").value;
var t16 = document.getElementById("p43").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_43").innerHTML =total1 ;
}
function row44() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a44").value;
var t2 = document.getElementById("b44").value;
var t3 = document.getElementById("c44").value;
var t4 = document.getElementById("d44").value;
var t5 = document.getElementById("e44").value;
var t6 = document.getElementById("f44").value;
var t7 = document.getElementById("g44").value;
var t8 = document.getElementById("h44").value;
var t9 = document.getElementById("i44").value;
var t10 = document.getElementById("j44").value;
var t11 = document.getElementById("k44").value;
var t12 = document.getElementById("l44").value;
var t13 = document.getElementById("m44").value;
var t14 = document.getElementById("n44").value;
var t15 = document.getElementById("o44").value;
var t16 = document.getElementById("p44").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_44").innerHTML =total1 ;
}
function row50() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;

var t10 = document.getElementById("j50").value;
var t11 = document.getElementById("k50").value;
var t12 = document.getElementById("l50").value;
var t13 = document.getElementById("m50").value;
var t14 = document.getElementById("n50").value;
var t15 = document.getElementById("o50").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_50").innerHTML =total1 ;
}
function row52() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;

var t10 = document.getElementById("j52").value;
var t11 = document.getElementById("k52").value;
var t12 = document.getElementById("l52").value;
var t13 = document.getElementById("m52").value;
var t14 = document.getElementById("n52").value;
var t15 = document.getElementById("o52").value;
total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_52").innerHTML =total1 ;
}
function row58() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a58").value;
var t2 = document.getElementById("b58").value;
var t3 = document.getElementById("c58").value;
var t4 = document.getElementById("d58").value;
var t5 = document.getElementById("e58").value;
var t6 = document.getElementById("f58").value;
var t7 = document.getElementById("g58").value;
var t8 = document.getElementById("h58").value;
var t9 = document.getElementById("i58").value;
var t10= document.getElementById("j58").value;
var t11= document.getElementById("k58").value;
var t12= document.getElementById("l58").value;
var t13= document.getElementById("m58").value;
var t14= document.getElementById("n58").value;
var t15= document.getElementById("o58").value;
var t16= document.getElementById("p58").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_58").innerHTML =total1 ;
}
function row59() {
var t1=0 ,t2=0 ,t3=0 ,t4=0 ,t5=0 ,t6=0 ,t7=0 ,t8=0 ,t9=0 ,t10=0 ,t11=0 ,t12=0 ,t13=0 ,t14=0 ,t15=0 ,t16=0,tot1=0, total1=0;
var t1 = document.getElementById("a59").value;
var t2 = document.getElementById("b59").value;
var t3 = document.getElementById("c59").value;
var t4 = document.getElementById("d59").value;
var t5 = document.getElementById("e59").value;
var t6 = document.getElementById("f59").value;
var t7 = document.getElementById("g59").value;
var t8 = document.getElementById("h59").value;
var t9 = document.getElementById("i59").value;
var t10= document.getElementById("j59").value;
var t11= document.getElementById("k59").value;
var t12= document.getElementById("l59").value;
var t13= document.getElementById("m59").value;
var t14= document.getElementById("n59").value;
var t15= document.getElementById("o59").value;
var t16= document.getElementById("p59").value;

total1 = parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4)+parseInt(t5)+parseInt(t6)+parseInt(t7)+parseInt(t8)+parseInt(t9)+parseInt(t10)+parseInt(t11)+parseInt(t12)+parseInt(t13)+parseInt(t14)+parseInt(t15)+parseInt(t16);

	document.getElementById("tot_59").innerHTML =total1 ;
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MRF - HTC</title>
<h1 align="center">HTC MRF FORM	~~ LEVEL: <?php echo $level; ?>													
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

<form method="post" width="100%" action="mrf_htc_ins.php" name="form" id="form1" onSubmit="return validateForm()" >
<input type="hidden" name="appr_lvl" style="width:30px" id="appr_lvl"  value="<?php echo $_GET['appr_lvl']; ?>"   />
   <table align="center" style="background-color:#FFF; width: 75%; alignment-adjust:central" cellpadding="0" cellspacing="0" border="1">
   <tr>
<th align="left"><font color="black">Name of Facility:</font></th>
  <td colspan="5"><input type="text" name="facilityname" style="width:250px" id="facilityname" readonly  value="<?php if(isset($_GET['facid'])){echo $info['facilityname']; } else{echo $info['health_facility'];} ?>"   /></td>
<th align="left" colspan="3"><font color="black">Report Date:</font></th>
<td colspan="3"><input type="text" name="repdate" id="repdate" style="width:120px" id="facilityname" readonly  value="<?php echo date("Y-m-d")?>"   /></td>
<th align="left" colspan="3"><font color="black">Sender:</font></th>
<td colspan="3"><input type="text" name="sender" id="sender" style="width:160px" id="facilityname" required value=""   /></td>

   </tr>

<input type="hidden" name="state" id="state" style="width:160px" required value="<?php if(isset($_GET['facid'])){echo $info['state']; } else{echo $info['state'];} ?>"   />
<input type="hidden" name="lga" id="lga" style="width:160px" required value="<?php if(isset($_GET['facid'])){echo $info['lga']; } else{echo $info['state'];} ?>"   />



    <tr>
<th align="left"><font color="black">MONTH:</font></th>
<td colspan="5"><select id="month" name="month" required>
<option value="">SELECT MONTH</option>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select></td>
<th align="left" colspan="3"><font color="black">YEAR:</font></th>
<td colspan="3"><select id="year" name="year" required >
<option value="">SELECT YEAR</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
</select></td>
<th align="left" colspan="3"><font color="black">Facility ID:</font></th>
<td colspan="3"><input type="text" name="facid" id="facid" style="width:160px" readonly onblur="endbalcalc1();"  value="<?php if(isset($_GET['facid'])){echo $info['facilityid']; } else{echo $info['facilitycode'];} ?>"   /></td>

   </tr>

  <tr>

  	<th><font color="black"></font>
  	<th colspan="8" style="background-color:#993; font-size:18px "><font color="black">MALE</font></th>
  	<th colspan="8" style="background-color:#993; font-size:18px"><font color="black">FEMALE</font></th>
    <th><font color="black"></font>
</tr>
   <tr style="position: Non">
      <th style="width: 151px "><font color="black" style="transform-style:flat">Male/Female</font></th>
      <th style="width:40px"><font color="black">< 1</font></th>
      <th style="width:40px"><font color="black">1-4</font>
      <th style="width:40px"><font color="black">5-9</font>
      <th style="width:40px"><font color="black">10-14</font>
      <th style="width:40px"><font color="black">15-19</font>
      <th style="width:40px"><font color="black">20-24</font>
      <th style="width:40px"><font color="black">25-49</font>
      <th style="width:40px"><font color="black">50+ </font>
      <th style="width:40px"><font color="black"> < 1</font></th>
      <th style="width:40px"><font color="black">1-4</font>
      <th style="width:40px"><font color="black">5-9</font>
      <th style="width:40px"><font color="black">10-14</font>
      <th style="width:40px"><font color="black">15-19</font>
      <th style="width:40px"><font color="black">20-24</font>
      <th style="width:50px"><font color="black">25-49</font>
      <th style="width:50px"><font color="black">50+</font>
      <th style="width:30px"><font color="black">Tot</font></th>
       </tr>
 
 
<tr>                                                                                                                
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">Adult Inpatient</font></th>       
</tr> 
<tr>  
           <th align="left"><font color="black">Number of individuals who received HIV  Counseling &Testing  and received their test results <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a1" id="a1" style="width:30px" onblur="row1();"  value="0" /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b1" id="b1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c1" id="c1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d1" id="d1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e1" id="e1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f1" id="f1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g1" id="g1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h1" id="h1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i1" id="i1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j1" id="j1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k1" id="k1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l1" id="l1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m1" id="m1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n1" id="n1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o1" id="o1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="p1" id="p1" style="width:30px"  onblur="row1();" value="0"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_1" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of individuals who tested HIV-positive <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a2" id="a2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b2" id="b2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c2" id="c2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d2" id="d2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e2" id="e2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f2" id="f2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g2" id="g2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h2" id="h2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i2" id="i2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j2" id="j2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k2" id="k2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l2" id="l2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m2" id="m2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n2" id="n2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o2" id="o2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="p2" id="p2" style="width:30px"  onblur="row2()"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_2" style="padding-right: 3px;"></div></div></td>
        </tr>
 <tr>                                                                                                                
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">Adult Outpatient</font></th>       
</tr>  
<tr>  
           <th align="left"><font color="black">Number of individuals who received HIV  Counseling &Testing  and received their test results <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="a8" style="width:30px" id="a8" value="0"  onblur="row8()" /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="b8" style="width:30px" id="b8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="c8" style="width:30px" id="c8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="d8" style="width:30px" id="d8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="e8" style="width:30px" id="e8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="f8" style="width:30px" id="f8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="g8" style="width:30px" id="g8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="h8" style="width:30px" id="h8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="i8" style="width:30px" id="i8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="j8" style="width:30px" id="j8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="k8" style="width:30px" id="k8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="l8" style="width:30px" id="l8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="m8" style="width:30px" id="m8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="n8" style="width:30px" id="n8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="o8" style="width:30px" id="o8"  value="0" onblur="row8()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="" style="padding-right: 3px;"><input type="text" name="p8" style="width:30px" id="p8"  value="0" onblur="row8()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_8" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of individuals who tested HIV-positive <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="a9" id="a9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="b9" id="b9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="c9" id="c9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="d9" id="d9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="e9" id="e9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="f9" id="f9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="g9" id="g9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="h9" id="h9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="i9" id="i9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="j9" id="j9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="k9" id="k9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="l9" id="l9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="m9" id="m9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="n9" id="n9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="o9" id="o9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div style="padding-right: 3px;"><input type="text" name="p9" id="p9" style="width:30px"  value="0" onblur="row9()"  /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_9" style="padding-right: 3px;"></div></div></td>
        </tr>
        <tr>                                                                                                                
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">Pediatric Medical Inpatient</font></th>       
</tr> 
<tr>  
           <th align="left"><font color="black">Number of individuals who received HIV  Counseling &Testing  and received their test results <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a15" id="a15" style="width:30px" onblur="row15();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b15" id="b15" style="width:30px" onblur="row15();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c15" id="c15" style="width:30px" onblur="row15();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d15" id="d15" style="width:30px" onblur="row15();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e15" id="e15" style="width:30px" onblur="row15();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>         
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>         
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>         
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i15" id="i15" style="width:30px" onblur="row15();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j15" id="j15" style="width:30px" onblur="row15();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k15" id="k15" style="width:30px" onblur="row15();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l15" id="l15" style="width:30px" onblur="row15();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m15" id="m15" style="width:30px" onblur="row15();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_15" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of individuals who tested HIV-positive <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a16" style="width:30px" id="a16" onblur="row16();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b16" style="width:30px" id="b16" onblur="row16();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c16" style="width:30px" id="c16" onblur="row16();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d16" style="width:30px" id="d16" onblur="row16();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e16" style="width:30px" id="e16" onblur="row16();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i16" style="width:30px" id="i16" onblur="row16();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j16" style="width:30px" id="j16" onblur="row16();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k16" style="width:30px" id="k16" onblur="row16();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l16" style="width:30px" id="l16" onblur="row16();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m16" style="width:30px" id="m16" onblur="row16();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_16" style="padding-right: 3px;"></div></div></td>
        </tr>


        <tr>                                                                                                                
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">Pediatric Outpatient</font></th>       
</tr> 
<tr>  
           <th align="left"><font color="black">Number of individuals who received HIV  Counseling &Testing  and received their test results <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a17" id="a17" style="width:30px" onblur="row17();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b17" id="b17" style="width:30px" onblur="row17();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c17" id="c17" style="width:30px" onblur="row17();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d17" id="d17" style="width:30px" onblur="row17();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e17" id="e17" style="width:30px" onblur="row17();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>         
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>         
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>         
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i17" id="i17" style="width:30px" onblur="row17();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j17" id="j17" style="width:30px" onblur="row17();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k17" id="k17" style="width:30px" onblur="row17();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l17" id="l17" style="width:30px" onblur="row17();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m17" id="m17" style="width:30px" onblur="row17();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_17" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of individuals who tested HIV-positive <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a18" style="width:30px" id="a18" onblur="row18();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b18" style="width:30px" id="b18" onblur="row18();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c18" style="width:30px" id="c18" onblur="row18();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d18" style="width:30px" id="d18" onblur="row18();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e18" style="width:30px" id="e18" onblur="row18();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i18" style="width:30px" id="i18" onblur="row18();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j18" style="width:30px" id="j18" onblur="row18();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k18" style="width:30px" id="k18" onblur="row18();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l18" style="width:30px" id="l18" onblur="row18();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m18" style="width:30px" id="m18" onblur="row18();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_18" style="padding-right: 3px;"></div></div></td>
        </tr>



        <tr>                                                                                                                
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">Child Welfare/ Immunization</font></th>       
</tr> 
<tr>  
           <th align="left"><font color="black">Number of individuals who received HIV  Counseling &Testing  and received their test results <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a19" id="a19" style="width:30px" onblur="row19();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b19" id="b19" style="width:30px" onblur="row19();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c19" id="c19" style="width:30px" onblur="row19();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d19" id="d19" style="width:30px" onblur="row19();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e19" id="e19" style="width:30px" onblur="row19();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>         
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>         
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>         
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i19" id="i19" style="width:30px" onblur="row19();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j19" id="j19" style="width:30px" onblur="row19();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k19" id="k19" style="width:30px" onblur="row19();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l19" id="l19" style="width:30px" onblur="row19();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m19" id="m19" style="width:30px" onblur="row19();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_19" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of individuals who tested HIV-positive <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a20" style="width:30px" id="a20" onblur="row20();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b20" style="width:30px" id="b20" onblur="row20();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c20" style="width:30px" id="c20" onblur="row20();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d20" style="width:30px" id="d20" onblur="row20();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e20" style="width:30px" id="e20" onblur="row20();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i20" style="width:30px" id="i20" onblur="row20();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j20" style="width:30px" id="j20" onblur="row20();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k20" style="width:30px" id="k20" onblur="row20();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l20" style="width:30px" id="l20" onblur="row20();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m20" style="width:30px" id="m20" onblur="row20();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_20" style="padding-right: 3px;"></div></div></td>
        </tr>


        <tr>                                                                                                                
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">Malnutrition Clinic</font></th>       
</tr> 
<tr>  
           <th align="left"><font color="black">Number of individuals who received HIV  Counseling &Testing  and received their test results <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a22" id="a22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b22" id="b22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c22" id="c22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d22" id="d22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e22" id="e22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f22" id="f22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g22" id="g22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h22" id="h22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i22" id="i22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j22" id="j22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k22" id="k22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l22" id="l22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m22" id="m22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n22" id="n22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o22" id="o22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="p22" id="p22" style="width:30px" onblur="row22();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_22" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of individuals who tested HIV-positive <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a23" style="width:30px" id="a23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b23" style="width:30px" id="b23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c23" style="width:30px" id="c23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d23" style="width:30px" id="d23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e23" style="width:30px" id="e23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f23" style="width:30px" id="f23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g23" style="width:30px" id="g23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h23" style="width:30px" id="h23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i23" style="width:30px" id="i23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j23" style="width:30px" id="j23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k23" style="width:30px" id="k23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l23" style="width:30px" id="l23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m23" style="width:30px" id="m23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n23" style="width:30px" id="n23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o23" style="width:30px" id="o23" onblur="row23();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="p23" style="width:30px" id="p23" onblur="row23();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_23" style="padding-right: 3px;"></div></div></td>
        </tr>

        <tr>                                                                                                                
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">Other PITC</font></th>       
</tr> 
<tr>  
           <th align="left"><font color="black">Number of individuals who received HIV  Counseling &Testing  and received their test results <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a29" id="a29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b29" id="b29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c29" id="c29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d29" id="d29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e29" id="e29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f29" id="f29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g29" id="g29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h29" id="h29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i29" id="i29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j29" id="j29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k29" id="k29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l29" id="l29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m29" id="m29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n29" id="n29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o29" id="o29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="p29" id="p29" style="width:30px" onblur="row29();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_29" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of individuals who tested HIV-positive <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a30" style="width:30px" id="a30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b30" style="width:30px" id="b30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c30" style="width:30px" id="c30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d30" style="width:30px" id="d30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e30" style="width:30px" id="e30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f30" style="width:30px" id="f30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g30" style="width:30px" id="g30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h30" style="width:30px" id="h30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i30" style="width:30px" id="i30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j30" style="width:30px" id="j30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k30" style="width:30px" id="k30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l30" style="width:30px" id="l30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m30" style="width:30px" id="m30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n30" style="width:30px" id="n30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o30" style="width:30px" id="o30" onblur="row30();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="p30" style="width:30px" id="p30" onblur="row30();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_30" style="padding-right: 3px;"></div></div></td>
        </tr>
        <tr>                                                                                                                
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">VCT</font></th>       
</tr> 
<tr>  
           <th align="left"><font color="black">Number of individuals who received HIV  Counseling &Testing  and received their test results <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a36" id="a36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b36" id="b36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c36" id="c36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d36" id="d36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e36" id="e36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f36" id="f36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g36" id="g36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h36" id="h36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i36" id="i36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j36" id="j36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k36" id="k36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l36" id="l36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m36" id="m36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n36" id="n36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o36" id="o36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="p36" id="p36" style="width:30px" onblur="row36();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_36" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of individuals who tested HIV-positive <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a37" style="width:30px" id="a37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b37" style="width:30px" id="b37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c37" style="width:30px" id="c37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d37" style="width:30px" id="d37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e37" style="width:30px" id="e37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f37" style="width:30px" id="f37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g37" style="width:30px" id="g37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h37" style="width:30px" id="h37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i37" style="width:30px" id="i37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j37" style="width:30px" id="j37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k37" style="width:30px" id="k37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l37" style="width:30px" id="l37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m37" style="width:30px" id="m37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n37" style="width:30px" id="n37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o37" style="width:30px" id="o37" onblur="row37();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="p37" style="width:30px" id="p37" onblur="row37();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_37" style="padding-right: 3px;"></div></div></td>

        <tr>                                                                                                                
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">Family Index Testing</font></th>       
</tr> 
<tr>  
           <th align="left"><font color="black">Number of individuals who received HIV  Counseling &Testing  and received their test results <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a43"  style="width:30px" id="a43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b43"  style="width:30px" id="b43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c43"  style="width:30px" id="c43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d43"  style="width:30px" id="d43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e43"  style="width:30px" id="e43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f43"  style="width:30px" id="f43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g43"  style="width:30px" id="g43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h43"  style="width:30px" id="h43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i43"  style="width:30px" id="i43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j43"  style="width:30px" id="j43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k43"  style="width:30px" id="k43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l43"  style="width:30px" id="l43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m43"  style="width:30px" id="m43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n43"  style="width:30px" id="n43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o43"  style="width:30px" id="o43" onblur="row43();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="p43"  style="width:30px" id="p43" onblur="row43();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_43" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of individuals who tested HIV-positive <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a44" style="width:30px" id="a44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b44" style="width:30px" id="b44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c44" style="width:30px" id="c44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d44" style="width:30px" id="d44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e44" style="width:30px" id="e44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f44" style="width:30px" id="f44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g44" style="width:30px" id="g44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h44" style="width:30px" id="h44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i44" style="width:30px" id="i44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j44" style="width:30px" id="j44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k44" style="width:30px" id="k44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l44" style="width:30px" id="l44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m44" style="width:30px" id="m44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n44" style="width:30px" id="n44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o44" style="width:30px" id="o44" onblur="row44();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="p44" style="width:30px" id="p44" onblur="row44();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_44" style="padding-right: 3px;"></div></div></td>
        </tr>
        <tr>                                                                                                                
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">PMTCT</font></th>       
</tr> 
<tr>  
           <th align="left"><font color="black">Number of individuals who received HIV  Counseling &Testing  and received their test results <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j50" id="j50" style="width:30px" onblur="row50();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k50" id="k50" style="width:30px" onblur="row50();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l50" id="l50" style="width:30px" onblur="row50();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m50" id="m50" style="width:30px" onblur="row50();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n50" id="n50" style="width:30px" onblur="row50();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o50" id="o50" style="width:30px" onblur="row50();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_50" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of individuals who tested HIV-positive <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j52" style="width:30px" id="j52" onblur="row52();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k52" style="width:30px" id="k52" onblur="row52();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l52" style="width:30px" id="l52" onblur="row52();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m52" style="width:30px" id="m52" onblur="row52();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n52" style="width:30px" id="n52" onblur="row52();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o52" style="width:30px" id="o52" onblur="row52();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_52" style="padding-right: 3px;"></div></div></td>
        </tr>

        <tr>                                                                                                                
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">TB</font></th>       
</tr> 
<tr>  
           <th align="left"><font color="black">Number of individuals who received HIV  Counseling &Testing  and received their test results <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a58" id="a58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b58" id="b58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c58" id="c58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d58" id="d58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e58" id="e58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f58" id="f58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g58" id="g58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h58" id="h58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i58" id="i58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j58" id="j58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k58" id="k58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l58" id="l58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m58" id="m58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n58" id="n58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o58" id="o58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="p58" id="p58" style="width:30px" onblur="row58();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_58" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of individuals who tested HIV-positive <span style="background-color:#DD4F43; padding: 3px;">(Excluding TB & PMTCT patients)</span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a59" style="width:30px" id="a59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="b59" style="width:30px" id="b59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="c59" style="width:30px" id="c59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="d59" style="width:30px" id="d59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="e59" style="width:30px" id="e59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="f59" style="width:30px" id="f59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="g59" style="width:30px" id="g59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="h59" style="width:30px" id="h59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="i59" style="width:30px" id="i59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="j59" style="width:30px" id="j59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="k59" style="width:30px" id="k59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="l59" style="width:30px" id="l59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="m59" style="width:30px" id="m59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="n59" style="width:30px" id="n59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="o59" style="width:30px" id="o59" onblur="row59();"  value="0"   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="p59" style="width:30px" id="p59" onblur="row59();"  value="0"   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot_59" style="padding-right: 3px;"></div></div></td>
        </tr>
 <tr>                                                                                                                
<th colspan=18; style="text-align:center; background-color:#FFCE44"><font color="black">Couples Testing & Counseling</font></th>       
</tr> 
<tr>  
           <th align="left"><font color="black">Number of couples who received Testing & Counseling and received their results</font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a60" style="width:30px" id="a60" value=""   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot3" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of couple who both tested HIV Negative</span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a61" style="width:30px" id="a61"  value=""   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot4" style="padding-right: 3px;"></div></div></td>
        </tr>
        <tr>  
           <th align="left"><font color="black">Number of couple who both tested HIV Positive</font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a62" style="width:30px" id="a62" value=""   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot5" style="padding-right: 3px;"></div></div></td>
        </tr>
        
          <tr>
        <th align="left"><font color="black">Number of couple where Male is Positive and Female is Negative</span></font></th>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a63" style="width:30px" id="a63"  value=""   /></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot6" style="padding-right: 3px;"></div></div></td>
        </tr>
<tr>  
           <th align="left"><font color="black">Number of couple where Male is Negative and Female is Positive</font></th>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"><input type="text" name="a64" style="width:30px" id="a64" value=""   /></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
<td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div  style="padding-right: 3px;"></div></div></td>
        <td style="background-color:#FFF; padding: 3px;"><div style="margin-right: 3px;"><div id="tot7" style="padding-right: 3px;"></div></div></td>
        </tr> 
<tr>
    <td width="148" colspan="2" style="padding: 5px 30px 5px 8px;text-align:center;" > <button type="submit" form="form1" value="Submit" style="padding: 10px 30px 10px 8px; ">SAVE & CONTINUE</button>
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
