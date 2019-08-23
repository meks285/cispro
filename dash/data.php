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
$query = "select DATE_FORMAT(pharmdispensedate,'%Y-%m') as category, COUNT(*) as value1
 from pharmacy
where lower(visittype)='initial' and patienttype='ART' and length(EXTRACT(YEAR from pharmdispensedate))=4 and EXTRACT(YEAR from pharmdispensedate)=2017
GROUP BY YEAR(pharmdispensedate), MONTH(pharmdispensedate)
order by pharmdispensedate ASC";
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