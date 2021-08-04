<?php

$idade = 17;
$nome = "Samanta";

echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;

// ou -> ||
if ($idade == 18 || $idade > 18) {
    echo "Você tem $idade" . PHP_EOL;
    echo "Pode entrar";
}

// ou -> or
if ($idade == 18 or $idade > 18) {
    echo "Você tem $idade" . PHP_EOL;
    echo "Pode entrar";
}

// maior ou igual, mais limpo, 1 só condição
if ($idade >= 18) {
    echo "Você tem $idade" . PHP_EOL;
    echo "Pode entrar";
}

// e -> and
if ($idade >= 18 and $nome == "Samanta") {
    echo "Você tem $idade e chama $nome" . PHP_EOL;
    echo "Pode entrar";
}

// e -> &&
if ($idade >= 18 && $nome == "Samanta") {
    echo "Você tem $idade e chama $nome" . PHP_EOL;
    echo "Pode entrar";
}