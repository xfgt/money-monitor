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


$positive = get_value($mysqli, " SELECT SUM(AMOUNT) FROM history WHERE ACTION=1 ");
$negative = get_value($mysqli, " SELECT SUM(AMOUNT) FROM history WHERE ACTION=0 ");

$res = $positive - $negative;
echo $res;

//$res = $q1 - $q2;

$mysqli->close();

function get_value($mysqli, $sql) {
    $result = $mysqli->query($sql);
    $value = $result->fetch_array(MYSQLI_NUM);
    return is_array($value) ? $value[0] : "";
}
?>