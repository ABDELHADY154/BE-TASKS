<?php

class MyCalculator
{
    private $num1;
    private $num2;
    public function __construct(int $num1, int $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        // return $num1 . $num2;
    }

    public function add()
    {
        return $this->num1 + $this->num2;
    }

    public function multiply()
    {
        return $this->num1 * $this->num2;
    }
}
