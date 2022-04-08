<?php

// variables pass be value like js

$x = 1;

$y = $x;

$x = 3;

echo $y;

// use & to pass variable by reference

$a = 5;

$b = &$a;

$a = 10;

echo $b; // output 10. & passes var by reference

$firstName = 'Richard';

echo 'hello $firstName'; // out put hello $firstname

echo "hello $firstName"; // out put hello Richard double quotes to output var

echo "hello {$firstName}"; // as above but {} for readabilty

echo 'hello ' . $firstName; // as above . is concat operator

?>

<!DOCTYPE html>
<html>
    <body>

        <h1>
            <?php echo 'hello world' ?>
            <br>
            <?= 'same as above shorthand' ?>
            <br>
            <?php 
                $x = 10;
                $y = 5;
                
                echo $x . ',' . $y; // if writing code cant use shorthand
            ?>
        </h1>
        <p>My first paragraph.</p>

    </body>
</html>