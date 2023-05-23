<?php

$peso = 110;
$altura = 1.77;

if ($peso / ($altura ** 2) < 18.5)
    echo "Magreza" . PHP_EOL;
else if ($peso / ($altura ** 2) >= 18.5 and $peso / ($altura ** 2) <= 24.9)
    echo "Normal" . PHP_EOL;
else if ($peso / ($altura ** 2) >= 25 and $peso / ($altura ** 2) <= 29.9)
    echo "Sobrepeso" . PHP_EOL;
else if ($peso / ($altura ** 2) > 30 and $peso / ($altura ** 2) <= 39.9)
    echo "Obesidade" . PHP_EOL;
else if ($peso / ($altura ** 2) >= 40)
    echo "Obesidade grave" . PHP_EOL;


echo $peso / ($altura ** 2);
