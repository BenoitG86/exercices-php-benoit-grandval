<?php
// Mesures de protection

if (empty($_GET)) {
    echo '$_GET est vide, au secours !';
    exit();
}
if (isset($_GET['name']) == null) {
    echo '$_GET n\'a pas de nom, au secours !';
    exit();
}
if (strlen($_GET['name']) > 80) {
    echo 'Oh noes, quelqu\'un essaye de pirater le site, au secours !';
    exit();
}
// Enregistrement de données

$name = $_GET['name'];
$surname = $_GET['surname'];
$email = $_GET['email'];

if (!empty($name)) {
    $file = fopen('data.txt', 'w');
    fwrite($file, $name . ' ,<br> ' . $surname . ' ,<br> ' . $email );
    fclose($file);

    $read = file('data.txt');

    foreach ($read as $sread) {
        echo $sread;
    }
}
// print_r($_GET['interests']);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Nous avons bien reçu votre message ! Félicitations !</h1>
    </header>
    <main>
        <p>Bonjour <?php echo $_GET['surname'] . ' ' . $_GET['name'] ?> <br></p>
        <ul>
            <li>Mél : <?php echo $_GET['email'] ?></li>
            <li>Centre d'intérêts : <ul><?php foreach ($_GET['interests'] as $interest) { echo '<li>' . $interest . '</li><br>';} ?></ul>
            </li>
            <li>Lettre de nouvelles : <?php echo $_GET['newsletter'] ?></li>
        </ul>
    </main>
</body>

</html>