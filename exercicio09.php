<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 09 - Soma de todos os números</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Realizar a soma de:</h1>
    <form method="POST" action="exercicio09.php" class="m-3">
            <input type="text" id="num1" class="form-control" name="num1" required>
            <input type="text" id="num2" class="form-control" name="num2" required>

            <br>
            <button type="submit" class="">Calcular  Aqui</button>
    </form>
</body>
</html>

<?php


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;


   function somaNum($num1, $num2){ //Definição da função
    $inicio = min($num1, $num2); //Mínino
        $fim = max($num1, $num2); //Máximo
        $soma = 0;
         for ($i = $inicio; $i <= $fim; $i++) {
            $soma += $i;
        }
        return $soma;
    }
    $soma = somaNum($num1, $num2);

    echo "A soma é <strong>$soma</strong>.";
}

?>