<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author marcellin
 */
class Client {
    //put your code here
    private $nom;
    private $prenom;
    private $adresse;
    private $numPermi;
    private $dateDeNaissance;
    private $tel;
    private $genre;
    private $numNational;
    private $idVille;
    
    function __construct($nom, $prenom, $adresse, $numPermi, $dateDeNaissance, $tel, $genre, $numNational, $idVille) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->numPermi = $numPermi;
        $this->dateDeNaissance = $dateDeNaissance;
        $this->tel = $tel;
        $this->genre = $genre;
        $this->numNational = $numNational;
        $this->idVille = $idVille;
    }
    
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getNumPermi() {
        return $this->numPermi;
    }

    function getDateDeNaissance() {
        return $this->dateDeNaissance;
    }

    function getTel() {
        return $this->tel;
    }

    function getGenre() {
        return $this->genre;
    }

    function getNumNational() {
        return $this->numNational;
    }

    function getIdVille() {
        return $this->idVille;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setNumPermi($numPermi) {
        $this->numPermi = $numPermi;
    }

    function setDateDeNaissance($dateDeNaissance) {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setGenre($genre) {
        $this->genre = $genre;
    }

    function setNumNational($numNational) {
        $this->numNational = $numNational;
    }

    function setIdVille($idVille) {
        $this->idVille = $idVille;
    }



}
