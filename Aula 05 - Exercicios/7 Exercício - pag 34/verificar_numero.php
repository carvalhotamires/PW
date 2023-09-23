<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Verificação</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        
        if ($numero >= 0) {
            echo "O número digitado é maior ou igual a zero.";
        } else {
            echo "O número digitado é menor que zero.";
        }
    }
    ?>
</body>
</html>
