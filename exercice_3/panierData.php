<?php

// Déclaration des données
$TVA = 1.20;

$panier = [
    1003 => [
        'nom'           => 'Pomme',
        'reference'     => 6703,
        'prixKgHT'      => 6.95,
        'quantite'      => 1,
        'fournisseur'   => [
            'nom'   => 'GAEC des Fermiers Limousins',
            'ville' => 'Limoges',
            'pays'  => 'France',
        ],
    ],
    9008 => [
        'nom'           => 'Orange',
        'reference'     => 9008,
        'prixKgHT'      => 7.12,
        'quantite'      => 1.5,
        'fournisseur'   => [
            'nom'   => 'EURL Importation de fruits',
            'ville' => 'Paris',
            'pays'  => 'France',
        ],
    ],
    6703 => [
        'nom' => 'Ananas',
        'reference' => 6703,
        'prixKgHT' => 12.50,
        'quantite' => 3,
        'producteur' => [
            'nom'   => 'Ananas du Sud',
            'ville' =>  null,
            'pays'  => 'Costa-Rica',
        ],
    ],
    1876 => [
        'nom' => 'Pêche',
        'reference' => 1876,
        'prixKgHT' => 18.70,
        'quantite' => 2,
        'producteur' => [
            'nom'   => 'Les vignes du Sud',
            'ville' => 'Marseille',
            'pays'  => 'France',
        ],
    ],
];

$client = [
    'nom'       => 'DURAND',
    'prenom'    => 'Claude',
    'adresse'   => '4 rue de la Plage',
    'ville'     => 'NIORT',
    'pays'      => 'France',
];
