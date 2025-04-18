<?php

$begin = readline("vul hier de begin getal in: ");
$einde = readline("vul hier het eind getal in: ");
$antwoord = $einde - $begin;
echo "het verschil is $antwoord \n";
for ($x = 0; $x < $antwoord; $x++) {
    echo ".";

}