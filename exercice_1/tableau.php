<?php

$liste =['pomme','banane','orange'];
$liste[] = 'kiwi';
    // print_r($liste);
    // pour débuguer un tableau
foreach ($liste as $fruit){
    echo $fruit . '<br>';
}
echo '<br>';

$personnes = [ 
    [
    'prenom' => 'JP',
    'nom' => 'Starack',
    'mail' => 'jp@live.fr',
    'phone' => '0707070708',
    'age' => 42,
    'vaccin' => true,
    ],
    [
    'prenom' => 'Eminem',
    'nom' => 'Orangerimeavecbanane',
    'mail' => 'whiteboy86@yahoo.com',
    'phone' => '0707070708',
    'age' => 87,
    'vaccin' => false,
    ],
    [
    'prenom' => 'Sartre',
    'nom' => 'Jean-Paul',
    'mail' => 'existentialisme@question.fr',
    'phone' => '0707070708',
    'age' => 18,
    'vaccin' => true, 
    ],
    [
    'prenom' => 'Exemple',
    'nom' => 'Exemple',
    'mail' => 'placeholder@ici.fr',
    'phone' => '0707070708',
    'age' => 27,
    'vaccin' => true,
    ],
    [
    'prenom' => 'Supreme',
    'nom' => 'NTM',
    'mail' => 'drgyneco@medecin.fr',
    'phone' => '0707070708',
    'age' => 47,
    'vaccin' => true,
    ],
    [
    'prenom' => 'Alphonse',
    'nom' => 'Elric',
    'mail' => 'mommyissue@doctissimo.com',
    'phone' => '0707070708',
    'age' => 54,
    'vaccin' => false,
    ]
];

$personnes[] = [
    'prenom' => 'Patrick',
    'nom' => 'Starfish',
    'mail' => 'patrickletoile@yahoo.fr',
    'phone' => '0708090102',
    'age' => 28,
    'vaccin' => false,
];

//unset($personne[0]);
//shuffle($personne);

foreach($personnes as $identite)

{
    if($identite['vaccin'] == true) 
    {
        echo  'Nom : '.$identite['nom'] . '<br>' 
        . 'Prénom : '.$identite['prenom'] . '<br>' 
        . 'Mél : '.$identite['mail'] . '<br>' 
        . 'Âge : '.$identite['age'] . '<br>' 
        . 'Téléphone : '.$identite['phone'] . '<br>' 
        . 'Vacciné : ' .($identite['vaccin'] ? 'Oui' : 'Non')
        . '<br><br>';
    }
}