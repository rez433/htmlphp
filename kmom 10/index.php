<?php
require "./config.php";
require "./src/functions.php";


include 'incl/header.php';

$db = connectToDatabase($dsn);
$startPage = prepareTable($db, 'article', 'start');
// $res = prepareTable($db, 'article', null);

?>

<main>
    <article class="landingpage">
        <?php showArticle($startPage); ?>
    </article>
    <!-- <?php
        // showArticleList($res);
    ?> -->
</main>


<?php

include 'incl/footer.php';
