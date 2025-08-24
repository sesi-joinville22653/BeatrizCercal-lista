<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 19 - Verificação de Senha</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Insira uma senha forte para avaliação (Letras e Números)</h1>
    <form method="POST" action="exercicio19.php" class="m-3">
            <input type="text" id="password" class="form-control" name="senha" required>


            <br>
            <button type="submit" class="">Verifique Aqui</button>
    </form>
</body>
</html>

<?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $senha = $_POST['senha'];
        $forte = strlen($senha) >= 8 && preg_match('/[A-Za-z]/', $senha) && preg_match('/\d/', $senha);
        if ($forte) {
            echo "Senha forte.";
        } else {
            echo "Senha fraca.";
        }
    }
?>