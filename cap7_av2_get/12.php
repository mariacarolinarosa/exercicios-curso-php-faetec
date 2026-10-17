<?php
$produtos = [
    ["id" => 1, "nome" => "God of War", "preco" => 300],
    ["id" => 2, "nome" => "Death Stranding Director's cut", "preco" => 120],
    ["id" => 3, "nome" => "Teclado para tablet", "preco" => 90],
    ["id" => 4, "nome" => "Moto EDGE 70", "preco" => 3000],
    ["id" => 5, "nome" => "Iphone 18", "preco" => 20],
    ["id" => 6, "nome" => "Powerbank 15000 mAH", "preco" => 25],
    ["id" => 7, "nome" => "PlayStation 5", "preco" => 3500],
    ["id" => 8, "nome" => "Controle Xbox Wireless", "preco" => 400],
    ["id" => 9, "nome" => "Fone de ouvido Bluetooth", "preco" => 150],
    ["id" => 10, "nome" => "Mouse Gamer RGB", "preco" => 120],
    ["id" => 11, "nome" => "Monitor Gamer 24 polegadas", "preco" => 900],
    ["id" => 12, "nome" => "Carregador USB-C", "preco" => 80]
];

$qtd_produtos = count($produtos);

$pagina = $_GET['pagina'] ?? null;
echo "funcionou ". $qtd_produtos;

if ($pagina !== null) {
    if ($pagina == 1) {
        foreach ($produtos as $p) {
            echo "<h3>Produto ". $p["id"] ."</h3>";
            echo "<p>Nome: " . htmlspecialchars($p["nome"]) . "</p>";
            echo "<p>Preço: R$ " . number_format($p["preco"], 2, ',', '.') . "</p>";
            echo "<hr>";
        }
    } else if ($pagina =="buscar"){
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
    echo "<h4>Para listagem de produtos, cole na url: <code>?pagina=listar</code></h4>";
    echo "<h4>Para buscar por ID, cole na url: <code>?pagina=buscar&id=1</code></h4>";
}

?>
