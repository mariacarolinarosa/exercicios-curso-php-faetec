<?php

$n1 = $_GET['n1'] ?? 0;
$n2 = $_GET['n2'] ?? 0;

echo "<h2>Calculadora mágica</h2>";

if($n1 == null or $n2 == null){
      echo "Digite <code>?n1=1&n2=2</code>";
} else{
      echo "Soma: " . $n1 + $n2 . "<br>";
      echo "Subtração: " . $n1 - $n2 . "<br>";
      echo "Multiplicação: " . $n1 * $n2. "<br>";
           
      if ($n2 == 0){
           echo "Não é possível realizar divisão por zero";
      } else{
           echo "Divisão: ". $n1 / $n2;
      }
}
?>