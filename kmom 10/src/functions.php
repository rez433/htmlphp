<?php
function connectToDatabase($dsn)
{
    // Open the database file and catch the exception if it fails.
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }
    return $db;
}

function prepareTable($db, $table, $id = null)
{
    if ($id !== null) {
        $stmt = $db->prepare("SELECT * FROM $table WHERE name LIKE ?");
        $params = [$id];
        $stmt->execute($params);
    } else {
        $stmt = $db->prepare("SELECT * FROM $table");
        $stmt->execute();
    }

    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $res;
}

function showArticle($res)
{
    $rows = '';
    $rows = null;
    $src = null;
    $alt = null;
    $description = null;
    $img = null;
    if (count($res) == 1) {
        foreach ($res as $row) {
            if ($row["image1"]) {
                $src = 'img/800/' . $row['image1'];
                $alt = $row['image1Alt'];
                $desc = $row['image1Text'];
                $img = "<img class='road-pic-800' src='$src' alt='$alt'>";
                $description = "<div class='desc'> $desc </div>";
            }
            $rows = "
                <div>
                    <h2>{$row['title']}</h2>
                    <p>{$row['gps']}</p>
                    <div>
                        $img
                        $description
                        
                    </div>
                    <div class='road-history'>
                        {$row['data']}
                    </div>                   
                </div>
            ";
        }
    }
    echo $rows;
}


function showArticleList($res)
{
    $rows = '';
    $rows = null;
    $src = null;
    $alt = null;
    if (count($res) > 1) {
        foreach ($res as $row) {

            $roadTitle = '';
            $name = $row['name'];
            if ($name !== 'start' && $name !== 'nattraby-vagmuseum') {
                $roadTitle = $row['title'];
                $roadD = str_replace($roadTitle, '', $row['data']);
                $roadD = strip_tags($roadD, 'p');

                $roadData = substr($roadD, 0, 190);
                $roadDataMobile = substr($roadD, 0, 63);
            }

            if ($row["image1"]) {
                $src = 'img/250/' . $row['image1'];
                $alt = $row['image1Alt'];
            } else {
                $src = 'img/default.png';
                $alt = 'default road image';
            }

            if ($name !== 'start' && $name !== 'nattraby-vagmuseum') {
                $rows .= "
                    <article class='card'>
                        <div class='thumbnail'>
                            <a href='article.php?id=$name'>
                                <img src='$src' alt='$alt' />
                            </a>
                        </div>
                        <div class='card-text'>
                            <h4 class='h4title'><a href='article.php?id=$name'>$roadTitle</a></h4>
                            <p class='road-data'> 
                                $roadData <a href='article.php?id=$name'> <span style='color:red'>read more</span></a>
                            </p>
                            <p class='road-data-mobile'> 
                                <a href='article.php?id=$name'>
                                    $roadDataMobile
                                </a>
                            </p>

                        </div>
                        
                    </article>
                ";
            }
        }
    }
    echo $rows;
}

function showRoadList($res)
{
    $rows = null;
    if (count($res) == 1) {
        foreach ($res as $row) {
            $image2 = null;
            $image2Text = null;
            $image2Alt = null;
            if ($row['image2']) {
                $image2 = $row['image2'];
                $image2Text = $row['image2Text'];
                $image2Alt = $row['image2Alt'];
            }
            $rows = "
                <div>
                    <h2>{$row['title']}</h2>
                    <p>{$row['gps']}</p>
                    <div>
                        <img class='road-pic-800' src='img/800/{$row["image1"]}' alt='{$row['image1Alt']}'>
                        <div class='desc'> {$row['image1Text']} </div>
                    </div>
                    <div class='road-history'>
                        {$row['data']}
                    </div>
                    <div>
                        <img class='road-pic-800' src='img/800/{$image2}' alt='{$image2Alt}'>
                        <div class='desc'> {$image2Text} </div>
                    </div>
                </div>
            ";
        }
    } else {
        foreach ($res as $row) {
            $pattern1 = "'<h2>(.*?)</h2>'si";
            preg_match($pattern1, $row['data'], $match);
            $roadTitle = $match[1];
            $roadD = str_replace($roadTitle, '', $row['data']);
            $roadD = strip_tags($roadD, 'p');

            $roadData = substr($roadD, 0, 190);
            $roadDataMobile = substr($roadD, 0, 65);
            $rows .= "
                <article class='card'>
                    <div class='thumbnail'>
                        <a href='road_details.php?id={$row['name']}'>
                            <img src='img/250/{$row['image1']}' alt='{$row['image1Alt']}'/>
                        </a>
                    </div>
                    <div class='card-text'>
                        <h4 class='h4title'><a href='road_details.php?id={$row['name']}'>$roadTitle</a></h4>
                        <p class='road-data'> 
                            $roadData <a href='road_details.php?id={$row['name']}'> <span style='color:red'>read more</span></a>
                        </p>
                        <p class='road-data-mobile'> 
                            <a href='road_details.php?id={$row['name']}'>
                                $roadDataMobile
                            </a>
                        </p>

                    </div>
                    
                </article>
            ";
        }
        // var_dump($rows);
    }
    echo $rows;
}
