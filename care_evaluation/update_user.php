<?php

$con=mysql_connect("localhost","root","Nu66et%%","apindb");
mysql_select_db("apindb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id = $_REQUEST['id'];


class MyClass{
    public function GetUserInformation(){
$query = "SELECT `id`, `pepid`, `service`, `date_of_service`, `comments` FROM `art_adherence`  where id='$_REQUEST[id]'";
        $result = mysql_query($query);
        $info = mysql_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysql_error();

//Reconcile with Database Values

{
$date_of_service = $_REQUEST['date_of_service'];
$date_of_service = date('Y-m-d',strtotime($date_of_service));

}
// END
$id = intval($_REQUEST['id']);
$pepid = $_REQUEST['pepid'];
$service = $_REQUEST['service'];
$comments = $_REQUEST['comments'];

include 'conn.php';

$sql = "update art_adherence set pepid='$pepid',service='$service',date_of_service='$date_of_service',comments='$comments' where id=$id";
@mysql_query($sql);
echo json_encode(array(
	'id' => $id,
	'pepid' => $pepid,
	'service' => $service,
	'date_of_service' => $date_of_service,
	'comments' => $comments
));
?>