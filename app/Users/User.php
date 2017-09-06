<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author marcellin
 */
class User {

    //put your code here

    private $type;
    private $login;
    private $password;
    private $idOfInfos;

    function __construct($type, $login, $password, $idOfInfos) {
        $this->type = $type;
        $this->login = $login;
        $this->password = $password;
        $this->idOfInfos = $idOfInfos;
    }

    function getType() {
        return $this->type;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function getIdOfInfos() {
        return $this->idOfInfos;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setIdOfInfos($idOfInfos) {
        $this->idOfInfos = $idOfInfos;
    }

}
