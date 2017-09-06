<?php

$data = filter_input_array(INPUT_POST, $_POST);
if (isset($data['submit'])) {
    $nom = htmlspecialchars($data['nom']);
    $prenom = htmlspecialchars($data['prenom']);
    $login = htmlspecialchars($data['login']);
    $password = htmlspecialchars($data['numPermi']);
    //This info helps us to make difference between clients, admins and employes
    $idOfInfos = 0;
    
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

    



