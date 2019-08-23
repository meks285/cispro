<?php

include './mandate_/lidh.php';

// Check connection

$id = $_REQUEST['id'];


class MyClass{
    public function GetUserInformation(){include './mandate_/lidh.php';
$query = "SELECT `id`, `pepid`, `service`, `date_of_service`, `comments` FROM `art_adherence`  where id='$_REQUEST[id]'";
        $result = mysqli_query($con,$query);
        $info = mysqli_fetch_assoc($result);
        return $info;
		
    } 
}
$class = new MyClass;
$info = $class->GetUserInformation();
echo mysqli_error($con);

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
@mysqli_query($conn,$sql);
echo json_encode(array(
	'id' => $id,
	'pepid' => $pepid,
	'service' => $service,
	'date_of_service' => $date_of_service,
	'comments' => $comments
));
?>