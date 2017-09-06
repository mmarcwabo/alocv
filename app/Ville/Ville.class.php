<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ville
 *
 * @author marcellin
 */
class Ville {
    //put your code here

    private $nomVille;
    private $codePostal;
    private $pays;
    
    function __construct($nomVille, $codePostal, $pays) {
        $this->nomVille = $nomVille;
        $this->codePostal = $codePostal;
        $this->pays = $pays;
    }
    
    function getNomVille() {
        return $this->nomVille;
    }

    function getCodePostal() {
        return $this->codePostal;
    }

    function getPays() {
        return $this->pays;
    }

    function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
    }

    function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }

    function setPays($pays) {
        $this->pays = $pays;
    }



}
