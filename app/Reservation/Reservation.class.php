<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reservation
 *
 * @author marcellin
 */
class Reservation {

    //put your code here
    private $dateDebut;
    private $dateFin;
    private $caution;
    private $Employe;
    private $Client;
    private $Voiture;

    function __construct($dateDebut, $dateFin, $caution, $Employe, $Client, $Voiture) {
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->caution = $caution;
        $this->Employe = $Employe;
        $this->Client = $Client;
        $this->Voiture = $Voiture;
    }

    function getDateDebut() {
        return $this->dateDebut;
    }

    function getDateFin() {
        return $this->dateFin;
    }

    function getCaution() {
        return $this->caution;
    }

    function getEmploye() {
        return $this->Employe;
    }

    function getClient() {
        return $this->Client;
    }

    function getVoiture() {
        return $this->Voiture;
    }

    function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    function setDateFin($dateFin) {
        $this->dateFin = $dateFin;
    }

    function setCaution($caution) {
        $this->caution = $caution;
    }

    function setEmploye($Employe) {
        $this->Employe = $Employe;
    }

    function setClient($Client) {
        $this->Client = $Client;
    }

    function setVoiture($Voiture) {
        $this->Voiture = $Voiture;
    }

}
