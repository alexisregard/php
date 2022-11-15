<?php

$notes = [10, 12.5, 14, 7, 15, 9.5, 8];
$meilleureNote= $notes[0];

for ($i=1; $i < count($notes); $i++){
    if ($notes[$i] > $meilleureNote){
        $meilleureNote = $notes[$i];
    }
}

/*
foreach ($notes as $note) {
    if ($notes > $meilleureNote){
        $meilleureNote = $note;
    }
}
*/

echo "La meilleure note est $meilleureNote";
echo PHP_EOL;
$meilleureNote2 = max($notes);

echo "La meilleure note est $meilleureNote2";