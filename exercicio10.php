<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10 - Sequência de Fibonacci </title>
</head>

<body>
    <h1 style="position: relative; left:10px">Exibir a sequência de Fibonacci de:</h1>
    <form method="POST" action="exercicio10.php" class="m-3">
            <input type="text" id="num1" class="form-control" name="num1" required>

            <br>
            <button type="submit" class="">Visualizar Aqui</button>
    </form>
</body>
</html>

<?php


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $num1 = isset($_POST['num1']) ? (int)$_POST['num1'] : 0;

   function fibonacci($n){
   $sequencia =[];
   $b= 0;
   $c: 1;
   while ($b <= $n) {
    $sequencia[] =$b;
    $temp = $b + $c;
    $b=$c;
    $c=temp;
   }  return $seq
   
}
$sequencia1 = fibonacci($num1);
    echo "<p>Sequência de Fibonacci até $n:<br><strong>" . implode(', ', $sequencia) . "</strong></p>";
}

?>