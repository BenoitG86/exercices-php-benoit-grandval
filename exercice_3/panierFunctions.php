<?php

function panierProduitPrixTotalHT($quantite, $prixKgHT)
{
    $prixTotalHT = $quantite * $prixKgHT;
    return $prixTotalHT;
}

function panierMontantTotalHT($panier)
{
    $montantHT = 0;
    foreach ($panier as $fruit) {
        //    $montantHT = $montantHT + ($fruit['quantite'] * $fruit['prixKgHT']);
        $montantHT += panierProduitPrixTotalHT($fruit['quantite'], $fruit['prixKgHT']);
    }
    return $montantHT;
}

function panierMontantTotalTTC($panier, $TVA)
{

    $montantTTC = 0;
    foreach ($panier as $fruit) {
        $montantTTC += panierProduitPrixTotalHT($fruit['quantite'], $fruit['prixKgHT'])*$TVA;
    }
    return $montantTTC;
}
