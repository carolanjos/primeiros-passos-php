<?php 

$contador = 1;

// enquanto nao chegar a 15
while ($contador < 15) {
        echo "#$contador" . PHP_EOL;
        $contador = $contador + 1;
}

// entretanto nao exibe o numero 15, logo
$contador = 1;

while ($contador <= 15) {
        echo "#$contador" . PHP_EOL;
        $contador = $contador + 1;
}