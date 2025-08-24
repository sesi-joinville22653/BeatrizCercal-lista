<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 20 - Formulário de Login</title>
</head>

<body>
    <h1 style="position: relative; left:10px">Comparar Usuário e Senha com valores fixos</h1>
    <form method="POST" action="exercicio20.php" class="m-3">
            <input type="text" id="user" class="form-control" name="user" placeholder="Nome" required>
            <input type="text" id="password" class="form-control" name="senha" placeholder="Senha" required>


            <br>
            <button type="submit" class="">Comparar Aqui</button>
    </form>
</body>
</html>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = isset($_POST['user']) ? (String)$_POST['user'] : 0;
    $password = isset($_POST['password']) ? (String)$_POST['password'] : 0;

    function verificarLogin($user, $password) {
        $usuarioValido = "valor";
        $senhaValida = "valor";
        return $user === $usuarioValido && $password === $senhaValida;
    }

    echo "<p style='position: relative; left:20px'>" . (verificarLogin($user, $password) ? "Login efetuado com sucesso" : "Tente Novamente.") . ".</p>";
}

?>