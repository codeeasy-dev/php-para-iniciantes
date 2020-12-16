<?php

$numberOfMessages = (int) readline('Digite o número de mensagens a serem exibidas: ');

for ($count = 0; $count < $numberOfMessages; $count++) {
    if ($count === 3 || $count === 7) {
        continue;
    }

    echo "{$count} - Mensagem\n";
}
