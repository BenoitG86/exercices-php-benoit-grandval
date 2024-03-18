<?php

// Exercice 1
// Comparer deux dates

$date1 = '2000-02-19';
$date2 = '1994-12-25';

strtotime($date1);
strtotime($date2);

if (strtotime($date1) > strtotime($date2)) {
    echo 'La date la plus récente est le ' . $date1 . '<br><br>';
} else {
    echo 'La date la plus récente est le ' . $date2 . '<br><br>';
}

// Exercice 2 
// Calculer la différence entre deux dates

$dateDebut = '2024-03-15';
$dateFin = '2025-02-19';

strtotime($dateDebut);
strtotime($dateFin);

$calcul = (strtotime($dateDebut) - strtotime($dateFin))/86400;

echo 'La différence de jours entre ' . $dateDebut . ' et ' . $dateFin . ' est de ';

if (strtotime($dateDebut) > strtotime($dateFin)) {
    echo $calcul . ' jours <br><br>';
} else {
    echo $calcul * -1 . ' jours <br><br>';
}

// Exercice 3
// Trouver le jour de la semaine pour une date donnée

$date = '1994-06-03';
strtotime($date);

echo 'Le ' . $date . ' nous étions un ' . date("l", strtotime($date)) . '<br><br>';

// Exercice 4
// Calculer l'âge à partir d'une date de naissance

$dateDeNaissance = '1994-06-03';
$calculAge  =  (time() - strtotime($dateDeNaissance))/31536000;
$calculAge = (int)$calculAge;

echo 'Vous êtes vieux de ' . $calculAge . ' ans, à peu près<br><br>';

// Exercice 5
// Calculer le nombre de jours restants dans l'année

// $dateFinAnnee = strtotime("last day of december next year");
// $tempsFinAnnee = (strtotime($dateFinAnnee) - time());


$dateFinAnnee = date('Y') . '-12-31';
$dateFinAnneeTS = strtotime($dateFinAnnee);

$differenceFinAnnee = (strtotime($dateFinAnnee) - time())/86400;
$differenceFinAnnee = (int) $differenceFinAnnee;

echo 'Il reste encore ' . $differenceFinAnnee . ' avant la fin de l\'année qui est ' . date('l-m-Y', strtotime($dateFinAnnee));
