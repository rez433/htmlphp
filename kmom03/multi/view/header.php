<?php
$uri = $_SERVER["REQUEST_URI"];
// echo "URI: $uri\n";

$uriFile = basename($uri);
// echo "URI file part: $uriFile\n";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?= $title ?></title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Demo page controller</h1>



  <hr>