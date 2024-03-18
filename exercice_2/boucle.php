<?php

echo '<h1>' . 'Compteur' . '</h1><ul>';
for ($compteur = 1; $compteur <= 3; ++$compteur) {
    echo
    'Liste de fromage n°' . $compteur . '<br><br>
        <li>Fromage à pate dure</li>
        <li>Fromage à pate molle</li>
        <li>Fromage dans des pâtes</li>
        <br>
    '    
    ;
}
echo '</ul>';

$voitures = ['Renault','Reugeot', 'Ritroën', 'Rorsche','Rolkswagen','Ritsubishi'];

shuffle($voitures) ;

foreach ($voitures as $voiture) {

    echo $voiture . '<br><br>' ;
}
