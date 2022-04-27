<?php

// function parameters

declare(strict_types=1);

// will accept deafult parameter

function foo(int|float $x, int|float $y = 10) { // function will accept int or float data type see first function video https://youtu.be/ba1rulfNhLk?t=464
   return $x * $y;
}

// y is 10 as default
echo foo(5.5);

echo '<br>';

function foo2(int|float $x, int|float $y = 10) { // function will accept int or float data type see first function video https://youtu.be/ba1rulfNhLk?t=464
    $x++;
    $y++;
    
    return $x * $y;
 }

 $a = 5;
 $b = 10;

 echo foo2($a, $b); // a b are not changed as pass be value
 

// & before parameter is pass by reference
 function foo3(int|float &$x, int|float &$y = 10) { // function will accept int or float data type see first function video https://youtu.be/ba1rulfNhLk?t=464
    $x++;
    $y++;
    
    return $x * $y;
 }

 $c = 5;
 $d = 10;
 
 
 echo foo3($c, $d); // c d are changed as foo3 parmaeters are pass be reference

echo '<br>';


// ... splat operator like js spread operator
function sum(...$numbers): int|float {
    $sum = 0;

    foreach($numbers as $number) {
        $sum += $number;
    }

    return $sum;
};

echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9);

echo '<br>';

// named arguments ******************************************************

function namedArg(int $x, int $y = 10, int $z) {
    $testArr = [$x, $y, $z];

    return array_sum($testArr);
}

echo namedArg(x: 1, y: 2,z: 3); // can name the argumnets to match parameters

echo namedArg(x: 1, z: 4); // can skip argumnets if default value