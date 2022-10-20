<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jayson cara</title>
</head>
<body>
    <?php
        echo "<h1> Bjour </h1>";
        echo "<p>Salut les gens</p>";
    ?>
    <form action="">
        <fieldset>
            <legend>Vos coordonnées</legend>
            
            <div>
            <label for="nom"> Nom </label>
            <input type="text" name="nom" id="nom">
            </div>

            <div>
            <label for="prenom"> Prénom </label>
            <input type="text" name="prenom" id="prenom">
            </div>

            <div>
            <label for="date"> Date de naissance </label>
            <input type="date" name="date" id="date">
            </div>

           <div>
           <label for="email"> Email</label>
            <input type="email" name="email" id="email">
           </div>

           <div>
           <label for="pays">Dans quel pays habitez-vous ?</label><br />
       <select name="pays" id="pays">
           <optgroup label="Europe">
               <option value="belgique"> Belgique</option>
               <option value="france">France</option>
               <option value="espagne">Espagne</option>
               <option value="italie">Italie</option>
               <option value="royaume-uni">Royaume-Uni</option>
           </optgroup>
           <optgroup label="Amérique">
               <option value="canada">Canada</option>
               <option value="etats-unis">Etats-Unis</option>
           </optgroup>
           <optgroup label="Asie">
               <option value="chine">Chine</option>
               <option value="japon">Japon</option>
           </optgroup>
       </select>
           </div>

        </fieldset>

        <fieldset>
            <legend>Periodicté</legend>

            <div>
            <input type="radio" name="selection" id="journal" /> <label for="journal">journal hebdomadaire</label>
            </div>
            <div>
            <input type="radio" name="selection" id="journal" /> <label for="journal">journal mensuel</label>
            </div>
            <div>
            <input type="radio" name="selection" id="journal" /> <label for="journal">journal semistriel</label>
            </div>
        </fieldset>    

        <fieldset>
            <legend>Verson papier/informatique</legend>

            <div>
            <input type="checkbox" id="cochage" name="choice" /> <label for="cochage">recevoir la version papier</label>
            </div>
            <div>
            <input type="checkbox" id="cochage" name="choice" /> <label for="cochage">recevoir la version informatique</label>
            </div>
            <div>
            <label for="copy">Nombre de copie souhaiter </label>
            <input type="text" name="copy" id="copy">
            </div>
        </fieldset>
        
    </form>
</body>
</html>