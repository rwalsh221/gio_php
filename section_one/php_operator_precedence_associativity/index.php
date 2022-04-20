<?php

// OPERATOR PRECEDENCE AND ASSOCIATIVITY

$x = 5 + 3 * 5;

// x = 20. * has higher precendce so is done first

$y = (5 + 3) * 5;

// y is 40 as brackets have higher precenden than *

// ASSOCIATIVITY 

// this determines which is done first if both have same precendence

$a = 5;
$b = 2;
$c = 10;

$result = $a / $b * $c; // divide first and then times as this has same precendence but left associativity

