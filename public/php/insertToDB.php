<?php

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','moneysavingsdb');

// get the post records
//$name = $_POST['container'];

$action;


$actionIn = $_GET['ActionIn'];
$actionOut = $_GET['ActionOut'];


if($actionIn == 1){
	$action = $actionIn;
	$amount = $_GET['AmountAdded'];
	$description = $_GET['ArgumentsIncome'];
}


if($actionOut == 0){
	$action = $actionOut;
	$amount = $_GET['AmountDrawn'];
	$description = $_GET['ArgumentsOutcome'];
}


// database insert SQL code
$sql = "INSERT INTO 'history' ('ACTION', 'AMOUNT', 'DESCRIPTION') VALUES ('$action', '$amount', '$description')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Информацията е вкарана!";

} else echo "проблем :/";

?>