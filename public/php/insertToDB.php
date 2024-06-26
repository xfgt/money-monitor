<?php

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','moneysavingsdb');

// get the post records
//$name = $_POST['container'];


$action = $_POST[''];
$amount = $_POST[''];
$description = $_POST[''];

// database insert SQL code
$sql = "INSERT INTO `history` (`ACTION`, `AMOUNT`, `DESCRIPTION`) VALUES ('$action', '$amount', '$description')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Информацията е вкарана!";
}

?>