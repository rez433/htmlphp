<?php
// require __DIR__ . "/../../incl/header.php";
require __DIR__ . "/../../config.php";
require __DIR__ . "/../../src/functions.php";

if (count($_GET) > 1) {
    $id = $_GET['id'];
} else {
    $id = null;
}


$db = connectToDatabase($dsn);
$res = prepareTable($db, $id);

printJettyResultsetToHTMLTable($res);
