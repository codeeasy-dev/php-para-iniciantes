<?php

$a = [1,2,3];

// ADICIONA UM ELEMENTO NO FINAL
array_push($a, 4);
print_r($a);
echo "\n";

// REMOVE O ÚLTIMO ELEMENTO
array_pop($a);
print_r($a);
echo "\n";

// ADICIONA UM ELEMENTO NO INÍCIO
array_unshift($a, 4);
print_r($a);
echo "\n";

// REMOVE O PRIMEIRO ELEMENTO
array_shift($a);
print_r($a);
echo "\n";

// EXIBE O ÚLTIMO VALOR DO ARRAY
print_r(end($a));
echo "\n";

// CONTA A QUANTIDADE DE ELEMENTOS NUM ARRAY
print_r(count($a));
echo "\n";

// VERIFICA SE UM VALOR EXISTE NUM ARRAY
var_dump(in_array(2, $a));
echo "\n";

// MANUAL PHP - ARRAY FUNCTIONS: https://www.php.net/manual/pt_BR/ref.array.php
