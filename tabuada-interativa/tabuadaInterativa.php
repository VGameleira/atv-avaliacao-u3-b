<!-- B) Criar um algoritmo que receba um número qualquer e faça uma das operações que o usuário escolher com este número (Adição, Subtração ou multiplicação ou divisão). Esta operação deve ser realizada com os números de 1 a 10 e o resultado mostrado na tela.
 
Exemplo: Usuário escolheu o 6 e Adição.
 
Saída:
6 + 1 = 7    | 
6 + 2 = 8    |
6 + 3 = 9    |
6 + 4 = 10   |
6 + 5 = 11   |
6 + 6 = 12   |
6 + 7 = 13   |
6 + 8 = 14   |
6 + 9 = 15   |
6 + 10 = 16  |
-->

<?php

$operacao_raw = $_POST['operacao'];
$num1_raw = $_POST['num1'];

$operacao = htmlspecialchars($operacao_raw, ENT_QUOTES, 'UTF-8');

if (!is_numeric($num1_raw)) {
    echo "Por favor, insira um número válido.";
    exit;
}

$num1 = (float)$num1_raw;
$num1_safe = htmlspecialchars($num1_raw, ENT_QUOTES, 'UTF-8');

if ($operacao == 'adicao') {
    for ($i = 1; $i <= 10; $i++) {
        $valorFinalAdicao = $num1 + $i;
        echo "$num1_safe + $i = $valorFinalAdicao <br>";
    }
} elseif ($operacao == 'subtracao') {
    for ($i = 1; $i <= 10; $i++) {
        $valorFinalSubtracao = $num1 - $i;
        echo "$num1_safe - $i = $valorFinalSubtracao <br>";
    }
} elseif ($operacao == 'multiplicacao') {
    for ($i = 1; $i <= 10; $i++) {
        $valorFinalMultiplicacao = $num1 * $i;
        echo "$num1_safe x $i = $valorFinalMultiplicacao <br>";
    }
} elseif ($operacao == 'divisao') {
    for ($i = 1; $i <= 10; $i++) {
        $valorFinalDivisao = $num1 / $i;
        echo "$num1_safe / $i = $valorFinalDivisao <br>";
    }
} elseif ($operacao == 'todos') {
    for ($i = 1; $i <= 10; $i++) {
        $valorFinalAdicao = $num1 + $i;
        $valorFinalSubtracao = $num1 - $i;
        $valorFinalMultiplicacao = $num1 * $i;
        $valorFinalDivisao = $num1 / $i;
        echo "$num1_safe + $i = $valorFinalAdicao | ";
        echo "$num1_safe - $i = $valorFinalSubtracao | ";
        echo "$num1_safe x $i = $valorFinalMultiplicacao | ";
        echo "$num1_safe / $i = $valorFinalDivisao <br>";
    }
} else {
    echo "Operação inválida.";
}
