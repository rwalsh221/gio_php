<?php

# BOOLEANS

$isComplete = '';

// integers 0 and -0 = false
// integers 0.0 and -0.0 false
// '' - empty string is false
// '0' - zero string is false
// [] - empty array is false
// null is false



if ($isComplete) {
    echo 'hello';
} else {
    echo 'goodbye';
}