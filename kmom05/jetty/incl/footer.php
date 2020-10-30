    <footer id="site-footer">
        <a href="http://validator.w3.org/check/referer">HTML5</a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
        <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>

        <ul>
            <li>
                Copyright &copy; 2020 Reza Rezaee
            </li>
        </ul>
        <?php
            $numFiles   = count(get_included_files());
            $memoryUsed = memory_get_peak_usage(true);
            $loadTime   = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
        ?>
        <p>Time to load page: <?= round($loadTime, 4) ?> ms. Files included: <?= $numFiles ?>. Memory used: <?= $memoryUsed ?> MB.</p>
    </footer>

</body>
</html>