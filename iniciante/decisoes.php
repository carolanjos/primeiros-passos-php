<?php

$idade = 18;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho." . PHP_EOL;
} elseif ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar." . PHP_EOL;
} else {
    echo "Você só tem $idade anos. Você não pode entrar." . PHP_EOL;
}

echo PHP_EOL;
echo "Adeus!";

// == significa igualdade
// || significa ou
// > significa maior que
// < significa menor que
// >= significa maior ou igual
// <= significa menor ou igual
// && significa "e" ou "and"

// $variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso; - operador ternário 

// if - se
// else - senão
// elseif - senão se - uma expressão alternativa - se houver mais de uma condição