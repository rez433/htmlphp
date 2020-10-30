<?php
require "./config.php";
require "./src/functions.php";


include 'incl/header.php';

$db = connectToDatabase($dsn);
$res = prepareTable($db, 'article', null);

?>

<main>
    <?php
    showArticleList($res);
    ?>
</main>


<?php

include 'incl/footer.php';
