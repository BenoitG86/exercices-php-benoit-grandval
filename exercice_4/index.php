<?php

$age = 26;

if ($age > 21) {
    echo 'Vous êtes vieux';
} else {
    echo 'Vous êtes un peu moins vieux';
}

echo '<br><br>';

// Condition sur la taille du prénom

$prenom = 'jeanpierre delatou';

// if (strlen($prenom) > 20)
// {
//     echo 'Votre prénom est malheureusement trop long';
// }
// else if (strlen($prenom) < 10)
// {
//     echo 'Votre prénom est malheureusement trop court';
// }

// if (strlen($prenom) > 10 && strlen($prenom) < 20)
// {
// echo 'Votre prénom ' . $prenom . ' est vraiment génial !';
// }

if (strlen($prenom) > 15 && strlen($prenom) < 30 && strlen($prenom) % 2 == 0) {
    echo 'Votre prénom ' . $prenom . ' est vraiment génial, mais aussi extrêmement spécifique !';
}
