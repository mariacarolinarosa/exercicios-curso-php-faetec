<?php include "dados.php"?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Login (via GET)</h2>
    <a href="index.php">Home</a>
    <p>Use:  <code>?usuario=admin&senha=1234</code></p>
    <hr>

    <?php

    $usuario = $_GET['usuario'] ?? '';
    $senha = $_GET['senha'] ?? '';

    if (!empty($usuario) && !empty($senha)) {
        $autenticado = false;
        foreach ($usuarios as $u){
            if($u["usuario"] === $usuario && $u["senha"] === $senha){
                $autenticado = true;
            }
        }
        if ($autenticado){
            echo "<h3>Login realizado com sucesso!</h3>";
        } else{
            echo "<p style = 'color:red';>Dados inválidos</p>";
        }
    } else {
        echo "<p>Aguardando parâmetros...</p>";
    }
    ?>
</body>

</html>