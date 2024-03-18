<?php

session_start();
// setcookie('cookiecolor', 'color',time()+3600, '/');
// $_COOKIE['color'] = $_POST['color'];

if (isset($_POST['couleurs'])) {
    $color = $_POST['couleurs'];
    setcookie("couleur", $color, time() + 3600, "/");
} else {
    if (isset($_COOKIE["couleur"])) {
        $color = $_COOKIE["couleur"];
    } else {
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
    <h2>La réponse tout de suite</h2>
    <?php echo 'C\'est le ' . $_COOKIE['couleur'] . ', félicitations ! '; ?>
</body>

</html>