<?php

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar($conta, $valorADepositar)
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósito inválido");
    }

    return $conta;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . '<br>';
}

function exibeConta($conta)
{
    echo "<li>Titular: $conta[titular] Saldo: $conta[saldo]</li>";
}