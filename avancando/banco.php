<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '1230' => [
        'titular' => 'Vitor',
        'saldo' => 5000
    ],
    '1231' => [
        'titular' => 'Amanda',
        'saldo' => 15000
    ],
    '1232' => [
        'titular' => 'Marcelo',
        'saldo' => 2000
    ]
];

$contasCorrentes['1231']['saldo'] = sacar($contasCorrentes['1231']['saldo'], 3000);
$contasCorrentes['1230']['saldo'] = depositar($contasCorrentes['1230']['saldo'], 3000);

titularComLetrasMaiusculas($contasCorrentes['1230']);

unset($contasCorrentes['1232']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>


