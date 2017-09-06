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

                <?php
                include_once '../../model/functions.php';
                afficherVoiture("numPlaque");
                ?>
            </div>
            <div class="col-lg-3">
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
