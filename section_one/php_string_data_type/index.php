<?php

# STRINGS

$firstName = 'John';

$lastName = 'Matrix'; // single quote no variables

$fullName = "${firstName} ${lastName}"; // can use var in double quote

echo $fullName . '<br>';

echo $fullName[3]; // prints n - [-3] = r

$fullName[1] = 'p'; // will change letter at pos 2. to 'p'. same if [-2] but from end. 

echo $fullName . '<br>';

$a = 1;

# HANDLE MULTILINE STRINGS

// Heredoc - treats string as "string". double quote. can use var 
$hereDocText = <<<TEXT
Line ${a}
Line 2
Line's 3
TEXT;

echo nl2br($hereDocText); // nl2br adds line breaks
// TEXT is just opening and closing tag. and can be called anything 

// Nowdoc - treats string as 'string'. single quotes. no var
$nowDocText = <<<'TEXT2'
Line ${a}
Line 2
Line's 3
TEXT2;

echo '<br>';

echo nl2br($nowDocText);


