<?php
if (!isset($basePath)) {
    $basePath = '.';
}
$homeHref = rtrim($basePath, '/') . '/';
$cssHref = rtrim($basePath, '/') . '/css/styles.css';
$showPageTitle = !empty($headerTitle);
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
    <a class="skip-link" href="#innehall">Hoppa till innehållet</a>
    <header class="site-header">
        <a class="wordmark" href="<?php echo htmlspecialchars($homeHref); ?>">Explore the Future</a>
        <nav class="site-nav" aria-label="Huvudmeny">
            <a href="<?php echo htmlspecialchars($homeHref); ?>#amnen">Ämnen</a>
            <a href="<?php echo htmlspecialchars($homeHref); ?>#intresse">Anmäl intresse</a>
        </nav>
    </header>
<?php if ($showPageTitle): ?>
    <div class="page-hero wrap" id="innehall">
        <h1><?php echo htmlspecialchars($headerTitle); ?></h1>
    </div>
<?php endif; ?>
