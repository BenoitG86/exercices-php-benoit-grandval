<?php

if (empty($_POST)) {
    echo '$_POST est vide, au secours !';
    exit();
}
if (isset($_POST['name']) == null) {
    echo '$_POST n\'a pas de nom, au secours !';
    exit();
}
if (strlen($_POST['name']) > 80) {
    echo 'Oh noes, quelqu\'un essaye de pirater le site, au secours !';
    exit();
}

$name = $_POST['name'];

if (!empty($name))
{
    file_put_contents ('data.txt', $name, FILE_APPEND);
}
    $read = file_get_contents('data.txt')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire d'enregistrement de votre nom !</h1>
    <p>Votre nom est</p> <?php echo $read; ?>
</body>
</html>