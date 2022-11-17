<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Form</title>
</head>
<body>
    <div class="blocMain">
        <div class="titre flexContainer justify-content-center">
            <h1>Formulaire</h1>
        </div>
        <form method="post" action="index.php" class="flexContainer justify-content-center">
            <fieldset>
                <legend>Vos coordoonées</legend>
                <div>
                    <label for="nom"> Nom : </label>
                    <input type="text" id="nom" name="nom">
                </div>
                <div>
                <label for="prenom"> Prenom : </label>
                <input  type="text" id="prenom" name="prenom">
                </div>
                <div>
                    <label for="dateNaissance"> Date de naissance : </label>
                    <input type="date" id="dateNaissance" name="dateNaissance"> 
                </div>
                <div>
                    <label for="Email"> Email : </label>
                    <input type="email" id="email" name="email"> 
                </div>
                <div>
                    <label for="Pays"> Pays : </label>
                    <select id="Pays">
                        <optgroup label="Europe">
                            <option>Belgique</option>
                            <option>Italie</option>
                            <option>France</option>
                        </optgroup>
                        <optgroup label="Afrique">
                            <option>Maroc</option>
                            <option>Algérie</option>
                            <option>Tunisie</option>
                            <option>RDC</option>
                        </optgroup>
                    </select>
                </div>
            </fieldset>
            <fieldset>
                <legend> Périodicité </legend>
                <div>
                    <label for="hebdo"> Newsletter hébdomadaire : </label>
                    <input type="radio" id="hebdo" name="hebdo">
                </div>
                <div>
                    <label for="mens"> Newsletter mensuelle : </label>
                    <input type="radio" id="mens" name="mens">
                </div>
                <div>
                    <label for="trim"> Newsletter trimestrielle : </label>
                    <input type="radio" id="trim" name="trim">
                </div>
            </fieldset>
            <fieldset>
                <legend> Version papier/Informatique </legend>
                <div>
                    <label for="papier"> Recevoir la version papier : </label>
                    <input type="checkbox" id="papier" name="papier">
                </div>
                <div>
                    <label for="info"> Recevoir la version informatique : </label>
                    <input type="checkbox" id="info" name="info">
                </div>
                <div>
                    <label for="nbrCopie"> Nombre de copies souhaitées : </label>
                    <input type="number" id="nbrCopie" name="NbreCopie">
                </div>
            </fieldset>
            </form>
    </div>
    
    
</body>
</html>
