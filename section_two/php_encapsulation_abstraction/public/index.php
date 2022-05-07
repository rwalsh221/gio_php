<?php
declare(strict_types=1);

// ENCAPSULATION AND ABSTRACTION
use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;


require_once __DIR__ . '/../vendor/autoload.php';

$transaction =  new Transaction(25);

// $transaction->amount = 125;

$transaction->process();

