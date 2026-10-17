<?php

$produtos = [
    ["id" => 1, "nome" => "queijo", "categoria_id" => 1],
    ["id" => 2, "nome" => "requeijao", "categoria_id" => 1],
    ["id" => 3, "nome" => "iogurte", "categoria_id" => 1],
    ["id" => 4, "nome" => "refigerante", "categoria_id" => 2],
    ["id" => 5, "nome" => "suco", "categoria_id" => 2],
    ["id" => 6, "nome" => "agua", "categoria_id" => 2],
    ["id" => 7, "nome" => "ovo", "categoria_id" => 3]
];

$categorias = [
    ["id" => 1, "nome" => "laticinios"],
    ["id" => 2, "nome" => "bebidas"],
    ["id" => 3, "nome" => "proteinas"]
];


$categoria_url = $_GET['categoria'] ?? null;

$encontrado = false;

if ($categoria_url !== null) {
    
    $nome_categoria = "";

    foreach ($produtos as $p) {

        if ($p["categoria_id"] == $categoria_url) {

            $encontrado = true;

            foreach ($categorias as $c) {
                if ($p['categoria_id'] == $c['id']) {
                    $nome_categoria = $c['nome'];
                }
            }
            echo "Produto: " . $p["nome"] . "<br>";
            echo "Categoria: " . $nome_categoria;
            echo "<hr>";
        }
    }

    if (!$encontrado) {
        echo "Produto não encontrado. ";
    }
} else {
    echo "<h1>Listagem Geral:</h1>";
    echo "Para filtrar por categoria digite o 'id' do produto no formato: <code>?categoria=2</code><br><br>";

    $nome_categoria = "";

    foreach ($produtos as $p) {

        foreach ($categorias as $c) {
            if ($p['categoria_id'] == $c['id']) {
                $nome_categoria = $c['nome'];
            }
        }
        echo "Produto: " . $p["nome"] . "<br>";
        echo "Categoria: " . $nome_categoria;
        echo "<hr>";
    }
}
