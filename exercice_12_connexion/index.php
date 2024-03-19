<?php

// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "ecole-de-musique";

// Établir la connexion
$connexion = mysqli_connect(
      $serveur,
      $utilisateur,
      $mot_de_passe,
      $base_de_donnees
);

// Vérifier la connexion
if (!$connexion) {
      die("Échec de la connexion : " . mysqli_connect_error());
} else {
      echo "Connexion réussie à la base de données.";
}

// Sélection

$sql = "SELECT eleve.nom, instrument.nom_instrument, cours.date_cours 
FROM `cours` 
INNER JOIN eleve
	ON eleve.id_eleve = cours.id_eleve
INNER JOIN instrument
	ON instrument.id_instrument = cours.id_instrument
WHERE instrument.id_instrument = 1;";
$resultat = mysqli_query($connexion, $sql);
$resultatCheck = mysqli_num_rows($resultat);


if ($resultatCheck > 0) {
      while ($row = mysqli_fetch_assoc($resultat))
      {
            echo $row['nom'] . ' a cours de ' . $row['nom_instrument'] . '<br>';
      }

} else {
      echo "NSM, c'est relou, y a une erreur wsh" . mysqli_error($connexion);
}

//Fermer la connexion
mysqli_close($connexion);

?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Connexion</title>
</head>

<body>
<h1>Connexion aux bases de données</h1>
</body>

</html>