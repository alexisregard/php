<?php

$produits = [
    'P0001' => ["désignation"=>"produit1", "prix"=>50.99, "stock"=>10],
    'P0002' => ["désignation"=>"produit2", "prix"=>99.99, "stock"=>20],
    'P0003' => ["désignation"=>"produit3", "prix"=>25.50,"stock"=>6],
    'P0004' => ["désignation"=>"produit4", "prix"=>130.99, "stock"=>4]
];

for ($i=1; $i <= count($produits); $i++){
    $réf = "P000$i";
    $désignation = $produits["P000$i"]["désignation"];
    echo $réf . " : " . $désignation;
    echo PHP_EOL;
}



/*
foreach ($produits as $produit) {
    $réf = $produit[""];
    $désignation = $produit["désignation"];
    echo $réf . " : " . $désignation;
    echo PHP_EOL;
}*/
