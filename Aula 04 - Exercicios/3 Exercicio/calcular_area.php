<!DOCTYPE html>

    <head>
        <title>Resultado do Calculo</title>
    </head>
        <body>
            <h1>Resultado do Calculo</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base_maior = floatval($_POST["base_maior"]);
        $base_menor = floatval($_POST["base_menor"]);
        $altura = floatval($_POST["altura"]);

        $area_trapezio = (($base_maior + $base_menor) * $altura) / 2;

        echo "<p>Base Maior: $base_maior</p>";
        echo "<p>Base Menor: $base_menor</p>";
        echo "<p>Altura: $altura</p>";
        echo "<p>Area do Trapezio: " . number_format($area_trapezio, 2) . "</p>";
    } else {
        echo "<p>Erro: Este script deve ser acessado via método POST.</p>";
    }
    ?>

            <p><a href="arquivo.html">Voltar</a></p>
        </body>
</html>