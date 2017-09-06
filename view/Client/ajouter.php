<?php ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
    </head>
    <body>
        <h1>Inscription - Client</h1>
        <span><?php echo (isset($_GET['param']))?$_GET['param']:" "?></span>
            <form action="../../controller/actionClient/index.php?action=ajouter" method="POST">
                <label for="nom" >Nom : </label><input type="text" name="nom"  /><br/>
                <label for="prenom">Prenom : </label><input type="text" name="prenom"  /><br/>
                <label for="adresse">Adresse : </label><input type="text" name="adresse" /><br/>
                <label for="numPermi">Numéro permi : </label><input type="text" name="numPermi"/><br/>
                <label for="dateDeNaissance">Date de naissance : </label><input type="date" name="dateDeNaissance"/><br/>
                <label for="tel">Numéro télephone : </label><input type="text" name="tel" /><br/>
                <label for="genre">Genre : </label>
                <select name="genre">
                    <option>Féminin</option>
                    <option>Masculin</option>
                </select><br/>
                <label for="numNational">Numéro national : </label><input type="text" name="numNational"/><br/>
                <label for="ville">Ville : </label>
                <select name="nomVille">
                    <?php
                    include('../../model/functions.php');
                    getCboxOptions("ville", "nomVille");
                    ?>
                </select><br/>
                <p>Choisissez un nom d'utilisateur et un mot de passe :</p>
                <label for="login" >Login : </label><input type="text" name="login"  /><br/>
                <label for="password">Mot de passe : </label><input type="password" name="password"  /><br/>
                

                <input type="submit" value="Inscription" name="submit" />
            </form>
    </body>
</html>
