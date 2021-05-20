<?php


use App\SentenceCount;
use PHPUnit\Framework\TestCase;

class SentenceCountTest extends TestCase
{
    /**
     * @dataProvider factors
     * @test
     */
    function it_generates_prime_factors_for_1($number, $expected){
        $factors = new SentenceCount();
        $this->assertEquals($expected, $factors->count($number));
    }

    public function factors(): array
    {
        return [
            ['This is a sentence', 's'],

            ];
    }
}
