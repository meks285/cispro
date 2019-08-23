<?php

$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


class MyClass{
    public function GetUserInformation(){
	$table = 'pmtctregistry';
if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '".$table."'"))==1){

	} 
    
	else {
		
		$results = mysql_query("CREATE TABLE IF NOT EXISTS `pmtctregistry` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `hospid` varchar(50) DEFAULT NULL,
  `regimen` varchar(50) DEFAULT NULL,
  `hivdate` date DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` varchar(4) DEFAULT NULL,
  `pmtctarvdate` date DEFAULT NULL,
  `pmtctid` varchar(30) DEFAULT NULL,
  `g_age` varchar(4) DEFAULT NULL,
  `eid` varchar(30) DEFAULT NULL,
  `pcr6wks` varchar(15) DEFAULT NULL,
  `pcr12mths` varchar(15) DEFAULT NULL,
  `pcr18mths` varchar(15) DEFAULT NULL,
  `pcr6wksdate` date DEFAULT NULL,
  `pcr12mthsdate` date DEFAULT NULL,
  `pcr18mthsdate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;");

$info = '';
	}
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>CiS Pro - PMTCT Registry</title>
	<link rel="stylesheet" type="text/css" href="./easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="./easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="./easyui/demo/demo.css">
	<script type="text/javascript" src="./jquery-1.6.min.js"></script>
	<script type="text/javascript" src="./easyui/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="./easyui/jquery.edatagrid.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#dg').edatagrid({
				url: 'get_users.php',
				saveUrl: 'save_user.php',
				updateUrl: 'update_user.php',
				destroyUrl: 'destroy_user.php'
			});
		});
	</script>

</head>
<body>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMTCT Registry &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
<a style="color:blue; font-weight:bold;" href="../main.php?username=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px">[MAIN MENU]</a><br />
	<div class="demo-info" style="margin-bottom:10px">
		<div class="demo-tip icon-tip">&nbsp;</div>
		<div style="color:red">Double click the row to begin editing.</div>
	</div>
	
	<table id="dg" title="PMTCT Registry List" style="width:1550px;height:250px"
			toolbar="#toolbar" pagination="true" idField="id"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="lastname" width="50" editor="{type:'validatebox',options:{required:true}}">Surname</th>
				<th field="firstname" width="50" editor="{type:'validatebox',options:{required:true}}">Other Names</th>
				<th field="hospid" width="50" editor="{type:'validatebox',options:{required:true}}">Hospital ID</th>
				<th field="dob" width="50" editor="{type:'datebox',options:{required:false}}">DoB</th>
				<th field="age" width="50" editor="text">Age</th>
				<th field="hivdate" width="50" editor="{type:'datebox',options:{required:false}}">HIV Test Date</th>
				<th field="g_age" width="50" editor="text">GA @ Booking</th>
				<th field="pmtctarvdate" width="60" editor="{type:'datebox',options:{required:false}}">PMTCT ARV Start Date</th>
				<th field="regimen" width="50" editor="{type:'combobox',options:{valueField:'statusId',textField:'statusName',data: [{statusId: '',statusName: '- SELECT -'},{statusId: 'AZT/3TC/EFV',statusName: 'AZT/3TC/EFV'},{statusId: 'AZT/3TC/NVP',statusName: 'AZT/3TC/NVP'},{statusId: 'TDF/FTC/EFV',statusName: 'TDF/FTC/EFV'},{statusId: 'TDF/FTC/NVP',statusName: 'TDF/FTC/NVP'},{statusId: 'TDF/3TC/EFV',statusName: 'TDF/3TC/EFV'},{statusId: 'TDF/3TC/NVP',statusName: 'TDF/3TC/NVP'},{statusId: 'AZT/3TC/ABC',statusName: 'AZT/3TC/ABC'},{statusId: 'AZT/3TC/TDF',statusName: 'AZT/3TC/TDF'},{statusId: 'TDF/FTC/LPV/r',statusName: 'TDF/FTC/LPV/r'},{statusId: 'TDF/3TC/LPV/r',statusName: 'TDF/3TC/LPV/r'},{statusId: 'TDF/FTC/ATV/r',statusName: 'TDF/FTC/ATV/r'},{statusId: 'TDF/3TC/ATV/r',statusName: 'TDF/3TC/ATV/r'},{statusId: 'AZT/3TC/LPV/r',statusName: 'AZT/3TC/LPV/r'},{statusId: 'AZT/3TC/ATV/r',statusName: 'AZT/3TC/ATV/r'},{statusId: 'ABC/3TC/EFV',statusName: 'ABC/3TC/EFV'},{statusId: 'ABC/3TC/NVP',statusName: 'ABC/3TC/NVP'},{statusId: 'd4T/3TC/NVP',statusName: 'd4T/3TC/NVP'},{statusId: 'ABC/3TC/LPV/r',statusName: 'ABC/3TC/LPV/r'},{statusId: 'd4T/3TC/LPV/r',statusName: 'd4T/3TC/LPV/r'},{statusId: 'ddi/3TC/NVP',statusName: 'ddi/3TC/NVP'},{statusId: 'ABC/3TC/ddi',statusName: 'ABC/3TC/ddi'},{statusId: 'RTV',statusName: 'RTV'},{statusId: 'ETR',statusName: 'ETR'},{statusId: 'RAL',statusName: 'RAL'},{statusId: 'DAR',statusName: 'DAR'}]}}">ARV Regimen</th>
				<th field="pmtctid" width="50" editor="text">PMTCT ID</th>
				<th field="eid" width="50" editor="text">EID ID</th>
				<th field="pcr6wks" width="50" editor="{type:'combobox',options:{valueField:'statusId',textField:'statusName',data: [{statusId: '',statusName: '- SELECT -'},{statusId: 'Negative',statusName: 'Negative'},{statusId: 'Positive',statusName: 'Positive'}]}}">PCR 0-2 MTHS</th>
				<th field="pcr6wksdate" width="50" editor="{type:'datebox',options:{required:false}}">Date</th>
				<th field="pcr12mths" width="50" editor="{type:'combobox',options:{valueField:'statusId',textField:'statusName',data: [{statusId: '',statusName: '- SELECT -'},{statusId: 'Negative',statusName: 'Negative'},{statusId: 'Positive',statusName: 'Positive'}]}}">PCR 3-12 MTHS</th>
				<th field="pcr12mthsdate" width="50" editor="{type:'datebox',options:{required:false}}">Date</th>
				<th field="pcr18mths" width="50" editor="{type:'combobox',options:{valueField:'statusId',textField:'statusName',data: [{statusId: '',statusName: '- SELECT -'},{statusId: 'Negative',statusName: 'Negative'},{statusId: 'Positive',statusName: 'Positive'}]}}">RTK @ >12MTHS</th>
				<th field="pcr18mthsdate" width="50" editor="{type:'datebox',options:{required:false}}">Date</th>
				</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">New</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Delete</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancel</a>
	</div>
	
</body>
</html>