<?php

/**
 * @preserve 02872becc92b478d9d024c235bfc9302
 *
 * 02872becc92b478d9d024c235bfc9302
 * htmlphp
 * lab2
 * v2
 * rere20
 * 2020-09-08 13:53:19
 * v4.0.0 (2019-03-05)
 *
 * Generated 2020-09-08 15:53:20 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 2 - htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP manual](http://php.net/manual/en/langref.php).
 *
 * Here you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Strings and basic string operations
 *
 * The foundation for strings.
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create a variable called `wordOne` and assign the word `"earth"` to it.
 *
 * Create another variable called `wordTwo` and assign the word `"puppy"` to
 * it.
 *
 * Concatenate the two strings, and separate them by a hyphen `-`, into a new
 * variable called `result`.
 *
 * Answer with the result-variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$wordOne = 'earth';
$wordTwo = 'puppy';
$result = $wordOne.'-'.$wordTwo;
$answer1_1 = $result;




$ANSWER = $answer1_1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a variable, `floatNumber`, and assign the value 92.66. Concatenate
 * your variable `wordOne` with your variable `floatNumber`, separate the
 * words with a `=`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$floatNumber = 92.66;

$answer1_2 = $wordOne.'='.$floatNumber;



$ANSWER = $answer1_2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create a variable, `intNumber`, and assign the value 230. Concatenate your
 * variable `intNumber` with your variable `wordTwo`, separate the words with
 * a space. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$intNumber = 230;

$answer1_3 = $intNumber.' '.$wordTwo;


$ANSWER = $answer1_3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create the string: `"There are 230 puppy's doing some earth."` by combining
 * pure text with the values of your variables `wordOne`, `wordTwo` and
 * `intNumber`. Store the resulting text in a variable `sentence`. Answer with
 * the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$sentence = 'There are '.$intNumber.' '.$wordTwo.'\'s'.' doing some '.$wordOne.'.';

$answer1_4 = $sentence;

$ANSWER = $answer1_4;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Use `strlen()` to find the length of the variable `sentence`. Answer with
 * the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$answer1_5 = strlen($sentence);



$ANSWER = $answer1_5;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Use `substr()` to find the character at index 4 in the word `"letter"`.
 * Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$answer1_6 = substr('letter', 4, 1);



$ANSWER = $answer1_6;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Use `substr()` to find the two characters at index 3 and 4 in the word
 * `"crocodile"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$answer1_7 = substr('crocodile', 3, 2);



$ANSWER = $answer1_7;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/**
 * Exercise 1.8 (1 points)
 *
 * Use `strpos()` to find the first matching index of the character `a` in the
 * word `"badger"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$answer1_8 = strpos('badger', 'a');




$ANSWER = $answer1_8;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.8", $ANSWER, false);

/**
 * Exercise 1.9 (1 points)
 *
 * Use `strpos()` to find the first matching, (if any), index of the
 * characters `xyz` in the word `"badger"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$answer1_9 = strpos('badger', 'xyz');



$ANSWER = $answer1_9;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.9", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Conditions, booleans, if, else and else if
 *
 * 
 *
 */



/**
 * Exercise 2.1 (1 points)
 *
 * Store the boolean result of the test: `98 is less than 174` in a variable.
 * Answer with the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$test2_1 = 98 < 174;

$ansewr2_1 = $test2_1;




$ANSWER = $ansewr2_1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Answer with the boolean value of: `197 is larger than 354`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$answer2_2 = 197 > 354;


$ANSWER = $answer2_2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/**
 * Exercise 2.3 (1 points)
 *
 * Sum up the numbers: 6, 7, 5, 4 and 7. Save the result in a variable called
 * `totalSum`.
 *
 * Create an if/elseif-statement to see if `totalSum` is higher, lower or
 * equal to 21.
 *
 * Answer with the corresponding result as a string: `"higher"`, `"lower"`,
 * `"equal"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numList2_3 = [6, 7, 5, 4, 7];
$totalSum = 0;
for ($x = 0; $x < sizeof($numList2_3); $x++) {
    $totalSum += $numList2_3[$x];
}

if ($totalSum > 21) {
    $answer2_3 = 'higher';
} elseif ($totalSum < 21) {
    $answer2_3 = 'lower';
} else {
    $answer2_3 = 'equal';
}



$ANSWER = $answer2_3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.3", $ANSWER, false);

/**
 * Exercise 2.4 (1 points)
 *
 * Create an if-statement that checks if a value is between (or equal to) 24
 * and  36. Use the variable `totalSum` from last exercise to test the
 * if-statement. Answer with a boolean `true` if the value is between the
 * values, otherwise respond with `false`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


if ($totalSum > 24 && $totalSum < 36) {
    $answer2_4 = true;
} else {
    $answer2_4 = false;
}




$ANSWER = $answer2_4;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.4", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Iteration and loops
 *
 * For-loops and while-loops.
 *
 */



/**
 * Exercise 3.1 (1 points)
 *
 * Create a while-loop that adds 3 to the number 63, 21 times. Use variables
 * to store the numbers. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$baseNum = 63;

for ($x = 0; $x < 21; $x++) {
    $baseNum += 3;
}

$answer3_1 = $baseNum;



$ANSWER = $answer3_1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, false);

/**
 * Exercise 3.2 (1 points)
 *
 * Create a while-loop that subtracts 4.29 from the number 973 until the
 * number is between (not equal to) 34 and 44. Answer with the final result as
 * a float, rounded to 2 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$baseNum2 = 973;
$x = true;

while ($x) {
    $baseNum2 -= 4.29;
    if ($baseNum2 < 44 && $baseNum2 > 34) {
        $x = false;
    }



}

$answer3_2 = round($baseNum2, 2);



$ANSWER = $answer3_2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.2", $ANSWER, false);

/**
 * Exercise 3.3 (1 points)
 *
 * Create a for-loop that iterates from 0 to (including) 16. Add the integer
 * value for each iteration to a string and separate each item with a `,`
 * (comma). Answer with the final string without an ending `,`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$answer3_3 = '';

for ($x = 0; $x <=16; $x++) {
    if ($x == 0) {
        $answer3_3 = $answer3_3.$x;
    } else {
        $answer3_3 = $answer3_3.','.$x;
    }
    
}



$ANSWER = $answer3_3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 4.1 (3 points)
 *
 * Create a for-loop that goes through (and including) the numbers 34 to 44.
 * If the current number is even, you should multiply it with PI and add it to
 * a variable `res`. If the current number is odd, you should subtract the
 * square root of it, from the variable `res`. If the current number ends with
 * a zero, then ignore it. Answer with the final result of `res` and round it
 * to the nearest higher integer value.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$res = 0;

for ($x = 34; $x <= 44; $x++) {
    if ($x %2 == 0 && $x % 10 > 0) {
        $res += $x * pi();
    } elseif ($x % 2 > 0) {
        $res -= sqrt($x);
    }
}

$answer4_1 = (int)ceil($res);



$ANSWER = $answer4_1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
