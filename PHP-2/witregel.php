<?php

for ($x = 0; $x <= 101; $x++) {

    echo rand(0, 100) . "\n";

    if (($x + 1) % 3 <= 0) {
        echo "\n";
    }
}