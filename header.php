<?php
$pageTitle = $pageTitle ?? "Default Site Title";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/src/css/top_bottom-bars.css">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
</head>
<body>
    <nav class="topBarClass"> 
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="account.php">Account</a>
    </nav>
</body>
</html>


