<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nathan Massart</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div>
        <h1> Remplis ton propre formulaire pour ton Journal préféré !</h1>
    </div>
    <form action="">
        <div class= "flexcontainer">
            <fieldset>
                <legend> Vos coordonnés</legend>
                <div>
                    <label for="nom"> Nom :</label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div>
                    <label for="Prénom"> Prénom :</label>
                    <input type="text" name="Prénom" id="Prénom">
                </div>
                <div>
                    <label for="Date de naissance"> Date de naissance :</label>
                    <input type="date" name="Date de naissance" id="date de naissance">
                </div>
                <div>
                    <label for="Email"> Email :</label>
                    <input type="text" name="Email" id="Email">
                </div>
                <div>
                    <label for="Pays">Pays :</label>
                    <select name="pays" id="pays">
                        <optgroup label="Europe">
                            <option value="France">France</option>
                            <option value="Belgique">Belgique</option>
                            <option value="Pays-Bas">Pays-Bas</option>
                        </optgroup>
                    </select>
                    
                </div>
            </fieldset>
            <fieldset>
                <legend>Périodicité</legend>
                <div class= "flexcontainer">
                    <div>
                        <input type="radio" id="h" name="périodicité" value="Newsletter hebdomadaire">
                        <label for="h">Newsletter hebdomadaire</label>
                    </div>
                    <div>
                        <input type="radio" id="m" name="périodicité" value="Newsletter mensuelle">
                        <label for="m">Newsletter mensuelle</label>
                    </div>
                    <div>
                        <input type="radio" id="t" name="périodicité" value="Newsletter trimestrielle">
                        <label for="t">Newsletter trimestrielle"</label>
                    </div>
                </div>
                
            </fieldset>
            <fieldset>
                <legend>Version papier/ informatique</legend>
                <div class= "flexcpontainer">
                    <input type="checkbox" id="papier" name="version" value="papier">
                    <label for="papier">Recevoir la version papier</label>
                    <input type="checkbox" id="informatique" name="version" value="informatique">
                    <label for="informatique">Recevoir la version informatique</label>
                </div>
                <div>
                    <label for="Nombre de copies souhaitées"> Nombre de copies souhaitées :</label>
                    <input type="text" name="copies" id="copies">
                </div>
            </fieldset>
        </div>
    </form>
</body>
</html>
