<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'Nu66et%%';
$dbName = 'apindb';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}