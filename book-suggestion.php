<?php
//provide your hostname, username and dbname
$host="localhost"; 
$username="root";  
$password="Nu66et%%";
$db_name="apindb"; 
//$con=mysql_connect("$host", "$username", "$password")or die("cannot connect");
$con=mysql_connect("$host", "$username", "$password");
mysql_select_db("$db_name");
$book_name = $_POST['book_name'];
$sql = "select * from drugs where drugcode=$book_name";
$result = mysql_query($sql);
while($row=@mysql_fetch_array($result)) // added the @ to conceal the mysql_fetch_array error when no row is returned [bad idea tho, but...]
{
echo $row['drugcode']." | ".$row['drugname']." | ".$row['dose']." | ".$row['no']." | ".$row['sig']." | ".$row['source'];
}

?>