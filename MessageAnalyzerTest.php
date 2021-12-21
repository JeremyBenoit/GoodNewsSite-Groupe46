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
    //Testing possitvity = "tres bon"
    public function testGetMessagePositivityGivenStringShouldReturnTresBon(){
        //Arrange
        $messageAnalyzer = new MessageAnalyzer();

        //Act
        $actual = $messageAnalyzer->getMessagePositivity("Quel bonheur de voir le beau Quentin. Cela me procure beaucoup de plaisir. C'est vraiment génial. Il est trop cool ce type");

        //Assert
        $this->assertEquals("très bon", $actual);
    }
    //Testing possitvity = "franchement positif"
    public function testGetMessagePositivityGivenStringShouldReturnFranchementPositif(){
        //Arrange
        $messageAnalyzer = new MessageAnalyzer();

        //Act
        $actual = $messageAnalyzer->getMessagePositivity("Quel bonheur de voir le beau Quentin. Cela me procure beaucoup de plaisir. C'est vraiment génial. Il est super cool ce type");

        //Assert
        $this->assertEquals("franchement positif", $actual);
    }
    //Testing possitvity = "excellent"
    public function testGetMessagePositivityGivenStringShouldReturnExcellent(){
        //Arrange
        $messageAnalyzer = new MessageAnalyzer();

        //Act
        $actual = $messageAnalyzer->getMessagePositivity("Quel bonheur de voir le beau Quentin. Cela me procure beaucoup de plaisir. C'est vraiment génial. Il est super cool ce type. Par contre il n'est pas tres agréable, positif,bon ");

        //Assert
        $this->assertEquals("excellent", $actual);
    }
    //Testing possitvity = "parfait"
    public function testGetMessagePositivityGivenStringShouldReturnParfait(){
        //Arrange
        $messageAnalyzer = new MessageAnalyzer();

        //Act
        $actual = $messageAnalyzer->getMessagePositivity("Quel bonheur de voir le beau Quentin. Cela me procure beaucoup de plaisir. C'est vraiment génial. Il est super cool ce type. Par contre il n'est pas tres agréable ni positif ni bon ni sympa ");

        //Assert
        $this->assertEquals("parfait", $actual);
    }
}