<?php

class PhoneBookReport {

   private $phoneBook;

   public function __construct($phonebook) {
      $this->phoneBook = $phonebook;
   }

   public function getNumberCount() {
      return count($this->phoneBook->numbers);
   }
   
   public function getNumbersSeperatedByComma() {
      $output = '';
      foreach($this->phoneBook->numbers as $number) {
	 $output .= $number . ',';
      }
      return $output;
   }
   
   public function getNumbersSeperatedByNewline() {
      $output = '';
      foreach($this->phoneBook->numbers as $number) {
	 $output .= $number . PHP_EOL;
      }
      return $output;
   }
}
