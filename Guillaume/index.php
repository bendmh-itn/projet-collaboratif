<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="css/index.css">
</head>
<body class="edensflex flex-direction align-items">
<fieldset class="edenstext">
<legend>Vos coordonnées</legend>
    <form >
        <div >
            <label">nom</label>
            <input type="text"  name="nom" id="nom" />
        </div>
        <div>
            <label for="">prenom</label>
            <input class="edenstext" type="text" name="prenom" id="Prenom" />
        </div>
        <div>
        <label>date de naissance</label>
        <input class="edenstext" type="date" name="datenaissance" id="datenaissance"/>
        </div>
        <div>
        <label>email</label>
        <input class="edenstext" type="email" name="email" id="email"/>
        </div>
        <div>
        <label>pays</label>
        <select class="edenstext" name="pays" id="pays">
           <option value="france">belgique</option>
           <option value="espagne">Espagne</option>
           <option value="chine">Chine</option>
           <option value="japon">Japon</option>
       </select>
        </div>
</fieldset>
<fieldset class="edenstext edensflex justify-content">
    <legend>periodicité</legend>
    <div>
        <input type="radio" name="newsletter" id="newsletterhebdomadaire">
        <label>newsletter hebdomadaire</label>
    </div>
    <div>
        <input type="radio" name="newsletter" id="newslettermensuelle">
        <label>newsletter mensuelle</label>
    </div>
    <div>
        <input type="radio" name="newsletter" id="newslettertrimestrielle">
        <label>newsletter trimestrielle</label>
    </div>
</fieldset>
<fieldset class="edenstext edensheart">
<legend>version papier/informatique</legend>
    <form >
        
        <div>
            <input type="checkbox" name="papier" id="papier">
            <label>papier</label>
        </div>
        <div>
            <input type="checkbox" name="informatique">
            <label>informatique</label>
        </div>
        <div>
            <input type="text" name="nombresdecopies" id="nombresdecopies">
            <label >nombres de copies</label>
        </div>
</fieldset>
<input  class="edenstext" type="submit" name="submit" id="submit"> 
</form>
</body>
</html>