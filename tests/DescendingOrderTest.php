<?php


use App\DescendingOrder;
use PHPUnit\Framework\TestCase;

class DescendingOrderTest extends TestCase
{
    /**
    @test
     * @dataProvider case_tests
     */
    public function DescendingOrder($number, $expected ){
        $order = new DescendingOrder();

        $this->assertEquals($expected, $order->generate($number) );
    }

    public function case_tests(): array
    {
        return [
            [3521, 5321],
            [9854, 9854],
            [589752, 987552],
        ];
    }
}
