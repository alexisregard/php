<?php

$tableau = [
    ["prenom" => "Julie", "moyenne" => 9],
    ["prenom" => "Charlotte", "moyenne" => 15],
    ["prenom" => "Louis", "moyenne" => 16],
    ["prenom" => "Jules", "moyenne" => 14]
];



for ($i = 0; $i < count($tableau); $i++){
    $nom = $tableau[$i]["prenom"];
    $moyenne = $tableau[$i]["moyenne"];
    $nouvelleMoyenne = 0;
    if ($moyenne > 10){
        echo "$nom a une moyenne de $moyenne. Le BTS est obtenue";
    } echo PHP_EOL;
    if ($moyenne >= $nouvelleMoyenne){
        $nouvelleMoyenne = $moyenne;
        echo $moyenne;
    }
}



//Affiche avec une boucle foreach

foreach($tableau as $note) {
    //$etudiant est un tableau associatif
    $moyenne = $note["moyenne"];
    echo "La meilleure moyenne est" . max($moyenne["moyenne"]);
    echo PHP_EOL;
}

