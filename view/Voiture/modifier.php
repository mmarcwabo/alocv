<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
    </head>
    <body>
        <form action="../../controller/actionUsers/index.php" method="POST">
            <label for="nom">Nom : </label><input type="text" name="nom"  /><br/>
            <label for="prenom">Prenom : </label><input type="text" name="prenom"  /><br/>
            <label for="adresse">Adresse : </label><input type="text" name="adresse" /><br/>
            <label for="numPermi">Numéro permi : </label><input type="text" name="numPermi"/><br/>
            <label for="dateDeNaissance">Nom : </label><input type="date" name="dateDeNaissance"/><br/>
            <label for="tel">Numéro télephone : </label><input type="text" name="tel" /><br/>
            <label for="genre">Numéro permi : </label>
            <select name="genre">
                <option>Féminin</option>
                <option>Masculin</option>
            </select><br/>
            <label for="ville">Ville : </label>
            <select name="genre">
                <option>Féminin</option>
                <option>Masculin</option>
            </select><br/>
            
            <input type="submit" value="Inscription" name="modifierClient" />
    </form>
</body>
</html>
