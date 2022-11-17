<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire 1 BB</title>
</head>
<body>
    <form action="">
        <div>
            <fieldset>
                <legend>Vos coordonnées</legend>
                    <div>
                        <label for="nom">Nom : </label>
                        <input type="text" name="nom" id="nom" required>
                    </div>
                    <div>
                        <label for="prenom">Prénom : </label>
                        <input type="text" name="prenom" id="prenom" required>
                    </div>
                    <div>
                        <label for="dateNaissance"> Date de naissance :</label>
                        <input type="date" name="dateNaissance" id="dateNaissance" required>
                    </div>
                    <div>
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div>   
                        <label for="pays">Pays :</label>
                        <select name="pays" id="pays">
                            <optgroup label="Europe">
                                <option value="belgique">Belgique</option>
                                <option value="gb">Grande-Bretagne</option>
                            </optgroup>
                            <optgroup label="Asie">
                                <option value="japon">Japon</option>
                                <option value="chine">Chine</option>
                            </optgroup>
                        </select>
                    </div>
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend>Périodicité</legend>
                <div>
                    <input type="radio" name="newsletter" id="hebdomadaire" value="hebdomadaire" checked>
                    <label for="hebdomadaire">Newsletter hebdomadaire</label>
                </div>
                <div>
                    <input type="radio" name="newsletter" id="mensuelle" value="mensuelle">
                    <label for="mensuelle">Newsletter mensuelle</label>
                </div>
                <div>
                    <input type="radio" name="newsletter" id="trimestrielle" value="trimestrielle">
                    <label for="trimestrielle">Newsletter trimestrielle</label>
                </div>
            </fieldset>
            <fieldset>
                <legend>Version papier / informatique</legend>
                <div>
                    <input type="checkbox" name="version" id="papier" value="papier">
                    <label for="papier">Recevoir la version papier</label>
                </div>
                <div>
                    <input type="checkbox" name="version" id="informatique" value="informatique">
                    <label for="informatique">Recevoir la version informatique</label>
                </div>
                <div>   
                    <label for="nombreCopies">Nombre de copies souhaitées : </label>
                    <input type="number" name="nombreCopies" id="nombreCopies" min="0" value="1">   
                </div>
            </fieldset>
                
            <div>
                <input type="submit" value="Envoyer" name="valider" id="valider">
            </div>
        </div>
    </form>
</body>
</html>