<?php
$title = "Min me-sida | htmlphp";
include("incl/header.php");
?>
    <main>
        <article>
            <header>
                <h1>Om Mig Själv</h1>
                <hr />
                <p class="author">
                    Uppdaterad <time datetime="2020-09-08 19:00:00">8:e sep 2020</time> av Reza
                </p>
            </header>
            
            
            <p>
                Reza heter jag och är intresserad av nya teknologier särskillt webb och alla teknologier kring webb. Jag har lite kunskap med webbutveckling med php, javascript, css och html sedan tidigare. 
                Förutom programmering gillar jag att fota och tar bilder med mobil och systemkamera. Men det blir inte så mycket fotografi p.g.a. arbete, familj och studiet. Förutom fota gillar jag foto-redigering. 
            </p>
        
            <p>
                Unsplash är en hemsida som jag kan rekommendera till alla som letar efter royalty free bilder för både privat och kommerciellt. Man behöver endast ge kredit till fotografen annars är de hel fria att användas. 
            </p>
            
            <figure>
                <img src="img/autumn.png"  alt="Sunshine in Jungle">
                <figcaption>
                    <span>Photo by <a href="https://unsplash.com/@jplenio?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Johannes Plenio</a> on <a href="https://unsplash.com/s/photos/autumn?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
                </figcaption>    
            </figure>

            <section id="right-section">
                <figure class="right-image">
                    <img src="img/coding.png"  alt="Sunshine in Jungle">
                    <figcaption>
                        Photo by <a href="https://unsplash.com/@ffstop?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Fotis Fotopoulos</a> on <a href="https://unsplash.com/s/photos/programming?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a>
                    </figcaption>    
                </figure>
                <h2>
                    Varför läser jag till webbprogrammering
                </h2>
                <p>
                    jag har varit intresserad av att jobba med webbutveckling i många år. Jag tycker både om front-end och att designa en sida och backend där man arbetar med data och databas. Jag är intresserad av problemlösning och tycker att det är både intressant och frustererande. Att lösa ett problem ger mig motiv att fortsätta lära mig mer och däremot att sitta och stirra på skärmen utan att kunna lösa ett problem kan vara frusterande. 
                </p>
            </section>

            <footer class="byline">
                <?php include("incl/byline.php"); ?>
            </footer>
        </article>
    </main>

<?php include("incl/footer.php"); ?>