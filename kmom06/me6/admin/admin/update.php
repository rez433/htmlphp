<?php
require __DIR__ . "/../../config.php";
require __DIR__ . "/../../src/functions.php";

$url1 = __DIR__ . '/';


$id = isset($_GET['id'])
    ? $_GET['id']
    : null;

$db = connectToDatabase($dsn);


if (isset($_POST['update'])) {
    // Store posted form in parameter array
    $id = $id;
    $type   = $_POST['type'];
    $length  = $_POST['length'];
    $weight = $_POST['weight'];
}

$params = [$id, $type, $length, $weight];

$sql = <<<EOD
UPDATE dinasaurs
SET
    id = ?,
    type=?,
    length = ?,
    weight = ?
    
WHERE 
    id = $id
EOD;

$stmt = $db->prepare($sql);

try {
    $stmt->execute($params);
    if ($stmt) {
        echo '<p>Data has been updated!</p>';
        echo '<p><a href="../admin.php?page=get-table">Back to table</a></p>';
    }
} catch (PDOException $e) {
    echo "<p>Failed to insert a new row, dumping details for debug.</p>";
    echo "<p>Incoming \$_POST:<pre>" . print_r($_POST, true) . "</pre>";
    echo "<p>The error code: " . $stmt->errorCode();
    echo "<p>The error message:<pre>" . print_r($stmt->errorInfo(), true) . "</pre>";
    throw $e;
}
