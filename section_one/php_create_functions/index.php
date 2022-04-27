<?php

// functions

// bar(); // error because function doesent exist
// foo();

foo();
bar(); // will work as function has been created

// php fucntion has global scope so can call bar outside foo

function foo() {
    echo 'helllo world';
    function bar() {
        echo 'goodbye world';
    }
}

echo foo();

$test = foo();

echo " <br> {$test}";

echo '<br>';

// return types *********************************************

// declare(strict_types=1);

// see fucntion video https://youtu.be/ba1rulfNhLk?t=464
function fooReturn(): int { // can set data type
    return 1;
}

