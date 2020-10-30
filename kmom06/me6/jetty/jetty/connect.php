<?php

require __DIR__ . "/../../config.php";
require __DIR__ . "/../../src/functions.php";



$db = connectToDatabase($dsn);
if ($db) {
    echo '<p style="color:green; padding: 1rem;">Ok, du är nu uppkopplad till databasen!</p>';
}
