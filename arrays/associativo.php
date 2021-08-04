<?php

// array associativos
$conta1 = [
    'titular' => 'Samanta',
    'saldo' => '1000'
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => '10000'
];

$conta3 = [
    'titular' => 'Roberto',
    'saldo' => '300'
];

// array de arrays
$contasCorrentes = [$conta1, $conta2, $conta3];

// exibie um item do array associativo usando seu índice
// echo $conta1['titular']; 

// loop para exibir os titulares
for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}