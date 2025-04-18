<?php
echo "De tickets zijn 12 euro, vul je leeftijd in om je korting te zien: ";
$leeftijd = readline("");
if ($leeftijd == $leeftijd < 3) {
    echo "Onder 3 is het gratis omdat je dan een baby bent ";
}
$kinderen = [3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
if ($leeftijd == $kinderen) {
    echo "Jij moet 6 euro betalen omdat kinderen 50% korting krijgen ";
}
if ($leeftijd == $leeftijd > 64) {
    echo "Jij moet 9 euro betalen omdat ouderen boven vanaf 65 25% korting krijgen ";
} else {
    echo "jij krijgt geen korting en moet 12 euro betalen";
}