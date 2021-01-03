<?php

function addTenWithoutReference(int $value): int
{
    return $value + 10;
}

$myValue = 20;

echo "{$myValue}\n";
$myValue = addTenWithoutReference($myValue);
echo "{$myValue}\n";

echo "\n";

function addTen(int &$value): void
{
    $value += 10;
}

$myValue = 20;

echo "{$myValue}\n";
addTen($myValue);
echo "{$myValue}\n";
