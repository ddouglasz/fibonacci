<?php

interface Fibonacci
{
    public function getNumber(int $n);
}

class NthFibonacciNumber implements Fibonacci
{
    public function getNumber(int $n)
    {
        $nthFibonacci = 0;
        echo "The fibonacci number at $n is: $nthFibonacci";
    }
}

$number = new NthFibonacciNumber();
$number->getNumber(23);
