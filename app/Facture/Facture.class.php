<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Facture
 *
 * @author marcellin
 */
class Facture {
    //put your code here

   private $dateFacturation;
   private $montantTotal;
   private $Reservation;
   
   function __construct($dateFacturation, $montantTotal, $Reservation) {
       $this->dateFacturation = $dateFacturation;
       $this->montantTotal = $montantTotal;
       $this->Reservation = $Reservation;
   }
   
   function getDateFacturation() {
       return $this->dateFacturation;
   }

   function getMontantTotal() {
       return $this->montantTotal;
   }

   function getReservation() {
       return $this->Reservation;
   }

   function setDateFacturation($dateFacturation) {
       $this->dateFacturation = $dateFacturation;
   }

   function setMontantTotal($montantTotal) {
       $this->montantTotal = $montantTotal;
   }

   function setReservation($Reservation) {
       $this->Reservation = $Reservation;
   }




}
