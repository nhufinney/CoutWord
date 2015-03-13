<?php

    require_once "src/CountWord.php";
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app['debug'] = true;

    class CountWordTest extends PHPUnit_Framework_TestCase
    {

        function test_a_letter()
        {
            //Arrange
            $test = new RepeatCounter;
            $key_word = "a";
            $input_string = "a";
            $output = 1;

            //Act
            $result = $test->countRepeats($key_word, $input_string);

            //Assert
            $this->assertEquals($output, $result);
        }

        function test_a_letter_in_two_words_string()
        {
            //Arrange
            $test = new RepeatCounter;
            $key_word = "a";
            $input_string = "a table";
            $output = 1;


            //Act
            $result = $test->countRepeats($key_word, $input_string);

            //Assert
            $this->assertEquals($output, $result);
        }

        function test_two_letters_word_in_two_words_string()
        {
            //Arrange
            $test = new RepeatCounter;
            $key_word = "an";
            $input_string = "an apple";
            $output = 1;


            //Act
            $result = $test->countRepeats($key_word, $input_string);

            //Assert
            $this->assertEquals($output, $result);
        }

        function test_a_four_letters_word_in_a_sentence_string()
        {
            //Arrange
            $test = new RepeatCounter;
            $key_word = "work";
            $input_string = "All staff must be at work before 9am";
            $output = 1;


            //Act
            $result = $test->countRepeats($key_word, $input_string);

            //Assert
            $this->assertEquals($output, $result);
        }

        function test_two_counting_words_in_a_sentence_string()
        {
            //Arrange
            $test = new RepeatCounter;
            $key_word = "news";
            $input_string = "Today we have a big news from Fox news";
            $output = 2;


            //Act
            $result = $test->countRepeats($key_word, $input_string);

            //Assert
            $this->assertEquals($output, $result);
        }


    }

?>
