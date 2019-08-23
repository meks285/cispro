<?php
session_start();
$con=mysql_connect("localhost","root","");

if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('asmart',$con) or die ("could not open db".mysql_error());

$facilityid = $_GET['facilityid'];
echo $facilityid;

	$query = "select username, password, facilityid, facilityname,lga,state from phcs where facilityid='$facilityid'";
	$result = mysql_query ($query);
    $info = mysql_fetch_assoc($result);
	
echo mysql_error();
session_write_close();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
<title>APIN!Smart</title>
<link rel="stylesheet" href="jquery.mobile-1.4.2.min.css" type="text/css" />
<link rel="stylesheet" href="jquery.mobile.theme-1.4.2.min.css" />
<script src="jquery-2.1.0.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.4.2.min.js" type="text/javascript"></script>
<script src="jquery.mobile.theme-1.4.2.min.css" type="text/css"></script>
</head>
<body>
<!-- This is the First Page -->
<section id="firstpage" data-role="page" data-fullscreen="true" data-theme="a">
<header data-role="header" data-position="fixed" data-theme="b">
<h1 style="color:#09F">APIN!Smart</h1>
<nav data-role="navbar">
<ul>
<li><a href="#" data-icon="plus" ></a></li>
<li><a href="#" data-icon="minus"></a></li>
<li><a href="#" data-icon="check"></a></li>
<li><a href="#" data-icon="grid"></a></li>
</ul>
</nav>
</header>
<div data-role="content" align="left">
<form id="formId">
	<fieldset data-role="controlgroup" data-type="horizontal">
    <select name="rstate" id="rstate" data-inline="true">
	<option value="<?php echo $info['state']?>"><?php echo $info['state']?></option> 
    </select>

    <select name="rlga" id="rlga" data-inline="true">
	<option value="<?php echo $info['lga']?>"><?php echo $info['lga']?></option> 
	</select>

<select name="rfacility" id="rfacility" data-inline="true">
<option value="<?php echo $info['facilityname']?>"><?php echo $info['facilityname']?></option> 
</select>
    </fieldset>
<div data-role="datacontrol" data-type="vertical">
	<label for="sender">Sender:</label>
	<input type="text" name="sender" id="sender" />
    </div>
	<fieldset data-role="controlgroup" data-type="horizontal">
    <select name="ryear" id="ryear" data-inline="true">
    <option>Year</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    </select>
    <select name="rmonth" id="rmonth" data-inline="true">
    <option>Month</option>
    <option value="January">January</option>
    <option value="Feruary">February</option>
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
    </select>
    </fieldset>
	<fieldset data-role="datacontrol" data-type="vertical" >
    <label for="ind1">Individuals HIV CTR</label>
    <input type="number" name="ind1" id="ind1" required="required" data-clear-btn="true"/>
    <label for="ind2">Individuals tested  HIV+</label>
    <input type="number" name="ind2" id="ind2" data-clear-btn="true"/>
    <label for="ind3">Individuals who received SRH/HIV services</label>
    <input type="number" name="ind3" id="ind3"  data-clear-btn="true"/>
    <label for="ind4">New ANC clients</label>
    <input type="number" name="ind4" id="ind4"  data-clear-btn="true"/>
    <label for="ind5">Pregnant women HIV CTR (ANC)</label>
    <input type="number" name="ind5" id="ind5"  data-clear-btn="true"/>
    <label for="ind6">Pregnant women HIV CTR (L&D) </label>
    <input type="number" name="ind6" id="ind6"  data-clear-btn="true"/>
    <label for="ind7">Women HIV CTR (Post-Partum)</label>
    <input type="number" name="ind7" id="ind7"  data-clear-btn="true"/>
    <label for="ind8">Pregnant women tested + (ANC)</label>
    <input type="number" name="ind8" id="ind8"  data-clear-btn="true"/>
    <label for="ind9">Pregnant women tested + (L&D) </label>
    <input type="number" name="ind9" id="ind9"  data-clear-btn="true"/>
    <label for="ind10">Women tested + (Post-Partum)</label>
    <input type="number" name="ind10" id="ind10"  data-clear-btn="true"/>
    <label for="ind11">Pregnant women received triple ARVs</label>
    <input type="number" name="ind11" id="ind11"  data-clear-btn="true"/>
    <label for="ind12">Infants born to HIV+ mothers</label>
    <input type="number" name="ind12" id="ind12"  data-clear-btn="true"/>
    <label for="ind13">Exposed infants who received DNA PCR</label>
    <input type="number" name="ind13" id="ind13"  data-clear-btn="true"/>
    <label for="ind14">Exposed infants who received dNVP+6weeks</label>
    <input type="number" name="ind14" id="ind14"  data-clear-btn="true"/>
    <label for="ind15">Exposed infants DNA PCR +</label>
    <input type="number" name="ind15" id="ind15"  data-clear-btn="true" />
    </fieldset>
<div data-role="controlgroup" data-type="horizontal" data-position="fixed">
<input type="button" value="Send" name="btn1" id="btn1" data-inline="true" onclick="save()"/>
<input type="reset" value="Clear" data-inline="true"/>
<input type="hidden" name="facilityid" id="facilityid" value="<?php echo $info['facilityid']?>"  data-clear-btn="true" />
</div>
</form>
<script type="text/javascript">
    function save(){
        var query = $('#formId').serialize();
        var url = 'insertindicators.php';
        $.post(url, query, function (response) {
         alert ("Indicators Submitted!");
        });
    }
</script>

</div>
<footer style="text-align:center" data-role="footer" class="ui-bar" data-position="fixed" data-theme="b">
APIN ©2014
</footer>
</section>
</body>
</html>
