<?php
// Variáveis
$tipoInvestimento = 1; // Tipo de investimento (1 ou 2)
$valorInvestimento = 1000; // Valor do investimento (substitua pelo valor real)

// Defina as taxas de rendimento mensal para cada tipo de investimento
$taxaPoupanca = 0.03; // 3%
$taxaRendaFixa = 0.04; // 4%

// Inicializa a variável que conterá o valor corrigido
$valorCorrigido = 0;

// Use a estrutura switch para determinar o valor corrigido com base no tipo de investimento
switch ($tipoInvestimento) {
    case 1: // Poupança
        $valorCorrigido = $valorInvestimento * (1 + $taxaPoupanca);
        break;
    case 2: // Fundos de Renda Fixa
        $valorCorrigido = $valorInvestimento * (1 + $taxaRendaFixa);
        break;
    default:
        echo "Tipo de investimento inválido.";
}

// Exibe o valor corrigido
echo "O valor corrigido é: R$ " . number_format($valorCorrigido, 2, ',', '.');
?>
