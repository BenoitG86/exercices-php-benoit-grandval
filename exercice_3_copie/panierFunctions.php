<?php

function calculMontantPanierTotal($panier)
{
    $montantPanierTotal = 0;
    foreach ($panier as $fruit) {
        $montantPanierTotal = $fruit['prixKgHT'] * $fruit['quantite'];
    }
    return $montantPanierTotal;
}

// function calculMontantPanierTotalTTC($panier) {
//     $tva = 0.0196;
//     $montantPanierTotalTTC = 0;
//     foreach ($panier as $fruit) {
//         $montantPanierTotalTTC = $montantPanierTotal * $tva;
//     }
//     return $montantPanierTotalTTC;
// }

$tva = 0.0196;


//Produit 3 - Quantité 2 - Prix total TTC : 32.85€

function affichePanier($panier)
{
    foreach ($panier as $fruit) {
        echo '<li>Produit ' . $fruit['nom'] . ' Quantité : ' . $fruit['quantite'] . ' Prix /kg (HT) : ' . $fruit['prixKgHT'] . '€ Prix total (HT) : ' . ($fruit['prixKgHT'] * $fruit['quantite']) . '€</li>';
    }
    
}
