<?php




$langer = 0;
$korter = 0;



while (true){
    $lengte1 = readline("1. Geef lengte op: ");
    if ($lengte1 < 50){
        echo "De lengte is buiten range, probeer het opnieuw \n";

        
      continue;
    } elseif($lengte1 > 210) {
        echo "De lengte is buiten range, probeer het opnieuw \n";


        continue;
    } 
    break;
}
while (true){
    $lengte2 = readline("2. Geef lengte op: ");
    if ($lengte2 < 50){
        echo "De lengte is buiten range, probeer het opnieuw \n";


      continue;
    } elseif($lengte2 > 210) {
        echo "De lengte is buiten range, probeer het opnieuw \n";

    } else {
        break;
    }
}



while (true){
    $lengte3 = readline("3. Geef lengte op: ");
    if ($lengte3 < 50){
        echo "De lengte is onder 50cm probeer opnieuw \n";


      continue;
    } elseif($lengte3 > 210) {
        echo "De lengte is boven de 220cm probeer opnieuw \n";


    } else {
        break;
    }
}
while (true){
    $lengte4 = readline("4. Geef lengte op: ");
    if ($lengte4 < 50){
        echo "De lengte is onder 50cm probeer opnieuw  \n";

        
      continue;
    } elseif($lengte4 > 210) {
        echo "De lengte is boven de 220cm probeer opnieuw \n";

        
    } else {
        break;
    }
}
while (true){
    $lengte5 = readline("5. Geef de lengte op: ");
    if ($lengte5 < 50){
        echo "De lengte is onder 50cm probeer opnieuw \n";


      continue;
    } elseif($lengte5 > 210) {
        echo "De lengte is boven de 220cm probeer opnieuw \n";


    } else {
        break;
    }
}


$midlengte = $lengte1 + $lengte2 + $lengte3 + $lengte4 + $lengte5;
$midlengte = $midlengte / 5; 

$lengtes = [$lengte1 , $lengte2 , $lengte3 , $lengte4 , $lengte5 ];

foreach( $lengtes as $lengte) {
    if($lengte >= 170){
        $langer ++;

    } else {
        $korter ++;
    }
}
echo "Er zijn $langer personen langer dan 170 cm. \n";
echo "Er zijn $korter personen korter dan 170 cm. \n";
echo "De gemiddelde lengte is $midlengte cm.";

//yakub opdrachr 1 dia toets

