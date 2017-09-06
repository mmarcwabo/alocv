<?php ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Client-tableau de bord</title>
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.css" />
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
    </head>
    <body>
        <span id="msg"><?php echo (isset($_GET['param'])) ? $_GET['param'] : " " ?></span>
        <h1>Bienvenu</h1>

        <a href="../Reservation/ajouter.php">Effectuer une reservation</a>
        <br/><a href="../Voiture/afficher.php">Afficher les voitures diponibles</a>
        <br/><a href="../Users/logout.php">Se deconnecter</a>


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
