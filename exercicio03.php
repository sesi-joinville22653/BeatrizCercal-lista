<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03 - Números Positivos, Negativos ou Zero</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Verificar se o número é Positivo, Negativo ou Zero</h1>
    <form method="POST" action="exercicio03.php" class="m-3">
            <input type="text" id="num1" class="form-control" name="num1" required>
            <br>
            <button type="submit" class="">Verificar</button>
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;

    if ($num1 > 0) {
        echo "<p style='position: relative; left:10px'>O número $num1 é positivo.</p>";
    } else if ($num1 < 0) {
        echo "<p style='position: relative; left:10px'>O número $num1 é negativo.</p>";
    }else {
                echo "<p style='position: relative; left:10px'>O número $num1 é igual a ZERO.</p>";

    }
}

?>