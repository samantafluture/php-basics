<?php

$idade = 16;
$acompanhado = true;

echo "Você só pode entrar se tiver a partir de 18 anos ";
echo "ou a partir de 16 acompanhado:" . PHP_EOL;

// sintaxe com { }, mais legível
if ($idade >= 18) {
    echo "- Você tem $idade. Pode entrar sozinho!";
} else if ($idade >= 16 && $acompanhado == true) {
    echo "- Você tem $idade e está acompanhado. Pode entrar!";
} else {
    echo "- Você só tem $idade e está sozinho. Não pode entrar!";
}

// sintaxe sem { } como cada if/else só tem uma condição
if ($idade >= 18) 
    echo "- Você tem $idade. Pode entrar sozinho!";
else if ($idade >= 16 && $acompanhado == true) 
    echo "- Você tem $idade e está acompanhado. Pode entrar!";
else 
    echo "- Você só tem $idade e está sozinho. Não pode entrar!";

echo PHP_EOL;
echo "Obrigado, adeus!";
