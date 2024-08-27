<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>

<?php
// include('funcao1.php'); ou: 
require_once 'funcao1.php';
// Nos casos em que estamos incluindo arquivos obrigatórios, usamos a estrutura de linguagem require:
// require 'funcao1.php';

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

// Se eu quiser especificar que uma função não retorna nada, podemos utilizar o tipo void
/*
Caso o $valorASacar seja maior do que o saldo, será exibida uma mensagem informando que a pessoa não pode sacar. 
Caso contrário, o $valorASacar será subtraído do valor do saldo.

/* foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
*/
// $contasCorrentes['123.456.789-10']['saldo'] -= 500;
// $contasCorrentes['123.456.789-11']['saldo'] -= 500;

// if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
//     exibeMensagem( mensagem: "Você não pode sacar esse valor");
// } else {
//     $contasCorrentes['123.456.789-10']['saldo'] -= 500;
// }

// if (500 > $contasCorrentes['123.456.789-11']['saldo']) {
//     exibeMensagem( mensagem: "Você não pode sacar esse valor");
// } else {
//     $contasCorrentes['123.456.789-11']['saldo'] -= 500;
// }

// $contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
// $contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);

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

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);
unset($contasCorrentes['123.456.689-11']);

echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";