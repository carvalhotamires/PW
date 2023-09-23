<?php
// Crie um array com os números
$numeros = array(2, 4, 5, 1, 9, 16);

// Inicialize uma variável para armazenar a soma
$soma = 0;

// Use um loop for para percorrer o array e somar os números
for ($i = 0; $i < count($numeros); $i++) {
    $soma += $numeros[$i];
}

// Exiba o resultado da soma
echo "A soma dos números é: " . $soma;
?>
