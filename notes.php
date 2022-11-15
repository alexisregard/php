<?php


$notes = [];
$saisie = readline(prompt: "Saisir une note (q pour arrêter) : ");

while ($saisie != "q"){
    if ($saisie > 0 && $saisie < 20 && $saisie != "q"){
        $notes[]=$saisie;
    } elseif ($saisie == "q") {
        break;
    } else{
        echo "La note saisie est incorrecte !";
        echo PHP_EOL;
    }
    $saisie = readline(prompt: "Saisir une note (q pour arrêter) : ");
}

echo PHP_EOL;

$nombreNote = count($notes);
echo "Vous avez saisie $nombreNote notes.";
echo PHP_EOL;
echo "Les notes saisie sont" . $notes;



