<?php

$value = (int) readline('Digite um valor: ');

if ($value > 10) {
    echo "O valor digitado é maior do que 10.\n";
} elseif ($value === 10) {
    echo "O valor digitado é idêntico a 10.\n";
} else {
    echo "O valor digitado é menor do que 10.\n";
}
