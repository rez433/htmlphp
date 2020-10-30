<?php
require __DIR__ . "/../../config.php";
require __DIR__ . "/../../src/functions.php";

$id = isset($_GET['id'])
    ? $_GET['id']
    : null;

$db = connectToDatabase($dsn);


if ($id) {
    // Get details on the boat using specified position
    $sql = "SELECT * FROM dinasaurs WHERE id = ?";
    $stmt = $db->prepare($sql);
    $params = [$id];
    $stmt->execute($params);

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll(PDO::FETCH_BOTH);
    
    if (empty($res)) {
        die("No such id.");
    }
    
    // Move content of array to individual variables, for ease of use.
    list($id, $type, $length, $weight) = $res[0];
}



echo <<<EOD
<form method="post" action="delete.php?id=$id"?>

    <fieldset>
        <legend>Data</legend>
        <p>$type</p>
        <p>$length</p>
        <p>$weight</p>
        <p><input type="submit" name="delete" value="Delete"></p>
    </fieldset>
</form>
EOD;
