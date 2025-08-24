<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16 - Permitido Votar</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Verificar se, através de sua idade, é possível votar:</h1>
    <form method="POST" action="exercicio16.php" class="m-3">
            <input type="text" id="pal1" class="form-control" name="pal1" placeholder="Nome" required>
            <input type="text" id="num1" class="form-control" name="num1" placeholder="Idade" required>


            <br>
            <button type="submit" class="">Clique  Aqui</button>
    </form>
</body>
</html>

<?php

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $pal1 = isset($_POST['pal1']) ? (int)$_POST['pal1'] : 0;
    $num2 = isset($_POST['num2']) ? (int)$_POST['num2'] : 0;

    function podeVotar($votar){
        if ($votar >= 16) {
            echo "É permitido votar";
        } else{
            echo "Não é permitido votar";
        }
    }

    echo podeVotar($num2);

  }


?>