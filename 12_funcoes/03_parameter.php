<?php

function beautifulMessage(string $message): string
{
    return ">>> {$message} <<<\n";
}

echo beautifulMessage('Testing');
echo beautifulMessage('Testing 2.0');

/**
 * Return the sum of all numbers.
 * 
 * @param array<int|float> $numbers
 * @return float
 */
function sumOfAllNumbers(array $numbers): float
{
    $result = 0;

    foreach ($numbers as $number) {
        $result += $number;
    }

    return $result;
}

$myArray = [10, 15.5, 4.5];

echo sumOfAllNumbers($myArray) . "\n";
