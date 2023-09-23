<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Cálculo</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $custoFabrica = $_POST["custoFabrica"];
        
        $porcentagemDistribuidor = 0;
        $porcentagemImpostos = 0;
        
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
        
        $valorDistribuidor = ($porcentagemDistribuidor / 100) * $custoFabrica;
        $valorImpostos = ($porcentagemImpostos / 100) * $custoFabrica;
        $precoFinal = $custoFabrica + $valorDistribuidor + $valorImpostos;
        
        echo "O preço final ao consumidor é: R$ " . number_format($precoFinal, 2, ',', '.');
    }
    ?>
</body>
</html>
