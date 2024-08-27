<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
// $idadeList = [[0], [1], [2], [3], [4], [5], [6]]

/* 
[0] => 21
[1] => 23
[2] => 19
[3] => 25
[4] => 30
[5] => 41
[6] => 18
*/

// Para adicionar um novo item a lista de array

$idadeList[7] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

//se eu não souber a quantidade de arrays na lista eu faço

$idadeList[count($idadeList)] = 20;
foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

// se eu não colocar um numero de indice, ele vai para o proximo numero
// $idadeList[] = 20;