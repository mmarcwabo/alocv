<?php

$data = filter_input_array(INPUT_POST, $_POST);
if (isset($data['submit'])) {
    $numChassi = htmlspecialchars($data['numChassi']);
    $numPlaque = htmlspecialchars($data['numPlaque']);
    $motorisation = htmlspecialchars($data['motorisation']);
    $boite = htmlspecialchars($data['boite']);
    $puissance = htmlspecialchars($data['puissance']);
    $marque = htmlspecialchars($data['marque']);
    $prix = htmlspecialchars($data['prix']);
    $categorie = htmlspecialchars($data['categorie']);
    $assurance = htmlspecialchars($data['assurance']);
    $photo = "default.PNG";
    //Gonna get path of the picture...on next step
    //Let's call our functions engine...to get database access
    include_once '../../model/functions.php';

    $idAssurance = (int) getFieldFromAnyElse("assurance", "type", $assurance, "idassurance");
    

    if ($_GET['action'] == "ajouter") {
        //Wanna create a client object...let's call da class
        include_once '../../app/Voiture/Voiture.class.php';
        $voiture = new Voiture($numChassi, $numPlaque, $motorisation, $boite, $puissance, $marque, $modele, $prix, $categorie, $photo, $idAssurance);

        ajouterVoiture($voiture);
        $msg = "<p style='color:green'>Voiture ajoutée avec succès...</p>";
        header("Location:../../view/Voiture/ajouter.php?param=" . $msg);
    }
    else{
        $msg = "<p style='color:red'>Votre inscription a échoué...</p>";
        header("Location:../../view/Client/ajouter.php?param=" . $msg);
   }
} else {
    $msg = "<p style='color:red'>Erreur...</p>";
    header("Location:admin.php?param=" . $msg);
}

    