<?php

require 'PhoneBook.php';
require 'PhoneBookReport.php';
   
class PhoneBookReportTest extends PHPUnit_Framework_TestCase {
   
   public function testGetNumberCount() {
      $phoneBook = new PhoneBook(array(
	 '5555555555',
	 '1231231234',
	 '9879879876',
      ));
      $sut = new PhoneBookReport();
   }

}
