# PHP

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

## Loops

- `continue;`: vai pra próxima iteração do loop
- `break;`: quebra, sai do loop

## Array associativo

- forma de tabela, de mapa, onde o índice é mapeado para um valor
- podemos definir estes índices
- posso associar noma de uma chave a um valor
- tem strings como chaves (já os arrays comuns são numéricos e tem inteiros como chaves)

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

- "para cada"
- chamo a lista e dou o nome da variável que quero chamar cada uma delas da lista
- pode acessar ela dentro, chamando a variável criada
- e também acessar via índice seus elementos
- para cada uma das contas correntes como conta (exemplo abaixo)
- com o `foreach` eu não preciso saber os índices para acessar a lista

```php
foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}
```



