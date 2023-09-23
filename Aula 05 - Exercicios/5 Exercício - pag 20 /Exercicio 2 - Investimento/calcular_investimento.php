<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Investimento</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipoInvestimento = $_POST["tipoInvestimento"];
        $valorInvestimento = $_POST["valorInvestimento"];
        
        $taxaPoupanca = 0.03;
        $taxaRendaFixa = 0.04;
        
        $valorCorrigido = 0;
        
        switch ($tipoInvestimento) {
            case 1:
                $valorCorrigido = $valorInvestimento * (1 + $taxaPoupanca);
                break;
            case 2:
                $valorCorrigido = $valorInvestimento * (1 + $taxaRendaFixa);
                break;
            default:
                echo "Tipo de investimento inválido.";
        }
        
        echo "O valor corrigido é: R$ " . number_format($valorCorrigido, 2, ',', '.');
    }
    ?>
</body>
</html>
