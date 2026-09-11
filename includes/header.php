<?php
if (!isset($basePath)) {
    $basePath = '.';
}
$homeHref = rtrim($basePath, '/') . '/';
$cssHref = rtrim($basePath, '/') . '/css/styles.css';
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?> - Explore the Future</title>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($cssHref); ?>">
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($headerTitle); ?></h1>
        <nav>
            <ul>
                <li><a href="<?php echo htmlspecialchars($homeHref); ?>">Explore the Future</a></li>
                <li><a href="<?php echo htmlspecialchars($homeHref); ?>#amnen">Ämnen</a></li>
                <li><a href="<?php echo htmlspecialchars($homeHref); ?>#intresse">Anmäl intresse</a></li>
            </ul>
        </nav>
    </header>
