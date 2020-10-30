<?php
require __DIR__ . "/../../config.php";

require __DIR__ . "/../../src/functions.php";

$db = connectToDatabase($dsn);
$res = prepareTable($db);


if (count($res) == 1) {
    echo "<p>All details about the Dinasaur: </p>";
} else {
    echo "<p>There are " . count($res) . " dinasaurs in the list.</p>";
}


$rows = null;

foreach ($res as $row) {
    $rows .= "<tr>";
    $rows .= "<td>" . htmlentities($row['id']) . "</td>";
    $rows .= "<td>" . htmlentities($row['type']) . "</td>";
    $rows .= "<td>" . htmlentities($row['length']) . "</td>";
    $rows .= "<td>" . htmlentities($row['weight']) . "</td>";
    $rows .= "<td><a href='admin/upd.php?id={$row['id']}'>Update</a></td>";
    $rows .= "<td><a href='admin/del.php?id={$row['id']}'>Delete</a></td>";
    $rows .= "</tr>\n";
}

echo <<<EOD
<table>
    <tr>
        <th>id</th>
        <th>type</th>
        <th>length</th>
        <th>weight</th>
    </tr>
    $rows
</table>

<p><a href='./admin.php?page=add'>Add</a></p>
<p><a href='./admin/start.php'>rebuilt the table</a></p>

EOD;
