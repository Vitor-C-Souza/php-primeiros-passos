<?php

function depositar(float $contaSaldo, float $valorAhDepositar)
{
    if ($valorAhDepositar < 0) {
        exibeMensagem('Não pode depositar esse valor');
    } else {
        $contaSaldo += $valorAhDepositar;
    }

    return $contaSaldo;
}

function sacar(float $contaSaldo, float $valorAhSacar)
{
    if ($valorAhSacar > $contaSaldo) {
        exibeMensagem('Não foi possivel sacar');
    } else {
        $contaSaldo -= $valorAhSacar;
    }

    return $contaSaldo;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper(($conta['titular']));
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo </li>";
}
