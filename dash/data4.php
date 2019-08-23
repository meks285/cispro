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
$query = "select COUNT(DISTINCT l.pepid) as value1,DATE_FORMAT(l.visitdate,'%Y-%m') category
from laboratory l JOIN patient p
ON (p.pepid=l.pepid)
where lower(l.tests)='viral load' 
and l.results < 1000
AND EXTRACT(YEAR FROM l.visitdate) = 2017 - 1
GROUP BY YEAR(l.visitdate), MONTH(l.visitdate)";
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