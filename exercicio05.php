<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05 - Números Amigos</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Verificar se dois números são amigos</h1>
    <form method="POST" action="exercicio05.php" class="m-3">
            <input type="text" id="num1" class="form-control" name="num1" required>
             <input type="text" id="num2" class="form-control" name="num2" required>
            <br>
            <button type="submit" class="">Verifique Aqui</button>
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;

    function somaDivisao($n) {
        $soma = 0;
        for ($i = 1; $i < $n; $i++) {
            if ($n % $i == 0) {
                $soma += $i;
            }
        }
        return $soma;
    }

    if (somaDivisao($num1) == $num2 && somaDivisao($num2) == $num1) {
        echo "<p style='position: relative; left:10px'>Os números $num1 e $num2 são amigos.</p>";
    } else {
        echo "<p style='position: relative; left:10px'>Os números $num1 e $num2 NÃO são amigos.</p>";
    }
}


?>