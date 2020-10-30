<?php
require __DIR__ . "/../../config.php";
require __DIR__ . "/../../src/functions.php";

$url1 = __DIR__ . '/';


$id = isset($_GET['id'])
    ? $_GET['id']
    : null;

$db = connectToDatabase($dsn);

$del_id = 0;

if (isset($_POST['delete'])) {
    $del_id = $id;
}

$params = [$del_id];


$sql = <<<EOD
DELETE FROM dinasaurs 
WHERE
    id = ?
EOD;
$stmt1 = $db->prepare($sql);

try {
    $stmt1->execute($params);
    if ($stmt1) {
        echo '<p><a href="../admin.php?page=get-table">Back to table</a></p>';
    }
} catch (PDOException $e) {
    echo 'something went wrong!';
    throw $e;
}
