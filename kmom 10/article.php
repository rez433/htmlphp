<?php
require "./config.php";
require "./src/functions.php";





if (count($_GET) >= 1) {
    $id = $_GET['id'];
} else {
    $id = null;
}

$db = connectToDatabase($dsn);
$res = prepareTable($db, 'article', $id);

include 'incl/header.php';
?>


<main>
    <article>
        <?php
        if ($id == 'nattraby-vagmuseum') {
            echo '<p><a href='.$base . "/om.php" .'>Länk till Report</a></p><hr>';
            showArticle($res);
        } else {
            showArticle($res);
        }
            
        ?>
    </article>
</main>


<?php

include 'incl/footer.php';
