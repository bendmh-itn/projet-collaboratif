<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire simple | Journal GEEK</title>
    <link rel="stylesheet" href="../css/style.css">
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
                <legend>Vos coordonnées</legend>
                <div>
                    <label for="nom">Nom:<span>*</span></label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div>
                    <label for="prenom">Prénom:<span>*</span></label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
                <div>
                    <label for="date">Date de naissance:<span>*</span></label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div>
                    <label for="mail">E-Mail:<span>*</span></label>
                    <input type="email" id="mail" name="mail" required>
                </div>
                <div>
                    <label for="pays">Pays: </label>
                    <select id="pays" name="pays">
                        <optgroup label="Europe">
                            <option value="France">France</option>
                            <option value="Belgique">Belgique</option>
                        </optgroup>
                        <optgroup label="Asie">
                            <option value="Chine">Chine</option>
                            <option value="Russie">Russie</option>
                        </optgroup>
                    </select>
                </div>
            </fieldset>

            <fieldset>
            <legend>Périodicité</legend>
            <div>
                <input type="radio" id="hebdo" name="perio" value="hebdo">
                <label for="hebdo">Newsletter Hebdomadaire</label>
            </div>
            <div>
                <input type="radio" id="mens" name="perio" value="mens">
                <label for="mens">Newsletter Mensuelle</label>
            </div>
            <div>
                <input type="radio" id="tri" name="perio" value="tri">
                <label for="tri">Newsletter Trimestrielle</label>
            </div>
            </fieldset>

            <fieldset>
            <legend>Version papier/numérique</legend>
            <div>
                <input type="checkbox" id="paper" name="vpi" value="paper">
                <label for="paper">Recevoir la version papier</label>
            </div>
            <div>
                <input type="checkbox" id="num" name="vpi" value="vum">
                <label for="num">Recevoir la version numérique</label>
            </div>
            </fieldset>
        </div>
        <p class="flexContainer justify-content-center">* = Champs obligatoires<p>
        <div class="justify-content-center flexContainer">
            <br>
            <input  type="submit" value="Envoyer">
        </div>
        

    </form>
    <br>
    <br>
    <a class="justify-content-center flexContainer" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">Bouton pour les geekers</a>

</body>
</html>