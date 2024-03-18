<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formation</h1>
    <!-- ceci est un commentaire HTML -->
    <p>Ceci est un paragraphe</p>
    </body>

<?php
    // ... ceci est un commentaire php
    /* commentaire multi ligne
    fin de commentaire mutli ligne*/
    /** annotation, mais aucune idée de quoi ça fait */

    //définir variable prenom
$prenom ='Benoit';
    //écrire ligne de caractère et inclure variable prénom définie
echo "Le prénom est : $prenom. C'est un beau prénom ça $prenom.<br>";
    //ajouter espacement
echo '<br>';
    //écrire chaîne de caractère et inclure variable prénom définie
echo 'Le prénom est : ' . $prenom . '.' . ' C\'est un beau prénom ça ' . $prenom . '.';

    /*définir variable de nombres entiers
    puis additionner variables choisies*/
$anneeLycee = (int) 4;
$anneeFac = (int) 3;
$anneePoulet = (int) 2;
$totalAnnee = (int) $anneeLycee + $anneeFac + $anneePoulet;

    //ajouter 2 sauts de lignes
echo '<br><br>';
    //écrire chaîne de caractère et inclure variable définie
echo 'Je suis en activité professionnelle et en formation depuis : ' . $totalAnnee . ' ans. <br><br>Félicitations';
echo '<br><br>';

$a = (int) 5;
$b = (int) 40;
++$a;
++$b;

if ($b>$a) {
    echo $b . ' est supérieur à ' . $a;
}
else {
    echo $b . ' est inférieur à ' . $a;
}

echo '<br><br>';

for ($i = 1; $i <= 1000; $i++) {
    echo $i . '<br>';
}

?>
</html>
