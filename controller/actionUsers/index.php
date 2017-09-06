<?php

include_once '../../controller/functions.php';
$data = filter_input_array(INPUT_POST, $_POST);
if (isset($data['submit'])) {
    $nom = htmlspecialchars($data['nom']);
    $prenom = htmlspecialchars($data['prenom']);
    $login = htmlspecialchars($data['login']);
    //Let's crypt the password
    $password = cryptPw(htmlspecialchars($data['password']));
    $type = htmlspecialchars($data['type']);
    //This info helps us to make difference between clients, admins and employes
    $idOfInfos = 0;

    include_once '../../model/functions.php';

    if ($_GET['action'] == "ajouter") {
        //Wanna create a client object...let's call da class
        include_once '../../app/Users/User.php';
        $user = new User($type, $login, $password, $idOfInfos);
        include_once '../../app/Employe/Employe.class.php';
        if ($type == "Admin") {
            ajouterUser($user);
            $msg = "<p style='color:green'>Admin créé avec succès...</p>";
            header("Location:../../view/Admin/index.php?param=" . $msg);
        }
        $employe = new Employe($nom, $prenom);

        ajouterClient($client);
        $msg = "<p style='color:green'>Votre inscription a été effectuée avec succès...</p>";
        header("Location:../../view/Client/ajouter.php?param=" . $msg);
    } else {
        $msg = "<p style='color:red'>Votre inscription a échoué...</p>";
        header("Location:../../view/Client/ajouter.php?param=" . $msg);
    }
} else {
    $msg = "<p style='color:red'>Erreur...</p>";
    header("Location:admin.php?param=" . $msg);
}

    



