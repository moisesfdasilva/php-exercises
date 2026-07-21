<?php
//Fontes Recomendadas:
//  1. https://www.php.net/manual/pt_BR/
//  2. https://phptherightway.com/

echo "1. Calculadora básica\n";
$a = 60;
$b = 30;

$sum = $a + $b;
$sub = $a - $b;
$mul = $a * $b;
$div = $a / $b;
echo "Soma: {$a} + {$b} = {$sum}.\n";
echo "Subtração: {$a} - {$b} = {$sub}.\n";
echo "Multiplicação: {$a} * {$b} = {$mul}.\n";
echo "Divisão: {$a} / {$b} = {$div}.\n";


echo "2. Trocando valores\n";
$x = 80;
$y = 40;
echo "Valores: x = {$x} e y = {$y}.\n";

$c = $x;
$x = $y;
$y = $c;
echo "Valores atuais: x = {$x} e y = {$y}.\n";

echo "3. Mensagem personalizada\n";
$nome = "Moshe";
$curso = "Fundamentos de PHP";

echo "Olá, {$nome}! Seja bem vindo ao curso {$curso}!\n";


echo "4. Calculadora de idade\n";
$anoNascimento = 1989;
$anoAtual = 2026;

$age = $anoAtual - $anoNascimento;
echo "Idade da pessoa: {$age} anos.\n";


echo "5. Área de um retângulo\n";
$base = 5;
$altura = 10;

$area = $base * $altura;
echo "Retângulo {$base} x {$altura}, área {$area}\n";


echo "6. Desafio extra: Reajuste de salário\n";
$salario = 2500.55;
$percentual = 5;

$newSalary = number_format($salario * (1 + $percentual * 0.01), 2);
echo "O salário com reajuste de {$percentual}% de {$salario} é {$newSalary}\n";

echo "7. Tabuada de um número\n";
$numero = 7;

echo "Tabuada de {$numero}:\n";
for ($i = 1; $i <= 10; $i++) {
    $value = $numero * $i;
    echo "{$numero} x {$i} = {$value}\n";
}


echo "8. Contagem regressiva\n";
$inicio = 10;

while($inicio >= 0) {
    echo "{$inicio}\n";
    sleep(1);
    $inicio--;
}
echo "Lançamento!\n";

?>