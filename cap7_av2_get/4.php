<?php

$texto = $_GET['texto'] ?? null;
echo "Use: <code>?texto=note</code><br>";

if ($texto !== null){
    echo "Maiúsculas: " . strtoupper($texto)."<br>";
    echo "Minúsculas: ". strtolower($texto)."<br>";
    echo "Quantidade de caracteres: " . strlen($texto);
}

?>