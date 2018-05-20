<?php

namespace App;

class Daller
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        $this->amount *= $multiplier;
    }
}
