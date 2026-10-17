<?php

//8

$produtos = [
    ["id" => 1, "nome" => "queijo", "categoria_id" => 1, "preco" => 11],
    ["id" => 2, "nome" => "requeijao", "categoria_id" => 1, "preco" => 12],
    ["id" => 3, "nome" => "iogurte", "categoria_id" => 1, "preco" => 12],
    ["id" => 4, "nome" => "refigerante", "categoria_id" => 2, "preco" => 11],
    ["id" => 5, "nome" => "suco", "categoria_id" => 2, "preco" => 10],
    ["id" => 6, "nome" => "agua", "categoria_id" => 2, "preco" => 9],
    ["id" => 7, "nome" => "ovo", "categoria_id" => 3, "preco" => 6]
];

$categorias = [
    ["id" => 1, "nome" => "laticinios"],
    ["id" => 2, "nome" => "bebidas"],
    ["id" => 3, "nome" => "proteinas"]
];


$id_url = $_GET['id'] ?? null;
$nome_url = $_GET['nome'] ?? null;
$um_encontrado = false;

if ($id_url !== null || $nome_url !== null) {
    foreach ($produtos as $produto) {
        $encontrado = false;

        if ($id_url !== null && $produto['id'] == $id_url) {
            $encontrado = true;
            $um_encontrado = true;
        }

        if ($nome_url !== null && (stripos($produto["nome"], $nome_url) !== false)) {
            $encontrado = true;
            $um_encontrado = true;
        }

        if ($encontrado) {
            foreach ($categorias as $c) {
                //buscar categoria
                if ($produto["categoria_id"] == $c["id"]) {
                    $nome_categoria = $c["nome"];
                    echo "<p>Produto: " . $produto["nome"] . "</p>";
                    echo "<p>Preço: R$ " . $produto["preco"] . "</p>";
                    echo "<p>Categoria: " . $nome_categoria . "</p>";
                    echo "<hr>";
                }
            }
        }
    }
    if (!$um_encontrado) {
        echo "<h3>Produto não encontrado.</h3>";
        echo "Use <code>?id=1</code><br> para pesquisar o produto pelo ID:";
        echo "Use: <code>?nome=note</code> para pesquisar o produto pelo nome ou parte dele";
    }
} else{
    echo "Use <code>?id=1</code> para pesquisar o produto pelo ID." . "<br>";
    echo "Use: <code>?nome=note</code> para pesquisar o produto pelo nome ou parte dele";
}
