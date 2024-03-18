<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Bienvenue sur le formul'air</h1>
    </header>
    <main>
        <p id="required">Les champs obligatoires sont suivis de *</p>
        <div id="formulaire">
            <form action="reponse.php" method="get">
                <div><label for="name">Nom : </label><input type="text" id="name" name="name" required></div>
                <div><label for="surname">Prénom : </label><input type="text" id="surname" name="surname"></div>
                <div><label for="birthdate">Date de naissance : </label><input type="date" id="birthdate" name="birthdate"></div>
                <div><label for="mail">Adresse mél : </label><input type="email" id="mail" name="email"></div>
                <div><label for="newsletter">Abonnement newsletter :</label><input type="radio" id="newsletter" name="newsletter" value="Voilà, vous êtes abonnés"></div>
                <div>
                    <fieldset>
                        <legend>Centre d'intérêts</legend>
                        <label for="chocolat">Chocolat </label> <input type="checkbox" value="Chocolat" id="chocolat" name="interests[]">
                        <label for="crepes">Crèpes </label> <input type="checkbox" value="Crèpes" id="crepes" name="interests[]">
                        <label for="videogames">Jeux vidéos </label> <input type="checkbox" value="Jeu vidéal" id="videogames" name="interests[]">
                    </fieldset>
                </div>
                <div>
                    <input type="submit">
                    <input type="reset">
                </div>
            </form>
        </div>
    </main>
    <footer>
        <p>© All right served cold - Unlimited</p>
    </footer>
</body>

</html>