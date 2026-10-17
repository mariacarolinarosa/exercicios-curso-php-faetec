<?php

$nome = $_GET['nome'] ?? null;

if ($nome !== null){
        echo "Bem-vindo, " . $nome;
} else{
       echo "Digite <code>?nome=note</code.";
}
?>