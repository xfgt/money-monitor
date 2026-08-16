<?php
$user = 'root';
$password = '';
$database = 'moneysavingsdb';
$servername='localhost:3306';

 
try{
   
    // Database connection
    $dsn = "mysql:host=$servername;dbname=$database;charset=utf8mb4";
    $connection = new PDO($dsn, $user, $password); // pdo - php data object

    $statusClass = "message-success";    
    $statusMessage = "Connected successfully.";

    
    

} catch (PDOException $e){
    $statusClass = "message-error";
    $statusMessage = "Connection failed: " . htmlspecialchars($e->getMessage());
} finally {
    $connection = null; // closing connection
}

?>
<link rel="stylesheet" href="public/src/css/message-box.css">
<script type="text/javascript" src="public/src/js/MessageBox-Fade.js"></script> <!-- script 4 second message fade away -->
<div id="message-box" class="<?php echo $statusClass; ?>">
    <?php echo $statusMessage; ?>
</div>


