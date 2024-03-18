<?php

// lancement de session

session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

// print_r($_POST);

// vérification de SESSION

// if (isset($_SESSION['username'])) {
//     echo 'Utilisateur : ' . $_SESSION['username'];
// } else {
//     echo 'SESSION \'user\' non défini';
// }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Formulaire à SESSIONs</h1>
        <nav><a href="form.php">Retour au Formulaire</a></nav>
    </header>
    <main>
    <?php echo '<p>La session de <span>l\'utilisateur</span> ' . $_SESSION['username'] . ' a pour <span>mot de passe</span> ' . $_SESSION['password'] . '</p>'; ?>
    </main>
    <footer>
        <p>All rights not existent, go fuck some shit up</p>
    </footer>
</body>

</html>