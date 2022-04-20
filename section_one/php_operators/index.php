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

// ***** ERROR CONTROL OPERATOR (@) ***************************************************************

// @ will supress an error.

// $erX = file('foo.txt'); // file reads a file. will error as file does not exist

// $erY = @file('foo.txt'); // error is supressed and code will work. but still an error

// ***** INCREMENT / DECREMENT OPERATORS (++, --) ******************************************

$idX = 5;

// post increment

echo $idX++; // will echo 5 and then ++
echo $idX; // will now echo 6

// pre increment 
echo ++$idX; // will echo 6 as it ++ first then return value of idX

// ***** LOGICAL OPERATORS (&& || ! and or xor ) ******************************************************

// && and

// || or

// ! not

// and or xor - same but different precendence

// short circuting also works

// ***** BITWISE OPERATORS (& | ^ ~ << >>)

// changes bits between 1 and 0. binary

// see php operators pt 2 https://youtu.be/gCVlQdbddXY?t=538

// ARRAY OPERATORS (+ == === != <> !==)

$arrX = ['a', 'b', 'c'];
$arrY = ['d', 'e', 'f'];

$arrZ = $arrX + $arrY; // will equal arrX because of element index will overide. 
// if array is assciated array (js object) then arrZ will include all data unless ther is matching keys.

// ===. will only return true if the key value pairs match.

// ***** EXECUTION OPERATORS (``) ***************************************************

// `` not really needed see video https://youtu.be/gCVlQdbddXY?t=946

// last two deal with classes

// ***** TYPE OPERATORS (INSTANCEOF) ********************************************************

// ***** NULLSAFE OPERATORS - PHP8 (?)