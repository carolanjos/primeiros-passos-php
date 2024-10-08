<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}


function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}
function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
} 


$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

/*
Quando tentamos acessar um array associativo dentro de uma string, o PHP se confunde com a variável, o colchete e as aspas, ocorrendo em um erro. 
Para resolvermos esse problema e exibirmos o valor de um array associativo dentro de uma string, basta removermos as aspas simples:
*/

// foreach ($contasCorrentes as $cpf => $conta) {
//     exibeMensagem()
//         ($cpf $conta[titular] $conta[saldo]
//     );
// }

// foreach ($contasCorrentes as $cpf => $conta) {
//     exibeMensagem(
//         "$cpf $conta[titular] $conta[saldo]"
//     );
// }

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}