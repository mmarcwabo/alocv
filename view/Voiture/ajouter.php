<?php ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Enregistrer une nouvelle voiture</title>
    </head>
    <body>
        <h1>Enregistrer une voiture</h1>
        <span><?php echo (isset($_GET['param'])) ? $_GET['param'] : " " ?></span>
        <form action="../../controller/actionVoiture/index.php?action=ajouter" method="POST">
            <label for="numChassi">Numéro chassi : </label><input type="text" name="numChassi"  /><br/>
            <label for="numPlaque">Numéro Plaque : </label><input type="text" name="numPlaque"  /><br/>
            <label for="motorisation">Motorisation : </label>
            <select name="motorisation">
                <option>diesel</option>
                <option>électrique</option>
                <option>essence</option>
                <option>hybride</option>
            </select><br/>
            <label for="boite">Boite de vitesse : </label>
            <select name="boite">
                <option>automatique</option>
                <option>manuelle</option>
            </select><br/>
            <label for="puissance">Puissance : </label><input type="text" name="puissance"/><br/>
            <label for="marque">Marque : </label>
            <select name="marque">
                <option>BMW</option>
                <option>Fiat</option>
                <option>Ford</option>
                <option>Mazda</option>
                <option>Mercedes</option>
                <option>Nissan</option>
                <option>Toyota</option>
            </select><br/>
            <label for="prix">Prix : </label><input type="text" name="prix" /><br/>
            <label for="categorie">Categorie : </label><input type="text" name="categorie" /><br/>
            <label for="categorie">Assurance : </label>
            <select name="assurance">
                <?php
                include('../../model/functions.php');
                getCboxOptions("assurance", "type");
                ?>
            </select><br/>

            <input type="submit" value="Enregistrer voiture" name="submit" />
        </form>
    </body>
</html>
