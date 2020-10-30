<?php
/**
* A post form submitting to a processing page.
*/
?>

<!doctype html>
<meta charset="utf-8">
<title>Kontakta Mig Form</title>
<form method="post" action="post/process.php">
    <fieldset>
        <label>Kontakta Mig Form</label>
        <p>
            <label for="title">Title:</label>
            <input id="title" type="text" name="title" value="<?= htmlentities($_POST["title"] ?? null) ?>">
        </p>
        <p>
            <input type="submit" name="create" value="Create">
            <input type="reset" value="Reset">
        </p>
    </fieldset>
</form>
