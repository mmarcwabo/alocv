<?php

/*
 * Connexion à la base des données
 * $db : base des données
 * $user : nom d'utilisateur de la base des données
 * $password : mot de passe de l'utilisateur de la base
 * retourne un objet PDO de connexion
 */

function connectDb() {

    $host = "localhost";
    $db = "locvdb";
    $url = "mysql:host=" . $host;
    $url .= ";dbname=" . $db;

    $user = "root";
    $pass = "root@123";
    //Connexion PDO à la BD
    try {
        $databaseConnection = new PDO($url, $user, $pass);
        $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'ERREUR: ' . $e->getMessage();
    }
    return $databaseConnection;
}

#CRUD
/* Client */

//Ajouter
function ajouterClient($client) {
    $iQuery = "INSERT INTO client (nom, prenom, adresse, numPermi, dateDeNaissance, tel, genre, numNational, ville_idville) VALUES(:nom, :prenom, :adresse, :numPermi, :dateDeNaissance, :tel, :genre, :numNational, :ville_idville);";
    $dbCon = connectDb();
    $req = $dbCon->prepare($iQuery);
    $req->execute(array(
        'nom' => $client->getNom(),
        'prenom' => $client->getPrenom(),
        'adresse' => $client->getAdresse(),
        'numPermi' => $client->getNumPermi(),
        'dateDeNaissance' => $client->getDateDeNaissance(),
        'tel' => $client->getTel(),
        'genre' => ($client->getGenre() == "Masculin") ? "M" : "F",
        'numNational' => $client->getNumNational(),
        'ville_idville' => $client->getIdVille(),
    ));
    $req->closeCursor();
}

//Show
function afficherClient($fieldNameArray, $link) {
    $sQuery = "SELECT * FROM vendeur WHERE ?";
    $dbCon = connectDb();
    $pQuery = $dbCon->prepare($sQuery);
    $pQuery->execute(array(1));

    $fieldArray = ['idvendeur', 'nom', 'user'];

    echo '<table class="table table-striped table-responsive">';
    foreach ($fieldNameArray as $field) {
        echo '<th class="active">' . $field . '</th>';
    }
    while ($data = $pQuery->fetch()) {

        echo '<tr>';
        foreach ($fieldArray as $field) {

            if ($data[$field] == $data[$link]) {
                $addLeftLinkTag = '<a href="../vendeur/details.php?idvendeur=';
                $addLeftLinkTag .= $data['idvendeur'];
                $idvendeur = $data['idvendeur'];
                $addLeftLinkTag .= '">';
                $addRightLinkTag = '</a>';
                $Link = "";
                $Link .= $addLeftLinkTag;
                $Link .= $data[$field];
                $Link .= $addRightLinkTag;
                echo "<td>" . $Link . "</td>";
            } else {
                echo '<td>' . $data[$field] . '</td>';
            }
        }
        echo '<td><span class="link link-primary"><a href="editVendeur.php?idvendeur=' . $idvendeur . '">Modifier</a></span><span class="link link-danger"><a href="deleteVendeur.php?idvendeur=' . $idvendeur . '">Supprimer</a></span></td></tr>';
    }
    echo '</table>';
}

//Edit
function modifierClient($idclient) {

    $sQuery = "SELECT * FROM vendeur WHERE idvendeur = ?";
    $dbCon = connectDb();
    $req = $dbCon->prepare($sQuery);
    $req->execute(array($idvendeur));
    $result = $req->fetch();
    if ($req->rowCount() > 0) {
        return $result;
    } else {
        return "Erreur lors de la modification du produit";
    }
}

//Writing the edit action to database
function appliquerModiferClient($client, $idclient) {
    $uQuery = "UPDATE vendeur SET nom=?, user=?, pass=? WHERE idvendeur =" . $idvendeur;
    $dbCon = connectDb();
    $req = $dbCon->prepare($uQuery);
    $req->execute(array(
        $vendeur->getNom(),
        $vendeur->getUser(),
        $vendeur->getPass()
    ));
    $req->closeCursor();
}

//Supprimer
function supprimerClient($idvendeur) {

    $dQuery = "DELETE FROM vendeur WHERE idvendeur = ? ";
    $dbCon = connectDb();
    $req = $dbCon->prepare($dQuery);
    $req->execute(array($idvendeur));
    $req->closeCursor();
}

//--------------------------------------------------------------------------------------------------
#Voiture
//Ajouter
function ajouterVoiture($voiture) {
    $iQuery = "INSERT INTO voiture (numChassi, numPlaque, motorisation, boite, puissance, marque, prix, categorie, photo, assurance_idassurance) VALUES(:numChassi, :numPlaque, :motorisation, :boite, :puissance, :marque, :prix, :categorie, :photo, :assurance_idassurance);";
    $dbCon = connectDb();
    $req = $dbCon->prepare($iQuery);
    $req->execute(array(
        'numChassi' => $voiture->getNumChassi(),
        'numPlaque' => $voiture->getNumPlaque(),
        'motorisation' => $voiture->getMotorisation(),
        'boite' => $voiture->getBoite(),
        'puissance' => $voiture->getPuissance(),
        'marque' => $voiture->getMarque(),
        'prix' => $voiture->getPrix(),
        'categorie' => $voiture->getCategorie(),
        'photo' => $voiture->getPhoto(),
        'assurance_idassurance' => $voiture->getAssurance()
    ));
    $req->closeCursor();
    echo "<script type='text/javascript'>alert('Succes')</script>";
}

//--------------------------------------------------------------------------------------------------------------------------------
#User

function ajouterUser($user) {
    $iQuery = "INSERT INTO users (type, login, password, idOfInfos) VALUES(:type, :login, :password, :idOfInfos);";
    $dbCon = connectDb();
    $req = $dbCon->prepare($iQuery);
    $req->execute(array(
        'type' => $user->getType(),
        'login' => $user->getLogin(),
        'password' => $user->getPassword(),
        'idOfInfos' => $user->getIdOfInfos()
    ));
    $req->closeCursor();
}

function ajouterEmploye($employe) {

    $iQuery = "INSERT INTO employe (nom, prenom) VALUES(:nom, :prenom);";
    $dbCon = connectDb();
    $req = $dbCon->prepare($iQuery);
    $req->execute(array(
        'nom' => $employe->getNom(),
        'prenom' => $employe->getPrenom()
    ));
    $req->closeCursor();
}

//Show
//Affichage et formattage des données
function afficherVoiture($link) {
    $sQuery = "SELECT * FROM voiture";
    $dbCon = connectDb();
    $pQuery = $dbCon->prepare($sQuery);
    $pQuery->execute();

    $fieldArray = ['numChassi', 'numPlaque', 'motorisation', 'boite', 'puissance', 'marque', 'marque', 'prix', 'categorie', 'photo', 'assurance_idassurance'];

    echo '<table class="table table-hover table-responsive">';
    echo '<thead>';
    echo '</thead><tbody>';
    while ($data = $pQuery->fetch()) {

        echo '<tr>';
        foreach ($fieldArray as $field) {

            if ($data[$field] == $data[$link]) {
                $addLeftLinkTag = '<a href="../Reservation/afficher.php?idvoiture=';
                $addLeftLinkTag .= $data['idvoiture'];
                $idproduit = $data['idvoiture'];
                $addLeftLinkTag .= '">';
                $addRightLinkTag = '</a>';
                $Link = "";
                $Link .= $addLeftLinkTag;
                $Link .= $data[$field];
                $Link .= $addRightLinkTag;
                echo "<td>" . $Link . "</td>";
            } else {
                echo '<td>' . $data[$field] . '</td>';
            }
        }
        echo '<td><span class="link link-success"><a href="../operation/addOperation.php?idproduit=' . $idproduit . '">Gérer</a></span><span class="link link-primary"><a href="editProduit.php?idproduit=' . $idproduit . '">Modif.</a></span><span class="link link-danger"><a href="deleteProduit.php?idproduit=' . $idproduit . '">Suppr.</a></span></td></tr>';
    }
    echo '</tbody></table>';
}

//Get an element by any else
//$table : the table from database
//$fwhName : the field we have name or label
//$fwh : the field we have value
//$ftg : the field we wanna get ;-)
function getFieldFromAnyElse($table, $fwhName, $fwh, $ftg) {

    $sQuery = "SELECT " . $ftg;
    $sQuery .= " FROM " . $table;
    $sQuery .= " WHERE " . $fwhName;
    $sQuery .= " = ? ";

    $dbCon = connectDb();
    $pQuery = $dbCon->prepare($sQuery);
    $pQuery->execute(array($fwh));

    $resultSet = $pQuery->fetch();

    return $resultSet[$ftg];
}

//Verifie l'existance
function verifierExistanceKey($table, $field, $keyValue) {

    $sQuery = "SELECT *";
    $sQuery .= " FROM " . $table;
    $sQuery .= " WHERE " . $field . "=?";

    $compteur = 0;
    $databaseConnection = connectDb();
    $result = $databaseConnection->prepare($sQuery);
    $result->execute(array($keyValue));
    $compteur = $result->rowCount();
    $result->closeCursor();
    return $compteur;
}

//Authentifier membre
function validerMembre($user, $pass) {
    $errMsg = '';
    if (isset($user) && isset($pass)) {
        $user = trim($user);
        $pass = trim($pass);
        if ($user == '') {
            $errMsg .= "<p style='color:red'>Vous devez avoir un login</p>";
        }
        if ($pass == '') {
            $errMsg .= "<p style='color:red'>Vous devez avoir un mot de passe</p>";
        }
        if ($errMsg == '') {
            $dbCon = connectDb();
            $sQuery = "SELECT * ";
            $sQuery .= "FROM vendeur ";
            $sQuery .= "WHERE user=:username";

            $records = $dbCon->prepare($sQuery);
            $records->bindParam(':username', $user);
            $records->execute();
            $results = $records->fetch(PDO::FETCH_ASSOC);
            if (count($results) > 0 && cryptPw($pass) == $results['pass']) {
                session_start();
                $_SESSION['name'] = $results['nom'];
                $_SESSION['user'] = $results['user'];
                header('Location:../view/produit/addProduit.php');
                exit;
            } else {
                $errMsg .= "<p style='color:red'>Utilisateur non existant</p>";
                header('Location:../index.php?err=' . $errMsg);
                exit;
            }
        }
        header('Location:../index.php?err=' . $errMsg);
        exit;
    }
}

//Show
//Show
//Affichage et formattage des données
function afficherReservations($fieldNameArray, $link) {
    $sQuery = "SELECT * FROM produit,stock, operation WHERE produit.idproduit = stock.produit_idproduit AND produit.idproduit = operation.produit_idproduit AND DATE_FORMAT(operation.date, '%Y-%m-%d')=? AND operation.type = ?";
    $numRow = 1;
    $total = 0;
    $dbCon = connectDb();
    $pQuery = $dbCon->prepare($sQuery);
    $pQuery->execute(array(date('Y-m-d'), "sortie"));

    $fieldArray = ['denomination', 'quantite', 'prix', 'description'];
    if ($pQuery->rowCount() < 1) {
        echo "Aucune vente effectuée...";
        exit;
    }
    echo '<table class="table table-striped">';
    foreach ($fieldNameArray as $field) {
        echo '<th>' . $field . '</th>';
    }
    while ($data = $pQuery->fetch()) {

        echo '<tr>';
        echo '<td>' . $numRow . '</td>';
        foreach ($fieldArray as $field) {

            if ($data[$field] == $data[$link]) {
                $addLeftLinkTag = '<a href="../produit/details.php?idProduit=';
                $addLeftLinkTag .= $data['idproduit'];
                ///$idproduit = $data['idproduit'];
                $addLeftLinkTag .= '">';
                $addRightLinkTag = '</a>';
                $Link = "";
                $Link .= $addLeftLinkTag;
                $Link .= $data[$field];
                $Link .= $addRightLinkTag;
                echo "<td>" . $Link . "</td>";
            } else {
                echo '<td>' . $data[$field] . '</td>';
            }
        }
        echo '<td>' . $data['quantite'] * $data['prix'] . '</td></tr>';
        $numRow++;
        $total += $data['quantite'] * $data['prix'];
    }

    echo '<tr><td>Total recettes :</td><td><td></td><td></td><td></td></td><td>' . $total . '</td></tr>';
    echo '</table>';
}

#Fetching Items
//List Eléments

function getCboxOptions($table, $field) {

    $dbCon = connectDb();
    $sQuery = "SELECT " . $field;
    $sQuery.=" FROM " . $table;
    $sQuery.=" WHERE ?";

    $pQuery = $dbCon->prepare($sQuery);
    $pQuery->execute(array(1));

    while ($resultSet = $pQuery->fetch()) {

        echo "<option>" . $resultSet[$field] . "</option>";
    }
    $pQuery->closeCursor();
}

#This function help to get a the last saved entry of especially for a criteria given as an arg to this function
/*
  This function works on a table that have an auto increment primary key
 */

function findLIFieldId($table, $criteria) {

    $count=0;
    $sQuery = "SELECT " . $criteria . " FROM " . $table;
    $sQuery.=" WHERE 1";
    $sQuery.=" ORDER BY " . $criteria . " DESC LIMIT 1";

    $dbCon = connectDb();
    $pQuery = $dbCon->prepare($sQuery);
    $pQuery->execute();

    while ($resultSet = $pQuery->fetch()) {
        $count = $resultSet[0];
    }
    $pQuery->closeCursor();

    return $count;
}
