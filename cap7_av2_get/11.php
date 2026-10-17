<?php
//Ordenação

$produtos = [
    ["id" => 1, "nome" => "God of War", "preco" => 300],
    ["id" => 2, "nome" => "Death Stranding Director's cut", "preco" => 120],
    ["id" => 3, "nome" => "Teclado para tablet", "preco" => 90],
    ["id" => 4, "nome" => "Moto EDGE 70", "preco" => 3000],
    ["id" => 5, "nome" => "Iphone 18", "preco" => 20000],
    ["id" => 6, "nome" => "Powerbank 15000 mAH", "preco" => 150]
];

$ordem = $_GET['ordem'] ?? null;

if ($ordem !== null) { //ordenação por preço
    $produtos_copia = $produtos;
    if ($ordem == "preco") {
        usort($produtos_copia, function ($a, $b) {
            return $a['preco'] <=> $b['preco'];
        });
        echo "<h3>Ordem crescente </h3>";

        foreach ($produtos_copia as $pc) {
            echo "<p>Nome: " . htmlspecialchars($pc["nome"]) . "</p>";
            echo "<p>Preço: R$ " . number_format($pc["preco"], 2, ',', '.') . "</p>";
            echo "<hr>";
        }
    } else if ($ordem == "nome") {
        usort($produtos_copia, function ($a, $b) {
            return $a['nome'] <=> $b['nome'];
        });
        echo "<h3>Ordem crescente </h3>";

        foreach ($produtos_copia as $pc) {
            echo "<p>Nome: " . htmlspecialchars($pc["nome"]) . "</p>";
            echo "<p>Preço: R$ " . number_format($pc["preco"], 2, ',', '.') . "</p>";
            echo "<hr>";
        }
    } else {
        echo "<h4>Para ordenar os produtos por preço, cole na url: <code>?ordem=preco</code></h4>";
        echo "<h4>Para ordenar os produtos por nome, cole na url: <code>?ordem=nome</code></h4>";
    }
}
