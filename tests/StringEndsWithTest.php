<?php


use App\StringEndsWith;
use PHPUnit\Framework\TestCase;

class StringEndsWithTest extends TestCase
{
    /**
     * @dataProvider tests
     * @test
     */
    function endsWithString(string $string, string $ending, bool $expected)
    {
        $endsWith = new StringEndsWith();

        $this->assertEquals($expected, $endsWith->compare($string,$ending));
    }

    function tests():array
    {
        return[
            ["samurai", "ai", true ],
            ["Mike","easdfasdf", false ],
            ["test","st", true ],
            ["abc\n", 'abc', true ],
        ];
    }
}
