<?php

$array = [
    1 => 'a',
    '1' => 'b', //string
    1.5 => 'c', //float
    true => 'd', //boolean
    'qualquer_coisa' => 'Teste'
];

//o PHP só consegue trabalhar, em arrays associativos, com chaves dos tipos inteiro ou string.

foreach ($array as $item) {
    echo $item . PHP_EOL;
}