<?php

//  ARRAYS

$programmingLanguages1 ='PHP';
$programmingLanguages2 = 'Java';
$programmingLanguages3 = 'Python';

// refactor to array

$programmingLanguages = ['PHP', 'Java', 'Python'];

// CHANGE VALUE AT INDEX
$programmingLanguages[1] = 'C++';

echo $programmingLanguages[1], '<br>';

// ARRAY LENGTH
echo count($programmingLanguages), '<br>';

echo var_dump($programmingLanguages), '<br>';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// ADD TO END OF ARRAY

$programmingLanguages[] = 'javascript';

echo count($programmingLanguages), '<br>';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// ADD MULTIPLE ELEMENTS

array_push($programmingLanguages, 'C', 'GO');

echo count($programmingLanguages), '<br>';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// ASSOCIATIVE ARRAY. ADD KEYS TO ARRAY

$aaProgrammingLanguages = [
    'php' => '8.0',
    'python' => '3.9'
];

echo '<pre>';
print_r($aaProgrammingLanguages);
echo '</pre>';

// ACCSESS BY KEY

echo '<br>';
echo $aaProgrammingLanguages['php'];


//  ADD NEW ELEMENT

$aaProgrammingLanguages['go'] = '1.15';

echo '<br>';

echo '<pre>';
print_r($aaProgrammingLanguages);
echo '</pre>';


// MULTI-DIMENSIONAL ARRAYS. Simular to js objects

$mdProgrammingLanguages = [
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'versions' => [
            ['version' => 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version' => 7.4, 'releaseDate' => 'Nov 26, 2019'],
        ],
    ],
    'pyton' => [
        'creator' => 'Guido Van Rossum',
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'oct 5, 2020'],
            ['version' => 3.8, 'releaseDate' => 'oct 14, 2019'],
        ],
    ],
];

// ACCESS DATA BY CHAING KEYS

echo $mdProgrammingLanguages['php']['creator'];
echo'<br>';
echo $mdProgrammingLanguages['php']['versions'][0]['version'];

// DUPLICATE KEYS, duplicate keys will overide the existing value

$dkArray = [1 => 'test', 2 =>'test2', '2' => 'test3']; // $dkArray['2] will output 'test3'

// REMOVE FROM ARRAY

// array_pop() removes from end

// array_shift() removes from front. will reindex array