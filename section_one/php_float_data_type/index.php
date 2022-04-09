<?php

# FLOATS

// floating numbers may have errors

$y = ceil((0.1 + 0.2) * 10); // should equal 3 and not be rounded up with ciel
// actually equals 3.000000000000000000000000001 and is rounded up to 4. simiular to js


$x = 2.3;

echo $x;
