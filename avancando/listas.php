<?php

/* lista: 
quanto mais idades, mais linhas, mais espaço de memória, mais nomes diferentes de variáveis (o que pode acarretar em erros),
$idade1 = 21;
$idade2 = 23;
$idade3 = 19;
$idade4 = 21;
$idade5 = 30;
$idade6 = 25;
*/

/* assim não funciona a lista => $idadeList = 21, 23, 19, 25, 30, 41, 18; */

/* 
Em programação, um conjunto de dados dessa forma acima, exposto como uma lista, é chamado de array (ou "vetor")
Um array nada mais é do que uma sequência de informações, normalmente (mas não sempre) do mesmo tipo
 - por exemplo, uma lista de inteiros.
Para criar um array em PHP, usamos a função array(), que recebe os elementos do array como argumentos e retorna o array criado.
*/

/* Nas versões mais recentes do PHP, não precisamos mais escrever a palavra array, bastando utilizarmos colchetes para rodear o nosso vetor:
$idadeList =  array(21, 23, 19, 25, 30, 41, 18); */

$idadeList = [21, 23, 19, 25, 30, 41, 18];
$primeiraIdade = $idadeList[0];

$idadeVinicius = $idadeList[0];
$idadeJoao = $idadeList[1];
$idadeMaria = $idadeList[2];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
list($idadeVinicius, , $idadeMaria) = $idadeList;

echo $primeiraIdade . PHP_EOL;
echo $idadeList[0] . PHP_EOL;

// echo $idadeList; não funciona, pois não é possível imprimir um array diretamente
// seria como => $idadeList = [0, 1, 2, 3, 4, 5, 6]; - sempre inicia com 0

$umaIdade = $idadeList[2];
echo $umaIdade . PHP_EOL;

