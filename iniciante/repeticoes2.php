<?php

// para (essas instruções) {execute esse bloco}
/* 
para (essas instruções) {
    echo "#$contador" . PHP_EOL;
} 
*/

// $contador = $contador + 1 é a mesma coisa que: $contador += 1 que pode ser também: $contador++

/*
for ($contador = 1; $contrador <= 15; $contador += 1) {
    echo "#$contador" . PHP_EOL; 
}
*/

// pode tirar as chaves
/* for ($contador = 1; $contador <= 15; $contador ++) {
    echo "#$contador" . PHP_EOL;
}
*/

for ($contador = 1; $contador <= 15; $contador ++)
    echo "#$contador" . PHP_EOL;
