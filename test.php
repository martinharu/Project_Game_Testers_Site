<?php

include "functions.php";
$vandaag = new dateTime();
$tijd = date_format($vandaag,"Y-m-d, H:i");
?>



<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Testers</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
            <div class="flex_header">
                <artikel class='titel'>
                    <h1>Game testers</h1>
                </artikel>
            </div>
            
            <div class="flex_header2">
                <artikel class="tijd">
                    <?php
                    datum($vandaag, $tijd);
                    ?>
                </artikel>
                <br>
                
                <div id="welcome"> </div>
            </div>
        </header>


    <main>
       <div class="content-box">
       <div class="container">
        <h1>Game Gedrag Test</h1>
        <p> <strong>welkom en bedankt voor het nemen van de vragenlisjt!</strong> </p>
        <form action="resultaten.php" method="POST">
            <hr>
            <div class="vraag">
                <p>1. Hoe vaak speel je videogames?</p>
                <label><input type="radio" name="q1" value="0" required> Minder dan 1 uur per dag </label>
                <label><input type="radio" name="q1" value="1"> 1-3 uur per dag </label>
                <label><input type="radio" name="q1" value="2"> 3-6 uur per dag </label>
                <label><input type="radio" name="q1" value="3"> Meer dan 6 uur per dag </label>
            </div>

            <div class="vraag">
                <p>2. Heb je weleens verplichtingen overgeslagen om te gamen?</p>
                <label><input type="radio" name="q2" value="0" required> Nooit </label>
                <label><input type="radio" name="q2" value="1"> Een paar keer </label>
                <label><input type="radio" name="q2" value="2"> Regelmatig </label>
                <label><input type="radio" name="q2" value="3"> Vaak </label>
            </div>

            <div class="vraag">
                <p>3. Hoe voel je je als je een dag niet kunt gamen?</p>
                <label><input type="radio" name="q3" value="0" required> Geen probleem </label>
                <label><input type="radio" name="q3" value="1"> Licht geïrriteerd </label>
                <label><input type="radio" name="q3" value="2"> Erg onrustig </label>
                <label><input type="radio" name="q3" value="3"> Heel gestrest of boos </label>
            </div>

            <div class="vraag">
                <p>4. Heb je weleens gelogen over hoeveel je gamet?</p>
                <label><input type="radio" name="q4" value="0" required> Nooit </label>
                <label><input type="radio" name="q4" value="1"> Een paar keer </label>
                <label><input type="radio" name="q4" value="2"> Regelmatig </label>
                <label><input type="radio" name="q4" value="3"> Vaak </label>
            </div>

            <div class="vraag">
                <p>5. Hoe beïnvloedt gamen je slaappatroon?</p>
                <label><input type="radio" name="q5" value="0" required> Geen invloed </label>
                <label><input type="radio" name="q5" value="1"> Ik ga soms wat later slapen </label>
                <label><input type="radio" name="q5" value="2"> Ik slaap regelmatig te weinig door gamen </label>
                <label><input type="radio" name="q5" value="3"> Ik slaap structureel te weinig door gamen </label>
            </div>

            <div class="vraag">
                <p>6. Hoe belangrijk is gamen vergeleken met sociale activiteiten</p>
                <label><input type="radio" name="q6" value="0" required> Ik geef de voorkeur aan sociale activiteiten </label>
                <label><input type="radio" name="q6" value="1"> Soms kies ik gamen boven sociale activiteiten </label>
                <label><input type="radio" name="q6" value="2"> Vaak geef ik gamen voorkeur </label>
                <label><input type="radio" name="q6" value="3"> Ik vermeid sociale activiteiten om te gamen </label>
            </div>

            <div class="vraag">
                <p>7. Heeft gamen invloed op je prestaties op school/werk?</p>
                <label><input type="radio" name="q7" value="0" required> Nee, helemaal niet </label>
                <label><input type="radio" name="q7" value="1"> Soms heeft het invloed </label>
                <label><input type="radio" name="q7" value="2"> Regelmatig heeft het invloed </label>
                <label><input type="radio" name="q7" value="3"> Mijn prestaties lijden er sterk onder </label>
            </div>

            <div class="vraag">
                <p>8. Hoeveel geld geef je per maand uit aan games of in-game aankopen? </p>
                <label><input type="radio" name="q8" value="0" required> Minder dan €10 </label>
                <label><input type="radio" name="q8" value="1"> €10 - €50 </label>
                <label><input type="radio" name="q8" value="2"> €50 - €100 </label>
                <label><input type="radio" name="q8" value="3">  Meer dan €100 </label>
            </div>

            <div class="vraag">
                <p>9. Hebben anderen ooit opmerkingen gemaakt over jouw gamegedrag?  </p>
                <label><input type="radio" name="q9" value="0" required> Minder dan €10 </label>
                <label><input type="radio" name="q9" value="1"> €10 - €50 </label>
                <label><input type="radio" name="q9" value="2"> €50 - €100 </label>
                <label><input type="radio" name="q9" value="3">  Meer dan €100 </label>
            </div>

            <div class="vraag">
                <p>10. Hoe voel je je als je langere tijd niet kunt gamen? </p>
                <label><input type="radio" name="q10" value="0" required> Geen probleem </label>
                <label><input type="radio" name="q10" value="1">Een beetje teleurgesteld</label>
                <label><input type="radio" name="q10" value="2"> Erg prikkelbaar of somber </label>
                <label><input type="radio" name="q10" value="3"> Ik voel me gestrest of angstig</label>
            </div>

            <div class="vraag">
                <p>11. Heeft gamen invloed op je eetgewoonten? </p>
                <label><input type="radio" name="q11" value="0" required>Nee, ik eet zoals altijd</label>
                <label><input type="radio" name="q11" value="1">Soms vergeet ik te eten of eet ik ongezonder</label>
                <label><input type="radio" name="q11" value="2"> Vaak eet ik minder of ongezonder door gamen</label>
                <label><input type="radio" name="q11" value="3"> Ik eet structureel slecht door gamen</label>
            </div>

            <div class="vraag">
                <p>12. Heb je geprobeerd minder te gamen, maar lukt dat niet? </p>
                <label><input type="radio" name="q12" value="0" required>Nee, ik bepaal zelf hoeveel ik game </label>
                <label><input type="radio" name="q12" value="1">Ik heb het eens geprobeerd, maar zonder succes </label>
                <label><input type="radio" name="q12" value="2"> Ik probeer het vaker, maar val telkens terug </label>
                <label><input type="radio" name="q12" value="3"> Ik wil minderen, maar het lukt me écht niet</label>
            </div>

            <div class="vraag">
                <p>13. Hoe moeilijk vind je het om te stoppen met gamen als je eenmaal begonnen bent? </p>
                <label><input type="radio" name="q13" value="0" required>Niet moeilijk, ik stop wanneer ik wil</label>
                <label><input type="radio" name="q13" value="1">Soms speel ik langer dan gepland </label>
                <label><input type="radio" name="q13" value="2"> Regelmatig speel ik langer dan ik zou willen </label>
                <label><input type="radio" name="q13" value="3"> Ik kan mezelf niet stoppen, ook als het nadelig is </label>
            </div>

            <div class="vraag">
                <p>14. Gaat gamen weleens ten koste van je persoonlijke hygiëne? </p>
                <label><input type="radio" name="q14" value="0" required> Nee, nooit</label>
                <label><input type="radio" name="q14" value="1">Heel af en toe</label>
                <label><input type="radio" name="q14" value="2"> Regelmatig</label>
                <label><input type="radio" name="q14" value="3">Vaak </label>
            </div>

            <div class="vraag">
                <p>15. Wat is de langste aaneengesloten tijd die je ooit hebt gegamed? </p>
                <label><input type="radio" name="q15" value="0" required>  Minder dan 3 uur</label>
                <label><input type="radio" name="q15" value="1"> 3-6 uur</label>
                <label><input type="radio" name="q15" value="2">  6-10 uur</label>
                <label><input type="radio" name="q15" value="3">Meer dan 10 uur </label>
            </div>


            <input type="submit" value="Verstuur">
        </form>
    </div>
</div>
    </main>

    <?php include 'footer.php'; ?>

   

</body>
</html>
