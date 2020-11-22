<?php

// XOR
// Se for ISSO ou ISSO
// (boolean || boolean) && (boolean) !== (boolean)

/**
 * Exemplo a
 * (1 == 1 || 2 == 2) && (1 == 1) !== (2 == 2)
 * (true || true)     && (true) !== (true)
 * true && false
 * false
 */

$a = (1 == 1 || 2 == 2) && (1 == 1) !== (2 == 2); // false

$b = (1 == 1 || 2 == 1) && (1 == 1) !== (2 == 1); // true

$c = (2 == 1 || 2 == 2) && (2 == 1) !== (2 == 2); // true

$d = (1 == 2 || 2 == 1) && (1 == 2) !== (2 == 1); // false

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
