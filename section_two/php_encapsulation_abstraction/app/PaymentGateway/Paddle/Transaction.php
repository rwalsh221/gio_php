<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{
    private float $amount;

    // allows passing of arguments to class on instanciation
    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function process()
    {
        echo 'Processing $' . $this->amount . ' transaction';

        // $this.generateReceipt();
    }


}
