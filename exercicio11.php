<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11 - Palavra Palíndromo</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Descubra se uma palavra é Palíndromo:</h1>
    <form method="POST" action="exercicio11.php" class="m-3">
            <input type="text" id="pal1" class="form-control" name="pal1" required>

            <br>
            <button type="submit" class="">Verifique  Aqui</button>
    </form>
</body>
</html>

<?php

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n1 = $_POST["pal1"];
    $palavra = strtolower(str_replace(' ', '', $n1));
    $r = (strrev($palavra) == $palavra) ? "Palíndromo" : "Não Palíndromo";
}


?>