Comando para executar o script pelo terminal:

```sh
php <nome-do-arquivo>.php
```

## FLUXO DA APLICAÇÃO

- O player 1 (X) digita o seu nome;
- O player 2 (O) digita o seu nome;

- Repetição:
    - O tabuleiro é exibido;
    - O player 1 ou 2 escolhe a posição desejada;
    - Se escolher uma posição já ocupada ou inexistente:
        - Uma mensagem de alerta é exibida;
        - Volta a execução da estrutura de repetição.
    - Uma verificação de combinações é feita;
    - Se alguma combinação for alcançada:
        - O player 1 ou 2 é declarado como vencedor;
        - Sai da estrutura de repetição.
    - Se todas as posições estiverem ocupadas:
        - Sai da estrutura de repetição.
    - Se nenhuma combinação for alcançada:
        - É declarado empate.
    - Troca de jogador.

- Exibir o vencedor;
- Perguntar se deseja jogar novamente;
- Se sim, reiniciar;
- Se não, finalizar.

## VARIÁVEIS

- Player 1 : string;
- Player 2 : string;
- Tabuleiro : array\<string\> com 9 posições;
- Player : string ('X', 'O');
- Posição : int;
- Vencedor : string|null ('X', 'O', null);
- Jogar novamente : bool;
