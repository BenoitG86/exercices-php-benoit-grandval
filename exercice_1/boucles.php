<?php

/*compteur au départ de la boucle
tant que le compteur est inférieur ou égal au nombre spécifié
ajout de +1 à chaque nouveau début de boucle */

for ($premiereBoucleCompteur = 1; $premiereBoucleCompteur <= 10; ++$premiereBoucleCompteur) 
{
    $nomTable = '<h3>' . 'Table de' . ' ' . $premiereBoucleCompteur . '</h3>

    ';
    echo $nomTable;
    echo '<ul>';


    for ($deuxiemeBoucleCompteur = 2; $deuxiemeBoucleCompteur <= 10; ++$deuxiemeBoucleCompteur)
    {
        $calcul = $premiereBoucleCompteur * $deuxiemeBoucleCompteur;
        echo '<li>' . $premiereBoucleCompteur . ' x ' . $deuxiemeBoucleCompteur . ' = ' . $calcul . '</li><br>
        '; 
    }
    echo '</ul>';
}

?>