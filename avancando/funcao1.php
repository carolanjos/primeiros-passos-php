<?php
function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}
function sacar(array $conta, float $valorASacar): array {
    if($valorASacar > $conta['saldo']) {
        exibeMensagem("Voce nao pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar): array {
    if($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

//chamaremos mb_strtoupper(), uma função que pega uma string e coloca todos os caracteres em letra maiúscula. 
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

/*
include
- Descrição: A função include inclui e avalia o arquivo especificado.
- Comportamento em caso de falha: Se o arquivo não puder ser incluído, o PHP gera um aviso (warning) e continua a execução do script.
- Uso: Usado quando a inclusão do arquivo não é essencial para o funcionamento do script, ou seja, o script pode continuar funcionando mesmo que a inclusão falhe.

require
- Descrição: A função require também inclui e avalia o arquivo especificado.
- Comportamento em caso de falha: Se o arquivo não puder ser incluído, o PHP gera um erro fatal (fatal error) e interrompe a execução do script.
- Uso: Usado quando a inclusão do arquivo é essencial para o funcionamento do script, ou seja, o script não deve continuar se a inclusão falhar.

require_once
- Descrição: A função require_once inclui e avalia o arquivo especificado apenas uma vez.
- Comportamento em caso de falha: Se o arquivo não puder ser incluído, o PHP gera um erro fatal (fatal error) e interrompe a execução do script, assim como require.
- Uso: Usado para garantir que o arquivo será incluído apenas uma vez, mesmo que a instrução de inclusão seja chamada múltiplas vezes no script. É útil para evitar a redefinição de funções, classes e variáveis.

Comportamento em caso de falha:

include: Emite um aviso e continua a execução.
require: Emite um erro fatal e interrompe a execução.
require_once: Emite um erro fatal e interrompe a execução (assim como require).
Inclusão múltipla:

include e require: Podem incluir o arquivo múltiplas vezes.
require_once: Inclui o arquivo apenas uma vez.
*/