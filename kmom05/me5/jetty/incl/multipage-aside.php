    <aside>
        <?php
            $pageUrl = substr(basename($_SERVER['REQUEST_URI']), 19);
        ?>
        <nav>
            <ul>
            <?php foreach ($pages as $key => $value) : ?>
                <?php if ($key !== 'tack' && $key !== 'process') : ?>
                    <li>
                        <a href="?page=<?= $key ?>" class="<?= $pageUrl == "$key" ? "selected" : ""; ?>">
                            <?= $value["title"] ?>
                        </a>
                    </li>
                <?php endif ?>
            <?php endforeach; ?>
            </ul>
        </nav>
    </aside>
