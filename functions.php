<?php
// Stel de tijdzone in
date_default_timezone_set('Europe/Amsterdam');

// function date
function datum($datum, $tijd) {
    $date = new DateTime();
    $tijd = date_format($date, "d-m-Y, H:i");
    $hour = date_format($date, "H"); // Haal alleen het uur op
    
    echo $tijd."<br>";
    
    if($hour >= 0 && $hour < 6) {
        echo "Goedenacht";
    }
    elseif($hour >= 6 && $hour < 12) {
        echo "Goedemorgen";
    }
    elseif($hour >= 12 && $hour < 18) {
        echo "Goedemiddag";
    }
    else {
        echo "Goedenavond";
    }
}


?>