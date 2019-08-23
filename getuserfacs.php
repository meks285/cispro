<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];
$b = intval($_GET['b']);

include './mandate_/lidh.php';
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"apindb");
$sql="SELECT lga from lga WHERE statecode=(select id from states where state='".$q."') order by lga asc";
$result = mysqli_query($con,$sql);

echo "<select name='lga' id='textbox'>";
while($row = mysqli_fetch_array($result))
{
    echo "<option value='".$row['lga']."'>".$row['lga']."</option>";
}
echo "</select>";
mysqli_close($con);
?>
</body>
</html>