<?php 
/*
$contasCorrentes = [1000, 2000];
$contasCorrentes = ['Vinicius', 'João'];
*/

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

echo $conta1['titular'] . PHP_EOL;

/*
$conta1 = [
    12345678912 => 'Vinicius',
    'titular' => 'Vinicius',
    'saldo' => 1000
];
*/

$conta2 = [
    'titular' => 'João',
    'saldo' => 2000
];

$conta3 = [
    'titular' => 'Maria',
    'saldo' => 10000
];


$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}