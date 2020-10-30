<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <?php
    // $path = $_SERVER['SERVER_NAME'] . '/' . $_SERVER['REQUEST_URI'];
    // var_dump($path);
    // http://www.student.bth.se//~rere20/dbwebb-kurser/htmlphp/me/kmom05/me5/css/style.css
    // $url1 = basename($_SERVER['REQUEST_URI']);
    // if (substr($url1, 0, 13) == 'multipage.php') {
    //     echo '<link rel="stylesheet" href="css/style.css">';
    // } elseif (substr($url1, 0, 9) == 'jetty.php') {
    //     echo '<link rel="stylesheet" href="/./css/style.css">';
    // } elseif (substr($url1, 0, 10) == 'search.php') {
    //     echo '<link rel="stylesheet" href="/./css/style.css">';
    // }
    ?>
    <link rel="stylesheet" href="http://www.student.bth.se//~rere20/dbwebb-kurser/htmlphp/me/kmom05/me5/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href=”img/favicon.ico”/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!-- <?php // include __DIR__ . "/flashmsg.php"; ?> -->
    <header class="site-header">
        <span class="site-title">Me-Sida för Reza</span>
        <span class="site-slogan">Min första me-sida</span>
    </header>

    <nav class="navbar">
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "multipage.php" ? "selected" : ""; ?>" href="http://www.student.bth.se/~rere20/dbwebb-kurser/htmlphp/me/kmom05/me5/multipage.php">Hem</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "jetty/jetty.php" ? "selected" : ""; ?>" href="http://www.student.bth.se/~rere20/dbwebb-kurser/htmlphp/me/kmom05/me5/jetty/jetty.php">Jetty Multipage</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "search.php" ? "selected" : ""; ?>" href="http://www.student.bth.se/~rere20/dbwebb-kurser/htmlphp/me/kmom05/me5/multipage/search.php">Search</a>
    </nav>
    