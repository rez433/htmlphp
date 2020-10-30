<?php
require __DIR__ . "../../config.php";
// var_dump($_SESSION);
// var_dump($_POST);



if ($_POST['title']) {
    $_SESSION['kontakt'] = $_POST['title'];
}

if ($_POST['flashmsg']) {
    $_SESSION['flashmsg'] = $_POST['flashmsg'];
}

// var_dump($_SESSION);

$url = "../multipage.php?page=Result";
header("Location: $url");
exit;
