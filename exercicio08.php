<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08 - Números Pares</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Listar todos os números pares de 1 até:</h1>
    <form method="POST" action="exercicio08.php" class="m-3">
            <input type="text" id="num1" class="form-control" name="num1" required>
            <br>
            <button type="submit" class="">Descubra Aqui</button>
    </form>
</body>
</html>

<?php


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;

   function numPar($num1){
    $pares = [];
    for ($i = 2; $i <= $num1; $i += 2){
        $pares[] = $i;
    }
        return $pares;
    }

   $pares = numpAR($num1);
   $quant = count($pares);

   echo "Existem $quant números pares entre 1 e $num1.";
}

?>