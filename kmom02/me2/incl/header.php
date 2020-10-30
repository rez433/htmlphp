<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href=”img/favicon.ico”/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <header class="site-header">
        <span class="site-title">Me-Sida för Reza</span>
        <span class="site-slogan">Min första me-sida</span>
    </header>

    <nav class="navbar">
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "me.php" ? "selected" : ""; ?>" href="me.php">Hem</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "report.php" ? "selected" : ""; ?>" href="report.php">Redovisning</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "about.php" ? "selected" : ""; ?>" href="about.php">About</a>
    </nav>