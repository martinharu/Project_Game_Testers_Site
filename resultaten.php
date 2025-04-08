<?php
include "functions.php";

// Maak een nieuw DateTime-object aan
$vandaag = new dateTime();

// Formatteer de datum/tijd
$tijd = date_format($vandaag, "Y-m-d, H:i");

// Zorgt ervoor dat $resultaat altijd een waarde heeft
$resultaat = ""; 
$score = 0;

// Check of formulier is gepost
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Loop door de 15 vragen en tel de score op
    for ($i = 1; $i <= 15; $i++) {
        if (isset($_POST["q$i"]) && is_numeric($_POST["q$i"])) {
            $score += intval($_POST["q$i"]);
        }
    }

    // Bepaal het resultaat op basis van de behaalde score
    if ($score <= 4) {
        $resultaat = "<h2>Uitslag is $score punten : Casual Gamer, Je gamet af en toe en hebt een goede balans. Geen zorgen!</h2>";
    } elseif ($score <= 8) {
        $resultaat = "<h2>Uitslag is $score punten : Enthousiaste Gamer, Je houdt van gamen en speelt regelmatig, maar let op dat het geen invloed krijgt op andere belangrijke zaken.</h2>";
    } elseif ($score <= 12) {
        $resultaat = "<h2>Uitslag is $score punten : Problematische Gamer, Gamen neemt een grote rol in je leven in. Het kan invloed hebben op je gezondheid, sociale leven of prestaties. Tijd om bewust te minderen!</h2>";
    } else {
        $resultaat = "<h2>Uitslag is $score punten : Verslavingsgevaar! Gamen beheerst je leven en heeft waarschijnlijk negatieve gevolgen. Overweeg hulp of stel grenzen voor jezelf!</h2>";
    }
}
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
            <h1>Game testers</h1>
        </artikel>
    </div>

    <div class="flex_header2">
        <artikel class="tijd">
            <?php
            // Toon de datum/tijd
            datum($vandaag, $tijd);
            ?>
        </artikel>
        <br>
        <div id="welcome"> </div> <!-- Welkomsttekst via JS -->
    </div>
</header>

<nav>
    <ul class='menu'>
        <!-- Navigatie -->
        <li class='menu_li'><a class="menu_link" href="Index.php">Home</a></li>
        <li class='menu_li'><a class="menu_link" href="test.php">Test</a></li>
        <li class='menu_li'><a class="menu_link" href="resultaten.php">Resultaten</a></li>
    </ul>
</nav>

<main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Herhaal de loop voor score (kan hergebruikt worden, maar blijft hier voor duidelijkheid)
        for ($i = 1; $i <= 15; $i++) {
            if (isset($_POST["q$i"]) && is_numeric($_POST["q$i"])) {
                $score += intval($_POST["q$i"]);
            }
        }

        // Toon bijpassende afbeelding op basis van score
        if ($score <= 4) {
            echo "<img src='images/happyemoji.png' alt='foto emoji happy' width='200px' height='200px'>";
        } elseif ($score <= 8) {
            echo "<img src='images/thumbs_up.jpg' alt='foto emoji happy' width='200px' height='200px'>";
        } elseif ($score <= 12) {
            echo "<img src='images/worried.png' alt='foto emoji happy' width='200px' height='200px'>";
        } else {
            echo "<img src='images/goku_is_mad.jpg' alt='foto emoji happy' width='250px' height='250px'>";
        }
    }
    ?>
    <div class="content-box">
        <div class="container">
            <h2>Resultaat</h2>
            <?php echo $resultaat; ?> <!-- Toon het resultaat -->
            <p><a href="test.php">Doe de test opnieuw</a></p>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?> <!-- Footer include -->

<script>
    // Sla score en resultaat op in localStorage (zodat ze op andere pagina getoond kunnen worden)
    localStorage.setItem("laatsteScore", "<?php echo $score; ?>");
    localStorage.setItem("laatsteResultaat", <?php echo json_encode($resultaat); ?>);
</script>

</body>
</html>
