<?php

$usuarios = [
    ["usuario" => "admin", "senha" => "1234"],
    ["usuario" => "maria", "senha" => "abcd"]
];

$usuario = $_GET['usuario'] ?? '';
$senha = $_GET['senha'] ?? '';

if (!empty($usuario) && !empty($senha)) {
    
    $autenticado = false;

    foreach ($usuarios as $u) {
        if ($u["usuario"] === $usuario && $u["senha"] === $senha) {
            $autenticado = true;
        }
    }

    if ($autenticado) {
        echo "<h2>Login realizado com sucesso.</h2>";
        echo "Bem-vindo, " . htmlspecialchars($usuario);
    } else {
        echo "<p style='color:red;'>Usuário ou senha inválidos.</p>";
    }
}else{
    echo "<p>Use a URL: </p>";
    echo "<code>?usuario=admin&senha=1234</code>";
}