<?php
// Connect to MySQL
$link = mysql_connect( 'localhost', 'root', 'Nu66et%%' );
if ( !$link ) {
  die( 'Could not connect: ' . mysql_error() );
}

// Select the data base
$db = mysql_select_db( 'apindb', $link );
if ( !$db ) {
  die ( 'Error selecting database \'test\' : ' . mysql_error() );
}

// Fetch the data
$query = "SELECT COUNT(a.pepid) value1,DATE_FORMAT(a.pharmdispensedate,'%Y-%m') category
from pharmacy a JOIN (select pepid,pharmdispensedate,drugname1
 						from pharmacy
						where lower(visittype)='initial' and patienttype='ART' and length(EXTRACT(YEAR from pharmdispensedate))=4) b
ON (a.pepid=b.pepid)
WHERE DATEDIFF(a.pharmdispensedate,b.pharmdispensedate)/30.4>=12 and EXTRACT(YEAR FROM b.pharmdispensedate)=2016
GROUP BY YEAR(a.pharmdispensedate), MONTH(a.pharmdispensedate)
order by a.pharmdispensedate ASC";
$result = mysql_query( $query );

// All good?
if ( !$result ) {
  // Nope
  $message  = 'Invalid query: ' . mysql_error() . "\n";
  $message .= 'Whole query: ' . $query;
  die( $message );
}

// Print out rows
$prefix = '';
echo "[\n";
while ( $row = mysql_fetch_assoc( $result ) ) {
  echo $prefix . " {\n";
  echo '  "category": "' . $row['category'] . '",' . "\n";
  echo '  "value1": ' . $row['value1'] . ',' . "\n";
  echo " }";
  $prefix = ",\n";
}
echo "\n]";

// Close the connection
mysql_close($link);
?>