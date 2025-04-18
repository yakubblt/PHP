<?php
$dag = readline("Welke dag ben je geboren: ");
$maand = readline("Welke maand ben je geboren: ");
$jaar = readline("Welke jaar ben je geboren: ");

$datum = new datetime();
$dateOfBirth = DateTime::createFromFormat('d/m/Y', "$dag/$maand/$jaar") ;

if ($dateOfBirth == false) {
    Echo "Geef een bestaand geboortedatum";
}
else {
    $age = $datum->diff($dateOfBirth)->y;
    echo "Deze persoon is: $age jaar oud .\n";
}