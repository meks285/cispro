<?php
ob_start();
session_start();
$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>CiS Pro - ART Adherence Preparation</title>
	<link rel="stylesheet" type="text/css" href="./easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="./easyui/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="./easyui/demo/demo.css">
	<script type="text/javascript" src="./jquery-1.6.min.js"></script>
	<script type="text/javascript" src="./easyui/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="./easyui/jquery.edatagrid.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#dg').edatagrid({
				url: "get_users.php?pepid=<?php echo $_SESSION['pepid'] ?>",
				saveUrl: 'save_user.php',
				updateUrl: 'update_user.php',
				destroyUrl: 'destroy_user.php'
			});
		});
	</script>

</head>
<body>
<h1 style="background-color:#0F0;font-weight: 600;    font-family: 'Titillium Web', sans-serif;  position: relative;   font-size: 32px; line-height: 15px; padding: 15px 15px 15px 15%;    color: #355681;    box-shadow:         inset 0 0 0 1px rgba(53,86,129, 0.4),         inset 0 0 5px rgba(53,86,129, 0.5),        inset -285px 0 35px white;    border-radius: 0 10px 0 10px;    background: #fff url(./images/bartoszkosowski.jpg) no-repeat center left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ART Adherence Preparation / Care and Support Services &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
<a style="color:blue; font-weight:bold;" href="../patsummary.php?pepid=<?php echo $_SESSION['pepid'] ?>&login_id=<?php if(isset($_GET["username"])) echo $_GET["username"]; ?>" style="font-weight:bold; font-size:14px">[MAIN MENU]</a><br />
	<div class="demo-info" style="margin-bottom:10px">
		<div class="demo-tip icon-tip">&nbsp;</div>
		<div style="color:red">Double click the row to begin editing.</div>
	</div>
	
	<table id="dg" title="ART Adherence Preparation List" style="width:1550px;height:250px"
			toolbar="#toolbar" pagination="true" idField="id"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="pepid" width="15" editor="{type:'combobox',options:{required:true,valueField:'statusId',textField:'statusName',data: [{statusId: '<?php echo $_SESSION["pepid"] ?>',statusName: '<?php echo $_SESSION["pepid"] ?>'}]}}">PEPID</th>
				<th field="service" width="50" editor="{type:'combobox',options:{required:true,valueField:'statusId',textField:'statusName',data: [{statusId: '',statusName: '- SELECT -'},{statusId: '1 - ART - educate on Essentials',statusName: 'ART - educate on Essentials'},{statusId: '1 - Why complete Adherence Needed',statusName: 'Why complete Adherence Needed'},{statusId: '1 - Explain dose, when to take, what to do when one forgets dose',statusName: 'Explain dose, when to take, what to do when one forgets dose'},{statusId: '1 - What can occur, How to manage side effects',statusName: 'What can occur, How to manage side effects'},{statusId: '1 - Adherence Plan',statusName: 'Adherence Plan'},{statusId: '1 - Name, address,phone contacts of treatment supporter',statusName: 'Name, address,phone contacts of treatment supporter'},{statusId: '1 - Indicate when ready for ART',statusName: 'Indicate when ready for ART'},{statusId: '2 - Adherence Counselling',statusName: 'Adherence Counselling'},{statusId: '2 - Basic HIV education and transmission including nutrition',statusName: 'Basic HIV education and transmission including nutrition'},{statusId: '2 - Prevention Counselling: Abstinence,safer sex, Household Precautions',statusName: 'Prevention Counselling: Abstinence,safer sex, Household Precautions'},{statusId: '2 - Disclosure, Partner testing and counselling, family situation',statusName: 'Disclosure, Partner testing and counselling, family situation'},{statusId: '2 - Condom Provision',statusName: 'Condom Provision'},{statusId: '2 - STI Screening, diagnosis and referral for Management',statusName: 'STI Screening, diagnosis and referral for Management'},{statusId: '2 - Provision/referral for RH/FP Services',statusName: 'Provision/referral for RH/FP Services'},{statusId: '2 - Alcohol and Other Substance Use risk reduction counselling',statusName: 'Alcohol and Other Substance Use risk reduction counselling'},{statusId: '2 - Symptom Management and Palliative Care at Home',statusName: 'Symptom Management and Palliative Care at Home'},{statusId: '2 - Positive Living Counsel',statusName: 'Positive Living Counsel'},{statusId: '2 - Support group enrollment,community support, clinic contacts',statusName: 'Support group enrollment,community support, clinic contacts'}]}}">SERVICE</th>
				<th field="date_of_service" width="50" editor="{type:'datebox',options:{required:true}}">DATE OF SERVICE</th>
				<th field="comments" width="50" editor="{type:'validatebox',options:{required:false}}">COMMENTS</th>
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