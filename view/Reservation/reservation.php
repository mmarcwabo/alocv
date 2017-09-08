<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../../model/functions.php';

$prix=  getFieldFromAnyElse("voiture", "idvoiture", $_POST['idvoiture'], "prix");
$dd=$_POST['debut'];
$df=$_POST['fin'];

?>
<h1>Facture</h1>
<table border="0">
        <thead>
            <tr>
                <th>Locataire : <?php
                include_once '../../model/functions.php';
                echo getFieldFromAnyElse("client", "idclient", 4, "prenom")." ".
                        getFieldFromAnyElse("client", "idclient", 4, "nom");
                ?></th>
                <th>N°<span style="color: red;"><?php echo  rand(100, 777);?></span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Location voiture : </td>
                <td><?php
                echo getFieldFromAnyElse("voiture", "idvoiture", $_POST['idvoiture'], "marque")." et de plaque ".
                        getFieldFromAnyElse("voiture", "idvoiture", $_POST['idvoiture'], "numplaque");
                ?></td>
            </tr>
            <tr>
                <td>Du <?php echo $dd;?></td>
                <td>Au <?php echo $df;?></td>
            </tr>
            <tr>
                <td>Total à payer :</td>
                <td> <?php echo getFieldFromAnyElse("voiture", "idvoiture", $_POST['idvoiture'], "prix");?></td>
            </tr>
        </tbody>
    </table>
<input type="button" onclick="print()" value="Imprimer facture">
<script type="text/javascript">


</script>
