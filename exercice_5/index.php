<?php
$variableName = 'Jean-Eudes Delatour';

// Variables pour le calcul
$chiffreFirst = 5;
$chiffreSecond = 25;
$calcul = $chiffreFirst + $chiffreSecond;

$tableauApprenant = [
    ['prenom' => 'Emmanuel', 'age' => 34, 'lieu' => 'Chasseneuil', "mail" => "jean-emmanuel@yahoo.com", "tel" => '0785818109'],
    ['prenom' => 'Alphonse', 'age' => 327, 'lieu' => 'Poitiers', "mail" => "jean-emmanuel@yahoo.com", "tel" => '0785818109'],
    ['prenom' => 'Jean', 'age' => 42, 'lieu' => 'Niort', "mail" => "jean-emmanuel@yahoo.com", "tel" => '0785818109'],
    ['prenom' => 'Patrick', 'age' => 4, 'lieu' => 'La Rochelle', "mail" => "jean-emmanuel@yahoo.com", "tel" => '0785818109'],
    ['prenom' => 'Eudes', 'age' => 4, 'lieu' => 'La Rochelle', "mail" => "jean-emmanuel@yahoo.com", "tel" => '0785818109'],
    ['prenom' => 'Etienne', 'age' => 2, 'lieu' => 'La Rochelle', "mail" => "jean-emmanuel@yahoo.com", "tel" => '0785818109']
];

function listing($tableauApprenant)
{
    foreach ($tableauApprenant as $apprenants) {
        if ($apprenants['age'] > 20) {
            echo
            'Prénom : ' . $apprenants['prenom'] . '<br>' .
                'Âge : ' . $apprenants['age'] . '<br>' .
                'Adresse : ' . $apprenants['lieu'] . '<br>' .
                'Adresse mail : ' . $apprenants['mail'] . '<br>' .
                'Téléphone : ' . $apprenants['tel'] . '<br><br>';
        } else if ($apprenants['age'] < 3) {
            echo
            'La personne est un bébé, aucun commentaire là-dessus';
        } else {
            echo
            'La personne a moins de 20 ans, sale jeune va !';
        }
    }
}

//  print_r($tableauApprenant);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre nom pas ici</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Bienvenue sur mon site</h1>
    </header>
    <main>
        <p>Aujourd'hui nous allons utiliser du f*cking php !</p>
        <?php echo 'Votre nom sera maintenant : ' . $variableName . ' !<br>' ?>
        <?php echo 'Votre chiffre préféré (qui est un nombre) sera maintenant : ' . $calcul . ' !<br><br>' ?>
        <?php listing($tableauApprenant);

        ?>
    </main>
</body>

</html>