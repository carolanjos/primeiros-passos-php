<?php 
// o 13 nao aparece nesse caso:
for ($contador = 1; $contador <= 15; $contador ++) {
    // pulara quando o numero for igual a 13
    if ($contador == 13) {
        continue;
    }
    echo "#$contador" . PHP_EOL;
}

echo PHP_EOL;

for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        break;
    }
    echo "#$contador" . PHP_EOL;
}

// == significa igual
// != significa diferente