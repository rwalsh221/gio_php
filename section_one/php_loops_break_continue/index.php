<?php

// **** LOOPS *****************************************************************

// ***** WHILE LOOP ***********************************************************

$iWhile = 0;

while ($iWhile <= 15) {
    echo $iWhile++;
}

// ***** DO WHILE *************************************************************

// simular to while but first iteration will always pass as parameters checked after not before.

$iDoWhile = 15;

echo '<br>';

do {
    echo $iDoWhile++;
} while ($iDoWhile <= 15);


// ***** FOR *******************************************************************

echo '<br>';

for ($iFor = 0; $iFor < 15; $iFor++) {
    echo $iFor;
}

// ***** forEach ***************************************************************

echo '<br>';


$programmingLanguages = ['php', 'javascript', 'c++'];

foreach($programmingLanguages as $language) {
    echo $language, '<br>';
}

// $language variable will still exist after loop ends

// $language can be set to pass by reference to origninal array so can chnage the contents of array

// see video https://youtu.be/NhXvpHB_PMQ?t=724



