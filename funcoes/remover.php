<?php

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

// remover variável
unset($contasCorrentes['369.313.328-05']);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}