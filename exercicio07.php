<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07 - Número Perfeito</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Verificar se um número é perfeito</h1>
    <form method="POST" action="exercicio07.php" class="m-3">
            <input type="text" id="num1" class="form-control" name="num1" required>
            <br>
            <button type="submit" class="">Verificar</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST["num1"]);
    $soma = 0;

    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $soma += $i;
        }
    }

    if ($soma == $num) { //Condicional SE
        echo "$num é um número perfeito!";
    } else {
        echo "$num não é um número perfeito.";
    }
}
?>
