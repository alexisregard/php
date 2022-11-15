<?php

$nomDeDomaine = readline("Saisir un nom de domaine : ");

$emails= [
    "Julie" => "julie@gmail.com",
"Charlotte" => "charlotte@free.fr",
    "Louis" => "louis@laposte.net",
    "Pierre" => "pierre@gmail.com"
];

$noms = [];

foreach($emails as $nom => $email) {
    if(str_contains($email, $nomDeDomaine)){
        $noms[] = $nom;
    }
}

if (count($noms) == 0){
    echo "aucune personne n'a ce nom de domaine dans son adresse";
} else {
    foreach ($noms as $nom) {
        echo $nom;
        echo PHP_EOL;
    }
}

echo "Il y a" . count($noms) . "personnes ayant ce domaine ! ";