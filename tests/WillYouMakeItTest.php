<?php


use App\WillYouMakeIt;
use PHPUnit\Framework\TestCase;

class WillYouMakeItTest extends TestCase
{
    /**
     * @dataProvider function_tests
     * @test
     */
    function will_the_car_make_the_distance($distance, $mpg, $fuelLeft, $expected)
    {
        $calculate = new WillYouMakeIt();

        $this->assertEquals($expected, $calculate->calculate($distance, $mpg, $fuelLeft));
    }

    function function_tests():array
    {
        return[
            [50, 25, 2, true ],
            [100, 50, 1, false ],
        ];
    }
}
