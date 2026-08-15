<?php
$pageTitle = $pageTitle ?? "Default Site Title";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css already defined in header.php -->
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
</head>
<body>
    

    <footer class="bottomBarClass">
        
        <a href="https://github.com/xfgt">Author</a>
        <a href="mailto:xfgt_71@proton.me">Contact</a>
        <p style="font-size: 12px">&copy; <?php echo date('Y'); ?> Teodor Mangarov (xfgt) </p>
    </footer>

    
</body>
</html>


