<?php
function gooiDobbelsteen()
{

    return random_int(1, 6);
}

$resultaat = gooiDobbelsteen();

echo "je hebt " . $resultaat . " gegooid!!";
