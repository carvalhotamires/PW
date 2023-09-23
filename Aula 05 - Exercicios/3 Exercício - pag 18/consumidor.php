<?php
// Custo de fábrica do carro
$custoFabrica = 12000; 

// Inicializa as porcentagens padrão para distribuidor e impostos
$porcentagemDistribuidor = 0;
$porcentagemImpostos = 0;

// Verifica em qual faixa de custo de fábrica o carro se encaixa e aplica as porcentagens correspondentes
if ($custoFabrica <= 12000) {
    $porcentagemDistribuidor = 5;
    $porcentagemImpostos = 0;
} elseif ($custoFabrica > 12000 && $custoFabrica <= 25000) {
    $porcentagemDistribuidor = 10;
    $porcentagemImpostos = 15;
} else {
    $porcentagemDistribuidor = 15;
    $porcentagemImpostos = 20;
}

// Calcula o valor do distribuidor (porcentagem do distribuidor do custo de fábrica)
$valorDistribuidor = ($porcentagemDistribuidor / 100) * $custoFabrica;

// Calcula o valor dos impostos (porcentagem dos impostos do custo de fábrica)
$valorImpostos = ($porcentagemImpostos / 100) * $custoFabrica;

// Calcula o preço final ao consumidor (custo de fábrica + distribuidor + impostos)
$precoFinal = $custoFabrica + $valorDistribuidor + $valorImpostos;

// Exibe o preço final ao consumidor formatado como um valor monetário
echo "O preço final ao consumidor é: R$ " . number_format($precoFinal, 2, ',', '.');
?>
