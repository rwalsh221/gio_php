<?php

function prettyPrintArray(array $value, string $methodName) {
    echo '<pre>';

    echo "<strong>{$methodName}</strong> <br>";

    print_r($value);

    echo '</pre>';
}