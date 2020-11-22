<?php

// Se for ISSO e ISSO

$a = 1 == 1 && 2 == 2; // true
//    true  &&  true  = true

$b = 1 == 1 && 2 == 1; // false
//    true  &&  false = false

$c = 2 == 1 && 2 == 2; // false
//    false &&  true = false

$d = 1 == 2 && 2 == 1; // false
//    false &&  false = false

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
