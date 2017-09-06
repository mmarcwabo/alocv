<?php

$data = filter_input_array(INPUT_POST, $_POST);
if (isset($data['submit'])) {
    $nom = htmlspecialchars($data['nom']);
    $prenom = htmlspecialchars($data['prenom']);
    $adresse = htmlspecialchars($data['adresse']);
    $numPermi = htmlspecialchars($data['numPermi']);
    //Date...de MYSQL...
    $dateDeNaissanceF = (string) (htmlspecialchars($data['dateDeNaissance']));
    $dateDeNaissance = preg_replace('!^([0-9]{2})/([0-9]{2})/([0-9]{4})$!', "$3-$2-$1", $dateDeNaissanceF);
    $tel = htmlspecialchars($data['tel']);
    $genre = htmlspecialchars($data['genre']);
    $numNational = htmlspecialchars($data['numNational']);
    $nomVille = htmlspecialchars($data['nomVille']);
    //Gonna get ville_idville from a Ville objct...
    //Let's call our functions engine...to get database access
    include_once '../../model/functions.php';

    $idVille = (int) getFieldFromAnyElse("ville", "nomVille", $nomVille, "idville");


    if ($_GET['action'] == "ajouter") {
        //Wanna create a client object...let's call da class
        include_once '../../app/Client/Client.class.php';
        $client = new Client($nom, $prenom, $adresse, $numPermi, $dateDeNaissance, $tel, $genre, $numNational, $idVille);

        ajouterClient($client);
        $msg = "<p style='color:green'>Votre inscription a été effectuée avec succès...</p>";
        header("Location:../../view/Client/ajouter.php?param=" . $msg);
    }
    else{
        $msg = "<p style='color:red'>Votre inscription a échoué...</p>";
        header("Location:../../view/Client/ajouter.php?param=" . $msg);
   }
} else {
    $msg = "<p style='color:red'>Erreur...</p>";
    header("Location:admin.php?param=" . $msg);
}

    



