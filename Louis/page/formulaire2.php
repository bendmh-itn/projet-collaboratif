<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire moderne | Journal GEEK</title>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/flex.css">
</head>
<body>
    <div>
        <a class="buttonback" href="auth.php"><img class="arro" src="../img/arro.ico" alt=""> Retourner à la page d'authentification</a>
        <div class="divtitre flexContainer justify-content-center">
            <h1 class="titre">Bienvenue sur le journal d'un <h1>
            <h1 class="geek">GEEK</h1>
        </div>
    </div>

    <form action ="">
        <div class="cases flexContainer justify-content-center">
            <fieldset>
                <legend>Données Personnelles</legend>
                <div>
                    <label for="prenom">Votre prénom:<span>*</span></label>
                    <input input="text" id="prenom" name="prenom" required>
                </div>
                <div>
                    <label for="nom">Votre nom:<span>*</span></label>
                    <input input="text" id="nom" name="nom" required>
                </div>
                <div>
                    <label for="date">Votre date de naissance:<span>*</span></label>
                    <input type="date" id="date" name="date" required>
                </div>
            </fieldset>

            <fieldset>
                <legend>Les nouveaux inputs</legend>
                <div>
                    <label for="url">Votre URL:</label>
                    <input type="url" id="url" name="url">
                </div>
                <div>
                    <label for="phone">Votre numéro de téléphone:<span class="phonespan">*</span> +32 </label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3} [0-9]{2} [0-9]{2} [0-9]{2}">
                </div>
                <div>
                    <label for="appreciation">Votre appréciation (entre 10 et 20): </label>
                    <input type="range" id="appreciation" name="appreciation" min="10" max="20">
                </div>
                <div>
                    <label for="colour">Votre couleur préférée: </label>
                    <input type="color" id="colour" name="colour">
                </div>
                <div>
                    <label for="search">Votre recherche: </label>
                    <input type="search" id="search" name="search">
                </div>
                <div>
                    <label for="file">Choisis un fichier: </label>
                    <input type="file" id="file" name="file">
                </div>
                <div>
                    <label for="time">Choisis une heure</label>
                    <input type="time" id="time" name="time">
                </div>
                <div>
                    <label for="month">Choisis un mois</label>
                    <input type="month" id="month" name="month">
                </div>
                <div>
                    <label for="week">Choisis une semaine</label>
                    <input type="week" id="week" name="week">
                </div>
                <div>
                    <label for="textarea">Vos explications</label>
                    <textarea id="textarea" name="textarea" rows="5" cols="33"></textarea>
                </div>
                <div>
                    <label for="reset">Réintitialiser</label>
                    <input type="reset" id="reset" name="reset">
                </div>
            </fieldset>
            <fieldset>
                <legend>Nous envoyer</legend>
                <input  type="submit" value="Envoyer">
            </fieldset>
        </div>
    </form>
    <p class="flexContainer justify-content-center">* = Champs obligatoires<p>
    <p class="pblue flexContainer justify-content-center">* = Nous refusons tout numéro ne respectant pas le format suivant: +32 123 45 67 89
</body>
</html>