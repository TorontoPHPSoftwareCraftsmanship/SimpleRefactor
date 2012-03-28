<?php

class PhoneBookReport {

   public function getNumberCount($phoneBook) {
      return count($phoneBook->numbers);
   }
   
   public function getNumbersSeperatedByCommas($phoneBook) {
      $output = '';
      foreach($phoneBook->numbers as $number) {
	 $output .= $number . ',';
      }
      return $output;
   }
   
   public function getNumbersSeperatedByNewlines($phoneBook) {
      $output = '';
      foreach($phoneBook->numbers as $number) {
	 $output .= $number . PHP_EOL;
      }
      return $output;
   }
}
