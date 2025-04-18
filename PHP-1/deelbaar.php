<?php

$deelgetal =  readline("geef de deeltal: ");
$deler =  readline("geef de deler: ");

$antwoord = $deler / $deelgetal;
if ($antwoord < 1) {
    echo $antwoord;
    echo " De deler past niet in de deeltal";

}

else { echo $antwoord;}