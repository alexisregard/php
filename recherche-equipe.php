<?php

$teams = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];

$equipeRecherche = readline(prompt: "Saisir une équipe : ");

//version avec boucle
$find = false;  //on considère qu'on n'a pas trouvé
foreach ($teams as $equipe){
    if ($equipe == $equipeRecherche){
        $find = true;
        break;  //on sort de la boucle
    }
}
if ($find == true){
    echo "$equipeRecherche sera à la prochaine coupe du monde !";
} else {
    echo "$equipeRecherche ne sera pas à la prochaine coupe du monde !";
}
echo PHP_EOL;

//version sans boucle

if (in_array($equipeRecherche,$teams)){
    echo "$equipeRecherche sera à la prochaine coupe du monde !";
} else {
    echo "$equipeRecherche ne sera pas à la prochaine coupe du monde !";
}