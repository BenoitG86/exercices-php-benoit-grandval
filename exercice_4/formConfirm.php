<?php
print_r($_POST);

if(empty($_POST))
{
    echo '$_POST est vide, au secours !';
    exit();
}
if (isset($_POST['nom'])==null)
{
    echo '$_POST n\'a pas de nom, au secours !';
    exit();
}
if (strlen($_POST['nom'])>80)
{
    echo 'Oh noes, quelqu\'un essaye de pirater le site, au secours !';
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponses</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h1>Nous avons bien reçu votre message ! Félicitations !</h1>
    <p>
        Bonjour <?php echo $_POST['gender'] . ' ' . $_POST['nom'] ?> <br>
    </p>
    <ul>
        <li><span>Motif :</span> <?php echo $_POST['motif'] ?></li>
        <li><span>Commentaires :</span> <?php echo $_POST['message'] ?></li>
        <li><span>Mél : </span> <?php echo $_POST['email'] ?></li>
        <li><span>Téléphone :</span> <?php echo $_POST['telephone'] ?></li>
        <li><span>Majorité :</span> <?php echo $_POST['majeur'] ?></li>
        <li><span>Loisirs :</span> <?php echo $_POST['loisir'] ?></li>
    </ul>
</body>

</html>