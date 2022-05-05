<?php

declare(strict_types=1);

class Transaction
{
    private float $amount;
    private string $description;

    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }
}


// same as above php 8 shorthand
class TransactionPhp8
{
    public function __construct(
        private float $amount, 
        private string $description) {}
    
}