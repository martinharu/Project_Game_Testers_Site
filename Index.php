<?php
include "functions.php";
$vandaag = new dateTime();
$tijd = date_format($vandaag,"Y-m-d, H:i ");
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
            <p>Gamen is een leuke hobby, maar soms kan het een groter deel van je leven innemen dan je doorhebt. 
               Deze test helpt je inzicht te krijgen in je gamegedrag.</p>
            <p>Je krijgt bij elke vraag vier antwoordopties. Aan het einde krijg je een score en beoordeling.</p>
            <a href="test.php" class="test-link">Klik hier</a>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <!-- Verwijzing naar externe JS -->
    <script src="cookies.js"></script>

    <script>
    // Haal opgeslagen score en resultaat uit localStorage
    const opgeslagenScore = localStorage.getItem("laatsteScore");
    const opgeslagenResultaat = localStorage.getItem("laatsteResultaat");

    if (opgeslagenScore && opgeslagenResultaat) {
        // Toon de vorige score en het resultaat op de pagina
        const resultaatDiv = document.createElement("div");
        resultaatDiv.innerHTML = `
            <h2>Je vorige score: ${opgeslagenScore}</h2>
            ${opgeslagenResultaat}
        `;
        document.body.appendChild(resultaatDiv);
    }
</script>

<button onclick="localStorage.removeItem('laatsteScore'); localStorage.removeItem('laatsteResultaat'); location.reload();">
    Verwijder oude resultaten
</button>



</body>
</html>
