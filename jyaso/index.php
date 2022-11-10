<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\index.css">
    <title>Jayson cara</title>
</head>
<body>
    <?php
        echo "<h1> Formulaire du marchand de journaux </h1>";
        echo "<p>Bienvenu sur le formulaire de votre marchand de jounaux local quelle que soit où vous êtes, veullez remplir le formulaire si dessous pour recevoir votre journal sans devoir faire quoi que se soit.</p>";
    ?>
    <form action="">
        <fieldset>
            <legend>Vos coordonnées</legend>
            
            <div class="marg">
            <label for="nom"> Nom </label>
            <input type="text" name="nom" id="nom" required>
            </div>

            <div class="marg">
            <label for="prenom"> Prénom </label>
            <input type="text" name="prenom" id="prenom" required>
            </div>

            <div class="marg">
            <label for="date"> Date de naissance </label>
            <input type="date" name="date" id="date" required>
            </div>

           <div class="marg">
           <label for="email"> Email</label>
            <input type="email" name="email" id="email" required>
           </div>

           <div class="marg">
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

            <div class="marg">
            <input type="radio" name="selection" id="journal" /> <label for="journal">journal hebdomadaire</label>
            </div>
            <div class="marg">
            <input type="radio" name="selection" id="journal" /> <label for="journal">journal mensuel</label>
            </div>
            <div class="marg">
            <input type="radio" name="selection" id="journal" /> <label for="journal">journal semistriel</label>
            </div>
        </fieldset>    

        <fieldset class="marg">
            <legend>Verson papier/informatique</legend>

            <div class="marg">
            <input type="checkbox" id="cochage" name="choice" /> <label for="cochage">recevoir la version papier</label>
            </div>
            <div class="marg">
            <input type="checkbox" id="cochage" name="choice" /> <label for="cochage">recevoir la version informatique</label>
            </div>
            <div class="marg">
            <label for="copy">Nombre de copie souhaiter </label>
            <input type="number" name="copy" id="copy" min="1" max="30">
            </div>
        </fieldset>
            <div id="submit" class="marg flexcontainer" >
            <input type="submit" value="Envoyer">
            </div>
    </form>
</body>
</html>