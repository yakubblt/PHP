<?php
$straal = readline("Geef de straal: ");
$omtrek = 2 * M_PI * $straal;
$oppervlakte = M_PI * pow($straal, 2);
$diameter = 2 * $straal;

echo "straal: " . $straal . "\n";
echo "diameter: " . $diameter . "\n";
echo "omtrek: " . $omtrek . "\n";
echo  "oppervlakte: " . $oppervlakte . "\n";


      