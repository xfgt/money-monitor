<?php
$user = 'root';
$password = '';
//$database = 'moneysavingsdb';
$database = 'hummsp_db';
$servername='localhost:3306';

 
try{
   
    // Database connection
    $dsn = "mysql:host=$servername;dbname=$database;charset=utf8mb4";
    $connection = new PDO($dsn, $user, $password); // pdo - php data object
    echo "Connected successfully.";



} catch (PDOException $e){
    echo "Connection failed." . $e->getMessage();
}

$connection = null; // closing connection

?>
