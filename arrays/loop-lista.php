<?php

// array
$idadeList = [21, 33, 44, 12];

// passando o tamanho da lista na mão
for ($i = 0; $i < 5; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

// count($idadeList); -> verifica quantos itens tem na lista
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

