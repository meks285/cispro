<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function showUserbc(str) {
	
    if (str == "") {
        document.getElementById("txtHint3").innerHTML = "";
        return;
    } else { 
    	
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint3").innerHTML = xmlhttp.responseText;
            }
        }
        var xander= document.getElementById("state").value;
        xmlhttp.open("GET","getuserfacs.php?q="+xander+"&b="+xander,true);
        xmlhttp.send();
    }
}
</script>
</head>
<?php
include './mandate_/lidh.php';
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


class MyClass{
    public function GetUserInformation(){
	$table = 'facility';
include './mandate_/lidh.php';
	$results = mysqli_query($con,"SELECT facilityname,facilityidprefix,state,lga from facility");
	$info = mysqli_fetch_assoc($results);
	return $info;
	} 
    
		
    } 

$class = new MyClass;
$info = $class->GetUserInformation();
echo mysqli_error($con);


?>
<body>
<form name="form1" method="post" action="insfac.php" autocomplete="off">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
</tr>
<tr>
<td width="78"></td>
<td width="6"></td>
<td width="294"><div class="style_form"><input name="facilityidprefix" type="text" id="facilityidprefix" value="<?php echo $info['facilityidprefix']; ?>" required class="form_element" placeholder="Set Facility ID" >
</tr>
<tr>
<td width="78"></td>
<td width="6"></td>
<td width="294"><div class="style_form"><input name="myusername" type="text" id="myusername" value="<?php echo $info['facilityname']; ?>" required class="form_element" placeholder="Set Facility Name" >
</tr>
<tr>
<td width="78"></td>
<td width="6"></td>
<td width="294"><div class="style_form"><label for="state">STATE:</label>
<select name="state" id="state" onChange="showUserbc(this.value);">
<option value="">--Select STATE--</option>
<?php
$sql1="SELECT DISTINCT `state` FROM `states` order by state";
$sql_row1=mysqli_query($con,$sql1);
while($sql_res1=mysqli_fetch_assoc($sql_row1))
{
?>
<option value="<?php echo $sql_res1["state"]; ?>"><?php echo $sql_res1["state"]; ?></option>
<?php
}
?>
</select>
</tr>
<tr>
<td width="78"></td>
<td width="6"></td>
<td width="294"><label for="lga">LGA:</label><div class="style_form"><div id="txtHint3"></div><span id="availability_status"></span>		

    </div>
</tr>
<tr>
<td><button class="gray" type="submit" >SET</button></td>
</tr>
</table>
</form>
</body>
</html>