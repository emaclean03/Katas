<?php


use App\Isogram;
use App\IsVowel;
use PHPUnit\Framework\TestCase;

class IsVowelTest extends TestCase
{
    /**
     * @dataProvider function_tests
     * @test
     */
  public function is_word_an_isogram(string $word, int $expected )
  {
    $isogram = new IsVowel();

    $this->assertEquals($expected, $isogram->isVowel($word));
  }

    function function_tests():array
    {
        return[
            ['Does this have a vowel', 8 ],
            ['This will have a cat', 6 ],
            ['Does this have a vowel', 8 ],
            ['Does this have a vowel for hacktoberfest', 8 ],
            ["dvgd", 0 ],
        ];
    }
}
