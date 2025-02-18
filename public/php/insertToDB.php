<?php

$user = 'root';
$password = '';
$database = 'moneysavingsdb';
$servername='localhost:3306';

$con = new mysqli($servername, $user, $password, $database);

$action = $_GET['Action'];
$timestamp = $_GET['time-income'];


if($action == 1){
	$amount = $_GET['AmountAdded'];
	$description = $_GET['ArgumentsIncome'];
}

if($action == 0){
	$amount = $_GET['AmountDrawn'];
	$description = $_GET['ArgumentsOutcome'];
}

if(!$timestamp){

	$sql = "INSERT INTO history (ACTION, AMOUNT, DESCRIPTION) VALUES ($action, $amount, '$description')";
} else {
	$sql = "INSERT INTO history (TIMEDATE, ACTION, AMOUNT, DESCRIPTION) VALUES ($timestamp, $action, $amount, '$description')";
}


// $sql = file_get_contents('../db/insertTodb.sql');
$result = $con->query($sql);

if($result)
{
	echo "<h2>Информацията бе вкарана успешно!</h2>";

} else echo "<h2>проблем :/</h2>";

header("Location: ../../");
die();


//$con->close();
?>