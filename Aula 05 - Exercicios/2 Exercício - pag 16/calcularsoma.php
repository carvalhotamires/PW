<?php
// Crie um array com os números
$numeros = array(5, 6, 8, 16, 32);

// Verifique se as posições 2 e 4 existem no array
if (isset($numeros[2]) && isset($numeros[4])) {
    // Calcule a soma das posições 2 e 4
    $soma = $numeros[2] + $numeros[4];
    // Escreva o resultado no navegador
    echo "A soma das posições 2 e 4 é: $soma";
} else {
    // Se as posições não existirem, escreva uma mensagem de erro
    echo "As posições 2 e 4 não existem no array.";
}
?>
