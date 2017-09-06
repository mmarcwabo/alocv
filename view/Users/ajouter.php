<?php ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestion employé</title>
    </head>
    <body>
        <h1>Ajouter - Employé</h1>
        <span><?php echo (isset($_GET['param']))?$_GET['param']:" "?></span>
            <form action="../../controller/actionUsers/index.php?action=ajouter" method="POST">
                <label for="nom" >Nom : </label><input type="text" name="nom"  /><br/>
                <label for="prenom">Prenom : </label><input type="text" name="prenom"  /><br/>
                <label for="login">Nom d'utilisateur : </label><input type="text" name="login" /><br/>
                <label for="password">Mot de passe : </label><input type="password" name="password"/><br/>
                <label for="role">Rôle : </label>
                <select name="type">
                    <option>Admin</option>
                    <option>Employe</option>
                </select><br/>
                <input type="submit" value="Créer utilisateur" name="submit" />
            </form>
    </body>
</html>
