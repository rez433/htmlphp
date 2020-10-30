
<style>
    table {
        border: 1px solid #ccc;
        border-collapse: collapse;
    }

    table th {
        background: lightgreen;
        
    }

    table, th, td {
        border: 1px solid black;
        padding: 0.4rem;
    }
</style>

<?php

// ############## check if pdo driver is enabled  ##################
// if (class_exists('PDO')) {
//     echo "<p>PDO exists and following pdo drivers are loaded: </p>";
//     print_r(PDO::getAvailableDrivers());
// }

// if (in_array('sqlite', PDO::getAvailableDrivers())) {
//     echo '<p style="color:lightgreen">sqlite pdo driver is enabled!</p>';
// } else {
//     echo '<p style="color:red"> sqlite pdo driver is not enabled!</p>';
// }



############  connect to database and select everthing from table ############

// Enable verbose output of error (or include from config.php)
// error_reporting(-1);              // Report all type of errors
// ini_set("display_errors", 1);     // Display all errors

// // Create a DSN for the database using its filename
$fileName = "../db/boatclub.sqlite";
$dsn = "sqlite:$fileName";

// Open the database file and catch the exception if it fails.
try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>$dsn<br>";
    throw $e;
}

// // Prepare and execute the SQL statement
$stmt = $db->prepare("SELECT * FROM jetty");
$stmt->execute();

// // Get the results as an array with column names as array keys
// $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>", print_r($res, true), "</pre>";



// ########## select all rows and show them in a table #############
// Prepare and execute the SQL statement
$sql = "SELECT * FROM jetty";
// $stmt = $db->prepare($sql);

$tblName = substr($dsn, 13, 8);

echo "<p>Execute the SQL-statement:<br><code>$sql</code><p>";
// $stmt->execute();

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<p>The result contains " . count($res) . " rows.</p>";

$rows = null;

foreach ($res as $row) {
    $rows .= "<tr>";
    $rows .= "<td>{$row['position']}</td>";
    $rows .= "<td>{$row['boatType']}</td>";
    $rows .= "<td>{$row['boatEngine']}</td>";
    $rows .= "<td>{$row['boatLength']}</td>";
    $rows .= "<td>{$row['boatWidth']}</td>";
    $rows .= "<td>{$row['ownerName']}</td>";
    $rows .= "</tr>\n";
}

echo <<<EOD
<table>
    <tr>
        <th>position</th>
        <th>boatType</th>
        <th>boatEngine</th>
        <th>boatLength</th>
        <th>boatWidth</th>
        <th>ownerName</th>
    </tr>
    $rows
</table>

EOD;
