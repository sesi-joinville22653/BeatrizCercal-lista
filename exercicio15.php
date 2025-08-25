<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 15 - IMC</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Insira Peso e Altura para visualizar sua classificação:</h1>
    <form method="POST" action="exercicio15.php" class="m-3">
            <input type="text" id="kg" class="form-control" name="kg" placeholder="Peso:" required>
            <input type="text" id="alt" class="form-control" name="alt" placeholder="Altura:" required>


            <br>
            <button type="submit" class="">Visualizar  Aqui</button>
    </form>
</body>
</html>

<?php

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $kg = isset($_POST['kg']) ? (int)$_POST['kg'] : 0;
    $alt = isset($_POST['kg']) ? (float)$_POST['alt'] : 0;

    $imc = $kg / ($alt * $alt); //Definição de cálculo para IMC

    if($imc < 18.5) {
        $cat = "Abaixo do peso"; //Categoria
    } elseif ($imc < 24.9) {
        $cat = "Peso normal"; //Categoria
    } elseif ($imc < 29.9) {
        $cat = "Sobrepeso"; //Categoria
    } elseif ($imc < 34.9) {
        $cat = "Obesidade grau 1"; //Categoria
    } elseif ($imc < 39.9) {
        $cat = "Obesidade grau 2"; //Categoria
    } else {
        $cat = "Obesidade grau 3"; //Categoria
    }

    echo "<p style='position: relative; left:10px'>Seu IMC é " . number_format($imc, 2) . " e sua categoria é: $cat.</p>"; //number_format: Restrição para duas casas decimais
}


?>