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

    public function addTax (float $rate) 
    {
        $this->amount += $this->amount * $rate / 100;

        return $this; // allows chain methods
    }

    public function applyDiscount (float $rate) 
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

    public function getAmount (): float 
    {
        return $this->amount;
    }

    public function __destruct()
    {
        // https://youtu.be/6FW72q5fIx8?t=1025 see bookmark
    }
}