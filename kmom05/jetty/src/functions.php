<?php

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

function prepareTable($db, $position = null)
{
    if ($position !== null) {
        $stmt = $db->prepare("SELECT * FROM jetty WHERE position LIKE ?");
        $params = [$position];
        $stmt->execute($params);
    } else {
        $stmt = $db->prepare("SELECT * FROM jetty");
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
        echo "<p>All details about the boat: </p>";
        echo "<p><a href='http://www.student.bth.se/~rere20/dbwebb-kurser/htmlphp/me/kmom05/jetty/jetty.php?page=get-table'>Back to table</a></p>";
    } else {
        echo "<p>There are " . count($res) . " boats in the club.</p>";
    }
    

    $rows = null;

    foreach ($res as $row) {
        $rows .= "<tr>";
        $rows .= "<td>{$row['position']}</td>";
        if (count($res) == 1) {
            $rows .= "<td>{$row['boatType']}</td>";
        } else {
            $rows .= "<td><a href='./jetty/show-boat.php?position=".$row['position']."'>{$row['boatType']}</a></td>";
        }
        
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
}
