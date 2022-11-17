<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/base.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <div class="titre">
        <div class="DT">
            <h1>Nord</h1>
        </div>
        <div class="FT">
            <h1>Press</h1>
        </div>
    </div>
    <form action="">
        <div class="CP">
            <fieldset>
                <legend>Coordonnées</legend>
                <div class="Sdiv">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div class="Sdiv">
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom">
                </div>
                <div class="Sdiv">
                    <label for="naissance">Date de naissance :</label>
                        <input type="date" name="naissance" id="naissance">
                </div>
                <div class="Sdiv">
                    <label for="mail">Email :</label>
                        <input type="email" name="mail" id="mail">
                </div>
                <div class="Sdiv">
                    <label for="pays">Pays :</label>
                        <select name="pays" id="pays">
                        <optgroup>Europe</optgroup>
                            <option value="belgique">Belgique</option>
                            <option value="france">France</option>
                        <optgroup>Asie</optgroup>
                            <option value="chine">Chine</option>
                            <option value="japon">Japon</option>
                    </select>
                </div>       
            </fieldset>       
            <fieldset>
                <legend>Périodicité</legend>
                <div class="Sdiv">
                    <label for="newsletterhebdo">Newsletter Hebdomadaire</label>
                    <input type="radio" name="newsletterhebdo" id="newsletterhebdo">
                </div>
                <div class="Sdiv">
                    <label for="newslettermensu">Newsletter Mensuelle</label>
                    <input type="radio" name="newslettermensu" id="newslettermensu">
                </div>
                <div class="Sdiv">
                    <label for="newslettertrim">Newsletter Trimestrielle</label>
                    <input type="radio" name="newslettertrim" id="newslettertrim">
                </div>
            </fieldset>
        </div>
        <div class="Fin">
            <fieldset>
                <legend>Version papier / Informatique</legend>
                <div class="Sdiv">
                    <label for="recupapier">Recevoir version papier</label>
                    <input type="checkbox" name="recupapier" id="recupapier">
                </div>
                <div class="Sdiv">
                    <label for="recuinfo">Recevoir version informatique</label>
                    <input type="checkbox" name="recuinfo" id="recuinfo">
                </div>
                <div class="Sdiv">  
                    <label for="nbrcopies">Nombre de copies souhaitées</label>
                    <input class="nCopies" type="number" name="nbrcopies" id="nbrcopies">
                </div>
            </fieldset>
        </div>
    </form>
</body>
</html>