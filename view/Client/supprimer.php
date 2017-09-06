<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Assurance{
    
    private $IdAssurance;
    private $TypeAssurance;
    private $Description;
    
    function __construct($IdAssurance, $TypeAssurance, $Description) {
        $this->IdAssurance = $IdAssurance;
        $this->TypeAssurance = $TypeAssurance;
        $this->Description = $Description;
    }
    
    function getIdAssurance() {
        return $this->IdAssurance;
    }

    function getTypeAssurance() {
        return $this->TypeAssurance;
    }

    function getDescription() {
        return $this->Description;
    }

    function setIdAssurance($IdAssurance) {
        $this->IdAssurance = $IdAssurance;
    }

    function setTypeAssurance($TypeAssurance) {
        $this->TypeAssurance = $TypeAssurance;
    }

    function setDescription($Description) {
        $this->Description = $Description;
    }



}