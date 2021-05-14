<?php


use App\CapitalizeLetters;
use PHPUnit\Framework\TestCase;

class CapitalizeLettersTest extends TestCase
{

    /**
     * @dataProvider function_tests
     * @test
     */
    public function compare(string $expected, string $word)
    {
        $jadenCase = new CapitalizeLetters();

        $this->assertEquals($expected, $jadenCase->toJadenCase($word));

    }

    public function function_tests(): array
    {
        return [
            ["This Is A Test", "this is a test"],
        ];
    }
}
