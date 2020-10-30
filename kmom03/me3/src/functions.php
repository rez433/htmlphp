<?php
function loadingTime() 
{
    $timestampFirst = $_SERVER["REQUEST_TIME_FLOAT"];
    echo "Start: ".round($timestampFirst, 3)."<br>";

    $timestampLast = microtime(true);
    echo "End: ".round($timestampLast, 3)."<br>";

    $diff = $timestampLast - $timestampFirst;
    echo "Diff: ".round($diff, 3)."<br>";

    $filesIncluded = get_included_files();
    $numFiles = count($filesIncluded);
    echo "Files included: $numFiles<br>";


    $memoryMax = memory_get_peak_usage();
    $memoryCurrent = memory_get_usage();
    $memoryLimit = ini_get("memory_limit");
    echo "Memory: <br>";
    echo "Max: $memoryMax<br>";
    echo "Current: $memoryCurrent<br>";
    echo "Limit: $memoryLimit<br>";

    // var_dump($_SERVER);
    echo "<br>";

    // Create current url
    // $currentUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    // var_dump('find: '.$currentUrl);
}
