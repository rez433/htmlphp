<?php

// var_dump($_SESSION);
$flash_message = $_SESSION["flashmsg"] ?? null;
$kontakt = $_SESSION["kontakt"] ?? null;


// Clear the flashMsg, it should only be used once
$_SESSION["flashmsg"] = null;


?>

<div class="flashmsg">
    <p><?php echo $flash_message ? 'Flash Message: ' . $flash_message : 'No flash message set yet!' ?></p>

</div>

<div>
    <p>
        <?php echo $kontakt ? 'Kontakt Message: ' . $kontakt : 'No kontakt message sent yet!' ?>
    </p>
</div>
