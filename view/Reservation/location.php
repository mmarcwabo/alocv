<?php ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.css" />
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
    </head>
    <body>
        <div class="row col-lg-12 col-md-12 col-sm-12">
            <legend>Soumettez votre demande de location</legend>
            <div class="col-lg-3">
                <form role="form" action="../../controller/actionClient/index.php?action=ajouter" method="POST">
                    <label for="dateDeNaissance">Date de debut : </label><input class="form-control" type="date" name="dateDeNaissance"/><br/>
                    <label for="dateDeNaissance">Date de fin : </label><input class="form-control" type="date" name="dateDeNaissance"/><br/>
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
