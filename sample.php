<?php

declare(strict_types=1);

namespace App;

class SampleClass
{
    /**
     * Sample method that adds two numbers.
     *
     * @param int $a First number
     * @param int $b Second number
     * @return int Sum of $a and $b
     */
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * Sample method that subtracts two numbers.
     *
     * @param int $a First number
     * @param int $b Second number
     * @return int Difference of $a and $b
     */
    public function subtract(int $a, int $b): int
    {
        return $a - $b;
    }
}
