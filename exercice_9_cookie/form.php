<?php

session_start();

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
        <h1>Formulaire à cookies</h1>
    </header>
    <form action="confirm.php" method="post">
        <div><label for="username">Nom d'utilisateur : </label><input type="text" id="username" name="username" placeholder="Votre login ici" required></div>
        <div><label for="password">Mot de passe : </label><input type="password" id="password" name="password" placeholder="Votre MDP ici" required></div>
        <div><input type="submit"></div>
        <div><input type="reset"></div>
    </form>
</body>
</html>