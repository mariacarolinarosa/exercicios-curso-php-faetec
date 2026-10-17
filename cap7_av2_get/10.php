<?php
//Filtro na url por ação 

$produtos = [
    ["id" => 1, "nome" => "God of War", "preco" => 300],
    ["id" => 2, "nome" => "Death Stranding Director's cut", "preco" => 120],
    ["id" => 3, "nome" => "Teclado para tablet", "preco" => 90],
    ["id" => 4, "nome" => "Moto EDGE 70", "preco" => 3000],
    ["id" => 5, "nome" => "Iphone 18", "preco" => 20],
    ["id" => 6, "nome" => "Powerbank 15000 mAH", "preco" => 25]
];

$acao = $_GET['acao'] ?? null;

if ($acao !== null) {
    if ($acao == "listar") {
        foreach ($produtos as $p) {
            echo "<h3>Produto ". $p["id"] ."</h3>";
            echo "<p>Nome: " . htmlspecialchars($p["nome"]) . "</p>";
            echo "<p>Preço: R$ " . number_format($p["preco"], 2, ',', '.') . "</p>";
            echo "<hr>";
        }
    } else if ($acao =="buscar"){
        $id_url = $_GET['id'] ?? null;
        if($id_url !== null){
            foreach($produtos as $p){
                if($p["id"] == $id_url){
                    echo "<h3>Produto encontrado: </h3>";
                    echo "<p>Nome: " . htmlspecialchars($p["nome"]) . "</p>";
                    echo "<p>Preço: R$ " . number_format($p["preco"], 2, ',', '.') . "</p>";
                }
            }
        } else{
            echo "Você precisa digitar o id do produto. ";
        }
    }
} else{
    echo "<h4>Para ordenar os produtos por preço, cole na url: <code>?ordem=preco</code></h4>";
    echo "<h4>Para ordenar os produtos por nome, cole na url: <code>?ordem=nome</code></h4>";
}
