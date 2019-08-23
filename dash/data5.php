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
$query = "SELECT COUNT(DISTINCT a.pepid) as value1,DATE_FORMAT(a.visitdate,'%Y-%m') category
from clinicaleval a JOIN patient p
ON(a.pepid=p.pepid)
where (a.visitdate,a.pepid) IN (select MIN(visitdate) as visitdate,pepid from clinicaleval group by pepid)
and (lower(a.cd4scheduled) like '%yes%' or lower(a.vlscheduled) like '%yes%' or a.whostage between 1 and 4)
AND EXTRACT(YEAR from a.visitdate) = 2017
GROUP BY YEAR(a.visitdate), MONTH(a.visitdate)";
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