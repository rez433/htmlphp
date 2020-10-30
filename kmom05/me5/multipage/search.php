<?php

require __DIR__ . "/../incl/header.php";
require __DIR__ . "/../config.php";
require __DIR__ . "/../src/functions.php";

// Get incoming from search form
$search = isset($_GET['search'])
    ? $_GET['search']
    : null;


    echo <<<EOD

    <form id="search-form">
        <input type="search" name="search" placeholder="Enter substring to search for, use % as wildcard." value=$search>
        <input type="submit" value="Search">
    </form>
    <form id="show-form">
        <a href="search.php?search=%25">Click here </a> to show all the results
    </form>
    EOD;


// Break script if empty $search
if (is_null($search)) {
    // exit("<p>Nothing to display, please enter a searchstring.");
    
}

$db = connectToDatabase($dsn);

// Prepare the SQL statement
$sql = "SELECT * FROM dinasaurs WHERE type LIKE ?";
$stmt = $db->prepare($sql);

$params = [$search];

$stmt->execute($params);

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);



// Loop through the array and gather the data into table rows
printJettyResultsetToHTMLTable($res);


require __DIR__ . "/../incl/footer.php";
