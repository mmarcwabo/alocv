<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Assurance{
    
    private $type;
    private $description;
    
    function __construct($type, $description) {
        $this->type = $type;
        $this->description = $description;
    }
    
    function getType() {
        return $this->type;
    }

    function getDescription() {
        return $this->description;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setDescription($description) {
        $this->description = $description;
    }



    




}