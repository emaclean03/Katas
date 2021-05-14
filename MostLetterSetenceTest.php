<?php


use App\MostLetterSetence;
use PHPUnit\Framework\TestCase;

class MostLetterSetenceTest extends TestCase
{
    /*Write a program that reads in a string and determines the letter that occurs the most.
    const input = "Random words in front of other random words create a random sentence.";

    */
    /**
     *
     * @test
     */
    public function test_most_letters_in_sentence()
    {
        $findLetters = new MostLetterSetence('Random words in front of other random words create a random sentence.');
       // $this->assertEquals($expected, $findLetters->MostLetters($sentence));
    }



}
