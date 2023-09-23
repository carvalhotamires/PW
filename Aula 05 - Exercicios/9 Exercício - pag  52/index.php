<?php
// Crie um array com os números
$numeros = array(2, 4, 5, 1, 9, 16);

// Inicialize uma variável para armazenar a soma
$soma = 0;

// Use o loop foreach para percorrer o array e somar os números
foreach ($numeros as $numero) {
    $soma += $numero;
}

// Exiba o resultado da soma
echo "A soma dos números é: " . $soma;
?>
