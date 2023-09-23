<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <style>
        body {
            background-image: linear-gradient(45deg,black,rgb(235,46,235));
            font-family: Arial, sans-serif;
        }
        .calculator {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: darkorchid;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        .calculator input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 50px;
            text-align: right;
            font-size: 18px;
        }
        .calculator input[type="button"] {
            width: 48px;
            height: 48px;
            margin: 2px;
            font-size: 18px;
            border: none;
            border-radius: 50%;
            background-color: blueviolet;
            color: white;
            cursor: pointer;
        }
        .calculator input[type="button"]:hover {
            background-color: #1c4966;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <input type="text" id="display" readonly>
        <br>
        <input type="button" value="7" onclick="appendToDisplay('7')">
        <input type="button" value="8" onclick="appendToDisplay('8')">
        <input type="button" value="9" onclick="appendToDisplay('9')">
        <input type="button" value="/" onclick="appendToDisplay('/')">
        <br>
        <input type="button" value="4" onclick="appendToDisplay('4')">
        <input type="button" value="5" onclick="appendToDisplay('5')">
        <input type="button" value="6" onclick="appendToDisplay('6')">
        <input type="button" value="*" onclick="appendToDisplay('*')">
        <br>
        <input type="button" value="1" onclick="appendToDisplay('1')">
        <input type="button" value="2" onclick="appendToDisplay('2')">
        <input type="button" value="3" onclick="appendToDisplay('3')">
        <input type="button" value="-" onclick="appendToDisplay('-')">
        <br>
        <input type="button" value="C" onclick="clearDisplay()">
        <input type="button" value="0" onclick="appendToDisplay('0')">
        <input type="button" value="=" onclick="calculate()">
        <input type="button" value="+" onclick="appendToDisplay('+')">
    </div>

    <script>
        function appendToDisplay(value) {
            document.getElementById('display').value += value;
        }

        function clearDisplay() {
            document.getElementById('display').value = '';
        }

        function calculate() {
            try {
                const result = eval(document.getElementById('display').value);
                document.getElementById('display').value = result;
            } catch (error) {
                document.getElementById('display').value = 'Erro';
            }
        }
    </script>
</body>
</html>
