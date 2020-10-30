<?php

require __DIR__ . "/../../config.php";

require __DIR__ . "/../../src/functions.php";

$db = connectToDatabase($dsn);
// $res = prepareTable($db);

$sql1 = ("SELECT MAX(id) from dinasaurs");
$stmt1 = $db->prepare($sql1);
$stmt1->execute();

$res = $stmt1->fetch(PDO::FETCH_ASSOC);

$id1 = 0;



foreach ($res as $x => $v) {
    $id1 = (int)$v + 1;
}

print_r($id1);

// Check if form posted and get incoming
if (isset($_POST['add'])) {
    // Store posted form in parameter array
    $id = $id1;
    $type   = $_POST['type'];
    $length  = $_POST['length'];
    $weight = $_POST['weight'];
}

$params = [$id, $type, $length, $weight];


$sql = "INSERT INTO dinasaurs VALUES(?, ?, ?, ?)";

$stmt = $db->prepare($sql);

try {
    $stmt->execute($params);
    if ($stmt) {
        echo '<p>Data added</p>';
        echo '<p><a href="../admin.php?page=get-table">Back to table</a></p>';
    }
} catch (PDOException $e) {
    echo "<p>Failed to insert a new row, dumping details for debug.</p>";
    echo "<p>Incoming \$_POST:<pre>" . print_r($_POST, true) . "</pre>";
    echo "<p>The error code: " . $stmt->errorCode();
    echo "<p>The error message:<pre>" . print_r($stmt->errorInfo(), true) . "</pre>";
    throw $e;
}
