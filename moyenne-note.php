<?php

$notes = [10, 12.5, 14, 7, 15, 9.5, 8];
$somme = 0; 

foreach($notes as $note) {
    $somme = $somme + $note;
} 

$moyenne = $somme / count($notes);
echo $moyenne;  
echo PHP_EOL;

if($moyenne < 10){
    echo "Vous n'avez pas votre diplome";
} elseif ($moyenne >= 10 && $moyenne < 12) {
    echo "mention passable";
} elseif ($moyenne >= 12 && $moyenne < 14) {
    echo "mention assez bien";
} elseif ($moyenne >= 14 && $moyenne < 16) {
    echo "mention bien";
} else {
    echo "mention très bien";
}



