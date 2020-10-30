<?php
require __DIR__ . "/../../config.php";

require __DIR__ . "/../../src/functions.php";

$db = connectToDatabase($dsn);
$res = prepareTable($db);

printJettyResultsetToHTMLTable($res);
