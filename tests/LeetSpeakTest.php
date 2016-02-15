<?php

    require_once "src/LeetSpeak.php";

    class LeetSpeakTest extends PHPUnit_Framework_TestCase
    {
        function test_leetSpeak_oneWord()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "adam";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertTrue(is_string($result));
        }

        function test_leetSpeak_e()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "the";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals('th3', $result);
        }

        function test_leetSpeak_o()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "beowolf";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals('b30w0lf', $result);
        }

        function test_leetSpeak_i()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "Indigo";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals('1ndig0', $result);
        }

        function test_leetSpeak_s()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "mississippi";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals('mizzizzippi', $result);
        }

        function test_leetSpeak_cap_s()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "USSR";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals('UzzR', $result);
        }

        function test_leetSpeak_start_s()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "Stereo";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals('St3r30', $result);
        }

        function test_leetSpeak_mult_words()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "the cats";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals('th3 catz', $result);
        }

        function test_leetSpeak_mult_wordss()
        {
            //Arrange
            $test_LeetSpeak = new LeetSpeak;
            $input = "Start Epicodus Homework";

            //Act
            $result = $test_LeetSpeak->makeLeetSpeak($input);

            //Assert
            $this->assertEquals('Start 3pic0duz H0m3w0rk', $result);
        }
    }

?>
