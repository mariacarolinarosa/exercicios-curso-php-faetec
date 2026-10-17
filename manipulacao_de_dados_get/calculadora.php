<?php 

$n1 = $_GET['n1'] ?? null;
$n2 = $_GET['n2'] ?? null;

if ($n1 !== null && $n2 !== null){
    $n1 = (float) $n1;
    $n2 = (float) $n2;

    echo "<h2> Resultado da Calculadora</h2>";
    echo "Soma: " . ($n1 + $n2) . "<br>";
    echo "Subtração: " . ($n1 - $n2) . "<br>";
    echo "Multiplicação: " . ($n1 * $n2) . "<br>";

    if($n2 != 0){
        echo "Divisão: " . ($n1/$n2);
    }else{
        echo "Divisão: impossível (divisão por zero)";
    }
} else{
    echo "<p> Use a URL no formato: </p>";
    echo "<code> ?n1=10&n2=5</code>";
}

?>