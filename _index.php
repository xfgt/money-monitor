<?php
// Set configuration variables
$siteTitle = "My Web Application";
$currentYear = date('Y');

// Example dynamic content
$features = [
    "Clean architecture",
    "Fast execution",
    "Easy customization"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($siteTitle); ?></title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
            background-color: #f4f4f9;
        }
        header {
            border-bottom: 2px solid #ddd;
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }
        main {
            background: #fff;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        footer {
            margin-top: 2rem;
            text-align: center;
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to <?php echo htmlspecialchars($siteTitle); ?></h1>
    </header>

    <main>
        <h2>Overview</h2>
        <p>Server status: <strong>Online</strong> (PHP v<?php echo phpversion(); ?>)</p>

        <h3>Core Features</h3>
        <ul>
            <?php foreach ($features as $feature): ?>
                <li><?php echo htmlspecialchars($feature); ?></li>
            <?php endforeach; ?>
        </ul>
    </main>

    <footer>
        <p>&copy; <?php echo $currentYear; ?> <?php echo htmlspecialchars($siteTitle); ?>. All rights reserved.</p>
    </footer>

</body>
</html>