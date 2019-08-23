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
$query = "select COUNT(DISTINCT b.pepid) as value1,DATE_FORMAT(b.visitdate,'%Y-%m') as category
from patient a JOIN clinicaleval b
ON (a.pepid=b.pepid)
where a.hivposdate NOT IN ('0000-00-00')
AND b.tbstatus IN ('No Signs','TB Suspected and referred for evaluation','On INH prophylaxis','Currently on TB treatment','TB positive, Not on drugs')
AND EXTRACT(YEAR from b.visitdate) = 2017
GROUP BY YEAR(b.visitdate), MONTH(b.visitdate)";
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