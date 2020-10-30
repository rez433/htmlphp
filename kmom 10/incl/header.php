<?php
echo $_SERVER['REQUEST_URI'];
$base = substr($_SERVER['REQUEST_URI'], 0, 14);

?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a5b5054b64.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@600&family=Syne+Mono&display=swap" rel="stylesheet">
    <title>Nättraby Vägmuseum</title>
</head>

<body>
    <header>
        <div class="site-info">
            <h1 class="site-title"><a href="./index.php">Nättraby Vägmuseum</a></h1>
            <p class="site-desc">världens första friluftsmuseum för vägarnas historia på land, räls, vatten och is.</p>
        </div>
    </header>
    <nav class="navbar">
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "index.php" ? "selected" : ""; ?>" href="<?=$base . "/index.php"?>">Hem</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "articles.php" ? "selected" : ""; ?>" href="<?=$base . "/articles.php"?>">Artiklar</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "gallery.php" ? "selected" : ""; ?>" href="<?=$base . "/gallery.php"?>">Vägar</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "article.php?id=nattraby-vagmuseum" ? "selected" : ""; ?>" href="<?=$base . "/article.php?id=nattraby-vagmuseum"?>">Om</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "article.php?id=kontakt" ? "selected" : ""; ?>" href="<?=$base . "/article.php?id=kontakt"?>">Kontakt</a>
    </nav>
