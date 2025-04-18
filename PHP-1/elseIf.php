<?php
$honden = readline("hoeveel honden:");
if ($honden >= 21) {
    echo "dit zijn 
    teveel honden in de asiel";

} else {
    $hoeveel = readline('hoeveel honden komen');
    echo "\n";
    $over = $honden - $hoeveel;
    echo "je hebt $over over";
}
