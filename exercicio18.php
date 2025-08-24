<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 18 - Maior Valor</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Verificar valores maiores entre 3 números</h1>
    <form method="POST" action="exercicio18.php" class="m-3">
            <input type="text" id="num1" class="form-control" name="num1" required>
            <input type="text" id="num2" class="form-control" name="num2" required>
            <input type="text" id="num3" class="form-control" name="num3" required>



            <br>
            <button type="submit" class="">Verifique Aqui</button>
    </form>
</body>
</html>

<?php

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;
    $num3 = isset($_POST['num3']) ? (int)$_POST['num3'] : 0;


    function maiorValor($valor1, $valor2, $valor3){
        if ($valor1 >= $valor2 && $valor1 >= $valor3) {
            echo "O maior valor é $valor1";
        }
    } elseif ($valo2 >= $valor1 && $valor2 >= $valor3){
     echo "O maior valor é $valor2";
    } else{
    echo "O maior valor é $valor3";

    }


?>