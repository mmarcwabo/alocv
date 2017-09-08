<?php
session_start();
$_SESSION['idclient']=3;
$jours = 0;
?>
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
                <form name=formu action="reservation.php" method="POST">
                    <label for="debut">Date de debut : </label><input class="form-control"  name="debut" type="date" required><br>
                    <label for="fin">Date de fin : </label><input class="form-control"  name="fin" type="date" required><br>
                    <input name="idvoiture" type="hidden" value="<?php echo $_GET['idvoiture']; ?>">
                    <input name="idclient" type="hidden" value="<?php echo $_SESSION['idclient']; ?>">
                    <input  class="btn btn-success" type="submit" value="Reserver">
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
                        with (document.formu) {
                            onsubmit = function () {
// les dates étant saisies en français, on les transforme
// Ici sont acceptés comme séparateurs le tiret, le slash et l'espace
                                tabdeb = (debut.value.split(/[- //]/));
                                tabfin = (fin.value.split(/[- //]/));
                                Odeb = new Date(tabdeb[2], tabdeb[1], tabdeb[0]);
                                Ofin = new Date(tabfin[2], tabfin[1], tabfin[0]);
                                if (Odeb > Ofin) {
                                    alert('La date de fin ne doit pas être antérieure à celle de début.');
                                    debut.focus();
                                    debut.style.backgroundColor = '#fee';
                                    return false
                                }
                                ;
                            };
                        }
                        ;
        </script>
    </body>
</html>
