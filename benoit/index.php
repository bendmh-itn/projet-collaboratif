<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benoit de Mahieu</title>
    <link rel="stylesheet" href="CSS/index.css">
    <style>
        textarea {
            vertical-align: top;
        }
    </style>
</head>

<body>
    <h1>Un super formulaire</h1>
    <form action="" method="">
        <fieldset>
            <legend>Données personnelles</legend>
            <div>
                <label for="prenom">Votre prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div>
                <label for="nom">Votre nom</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div>
                <label for="dateDeNaissance">Votre date de naissance</label>
                <input type="date" id="dateDeNaissance" name="dateDeNaissance" required>
            </div>
        </fieldset>
        <fieldset>
            <legend>Les nouveaux input</legend>
            <div>
                <label for="url">Votre URL</label>
                <input type="url" id="url" name="url" required>
            </div>
            <div>
                <label for="telephone">Votre numéro de téléphone</label>
                <input type="tel" id="telephone" name="telephone" required>
            </div>
            <div>
                <label for="range">Votre appréciation (entre 10 et 20)</label>
                <input type="range" id="range" name="range" min="10" max="20" step="2" required>
            </div>
            <div>
                <label for="color">Votre couleur préférée</label>
                <input type="color" id="color" name="color" required>
            </div>
            <div>
                <label for="search">Votre recherche</label>
                <input type="search" id="search" name="search" required>
            </div>
            <div>
                <label for="file">Choisis un fichier</label>
                <input type="file" id="file" name="file" required>
            </div>
            <div>
                <label for="time">Choisis une heure</label>
                <input type="time" id="time" name="time" required>
            </div>
            <div>
                <label for="month">Choisis un mois</label>
                <input type="month" id="month" name="month" required>
            </div>
            <div>
                <label for="week">Choisis une semaine</label>
                <input type="week" id="week" name="week" required>
            </div>
            <div>
                <label for="textarea">Vos explications</label>
                <textarea name="textarea" id="textarea" cols="30" rows="5" spellcheck="true"></textarea>
            </div>
            <div>
                <label for="reset">Votre recherche</label>
                <input type="reset" id="reset" name="reset" required>
            </div>
        </fieldset>
        <fieldset>
            <legend>Bouton envoi</legend>
            <input type="submit" value="Envoyer">
        </fieldset>
    </form>
</body>

</html>