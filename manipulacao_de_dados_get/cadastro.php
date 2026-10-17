<?php 

$nome = $_GET['nome'] ?? '';
$email = $_GET['email'] ?? '';

if (!empty($nome) && !empty($email)){
    echo "<h2> Cadastro Realizado</h2>";
    echo "Nome: " .htmlspecialchars($nome) . "<br>";
    echo "Email: " .htmlspecialchars($email) . "<br>";
} else{
    echo "<p>Informe os dados na URL: </p>";
    echo "<code>?nome=Maria&email=maria@email.com</code>";
}

?>