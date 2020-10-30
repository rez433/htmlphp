<?php
// $title = "Redovisning | htmlphp";
// include("incl/header.php");

?>
<!-- <main> -->
    <!-- <article> -->
        <h2>Redovisning kmom01:</h2>
        <p>
            1) Vilken utvecklingsmiljö använder du?<br />
            Jag använder en Windows10 bärbar dator och installerat Windows subsystem for linux med Debian enligt instruktionen i dbwebb. För IDE använder jag vsCode vilken verkar vara den mest populära ide nuförtiden. Jag har installerat några extension för att hjälpa med php programmering. Den mest användbara extension är PHP Server vilken fungerar som host/server och kan köra php-code och visar php sidor i browser.
        </p>
        <p>
            2) Är du bekant med HTML, CSS och PHP sedan tidigare eller har du kanske jobbat med liknande tekniker?<br />
            jag har läst php och webbserverprogrammering på komvux. I första kursen hade vi samma kurslitteratur och skapade en cms för blogging som uppgift. 
        </p>
        <p>
            3) Gick det bra att installera labbmiljön eller var det något som krånglade? <br />
            ja labmiljön fungerade utan problem, men jag hade lite problem med vscode extension "phpserver" som inte kunde hitta php. efter ett par timmar googlande ficka jag fixa det. Först trodde jag att jab behöver lägga till path till php i debian som executable path i vscode settings och försökte felsöka den utan lycka. Ändrade path till php i Windows10 och det började fungera. 
        </p>
        <p>
            4) Är du bekant med terminalen och Unix-kommandon sedan tidigare? <br />
            bara enkla kommando i terminalen liksom, cd, mkdir, touch, -rm och några andra kommandon som används med Git. Men nu har jag börjat att lära mig mer när vi använder dbwebbkurs miljön. 
        </p>
        <p>
            5) Gick det bra att komma i gång med kursmomentet rent allmänt? <br />
            ja, installerat labmiljön, fixat till min vscode settings och nu kan jag öppna php-webbserver och öppna mina php sidor i browswer.
        </p>
        <p>
            6) Vilken är din TIL för detta kmom? <br />
            Jag freshar upp mina kunskaper inom php och försöker att lära mig och öva att blir bättre på att använda mer terminalen. 
        </p>
    </article>
    <article>
        <h2>Redovisning kmom02:</h2>
        <p>
            1) Beskriv hur väl du kan HTML/CSS (nybörjare, erfaren) <br />
            jag har läst html/css och lärt migatt skapa responsiva sidor. Och jag har lärt mig om flex-box och lite grid. Men för mina övnings-projekter har jag använt mest Bootstrap.
            Html semantic elements:
        </p>
        <pre>
            &lt;header&gt;&lt;/header&gt;
            &lt;nav&gt;&lt;/nav&gt;
            &lt;aside&gt;&lt;/aside&gt;
            &lt;section&gt;&lt;/section&gt;
            &lt;article&gt;&lt;/article&gt;
            &lt;footer&gt;&lt;/footer&gt;
        </pre>
        <pre>
            section kan innehålla många articles.
            article kan innehålla många sections. 
            en article kan se så här ut:
            
            &lt;article>
                &lt;header&gt;&lt;/header&gt;
                &lt;p&gt;&lt;/p&gt;
                &lt;footer&gt;&lt;/footer&gt;
            &lt;/article&gt;
        </pre>
        <p>
            2) Me-sidan börjar bli en liten webbplats, vad tycker du om dess struktur av filer och kataloger, känns det okey eller ovant? <br/>
            Det är bekant och det känns helt ok att följa instruktionen och återskapa/kopia designen i instruktionen.
        </p>
        <p>
            3) Hur bekant är du med PHP och programmering rent allmänt, hur känns det att utveckla med PHP? <br/>
            Det känns bra att programmera igen i PHP. Jag har byggt hemsidor i php som kursuppgifter förut. 
        </p>
        <p>
            4) Vad tyckte du om PHP-labben, enkel eller utmanande? <br />
            De var bra frågor och det finns många frågor så man repeterar och lär sig genom övningar. 
        </p>
        <p>
            5) Vilken är din TIL för detta kmom? <br/>
            Gick igenom uppgiften och freshat upp mina kunskaper inom php. Jag hade använt mycket Bootstrap innan denna kurs och för att använda media query behövde kolla upp det på w3. Sidan är enkel och har inte så många elementer därför använde bara media query för de små saker som ändrade form i mobil-skärmer.
        </p>
    </article>
    <article>
        <h2>Redovisning kmom03:</h2>
        <p>
            1) Hur känns det att komma igång med datastrukturer som arrayer? Är det koncept du känner igen sedan tidigare? <br>
            Det finns bra instruktion och guide och det var enkelt att loopa genom array. array är bra för att spara data i den. Man kan loop through array och göra olika comparison eller computing med array. Det som är bra med php är att man kan använda det som skripting language inne i html koden. t.ex att 
        </p>
        <pre>
        <pre>
            &lt;article&gt;
                &lt;?php foreach ($arr as $key => $value) : ?&gt;
                    &lt;li&gt;
                        &lt;?= $value ?&gt;
                    &lt;/li&gt;
                &lt;?php endforeach; ?&gt;
            &lt;/article&gt;
        </pre>
        </pre>
        
        <p>
            2) Hur känns det med strukturer såsom sidkontroller, multisida och templatefiler? <br>
            Det är enkelt att ha kontroll över sidolänken samt att ha koll på vilken url-adress användare skriver och servern ska godkänna det. och bra för säkerhet eftersom inga skrip kan injiceras i länken. 
        </pre>
        <p>
            3) Är det något särskild du vill berätta om din me-sida och dess struktur? Något som du är extra nöjd med? <br>
            Inget specielt, förljde instruktionen och lagt till sido-navbaren så att det går att klicka på och öppna alla sidor från multipage. Separerade html koden så att footer, header och aside kan inkluderas i all sidor. och Jag lagt "byline" i "footer" i slutet av "article" tag. 
        </p>
        <pre>
            &lt;article&gt;
                &lt;h2&gt;
                    title
                &lt;/h2&gt;
                &lt;p&gt;
                    text
                &lt;/p&gt;
                &lt;footer&gt;
                    &lt;?php include("incl/byline.php"); ?&gt;
                &lt;/footer&gt;
            &lt;/article&gt;
        </pre>
        <p>
            4) Får du hjälp och stöd i guiderna (html/css-guiden och php-guiden)? <br>
            Guiden och instruktionen är väldig bra. Det var enkelt att följa instruktionen och förstå det.
        </pre>
        <p>
            5) Vilken är din TIL för detta kmom? <br>
            Hela sido-kontrollen var ny och jag är nöjd att jag lärde mig något nytt struktur. 
        </p>
    </article>
    <article>
        <h2>Redovisning kmom04:</h2>
        <p>
            1) Börjar du känna att du bemästrar CSS? Beskriv hur väl du kan CSS (nybörjare, erfaren) <br>
            Jag har läst webbutveckling tidigare och är ganska erfaren med css. Använde mest bootstrap senast annars har jag använt css flexbox tidigare.
        </p>
        <p>
            2) Vad tycker du om CSS så här långt in i kursen? <br>
            det är bra, att positionera element i css har blivit enklare med hjälp av grid och flexbox. 
        </p>
        <pre>
            #targetElement {
                display: flex;
                flex-direction: row;
                /* flex-direction: column; */
                justify-content: space-around;
            }
        </pre>
        <p>
            3) Känns det som du greppar konceptet med php och funktioner? <br>
            ja, man skriver en funktion och anropar den i annat plats även utanför den filen som funktion finns. En funktion kan ta eller ta inte argument/argumenter. Det går att anropa en annan funktion från inne i en funktion och använda resultatet av andra funktionen. Om funktionen är i annan fil går det att importera den filen och anropa funktionen. 
        </p>
        <p>
            4) Gick det bra med html formulär, GET, POST och processingsidor i php? <br>
            ja, skapade två formulär en för kontakt och en for flashmsg. de ser så här ut:<br>
            get skickar form-data via url-länk och post skickar den via HTTP så den inte är synbar. get har gräns på 1500 karaktär och post har inga gräns. get är bra for icke viktig/sensitive data och post är bra för all sensitive data liskom inloggning. det går att bokmärka get url och använda form-data igen vilken är icke-säkert. 
            action:
                1-action kan vara self så den sidan själv hanterar form data. <br>
                action="&lt;?= $_SERVER['PHP_SELF']; ?&gt;" <br>
                2- eller den kan skicka den till annan sida for hantering av form-data. liksom nedan.
        </p>
        <pre>
        &lt;form method="post" action="post/process.php"&gt;
            &lt;fieldset&gt;
                &lt;label&gt;Kontakta Mig Form&lt;/label&gt;
                &lt;p&gt;
                    &lt;label for="title"&gt;Title:&lt;/label&gt;
                    &lt;input id="title" type="text" name="title" value="&lt;?= htmlentities($_POST["title"] ?? null) ?&gt;"&gt;
                &lt;/p&gt;
                &lt;p&gt;
                    &lt;input type="submit" name="create" value="Create"&gt;
                    &lt;input type="reset" value="Reset"&gt;
                &lt;/p&gt;
            &lt;/fieldset&gt;
        &lt;/form&gt;
        </pre>
        <p>
            och i process sidan, använde jag $_POST['variable'] för att spara den i session.
        </p>
        <pre>
            if ($_POST['title']) {
                $_SESSION['kontakt'] = $_POST['title'];
            }
        </pre>

        <p>
            5) Lyckade du får ordning på hur php och sessioner fungerar? <br>
            ja, det fungerar utan problem och jag testat den flera gånger. Flash visas endast en gång och försvinner när sidan laddas om. Men kontakt message är sparat i session till man förstår sessionen.
        </p>
        <p>
            6) Vilken är din TIL för detta kmom? <br>
            flashmsg var helt nytt for mig. Jag hade inga ide hur och var ska man använda den. Googlade lite och fick några ideer att var den ska användas. typ for inloggning meddelande typ välkomst meddelande. meddela uppdateringar sedan medelems senast var online. och många mer.
        </p>
        
