<?php
$knikkers = readline("Hoeveel knikkers begin je mee?:");
if ($knikkers >= 21 ) {
    echo "Dit zijn teveel knikkers";

}

else { 
$gooi = readline ("Hoeveel knikkers gooi je");
Echo "\n";
$over = $knikkers - $gooi;
echo "je hebt $gooi knikkers gegooid";
echo "\n"; 
echo "je het $over knikker over";
}

