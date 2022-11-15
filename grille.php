<?php

$tableau = [];
//Créer une constante, constante : variable dont la valeur ne peut être modifier en cours d'éxecution du programme
const POSITION_VIDE = "-";
const PERSONNAGE_PRINCIPAL = "P";
const JAUNE = "\033[33m";
const BLEU = "\033[34m";
const RESET ="\033[0m";
const ROUGE ="\033[31m";

$largeur = readline("Saisir une largeur : "); //nombre de colone
$hauteur = readline("Saisir une hauteur : "); //nombre de ligne

//Initialisation de la grille
//Chaque position devra être initialiser avec le caractère "-"

//Parcourir les lignes
for($i = 0; $i < $hauteur; $i++) {
    // Parcourir les colones de chaque ligne
    for ($j = 0; $j < $largeur; $j++) {
        //Accès à la position
        $tableau[$i][$j] = POSITION_VIDE;
    }
}

//Position du personnage principal

$tableau[2][3] = ROUGE . PERSONNAGE_PRINCIPAL . RESET;



//Afficher les numéros de colonnes
echo str_repeat(" ",5);
for ($i = 0; $i < $largeur; $i++){
    echo BLEU . sprintf("%02d  ", $i+1);
}

echo PHP_EOL;

//Affichage de la grille
//Parcourir chaque ligne
foreach ($tableau as $numero => $ligne) {
    echo BLEU . sprintf("%02d", $numero+1) . RESET . " | ";
    //Parcourir chaque ligne (les colonnes)
    foreach ($ligne as $numero2 => $position) {
        if ($position == PERSONNAGE_PRINCIPAL){
            echo ROUGE . $position . RESET;
        } else {
            echo " | " . JAUNE . POSITION_VIDE . RESET;
        }
    }
    echo PHP_EOL;
}


