<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14 - Ano Bissexto</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Verificar se um ano é bissexto:</h1>
    <form method="POST" action="exercicio11.php" class="m-3">
            <input type="text" id="num1" class="form-control" name="num1" required>

            <br>
            <button type="submit" class="">Verifique  Aqui</button>
    </form>
</body>
</html>

<?php

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;
    function anoBissexto($ano){
        if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
            echo "$num1 é um ano bissexto";
        } else{
            echo "$num1 não é um ano bissexto";
        }
    }

  }


?>