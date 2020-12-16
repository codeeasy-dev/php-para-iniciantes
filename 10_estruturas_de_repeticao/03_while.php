<?php

$value = 'vermelho';

while ($value !== 'verde') {
    echo "FIQUE PARADO!\n";

    $value = readline('Digite vermelho, amarelo ou verde: ');
}

echo "CONTINUE!\n";
