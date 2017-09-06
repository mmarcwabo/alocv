<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Voiture {

    private $numChassi;
    private $numPlaque;
    private $motorisation;
    private $boite;
    private $puissance;
    private $marque;
    private $modele;
    private $prix;
    private $categorie;
    private $photo;
    private $Assurance;

    function __construct($numChassi, $numPlaque, $motorisation, $boite, $puissance, $marque, $modele, $prix, $categorie, $photo, $Assurance) {
        $this->numChassi = $numChassi;
        $this->numPlaque = $numPlaque;
        $this->motorisation = $motorisation;
        $this->boite = $boite;
        $this->puissance = $puissance;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->prix = $prix;
        $this->categorie = $categorie;
        $this->photo = $photo;
        $this->Assurance = $Assurance;
    }

    function getNumChassi() {
        return $this->numChassi;
    }

    function getNumPlaque() {
        return $this->numPlaque;
    }

    function getMotorisation() {
        return $this->motorisation;
    }

    function getBoite() {
        return $this->boite;
    }

    function getPuissance() {
        return $this->puissance;
    }

    function getMarque() {
        return $this->marque;
    }

    function getModele() {
        return $this->modele;
    }

    function getPrix() {
        return $this->prix;
    }

    function getCategorie() {
        return $this->categorie;
    }

    function getPhoto() {
        return $this->photo;
    }

    function getAssurance() {
        return $this->Assurance;
    }

    function setNumChassi($numChassi) {
        $this->numChassi = $numChassi;
    }

    function setNumPlaque($numPlaque) {
        $this->numPlaque = $numPlaque;
    }

    function setMotorisation($motorisation) {
        $this->motorisation = $motorisation;
    }

    function setBoite($boite) {
        $this->boite = $boite;
    }

    function setPuissance($puissance) {
        $this->puissance = $puissance;
    }

    function setMarque($marque) {
        $this->marque = $marque;
    }

    function setModele($modele) {
        $this->modele = $modele;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    function setPhoto($photo) {
        $this->photo = $photo;
    }

    function setAssurance($Assurance) {
        $this->Assurance = $Assurance;
    }

}
