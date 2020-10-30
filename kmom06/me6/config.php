<?php
/**
 * Configuration file with common settings.
 */
error_reporting(-1);              // Report all type of errors
ini_set("display_errors", 1);     // Display all errors

$baseTitle = " | htmlphp";

// Start the named session,
// the name is based on the path to this file.
$name = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($name);

session_start();

// dsn 
$fileName = __DIR__ . '/db/deno.sqlite';
$dsn = "sqlite:$fileName";


// $url1 = substr($_SERVER['REQUEST_URI'], 0, 12);
// echo $url1;
$url1 = substr($_SERVER['REQUEST_URI'], 0, 45);
