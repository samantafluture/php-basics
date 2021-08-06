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

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas</title>
</head>

<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3>Titular: <?= $conta['titular']; ?></h3>
            </dt>
            <dd>CPF: <?= $cpf; ?></dd>
            <dd>Conta: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>

</html>