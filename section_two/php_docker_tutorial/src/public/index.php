<?php
declare(strict_types=1);

// STATIC PROPERTIES AND METHODS
use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;


require_once __DIR__ . '/../vendor/autoload.php';

$transaction =  new Transaction(925, 'Transaction 1');

var_dump($transaction::$count);
