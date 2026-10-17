<?php

$idade = $_GET['idade'] ?? null;

echo"Insira a idade e descubra em qual faixa etária ela está. Use: <code>?idade=1</code>"."<br><br>";

if ($idade !== null){
    echo "Idade: " . $idade . " anos". "<br>";
    echo "Faixa etária: ";
    if($idade >= 0 && $idade <= 12){
        echo "Idade 0–12 → Criança";
    } else if ($idade >= 13 && $idade <=17){
        echo "13–17 → Adolescente.";
    }else if ($idade >= 18){
        echo "18+ → Adulto.";
    } else{
        echo "Insira um número inteiro maior ou igual a zero.";
    }
}
?>