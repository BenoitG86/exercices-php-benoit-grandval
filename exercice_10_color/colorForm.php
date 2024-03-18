<?php

session_start();
// setcookie('cookiecolor', 'color', time() + 3600, '/');
// $_COOKIE['color'] = $_POST['color'];


if (isset($_POST['couleurs'])) {
    $color = $_POST['couleurs'];
    setcookie("couleur", $color, time() + 3600, "/");
}
else {
    if(isset($_COOKIE["couleur"])) {
        $color = $_COOKIE["couleur"];
    }
    else {
        $color = '#FFFFFF';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couleur préférée</title>
    <!-- <link rel="stylesheet" href="style.php"> -->
</head>

<body style="background-color: <?php echo $color; ?>">
    <h1>Aujourd'hui nous allons répondre à la grande question</h1>
    <p>Quelle est votre couleur préférée ?</p>
    <form action="colorAnswer.php" method="post">
        <div>
            <label for="color-select">Alors, quelle est votre couleur préféré ?</label>
            <select name="couleurs" id="color-select">
                <option>Sélectionnez une couleur</option>
                <option value='#0000FF'>Bleu</option>
                <option value='#FF0000'>Rouge</option>
                <option value='#FFFF00'>Jaune</option>
                <option value='#00FF00'>Vert</option>
                <option value='#FFC0CBF'>Rose</option>
                <option value='#582900'>Marron</option>
            </select>
        </div>
        <div>
            <input type="submit">
            <input type="reset">
        </div>
    </form>
</body>

</html>