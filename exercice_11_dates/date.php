<?php

// Exercice 4 : Calculer le prochain anniversaire de qq'un

//Définitions des variables
$dateBirthday = $_POST['date'];
$yearCurrent = time();

//Calcul de la date du prochain anniversaire à partir de la date d'anniversaire
$tableauBirthday = explode("-", $dateBirthday);
$nextBirthday = date('Y') . '-' . $tableauBirthday[1] . '-' .  $tableauBirthday[2];

//Conversion en timestamp
strtotime($nextBirthday);

//Calcul de la différence

$diffYear =  (strtotime($nextBirthday) - time()) / 86400;
$diffYear = (int) $diffYear;

if (!empty($_POST)) {
    if ($diffYear > 0){
        echo 'La date de votre prochain anniversaire est le ' . $nextBirthday . ' et sera dans : ' . $diffYear . ' jours. <br>';

    }else{
        echo 'La date de votre dernier anniversaire était le ' . $nextBirthday . ' et était il y a : ' . $diffYear*-1 . ' jours. <br>';

    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date d'anniversaire</title>
</head>

<body>
    <h1>Félicitations, vous êtes vieux</h1>

</body>

</html>