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

        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="/dashboard.php" class="login-btn">Account</a>
            <a href="/logout.php">Logout</a>
            <?php else: ?>
            <a href="/login.php" class="login-btn">Login</a>
        <?php endif; ?>

    </nav>
</body>
</html>


