<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<style type="text/css">
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
}
p,h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:850px;
padding:14px;
background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
background: -moz-linear-gradient(bottom, #CCCCCC, #EEEEEE 175px);
font-family: Tahoma, Geneva, sans-serif;
font-size: 14px;
font-style: normal;
font-weight: normal;
color: #000;
text-decoration: none;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;

border-radius: 10px;
padding:10px;
border: 1px solid #999;
border: inset 1px solid #333;
-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
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
width:100px;
float:left;
font-size:10px;
color:#666666;
}
.sidebar {
   width: 170px;
   height: 0px;
   position: fixed;
   left: 0px;
   top: 110px;
   font-family: Tahoma, Geneva, sans-serif;
   font-style: normal;
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
.tops{
   top: 8px;
   position: fixed;
   width:1335px;
	}

#stylized option{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:10px;
font-weight:normal;
text-align:left;
}
#stylized input{
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
margin:2px 0 20px 10px;
text-align:left;
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
#stylized .radio-toolbar input[type="radio"] {
font-weight:normal;
text-align:right;
padding-right:0px;
width:20px;
}
#stylized .radio-toolbar label {
display:block;
font-weight:normal;
text-align:right;
padding-right:0px;
position:absolute;
margin:1px 0 0px 10px;
}
#stylized .radio-toolbar input{
padding-right:50px;
margin:1px 0 0px 10px;
position:inherit;
}
table
{
	width:100%;
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
table {
  max-width: 100%;
  background-color: transparent;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  display: table-column;
  float: none;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  display: table-cell;
  float: none;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-x: scroll;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
  .btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #47a447;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  background-image: none;
  
}
 #status2{
	 padding:10px;
	 background-color:#21D54C;
	 color:#FFFFFF;
	 font:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	 font-size:18px;
	 font-weight:bold;
 }
 #error{
	 padding:10px;
	 background-color:#EF2323;
	 color:#FFFFFF;
	 font:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	 font-size:18px;
	 font-weight:bold;
 }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>PMTCT EMR</title>

</head>

<body>

<div >
<h1 style="font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #FFFFFF;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px 355681;    border-radius: 0 10px 0 10px;    background: #355681;">PMTCT EMR - ANTENATAL CARE &nbsp;&nbsp;&nbsp; </h1>
</div>
<br />
<br />
<br />
<a href="../../forms/pmtctforms.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue"><<< BACK</a>
<br />
<div id="stylized" class="myform">


<h3 style="text-align:center">BASIC INFORMATION</h3>
<span id="status"></span>
<form id="form" name="form" onSubmit="return false;">
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
    
    
<div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Patient ID
</label>
<input type="text" name="pepid" id="pepid" value="<?php if(isset($info2['pepid'])){echo $info2['pepid'];} ?>"  style="width:120px;height:10px;" required>
      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>
Unique ID
</label>
<input type="text" name="uniqueid" id="uniqueid" value="<?php if(isset($info2['uniqueid'])){echo $info2['uniqueid'];}else{echo "";} ?>"  style="width:120px;height:10px;" required>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Hospital(UNIT) Number
</label>
<input type="text" name="hospitalunit" id="hospitalunit"  value="<?php if(isset($info2['hospitalunit'])){echo $info2['hospitalunit'];}else{echo "";} ?>"  style="width:120px;height:10px;" required>

        </fieldset>
         </div>
    </div>
</div>

</fieldset>
<fieldset>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>Surname
</label>
<input type="text" name="surname" id="surname" value="<?php if(isset($info2['surname'])){echo $info2['surname'];}else{echo "";} ?>" style="width:120px;height:10px;" required>
      </fieldset>
         </div>
        <div style="display: table-cell; width:280px"> 
        <fieldset style="height:20px; border:none">
<label>Other names
</label>
<input type="text" name="othernames" id="othernames" value="<?php if(isset($info2['othernames'])){echo $info2['othernames'];}else{echo "";} ?>" style="width:120px;height:10px;" required>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>HIV+ Date (Confirmed)
</label>
<input type="date" name="hivdate" id="hivdate" value="<?php if(isset($info2['hivdate'])){echo date("Y-m-d", strtotime($info2['hivdate'])); }else{echo "";} ?>" style="width:120px;height:10px;" required> 


        </fieldset>
         </div>
    </div>
</div>
</fieldset>
<fieldset>

<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
DoB
</label>
<input type="date" name="dateofbirth" id="dateofbirth" value="<?php if(isset($info2['dateofbirth'])){echo date("Y-m-d", strtotime($info2['dateofbirth'])); }else{echo "";} ?>" style="width:120px;height:10px;"  required> 
    </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Phone Number
</label>
<input type="text" name="phoneno" id="phoneno" value="<?php if(isset($info2['phoneno'])){echo $info2['phoneno'];}else{echo "";} ?>" style="width:120px;height:10px;" required>

        </fieldset>
         </div>        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Sex
</label>
<select name="basicinfosex" id="basicinfosex" onfocus="emptyElement('status','status3')" style="width:120px;">
<option value="Female">Female</option>
</select>
        </fieldset>
         </div>
    </div>
</div>
<div style="width: 100%; display: table;">
    <div style="display: table-row">
        <div style="width: 280px; display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Facility Name</label>
<input type="text" name="facilityname" id="facilityname" value="<?php if(isset($info2['facilityname'])){echo $info2['facilityname'];}else{echo "";} ?>"  style="width:120px; height:10px;" required>
    </fieldset>
         </div>
        <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Age</label>
<input type="text" name="basicinfoage" id="basicinfoage" value="<?php if(isset($info2['basicinfoage'])){echo $info2['basicinfoage'];}else{echo "";} ?>" size="1"  style="height:10px;" required>
          </fieldset>
         </div>            
              
         <div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
1st ANC Visit date</label>
<input type="date" name="visitdate" id="visitdate" onfocus="emptyElement('status','status3')"  style="width:120px; height:15px;" required>
        </fieldset>
         </div>
    </div>
</div>

</fieldset>

<fieldset>
<h3 style="text-align:center">PMTCT ANC</h3>
<table  class="table table-bordered table-hover">
<tr><td style="width:20px;"></td>
<td><b>PMTCT ID</b></td><td><input type="text" name="pmtct_id" id="pmtct_id" value="<?php if(isset($_GET['pmtctid'])){echo $_GET['pmtctid'];} ?>" style="width:120px;height:10px;" onfocus="emptyElement('status','status3')" required></td>
</tr>

<tr><td style="width:20px;"></td>
<td><b>Patners HIV serostatus</b></td><td>&nbsp;&nbsp;
<select name="partnershivserostatus" id="partnershivserostatus" onfocus="emptyElement('status','status3')" style="width:120px;">
<option value="">Select...</option>
<option value="positive">positive</option>
<option value="negative">negative</option>
<option value="unknown">unknown</option>
</select>
</td>
</tr>

<tr><td style="width:20px;">1</td>
<td><b>Last Menstrual Period at first ANC visit</b></td><td><input type="text" onfocus="emptyElement('status','status3')" name="months_since_last_menstrual_period" id="months_since_last_menstrual_period"  style="width:30px;" required>(months)</td>
</tr>
<tr><td>2</td>
<td><b>Gestational Age at first ANC visit </b></td><td><input type="text" onfocus="emptyElement('status','status3')" name="gestational_age_at_this_vist" id="gestational_age_at_this_vist"  style="width:30px; " required>(in wks.)</td>
</tr>
<tr><td>3</td>
<td><b>Pregnancy History at first ANC visit</b></td>
<td>
	<input type="radio" id="pregnancy_history" name="pregnancy_history" value="Gravidity" onfocus="emptyElement('status','status3')" required>Gravidity <input type="text" onfocus="emptyElement('status','status3')" name="gravidityno" id="gravidityno"  style="width:15px;" required><br/>
  TPALS<br/>
  <div style="margin-left:50px;">
 <!--<input type="radio" id="pregnancy_history_tpals" onfocus="emptyElement('status','status3')" name="pregnancy_history_tpals" value="Term" required>-->Term <input type="text" onfocus="emptyElement('status','status3')" name="noofterms" id="noofterms"  style="width:15px;" required>
 <!--<input type="radio" id="pregnancy_history_tpals" onfocus="emptyElement('status','status3')" name="pregnancy_history_tpals" value="Premature">--> &nbsp;&nbsp; Premature<input type="text" onfocus="emptyElement('status','status3')" name="noofpremature" id="noofpremature"  style="width:15px;" required>
 <!--<input type="radio" id="pregnancy_history_tpals" onfocus="emptyElement('status','status3')" name="pregnancy_history_tpals" value="Abortion" >-->&nbsp;&nbsp;Abortion<input type="text" onfocus="emptyElement('status','status3')" name="noofabortion" id="noofabortion"  style="width:15px;" required>
 <!--<input type="radio" id="pregnancy_history_tpals" onfocus="emptyElement('status','status3')" name="pregnancy_history_tpals" value="Live birth" >-->&nbsp;&nbsp;Live birth<input type="text" onfocus="emptyElement('status','status3')" name="nooflivebirth" id="nooflivebirth"  style="width:15px;" required><br/>
 <!--<input type="radio" id="pregnancy_history_tpals" onfocus="emptyElement('status','status3')" name="pregnancy_history_tpals" value="Surviving">-->Surviving<input type="text" onfocus="emptyElement('status','status3')" name="noofsurviving" id="noofsurviving"  style="width:15px;" required>
 </div>
  </td>
</tr>
<tr><td>4</td>
<td><b>Physical findings (at 1st Visit)</b></td>
<td>
<label>Weight (kg)</label>
<input type="text" name="physical_findings_weight" onfocus="emptyElement('status','status3')" id="physical_findings_weight"  style="width:25px;" required><br />
<label>Height (m)</label>
<input type="text" name="physical_findings_height" onfocus="emptyElement('status','status3')" id="physical_findings_height"  style="width:25px;" required><br />
<label>BMI (kg/m<sup>2</sup>)</label>
<input type="text" name="physical_findings_bmi" onfocus="emptyElement('status','status3'); getbmi();" id="physical_findings_bmi"  style="width:30px;" required><br />
<fieldset>
<legend>Blood Pressure</legend>
<input type="text" name="physical_findings_sbp" onfocus="emptyElement('status','status3')" id="physical_findings_sbp"  style="width:30px;" required> /<input type="text" name="physical_findings_dbp" onfocus="emptyElement('status','status3')" id="physical_findings_dbp"  style="width:30px;" required>(mmHg)<br />
</fieldset>
</td>
</table>
<h3 style="text-align:center">ART ELIGIBILITY</h3>
<table   class="table table-bordered table-hover" border="1" rules="all">
<tr><td>5</td>
<td>WHO staging</td>
<td>
<input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="I" required>I &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="II">II &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="III">III &nbsp;
 <input type="radio" id="who" onfocus="emptyElement('status','status3')" name="who" value="IV">IV &nbsp;
</td>
</tr>
<tr><td rowspan="4">6</td>
<td><br />
Baseline CD4 Count
</td>
<td>
<br />
<input type="text" name="baseline_cd4_count" onfocus="emptyElement('status','status3')" id="baseline_cd4_count"  style="width:25px;" required>Cells/mm &nbsp;
Date
<input type="date" name="baseline_cd4_count_date" onfocus="emptyElement('status','status3')" id="baseline_cd4_count_date"  style="width:120px;" required>
</td>
</tr>
<tr><td><br />6 Months CD4 Count</td>
<td><br />
<input type="text" name="six_months_cd4_count" onfocus="emptyElement('status','status3')" id="six_months_cd4_count"  style="width:25px;" required>Cells/mm &nbsp;
Date
<input type="date" name="six_months_cd4_count_date" onfocus="emptyElement('status','status3')" id="six_months_cd4_count_date"  style="width:120px;" required></td></tr>

<tr><td><br />Most Recent CD4 Count</td>
<td><br />

<input type="text" name="most_recent_cd4_count" onfocus="emptyElement('status','status3')" id="most_recent_cd4_count"  style="width:25px;" required>Cells/mm &nbsp;
Date
<input type="date" name="most_recent_cd4_count_date" onfocus="emptyElement('status','status3')" id="most_recent_cd4_count_date"  style="width:120px;" required></td></tr>

<tr><td><br />Viral Load:
</td>
<td><br />
<input type="radio" id="viral_load_option" name="viral_load_option" onfocus="emptyElement('status','status3')" value="6 months post-ART" required>6 months post-ART &nbsp;
 <input type="radio" id="viral_load_option" name="viral_load_option" onfocus="emptyElement('status','status3')" value="32-36 weeks Gest Age">32-36 weeks Gest Age &nbsp;
 <br />

<input type="text" name="viral_load" id="viral_load" onfocus="emptyElement('status','status3')" style="width:25px;" required>Cells/mm &nbsp;
Date
<input type="date" name="viral_load_date" id="viral_load_date" onfocus="emptyElement('status','status3')" style="width:120px;" required>
</td></tr>

<tr><td style="width:20px;">7</td>
<td>ART Status</td>
<td>
<input type="radio" id="art_status" name="art_status" onfocus="emptyElement('status','status3')" value="Starting ART" required>Starting ART &nbsp;
 <input type="radio" id="art_status" name="art_status" onfocus="emptyElement('status','status3')" value="Continuing ART">Continuing ART &nbsp;
 <br />
 <br />
 <input type="radio" id="art_status_line" onfocus="emptyElement('status','status3')" name="art_status_line" value="first line" required>1<sup>st</sup>LINE &nbsp;
 <input type="radio" id="art_status_line" onfocus="emptyElement('status','status3')" name="art_status_line" value="second line">2<sup>nd</sup>LINE &nbsp;
 <input type="radio" id="art_status_line" onfocus="emptyElement('status','status3')" name="art_status_line" value="Salvage">Salvage
 <br />
 
 REGIMEN/ART COMBINATION 

<input tabindex="disable" type="text" name="art_status_regimen_combination" id="art_status_regimen_combination" onfocus="emptyElement('status','status3')"  style="color:#2BAC12; font-style:italic; width:120px; height:30px;" list="DrugName"  />
<datalist id="DrugName">
    <option value="..." label="Adult 1st Line Regimens:"></option>
    <option value="AZT/3TC/EFV">AZT/3TC/EFV</option>
    <option value="AZT/3TC/NVP">AZT/3TC/NVP</option>
    <option value="TDF/FTC/EFV">TDF/FTC/EFV</option>
    <option value="TDF/FTC/NVP">TDF/FTC/NVP</option>
    <option value="TDF/3TC/EFV">TDF/3TC/EFV</option>
    <option value="TDF/3TC/NVP">TDF/3TC/NVP</option>
    <option value="...">Adult Alternate 1st Line:</option>
    <option value="AZT/3TC/ABC">AZT/3TC/ABC</option>
    <option value="AZT/3TC/TDF">AZT/3TC/TDF</option>
    <option value="...">Adult 2nd Line Regimens:</option>
    <option value="TDF/FTC/LPV/r">TDF/FTC/LPV/r</option>
    <option value="TDF/3TC/LPV/r">TDF/3TC/LPV/r</option>
    <option value="TDF/FTC/ATV/r">TDF/FTC/ATV/r</option>
    <option value="TDF/3TC/ATV/r">TDF/3TC/ATV/r</option>
    <option value="AZT/3TC/LPV/r">AZT/3TC/LPV/r</option>
    <option value="AZT/3TC/ATV/r">AZT/3TC/ATV/r</option>
    <option value="...">Salvage Regimens:</option>
    <option value="DAR">Darunavir</option>
    <option value="RAL">Raltegravir</option>
    <option value="ETR">Etravirine</option>
    <option value="RTV">Ritonavir</option>
    <option value="...">Child 1st/Line Regimens</option>
    <option value="AZT/3TC/EFV">AZT/3TC/EFV</option>
    <option value="AZT/3TC/NVP">AZT/3TC/NVP</option>
    <option value="ABC/3TC/EFV">ABC/3TC/EFV</option>
    <option value="...">Child Alternate 1st Line:</option>
    <option value="ABC/3TC/NVP">ABC/3TC/NVP</option>
    <option value="AZT/3TC/ABC">AZT/3TC/ABC</option>
    <option value="d4T/3TC/NVP">d4T/3TC/NVP</option>
    <option value="...">Child 2nd/line Regimens</option>
    <option value="ABC/3TC/LPV/r">ABC/3TC/LPV/r</option>
    <option value="AZT/3TC/LPV/r">AZT/3TC/LPV/r</option>
    <option value="d4T/3TC/LPV/r">d4T/3TC/LPV/r</option>
    <option value="ddi/3TC/NVP">ddi/3TC/NVP</option>
    <option value="ABC/3TC/ddi">ABC/3TC/ddi</option>
</datalist>
<br/>
Date
<input type="date" name="arv_start_date" onfocus="emptyElement('status','status3')" id="arv_start_date"  style="width:120px;"/>
</td>
</tr>

<tr><td style="width:20px;">8</td>
<td>CTX Prophylaxis</td>
<td>
<label><input type="radio" id="ctx_prophylaxis" onfocus="emptyElement('status','status3')" name="ctx_prophylaxis" value="YES" required>YES</label> &nbsp;
<hr style="margin-top:20px;" />
GA Commenced (in wks) 
<input type="text" name="ctx_prophylaxis_ga_commenced" onfocus="emptyElement('status','status3')" id="ctx_prophylaxis_ga_commenced"  style="width:30px;"/>
&nbsp; Date
<input type="date" name="ctx_prophylaxis_date" onfocus="emptyElement('status','status3')" id="ctx_prophylaxis_date"  style="width:120px;"><br />
<hr />
<label><input type="radio" id="ctx_prophylaxis" onfocus="emptyElement('status','status3')" name="ctx_prophylaxis" value="NO">NO</label> &nbsp;

</td>
</tr>
<tr>
<td style="width:20px;">9</td>
<td>TB Screening</td>
<td><br />
<label><input type="radio" id="tb_screening" onfocus="emptyElement('status','status3')" name="tb_screening" value="YES" required>YES</label> &nbsp;
<label>Date</label>
<input type="date" name="tb_screening_date" onfocus="emptyElement('status','status3')" id="tb_screening_date"  style="width:120px;"/>
<hr />
 <label><input type="radio" id="tb_screening" onfocus="emptyElement('status','status3')" name="tb_screening" value="NO">NO</label> &nbsp;
 
</td>
</tr>
</table>
<span id="status3"></span>
<button type="button" id="submitbtn" name="submitbtn" style="float: right !important; cursor:pointer;" onclick="window.print()" class="btn btn-success">PRINT FORM</button>
</fieldset>
 
</form>
<p style="margin-bottom:150px;"></p>
</div>

</body>
</html>