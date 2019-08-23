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

<div>
<h1 style="font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #FFFFFF;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px 355681;    border-radius: 0 10px 0 10px;    background: #355681;">PMTCT EMR - EXPOSED INFANT &nbsp;&nbsp;&nbsp; </h1>
</div>
<br />
<br />
<br />
<a href="../../forms/pmtctforms.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px; color:blue"><<< BACK</a>
<br />
<div id="stylized" class="myform">

<form id="form" name="form" onSubmit="return false;">
<h3 style="text-align:center">BASIC INFORMATION</h3>
<span id="status"></span>
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
<input type="text" name="basicinfosex" id="basicinfosex" value="<?php if(isset($info2['basicinfosex'])){echo $info2['basicinfosex'];}else{echo "";} ?>" style="width:45px;height:10px;" required>

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
         <!--<div style="display: table-cell;"> 
        <fieldset style="height:20px; border:none">
<label>
Visit date</label>
<input type="date" name="visitdate" id="visitdate" onfocus="emptyElement('status','status3')"  style="width:120px; height:15px;" required>
        </fieldset>
         </div>-->
    </div>
</div>

</fieldset>
<fieldset>
<h3 style="text-align:center">EXPOSED INFANT</h3>
<table class="table table-bordered table-hover">
<tr><td style="width:20px;"></td>
<td><b>PMTCT ID (Not required for Z-babies)</b></td><td><input type="text" name="pmtct_id" id="pmtct_id" value="<?php if(isset($_GET['pmtctid'])){echo $_GET['pmtctid'];} ?>" style="width:120px;height:10px;" onfocus="emptyElement('status','status3')" required></td>
</tr>
<tr><td style="width:20px;">1</td>
<td><b>Number of Deliveries</b></td>
<td>
<input type="radio" name="noofdeliveries" onclick="noOfDeliveries();" onfocus="emptyElement('status','status3')" value="1">1 &nbsp;
 <input type="radio" name="noofdeliveries" onclick="noOfDeliveries();" onfocus="emptyElement('status','status3')" value="2">2 &nbsp;
 <input type="radio" name="noofdeliveries" onclick="noOfDeliveries();" onfocus="emptyElement('status','status3')" value="3">3 &nbsp;
 <input type="radio" name="noofdeliveries" onclick="noOfDeliveries();" onfocus="emptyElement('status','status3')" value="4">4 &nbsp;
 <input type="radio" name="noofdeliveries" onclick="noOfDeliveries();" onfocus="emptyElement('status','status3')" value="5">5 &nbsp;
 <input type="radio" name="noofdeliveries" onclick="noOfDeliveries();" onfocus="emptyElement('status','status3')" value="6">6 
</td>
</tr>
<tr><td style="width:20px;">2</td>
<td><b>Infant's EID ID</b></td>
<td><input type="text" name="infant_eid_id" id="infant_eid_id" onfocus="emptyElement('status','status3')" style="width:120px;"/> </td>
</tr>
<!--<tr><td style="width:20px;">2</td>
<td><b>Visit Date</b></td>
<td><b>Date</b>
<input type="date" name="visit_date" id="visit_date" onfocus="emptyElement('status','status3')" style="width:120px;"/>
 </td>
</tr>-->
<tr><td style="width:20px;">3</td>
<td><b>Infant’s Name</b></td>
<td>Surname<input type="text" name="infant_name" id="infant_name" onfocus="emptyElement('status','status3')" style="width:120px;"/>
&nbsp; Othernames<input type="text" name="infant_oname" id="infant_oname" onfocus="emptyElement('status','status3')" style="width:120px;"/>
 </td>
</tr>
<tr><td style="width:20px;">4</td>
<td><b>Infant’s date of birth</b></td>
<td><b>Date</b><input type="date" name="infant_date_of_birth" id="infant_date_of_birth" onfocus="emptyElement('status','status3')" style="width:120px;"/> </td>
</tr>

<tr><td style="width:20px;">5</td>
<td><b>Sex</b></td>
<td>
<input type="radio" name="sex" onfocus="emptyElement('status','status3')" value="Male">Male &nbsp;&nbsp;
 <input type="radio" name="sex" onfocus="emptyElement('status','status3')" value="Female">Female
 </td>
</tr>

<tr><td style="width:20px;">6</td>
<td><b>Age of infant at visit</b></td>
<td>
<input type="text" name="age_of_infant_at_visit" id="age_of_infant_at_visit" onfocus="emptyElement('status','status3')" style="width:30px;"/>
<input type="radio" name="age_of_infant_weeks_month" onfocus="emptyElement('status','status3')" value="Weeks">Weeks &nbsp;
 <input type="radio" name="age_of_infant_weeks_month" onfocus="emptyElement('status','status3')" value="Months">Months
 </td>
</tr>



<tr><td style="width:20px;">7</td>
<td style="width:200px;"><b>Delivery</b></td>
<td>
<div>Type of delivery</div>
<input type="radio" onfocus="emptyElement('status','status3')" name="delivery_mode" value="Spontaneous Vaginal">Spontaneous Vaginal <br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_mode" value="Elective Caesarean">Elective C-section<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_mode" value="Emergency Caesarean">Emergency C-section<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_mode" value="Assisted Vaginal">Assisted Vaginal &nbsp;
 type<input type="text" name="assited_vagina_type" id="assited_vagina_type" style="width:120px;"/>
 <br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_mode" value="other">Other &nbsp;
 specify<input type="text" name="delivery_mode_specify" id="delivery_mode_specify" style="width:120px;"/>
 
 <div>Delivery description</div>
  ROM
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_rom" value="Less than 4 hrs">Less than 4 hrs &nbsp; &nbsp;
  
  Bleeding before delivery
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_bleeding" value="NO">NO 
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_bleeding" value="YES">YES 
 &nbsp;&nbsp;
 Vaginal Tear
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_vaginal_tear" value="NO">NO 
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_vaginal_tear" value="YES">YES 
 <br/>
  Episiotoy
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_episiotomy" value="NO">NO 
 <input type="radio" onfocus="emptyElement('status','status3')" name="delivery_episiotomy" value="YES">YES 
 
 </td>
</tr>

<tr><td style="width:20px;">8</td>
<td style="width:200px;"><b>Z-BABIES only</b></td>
<td>

 <div>ARV history:</div>
<input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="None">None<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="AZT+NVP">AZT+NVP<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="NVP only">NVP only
 <input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="HAART">HAART<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="AZT/3TC+NVP">AZT/3TC+NVP<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="Unknown">Unknown<br />
 <input type="radio" onfocus="emptyElement('status','status3')" name="zbabies_arv_history" value="other">Other <input type="text" onfocus="emptyElement('status','status3')" name="zbabies_arv_history_specify" id="zbabies_arv_history_specify"  style="width:120px;"/>specify 
 </td>
</tr>
<tr><td style="width:20px;">9</td>
<td style="width:200px;"><b>CTX Prophylaxis (>6 weeks)</b></td>
<td>
<input type="radio" onfocus="emptyElement('status','status3')" name="ctx_prophylasis" value="YES">YES &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="ctx_prophylasis" value="NO">NO 
</td>

</table>



<!--//////////////////////////////////////////// NEW FIELDS ////////////////////////////////////  -->

<h3 style="text-align:center">INFANT STATUS AT BIRTH</h3>
<table class="table table-bordered table-hover">
<tr><td style="width:20px;">10</td>
<td><b>Sex</b></td>
<td>
 <input type="radio" name="infant_sex" onfocus="emptyElement('status','status3')" value="Male">Male
 <input type="radio" name="infant_sex" onfocus="emptyElement('status','status3')" value="Female">Female</td>
</tr>

<tr><td style="width:20px;">11</td>
<td><b>Status at birth</b></td>
<td>
 <input type="radio" name="status_of_birth" onfocus="emptyElement('status','status3')" value="Alive">Alive
 <input type="radio" name="status_of_birth" onfocus="emptyElement('status','status3')" value="Stillbirth">Stillbirth
 <input type="radio" name="status_of_birth" onfocus="emptyElement('status','status3')" value="Neonatal death">Neonatal death
 <input type="radio" name="status_of_birth" onfocus="emptyElement('status','status3')" value="Other">Other
 <br />
 <div>
 Weight<input type="text" name="status_of_birth_alive_weight" onfocus="emptyElement('status','status3')" id="status_of_birth_alive_weight"  style="width:25px;"/>kg &nbsp;
  Lenght<input type="text" name="status_of_birth_alive_lenght" onfocus="emptyElement('status','status3')" id="status_of_birth_alive_lenght"  style="width:25px;"/>cm 
 &nbsp;
  Head Circumference
 <input type="text" name="status_of_birth_alive_head_circumf" onfocus="emptyElement('status','status3')" id="status_of_birth_alive_head_circumf"  style="width:25px;"/> &nbsp;
  Gest. Age at delivery
 <input type="text" name="status_of_birth_alive_gest_age" onfocus="emptyElement('status','status3')" id="status_of_birth_alive_gest_age"  style="width:25px;"/>Wks <br /> 
  APGAR score@ 5mins
 <input type="text" name="status_of_birth_alive_apgar" onfocus="emptyElement('status','status3')" id="status_of_birth_alive_apgar"  style="width:25px;"/> 
 
 </div>
 </td>
</tr>

<tr><td style="width:20px;">12</td>
<td><b>Prophylaxis given to infant</b></td>
<td>
<div>Syrup NVP</div>
<input type="radio" name="syrup_nvp" onfocus="emptyElement('status','status3')" value="YES">YES &nbsp;&nbsp;
 <input type="radio" name="syrup_nvp" onfocus="emptyElement('status','status3')" value="NO">NO &nbsp;&nbsp;
  <input type="radio" name="syrup_nvp" onfocus="emptyElement('status','status3')" value="N/A">N/A (Note: check only for still birth)
 <!--<div>Syrup ZDV</div>
 <input type="radio" name="syrup_zdv" onfocus="emptyElement('status','status3')" value="YES">YES &nbsp;&nbsp;
 <input type="radio" name="syrup_zdv" onfocus="emptyElement('status','status3')" value="NO">NO-->
</td>
</tr>

<tr><td style="width:20px;">13</td>
<td><b>Feeding Method Chosen</b></td>
<td>
<input type="radio" name="feeding_method_chosen" onfocus="emptyElement('status','status3')" value="Exclusive BF">Exclusive BF &nbsp;&nbsp;
 <input type="radio" name="feeding_method_chosen" onfocus="emptyElement('status','status3')" value="Exclusive BMS">Exclusive BMS
 <input type="radio" name="feeding_method_chosen" onfocus="emptyElement('status','status3')" value="Mixed BMS and BF">Mixed BMS & BF &nbsp;&nbsp;<br />
 <div><input type="radio" name="feeding_method_chosen" onfocus="emptyElement('status','status3')" value="other">Other
 <input type="text" name="feeding_method_chosen_specify" onfocus="emptyElement('status','status3')" id="feeding_method_chosen_specify" style="width:120px;"/>(specify)</div>
</td>
</tr>

</table>

<h3 style="text-align:center">EID STATUS</h3>
<table class="table table-bordered table-hover">
<tr><td style="width:20px;">14</td>
<td><b>6 weeks EID  ordered</b></td>
<td>
<input type="radio" onclick="checkeidz();" onfocus="emptyElement('status','status3')" name="six_week_eid_done" value="YES">YES &nbsp; &nbsp;
 <input type="radio" onclick="checkeidz();" onfocus="emptyElement('status','status3')" name="six_week_eid_done" value="NO">NO &nbsp; &nbsp;&nbsp; 
 Date<input type="date" onclick="checkeidz();" onfocus="emptyElement('status','status3')" name="six_week_eid_done_date" id="six_week_eid_done_date"  style="width:120px;"/> &nbsp;
 
 <input type="radio" onclick="checkeidz();" onfocus="emptyElement('status','status3')" name="months_eid_ordered" value="0-2">0-2 &nbsp; &nbsp;
 <input type="radio" onclick="checkeidz();" onfocus="emptyElement('status','status3')" name="months_eid_ordered" value="3-12">3-12 &nbsp; &nbsp;&nbsp; months 
 
  <button name="" onclick="resetcheckeidsix();">Reset</button>
</td>
</tr>

<tr><td style="width:20px;">15</td>
<td><b>EID ordered for Z-babies</b></td>
<td>
<input type="radio" onclick="checkeidsix();" onfocus="emptyElement('status','status3')" name="eid_zbabies" value="YES">YES &nbsp; &nbsp;
 <input type="radio" onclick="checkeidsix();" onfocus="emptyElement('status','status3')" name="eid_zbabies" value="NO">NO &nbsp; &nbsp;&nbsp; 
 Date<input type="date" onclick="checkeidsix();" onfocus="emptyElement('status','status3')" name="eid_zbabies_date" id="eid_zbabies_date"  style="width:120px;"/> &nbsp; <button name="" onclick="resetcheckeidsix();">Reset</button>
</td>
</tr>

<tr><td style="width:20px;">16</td>
<td><b>Sample Collected</b></td>
<td>
<input type="radio" onfocus="emptyElement('status','status3')" name="sample_collected" value="YES">YES &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="sample_collected" value="NO">NO &nbsp; &nbsp;&nbsp; 
 Date<input type="date" onfocus="emptyElement('status','status3')" name="sample_collected_date" id="sample_collected_date"  style="width:120px;"/>
</td>
</tr>
<tr><td style="width:20px;">17</td>
<td><b>Sample Sent</b></td>
<td>
<input type="radio" onfocus="emptyElement('status','status3')" name="sample_sent" value="YES">YES &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="sample_sent" value="NO">NO &nbsp; &nbsp;&nbsp; 
 Date<input type="date" onfocus="emptyElement('status','status3')" name="sample_sent_date" id="sample_sent_date"  style="width:120px;"/>
</td>
</tr>
<tr><td style="width:20px;">18</td>
<td><b>EID Result</b></td>
<td>
<input type="radio" onfocus="emptyElement('status','status3')" name="eid_result" value="Positive">Positive &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="eid_result" value="Negative">Negative &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="eid_result" value="Indeterminate">Indeterminate &nbsp; &nbsp; 
 Date<input type="date" onfocus="emptyElement('status','status3')" name="eid_result_date" id="eid_result_date"  style="width:120px;"/>
</td>
</tr>

<tr><td style="width:20px;">19</td>
<td><b>18 months Rapid test ordered</b></td>
<td>
<input type="radio" onfocus="emptyElement('status','status3')" name="eigthteen_rapidtest_done" value="YES">YES &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="eigthteen_rapidtest_done" value="NO">NO &nbsp; &nbsp;&nbsp; 
 Date<input type="date" onfocus="emptyElement('status','status3')" name="eigthteen_rapidtest_done_date" id="eigthteen_rapidtest_done_date"  style="width:120px;"/>
</td>
</tr>
<tr><td style="width:20px;">20</td>
<td><b>Result</b></td>
<td>
<input type="radio" onfocus="emptyElement('status','status3')" name="result" value="Positive">Positive &nbsp; &nbsp;
 <input type="radio" onfocus="emptyElement('status','status3')" name="result" value="Negative">Negative 
</td>
</tr>

<tr><td style="width:20px;">21</td>
<td><b>Age at 1st DNA PCR </b></td>
<td>
Age<input type="text" name="age_first_dna_pcr" onfocus="emptyElement('status','status3')" id="age_first_dna_pcr"  style="width:25px;" required>
</td>
</tr>

<tr><td style="width:20px;">22</td>
<td><b>EI Exit/Continum</b></td>
<td>
<div>Discharged if negative:</div>
<input type="radio" onfocus="emptyElement('status','status3')" name="ei_outcome_discharged" value="YES">YES &nbsp; &nbsp;
  Date<input type="date" onfocus="emptyElement('status','status3')" name="ei_outcome_discharged_date" id="ei_outcome_discharged_date"  style="width:120px;"/>&nbsp; &nbsp;&nbsp;
   
 
 <div>Linked to Care within the same facility:</div>
<input type="radio" onfocus="emptyElement('status','status3')" name="ei_outcome_linkedtocare" value="YES">YES &nbsp; &nbsp;
  Ped PEP ID<input type="text" name="ei_outcome_linkedtocare_ped_pepid" id="ei_outcome_linkedtocare_ped_pepid"  style="width:120px;"/>&nbsp; &nbsp;&nbsp;
  
 
 <div>Linked to care in another facility:</div>
<input type="radio" onfocus="emptyElement('status','status3')" name="ei_outcome_referred" value="YES">YES &nbsp; &nbsp;
  Facility Name<input type="text" onfocus="emptyElement('status','status3')" name="ei_outcome_referred_facilityname" id="ei_outcome_referred_facilityname"  style="width:220px;"/>&nbsp; 
   Ped PEP ID<input type="text" name="linkedtocare_ped_pepid_fcaility" id="linkedtocare_ped_pepid_fcaility"  style="width:80px;"/>
   <div>Loss to follow-up:</div>
<input type="radio" onfocus="emptyElement('status','status3')" name="loss_followup" value="YES">YES
</td>
</tr>
<tr><td style="width:20px;">23</td>
<td><b>Other Comments (tracking, referral etc)</b></td>
<td><textarea onfocus="emptyElement('status','status3')" name="other_comments" id="other_comments" cols="50" rows="5"></textarea></td>
</tr>

</table>

<span id="status3"></span>
<input type="hidden" name="multireport" id="multireport" value="1" />
<button type="button" id="submitbtn" name="submitbtn" style="float: right !important; cursor:pointer;" class="btn btn-success" onclick="window.print()" class="btn btn-success">PRINT FORM</button>
</fieldset>

</form>
<p style="margin-bottom:150px;"></p>
</div>

</body>
</html>