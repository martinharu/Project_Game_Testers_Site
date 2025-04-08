<?php
include "functions.php";

// Maak een nieuw DateTime-object aan
$vandaag = new dateTime();

// Formatteer de datum/tijd voor weergave
$tijd = date_format($vandaag, "Y-m-d, H:i ");
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Testers</title>
    <link rel="stylesheet" href="style.css"> <!-- Verwijzing naar CSS -->
</head>
<body>

<header>
    <div class="flex_header">
        <artikel class='titel'>
            <h1>Game testers</h1> <!-- Titel van de website -->
        </artikel>
    </div>

    <div class="flex_header2">
        <artikel class="tijd">
            <?php
            // Toon de datum en tijd via functie uit functions.php
            datum($vandaag, $tijd);
            ?>
        </artikel>
        <br>

        <div id="welcome"> </div> <!-- Welkomstbericht wordt hier ingevoegd via JS -->
    </div>
</header>

<nav>
    <ul class='menu'>
        <!-- Navigatiemenu -->
        <li class='menu_li'><a class="menu_link" href="Index.php">Home</a></li>
        <li class='menu_li'><a class="menu_link" href="test.php">Test</a></li>
        <li class='menu_li'><a class="menu_link" href="resultaten.php">Resultaten</a></li>
    </ul>
</nav>

<main>
    <div class="content-box">
        <!-- Introductie tekst voor de test -->
        <p>Gamen is een leuke hobby, maar soms kan het een groter deel van je leven innemen dan je doorhebt. 
           Deze test helpt je inzicht te krijgen in je gamegedrag.</p>
        <p>Je krijgt bij elke vraag vier antwoordopties. Aan het einde krijg je een score en beoordeling.</p>
        <a href="test.php" class="test-link">Klik hier</a> <!-- Link naar testpagina -->
    </div>
</main>

<?php include 'footer.php'; ?> <!-- Footer includen -->

<!-- Verwijzing naar externe JS voor cookies -->
<script src="cookies.js"></script>

<script>
    // Haal opgeslagen score en resultaat uit localStorage
    const opgeslagenScore = localStorage.getItem("laatsteScore");
    const opgeslagenResultaat = localStorage.getItem("laatsteResultaat");

    if (opgeslagenScore && opgeslagenResultaat) {
        // Als er een eerdere score/resultaat is, toon dit op de pagina
        const resultaatDiv = document.createElement("div");
        resultaatDiv.innerHTML = `
            <h2>Je vorige score: ${opgeslagenScore}</h2>
            ${opgeslagenResultaat}
        `;
        document.body.appendChild(resultaatDiv); // Voeg resultaat toe aan body
    }
</script>

<!-- Knop om eerdere resultaten uit localStorage te wissen -->
<button onclick="localStorage.removeItem('laatsteScore'); localStorage.removeItem('laatsteResultaat'); location.reload();">
    Verwijder oude resultaten
</button>

</body>
</html>
