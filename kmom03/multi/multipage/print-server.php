<h1>Print the content of $_SERVER</h1>
<?php 
$len = sizeof($_SERVER);
?>
<p>
There are <?= $len ?> entries in the array for $_SERVER
</p>

    <p>Första key-value: <br> Nyckel: <?php print_r(array_keys($_SERVER)[0]) ?> <br> Innehåll:  <?php print_r(array_values($_SERVER)[0]) ?> </p>
    <p>Sista key-value: <br> Nyckel: <?php print_r(array_keys($_SERVER)[$len -1]) ?> <br> Innehåll:  <?php print_r(array_values($_SERVER)[$len -1 ]) ?> </p>

<p>The content of the PHP variabel <code>$_SERVER</code> is:<p>

<pre>
<?= htmlentities(print_r($_SERVER, true)); ?>
</pre>

<p>The server is running: <?= htmlentities($_SERVER['SERVER_SIGNATURE']); ?></p>

<p>Your IP adress is: <?= htmlentities($_SERVER['REMOTE_ADDR']); ?></p>
