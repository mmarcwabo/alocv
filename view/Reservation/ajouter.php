<?php ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reservation</title>
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.css" />
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
    </head>
    <body>
        <div class="row col-lg-12 col-md-12 col-sm-12">
            <legend>Reservation - Voiture</legend>
            <div class="col-lg-3">
             <form role="form" action="../../controller/actionClient/index.php?action=ajouter" method="POST">
                <label for="nom" >Nom : </label><input class="form-control" type="text" name="nom"  /><br/>
                <label for="prenom">Prenom : </label><input class="form-control" type="text" name="prenom"  /><br/>
                <label for="adresse">Adresse : </label><input  class="form-control" type="text" name="adresse" /><br/>
                <label for="numPermi">Numéro permi : </label><input class="form-control" type="text" name="numPermi"/><br/>
                <label for="dateDeNaissance">Date de naissance : </label><input class="form-control" type="date" name="dateDeNaissance"/><br/>
                <label for="tel">Numéro télephone : </label><input class="form-control" type="text" name="tel" /><br/>
            </div>
            <div class="col-lg-3">
                <label for="genre">Genre : </label>
                <select class="form-control" name="genre">
                    <option>Féminin</option>
                    <option>Masculin</option>
                </select><br/>
                <label for="numNational">Numéro national : </label><input class="form-control" type="text" name="numNational"/><br/>
                <label for="ville">Ville : </label>
                <select class="form-control" name="nomVille">
                    <?php
                    include('../../model/functions.php');
                    getCboxOptions("ville", "nomVille");
                    ?>
                </select><br/>
                <p>Choisissez un nom d'utilisateur et un mot de passe :</p>
                <label for="login" >Login : </label><input class="form-control" type="text" name="login"  /><br/>
                <label for="password">Mot de passe : </label><input class="form-control" type="password" name="password"  /><br/>


                <input class="btn btn-success" type="submit" value="Inscription" name="submit" />
            </form>
            </div>
        </div>
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#msg").show();
                $("#msg").delay(5000).fadeOut(300);
            });
        </script>
    </body>
</html>
