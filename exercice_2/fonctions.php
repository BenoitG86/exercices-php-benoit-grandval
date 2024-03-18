<?php

$prenom = 'Benoît';

function saysHello($prenom)
{
    echo 'Bonjour ' . $prenom . '<br>';
}

saysHello($prenom);
saysHello('Patrice');

function additionner($nombre1, $nombre2)
{
    $addition = $nombre1 + $nombre2;
    return $addition;
}

echo additionner(8, 150) . '<br>';

function calculVolume($longueur, $largeur, $hauteur)
{
    $calculV = $longueur * $largeur * $hauteur;
    return $calculV;
}

echo calculVolume(5, 8, 2) . ' m3<br>';



// Déclaration du tableau de fruit

$fruits = ['pomme', 'fraises', 'orange'];

function listFruits($fruits)
{
    $listeFruits = 'La liste des fruits est ';
    foreach ($fruits as $fruit) {
        $listeFruits .= $fruit . ' - ';
    }
    return $listeFruits;
}

echo listFruits($fruits);
