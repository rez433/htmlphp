<?php
require "./config.php";
require "./src/functions.php";





if (count($_GET) >= 1) {
    $id = $_GET['id'];
} else {
    $id = null;
}

$db = connectToDatabase($dsn);
$res = prepareTable($db, 'object', $id);

include 'incl/header.php';
?>


<main>
    <article>
        <?php
            showRoadList($res);
        ?>
    </article>
</main>


<?php

include 'incl/footer.php';
