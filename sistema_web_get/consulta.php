<?php include "dados.php"?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Consulta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Consulta de Produtos</h2>
    <a href="index.php">Home</a>

    <?php
    $id = $_GET['id'] ?? null;
    
    $encontrado = false;
    //Filtro por id
    if ($id !== null){
        foreach ($produtos as $p){
            if($p["id"] == $id){
                $categoria_nome = "Desconhecida";
                
                foreach($categorias as $c){
                    if($p["categoria_id"] == $c["id"]){
                        $categoria_nome = $c["nome"];
                    }
                }
                echo "<h3>Produtos</h3>";
                echo "<p>Nome: " . htmlspecialchars($p["nome"]) . "</p>";
                echo "<p>Preço: R$ " . number_format($p["preco"], 2, ',', '.' ) . "</p>";
                echo "<p>Categoria: " . htmlspecialchars($categoria_nome) . "</p>";
                echo "<hr>";

                $encontrado = true;
            }
        }
        if(!$encontrado){
            echo "<p style = 'color:red';>Produto não encontrado. </p>";
        }
    } else{
        echo "<p>Para filtrar por Produtos use: <code>?id=1</code></p>";
    }

    //Filtro por nome
    $nome_url = $_GET['nome'] ?? null;

    if ($nome_url !== null){
        foreach ($produtos as $p){
            if($p["nome"] == $nome_url){
                $categoria_nome = "Desconhecida";
                
                foreach($categorias as $c){
                    if($p["categoria_id"] == $c["id"]){
                        $categoria_nome = $c["nome"];
                    }
                }
                echo "<h3>Produto</h3>";
                echo "<p>Nome: " . htmlspecialchars($p["nome"]) . "</p>";
                echo "<p>Preço: R$ " . number_format($p["preco"], 2, ',', '.' ) . "</p>";
                echo "<p>Categoria: " . htmlspecialchars($categoria_nome) . "</p>";
                echo "<hr>";
                $encontrado = true;
            }
        }
        if(!$encontrado){
            echo "<p style = 'color:red';>Nome não encontrado. </p>";
        }
    } else{
        echo "<p>Para filtrar por nome use: <code>?nome=note</code></p>";
    }
    ?>
</body>

</html>