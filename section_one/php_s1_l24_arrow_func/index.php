<?php

// Variable, Anonymous, Callable, Closure & Arrow Functions

// variable function *****************************

function variableFunc($x) {
    echo $x;
}

$x = 'variableFunc';

echo $x(10); // will echo 10 as checks if function exists with name of the value of x

// anonymous function *********************************************

function () {echo 'anoymous';};

// callable = callbak functions same as js

echo '<br>';

print_r($GLOBALS);

// ARROW FUNCTION ******************************************************

// arrow function can only be single line.

fn($var1, $var2) => $var1 + $var2; 