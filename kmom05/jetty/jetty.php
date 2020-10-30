<?php

// Get what subpage to show, defaults to index
$pageReference = $_GET["page"] ?? "index";


// Get the filename of this multipage, exkluding the file suffix of .php
$base = basename(__FILE__, ".php");

// Create the collection of valid sub pages.
$pages = [
    "index" => [
        "title" => "Intro to this multipage.",
        "file" => __DIR__ . "/$base/index.php",
    ],
    "connect" => [
        "title" => "connect to database",
        "file" => __DIR__ . "/$base/connect.php",
    ],
    "get-table" => [
        "title" => "Show the database table",
        "file" => __DIR__ . "/$base/get-table.php",
    ],
    // "show-boat" => [
    //     "title" => "Show a boat",
    //     "file" => __DIR__ . "/$base/show-boat.php",
    // ]
];

// Get the current page from the $pages collection, if it matches
$page = $pages[$pageReference] ?? null;

// Base title for all pages and add title from selected multipage
$title = $page["title"] ?? "404";
$title .= " | Test multipage";
require __DIR__ . "/incl/header.php";
require __DIR__ . "/incl/multipage.php";
require __DIR__ . "/incl/footer.php";
