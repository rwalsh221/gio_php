<!DOCTYPE html>
    <head>

    </head>
    <body>
        
            <?php $score = 73; ?>

            <?php if ($score >= 95): ?> 
                <strong>A</strong>
           
            <?php elseif ($score >= 85): ?> 
                <strong>B</strong>
            <?php elseif ($score >= 75): ?> 
                <strong>C</strong>
            <?php elseif ($score >= 65): ?> 
                <strong>D</strong>
            <?php else: ?> 
                <strong>E</strong>
            
            <?php endif ?>
        
    </body>
</html>


<?php

// CONTROL STRUCTURES (if else elseIf else if)

$score = 73;

if ($score >= 95) {
echo 'a';
if ($score >= 96) {
    echo '+';
}
} elseif ($score >= 85) {
    echo 'b';
} elseif ($score >= 75) {
    echo 'c';
} elseif ($score >= 65) {
    echo 'd';
} else {
    echo 'e';
}