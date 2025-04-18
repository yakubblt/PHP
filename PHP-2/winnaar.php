<?php

$speler1 = readline("Hoeveel punten heeft speler 1:");
$speler2 = readline("Hoeveel punten heeft speler 2:");

if ($speler1 > $speler2) {
    echo "speler 1 heeft gewonnen";

}

else if ($speler1 < $speler2) {
    echo "speler 2 heeft gewonnen";
}
