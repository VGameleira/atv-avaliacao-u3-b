<!-- A) 
 Criar um algoritmo que calcule o salário líquido de um trabalhador com base nas seguintes informações:

Valor da hora trabalhada
Número de horas trabalhadas no mês
Percentual de desconto de impostos (aplicado apenas se o salário bruto for maior que R$ 2.000,00)

 Regras do Imposto:
Se o salário bruto for maior que R$ 2.000,00, aplica-se 5% de imposto.
Se o salário bruto for menor ou igual a R$ 2.000,00, o trabalhador é isento de impostos.

exemplo:
Salário Bruto: R$ 2.250,00
Imposto aplicado: R$ 112,50
Salário Líquido: R$ 2.137,50


-->

<?php

$valorHora_raw = $_POST['valorHora'];
$qtdHora_raw = $_POST['qtdHora'];

if (!is_numeric($valorHora_raw) || !is_numeric($qtdHora_raw)) {
    echo "Por favor, insira apenas números válidos.";
    exit;
}

$valorHora = (float)$valorHora_raw;
$qtdHora = (float)$qtdHora_raw;

$valorHora_safe = htmlspecialchars($valorHora_raw, ENT_QUOTES, 'UTF-8');
$qtdHora_safe = htmlspecialchars($qtdHora_raw, ENT_QUOTES, 'UTF-8');

$imposto = 0;
$salarioLiquido = 0;

$salarioBruto = $valorHora * $qtdHora;

if ($salarioBruto > 2000) {
    $imposto = $salarioBruto * 0.05;
    $salarioLiquido = $salarioBruto - $imposto;
    echo "Salário Bruto: R$ " . $salarioBruto . "<br>";
    echo "Imposto aplicado: R$ " . $imposto . "<br>";
    echo "Salário Líquido: R$ " . $salarioLiquido . "<br>";
} else {
    $salarioLiquido = $salarioBruto;
    echo "Salário Bruto: R$ " . $salarioBruto . "<br>";
    echo "Salário Líquido: R$ " . $salarioLiquido . "<br>";
}
