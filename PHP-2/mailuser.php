<?php

$email = readline("wat is je E-mail: ");

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $username = explode('@', $email)[0];
    echo " de gebruikersnaam is " . $username;
} else {
    echo "je het een verkeerde email in gevoerd";
}



