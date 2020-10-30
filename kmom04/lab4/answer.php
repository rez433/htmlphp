<?php

/**
 * @preserve 5f434b84e4efa07ab04b0ea809c40c4b
 *
 * 5f434b84e4efa07ab04b0ea809c40c4b
 * htmlphp
 * lab4
 * v2
 * rere20
 * 2020-09-16 08:46:16
 * v4.0.0 (2019-03-05)
 *
 * Generated 2020-09-16 10:46:16 by dbwebb lab-utility v4.0.0 (2019-03-05).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 4 - Htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP Manual](http://php.net/manual/en/langref.php).
 *
 * There you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Basic functions
 *
 * 
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create a function called `sumNumbers()` that should take 2 numbers as
 * arguments and return the sum of them.
 *
 * Answer with a call to the function using the numbers 65 and 678.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

function sumNumbers($num1, $num2)
{
    return $num1 + $num2;
}





$ANSWER = sumNumbers(65, 678);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a function called `sumArray()` that should take an array as argument
 * and return the sum of all items in the array.
 *
 * Answer with a call to the function using the array: `[3,652,9,74,7]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$arr1 = [3,652,9,74,7];

function sumArray($arr)
{
    $sum = 0;
    foreach ($arr as $i) {
        $sum += $i;
    }
    return $sum;
}



$ANSWER = sumArray($arr1);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create a function called `modArray()` that should take 2 arguments, an
 * array and a string. Replace the first item in the array with the string and
 * return the array.
 *
 * Answer with a call to the function using the arguments: `[2,134,8,35,5]`
 * and `"onion"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */



$arr2 = [2,134,8,35,5];
$str1 = 'onion';
function modArray($arr, $str)
{
    $arr[0] = $str;
    return $arr;
}





$ANSWER = modArray($arr2, $str1);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create a function called `printRange()` that should take 2 numbers as
 * arguments, start and stop. The function should add all even numbers between
 * start and stop (not including) to an array and return it.
 *
 * Answer with a call to the function using the arguments: 7 and 43.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */



function printRange($start, $stop)
{
    $arr = [];

    for ($i = $start; $i < $stop; $i++) {
        if ($i % 2 == 0) {
            array_push($arr, $i);
        }
    }

    return $arr;
}


$ANSWER = printRange(7, 43);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Create a function called `combineArrays()` that takes two arrays as
 * arguments. The function should combine the arrays to one associative array
 * and return it. The first argument is the key and the second argument is the
 * value.
 *
 * Answer with a call to the function using the arguments:
 * `["green","brown","pink","white","gray","blue"]` and
 * `["frog","bear","pig","lion","wolf","whale"]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$arr1_1 = ["green","brown","pink","white","gray","blue"];
$arr1_2 = ["frog","bear","pig","lion","wolf","whale"];


function combineArrays($arr1, $arr2)
{
    $arr = array_combine($arr1, $arr2);
    
    return $arr;
}

$ANSWER = combineArrays($arr1_1, $arr1_2);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Create a function called `euroToDollar()` that takes one argument, the euro
 * amount to convert to dollars. Count 1 Euro as 1.261215 dollars. Return the
 * dollar amount of 196 Euros.
 *
 * Answer with the result as a double with 4 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


function euroToDollar($euro)
{

    $dollar = $euro * 1.261215;
    return round($dollar, 4);
}



$ANSWER = euroToDollar(196);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Create a function called `inRange()` that takes one argument. The function
 * should return `true` if the argument is higher than 50 and lower than 100.
 * If the number is out of range, the function should return `false`. The
 * return type should be boolean.
 *
 * Use the argument 67 and answer with a call to the function.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


function inRange($arg)
{
    $tempX = false;
    if ($arg > 50) {
        $tempX = true;
    } else {
        $tempX = false;
    }
    return $tempX;
}



$ANSWER = inRange(67);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/**
 * Exercise 1.8 (1 points)
 *
 * Create a function called `calculateArea()` that takes one argument, the
 * diameter of a circle. The function should return the area of the circle,
 * with 4 decimals.
 *
 * Answer with the result if the diameter is 10. ( hint: `pi()` )
 *
 * Write your code below and put the answer into the variable ANSWER.
 */



function calculateArea($arg)
{
    return round(($arg/2) ** 2 * pi(), 4);
}


$ANSWER = calculateArea(10);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.8", $ANSWER, false);

/**
 * Exercise 1.9 (1 points)
 *
 * Create a function called `fibonacci()`. The function should use the
 * [Fibbonacci Sequence](http://en.wikipedia.org/wiki/Fibonacci_number),
 * starting with `1, 1, 2`. Return the sum of all odd numbers in the sequence,
 * when the sequence value dont exceed 1.000.000.
 *
 * Answer with a call of the function. A Fibonacci-sequence can look like
 * this: 1, 1, 2, 3, 5, 8, 13, 21, 34, 55 etc. You add the current value with
 * the last, i.e. `1+2=3, 3+2=5, 5+3=8 etc`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


function fibonacci()
{
    $fib = [];
    $sum = 0;
    for ($i = 1; $i < 1000000; $i++) {
        $len = count($fib);
        
        if ($len > 2 && $i < 1000000) {
            // print_r($i.'+'.$fib[$len - 1]);
            $i = $fib[$len -1] + $fib[$len -2];
            array_push($fib, $i);
        } else {
            array_push($fib, $i -1);
            array_push($fib, $i);
        }
    }
    foreach ($fib as $n) {
        if ($n < 1000000 && $n % 2 !== 0) {
            $sum += $n;
        }
    }
    return $sum;
}



$ANSWER = fibonacci();

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.9", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 2.1 (3 points)
 *
 * In this exercises you should use the former functions `sumArray()` and
 * `calculateArea()`. Create a new function called `calculateMany()` that
 * takes an array with numbers as argument. For every number in the array,
 * call `calculateArea()` and store the result in a new array. The last
 * position in your new array should hold the result of a call to the function
 * `calculateArea()` where you pass the sum of the whole array, you passed as
 * argument. All numbers in the resulting array should be rounded up to
 * nearest integer. Loop through the array and convert all values to nearest
 * higher integer value.
 *
 * Tip: `intval()`.
 * Note: If your result seems correct but still fails, make sure your values
 * are of the type Integer and not Float.
 *
 * Answer with a call to `calculateMany()` with the array `48, 20, 43, 46,
 * 30`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


function calculateMany($arr)
{
    $newArr = [];
    $result = [];
    foreach ($arr as $i) {
        $n = calculateArea($i);
        array_push($newArr, $n);
    }

    $tempX = sumArray($arr);
    $tempY = calculateArea($tempX);
    array_push($newArr, $tempY);
    foreach ($newArr as $i) {
        array_push($result, intval(ceil($i)));
    }

    // print_r($newArr);
    return $result;
}


$arr2_1 = [48, 20, 43, 46,30];

$ANSWER = calculateMany($arr2_1);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
