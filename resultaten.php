<?php
<<<<<<< HEAD
$resultaat = ""; // Zorgt ervoor dat $resultaat altijd een waarde heeft

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;
    for ($i = 1; $i <= 15; $i++) {
        if (isset($_POST["q$i"]) && is_numeric($_POST["q$i"])) {
=======
/*
Auteur: Saber Mohamed
klas: Ivos24
Studentennummer: 493823

*/
?>






<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;
    
    // Loop door de vragen en tel de score op
    for ($i = 1; $i <= 15; $i++) {
        if (isset($_POST["q$i"])) {
>>>>>>> 5877a38bcde0b56581bab966c53abf4553740f74
            $score += intval($_POST["q$i"]);
        }
    }

    // Bepaal het resultaat op basis van de score
    if ($score <= 4) {
        $resultaat = "<h2>Uitslag is: Casual Gamer. Je gamet af en toe en hebt een goede balans. Geen zorgen!</h2>";
    } elseif ($score > 4 && $score <= 8) {
        $resultaat = "<h2>Uitslag is: Enthousiaste Gamer. Je houdt van gamen en speelt regelmatig, maar let op dat het geen invloed krijgt op andere belangrijke zaken.</h2>";
    } elseif ($score > 8 && $score <= 12) {
<<<<<<< HEAD
        $resultaat = "<h2>Uitslag is: Problematische gamer. Gamen neemt een grote rol in je leven in. Het kan invloed hebben op je gezondheid, sociale leven of prestaties. Tijd om bewust te minderen!</h2>";
=======
        $resultaat = "<h2>Uitslag is: Problematische Gamer. Gamen neemt een grote rol in je leven in. Het kan invloed hebben op je gezondheid, sociale leven of prestaties. Tijd om bewust te minderen!</h2>";
>>>>>>> 5877a38bcde0b56581bab966c53abf4553740f74
    } else {
        $resultaat = "<h2>Uitslag is: Verslavingsgevaar! Gamen beheerst je leven en heeft waarschijnlijk negatieve gevolgen. Overweeg hulp of stel grenzen voor jezelf!</h2>";
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
<<<<<<< HEAD
<body>

    <header>
        <h1>Game Testers</h1>
=======

<body>
    <header>
        <h1>Game testers</h1>
>>>>>>> 5877a38bcde0b56581bab966c53abf4553740f74
    </header>

    <main>
       <div class="content-box">
           <div class="container">
<<<<<<< HEAD
               <h2>Resultaat</h2> <!-- Gewijzigd naar h2 voor semantiek -->
=======
               <h1>Resultaat</h1>
               <?php 
                if ($score <= 4) {
                   
                } elseif ($score > 4 && $score <= 8) {
                  
                } elseif ($score > 8 && $score <= 12) {

                } else {
                    
                }
               ?>
               <!-- Toon het berekende resultaat -->
>>>>>>> 5877a38bcde0b56581bab966c53abf4553740f74
               <?php echo $resultaat; ?>
               <p><a href="test.php">Doe de test opnieuw</a></p>
           </div>
       </div>
    </main>

    <?php include 'footer.php'; ?>
<<<<<<< HEAD

    <script>
    // Zet de score en het resultaat in localStorage
    localStorage.setItem("laatsteScore", "<?php echo $score; ?>");
    localStorage.setItem("laatsteResultaat", <?php echo json_encode($resultaat); ?>);
</script>

=======
>>>>>>> 5877a38bcde0b56581bab966c53abf4553740f74
</body>
</html>
