<?php
use PHPUnit\Framework\TestCase;
require './models/MessageAnalyzer.class.php';

class MessageAnalyzerTest extends TestCase
{
    //Testing possitvity = "neutre"
    public function testGetMessagePositivityGivenStringShouldReturnNeutre(){
        //Arrange
        $messageAnalyzer = new MessageAnalyzer();

        //Act
        $actual = $messageAnalyzer->getMessagePositivity("Envie de canner");

        //Assert
        $this->assertEquals("neutre", $actual);
    }
    //Testing possitvity = "correct"
    public function testGetMessagePositivityGivenStringShouldReturnCorrect(){
        //Arrange
        $messageAnalyzer = new MessageAnalyzer();

        //Act
        $actual = $messageAnalyzer->getMessagePositivity("La vie est agréable");

        //Assert
        $this->assertEquals("correct", $actual);
    }
    //Testing possitvity = "bon"
    public function testGetMessagePositivityGivenStringShouldReturnBon(){
        //Arrange
        $messageAnalyzer = new MessageAnalyzer();

        //Act
        $actual = $messageAnalyzer->getMessagePositivity("C'est super cool! Cette journée sympa est génial");

        //Assert
        $this->assertEquals("bon", $actual);
    }
}