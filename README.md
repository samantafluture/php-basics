# Estudo de PHP

Repositório de estudos sobre PHP básico. A seguir, um breve resumo.

## Sintaxe

- toda variável de ter o `$` na frente: `$idade = 32;`
- toda sentença deve termianr com `;`
- `echo` para imprimir algo na tela ou console

## Variáveis e tipos

- `gettype()` pega o tipo de uma variável
- php já entende o tipo de dado baseado em seu valor
- linguagem dinamicamente tipada
- não preciso falar se é int, double, etc

## Strings

- concatenação simples usa `.` entre a string e a variável para aspas simples ('')
- exemplo: `echo "minha idade é " . $idade;` 
- também posso colocar tudo entre "" (strings e $variavel) com concatenação especial
- `\n` quebra a linha e `\t` exibe tab e `\$` exibe o cifrão
- `PHP_EOL` -> fim da linha, quebra de linha

## Decisões

- sintaxe que representa "e": `and` e `&&`
- sintaxe que representa "ou": `or` e `||`

## Array associativo

- define elementos composto por chave e valor
- associação é feita com `=>`
- chave funciona como índice, que pode ser definido por nós
- valor pode ser tipo primitivo ou outro array
- as chaves podem ser do tipo string ou numérico

Como criar um array associativo:

```php
$contaCorrente = [
    'titular' => 'Samanta',
    'saldo' => '1000'
];
```

Como exibir um item do array associativo: 

```php
echo $conta1['titular'];
```

## For Each

- podemos acessar o índice e o valor do elemento da iteração

```php
foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}
```