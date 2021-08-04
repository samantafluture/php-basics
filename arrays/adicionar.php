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

// adicionar novo item na lista
// define a chave
// vai pro final da lista
$contasCorrentes['187.099.284-09'] = [
    'titular' => 'Roger',
    'saldo' => 2000
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf  . " " . $conta['titular'] . PHP_EOL;
}