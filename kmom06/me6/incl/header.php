<?php
$url1 = substr($_SERVER['REQUEST_URI'], 0, 45);
?>


<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?=$url1 . "css/style.css" ?>">
    <link rel="shortcut icon" type="image/x-icon" href=”img/favicon.ico”/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
    <header class="site-header">
        <span class="site-title">Me-Sida för Reza</span>
        <span class="site-slogan">Min första me-sida</span>
    </header>

    <nav class="navbar">
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "multipage.php" ? "selected" : ""; ?>" href="<?=$url1 . "multipage.php"?>">Hem</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "jetty/jetty.php" ? "selected" : ""; ?>" href="<?=$url1 . "jetty/jetty.php"?>">Jetty Multipage</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "search.php" ? "selected" : ""; ?>" href="<?=$url1 . "/multipage/search.php"?>">Search</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "admin.php" ? "selected" : ""; ?>" href="<?=$url1 . "/admin/admin.php"?>">Admin</a>
    </nav>
