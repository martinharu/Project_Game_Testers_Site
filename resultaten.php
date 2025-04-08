<?php
include "functions.php";
$vandaag = new dateTime();
$tijd = date_format($vandaag,"Y-m-d, H:i");

$resultaat = ""; // Zorgt ervoor dat $resultaat altijd een waarde heeft
$score = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Loop door de vragen en tel de score op
    for ($i = 1; $i <= 15; $i++) {
        if (isset($_POST["q$i"]) && is_numeric($_POST["q$i"])) {
            $score += intval($_POST["q$i"]);
        }
    }

    // Bepaal het resultaat op basis van de score
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
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Loop door de vragen en tel de score op
    for ($i = 1; $i <= 15; $i++) {
        if (isset($_POST["q$i"]) && is_numeric($_POST["q$i"])) {
            $score += intval($_POST["q$i"]);
        }
    }

    // fotos uitslag
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
            <?php echo $resultaat; ?>
            <p><a href="test.php">Doe de test opnieuw</a></p>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<script>
    // Zet de score en het resultaat in localStorage
    localStorage.setItem("laatsteScore", "<?php echo $score; ?>");
    localStorage.setItem("laatsteResultaat", <?php echo json_encode($resultaat); ?>);
</script>

</body>
</html>
