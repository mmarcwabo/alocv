<?php 

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Client-tableau de bord</title>
    </head>
    <body>
        <span><?php echo (isset($_GET['param']))?$_GET['param']:" "?></span>
        <h1>Bienvenu</h1>
        
        <a href="../Reservation/ajouter.php">Effectuer une reservation</a>
        <br/><a href="../Voiture/afficher.php">Afficher les voitures diponibles</a>
        <br/><a href="../Users/logout.php">Se deconnecter</a>
        

    </body>
</html>
