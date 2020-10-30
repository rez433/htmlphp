<?php
/**
 * This is a page controller for a multipage. You should name this file
 * as the name of the pagecontroller for this multipage. You should then
 * add a directory with the same name, excluding the file suffix of ".php".
 * You then then have several multipages within the same directory, like this.
 *
 * multipage.php
 * multipage/
 *
 * some-test-page.php
 * some-test-page/
 */
 // Include the configuration file
 require __DIR__ . "/config.php";

 // Include essential functions
 require __DIR__ . "/src/functions.php";

// Get what subpage to show, defaults to index
$pageReference = $_GET["page"] ?? "index";
// if ($page) {
//     require $page["file"];
// }else {
//     echo 'You have selected a page reference ' .htmlentities($pageReference). ' that does not map to an actual page.';
// }
     



// Get the filename of this multipage, exkluding the file suffix of .php
$base = basename(__FILE__, ".php");

// Create the collection of valid sub pages.
$pages = [
    "Me" => [
        "title" => "Me page",
        "file" => __DIR__ . "/$base/me.php",
    ],
    "About" => [
        "title" => "About page",
        "file" => __DIR__ . "/$base/about.php",
    ],
    "Redovisning" => [
        "title" => "Redovisning",
        "file" => __DIR__ . "/$base/report.php",
    ],
    "index" => [
        "title" => "Intro to this multipage.",
        "file" => __DIR__ . "/$base/index.php",
    ],
    "print-get" => [
        "title" => "Print the content of \$_GET variable.",
        "file" => __DIR__ . "/$base/print-get.php",
    ],
    "get-samples" => [
        "title" => "Try various links using GET queryparams.",
        "file" => __DIR__ . "/$base/get-samples.php",
    ],
    "print-server" => [
        "title" => "Print the content of \$_SERVER variable.",
        "file" => __DIR__ . "/$base/print-server.php",
    ],
    "Uppgift-6" => [
        "title" => "Print the length of \$_SERVER variable.",
        "file" => __DIR__ . "/$base/uppgift-6.php",
    ],
];

// Get the current page from the $pages collection, if it matches
$page = $pages[$pageReference] ?? null;

// Base title for all pages and add title from selected multipage
$title = $page["title"] ?? "404";
$title .= " | Test multipage";

// Render the page
require __DIR__ . "/incl/header.php";
require __DIR__ . "/incl/multipage.php";
require __DIR__ . "/incl/footer.php";
