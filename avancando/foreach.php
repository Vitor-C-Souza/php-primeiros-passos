<?php

$conta1 = [
    'titular' => 'Vitor',
    'saldo' => 5000
];

$conta2 = [
    'titular' => 'Amanda',
    'saldo' => 15000
];

$conta3 = [
    'titular' => 'Marcelo',
    'saldo' => 1500
];

$contasCorrentes = [
    '1230' => $conta1, 
    '1231' => $conta2, 
    '1232' => $conta3
];

$contasCorrentes['1233'] = [
    'titular' => 'Karla',
    'saldo' => 30000
];


foreach ($contasCorrentes as $cpf => $contas) {
    echo $contas['titular'] . PHP_EOL;
}
