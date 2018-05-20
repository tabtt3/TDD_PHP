<?php

namespace App;

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Daller(5);
        $five->times(2);

        $this->assertEquals(10, $five->amount);
    }
}
