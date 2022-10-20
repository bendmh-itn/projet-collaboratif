=<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post" action="index.php">
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
            <input type="text" id="dateNaissance" name="dateNaissance"> 
        </div>
    </fieldset>
    </form>
    
</body>
</html>
