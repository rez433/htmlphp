<?php

/**
 * @preserve d62b5c5dbf104ddba717b71243daad33
 *
 * d62b5c5dbf104ddba717b71243daad33
 * htmlphp
 * lab3
 * v2
 * rere20
 * 2020-09-09 17:46:26
 * v4.0.0 (2019-03-05)
 *
 * Generated 2020-09-09 19:46:27 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 3 - Htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP Manual](http://php.net/manual/en/langref.php).
 *
 * There you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Arrays - with numeric index
 *
 * 
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create an array, called `countries` with the items: `[Russia, France,
 * Norway]`.
 *
 * Answer with the second item in the array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */



$countries = array('Russia', 'France', 'Norway');


$ANSWER = $countries[1];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a new array called `capitals` with the items: `[Moscow, Paris,
 * Oslo]`.
 *
 * Answer with a string containing each country from the `countries`-array
 * followed by the corresponding capital. Use the format `"country = capital,
 * country = capital..."`
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$capitals = array('Moscow', 'Paris', 'Oslo');

$answer1_2 = '';
for ($x = 0; $x < sizeof($countries); $x++) {
    if ($x == 0) {
        $answer1_2 = $answer1_2.$countries[$x].' = '.$capitals[$x];
    } else {
        $answer1_2 = $answer1_2.', '.$countries[$x].' = '.$capitals[$x];
    }
}

$ANSWER = $answer1_2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create an array, called `numbers1` with the items: `[285, 11, 9.75, 9,
 * 2216]`. Answer with the sum of the first two items.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1 = array(285, 11, 9.75, 9, 2216);

$answer1_3 = $numbers1[0] + $numbers1[1];


$ANSWER = $answer1_3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Use your arrays `numbers1` and `capitals` to change item at index 1 in
 * `numbers1` to the item at index 1 in `capitals`. Answer with the array
 * `numbers1`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1[1] = $capitals[1];




$ANSWER = $numbers1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Use your array `countries` and concatenate the first and the last item as a
 * string. Separate the items with a hyphen `-` and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$answer1_4 = $countries[0].'-'.$countries[sizeof($countries)-1];




$ANSWER = $answer1_4;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Arrays - with keys
 *
 * 
 *
 */



/**
 * Exercise 2.1 (1 points)
 *
 * Use your `countries` and `capitals` arrays and create another array called
 * `keyArray`. The country should be the key and the capital should be the
 * value. Answer with the new array. (hint: `"country" => "capital"`)
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$keyArray = array_combine($countries, $capitals);



$ANSWER = $keyArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Add the key `"Jamaica"` with the value `"Kingston"` to your `keyArray`.
 * Answer with the updated array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$arr1 = array('Jamaica'=>'Kingston');

$answer2_2 = $keyArray + $arr1;





$ANSWER = $answer2_2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/**
 * Exercise 2.3 (1 points)
 *
 * Answer with the value for the key `"France"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = $keyArray['France'];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Arrays - built-in functions
 *
 * 
 *
 */



/**
 * Exercise 3.1 (1 points)
 *
 * Find the number of items in the array `[324, 36, 20.02, 8, 4998]`. Answer
 * with the result as an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$arr2 = array(324, 36, 20.02, 8, 4998);




$ANSWER = sizeof($arr2);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, false);

/**
 * Exercise 3.2 (1 points)
 *
 * Sort the array `[324, 36, 20.02, 8, 4998]` in decending order. Make sure
 * that it does maintain the key association. Answer with the sorted array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$arr3 = $arr2;
arsort($arr3);


$ANSWER = $arr3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.2", $ANSWER, false);

/**
 * Exercise 3.3 (1 points)
 *
 * Use `pop()` on the array `[324, 36, 20.02, 8, 4998]` and answer with the
 * popped item.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$popedItem1 = array_pop($arr2);



$ANSWER = $popedItem1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.3", $ANSWER, false);

/**
 * Exercise 3.4 (1 points)
 *
 * Use `push()` on the array `[285, 11, 9.75, 9, 2216]` and insert the number
 * 3. Answer with the resulting array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$arr3 = [285, 11, 9.75, 9, 2216];

array_push($arr3, 3);

$ANSWER = $arr3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.4", $ANSWER, false);

/**
 * Exercise 3.5 (1 points)
 *
 * Copy your array `countries` to a new array called `newArray`. Use `shift()`
 * on the new array and answer with the shifted item.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$newArray = $countries;
$newArr1 = array_shift($newArray);




$ANSWER = $newArr1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.5", $ANSWER, false);

/**
 * Exercise 3.6 (1 points)
 *
 * Use `unshift()` on your `newArray` add the items `"Oregon"` and `"Wyoming"`
 * in the beginning of the array. Answer with the modified array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$newArr2 = array_unshift($newArray, 'Oregon', 'Wyoming');

print_r($newArr2);

$ANSWER = $newArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.6", $ANSWER, false);

/**
 * Exercise 3.7 (1 points)
 *
 * Reverse the order of the array `[324, 36, 20.02, 8, 4998]`. Answer with the
 * modified array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$reversedArr1 = array_reverse([324, 36, 20.02, 8, 4998]);



$ANSWER = $reversedArr1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.7", $ANSWER, false);

/**
 * Exercise 3.8 (1 points)
 *
 * Use `implode()` on your `capital`-array and answer with a string where each
 * item is separated by a hyphen `-`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$arr2str = implode('-', $capitals);



$ANSWER = $arr2str;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.8", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Arrays - for-each loop
 *
 * 
 *
 */



/**
 * Exercise 4.1 (1 points)
 *
 * Create an array, called `numbers1` with the items: `[31, 60, 54, 7, 13, 2,
 * 9, 68, 5, 2]`. Use a for-each loop to sum each item with 16 and put them in
 * a new array called `summedNumbers1`. Answer with the new array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1 = [31, 60, 54, 7, 13, 2, 9, 68, 5, 2];

$summedNumbers1 = [];

foreach ($numbers1 as $n) {
    array_push($summedNumbers1, $n+16);
}



$ANSWER = $summedNumbers1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, false);

/**
 * Exercise 4.2 (1 points)
 *
 * Create a new array called `numbers2` with the items `[21, 5, 4, 6, 76, 2,
 * 18, 85, 55, 1]`. Use at least a for-each loop to add all numbers larger
 * than 20 to a new array called `largeNumbers`. Answer with the new array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers2 = [21, 5, 4, 6, 76, 2, 18, 85, 55, 1];

$largeNumbers = [];
foreach ($numbers2 as $n) {
    if ($n > 20) {
        array_push($largeNumbers, $n);
    }
}



$ANSWER = $largeNumbers;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.2", $ANSWER, false);

/**
 * Exercise 4.3 (1 points)
 *
 * Create an array with the keys: `"one"`, `"two"`, `"three"`, `"four"` and
 * `"five"` and the values: 1, 2, 3, 4, 5. Use a foreach-loop to add all keys
 * and values to an array in the format: `["key"=value, "key"=value, etc]`.
 * Use `implode()` to make the answer a string with all items separated by a
 * comma `,`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$arr_numb1 = ['one' => 1,'two' => 2,'three' => 3, 'four' => 4, 'five' => 5];

$arr_numb2 = [];

foreach ($arr_numb1 as $key => $val) {
    array_push($arr_numb2, $key.'='.$val);
}

$answer4_3 = implode(',', $arr_numb2);




$ANSWER = $answer4_3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 5 . Switch-case
 *
 * [PHP Manual about
 * switch](http://se1.php.net/manual/en/control-structures.switch.php)
 *
 */



/**
 * Exercise 5.1 (1 points)
 *
 * Create a switch-case statement to decide which continent a certain country
 * resides in. Use the countries: `"Sweden, Brazil, China, Australia, Canada"`
 * and the continents:
 *     `"Europe, South America, Asia, Oceania, North America"`.
 *
 * Answer with a test on the country: `"Australia"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$continents = ['Europe', 'South America', 'Asia', 'Oceania', 'North America'];

$country = ['Sweden', 'Brazil', 'China', 'Australia', 'Canada'];

$answer5_1 = '';

switch ('Australia') {
    case $country[0]:
        $answer5_1 = $continents[0];
        break;
    case $country[1]:
        $answer5_1 = $continents[1];
        break;
    case $country[2]:
        $answer5_1 = $continents[2];
        break;
    case $country[3]:
        $answer5_1 = $continents[3];
        break;
    case $country[4]:
        $answer5_1 = $continents[4];
        break;

}


$ANSWER = $answer5_1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("5.1", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 6 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 6.1 (3 points)
 *
 * A switch-case statement can handle multiple cases with the same result.
 * Create a new switch-case statement that decides which is the corresponding
 * continent. Use the countries: `"Sweden, Denmark, Finland, Brazil, China,
 * Australia, Canada"` and the continents: `"Europe, South America, Asia,
 * Oceania, North America"`.
 *
 * Answer with a test on the country: `"Denmark"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$country2 = ['Sweden', 'Denmark', 'Finland', 'Brazil', 'China', 'Australia', 'Canada'];

$answer6_1 = '';

switch ('Denmark') {
    case $country2[0]:
        $answer6_1 = $continents[0];
        break;
    case $country2[1]:
        $answer6_1 = $continents[0];
        break;
    case $country2[2]:
        $answer6_1 = $continents[0];
        break;
    case $country2[3]:
        $answer6_1 = $continents[1];
        break;
    case $country2[4]:
        $answer6_1 = $continents[2];
        break;
    case $country2[5]:
        $answer6_1 = $continents[3];
        break;
    case $country2[6]:
        $answer6_1 = $continents[4];
        break;
}




$ANSWER = $answer6_1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.1", $ANSWER, false);

/**
 * Exercise 6.2 (3 points)
 *
 * Sort the array `[285, 11, 9.75, 9, 2216]` in ascending order. Make sure
 * that it does not maintain the key association. Answer with the sorted
 * array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$sorted_numbers=array(285, 11, 9.75, 9, 2216);
sort($sorted_numbers);




$ANSWER = $sorted_numbers;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.2", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
