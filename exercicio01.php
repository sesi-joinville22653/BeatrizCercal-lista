<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 - Verificar se o número é par ou ímpar</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Verificar se o número é par ou ímpar</h1>
    <form method="POST" action="exercicio01.php" class="m-3">
            <input type="text" id="num1" class="form-control" name="num1" required>
            <br>
            <button type="submit" class="">Verifique aqui</button>
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;

    if ($num1 % 2 == 0) {
        echo "<p style='position: relative; left:10px'>O número $num1 é par.</p>";
    } else {
        echo "<p style='position: relative; left:10px'>O número $num1 é ímpar.</p>";
    }
}

?>