<?php
include 'incl/header.php';
?>

<main>
    <article>
        <h2>Redovisning kmom10:</h2>
        <p>
            Jag valde "Appendix 2 Projekt NVM" som min slutprojekt för kursen htmlphp. Grunderna för detta moment är: <br>
            <ul>
                <li>Väl fungerande webbplats</li>
                <li>Responsiv webbplats</li>
                <li>Kodstruktur och dokumentation
                    <ol>
                        <li>Berätta om din kodstruktur som ligger bakom din webbplats.</li>
                        <li>Berätta hur väl din sida fungerar responsivt.</li>
                        <li>Ge förslag på ett par förbättringar du ser att man skulle kunna göra på din webbplats, i ett fiktivt vidareutvecklingsprojekt.</li>
                    </ol>
                </li>
            </ul>
        </p>
        <br>
        <h3>Väl fungerande webbplats</h3>
        <p>
            Webbplatsen fungerar felfritt, och jag har testat det i chrome och firefox samt edge browsers. All data kommer från databasen som ligger under mappen "db".<br>
            Jag bestämde mig att inte använda sido navbar då den känns som gammalt design och istället använde gjorde en gallery av alla artiklar/objekt som liknar "bootstrap card". Det ser bättre ut och navigationen är mycket enklare i både mobil och desktop.<br>
            Bilderna ligger under mappen "img" och jag har använt bilderna i mapp 800 för att visa bilderna i article och väg object. och använde bilderna under mapp 250 som thumbnail. Jag har lagt till en default bild för de artiklar som saknar bild och gör en if-statement där om "$row['image1']" saknas då används default bilden i listan. 
        </p>
        <pre>
if ($row["image1"]) {
    $src = 'img/250/' . $row['image1'];
    $alt = $row['image1Alt'];
} else {
    $src = 'img/default.png';
    $alt = 'default road image';
}
        </pre>

        <br>

        <h3>Responsiv webbplats</h3>
        <p>
            Jag använde mig av felxbox i css. Sidan är responsive och anpassar sig efter mobil, tablet och desktop skärmar. I desktop visas tre "card" per rad i listan. i mobile visas en card per rad och i tablet visas 2 card per rad.<br>
            Använde "substr" för att slica en del av texten för artikel/objekt så att den får plats i card. i mobil skärmar visas bara 63 karaktär av texten så att den får plats i smålare card. Använde "media query" och i mobil skärmar visas inte "$roadData" och istället visas "$roadDataMbile" och i större skärmar tvärtom. <br>
            Alla bilder är under mappen 800 och har 100% bredd när en artikel/objekt visas. 
        </p>
        <pre>
$roadTitle = '';
$name = $row['name'];
if ($name !== 'start' && $name !== 'nattraby-vagmuseum') {
    $roadTitle = $row['title'];
    $roadD = str_replace($roadTitle, '', $row['data']);
    $roadD = strip_tags($roadD, 'p');

    $roadData = substr($roadD, 0, 190);
    $roadDataMobile = substr($roadD, 0, 63);
}
        </pre>

        <br>

        <h3>Kodstruktur och dokumentation</h3>
        <h4>1- Berätta om din kodstruktur som ligger bakom din webbplats.</h4>
        <p>
            Jag tänkte att inte använda sido navbar och istället göra en gallery av card där visas en bild, title och kort text om varje objekt/artikel. <br>
            1) Hem: i första sidan visas första artikeln om "Nättraby Vägmuseum" med två bilder. <br>
            2) Artiklar: Artiklar är en gallery av card från alla artiklar i databasen förutom första sidan och "Om Nättraby Vägmuseum" som har egna sidor.<br>
            2-1) article.php : om man klickar på bild, titel eller "read more" i varje card, sidan om den specefik artikel kommer upp.<br>
            3) Vägar: Vägar är en gallery av card från alla objkt i databasen. <br>
            3-1) road_details.php : om man klickar på bild, titel eller "read more" i varje card, sidan om den specefik objekt/väg kommer upp.<br>
            4) OM: Om är sidan "Om Nättraby Vägmuseum" där den hämtar all information från databasen.<br>
            5) Kontakt: kontakt är sidan där hämtas och visas kontakt sidan från databasen. <br>
            så här ser ut den card som jag skapat i gallerien:
        </p>
        <pre>
$rows .= "
    &lt;article class='card'&gt;
        &lt;div class='thumbnail'&gt;
            &lt;a href='article.php?id=$name'&gt;
                &lt;img src='$src' alt='$alt' /&gt;
            &lt;/a&gt;
        &lt;/div&gt;
        &lt;div class='card-text'&gt;
            &lt;h4 class='h4title'&gt;&lt;a href='article.php?id=$name'&gt;$roadTitle&lt;/a&gt;&lt;/h4&gt;
            &lt;p class='road-data'&gt; 
                $roadData &lt;a href='article.php?id=$name'&gt; &lt;span style='color:red'&gt;read more&lt;/span&gt;&lt;/a&gt;
            &lt;/p&gt;
            &lt;p class='road-data-mobile'&gt; 
                &lt;a href='article.php?id=$name'&gt;
                    $roadDataMobile
                &lt;/a&gt;
            &lt;/p&gt;

        &lt;/div&gt;
        
    &lt;/article&gt;
";
        </pre>

        <h4>2- Berätta hur väl din sida fungerar responsivt. </h4>
        <p>
            Sidan är anpassad efter 3 skärmstorleker. Stor (desktop), mellan(tablet) och liten (mobil). Alla bilder är responsiva och visas i rätt storlek.
        </p>

        <h4>Ge förslag på ett par förbättringar du ser att man skulle kunna göra på din webbplats, i ett fiktivt vidareutvecklingsprojekt.</h4>
        <p>
            Man kan göra lite börbättringar men det krävs JavaScript i sidan för att göra den mer dynamik. <br>
            1- menu (navbar) kan blir bättre med hjälp av JavaScript. Det går att göra menyn till en "hamburger meny" så att den visas bra i mobila skärmar. <br>
            2- en button för att ändra theman från light till dark och tvärrtom vilken kräver JavaScript. <br>
            3- att implementerar google maps api i sidan med hjälp av javascript. <br>
        </p>

    </article>
</main>


<?php
include 'incl/footer.php';
