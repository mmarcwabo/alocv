<?php
//Appel des fonctions 
include_once '../../model/functions.php';
include_once '../../controller/functions.php';

$user=  htmlentities($_POST['user']);
$pass=htmlentities($_POST['pass']);
validerMembre($user, $pass);

