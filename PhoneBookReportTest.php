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
      $sut = new PhoneBookReport($phoneBook);
      $this->assertEquals(
	 3,
	 $sut->getNumberCount()
      );
   }
   
   public function testGetNumbersSepByComma() {
      $phoneBook = new PhoneBook(array(
	 '5555555555',
	 '1231231234',
	 '9879879876',
      ));
      $sut = new PhoneBookReport($phoneBook);
      $this->assertEquals(
	 "5555555555,1231231234,9879879876,",
	 $sut->getNumbersSeperatedByComma()
      );
   }
   
   public function testGetNumbersSepByNewline() {
      $phoneBook = new PhoneBook(array(
	 '5555555555',
	 '1231231234',
	 '9879879876',
      ));
      $sut = new PhoneBookReport($phoneBook);
      $this->assertEquals(
	 "5555555555".PHP_EOL."1231231234".PHP_EOL."9879879876".PHP_EOL,
	 $sut->getNumbersSeperatedByNewline()
      );
   }

}
