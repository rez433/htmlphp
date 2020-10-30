<!-- <aside>
    <nav>
        <ul>
        <?php foreach ($pages as $key => $value) : ?>
            <li><a href="?page=<?= $key ?>"><?= $value["title"] ?></a></li>
        <?php endforeach; ?>
        </ul>
    </nav>
</aside>

 -->

<aside>
    <?php 
        $pageUrl = substr(basename($_SERVER['REQUEST_URI']), 19);
    ?>
    <nav>
        <ul>
        <?php foreach ($pages as $key => $value) : ?>
            <li>
                <a href="?page=<?= $key ?>" class="<?= $pageUrl == "$key" ? "selected" : ""; ?>">
                    <?= $value["title"] ?>
                </a>
            </li>
        <?php endforeach; ?>
        </ul>
    </nav>
</aside>
