<?php include "dados.php" ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="index.php">Home</a>
    <?php
    //Filtro por categoria
    $categoria_url = $_GET['categoria'] ?? null;

    if ($categoria_url !== null) {
        foreach ($produtos as $p) {
            if ($p["categoria_id"] == $categoria_url) {
                $categoria_nome = "Desconhecida";

                foreach ($categorias as $c) {
                    if ($p["categoria_id"] == $c["id"]) {
                        $categoria_nome = $c["nome"];
                    }
                }
                echo "<h3>Produto</h3>";
                echo "<p>Nome: " . htmlspecialchars($p["nome"]) . "</p>";
                echo "<p>Preço: R$ " . number_format($p["preco"], 2, ',', '.') . "</p>";
                echo "<p>Categoria: " . htmlspecialchars($categoria_nome) . "</p>";
                echo "<hr>";
                $encontrado = true;
            }
        }
        if (!$encontrado) {
            echo "<p style = 'color:red';>Categoria não encontrada. </p>";
        }
    } else { //Se uma categoria não for escolhida, exibe todos os produtos:

        echo "<p>Para filtrar por categorias use: <code>?categoria=1</code></p>";
        // Como a categoria simula uma chave estrangeira que traz somente um valor numérico
        // Faz-se necessário a simulação do JOIN para descobrir o nome dela

        foreach ($produtos as $p) { //Procura a categoria de cada produto
            $categoria_nome = "Desconhecida";

            foreach ($categorias as $c) {
                if ($p["categoria_id"] == $c["id"]) {
                    $categoria_nome = $c["nome"];
                }
            }

            //Após encontrar o nome da categoria, exibe as informações do produto

            echo "<p><strong>" . htmlspecialchars($p["nome"]) . "</strong></p>";
            echo "<p> Preço: R$ " . number_format($p["preco"], 2, ',', '.') . "</p>";
            echo "<p>Categoria: " . htmlspecialchars($categoria_nome) . "</p>";

            echo "<a href='consulta.php?id=" . $p["id"] . "'>Ver mais</a>";

            echo "<hr>";
        }
    }

    ?>
</body>

</html>