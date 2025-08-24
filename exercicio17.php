<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17 - Dia/Mês/Ano</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Verificar datas válidas</h1>
    <form method="POST" action="exercicio17.php" class="m-3">
        <input type="text" id="num1" class="form-control" name="num1" placeholder="Dia" required>
        <input type="text" id="num2" class="form-control" name="num2 " placeholder="Mês" required>
        <input type="text" id="num3" class="form-control" name="num3" placeholder="Ano" required>

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


    function validarData($num1, $num2, $num3)
    {
        return checkdate($num1, $num2, $num3);
    }

    echo validarData($num1, $num2, $num3) ? "Data Válida" : "Data Inválida";
}


?>