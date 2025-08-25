<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04 - Fatorial</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Verificar o Fatorial de um Número</h1>
    <form method="POST" action="exercicio04.php" class="m-3">
            <input type="text" id="num1" class="form-control" name="num1" required>
            <br>
            <button type="submit" class="">Verifique Aqui</button>
    </form>
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;

    function fatorial($n) { //Função Fatorial
        if ($n < 0) return "Inválido";
        $resultado = 1;
        for ($i = 2; $i <= $n; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }

    $fatorial = fatorial($num1);

    echo "<p>O fatorial de " . $num1 . " é " . $fatorial . "</p>";
}

?>
