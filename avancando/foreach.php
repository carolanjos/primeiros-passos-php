<?php

// FOREACH significa PARA CADA 
$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], // [0]
    12345678911 => [
        'titular' => 'João',
        'saldo' => 2000
    ],
    12345678912 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
];

foreach ($contasCorrentes as $contas) {
    echo $contas['titular'] . PHP_EOL;
}

foreach ($contasCorrentes as $contas) {
    echo $contas['saldo'] . PHP_EOL;
}
// ao inves de cpf poderia ser qualquer outro nome (pois ele nao puxa o nome e sim a posição de chave)
foreach ($contasCorrentes as $cpf =>$contas) {
    echo $cpf . PHP_EOL;
}
