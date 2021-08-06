<?php

require './funcoes.php';

$contasCorrentes = [
    '369.313.328-05' => [
        'titular' => 'Samanta',
        'saldo' => 1000
    ],
    '127.387.212-84' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '291.293.837-73' => [
        'titular' => 'Roberto',
        'saldo' => 300
    ]
];

$contasCorrentes['127.387.212-84'] = sacar($contasCorrentes['127.387.212-84'], 500);
$contasCorrentes['369.313.328-05'] = depositar($contasCorrentes['369.313.328-05'], 100);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}
