<? php
    $root='localhost/apindb/security.php';
    //Check For Authorized Entry
    if (!eregi($root, $webserver['Referer'])) 
	{
    echo "Unauthorized Access!";
    //Just forward to error page.
    } else {
    //Continue Loading Page Here
    }
?>