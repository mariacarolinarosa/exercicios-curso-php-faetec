<?php 
$nome = $_GET['nome'] ?? ''; //se o valor da esquerda não for válido, atribui o da direita: direita
$idade = $_GET['idade'] ?? ''; 

if(!empty($nome) && $idade > 0){
    echo "Dados válidos recebidos.";
    } else{
        echo "Dados válidos recebidos.";
}
?> 