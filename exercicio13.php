<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13 - Conversão de Temperaturas</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Temperatura de GRAUS CELSIUS para FAHRENHEIT</h1>
    <form method="POST" action="exercicio13.php" class="m-3">
            <input type="text" id="temp" class="form-control" name="temp" required>

            <br>
            <button type="submit" class="">Converter  Aqui</button>
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $str = isset($_POST['temp']) ? $_POST['temp'] : '';

    function celsiusFahrenheit($c) {
        return ($c * 9/5) + 32;
    }

    echo " Conversor: $num1 °C => " . celsiusToFahrenheit($num1) . " °F.</p>";
}

?>