<?php

include('panierData.php');
include('panierFunctions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<style>
    li {
        list-style: none;
        padding: 10px;
    }

    body {
        background-color: blanchedalmond;
        width: 1200px;
        margin: auto;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Mon panier</h1>

    <ul>
        <?php affichePanier($panier) ?>
    </ul>

    <strong> TOTAL DU PANIER HT : <?php calculMontantPanierTotal($panier) ?>€</strong> <br>
    <strong> TOTAL DU PANIER TTC : <?php calculMontantPanierTotal($panier) * $tva ?>€</strong> <br>

</body>

</html>