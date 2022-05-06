<?php
declare(strict_types=1);

// CLASS CONSTANT
use App\Enums\Status;
use App\PaymentGateway\Paddle\Transaction;


require_once __DIR__ . '/../vendor/autoload.php';

$transaction = new Transaction();

// echo $transaction::STATUS_PENDING;
 
// echo $transaction::STATUS_PAID;

$status = new Status();

$transaction->setStatus(Status::PAID);

var_dump($transaction);
var_dump($status);
