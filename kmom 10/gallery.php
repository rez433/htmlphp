<?php
require "./config.php";
require "./src/functions.php";


include 'incl/header.php';


$db = connectToDatabase($dsn);
$res = prepareTable($db, 'object', null);
?>

<main>
    <?php
        showRoadList($res);
    ?>
</main>


<?php

include 'incl/footer.php';
