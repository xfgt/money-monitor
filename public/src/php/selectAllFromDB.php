<?php
 
$user = 'root';
$password = '';
$database = 'moneysavingsdb';


$servername='localhost:3306';

$mysqli = new mysqli($servername, $user, $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}


$sql = " SELECT * FROM history ORDER BY TIMEDATE DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
    
?>