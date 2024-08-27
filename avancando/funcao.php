<?php

// A função também existe na matemática: ela recebe um valor e devolve um valor modificado.
// f(x) = x + 2
function adiciona2($x) {
    return $x + 2;
}

$sete = adiciona2(5);

echo $sete . PHP_EOL;

function adicionaSoma($x) {
    return $x + 2;
}

$resultado = adicionaSoma(10);
echo $resultado . PHP_EOL;
exit();