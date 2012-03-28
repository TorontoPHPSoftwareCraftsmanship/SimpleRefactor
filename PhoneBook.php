<?php

class PhoneBook {
   public $numbers = array();
   
   public function __construct($numberList) {
      $this->numbers = $numberList;
   }

   public function addNumber($number) {
      $this->numbers[] = $number;
   }
}
