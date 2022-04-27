<?php

// variable scope ****************************

$x = 5; // global scope

function foo1() {
   // echo $x; // will error functions cant access parent or global scope like js
}

function foo2() {
    global $x;
    // or
    $x = $GLOBALS['x']; // pass be reference so any changes will change global x variable

    // using globals bad practice. can create bugs. use returns and parameters instaed to input output variables

    echo $x;
}

foo2();

echo '<br>';

// echo $GLOBALS;
