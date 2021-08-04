<?php

$conta1 = [
    'titular' => 'Samanta',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Roberto',
    'saldo' => 300
];

$contasCorrentes = [
    $conta1,
    $conta2,
    $conta3
];

// foreach
foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

// caso eu altera o índice e queira chamar um específico

$contasCorrentesAlterada = [
    32003920 => $conta1,
    12912128 => $conta2,
    12712871 => $conta3
];

foreach ($contasCorrentesAlterada as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}