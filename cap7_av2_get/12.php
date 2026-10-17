<?php

//Paginação 

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

$lista_parcial = [];

if($pagina !== null){
    if($pagina == 1){
        $lista_parcial =  array_slice($produtos, 0, 4);
        echo "<h3>Página 1 " ."</h3>";
        foreach ($lista_parcial as $p) {
            echo "<p>ID: " . htmlspecialchars($p["id"]) . "</p>";
            echo "<p>Nome: " . htmlspecialchars($p["nome"]) . "</p>";
            echo "<p>Preço: R$ " . number_format($p["preco"], 2, ',', '.') . "</p>";
            echo "<hr>";
        }
    } else if($pagina == 2){
        $lista_parcial =  array_slice($produtos, 4, 4);
        echo "<h3>Página 2 " ."</h3>";
        foreach ($lista_parcial as $p) {
            echo "<p>ID: " . htmlspecialchars($p["id"]) . "</p>";
            echo "<p>Nome: " . htmlspecialchars($p["nome"]) . "</p>";
            echo "<p>Preço: R$ " . number_format($p["preco"], 2, ',', '.') . "</p>";
            echo "<hr>";
        }
    } else if ($pagina == 3){
        $lista_parcial =  array_slice($produtos, 8, 4);
        echo "<h3>Página 3 " ."</h3>";
        foreach ($lista_parcial as $p) {
            echo "<p>ID: " . htmlspecialchars($p["id"]) . "</p>";
            echo "<p>Nome: " . htmlspecialchars($p["nome"]) . "</p>";
            echo "<p>Preço: R$ " . number_format($p["preco"], 2, ',', '.') . "</p>";
            echo "<hr>";
        }
    } else{
        echo "O sistema possui 3 páginas apenas. ";
    }
} else{
    echo "Insira na url<code>?pagina=2 ou ?pagina=1</code>";
}



?>
