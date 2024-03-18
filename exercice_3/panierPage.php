    <?php
    include('panierData.php');
    include('panierFunctions.php'); ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            body {
                background-color: blanchedalmond;
                width: 880px;
                margin: 0 auto;
            }

            li {
                list-style: none;
            }
        </style>
    </head>

    <body>

        <h1>Mon panier</h1>
        <?php foreach ($panier as $fruit) { ?>
            <ul>
                <li>
                    Produit : <?php echo $fruit['nom']; ?> -
                    Quantité : <?php echo $fruit['quantite']; ?> -
                    Prix /kg : <?php echo $fruit['prixKgHT']; ?> €
                    Prix total HT : <?php echo $fruit['quantite'] * $fruit['prixKgHT']; ?> €
                </li>
            </ul>
        <?php } ?>
        <strong> TOTAL DU PANIER HT: <?php echo panierMontantTotalHT($panier) ?> €</strong>
        <strong> TOTAL DU PANIER TTC: <?php echo panierMontantTotalTTC($panier, $TVA) ?> €</strong>
    </body>

    </html>

    