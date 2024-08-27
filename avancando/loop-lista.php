<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

/*
Isso porque o array $idadeList possui 7 elementos, e o índice do último elemento é 6.
Inicia um contador $i em 0, pois sabemos que o nosso array começa do índice zero, e queremos que ele itere até o sexto item desse array 
- ou seja, $i < 7.
Enquanto esse valor não for alcançado, o contador será incrementado com $i++.

- Feito isso, quando $i for igual à 7, a execução do código terminará.
*/

for ($i = 0; $i < 7; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

echo PHP_EOL;
/* PARTE 2
Mas e se tivermos uma lista com 50 dados, teremos que contá-los para saber qual o número total de itens nela? 
E se estivermos importando essa lista de outro arquivo ou de um banco de dados? Com o PHP é bem simples descobrirmos o tamanho de uma lista.
*/

// usando count($idadeList); podemos contar quantos itens existem em uma lista
echo count($idadeList) . PHP_EOL;
// o valor retornado é 7
echo PHP_EOL;
// podemos substituir o $i < 7 por $i < count($idadeList)
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

//PARTE 3
echo PHP_EOL;
$nomes = ["João", "Maria", "Pedro", "Ana"];

for($indice = 0; $indice < count($nomes); $indice++) {
    echo $nomes[$indice] . PHP_EOL;
}
