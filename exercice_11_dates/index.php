<?php

// Exercice 1 : afficher la date et l'heure actuelle

echo date("d-m-Y H:i:s") . '<br>';
echo time();

// Exercice 2 : Afficher le mois actuel

echo date("F") . '<br>';

// Exercice 3 : Ajouter 7 jours à la date d'hui

$dateBientot = strtotime("+1 week");
echo date("d-m-Y" , $dateBientot);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date d'anniversaire</title>
</head>

<body>
    <form action="date.php" method="post">
        <div>
            <label for="date">Votre date de naissance : </label>
            <input id="date" type="date" name="date">
        </div>
        <div>
            <input type="submit">
            <input type="reset">
        </div>
    </form>


</body>

</html>