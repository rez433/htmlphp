<?php

$arr_len = [];
foreach ($_SERVER as $key => $val) {
    $len = strlen($val);
    $arr_len[$key] = $len;
}

$newArr = $arr_len;
arsort($arr_len);
$longest = array_keys($arr_len)[0];
$newArr[$longest] = $_SERVER[$longest];
//print_r($newArr);
?>

<pre>
<?= htmlentities(print_r($newArr, true)); ?>
</pre>
