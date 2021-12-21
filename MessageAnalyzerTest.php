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
        $actual = $messageAnalyzer->getMessagePositivity("Envie de canner");

        //Assert
        $this->assertEquals("correct", $actual);
    }
}