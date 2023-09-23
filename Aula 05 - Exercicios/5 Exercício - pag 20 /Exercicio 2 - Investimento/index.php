<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Investimento</title>
</head>
<body>
    <h1>Calculadora de Investimento</h1>
    <form action="calcular_investimento.php" method="POST">
        Tipo de Investimento:<br>
        <input type="radio" name="tipoInvestimento" value="1"> Poupança (3%)<br>
        <input type="radio" name="tipoInvestimento" value="2"> Fundos de Renda Fixa (4%)<br><br>
        Valor do Investimento: <input type="text" name="valorInvestimento"><br>
        <input type="submit" value="Calcular Valor Corrigido">
    </form>
</body>
</html>
