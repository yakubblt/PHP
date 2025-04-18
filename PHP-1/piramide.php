<?php
$hoogte = 7;

for ($i = 1; $i <= $hoogte; $i++) {

    for ($j = $hoogte; $j > $i; $j--) {
        echo " ";

    }

    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }

    echo "\n";

}




