<?php

/**
 * @preserve 24b674689b32bc37b7992e7ca1e859c8
 *
 * 24b674689b32bc37b7992e7ca1e859c8
 * htmlphp
 * lab6
 * v2
 * rere20
 * 2020-10-12 22:06:13
 * v4.0.0 (2019-03-05)
 *
 * Generated 2020-10-13 00:06:13 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 6 - Htmlphp
 *
 * In this lab you will be working with a SQLite database file: `myDB.sqlite`
 * and PDO.
 *
 * Do not forget to check the [PHP Manual on
 * PDO](http://php.net/manual/en/book.pdo.php)
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Working with SQLite and PDO
 *
 * The database has one table called `people`.
 *
 * The table 'people' has six columns:
 *
 * > `id`, `firstName`, `lastName`, `born`, `cityOfBirth`, `countryOfBirth`.
 *
 */

$fileName = __DIR__ . "/myDB.sqlite";
$dsn = "sqlite:$fileName";

try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>$dsn<br>";
    throw $e;
}

/**
 * Exercise 1.1 (1 points)
 *
 * Find the firstnames of the people born in USA. Answer with an array
 * containing their names.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = ("SELECT firstName FROM people WHERE countryOfBirth LIKE ?");
$stmt = $db->prepare($sql);
$params = ['USA'];
$stmt->execute($params);

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

$ans1_1 = [];
foreach ($res as $x) {
    array_push($ans1_1, $x['firstName']);
}


$ANSWER = $ans1_1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Find the first name and last name of the person born 1905.
 * Answer with a string in the format: `"Firstname Lastname"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */



$sql = ("SELECT firstName, lastName FROM people WHERE born LIKE ?");
$stmt = $db->prepare($sql);
$params = [1905];
$stmt->execute($params);

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

$ans1_2 = '';
foreach ($res as $x) {
    $ans1_2 = $x['firstName'].' '.$x['lastName'];
}


$ANSWER = $ans1_2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Sum the years the persons with the lastnames `Blanchett` and `Clarke` were
 * born. Answer with an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = ("SELECT born FROM people WHERE lastName LIKE ? or lastName like ?");
$stmt = $db->prepare($sql);
$params = ['Blanchett', 'Clarke'];
$stmt->execute($params);

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

$ans1_3_1 = [];
foreach ($res as $x) {
    array_push($ans1_3_1, $x['born']);
}


$ans1_3 = $ans1_3_1[0] + $ans1_3_1[1];

$ANSWER = $ans1_3;


// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Count the number of entries in the table `people`. Answer with an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = ("SELECT COUNT(id) from people");
$stmt = $db->prepare($sql);
$stmt->execute();

$res = $stmt->fetch(PDO::FETCH_ASSOC);

$result= 0;
foreach ($res as $x => $v) {
    $result = (int)$v;
}



$ANSWER = $result;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Find which country `(countryOfBirth)` the oldest person was born in. Answer
 * with a string.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = ("SELECT MIN(born), countryOfBirth from people");
$stmt = $db->prepare($sql);
$stmt->execute();

$res = $stmt->fetch(PDO::FETCH_ASSOC);

$result = [];

foreach ($res as $x => $v) {
    array_push($result, $v);
}


$ANSWER = $result[1];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * What is the average value of the column `born`? Round the value and answer
 * with an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = ("SELECT ROUND(AVG(born)) from people");
$stmt = $db->prepare($sql);
$stmt->execute();

$res = $stmt->fetch(PDO::FETCH_ASSOC);

$result = 0;

foreach ($res as $x => $v) {
    $result = (int)$v;
}

$ANSWER = $result;


// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Find the youngest person born in USA. Which city is he/she born in? Answer
 * with a string.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = ("SELECT MAX(born), cityOfBirth from people where countryOfBirth like ?");
$stmt = $db->prepare($sql);
$params = ['USA'];
$stmt->execute($params);

$res = $stmt->fetch(PDO::FETCH_ASSOC);

$result = [];

foreach ($res as $x => $v) {
    array_push($result, $v);
}


$ANSWER = $result[1];



// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 2.1 (3 points)
 *
 * Get the first name and lastname of all persons in the database. Order them
 * by their last name, alphabetically and ascending.
 *
 * Answer with an array of strings, like this:
 *
 * > `["lastName firstName", "lastName firstName"]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = "Replace this text with the variable holding the answer.";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
