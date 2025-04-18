<?php

$aantallitervoor = readline("Hoeveel liter voor de rit:");
$aantalliterna = readline("Hoeveel liter na de rit:");
$aantalKMVoor = readline("kilometerafstand voor de rit:");
$aantalKMna = readline("kilometer afstand na de rit:");
echo (100 * ($aantallitervoor - $aantalliterna) / ($aantalKMVoor - $aantalKMna));
