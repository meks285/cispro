<?php
session_start();

$con=mysql_connect("localhost","root","","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


class MyClass{
    public function GetUserInformation(){
$query = "SELECT pepid, uniqueid,hospitalid,surname,othernames,age,sex,lga,facilityname,ancno,dob,maritalstatus,educationallevel,jobstatus,address,
wardvillage,town,addrlga,phoneno,nokname,nokaddr,nokwardvillage,noktown,nokstate,nokrelationship,nokphoneno,enroldate
FROM patient WHERE pepid = '$_SESSION[pepid]'";
        $result = mysql_query($query);
        $info = mysql_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();
?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<link rel="shortcut icon" href="images/favicon.png" type="image/png">
<script>
function book_suggestion()
{
var book = document.getElementById("book").value;
var xhr;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}
var data = "book_name=" + book;
     xhr.open("POST", "book-suggestion.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
	 xhr.onreadystatechange = display_data;
	function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
       //alert(xhr.responseText);	   
	  document.getElementById("suggestion").innerHTML = xhr.responseText;
      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}

function book_suggestion1()
{
var book1 = document.getElementById("book1").value;
var xhr1;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr1 = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr1 = new ActiveXObject("Microsoft.XMLHTTP");
}
var data1 = "book_name1=" + book1;
     xhr1.open("POST", "book-suggestion.php", true); 
     xhr1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr1.send(data1);
	 xhr1.onreadystatechange = display_data1;
	function display_data1() {
	 if (xhr1.readyState == 4) {
      if (xhr1.status == 200) {
       //alert(xhr.responseText);	   
	  document.getElementById("suggestions").innerHTML = xhr.responseText;
      } else {
        alert('There was a problem with the request.');
      }
     }
	}
}

</script>
<style type="text/css">
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:11px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
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
   width: 165px;
   height: 100px;
   position: fixed;
   left: 0px;
   top: 300px;
   border: 1px solid black;
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
#stylized .radio-toolbar input[type="radio"] {
font-weight:bold;
text-align:right;
float:left;
padding-right:0px;
width:20px;
}
#stylized .radio-toolbar label {
display:block;
font-weight:bold;
text-align:right;
float:left;
padding-right:0px;
position:absolute;
margin:1px 0 0px 10px;
}
#stylized .radio-toolbar input{
float:left;
padding-right:50px;
margin:1px 0 0px 10px;
position:inherit;
}
</style>
<meta charset="utf-8"> 
<title>APIN DB - Pharmacy Order</title> 
<meta name="description" content="HTML code for user interface for Ajax, PHP and MySQL demo."> 
<link href="../includes/bootstrap.css" rel="stylesheet">

</head>
<h1 align="center" style="background-color:green">Adult Pharmacy Order Form</h1>
<body>
<a href="./index.php" >Logout</a> <br>
<a href="./Welcome.php" >Welcome</a>

<div id="stylized" class="myform">

<form class="well-home span6 form-horizontal" name="ajax-demo" id="ajax-demo" method="POST" action="insertpharm.php">
<h1>Pharmacy Form</h1>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Patient Identification Numbers</legend>
<label>PEPID
<span class="small">PEPFAR ID</span>
</label>
<input type="text" name="pepid" id="pepid" value="<?php echo $info['pepid']?>" />

<label>Unique Number
<span class="small">Unique ID</span>
</label>
<input type="text" name="uniqueid" id="uniqueid" disabled="disabled" value="<?php echo $info['uniqueid']?>" />

<label>Surname
<span class="small">Surname</span>
</label>
<input type="text" name="surname" id="surname" disabled="disabled" value="<?php echo $info['surname']?>" />

<label>Other names
<span class="small">Other names</span>
</label>
<input type="text" name="othernames" id="othernames" disabled="disabled" value="<?php echo $info['othernames']?>" />

<label>Age
<span class="small">Years</span>
</label>
<input type="text" name="age" id="age" disabled="disabled" value="<?php echo $info['age']?>" />

<label>Visit Date
<span class="small">Date of Visit</span>
</label>
<input type="date" name="visitdate" id="visitdate" required/>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Type of Patient Order</legend>
<fieldset>
<label></label>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="patienttype" value="ART" />ART</td>
</tr>
<tr>
<td><input type="radio" name="patienttype" value="Non-ART" />Non-ART</td>
</tr>
<tr>
<td><input type="radio" name="patienttype" value="Occup PEP" />Occup PEP</td>
</tr>
<tr>
<td><input type="radio" name="patienttype" value="Non-Occup PEP" />Non-Occup PEP</td>
</tr>
<tr>
<td><input type="radio" name="patienttype" value="PMTCT" />PMTCT</td>
</tr>
</table>
</div>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Initial or Followup Visit</legend>
<label></label>
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="visittype" value="initial" />Initial</td>
</tr>
<tr>
<td><input type="radio" name="visittype" value="Follow-Up" />Followup</td>
</tr>
</table>
</div>
</fieldset>
</fieldset>

<fieldset>
<legend style="font-weight:bold; font-size:11px">Other Details</legend>
<fieldset>
<label>Pregnant</label><br >
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="pregyn" value="Yes" />Yes</td>
</tr>
<tr>
<td><input type="radio" name="pregyn" value="No" />No</td>
</tr>
</table>
</div>
<label>Refill/Fastrack</label><br >
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="refillyn" value="Yes" />Yes</td>
</tr>
<tr>
<td><input type="radio" name="refillyn" value="No" />No</td>
</tr>
</table>
</div>
<label>Substitution/Switch</label><br >
<div class="radio-toolbar">
<table>
<tr>
<td><input type="radio" name="subswitch" value="Substitution" />Substitution</td>
</tr>
<tr>
<td><input type="radio" name="subswitch" value="Switch" />Switch</td>
</tr>
</table>
</div>
</fieldset>
</fieldset>



<fieldset>
<legend style="font-weight:bold; font-size:11px">ARV: Verify & Enter Drug Code</legend>
<div class="control-group">
              <label class="control-label" for="book">verify drug code</label>
              <div class="controls">
                <input type="text" id="book" onKeyUp="book_suggestion()">
				<div id="suggestion"></div>
			 </div>
 </div>
 
  <label>
</label>
<span class="small">Enter Code - 1</span>
<input type="text" name="drugcode1" id="drugcode1" required />
<input type="text" name="drugcode1" id="drugcode1" required />
<input type="text" name="drugcode1" id="drugcode1" required />
<input type="text" name="drugcode1" id="drugcode1" required />

  <label>
</label>
<span class="small">Enter Code - 2</span>
<input type="text" name="drugcode2" id="drugcode2" />
<input type="text" name="drugcode1" id="drugcode1" required />
<input type="text" name="drugcode1" id="drugcode1" required />
<input type="text" name="drugcode1" id="drugcode1" required />

  <label>
</label>
<span class="small">Enter Code - 3</span>
<input type="text" name="drugcode3" id="drugcode3" />
<input type="text" name="drugcode1" id="drugcode1" required />
<input type="text" name="drugcode1" id="drugcode1" required />
<input type="text" name="drugcode1" id="drugcode1" required />


 </fieldset>
 <br>
 <fieldset>
 <label>Dispense Date
</label>
<input type="date" name="dispensedate" id="dispensedate" required />
</fieldset>


<fieldset>
<legend style="font-weight:bold; font-size:11px">Drugs for OI Prophylaxis</legend>
<select name="oidrug">
	<option value="">Click to select:DRUG NAME</option> 
    <option value="CTX">CTX</option> 
    <option value="Fluconazole">Fluconazole</option>
    <option value="Dapsone">Dapsone</option>
    <option value="INH/B6">INH/B6</option>
</select>

<select name="oiqty">
	<option value="">STRENGTH</option> 
    <option value="100mg">100mg</option> 
    <option value="200mg">200mg</option>
    <option value="300mg">300mg</option>
    <option value="480mg">480mg</option>
    <option value="960mg">960mg</option>
</select>

<select name="oiduration">
	<option value="">DURATION IN MONTHS</option> 
    <option value="1 month">1 month</option> 
    <option value="2 months">2 months</option> 
    <option value="3 months">3 months</option>
    <option value="4 months">4 months</option>
</select>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Anti-TB Drugs</legend>
<select name="tbdrug">
	<option value="">Click to select:DRUG NAME</option> 
    <option value="INH">INH</option> 
    <option value="Rifampicin">Rifampicin</option>
    <option value="Ethambutol">Ethambutol</option>
    <option value="PZI">PZI</option>
    <option value="Streptomycin Injection">Streptomycin Injection</option>
</select>

<select name="tbqty">
	<option value="">STRENGTH</option> 
    <option value="300mg">300mg</option> 
    <option value="400mg">400mg</option>
    <option value="600mg">600mg</option>
    <option value="1g">1g</option>
</select>

<select name="tbduration">
	<option value="">DURATION IN MONTHS</option> 
    <option value="1 month">1 month</option> 
    <option value="2 months">2 months</option> 
    <option value="3 months">3 months</option>
    <option value="4 months">4 months</option>
</select>
</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Drugs for other OIs or non-HIV related conditions </legend>
<label>Drug Name
</label>
<input type="text" name="otherdrugs" id="otherdrugs" />
<label>Quantity
</label>
<input type="text" name="otherquantity" id="otherquantity" />
<label>Duration
</label>
<input type="text" name="otherduration" id="otherduration" />

</fieldset>
</fieldset>
<fieldset>
<label>Ordered By
<span class="small">(Clinician)</span>
</label>
<input type="text" name="orderedby" id="orderedby" />
<label>Order Date
<span class="small">Date</span>
</label>
<input type="date" name="orderdate" id="orderdate" />
<label>Dispensed By
<span class="small">(Pharmacist)</span>
</label>
<input type="text" name="dispensedby" id="dispensedby" />
<label>Dispense Date
<span class="small">Date</span>
</label>
<input type="date" name="pharmdispensedate" id="pharmdispensedate" />
<label>Picked Up By
</label>
<input type="text" name="pickedupby" id="pickedupby" />
<label>Pickup Date
<span class="small">Date</span>
</label>
<input type="date" name="pickupdate" id="pickupdate" />

<label>Counseled By
</label>
<input type="text" name="counseledby" id="counseledby" />

<label>Counsel Date
<span class="small">Date</span>
</label>
<input type="date" name="counseldate" id="counseldate" />

</fieldset>
<fieldset>
<legend style="font-weight:bold; font-size:11px">Feedback from the Pharmacist in case of any observed medication error:</legend>
<label>Drug
<span class="small">Name of Drug(s)</span>
</label>
<input type="text" name="errordrugname" id="errordrugname" />

<label>Error
<span class="small">Nature of Error(s)</span>
</label>
<input type="text" name="errornature" id="errornature" />

<label>Consequence
<span class="small">Consequence of Error(s)</span>
</label>
<input type="text" name="errorconsequence" id="errorconsequence" />

<label>Report Date
<span class="small">Error report date</span>
</label>
<input type="date" name="errorrepdate" id="errorrepdate" />

<button type="submit">CONTINUE</button>
<div class="spacer"></div>
</fieldset>

 </div>
 
</form>

</body>
</html>

