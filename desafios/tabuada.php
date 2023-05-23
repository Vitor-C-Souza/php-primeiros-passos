<?php

$tabuada = 7;

for ($i = 0; $i <= 10; $i++) {
    $resultado = $tabuada * $i;
    echo "$tabuada * $i = $resultado" . PHP_EOL;
}

echo PHP_EOL;
$tabuada = 23;
$i = 0;

while ($i <= 10) {
    $resultado = $tabuada * $i;
    echo "$tabuada * $i = $resultado" . PHP_EOL;
    $i++;
}
