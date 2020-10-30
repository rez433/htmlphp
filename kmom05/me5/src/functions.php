<?php
function loadingTime() 
{
    $timestampFirst = $_SERVER["REQUEST_TIME_FLOAT"];
    echo "Start: ".round($timestampFirst, 3)."<br>";

    $timestampLast = microtime(true);
    echo "End: ".round($timestampLast, 3)."<br>";

    $diff = $timestampLast - $timestampFirst;
    echo "Diff: ".round($diff, 3)."<br>";

    $filesIncluded = get_included_files();
    $numFiles = count($filesIncluded);
    echo "Files included: $numFiles<br>";


    $memoryMax = memory_get_peak_usage();
    $memoryCurrent = memory_get_usage();
    $memoryLimit = ini_get("memory_limit");
    echo "Memory: <br>";
    echo "Max: $memoryMax<br>";
    echo "Current: $memoryCurrent<br>";
    echo "Limit: $memoryLimit<br>";
    echo "<br>";
}


function connectToDatabase($dsn)
{
    // Open the database file and catch the exception if it fails.
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }
    return $db;
}

function prepareTable($db, $id = null)
{
    if ($id !== null) {
        $stmt = $db->prepare("SELECT * FROM dinasaurs WHERE id LIKE ?");
        $params = [$id];
        $stmt->execute($params);
    } else {
        $stmt = $db->prepare("SELECT * FROM dinasaurs");
        $stmt->execute();
    }
    
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $res;
}


// print results from table rows
function printJettyResultsetToHTMLTable($res)
{
    // $sql = "SELECT * FROM jetty";

    if (count($res) == 1) {
        echo "<p>All details about the Dinasaur: </p>";
    } else {
        echo "<p>There are " . count($res) . " dinasaurs in the list.</p>";
    }
    

    $rows = null;

    foreach ($res as $row) {
        $rows .= "<tr>";
        $rows .= "<td>{$row['id']}</td>";
        $rows .= "<td><a href='http://www.student.bth.se/~rere20/dbwebb-kurser/htmlphp/me/kmom05/me5/jetty/jetty.php?page=show-detail&id={$row['id']}'>{$row['type']}</a></td>";
        $rows .= "<td>{$row['length']}</td>";
        $rows .= "<td>{$row['weight']}</td>";
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

    EOD;
}
