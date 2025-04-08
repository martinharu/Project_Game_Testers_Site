<?php

// function date
function datum($datum, $tijd){
    $date = new dateTime();
   $tijd = date_format($date,"Y-m-d, H:i");
   echo $tijd."<br>";
   
   if($tijd >= 5 && $tijd <=12.05)
   {
       echo "goedemorgen, ";
   }
   elseif($tijd >= 12.06 && $tijd <=17.05)
   {
       echo "goedenmiddag, ";
   }
   else
   {
       echo "goedenavond, ";
   }
}
?>