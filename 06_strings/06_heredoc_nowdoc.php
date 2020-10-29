<?php

$n1 = 'Felipe';
$n2 = 'Renan';
$n3 = 'Vieira';

// Múltiplas linhas
$a = "
Seja bem vindo:
$n1 $n2 $n3
";

echo $a;
echo "\n";

// Heredoc
$b1 = <<<EOF
Seja bem vindo:
$n1 $n2 $n3\n
EOF;

echo $b1;
echo "\n";

$b2 = <<<HTML
<b>Seja bem vindo:</b>
<p>$n1 $n2 $n3</p>\n
HTML;

echo $b2;
echo "\n";

$b3 = <<<SQL
SELECT * FROM table;\n
SQL;

echo $b3;
echo "\n";

// Nowdoc
$c1 = <<<'EOF'
Seja bem vindo:
$n1 $n2 $n3\n
EOF;

echo $c1 . "\n";
echo "\n";

$c2 = <<<'HTML'
<b>Seja bem vindo:</b>
<p>$n1 $n2 $n3</p>\n
HTML;

echo $c2 . "\n";
echo "\n";

$c3 = <<<'SQL'
SELECT * FROM table;\n
SQL;

echo $c3 . "\n";
echo "\n";

// Heredoc e Nowdoc para PHP 7.3 ou superior
function test1()
{
    $d = <<<EOF
        Teste 123
    EOF;
}

// Heredoc e Nowdoc para PHP 7.2 ou inferior
function test2()
{
    $e = <<<EOF
        Teste 123
EOF;
}