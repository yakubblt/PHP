<?php

function proccessSentence($sentence)
{

    $uppercase = strtoupper($sentence);

    $lowercase = strtolower($sentence);

    $titlecase = Ucwords(strtolower($sentence));

    $sentenceCase = ucfirst(strtolower($sentence));

    echo "orginele zin: $sentence\n";
    echo "Hoofdletters: $uppercase\n";
    echo "Kleine letters: $lowercase\n";
    echo "Eerste letter van elk woord hoofdletter: $titlecase\n";
    echo "Eerste letter van de zin hoofdletter : $sentenceCase\n";
}
$input = readline("Typ een zin: ");

proccessSentence($input);

