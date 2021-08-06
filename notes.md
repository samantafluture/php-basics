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

## Arrays

- no php os arrays são armazenados como HashTables (tabelas de espalgamento)
- tem tamanho dinâmico, podem ter strings como índices e manipulados de diversas formas
- dica: não usar array quando poderia estar usando objeto!

## Array associativo

- define elementos composto por chave e valor
- associação é feita com `=>`
- chave funciona como índice, que pode ser definido por nós
- valor pode ser tipo primitivo ou outro array
- as chaves podem ser do tipo string ou numérico
- qualquer outro tipo, o php tenta converter
- também pode ser chamado de: mapa, dicionário

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
- podemos acessar o índice e o valor do elemento da iteração

```php
foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}
```

- como adicionar um novo item a um array?
- vai pro fim da lista: `$lista[] = $item;`
- define a chave e vai pro fim da lista: `$lista[$chave] = $item;`

## Subrotinas

- subrotina -> isolando uma funcionaliade em uma função para ser utilizada em outros lugares do código
- pedaço de execução isolado que vai ser executado em outros lugares no código
- pode não precisar de parâmetros
- executa tudo o que precisa dentro dela e não devolve valor nenhum

Exemplo:
- função de exibir mensagem recebe como parâmetro uma mensagem a ser exibida

```php
function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}
```

Sintaxe:

```php
function nomeDaRotina ($parametro)
{
    // código a ser executado na subrotina
}
```

## Funções

- recebe um valor e devolve um valor modificado
- pode receber e devolver um valor
- ela executa e devolve um valor

Exemplo:

```php
function adiciona2($x)
{
    return $x + 2;
}
```

Chamando essa função:

```php
$sete = adiciona2(x: 5);
// o resultado vai ser 7
```

Sintaxe da função:

```php
function soma($x, $y)
{
    return $x + $y;
}

$resultado = soma(2,2); // resultado = 4
```

### Tipar funções 

- disponível a partir do PHP 7.0
- se quiser determinar qual tipo de variável quer receber, basta tipar antes
- por exemplo, quero receber apenas tipo float (ou inteiro convertido)
- ou seja, posso sempre informar o tipo do dado que quero receber
- exemplo: `function depositar(array$conta, float $valorADepositar)`

## Strings

### Interpolação com arrays associativos

- colocar tudo entre "" (aspas duplas)
- e retirar as aspas da chave a ser acessa dentro do array: `['saldo']` via `[saldo]`
- exemplo `"$cpf $conta[titular] $conta[saldo]"`

### Forma complexa (melhor forma)

- quando tem muitos dados complexos, interpolar com estes dados entre chaves
- aí pode manter as chaves dentro dos arrays
- exemplo: `"$cpf {$conta['titular']} {$conta['saldo']}"`

## Trabalhar com arquivos separados

**include**

- `include './funcoes.php';`
- se ele não encontra o arquivo, ele só dá um warning, não gera erro
- ele é feito para quando precisamos de um arquivo, mas que se ele não existe, não tem problema pois não é essencial

**require**

- `require './funcoes.php';`
- para arquivos que são essenciais, obrigatórios para o funcionamento do programa

**require_once**

- verifica que o arquivo já foi incluído antes
- se já, ele não inclui novamente, logo não dá erro se tiver duplicado