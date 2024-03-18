<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Formulaire de contact</h1>
    <form action="formConfirm.php" method="post">
        <div>
            <fieldset>
                <legend>Identité de genre :</legend>
                <label for="man">Homme : <input type="radio" name="gender" id="man" value="M."></label>
                <label for="woman">Femme :<input type="radio" name="gender" id="woman" value="Mme"></label>
                <label for="enby">Non-binaire :<input type="radio" name="gender" id="enby" value="Mx"></label>
            </fieldset>
        </div>
        <div>
            <label for="nom">Nom : </label>
            <input type="text" name='nom' id='nom'>
        </div>
        <div>
            <label for="telephone">Téléphone : </label>
            <input type="tel" name='telephone' id='telephone' maxlength="10">
        </div>
        <div>
            <label for="email">Adresse mél : </label>
            <input type="email" name='email' id='email' required>
        </div>
        <div>
            <fieldset>
                <legend>Loisirs :</legend>
                <label for="sport">Sport : <input type="radio" name="loisir" id="sport" value="Le sport, pour les BONHOMMES"></label>
                <label for="lecture">Lecture : <input type="radio" name="loisir" id="lecture" value="La lecture, AUSSI POUR LES BONHOMMES"></label>
                <label for="musique">Musique : <input type="radio" name="loisir" id="musique" value="Musique, PARCE QUE LES BONHOMMES"></label>
            </fieldset>
        </div>
        <div>
            <label for="majeur">Majorité :</label>
            <input type="checkbox" name="majeur" id="majeur">
        </div>
        <div>
            <label for="motif">Quel est le motif de votre demande ? : </label>
            <select name="motif" id="motif" multiple>
                <option value="J'ai une question">Question</option>
                <option value="Je me fais chier">Je m'ennuyais</option>
                <option value="Je veux un responsable">Réclamation</option>
            </select>
        </div>
        <div>
            <label for="message">Votre demande : </label>
            <textarea name="message" id="message" placeholder="Votre commentaire ici..." cols="30" rows="10" maxlength="100"></textarea>
        </div>

        <div>
            <input type="submit">
            <input type="reset">
        </div>
    </form>

</body>

</html>