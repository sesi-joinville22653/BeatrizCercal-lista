<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 - Cálculo de Tabuada</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Calcular Tabuada</h1>
    <form method="POST" action="exercicio02.php" class="m-3">
            <input type="text" id="num1" class="form-control" name="num1" required>
            <br>
            <button type="submit" class="">Ver Tabuada</button>
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;

  for($i=0; $i <= 10; $i++) {
    $resultado = $num1 * $i;
    echo "<p> $num1 x $i = $resultado</p>";
  }
}

?>