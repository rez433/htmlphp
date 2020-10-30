<style>
table {
    border: 1px solid #ccc;
    border-collapse: collapse;
    margin: 3rem auto;
}

p {
    margin-top: 3rem;
    text-align: center;
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
require __DIR__ . "/../src/functions.php";

$position = $_GET['position'];



$fileName = "../db/boatclub.sqlite";
$dsn = "sqlite:$fileName";

$db = connectToDatabase($dsn);
$res = prepareTable($db, $position);

printJettyResultsetToHTMLTable($res);
