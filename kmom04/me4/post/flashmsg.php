<!doctype html>
<meta charset="utf-8">
<title>Flash Message</title>
<form method="post" action="post/process.php">
    <fieldset>
        <label>Flash Message</label>
        <p>
            <label for="flashmsg">Message:</label>
            <textarea name="flashmsg" id="flashmsg" cols="30" rows="10" value="<?= htmlentities($_POST['flashmsg'] ?? null) ?>"></textarea>
        </p>
        <p>
            <input type="submit" value="Flash it">
            <input type="reset" value="Reset">
        </p>
    </fieldset>
</form>