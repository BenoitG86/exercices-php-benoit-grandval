<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Quel jour sommes-nous ?</h1>
<!-- <form action="">
    <label for="jour">Jour de la semaine : </label>
    <input type="text" id="jour" name="day">
</form> -->

</body>
</html>


<?php

// $compteur = 0;
// while ($compteur < 10) {
//     ++$compteur;
//     echo $compteur . '<br>';
// }

// echo $_REQUEST['day'];
// echo $_POST['day'];

$dateDuJour = new DateTime();
$day = $dateDuJour->format('l');

echo $day;
echo '<br><br>';

switch ($day){
case 'Monday':
    echo 'C\'est le début de la semaine. Bon courage. o/';
    break;

case 'Friday':
    echo 'C\'est bientôt le weekend.';
    break;

default:
    echo 'Un jour comme un autre.';   
}


/* Préférez l'utilisation du switch

if ($day == 'lundi') {
     echo 'C\'est le début de la semaine.';
 } else if ($day == 'vendredi') {
 echo 'C\'est bientôt le weekend.';
 } else {
     echo 'Un autre jour de la semaine.';
 }
*/