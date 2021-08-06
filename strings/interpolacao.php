<?php

// função sacar
function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

// função deposita
function depositar($conta, $valorADepositar)
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósito inválido");
    }

    return $conta;
}

// subrotina de exibir mensagem
function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

// declaração dos array
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

// executando funções
$contasCorrentes['127.387.212-84'] = sacar($contasCorrentes['127.387.212-84'], 500);
$contasCorrentes['369.313.328-05'] = depositar($contasCorrentes['369.313.328-05'], 100);

// interpolação de strings
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}
