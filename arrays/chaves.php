<?php

$array = [
    1 => 'a',
    1.5 => 'b', // php converte para inteiro, logo 1
    true => 'c', // true = 1 em php
    '1' => 'd' // php converte para 1
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}