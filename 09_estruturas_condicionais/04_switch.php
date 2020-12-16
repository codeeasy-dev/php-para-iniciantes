<?php

$value = readline("Digite 1, 2 ou 3: ");

switch ($value) {
    case 1:
        echo "Você digitou 1!\n";
        break;
    
    case 2:
        echo "Você digitou 2!\n";
        break;

    case 3:
        echo "Você digitou 3 como int!\n";
        break;
    
    default:
        echo "VALOR INVÁLIDO!\n";
}
