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
            <legend>Soumettez votre reservation</legend>
            <div class="col-lg-3">
                <form role="form" action="../../controller/actionClient/index.php?action=ajouter" method="POST">
                    <label for="dateDeNaissance">Date de debut : </label><input class="form-control" type="date" name="dateD" id="dateD" /><br/>
                    <label for="dateDeNaissance">Date de fin : </label><input class="form-control" type="date" name="dateF" id="dateF"/><br/>
                    <input id="button" class="btn btn-success" type="submit" value="Reserver" name="submit" />
                </form>
            </div>
        </div>
        <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../../js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                comparer();
                $("#msg").show();
                $("#msg").delay(5000).fadeOut(300);
            });
            function comparer()
            {
                var sdate1 = document.getElementById('dateD').value
                var date1 = new Date();
                date1.setFullYear(sdate1.substr(6, 4));
                date1.setMonth(sdate1.substr(3, 2));
                date1.setDate(sdate1.substr(0, 2));
                date1.setHours(0);
                date1.setMinutes(0);
                date1.setSeconds(0);
                date1.setMilliseconds(0);
                var d1 = date1.getTime()

                var sdate2 = document.getElementById('dateF').value
                var date2 = new Date();
                date2.setFullYear(sdate2.substr(6, 4));
                date2.setMonth(sdate2.substr(3, 2));
                date2.setDate(sdate2.substr(0, 2));
                date2.setHours(0);
                date2.setMinutes(0);
                date2.setSeconds(0);
                date2.setMilliseconds(0);
                var d2 = date2.getTime()

//si la date d'arrviée et superieur a la date de depart en afficher un message d'erreur
                if (d1 > d2)
                {
                    alert('Vous avez selectionner une date de fin incorrecte!')
                    document.getElementById("button").disabled = true;
                } else
                {
                    document.getElementById("button").disabled = false;
                }

            }
        </script>
    </body>
</html>
