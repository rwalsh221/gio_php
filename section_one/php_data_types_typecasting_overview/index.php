<?php

// DATA TYPES AND TYPE CASTING

# 4 Scalar Types
    # bool - true or false
    $completed = true; // true echo = 1, false echo = doesnt display anything
    # integar - whole numbers - 1, 2, 3
    $score = 75;
    # float - number with decimal. 1.5, 0.1
    $price = 0.99;
    # strings - 'richard'
    $greeting = 'Hello Richard';

    echo $completed . '<br>';
    echo $score . '<br>';
    echo $price . '<br>';
    echo $greeting . '<br>';

    // echo gettype($greeting);
    echo var_dump($completed) . '<br>';

# 4 Compound Types
    # array - list of items
    $companys = [1,2,3,4,0.5];
    // print_r($companys) . '<br>';
    # object
    # callable
    # iterable

# 2 Special Types
    # resource
    # null - no value


# type hinting and type coercian.simiular to js. php  will convert '1' to 1. 
# can tell function what data typ to expect as below.
# can use stricht mode to prevent type coercian.

function sum(int $x, int $y) {
    var_dump($x, $y);
    return $x + $y;
}

echo sum(2, 3);