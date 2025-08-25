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
        <input type="text" id="dia" class="form-control" name="dia" placeholder="Dia" required>
        <input type="text" id="mes" class="form-control" name="mes" placeholder="Mês" required>
        <input type="text" id="ano" class="form-control" name="ano" placeholder="Ano" required>

        <br>
        <button type="submit" class="">Verifique Aqui</button>
    </form>
</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];

    if (checkdate($mes, $dia, $ano)) {
        echo "Data Válida.";
    } else {
        echo "Data Inválida.";
    }
}

?>