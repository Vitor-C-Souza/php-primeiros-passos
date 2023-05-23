<?php

$idade = 14;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver 18 anos ou mais." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar sozinho." . PHP_EOL;
} else if ($idade >= 16 and $numeroDePessoas >= 2)
    echo "Você tem $idade anos, e esta acompanhado." . PHP_EOL;
else
    echo "Você tem $idade anos, não pode entrar." . PHP_EOL;


echo "Adeus!";
