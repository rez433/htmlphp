<?php

require __DIR__ . "/../src/functions.php";


// // dsn 
// $fileName = "http://www.student.bth.se/~rere20/dbwebb-kurser/htmlphp/me/kmom05/db/boatclub.sqlite";
// $dsn = "sqlite:$fileName";

// dsn 
$fileName = __DIR__ . '/../db/boatclub.sqlite';
$dsn = "sqlite:$fileName";

$db = connectToDatabase($dsn);
if ($db) {
    echo '<p style="color:green; padding: 1rem;">Ok, du är nu uppkopplad till databasen!</p>';
}
