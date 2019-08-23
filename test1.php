<html>

<script type="text/javascript">
function pharmacydrugcode()  
{  
if (document.form.val2.value==1) { 
document.getElementById('a5b').innerHTML ='3TC';
}
else  {
document.getElementById('a3b').value='Less';  
}
}
function validateDate()
{
var today = new Date();
var del_date = new Date(document.getElementById('d2b').value);
var del_date = del_date.getFullYear();
var td1 = today.getFullYear();
document.getElementById('d5b').innerHTML = td1 - del_date;
}

document.getElementById('d2b').onChange = validateDate();

</script>
<form action="test.php" name="form" method="post">
<input type="text" name="val2" id="a2b" onChange="pharmacydrugcode()">id
<label id="a5b" style="color:#F00; font-style:italic;"></label>
<input type="text" name="val3" id="a3b" onChange="update11();">
<p>
<input type="checkbox" name="details[]" id="mode" value="Bike">I have a bike
<input type="checkbox" name="details[]" id="mode" value="Car">I have a car
<input type="checkbox" name="details[]" id="mode" value="Jet">I have a Jet
</p>
<input type="date" name="dat1" id="d2b" onChange="validateDate()" >date

<br>
<label id="d5b" style="color:#F00; font-style:italic;"></label>
<br>
<input type="submit" name="peeps" value="+" />
</form>

</html>