<?php

// PHP ARRAYS

// ****************** PHP ARRAY REF - https://www.php.net/manual/en/ref.array.php **************************************************

require 'helpers.php';

// array_chunk - splits array into chunks

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

prettyPrintArray(array_chunk($items, 2, true), 'array_chunk');

// array combine - combines two arrays - first arg is keys

$array1 = ['a', 'b', 'c',];
$array2 = [5, 10, 15];

prettyPrintArray(array_combine($array1, $array2), 'array_combine');

// array filter - Filters elements of an array using a callback function

$filterArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even = array_filter($filterArray, fn($number) => $number % 2 === 0);

prettyPrintArray($even, 'array_filter');

// array keys - Return all the keys or a subset of the keys of an array

$itemsAK = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

$keys = array_keys($itemsAK);

prettyPrintArray($keys, 'array_keys');

// array_map - Applies the callback to the elements of the given arrays

$mapArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$multiplyArray = array_map(fn($number) => $number * 3, $mapArray);

prettyPrintArray($multiplyArray, 'array_map');

// array_merge - Merge one or more arrays

$mergeArray = array_merge($array1, $array2);

prettyPrintArray($mergeArray, 'array_merge');

// array_reduce - Iteratively reduce the array to a single value using a callback function

$invoiceItems = [
    ['price' => '9.99', 'qty' => 2, 'desc' => 'item 1'],
    ['price' => '29.99', 'qty' => 1, 'desc' => 'item 2'],
    ['price' => '139.99', 'qty' => 4, 'desc' => 'item 3'],
    ['price' => '39.99', 'qty' => 1, 'desc' => 'item 4'],
    ['price' => '59.99', 'qty' => 6, 'desc' => 'item 5'],
];

$total = array_reduce($invoiceItems, fn($sum, $element) => $sum + $element['qty'] * $element['price']);

echo $total . ' array reduce <br>';

// array_search  Searches the array for a given value and returns the first corresponding key if successful

$arraySearch = ['a', 'b', 'c', 'ab', 'bc', 'cd'];

$key = array_search('b', $arraySearch);

echo $key . ' array_search <br>';

// array_diff Computes the difference of arrays

prettyPrintArray(array_diff($arraySearch, $array1, $array2), 'array_diff');

// arsort - Sort an array in descending order and maintain index association

$asortArray = ['c' => 3, 'd' => 4, 'e' => 5, 'a' => 1, 'b' => 2, ];

prettyPrintArray($asortArray, 'asort - unsorted');

asort($asortArray);

prettyPrintArray($asortArray, 'asort - sorted');

// asort sort by value - ksort sorts by key

// ARRAY DESTRUCTURING

[$a, $b, $c] = $array2;

echo $a . ', '. $b . ', '. $c, ' array destructed';
