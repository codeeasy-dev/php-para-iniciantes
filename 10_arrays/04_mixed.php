<?php

$mixed = [
    'name' => 'Felipe',
    [
        1, 5, 7, ['age' => 20]
    ],
];

print_r($mixed);

$mixed = [
    'name' => 'Felipe',
    'numbers' => [
        1,
        5,
        7,
    ],
    'test' => [
        'age' => 20,
    ],
];

print_r($mixed);
