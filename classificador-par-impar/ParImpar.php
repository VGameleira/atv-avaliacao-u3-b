<!-- C) Criar um algoritmo que receba três números e que informe ao final os números digitados e quantos deles são ímpares e pares.
 
Exemplo: Usuário digitou 5,7,8
 
Saída:
 
Números digitados: 5,7 e 8
Números pares: 1
Números ímpares: 2 -->

<?php
$num1_raw = $_POST['num1'];
$num2_raw = $_POST['num2'];
$num3_raw = $_POST['num3'];

if (!is_numeric($num1_raw) || !is_numeric($num2_raw) || !is_numeric($num3_raw)) {
    echo "Por favor, insira apenas números válidos.";
    exit;
}

$num1 = (int)$num1_raw;
$num2 = (int)$num2_raw;
$num3 = (int)$num3_raw;

$num1_safe = htmlspecialchars($num1_raw, ENT_QUOTES, 'UTF-8');
$num2_safe = htmlspecialchars($num2_raw, ENT_QUOTES, 'UTF-8');
$num3_safe = htmlspecialchars($num3_raw, ENT_QUOTES, 'UTF-8');

$pares = 0;
$impares = 0;

if ($num1 % 2 == 0) {
    $pares++;
} else {
    $impares++;
}

if ($num2 % 2 == 0) {
    $pares++;
} else {
    $impares++;
}

if ($num3 % 2 == 0) {
    $pares++;
} else {
    $impares++;
}


if ($num1 == $num2) {
    if ($num1 == $num3) {
        echo "Números digitados: $num1_safe, $num2_safe e $num3_safe <br>";
        echo "Os três números são iguais.<br>";
    } else {
        echo "Números digitados: $num1_safe, $num2_safe e $num3_safe <br>";
        echo "Os números 1 e 2 são iguais.<br>";
    }
} elseif ($num1 == $num3) {
    echo "Números digitados: $num1_safe, $num2_safe e $num3_safe <br>";
    echo "Os números 1 e 3 são iguais.";
} elseif ($num2 == $num3) {
    echo "Números digitados: $num1_safe, $num2_safe e $num3_safe <br>";
    echo "Os números 2 e 3 são iguais.<br>";
} else {
    echo "Números digitados: $num1_safe, $num2_safe e $num3_safe <br>";
}

echo "Números pares: $pares <br>";
echo "Números ímpares: $impares <br>";
