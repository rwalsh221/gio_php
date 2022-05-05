<?php
declare(strict_types=1);

// CLASSES AND OBJECTS
require_once '../Tansaction.php';

$amount = (new Transaction(100, 'decription'))
->addTax(9)
->applyDiscount(10)
->getAmount(); // chained methods

var_dump($amount);

// nullsafe oprerator https://youtu.be/T1PbFz-o6kw