<?php

// ***** OPERATORS

//  ***** ARITHMETIC OPERATORS (+ - * / % **) ******************

// converts string to number. like js

$x = 2;
$y = 10;

var_dump($x ** $y);

//  ***** ASSIGNMENT OPERATORS (= += -= *= /= %= **=) ************

// = is assiganment operator not comparrison.

$a = 2;

$a += 2; // === 4. same as js

// echo $a;

//  ***** STRING OPERATORS (. .=)

// .= is assignment contactenation operator like +=

$string = 'hello';

$string .= ' world';

// echo $string; === 'hello world'

// ***** COMPARISON OPERATORS (== === != <> !== < > <= >= <=> ?? ?) ****************

// == === same as js. == loose no type checking. === stricht also  checks type

// 5 == '5'. true. === false

// <> same as ==

// <=. less than equal to

// >= greater than equal to

// <=> spaceship. less than, equal to , greater than
// if a < b will return -1
// if a === b will return 0
// if a > b will return 1

$cA = 7;
$cB = 6;

var_dump($cA <=> $cB);

var_dump(0 == 'hello');

// ? is ternary operator

$result = $cA === $cB ? 'yes' : 'no';

echo $result;

// ?? null coalescing operator
// if first argument is null var will equal second argument

$nCA = null;

$nCB = $nCA ?? 'hello';

var_dump($nCB);

// $nCB will equal 'hello

$nCD = 'bye';

$nCE = $nCD ?? 'hello';

var_dump($nCE);

//$nCE will equal 'bye'
