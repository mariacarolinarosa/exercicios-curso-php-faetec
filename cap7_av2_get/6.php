<?php

$produtos = [
    ["id" => 1, "nome" => "queijo", "categoria_id" => 1],
    ["id" => 2, "nome" => "refigerante", "categoria_id" => 2],
    ["id" => 3, "nome" => "ovo", "categoria_id" => 3]
];

$categorias = [
    ["id" => 1, "nome" => "laticinios"],
    ["id" => 2, "nome" => "bebidas"],
    ["id" => 3, "nome" => "proteinas"]
];

$id_url = $_GET['id'] ?? null;


if ($id_url !== null) {

    $encontrado = false;
    $nome_categoria = "";

    foreach ($produtos as $p) {
        if ($p["id"] == $id_url) {
            $encontrado = true;
            foreach ($categorias as $c) {
                if ($p['categoria_id'] == $c['id']) {
                    $nome_categoria = $c['nome'];
                }
            }
            echo "Produto: " . $p["nome"] . "<br>";
            echo "Categoria: " . $nome_categoria;
        }
    }

    if (!$encontrado) {
        echo "Produto não encontrado.";
    }
} else {
    echo "Digite o 'id' do produto no formato: <code>?id=1</code><hr>";
}
