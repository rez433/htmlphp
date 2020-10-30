<?php

require __DIR__ . "/../src/functions.php";

// $fileName = "http://www.student.bth.se/~rere20/dbwebb-kurser/htmlphp/me/kmom05/db/boatclub.sqlite";
// $dsn = "sqlite:$fileName";


// dsn 
$fileName = __DIR__ . '/../db/boatclub.sqlite';
$dsn = "sqlite:$fileName";

$db = connectToDatabase($dsn);
$res = prepareTable($db);

printJettyResultsetToHTMLTable($res);
