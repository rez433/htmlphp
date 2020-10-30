<?php
$base = substr($_SERVER['REQUEST_URI'], 0, 12);
?>


<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?=$base . "/css/style.css" ?>">
    <link rel="shortcut icon" type="image/x-icon" href=”img/favicon.ico”/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
    <header class="site-header">
        <span class="site-title">Me-Sida för Reza</span>
        <span class="site-slogan">Min första me-sida</span>
    </header>

    <nav class="navbar">
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "multipage.php" ? "selected" : ""; ?>" href="<?=$base . "/multipage.php"?>">Hem</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "jetty/jetty.php" ? "selected" : ""; ?>" href="<?=$base . "/jetty/jetty.php"?>">Jetty Multipage</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "search.php" ? "selected" : ""; ?>" href="<?=$base . "/multipage/search.php"?>">Search</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "admin.php" ? "selected" : ""; ?>" href="<?=$base . "/admin/admin.php"?>">Admin</a>
    </nav>
