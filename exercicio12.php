<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12 - Quantidade de Vogais</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Descubra a quantidade de vogais envolvidas:</h1>
    <form method="POST" action="exercicio12.php" class="m-3">
            <input type="text" id="pal1" class="form-control" name="pal1" required>

            <br>
            <button type="submit" class="">Verifique  Aqui</button>
    </form>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $pal1 = isset($_POST['pal1']) ? $_POST['pal1'] : '';

    function contarVogais($pal1) {
        $vogais = preg_match_all('/[aeiouAEIOU]/', $pal1, $matches);
        return $vogais;
    }

    echo "<p style='position: relative; left:10px'>A str <strong>'$pal1'</strong> contém " . contarVogais($pal1) . " vogais.</p>";

}



?>