<?php 

$produtos = [
    ["id" => 1, "nome" => "queijo", "preco" => 10],
    ["id" => 2, "nome" => "refigerante", "preco" => 11],
    ["id" => 3, "nome" => "ovo", "preco" => 5]
];


$id_url = $_GET['id'] ?? null;


if ($id_url !== null){
    $encontrado = false;

    foreach($produtos as $p){
        if($p["id"] == $id_url){
            
            $encontrado = true;

            echo "Produto: " . $p["nome"] . "<br>";
            echo "Preço: " . $p["preco"] . "<br>";

        }
    }

    if (!$encontrado){
        echo "Produto não encontrado.";
    }

} else{
    echo "Digite o 'id' do produto no formato: <code>?id=1</code><hr>";
}

?>