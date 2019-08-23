<?php
session_start();
if (isset($_POST['search'])) {
$con=mysqli_connect("localhost","root","","asmart");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
     $word = mysql_real_escape_string($_POST['search']);
     $word = htmlentities($word);
	 $ryear = $_POST['ryear'];

$result = mysqli_query($con,"SELECT facilityid,rfacility,rmonth,ryear,ind1,ind2,ind3,ind4,ind5,ind6,ind7,ind8,ind9,ind10,ind11,ind12,ind13,ind14,ind15 FROM indicators WHERE rfacility LIKE '%" . $word . "%' and ryear='$ryear' ORDER BY rfacility");

var_dump($result);

$num=$result->num_rows;

echo "<table border='1'>
<tr>
<th>FacilityID</th> <br />
<th>Facility</th>
<th>Month</th>
<th>Year</th> <br />
<th> Individuals HIV CTR</th>
<th>Individuals tested HIV+</th>
<th>Individuals who received SRH/HIV services</th> <br />
<th>New ANC clients</th>
<th>Pregnant women HIV CTR (ANC)</th>
<th>Pregnant women HIV CTR (L&D)</th> <br />
<th>Women HIV CTR (Post-Partum)</th>
<th>Pregnant women tested + (ANC)</th>
<th>Pregnant women tested + (L&D)</th> <br />
<th>Women tested + (Post-Partum)</th>
<th>Pregnant women received triple ARVs</th>
<th>Infants born to HIV+ mothers</th>
<th>Exposed infants who received DNA PCR</th> <br />
<th>Exposed infants who received dNVP+6weeks</th>
<th>Exposed infants DNA PCR +</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['facilityid'] . "</td>";
  echo "<td>" . $row['rfacility'] . "</td>";
  echo "<td>" . $row['rmonth'] . "</td>";
  echo "<td>" . $row['ryear'] . "</td>";
  echo "<td>" . $row['ind1'] . "</td>";
  echo "<td>" . $row['ind2'] . "</td>";
  echo "<td>" . $row['ind3'] . "</td>";
  echo "<td>" . $row['ind4'] . "</td>";
  echo "<td>" . $row['ind5'] . "</td>";
  echo "<td>" . $row['ind6'] . "</td>";
  echo "<td>" . $row['ind7'] . "</td>";
  echo "<td>" . $row['ind8'] . "</td>";
  echo "<td>" . $row['ind9'] . "</td>";
  echo "<td>" . $row['ind10'] . "</td>";
  echo "<td>" . $row['ind11'] . "</td>";
  echo "<td>" . $row['ind12'] . "</td>";
  echo "<td>" . $row['ind13'] . "</td>";
  echo "<td>" . $row['ind14'] . "</td>";
  echo "<td>" . $row['ind15'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
echo "<br>";

mysqli_close($con);

session_write_close();


}
?>