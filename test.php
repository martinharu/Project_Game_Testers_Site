<?php
// Inclusie van de functies
include "functions.php"; 

// Haal de huidige datum en tijd op
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
    <!-- Flex header voor titel -->
    <div class="flex_header">
        <artikel class='titel'>
            <h1>Game testers</h1>
        </artikel>
    </div>
    
    <div class="flex_header2">
        <!-- Datum en tijd worden hier getoond -->
        <artikel class="tijd">
            <?php
            datum($vandaag, $tijd); // Toon de datum en tijd
            ?>
        </artikel>
        <br>
        
        <div id="welcome"> </div>
    </div>
</header>

<nav>
    <!-- Navigatie menu -->
    <ul class='menu'>
        <li class='menu_li'><a class="menu_link" href="Index.php">Home</a></li>
        <li class='menu_li'><a class="menu_link" href="test.php">Test</a></li>
        <li class='menu_li'><a class="menu_link" href="resultaten.php">Resultaten</a></li>
    </ul>
</nav>

<main>
    <!-- Hoofdinformatie en formulier voor de test -->
    <div class="content-box">
        <div class="container">
            <h1>Game Gedrag Test</h1>
            <p><strong>welkom en bedankt voor het nemen van de vragenlijst!</strong></p>
            <form action="resultaten.php" method="POST">
                <hr>
                
                <!-- Vraag 1 -->
                <div class="vraag">
                    <p>1. Hoe vaak speel je videogames?</p>
                    <label><input type="radio" name="q1" value="0" required>Minder dan 1 uur per dag</label>
                    <label><input type="radio" name="q1" value="1"> 1-3 uur per dag </label>
                    <label><input type="radio" name="q1" value="2"> 3-6 uur per dag </label>
                    <label><input type="radio" name="q1" value="3"> Meer dan 6 uur per dag </label>
                </div>

                <!-- Vraag 2 -->
                <div class="vraag">
                    <p>2. Heb je weleens verplichtingen overgeslagen om te gamen?</p>
                    <label><input type="radio" name="q2" value="0" required> Nooit </label>
                    <label><input type="radio" name="q2" value="1"> Een paar keer </label>
                    <label><input type="radio" name="q2" value="2"> Regelmatig </label>
                    <label><input type="radio" name="q2" value="3"> Vaak </label>
                </div>

                <!-- Vraag 3 -->
                <div class="vraag">
                    <p>3. Hoe voel je je als je een dag niet kunt gamen?</p>
                    <label><input type="radio" name="q3" value="0" required> Geen probleem </label>
                    <label><input type="radio" name="q3" value="1"> Licht geïrriteerd </label>
                    <label><input type="radio" name="q3" value="2"> Erg onrustig </label>
                    <label><input type="radio" name="q3" value="3"> Heel gestrest of boos </label>
                </div>

                <!-- Vraag 4 -->
                <div class="vraag">
                    <p>4. Heb je weleens gelogen over hoeveel je gamet?</p>
                    <label><input type="radio" name="q4" value="0" required> Nooit </label>
                    <label><input type="radio" name="q4" value="1"> Een paar keer </label>
                    <label><input type="radio" name="q4" value="2"> Regelmatig </label>
                    <label><input type="radio" name="q4" value="3"> Vaak </label>
                </div>

                <!-- Vraag 5 -->
                <div class="vraag">
                    <p>5. Hoe beïnvloedt gamen je slaappatroon?</p>
                    <label><input type="radio" name="q5" value="0" required> Geen invloed </label>
                    <label><input type="radio" name="q5" value="1"> Ik ga soms wat later slapen </label>
                    <label><input type="radio" name="q5" value="2"> Ik slaap regelmatig te weinig door gamen </label>
                    <label><input type="radio" name="q5" value="3"> Ik slaap structureel te weinig door gamen </label>
                </div>

                <!-- Vraag 6 -->
                <div class="vraag">
                    <p>6. Hoe belangrijk is gamen vergeleken met sociale activiteiten</p>
                    <label><input type="radio" name="q6" value="0" required> Ik geef de voorkeur aan sociale activiteiten </label>
                    <label><input type="radio" name="q6" value="1"> Soms kies ik gamen boven sociale activiteiten </label>
                    <label><input type="radio" name="q6" value="2"> Vaak geef ik gamen voorkeur </label>
                    <label><input type="radio" name="q6" value="3"> Ik vermeid sociale activiteiten om te gamen </label>
                </div>

                <!-- Vraag 7 -->
                <div class="vraag">
                    <p>7. Heeft gamen invloed op je prestaties op school/werk?</p>
                    <label><input type="radio" name="q7" value="0" required> Nee, helemaal niet </label>
                    <label><input type="radio" name="q7" value="1"> Soms heeft het invloed </label>
                    <label><input type="radio" name="q7" value="2"> Regelmatig heeft het invloed </label>
                    <label><input type="radio" name="q7" value="3"> Mijn prestaties lijden er sterk onder </label>
                </div>

                <!-- Vraag 8 -->
                <div class="vraag">
                    <p>8. Hoeveel geld geef je per maand uit aan games of in-game aankopen? </p>
                    <label><input type="radio" name="q8" value="0" required> Minder dan €10 </label>
                    <label><input type="radio" name="q8" value="1"> €10 - €50 </label>
                    <label><input type="radio" name="q8" value="2"> €50 - €100 </label>
                    <label><input type="radio" name="q8" value="3"> Meer dan €100 </label>
                </div>

                <!-- Vraag 9 -->
                <div class="vraag">
                    <p>9. Hebben anderen ooit opmerkingen gemaakt over jouw gamegedrag? </p>
                    <label><input type="radio" name="q9" value="0" required> Geen opmerkingen </label>
                    <label><input type="radio" name="q9" value="1"> Af en toe opmerkingen </label>
                    <label><input type="radio" name="q9" value="2"> Regelmatige opmerkingen </label>
                    <label><input type="radio" name="q9" value="3"> Vaak opmerkingen </label>
                </div>

                <!-- Vraag 10 -->
                <div class="vraag">
                    <p>10. Hoe voel je je als je langere tijd niet kunt gamen? </p>
                    <label><input type="radio" name="q10" value="0" required> Geen probleem </label>
                    <label><input type="radio" name="q10" value="1"> Een beetje teleurgesteld </label>
                    <label><input type="radio" name="q10" value="2"> Erg prikkelbaar of somber </label>
                    <label><input type="radio" name="q10" value="3"> Ik voel me gestrest of angstig</label>
                </div>

                <!-- Vraag 11 -->
                <div class="vraag">
                    <p>11. Heeft gamen invloed op je eetgewoonten? </p>
                    <label><input type="radio" name="q11" value="0" required> Nee, ik eet zoals altijd </label>
                    <label><input type="radio" name="q11" value="1"> Soms vergeet ik te eten of eet ik ongezonder </label>
                    <label><input type="radio" name="q11" value="2"> Vaak eet ik minder of ongezonder door gamen </label>
                    <label><input type="radio" name="q11" value="3"> Ik eet structureel slecht door gamen </label>
                </div>

                <!-- Vraag 12 -->
                <div class="vraag">
                    <p>12. Heb je geprobeerd minder te gamen, maar lukt dat niet? </p>
                    <label><input type="radio" name="q12" value="0" required> Nee, ik bepaal zelf hoeveel ik game </label>
                    <label><input type="radio" name="q12" value="1"> Ik heb het eens geprobeerd, maar zonder succes </label>
                    <label><input type="radio" name="q12" value="2"> Ik probeer het vaker, maar val telkens terug </label>
                    <label><input type="radio" name="q12" value="3"> Ik wil minderen, maar het lukt me écht niet</label>
                </div>

                <!-- Vraag 13 -->
                <div class="vraag">
                    <p>13. Hoe moeilijk vind je het om te stoppen met gamen als je eenmaal begonnen bent? </p>
                    <label><input type="radio" name="q13" value="0" required> Niet moeilijk, ik stop wanneer ik wil </label>
                    <label><input type="radio" name="q13" value="1"> Soms speel ik langer dan gepland </label>
                    <label><input type="radio" name="q13" value="2"> Regelmatig speel ik langer dan ik zou willen </label>
                    <label><input type="radio" name="q13" value="3"> Ik kan mezelf niet stoppen, ook als het nadelig is </label>
                </div>

                <!-- Vraag 14 -->
                <div class="vraag">
                    <p>14. Gaat gamen weleens ten koste van je persoonlijke hygiëne? </p>
                    <label><input type="radio" name="q14" value="0" required> Nee, nooit </label>
                    <label><input type="radio" name="q14" value="1"> Heel af en toe </label>
                    <label><input type="radio" name="q14" value="2"> Soms, als ik in een game zit </label>
                    <label><input type="radio" name="q14" value="3"> Vaak, ik negeer persoonlijke verzorging vanwege gamen </label>
                </div>

                <!-- Vraag 15 -->
                <div class="vraag">
                    <p>15. Heb je weleens overwogen om professionele hulp te zoeken vanwege je gamegedrag? </p>
                    <label><input type="radio" name="q15" value="0" required> Nee, ik denk niet dat het nodig is </label>
                    <label><input type="radio" name="q15" value="1"> Ja, een paar keer </label>
                    <label><input type="radio" name="q15" value="2"> Ja, ik denk er serieus over na </label>
                    <label><input type="radio" name="q15" value="3"> Ja, ik heb hulp gezocht </label>
                </div>

                <br>
                <!-- Submit knop -->
                <input type="submit" value="Verstuur">
            </form>
        </div>
    </div>
</main>

<!-- Footer -->
<footer>
    <?php include 'footer.php';?>
</footer>
</body>
</html>
