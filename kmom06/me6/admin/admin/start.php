<?php
require __DIR__ . "/../../config.php";

require __DIR__ . "/../../src/functions.php";

$db = connectToDatabase($dsn);

$sql = [];
$sql[] = "DROP TABLE if EXISTS dinasaurs;";

$sql[] = <<<EOD
CREATE TABLE IF NOT EXISTS dinasaurs (
	"id" INTEGER PRIMARY KEY,
	"type" TEXT,
	"length" INTEGER,
	"weight" INTEGER
);
EOD;

$sql[] = <<<EOD
INSERT INTO "dinasaurs" VALUES (1,'Triassic',8,5000);
INSERT INTO "dinasaurs" VALUES (2,'Jurassic',25,10000);
INSERT INTO "dinasaurs" VALUES (3,'Tyrannosaurus',40,19000);
INSERT INTO "dinasaurs" VALUES (4,'Hypacrosaurus',30,15000);
INSERT INTO "dinasaurs" VALUES (5,'Hesperornis',5,3000);
COMMIT;

EOD;

foreach ($sql as $query) {
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rowCount[] = $stmt->rowCount();
}



echo '<p>Fresh Table Created</p>';
echo '<p><a href="../admin.php?page=get-table">Back to table</a></p>';
